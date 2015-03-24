<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Service\PostServiceInterface;
use Zend\Form\FormInterface;
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
use Application\Model\templateCatagory;
use Application\Form\templateCatagoryForm;
use Application\Model\homepagewalloffame;
use Application\Form\homepagewalloffameForm;
use Application\Model\becomepublisher;
use Application\Form\becomepublisherForm;
use Application\Model\casestudies;
use Application\Form\casestudiesForm;
use Application\Form\usedByHomeForm;
use Application\Form\templateimagesForm;
use Application\Model\homepagetable;
use Application\Model\howsworkpagetble;
use Application\Model\howsworkstepstble;
use Application\Model\templateTable;
use Application\Model\DeveloperTable;
use Application\Model\appImageLinkTable;
use Application\Model\animatedImageTable;
use Application\Model\companyDetailsTable;
use Application\Model\countryDetailsTable;
use Application\Form\HowsworkForm;
use Application\Form\HowsworkstepForm;
use Application\Model\becomepublisherbanner;
use Application\Form\becomepublisherbannerForm;
use Application\Model\templatestoretble;
use Application\Form\TemplateForm;
use Application\Model\faqbanner;
use Application\Form\faqbannerForm;
use Application\Form\faqpublisherForm;
use Application\Form\faqsfpForm;
use Application\Model\faqpages;
use Application\Model\blog;
use Application\Form\faqpricingForm;
use Application\Model\faqContainer;
use Application\Form\faqtechnicalForm;
use Application\Form\contactheaderForm;
use Application\Model\contactheader;
use Application\Form\blogoverviewHeaderForm;
use Application\Model\blogoverviewHeader;
use Application\Form\blogarchiveHeaderForm;
use Application\Model\blogDetailsHeader;
use Application\Form\blogDetailsHeaderForm;
use Application\Model\blogarchiveHeader;
use Application\Form\addressForm;
use Application\Model\address;
use Application\Form\imagesAboutUsForm;
use Application\Model\imagesAboutUs;
use Application\Form\pagesheaderForm;
use Application\Model\pagesheader;
use Application\Form\becomepublisherstudioForm;
use Application\Model\becomepublisherstudio;
use Application\Model\blogoverview;
use Application\Form\aboutUsHeaderForm;
use Application\Model\aboutUsHeader;
use Application\Form\aboutUsImagesForm;
use Application\Model\aboutUsImages;
use Application\Form\blogoverviewForm;
use Application\Model\userDetails;
use Zend\Http\PhpEnvironment\Request;
use Zend\Session\Container;
use Zend\Mail;
use Zend\Mail\Message;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;
use Application\Form\termsandconditionForm;
/**
* DeveloperController
*
* @author
*
* @version
*
*/
class AdminController extends AbstractActionController
{
protected $developerTable;
protected $templateCatagoryTable;
protected $faqContainerTable;
protected $aboutUsHeaderTable;
protected $aboutUsImagesTable;
protected $blogTable;
protected $templateTable;
protected $becomepublisherbannerTable;
protected $adminTable;
protected $blogoverviewTable;
protected $blogarchiveTable;
protected $templatestoretbleTable;
protected $listingTable;
protected $homepageslidertableTable;
protected $homepagewalloffameTable;
protected $becomepublisherTable;
protected $casestudiesTable;
protected $templateimagesTable;
protected $faqbannerTable;
protected $blogoverviewHeaderTable;
protected $faqpagesTable;
protected $faqsfpTable;
protected $faqpublisherTable;
protected $faqpricingTable;
protected $faqtechnicalTable;
protected $contactheaderTable;
protected $addressTable;
protected $becomepublisherstudioTable;
protected $termsserviceTable;
protected $disclaimerTable;
protected $privacypolicy;
protected $homepagetableTable;
protected $howsworkpagetbleTable;
protected $howsworkstepstbleTable;
protected $blogDetailsHeaderTable;
protected $userDetailsTable; 
protected $appImageLinkTable; 
protected $animatedImageTable;  
protected $companyDetailsTable;
protected $countryDetailsTable;
protected $pagesheaderTable;
protected $imagesAboutUsTable;
public function indexAction()
{
    $dForm   = new DForm();
    $dForm->get('submit')->setValue('LOGIN');
    return array('form'=> $dForm);
} 
  
public function loginAction() //admin login 
{
$dForm   = new DForm();
$request = $this->getRequest();
    if($request->isPost())
    {
        $admin = new Admin();
        $dForm->setData($request->getPost());
        $uname = $request->getPost('uname');
        $user_session = new Container('uname');
        $user_session->uname= $uname;  
        $pwd = $request->getPost('pwd');
        if($dForm->isValid())
        {
            $admin->exchangeArray($dForm->getData());
            if($this->getAdminTable()->getAdmin($uname,$pwd))
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'admin','action'=>'pagedetails'));
            }
            else
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'admin'));
            }
        }
    }
}
    
public function devdetailsAction() // fetch dveloper details
{
$this->layout('layout/adminlayout.phtml');
$user_session = new Container('uname');
$sessionId = $user_session->offsetGet('uname');
if($sessionId != "")
    {
    return new ViewModel(array(
    'developers' => $this->getDeveloperTable()->fetchAll(),
    ));  
    }
else
    {
    $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }


}

public function ipDetails($ip) 
{
    $json = file_get_contents("http://ipinfo.io/{$ip}");
    $details = json_decode($json);
    return $details;
}
public function browserInformation()
{
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$browsers = array(
                    'Chrome' => array('Google Chrome','Chrome/(.*)\s'),
                    'MSIE' => array('Internet Explorer','MSIE\s([0-9\.]*)'),
                    'Firefox' => array('Firefox', 'Firefox/([0-9\.]*)'),
                    'Safari' => array('Safari', 'Version/([0-9\.]*)'),
                    'Opera' => array('Opera', 'Version/([0-9\.]*)')
                );                    
$browser_details = array(); 
foreach ($browsers as $browser => $browser_info)
{
    if (preg_match('@'.$browser.'@i', $user_agent))
    {
        $browser_details['name'] = $browser_info[0];
            preg_match('@'.$browser_info[1].'@i', $user_agent, $version);
        $browser_details['version'] = $version[1];
            break;
    } 
    else 
    {
        $browser_details['name'] = 'Unknown';
        $browser_details['version'] = 'Unknown';
    }
} 
return $browser_details['name'].' Version: '.$browser_details['version'];
}

public function getOsName()
{
    $browser = $_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/Linux/',$browser)) $os = 'Linux';
    elseif(preg_match('/Win/',$browser)) $os = 'Windows';
    elseif(preg_match('/Mac/',$browser)) $os = 'Mac';
    else $os = 'UnKnown';
    return $os;
} 




public function devtemplateAction() //added by Poulami
{
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $result = $this->getResultTable()->getResult($id);
        $user_session = new Container('uname');
        $sessionId = $user_session->offsetGet('uname');
        if($sessionId != "")
        {
            return new ViewModel(array(
            'temp' => $this->getResultTable()->getResult($id),
            ));
        }
        else
        {
         $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
        }
   
}
    
public function readDirs($path) // read all directories
{
$hold = "";
$dirHandle = opendir($path);
while($item = readdir($dirHandle)) 
{
    
    $newPath = $path."/".$item;
    if(is_dir($newPath) && $item != '.' && $item != '..') 
    {
        $parts = explode('.', $newPath);
        $extension = array_pop($parts);
        if( $extension == 'php' || $extension == 'html' || $extension == 'htm' )
            {
                $abc="";
                $abc= $newPath;
                $parts = Explode('/', $abc);
                $testPath = $this->getServiceLocator()->get('Config');
                $array = array_diff($parts, $testPath['pathName']['path']);
                $str_arr = implode("/",$array);  
                $currentUrl = $_SERVER["SERVER_NAME"];
                $hold .= "<a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr</a><a style='cursor:pointer;'>$str_arr</a><br/>";
            }
        $hold .= $this->readDirs($newPath);
    }
    else
    {
    
        $parts = explode('.', $newPath);
        $extension = array_pop($parts);
        if( $extension == 'php' || $extension == 'html' || $extension == 'htm'  )
            {
                $abc="";
                $abc= $path;
                $parts = Explode('/', $abc);
                $testPath = $this->getServiceLocator()->get('Config');
                $array = array_diff($parts,$testPath['pathName']['path']);
                $str_arr = implode("/",$array); 
                $currentUrl = $_SERVER["SERVER_NAME"]; 
                $hold .= "<a id='lidet' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr/$item</a><a style='cursor:pointer;'>$item</a>".'<br/>';
            }
    
    }
}
return $hold;
}
    
public function tempfileAction() 
{
    $this->layout('layout/adminlayout.phtml');  
    $temp_name = $this->getEvent()->getRouteMatch()->getParam('id');
    $geturl=$this->getRequest()->getUri();
    $url=explode('/',$geturl);
    $devId= array_pop($url);
    $retEditor = $this->readDirs( "/var/www/staging/public/files/$temp_name");
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array(
    'editor' => $retEditor,
    'devId'=>$devId,
    'temp_name'=>$temp_name
    )); 
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}
    
    
public function tempapproveAction() // template approve
{
  
    $temp_name = $this->getEvent()->getRouteMatch()->getParam('id');
    include_once($_SERVER['DOCUMENT_ROOT']."/sfpApi.php");
    include_once($_SERVER['DOCUMENT_ROOT']."/files/".$temp_name."/db.php");
    @unlink($_SERVER['DOCUMENT_ROOT']."/files/".$temp_name."/db.php");
    $devId = $this->getEvent()->getRouteMatch()->getParam('pId');
    $result = $this->getResultTable()->approveTemplate($temp_name,$devId) ;
    $resultemail = $this->getDeveloperTable()->fetchEmail($devId) ;
    $message = new Message();
    $message->addTo($resultemail[0]['eId'])
    ->addFrom('info@smartfanpage.com')
    ->setSubject('Greetings From SmartFanPage!')
    ->setBody("Congratulations Your Template Is Approved By SFP Admin");
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
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'devtemplate','devId'=>$devId));
    
}
    
    
public function temprejectAction() // template reject
{

    $devId = $this->getEvent()->getRouteMatch()->getParam('pId');
    $temp_name = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getResultTable()->rejectTemplate($temp_name,$devId) ;
    $resultemail = $this->getDeveloperTable()->fetchEmail($devId) ;
    $message = new Message();
    $message->addTo($resultemail[0]['eId'])
    ->addFrom('info@smartfanpage.com')
    ->setSubject('Alert!!!')
    ->setBody("Sorry Your Template is not Approved By Admin");
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
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'devtemplate','devId'=>$devId));
  
}
 
public function deletedeveloperAction() 
{
    $devid = $_POST['devid'];
    $data = array(
    'devId' => $devid,
    'disableDeveloper'=> '1'
    );
    
    $data1 = array(
    'id' => $devid,
    'disableDeveloper'=> '1'
    );
    
    $ups1 = $this->getDeveloperTable()->updatedisable($data1,$devid);
    $ups = $this->getTemplateTable()->updatedisable($data,$devid);
    echo $ups1;
    exit;
    
}  
public function logoutAction() // admin logout
{
        
        $user_session->loginId=($_SESSION['uname']);
        $user_session = new \Zend\Session\Container('uname'); 
        $user_session->getManager()->destroy();
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));    
}
    
public function getAdminTable() 
{
        if (!$this->adminTable) 
        {
            $sm = $this->getServiceLocator();
            $this->adminTable = $sm->get('Application\Model\AdminTable');
        }
        return $this->adminTable;
}
    
public function getDeveloperTable()
{
    if (!$this->developerTable)
    {
    $sm = $this->getServiceLocator();
    $this->developerTable = $sm->get('Application\Model\DeveloperTable');
    }
    return $this->developerTable;
}

public function getTemplateTable()
{
    if (!$this->templateTable)
    {
        $sm = $this->getServiceLocator();
        $this->templateTable = $sm->get('Application\Model\TemplateTable');
    }
    return $this->templateTable;
}
    
public function getResultTable()
{
    if (!$this->templateTable) 
    {
    $sm = $this->getServiceLocator();
    $this->templateTable = $sm->get('Application\Model\TemplateTable');
    }
    return $this->templateTable;
}
    
////////************ LISTING THE DETAILS OF THE PAGES TO BE EDITED FROM THE BACKEND BY THE ADMIN***************///////    
public function pagedetailsAction()
{
    $this->layout('layout/adminlayout.phtml');
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array(
    'list' => $this->getListingTable()->fetchAll(),
    ));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}
public function usedbyAction()
{
    $this->layout('layout/adminlayout.phtml');
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
      
           
    return new ViewModel();
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }    

}



public function submitAction(){
    
    
        $res = array();       
        $this->layout('layout/blank.phtml');
       // $id = $this->getEvent()->getRouteMatch()->getParam('id');
         $id=$_POST['id'];
        echo $id;exit;
        $content = $this->getappImageLinkTable()->getResult($id);
        $request1 = $this->getRequest()->getPost();
        $filename = $request1['picture'];
        //$request2 = $this->getRequest();
        //$imageLink = $request2->getPost('ImageLink');
         $imageLink =$_POST['appLink'];
         //echo $appLink;

        $request= $this->getRequest();
        $files =  $request->getFiles()->toArray();
        $fileName = $files[$filename]['name'];
        if($fileName != "")
        {
        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
        $newName=time();
        $picNewName = $newName . $fileName;
        $newPath = FILES_PATH."/".$picNewName;
        $newPath = str_replace("'","",$newPath);
        $filter = new \Zend\Filter\File\Rename($newPath);
        $filter->filter($files['picture']);
        $geturl=$this->getRequest()->getUri();
        $original=explode('/',$geturl,-2);
        $URI = IMPLODE("/",$original);
        $imageurl = $URI."/upload/".$picNewName;
        $imageurl = str_replace("/Admin/","/",$imageurl);
        $imageurl=str_replace("http:","",$imageurl);
        }else
        {
        $imageLink = $content->imageLink;
        $imageurl = $content->imagePath;
        } 
        $data = array(
        'linkID'=>$id, 
        'imagePath'=> $imageurl,
        'imageLink'=> $imageLink,                                               
                 );
                 //print_r($data);exit; 
        $rend= $this->getappImageLinkTable()->updateappimage($data,$id);   
        //echo $rend;exit;    
        if($rend==1)
        {
            echo $rend;exit;
        }
        else{
           echo '0';exit;  
        }

                           
    
        exit;
      
}
public function insertappimageAction()
{
                        $this->layout('layout/adminlayout.phtml');
                        $request = $this->getRequest();
                        $appLink = $request->getPost('appLink');
                        $request1 = $this->getRequest()->getPost();         
                        $filename = $request1['picture'];
                        $request= $this->getRequest();                       
                        //$files =  $request->getFiles()->toArray();
                        //print_r($files);exit
                        
                        $files =  $request->getFiles()->toArray();  
                        $fileName = $files[$filename]['name'];
                       
                        //$File = $_FILES["picture"]["name"];
                         //print_r($fileName);exit;
                         
                        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                        $newName=time();
                        $picNewName = $newName . $fileName;
                        $newPath = FILES_PATH."/".$picNewName;
                        $newPath = str_replace("'","",$newPath);
                        $filter = new \Zend\Filter\File\Rename($newPath);
                        $filter->filter($files['picture']);
                        $geturl=$this->getRequest()->getUri();  
                        $original=explode('/',$geturl,-2);
                        $URI = IMPLODE("/",$original);
                        $imageurl = $URI."/upload/".$picNewName;
                        $imageurl=str_replace("/admin/","/",$imageurl);
                        $imageurl=str_replace("http:","",$imageurl);
                        //echo $imageurl;exit;
                        $getdata = $this->getappImageLinkTable()->insertappImageLink($appLink,$imageurl);
                        if($getdata==1)
                        {
                         echo $getdata;exit;   
                        }
                        else
                        {
                         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'usedby'));     
                        }

}

public function animationAction()
{
    $this->layout('layout/adminlayout.phtml');
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {      
           
    return new ViewModel();
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }    

}
public function insertanimatedimageAction()
{
    
                        $this->layout('layout/adminlayout.phtml');                                           
                        $request1 = $this->getRequest()->getPost();         
                        $filename = $request1['picture'];                       
                        $request= $this->getRequest();
                        $files =  $request->getFiles()->toArray();  
                        $fileName = $files[$filename]['name'];  
                        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                        $newName=time();
                        $picNewName = $newName . $fileName;
                        $newPath = FILES_PATH."/".$picNewName;
                        $newPath = str_replace("'","",$newPath);
                        $filter = new \Zend\Filter\File\Rename($newPath);
                        $filter->filter($files['picture']);
                        $geturl=$this->getRequest()->getUri();  
                        $original=explode('/',$geturl,-2);
                        $URI = IMPLODE("/",$original);
                        $imageurl = $URI."/upload/".$picNewName;
                        $imageurl=str_replace("/admin/","/",$imageurl);
                        $imageurl=str_replace("http:","",$imageurl);
                        //echo $imageurl;exit;
                        $getdata = $this->getanimatedImageTable()->insertanimatedImage($imageurl);
                        if($getdata==1)
                        {
                         echo $getdata;exit;   
                        }
                        else
                        {
                         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showanimatedimage'));     
                        }

}


