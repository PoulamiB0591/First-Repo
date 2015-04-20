<?php


//added by Poulami
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Template;
use Application\Model\templateCatagory;
use Application\Form\UploadForm;

use Zend\Http\PhpEnvironment\Request;
use Zend\Session\Container;

use Zend\Mail;
use Zend\Mail\Message;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;
use Zend\Form\Element\Checkbox;

use Zend\View\Model\JsonModel;
/**
 * DeveloperController
 *
 * @author
 *
 * @version
 *
 */
class TemplateController extends AbstractActionController {
	/**
	 * The default action - show the home page
	 */
    
    public function onDispatch(\Zend\Mvc\MvcEvent $e) //added by Poulami to check session
    {
        $user_session = new Container('devId');
        $id = $user_session->devId;
        
        if( !$id ) {
            return $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'devlogin'));
        }
    
        return parent::onDispatch($e);
    }
    
    public function indexAction() //edited by Aritra // id encrypted by dibyendu 
    {
        $user_session = new Container('devId');
        $id = $user_session->devId; 
        $developerPassedId= $encryptedPass =$this->encrypt_decrypt('encrypt', $id);
       	$encryptedId  =str_replace("/","encoded",$developerPassedId);
        $this->layout('layout/layouttemplate.phtml');  
        $result = $this->getDeveloperTable()->getDeveloperWithId($id); 
        $temp = $this->gettemplateCatagoryTable()->fetchAll();
   	    $error = $this->getEvent()->getRouteMatch()->getParam('id');
        $uform = new UploadForm();

        $user_session = new Container('devId');
        $id = $user_session->devId;
        
        $uform->get('devId')->setAttribute('value', $id);
      
        $view = new ViewModel(array('uform'=>$uform,'error'=>$error,'id'=>$id,'encryptedId'=>$encryptedId,'result'=>$result,'temp'=>$temp));
                 
        return $view;
    }   /*path tested by dibyendu*/
    
    public function addtemplateAction() //edited by Baishakhi
    {
       
        
        $chk = 0;
        $user_session = new Container('devId');
        $id = $user_session->devId;
        
        $uform   = new UploadForm();
        //$uform->bind($uform);
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            /******* added by Poulami ******/
            
            $validator = new \Zend\Validator\File\IsCompressed();
            $validatorImg = new \Zend\Validator\File\Extension('jpg,png');
            
            $template = new Template();
            
            $data = array_merge( 
                $this->getRequest()->getPost()->toArray(),
                 $this->getRequest()->getFiles()->toArray() 
            );
            
            if($data['sample-checkbox-01']==1){
            	$databaseCheck = 1;
            }
            else{
            	$databaseCheck = 0;
            }
           
            $res = "";
           
            if($data['sample-checkbox-02'] == 2)
            {
              $fb = $request->getPost('sample');
              $email = $request->getPost('sample1');  
              $public = $request->getPost('sample2'); 
            
            if($fb != "" && ($email != "" || $public != "")) {
            if($email == "")
            {
              $email = "";  
            }
            if($public == "")
            {
                $public = "";
            }
            if($fb != "")
            {
                if($email != "" && $public != "")
                {
                  $res = $fb.",".$email.",".$public;  
                }
                else if($email != "" && $public == "")
                {
                  $res = $fb.",".$email;  
                }
                else
                {
                   $res = $fb.",".$public; 
                }
            }
               }
               else {
                  $this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'index'));
               }
            }
           
            
            
            /******************* added by Poulami *********************/
            if(isset($data['radio-01']) && $data['radio-01'] == 1)
            {
                $chk = 4;
            }
            else if(isset($data['radio-02']) && $data['radio-02'] == 1)
            {
                $chk = 2;
            }
            else if(isset($data['radio-03']) && $data['radio-03'] == 1)
            {
                $chk = 1;
            }
            else
            {
                $chk = 0;
            }
            
            if(isset($data['authId']))
            {
                $authId = $data['authId'];
            }
            else
            {
                $authId = 0;
            }
            
            /***********/
            $fbchk = '0';
           
            if($data['sample-checkbox-02'] == '0')
            {
                $fbchk = '1';
            }
            
           
         
            
            if(preg_match('/\s/',$data['templateName'])) //added by Poulami
            {
                $modFileName = preg_replace('/\s+/', '_', $data['templateName']);
            }
            else
            {
                $modFileName = $data['templateName'];
            }
            
            $file = $_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName;
            
            if (false === file_exists($file)) 
            {     
                
                $data1 = array('devId'=>$id,'templateName'=>$data['templateName'],'templateDesc'=>$data['templateDesc'],'templatePrice'=>$data['templatePrice'],'oneTimePrice'=>$data['oneTimePrice'],'scImage'=>$data['scImage']['name'],'desktopImage'=>$data['desktopImage']['name'],'mobileImage'=>$data['mobileImage']['name'],'tempZipName'=>$data['file']['name'],'tempFoldName'=>$modFileName,'widgets'=>$data['widget'],'view'=>$chk,'approval'=>'','fbconnect'=>$fbchk,'facebook_connection'=>$res,'databaseCheck'=>$databaseCheck,'template_select'=>$data['template_select'] );
                
               
                
                $fileName = $data['file']['name'];
                $scName   = $data['scImage']['name'];
                $desktopName = $data['desktopImage']['name']; 
                $mobileName = $data['mobileImage']['name']; 
                
                
                $nameExt = explode(".",$fileName);
                $scExt   = explode(".",$scName);
                $desktopExt = explode (".",$desktopName);
                $mobileExt = explode (".",$mobileName);
                
                $dirPath = $_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName;
                $xmlpath =  $_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName.'/xml';
              
                $uform->setData($data1);
                
           
                
                if($uform->isValid())
                {
                	
                    $template->exchangeArray($data1);
                    /******* added by Poulami ends ******/ 
                   
                    if($this->getcreateappTable()->fetchAppId($id,$authId) || ($authId == 0))
                    {
                        $uploadObj = new \Zend\File\Transfer\Transfer();
                        $uploadObj->setDestination($_SERVER['DOCUMENT_ROOT'].'/files');
                        
                        if($uploadObj->receive($fileName)) {
                            mkdir($dirPath,0777,true); 
                            mkdir($xmlpath,0777,true);
                            fopen($xmlpath."/put.xml","w+");
                            fopen($xmlpath."/temp.xml","w+"); 
                            fopen($xmlpath."/file.xml","w+"); 
                        }
                        
                        if($validator->isValid($_SERVER['DOCUMENT_ROOT'].'/files/'.$fileName))
                        {
                            $filter = new \Zend\Filter\Decompress(array(
                                'adapter' => 'Zip',
                                'options' => array(
                                    'target' => $_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName,
                                )
                            ));
                            
                            $decompressed = $filter->filter($_SERVER['DOCUMENT_ROOT'].'/files/'.$fileName); 
                          
                       
                            if(((is_file($dirPath.'/db.php') == "true") &&($databaseCheck == 1)) || ((is_file($dirPath.'/db.php') == "true") && ($databaseCheck != 1))|| ((is_file($dirPath.'/db.php') != "true") && ($databaseCheck != 1)))
                            {
                               
                                if(is_file($dirPath.'/index.php') == "true") //added by Poulami
                                {
                                    /******* the screenshot image is moved to the unzipped folder ********/
                                    $mfilter = new \Zend\Filter\File\RenameUpload($_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName);
                                    
                                    $mfilter->setUseUploadName(true);
                                    $mfilter->filter($data['scImage']);
                                    $mfilter->filter($data['desktopImage']);
                                    $mfilter->filter($data['mobileImage']);
                                    /********** the screenshot image is moved to the unzipped folder ends **********/
                                    if($validatorImg->isValid($_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName."/".$scName))
                                    {
                                    	if($validatorImg->isValid($_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName."/".$desktopName))
                                    	{
                                    		if($validatorImg->isValid($_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName."/".$mobileName))
                                    		{
                                        $result = $this->getDeveloperTable()->fetchEmail($id);                                                           
                                        if($this->getTemplateTable()->saveTemplate($template) == 1)
                                        {
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
                                        	
                                            $date = date('Y/m/d H:i:s');
                                            $target = "koushikdelgence@gamil.com";
                                            $message = new Message();
                                            $message->addTo($result[0]['eId'])
                                            ->addFrom('info@smartfanpage.com')
                                            ->setSubject('Greetings and Salutations!')
                                            ->setBody("Thank you for uploading template");
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
                                            
                                            $uploaderDetails = $this->getDeveloperTable()->selectrow($id);    
                                            $userName =  $uploaderDetails->fName." ".$uploaderDetails->lName;
                                            $approvalPath = $url."/Admin/tempfile/".$data['templateName']."/".$id;
                                            $body= "Dear Admin The following developer: ".$userName." has uploaded a template: ".$data['templateName'].' on '.$date .' Please approve the template by going to the following link: '.$approvalPath;
                                            //$body = $userName."has recently uploaded an template on".$date;
                                            $message->addTo($target)
                                            ->addFrom('info@smartfanpage.com')
                                            ->setSubject('Greetings and Salutations!')
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
                                            
                                            
                                            $message->addTo('info@smartfanpage.com')
                                            ->addFrom('info@smartfanpage.com')
                                            ->setSubject('Greetings and Salutations!')
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
                                            
                                            $files = glob($_SERVER['DOCUMENT_ROOT'].'/files/'.$fileName);
                                            foreach($files as $file)
                                            @unlink($file);
                                            
                                            $retEditor = $this->dirread( "/var/www/staging/public/files/".$modFileName ); 
                                            $res = explode("||",$retEditor);
                                            //$file = file_get_contents("/var/www/staging/public/xml/put.xml");
                                            $co = count($res);
                                            
                                            
                                            $abc='<?xml version="1.0" encoding="UTF-8"?>
                                            <table>
                                            ';
                                            for($i=1;$i<$co;$i++)
                                            {
                                                $j = $i-1;
                                                $abc .= "
                                                <tabs>
                                                <order>".$i."</order>
                                                <file>".$res[$j]."</file>
                                                <desc></desc>
                                                </tabs>";
                                            }
                                            $abc .= '</table>';
                                            
                                            file_put_contents('/var/www/staging/public/files/'.$modFileName.'/xml/put.xml',$abc); 
                                            file_put_contents('/var/www/staging/public/files/'.$modFileName.'/xml/temp.xml',$abc); 
                                            $this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'setup','id'=>$modFileName,'pId'=>'1')); //added by only Aritra 
                                        
                                        }

                                    	}
                                    	else
                                    	{
                                    		$this->rrmdir($_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName);
                                    	
                                    		$msg = "UPLOAD .jpg or .jpeg or .png format Mobile image";
                                    	
                                    		$this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'index','id'=>45));   //added by Poulami
                                    	}
                                    }
                                    else
                                    {
                                    	$this->rrmdir($_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName);
                                    
                                    	$msg = "UPLOAD .jpg or .jpeg or .png format Desktop image";
                                    
                                    	$this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'index','id'=>44));   //added by Poulami
                                    }
                                    }
                                    else
                                    {
                                        $this->rrmdir($_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName);
                                        
                                        $msg = "UPLOAD .jpg or .jpeg or .png format screenshot image";
                                        
                                        $this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'index','id'=>4));   //added by Poulami
                                    }
                                }
                                else
                                {
                                    $this->rrmdir($_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName);             
                                    
                                    $msg = "<br>index file is missing.Sorry to upload!!";
                                    
                                    $this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'index','id'=>3));   //added by Poulami
                                } 
                            }
                            else
                            {
                                $this->rrmdir($_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName);            
                                
                                $msg = "<br>database file is missing.Sorry to upload!!";
                                
                                $this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'index','id'=>6));   //added by Poulami
                            }
                        }
                        else
                        {
                            $this->rrmdir($_SERVER['DOCUMENT_ROOT'].'/files/'.$modFileName);            
                            $msg = "Please upload zip file only";
                            
                            $this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'index','id'=>2));   //added by Poulami
                        } 
                    }
                    else
                    {            
                        $this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'index','id'=>5));   //added by Poulami
                    } 
                }
            } 
            else
            {
                $msg = "Template with same name exists";
                 //$this->flashMessenger()->addMessage('Template with same name exists');
                $this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'index','id'=>1)); //added by Poulami
            }
        }
    }//path tested by dibyendu
    
    
    public function dirread($path)
    {
        $hold = "";
  $dirHandle = opendir($path);
  while($item = readdir($dirHandle)) {
   
    $newPath = $path."/".$item;
    if(is_dir($newPath) && $item != '.' && $item != '..') {
    
       $parts = explode('.', $newPath);
       $extension = array_pop($parts);
     if( $extension == 'php' || $extension == 'html' || $extension == 'htm' ){
         $abc="";
         $abc= $newPath;
         $parts = Explode('/', $abc);
         $testPath = $this->getServiceLocator()->get('Config');
         $array = array_diff($parts, $testPath['pathName']['path']);
            $str_arr = implode("/",$array);  
             $currentUrl = $_SERVER["SERVER_NAME"];
             
         $hold .= $str_arr."||";
     
       }
       
      $hold .= $this->dirread($newPath);
    }
    else{
        
         $parts = explode('.', $newPath);
       $extension = array_pop($parts);
      if( $extension == 'php' || $extension == 'html' || $extension == 'htm'  ){
         $abc="";
         $abc= $path;
         $parts = Explode('/', $abc);
         $testPath = $this->getServiceLocator()->get('Config');
         $array = array_diff($parts, $testPath['pathName']['path']);
          $str_arr = implode("/",$array); 
            $currentUrl = $_SERVER["SERVER_NAME"]; 
       $hold .= $item."||";
       }
   
    }
  }
  return $hold;
    }//path tested by dibyendu
    
    
    
    public function setupAction() //added by Baishakhi
    {
        $user_session = new Container('devId');
        $id = $user_session->devId; 
        $encryptedPass =$this->encrypt_decrypt('encrypt', $id);
        $encryptedId = str_replace("/","encoded",$encryptedPass);
        $this->layout('layout/layouttemplate.phtml');     
        $result = $this->getDeveloperTable()->getDeveloperWithId($id); 
        $folder = $this->getEvent()->getRouteMatch()->getParam('id');
        $xml = $this->getEvent()->getRouteMatch()->getParam('pId');
      
        return new ViewModel(array('folder'=>$folder,'id'=>$id,'encryptedId'=>$encryptedId,'xml'=>$xml,'result'=>$result));
    
    } //path tested by dibyendu
    
  
    
    public function selectboxAction() //added by Baishakhi
    {
      $folder = $this->getEvent()->getRouteMatch()->getParam('id');  
      $temp =$_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/temp.xml'; 
      $arr = explode("||",$_POST['arr']);
      
      $no = count($arr); 
      $xml = file_get_contents($temp);
      $abc='<?xml version="1.0" encoding="UTF-8"?>
            <table>
                 ';
            for($i=0;$i<$no-1;$i++)
            {
             $ars = explode("||",$_POST['text']);
             $c = count($ars);
             for($j=0;$j<$c;$j++){
             $asd = explode("//",$ars[$j]);
             $k = $i+1;
          if($arr[$i] == $asd[1]){
               $abc .= '<tabs><order>'.$k.'</order><file>'.$arr[$i].'</file><desc>'.$asd[0].'</desc></tabs>';
          }
             
             }
         

             
             }  
             $abc .= '</table>';
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/temp.xml',$abc);  
            echo $no;  
           
            exit;
    }//path tested by dibyendu
    
    public function saveitAction() //added by Baishakhi
    {
       
        if($_POST['res']== 1)
        {
         $folder = $this->getEvent()->getRouteMatch()->getParam('id');
      $data = file_get_contents( $_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/temp.xml' ); 
      $newfile = $_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/put.xml';
      file_put_contents( $newfile, $data );
      $temp = file_get_contents( $_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/put.xml' );
      $tempdata = $_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/temp.xml';
      file_put_contents( $tempdata, $temp ); 
      exit;  
        }
        else if($_POST['res']== 2)
        {
           $folder = $this->getEvent()->getRouteMatch()->getParam('id');
      $data = file_get_contents( $_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/temp.xml' ); 
      $newfile = $_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/put.xml';
      file_put_contents( $newfile, $data );
      $temp = file_get_contents( $_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/put.xml' );
      $tempdata = $_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/temp.xml';
      file_put_contents( $tempdata, $temp ); 
      echo "redirect"; 
      exit;
        }
        else
        {
            
            $folder = $this->getEvent()->getRouteMatch()->getParam('id');
            
      $arr = explode("||",$_POST['text']);
      $no = count($arr); 
     
      $abc='<?xml version="1.0" encoding="UTF-8"?>
            <table>
                 ';
           
            
             for($j=0;$j<$no-1;$j++){
             $asd = explode("//",$arr[$j]);
             
             $k = $j+1;
         
               $abc .= '<tabs><order>'.$k.'</order><file>'.$asd[1].'</file><desc>'.$asd[0].'</desc></tabs>';
                    
             }
            $abc .= '</table>';
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/temp.xml',$abc); 
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/files/'.$folder.'/xml/put.xml',$abc);   
        }
      
     $this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'setup','id'=>$data['templateName'],'pId'=>'1')); //added by Aritra

    }//path tested by dibyendu
    
    public function validationAction() //added by Aritra and edited by Poulami
    {
        $user_session = new Container('devId');
        $id = $user_session->devId;
        $encryptedPass =$this->encrypt_decrypt('encrypt', $id);
        $encryptedId = str_replace("/","encoded",$encryptedPass);
        $this->layout('layout/layouttemplate.phtml'); 
        $devdetails = $this->getDeveloperTable()->getDeveloperWithId($id);
        $result = "";
        $folders = $this->getEvent()->getRouteMatch()->getParam('id');
        
        $resultSet = $this->getTemplateTable()->fetchTemplateByTempName($folders); 
        $widgetArr = explode(",",$resultSet->widgets);
        
        $dir = $_SERVER['DOCUMENT_ROOT']."/files/".$folders;
        $retEditor = $this->readDir($dir);
        $res = explode("|-|",$retEditor);
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
        //print_r($res);
        
        
        $i=0;
        foreach($res as $file1)
        {
            $i++;
            
            if($file1 != "")
            {
              for($j=0;$j<sizeof($widgetArr);$j++)
                {
                    $wid = $widgetArr[$j];
                    //echo $wid;
                    switch($wid)
                    {
                        case 'map' : 
                            $search      = "gMap";
                            $abc         = "";
                            $line_number = 0;
                            $found = false;
                            
                            //echo "http://test.scampaigns.com/files".$file1;                          
                            if ($file = fopen($url."/files".$file1,"r")) 
                            {
                                $count = 0;
                                
                                $data = file($url."/files".$file1);
                                
                                
                                foreach ($data as $val) {
                                    $count++;
                                    if(strpos($val,"<div id") !== FALSE)
                                    {
                                        //echo strpos($val,$search,strpos($val,"<div id"));
                                        if(is_numeric(strpos($val,'id="gMap"',strpos($val,"<div id"))) || is_numeric(strpos($val,"id='gMap'",strpos($val,"<div id"))))
                                        {
                                            $found = true;
                                            $line_number = $count;
                                            break;
                                            
                                        }
                                        else
                                        {
                                           
                                            $line_number = $count;
                                            break;
                                        }
                                    }
                                }    
                                
                                if(!$found)
                                {
                                 $data = array(
                                     
                                     'autometic_review'=> 0
                               	);
                                $this->getTemplateTable()->insertautometicreview($data);
                                  $result .= '<td width="120">'.$file1.' at line number '.$line_number.'</td><td>id for google Map is missing</td><td class="'.$search.'" width="130"><a onclick="expand(\''.$search.'\');" style="cursor:pointer" title="Expand details">Expand details</a></td>'.'++';
                                }
                                else{
                                 $data = array(
                                     
                                     'autometic_review'=> 1
                               	);
                                $this->getTemplateTable()->insertautometicreview($data);
                            }
                                fclose($file);
                            }
                            break;
                        case 'cForm' : 
                            $search      = "cForm";
                            $abc         = "";
                            $line_number = 0;
                            $found = false;
                            
                            
                            if ($file = fopen($url."/files".$file1,"r")) 
                            {
                                $count = 0;
                                
                                $data = file($url."/files".$file1);
                                
                                foreach ($data as $val) {
                                    $count++;
                                    if(strpos($val,"<form class") !== FALSE)
                                    {
                                      
                                        if(is_numeric(strpos($val,"class='cForm'",strpos($val,"<form class"))) || is_numeric(strpos($val,'class="cForm"',strpos($val,"<form class"))))
                                        {
                                            $found = true;
                                            $line_number = $count;
                                            break;
                                            
                                        }
                                        else
                                        {
                                          
                                            $line_number = $count;
                                            break;
                                        }
                                    }
                                    
                                }    
                                
                                if(!$found)
                                {
                                   $data = array(
                                     
                                     'autometic_review'=> 0
                               	);
                                $this->getTemplateTable()->insertautometicreview($data);  
                                  $result .= '<td width="120">'.$file1.' at line number '.$line_number.'</td><td>class for Contact Form is missing</td><td class="'.$search.'" width="130"><a onclick="expand(\''.$search.'\');" style="cursor:pointer" title="Expand details">Expand details</a></td>'.'++';
                                }
                                else{
                                 $data = array(
                                     
                                     'autometic_review'=> 1
                               	);
                                $this->getTemplateTable()->insertautometicreview($data);
                            }
                                fclose($file);
                            }
                            break;
                        case 'nLtr' : 
                            $search      = "nLtr";
                            $abc         = "";
                            $line_number = 0;
                            $found = false;
                    
                            
                            if ($file = fopen($url."/files".$file1,"r")) 
                            {
                                $count = 0;
                                
                                $data = file($url."/files".$file1);
                                
                                foreach ($data as $val) {
                                    $count++;
                                    if(strpos($val,"<div class") !== FALSE)
                                    {
                                        if(is_numeric(strpos($val,"class='nLtr'",strpos($val,"<div class"))) || is_numeric(strpos($val,'class="nLtr"',strpos($val,"<div class"))))
                                        {
                                            $found = true;
                                            $line_number = $count;
                                            break;
                                            
                                        }
                                        else
                                        {
                                            $line_number = $count;
                                            break;
                                        }
                                    }
                                    
                                }    
                                
                                if(!$found)
                                {
                                     $data = array(
                                     
                                     'autometic_review'=> 0
                               	);
                                $this->getTemplateTable()->insertautometicreview($data);
                                
                                  $result .= '<td width="120">'.$file1.' at line number '.$line_number.'</td><td>class for Newsletter is missing</td><td class="'.$search.'" width="130"><a onclick="expand(\''.$search.'\');" style="cursor:pointer" title="Expand details">Expand details</a></td>'.'++';
                                }
                                
                                fclose($file);
                            }
                            else{
                                 $data = array(
                                     
                                     'autometic_review'=> 1
                               	);
                                $this->getTemplateTable()->insertautometicreview($data);
                            }
                            break;
                    }
                }                
            }
        }
    
        
        $data = file_get_contents( $_SERVER['DOCUMENT_ROOT'].'/xml/temp.xml' ); 
        $newfile = $_SERVER['DOCUMENT_ROOT'].'/xml/put.xml';
        file_put_contents( $newfile, $data );
        $temp = file_get_contents( $_SERVER['DOCUMENT_ROOT'].'/xml/put.xml' );
        $tempdata = $_SERVER['DOCUMENT_ROOT'].'/xml/temp.xml';
        file_put_contents( $tempdata, $temp );
        return new ViewModel(array('folders'=>$folders,'result'=>$result,'id'=>$id,'encryptedId'=>$encryptedId,'results'=>$devdetails));  
    }//path tested by dibyendu
        
   public function readDir($path) //added by Baishakhi
   {
    $hold = "";
  $dirHandle = opendir($path);
  while($item = readdir($dirHandle)) {
   
    $newPath = $path."/".$item;
    if(is_dir($newPath) && $item != '.' && $item != '..') {
    
       $parts = explode('.', $newPath);
       $extension = array_pop($parts);
     if( $extension == 'php' || $extension == 'html' || $extension == 'htm' ){
         $abc="";
         $abc= $newPath;
         $parts = Explode('/', $abc);
         $testPath = $this->getServiceLocator()->get('Config');
         $array = array_diff($parts, $testPath['pathName']['path']);
            $str_arr = implode("/",$array);  
             $currentUrl = $_SERVER["SERVER_NAME"];
             
         $hold .= $str_arr."|-|";
     
       }
       
      $hold .= $this->readDir($newPath);
    }
    else{
        
         $parts = explode('.', $newPath);
       $extension = array_pop($parts);
      if( $extension == 'php' || $extension == 'html' || $extension == 'htm'  ){
         $abc="";
         $abc= $path;
         $parts = Explode('/', $abc);$testPath = $this->getServiceLocator()->get('Config');
                   $array = array_diff($parts, $testPath['pathName']['path']);
          $str_arr = implode("/",$array); 
            $currentUrl = $_SERVER["SERVER_NAME"]; 
       $hold .= $str_arr."/".$item."|-|";
       }
   
    }
  }
  return $hold;
}//path tested by dibyendu
    
    public function getDirectory( $path = '.', $level = 0, $htmlNew = "") //added by Baishakhi
    { 
        $user_session = new Container('devId');
        $id  = $user_session->devId; 
        $res = $this->getTemplateTable()->selectTemplate($id);
        
        
        foreach($res as $row)
        {
            $folder =  $row['template_name'];
        }
        
        $ignore = array( 'cgi-bin', '.', '..' ); 
        
        
        $dh = @opendir($path); 
        
        
        while( false !== ( $file = @readdir( $dh ) ) )
        { 
            $dirArray[]=$file;
            
            if( !in_array( $file, $ignore ) )
            { 
                $spaces = str_repeat( '&nbsp;', ( $level * 4 ) ); 
                $abc="";
                $abc= $path;
                $parts = Explode('/', $abc);
                $testPath = $this->getServiceLocator()->get('Config');
         		$array = array_diff($parts, $testPath['pathName']['path']);
                
                
                $str_arr = implode("/",$array);  
                
                
                if( is_dir( "$path/$file" ))
                { 

                    $htmlNew .=$this->getDirectory( "$path/$file", ($level+1), $htmlNew); 
                } 
                else 
                {  
                    $currentUrl = $_SERVER["SERVER_NAME"];
                    
                    
                    $htmlNew .= "<div><a class='fileLink' href='#' cursor:pointer>$file</a><a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr/$file</a></div><br />";
                      
                } 
            } 
        } 
      
        closedir( $dh ); 

        return $htmlNew;

    } //path tested by dibyendu
    
    
    
     public function readDirs($path){ //added by Aritra
    $hold = "";
  $dirHandle = opendir($path);
  while($item = readdir($dirHandle)) {
   
    $newPath = $path."/".$item;
    if(is_dir($newPath) && $item != '.' && $item != '..') {
        
       $parts = explode('.', $newPath);
       $extension = array_pop($parts);
     if( $extension == 'php' || $extension == 'html' || $extension == 'htm' ){
         $abc="";
         $abc= $newPath;
         $parts = Explode('/', $abc);
         $testPath = $this->getServiceLocator()->get('Config');
         $array = array_diff($parts, $testPath['pathName']['path']);
            $str_arr = implode("/",$array);  
             $currentUrl = $_SERVER["SERVER_NAME"];
             
         $hold .= "<div class='mdiv'><div class='fname'><a id='lidet' style='cursor:pointer; width:auto;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr</a><a style='cursor:pointer;'>$str_arr</a></div><div class='flink'><a class='preview2' style='cursor:pointer;' onclick='requestUrlWithAjaxPreview(this.innerHTML)'>http://$currentUrl$str_arr</a><a class='preview' style='cursor:pointer;'>Preview</a></div></div><br/>";
     
       }
       
      $hold .= $this->readDirs($newPath);
    }
    else{
        
         $parts = explode('.', $newPath);
       $extension = array_pop($parts);
      if( $extension == 'php' || $extension == 'html' || $extension == 'htm'  ){
         $abc="";
         $abc= $path;
         $parts = Explode('/', $abc);
        $testPath = $this->getServiceLocator()->get('Config');
         $array = array_diff($parts, $testPath['pathName']['path']);
          $str_arr = implode("/",$array); 
            $currentUrl = $_SERVER["SERVER_NAME"]; 
       $hold .= "<div class='mdiv'><div class='fname'><a id='lidet' style='cursor:pointer;width:auto;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr/$item</a><a style='cursor:pointer;'>$item</a></div><div class='flink'><a style='cursor:pointer;' class='preview2' onclick='requestUrlWithAjaxPreview(this.innerHTML)'>http://$currentUrl$str_arr/$item</a><a class='preview' style='cursor:pointer;'>Preview</a></div></div>".'<br/>';
       }
   
    }
  } 
  return $hold;
}//path tested by dibyendu
    
    
    
    
    
   public function tempeditAction()  //added by Baishakhi
    {
        $folder = $this->getEvent()->getRouteMatch()->getParam('id');
        
        $retEditor = $this->readDirs( "/var/www/staging/public/files/$folder" );
        
        $request = $this->getRequest();
        
        $newdata = $request->getpost('read_file');
        $textvalurl = $request->getpost('textvalurl');
        
        if ($textvalurl != '') 
        {
            $part = Explode('/', $textvalurl);
            $array = array_diff($part, array('http:','54.72.188.10'));
            
            $str_arr1 = implode("/",$array);  
            
            $filename = "/var/www$str_arr1";
            if ($newdata != '') 
            {
                $fw = fopen($filename, 'w') or die('Could not open file!');
                
                $fb = fwrite($fw,stripslashes($newdata)) or die('Could not write
                to file');
                
                fclose($fw);
            }
            $fh = fopen($filename, "r") or die("Could not open file!");
            
            $data = fread($fh, filesize($filename)) or die("Could not read file!");
            
            
            // close file
            fclose($fh);
            return array('data'=>$data,'editor'=>$retEditor);
            
           
        
        }
        else
        {
            $filename ="/var/www/staging/public/files/$folder/index.php";
            if ($newdata != '') 
            {
                $fw = fopen($filename, 'w') or die('Could not open file!');
                
                $fb = fwrite($fw,stripslashes($newdata)) or die('Could not write
                to file');
                
                fclose($fw);
            }
            
            $fh = fopen($filename, "r") or die("Could not open file!");
            
            $data = fread($fh, filesize($filename)) or die("Could not read file!");
            //return array('data'=>$data);
            
            // close file
            fclose($fh);
              return array('data'=>$data,'editor'=>$retEditor);
        }
    }//path tested by dibyendu
    
    public function deleteAction() //added by Baishakhi and edited by Poulami
    {
        $id = (int) $this->params()->fromRoute('id');
        
        $user_session = new Container('devId');
        $userId  = $user_session->devId; 
        
        $template = $this->getTemplateTable()->fetchAll($id);
        
        
       $this->rcopy($_SERVER['DOCUMENT_ROOT'].'/files/'.$template->tempFoldName,$_SERVER['DOCUMENT_ROOT'].'/files_bak/'.$userId.'_'.$id.'_'.$template->tempFoldName.'_'.time());
        
        if($this->getTemplateTable()->delTemplate($userId,$id))
        {
            $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'dashboard'));
        }
    }//path tested by dibyendu
   
   /******************* added by Poulami to delete the folder ******************/ 
    public function rrmdir($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            
            foreach ($objects as $object) {
               if ($object != "." && $object != "..") {
                if (filetype($dir."/".$object) == "dir") 
                    $this->rrmdir($dir."/".$object);
                else unlink   ($dir."/".$object);
              }
            }
            reset($objects);
            rmdir($dir);
          }
    }//path tested by dibyendu
    
    /******************* added by Poulami to move the folder ******************/ 
    
    /******************* added by DIBYENDU to Encrypt or Decrypt******************/
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
    
    /******************* added by DIBYENDU to Encrypt or Decrypt ******************/
    public function rcopy($src, $dst) {
        
        if (is_dir ( $src )) {
            
            mkdir ($dst,0777,true);
            $files = scandir ( $src );
            foreach ( $files as $file )
            {
                if ($file != "." && $file != "..")
                {
                    $this->rcopy ( $src."/".$file, $dst."/".$file );
                   $this->rrmdir ($src);
                }
            }
        } else if (file_exists ( $src ))
            copy ( $src, $dst );
    } //path tested by dibyendu 
    
    public function getTemplateTable()  //added by Aritra
    {
        if (!$this->templateTable) {
         $sm = $this->getServiceLocator();
         $this->templateTable = $sm->get('Application\Model\TemplateTable');
        }
        return $this->templateTable;
    }
    
    public function getDeveloperTable() //added by Baishakhi
    {
        if (!$this->developerTable) {
         $sm = $this->getServiceLocator();
         $this->developerTable = $sm->get('Application\Model\DeveloperTable');
        }
        return $this->developerTable;
    }
    public function gettemplateCatagoryTable() //added by Dibyendu
    {
    	if (!$this->templateCatagoryTable)
    	{
    		$sm = $this->getServiceLocator();
    		$this->templateCatagoryTable = $sm->get('Application\Model\templateCatagoryTable');
    	}
    	return $this->templateCatagoryTable;
    }
    public function getcreateappTable() //added by Poulami
    {
        if (!$this->createappTable) {
         $sm = $this->getServiceLocator();
         $this->createappTable = $sm->get('Application\Model\createappTable');
        }
        return $this->createappTable;
    }

    
  
    
    
}
?>