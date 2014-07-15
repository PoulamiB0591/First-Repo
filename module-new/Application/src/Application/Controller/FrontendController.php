<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Template;
use Zend\Json\Json;
use Application\Form\ImageForm;
use Zend\Session\Container;
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
        // directory path $_SERVER['DOCUMENT_ROOT']
        //browser link domain $_SERVER["SERVER_NAME"];
        $res = $this->getTemplateTable()->fetchTemplate();
        return new ViewModel(array('temp'=>$res)) ;
    }
    
    public function readDirs($path)
    {
        
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
                    $array = array_diff($parts, array('var','www','staging','public'));
                    $str_arr = implode("/",$array);  
                    $currentUrl = $_SERVER["SERVER_NAME"];
                    $curl = explode($currentUrl);
                    $hold .= "<li><a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr</a><a style='cursor:pointer;'> <img src='$imgfile/images/slide_page_icon.png' alt='' />
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
                    $array = array_diff($parts, array('var','www','staging','public'));
                    
                    $str_arr = implode("/",$array); 
                    $currentUrl = $_SERVER["SERVER_NAME"]; 
                    
                    $hold .= "<li><a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr/$item</a><a style='cursor:pointer;'><img src='$imgfile/images/slide_page_icon.png' alt='' />$item</a></li>";
                }
                
            }
        }
        return $hold;
    }
    
    public function templatecopyAction()
    {
        $this->layout('layout/layout2.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $newname = rand(000,999)."-".$id;
        
        $source = $_SERVER['DOCUMENT_ROOT'].'/files/'.$id; // edited by koushik
        $dir = $_SERVER['DOCUMENT_ROOT'].'/user_template/';
        $target=$dir.$newname;
        
        $templateName = new Container('template');
        $templateName->templatename = $newname;
        
        
        $this->full_copy($source,$target);
        $this->redirect()->toRoute('application/default',array('controller'=>'Frontend','action'=>'edit','id'=>$newname));
        
    }
    
    public function templatecopy1Action()
    {
        $this->layout('layout/layout2.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $newname = rand(000,999)."-".$id;
        
        $source = $_SERVER['DOCUMENT_ROOT'].'/files/'.$id; // edited by koushik
        $dir = $_SERVER['DOCUMENT_ROOT'].'/user_template/';
        $target=$dir.$newname;
        
        $templateName = new Container('template');
        $templateName->templatename = $newname;
        
        
        $this->full_copy($source,$target);
        $this->redirect()->toRoute('application/default',array('controller'=>'Frontend','action'=>'edit','id'=>$newname));
        
    }
    
    public function editAction()
    {
        
        $this->layout('layout/layout2.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $retEditor = $this->readDirs( $_SERVER['DOCUMENT_ROOT']."/files/$id" );        
        return new ViewModel(array('id' => $id,'editor'=>$retEditor)); 
    
    
    }
    
    public function edit1Action()
    {
        
        $this->layout('layout/layout3.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $retEditor = $this->readDirs( $_SERVER['DOCUMENT_ROOT']."/files/$id" );        
        return new ViewModel(array('id' => $id,'editor'=>$retEditor)); 
    
    
    }
    
    
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
    
    public function nolayoutAction() {
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        return $viewModel;
    }
    
    public function submitAction()
    {
        $this->layout('layout/blank.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $request1 = $this->getRequest()->getPost();
        $filename = $request1['filename'];
        $request= $this->getRequest();
        $files =  $request->getFiles()->toArray();
        $fileName = $files[$filename]['name'];
        
        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
        
        $uploadObj->setDestination(PUBLIC_PATH . '/user_template/'.$id.'/upload');
        $uri = $this->getRequest()->getUri();
        $urlimg = explode("/",$uri);
        $uri_image = array_diff($urlimg, array('Frontend','submit',$id));
        $upload = implode("/",$uri_image);
        
        $ups = $upload."/user_template/".$id."/upload/".$fileName;
        
        if($uploadObj->receive($fileName)) {
            echo $ups;
        } 
        exit;
    }
    
    public function dragdropuploadAction()
    {
        $this->layout('layout/blank.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $str = file_get_contents('php://input');
        $uri = $this->getRequest()->getUri();
        $urlimg = explode("/",$uri);
        $uri_image = array_diff($urlimg, array('Frontend','dragdropupload',$id));
        $upload = implode("/",$uri_image);
        
        $filename = md5(time()).".jpg";
        $ups = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/upload/".$filename;
        file_put_contents($ups,$str);
        echo $ups = $upload."/user_template/".$id."/upload/".$filename; 
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
        
        $path_to_file = '/var/www/staging/public/files/"'.$id.'"\index.php';
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
    
    
    
    public function savetemplateAction()
    {
        $this->layout('layout/blank.phtml');  
        $res = array();
        $res['error'] = 1;      
        $templateName = explode("/",$_POST['tempName']);
        $templatePath = $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$templateName[count($templateName) - 1].'/index.php';
        chmod($templatePath, 0777);
        $fh = fopen($templatePath, 'w') or die("can't open file");
        fwrite($fh, $_POST['html']);
        fclose($fh);
        exit;
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