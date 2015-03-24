<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Developer;
use Application\Model\Template;
use Application\Model\promote;
use Application\Model\screenshots;
use Application\Model\createapp;
use Application\Model\fbuser;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Mail;
use Zend\Mail\Message;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;
use Application\Form\DForm;
use Application\Form\forgetpasswordForm;
use Application\Form\UploadForm;
use Zend\Session\Container;
use Zend\Http\PhpEnvironment\Request;

class sfpdeveloperController extends AbstractActionController
{
  protected $developerTable,$promoteTable,$screenshotsTable,$userTemplateTable,$fbuserTable;  
public function indexAction()
{
$user_session = new Container('devId');
    $sid = $user_session->offsetGet('devId');

	if($sid == NULL || $sid == '')
	{
   		$this->layout('layout/layout5.phtml'); 
	}   
	else
	{ 
		$encryptedId =$this->encrypt_decrypt('encrypt', $sid);
		$developerPassedId =str_replace("/","encoded",$encryptedId);
		$this->redirect()->toRoute('application/default',array('controller'=>'sfpdeveloper','action'=>'dashboard','id'=>$sid."|".$developerPassedId));
	}    
}
 
public function devloginAction()
{
	$user_session = new Container('devId');
    $sid = $user_session->offsetGet('devId');

	if($sid == NULL || $sid == '')
	{
   		$this->layout('layout/layout5.phtml'); 
	}   
	else
	{
		$encryptedId =$this->encrypt_decrypt('encrypt', $sid);
		$developerPassedId =str_replace("/","encoded",$encryptedId);
		$this->redirect()->toRoute('application/default',array('controller'=>'sfpdeveloper','action'=>'dashboard','id'=>$developerPassedId));
	}   
}

    public function loginsuccessAction()
    { 
        $uname = $_POST['user'];
        $pwd = $_POST['pass'];
        
        $pwds = $this->encrypt_decrypt('encrypt', $pwd);
   
        $result = $this->getDeveloperTable()->getDev($uname,$pwds);
        
        if($result != "")
        {
        	if($result->stepsCompleted == 'Thirdstep')
        	{
		        $user_session = new Container('devId');
		        $user_session->devId= $result->id;
		        $encryptedId =$this->encrypt_decrypt('encrypt', $result->id);
		        $developerPassedId =str_replace("/","encoded",$encryptedId);
		        echo "1"."||".$result->id."||".$developerPassedId;	
        	}
        }
        else
        { 
	        $result1 = $this->getDeveloperTable()->getDevEmail($uname,$pwds);
	        if($result1 != "")
	        {
	        	if($result->stepsCompleted == 'Thirdstep')
	        	{
			        $user_session = new Container('devId');
			        $user_session->devId= $result1->id;
			        $encryptedId =$this->encrypt_decrypt('encrypt', $result->id);
		        	$developerPassedId =str_replace("/","encoded",$encryptedId);
		       
		        	echo "1"."||".$result->id."||".$developerPassedId;
	        	}
	        }
	        else
	        {
	          echo "0";   
	        }
	       
            
        }
            
       exit; 
    }//path tested by dibyendu

public function devregisterAction()
{
      $this->layout('layout/layout5.phtml');
      $devid = $this->getEvent()->getRouteMatch()->getParam('id');
      $devId = urldecode($devid);
      $explodedDeveloperDetails = explode("|",$devId);
      $developerId= $explodedDeveloperDetails[0];
      $developerIdEncrypted = $explodedDeveloperDetails[1];
      
      $encryptedDeveloperId =  $this->encrypt_decrypt('encrypt', $developerId);
      //echo "<br/>";
      $originalDeveloperEncryptedId = str_replace("encoded","/",$developerIdEncrypted);
      $originalDeveloperEncryptedId = str_replace(" ","+",$originalDeveloperEncryptedId);
      
       if($developerId!="")
       {
       	if($originalDeveloperEncryptedId == $encryptedDeveloperId)
       	{
        $result = $this->getDeveloperTable()->getDeveloperWithId($developerId); 
        
        $pwd =  $result->pwd;
        
        
        $encryptedPass = trim($encryptedPass);
        
        return new ViewModel(array(
                    'result' => $result,'passWord'=>$encryptedPass,'developerIdEncrypted'=>$developerIdEncrypted));
       	}
       	else{
       	
       		$this->redirect()->toRoute('application/default',array('controller'=>'Error','action'=>'index'));
       	}
       }
       else
       {
        $result = "";
        return new ViewModel(array(
                    'result' => $result));
       }
       
} //path tested by dibyendu