///////////////////////////************///////////////////////**********************///////////////////

public function slideviewAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->gethomepageslidertableTable()->getResult($id);
    $image = $result ->ImagePath;
    
    $form = new homepageslidertableForm();
    $form->bind($result);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array(
    'id'=>$id,
    'content'=>$image,
    'form'=>$form
    ));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
     
}
public function slideaddAction()
{
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->gethomepageslidertableTable()->getResult($id);
$image = $result ->ImagePath;
$form = new homepageslidertableForm();
$request = $this->getRequest();
$files =  $request->getFiles()->toArray();
$Title = $request->getPost('Title');
$Description = $request->getPost('Description');
$imageLink = $request->getPost('imageLink');

if($id!= "")
    {  
    if ($request->isPost()) 
            {
                $files =  $request->getFiles()->toArray();
                $fileName = $files['picture']['name'];
                if($fileName!="")
                    {
                        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                        $newName=time();
                        $picNewName = $newName . $fileName;
                        $newPath = FILES_PATH."/".$picNewName;
                        $newPath = str_replace("'","",$newPath);
                        $filter = new \Zend\Filter\File\Rename($newPath);
                        $filter->filter($files['picture']);
                        $geturl=$this->getRequest()->getUri();  
                        $original=explode('/',$geturl,-2);
                        $URI = IMPLODE("/",$original);
                        $imageurl = $URI."/upload/".$picNewName;
                        $imageurl=str_replace("/admin/","/",$imageurl);
                        $imageurl=str_replace("http:","",$imageurl);
                    }
                else
                    {
                        $imageurl= $result-> ImagePath;
                    }
                    
                $data = array(  
                'id'=>$id,
                'Title'=>$Title,
               
                'imageLink'=>$imageLink,
                'ImagePath'=> $imageurl
                ); 
                $getdata = $this->gethomepageslidertableTable()->updatehomepageslidertable($data,$id);
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
else
    {
    if ($request->isPost())
        {
            $fileName = $files['picture']['name'];
            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $newName=time();
            $picNewName = $newName . $fileName;
            $newPath = FILES_PATH."/".$picNewName;
            $newPath = str_replace("'","",$newPath);
            $filter = new \Zend\Filter\File\Rename($newPath);
            $filter->filter($files['picture']);
            $geturl=$this->getRequest()->getUri();  
            $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$picNewName;
            $imageurl=str_replace("/admin/","/",$imageurl);
            $imageurl=str_replace("http:","",$imageurl);
                if($fileName != null || preg_match('/.+\.(jpeg|jpg|gif|png)$/', $picNewName))
                  {
                    $getdata = $this->gethomepageslidertableTable()->inserthomepageslidertable($picNewName,$imageurl, $Title,$imageLink);
                  }
                else
                  {
                     $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'show'));
                  }
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'show'));
         }
    }
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('id'=>$id,'form'=>$form ));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }

}

public function deleteAction() 
{
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $this->gethomepageslidertableTable()->deletehomepageslidertable($id);
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'show'));       
} 
public function showAction()
{
    $this->layout('layout/adminlayout.phtml');
    $result=$this->gethomepageslidertableTable()->fetchAll();
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('res'=>$result));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}
///////////////////////////******************************////////////////////
public function becomepublisherviewAction()
{
    $this->layout('layout/adminlayout.phtml');        
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getbecomepublisherTable()->getResult($id);
    $actionid = $result->Author;
    $picture = $result->picPath;
    $form = new becomepublisherForm();
    $form->bind($result);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('id'=>$id,'content'=>$picture,'actionid' => $actionid,'form'=>$form,));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}
public function becomepublisherAction()
{
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->getbecomepublisherTable()->getResult($id);
$actionid = $result->Author;
$picture = $result->picPath;
$form = new becomepublisherForm();
$request = $this->getRequest();
$files =  $request->getFiles()->toArray();
$picHeader = $request->getPost('picHeader');
$picDescription = $request->getPost('picDescription');
if($id != "")
    {
    	
    	
    if ($request->isPost()) 
        {
            $files =  $request->getFiles()->toArray();
            $fileName = $files['picture']['name'];
            $action1 = $request->getPost('radio-01');
            $action2 = $request->getPost('radio-02');
            $action3 = $request->getPost('radio-03');
            if($action1==1)
            {
                    $action =1;   
            }
            if($action2==1)
            {
                    $action =2;   
            }
            if($action3==1)
            {
                    $action =3;   
            }
            if($action=="")
            {
                    $action = $actionid;
            }
            if($fileName !="")
            {
                    $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                    $newName=time();
                    $picNewName = $newName . $fileName;
                    $newPath = FILES_PATH."/".$picNewName;
                    $newPath = str_replace("'","",$newPath);
                    $filter = new \Zend\Filter\File\Rename($newPath);
                    $filter->filter($files['picture']);
                    $geturl=$this->getRequest()->getUri();  
                    $original=explode('/',$geturl,-2);
                    $URI = IMPLODE("/",$original);
                    $imageurl = $URI."/upload/".$picNewName;
                    $imageurl=str_replace("/admin/","/",$imageurl);
                    $imageurl=str_replace("http:","",$imageurl);
                    $data = array(  
                    'picId'=>$id,
                    'picHeader'=>$picHeader,
                    'picDescription'=>$picDescription,
                    'picPath'=>$imageurl,
                    'Author'=>$action
                    );
            }
            else
            {
                $data = array(  
                'picId'=>$id,
                'picHeader'=>$picHeader,
                'picDescription'=>$picDescription,
                'picPath'=>$picture,
                'Author'=>$action
                );
            }
            if(!preg_match('/.+\.(jpeg|jpg|gif|png)$/', $picNewName))
            {
                $imageurl=$result->picPath;
                $imageurlc =$result->catagorypicPath ;
            }
            if($picDescription=='')
            {
                $picDescription=$result->picDescription;
            }
            if($picHeader=='')
            {
                $picHeader=$result->picHeader;
            }
                $getdata = $this->getbecomepublisherTable()->updatebecomepublisher($data,$id);
            if($getdata == '1')
            {
                echo "updated";
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher'));
            }
            else      
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher'));       
            }
        }
    }
else   
    {
    if ($request->isPost()) 
        {
            $fileName = $files['picture']['name'];
            $fileNamec = $files['catagory']['name'];
            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $action1 = $request->getPost('radio-01');
            $action2 = $request->getPost('radio-02');
            $action3 = $request->getPost('radio-03');
            if($action1==1)
            {
                $action =1;   
            }
            if($action2==1)
            {
                $action =2;   
            }
            if($action3==1)
            {
                $action =3;   
            }
            if($action =="")
            {
                $action = 0;
            }
            $newName=time();
            $picNewName = $newName . $fileName;
            $newPath = FILES_PATH."/".$picNewName;
            $newPath = str_replace("'","",$newPath);
            $filter = new \Zend\Filter\File\Rename($newPath);
            $filter->filter($files['picture']);
            $geturl=$this->getRequest()->getUri();  
            $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$picNewName;
            $imageurl=str_replace("/admin/","/",$imageurl);
            $imageurl=str_replace("http:","",$imageurl);
            $picNewNamec = $final . $fileNamec;
            $newPathc = FILES_PATH."/".$picNewNamec;
            $newPathc = str_replace("'","",$newPathc);
            $filter = new \Zend\Filter\File\Rename($newPathc);
            $filter->filter($files['catagory']);
            $geturl=$this->getRequest()->getUri();  
            $originalc=explode('/',$geturl,-2);
            $uric = IMPLODE("/",$originalc);
            $imageurlc =  $uric."/upload/".$picNewNamec;
            $imageurlc=str_replace("/admin/","/",$imageurlc);
            $imageurlc=str_replace("http:","",$imageurlc);
            if($fileName != null || preg_match('/.+\.(jpeg|jpg|gif|png)$/', $picNewName))
            {
                  $getdata = $this->getbecomepublisherTable()->insertbecomepublisher( $picNewName ,$imageurl, $imageurlc,$picHeader,$picDescription,$action);
            }
            else
            {
                  $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher'));
            }
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher'));
        }
    }
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('id'=>$id,'form'=>$form));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }

}    
public function showbecomepublisherAction()
{
$this->layout('layout/adminlayout.phtml');
$result=$this->getbecomepublisherTable()->fetchAll();
$user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('res'=>$result));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }

}
public function deletebecomepublisherAction() 
{
$picId= $this->getEvent()->getRouteMatch()->getParam('id');
$this->getbecomepublisherTable()->deletebecomepublisher($picId);
$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher'));
} 
 
public function deletebecomepublishercatagoryAction()
{
$picId= $this->getEvent()->getRouteMatch()->getParam('id');
$data = array('picId' => $picId,'catagorypicPath'=> '');
$this->getbecomepublisherTable()->updatebecomepublishercatagory($picId,$data);
$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'becomepublisherview','id'=>$picId));
}
public function walloffviewAction()
{
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->gethomepagewalloffameTable()->getResult($id);
$imagelink=$result->piclink;
$form = new homepagewalloffameForm();
$form->bind($result);
$user_session = new Container('uname');
$sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
   return new ViewModel(array('id'=>$id,'piclink'=>$imagelink,'form'=>$form));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}
public function walloffameAction()
{               
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->gethomepagewalloffameTable()->getResult($id);
$imagelink=$result->piclink;
$form = new homepagewalloffameForm();
$request = $this->getRequest();
$files =  $request->getFiles()->toArray();
$piclink = $request->getPost('piclink');
$pname = $request->getPost('pname');
$description = $request->getPost('description');
if($id!= "")
    {
    if ($request->isPost())
        {
            $files =  $request->getFiles()->toArray();
            $fileName = $files['picture']['name'];          
            if($fileName != "")
            { 
                    $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                    $newName=time();
                    $picNewName = $newName . $fileName;
                    $newPath = FILES_PATH."/".$picNewName;
                    $newPath = str_replace("'","",$newPath);
                    $filter = new \Zend\Filter\File\Rename($newPath);
                    $filter->filter($files['picture']);
                    $geturl=$this->getRequest()->getUri();  
                    $original=explode('/',$geturl,-2);
                    $URI = IMPLODE("/",$original);
                    $imageurl = $URI."/upload/".$picNewName;
                    $imageurl=str_replace("/admin/","/",$imageurl);
                    $imageurl=str_replace("http:","",$imageurl);
            }
            else
            { 
                   $imageurl=$result->piclink;
            }
            $data = array(  
            'pid'=>$id,
            'piclink'=> $imageurl,
            'description'=>$description,
            'pname'=>  $pname,
            ); 
            $getdata = $this->gethomepagewalloffameTable()->updatehomepagewalloffame($data,$id);
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
else
    {
    if ($request->isPost())
        {
            $fileName = $files['picture']['name'];
            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $newName=time();
            $picNewName = $newName . $fileName;
            $newPath = FILES_PATH."/".$picNewName;
            $newPath = str_replace("'","",$newPath);
            $filter = new \Zend\Filter\File\Rename($newPath);
            $filter->filter($files['picture']);
            $geturl=$this->getRequest()->getUri();  
            $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$picNewName;
            $imageurl=str_replace("/admin/","/",$imageurl);
            $imageurl=str_replace("http:","",$imageurl);
            if($fileName != null || preg_match('/.+\.(jpeg|jpg|gif|png)$/', $picNewName))
             {
                 $getdata = $this->gethomepagewalloffameTable()->inserthomepagewalloffame($imageurl,$pname,$description,$picNewName);
             }
            else
             {
                  $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showwalloffame'));
             }
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showwalloffame'));   
         }
    }
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
     return new ViewModel(array('id'=>$id,'form'=>$form));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}
public function showwalloffameAction()
{
    $this->layout('layout/adminlayout.phtml');
    $result=$this->gethomepagewalloffameTable()->fetchAll();
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
     return new ViewModel(array('res'=>$result));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}

public function showappimageAction()
{
    $this->layout('layout/adminlayout.phtml');
    
     $protocol = '';
        if (isset($_SERVER['HTTPS']) &&
       ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'HTTPS') {
         $protocol = 'https://';
        }
        else {
        $protocol = 'http://';
           }
       // echo $_SERVER['SERVER_PROTOCOL'].$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $dynamicPath = $protocol.$_SERVER["SERVER_NAME"];
        
    $result=$this->getappImageLinkTable()->selectAll();
    //print_r($result);exit;
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
     return new ViewModel(array('res'=>$result,'dynamicPath'=>$dynamicPath));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}

public function showanimatedimageAction()
{
    $this->layout('layout/adminlayout.phtml');
    $result=$this->getanimatedImageTable()->selectAll();
    //print_r($result);exit;
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
     return new ViewModel(array('res'=>$result));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}

public function deleteanimatedimageAction() 
{
    $imageID= $this->getEvent()->getRouteMatch()->getParam('id');
    $this->getanimatedImageTable()->deleteanimage($imageID);
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showanimatedimage'));
} 

public function editanimatedimageAction(){
    
                        
                        $this->layout('layout/adminlayout.phtml'); 
                        $imageID= $this->getEvent()->getRouteMatch()->getParam('id'); 
                         echo $imageID;exit;                                         
                        $request1 = $this->getRequest()->getPost();         
                        $filename = $request1['picture'];                       
                        $request= $this->getRequest();
                        $files =  $request->getFiles()->toArray();  
                        $fileName = $files[$filename]['name'];  
                        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                        $newName=time();
                        $picNewName = $newName . $fileName;
                        $newPath = FILES_PATH."/".$picNewName;
                        $newPath = str_replace("'","",$newPath);
                        $filter = new \Zend\Filter\File\Rename($newPath);
                        $filter->filter($files['picture']);
                        $geturl=$this->getRequest()->getUri();  
                        $original=explode('/',$geturl,-2);
                        $URI = IMPLODE("/",$original);
                        $imageurl = $URI."/upload/".$picNewName;
                        $imageurl=str_replace("/admin/","/",$imageurl);
                        $imageurl=str_replace("http:","",$imageurl);
                       
                         $data = array(
                             'imageId'=>$imageID, 
                             'imagePath'=> $imageurl,
                                               
                                 );
                        $getdata = $this->getanimatedImageTable()->updateanimateimage($data,$imageID);
                        if($getdata==1)
                        {
                         echo $getdata;exit;   
                        }
                        else
                        {
                         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'animation'));     
                        }
    
    
}

public function deleteapplicationimageAction() 
{
    $imageID= $this->getEvent()->getRouteMatch()->getParam('id');
    $this->getappImageLinkTable()->deleteappimage($imageID);
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showappimage'));
} 

public function editappimageAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getappImageLinkTable()->getResult($id);
    $imagelink=$result->imagePath;
    $Applink=$result->imageLink;
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
   return new ViewModel(array('id'=>$id,'piclink'=>$imagelink,'res'=>$Applink));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}

public function updateanimatedimageAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getanimatedImageTable()->getResult($id);
    $imagelink=$result->imagePath;
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
   return new ViewModel(array('id'=>$id,'piclink'=>$imagelink));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}

public function deletewalloffameAction() 
{
    $pid= $this->getEvent()->getRouteMatch()->getParam('id');
    $this->gethomepagewalloffameTable()->deletehomepagewalloffame($pid);
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showwalloffame'));
} 

public function casestudiesviewAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getcasestudiesTable()->getResult($id);
    $image=$result->imgPath;
    $form = new casestudiesForm();
    $form->bind($result);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
     return new ViewModel(array(
    'id'=>$id,
    'content'=>$image,
    'form'=>$form
    ));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}
public function casestudiesAction()
{       
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->getcasestudiesTable()->getResult($id);
$form = new casestudiesForm();
$request = $this->getRequest();
$files =  $request->getFiles()->toArray();
$vedioHeader = $request->getPost('vedioHeader');
$VedioDescription = $request->getPost('VedioDescription');
$VedioPath = $request->getPost('VedioPath');
if (!preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $VedioPath))
    {
        $VedioPath=''; 
    }

