<?php
//added by Poulami
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Template;
use Application\Form\UploadForm;

use Zend\Http\PhpEnvironment\Request;
use Zend\Session\Container;

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
    
    public function addTemplateAction() //edited by Poulami
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
            
            $data1 = array('devId'=>$id,'templateName'=>$data['templateName'],'scImage'=>$data['scImage']['name'],'tempZipName'=>$data['file']['name']);
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
                            echo "<br>Uploaded Successfully";
                        }
                        else
                        {
                            rmdir($dirPath);
                            echo "UPLOAD .jpg or .jpeg or .png format screenshot image";
                        }
                        
                   }
                   else
                   {
            
                     $files = glob($_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$nameExt[0].'/*.*');
                              foreach($files as $file)
                                  @unlink($file);
                                  
                      if(is_dir($_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$nameExt[0])){ rmdir($_SERVER['DOCUMENT_ROOT'].'/staging/public/files/'.$nameExt[0]);  }             
                    
                     echo "<br>index file is missing.Sorry to upload!!";   
                     
                   }
                } 
                else
                {
                    echo "Please upload zip file only";
                }      
                
            } 
                $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'dashboard')); //added by Poulami
        }
    } 
    
    public function getTemplateTable()
    {
        if (!$this->templateTable) {
         $sm = $this->getServiceLocator();
         $this->templateTable = $sm->get('Application\Model\TemplateTable');
        }
        return $this->templateTable;
    }
    
    public function getDirectory( $path = '.', $level = 0){ 
   
         $user_session = new Container('devId');
        $id  = $user_session->devId; 
    $res = $this->getTemplateTable()->selectTemplate($id);

      foreach($res as $row){
        $folder =  $row['template_name'];
        
      }
//$file=array();
//$fileLink = array();
//$dir_arr=array();
$ignore = array( 'cgi-bin', '.', '..' ); 
    

    $dh = @opendir($path); 
    echo $path;  
     
    while( false !== ( $file = @readdir( $dh ) ) ){ 
   $dirArray[]=$file;
  
     
        if( !in_array( $file, $ignore ) ){ 
       
             
            $spaces = str_repeat( '&nbsp;', ( $level * 4 ) ); 
      $abc="";
      $abc= $path;
      $parts = Explode('/', $abc);
      $array = array_diff($parts, array('var','www'));
         
      
        $str_arr = implode("/",$array);  
                 
             
            if( is_dir( "$path/$file" )){ 
        echo "in if check";
              echo "<div class='site'>";
    echo "<div class='container-fluid'><div class='dirleft col-lg-3'><strong>$spaces $file</strong><br />"; 
               // $dir_arr = "$spaces $file";
                $this->getDirectory( "$path/$file", ($level+1)); 
              
             
            } else { 
            	echo "in else check";
               $currentUrl = $_SERVER["SERVER_NAME"];
                    
             
                echo "<div><a class='fileLink' href='#' cursor:pointer>$file</a><a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl/$str_arr/$file</a></div><br />";  
             
                //$file= "http://$currentUrl/$str_arr/$file";
                //$fileLink[]= "$file";
 
          
             
            } 
    
        } 
        
        
    } 
   
      
     
    closedir( $dh ); 
    // Close the directory handle 
    
   // return new ViewModel(array(
//           
//            'fileLink' => $fileLink,
//        ));

} 
    
public function tempeditAction() {


    $folder = $this->getEvent()->getRouteMatch()->getParam('id');

   $retEditor = $this->getDirectory( "/var/www/staging/public/files/$folder" );
      
       $request = $this->getRequest();
       
    
    
   $newdata = $request->getpost('read_file');
  $textvalurl = $request->getpost('textvalurl');
  
   if ($textvalurl != '') {
   $part = Explode('/', $textvalurl);
      $array = array_diff($part, array('http:','54.72.188.10'));

        $str_arr1 = implode("/",$array);  

   $filename = "/var/www$str_arr1";
if ($newdata != '') {


$fw = fopen($filename, 'w') or die('Could not open file!');

$fb = fwrite($fw,stripslashes($newdata)) or die('Could not write
to file');

fclose($fw);
}

  $fh = fopen($filename, "r") or die("Could not open file!");

$data = fread($fh, filesize($filename)) or die("Could not read file!");
 return array('data'=>$data);
 
// close file
  fclose($fh);
   return $retEditor;
   
 }
 else{
    $filename ="/var/www/staging/public/files/$folder/index.php";
if ($newdata != '') {


$fw = fopen($filename, 'w') or die('Could not open file!');

$fb = fwrite($fw,stripslashes($newdata)) or die('Could not write
to file');

fclose($fw);
}

  $fh = fopen($filename, "r") or die("Could not open file!");

$data = fread($fh, filesize($filename)) or die("Could not read file!");
 return array('data'=>$data);
 
// close file
  fclose($fh);
   return $retEditor;
   
 }
 
  //// return new ViewModel(array(
//            'tempname' => $this->getTemplateTable()->selectTemplate($id),
//        ));
}

 public function tempdetailsAction() {
   
    
    $user_session = new Container('devId');
        $id  = $user_session->devId; 
        
        return new ViewModel(array(
            'templates' =>  $this->getTemplateTable()->selectTemplate($id),
        ));
     
    
    
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
    
    

    
  
    
    
}