 public function documentationAction()
    {
    
    }
    
public function dashboardAction()
{
    $devId = $this->getEvent()->getRouteMatch()->getParam('id'); 
      
    $user_session = new Container('devId');
    $sid = $user_session->offsetGet('devId');
    $devId = urldecode($devId);
    $explodedDeveloperDetails = explode("|",$devId);
    $developerId= $explodedDeveloperDetails[0];
    $developerIdEncrypted = $explodedDeveloperDetails[1];
    
    $encryptedDeveloperId =  $this->encrypt_decrypt('encrypt', $developerId);
    //echo "<br/>";
    $originalDeveloperEncryptedId = str_replace("encoded","/",$developerIdEncrypted);
    $originalDeveloperEncryptedId = str_replace(" ","+",$originalDeveloperEncryptedId);
 
    if($originalDeveloperEncryptedId == $encryptedDeveloperId)
    {
    $result = $this->getDeveloperTable()->getDeveloperWithId($developerId); 
    $results = $this->getTemplateTable()->getTemplate($developerId);
    $developerIdEncrypted =  $this->encrypt_decrypt('encrypt', $sid); //added by dibyendu
    $developerParameter =str_replace("/","encoded",$developerIdEncrypted);//added by dibyendu
    
    if($sid == "")
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'sfpdeveloper','action'=>'devlogin'));
    }
    /*else if($sid != $devId)
    {
    	$this->redirect()->toRoute('application/default',array('controller'=>'sfpdeveloper','action'=>'dashboard','id'=>$sid));
    }*/
    else
    {
    	//print_r( $results['result']);exit;
        $this->layout('layout/layout5.phtml'); 
                 
        foreach ($results['result'] as $res){
        	$holdItemplateId ="";
        	$holdItemplateId = $this->encrypt_decrypt('encrypt', $res->id);
        	$holdItemplateId = str_replace("/","encoded",$holdItemplateId);
        	//print_r($res);exit;
        	$array[] = array(
        			'tempFoldName' => $res->tempFoldName,
        			'scImage' => $res->scImage,
        			'templateDesc'=>$res->templateDesc,
        			'tempid'=> $res->id,
        			'templateDesc'=>$res->templateDesc,
        			'templateName'=>$res->templateName,
        			'encryptedTempid'=> $holdItemplateId,
        			'autometic_review' => $res->autometic_review,
        			'approval' => $res->approval,
        			 
        	);
        }
        return new ViewModel(array(
        		'result' => $result,
        		//'templates' => $results['result'],
        		'count'=>$results['count'],
        		'sid' => $sid,
        		'encryptedSid'=>$developerParameter, //added by dibyendu
        		'templates'=>$array,
        ));
    }
    }
    else{
    
    	$this->redirect()->toRoute('application/default',array('controller'=>'Error','action'=>'index'));
    }  
}//path tested by dibyendu 

public function devreg1Action()
{
     
     $this->layout('layout/layout5.phtml');
     $devid = $this->getEvent()->getRouteMatch()->getParam('id'); 
     $devid = urldecode($devid);
     $explodedDeveloperDetails = explode("|",$devid);
     $developerId= $explodedDeveloperDetails[0];
     $developerIdEncrypted = $explodedDeveloperDetails[1];
     
     $encryptedDeveloperId =  $this->encrypt_decrypt('encrypt', $developerId);
     //echo "<br/>";
     $originalDeveloperEncryptedId = str_replace("encoded","/",$developerIdEncrypted);
     $originalDeveloperEncryptedId = str_replace(" ","+",$originalDeveloperEncryptedId);
     if($encryptedDeveloperId == $originalDeveloperEncryptedId)
     {
     	
     $companyType=$this->getcompanyDetailsTable()->fetchAll();
     $CountryList=$this->getcountryDetailsTable()->fetchAll();
       if($developerId!="")
       {
       	$encryptedDeveloperId =str_replace("/","encoded",$encryptedDeveloperId);
        $result = $this->getDeveloperTable()->getDeveloperWithId($developerId); 
        return new ViewModel(array(
                    'devId' => $developerId,
        		    'encryptedDeveloperId'=>$encryptedDeveloperId,
                    'result' => $result,
                    'companyType'=>$companyType,
                    'CountryList'=>$CountryList));
       }
       else
       {
        $result = "";
        $encryptedDeveloperId =str_replace("/","encoded",$encryptedDeveloperId);
        return new ViewModel(array(
                    'result' => $result,
        			'encryptedDeveloperId'=>$encryptedDeveloperId,
                    'companyType'=>$companyType,
                    'CountryList'=>$CountryList));
       }
     }
     else {
     	$this->redirect()->toRoute('application/default',array('controller'=>'Error','action'=>'index'));
     	
     }
     
} //path tested by dibyendu 