if($id!= "")
    {
        if ($request->isPost()) 
        {
            $files =  $request->getFiles()->toArray();
            $fileName = $files['picture']['name'];
            if($fileName!="")
            {
                    $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                    $newName = time();
                    $picNewName = $newName . $fileName;
                    $newPath = FILES_PATH."/".$picNewName;
                    $newPath = str_replace("'","",$newPath);
                    $filter = new \Zend\Filter\File\Rename($newPath);
                    $filter->filter($files['picture']);
                    $geturl=$this->getRequest()->getUri();  
                    $original=explode('/',$geturl,-2);
                    $URI = IMPLODE("/",$original);
                    $imageurl = $URI."/upload/".$picNewName;
                    $imageurl=str_replace("/admin/","/",$imageurl);
                    $imageurl=str_replace("http:","",$imageurl);
            }
            else
            {
                    $imageurl= $result->imgPath;
            }
            if($fileName == null || !preg_match('/.+\.(jpeg|jpg|gif|png)$/', $picNewName))
            {
                    $imageurl=$result->imgPath;
            }  
            $getdata = $this->getcasestudiesTable()->updatecasestudies($vedioHeader,$VedioDescription,$VedioPath, $imageurl,$id);
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
        if ($request->isPost()) 
        {
            $files =  $request->getFiles()->toArray();
            $fileName = $files['picture']['name'];
            if($fileName!='')
            {  
                $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                $newName=time();
                $picNewName = $newName . $fileName;
                $newPath = FILES_PATH."/".$picNewName;
                $newPath = str_replace("'","",$newPath);
                $filter = new \Zend\Filter\File\Rename($newPath);
                $filter->filter($files['picture']);
                $geturl=$this->getRequest()->getUri();  
                $original=explode('/',$geturl,-2);
                $URI = IMPLODE("/",$original);
                $imageurl = $URI."/upload/".$picNewName;
                $imageurl=str_replace("/admin/","/",$imageurl);
                $imageurl=str_replace("http:","",$imageurl);
            }
            $getdata = $this->getcasestudiesTable()->insertcasestudies($vedioHeader,$VedioDescription,$VedioPath, $imageurl);
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
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
       return new ViewModel(array('id'=>$id,'form'=>$form));
    }
    else
    {
      $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }

}
public function deletecasestudiesAction() 
{
    $vedioId = $this->getEvent()->getRouteMatch()->getParam('id');
    $this->getcasestudiesTable()->deletecasestudies($vedioId);
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showcasestudies'));
} 
public function showcasestudiesAction()
{
    $this->layout('layout/adminlayout.phtml');
    $result=$this->getcasestudiesTable()->fetchAll();
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('res'=>$result));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}
    
    /************************************* terms and condition done by anima ******************************/
public function showtermsconditionAction()
{
$this->layout('layout/adminlayout.phtml');
$result=$this->gettermsserviceTable()->fetchAll();
$user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('res'=>$result));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}
public function termserviceAction()
{       
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->gettermsserviceTable()->getResult($id);
$form = new termsandconditionForm();
$request = $this->getRequest();
$subhead = $request->getPost('subheader');
$Description = $request->getPost('description');
if($id!= "")
    {
        if ($request->isPost()) 
        {
            $getdata = $this->gettermsserviceTable()->updateterms($subhead,$Description,$id);
            if($getdata == '1')
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtermscondition'));
            }
            else
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtermscondition'));
            }
        }
    }
else
    {
        if ($request->isPost()) 
        {
            $getdata = $this->gettermsserviceTable()->insertterms($subhead,$Description);
            if($getdata=1) 
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtermscondition'));
            }
            else
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtermscondition'));
            }
        }
    }
$user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('id'=>$id,'form'=>$form));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }    

}
public function termsviewAction()
{
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->gettermsserviceTable()->getResult($id);
$form = new termsandconditionForm();
$form->bind($result);
$user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('id'=>$id,'form'=>$form));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }   

}
public function deletetermsAction() 
{
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$this->gettermsserviceTable()->deleteterms($id);
$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtermscondition'));
} 
 /*************************************************************************************************/ 
    
    /************************************* Disclaimer done by anima ******************************/
public function showdisclaimerAction()
{
$this->layout('layout/adminlayout.phtml');
$result=$this->getdisclaimerTable()->fetchAll();
$user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array(
    'res'=>$result
    ));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }   

}
public function disclaimerAction()
{       
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->getdisclaimerTable()->getResult($id);
$form = new termsandconditionForm();
$request = $this->getRequest();
$subhead = $request->getPost('subheader');
$Description = $request->getPost('description');
if($id!= "")
    {
        if ($request->isPost()) 
        {
            $getdata = $this->getdisclaimerTable()->updateterms($subhead,$Description,$id);
            if($getdata == '1')
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showdisclaimer'));
            }
            else
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showdisclaimer'));
            }
        }
    }
else
    {
        if ($request->isPost()) 
        {
            $getdata = $this->getdisclaimerTable()->insertterms($subhead,$Description);
            if($getdata=1) 
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showdisclaimer'));
            }
            else
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showdisclaimer'));
            }
        }
    }
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('id'=>$id,'form'=>$form));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }   
}
public function showdisclaimerviewAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getdisclaimerTable()->getResult($id);
    $form = new termsandconditionForm();
    $form->bind($result);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
   return new ViewModel(array(
    'id'=>$id,
    'form'=>$form
    ));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }   
    
}
public function deletedisclaimerAction() 
{
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$this->getdisclaimerTable()->deleteterms($id);
$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showdisclaimer'));
} 
   
   /*************************************************************************************************/ 
     /************************************* privacy and policy done by anima ******************************/
public function showprivacyAction()
{
$this->layout('layout/adminlayout.phtml');
$result=$this->getprivacypolicyTable()->fetchAll();
$user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
       return new ViewModel(array(
        'res'=>$result
        ));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }  
}
public function privacyAction()
{       
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->getprivacypolicyTable()->getResult($id);
$form = new termsandconditionForm();
$request = $this->getRequest();
$subhead = $request->getPost('subheader');
$Description = $request->getPost('description');
if($id!= "")
    {
        if ($request->isPost()) 
        {
            $getdata = $this->getprivacypolicyTable()->updateterms($subhead,$Description,$id);
            if($getdata == '1')
                {
                 $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showprivacy'));
                }
            else
                {
                  $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showprivacy'));
                }
        }
    }
else
    {
        if ($request->isPost()) 
        {
            $getdata = $this->getprivacypolicyTable()->insertterms($subhead,$Description);
            if($getdata=1) 
            {
                    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showprivacy'));
            }
            else
            {
                    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showprivacy'));
            }
        }
    }
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
       return new ViewModel(array('id'=>$id,'form'=>$form));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }  

}
public function privacyviewAction()
{
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->getprivacypolicyTable()->getResult($id);
$form = new termsandconditionForm();
$form->bind($result);
$user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
       return new ViewModel(array('id'=>$id,'form'=>$form));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }  

}
public function deleteprivacyAction() 
{
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$this->getprivacypolicyTable()->deleteterms($id);
$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showprivacy'));
} 
public function getListingTable()
{
    if (!$this->listingTable) 
    {
    $sm = $this->getServiceLocator();
    $this->listingTable = $sm->get('Application\Model\ListingTable');
    }
    return $this->listingTable;
}
public function gethomepageslidertableTable()
{
    if (!$this->homepageslidertableTable)
    {
    $sm = $this->getServiceLocator();
    $this->homepageslidertableTable = $sm->get('Application\Model\homepageslidertableTable');
    }
    return $this->homepageslidertableTable;
}   
public function gethomepagewalloffameTable()
{
    if (!$this->homepagewalloffameTable) 
    {
    $sm = $this->getServiceLocator();
    $this->homepagewalloffameTable = $sm->get('Application\Model\homepagewalloffameTable');
    }
    return $this->homepagewalloffameTable;
}
public function getbecomepublisherTable()
{
    if (!$this->becomepublisherTable) 
    {
    $sm = $this->getServiceLocator();
    $this->becomepublisherTable = $sm->get('Application\Model\becomepublisherTable');
    }
    return $this->becomepublisherTable;
}
public function getcasestudiesTable()
{
    if (!$this->casestudiesTable)
    {
    $sm = $this->getServiceLocator();
    $this->casestudiesTable = $sm->get('Application\Model\casestudiesTable');
    }
    return $this->casestudiesTable;
}
public function addtemplateimagesAction()
{
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->gettemplateimagesTable()->getResult($id);
$picture = $result->imgPath;
$form = new templateimagesForm();
$form->bind($result);
$request = $this->getRequest();
$files =  $request->getFiles()->toArray();
$imgHeader = $request->getPost('imgHeader');
$imgSubHeader = $request->getPost('imgSubHeader');
$imgDescription = $request->getPost('imgDescription');;
if($id!= "")
    {
       if ($request->isPost()) 
        {
            $fileName = $files['picture']['name'];
            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $newName=time();
            $picNewName = $newName . $fileName;
            $newPath = FILES_PATH."/".$picNewName; 
            $newPath = str_replace("'","",$newPath);
            $filter = new \Zend\Filter\File\Rename($newPath);
            $filter->filter($files['picture']);
            $geturl=$this->getRequest()->getUri();  
            $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$picNewName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
            $imageurl=str_replace("http:","",$imageurl);
            $data = array(  
            'imgid'=>$id,
            'imgHeader'=>$imgHeader,
            'imgSubHeader'=>$imgSubHeader,
            'imgDescription'=>$imgDescription,
            'imgPath'=> $imageurl
            ); 
           if($fileName == null || !preg_match('/.+\.(jpeg|jpg|gif|png)$/', $picNewName))
           {
                $imageurl=$result->imgPath;
           } 
           if($imgHeader=='')
           {
                $imgHeader=$result->imgHeader;
           }
           if($imgSubHeader=='')
           {
                $imgSubHeader=$result->imgSubHeader;
           }
           if($imgDescription=='')
           {
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
        if ($request->isPost())
        {
        
            $fileName = $files['picture']['name'];
            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $uploadObj->setDestination(PUBLIC_PATH . '/upload');
            $uploadObj->receive($fileName);
            $geturl=$this->getRequest()->getUri();
            $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$fileName;
            $imageurl=str_replace("/Admin/","/",$imageurl);
            $imageurl=str_replace("http:","",$imageurl);
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
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array(
    'id'=>$id,
    'content'=>$picture,
    'form'=>$form        
    )); 
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }

}
///////////////////////////////////////////////////EditController///////////////////////////////////////////////////////
public function editAction()
{       
$this->layout('layout/adminlayout.phtml');
$id = (int) $this->params()->fromRoute('id');
$contents = $this->gethomepagetableTable()->fetchAll($id);
$plink = $contents->plink;
$dForm2   = new UploadForm2();
$dForm2->bind($contents);
$user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
        return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$plink));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }

}
public function updatevalueAction()
{       
$this->layout('layout/adminlayout.phtml');
$id = (int) $this->params()->fromRoute('id');
$contents = $this->gethomepagetableTable()->gethomepagetable($id); 
$dForm   = new UploadForm2();
$request = $this->getRequest();
if($request->isPost())
    {
        $files =  $request->getFiles()->toArray();
        $fileName = $files['pname']['name'];
        if($fileName != "")
        { 
        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
        $newName=time();
        $picNewName = $newName . $fileName;
        $newPath = FILES_PATH."/".$picNewName;
        $newPath = str_replace("'","",$newPath);
        $filter = new \Zend\Filter\File\Rename($newPath);
        $filter->filter($files['pname']);
        $geturl=$this->getRequest()->getUri();  
        $original=explode('/',$geturl,-2);
        $URI = IMPLODE("/",$original);
        $imageurl = $URI."/upload/".$picNewName;
        $imageurl=str_replace("/Admin/","/",$imageurl);
        $imageurl=str_replace("http:","",$imageurl);
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
if (!$this->homepagetableTable) 
    {
        $sm = $this->getServiceLocator();
        $this->homepagetableTable = $sm->get('Application\Model\homepagetableTable');
    }
 return $this->homepagetableTable;
}
/////////////////////////////////////Howsworkeditcontroller ///////////////////////////////////       
public function howsworkeditAction()
{   
$this->layout('layout/adminlayout.phtml');
$id = (int) $this->params()->fromRoute('id');
$contents = $this->gethowsworkpagetbleTable()->fetchAll($id);
$Imagelink = $contents->Imagelink;
$dForm2   = new HowsworkForm();
$dForm2->bind($contents);
  $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$Imagelink));
    }
    else
    {
     $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
} 
public function updatevaluehwkAction()
{
$this->layout('layout/adminlayout.phtml');
$id = (int) $this->params()->fromRoute('id');
$contents = $this->gethowsworkpagetbleTable()->gethowsworkpagetble($id); 
$dForm2   = new HowsworkForm();
$request = $this->getRequest();
    if($request->isPost())
    {
    $files =  $request->getFiles()->toArray();
    $fileName = $files['imagename']['name'];
        if($fileName != "")
        {
        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
        $newName=time();
        $picNewName = $newName . $fileName;
        $newPath = FILES_PATH."/".$picNewName;
        $newPath = str_replace("'","",$newPath);
        $filter = new \Zend\Filter\File\Rename($newPath);
        $filter->filter($files['imagename']);
        $geturl=$this->getRequest()->getUri();  
        $original=explode('/',$geturl,-2);
        $URI = IMPLODE("/",$original);
        $imageurl = $URI."/upload/".$picNewName;
        $imageurl=str_replace("/Admin/","/",$imageurl);
        $imageurl=str_replace("http:","",$imageurl);
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
    'Imagename'=>$picNewName
    
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
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
        return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$Imagelink));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}
