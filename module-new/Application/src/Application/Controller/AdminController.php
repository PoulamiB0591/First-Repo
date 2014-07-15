<?php

namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Application\Model\Admin;
use Application\Model\Developer;
use Application\Model\Template;
use Application\Model\Listing;
use Application\Model\templateimages;
use Application\Form\DForm;
use Application\Form\UploadForm;
use Application\Form\UploadForm2;
use Application\Model\homepageslidertable;
use Application\Form\homepageslidertableForm;
use Application\Model\homepagewalloffame;
use Application\Form\homepagewalloffameForm;
use Application\Model\becomepublisher;
use Application\Form\becomepublisherForm;
use Application\Model\casestudies;
use Application\Form\casestudiesForm;
use Application\Form\templateimagesForm;
use Application\Model\homepagetable;
use Application\Model\howsworkpagetble;
use Application\Model\howsworkstepstble;
use Application\Form\HowsworkForm;
use Application\Form\HowsworkstepForm;
use Application\Model\becomepublisherbanner;
use Application\Form\becomepublisherbannerForm;
use Application\Model\templatestoretble;
use Application\Form\TemplateForm;

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
class AdminController extends AbstractActionController {
	/**
	 * The default action - show the home page
	 */
    
    protected $developerTable,$templateTable,$becomepublisherbannerTable,$adminTable;
    protected $templatestoretbleTable,$listingTable,$homepageslidertableTable,$homepagewalloffameTable,$becomepublisherTable,$casestudiesTable,$templateimagesTable,$homepagetableTable,$howsworkpagetbleTable,$howsworkstepstbleTable;
    
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
         $array = array_diff($parts, array('var','www','staging','public'));
            $str_arr = implode("/",$array);  
             $currentUrl = $_SERVER["SERVER_NAME"];
             