public function devlogoutAction()
{
     $user_session->devId=($_SESSION['devId']);
        $user_session = new \Zend\Session\Container('devId'); 
        $user_session->getManager()->destroy(); 
        $this->redirect()->toRoute('application/default',array('controller'=>'sfpdeveloper','action'=>'devlogin')); 
}//path tested by dibyendu 
public function promoteAction()
{
	    
	
	$devid = $this->getEvent()->getRouteMatch()->getParam('id');
	$tempid = $this->getEvent()->getRouteMatch()->getParam('pId');
	
	$devid = urldecode($devid);
	$tempid = urldecode($tempid);
	/*$explodedUrl = explode("/promote/",$url);
	$developerAndTemplate = explode("break/",$explodedUrl[1]);*/
	//*****exploded developer from url*****//  
	
	$explodedDeveloperDetails = explode("|",$devid);
	 $developerId= $explodedDeveloperDetails[0];
	$developerIdEncrypted = $explodedDeveloperDetails[1];
	
	 $encryptedDeveloperId =  $this->encrypt_decrypt('encrypt', $developerId);
	//echo "<br/>";
	 $originalDeveloperEncryptedId = str_replace("encoded","/",$developerIdEncrypted);
	 $originalDeveloperEncryptedId = str_replace(" ","+",$originalDeveloperEncryptedId); 
	
	//*****exploded template from url*****//
	
	$explodedTemplateDetails = explode("|",$tempid);
	 $templateId= $explodedTemplateDetails[0];
	
	$templateIdEncrypted = $explodedTemplateDetails[1];
	
	$encryptedTemplateId =  $this->encrypt_decrypt('encrypt', $templateId);
	
	$originalTemplateEncryptedId = str_replace("encoded","/",$templateIdEncrypted);
	$originalTemplateEncryptedId = str_replace(" ","+",$originalTemplateEncryptedId);
	
	
	if (($encryptedDeveloperId == $originalDeveloperEncryptedId ) && ($encryptedTemplateId == $originalTemplateEncryptedId))
	{
		
		$this->layout('layout/layout5.phtml'); 
   
   $request = $this->getRequest();
    
   $devId = $developerId;
   $encryptedDeveloperId =  $this->encrypt_decrypt('encrypt', $devId);
   $encryptedDeveloperId =str_replace("/","encoded",$encryptedDeveloperId);
   $tempId = $templateId;
   $encryptedTemplateId =  $this->encrypt_decrypt('encrypt', $tempId);
   $encryptedTemplateId =str_replace("/","encoded",$encryptedTemplateId);
   
    $regs = $this->getpromoteTable()->selectpromote($devId,$tempId);
    $regscreen = $this->getscreenshotsTable()->selectAllscreen($tempId);
   
    $result = $this->getDeveloperTable()->getDeveloperWithId($devId);
     return new ViewModel(array(
                    'devId' => $devId,
     				'encryptedDeveloperId'=>$encryptedDeveloperId,
     				'encryptedTemplateId'=>$encryptedTemplateId,
                    'tempId' => $tempId,
                    'promote' => $regs,
                    'screen'=>$regscreen,
                    'result'=>$result
                    
                ));
	}
	else{
		
		 $this->redirect()->toRoute('application/default',array('controller'=>'Error','action'=>'index'));
	}
	//print_r($explodedDeveloperDetails);exit;
   
	
	
	
	
	
    
}//path tested by dibyendu 

public function aboutcampaignAction()
{
  $editor = $_POST['editor1'];
  $devid = $_POST['devid'];
  $tempid = $_POST['tempid'];
  $regs = $this->getpromoteTable()->selectpromote($devid,$tempid);
  $data = array(
              'devId' => $devid,
              'tempId' => $tempid,
              'aboutCmp' => $editor
              );
              if($regs != "")
              {
                 $res = $this->getpromoteTable()->updatepromote($data,$devid,$tempid);
              }
              
              if($res == 1)
              {
                echo "edited successfully";
              }
              else
              {
                echo "Insert value";
              }
              exit;
  
}//path tested by dibyendu 

public function campaigngoalAction()
{
  $editor = $_POST['editor2'];
  $devid = $_POST['devid'];
  $tempid = $_POST['tempid'];
  $regs = $this->getpromoteTable()->selectpromote($devid,$tempid);
  $data = array(
              'devId' => $devid,
              'tempId' => $tempid,
              'campGoal' => $editor
              );
              if($regs != "")
              {
                 $res = $this->getpromoteTable()->updatepromote($data,$devid,$tempid);
              }
              
              if($res == 1)
              {
                echo "edited successfully";
              }
              else
              {
                echo "error";
              }
              exit;    
    
}//path tested by dibyendu 

public function marketingAction()
{
    $this->layout('layout/layoutmarketing.phtml');        
    $devid = $this->getEvent()->getRouteMatch()->getParam('id');
   $tempid = $this->getEvent()->getRouteMatch()->getParam('pId');
   
   $devid = urldecode($devid);
   $tempid = urldecode($tempid);
   /*$explodedUrl = explode("/promote/",$url);
    $developerAndTemplate = explode("break/",$explodedUrl[1]);*/
   //*****exploded developer from url*****//
   
   $explodedDeveloperDetails = explode("|",$devid);
   $developerId= $explodedDeveloperDetails[0];
   $developerIdEncrypted = $explodedDeveloperDetails[1];
   
   $encryptedDeveloperId =  $this->encrypt_decrypt('encrypt', $developerId);
   //echo "<br/>";
   $originalDeveloperEncryptedId = str_replace("encoded","/",$developerIdEncrypted);
   $originalDeveloperEncryptedId = str_replace(" ","+",$originalDeveloperEncryptedId);
   
   //*****exploded template from url*****//
   
   $explodedTemplateDetails = explode("|",$tempid);
   $templateId= $explodedTemplateDetails[0];
   
   $templateIdEncrypted = $explodedTemplateDetails[1];
   
   $encryptedTemplateId =  $this->encrypt_decrypt('encrypt', $templateId);
   
   $originalTemplateEncryptedId = str_replace("encoded","/",$templateIdEncrypted);
   $originalTemplateEncryptedId = str_replace(" ","+",$originalTemplateEncryptedId);
   
   
   
   if (($encryptedDeveloperId == $originalDeveloperEncryptedId ) && ($encryptedTemplateId == $originalTemplateEncryptedId))
   {
   	$devId = $developerId;
   	$tempId = $templateId;
  $regpromote = $this->getpromoteTable()->selectpromote($devId,$tempId);  
  $regscreen = $this->getscreenshotsTable()->selectAllscreen($tempId);
  $getdev = $this->getDeveloperTable()->fetchdetails($devId);
  $getpromote = $this->getuserTemplateTable()->fetchpromote($tempId); 
  $getpromotes = array();
  foreach($getpromote as $promote)
  {

    $getpromotes[]= $this->getfbuserTable()->selectUser1($promote->user_id);
   
  }
  
  
   return new ViewModel(array(
                    'promote' => $regpromote,
                    'screen' => $regscreen,
                    'developer' =>$getdev,
                    'promotion' => $getpromotes                                     
                ));
   }
   else{
   
   	$this->redirect()->toRoute('application/default',array('controller'=>'Error','action'=>'index'));
   }
} //path tested by dibyendu 