public function gethowsworkpagetbleTable()
{
        if (!$this->howsworkpagetbleTable)
        {
                $sm = $this->getServiceLocator();
                $this->howsworkpagetbleTable = $sm->get('Application\Model\howsworkpagetbleTable');
        }
        return $this->howsworkpagetbleTable;
}
public function insertAction()
{
                $this->layout('layout/adminlayout.phtml');
                $dForms   = new HowsworkstepForm();
                $request = $this->getRequest();
                if($request->isPost())
                {
                        $files =  $request->getFiles()->toArray();
                        $fileName = $files['imagename']['name'];
                        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                        $newName=time();
                        $picNewName = $newName . $fileName;
                        $newPath = FILES_PATH."/".$picNewName;
                        $newPath = str_replace("'","",$newPath);
                        $filter = new \Zend\Filter\File\Rename($newPath);
                        $filter->filter($files['imagename']);
                        $geturl=$this->getRequest()->getUri();  
                        $original=explode('/',$geturl,-2);
                        $URI = IMPLODE("/",$original);
                        $imageurl = $URI."/upload/".$picNewName;
                        $imageurl=str_replace("/admin/","/",$imageurl);
                        $imageurl=str_replace("http:","",$imageurl);
                        $how = new howsworkstepstble();
                        $dForms->setData($request->getPost());
                        $header = $request->getPost('header');
                        $Description = $request->getPost('Description');
                        $data = array(
                        'header'=> $header,
                        'Imagepath'=>$imageurl,
                        'Imagename'=>$picNewName,
                        'Description'=>$Description
                        );
                        if($dForms->isValid())
                        {
                            $protocol = '';
                            if (isset($_SERVER['HTTPS']) &&
       ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'HTTPS') {
         $protocol = 'https://';
        }
        else {
        $protocol = 'http://';
           }
                           // echo $_SERVER['SERVER_PROTOCOL'].$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                            $dynamicPath = $protocol.$_SERVER["SERVER_NAME"];
                            if($data['Imagepath']== $dynamicPath.'/upload/' )
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
    $this->layout('layout/adminlayout.phtml');
    $dForms   = new HowsworkstepForm();
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
         return new ViewModel(array('form'=> $dForms));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }        
       
}
public function editdescAction()
{           
        $this->layout('layout/adminlayout.phtml');
        $result=$this->gethowsworkstepstbleTable()->fetchAll();
        $user_session = new Container('uname');
        $sessionId = $user_session->offsetGet('uname');
        if($sessionId != "")
        {
             return new ViewModel(array(
                    'list'=>$result
                    ));
        }
        else
        {
            $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
        }
}
public function editheaderAction()
{           
                $this->layout('layout/adminlayout.phtml');
                $id = (int) $this->params()->fromRoute('id');
                $contents = $this->gethowsworkstepstbleTable()->howsworkstepstble($id);
                $imagepath = $contents->Imagepath;
                $step = $contents->header;
                $dForm2   = new HowsworkstepForm();
                $dForm2->bind($contents);
                $user_session = new Container('uname');
                $sessionId = $user_session->offsetGet('uname');
                if($sessionId != "")
                {
                    return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$imagepath,'step'=>$step));
                }
                else
                {
                    $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
                }
                
}
public function updateheaderAction()
{
            $this->layout('layout/adminlayout.phtml');
            $id = (int) $this->params()->fromRoute('id');
            $contents = $this->gethowsworkstepstbleTable()->howsworkstepstble($id); 
            $dForm2   = new HowsworkstepForm();
            $request = $this->getRequest();
            if($request->isPost())
            {
            $files =  $request->getFiles()->toArray();
            $fileName = $files['imagename']['name'];
                if($fileName != "")
                {
                        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                        $newName=time();
                        $picNewName = $newName . $fileName;
                        $newPath = FILES_PATH."/".$picNewName;
                        $newPath = str_replace("'","",$newPath);
                        $filter = new \Zend\Filter\File\Rename($newPath);
                        $filter->filter($files['imagename']);
                        $geturl=$this->getRequest()->getUri();  
                        $original=explode('/',$geturl,-2);
                        $URI = IMPLODE("/",$original);
                        $imageurl = $URI."/upload/".$picNewName;
                        $imageurl=str_replace("/admin/","/",$imageurl);
                        $imageurl=str_replace("http:","",$imageurl);
               }
               else
               {
                    $picNewName= $contents->imagename;
                    $imageurl= $contents->Imagepath;
               }
            }
        $cms = new howsworkstepstble();
        $dForm2->setData($request->getPost());
        $Description = $request->getPost('Description');
        $data = array(
                'id'=>$id, 
                'Description' => $Description,
                'Imagepath'=>$imageurl,
                'imagename'=>$picNewName
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
        if (!$this->howsworkstepstbleTable)
        {
        $sm = $this->getServiceLocator();
        $this->howsworkstepstbleTable = $sm->get('Application\Model\howsworkstepstbleTable');
        }
        return $this->howsworkstepstbleTable;
}
    ////////////////////templateeditcontroller//////////////////////
public function tempeditAction()
{
        $this->layout('layout/adminlayout.phtml');
        $id = (int) $this->params()->fromRoute('id');
        $contents = $this->gettemplatestoretbleTable()->fetchAll($id);
        $plink = $contents->plink;
        $campaignlink = $contents->campaignlink;
        $dForm2   = new TemplateForm();
        $dForm2->bind($contents);
        $user_session = new Container('uname');
                $sessionId = $user_session->offsetGet('uname');
                if($sessionId != "")
                {
                    return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$plink,'clink'=>$campaignlink));
                }
                else
                {
                    $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
                }
}
public function updatevaluetempAction()
{
        $this->layout('layout/adminlayout.phtml');
        $id = (int) $this->params()->fromRoute('id');
        $contents = $this->gettemplatestoretbleTable()->gettemplatestoretble($id); 
        $dForm2   = new TemplateForm();
        $request = $this->getRequest();
        if($request->isPost())
        {
                $files =  $request->getFiles()->toArray();
                $fileName = $files['pname']['name'];
                $fileNamec = $files['campaignlink']['name'];
                            if($fileName != "" )
                            {
                                            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                                            $newName=time();
                                            $picNewName = $newName . $fileName;
                                            $newPath = FILES_PATH."/".$picNewName;
                                            $newPath = str_replace("'","",$newPath);
                                            $filter = new \Zend\Filter\File\Rename($newPath);
                                            $filter->filter($files['pname']);
                                            $geturl=$this->getRequest()->getUri();  
                                            $original=explode('/',$geturl,-2);
                                            $URI = IMPLODE("/",$original);
                                            $imageurl = $URI."/upload/".$picNewName;
                                            $imageurl=str_replace("/Admin/","/",$imageurl);
                                            $imageurl=str_replace("http:","",$imageurl);
                                            $imageurlc = $contents->campaignlink;
                                           
                            
                            
                            }
                            else
                            {
                               $fileName = $contents->pname;
                               $imageurl = $contents->plink;
                               $imageurlc = $contents->campaignlink;
                            }
                             if( $fileNamec!="")
                             {
                                                $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                                                $newName=time();
                                                $picNewName = $newName . $fileNamec;
                                                $newPath = FILES_PATH."/".$picNewName;
                                                $newPath = str_replace("'","",$newPath);
                                                $filter = new \Zend\Filter\File\Rename($newPath);
                                                $filter->filter($files['campaignlink']);
                                                $geturl=$this->getRequest()->getUri();  
                                                $original=explode('/',$geturl,-2);
                                                $URI = IMPLODE("/",$original);
                                                $imageurlc = $URI."/upload/".$picNewName;
                                                $imageurlc=str_replace("/Admin/","/",$imageurlc);
                                                $imageurlc=str_replace("http:","",$imageurlc);
                                                
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
                'pname'=>$picNewName,
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
            if (!$this->templatestoretbleTable)
            {
                        $sm = $this->getServiceLocator();
                        $this->templatestoretbleTable = $sm->get('Application\Model\templatestoretbleTable');
            }
            return $this->templatestoretbleTable;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////  
public function showtemplateimagesAction()
{
         
                        $this->layout('layout/adminlayout.phtml');                    
                        $result=$this->gettemplateimagesTable()->fetchAll();
                        $user_session = new Container('uname');
                        $sessionId = $user_session->offsetGet('uname');
                            if($sessionId != "")
                            {
                                 return new ViewModel(array(
                                    
                                    'res'=>$result
                                    ));
                            }
                            else
                            {
                                $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
                            }
}
public function gettemplateimagesTable()
{
            if (!$this->templateimagesTable) 
            {
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
public function becomepublisherbannerAction()
{      
            $this->layout('layout/adminlayout.phtml');
            $id = (int) $this->params()->fromRoute('id');
            $contents = $this->getbecomepublisherbannerTable()->fetchAll($id);
            $Imagelink = $contents->bannerPath;
            $bannerid = $contents->id;
            $dForm2   = new becomepublisherbannerForm();
            $dForm2->bind($contents);
            $user_session = new Container('uname');
            $sessionId = $user_session->offsetGet('uname');
            if($sessionId != "")
            {
                 return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$Imagelink));
            }
            else
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
            }
}
public function updatebecomepublisherbannerAction()
{ 
                $this->layout('layout/adminlayout.phtml');                      
                $id = (int) $this->params()->fromRoute('id');
                $contents = $this->getbecomepublisherbannerTable()->fetchAll($id); 
                $dForm2   = new becomepublisherbannerForm();
                $request = $this->getRequest();
                if($request->isPost())
                {
                    $files =  $request->getFiles()->toArray();
                    $fileName = $files['picture']['name'];
                            if($fileName != "")
                            {
                            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                            $newName=time();
                            $picNewName = $newName . $fileName;
                            $newPath = FILES_PATH."/".$picNewName;
                            $newPath = str_replace("'","",$newPath);
                            $filter = new \Zend\Filter\File\Rename($newPath);
                            $filter->filter($files['picture']);
                            $geturl=$this->getRequest()->getUri();
                            $original=explode('/',$geturl,-2);
                            $URI = IMPLODE("/",$original);
                            $imageurl = $URI."/upload/".$picNewName;
                            $imageurl = str_replace("/Admin/","/",$imageurl);
                            $imageurl=str_replace("http:","",$imageurl);
                            }
                            else
                            {
                            $fileName = $contents->picture;
                            $imageurl = $contents->bannerPath;
                            }
                      $cms = new becomepublisherbanner();
                      $dForm2->setData($request->getPost());
                      $bannerheader = $request->getPost('bannerHeader');
                      $filFormOneHeader = $request->getPost('filFormOneHeader');
                      $filFormOneDescription = $request->getPost('filFormOneDescription');
                      $filFormTwoHeader = $request->getPost('filFormTwoHeader');
                      $filFormTwoDescription = $request->getPost('filFormTwoDescription');
                      $id = $request->getPost('id');
                      $data = array(
                      'id'=>$id, 
                      'picture'=>$picNewName,
                      'bannerHeader'=> $bannerheader,
                      'bannerPath'=> $imageurl,
                      'filFormOneHeader'=>$filFormOneHeader,
                      'filFormOneDescription'=>$filFormOneDescription,
                      'filFormTwoHeader'=>$filFormTwoHeader,
                      'filFormTwoDescription'=>$filFormTwoDescription,
                      );
                      if($dForm2->isValid())
                      {
                       $rend= $this->getbecomepublisherbannerTable()->savebecomepublisherbanner($id,$data);
                            if($rend==1)
                            {
                           $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher','id'=>'4'));
                            }
                            else
                            {
                             $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisher','id'=>'4')); 
                            } 
                                                
                       }
                }
}
public function getbecomepublisherbannerTable()
{
        if (!$this->becomepublisherbannerTable)
        {
                $sm = $this->getServiceLocator();
                $this->becomepublisherbannerTable = $sm->get('Application\Model\becomepublisherbannerTable');
        }
        return $this->becomepublisherbannerTable;
}
////////////////////////////***********FAQ BANNER**********///////////////////////////////
public function faqbannerAction()
{
    $id = 1;
    $this->layout('layout/adminlayout.phtml');
    $contents = $this->getfaqbannerTable()->fetchAll($id);
    $imagelink = $contents->bannerPath;
    $id = $contents->id;
    $dForm2   = new faqbannerForm();
    $dForm2->bind($contents);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
         return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$imagelink));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}
public function updatefaqbannerAction()
{
                $id = 1;
                $this->layout('layout/adminlayout.phtml');
                $contents = $this->getfaqbannerTable()->fetchAll($id); 
                $dForm2   = new faqbannerForm();
                $request = $this->getRequest();
                    if($request->isPost())
                    {
                            $files =  $request->getFiles()->toArray();
                            $fileName = $files['picture']['name'];
                                    if($fileName != "")
                                    {
                                            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                                            $newName=time();
                                            $picNewName = $newName . $fileName;
                                            $newPath = FILES_PATH."/".$picNewName;
                                            $newPath = str_replace("'","",$newPath);
                                            $filter = new \Zend\Filter\File\Rename($newPath);
                                            $filter->filter($files['picture']);
                                            $geturl=$this->getRequest()->getUri();
                                            $original=explode('/',$geturl,-2);
                                            $URI = IMPLODE("/",$original);
                                            $imageurl = $URI."/upload/".$picNewName;
                                            $imageurl = str_replace("/Admin/","/",$imageurl);
                                            $imageurl=str_replace("http:","",$imageurl);
                                    }
                                    else
                                    {
                                        $fileName = $contents->picture;
                                        $imageurl = $contents->bannerPath;
                                    }
                                $cms = new faqbanner();
                                $dForm2->setData($request->getPost());
                                $bannerheader = $request->getPost('bannerHeader');
                                $questionLine = $request->getPost('questionLine');
                                $id = $request->getPost('id');
                                $data = array(
                                    'id'=>$id, 
                                    'picture'=>$picNewName,
                                    'bannerHeader'=> $bannerheader,
                                    'bannerPath'=> $imageurl,                             
                                    'questionLine'=>$questionLine,                   
                                             );                        
                                    if($dForm2->isValid())
                                    {                                              
                                        $rend= $this->getfaqbannerTable()->savefaqbanner($id,$data);                                                                    if($rend==1)
                                                {                                                    
                                                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'faqbanner'));
                                                }
                                            else
                                                {                                                   
                                                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'faqbanner')); 
                                                }                                             
                                    }
                        }
}    
public function getfaqbannerTable()
{          
    if (!$this->faqbannerTable)
    {
        $sm = $this->getServiceLocator();
        $this->faqbannerTable = $sm->get('Application\Model\faqbannerTable');
    }
    return $this->faqbannerTable;
}
///////////////////////********FAQ BANNER ENDS HERE *********//////////////
///////////////////********FAQ PAGES STARTS HERE**********////////////    
public function faqpagesAction()
{
    $this->layout('layout/adminlayout.phtml');
    $result=$this->getfaqpagesTable()->fetchAll();
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
         return new ViewModel(array('list' => $result));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
                    
} 
public function getfaqpagesTable()
{
    if (!$this->faqpagesTable)
    {
         $sm = $this->getServiceLocator();
         $this->faqpagesTable = $sm->get('Application\Model\faqpagesTable');
    }
         return $this->faqpagesTable;
}  

//////////////////////************FAQ PAGES ENDS HERE**************///////////////////////////////////
///////////////////////************FAQ ABOUT SFPV2 STARTS**********///////////////////
public function showfaqsfpAction()
{
    $this->layout('layout/adminlayout.phtml');
    
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    
    $result=$this->getfaqContainerTable()->getResult($id);
    //echo '<pre/>';
//print_r(array_values($result));
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
         return new ViewModel(array('result'=>$result));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}
public function faqsfpAction() 
{
$this->layout('layout/adminlayout.phtml');
$referenceId = $this->getEvent()->getRouteMatch()->getParam('id');
$form = new faqsfpForm();
$request = $this->getRequest();
$files =  $request->getFiles()->toArray();
$question = $request->getPost('question');
$answer = $request->getPost('answer');

                if ($request->isPost()) 
                {
                    if($question == NULL || $question == '' || $answer == '' || $answer == NULL)
                    {
                        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqsfp','id'=>1));
                    }
                    else{
                    $getdata = $this->getfaqContainerTable()->insertfaqContainer($question,$answer,$referenceId);
                    if($getdata == '1')
                    {
                         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqsfp','id'=>1));
                    }
                    else
                    {
                         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqsfp','id'=>1));
                    }
                    }
                }
        

        $user_session = new Container('uname');
        $sessionId = $user_session->offsetGet('uname');
        if($sessionId != "")
        {
         return new ViewModel(array(
                        'id'=>$id,
                        'form'=>$form,
                        ));
        }
        else
        {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
        }
}
public function faqsfpviewAction()
{
    $this->layout('layout/adminlayout.phtml');
    
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getfaqContainerTable()->fetchfaqContainer($id);
    
    $form = new faqsfpForm();
    $form->bind($result);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
            if($sessionId != "")
            {
            return new ViewModel(array(
            'id'=>$id,
            'form'=>$form
            ));
            }
            else
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
            }
    
    
    
    
}
public function updatefaqsfpAction()
{
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getfaqContainerTable()->fetchfaqContainer($id);
   // print_r($result);
    $request = $this->getRequest();
    $referenceId=$result->referenceId;
    $question = $request->getPost('question');
    $answer = $request->getPost('answer');
    
            if($question=='' || $question==NULL)
            {
                $question=$result->question;
            }
            if($answer==''|| $answer==NULL)
            {
                $answer=$result->answer;
            }
            
            $data = array(  
            'id'=>$id,
            'question'=>$question,
            'answer'=>$answer,
            'referenceId'=>$referenceId
            );
            //print_r($data); 
            $getdata = $this->getfaqContainerTable()->updatefaqContainer($data,$id); 
            if($getdata == '1')
            {
                echo "updated";
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqsfp','id'=>1));
            }
            else 
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqsfp','id'=>1));      
            }
        
    
}
public function deletefaqsfpAction() 
{
    $id= $this->getEvent()->getRouteMatch()->getParam('id');
    $this->getfaqContainerTable()->deletefaqContainer($id);     
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqsfp','id'=>1));    
}     
 
////////////////////////////////************FAQ ABOUT SFPV2 ENDS HERE**************/////////////////////////////
///////////////*************FAQ ABOUT PUBLISHER STARTS HERE*********////////////////////////////////
public function showfaqpublisherAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result=$this->getfaqContainerTable()->getResult($id);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
         return new ViewModel(array('result'=>$result));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
   
}
public function faqpublisherAction() 
{
$this->layout('layout/adminlayout.phtml');
$referenceId = $this->getEvent()->getRouteMatch()->getParam('id');
$form = new faqsfpForm();
$request = $this->getRequest();
$files =  $request->getFiles()->toArray();
$question = $request->getPost('question');
$answer = $request->getPost('answer');

                if ($request->isPost()) 
                {
                    if($question == NULL || $question == '' || $answer == '' || $answer == NULL)
                    {
                        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpublisher','id'=>2));
                    }
                    else{
                    $getdata = $this->getfaqContainerTable()->insertfaqContainer($question,$answer,$referenceId);
                    if($getdata == '1')
                    {
                         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpublisher','id'=>2));
                    }
                    else
                    {
                         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpublisher','id'=>2));
                    }
                    }
                }
        

        $user_session = new Container('uname');
        $sessionId = $user_session->offsetGet('uname');
        if($sessionId != "")
        {
         return new ViewModel(array(
                        'id'=>$id,
                        'form'=>$form,
                        ));
        }
        else
        {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
        }
}
public function faqpublisherviewAction()
{
    $this->layout('layout/adminlayout.phtml');
    
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getfaqContainerTable()->fetchfaqContainer($id);
    
    $form = new faqsfpForm();
    $form->bind($result);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
            if($sessionId != "")
            {
            return new ViewModel(array(
            'id'=>$id,
            'form'=>$form
            ));
            }
            else
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
            }
    
    
    
    
}
public function updatefaqpublisherAction()
{
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getfaqContainerTable()->fetchfaqContainer($id);
   // print_r($result);
    $request = $this->getRequest();
    $referenceId=$result->referenceId;
    $question = $request->getPost('question');
    $answer = $request->getPost('answer');
    
            if($question=='' || $question==NULL)
            {
                $question=$result->question;
            }
            if($answer==''|| $answer==NULL)
            {
                $answer=$result->answer;
            }
            
            $data = array(  
            'id'=>$id,
            'question'=>$question,
            'answer'=>$answer,
            'referenceId'=>$referenceId
            );
            //print_r($data); 
            $getdata = $this->getfaqContainerTable()->updatefaqContainer($data,$id); 
            if($getdata == '1')
            {
                echo "updated";
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpublisher','id'=>2));
            }
            else 
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpublisher','id'=>2));      
            }
        
    
}
public function deletefaqpublisherAction() 
{
    $id= $this->getEvent()->getRouteMatch()->getParam('id');
    $this->getfaqContainerTable()->deletefaqContainer($id);     
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpublisher','id'=>2));        
}     
 