         $hold .= "<a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr</a><a style='cursor:pointer;'>$str_arr</a><br/>";
     
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
       $hold .= "<a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr/$item</a><a style='cursor:pointer;'>$item</a>".'<br/>';
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
       /*  $mail = new Mail\Message();
         $mail->setBody('Your code is approved by admin.');
        $mail->setFrom('baishakhikarmakar.mca10@gmail.com', 'Sender\'s name');
        $mail->addTo('baishakhikarmakar.mca10@gmail.com');
        $mail->setSubject('Aproval message from SFP Admin');

      $transport = new Mail\Transport\Sendmail();
     $transport->send($mail);*/
// Setup SMTP transport using LOGIN authentication
     $message = new Message();
     $message->addTo($resultemail[0]['eId'])
        ->addFrom('baishakhidelgence@gmail.com')
        ->setSubject('Greetings From SmartFanPage!')
        ->setBody("Congratulations Yorr Template Is Approved By SFP Admin");
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


        
          $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'devtemplate','devId'=>$devId));
  
    }
    
    
      public function temprejectAction(){
        
        $devId = $this->getEvent()->getRouteMatch()->getParam('devId');
        $temp_name = $this->getEvent()->getRouteMatch()->getParam('id');
         $result = $this->getResultTable()->rejectTemplate($temp_name,$devId) ;
           $resultemail = $this->getDeveloperTable()->fetchEmail($devId) ;
        /* $mail = new Mail\Message();
         $mail->setBody('Your code is approved by admin.');
        $mail->setFrom('baishakhi@delgence.com', 'Sender\'s name');
        $mail->addTo($resultemail[0]['eId']);
        $mail->setSubject('Aproval message from SFP Admin');

      $transport = new Mail\Transport\Sendmail();
     $transport->send($mail);*/
     
  $message = new Message();
     $message->addTo($resultemail[0]['eId'])
        ->addFrom('baishakhidelgence@gmail.com')
        ->setSubject('Alert!!!')
        ->setBody("Sorry Your Template is not Approved By Admin");
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
    
    
    
    ////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////
    
    
    
    
    
    
    
     public function pagedetailsAction()
    {
        
      return new ViewModel(array(
            'list' => $this->getListingTable()->fetchAll(),
        ));
                
    }

    /**
 *  public function addAction()
 *     {   
 *          $form = new UploadForm2();
 *       // $view = new ViewModel(array());
 *        $request = $this->getRequest();
 *       // $idCheck=$this->getprofileTable()->fetchProfile($pid);
 *        if ($request->isPost()) {
 *        
 *            $files =  $request->getFiles()->toArray();
 *            $fileName = $files['picture']['name'];
 *            
 *            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
 *            
 *            $uploadObj->setDestination(PUBLIC_PATH . '/files');
 *          
 *              if($uploadObj->receive($fileName)) {
 *                 echo "<br>Upload";
 *                 $geturl=$this->getRequest()->getUri();
 *               $getdata = $this->getcmsTable()->updatecms($fileName,$geturl);
 *               echo $getdata;
 *               exit;
 * //          $original=explode('/',$geturl,-2);
 * //            $URI = IMPLODE("/",$original);
 * //            $imageurl = $URI."/files/".$fileName;
 *             
 *              
 *            } 
 *       
 *        }
 */
        
    /**
 *  
 *       return new ViewModel(array(
 *          
 *             'form'=>$form
 *         ));
 *                 
 *     
 *       // return $view;
 *     }
 */
     public function slideaddAction(){
         $id = $this->getEvent()->getRouteMatch()->getParam('id');
        
       $result = $this->gethomepageslidertableTable()->getResult($id);
       $form = new homepageslidertableForm();
       //$form->bind($result);
       $request = $this->getRequest();
       $files =  $request->getFiles()->toArray();
       $slideHeader = $request->getPost('slideHeader');
       $slideSubHeader = $request->getPost('slideSubHeader');
       $slideDescription = $request->getPost('slideDescription');
       $slideAmount = $request->getPost('slideAmount');
      
       if($id!= "")
       {
          if ($request->isPost()) {
            
     
       $fileName = $files['picture']['name'];
       
       
       $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
       $uploadObj->setDestination(PUBLIC_PATH . '/upload');
      
         $uploadObj->receive($fileName);

        $geturl=$this->getRequest()->getUri();

         $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
          
        
            $imageurl = $URI."/upload/".$fileName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
          
         
            
        
        $data = array(  
           'slideno'=>$id,
           'slideHeader'=>$slideHeader,
           'slideSubHeader'=>$slideSubHeader,
           'slideDescription'=>$slideDescription,
           'slideAmount'=>$slideAmount,
            'slideImagePath'=> $imageurl
		); 
        if($fileName=='')
       {
        $imageurl=$result->slideImagePath;
        }
        if($slideAmount==''){
        $slideAmount=$result->slideAmount;
        }
        if($slideDescription==''){
        $slideDescription=$result->slideDescription;
       }
        if($slideSubHeader==''){
        $slideSubHeader=$result->slideSubHeader;
       }
        if($slideHeader==''){
        $slideHeader=$result->slideHeader;
       }
       
        $data = array(  
            'slideno'=>$id,
           'slideHeader'=>$slideHeader,
           'slideSubHeader'=>$slideSubHeader,
           'slideDescription'=>$slideDescription,
           'slideAmount'=>$slideAmount,
            'slideImagePath'=> $imageurl
  ); 
      
        
        
       $getdata = $this->gethomepageslidertableTable()->updatehomepageslidertable($data,$id);
       if($getdata == '1')
       {
        echo "updated";
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'show'));
       }
       else
       {
         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'show'));
       }
       }
       }
       else
       {
          if ($request->isPost()) {
       
       $fileName = $files['picture']['name'];
       $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
       $uploadObj->setDestination(PUBLIC_PATH . '/upload');
        $uploadObj->receive($fileName);
     
        $geturl=$this->getRequest()->getUri();
         $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
          
        
            $imageurl = $URI."/upload/".$fileName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
            
   
        
       $getdata = $this->gethomepageslidertableTable()->inserthomepageslidertable( $fileName,$imageurl, $slideHeader,$slideSubHeader,$slideDescription,$slideAmount);
         
          
          
            if($getdata == '1')
       {
      
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'show'));
       }
       else
       {
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'show'));
       }
          }
     

        }
          return new ViewModel(array(
           'id'=>$id,
            'form'=>$form
            
           
        ));
     
        
    }
     public function deleteAction() 
    {
        $slideno = $this->getEvent()->getRouteMatch()->getParam('id');
      
        
        $this->gethomepageslidertableTable()->deletehomepageslidertable($slideno);
        
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'show'));
      
    } 
    
    
    public function showAction(){
     
        
   $result=$this->gethomepageslidertableTable()->fetchAll();
   
          return new ViewModel(array(
         
            'res'=>$result
        ));
        
       }
       
    
    
     public function becomepublisherAction()
    {
        
    
        
       $id = $this->getEvent()->getRouteMatch()->getParam('id');
     
       $result = $this->getbecomepublisherTable()->getResult($id);
   
       $form = new becomepublisherForm();
       //$form->bind($result);
       $request = $this->getRequest();
       $files =  $request->getFiles()->toArray();
       $picHeader = $request->getPost('picHeader');
       $picDescription = $request->getPost('picDescription');
       
         

       /*$id=explode('/',$url,-1);
       print_r ($id);*/
     
       if($id!= "")
       {
         
          if ($request->isPost()) {
           
            $files =  $request->getFiles()->toArray();
     
       $fileName = $files['picture']['name'];
     
       $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
       $uploadObj->setDestination(PUBLIC_PATH . '/upload');
  $uploadObj->receive($fileName);
        $geturl=$this->getRequest()->getUri();

         $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
          
        
            $imageurl = $URI."/upload/".$fileName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
            
            
           
       
      
        
        $data = array(  
           'picId'=>$id,
           'picHeader'=>$picHeader,
           'picDescription'=>$picDescription,
           'picPath'=>$imageurl,           
           
		); 
        if($fileName=='')
       {
        $imageurl=$result->picPath;
        }
       
        if($picDescription==''){
        $picDescription=$result->picDescription;
       }
       
        if($picHeader==''){
        $picHeader=$result->picHeader;
       }
       $data = array(  
           'picId'=>$id,
           'picHeader'=>$picHeader,
           'picDescription'=>$picDescription,
           'picPath'=>$imageurl,           
           
		); 
      
        // $geturl=$this->getRequest()->getUri();
       $getdata = $this->getbecomepublisherTable()->updatebecomepublisher($data,$id);
       if($getdata == '1')
       {
        echo "updated";
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher'));
       }
       else      {
      $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher'));       }
     }
     }
    
              
       else   
       {
        if ($request->isPost()) {
       
       $fileName = $files['picture']['name'];
       $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
       $uploadObj->setDestination(PUBLIC_PATH . '/upload');
      $uploadObj->receive($fileName);
      
        $geturl=$this->getRequest()->getUri();
         $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
          
        
            $imageurl = $URI."/upload/".$fileName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
   
      
       
     
       $getdata = $this->getbecomepublisherTable()->insertbecomepublisher( $fileName,$imageurl, $picHeader,$picDescription);
          
          
            if($getdata == '1')
       {
      
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher'));
       }
       else
       {
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher'));
       }
          }
          }
     

        
          return new ViewModel(array(
           'id'=>$id,
            'form'=>$form
            
           
        ));
     
    }    
    
    public function showbecomepublisherAction(){
      //$id = $this->getEvent()->getRouteMatch()->getParam('id');
        
   $result=$this->getbecomepublisherTable()->fetchAll();
   
          return new ViewModel(array(
         
            'res'=>$result
        ));
        
       }
       
       
       
         public function deletebecomepublisherAction() 
    {
        $picId= $this->getEvent()->getRouteMatch()->getParam('id');
      
        
        $this->getbecomepublisherTable()->deletebecomepublisher($picId);
        
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher'));
      
    } 
    
    
    
    
    
    
    
    public function walloffameAction(){   
       $id = $this->getEvent()->getRouteMatch()->getParam('id');
       $result = $this->gethomepagewalloffameTable()->getResult($id);
       $form = new homepagewalloffameForm();
       //$form->bind($result);
       $request = $this->getRequest();
       $files =  $request->getFiles()->toArray();
      
       $piclink = $request->getPost('piclink');
       $pname = $request->getPost('pname');
      
  

       /*$id=explode('/',$url,-1);
       print_r ($id);*/
      
       if($id!= "")
       {
          if ($request->isPost()) {
     
       $fileName = $files['picture']['name'];
       $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
       $uploadObj->setDestination(PUBLIC_PATH . '/upload');
  $uploadObj->receive($fileName);
        $geturl=$this->getRequest()->getUri();
       
        
         $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
          
            $imageurl = $URI."/upload/".$fileName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
           
         
        $data = array(  
          
            'piclink'=> $imageurl,
            'pname'=> $pname
		); 
      if($fileName=='')
       {
        $imageurl=$result->piclink;
        }
        if($pname==''){
        $pname=$result->pname;
        }
         
        $data = array(  
          
            'piclink'=> $imageurl,
            'pname'=> $pname
		); 
        // $geturl=$this->getRequest()->getUri();
       $getdata = $this->gethomepagewalloffameTable()->updatehomepagewalloffame($data,$id);
       if($getdata == '1')
       {
        echo "updated";
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showwalloffame'));
       }
       else
       {
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showwalloffame'));
       }
       }
       }
       
       else
       {
          if ($request->isPost()) {
       
       $fileName = $files['picture']['name'];
       
       $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
       $uploadObj->setDestination(PUBLIC_PATH . '/upload');
         $uploadObj->receive($fileName);
    
      
        $geturl=$this->getRequest()->getUri();
         $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
          
        
            $imageurl = $URI."/upload/".$fileName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
            
           
 
       $getdata = $this->gethomepagewalloffameTable()->inserthomepagewalloffame($imageurl,$pname,$fileName);
          
          
          
          
            if($getdata == '1')
       {
      
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showwalloffame'));
       }
       else
       {
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showwalloffame'));
       }
          }
     

        }
          return new ViewModel(array(
           'id'=>$id,
            'form'=>$form
            
           
        ));
     
        
    }
    public function showwalloffameAction(){
      //$id = $this->getEvent()->getRouteMatch()->getParam('id');
        
   $result=$this->gethomepagewalloffameTable()->fetchAll();
   
          return new ViewModel(array(
         
            'res'=>$result
        ));
        
       }
       
         public function deletewalloffameAction() 
    {
        $pid= $this->getEvent()->getRouteMatch()->getParam('id');
      
        
        $this->gethomepagewalloffameTable()->deletehomepagewalloffame($pid);
        
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showwalloffame'));
      
      
      
      
      
    } 
    
    
  
   
    public function casestudiesAction(){
         $id = $this->getEvent()->getRouteMatch()->getParam('id');
       $result = $this->getcasestudiesTable()->getResult($id);
     
       $form = new casestudiesForm();
            $request = $this->getRequest();
       $files =  $request->getFiles()->toArray();

           $vedioHeader = $request->getPost('vedioHeader');
           $VedioDescription = $request->getPost('VedioDescription');
           $VedioPath = $request->getPost('VedioPath');
    
         if($id!= "")
       {
          if ($request->isPost()) {
     
         
        $data = array(  
           'vedioId'=>$id,
           'vedioHeader'=>$vedioHeader,
           
           'VedioDescription'=>$VedioDescription,
           'VedioPath'=>$VedioPath,
           
		); 
       if($VedioPath=='')
       {
        $VedioPath=$result->VedioPath;
        }
        if($vedioHeader==''){
        $vedioHeader=$result->vedioHeader;
        }
        if($VedioDescription==''){
        $VedioDescription=$result->VedioDescription;
       }
        $data = array(  
           'vedioId'=>$id,
           'vedioHeader'=>$vedioHeader,
           
           'VedioDescription'=>$VedioDescription,
           'VedioPath'=>$VedioPath,
           
		); 
      
       
       $getdata = $this->getcasestudiesTable()->updatecasestudies($data,$id);
       if($getdata == '1')
       {
        echo "updated";
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showcasestudies'));
       }
       else
       {
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showcasestudies'));
       }
       }
       }
       else
       {
          if ($request->isPost()) {
       
   
       $getdata = $this->getcasestudiesTable()->insertcasestudies($vedioHeader,$VedioDescription,$VedioPath);
 
       
      
           if($getdata=1) 
       {
      
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showcasestudies'));
       }
       else
       {
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showcasestudies'));
       }
         }
          
     

        }
             return new ViewModel(array(
             'id'=>$id,
            'form'=>$form
        
        ));
     
      
       }
       
       
    public function deletecasestudiesAction() 
    {
        $vedioId = $this->getEvent()->getRouteMatch()->getParam('id');
      
        
        $this->getcasestudiesTable()->deletecasestudies($vedioId);
        
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showcasestudies'));
      
    } 
    
    
    public function showcasestudiesAction(){
      //$id = $this->getEvent()->getRouteMatch()->getParam('id');
        
   $result=$this->getcasestudiesTable()->fetchAll();
   
          return new ViewModel(array(
         
            'res'=>$result
        ));
        
       }
   
    
    
    
    
 
    
  
    
    
     public function getListingTable()
    {
        if (!$this->listingTable) {
         $sm = $this->getServiceLocator();
         $this->listingTable = $sm->get('Application\Model\ListingTable');
        }
        return $this->listingTable;
    }
    
   
   /**
 *  public function getcmsTable()
 *     {
 *         if (!$this->cmsTable) {
 *          $sm = $this->getServiceLocator();
 *          $this->cmsTable = $sm->get('Application\Model\cmsTable');
 *         }
 *         return $this->cmsTable;
 *     }
 */
     public function gethomepageslidertableTable()
    {
        if (!$this->homepageslidertableTable) {
         $sm = $this->getServiceLocator();
         $this->homepageslidertableTable = $sm->get('Application\Model\homepageslidertableTable');
        }
        return $this->homepageslidertableTable;
    }

    
   
   public function gethomepagewalloffameTable()
    {
        if (!$this->homepagewalloffameTable) {
         $sm = $this->getServiceLocator();
         $this->homepagewalloffameTable = $sm->get('Application\Model\homepagewalloffameTable');
        }
        return $this->homepagewalloffameTable;
    }
    
     public function getbecomepublisherTable()
    {
        if (!$this->becomepublisherTable) {
         $sm = $this->getServiceLocator();
         $this->becomepublisherTable = $sm->get('Application\Model\becomepublisherTable');
        }
        return $this->becomepublisherTable;
    }
    
    
    public function getcasestudiesTable()
    {
        if (!$this->casestudiesTable) {
         $sm = $this->getServiceLocator();
         $this->casestudiesTable = $sm->get('Application\Model\casestudiesTable');
        }
        return $this->casestudiesTable;
    }
    
     public function addtemplateimagesAction(){
       {
        
       $id = $this->getEvent()->getRouteMatch()->getParam('id');
       $result = $this->gettemplateimagesTable()->getResult($id);
       $form = new templateimagesForm();
       //$form->bind($result);
       $request = $this->getRequest();
       $files =  $request->getFiles()->toArray();
       $imgHeader = $request->getPost('imgHeader');
       $imgSubHeader = $request->getPost('imgSubHeader');
       $imgDescription = $request->getPost('imgDescription');;
       
      
  

       /*$id=explode('/',$url,-1);
       print_r ($id);*/
      
       if($id!= "")
       {
          if ($request->isPost()) {
     
       $fileName = $files['picture']['name'];
     
       $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
       $uploadObj->setDestination(PUBLIC_PATH . '/upload');
         $uploadObj->receive($fileName);

        $geturl=$this->getRequest()->getUri();

         $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
          
        
            $imageurl = $URI."/upload/".$fileName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
        
         
        $data = array(  
           'imgid'=>$id,
           'imgHeader'=>$imgHeader,
           'imgSubHeader'=>$imgSubHeader,
           'imgDescription'=>$imgDescription,
         
            'imgPath'=> $imageurl
  ); 
       if($fileName=='')
       {
        $imageurl=$result->imgPath;
        }
        if($imgHeader==''){
        $imgHeader=$result->imgHeader;
        }
        if($imgSubHeader==''){
        $imgSubHeader=$result->imgSubHeader;
       }
        if($imgDescription==''){
        $imgDescription=$result->imgDescription;
       }
        
       
          $data = array(  
           'imgid'=>$id,
           'imgHeader'=>$imgHeader,
           'imgSubHeader'=>$imgSubHeader,
           'imgDescription'=>$imgDescription,
         
            'imgPath'=> $imageurl
  ); 
      
      
       $getdata = $this->gettemplateimagesTable()->updatetemplateimages($data,$id);
       if($getdata == '1')
       {
        echo "updated";
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtemplateimages'));
       }
       else
       {
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtemplateimages'));
       }
       }
       }
       else
       {
          if ($request->isPost()) {
       
       $fileName = $files['picture']['name'];
       $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
       $uploadObj->setDestination(PUBLIC_PATH . '/upload');
         $uploadObj->receive($fileName);
    
      
        $geturl=$this->getRequest()->getUri();
         $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
          
        
            $imageurl = $URI."/upload/".$fileName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
   
      
       
     
       $getdata = $this->gettemplateimagesTable()->inserttemplateimages( $fileName,$imageurl, $imgHeader,$imgSubHeader,$imgDescription);
          
          
            if($getdata == '1')
       {
      
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtemplateimages'));
       }
       else
       {
        echo "failed to update";
       }
          }
     

        }
          return new ViewModel(array(
           'id'=>$id,
            'form'=>$form
            
           
        ));
     
        
    }
 
    
       
       }
       ////////////////////////////////////////////////////////////////////////////////////////////////////////
       //EditController
      public function editAction()
    {
        $id = (int) $this->params()->fromRoute('id');
        $contents = $this->gethomepagetableTable()->fetchAll($id);
        $plink = $contents->plink;
        
        $dForm2   = new UploadForm2();
        $dForm2->bind($contents);
        return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$plink));
    }
     public function updatevalueAction()
    {
         $id = (int) $this->params()->fromRoute('id');
         $contents = $this->gethomepagetableTable()->gethomepagetable($id); 
        // print_r($contents);exit;
         $dForm   = new UploadForm2();
         $request = $this->getRequest();
         if($request->isPost())
        {
               $files =  $request->getFiles()->toArray();
           $fileName = $files['pname']['name'];
            if($fileName != ""){
           $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
           
           $uploadObj->setDestination(PUBLIC_PATH . '/upload');
         
             $uploadObj->receive($fileName);
         
         $geturl=$this->getRequest()->getUri();  
          $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$fileName;
            
            
            $imageurl=str_replace("/Admin/","/",$imageurl);
            }
            else
            {
                $fileName = $contents->pname;
                 $imageurl = $contents->plink;
            }
             
            $cms = new homepagetable();
           $dForm->setData($request->getPost());
            $text2 = $request->getPost('text2');
            $text3 = $request->getPost('text3');
            $text5 = $request->getPost('text5');
            $text6 = $request->getPost('text6');
            $id = $request->getPost('id');
            $change_tagline = $request->getPost('change_tagline');
            $header = $request->getPost('header');
            $hdescription = $request->getPost('hdescription');
        
            $data = array(
               'id'=>$id, 
		
				'change_tagline'=> $change_tagline,
				'text2' => $text2,
				'text3'=> $text3,
				'text5'=> $text5,
                'text6'=> $text6,
                'plink'=>$imageurl,
                'pname'=>$fileName,
                'header'=>$header,
                'hdescription'=>$hdescription
                 
		);
     
            
           if($dForm->isValid())
            {
             $rend= $this->gethomepagetableTable()->savehomepagetable($id,$data);
             
             if($rend==1)
             {
               
                $this->redirect()->toRoute('application/default',array('controller'=>'admin','action'=>'edit','id'=>$id));
             }
             else
             {
                
               $this->redirect()->toRoute('application/default',array('controller'=>'admin','action'=>'edit','id'=>$id)); 
             } 
             
            }
        }
                   
    }
      public function gethomepagetableTable()
    {
        if (!$this->homepagetableTable) {
         $sm = $this->getServiceLocator();
         $this->homepagetableTable = $sm->get('Application\Model\homepagetableTable');
        }
        return $this->homepagetableTable;
        }
  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //Howsworkeditcontroller      
         public function howsworkeditAction()
    {
        $id = (int) $this->params()->fromRoute('id');
       
        $contents = $this->gethowsworkpagetbleTable()->fetchAll($id);
        $Imagelink = $contents->Imagelink;
        // print_r($contents);exit;
        $dForm2   = new HowsworkForm();
        
        $dForm2->bind($contents);
       
        return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$Imagelink));
        
    }
    
    
    public function updatevaluehwkAction()
    {
         $id = (int) $this->params()->fromRoute('id');
         $contents = $this->gethowsworkpagetbleTable()->gethowsworkpagetble($id); 
         $dForm2   = new HowsworkForm();
         $request = $this->getRequest();
         if($request->isPost())
        {
               $files =  $request->getFiles()->toArray();
           $fileName = $files['imagename']['name'];
          if($fileName != ""){
           $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
           
           $uploadObj->setDestination(PUBLIC_PATH . '/upload');
         
             $uploadObj->receive($fileName);
         
         $geturl=$this->getRequest()->getUri();  
          $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$fileName;
            
            
    
            $imageurl=str_replace("/Admin/","/",$imageurl);
            }
            else
            {
                $fileName = $contents->Imagename;
                 $imageurl = $contents->Imagelink;
            }
             
            $cms = new howsworkpagetble();
             $dForm2->setData($request->getPost());
            $bannerheader = $request->getPost('bannerheader');
             $id = $request->getPost('id');
             $data = array(
               'id'=>$id, 
		        'bannerheader'=> $bannerheader,
				'Imagelink'=>$imageurl,
                'Imagename'=>$fileName
                 
		);
        
     
            
           if($dForm2->isValid())
            {
             $rend= $this->gethowsworkpagetbleTable()->savehowsworkpagetble($id,$data);
             
             if($rend==1)
             {
               
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'howsworkedit','id'=>'3'));
             }
             else
             {
                
               $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'howsworkedit','id'=>'3')); 
             } 
             
            }
        }
        
        return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$Imagelink));
        
                   
    }
      public function gethowsworkpagetbleTable()
    {
        if (!$this->howsworkpagetbleTable) {
         $sm = $this->getServiceLocator();
         $this->howsworkpagetbleTable = $sm->get('Application\Model\howsworkpagetbleTable');
        }
        return $this->howsworkpagetbleTable;
        }
        
        
        
        
        
       public function insertAction()
       {
          $dForms   = new HowsworkstepForm();
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
             $files =  $request->getFiles()->toArray();
           $fileName = $files['imagename']['name'];
        
           
           $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
           
           $uploadObj->setDestination(PUBLIC_PATH . '/upload');
         
             $uploadObj->receive($fileName);
         
         $geturl=$this->getRequest()->getUri();  
          $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$fileName;
            
           //echo $imageurl;exit;
            
            $how = new howsworkstepstble();
            $dForms->setData($request->getPost());
            $header = $request->getPost('header');
             $Description = $request->getPost('Description');
             
           
             $data = array(
		
				
		        'header'=> $header,
				'Imagepath'=>$imageurl,
                'Imagename'=>$fileName,
                'Description'=>$Description
                
		);
     
     
       
     //    if($data['Imagepath']==$imageurl )
//            {
//              $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'editdesc'));
//             
//             }
//       else
       
         if($dForms->isValid())
            {
            
               if($data['Imagepath']=='http://test.scampaigns.com/upload/' )
            {
                
              $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'editdesc'));
             
             }
             else
             {
                               
               
           $rend= $this->gethowsworkstepstbleTable()->insertsteptble($data);
          
        
            if($rend==1)
             {
               
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'editdesc'));
             }
             else
             {
                
               $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'editdesc')); 
             } 
             
            }

          
        
        }
        
       }
       }
        
      
        public function addstepAction() 
    {
        
       $dForms   = new HowsworkstepForm();
        return new ViewModel(array('form'=> $dForms));
    }
    
    
    
    public function editdescAction()
    {
        $result=$this->gethowsworkstepstbleTable()->fetchAll();
   
          return new ViewModel(array(
         
            'list'=>$result
        ));
   }
      
       public function editheaderAction()
    {
        $id = (int) $this->params()->fromRoute('id');
        $contents = $this->gethowsworkstepstbleTable()->howsworkstepstble($id);
  
        $Imagepath = $contents->Imagepath;
       $step = $contents->header;
        $dForm2   = new HowsworkstepForm();
        
        $dForm2->bind($contents);
       
        return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$Imagepath,'step'=>$step));
        
    }
      
      
      
        
       
       
        public function updateheaderAction()
  
  {
         $id = (int) $this->params()->fromRoute('id');
        
       $contents = $this->gethowsworkstepstbleTable()->howsworkstepstble($id); 
         $dForm2   = new HowsworkstepForm();
         $request = $this->getRequest();
         if($request->isPost())
        {
               $files =  $request->getFiles()->toArray();
          $fileName = $files['imagename']['name'];
        
           if($fileName != ""){
           $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
           
           $uploadObj->setDestination(PUBLIC_PATH . '/upload');
         
             $uploadObj->receive($fileName);
        
        
        
         $geturl=$this->getRequest()->getUri();  
          $original=explode('/',$geturl,-3);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$fileName;
            
            //$imageurl=str_replace("/Admin/","/",$imageurl);
            
               }else
             {
              $fileName= $contents->imagename;
               $imageurl= $contents->Imagepath;
         
         }
            }
          
           $cms = new howsworkstepstble();
           $dForm2->setData($request->getPost());
            //$header = $request->getPost('header');
            $Description = $request->getPost('Description');
            
        
        
            $data = array(
               'id'=>$id, 
		
				
				'Description' => $Description,
				
                'Imagepath'=>$imageurl,
                'imagename'=>$fileName
                 
		);
         if($dForm2->isValid())
            {
             $rend= $this->gethowsworkstepstbleTable()->updateheader($id,$data);
             
             if($rend==1)
             {
               
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'editdesc'));
             }
             else
             {
                
               $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'editdesc')); 
             } 
             
            }

          
        
      
                
     
    }
     public function deletehwkAction() 
    {
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
      
        
        $this->gethowsworkstepstbleTable()->deletehowsworkstepstble($id);
        
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'editdesc'));
      
    } 
    
    public function gethowsworkstepstbleTable()
    {
        if (!$this->howsworkstepstbleTable) {
         $sm = $this->getServiceLocator();
         $this->howsworkstepstbleTable = $sm->get('Application\Model\howsworkstepstbleTable');
        }
        return $this->howsworkstepstbleTable;
        }
 
       /////////////////////////////////////////////////////////////////////////////////////////////////////////
       //templateeditcontroller
        public function tempeditAction()
    {
        $id = (int) $this->params()->fromRoute('id');
        $contents = $this->gettemplatestoretbleTable()->fetchAll($id);
        $plink = $contents->plink;
         $campaignlink = $contents->campaignlink;
        // print_r($contents);exit;
        $dForm2   = new TemplateForm();
        
        $dForm2->bind($contents);
       
        return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$plink,'clink'=>$campaignlink));
        
    }
    
    
    public function updatevaluetempAction()
  
  {
         $id = (int) $this->params()->fromRoute('id');
         $contents = $this->gettemplatestoretbleTable()->gettemplatestoretble($id); 
  
         $dForm2   = new TemplateForm();
         $request = $this->getRequest();
         if($request->isPost())
        {
               $files =  $request->getFiles()->toArray();
           $fileName = $files['pname']['name'];
           $fileNamec = $files['campaignlink']['name'];
           //echo $fileNamec;exit;
            if($fileName != "" ){
           $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
           
           $uploadObj->setDestination(PUBLIC_PATH . '/upload');
         
             $uploadObj->receive($fileName);
            
         
         $geturl=$this->getRequest()->getUri();  
          $original=explode('/',$geturl,-3);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$fileName;
            
            
            
            $imageurl=str_replace("/Admin/","/",$imageurl);
            
          
            
            }
            else
            {
                $fileName = $contents->pname;
                 $imageurl = $contents->plink;
                 }
            if( $fileNamec!="")
            {
              $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
           
           $uploadObj->setDestination(PUBLIC_PATH . '/upload');
         
             
             $uploadObj->receive($fileNamec);
         
         $geturl=$this->getRequest()->getUri();  
          $original=explode('/',$geturl,-3);
            $URI = IMPLODE("/",$original);
      
             $imageurlc = $URI."/upload/".$fileNamec;
            
            
          
            
            $imageurlc=str_replace("/Admin/","/",$imageurlc);
              
            }
           
                else
            {
                
                   $imageurlc = $contents->campaignlink;
            }
            
             
            $cms = new templatestoretble();
           $dForm2->setData($request->getPost());
            $BannerHeader = $request->getPost('BannerHeader');
            $BannerDesc = $request->getPost('BannerDesc');
            $campaignques = $request->getPost('campaignques');
            $campaignheading = $request->getPost('campaignheading');
            $id = $request->getPost('id');
            $campaignsubhead = $request->getPost('campaignsubhead');
            $campaigndesc = $request->getPost('campaigndesc');
             
       
        
        
            $data = array(
               'id'=>$id, 
		
				'BannerHeader'=> $BannerHeader,
				'BannerDesc' => $BannerDesc,
				'campaignques'=> $campaignques,
				'campaignheading'=> $campaignheading,
                'campaignsubhead'=> $campaignsubhead,
                'campaigndesc'=>$campaigndesc,
                'plink'=>$imageurl,
                'pname'=>$fileName,
                'campaignlink'=>$imageurlc
                 
		);
     
            
           if($dForm2->isValid())
            {
             $rend= $this->gettemplatestoretbleTable()->savetemplatestoretble($id,$data);
             
             if($rend==1)
             {
               
                $this->redirect()->toRoute('application/default',array('controller'=>'admin','action'=>'tempedit','id'=>'2'));
             }
             else
             {
                
               $this->redirect()->toRoute('application/default',array('controller'=>'admin','action'=>'tempedit','id'=>'2')); 
             } 
             
            }
        }
                   
    }
      public function gettemplatestoretbleTable()
    {
        if (!$this->templatestoretbleTable) {
         $sm = $this->getServiceLocator();
         $this->templatestoretbleTable = $sm->get('Application\Model\templatestoretbleTable');
        }
        return $this->templatestoretbleTable;
        }
        
        
       
     ///////////////////////////////////////////////////////////////////////////////////////////////////////////  
    public function showtemplateimagesAction(){
      //$id = $this->getEvent()->getRouteMatch()->getParam('id');
        
   $result=$this->gettemplateimagesTable()->fetchAll();
   
          return new ViewModel(array(
         
            'res'=>$result
        ));
        
       }
       
       
       public function gettemplateimagesTable()
    {
        if (!$this->templateimagesTable) {
         $sm = $this->getServiceLocator();
         $this->templateimagesTable = $sm->get('Application\Model\templateimagesTable');
        }
        return $this->templateimagesTable;
    }
    
       
       
       
       
       
         public function deletetemplateimagesAction() 
    {
        $picId= $this->getEvent()->getRouteMatch()->getParam('id');
      
        
        $this->gettemplateimagesTable()->deletetemplateimages($picId);
        
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtemplateimages'));
      
    }
    public function newabcAction()
    {
        
     $dForms   = new becomepublisherbannerForm();
        return new ViewModel(array('form'=> $dForms));    
        
    }
    
    public function becomepublisherbannerAction(){
         $id = $this->getEvent()->getRouteMatch()->getParam('id');
        
       $result = $this->getbecomepublisherbannerTable()->getResult($id);
       $form = new becomepublisherbannerForm();
       //$form->bind($result);
       $request = $this->getRequest();
       $files =  $request->getFiles()->toArray();
       $bannerHeader = $request->getPost('bannerHeader');
       $filFormOneHeader = $request->getPost('filFormOneHeader');
       $filFormOneDescription = $request->getPost('filFormOneDescription');
       $filFormTwoHeader = $request->getPost('filFormTwoHeader');
      $filFormTwoDescription = $request->getPost('filFormTwoDescription');
	
       if($id!= "")
       {
          if ($request->isPost()) {
            
     
       $fileName = $files['picture']['name'];
       
       
       $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
       $uploadObj->setDestination(PUBLIC_PATH . '/upload');
      
         $uploadObj->receive($fileName);

        $geturl=$this->getRequest()->getUri();

         $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
          
        
            $imageurl = $URI."/upload/".$fileName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
          
         
            
        
        $data = array(  
           'bannerId'=>$id,
		    'bannerPath'=> $imageurl,
           'bannerHeader'=>$bannerHeader,
           'filFormOneHeader'=>$filFormOneHeader,
           'filFormOneDescription'=>$filFormOneDescription,
           'filFormTwoHeader'=>$filFormTwoHeader,
		    'filFormTwoDescription'=>$filFormTwoDescription,
           
		); 
        if($fileName=='')
       {
        $imageurl=$result->bannerPath;
        }
        if($bannerHeader==''){
        $bannerHeader=$result->bannerHeader;
        }
        if($filFormOneHeader==''){
        $filFormOneHeader=$result->filFormOneHeader;
       }
        if($filFormTwoHeader==''){
        $filFormTwoHeader=$result->filFormTwoHeader;
       }
        if($filFormTwoDescription==''){
        $filFormTwoDescription=$result->filFormTwoDescription;
       }
       if($filFormOneDescription==''){
        $filFormOneDescription=$result->filFormOneDescription;
       }
        
        $data = array(  
           'bannerId'=>$id,
		    'bannerPath'=> $imageurl,
           'bannerHeader'=>$bannerHeader,
           'filFormOneHeader'=>$filFormOneHeader,
           'filFormOneDescription'=>$filFormOneDescription,
           'filFormTwoHeader'=>$filFormTwoHeader,
		    'filFormTwoDescription'=>$filFormTwoDescription,
           
		); 
      
        
        
       $getdata = $this->getbecomepublisherbannerTable()->updatebecomepublisherbanner($data,$id);
       if($getdata == '1')
       {
        echo "updated";
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'show'));
       }
       else
       {
         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'show'));
       }
       }
       }
       else
       {
          if ($request->isPost()) {
       
       $fileName = $files['picture']['name'];
       $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
       $uploadObj->setDestination(PUBLIC_PATH . '/upload');
        $uploadObj->receive($fileName);
     
        $geturl=$this->getRequest()->getUri();
         $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
          
        
            $imageurl = $URI."/upload/".$fileName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
            
   
        
       $getdata = $this->getbecomepublisherbannerTable()->insertbecomepublisherbanner( $fileName,$imageurl, $bannerHeader,$filFormOneHeader,$filFormTwoHeader,$filFormOneDescription,$filFormTwoDescription);
         
          
          
            if($getdata == '1')
       {
      
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisherbanner'));
       }
       else
       {
        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisherbanner'));
       }
          }
     

        }
          return new ViewModel(array(
           'id'=>$id,
            'form'=>$form
            
           
        ));
     
        
    }
    
    
    public function showbecomepublisherbannerAction(){
     
        
   $result=$this->getbecomepublisherbannerTable()->fetchAll();
   
          return new ViewModel(array(
         
            'res'=>$result
        ));
        
       }
        
    
   
    public function getbecomepublisherbannerTable()
    {
        if (!$this->becomepublisherbannerTable) {
         $sm = $this->getServiceLocator();
         $this->becomepublisherbannerTable = $sm->get('Application\Model\becomepublisherbannerTable');
        }
        return $this->becomepublisherbannerTable;
    }
    
    
    
}
    

?>