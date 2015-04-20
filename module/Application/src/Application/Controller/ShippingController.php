<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Zend\Json\Json;
use Application\Form\ImageForm;
use Zend\Session\Container;
use Zend\ViewModel\JsonModel;
use Zend\Db\Sql\Sql;
use Zend\Db\Adapter\Adapter;
use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Config\StandardConfig;
use Zend\Session\SessionManager;
use Application\Model\shippingDetails;
use Application\Model\shippingDetailsTable;

use Zend\Mail;
use Zend\Mail\Message;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;
/**
* ShippingController
*
* @author
*
* @version
*
*/
class ShippingController extends AbstractActionController {
    /**
    * The default action - show the home page
    */
    
    protected $shippingDetailsTable; 
    
    
    public function indexAction()
    {
    }
    
    public function idealAction()
    {
    	$userId = new Container('uid');
    	$uid = $userId->offsetGet('uid');
    	
    	$cName     = $_POST['companyName'];
    	$firstName = $_POST['firstName'];
    	$lastName  = $_POST['lastName'];
    	$email     = $_POST['email'];
    	$phone     = $_POST['phone'];
    	$address   = $_POST['address'];
    	$zipcode   = $_POST['zipcode'];
    	$bankVal   = $_POST['bankVal'];
    	$price     = $_POST['price'];
    	$tName     = $_POST['tempName'];
    	
    	$data = array(
    		'userId'      => $uid,
    		'templateName' => $tName,
            'companyName' => $cName,
            'firstName'   => $firstName,
            'lastName'    => $lastName,
            'email'       => $email,
            'phone'       => $phone,
            'address'     => $address,
            'zipcode'     => $zipcode,
    		'totalSum'    => $price
        );
    	
    	$saveShippingDetails   = $this->getshippingDetailsTable()->saveDetails($data);
    	echo $saveShippingDetails;
    	exit;
    }
    
