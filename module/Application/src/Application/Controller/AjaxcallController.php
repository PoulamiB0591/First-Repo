<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\fbuser;
use Application\Model\publisherTable;
use Application\Model\userTemplate;
use Zend\Http\Response;
use Zend\Uri\Http as HttpUri;
use Zend\Session\Container; 
class AjaxcallController extends AbstractActionController {
    /**
    * The default action - show the home page
    */
    
    protected $fbuserTable,$publisherTable,$userTemplateTable;  
 
    public function indexAction()
    {
       $this->forceHttps();
       echo "hi";
       exit; 
    }
    
 public function userinsertupdateAction() //insert data
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];        
        $fid = $_POST['fid'];
        $home = $_POST['location'];
        $result =  $this->getpublisherTable()->selectUser($fid);        
        $res = array();
        $count = count($result);
        
        if($count>0) 
        {
           $data = array(
            'id'=>$result[0]['id'],           
            'fbId' =>$fid,
            'fbName'=> $fname,
            'fbLastName'=>$lname,
            'hometown' => $home,
            'loginTime'=> date('y-m-d h:i:s'),
            'fbuser'=>'1'           
		  ); 
          $res['result'] = $this->getpublisherTable()->updateUser($data,$fid);  

          $user_session = new Container('loginId');
          $user_session->loginId = $result[0]['id'];
        }
        else
        {
            $chkemail=$this->getpublisherTable()->selectEmail($email);
           
            if($chkemail[0]['email'] != "")
            {
                $data = array(
                    'id'=>$chkemail[0]['id'],           
                    'fbId' =>$fid,
                    'fbName'=> $fname,
                    'fbLastName'=>$lname,
                    'email'=>$chkemail[0]['email'],
                    'hometown' => $home,
                    'loginTime'=> date('y-m-d h:i:s'),
                    'fbuser'=>'1'           
                );
                $res['result'] = $this->getpublisherTable()->updateUseremail($data,$chkemail[0]['email']);  
                
                $user_session = new Container('loginId');
                $user_session->loginId = $chkemail[0]['id']; 

            }
            else
            {
                $data = array(
                    'fbId' =>$fid,
                    'fbName'=> $fname,
                    'fbLastName' => $lname,
                    // 'hometown' => $home,
                    'email' => $email,
                    'loginTime'=>date('y-m-d h:i:s') ,
                    'fbuser'=>'1'
                );
                $res['login'] = $this->getpublisherTable()->saveUser($data); 
                $res['result'] = 1;
                $user_session = new Container('loginId');
                $user_session->loginId = $res['login'];   
            }
             
        }
      //echo $user_session->loginId;
     echo json_encode($res);
     exit;
      
    }
   
    
    /****************** just added *******************/
    public function userinsertupdatenewAction() //insert data
    {
        
        $protocol = '';
        if (isset($_SERVER[�HTTPS�]) &&
       ($_SERVER[�HTTPS�] == �on� || $_SERVER[�HTTPS�] == 1) ||
        isset($_SERVER[�HTTP_X_FORWARDED_PROTO�]) &&
        $_SERVER[�HTTP_X_FORWARDED_PROTO�] == �https�) {
         $protocol = 'https://';
        }
        else {
        $protocol = 'http://';
           }
       // echo $_SERVER['SERVER_PROTOCOL'].$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $dynamicPath = $protocol.$_SERVER["SERVER_NAME"];
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];        
        $fid = $_POST['fid'];
        $home = $_POST['location'];
         $result =  $this->getpublisherTable()->selectUser($fid); 
         
        $count = count($result);
        if($count>0) 
        {
           $data = array(
            'id'=>$result[0]['id'],           
            'fbId' =>$fid,
            'fbName'=> $fname,
            'fbLastName'=>$lname,
            //'hometown' => $home,
            'loginTime'=> date('y-m-d h:i:s'),
            'fbuser'=>'1'           
		  );
          
          $res = $this->getpublisherTable()->updateUserNew($data,$result[0]['id']); 
          $user_session = new Container('loginId');
          $user_session->loginId = $result[0]['id'];
          
          
        }
        else
        {
            
                               $body = "Dear ".$fname." ,

Thank you for signing up for Smartfanpage. It's great to have you on board.

To get started with publishing campaigns, please go to the following link:".$dynamicPath."/Frontend/dashboard

After you have succesfully signed you can start with:

    Creating campaigns offered by the Smartfanpage community
    Start getting useful user data to increase your sales
    Ask developers from the community to develop one of your great ideas for a brand new campaign.

If you are interested for more info or you just need a live demo to get started. Please reply to this e-mail.

Kind regards,
Koen van de Wetering

Logo Smartfanpage

Founder | Smartfanpage.com
+31 88 1415 001 | Liessentstraat 9a - 5505 AH - Uden.";    

$message = new Message();
$message->addTo($email)
->addFrom('info@smartfanpage.com')
->setSubject('smartfanpage Create Password')
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
            
           $data = array(
            'fbId' =>$fid,
            'fbName'=> $fname,
            'fbLastName' => $lname,
            'hometown' => $home,
            'fbemail' => $email,
            'loginTime'=>date('y-m-d h:i:s') ,
            'regTime'=>date('y-m-d h:i:s'),
            'password'=>$pass          
		);
        

            $res = $this->getpublisherTable()->saveUser($data);  
             $user_session = new Container('loginId');
           $user_session->loginId = $fid;
        }
      
     print_r(json_encode($res));
     exit;
      
    }    
    
    public function selectallAction() //select data
    {
        $result = $this->getpublisherTable()->fetchAll();  
        return $result;
        
    }
    
    public function chkloginAction() //select data
    {
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');
        
        $result = $this->getpublisherTable()->chkLogin($sid);
        print_r($result);
        exit;
        
    }
    
    public function htmlsaveAction()
    {
         $id = $this->getEvent()->getRouteMatch()->getParam('id');
         $this->layout('layout/layout3.phtml');
         $html = $_POST['html'];
         $fname = "temp.html";
         $newfilew = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/".$fname;
         $myfilew = fopen($newfilew,"w+");
        fwrite($myfilew, $html);
        fclose($myfilew); 
      
         
        
         exit;
    }
     public function saveAction()
    {
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
         $this->layout('layout/layout3.phtml');
        $html = $_POST['html'];
        $fname = "temp.html";
        $file = time()."template.html";
        $files = time()."/";
         if($_POST['param']=="delete")
        {
          $newfile_del = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/undodelete.txt";
        
        $myfile12 = fopen($newfile_del,"a+");
        fwrite($myfile12, $files);
        fclose($myfile12);  
        }
        $newfile = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/".$file;
        
        $myfile = fopen($newfile,"w+");
        fwrite($myfile, $html);
        fclose($myfile);

         if($_POST['clicks'] == "1")
         {
         $newfilew = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/".$fname;
        
        $myfilew = fopen($newfilew,"w+");
        fwrite($myfilew, $html);
        fclose($myfilew); 
         }
         
        $newfiles = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/backup.txt";
        $mfiles = fopen($newfiles,"a+");
        fwrite($mfiles, $files);
        fclose($mfiles);
        
         
        $newfiles2 = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/newbackup.txt";
        $mfiles2 = fopen($newfiles2,"a+");
        fwrite($mfiles2, $files);
        fclose($mfiles2);
        
         $newfiles3 = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/fullbackup.txt";
        $mfiles3 = fopen($newfiles3,"a+");
        fwrite($mfiles3, $files);
        fclose($mfiles3);
        
        $myfab = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/backup.txt");
        echo $myfab;
        exit;
        
    }
    
    
        public function undotruncateAction()
    {
      $id = $this->getEvent()->getRouteMatch()->getParam('id');
      $file = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/undodelete.txt";  
      $myfab = file_get_contents($file);
      $restore = explode("/",$myfab);
      $count = count($restore) - 2;
      $res = $restore[$count];
      $fil = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/backup.txt";
      $myfab123 = file_get_contents($fil);
      $restore123 = explode("/",$myfab123);
      $count = count($restore123) - 2;
      $res123 = $restore123[$count];
      $file12 = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/temp/newhtml.txt";
      $myfab1234 = file_get_contents($file12);
      if($myfab1234 != "")
      {
      if($res == $res123)
      {
      $resv = array_diff($restore,array($res));
      $resd = implode("/",$resv);
      file_put_contents($file,$resd);
      $file12 = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/temp/newhtml.txt";
      $myfab1234 = file_get_contents($file12);
      $restore1234 = explode("|-|",$myfab1234);
      $count = count($restore1234) - 1;
      $reswy = array_diff($restore1234,array($restore1234[$count]));
      $rem = implode("|-|",$reswy);
      file_put_contents($file12,$rem);
      }

      }
      $myfabul = file_get_contents($file);
      if($myfabul == "")
      {
        echo "0"; exit;
      }
      
     
      
      exit;
    } 
    
    
    public function checkemptyAction()
    {
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $myfab = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/redobackup.txt");
        
    
      if($myfab == "")
        {
            echo "0";
        }
        else
        {
            $myfabs = explode("/",$myfab);
            if($myfabs[1] == "")
            {
                echo "0";
            }
            else
            {
               echo "1"; 
            }
            
        }
        exit;
    }
    
     public function undocheckemptyAction()
    {
      $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $myfab = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/backup.txt"); 
        if($myfab == "")
        {
            echo "0"; 
        }
        else
        {
            $myfabs = explode("/",$myfab);
            $co = count($myfabs);
            if($myfabs[$co-2] == "" && $myfabs[$co-1] == "" )
            {
                echo "0"; 
            }
            else
            {
               echo "1"; 
            }
            
        }
        exit;
    }
    
    public function deleteallAction()
    {
      $id = $this->getEvent()->getRouteMatch()->getParam('id');
      
      $myfab = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/fullbackup.txt");  
      $arr_fab = explode("/",$myfab);
      foreach($arr_fab as $ar_fab)
      {
        if($ar_fab != ""){
        $file_del = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/".$ar_fab."template.html";
        @unlink($file_del); 
        }
        
      }
      $f = @fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/redobackup.txt", "r+");
        if ($f !== false) {
            ftruncate($f, 0);
            fclose($f);
        }
        
          $f = @fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/fullbackup.txt", "r+");
        if ($f !== false) {
            ftruncate($f, 0);
            fclose($f);
        }
        
          $f = @fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/newbackup.txt", "r+");
        if ($f !== false) {
            ftruncate($f, 0);
            fclose($f);
        }
        
         $f = @fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/backup.txt", "r+");
        if ($f !== false) {
            ftruncate($f, 0);
            fclose($f);
        }
        
              $f = @fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/temp/newhtml.txt", "r+");
        if ($f !== false) {
            ftruncate($f, 0);
            fclose($f);
        }
        
          $f = @fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/temp/edit.txt", "r+");
        if ($f !== false) {
            ftruncate($f, 0);
            fclose($f);
        }
        
          $f = @fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/undodelete.txt", "r+");
        if ($f !== false) {
            ftruncate($f, 0);
            fclose($f);
        }
    
    
      exit;
    }
   
    public function undosave1Action()
    {
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
         $this->layout('layout/layout3.phtml');
        $html = $_POST['html'];
        $file = time()."template.html";
        $files = time()."/";
        $newfile = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/".$file;
        
        $myfile = fopen($newfile,"w+");
        fwrite($myfile, $html);
        fclose($myfile);
        
        $newfiles = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/redobackup.txt";
        $mfiles = fopen($newfiles,"a+");
        fwrite($mfiles, $files);
        fclose($mfiles);
        
         $newfiles3 = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/fullbackup.txt";
        $mfiles3 = fopen($newfiles3,"a+");
        fwrite($mfiles3, $files);
        fclose($mfiles3);
        
        $myfab = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/backup.txt");
        echo $myfab;
        exit;
    }
    
    public function trashAction()
    {
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
       $dir = $_SERVER['DOCUMENT_ROOT']."/user_template/";
        $target=$dir.$id.'/temp';
        $file = 'newhtml.txt';
        
        $html = "|-|".$_POST['random'];
        
         @mkdir($target, 0777,true); 
         $newfile = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/temp/".$file;
        
        $myfile = fopen($newfile,"a+");
        fwrite($myfile, $html);
        fclose($myfile);
        
       
        
         $myfab = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/temp/".$file);
       
         
         echo $myfab;
         exit;
    }
    
    public function restoreAction()
    {
     $id = $this->getEvent()->getRouteMatch()->getParam('id');
     $myfab = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/temp/newhtml.txt"); 
     echo $myfab; 
     exit;
    }
    
    public function removeTrashAction()
    {
      $id = $this->getEvent()->getRouteMatch()->getParam('id');
      $res = $_POST['res'];
      $myfab = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/temp/newhtml.txt"); 
      $myfab = explode("|-|",$myfab);
      $mtable = array_diff($myfab,array($res));
      $cont = count($mtable);
        $target = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/temp/newhtml.txt";
        $mtable = implode("|-|",$mtable);
        file_put_contents($target,$mtable);
        if($cont == "1")
        {
            echo "0";
        }
        exit;
    }
    
    
    public function redosaveAction()
    {
      $id = $this->getEvent()->getRouteMatch()->getParam('id');
      $myfabow = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/newbackup.txt");
      $newfiles = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/backup.txt";
        file_put_contents($newfiles,$myfabow);
      
     
      $myfab = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/redobackup.txt");
      $mtab = explode("/",$myfab);
      //sort($mtab);
      //$co = count($mtab);
      $mtabs = max($mtab);
      $mtable = array_diff($mtab,array($mtabs));
      $maxps = implode("/",$mtable);
      $f = @fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/redobackup.txt", "r+");
        if ($f !== false) {
            ftruncate($f, 0);
            fclose($f);
        }
        $newfiles = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/redobackup.txt";
        file_put_contents($newfiles,$maxps);
      
            
           
            $file = $mtabs."template.html";
      $myfab = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/".$file);
      
      echo $myfab;
      exit;
    }
    public function undosaveAction()
    {
        $results = $_POST['results'];
        $arr_res = explode("/",$results);
        sort($arr_res);  
        $co = count($arr_res);
        $maxval = max($arr_res);
        if($co != "")
        {
           $resarray = array_diff($arr_res,array($maxval)); 
        }
        $result = "";
        foreach($resarray as $ress)
        {
           $result .= $ress."/"; 
        }
    
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $f = @fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/backup.txt", "r+");
        if ($f !== false) {
            ftruncate($f, 0);
            fclose($f);
        }
        $newfiles = $_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/backup.txt";
        file_put_contents($newfiles,"/".$result);
      
        
        
        $files = $arr_res[$co-1]."template.html";
        $myfab = file_get_contents($_SERVER['DOCUMENT_ROOT']."/user_template/".$id."/".$files);
      
        echo $myfab;
        exit;
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
              
                copy( $Entry, $target . '/' . $entry );
            }
            $d->close();
        }
        else 
        {
        copy( $source, $target );
        }
    }
    
    public function templatecheckAction()              /******************* added by Poulami ************/
    {
        $userSession = new Container('loginId');
        $uId = $userSession->offsetGet('loginId');
        
        $response = $this->getuserTemplateTable()->templateCheck($uId);
        
        echo $response;
        exit;
    }
    
    public function checkAction()
    {
        echo $_SERVER['DOCUMENT_ROOT'];
    }
    
    public function logoutAction()
    {
         $user_session->loginId=($_SESSION['loginId']);
        $user_session = new \Zend\Session\Container('loginId'); 
        $user_session->getManager()->destroy(); 
      
        exit;
    }
    
      public function getfbuserTable() 
    {
        if (!$this->fbuserTable) {
         $sm = $this->getServiceLocator();
         $this->fbuserTable = $sm->get('Application\Model\fbuserTable');
        }
        return $this->fbuserTable;
    }
      public function getpublisherTable()
    {          
        if (!$this->publisherTable)
        {
            $sm = $this->getServiceLocator();
            $this->publisherTable = $sm->get('Application\Model\publisherTable');
        }
        return $this->publisherTable;
    } 
    
    public function getuserTemplateTable()
    {
       if (!$this->userTemplateTable) {
         $sm = $this->getServiceLocator();
         $this->userTemplateTable = $sm->get('Application\Model\userTemplateTable');
        }
        return $this->userTemplateTable;  
    }
    
    }