//////////////////////**************FAQ ABOUT PUBLISHER ENDS HERE**********/////////////// 
////////////////////////////****************FAQ ABOUT PRICING STARTS HERE**********/////////
public function showfaqpricingAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result=$this->getfaqContainerTable()->getResult($id);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
         return new ViewModel(array('result'=>$result));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}
public function faqpricingAction() 
{   
$this->layout('layout/adminlayout.phtml');
$referenceId = $this->getEvent()->getRouteMatch()->getParam('id');
$form = new faqsfpForm();
$request = $this->getRequest();
$files =  $request->getFiles()->toArray();
$question = $request->getPost('question');
$answer = $request->getPost('answer');

                if ($request->isPost()) 
                {
                    if($question == NULL || $question == '' || $answer == '' || $answer == NULL)
                    {
                        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpricing','id'=>3));
                    }
                    else{
                    $getdata = $this->getfaqContainerTable()->insertfaqContainer($question,$answer,$referenceId);
                    if($getdata == '1')
                    {
                         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpricing','id'=>3));
                    }
                    else
                    {
                         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpricing','id'=>3));
                    }
                    }
                }
        

        $user_session = new Container('uname');
        $sessionId = $user_session->offsetGet('uname');
        if($sessionId != "")
        {
         return new ViewModel(array(
                        'id'=>$id,
                        'form'=>$form,
                        ));
        }
        else
        {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
        }
}
public function faqpricingviewAction()
{
    $this->layout('layout/adminlayout.phtml');
    
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getfaqContainerTable()->fetchfaqContainer($id);
    
    $form = new faqsfpForm();
    $form->bind($result);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
            if($sessionId != "")
            {
            return new ViewModel(array(
            'id'=>$id,
            'form'=>$form
            ));
            }
            else
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
            }
}

public function updatefaqpricingAction()
{
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getfaqContainerTable()->fetchfaqContainer($id);
   // print_r($result);
    $request = $this->getRequest();
    $referenceId=$result->referenceId;
    $question = $request->getPost('question');
    $answer = $request->getPost('answer');
    
            if($question=='' || $question==NULL)
            {
                $question=$result->question;
            }
            if($answer==''|| $answer==NULL)
            {
                $answer=$result->answer;
            }
            
            $data = array(  
            'id'=>$id,
            'question'=>$question,
            'answer'=>$answer,
            'referenceId'=>$referenceId
            );
            //print_r($data); 
            $getdata = $this->getfaqContainerTable()->updatefaqContainer($data,$id); 
            if($getdata == '1')
            {
                echo "updated";
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpricing','id'=>3));
            }
            else 
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpricing','id'=>3));     
            }
        
    
}
public function deletefaqpricingAction() 
{
    $id= $this->getEvent()->getRouteMatch()->getParam('id');
    $this->getfaqContainerTable()->deletefaqContainer($id);     
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqpricing','id'=>3));        
}     

/////////////////////////////*****************FAQ ABOUT PRICING ENDS HERE***********///////////////////////
/////////////////////////////********************FAQ ABOUT TECHNICAL STARTS HERE***********/////////////
public function showfaqtechnicalAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result=$this->getfaqContainerTable()->getResult($id);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
         return new ViewModel(array('result'=>$result));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
}
public function faqtechnicalAction() 
{
$this->layout('layout/adminlayout.phtml');
$referenceId = $this->getEvent()->getRouteMatch()->getParam('id');
$form = new faqsfpForm();
$request = $this->getRequest();
$files =  $request->getFiles()->toArray();
$question = $request->getPost('question');
$answer = $request->getPost('answer');

                if ($request->isPost()) 
                {
                    if($question == NULL || $question == '' || $answer == '' || $answer == NULL)
                    {
                        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqtechnical','id'=>4));
                    }
                    else{
                    $getdata = $this->getfaqContainerTable()->insertfaqContainer($question,$answer,$referenceId);
                    if($getdata == '1')
                    {
                         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqtechnical','id'=>4));
                    }
                    else
                    {
                         $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqtechnical','id'=>4));
                    }
                    }
                }
        

        $user_session = new Container('uname');
        $sessionId = $user_session->offsetGet('uname');
        if($sessionId != "")
        {
         return new ViewModel(array(
                        'id'=>$id,
                        'form'=>$form,
                        ));
        }
        else
        {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
        }

}
public function faqtechnicalviewAction()
{
    $this->layout('layout/adminlayout.phtml');
    
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getfaqContainerTable()->fetchfaqContainer($id);
    
    $form = new faqsfpForm();
    $form->bind($result);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
            if($sessionId != "")
            {
            return new ViewModel(array(
            'id'=>$id,
            'form'=>$form
            ));
            }
            else
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
            }
       
}
public function updatefaqtechnicalAction()
{
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getfaqContainerTable()->fetchfaqContainer($id);
   // print_r($result);
    $request = $this->getRequest();
    $referenceId=$result->referenceId;
    $question = $request->getPost('question');
    $answer = $request->getPost('answer');
    
            if($question=='' || $question==NULL)
            {
                $question=$result->question;
            }
            if($answer==''|| $answer==NULL)
            {
                $answer=$result->answer;
            }
            
            $data = array(  
            'id'=>$id,
            'question'=>$question,
            'answer'=>$answer,
            'referenceId'=>$referenceId
            );
            //print_r($data); 
            $getdata = $this->getfaqContainerTable()->updatefaqContainer($data,$id); 
            if($getdata == '1')
            {
                echo "updated";
               $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqtechnical','id'=>4));
            }
            else 
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqtechnical','id'=>4));     
            }
        
    
}
public function deletefaqtechnicalAction() 
{$id= $this->getEvent()->getRouteMatch()->getParam('id');
    $this->getfaqContainerTable()->deletefaqContainer($id);     
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showfaqtechnical','id'=>4));            
}     
    
public function getfaqContainerTable()
{
    if (!$this->faqContainerTable)
    {
         $sm = $this->getServiceLocator();
         $this->faqContainerTable = $sm->get('Application\Model\faqContainerTable');
    }
    return $this->faqContainerTable;
}
/////////////////////////////////////********************FAQ ABOUT TECHNICAL ENDS HERE**************///////////////////////////////////////////////////////////////////////////////

////////////////////////////////////********************CONTACT EDIT PAGE STARRTED*****************///////////////////////////////////////////////////////////////////////////////

////////**********************///////////////******************CONTACT HEADER STARTS******************////////////////******************/////////////////******************//////
public function contactheaderAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = 1;
    $contents = $this->getcontactheaderTable()->fetchAll($id);
    $imagelink = $contents->imagePath;
    $id = $contents->id;
    $dForm2   = new contactheaderForm();
    $dForm2->bind($contents);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$imagelink));

    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}
    
       
public function updatecontactheaderAction()
{
$this->layout('layout/adminlayout.phtml');    
$id = 1;
$contents = $this->getcontactheaderTable()->fetchAll($id); 
$dForm2   = new contactheaderForm();
$request = $this->getRequest();
if($request->isPost())
    {
    $files =  $request->getFiles()->toArray();
    $fileName = $files['picture']['name'];
        if($fileName != "")
        {
            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $newName=time();
            $picNewName = $newName . $fileName;
            $newPath = FILES_PATH."/".$picNewName;
            $newPath = str_replace("'","",$newPath);
            $filter = new \Zend\Filter\File\Rename($newPath);
            $filter->filter($files['picture']);
            $geturl=$this->getRequest()->getUri();
            $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$picNewName;
            $imageurl = str_replace("/Admin/","/",$imageurl);
            $imageurl=str_replace("http:","",$imageurl);
        }
        else
        {
            $fileName = $contents->picture;
            $imageurl = $contents->imagePath;
        }
                                            
    $cms = new contactheader();
    $dForm2->setData($request->getPost());
    $headerLine = $request->getPost('headerLine');
    
    $id = $request->getPost('id');
    $data = array(
        'id'=>$id, 
        'picture'=>$picNewName,
        'imagePath'=> $imageurl,
        'headerLine'=> $headerLine,                                               
                 );                        
    if($dForm2->isValid())
    {                                              
        $rend= $this->getcontactheaderTable()->savecontactHeader($id,$data);                                             
        if($rend==1)
            {                                                    
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'contactheader'));
            }
        else
            {                                                   
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'contactheader')); 
            }                                             
        }
    }
}    
       
public function getcontactheaderTable()
{          
    if (!$this->contactheaderTable)
    {
        $sm = $this->getServiceLocator();
        $this->contactheaderTable = $sm->get('Application\Model\contactheaderTable');
    }
    return $this->contactheaderTable;
}

////////**********************///////////////******************CONTACT HEADER ENDS******************////////////////******************/////////////////******************//////

////////**********************///////////////******************CONTACT ADDRESS STARTS******************////////////////******************/////////////////******************//////
public function addressAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = 1;
    $contents = $this->getaddressTable()->fetchAll($id);

    $imagelink = $contents->imagePath;
    $id = $contents->id;
    $dForm2   = new addressForm();
    $dForm2->bind($contents);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
    return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$imagelink));

    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}
          
public function updateaddressAction()
{
$this->layout('layout/adminlayout.phtml');
$id = 1;
$contents = $this->getaddressTable()->fetchAll($id); 
$dForm2   = new addressForm();
$request = $this->getRequest();

if($request->isPost())
    {
    $files =  $request->getFiles()->toArray();
    $fileName = $files['picture']['name'];
    if($fileName != "")
        {
            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $newName=time();
            $picNewName = $newName . $fileName;
            $newPath = FILES_PATH."/".$picNewName;
            $newPath = str_replace("'","",$newPath);
            $filter = new \Zend\Filter\File\Rename($newPath);
            $filter->filter($files['picture']);
            $geturl=$this->getRequest()->getUri();
            $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$picNewName;
            $imageurl = str_replace("/Admin/","/",$imageurl);
            $imageurl=str_replace("http:","",$imageurl);
        }
        else
        {
            $fileName = $contents->picture;
            $imageurl = $contents->imagePath;
        }
                                            
    $cms = new address();
    $dForm2->setData($request->getPost());
    $name = $request->getPost('name');
    $adrs = $request->getPost('adrs');
    $email = $request->getPost('email');
    $id = $request->getPost('id');
    $validator = new \Zend\Validator\EmailAddress();
    if ($validator->isValid($email)) 
    {
        $original=$email;
    } 
    else
    {
        foreach ($validator->getMessages() as $message) 
        {
           $original=$contents->email;
        }
    }

    $data = array(
        'id'=>$id, 
        'picture'=>$picNewName,
        'imagePath'=> $imageurl,
        'name'=> $name,
        'adrs'=> $adrs,
        'email'=>$original,                                           
                 );                        
    if($dForm2->isValid())
    {                                              
        $rend= $this->getaddressTable()->saveaddress($id,$data);                                             
        if($rend==1)
            {                                                    
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'address'));
            }
        else
            {                                                   
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'address')); 
            }                                             
    }
       }
}    
       
public function getaddressTable()
{          
    if (!$this->addressTable)
    {
        $sm = $this->getServiceLocator();
        $this->addressTable = $sm->get('Application\Model\addressTable');
    }
    return $this->addressTable;
}

////////**********************///////////////******************CONTACT ADDRESS ENDS******************////////////////******************/////////////////******************//////

//////////////////////////////////*********************CONTACT EDIT PAGE ENDS****************///////////////////////////////////////////////////////////////////////////////////   
 //////////////////////////////////////////////////////////*********BECOME PUBLISHER STUDIO STARTS*******************///////////////////////////////////////////////////////////////////
public function becomepublisherstudioviewAction()
{
$this->layout('layout/adminlayout.phtml');
$id = $this->getEvent()->getRouteMatch()->getParam('id');  
$result = $this->getbecomepublisherstudioTable()->getResult($id);
$image = $result ->mainImagePath;
$imagesub=$result->subImagePath;
$form = new becomepublisherstudioForm();
$form->bind($result);
$user_session = new Container('uname');
$sessionId = $user_session->offsetGet('uname');
if($sessionId != "")
{
return new ViewModel(array(
'id'=>$id,
'content'=>$image,
'contentsub'=>$imagesub,
'form'=>$form
));  

}
else
{
    $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
}

}

public function becomepublisherstudioAction()
{
$this->layout('layout/adminlayout.phtml');    
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->getbecomepublisherstudioTable()->getResult($id);
$form = new becomepublisherstudioForm();
$request = $this->getRequest();
$files =  $request->getFiles()->toArray();
$headLine = $request->getPost('headLine');
$subHeadLine = $request->getPost('subHeadLine');
$description = $request->getPost('description');
$tagLine = $request->getPost('tagLine');
if($id!= "")
{
    if($request->isPost())
        {
            $files =  $request->getFiles()->toArray();
            $fileName = $files['mainImage']['name'];
            $fileNamec = $files['subImage']['name'];
            if($fileName != "" )
            {
                $uploadObj = new \Zend\File\Transfer\Adapter\Http();
                $newName=time();
                $picNewName = $newName . $fileName;
                $newPath = FILES_PATH."/".$picNewName;
                $newPath = str_replace("'","",$newPath);
                $filter = new \Zend\Filter\File\Rename($newPath);
                $filter->filter($files['mainImage']);
                $geturl=$this->getRequest()->getUri();  
                $original=explode('/',$geturl,-2);
                $URI = IMPLODE("/",$original);
                $imageurl = $URI."/upload/".$picNewName;
                $imageurl=str_replace("/admin/","/",$imageurl);
                $imageurl=str_replace("http:","",$imageurl);
                $imageurlc = $contents->subImage;
            }
           else
            {  
                $imageurl = $result->mainImagePath;
                $imageurlc = $result->subImagePath;
            }
            if( $fileNamec!="")
            {
                $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
                $newName=time();
                $picNewName = $newName . $fileNamec;
                $newPath = FILES_PATH."/".$picNewName;
                $newPath = str_replace("'","",$newPath);
                $filter = new \Zend\Filter\File\Rename($newPath);
                $filter->filter($files['subImage']);
                $geturl=$this->getRequest()->getUri();  
                $original=explode('/',$geturl,-2);
                $URI = IMPLODE("/",$original);
                $imageurlc = $URI."/upload/".$picNewName;
                $imageurlc=str_replace("/admin/","/",$imageurlc);
                $imageurlc=str_replace("http:","",$imageurlc); 
            }
           else
            {
                $imageurlc = $result->subImagePath;
            }
            $data = array(  
            'id'=>$id,
            'headLine'=>$headLine,
            'subHeadLine'=>$subHeadLine,
            'tagLine'=>$tagLine,
            'description'=>$description,
            'mainImagePath'=> $imageurl,
            'subImagePath'=> $imageurlc,
            ); 
            $getdata = $this->getbecomepublisherstudioTable()->updatebecomepublisherstudio($data,$id);
            if($getdata == '1')
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisherstudio'));
            }
            else
            {
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisherstudio'));
            }
        }
}
else
{
    if ($request->isPost())
    {
        $files =  $request->getFiles()->toArray();    
        $fileName = $files['mainImage']['name'];
        $subimagename=$files['subImage']['name'];
        $uploadObj = new \Zend\File\Transfer\Adapter\Http();
        $newName=time();
        $picNewName = $newName . $fileName;
        $newPath = FILES_PATH."/".$picNewName;
        $newPath = str_replace("'","",$newPath);
        $filter = new \Zend\Filter\File\Rename($newPath);
        $filter->filter($files['mainImage']);
        $geturl=$this->getRequest()->getUri();  
        $original=explode('/',$geturl,-2);
        $URI = IMPLODE("/",$original);
        $imageurl = $URI."/upload/".$picNewName;
        $imageurl=str_replace("/admin/","/",$imageurl);
        $imageurl=str_replace("http:","",$imageurl);
        $picNewNamesub = $newName . $subimagename;
        $newPathsub = FILES_PATH."/".$picNewNamesub;
        $newPathsub = str_replace("'","",$newPathsub);
        $filter = new \Zend\Filter\File\Rename($newPathsub);
        $filter->filter($files['subImage']);
        $geturlsub=$this->getRequest()->getUri();  
        $originalurl=explode('/',$geturlsub,-2);
        $URI = IMPLODE("/",$originalurl);
        $imageurlsub = $URI."/upload/".$picNewNamesub;
        $imageurlsub=str_replace("/admin/","/",$imageurlsub);
        $imageurlsub=str_replace("http:","",$imageurlsub);
        if($fileName != null)
        {
            $getdata = $this->getbecomepublisherstudioTable()->insertbecomepublisherstudio( $fileName,$imageurl, $imageurlsub,$subHeadLine,$headLine,$tagLine,$description);
        }
        else
        {
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisherstudio'));
        }
        
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisherstudio'));
    }


}
$user_session = new Container('uname');
$sessionId = $user_session->offsetGet('uname');
if($sessionId != "")
{
return new ViewModel(array(
'id'=>$id,
'form'=>$form
));
}
else
{
    $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
}


}

