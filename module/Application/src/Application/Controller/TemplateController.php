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
use ZendMail;
use ZendMimeMessage as MimeMessage;
use ZendMimePart as MimePart;
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
        $uform = new UploadForm();

        $user_session = new Container('devId');
        $id = $user_session->devId;
        
        $uform->get('devId')->setAttribute('value', $id);
        
        
        $view = new ViewModel(array('uform'=>$uform));
                 
        return $view;
    }   
    
    public function addtemplateAction() //edited by Poulami
    {
        $user_session = new Container('devId');
        $id = $user_session->devId;
        
        $uform   = new UploadForm();
       
        $request = $this->getRequest();
        print_r($request); exit;
        if($request->isPost())
        {
            /******* added by Poulami ******/
            $template = new Template();
            
            $data = array_merge( 
                $this->getRequest()->getPost()->toArray(), $this->getRequest()->getFiles()->toArray() 
            ); 
            
            $file = $_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$data['templateName'];
            
            if (false === file_exists($file)) 
            {          
                $data1 = array('devId'=>$id,'templateName'=>$data['templateName'],'templateDesc'=>$data['templateDesc'],'scImage'=>$data['scImage']['name'],'tempZipName'=>$data['file']['name'],'approval'=>'');
                $fileName = $data['file']['name'];
                $scName   = $data['scImage']['name'];
                
                $nameExt = explode(".",$fileName);
                $scExt   = explode(".",$scName);
                
                $dirPath = $_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$data['templateName'];
                
                $uform->setData($data1);
                
                if($uform->isValid())
                {
                    
                    $template->exchangeArray($data1);
                    /******* added by Poulami ends ******/ 
                    if($nameExt[1] == "zip")
                    {
    
                        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                           
                        $uploadObj->setDestination($_SERVER['DOCUMENT_ROOT'].'/staging/public/files');
                        
                          if($uploadObj->receive($fileName)) {
                             mkdir($dirPath,0777,true); //added by Poulami
                        }
                        
                        
                        $filter = new \Zend\Filter\Decompress(array(
                                        'adapter' => 'Zip',
                                        'options' => array(
                                        'target' => $_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$data['templateName'],
                                                            )
                                                            ));
                                                                      
                       $decompressed = $filter->filter($_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$fileName); 
                       
                       
                       if(is_file($dirPath.'/index.php') == "true") //added by Poulami
                       {
                            if($scExt[1] == 'jpg' || $scExt[1] == 'jpeg' || $scExt[1] == 'png')
                            {
                                /******* the screenshot image is moved to the unzipped folder ********/
                                $mfilter = new \Zend\Filter\File\RenameUpload($_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$data['templateName']);
    
                                $mfilter->setUseUploadName(true);
                                $mfilter->filter($data['scImage']);
                                /********** the screenshot image is moved to the unzipped folder ends **********/
                                
                                $this->getTemplateTable()->saveTemplate($template);
                                
                                /************** a mail is sent to admin *****************/
                                $from = 'info@smartfanpage.com';
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
                                $msg = "<br>Uploaded Successfully";
                                
                                
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
                
                         $files = glob($_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$nameExt[0].'/*.*');
                                  foreach($files as $file)
                                      @unlink($file);
                                      
                         if(is_dir($_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$nameExt[0])){ rmdir($_SERVER['DOCUMENT_ROOT'].'/zf_new/public/files/'.$nameExt[0]);  }             
                        
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
                $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'dashboard')); //added by Poulami
        }
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
                $array = array_diff($parts, array('xampp','D:','htdocs'));
                
                
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
                    
                    
                    $htmlNew .= "<div><a class='fileLink' href='#' cursor:pointer>$file</a><a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl/$str_arr/$file</a></div><br />";
                      
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
         $array = array_diff($parts, array('xampp','D:','htdocs'));
            $str_arr = implode("/",$array);  
             $currentUrl = $_SERVER["SERVER_NAME"];
             
         $hold .= "<a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl/$str_arr</a><a style='cursor:pointer;'>$str_arr</a><br/>";
     
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
         $array = array_diff($parts, array('xampp','D:','htdocs'));
          $str_arr = implode("/",$array); 
            $currentUrl = $_SERVER["SERVER_NAME"]; 
       $hold .= "<a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl/$str_arr/$item</a><a style='cursor:pointer;'>$item</a>".'<br/>';
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
        
        
        $files = glob($_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$template->templateName.'/*.*');
                              foreach($files as $file)
                                  @unlink($file);
        rmdir($_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$template->templateName);                         
        @unlink($_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$template->tempZipName); 
        
        
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

    
  
    
    
}