<?php

namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Application\Model\Admin;
use Application\Model\Developer;
use Application\Model\Template;

use Application\Form\DForm;
use Application\Form\UploadForm;

use Zend\Session\Container;
use Zend\Mail;
/**
 * DeveloperController
 *
 * @author
 *
 * @version
 *
 */
class AdminController extends AbstractActionController {
	/**
	 * The default action - show the home page
	 */
    
    protected $developerTable,$templateTable,$adminTable;
    
    public function indexAction()
    {
        $dForm   = new DForm();
        $dForm->get('submit')->setValue('LOGIN');
        return array('form'=> $dForm);
    }    
    
    public function loginAction()
    {
        $dForm   = new DForm();
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $admin = new Admin();
            $dForm->setData($request->getPost());
            
            $uname = $request->getPost('uname');
            $pwd = $request->getPost('pwd');
            
            if($dForm->isValid())
            {
                $admin->exchangeArray($dForm->getData());
                if($this->getAdminTable()->getAdmin($uname,$pwd))
                {
                    $this->redirect()->toRoute('application/default',array('controller'=>'admin','action'=>'devdetails'));
                }
                else
                {
                    $this->redirect()->toRoute('application/default',array('controller'=>'admin'));
                }
            }
        }
    }
    
    public function devdetailsAction()
    {
        
      return new ViewModel(array(
            'developers' => $this->getDeveloperTable()->fetchAll(),
        ));
                
    }
    public function devtemplateAction() //added by Poulami
    {
         $id = $this->getEvent()->getRouteMatch()->getParam('id');
         $result = $this->getResultTable()->getResult($id);
           return new ViewModel(array(
            'temp' => $this->getResultTable()->getResult($id),
        ));
        
        
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
         $array = array_diff($parts, array('var','www'));
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
         $array = array_diff($parts, array('var','www'));
          $str_arr = implode("/",$array); 
            $currentUrl = $_SERVER["SERVER_NAME"]; 
       $hold .= "<a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl/$str_arr/$item</a><a style='cursor:pointer;'>$item</a>".'<br/>';
       }
   
    }
  }
  return $hold;
}
    
    public function tempfileAction(){
        
        $temp_name = $this->getEvent()->getRouteMatch()->getParam('id');
        $devId = $this->getEvent()->getRouteMatch()->getParam('devId');
    
         $retEditor = $this->readDirs( "/var/www/staging/public/files/$temp_name");
        
             return new ViewModel(array(
            'editor' => $retEditor,
            'devId'=>$devId,
            'temp_name'=>$temp_name
        ));
         
       
         
         
        
    }
    
    
    public function tempapproveAction(){
        
        $devId = $this->getEvent()->getRouteMatch()->getParam('devId');
        $temp_name = $this->getEvent()->getRouteMatch()->getParam('id');
         $result = $this->getResultTable()->approveTemplate($temp_name,$devId) ;
         $resultemail = $this->getDeveloperTable()->fetchEmail($devId) ;
         $mail = new Mail\Message();
         $mail->setBody('Your code is approved by admin.');
        $mail->setFrom('baishakhi@delgence.com', 'Sender\'s name');
        $mail->addTo($resultemail[0]['eId']);
        $mail->setSubject('Aproval message from SFP Admin');

      $transport = new Mail\Transport\Sendmail();
     $transport->send($mail);
         
          $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'devtemplate','devId'=>$devId));
  
    }
    
    
      public function temprejectAction(){
        
        $devId = $this->getEvent()->getRouteMatch()->getParam('devId');
        $temp_name = $this->getEvent()->getRouteMatch()->getParam('id');
         $result = $this->getResultTable()->rejectTemplate($temp_name,$devId) ;
           $resultemail = $this->getDeveloperTable()->fetchEmail($devId) ;
         $mail = new Mail\Message();
         $mail->setBody('Your code is approved by admin.');
        $mail->setFrom('baishakhi@delgence.com', 'Sender\'s name');
        $mail->addTo($resultemail[0]['eId']);
        $mail->setSubject('Aproval message from SFP Admin');

      $transport = new Mail\Transport\Sendmail();
     $transport->send($mail);
          $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'devtemplate','devId'=>$devId));
          
   
    }
    
    public function logoutAction()
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));    
    }
    
    public function getAdminTable()
    {
        if (!$this->adminTable) {
         $sm = $this->getServiceLocator();
         $this->adminTable = $sm->get('Application\Model\AdminTable');
        }
        return $this->adminTable;
    }
    
    public function getDeveloperTable()
    {
        if (!$this->developerTable) {
         $sm = $this->getServiceLocator();
         $this->developerTable = $sm->get('Application\Model\DeveloperTable');
        }
        return $this->developerTable;
    }
    
    public function getResultTable()
    {
        if (!$this->templateTable) {
         $sm = $this->getServiceLocator();
         $this->templateTable = $sm->get('Application\Model\TemplateTable');
        }
        return $this->templateTable;
    }
    
}
?>