public function deletebecomepublisherstudioAction() 
{
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $this->getbecomepublisherstudioTable()->deletebecomepublisherstudio($id);
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showbecomepublisherstudio'));
} 
       
public function showbecomepublisherstudioAction()
{    
    $this->layout('layout/adminlayout.phtml');
    $result=$this->getbecomepublisherstudioTable()->fetchAll();
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
        return new ViewModel(array(
            'res'=>$result
            ));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}

public function deletebecomepublisherstudiosubimageAction()
{
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->getbecomepublisherstudioTable()->getResult($id);
$subImagePath = $result->subImagePath;
$data = array('subImagePath'=> ''); 
$this->getbecomepublisherstudioTable()->deletebecomepublisherstudiosubimage($data,$id);    
$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'becomepublisherstudioview','id' =>$id));    
}

public function getbecomepublisherstudioTable()
{          
    if (!$this->becomepublisherstudioTable)
    {
        $sm = $this->getServiceLocator();
        $this->becomepublisherstudioTable = $sm->get('Application\Model\becomepublisherstudioTable');
    }
    return $this->becomepublisherstudioTable;
}    
//////////////////////////////////////////////////////////*********BECOME PUBLISHER STUDIO ENDS*******************///////////////////////////////////////////////////////////////////

/////////////////////////////////////////*************************** BLOG OVERVIEW HEADER STARTS ****************//////////////////////////////////////////////////////////////////////////
public function  blogoverviewheaderAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = 1;
    $contents = $this->getblogoverviewHeaderTable()->fetchAll($id);
    $imagelink = $contents->imagePath;
    $id = $contents->id;
    $dForm2   = new blogoverviewHeaderForm();
    $dForm2->bind($contents);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
        return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$imagelink));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}
        
public function updateblogoverviewheaderAction()
{
$this->layout('layout/adminlayout.phtml');    
$id = 1;
$contents = $this->getblogoverviewHeaderTable()->fetchAll($id); 
$dForm2   = new blogoverviewHeaderForm();
$request = $this->getRequest();
if($request->isPost())
    {
    $files =  $request->getFiles()->toArray();
    $fileName = $files['picture']['name'];
    if($fileName != "")
    {
        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
        $newName=time();
        $picNewName = $newName . $fileName;
        $newPath = FILES_PATH."/".$picNewName;
        $newPath = str_replace("'","",$newPath);
        $filter = new \Zend\Filter\File\Rename($newPath);
        $filter->filter($files['picture']);
        $geturl=$this->getRequest()->getUri();
        $original=explode('/',$geturl,-2);
        $URI = IMPLODE("/",$original);
        $imageurl = $URI."/upload/".$picNewName;
        $imageurl = str_replace("/Admin/","/",$imageurl);
        $imageurl=str_replace("http:","",$imageurl);
    }
    else
    {
        $fileName = $contents->picture;
        $imageurl = $contents->imagePath;
    }                                        
    $cms = new blogoverviewHeader();
    $dForm2->setData($request->getPost());
    $headerLine = $request->getPost('headerLine'); 
    $id = $request->getPost('id');
    $data = array(
        'id'=>$id, 
        'picture'=>$picNewName,
        'imagePath'=> $imageurl,
        'headerLine'=> $headerLine,                                               
                 );                        
    if($dForm2->isValid())
    {                                              
        $rend= $this->getblogoverviewHeaderTable()->saveblogoverviewHeader($id,$data);                                             
        if($rend==1)
            {                                                    
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewheader'));
            }
        else
            {                                                   
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewheader')); 
            }                                             
        }
    }
}    
       
public function getblogoverviewHeaderTable()
{          
    if (!$this->blogoverviewHeaderTable)
    {
        $sm = $this->getServiceLocator();
        $this->blogoverviewHeaderTable = $sm->get('Application\Model\blogoverviewHeaderTable');
    }
    return $this->blogoverviewHeaderTable;
}

/////////////////////////////////////////*************************** BLOG OVERVIEW HEADER ENDS ****************//////////////////////////////////////////////////////////////////////////   

////////////////////////////////////////**************************** BLOG OVERVIEW STARTS ***********************/////////////////////////////////////////////////////////////////////////

public function showblogoverviewAction()
{
    $this->layout('layout/adminlayout.phtml');
    $result=$this->getblogoverviewTable()->fetchAll();
    
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
        return new ViewModel(array('res'=>$result));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}

public function blogoverviewAction() 
{
$this->layout('layout/adminlayout.phtml');
$form = new blogoverviewForm();
$id = $this->getEvent()->getRouteMatch()->getParam('id');
$result = $this->getblogoverviewTable()->getResult($id);
$request = $this->getRequest();
$files =  $request->getFiles()->toArray();
$question = $request->getPost('question');
$answer = $request->getPost('answer');
$linkCreator=$request->getPost('linkCreator');
$tagInsert=$request->getPost('tagInsert');
$metaTitle=$request->getPost('metaTitle');
$metaKeyword=$request->getPost('metaKeyword');
$metaDescription=$request->getPost('metaDescription');
$datetime1 = date('Y-m-d H:i:s');
$date =date('Y-m-d');
$value= explode("-",$date);
$month = date('F', strtotime($date));
$year=$value[0];
$days=$value[2];
$time=explode(" ",$datetime1);
$timeofinsert=$time[1];
if($id!= "")
    {
    if ($request->isPost()) 
        {
        	$files =  $request->getFiles()->toArray();
        	$fileName = $files['picture']['name'];
        	if($fileName != "")
        	{
        		$uploadObj = new \Zend\File\Transfer\Adapter\Http();
        		$newName=time();
        		$picNewName = $newName . $fileName;
        		$newPath = FILES_PATH."/".$picNewName;
        		$newPath = str_replace("'","",$newPath);
        		$filter = new \Zend\Filter\File\Rename($newPath);
        		$filter->filter($files['picture']);
        		$geturl=$this->getRequest()->getUri();
        		$original=explode('/',$geturl,-2);
        		$URI = IMPLODE("/",$original);
        		$imageurl = $URI."/upload/".$picNewName;
        		$imageurl=str_replace("/admin/","/",$imageurl);
        		$imageurl=str_replace("http:","",$imageurl);
        	}
        	else
        	{
        		$imageurl=$result->imagePath;
        	}
               
            if($question=='')
            {
                $question=$result->question;  
            }
            if($answer=='')
            {
                $answer=$result->answer;  
            }
            if($linkCreator=='')
            {
                $linkCreator=$result->linkCreator;  
            }
           
            $data = array(  
            'question'=>$question,
            'answer'=>$answer,
            'month'=>$month,
            'year'=>$year,
            'days'=>$days,
            'date'=>$date,
            'timeofinsert'=>$timeofinsert,
            'linkCreator'=>$linkCreator,
            'tagInsert'=>$tagInsert,
            'metaTitle'=>$metaTitle,
            'metaKeyword'=>$metaKeyword,
            'metaDescription'=>$metaDescription,
            'imagePath'=>$imageurl		
                          ); 
                          
            $linkCreatorDetails = $this->getblogoverviewTable()->blogLinkCreatorLinks();
            
            
            if ($linkCreator == '' || $linkCreator == NULL)
            {
              $this->flashMessenger()->addMessage('Please fill up link creator field');  
              $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewview','id'=>$id));
            } 
            else if (preg_match('/[\'\/`\!@#\$%\^&\*\(\)\\+=\{\}\[\]\|;:"\<\>,\\?\\\]/', $linkCreator))
            {
              $this->flashMessenger()->addMessage('There will be no special character in link creator'); 
              $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewview','id'=>$id));
            }
            else if (in_array($linkCreator, $linkCreatorDetails))
            {
                if($linkCreator === $result->linkCreator)
                {
                	if (preg_match('/.+\.(jpeg|jpg|gif|png)$/', $picNewName))
                	{
                    $getdata = $this->getblogoverviewTable()->updateblogoverview($data,$id);  
                    $deldata = $this->getblogoverviewTable()->deleteblogoverview($id); 
                    }
                    else{
                    	$this->flashMessenger()->addMessage('Please upload Image file');
                    	$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewview','id'=>$id));
                    } 
                    if($getdata == '1')
                    {
                        $blogCurrentidObject = $this->getblogoverviewTable()->getblogdetails($linkCreator);
                        $currentId = $blogCurrentidObject->id;
                        $this->flashMessenger()->addMessage('Blog updated successfully');
                        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewview','id'=>$currentId));
                    }
                    else 
                    {
                        $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewview','id'=>$id));      
                    }
                }
                else
                {
                     $this->flashMessenger()->addMessage('link creator name already exist');
                     $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewview','id'=>$id));
                }
            } 
            else
            {
            	if (preg_match('/.+\.(jpeg|jpg|gif|png)$/', $picNewName))
            	{                   
                $getdata = $this->getblogoverviewTable()->updateblogoverview($data,$id);
                
                $deldata = $this->getblogoverviewTable()->deleteblogoverview($id);  
                }
                else{
                	$this->flashMessenger()->addMessage('Please upload Image file');
                	$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewview','id'=>$id));
                }
                if($getdata == '1')
                {
                    echo "updated";
                    $blogCurrentidObject = $this->getblogoverviewTable()->getblogdetails($linkCreator);
                    $currentId = $blogCurrentidObject->id;
                    $this->flashMessenger()->addMessage('Blog updated successfully');
                    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewview','id'=>$currentId));
                }
                else 
                {
                    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewview','id'=>$id));      
                }
            
            }
        }
    }

else   
    {
    if ($request->isPost()) 
        {
            $linkCreatorDetails = $this->getblogoverviewTable()->blogLinkCreatorLinks();
            $fileName = $files['picture']['name'];
            $uploadObj = new \Zend\File\Transfer\Adapter\Http();
            $newName=time();
            $picNewName = $newName . $fileName;
            $newPath = FILES_PATH."/".$picNewName;
            $newPath = str_replace("'","",$newPath);
            $filter = new \Zend\Filter\File\Rename($newPath);
            $filter->filter($files['picture']);
            $geturl=$this->getRequest()->getUri();
            $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$picNewName;
            $imageurl=str_replace("/admin/","/",$imageurl);
            $imageurl=str_replace("http:","",$imageurl);
            $data = array(  
            'question'=>$question,
            'answer'=>$answer,
            'month'=>$month,
            'year'=>$year,
            'days'=>$days,
            'date'=>$date,
            'timeofinsert'=>$timeofinsert,
            'linkCreator'=>$linkCreator,
            'tagInsert'=>$tagInsert,
            'metaTitle'=>$metaTitle,
            'metaKeyword'=>$metaKeyword,
            'metaDescription'=>$metaDescription,
                          ); 
            $form = new blogoverviewForm();
            $form->setData($this->getRequest()->getPost());
            
            if ($linkCreator == '' || $linkCreator == NULL)
            {
               $blank = 1;
               $exist = 0;
               $specialCharacter = 0; 
               $image = 0;
               return new ViewModel(array('form'=>$form,'blank'=>$blank,'exist'=>$exist,'specialCharacter'=>$specialCharacter,'image'=>$image));
            } 
            else if (preg_match('/[\'\/`\!@#\$%\^&\*\(\)\\+=\{\}\[\]\|;:"\<\>,\\?\\\]/', $linkCreator))
            {
                $specialCharacter = 1;
                $blank = 0;
                $exist = 0;
                $image = 0;
                return new ViewModel(array('form'=>$form,'blank'=>$blank,'exist'=>$exist,'specialCharacter'=>$specialCharacter,'image'=>$image));
            }
            else if (in_array($linkCreator, $linkCreatorDetails))
            {  
               $blank = 0;
               $exist = 1;
               $specialCharacter = 0;
               $image = 0;
               return new ViewModel(array('form'=>$form,'blank'=>$blank,'exist'=>$exist,'specialCharacter'=>$specialCharacter,'image'=>$image));
            }  
           
            else
            {
            	if (preg_match('/.+\.(jpeg|jpg|gif|png)$/', $picNewName)){
                $getdata = $this->getblogoverviewTable()->insertblogoverview($question,$answer,$month,$year,$days,$date,$timeofinsert,$linkCreator,$tagInsert,$metaTitle,$metaKeyword,$metaDescription,$imageurl);
            	}
            	else{
            		$blank = 0;
            		$exist = 0;
            		$specialCharacter = 0;
            		$image = 1;
            		return new ViewModel(array('form'=>$form,'blank'=>$blank,'exist'=>$exist,'specialCharacter'=>$specialCharacter,'image'=>$image));
            	}
                if($getdata == '1')
                {
                    $blogCurrentidObject = $this->getblogoverviewTable()->getblogdetails($linkCreator);
                    $currentId = $blogCurrentidObject->id;
                    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewview','id'=>$currentId));
                }
                else
                {
                    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverview'));
                }
            }
        }
    }

$user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
        return new ViewModel(array(
        'id'=>$id,
        'form'=>$form,
        ));

    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }

}

public function blogoverviewviewAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getblogoverviewTable()->getResult($id);
    $imagelink=$result->imagePath;
    $form = new blogoverviewForm();
    $form->bind($result);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
        return new ViewModel(array(
        'id'=>$id,
        'form'=>$form,
        'imagePath'=>$imagelink,
        				
        )); 
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
        
}

public function deleteblogoverviewAction() 
{
    $id= $this->getEvent()->getRouteMatch()->getParam('id');
    $this->getblogoverviewTable()->deleteblogoverview($id);     
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showblogoverview'));     
}     
    
public function getblogoverviewTable()
{
    if (!$this->blogoverviewTable)
    {
         $sm = $this->getServiceLocator();
         $this->blogoverviewTable = $sm->get('Application\Model\blogoverviewTable');
    }
    return $this->blogoverviewTable;
} 

////////////////////////////////////////**************************** BLOG OVERVIEW ENDS ***********************/////////////////////////////////////////////////////////////////////////

///////////////////////////////////////***************************** BLOG ARCHIVE STARTS**********************//////////////////////////////////////////////////////////////////////////
public function  blogarchiveheaderAction()
{
    $this->layout('layout/adminlayout.phtml');
    $id = 1;
    $contents = $this->getblogarchiveHeaderTable()->fetchAll($id);
    $imagelink = $contents->imagePath;
    $id = $contents->id;
    $dForm2   = new blogarchiveHeaderForm();
    $dForm2->bind($contents);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
        return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$imagelink));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}
        
public function updateblogarchiveheaderAction()
{
$this->layout('layout/adminlayout.phtml');    
$id = 1;
$contents = $this->getblogarchiveHeaderTable()->fetchAll($id); 
$dForm2   = new blogarchiveHeaderForm();
$request = $this->getRequest();
if($request->isPost())
    {
    $files =  $request->getFiles()->toArray();
    $fileName = $files['picture']['name'];
    if($fileName != "")
    {
        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
        $newName=time();
        $picNewName = $newName . $fileName;
        $newPath = FILES_PATH."/".$picNewName;
        $newPath = str_replace("'","",$newPath);
        $filter = new \Zend\Filter\File\Rename($newPath);
        $filter->filter($files['picture']);
        $geturl=$this->getRequest()->getUri();
        $original=explode('/',$geturl,-2);
        $URI = IMPLODE("/",$original);
        $imageurl = $URI."/upload/".$picNewName;
        $imageurl = str_replace("/Admin/","/",$imageurl);
        $imageurl=str_replace("http:","",$imageurl);
    }
    else
    {
        $fileName = $contents->picture;
        $imageurl = $contents->imagePath;
    }                                        
    $cms = new blogarchiveHeader();
    $dForm2->setData($request->getPost());
    $headerLine = $request->getPost('headerLine'); 
    $id = $request->getPost('id');
    $data = array(
        'id'=>$id, 
        'picture'=>$picNewName,
        'imagePath'=> $imageurl,
        'headerLine'=> $headerLine,                                               
                 );                        
    if($dForm2->isValid())
    {                                              
        $rend= $this->getblogarchiveHeaderTable()->saveblogarchiveHeader($id,$data);                                             
        if($rend==1)
            {                                                    
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogarchiveheader'));
            }
        else
            {                                                   
            $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogoverviewheader')); 
            }                                             
        }
    }
}    
       
