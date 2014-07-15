<?php
//added by Poulami
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Template;
use Application\Form\UploadForm;

use Zend\Http\PhpEnvironment\Request;
use Zend\Session\Container;

use Zend\Mail;
use Zend\Mail\Message;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;
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
    
    protected $templateTable; 

	
	public function indexAction() //added by Poulami
    {
        $folder = $this->getEvent()->getRouteMatch()->getParam('id');
        if($folder == ""){
             $uform = new UploadForm();

        $user_session = new Container('devId');
        $id = $user_session->devId;
        
        $uform->get('devId')->setAttribute('value', $id);
        
        
        $view = new ViewModel(array('uform'=>$uform));
                 
        return $view;
            
        }
        else
        {
             $uform = new UploadForm();

        $user_session = new Container('devId');
        $id = $user_session->devId;
        
        $uform->get('devId')->setAttribute('value', $id);
        
        
        $view = new ViewModel(array('uform'=>$uform));
                 
        return $view;
        }
       
    }   
    
    public function addtemplateAction() //edited by Poulami
    {
        $user_session = new Container('devId');
        $id = $user_session->devId;
        $uform   = new UploadForm();
       
        $request = $this->getRequest();
       
        if($request->isPost())
        {
            /******* added by Poulami ******/
            $template = new Template();
            
            $data = array_merge( 
                $this->getRequest()->getPost()->toArray(), $this->getRequest()->getFiles()->toArray() 
            ); 
            
            $file = $_SERVER['DOCUMENT_ROOT'].'/files/'.$data['templateName'];
            
            if (false === file_exists($file)) 
            {          
                $data1 = array('devId'=>$id,'templateName'=>$data['templateName'],'templateDesc'=>$data['templateDesc'],'scImage'=>$data['scImage']['name'],'tempZipName'=>$data['file']['name'],'approval'=>'');
                $fileName = $data['file']['name'];
                $scName   = $data['scImage']['name'];
                
                $nameExt = explode(".",$fileName);
                $scExt   = explode(".",$scName);
                
                $dirPath = $_SERVER['DOCUMENT_ROOT'].'/files/'.$data['templateName'];
                
                $uform->setData($data1);
                
                if($uform->isValid())
                {
                    
                    $template->exchangeArray($data1);
                    /******* added by Poulami ends ******/ 
                    if($nameExt[1] == "zip")
                    {
    
                        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                           
                        $uploadObj->setDestination($_SERVER['DOCUMENT_ROOT'].'/files');
                        
                          if($uploadObj->receive($fileName)) {
                             mkdir($dirPath,0777,true); //added by Poulami
                        }
                        
                        
                        $filter = new \Zend\Filter\Decompress(array(
                                        'adapter' => 'Zip',
                                        'options' => array(
                                        'target' => $_SERVER['DOCUMENT_ROOT'].'/files/'.$data['templateName'],
                                                            )
                                                            ));
                                                                      
                       $decompressed = $filter->filter($_SERVER['DOCUMENT_ROOT'].'/files/'.$fileName); 
                       
                       
                       if(is_file($dirPath.'/index.php') == "true") //added by Poulami
                       {
                            if($scExt[1] == 'jpg' || $scExt[1] == 'jpeg' || $scExt[1] == 'png')
                            {
                                /******* the screenshot image is moved to the unzipped folder ********/
                                $mfilter = new \Zend\Filter\File\RenameUpload($_SERVER['DOCUMENT_ROOT'].'/files/'.$data['templateName']);
    
                                $mfilter->setUseUploadName(true);
                                $mfilter->filter($data['scImage']);
                                /********** the screenshot image is moved to the unzipped folder ends **********/
                                
                               $this->getTemplateTable()->saveTemplate($template);
                                
                                
                                $result = $this->getDeveloperTable()->fetchEmail($id) ;                                 
                                //echo $result[0]['eId'];exit;
                                
                                /************** a mail is sent to admin *****************/
                                /*   $from = 'info@smartfanpage.com';
                                $to = 'koushik.roy@delgence.com';
                                $subject = 'TestSubject';
                                $textPart = new MimePart('This is the text of the mail');
                                $textPart->type = "text/plain";
                                $body = new MimeMessage();
                                $body->setParts(array($textPart));
                                $message = new MailMessage();
                                $message->setFrom($from);
                                $message->addTo($to);
                                $message->setSubject($subject);
                                
                                $message->setEncoding("UTF-8");
                                $message->setBody($body);
                                $message->getHeaders()->get('content-type')->setType('multipart/alternative');
                                
                                $transport = new MailTransportSendmail();
                                $transport->send($message);
                                $msg = "<br>Uploaded Successfully";*************/

                                $message = new Message();
                                $message->addTo($result[0]['eId'])
                                ->addFrom('baishakhidelgence@gmail.com')
                                ->setSubject('Greetings and Salutations!')
                                ->setBody("Thank you for uploading template");
                                $smtpOptions = new \Zend\Mail\Transport\SmtpOptions();

                                $smtpOptions->setHost('smtp.gmail.com')
                                ->setConnectionClass('login')
                                ->setName('smtp.gmail.com')
                                ->setConnectionConfig(array(
                                'username' => 'baishakhidelgence@gmail.com',
                                'password' => 'delgence@1234',
                                'ssl' => 'tls',
                                'port'=>465,
                                                           ));

$transport = new \Zend\Mail\Transport\Smtp($smtpOptions);
$transport->send($message);
                                
                                //echo "<br>Uploaded Successfully";
                            }
                            else
                            {
                                rmdir($dirPath);
                                
                                $msg = "UPLOAD .jpg or .jpeg or .png format screenshot image";
                                
                                return new ViewModel(array('msg'=>$msg)) ;
                                //echo "UPLOAD .jpg or .jpeg or .png format screenshot image";
                            }
                            
                       }
                       else
                       {
                
                         $files = glob($_SERVER['DOCUMENT_ROOT'].'/files/'.$nameExt[0].'/*.*');
                                  foreach($files as $file)
                                      @unlink($file);
                                      
                         if(is_dir($_SERVER['DOCUMENT_ROOT'].'/files/'.$nameExt[0])){ rmdir($_SERVER['DOCUMENT_ROOT'].'/files/'.$nameExt[0]);  }             
                        
                         $msg = "<br>index file is missing.Sorry to upload!!";
                                
                         return new ViewModel(array('msg'=>$msg)) ;
                         
                        // echo "<br>index file is missing.Sorry to upload!!";   
                         
                       }
                    } 
                    else
                    {
                        $msg = "Please upload zip file only";
                                
                        return new ViewModel(array('msg'=>$msg)) ;
                        //echo "Please upload zip file only";
                    }      
                    
                }
            } 
            else
            {
                $msg = "Template with same name exists";
                                
                return new ViewModel(array('msg'=>$msg)) ;
               // echo "Template with same name exists";exit;
            }
                //$this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'dashboard')); //added by Poulami
                $this->redirect()->toRoute('application/default',array('controller'=>'template','action'=>'setup','id'=>$data['templateName'])); //added by Aritra

        }
    }
    
    public function setupAction()
    {
        $folder = $this->getEvent()->getRouteMatch()->getParam('id');
        return new ViewModel(array('folder'=>$folder));
    } 
    
    public function validationAction()
    {
      $folders = $this->getEvent()->getRouteMatch()->getParam('id');
      
      $dir = $_SERVER['DOCUMENT_ROOT']."/files/".$folders;
       $retEditor = $this->readDir($dir);
       $res = explode("|-|",$retEditor);
$i=0;
foreach($res as $file1){
    $i++;
    
  if($file1 != ""){
  //echo "http://test.scampaigns.com/files".$file1;
$file = fopen("http://test.scampaigns.com/files".$file1,"r");
$abc="";
while(! feof($file))
  {
  $abc .= fgets($file). "<br />";
  }
fclose($file);

if(!strpos($abc,"<form start>"))
         {
         if(!strpos($abc,"</form end>")){
            $result .= "<td width='120'>".$file1."</td><td>start-tag and End-tag are missing</td><td width='130'><a href='#' title='Expand details'>Expand details</a></td>"."++";
              }
              else
              {
           $result .= "<td width='120'>".$file1."</td><td>start-tag is missing</td><td width='130'><a href='#' title='Expand details'>Expand details</a></td>"."|/|";
              }
          }
        else {
            $result .= "<td width='120'>".$file1."</td><td>End-tag is missing</td><td width='130'><a href='#' title='Expand details'>Expand details</a></td>"."|/|";
         }
}
}


        return new ViewModel(array('folders'=>$folders,'result'=>$result));  
        }
        
         public function readDir($path){
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
         $array = array_diff($parts, array('var','www','staging','public','files'));
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
         $parts = Explode('/', $abc);
         $array = array_diff($parts, array('var','www','staging','public','files'));
          $str_arr = implode("/",$array); 
            $currentUrl = $_SERVER["SERVER_NAME"]; 
       $hold .= $str_arr."/".$item."|-|";
       }
   
    }
  }
  return $hold;
}
    
    public function getDirectory( $path = '.', $level = 0, $htmlNew = "")
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
                $array = array_diff($parts, array('var','www','staging','public'));
                
                
                $str_arr = implode("/",$array);  
                
                
                if( is_dir( "$path/$file" ))
                { 
                   //$htmlNew .= "<strong>$spaces $file</strong><br />"; 
                    // $dir_arr = "$spaces $file";
                    $htmlNew .=$this->getDirectory( "$path/$file", ($level+1), $htmlNew); 
                } 
                else 
                {  
                    $currentUrl = $_SERVER["SERVER_NAME"];
                    
                    
                    $htmlNew .= "<div><a class='fileLink' href='#' cursor:pointer>$file</a><a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr/$file</a></div><br />";
                      
                } 
            } 
        } 
       // echo $htmlNew;
        closedir( $dh ); 

        return $htmlNew;

    } 
    
    
    
     public function readDirs($path){
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
         $array = array_diff($parts, array('var','www','staging','public'));
            $str_arr = implode("/",$array);  
             $currentUrl = $_SERVER["SERVER_NAME"];
             
         $hold .= "<a id='lidet' style='cursor:pointer; width:auto;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr</a><a style='cursor:pointer;'>$str_arr</a><a class='preview2' onclick='requestUrlWithAjaxPreview(this.innerHTML)'>http://$currentUrl$str_arr</a><a class='preview' style='cursor:pointer;'>Preview</a><br/>";
     
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
         $array = array_diff($parts, array('var','www','staging','public'));
          $str_arr = implode("/",$array); 
            $currentUrl = $_SERVER["SERVER_NAME"]; 
       $hold .= "<a id='lidet' style='cursor:pointer;width:auto;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr/$item</a><a style='cursor:pointer;'>$item</a><a class='preview2' onclick='requestUrlWithAjaxPreview(this.innerHTML)'>http://$currentUrl$str_arr/$item</a><a class='preview' style='cursor:pointer;'>Preview</a>".'<br/>';
       }
   
    }
  }
  return $hold;
}
    
    
    
    
    
   public function tempeditAction() 
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
    }
    public function deleteAction()
    {
        $id = (int) $this->params()->fromRoute('id');
        
        $template = $this->getTemplateTable()->fetchAll($id);
        
        
        $files = glob($_SERVER['DOCUMENT_ROOT'].'/files/'.$template->templateName.'/*.*');
                              foreach($files as $file)
                                  @unlink($file);
        rmdir($_SERVER['DOCUMENT_ROOT'].'/files/'.$template->templateName);                         
        @unlink($_SERVER['DOCUMENT_ROOT'].'/files/'.$template->tempZipName); 
        
        
        $this->getTemplateTable()->delTemplate($id);
        $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'dashboard'));
    }
    
    public function getTemplateTable() 
    {
        if (!$this->templateTable) {
         $sm = $this->getServiceLocator();
         $this->templateTable = $sm->get('Application\Model\TemplateTable');
        }
        return $this->templateTable;
    }
    
    public function getDeveloperTable()
    {
        if (!$this->developerTable) {
         $sm = $this->getServiceLocator();
         $this->developerTable = $sm->get('Application\Model\DeveloperTable');
        }
        return $this->developerTable;
    }

    
  
    
    
}