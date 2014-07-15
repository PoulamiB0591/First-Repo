<?php
//Added by Poulami
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Developer;
use Application\Model\Template;
use Application\Form\DForm;
use Application\Form\UploadForm;
use Zend\Session\Container;
/**
 * DeveloperController
 *
 * @author
 *
 * @version
 *
 */
class DeveloperController extends AbstractActionController {
	/**
	 * The default action - show the home page
	 */
    
    protected $developerTable,$templateTable; 

	
	public function indexAction()
	{
	   
       /*$title = 'Add a Developer';
       $this->headTitle($title);*/
       
		$dForm   = new DForm();
        return array('form'=> $dForm);
	}
    
    public function dashboardAction() //added by Poulami
    {
        $user_session = new Container('devId');
        $id  = $user_session->devId; 
        
        $result = $this->getTemplateTable()->getTemplate($id);
        
        
        if($result['result'] == '1')
        {
            $this->redirect()->toRoute('application/default',array('controller'=>'template'));
        }
        else
        {
            return new ViewModel(array(
                    'templates' => $result['result'], 'count'=>$result['count']
                ));
        }
    }
    
    
    public function addAction() //edited by Poulami
    {
        $dForm   = new DForm();
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $developer = new Developer();
            $dForm->setData($request->getPost());
            
            if($dForm->isValid())
            {
                $developer->exchangeArray($dForm->getData());
                $this->getDeveloperTable()->saveDeveloper($developer);
                
                $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'dashboard'));
            }
        } 
    }
    
    public function getAction()
    {
        
      return new ViewModel(array(
            'developers' => $this->getDeveloperTable()->fetchAll(),
        ));
                
    }
    
    public function editAction() //added by Poulami
    {
        $id = (int) $this->params()->fromRoute('id');
        //return array('developers'=> $this->getDeveloperTable()->getDeveloper($id));
        try{
            $developers = $this->getDeveloperTable()->getDeveloper($id); 
        }
        catch( \Exception $e)
        {
            return $this->redirect()->toRoute('applicaton/default',array('controller'=>'developer','action'=>'get'));
        }
        
        $dForm   = new DForm();
        $dForm -> bind($developers);
        $dForm -> get('submit') -> setValue('UPDATE');
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $developer = new Developer();
            $dForm->setData($request->getPost());
            
            if($dForm->isValid())
            {
                $this->getDeveloperTable()->saveDeveloper($developer);
            }
        }
        
        return array('form'=> $dForm);
           
    }
    
    public function deleteAction() //edited by Poulami
    {
        $id = (int) $this->params()->fromRoute('id');
        $this->getDeveloperTable()->delDeveloper($id);
        
        $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'get'));
        
    }  
         
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
    
    
    
 /*public function getDirectory( $path = '.', $level = 0){ 
   
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
   
     
    while( false !== ( $file = @readdir( $dh ) ) ){ 
   $dirArray[]=$file;
  
     
        if( !in_array( $file, $ignore ) ){ 
       
             
            $spaces = str_repeat( '&nbsp;', ( $level * 4 ) ); 
      $abc="";
      $abc= $path;
      $parts = Explode('/', $abc);
      $array = array_diff($parts, array('xampp','D:','htdocs'));
         
      
        $str_arr = implode("/",$array);  
                 
             
            if( is_dir( "$path/$file" )){ 
        
             
                echo "<strong>$spaces $file</strong><br /><br />"; 
               // $dir_arr = "$spaces $file";
                $this->getDirectory( "$path/$file", ($level+1)); 
              
             
            } else { 
               $currentUrl = $_SERVER["SERVER_NAME"];
                    
             
                echo "<a class='fileLink' href='#' cursor:pointer><li id='lidet' style='opacity:0;' onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl/$str_arr/$file</li>$file</a><br />";  
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
    
public function testAction() {
     $user_session = new Container('devId');
        $id  = $user_session->devId; 
        
  
      $res = $this->getTemplateTable()->selectTemplate($id);
      
      foreach($res as $row){
        $folder =  $row['template_name'];
        
      }
   $retEditor = $this->getDirectory( "D:/xampp/htdocs/zf_new/public/files/$folder" );
      
       $request = $this->getRequest();
    
   $newdata = $request->getpost('read_file');
  $textvalurl = $request->getpost('textvalurl');
  
   if ($textvalurl != '') {
   $part = Explode('/', $textvalurl);
      $array = array_diff($part, array('http:','localhost'));

        $str_arr1 = implode("/",$array);  

   $filename = "D:/xampp/htdocs$str_arr1";
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
    $filename ="D:/xampp/htdocs/zf_new/public/files/$folder/index.php";
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
}*/

     

    
    
}