public function devreg2Action() //edited by arnab
{
   $this->layout('layout/layout5.phtml'); 
   $id = $this->getEvent()->getRouteMatch()->getParam('id'); 
   $id = urldecode($id);
   
   $explodedDeveloperDetails = explode("|",$id);
   $developerId= $explodedDeveloperDetails[0];
   $developerIdEncrypted = $explodedDeveloperDetails[1];
    
   $encryptedDeveloperId =  $this->encrypt_decrypt('encrypt', $developerId);
   
   //echo "<br/>";
   $originalDeveloperEncryptedId = str_replace("encoded","/",$developerIdEncrypted);
   $originalDeveloperEncryptedId = str_replace(" ","+",$originalDeveloperEncryptedId);
   if($encryptedDeveloperId == $originalDeveloperEncryptedId)
   {
   $user_session = new Container('devId');
   $user_session->devId = $id; 
   
   $devid = $user_session->devId;
   
   $result = $this->getDeveloperTable()->getDeveloperWithId($devid);
   $encryptedDeveloperId =str_replace("/","encoded",$encryptedDeveloperId);
   return new ViewModel(array(
                    'id' => $developerId,
   					'encryptedDeveloperId'=>$encryptedDeveloperId,
                    'result' => $result
                ));
   }
   else{
   	$this->redirect()->toRoute('application/default',array('controller'=>'Error','action'=>'index'));
   }
} //path tested by dibyendu 