public function getblogarchiveHeaderTable()
{          
    if (!$this->blogarchiveHeaderTable)
    {
        $sm = $this->getServiceLocator();
        $this->blogarchiveHeaderTable = $sm->get('Application\Model\blogarchiveHeaderTable');
    }
    return $this->blogarchiveHeaderTable;
}

////////////////////////////////////////////////*****************BLOG ARCHIVE ENDS************************///////////////////////////////////////////
///////////////////////////////////////////////*****************BLOG SHOW STARTS*************************////////////////////////////////////////////
public function blogAction()
{
    $this->layout('layout/adminlayout.phtml');
   
    $result=$this->getblogTable()->fetchAll();
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
        return new ViewModel(array('list' => $result));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
                    
} 
  
public function getblogTable()
{
    if (!$this->blogTable)
    {
         $sm = $this->getServiceLocator();
         $this->blogTable = $sm->get('Application\Model\blogTable');
    }
         return $this->blogTable;
}  
///////////////////////////////////////////////*****************BLOG SHOW ENDS*************************////////////////////////////////////////////
///////////////////////////////////////////////*****************ABOUT US STRATS BY DIBYENDU KONAR************************///////////////////////////////////////////
//////////////////////////////////////////////**************ABOUT US FOR HEADER BY DIBYENDU KONAR******//////////////////////////////////
public function aboutusheaderAction()
{
    $id = 1;
    $this->layout('layout/adminlayout.phtml');
    $contents = $this->getaboutUsHeaderTable()->fetchAll($id);
    $id = $contents->id;
    $dForm2   = new aboutUsHeaderForm();
    $dForm2->bind($contents);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
         return new ViewModel(array('form'=> $dForm2,'id'=>$id,));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
   
}
    
       
public function updateaboutusheaderAction()
{
$id = 1;
$this->layout('layout/adminlayout.phtml');
$contents = $this->getaboutUsHeaderTable()->fetchAll($id);
$dForm2   = new aboutUsHeaderForm();
$request = $this->getRequest();

    if($request->isPost())
    {
        $today = date("F j, Y, g:i a"); 
        $array = explode(",",$today);    
        $array_time = array_pop($array);
        $array_date = $array[1]."-".$array[0];
        
        
        $cms =new aboutUsHeaderForm();
        $dForm2->setData($request->getPost());
        $header = $request->getPost('header');
        $description = $request->getPost('description');
        $id = $request->getPost('id');
        $data = array(
            'id'=>$id, 
            'header'=> $header,                          
            'description'=>$description,
            'dateOfInsert'=>$array_date,
            'time' =>$array_time,                  
                     );                        
         if($dForm2->isValid())
         {                                              
            $rend= $this->getaboutUsHeaderTable()->saveaboutUsHeade($id,$data);                                             
            if($rend==1)
                {                                                    
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'aboutusheader'));
                }
            else
                {                                                   
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'aboutusheader')); 
                }                                             
         }
    }
}    
  
public function getaboutUsHeaderTable()
{
    if (!$this->aboutUsHeaderTable)
    {
         $sm = $this->getServiceLocator();
         $this->aboutUsHeaderTable = $sm->get('Application\Model\aboutUsHeaderTable');
    }
    return $this->aboutUsHeaderTable;
}
//////////////////////////////////////////////**************ABOUT US FOR HEADER ENDS******//////////////////////////////////

//////////////////////////////////////////////**************ABOUT US FOR IMAGES BY DIBYENDU KONAR******//////////////////////////////////
public function aboutusimagesAction()
{
    $id = (int) $this->params()->fromRoute('id');
    
    $this->layout('layout/adminlayout.phtml');
    $contents = $this->getaboutUsImagesTable()->fetchAll($id);
    
    $imagelink = $contents->bannerPath;
    $id = $contents->id;
    $dForm2   = new aboutUsImagesForm();
    $dForm2->bind($contents);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
         return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$imagelink));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}
    
       
public function updateaboutusimagesAction()
{
$id = (int) $this->params()->fromRoute('id');
$this->layout('layout/adminlayout.phtml');
$contents = $this->getaboutUsImagesTable()->fetchAll($id); 
$dForm2   = new aboutUsImagesForm();
$request = $this->getRequest();

    if($request->isPost())
    {
        $files =  $request->getFiles()->toArray();
        $fileName = $files['picture']['name'];
        if($fileName != "")
        {
            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $newName=time();
            $picNewName = $newName . $fileName;
            $newPath = FILES_PATH."/".$picNewName;
            $newPath = str_replace("'","",$newPath);
            $filter = new \Zend\Filter\File\Rename($newPath);
            $filter->filter($files['picture']);
            $geturl=$this->getRequest()->getUri();
            $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$picNewName;
            $imageurl = str_replace("/Admin/","/",$imageurl);
            $imageurl=str_replace("http:","",$imageurl);
        }
        else
        {
            $fileName = $contents->picture;
            $imageurl = $contents->bannerPath;
        }
        $cms = new aboutUsImagesForm();
        $dForm2->setData($request->getPost());
        $name = $request->getPost('name');
        $designation = $request->getPost('designation');
        $fbLink = $request->getPost('fbLink');
        $twitterLink = $request->getPost('twitterLink');
        $instagramLink = $request->getPost('instagramLink');
        $today = date("F j, Y, g:i a"); 
        $array = explode(",",$today);    
        $array_time = array_pop($array);
        $array_date = $array[1]."-".$array[0];
        $id = $request->getPost('id');
        $data = array(
            'id'=>$id, 
            'name'=> $name,
            'designation'=> $designation,
            'bannerPath'=>$imageurl,
            'fbLink'=> $fbLink,
            'twitterLink'=> $twitterLink,                             
            'instagramLink'=>$instagramLink,
            'dateOfInsert'=>$array_date,
            'timeOfInsert'=>$array_time,                   
                     );                        
         if($dForm2->isValid())
         {                                              
            $rend= $this->getaboutUsImagesTable()->saveaboutUsImages($id,$data);                                             
            if($rend==1)
                {                                                    
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showaboutusimages'));
                }
            else
                {                                                   
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showaboutusimages')); 
                }                                             
         }
    }
} 
public function showaboutusimagesAction()
{
    $this->layout('layout/adminlayout.phtml');
    $result=$this->getaboutUsImagesTable()->details();
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
         return new ViewModel(array('res'=>$result));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}

public function deleteaboutusimagesAction()
{
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $today = date("F j, Y, g:i a"); 
    $array = explode(",",$today);    
    $array_time = array_pop($array);
    $array_date = $array[1]."-".$array[0];
    $dynamicPath = '//'.$_SERVER["SERVER_NAME"].'/upload/noimage007.jpg';
    $data = array(
            'id'=>$id, 
            'name'=> '',
            'designation'=> '',
            'bannerPath'=>$dynamicPath,
            'fbLink'=> '',
            'twitterLink'=> '',                             
            'instagramLink'=>'',
            'dateOfInsert'=>$array_date,
            'timeOfInsert'=>$array_time,                   
                     );
    $rend= $this->getaboutUsImagesTable()->saveaboutUsImages($id,$data);  
    if($rend==1)
                {                                                    
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showaboutusimages'));
                }
            else
                {                                                   
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showaboutusimages')); 
                }                
}
public function getaboutUsImagesTable()
{
    if (!$this->aboutUsImagesTable)
    {
         $sm = $this->getServiceLocator();
         $this->aboutUsImagesTable = $sm->get('Application\Model\aboutUsImagesTable');
    }
    return $this->aboutUsImagesTable;
}
//////////////////////////////////////////////**************ABOUT US FOR IMAGES ENDS******//////////////////////////////////
//////////////////////////////////////////////******************ABOUT US ENDS**************************//////////////////////////////////
////////////////////////////////////////////********BLOG DETAILS HEADER BY DIBYENDU KONAR******************///////////////////////////////////
public function blogdetailsbannerAction()
{
    $id = 1;
    $this->layout('layout/adminlayout.phtml');
    $contents = $this->getblogDetailsHeaderTable()->fetchAll($id);
    $imagelink = $contents->bannerPath;
    $id = $contents->id;
    $dForm2   = new blogDetailsHeaderForm();
    $dForm2->bind($contents);
    $user_session = new Container('uname');
    $sessionId = $user_session->offsetGet('uname');
    if($sessionId != "")
    {
         return new ViewModel(array('form'=> $dForm2,'id'=>$id,'content'=>$imagelink));
    }
    else
    {
        $this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
    }
    
}

public function updateblogdetailsheaderAction()
{
$id = 1;
$this->layout('layout/adminlayout.phtml');
$contents = $this->getblogDetailsHeaderTable()->fetchAll($id); 
$dForm2   = new blogDetailsHeaderForm();
$request = $this->getRequest();

    if($request->isPost())
    {
        $files =  $request->getFiles()->toArray();
        $fileName = $files['picture']['name'];
        if($fileName != "")
        {
            $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
            $newName=time();
            $picNewName = $newName . $fileName;
            $newPath = FILES_PATH."/".$picNewName;
            $newPath = str_replace("'","",$newPath);
            $filter = new \Zend\Filter\File\Rename($newPath);
            $filter->filter($files['picture']);
            $geturl=$this->getRequest()->getUri();
            $original=explode('/',$geturl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$picNewName;
            $imageurl = str_replace("/Admin/","/",$imageurl);
            $imageurl=str_replace("http:","",$imageurl);
        }
        else
        {
            $fileName = $contents->picture;
            $imageurl = $contents->bannerPath;
        }
       
        $dForm2->setData($request->getPost());
        $today = date("F j, Y, g:i a"); 
        $array = explode(",",$today);    
        $array_time = array_pop($array);
        $array_date = $array[1]."-".$array[0];
        $id = $request->getPost('id');
        $data = array(
            'id'=>$id, 
            'bannerPath'=> $imageurl,                             
            'date'=> $array_date,
            'time'=>$array_time
                         
                     );                        
         if($dForm2->isValid())
         {                                              
            $rend= $this->getblogDetailsHeaderTable()->saveblogDetailsHeader($id,$data);                                             
            if($rend==1)
                {                                                    
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogdetailsbanner'));
                }
            else
                {                                                   
                $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'blogdetailsbanner')); 
                }                                             
         }
    }
}    
public function getblogDetailsHeaderTable()
{
    if (!$this->blogDetailsHeaderTable)
    {
         $sm = $this->getServiceLocator();
         $this->blogDetailsHeaderTable = $sm->get('Application\Model\blogDetailsHeaderTable');
    }
    return $this->blogDetailsHeaderTable;
}
////////////////////////////////////////////********BLOG DETAILS HEADER ENDS************************/////////////////////////////////////
public function managecampAction() // by Aritra biswas//
{
    $this->layout('layout/adminlayout.phtml'); 
     $developers = $this->getDeveloperTable()->fetchAll();
    
      $devid = "";
     foreach($developers as $developer)
     {
        if($developer->disableDeveloper != '1')
        {
       $devid .= $developer->id."|-|";
        }
     }
   
     $res = explode("|-|",$devid);
   
     $resno = count($res) - 1;
     
     for($i =0 ; $i<$resno;$i++)
     {
       $templatedetails[] = $this->getTemplateTable()->fetchTemplatebydevId($res[$i]); 
     }
     
     $con = count($templatedetails);
for($i=0;$i<$con;$i++)
{
  $rescon = count($templatedetails[$i]);
  for($j=0;$j<$rescon;$j++) 
  {
    $developers1 = $this->getDeveloperTable()->fetchdetails($templatedetails[$i][$j]['devId']);
    if($templatedetails[$i][$j]['approval'] == "1" && $templatedetails[$i][$j]['blocker'] == "0")
    {
    $newtempdetails[] = $templatedetails[$i][$j]['blocker']."/".$templatedetails[$i][$j]['templateName']."/".$developers1->fName."/".$templatedetails[$i][$j]['id'];
    }
    else if($templatedetails[$i][$j]['approval'] == "0" && $templatedetails[$i][$j]['blocker'] == "1")
    {
     $newtempdetails[] = $templatedetails[$i][$j]['blocker']."/".$templatedetails[$i][$j]['templateName']."/".$developers1->fName."/".$templatedetails[$i][$j]['id'];   
    }
  } 
}
 
      return new ViewModel(array('content'=>$newtempdetails));
    exit;   
}

public function updateblockerAction()
{
    $id = $_POST['tempid'];
  
    $data = array(
    'id' => $id,
    'blocker' =>'0',
    'approval'=>'1'
    );
  $ups = $this->getTemplateTable()->updateblockers($data,$id); 
  echo $ups;
   exit;
} 

public function updateunblockerAction()
{
  $id = $_POST['tempid'];
    $data = array(
    'id' => $id,
    'blocker' =>'1',
    'approval'=>'0'
    );
  $ups = $this->getTemplateTable()->updateblockers($data,$id); 
  echo $ups;
   exit;  
} 


public function registereddeveloperAction() // by Aritra biswas//
{
  $this->layout('layout/adminlayout.phtml'); 
  $developers = $this->getDeveloperTable()->fetchAlldev();
return new ViewModel(array('content'=>$developers));
exit;
}    

public function detailscompanyAction()
{
  $this->layout('layout/adminlayout.phtml'); 
  $company = $this->getcompanyDetailsTable()->fetchAll();
  return new ViewModel(array('comp'=>$company));
  
} 
   
public function detailscountryAction()
{
  $this->layout('layout/adminlayout.phtml');  
  $country = $this->getcountryDetailsTable()->fetchAll(); 
  return new ViewModel(array('country'=>$country));

}
 
public function addcompanyAction()
{
  $this->layout('layout/adminlayout.phtml');    
  return new ViewModel(array());
 }   
 
public function addcountryAction()
{
  $this->layout('layout/adminlayout.phtml');    
  return new ViewModel(array());
 }   
 

public function insertcompanyAction()
 {
     $this->layout('layout/adminlayout.phtml');
     $request = $this->getRequest();
     $cmpname = $request->getPost('cmpname');
     $getdata = $this->getcompanyDetailsTable()->insertcompanyDetails($cmpname);
     if($getdata==1)
          {
             $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'detailscompany'));   
           }
            else
           {
           $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'addcompany'));     
           }

 }  
  
 public function insertcountryAction()
 {
     $this->layout('layout/adminlayout.phtml');
     $request = $this->getRequest();
     $countryname = $request->getPost('countryname');
     $getdata = $this->getcountryDetailsTable()->insertcountryDetails($countryname);
     if($getdata==1)
          {
             $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'detailscountry'));   
           }
            else
           {
           $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'addcountry'));     
           }

 }  

public function updatecompanyAction()
 {
    $this->layout('layout/adminlayout.phtml');
    $protocol = '';
        if (isset($_SERVER['HTTPS']) &&
       ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'HTTPS') {
         $protocol = 'https://';
        }
        else {
        $protocol = 'http://';
           }
       // echo $_SERVER['SERVER_PROTOCOL'].$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $dynamicPath = $protocol.$_SERVER["SERVER_NAME"];
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getcompanyDetailsTable()->getResult($id);
    $cmpName=$result->companyName;  
      
    return new ViewModel(array('id'=>$id,'name'=>$cmpName,'dynamicPath'=>$dynamicPath));
    }
    
 public function editcompanyAction()
 {
     $request = $this->getRequest();
     $cmpname = $request->getPost('cmpname');
     $id = $request->getPost('companyId');     
     $getdata = $this->getcompanyDetailsTable()->updcompanyDetails($cmpname,$id);    
     if($getdata==1)
          {
             $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'detailscompany'));   
           }
            else
           {
           $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'addcompany'));     
           }

 } 
  
public function deletecompanyAction()
 {
    $compID= $this->getEvent()->getRouteMatch()->getParam('id');
    $this->getcompanyDetailsTable()->deletecompanyDetails($compID);
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'detailscompany'));

 } 
 
public function deletecountryAction()
 {
    $ID= $this->getEvent()->getRouteMatch()->getParam('id');
    $this->getcountryDetailsTable()->deletecountryDetails($ID);
    $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'detailscountry'));

 } 
 public function editcountryAction()
 {
    
    $this->layout('layout/adminlayout.phtml');
    $protocol = '';
        if (isset($_SERVER['HTTPS']) &&
       ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'HTTPS') {
         $protocol = 'https://';
        }
        else {
        $protocol = 'http://';
           }
       
    $dynamicPath = $protocol.$_SERVER["SERVER_NAME"];
    $id = $this->getEvent()->getRouteMatch()->getParam('id');
    $result = $this->getcountryDetailsTable()->getResult($id);
    $cmpName=$result->countryName;       
    return new ViewModel(array('id'=>$id,'name'=>$cmpName,'dynamicPath'=>$dynamicPath));
    }
 
 public function updatecountryAction()
 {
     $request = $this->getRequest();
     $cmpname = $request->getPost('countryname');
     $id = $request->getPost('countryId');     
     $getdata = $this->getcountryDetailsTable()->updatecountryDetails($cmpname,$id);    
     if($getdata==1)
          {
             $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'detailscountry'));   
           }
            else
           {
           $this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'addcountry'));     
           }
    
 } 
 