    public function paymentAction()
    {
    	$protocol = '';
    	
    	if (isset($_SERVER['HTTPS']) &&
    			($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    			isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    			$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'HTTPS') {
    		$protocol = 'https://';
    	}
    	else {
    		$protocol = 'http://';
    	}
    	
    	$dynamicPath = $protocol.$_SERVER["SERVER_NAME"];
    	
    	$testPath    = $this->getServiceLocator()->get('Config');
    	$tempName    = $this->getEvent()->getRouteMatch()->getParam('id');
    	$bankVal     = $this->getEvent()->getRouteMatch()->getParam('pId');
    	
    	$userId = new Container('uid');
    	$uid = $userId->offsetGet('uid');
    	
    	$issuerID    = explode("||",$bankVal);
    	$bankCode = 99;    	
    	
    	$merchantId  = $testPath['payment']['merchantId'];
    	$merchantKey = $testPath['payment']['merchantKey'];
    	$shopId      = $testPath['payment']['shopId'];
    	$apikey      = $testPath['payment']['apiKey'];//'SFP_Encryption_Key_Is_Here';
    	$chksum      = SHA1($issuerID[0].$apikey);
    	
    	/*if($chksum != $issuerID[1])
    	{
    		echo "0";
    		exit;
    	}*/
    	
        
        $rowId   = $this->getorderIdTable()->fetchData();
    	$orderID = 70000 + ($rowId->id);
    	$id      = $orderID;
    	//echo $id;exit;
    	$data = array('value'=>$orderID,'userId'=>$uid);
    	$orderInsert   = $this->getorderIdTable()->saveData($data);
    	$getPrice = $this->getshippingDetailsTable()->getPrice($uid,$tempName);
    	
    	//echo $getPrice->totalSum;exit;
    	
    	$cost = $getPrice->totalSum;
    	if($cost == '0' || $cost == '')
    	{
    		$cost = 0;
    	}
    	else 
    	{
    		$cost = $getPrice->totalSum;
    	}
    	
    	
    	$successURL = $dynamicPath."/Shipping/success";
    	$cancelURL = $dynamicPath."/Shipping/cancel";
    	$callbackURL = $dynamicPath."/Shipping/callback";
    	$notifyurl = $dynamicPath."/Shipping/notify";
    	
    	
    	$chksum = SHA1($orderID.$orderID.$cost.$shopId.$merchantId.$merchantKey);
    	$response = "https://www.sisow.nl/Sisow/iDeal/RestHandler.ashx/TransactionRequest?shopid=".$shopId."&merchantID=".$merchantId."&payment=&PurchaseId=".$orderID."&amount=".$cost."&issuerID=".$bankCode."&entranceCode=".$orderID."&returnurl=".$successURL."&cancelurl=".$cancelURL."&callbackurl=".$callbackURL."&notifyurl=".$notifyurl."&sha1=".$chksum."&description=Bestelling&notify=true&callback=true";
    	
    	//echo $response;exit;
    	
    	$ch = curl_init();
    	
    	// define options
    	$optArray = array(
    			CURLOPT_URL => $response,
    			CURLOPT_RETURNTRANSFER => true
    	);
    	
    	// apply those options
    	curl_setopt_array($ch, $optArray);
    	
    	// execute request and get response
    	$result = curl_exec($ch);
    	
    	$result1  = simplexml_load_string($result);
    	
    	//print_r($result1);exit;
    	$redirecturlOfPaymentPage = urldecode($result1->transaction->issuerurl);
    	$this->redirect()->toUrl($redirecturlOfPaymentPage);
    	
    	$viewModel = new ViewModel();
    	$viewModel->setTerminal(true);
    	return $viewModel;
    }
    
    public function successAction()
    {
    	$protocol = '';
    	
    	if (isset($_SERVER['HTTPS']) &&
    			($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    			isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    			$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'HTTPS') {
    		$protocol = 'https://'; 
    	}
    	else {
    		$protocol = 'http://';
    	}
    	
    	$dynamicPath = $protocol.$_SERVER["SERVER_NAME"];
	
    	$userId = new Container('uid');
    	$uid    = $userId->offsetGet('uid');

    	$transactionID = $_GET['trxid'];
    	$status        = $_GET['status'];
    	 
    	$getTrasactionStat = $this->gettransactionDetailsTable()->getStatus($uid,$transactionID);
    	
    	if($getTrasactionStat != 0)
    	{
    		if($getTrasactionStat->status == $status)
    		//echo $uid;exit;
    		$tempDetails = $this->getuserTemplateTable()->selectUserdet($uid);
    		 
    		$tempName    = $tempDetails->template_link;
    		$camName     = $tempDetails->new_template_name;
    		$camNo       = $tempDetails->campaign_number;
    		$fbName      = 'pageTab';
    		$fbPageId    = $tempDetails->pageId;
    		$pageToken   = $tempDetails->pageAccessToken;
    		$fbNo        = $tempDetails->facebook_number;
    		
    		$webUrl = $tempDetails->webUrl;
    		$fbUrlD = $dynamicPath."/facebook/pageTab/".$fbNo;
    	}
    	else
    	{
    		$this->redirect()->toRoute('application/default',array('controller'=>'shipping','action'=>'cancel'));
    	}
    	
    	
    	//echo $webUrl. " &&&& ".$fbUrlH;exit;
    	
    	$viewModel= new ViewModel(array('webUrl'=>$webUrl,'fbUrlD'=>$fbUrlD,'fbUrlH'=>$fbUrlH,'pageAccessToken'=>$pageToken,'fbPageId'=>$fbPageId,'camName'=>$camName,'tempName'=>$tempName,'fbNo'=>$fbNo));
    	$viewModel->setTerminal(true);
    	
    	return $viewModel;
    	
    }
    
    public function callbackAction()
    {
    	
    }
    
    public function notifyAction()
    {
    	$transactionID = $_GET['trxid'];
    	 
    	$testPath    = $this->getServiceLocator()->get('Config');
    	 
    	$merchantId  = $testPath['payment']['merchantId'];
    	$merchantKey = $testPath['payment']['merchantKey'];
    	$shopId      = $testPath['payment']['shopId'];
    	$apikey      = $testPath['payment']['apiKey'];//'SFP_Encryption_Key_Is_Here';
    	 
    	
    	$chksum = SHA1($transactionID.$shopID.$merchantId.$merchantKey);
    	
    	$requestUrl ='https://www.sisow.nl/Sisow/iDeal/RestHandler.ashx/StatusRequest?trxid='.$transactionID.'&shopid='.$shopID.'&merchantID='.$merchantId.'&sha1='.$chksum;
    	
    	
    	$ch = curl_init();
    	 
    	$optArray = array(
    			CURLOPT_URL => $requestUrl,
    			CURLOPT_RETURNTRANSFER => true
    	);
    	curl_setopt_array($ch, $optArray);
    	$result = curl_exec($ch);
    	$sisowSuccessResult1  = simplexml_load_string($result);
    	 
    	$OrderID = $sisowSuccessResult1->transaction->purchaseid;
    	$trxid = $sisowSuccessResult1->transaction->trxid;
    	$status = $sisowSuccessResult1->transaction->status;
    	$amount = $sisowSuccessResult1->transaction->amount;
    	$description = $sisowSuccessResult1->transaction->description;
    	$entrancecode = $sisowSuccessResult1->transaction->entrancecode;
    	$issuerid = $sisowSuccessResult1->transaction->issuerid;
    	$timestamp = $sisowSuccessResult1->transaction->timestamp;
    	$consumername = $sisowSuccessResult1->transaction->consumername;
    	$consumeraccount = $sisowSuccessResult1->transaction->consumeraccount;
    	$consumercity = $sisowSuccessResult1->transaction->consumercity;
    	$consumeriban = $sisowSuccessResult1->transaction->consumeriban;
    	$consumerbic = $sisowSuccessResult1->transaction->consumerbic;
    	 
    	$sha1 = $sisowSuccessResult1->signature->sha1;
    	
    	$chk = SHA1($trxid.$status.$amount.$OrderID.$entrancecode.$consumeraccount.$merchantId.$merchantKey);
    	
    	$rowId   = $this->getorderIdTable()->fetchUserId($OrderID);
    	$uid     = $rowId->userId;
    	if(strtolower($_GET['status']) != 'success') {
    		exit ;
    	}
    	if(strtolower($status) != 'success') {
    		exit ;
    	}
    	//echo $OrderID;exit;
    	if($chk == $sha1)
    	{
    		$data = array(
    				'userId' => $uid,
    				'orderId' => $OrderID,
    				'trsxId' => $trxid,
    				'status' => $status,
    				'amount' => $amount,
    				'description' => $description,
    				'entrancecode' => $entrancecode,
    				'issuerId' => $issuerid,
    				'timestamp' => $timestamp,
    				'consumerName' => $consumername,
    				'consumerAccount' => $consumeraccount,
    				'consumerCity' => $consumercity,
    				'consumerIban' => $consumeriban,
    				'consumerBic' => $consumerbic,
    				'completed'      => 1 
    			);


    		 
    		$saveTransactionDetails = $this->gettransactionDetailsTable()->saveDetails($data);
    		
    		if($saveTransactionDetails != 0)
    		{
    			$tempDetails = $this->getuserTemplateTable()->selectUserdet($uid);
    			$templateName= $tempDetails->template_link;
    			$tempName    = $tempDetails->template_link;
    			$camName     = $tempDetails->new_template_name;
    			$camNo       = $tempDetails->campaign_number;
    			$fbName      = 'pageTab';
    			$fbPageId    = $tempDetails->pageId;
    			$pageToken   = $tempDetails->pageAccessToken;
    			$fbNo        = $tempDetails->facebook_number;
    			
    			if($tempDetails->webUrl)
    			{
    				if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName) ) {
    					$oldmaskRoot = umask(0);
    					mkdir($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName, 0777);
    					umask($oldmaskRoot);
    					 
    					if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo) ) {
    						$oldmaskSub = umask(0);
    						mkdir($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo, 0777);
    						umask($oldmaskSub);
    					}
    			
    					$this->full_copy( $_SERVER['DOCUMENT_ROOT']."/tempName/index.php", $_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo."/index.php" );
    				}
    				else
    				{
    					if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo) ) {
    						$oldmaskSub = umask(0);
    						mkdir($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo, 0777);
    						umask($oldmaskSub);
    					}
    					 
    					$this->full_copy( $_SERVER['DOCUMENT_ROOT']."/tempName/index.php", $_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo."/index.php" );
    				}
    			}
    			 
    			if($tempDetails->fbPage)
    			{
    				if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/facebook/".$fbName) ) {
    					$oldmaskRoot = umask(0);
    					mkdir($_SERVER['DOCUMENT_ROOT']."/facebook/".$fbName, 0777);
    					umask($oldmaskRoot);
    					 
    					if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/facebook/".$fbName."/".$fbNo) ) {
    						$oldmaskSub = umask(0);
    						mkdir($_SERVER['DOCUMENT_ROOT']."/facebook/".$fbName."/".$fbNo, 0777);
    						umask($oldmaskSub);
    					}
    					 
    					 
    					$this->full_copy( $_SERVER['DOCUMENT_ROOT']."/tempName/index1.php", $_SERVER['DOCUMENT_ROOT']."/facebook/".$fbName."/".$fbNo."/index.php" );
    					 
    				}
    				else
    				{
    					if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/facebook/".$fbName."/".$fbNo) ) {
    						$oldmaskSub = umask(0);
    						mkdir($_SERVER['DOCUMENT_ROOT']."/facebook/".$fbName."/".$fbNo, 0777);
    						umask($oldmaskSub);
    					}
    					 
    					$this->full_copy( $_SERVER['DOCUMENT_ROOT']."/tempName/index1.php", $_SERVER['DOCUMENT_ROOT']."/facebook/".$fbName."/".$fbNo."/index.php" );
    				}
    			}
    			
    			$published = 1;
    			$pubDate = date("d/m/Y");
    			
    			
    			
    			$data = array('published'=> $published, 'pub_Date'=>$pubDate);
    			$savePubDate = $this->getuserTemplateTable()->updateUserCheck($data,$uid,$templateName);
    			 
    			$message = new Message();
    			$message->addTo("poulami@delgence.com")
    			->addFrom('info@smartfanpage.com')
    			->setSubject('Greetings and Salutations!')
    			->setBody("TRANSACTION SAVED : ".$saveTransactionDetails." & COMPLETE AND PUBLISHED ".$savePubDate);
    			$smtpOptions = new \Zend\Mail\Transport\SmtpOptions();
    			
    			$smtpOptions->setHost('smtp.mandrillapp.com')
    			->setConnectionClass('login')
    			->setName('smtp.mandrillapp.com')
    			->setConnectionConfig(array(
    					'username' => 'info@smartfanpage.com',
    					'password' => 'fv7M_K1TFO9LgCaEdIVhgw',
    					'ssl' => 'tls',
    					'port'=>587,
    			));
    			
    			$transport = new \Zend\Mail\Transport\Smtp($smtpOptions);
    			$transport->send($message);
    		}
    	}
    	else
    	{
    		echo 0;
    	}

    }
    
    public function cancelAction()
    {
    	
    	
    	
    	
    	$viewModel= new ViewModel();
    	$viewModel->setTerminal(true);
    	 
    	return $viewModel;
    }
    
	/*********** function to copy folder ********/
    public	function full_copy( $source, $target )
    {
    
    	if ( is_dir( $source ) )
    	{
    
    		@mkdir( $target, 0777,true );
    		$d = dir( $source );
    		while ( FALSE !== ( $entry = $d->read() ) )
    		{
    			if ( $entry == '.' || $entry == '..' )
    			{
    				continue;
    			}
    			$Entry = $source . '/' . $entry;
    			if ( is_dir( $Entry ) )
    			{
    				$this->full_copy( $Entry, $target . '/' . $entry );
    				continue;
    			}
    			//echo "source : ".$source." target :".$entry."<br>";
    			copy( $Entry, $target . '/' . $entry );
    		}
    		$d->close();
    	}
    	else
    	{
    		copy( $source, $target );
    	}
    }
	
    /******************* MODELS FOR  TABLE *********************/
    public function getshippingDetailsTable()
    {
    	if (!$this->shippingDetailsTable) {
    		$sm = $this->getServiceLocator();
    		$this->shippingDetailsTable = $sm->get('Application\Model\shippingDetailsTable');
    	}
    	return $this->shippingDetailsTable;
    }
    
    public function getorderIdTable()
    {
    	if (!$this->orderIdTable) {
    		$sm = $this->getServiceLocator();
    		$this->orderIdTable = $sm->get('Application\Model\orderIdTable');
    	}
    	return $this->orderIdTable;
    }
    
    public function gettransactionDetailsTable()
    {
    	if (!$this->transactionDetailsTable) {
    		$sm = $this->getServiceLocator();
    		$this->transactionDetailsTable = $sm->get('Application\Model\transactionDetailsTable');
    	}
    	return $this->transactionDetailsTable;
    }
    
    public function getuserTemplateTable()
    {
    	if (!$this->userTemplateTable) {
    		$sm = $this->getServiceLocator();
    		$this->userTemplateTable = $sm->get('Application\Model\userTemplateTable');
    	}
    	return $this->userTemplateTable;
    }
    
}    

?>    
