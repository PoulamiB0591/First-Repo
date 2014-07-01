<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Template;
use Zend\Json\Json;
use Application\Form\ImageForm;
/**
 * DeveloperController
 *
 * @author
 *
 * @version
 *
 */
class FrontendController extends AbstractActionController {
	/**
	 * The default action - show the home page
	 */
    
    protected $developerTable,$templateTable; 

	
	public function indexAction()
	{
       $res = $this->getTemplateTable()->fetchTemplate();
       return new ViewModel(array('temp'=>$res)) ;
	}
    
 public function readDirs($path){
        
    $hold = "";
  $imgfile = 'http://'.$_SERVER["SERVER_NAME"].'/public';
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
         $array = array_diff($parts, array('var','www'));
            $str_arr = implode("/",$array);  
             $currentUrl = $_SERVER["SERVER_NAME"];
             
         $hold .= "<li><a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl/$str_arr</a><a style='cursor:pointer;'> <img src='$imgfile/images/slide_page_icon.png' alt='' />
            $str_arr</a></li>";
     
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
         $array = array_diff($parts, array('var','www'));
          $str_arr = implode("/",$array); 
            $currentUrl = $_SERVER["SERVER_NAME"]; 
                        
       $hold .= "<li><a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl/$str_arr/$item</a><a style='cursor:pointer;'><img src='$imgfile/images/slide_page_icon.png' alt='' />$item</a></li>";
       }
   
    }
  }
  return $hold;
}
    
    public function editAction()
    {
       $this->layout('layout/layout2.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');

        $retEditor = $this->readDirs( "/var/www/staging/public/files/$id" );        
       return new ViewModel(array('id' => $id,'editor'=>$retEditor)); 

       
    }
    
    
    public function nolayoutAction() {
    $viewModel = new ViewModel();
    $viewModel->setTerminal(true);
    return $viewModel;
}
    
    public function submitAction()
    {
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
       $request1 = $this->getRequest()->getPost();
       $filename = $request1['filename'];
            $request= $this->getRequest();
           $files =  $request->getFiles()->toArray();
           $fileName = $files[$filename]['name'];
          
           $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
           
           $uploadObj->setDestination(PUBLIC_PATH . '/files/'.$id.'/upload');
         $uri = $this->getRequest()->getUri();
         $urlimg = explode("/",$uri);
         $uri_image = array_diff($urlimg, array('Frontend','submit',$id));
         $upload = implode("/",$uri_image);
         $ups = $upload."/files/".$id."/upload/".$fileName;
         
             if($uploadObj->receive($fileName)) {
              echo $ups;
           } 
           exit;
       }
        
     public function ajaxeditAction()
     {
       // $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $request1 = $this->getRequest()->getPost();
        $imgdest = $request1['imgpath'];
        $imgid = $request1['imgid'];
        $imgsrc = $request1['imgsrc'];
        $height=$request1['high'];
        $width=$request1['widh'];
        $id = $request1['id'];
      
        //echo $height;
        //echo $width; 
        // echo $imgdest."||----||".$imgid."||====||".$imgsrc; exit;
        
        $path_to_file = 'D:\xampp\htdocs\zf_new\public\files\"'.$id.'"\index.php';
        $path_to_file= trim($path_to_file,'"');
      
        $path_to_file=str_replace('"','',$path_to_file);
       
        $file_contents = file_get_contents($path_to_file);
        
        if (strpos($file_contents,$imgid) !== false) {
        //echo $imgsrc;
        $file_contents = str_replace('<img id="'.$imgid.'" src="'.$imgsrc.'"','<img id="'.$imgid.'" src="'.$imgdest.'" style=" height:'.$height.'px; width:'.$width.'px;"',$file_contents);
        file_put_contents($path_to_file,$file_contents);
        echo "success";
        exit;

}
        //echo $imgpath."||".$imgid."||".$imgsrc; exit;
       
        //echo $request1['imgsrc'];
     } 

    
    
      public function ajaxtexteditAction()
     {
        $request1 = $this->getRequest()->getPost();
        $newtext = $request1['newtext']; 
        $oldtext = $request1['oldtext'];
        $path_to_file = 'D:\xampp\htdocs\zf_new\public\files\hmter\index.php';
        $file_contents = file_get_contents($path_to_file);
        
        if (strpos($file_contents,$oldtext) !== false) {
       
        $file_contents = str_replace($oldtext,$newtext,$file_contents);
        file_put_contents($path_to_file,$file_contents);
        echo $newtext;
       

}
else
{
    echo "failure";
}
        //echo $imgpath."||".$imgid."||".$imgsrc; exit;
 exit;       
        //echo $request1['imgsrc'];
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
    
?>    