///////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////FOR TEMPLATE CATAGORY BY DIBYENDU KONAR STARTS//////////////////////////
 public function showtemplatecatagoryAction()
 {
 	$this->layout('layout/adminlayout.phtml');
 	$result=$this->gettemplateCatagoryTable()->fetchAll();
 	$user_session = new Container('uname');
 	$sessionId = $user_session->offsetGet('uname');
 	if($sessionId != "")
 	{
 		return new ViewModel(array(
 				'res'=>$result
 		));
 	}
 	else
 	{
 		$this->redirect()->toRoute('application/default',array('controller'=>'admin'));
 	}
 }
 public function templatecatagoryAction()
 {
 	$this->layout('layout/adminlayout.phtml');
 	$id = $this->getEvent()->getRouteMatch()->getParam('id');
 	$result = $this->gettemplateCatagoryTable()->getResult($id);
 	$form = new templateCatagoryForm();
 	$request = $this->getRequest();
 	$templateCatagory = $request->getPost('catagory');
 	
 	$today = date("F j, Y, g:i a");
 	$array = explode(",",$today);
 	$array_time = array_pop($array);
 	$array_date = $array[1]."-".$array[0];
 	if($id!= "")
 	{
 		if ($request->isPost())
 		{
 			$getdata = $this->gettemplateCatagoryTable()->updatetemplateCatagory($templateCatagory,$array_time,$array_date,$id);
 			if($getdata == '1')
 			{
 				$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtemplatecatagory'));
 			}
 			else
 			{
 				$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtemplatecatagory'));
 			}
 		}
 	}
 	else
 	{
 		if ($request->isPost())
 		{
 			if($templateCatagory == NULL || $templateCatagory == "")
 			{
 				$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtemplatecatagory'));
 			}
 			else{
 				$getdata = $this->gettemplateCatagoryTable()->inserttemplateCatagory($templateCatagory,$array_time,$array_date);
 			}
 			
 			if($getdata=1)
 			{
 				$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtemplatecatagory'));
 			}
 			else
 			{
 				$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtemplatecatagory'));
 			}
 		}
 	}
 	$user_session = new Container('uname');
 	$sessionId = $user_session->offsetGet('uname');
 	if($sessionId != "")
 	{
 		return new ViewModel(array('id'=>$id,'form'=>$form));
 	}
 	else
 	{
 		$this->redirect()->toRoute('application/default',array('controller'=>'admin'));
 	}
 
 }
 
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 //***IN to do list
 /*********For Terms and conditions***********/
public function showtermsandconditionsheaderAction()
{
	$this->layout('layout/adminlayout.phtml');
	$id = 1;
	$result = $this->getpagesheaderTable()->fetchAll($id);
	$dForm2 = new pagesheaderForm();
	$dForm2->bind($result);
	$user_session = new Container('uname');
	$sessionId = $user_session->offsetGet('uname');
	if($sessionId != "")
	{
		return new ViewModel(array('form'=> $dForm2,'id'=>$id));
	}
	else
	{
		$this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
	}
}
  
public function updatetermsandconditionsheaderAction()
{
	$this->layout('layout/adminlayout.phtml');    
	$contents = $this->getpagesheaderTable()->fetchAll($id);; 
	$dForm2   = new pagesheaderForm();
	$request = $this->getRequest();
	$pagename = $request->getPost('pagename'); 
	$id = $id = $this->getEvent()->getRouteMatch()->getParam('id');
	$date = date("Y/m/d");
	$time = date("h:i:sa");
	if($request->isPost())
	{
		$data = array(
		'id'=>$id, 
		'pagename'=>$pagename,
		'date' => $date,
		'time'=>$time						 
		);  			
		$rend= $this->getpagesheaderTable()->savepagesHeader($id,$data);
		if($rend==1)
		{                                                    
			$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtermsandconditionsheader'));
		}
		else
		{                                                   
			$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtermsandconditionsheader')); 
		} 
	}

}    
/*********For Disclaimer***********/
public function showdisclaimerheaderAction()
{
	$this->layout('layout/adminlayout.phtml');
	$id = 2;
	$result = $this->getpagesheaderTable()->fetchAll($id);
	$dForm2 = new pagesheaderForm();
	$dForm2->bind($result);
	$user_session = new Container('uname');
	$sessionId = $user_session->offsetGet('uname');
	if($sessionId != "")
	{
		return new ViewModel(array('form'=> $dForm2,'id'=>$id));
	}
	else
	{
		$this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
	}
}
  
public function updatedisclaimerheaderAction()
{
	$this->layout('layout/adminlayout.phtml');    
	$contents = $this->getpagesheaderTable()->fetchAll($id);; 
	$dForm2   = new pagesheaderForm();
	$request = $this->getRequest();
	$pagename = $request->getPost('pagename'); 
	$id = $id = $this->getEvent()->getRouteMatch()->getParam('id');
	$date = date("Y/m/d");
	$time = date("h:i:sa");
	if($request->isPost())
	{
		$data = array(
		'id'=>$id, 
		'pagename'=>$pagename,
		'date' => $date,
		'time'=>$time						 
		);  			
		$rend= $this->getpagesheaderTable()->savepagesHeader($id,$data);
		if($rend==1)
		{                                                    
			$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showdisclaimerheader'));
		}
		else
		{                                                   
			$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showdisclaimerheader')); 
		} 
	}

}   
/*********For privacy policy***********/      
 public function showprivacypolicyAction()
{
	$this->layout('layout/adminlayout.phtml');
	$id = 3;
	$result = $this->getpagesheaderTable()->fetchAll($id);
	$dForm2 = new pagesheaderForm();
	$dForm2->bind($result);
	$user_session = new Container('uname');
	$sessionId = $user_session->offsetGet('uname');
	if($sessionId != "")
	{
		return new ViewModel(array('form'=> $dForm2,'id'=>$id));
	}
	else
	{
		$this->redirect()->toRoute('application/default',array('controller'=>'admin'));  
	}
}
  
public function updateprivacypolicyAction()
{
	$this->layout('layout/adminlayout.phtml');    
	$contents = $this->getpagesheaderTable()->fetchAll($id);; 
	$dForm2   = new pagesheaderForm();
	$request = $this->getRequest();
	$pagename = $request->getPost('pagename'); 
	$id = $id = $this->getEvent()->getRouteMatch()->getParam('id');
	$date = date("Y/m/d");
	$time = date("h:i:sa");
	if($request->isPost())
	{
		$data = array(
		'id'=>$id, 
		'pagename'=>$pagename,
		'date' => $date,
		'time'=>$time						 
		);  			
		$rend= $this->getpagesheaderTable()->savepagesHeader($id,$data);
		if($rend==1)
		{                                                    
			$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showdisclaimerheader'));
		}
		else
		{                                                   
			$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showdisclaimerheader')); 
		} 
	}

}   
 
 
 
 public function getpagesheaderTable()
 {
 	if (!$this->pagesheaderTable)
 	{
 		$sm = $this->getServiceLocator();
 		$this->pagesheaderTable = $sm->get('Application\Model\pagesheaderTable');
 	}
 	return $this->pagesheaderTable;
 }
 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
 public function templatecatagoryviewAction()
 {
 	$this->layout('layout/adminlayout.phtml');
 	$id = $this->getEvent()->getRouteMatch()->getParam('id');
 	$result = $this->gettemplateCatagoryTable()->getResult($id);
 	$form = new templateCatagoryForm();
 	$form->bind($result);
 	$user_session = new Container('uname');
 	$sessionId = $user_session->offsetGet('uname');
 	if($sessionId != "")
 	{
 		return new ViewModel(array('id'=>$id,'form'=>$form));
 	}
 	else
 	{
 		$this->redirect()->toRoute('application/default',array('controller'=>'admin'));
 	}
 
 }
 public function deletetemplatecatagoryAction()
 {
 	$id = $this->getEvent()->getRouteMatch()->getParam('id');
 	$this->gettemplateCatagoryTable()->deletetemplateCatagory($id);
 	$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showtemplatecatagory'));
 }
 public function gettemplateCatagoryTable()
{
    if (!$this->templateCatagoryTable)
    {
         $sm = $this->getServiceLocator();
         $this->templateCatagoryTable = $sm->get('Application\Model\templateCatagoryTable');
    }
         return $this->templateCatagoryTable;
} 
 //////////////////////////////////////////////FOR TEMPLATE CATAGORY BY DIBYENDU KONAR ENDS//////////////////////////
////////////////////////////////////////////FOR ABOUT US IMAGE SECTION STARTS BY DIBYENDU/////////////////////////////




public function imagesaboutusviewAction()
{
	$this->layout('layout/adminlayout.phtml');
	$id = $this->getEvent()->getRouteMatch()->getParam('id');
	$result = $this->getimagesAboutUsTable()->getResult($id);
	$image = $result ->imagePath;

	$form = new imagesAboutUsForm();
	$form->bind($result);
	$user_session = new Container('uname');
	$sessionId = $user_session->offsetGet('uname');
	if($sessionId != "")
	{
		return new ViewModel(array(
				'id'=>$id,
				'content'=>$image,
				'form'=>$form
		));
	}
	else
	{
		$this->redirect()->toRoute('application/default',array('controller'=>'admin'));
	}
	 
}
public function imagesaboutusAction()
{
	$this->layout('layout/adminlayout.phtml');
	$id = $this->getEvent()->getRouteMatch()->getParam('id');
	$result = $this->getimagesAboutUsTable()->getResult($id);
	$image = $result ->imagePath;
	$form = new imagesAboutUsForm();
	$request = $this->getRequest();
	$files =  $request->getFiles()->toArray();
	$imageName = $request->getPost('imageName');
	$imageDescription = $request->getPost('imageDescription');
	if($id!= "")
	{
		if ($request->isPost())
		{
			$date = date("Y-m-d")." , ".date("l");
			$time = date("h:i:sa");
			$files =  $request->getFiles()->toArray();
			$fileName = $files['picture']['name'];
			if($fileName!="")
			{
				$uploadObj = new \Zend\File\Transfer\Adapter\Http();
				$newName=time();
				$picNewName = $newName . $fileName;
				$newPath = FILES_PATH."/".$picNewName;
				$newPath = str_replace("'","",$newPath);
				$filter = new \Zend\Filter\File\Rename($newPath);
				$filter->filter($files['picture']);
				$geturl=$this->getRequest()->getUri();
				$original=explode('/',$geturl,-2);
				$URI = IMPLODE("/",$original);
				$imageurl = $URI."/upload/".$picNewName;
				$imageurl=str_replace("/admin/","/",$imageurl);
				$imageurl=str_replace("http:","",$imageurl);
			}
			else
			{
				$imageurl= $result-> imagePath;
			}

			/*$data = array(
					'id'=>$id,
					'imagePath'=> $imageurl,
					'imageName'=>$imageName,
					'imageDescription'=>imageDescription,
					'date'=>$date,
					'time'=>$time,
					
			);*/
			
			if($fileName != null) 
			{
				if( preg_match('/.+\.(jpeg|jpg|gif|png)$/', $picNewName))
				{
					$data = array(
							'imagePath'=> $imageurl,
							'imageName'=>$imageName,
							'imageDescription'=>imageDescription,
							'date'=>$date,
							'time'=>$time,
								
					);
				
					$getdata = $this->getimagesAboutUsTable()->updateimagesAboutUs($data,$id);
				}
				else 
				{
					$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showimagesaboutus'));
				}
			}
			else
			{
				$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showimagesaboutus'));
			}
			if($getdata == '1')
			{
				 
				$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showimagesaboutus'));
			}
			else
			{
				$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showimagesaboutus'));
			}
		}
	}
	else
	{
		if ($request->isPost())
		{
			$date = date("Y-m-d")." , ".date("l");
			$time = date("h:i:sa");
			$fileName = $files['picture']['name'];
			$uploadObj = new \Zend\File\Transfer\Adapter\Http();
			$newName=time();
			$picNewName = $newName . $fileName;
			$newPath = FILES_PATH."/".$picNewName;
			$newPath = str_replace("'","",$newPath);
			$filter = new \Zend\Filter\File\Rename($newPath);
			$filter->filter($files['picture']);
			$geturl=$this->getRequest()->getUri();
			$original=explode('/',$geturl,-2);
			$URI = IMPLODE("/",$original);
			$imageurl = $URI."/upload/".$picNewName;
			$imageurl=str_replace("/admin/","/",$imageurl);
			$imageurl=str_replace("http:","",$imageurl);
			/*$originalUrl = $imageurl;
			$explodedOriginalUrl = explode("/",$originalUrl);*/
			
			if($fileName != null) 
			{
				if( preg_match('/.+\.(jpeg|jpg|gif|png)$/', $picNewName))
				{	
					$data = array(
							'imagePath'=> $imageurl,
							'imageName'=>$imageName,
							'imageDescription'=>imageDescription,
							'date'=>$date,
							'time'=>$time,
								
					);
					
					$getdata = $this->getimagesAboutUsTable()->insertimagesAboutUs($data);
				}
				else
				{
					$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showimagesaboutus'));
				}
			}
			else
			{
				$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showimagesaboutus'));
			}
			$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showimagesaboutus'));
		}
	}
	$user_session = new Container('uname');
	$sessionId = $user_session->offsetGet('uname');
	if($sessionId != "")
	{
		return new ViewModel(array('id'=>$id,'form'=>$form ));
	}
	else
	{
		$this->redirect()->toRoute('application/default',array('controller'=>'admin'));
	}

}

public function deleteimagesaboutusAction()
{
	$id = $this->getEvent()->getRouteMatch()->getParam('id');
	$this->getimagesAboutUsTable()->deleteimagesAboutUs($id);
	$this->redirect()->toRoute('application/default',array('controller'=>'Admin','action'=>'showimagesaboutus'));
}
public function showimagesaboutusAction()
{
	$this->layout('layout/adminlayout.phtml');
	$result=$this->getimagesAboutUsTable()->fetchAll();
	$user_session = new Container('uname');
	$sessionId = $user_session->offsetGet('uname');
	if($sessionId != "")
	{
	
		return new ViewModel(array('res'=>$result));
	}
	else
	{
		$this->redirect()->toRoute('application/default',array('controller'=>'admin'));
	}
}
public function getimagesAboutUsTable()
{
	if (!$this->imagesAboutUsTable)
	{
		$sm = $this->getServiceLocator();
		$this->imagesAboutUsTable = $sm->get('Application\Model\imagesAboutUsTable');
	}
	return $this->imagesAboutUsTable;
}
///////////////////////////*********FOR ABOUT US ENDS*********************////////////////////

public function gettermsserviceTable()
{
    if (!$this->termsserviceTable)
    {
         $sm = $this->getServiceLocator();
         $this->termsserviceTable = $sm->get('Application\Model\termsserviceTable');
    }
         return $this->termsserviceTable;
} 
public function getdisclaimerTable()
{
    if (!$this->disclaimerTable)
    {
         $sm = $this->getServiceLocator();
         $this->disclaimerTable = $sm->get('Application\Model\disclaimerTable');
    }
         return $this->disclaimerTable;
}  
public function getprivacypolicyTable()
{
    if (!$this->privacypolicyTable)
    {
         $sm = $this->getServiceLocator();
         $this->privacypolicyTable = $sm->get('Application\Model\privacypolicyTable');
    }
    return $this->privacypolicyTable;
}  
 
public function getuserDetailsTable()
{
    if (!$this->userDetailsTable)
    {
         $sm = $this->getServiceLocator();
         $this->userDetailsTable = $sm->get('Application\Model\userDetailsTable');
    }
    return $this->userDetailsTable;
}  

public function getappImageLinkTable()
{
    if (!$this->appImageLinkTable)
    {
         $sm = $this->getServiceLocator();
         $this->appImageLinkTable = $sm->get('Application\Model\appImageLinkTable');
    }
    return $this->appImageLinkTable;
}  
  
public function getanimatedImageTable()
{
    if (!$this->animatedImageTable)
    {
         $sm = $this->getServiceLocator();
         $this->animatedImageTable = $sm->get('Application\Model\animatedImageTable');
    }
    return $this->animatedImageTable;
}  


public function getcompanyDetailsTable()
{
    if (!$this->companyDetailsTable)
    {
         $sm = $this->getServiceLocator();
         $this->companyDetailsTable = $sm->get('Application\Model\companyDetailsTable');
    }
    return $this->companyDetailsTable;
}  

public function getcountryDetailsTable()
{
    if (!$this->countryDetailsTable)
    {
         $sm = $this->getServiceLocator();
         $this->countryDetailsTable = $sm->get('Application\Model\countryDetailsTable');
    }
    return $this->countryDetailsTable;
}  
}
    


?>