public function devwizardAction()
{
     $this->layout('layout/layout5.phtml');
          
}  //path tested by dibyendu 

 public function register1Action()
 {
    
    $gender = $_POST['gender'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['eid'];
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $stepsCompleted = 'firstStep';
    
    $today = date("F j, Y, g:i a"); 
    $array = explode(",",$today);    
    $array_time = array_pop($array);
    
    $password = $this->encrypt_decrypt('encrypt', $pwd);
    $array_date = $array[1]."-".$array[0];
    
    $userNames=$this->getDeveloperTable()->userNames($uname);
    
    if($userNames->id==""){
        $data = array(
        'fName' => $fname,
        'lName' => $lname,
        'eId' => $email,
        'uname' => $uname, 
        'pwd' => $password,
        'timeStamp'=>$array_time,
        'date'=>$array_date,
        'gender' => $gender,
        'stepsCompleted'=>$stepsCompleted
    );

    $devId = $this->getDeveloperTable()->insertReg1($data); 
    $encryptedId = $this->encrypt_decrypt('encrypt', $devId);
    $developerPassedId =str_replace("/","encoded",$encryptedId);
    echo $devId."|".$developerPassedId;
    exit;
}
else
{
    echo 0;exit;
}
 }//path tested by dibyendu
 
 public function updateregister1Action()
 {
    $gender = $_POST['gender'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['eid'];
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $id = $_POST['devid'];
    $stepsCompleted = 'firstStep';
    $password = $this->encrypt_decrypt('encrypt', $pwd);
    $data = array(
    'id'=>$id,
    'fName' => $fname,
    'lName' => $lname,
    'eId' => $email,
    'uname' => $uname,
    'pwd' => $password,
    'timeStamp'=>time(),
    'gender' => $gender,
    'stepsCompleted' => $stepsCompleted,
    );

$devId = $this->getDeveloperTable()->updateReg1($data,$id); 
echo $devId;
exit;
 } //path tested by dibyendu

public function updateRegAction(){
   $id = $this->getEvent()->getRouteMatch()->getParam('id');    
   $name = $_POST['name'];
   $type=$_POST['type'];
   $phone=$_POST['phone'];
   $city=$_POST['city'];
   $country=$_POST['country'];
   $desc=$_POST['desc'];
   $img = $_POST['imgs'];
   $stepsCompleted = 'secondStep';
   $data = array(
   'id' => $id,
   'cname' => $name,
   'ctype' => $type,
   'cphone' => $phone,
   'ccity' => $city,
   'ccountry' => $country,
   'cdesc' => $desc,
  'cimage' => $img,
   	'stepsCompleted'=>$stepsCompleted,
   ); 
   
  $red = $this->getDeveloperTable()->updateReg1($data,$id); 
  echo $red;
  exit;
}//path tested by dibyendu

public function updateRegs1Action() {    //added by arnab
   $id = $_POST['devid'];   
   $name = $_POST['name'];
   $type=$_POST['type'];
   $phone=$_POST['phone'];
   $city=$_POST['city'];
   $country=$_POST['country'];
   $desc=$_POST['desc'];
   $img = $_POST['imgs'];
   $stepsCompleted = 'secondStep';
   
   $data = array(
   'id' => $id,
   'cname' => $name,
   'ctype' => $type,
   'cphone' => $phone,
   'ccity' => $city,
   'ccountry' => $country,
   'cdesc' => $desc,
  'cimage' => $img,
   'stepsCompleted'=>$stepsCompleted	
   ); 
   
  $red = $this->getDeveloperTable()->updateReg1($data,$id); 
  $encryptedNewId =  $this->encrypt_decrypt('encrypt', $id);
  echo $red;
  exit;
}//path tested by dibyendu
public function updatedevAction()
{
	$id = $_POST['devid'];
	$stepsCompleted = 'Thirdstep';
	$data = array(
			'id'=>$id,
			'stepsCompleted'=> $stepsCompleted
	);
	$devId = $this->getDeveloperTable()->updateReg1($data,$id);
	
	exit;
}
public function insertpromoteAction()
{

   $devId = $_POST['dev'];
   $tempId = $_POST['temp'];
   
  
   $data = array(
   'devId' => $devId,
   'tempId' => $tempId
   
   );
   
   $results = $this->getpromoteTable()->selectpromote($devId,$tempId);
   
   if($results != "")
   {
     $res = $this->getpromoteTable()->updatepromote($data,$devId,$tempId);
   }
   else{
     $res = $this->getpromoteTable()->insertpromote($data);
   }
  
 echo $res;
    exit;
}//path tested by dibyendu

public function fbcoverimageAction()
{
  $devid = $this->getEvent()->getRouteMatch()->getParam('id');
  $tempid = $this->getEvent()->getRouteMatch()->getParam('pId'); 
  $fileName = $_FILES['images2']['name'];
  $protocol = '';
        if (isset($_SERVER['HTTPS']) &&
       ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
         $protocol = 'https://';
        }
        else {
        $protocol = 'http://';
           }
       // echo $_SERVER['SERVER_PROTOCOL'].$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $url = $protocol.$_SERVER["SERVER_NAME"];
  $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $newName=time();
            $picNewName = $newName . $fileName;
           
            $newPath = "/var/www/staging/public/sfpdeveloper/fbcover/".$picNewName;
          
            $newPath = str_replace("'","",$newPath);
            
            $filter = new \Zend\Filter\File\Rename($newPath);
          $filter->filter($_FILES['images2']);
          $htmlpath = $url."/sfpdeveloper/fbcover/".$picNewName;
          //if($fileName=="")
//          {
//            $htmlpath = "http://test.scampaigns.com/img/default-profile.png";
//          }
  $data = array(
   'devId' => $devid,
   'tempId' => $tempid,
   'fbcoverImage' => $htmlpath
   );
      $res = $this->getpromoteTable()->updatepromote($data,$devid,$tempid);
          echo $htmlpath;
  exit;
}//path tested by dibyendu

public function screenshotAction()
{
   $devid = $this->getEvent()->getRouteMatch()->getParam('id');
  $tempid = $this->getEvent()->getRouteMatch()->getParam('pId');
  $protocol = '';
        if (isset($_SERVER['HTTPS']) &&
       ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
         $protocol = 'https://';
        }
        else {
        $protocol = 'http://';
           }
       // echo $_SERVER['SERVER_PROTOCOL'].$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $url = $protocol.$_SERVER["SERVER_NAME"]; 
  $fileName = $_FILES['images21']['name'];
  $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $newName=time();
            $picNewName = $newName . $fileName;
           
            $newPath = "/var/www/staging/public/sfpdeveloper/screenshot/".$picNewName;
          
            $newPath = str_replace("'","",$newPath);
            
            $filter = new \Zend\Filter\File\Rename($newPath);
          $filter->filter($_FILES['images21']);
          $htmlpath = $url."/sfpdeveloper/screenshot/".$picNewName;  

      echo $htmlpath;
  exit;   
}//path tested by dibyendu


//added by baishakhi - banner image
public function bannerAction()
{
	$devid = $this->getEvent()->getRouteMatch()->getParam('id');
	$tempid = $this->getEvent()->getRouteMatch()->getParam('pId');
	$protocol = '';
	if (isset($_SERVER['HTTPS']) &&
			($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
			isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
			$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
		$protocol = 'https://';
	}
	else {
		$protocol = 'http://';
	}
	// echo $_SERVER['SERVER_PROTOCOL'].$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$url = $protocol.$_SERVER["SERVER_NAME"];
	$fileName = $_FILES['bannerimage']['name'];
	$uploadObj = new \Zend\File\Transfer\Adapter\Http();
	$newName=time();
	$picNewName = $newName . $fileName;
	$imageInformation = getimagesize($_FILES['bannerimage']['tmp_name']);
	$imageWidth = $imageInformation[0]; //Contains the Width of the Image
    $imageHeight = $imageInformation[1];
    if($imageWidth != '')
    {
    	
    if($imageWidth < 1231 && $imageHeight < 330 )
    {
    	$htmlpaths = 0;
    }
    
    else{
    	
	$newPath = "/var/www/staging/public/sfpdeveloper/screenshot/".$picNewName;

	$newPath = str_replace("'","",$newPath);

	$filter = new \Zend\Filter\File\Rename($newPath);
	$filter->filter($_FILES['bannerimage']);
	$htmlpaths = $url."/sfpdeveloper/screenshot/".$picNewName;

	$devId = $this->getEvent()->getRouteMatch()->getParam('id');
   $tempId = $this->getEvent()->getRouteMatch()->getParam('pId');
	$bannertext = $_POST['bannertext'];
	$data = array(
			'devId' => $devId,
			'tempId' => $tempId,
			'bannerimage' => $htmlpaths,
			'bannertext' =>$bannertext
	);

	 $res = $this->getpromoteTable()->saveImage($data,$devId,$tempId);
	
	
    }
    echo($htmlpaths);
    }
    else{
    	$newPath = "/var/www/staging/public/sfpdeveloper/screenshot/".$picNewName;
    	
    	$newPath = str_replace("'","",$newPath);
    	
    	$filter = new \Zend\Filter\File\Rename($newPath);
    	$filter->filter($_FILES['bannerimage']);
    	$htmlpaths = $url."/sfpdeveloper/screenshot/".$picNewName;
    	
    	$devId = $this->getEvent()->getRouteMatch()->getParam('id');
    	$tempId = $this->getEvent()->getRouteMatch()->getParam('pId');
    	$bannertext = $_POST['bannertext'];
    	$data = array(
    			'devId' => $devId,
    			'tempId' => $tempId,
    			'bannertext' =>$bannertext
    	);
    	
    	$res = $this->getpromoteTable()->saveImagetxt($data,$devId,$tempId);
    	
    	
    }	
    
	exit;
}//path tested by dibyendu






public function screenshotsaveAction()
{
  $screen = $_POST['screen'];
  $editor = $_POST['editor2'];
  $header = $_POST['header'];
  $devid = $_POST['devid'];
  $tempid = $_POST['tempid'];
  
  $sid = $this->getEvent()->getRouteMatch()->getParam('id');
  
  if($sid != "")
  {
 $data = array(
              'id'=>$sid,
              'tempId' => $tempid,
              'screenshot_image' => $screen,
              'screenshot_desc' => $editor,
              'screenshot_header' => $header
              );
     $res = $this->getscreenshotsTable()->updatescreen($data,$sid);
      $data = "";
   $data1 = "<table><tr><th>Steps</th><th>Screenshot image</th><th>Screenshot header</th><th>Screenshot description</th><th>Action</th></tr>";
    
     if($res == "1")
     {
       $result = $this->getscreenshotsTable()->selectAllscreen($tempid);
       $count = count($result);
       $i = 1;
     foreach($result as $scrn)
    {
          $res1 = $scrn->screenshot_desc;     
          if(strlen($res1) < 20)
            {
                 $res1 = $res1;
            }
            else
            {
                $res1 = substr($res1,0,55);
                $res1 = $res1."...";
                
            }
        $data .= '<tr id="'.$scrn->id.'"><td> step-'.$i.'</td><td><img src="'.$scrn->screenshot_image.'" style="height:75px;width: 100px;"/></td> <td><span>'.$scrn->screenshot_header.'</span></td> <td><span>'.$res1.'</span></td><td><a href="javascript:void(0)" onclick="editscreen('.$scrn->id.')">Edit</a>&nbsp;<a href="javascript:void(0)" onclick="delscreen('.$scrn->id.')">Delete</a></td></tr>';
        $i++;
       }
    
    $data = $data1.$data."</table>";         
        echo "updated"."||".$data;
     }
     else
     {
        echo "error";
     }
     exit;
  }
  $regs = $this->getscreenshotsTable()->selectscreen($tempid);
  $data = array(
              'tempId' => $tempid,
              'screenshot_image' => $screen,
              'screenshot_desc' => $editor,
              'screenshot_header' => $header
              );
            
               $last_id = $this->getscreenshotsTable()->insertscreenshot($data);  
              
              
   $result = $this->getscreenshotsTable()->selectAllscreen($tempid);
   $count = count($result);
   
   $data = "";
   $data1 = "<table><tr><th>Steps</th><th>Screenshot image</th><th>Screenshot header</th><th>Screenshot description</th><th>Action</th></tr>";
  $i = 1;
  foreach($result as $scrn)
  {
               $res = $scrn->screenshot_desc;     
  if(strlen($res) < 20)
    {
         $res = $res;
    }
    else
    {
        $res = substr($res,0,55);
        $res = $res."...";
        
    }
    $data .= '<tr id="'.$scrn->id.'"><td> step-'.$i.'</td><td><img src="'.$scrn->screenshot_image.'" style="height:75px;width: 100px;"/></td> <td><span>'.$scrn->screenshot_header.'</span></td> <td><span>'.$res.'</span></td><td><a href="javascript:void(0)" onclick="editscreen('.$scrn->id.')">Edit</a>&nbsp;<a href="javascript:void(0)" onclick="delscreen('.$scrn->id.')">Delete</a></td></tr>';
    $i++;
   }
    
    $data = $data1.$data."</table>";                         
   
        echo "Added Successfully"."||".$data;
            
           
              
              exit;     
}//path tested by dibyendu
public function screendeleteAction()
{
    $screenid= $_POST['sid'];
    $result = $this->getscreenshotsTable()->deletescreenshot($screenid);
    if($result == 1)
    {
        echo "Deleted Successfully";
    }
    else
    {
        echo "error";
    }
    exit;
}//path tested by dibyendu
public function editfbcoverAction()
{
 $desc = $_POST['desc'];
 $devid =  $_POST['devid'];
 $tempid =  $_POST['tempid'];
   $regs = $this->getpromoteTable()->selectpromote($devid,$tempid);
  $data = array(
              'devId' => $devid,
              'tempId' => $tempid,
              'fbcoverDesc' =>$desc
              );
              if($regs != "")
              {
                 $res = $this->getpromoteTable()->updatepromote($data,$devid,$tempid);
              }
              
              if($res == 1)
              {
                echo "updated";
              }
              
              exit;
}//path tested by dibyendu

public function editscreenshotAction()
{
 $screenid = $_POST['screenid'];
 $result = $this->getscreenshotsTable()->selectscreenshot($screenid);
 echo $result->screenshot_image."||".$result->screenshot_desc."||".$result->screenshot_header;
  exit;  
}//path tested by dibyendu
public function imageuplodAction()
{
  $id = $this->getEvent()->getRouteMatch()->getParam('id'); 
  $fileName = $_FILES['images2']['name'];
   if($fileName!=""){
            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $newName=time();
            $picNewName = $newName . $fileName;
            $newPath = "/var/www/staging/public/sfpdeveloper/upload/".$picNewName;
          
            $newPath = str_replace("'","",$newPath);
            
            $filter = new \Zend\Filter\File\Rename($newPath);
            if($filter->filter($_FILES['images2']))
            
            $geturl=$this->getRequest()->getUri();  
            $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$picNewName;
          
            $size = getimagesize($imageurl);
            $fsize = get_headers($imageurl, 1);
            $sze = $fsize["Content-Length"]/1024;
            if($sze > 500)
            {
                echo "1";
                exit;
            }
            
            if($size[0] != 200 && $size[1] != 200 )
            {
              echo "2";
              exit;  
            }
            
            $data = array(
            'id' => $id,
            'cimage' => $imageurl
            );

           echo $imageurl;
            }
          
  exit;  
}//path tested by dibyendu
/////////////////////////////////////////FORGET PASSWORD CODE STARTS///////////////////////////////////////////////
public function forgetpasswordAction()
{
$this->layout('layout/layout5.phtml');
}

/////////////////////////////////////////FORGET PASSWORD CODE ENDS////////////////////////////////////////////////

////////////////////////////////////////RESET PASSWORD STARTS////////////////////////////////////////////////////
public function resetpasswordAction()
{    
$this->layout('layout/layout5.phtml');

$pageURL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$value= array_pop(explode("/",$pageURL));
$forgetpass   = new forgetpasswordForm();
$request = $this->getRequest();
$array = explode("-",$value);
$id = $array[0];
$newpass = $request->getPost('newpass');
$conpass = $request->getPost('conpass');
//echo $newpass;exit;
$uniqMatch = $array[1];
$result =  $this->getDeveloperTable()->selectrow($id);
$array =  (array) $result;
$code = $array['uniq'];
$target_email=$array['eId'];
if($code == NULL || $code == '' || $code != $uniqMatch)
{
  $this->redirect()->toRoute('application/default',array('controller'=>'sfpdeveloper','action'=>'devlogin'));  
}
if($code != NULL || $code != '' || $code == $uniqMatch)
{
 if($newpass != NULL || $newpass != ""){
    $today = date("F j, Y, g:i a"); 
    $array = explode(",",$today);    
    $array_time = array_pop($array);
   
    $array_date = $array[1]."-".$array[0];
    
  $encryptedPass =$this->encrypt_decrypt('encrypt', $newpass);
          $data = array(
              'id' =>$id,
              'pwd' => $encryptedPass,
              'timeStamp'=>$array_time,
              'date'=>$array_date,
              'uniq' =>'' 
             );
         $red = $this->getDeveloperTable()->updateReg1($data,$id);
         if($red == 1){
            $message = new Message();
        $message->addTo($target_email)
        ->addFrom('info@smartfanpage.com')
        ->setSubject('Greetings From SmartFanPage!')
        ->setBody('Congratulation !!! Your password has been changed');
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
            $this->redirect()->toRoute('application/default',array('controller'=>'sfpdeveloper','action'=>'devlogin')); 
         }
         } 

 return new ViewModel(array('form'=> $forgetpass));
}

}//path tested by dibyendu

//public function resetAction()
//{
// $pass = $_POST['pass'];
// $url = $_POST['url'];
// $value = array_pop(explode("/",$url));
// $array = explode("-",$value);
// $id = $array[0];
// $uniq = $array[1];
// $result =  $this->getDeveloperTable()->selectrow($id);
// $array =  (array) $result;
//$code = $array['uniq'];
//$target_email = $array['eId'];
//if($uniq == $code)
//{
//    $message = new Message();
//        $message->addTo($target_email)
//        ->addFrom('info@smartfanpage.com')
//        ->setSubject('Greetings From SmartFanPage!')
//        ->setBody('Your password has been changed');
//        $smtpOptions = new \Zend\Mail\Transport\SmtpOptions();
//        $smtpOptions->setHost('smtp.mandrillapp.com')
//        ->setConnectionClass('login')
//        ->setName('smtp.mandrillapp.com')
//        ->setConnectionConfig(array(
//        'username' => 'info@smartfanpage.com',
//        'password' => 'fv7M_K1TFO9LgCaEdIVhgw',
//        'ssl' => 'tls',
//        'port'=>587,
//        ));
//        $transport = new \Zend\Mail\Transport\Smtp($smtpOptions);
//        $transport->send($message);  
// $data = array(
//            'id' =>$id,
//            'pwd' => $pass,
//            'uniq' =>'' 
//            );
//   $red = $this->getDeveloperTable()->updateReg1($data,$id);
//   
//   }
// 
//exit;
//}
//
public function encrypt_decrypt($action, $string) {
   $output = false;
   $key = '5faNIYoC17eL9G8ph6gvS7e2p625m9zN';
   $iv = md5(md5($key));
   if( $action == 'encrypt' ) {
       $output = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, $iv);
       $output = base64_encode($output);
       $output = rtrim($output, "");
   }
   else if( $action == 'decrypt' ){
       $output = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, $iv);
       $output = rtrim($output, "");
   }
   return $output;
}
///////////////////////////////////////RESET PASSWORD ENDS//////////////////////////////////////////////////////

/////////////////////////////////////USER CHECKING THROUGH AJAX////////////////////////////////////////////////
public function checkuserAction()
{
    $name = $_POST['user'];
    $value_of_email = $this->getDeveloperTable()->getDeveloperWithEmail($name);
    $value_of_username = $this->getDeveloperTable()->usersearch($name);
    $protocol = '';
        if (isset($_SERVER['HTTPS']) &&
       ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
         $protocol = 'https://';
        }
        else {
        $protocol = 'http://';
           }
       // echo $_SERVER['SERVER_PROTOCOL'].$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $url = $protocol.$_SERVER["SERVER_NAME"];
    if($value_of_username == NULL || $value_of_username == ''){ 

        $array =  (array) $value_of_email;
        $target_email = $array['eId'];                        
        $id = $array['id']; 
     }
     else{
        
        $array =  (array) $value_of_username;
        $target_email = $array['eId'];
         $id = $array['id'];              
        }     
        
                     
        $body = "Please click on the link to reset your password"." ".$url."/sfpdeveloper/resetpassword/".$id."-".uniqid();                  
         
    if($target_email != NULL || $target_email != '')
    {
              
        $message = new Message();
        $message->addTo($target_email)
        ->addFrom('info@smartfanpage.com')
        ->setSubject('Greetings From SmartFanPage!')
        ->setBody($body);
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
        $value=array_pop(explode("-",$body));
        $data = array(
            
            'uniq' => $value,
            );        
        $red = $this->getDeveloperTable()->updateReg1($data,$id);                
        echo "1";
    }  
    else{
        unset($body);
    } 
    exit;
}//path tested by dibyendu

////////////////////////////////////USER CHECKING THROUGH AJAX ENDS HERE//////////////////////////////////////

  public function getDeveloperTable()
    {
        if (!$this->developerTable) {
         $sm = $this->getServiceLocator();
         $this->developerTable = $sm->get('Application\Model\DeveloperTable');
        }
        return $this->developerTable;
    }
    
    
     public function getTemplateTable()
    {
        if (!$this->templateTable) {
         $sm = $this->getServiceLocator();
         $this->templateTable = $sm->get('Application\Model\TemplateTable');
        }
        return $this->templateTable;
    } 
    
    
      public function getpromoteTable()
    {
        if (!$this->promoteTable) {
         $sm = $this->getServiceLocator();
         $this->promoteTable = $sm->get('Application\Model\promoteTable');
        }
        return $this->promoteTable;
    } 
    
      public function getscreenshotsTable()
    {
        if (!$this->screenshotsTable) {
         $sm = $this->getServiceLocator();
         $this->screenshotsTable = $sm->get('Application\Model\screenshotsTable');
        }
        return $this->screenshotsTable;
    }
    
       public function getuserTemplateTable()
    {
       if (!$this->userTemplateTable) {
         $sm = $this->getServiceLocator();
         $this->userTemplateTable = $sm->get('Application\Model\userTemplateTable');
        }
        return $this->userTemplateTable;  
    } 
    
       public function getfbuserTable() 
    {
        if (!$this->fbuserTable) {
         $sm = $this->getServiceLocator();
         $this->fbuserTable = $sm->get('Application\Model\fbuserTable');
        }
        return $this->fbuserTable;
    }
     public function getcountryDetailsTable() 
    {
        if (!$this->countryDetailsTable) {
         $sm = $this->getServiceLocator();
         $this->countryDetailsTable = $sm->get('Application\Model\countryDetailsTable');
        }
        return $this->countryDetailsTable;
    }  
     public function getcompanyDetailsTable() 
    {
        if (!$this->companyDetailsTable) {
         $sm = $this->getServiceLocator();
         $this->companyDetailsTable = $sm->get('Application\Model\companyDetailsTable');
        }
        return $this->companyDetailsTable;
    }    
    }

?>