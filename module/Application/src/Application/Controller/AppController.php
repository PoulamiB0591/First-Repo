<?php
   //added by arnab
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Template;
use Application\Model\edittemp;
use Application\Model\Image;

use Zend\Json\Json;
use Zend\Session\Container;
use Zend\ViewModel\JsonModel;
use Application\Model\userTemplateDetails;
use Application\Model\indexusPage;

use Zend\Db\Sql\Sql;
use Zend\Db\Adapter\Adapter;
use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Config\StandardConfig;
use Zend\Session\SessionManager;


class AppController extends AbstractActionController { 
  
     protected $userTemplateDetailsTable;
     protected $indexusPageTable;
     
     public function indexAction() {
        
     }
     
 //added by arnab     
     public function pageaddedAction() {
        
        $pagename = $_POST['pagename'];
        $foldername = $_POST['foldername'];
        
        $user_pages = new Container('count');
        $pageno = $user_pages->offsetGet('count');
       
        $user_folder = new Container('foldername');
        $Previousfoldername = $user_folder->offsetGet('foldername');
        
        if( $foldername != $Previousfoldername ) {
            
            $user_pages = new Container('count');
            unset($user_pages->count);
            $user_pages = new Container('count');
            $pageno = $user_pages->offsetGet('count');
            
            $user_folder = new Container('foldername');
            unset($user_folder->foldername);            
            
        }
        
        
        if($pageno == '' ) {
            
        $user_pages = new Container('count');
        $user_pages->count= 4;
        $pageno = $user_pages->offsetGet('count');
       
        
        $user_folder = new Container('foldername');
        $user_folder->foldername= $foldername;
        $Previousfoldername = $user_folder->offsetGet('foldername');
           
                           }
                           
                           
        $PagePathtoCopy = $_SERVER['DOCUMENT_ROOT'].'/files/'.'indexusDemo/';
        $PagePathtoStore = $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$foldername;
        

        if($pageno > 3 && $foldername == $Previousfoldername ) {
            
            $pageno++;
        
        $myfile = fopen($PagePathtoStore."/indexus"."$pageno.php", 'wb') or die("can't open file");
    $file_handle = fopen($PagePathtoCopy.$pagename.".php", "r+") or die("can't open file");
    
    while (!feof($file_handle)) 
    {
     fwrite($myfile,fgets($file_handle));   
    }
     fclose($file_handle);
	 fclose($myfile); 
      
       $string =  "indexus".$pageno; 
      
       $pageno--;
       $file = $PagePathtoStore."/indexus"."$pageno.php";
       header('Content-Type: text/plain');
       $myfile2=fopen($PagePathtoStore."/indexus"."$pageno.php","rw+") or die("unable to open the file");
       $contents = file_get_contents($file);
       $contents = str_replace("indexusR",$string,$contents);
       $val = file_put_contents($PagePathtoStore."/indexus"."$pageno.php",$contents);
       
       fclose($myfile2);
       $pageno++;
       $recentpage = "indexus"."$pageno";
       $recentPageWithPath = $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$foldername."/indexus"."$pageno.php";//this page path will be used in success function later......................
       
       $user_pages = new Container('count');
       $user_pages->count= $pageno;
  
       //echo $recentPageWithPath;
       
       if($pagename != '' && $foldername != '' && $recentpage != '' ) {
            
            //saving table details for each created pages
           
            $inserted = $this->getuserTemplateDetailsTable()->insertFolderDetails($foldername,$pagename,$recentpage);
            
            
        }
        
        $filename = explode("/",$recentPageWithPath);
        $pathfolder = $_SERVER['DOCUMENT_ROOT']."/user_template/".$filename[6];
        $imgurl = "//".$_SERVER["SERVER_NAME"]."/user_template/".$filename[6];
         foreach (glob($pathfolder."/*.php") as $search) {
        $contents = file_get_contents($search);
        $file_contents = str_replace("SFPURLLINK",$imgurl,$contents);
         if (!strpos($contents, "SFPURLLINK")) continue;
        $matches[] = $search;
       //print_r($matches);
       //str_replace("SFP_Redirect/","publish/",$contents);
    
       file_put_contents($search,$file_contents); 
    
 
       }
       echo $recentPageWithPath;
       
       exit;
        }
               
     }
     
     public function addsettingsAction() {
        //$pagename = $_POST['pagename'];
        $foldername = $_POST['foldername'];
        $newpagename = $_POST['newpagename'];
        
        //echo $foldername;exit;
        if( $newpagename == "indexus1" || $newpagename == "indexus2" || $newpagename == "indexus3" || $newpagename == "indexus4" ) {
        $pagedetails = $this->getindexusPageTable()->fetchPageDetails($newpagename);
        $answers = $pagedetails->answerText;
        echo $answers."||=||0";
        //print_r (explode("@",$answers));
        exit;
            
        }
        
        else {
            
        $rowset = $this->getuserTemplateDetailsTable()->fetchRealPagename($foldername,$newpagename);
        $oldpagename = $rowset->pageName;
        //print_r($rowset);
        //echo $oldpagename;
        $pagedetails = $this->getindexusPageTable()->fetchPageDetails($oldpagename);
        $answers = $pagedetails->answerText;
        echo $answers."||=||".$oldpagename;
        //print_r (explode("@",$answers));
        exit;
            
        }
        
        
     }
     public function addvaluesindexusAction()
     {
        $filename = $_POST['filename'];
        $foldername = $_POST['foldername'];
        $values = $_POST['values'];
        $answers = $_POST['answerss'];
        $this->getuserTemplateDetailsTable()->updateValues($foldername,$filename,$values,$answers);
        exit;
     }
     
     
      public function getuserTemplateDetailsTable()
    {
       if (!$this->userTemplateDetailsTable) {
         $sm = $this->getServiceLocator();
         $this->userTemplateDetailsTable = $sm->get('Application\Model\userTemplateDetailsTable');
        }
        return $this->userTemplateDetailsTable;  
    }
    
    public function getindexusPageTable()
    {
       if (!$this->indexusPageTable) {
         $sm = $this->getServiceLocator();
         $this->indexusPageTable = $sm->get('Application\Model\indexusPageTable');
        }
        return $this->indexusPageTable;  
    }
     
     
    
    
     
}

?>