<?php
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Template;
use Application\Model\edittemp;
use Application\Model\Image;
use Application\Model\fbuser;
use Application\Model\formreport;
use Application\Model\invfriends1505052056407910;
use Application\Model\publisher;
use Zend\Json\Json;
use Application\Form\ImageForm;
use Zend\Session\Container;
use Zend\ViewModel\JsonModel;

use Zend\Db\Sql\Sql;
use Zend\Db\Adapter\Adapter;
use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Config\StandardConfig;
use Zend\Session\SessionManager;
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
    
    protected $developerTable,$templateTable,$userTemplateTable,$invfriends1505052056407910Table,$formreport,$publisherTable; 
    
    
    public function indexAction()
    {
    }
    
    //Report Section
     public function reportAction()            /********** edited by Poulami ***********/
    {
       $this->layout('layout/layoutfrontend.phtml');
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');
        $tid = $this->getEvent()->getRouteMatch()->getParam('id');
        
        $tid_session = new Container('tId');
        $tid_session->tId = $tid;
        
        //echo $tid;exit;
        //$tempdetails = $this->getuserTemplateTable()->selectUserdet($tid);
        //$result = $this->getfbuserTable()->selectUser($sid);
        
        if($sid != "")
        {
           $result = $this->getpublisherTable()->selectUser1($sid);  
           $tempdetails = $this->getuserTemplateTable()->selectUserdet($tid);
          // print_r($result); exit;
            $temp_session = new Container('tName');
            $temp_session->tName = $tempdetails->template_link;
           // echo $tempdetails->formUniqueName;exit;
           $formId = $tempdetails->formUniqueName;
          
           $formDetails = $this->getformreportTable()->selectFormDetails($formId);
          
           //print_r($formDetails);  exit; 
                 
           $ViewModel= new ViewModel(array('result'=>$result,'tdetails'=>$tempdetails,'formDetails'=>$formDetails));
           
           return $ViewModel;
        }
        else
        {
            $this->redirect()->toRoute('application/default',array('controller'=>'index','action'=>'index'));    
        }
      
    }
    
   //Template show Section 
public function index1Action()
{
	$this->layout('layout/layoutfrontend.phtml');
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
if($this->getRequest()->getPost('templateCat'))
{
       
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');
        $result = $this->getpublisherTable()->selectUser1($sid); 
        if($sid != "")
        {
            
            $request = $this->getRequest();
            $template = $request->getPost('standard-dropdown'); 
            $temp = $this->getTemplateTable()->searchtempcategory($template);
            $template_mob = $this->getTemplateTable()->searchtempcategory($template);
            return new ViewModel(array('result'=>$result,'rest'=>$temp,'tempdesign'=>$template_mob,'dynamicPath'=>$dynamicPath));
            
        }
else
{
    $this->redirect()->toRoute('application/default',array('controller'=>'index','action'=>'index'));
}

}
elseif($this->getRequest()->getPost('allSearch'))
{
       // $this->layout('layout/layoutfrontend.phtml');
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');
        $result = $this->getpublisherTable()->selectUser1($sid); 
        if($sid != "")
        {
            $request = $this->getRequest();
            $srch = $request->getPost('srchItem');
            if(stristr("neon",$srch))
            {
            $srch = "epic";
            }
            $devsearch = $this->getTemplateTable()->searchcategory($srch); 
            $devsearch1 = $this->getTemplateTable()->searchtemplname($srch); 
        $searchcategory = "";
$searchtemplname = "";
$search_arry = array();
$searchresults = array();
$i=0;
foreach($devsearch as $searchq)
{
	// echo $searchq->id;
     $search_arry[] = $searchq->id;
}
foreach($devsearch1 as $searcha)
{
    
    $searchresults[$i]=$searcha;
    $i++;
    
}


$k=0;
$template_mob=array();

if(count($search_arry)!=0){
foreach($search_arry as $srchs)
{
$searchResult = $this->getTemplateTable()->getsearchresult($srchs);
//$Author=$this->getdeveloperTable()->getDeveloperWithId($searchResult->devId);
$searchresults[$i]=$searchResult;
$i++;
$template = $this->getTemplateTable()->getsearchresult($srchs);

$template_mob[$k]=$template;
$k++;

}
}
else { $template_mob=$this->getTemplateTable()->searchtemplname($srch);}

foreach ($template_mob as $res){
	$holdItemplateId ="";
	$holdItemplateId = $this->encrypt_decrypt('encrypt', $res->id);
	$holdItemplateId = str_replace("/","encoded",$holdItemplateId);

	$array[] = array(
			'approval' => $res->approval,
			'disableDeveloper' => $res->disableDeveloper,
			'tempFoldName'=>$res->tempFoldName,
			'id'=> $res->id,
			'desktopImage'=>$res->desktopImage,
			'mobileImage'=>$res->mobileImage,
			'encryptedTempid'=> $holdItemplateId,
			'templateName'=>$res->templateName,
			'templateDesc'=>$res->templateDesc,


	);

}
        	//print_r($array);
            return new ViewModel(array('result'=>$result,'rest'=>$searchresults,'tempdesign'=>$array,'dynamicPath'=>$dynamicPath));
            
        }
        else
        {
        $this->redirect()->toRoute('application/default',array('controller'=>'index','action'=>'index'));  
        }
}
else
{
     // $this->layout('layout/layoutfrontend.phtml');
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');
      
        $result = $this->getpublisherTable()->selectUser1($sid);  
        //print_r($result);exit;
       /*  $template = $this->getTemplateTable()->fetchTemplate();
       $templates = $this->getTemplateTable()->fetchTemplate();save
          $mytemplates = $this->getTemplateTable()->fetchTemplate();
       $template_mob = $this->getTemplateTable()->fetchTemplate();
       return new ViewModel(array('template'=>$template,'tempdesign'=>$template_mob,'templates'=>$templates,'mytemplates'=>$mytemplates));*/
        if($sid != "")
        {
            $template_mob = $this->getTemplateTable()->getAuthor(1);
            $res = $this->getTemplateTable()->getAuthor(1);
            $temp = $this->getTemplateTable()->getAuthor(1);
            foreach ($template_mob as $res){
            	$holdItemplateId ="";
            	$holdItemplateId = $this->encrypt_decrypt('encrypt', $res->id);
            	$holdItemplateId = str_replace("/","encoded",$holdItemplateId);
            
            	$array[] = array(
            			'approval' => $res->approval,
            			'disableDeveloper' => $res->disableDeveloper,
            			'tempFoldName'=>$res->tempFoldName,
            			'id'=> $res->id,
            			'desktopImage'=>$res->desktopImage,
						'mobileImage'=>$res->mobileImage,
            			'encryptedTempid'=> $holdItemplateId,
            			'templateName'=>$res->templateName,
            			'templateDesc'=>$res->templateDesc,
            
            
            	);
            
            }
            return new ViewModel(array('temp'=>$res,'result'=>$result,'rest'=>$temp,'tempdesign'=>$array ,'dynamicPath'=>$dynamicPath));
        }
        else
        {
            $this->redirect()->toRoute('application/default',array('controller'=>'index','action'=>'index'));    
        }  
    }
    
}

public function encrypt_decrypt($action, $string) {
	$output = false;
	$key = '5faNIYoC17eL9G8ph6gvS7e2p625m9zN';
	$iv = md5(md5($key));
	if( $action == 'encrypt' ) {
		$output = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, $iv);
		$output = base64_encode($output);
	}
	else if( $action == 'decrypt' ){
		$output = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, $iv);
		$output = rtrim($output, "");
	}
	return $output;
}
public function dashboardAction()
    {
        $this->layout('layout/layoutfrontend.phtml');
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');
       //echo $sid;exit;
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
       
           $sfpuser_session = new Container('sfpName');
      $sfpuser_session->sfpName = $id;  
       // echo $sid;
        if($sid != "")
        {
            $result = $this->getpublisherTable()->selectUser1($sid); 
            $dashboard = $this->getuserTemplateTable()->dashboard($result[0]['id']); 
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
        $response = $this->getuserTemplateTable()->templateCheck($sid);
        
        if($response > 0 ){
           $ViewModel= new ViewModel(array('dashboard'=>$dashboard,'result'=>$result,'dynamicPath'=>$dynamicPath,'sfpuser'=>$id));
           return $ViewModel;
		}
		else {
			$this->redirect()->toRoute('application/default',array('controller'=>'frontend','action'=>'index1')); 
		}
        }
        else
        {
            $this->redirect()->toRoute('application/default',array('controller'=>'index','action'=>'index'));    
        }
          
    }
    
    
    //Delete Section
    public function deletecampaignAction()
    {
        $this->layout('layout/layout2.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $res = $this->getuserTemplateTable()->delcampaign($id);
        $this->redirect()->toRoute('application/default',array('controller'=>'Frontend','action'=>'dashboard'));
        
        
    }

    public function deleteAction()
    {
     $id = $this->getEvent()->getRouteMatch()->getParam('id');  
     $imagePath = $this->getImageTable()->selectImage($id,'id');
     $thumbPathHold = explode("/",$imagePath[0]['pathThumb']);
     $thumbPath =  $thumbPathHold[count($thumbPathHold) - 3]."/".$thumbPathHold[count($thumbPathHold) - 2]."/".$thumbPathHold[count($thumbPathHold) - 1];
     
     $oriPathHold = explode("/",$imagePath[0]['path']);
     $oriPath = $oriPathHold[count($oriPathHold) - 3]."/".$oriPathHold[count($oriPathHold) - 2]."/".$oriPathHold[count($oriPathHold) - 1];
     
     $dirpathori = $_SERVER['DOCUMENT_ROOT']."/user_template/".$oriPath;
     $dirpaththumb = $_SERVER['DOCUMENT_ROOT']."/user_template/".$thumbPath;
     unlink($dirpath);
     unlink($dirpaththumb);
    
     $img = $this->getImageTable()->deleteImage($id); 
     echo $img;
     exit;
     
    }
    
    
    //File read from directory
    public function readDirs($path)
    {
        
        //echo $path;exit;
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
                    $testPath = $this->getServiceLocator()->get('Config');
                    $array = array_diff($parts, $testPath['pathName']['path']);
                    $str_arr = implode("/",$array);  
                    $currentUrl = $_SERVER["SERVER_NAME"];
                    $curl = explode($currentUrl);
                    $hold .= "<li><a id='lidet' class='pages' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr</a><a style='cursor:pointer;'>
                    $str_arr</a></li>";
                    
                }
                
                $hold .= $this->readDirs($newPath);
            }
            else{
            
                $parts = explode('.', $newPath);
               
                $extension = array_pop($parts);
                
                
                if( $extension == 'php' || $extension == 'html' || $extension == 'htm'){
                    $abc="";
                    $abc= $path;
                    $parts = Explode('/', $abc);
                   
                   $chknumber = substr($item, 0, 2);
                 
                    $array = array_diff($parts, array('var','www','staging','public'));
                    
                    $str_arr = implode("/",$array); 
                    $currentUrl = $_SERVER["SERVER_NAME"]; 
                    $getfilepath =  $_SERVER['DOCUMENT_ROOT'].$str_arr."/".$item;
                     $str=file_get_contents($getfilepath);
                     if($chknumber !=  '14'){
                      if(strpos($str,'SFPPAGE')) 
                       {
        
                    $hold .= "<li><a id='lidet' class='pages' style='cursor:pointer;'  onclick='requestUrlWithAjax(this.innerHTML)'>http://$currentUrl$str_arr/$item</a><a style='cursor:pointer;'>$item</a></li>";
                    }
                    }
                }
                
            }
        }
        
    
        return $hold;
    }
    
      //templatecopy
    public function templatecopyAction()
    {
        $this->layout('layout/layout2.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        
        $uniqueId     = uniqid().mt_rand(5, 15);
        $newname      = rand(000,999).$uniqueId."-".$id;
        $user_session = new Container('loginId');
        $sid          = $user_session->offsetGet('loginId');
        $source       = $_SERVER['DOCUMENT_ROOT'].'/files/'.$id; // edited by koushik
        $dir          = $_SERVER['DOCUMENT_ROOT'].'/user_template/';
        $target       = $dir.$newname;
        
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
        
        $res = $this->getTemplateTable()->selecttemp($id);
        $temprow = $this->getTemplateTable()->fetchAll($res[0]['template_id']); //fetching row for prtculr tmplate arnab
        
        //edited by arnab
        $appid="";$appsecret="";
        
        if($id == 'roelpro') {
            $appid = '502186369918571';
            $appsecret = '3fbe6e056b8348f713346374c0c08295';
        }
        else if($id == 'epic')  {
            $appid = '1505052056407910';
            $appsecret = '0e28a426dc5f7e532fa6caa490b4d4ca';
        }    
        else {
            $appid = '1505052056407910';
            $appsecret = '0e28a426dc5f7e532fa6caa490b4d4ca';
        }
        
        $templateName               = new Container('template');
        $templateName->templatename = $newname;
        $path = $dynamicPath."/Frontend/edit2/".$newname;
        
        $data = array(
            'user_id' => $sid,
            'template_id'=>$res[0]['template_id'],
            'template_name' => $id,
            'template_link' => $newname,
            'check_fbtag' => $temprow->facebook_connection,
            'appid' => $appid,
            'appsecret' => $appsecret,   
        );
        
        $rws         = $this->getuserTemplateTable()->saveUser($data); 
        
        $this->full_copy($source,$target);
        chmod($target, 0777);
        
        $imgurl      = "//".$_SERVER["SERVER_NAME"]."/user_template/".$newname;
        $pathfolder  = $_SERVER['DOCUMENT_ROOT']."/user_template/".$newname;
        $pathfolder1 = $_SERVER['DOCUMENT_ROOT']."/user_template/".$newname."/*";
        
        foreach (glob($pathfolder1."/*.*") as $searchs) {
            $contents = file_get_contents($searchs);
            $file_contents = str_replace("SFP_DESKTOP","wrapper",$contents);
            
            if (!strpos($contents, "SFP_DESKTOP")) continue;
            $matches[] = $searchs;
            
            file_put_contents($searchs,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchs1) {
            $contents = file_get_contents($searchs1);
            $file_contents = str_replace("col","SFP_BOOT",$contents);
            
            if (!strpos($contents, "col")) continue;
            $matches[] = $searchs1;
            
            file_put_contents($searchs1,$file_contents); 
        }
        
        
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("sfp_fb_like","
        			<script>
        
        			FB.init({
        			appId      : '368934173278766',
        			status     : true,
        			xfbml      : true,
        			version    : 'v2.0'
        });
        			(function(d, s, id) {
        			var js, fjs = d.getElementsByTagName(s)[0];
        			if (d.getElementById(id)) return;
        			js = d.createElement(s); js.id = id;
        			js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=368934173278766&version=v2.0';
        			fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        			<div id='fb-root'></div>
        			<script>(function(d, s, id) {
        			var js, fjs = d.getElementsByTagName(s)[0];
        			if (d.getElementById(id)) return;
        			js = d.createElement(s); js.id = id;
        			js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=368934173278766&version=v2.0';
        			fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        			<div class='fb-like disabled' data-href='https://test.scampaigns.com' data-layout='box_count' data-action='like' data-show-faces='true' data-share='false'></div>",$contents);
        	 
        	if (!strpos($contents, "sfp_fb_like")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
         
        /*     foreach (glob($pathfolder."/*.php") as $searchs1) {
         $contents = file_get_contents($searchs1);
        $file_contents = str_replace("sfp_google_share","
        		<script src='https://apis.google.com/js/platform.js' async defer></script>
        		<div class='g-plusone disabled' data-size='tall' data-href=''></div>",$contents);
         
        if (!strpos($contents, "sfp_google_share")) continue;
        $matches[] = $searchs1;
         
        file_put_contents($searchs1,$file_contents);
         
         
        } */
         
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("pic:<","<input class='sfpfbpic' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "pic:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("name:<","<input class='sfpfbname' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "name:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("caption:<","<input class='sfpfbcaption' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "caption:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("description:<","<input class='sfpfbdescription' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "description:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("link:<","<input class='sfpfblink' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "link:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
        
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("redirect_uri:<","<input class='sfpfbredrct' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "redirect_uri:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("<sfp_fb_Share_end/>"," <!--SFPScript src='http://connect.facebook.net/en_US/all.js'></script><script type='text/javascript'>
        
        			FB.init({appId: '368934173278766', status: true, cookie: true,version:'v2.0'});
        			$('.sfpfbDynamicShare a').click(function(){
        
        			var pic  = $(this).parents('.sfpfbDynamicShare').find('.sfpfbpic').val();
        			var link =  $(this).parents('.sfpfbDynamicShare').find('.sfpfblink').val();
        			var caption =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbcaption').val();
        			var description =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbdescription').val();
        			var name =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbname').val();
        			var sfpfbredrct =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbredrct').val();
        
        			var obj = {
        			method: 'feed',
        			redirect_uri: 'sfpfbredrct',
        			link: link,
        			picture: pic,
        			name: name,
        			caption: caption,
        			description: description
        };
        
        			function callback(response) {
        
        }
        
        			FB.ui(obj, callback);
        });
        			</SFPScript-->",$contents);
        	 
        	if (!strpos($contents, "<sfp_fb_Share_end/>")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("sfp_tweet_share",'<div id="twtbox"></div>',$contents);
        	 
        	if (!strpos($contents, "sfp_tweet_share")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("sfp_tweet_bird","<script> function twt_bird_click(u,t) {
        			var child = window.open('http://twitter.com/share?url=' + encodeURIComponent(u) + '&t=' + encodeURIComponent(t), 'sharer', 'toolbar=0,status=0,width=626,height=436');
        }</script>",$contents);
        	 
        	if (!strpos($contents, "sfp_tweet_bird")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("sfpfbDynamicGoogleUrl","<script> function googleShare(url){
        
        			var w=480;var h=380;
        			var x=Number((window.screen.width-w)/2);
        			var y=Number((window.screen.height-h)/2);
        			window.open('https://plus.google.com/share?url='+encodeURIComponent(url)+'
        			&title='+encodeURIComponent(document.title),'','width='+w+',height='+h+',left='+x+',top='+y    +',
        			scrollbars=no');
        }</script>",$contents);
        	 
        	if (!strpos($contents, "sfpfbDynamicGoogleUrl")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("pinterestimage:<","<input class='sfppinterestImage' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "pinterestimage:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("pinterestdesc:<","<input class='sfppinterestdesImage' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "pinterestdesc:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
        
        
         
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("</sfpDynamicPinterest>","<script>  function pinitDyn() {
        			 
        			var urlImage = $('.sfppinterestImage').val();
        			var articleurlImage = encodeURIComponent(urlImage);
        			var desImage = $('.sfppinterestdesImage').val();
        			var articledesImage = encodeURIComponent(desImage);
        			var gotoLinkMe = 'https://pinterest.com/pin/create/button/?url='+
        			'&media='+articleurlImage+'&description='+articleurlImage;
        
        			window.open(gotoLinkMe,'1425475479797','width=660,height=600,scrollbars=yes;resizable=no');
        }
        			</script>",$contents);
        	 
        	if (!strpos($contents, "sfpDynamicPinterest")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("<sfpDynamicPinterest>"," ",$contents);
        	 
        	if (!strpos($contents, "<sfpDynamicPinterest>")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("mailid:<","<input class='sfpdynmail' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "mailid:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("<sfpDynamicMail>"," ",$contents);
        	 
        	if (!strpos($contents, "<sfpDynamicMail>")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("</sfpDynamicMail>","<script>
        			function SFPsendmail(){
        			var sfpmail = $('.sfpdynmail').val();
        			var gotoLinkMe ='mailto:'+sfpmail+';
        			window.location.href = gotoLinkMe;
        }
        			</script>",$contents);
        	 
        	if (!strpos($contents, "sfpDynamicMail")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("<sfp_fb_Share_Start>"," ",$contents);
        	 
        	if (!strpos($contents, "<sfp_fb_Share_Start>")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
        
        
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("url:<","<input class='SfpLinkedInUrl' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "url:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("title:<","<input class='SfpLinkedInTitle' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "title:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
         
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("summary:<","<input class='SfpLinkedInSummary' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "summary:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("source:<","<input class='SfpLinkedInSource' type='hidden' value=",$contents);
        	 
        	if (!strpos($contents, "source:<")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
        
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("sfp_linkedin_Share_Simple","<script>
        			function linkedinDynSimple(url) {
        			 
        			var urlSimple = $('.linkedUrlSimple').val();
        			var articleUrlSimple = encodeURIComponent(urlSimple);
        			var gotoLinkMe = 'http://www.linkedin.com/shareArticle?mini=true' +
        			'&url=' + articleUrlSimple +
        			'&title=
        			&summary=
        			&source=;
        			window.open(gotoLinkMe,'LinkedIn', 'width=660,height=600,scrollbars=yes;resizable=no');
        }</script>",$contents);
        	 
        	if (!strpos($contents, "sfp_linkedin_Share_Simple")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("</sfp_linkedin_Share_End>","<script>
        			function linkedinDyn() {
        
        			var url = $('.SfpLinkedInUrl').val();
        			var title = $('.SfpLinkedInTitle').val();
        			var summary = $('.SfpLinkedInSummary').val();
        			var source = $('.SfpLinkedInSource').val();
        			var articleUrl = encodeURIComponent(url);
        			var articleTitle = encodeURIComponent(title);
        			var articleSummary = encodeURIComponent(summary);
        			var articleSource = encodeURIComponent(source);
        			var gotoLinkMe = 'http://www.linkedin.com/shareArticle?mini=true' +
        			'&url=' + articleUrl +
        			'&title=' + articleTitle +
        			'&summary=' + articleSummary +
        			'&source=' + articleSource;
        			window.open(gotoLinkMe,'LinkedIn', 'width=660,height=600,scrollbars=yes;resizable=no');
        }</script>",$contents);
        	 
        	if (!strpos($contents, "sfp_linkedin_Share_End")) continue;
        	$matches[] = $searchs1;
        	 
        	file_put_contents($searchs1,$file_contents);
        	 
        	 
        }
         
        
        foreach (glob($pathfolder."/*.html") as $searchs1) {
        	$contents = file_get_contents($searchs1);
        	$file_contents = str_replace("<sfp_linkedin_Share_Start>  "," ",$contents);
        	 
        	if (!strpos($contents, "<sfp_linkedin_Share_Start>")) continue;
        	$matches[] = $searchs1;
        
        	file_put_contents($searchs1,$file_contents);
        
        
        }
     
        foreach (glob($pathfolder."/*.html") as $searchs1) {
            $contents = file_get_contents($searchs1);
            $file_contents = str_replace("col","SFP_BOOT",$contents);
            
            if (!strpos($contents, "col")) continue;
            $matches[] = $searchs1;
            
            file_put_contents($searchs1,$file_contents); 
        }
        
        foreach (glob($pathfolder."/*.php") as $searchs11) {
            $contents = file_get_contents($searchs11);
            $file_contents = str_replace("row","SFP_ROW",$contents);
            
            if (!strpos($contents, "row")) continue;
            $matches[] = $searchs11;
            
            file_put_contents($searchs11,$file_contents); 
        }
        
        foreach (glob($pathfolder."/*.html") as $searchs112) {
            $contents = file_get_contents($searchs112);
            $file_contents = str_replace("row","SFP_ROW",$contents);
            
            if (!strpos($contents, "row")) continue;
            $matches[] = $searchs112;
            
            file_put_contents($searchs112,$file_contents); 
        }
        
        foreach (glob($pathfolder1."/*.*") as $searchmobile) {
            $contents = file_get_contents($searchmobile);
            $file_contents = str_replace("SFP_MOBILE","wrapper_mobile",$contents);
            
            if (!strpos($contents, "SFP_MOBILE")) continue;
            $matches[] = $searchmobile;
            
            file_put_contents($searchmobile,$file_contents); 
        } 
        
        
        foreach (glob($pathfolder1."/*.*") as $searchtab) {
            $contents = file_get_contents($searchtab);
            $file_contents = str_replace("SFP_TAB","wrapper_tab",$contents);
            
            if (!strpos($contents, "SFP_TAB")) continue;
            $matches[] = $searchtab;
            
            file_put_contents($searchtab,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $search) {
            $contents = file_get_contents($search);
            $file_contents = str_replace("SFPURLLINK",$imgurl,$contents);
            if (!strpos($contents, "SFPURLLINK")) continue;
            $matches[] = $search;
            
            file_put_contents($search,$file_contents); 
        } 
        
        
        /////////////////////////////SFPOWNFORM///////////////////////////
        $form =  '<input type="hidden" class="sfpLicnt" value="0"/> 
        
        <ul class="designelements clearfix" style="position:absolute;left:0; z-index:9999;">
        <li id="lilabelme" style="display:none;">
        <a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="label" id="label">
        <span>Title</span>
        <img src="/formbuild/title_icon.png" alt="" />
        </a>
        </li>
        
        </ul>
        <form id="sortable" action="" class="SFPTWO_EDITFORM" style="margin-top:25px;" method="post">
        
        <img src="/img/divider.png" id="imgdrag" style="display: none;" />
        <img src="/img/divider.png" id="imgdragable" style="display: none;" />
        
        
        
        <ul class="sortable-list">
        
        
        <li id="trigme" style="display:none">
        <div>dd</div> 
        </li>
        <li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="labeledit" class="labeledit emaildrag"><p style="font-size: 19px;" id="pid_" class="opt explicit_edit SFPTWO_TAGEDIT" ><font>Email address</font></p></div><input name="email" type="email" />
        <div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input type="hidden" id="hid" name="email_hid" /><input type="hidden" value="0" id="imgCount" /></div>
        </li>
        
        
        <li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="diveditme" class="labeledit addmechk checkboxdrag"><p style="font-size: 19px;" id="pid_form" class="opt explicit_edit SFPTWO_TAGEDIT"><font>What kind of campaign are you Looking for? </font></p2>
        </div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_form657"><div id="chkclone" name="checkBox"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-rowform657"><span class="checkboxWrapper"><input type="checkbox" value="option1" name="checkBox[]" > </span> <p class="opt explicit_edit SFPTWO_TAGEDIT"  contenteditable="true" id="1"><font>option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="option2" name="checkBox[]" ></span> <p class="opt explicit_edit SFPTWO_TAGEDIT" contenteditable="true" id="2"><font>option2</font></p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="option3" name="checkBox[]" ></span><p class="opt explicit_edit SFPTWO_TAGEDIT" contenteditable="true" id="3"><font>option3</font></p></div></div><p id="mepp" class="pchkadd"></p><div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div></div> <div id="ullidrag" class="ullidrag" style="display:none;cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div></li>
        
        
        <li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="diveditme" class="labeledit"><p style="font-size: 19px;" id="pid_formmsg" class="opt explicit_edit SFPTWO_TAGEDIT"><font>Your message</font></p><div><textarea id="editmetext" name="textarea_edit1" class="textareaforform SFPTEXTAREA"></textarea></div></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div></li>
        <li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="getbtnme" class="submitdrag"><input class="inputdisabled SFPsubmit" type="submit" name="submit" value="Send"></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div></li>
        
        </ul>
        
        </form>';
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
        
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("[SFPFORM]->",$form,$contents);
            if (!strpos($contents,"[SFPFORM]->")) continue;
            $matches[] = $searchinput;
            //print_r($matches);
            //str_replace("SFP_Redirect/","publish/",$contents);
            
            file_put_contents($searchinput,$file_contents); 
        }
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            
            $file_contents = str_replace('<ACTION->','<input type="hidden" id="sfpoptForm" value=',$contents);
            
            if (!strpos($contents,"<ACTION->")) continue;
            $matches[] = $searchinput;
            //print_r($matches);
            //str_replace("SFP_Redirect/","publish/",$contents);
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        /////////////////////////////SFPOWNFORM///////////////////////////
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[label(class)]->","<input type='hidden' id='SFPLEBELFORM' value=",$contents);
            if (!strpos($contents,"<[label(class)]->")) continue;
            $matches[] = $searchinput;
            //print_r($matches);
            //str_replace("SFP_Redirect/","publish/",$contents);
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[textbox(class)]->","<input type='hidden' id='SFPTEXTFORM' value=",$contents);
            if (!strpos($contents,"<[textbox(class)]->")) continue;
            $matches[] = $searchinput;
            //print_r($matches);
            //str_replace("SFP_Redirect/","publish/",$contents);
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[textarea(class)]->","<input type='hidden' id='SFPTEXTAREAFORM' value=",$contents);
            if (!strpos($contents,"<[textarea(class)]->")) continue;
            $matches[] = $searchinput;
            //print_r($matches);
            //str_replace("SFP_Redirect/","publish/",$contents);
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[submit(class)]->","<input type='hidden' id='SFPSUBMITFORM' value=",$contents);
            
            if (!strpos($contents,"<[submit(class)]->")) continue;
            $matches[] = $searchinput;
            //print_r($matches);
            //str_replace("SFP_Redirect/","publish/",$contents);
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            
            $file_contents = str_replace("<[checkbox(class)]->","<input type='hidden' id='SFPCHECKBOXFORM' value=",$contents);
            
            if (!strpos($contents,"<[checkbox(class)]->")) continue;
            $matches[] = $searchinput;
            //print_r($matches);
            //str_replace("SFP_Redirect/","publish/",$contents);
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[email(class)]->","<input type='hidden' id='SFPEMAILFORM' value=",$contents);
            if (!strpos($contents,"<[email(class)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            
            $file_contents = str_replace("<[radiobutton(class)]->","<input type='hidden' id='SFPRADIOFORM' value=",$contents);
            
            if (!strpos($contents,"<[radiobutton(class)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[paragraph(class)]->","<input type='hidden' id='SFPPARAGRAPHFORM' value=",$contents);
            if (!strpos($contents,"<[paragraph(class)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        }
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[singleline(class)]->","<input type='hidden' id='SFPSINGLELINEFORM' value=",$contents);
            if (!strpos($contents,"<[singleline(class)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        }
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[multiline(class)]->","<input type='hidden' id='SFPMULTILINEFORM' value=",$contents);
            if (!strpos($contents,"<[multiline(class)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        }
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[textarea(class)]->","<input type='hidden' id='SFPTEXTAREAFORM' value=",$contents);
            if (!strpos($contents,"<[textarea(class)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        }
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[dropdown(class)]->","<input type='hidden' id='SFPDROPDOWNFORM' value=",$contents);
            if (!strpos($contents,"<[dropdown(class)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        }
        ////////////////////////////////////
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[form]>",'<span style="position:relative;"><ul class="designelements clearfix" style="position:absolute;left:0; z-index:9999;"><li id="lilabelme" style="display:none;"><a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="label" id="label"><span>Title</span><img src="/formbuild/title_icon.png" alt="" /></a></li></ul><form id="sortable" action="{tag1}" class="SFPTWO_EDITFORM extendform" style="margin-top:25px; clear:both;" method="post"><img src="/img/divider.png" id="imgdrag" style="display: none;" /><img src="/img/divider.png" id="imgdragable" style="display: none;" /><ul class="sortable-list"><li id="trigme" style="display:none"><div>dd</div></li> ',$contents);
            if (!strpos($contents,"<[form]>")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace('<[INPUTFIELD(label)->',"<input type='hidden' id='SFPEXTENDINPUTFIELD' class='SFPEXTENDINPUTFIELD external-form' value=",$contents);
            if (!strpos($contents,"<[INPUTFIELD(label)->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace('<[INPUTFIELD(label)->',"<input type='hidden' id='SFPEXTENDTEXTAREAFIELD' class='SFPEXTENDINPUTFIELD external-form' value=",$contents);
            if (!strpos($contents,"<[SFPEXTENDTEXTAREAFIELD(label)->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace('<(action)->',"<input type='hidden' id='SFPEXTENDACTION' class='SFPEXTENDACTION external-form' value=",$contents);
            if (!strpos($contents,"<(action)->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[EMAIL(label)]->","<input type='hidden' id='SFPEXTENDEMAIL' class='SFPEXTENDEMAIL external-form' value=",$contents);
            if (!strpos($contents,"<[EMAIL(label)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[SUBMITBUTTON(value)]->","<input type='hidden' id='SFPEXTENDSUBMITBUTTON' class='external-form' value=",$contents);
            
            if (!strpos($contents,"<[SUBMITBUTTON(value)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[PARAGRAPH(label,text)]->","<input type='hidden' id='SFPEXTENDPARAGRAPH' class='external-form' value=",$contents);
            
            if (!strpos($contents,"<[PARAGRAPH(label,text)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            
            $file_contents = str_replace("<[MULTILINE(label,text)]->","<input type='hidden' id='SFEXTENDMULTILINE' class='external-form' value=",$contents);
            
            if (!strpos($contents,"<[MULTILINE(label,text)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        }
         
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            
            $file_contents = str_replace("<[SINGLETEXTLINE(label)]->","<input type='hidden' id='SFEXTENDSINGLELINE' class='external-form' value=",$contents);
            
            if (!strpos($contents,"<[SINGLETEXTLINE(label)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[CHECKBOX(label,option)]->","<input type='hidden' id='SFPEXTENDCHECKBOX' class='external-form' value=",$contents);
            if (!strpos($contents,"<[CHECKBOX(label,option)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            
            $file_contents = str_replace("<[RADIOBUTTON(label,'option')]->","<input type='hidden' class='external-form' id='SFPEXTENDRADIOBUTTON' value=",$contents);
            
            if (!strpos($contents,"<[RADIOBUTTON(label,'option')]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        } 
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[DROPDOWN(label,'option')]->","<input type='hidden' id='SFPEXTENDROPDOWN' class='external-form' value=",$contents);
            if (!strpos($contents,"<[DROPDOWN(label,'option')]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        }
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
        $contents = file_get_contents($searchinput);
        $file_contents = str_replace("<[DATEPICKER(label)]->","<input type='hidden' id='SFPEXTENDATEPICKER' class='external-form' value=",$contents);
        if (!strpos($contents,"<[DATEPICKER(label)]->")) continue;
        $matches[] = $searchinput;
        //print_r($matches);
        //str_replace("SFP_Redirect/","publish/",$contents);
        
        file_put_contents($searchinput,$file_contents); 
        
        
        }
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[TIMEPICKER(label)]->","<input type='hidden' class='external-form' id='SFPEXTENTIMEPICKER' value=",$contents);
            if (!strpos($contents,"<[TIMEPICKER(label)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        }
        
        foreach (glob($pathfolder."/*.php") as $searchinput) {
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("<[TEXTAREA(label)]->","<input type='hidden' id='SFPEXTENDTEXTAREA' class='external-form' value=",$contents);
            if (!strpos($contents,"<[TEXTAREA(label)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
        }
        
        foreach (glob($pathfolder."/*.php") as $searchinput) { 
            $contents = file_get_contents($searchinput);
            $file_contents = str_replace("</[form]>",'</ul></form></span>',$contents);
            if (!strpos($contents,"<[dropdown(class)]->")) continue;
            $matches[] = $searchinput;
            
            file_put_contents($searchinput,$file_contents); 
            
        }
        
        $this->redirect()->toRoute('application/default',array('controller'=>'Frontend','action'=>'edit2','id'=>$newname,'pId'=>$id));
        
    }
    
      //template copy
        public function templateduplicateAction()
    {
         $this->layout('layout/layout2.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        
        $id = explode("_",$id,2);
        
        $uniqueId = uniqid().mt_rand(5, 15);
        $newname = "duplacate".$uniqueId."-".$id[1];
       
        $source = $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$id[1]; // edited by koushik
        $dir = $_SERVER['DOCUMENT_ROOT'].'/user_template/';
        $target=$dir.$newname;
       // print_r($target);
     
        $res = $this->getuserTemplateTable()->selectUserdet($id[0]);
        // print_r($id[0])."-"; 
      
         $data = array(
          'user_id' => $res->user_id,
           'template_id'=>$res->template_id,
           'template_name' => $res->template_name,
           'template_link' => $newname,
            'new_template_name'=>$res->new_template_name,
                
		);
       
         $this->getuserTemplateTable()->saveUserdet($data); 
       // $this->full_copy($source,$target);

        shell_exec("cp -r $source $target");
        chmod($target,0777);
        
        $this->redirect()->toRoute('application/default',array('controller'=>'Frontend','action'=>'createduplicate'));
        
    }
    
      //unpublish functionility
        public function unpublishAction() 
    {
         $this->layout('layout/layout2.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $id = explode("_",$id);
        $uniqueId = uniqid().mt_rand(5, 15);
        $newname = rand(000,999).$uniqueId."-".$id[1];
        $source = $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$id[1]; // edited by koushik
        $dir = $_SERVER['DOCUMENT_ROOT'].'/user_template/';
        $target=$dir.$newname;
        
        $res = $this->getuserTemplateTable()->selectUserdet($id[0]);
         $data = array(
           'user_id'=>$res->user_id,
           'template_id'=>$res->template_id,
           'template_name' => $res->template_name,
           'template_link' =>  $res->template_link,
            'new_template_name'=>$res->new_template_name,
                
		);
      // print_r($data);exit;
         $this->getuserTemplateTable()->saveUserdet($data); 
         $this->getuserTemplateTable()->deletecampaign($id[0]);
        $this->redirect()->toRoute('application/default',array('controller'=>'Frontend','action'=>'createduplicate'));
        
    }
    
    
     //need to ask koushik
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
        $this->redirect()->toRoute('application/default',array('controller'=>'Frontend','action'=>'edit2','id'=>$newname));
        
    }
    
     //template edit
    public function editAction()
    {
        
        $this->layout('layout/layout2.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $retEditor = $this->readDirs( $_SERVER['DOCUMENT_ROOT']."/user_template/$id" );        
        return new ViewModel(array('id' => $id,'editor'=>$retEditor)); 
    
    
    }
    //template edit 
    public function edit1Action()
    {
        
        $this->layout('layout/layout3.phtml');
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');
        if($sid != "")
        {
        $result = $this->getpublisherTable()->selectUser($sid);
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $retEditor = $this->readDirs( $_SERVER['DOCUMENT_ROOT']."/user_template/$id" );        
        $imageLibrary = $this->getImageTable()->selectImage(1,'userid'); 
        
        return new ViewModel(array('id' => $id,'editor'=>$retEditor,'libraryImage'=>$imageLibrary,'result'=>$result));
        }
        else
        {
         $this->redirect()->toRoute('application/default',array('controller'=>'index','action'=>'index'));   
        } 
        
    
    }
  
    
     //template edit
    public function edit2Action()
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
        
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');
        $user_session = new Container('devId');
        $did = $user_session->offsetGet('devId');
        //echo $sid;exit;
        if($sid != "")
        {
            $result = $this->getpublisherTable()->selectUser1($sid);
            $id = $this->getEvent()->getRouteMatch()->getParam('id');
            
            $temp_session = new Container('tName');
            $temp_session->tName = $id; 
            
            $templates = $this->getEvent()->getRouteMatch()->getParam('pId');
            
            $retEditor = $this->readDirs( $_SERVER['DOCUMENT_ROOT']."/user_template/$id" ); 
            $fbconn = $this->getTemplateTable()->selectRow($templates,$did); 
            $user_fb =$_POST['userid_fb'];    
            
            $rowsets = $this->getuserTemplateTable()->selectUser($result[0]['id'],$id); 
            $imageLibrary = $this->getImageTable()->selectImage($rowsets->user_id,'userid');
            
            $userId = new Container('uid');
            $userId->uid = $rowsets->id;
            $uid = $userId->offsetGet('uid');
            
            $templatelink = $id;
            $rowsetss = $this->getuserTemplateTable()->selectTemplatenew($uid,$templatelink);//added by anima
            $publish = $rowsetss[0]['published'];
            $templateid = $rowsetss->template_id;
            $template_detail = $this->getTemplateTable()->selectTemplatenew($templateid);//added by anima for template table 
            
            $this->layout('layout/layout4.phtml');  
            
            $folder = $_SERVER['DOCUMENT_ROOT'].'/pattern/';
            $filetype = '*.*';
            
            $files = glob($folder.$filetype);
            $count = count($files);
             
            $sortedArray = array();
            for ($i = 0; $i < $count; $i++) {
                $sortedArray[date ('YmdHis', filemtime($files[$i]))] = $files[$i];
            }
             
            ksort($sortedArray);
           
            if($rowsets != NULL || $rowsets != '' ){
            return new ViewModel(array('id' => $id,'editor'=>$retEditor,'libraryImage'=>$imageLibrary,'result'=>$result,'fbcon'=>$fbconn[0]['fbconnect'],'view' => $fbconn[0]['view'],'rowset'=>$rowsets,'publish'=>$publish,'sortedArray'=>$sortedArray,'dynamicPath'=>$dynamicPath));
        	}
        	else
        	{
        		$this->redirect()->toRoute('application/default',array('controller'=>'Error','action'=>'index'));
        	}
        }
        
        else
        {
            $this->redirect()->toRoute('application/default',array('controller'=>'index','action'=>'index'));   
        }  
      
    }
    //template edit 
    public function edittestAction()
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
        
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');
        $user_session = new Container('devId');
        $did = $user_session->offsetGet('devId');
        //echo $sid;exit;
        if($sid != "")
        {
            $result = $this->getpublisherTable()->selectUser1($sid);
            $id = $this->getEvent()->getRouteMatch()->getParam('id');
            
            $temp_session = new Container('tName');
            $temp_session->tName = $id; 
            
            $templates = $this->getEvent()->getRouteMatch()->getParam('pId');
            
            $retEditor = $this->readDirs( $_SERVER['DOCUMENT_ROOT']."/user_template/$id" ); 
            $fbconn = $this->getTemplateTable()->selectRow($templates,$did); 
            $user_fb =$_POST['userid_fb'];    
            
            $rowsets = $this->getuserTemplateTable()->selectUser($result[0]['id'],$id); 
            $imageLibrary = $this->getImageTable()->selectImage($rowsets->user_id,'userid');
            
            $userId = new Container('uid');
            $userId->uid = $rowsets->id;
            $uid = $userId->offsetGet('uid');
            
            $templatelink = $id;
            $rowsetss = $this->getuserTemplateTable()->selectTemplatenew($uid,$templatelink);//added by anima
            $publish = $rowsetss[0]['published'];
            $templateid = $rowsetss->template_id;
            $template_detail = $this->getTemplateTable()->selectTemplatenew($templateid);//added by anima for template table 
            
            $this->layout('layout/layout4.phtml');  
            
            $folder = $_SERVER['DOCUMENT_ROOT'].'/pattern/';
            $filetype = '*.*';
            
            $files = glob($folder.$filetype);
            $count = count($files);
             
            $sortedArray = array();
            for ($i = 0; $i < $count; $i++) {
                $sortedArray[date ('YmdHis', filemtime($files[$i]))] = $files[$i];
            }
             
            ksort($sortedArray);
           
           
            return new ViewModel(array('id' => $id,'editor'=>$retEditor,'libraryImage'=>$imageLibrary,'result'=>$result,'fbcon'=>$fbconn[0]['fbconnect'],'view' => $fbconn[0]['view'],'rowset'=>$rowsets,'publish'=>$publish,'sortedArray'=>$sortedArray,'dynamicPath'=>$dynamicPath));
        }
        else
        {
            $this->redirect()->toRoute('application/default',array('controller'=>'index','action'=>'index'));   
        }  
    }
     //template edit
        public function edittest2Action()
    {
      $this->layout('layout/layout6.phtml');
      $user_session = new Container('loginId');
      $sid = $user_session->offsetGet('loginId');
        
        $user_session = new Container('devId');
        $did = $user_session->offsetGet('devId');
        
        if($sid != "")
        {
         $result = $this->getpublisherTable()->selectUser($sid);
      $id = $this->getEvent()->getRouteMatch()->getParam('id');
      
      $temp_session = new Container('tName');
      $temp_session->tName = $id; 
        
      
      $templates = $this->getEvent()->getRouteMatch()->getParam('pId');
      
      $retEditor = $this->readDirs( $_SERVER['DOCUMENT_ROOT']."/user_template/$id" ); 
     $fbconn = $this->getTemplateTable()->selectRow($templates,$did); 
         
      $imageLibrary = $this->getImageTable()->selectImage(1,'userid');
      
      $rowsets = $this->getuserTemplateTable()->selectUser($sid,$id); 
      
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid');
        $templatelink = $id;
        $rowsetss = $this->getuserTemplateTable()->selectTemplatenew($uid,$templatelink);//added by anima
        $publish = $rowsetss->published;
        //print_r($rowsetss);exit;
        $templateid = $rowsetss->template_id;
        //echo $templateid;exit;
        $template_detail = $this->getTemplateTable()->selectTemplatenew($templateid);//added by anima for template table 
    
       return new ViewModel(array('id' => $id,'editor'=>$retEditor,'libraryImage'=>$imageLibrary,'result'=>$result,'fbcon'=>$fbconn[0]['fbconnect'],'view' => $fbconn[0]['view'],'rowset'=>$rowsets,'publish'=>$publish ));
        }
        else
        {
         $this->redirect()->toRoute('application/default',array('controller'=>'index','action'=>'index'));   
        }  
      
    }
    public function createduplicateAction(){
    $this->redirect()->toRoute('application/default',array('controller'=>'frontend','action'=>'dashboard'));   
    }
    
     //template copy for editnew page
    public function addcontentAction()               /********** added by Poulami ***********/
    {
    	
    	
        $this->layout('layout/layout2.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
         
       
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
        
        
        $uniqueId = uniqid().mt_rand(5, 15);
        $newname = rand(000,999).$uniqueId."-".$id;
        
        $source = $_SERVER['DOCUMENT_ROOT'].'/files/'.$id; // edited by koushik
        $dir = $_SERVER['DOCUMENT_ROOT'].'/user_template/';
        $target=$dir.$newname;
          
        $res = $this->getTemplateTable()->selecttemp($id);
        
        $temprow = $this->getTemplateTable()->fetchAll($res[0]['template_id']);
        //print_r($temprow);exit;
         //edited by arnab
        //added by arnab  START
        $appid="";$appsecret="";
        
        if($id == 'roelpro') {
            $appid = '502186369918571';
            $appsecret = '3fbe6e056b8348f713346374c0c08295';
        }
        else if($id == 'epic')  {
   
            $appid = '1505052056407910';
            $appsecret = '0e28a426dc5f7e532fa6caa490b4d4ca';
        }    
        else {
    
         $appid = '1505052056407910';
         $appsecret = '0e28a426dc5f7e532fa6caa490b4d4ca';
         
        }
        //  END  by arnab
        $templateName = new Container('template');
        $templateName->templatename = $newname;
        $path = $dynamicPath."/Frontend/editnew/".$newname;
        $rand = rand(0000,9999);
        $data = array(
           'template_id'=>$res[0]['template_id'],
           'template_name' => $id,
           'template_link' => $newname,
           'check_fbtag' => $temprow->facebook_connection,   //added by arnab
           'appid' => $appid,
           'appsecret' => $appsecret,                      //ENDED here by arnab
                                         
		);
       $rws = $this->getuserTemplateTable()->saveUser($data); 
        
        $this->full_copy($source,$target);
        chmod($target, 0777);
        
        $imgurl = "//".$_SERVER["SERVER_NAME"]."/user_template/".$newname;
      
       
       
      $pathfolder = $_SERVER['DOCUMENT_ROOT']."/user_template/".$newname;
       $pathfolder1 = $_SERVER['DOCUMENT_ROOT']."/user_template/".$newname."/*";
       foreach (glob($pathfolder1."/*.*") as $searchs) {
         $contents = file_get_contents($searchs);
      $file_contents = str_replace("SFP_DESKTOP","wrapper",$contents);
     
       if (!strpos($contents, "SFP_DESKTOP")) continue;
       $matches[] = $searchs;
      
      file_put_contents($searchs,$file_contents); 
    
 
       } 
      
       
        /* foreach (glob($pathfolder."/*.php") as $searchs1) {
         
         $contents = file_get_contents($searchs1);
      $file_contents = str_replace("col","SFP_BOOT",$contents);
     
       if (!strpos($contents, "col")) continue;
       $matches[] = $searchs1;
      
      file_put_contents($searchs1,$file_contents); 
         	
 
       }
       
       */
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("sfp_fb_like","
       			<script>
       
       			FB.init({
       			appId      : '368934173278766',
       			status     : true,
       			xfbml      : true,
       			version    : 'v2.0'
       });
       			(function(d, s, id) {
       			var js, fjs = d.getElementsByTagName(s)[0];
       			if (d.getElementById(id)) return;
       			js = d.createElement(s); js.id = id;
       			js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=368934173278766&version=v2.0';
       			fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));</script>
       			<div id='fb-root'></div>
       			<script>(function(d, s, id) {
       			var js, fjs = d.getElementsByTagName(s)[0];
       			if (d.getElementById(id)) return;
       			js = d.createElement(s); js.id = id;
       			js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=368934173278766&version=v2.0';
       			fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));</script>
       			<div class='fb-like disabled' data-href='test.scampaigns.com' data-layout='box_count' data-action='like' data-show-faces='true' data-share='false'></div>",$contents);
       	 
       	if (!strpos($contents, "sfp_fb_like")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("sfp_fb_like","
       <script>

FB.init({
    appId      : '368934173278766',
    status     : true,
    xfbml      : true,
    version    : 'v2.0'
  });
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=368934173278766&version=v2.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>			
 <div id='fb-root'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=368934173278766&version=v2.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class='fb-like disabled' data-href='test.scampaigns.com' data-layout='box_count' data-action='like' data-show-faces='true' data-share='false'></div>",$contents);
       
       	if (!strpos($contents, "sfp_fb_like")) continue;
       	$matches[] = $searchs1;
       
       	file_put_contents($searchs1,$file_contents);
       
       
       }
       
       
  /*     foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("sfp_google_share","
<script src='https://apis.google.com/js/platform.js' async defer></script>
<div class='g-plusone disabled' data-size='tall' data-href=''></div>",$contents);
       	 
       	if (!strpos($contents, "sfp_google_share")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       } */
       
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("pic:<","<input class='sfpfbpic' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "pic:<")) continue;
       	$matches[] = $searchs1;
       
       	file_put_contents($searchs1,$file_contents);
       
       
       }
       
    foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("name:<","<input class='sfpfbname' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "name:<")) continue;
       	$matches[] = $searchs1;
       
       	file_put_contents($searchs1,$file_contents);
       
       
       }
       
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("caption:<","<input class='sfpfbcaption' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "caption:<")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("description:<","<input class='sfpfbdescription' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "description:<")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("link:<","<input class='sfpfblink' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "link:<")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
        
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("redirect_uri:<","<input class='sfpfbredrct' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "redirect_uri:<")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("<sfp_fb_Share_end/>"," <!--SFPScript src='http://connect.facebook.net/en_US/all.js'></script><script type='text/javascript'>

  FB.init({appId: '368934173278766', status: true, cookie: true,version:'v2.0'});
 	$('.sfpfbDynamicShare a').click(function(){
        
        			var pic  = $(this).parents('.sfpfbDynamicShare').find('.sfpfbpic').val();
        			var link =  $(this).parents('.sfpfbDynamicShare').find('.sfpfblink').val();
        			var caption =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbcaption').val();
        			var description =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbdescription').val();
        			var name =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbname').val();
        			var sfpfbredrct =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbredrct').val();
        
      var obj = {
          method: 'feed',
          redirect_uri: 'sfpfbredrct',
          link: link,
          picture: pic,
          name: name,
          caption: caption,
          description: description
        };
 
        function callback(response) {
          
        }
 
        FB.ui(obj, callback);
 });
</SFPScript-->",$contents);
       	 
       	if (!strpos($contents, "<sfp_fb_Share_end/>")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("sfp_tweet_share",'<div id="twtbox"></div>',$contents);
       
       	if (!strpos($contents, "sfp_tweet_share")) continue;
       	$matches[] = $searchs1;
       
       	file_put_contents($searchs1,$file_contents);
       
       
       }
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("sfp_tweet_bird","<script> function twt_bird_click(u,t) {
        var child = window.open('http://twitter.com/share?url=' + encodeURIComponent(u) + '&t=' + encodeURIComponent(t), 'sharer', 'toolbar=0,status=0,width=626,height=436');
    }</script>",$contents);
       	 
       	if (!strpos($contents, "sfp_tweet_bird")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("sfpfbDynamicGoogleUrl","<script> function googleShare(url){
        
    	var w=480;var h=380;
    	var x=Number((window.screen.width-w)/2);
    	var y=Number((window.screen.height-h)/2);
    	window.open('https://plus.google.com/share?url='+encodeURIComponent(url)+'
    	  &title='+encodeURIComponent(document.title),'','width='+w+',height='+h+',left='+x+',top='+y    +',
    	  scrollbars=no');
    	}</script>",$contents);
       	 
       	if (!strpos($contents, "sfpfbDynamicGoogleUrl")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("pinterestimage:<","<input class='sfppinterestImage' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "pinterestimage:<")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("pinterestdesc:<","<input class='sfppinterestdesImage' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "pinterestdesc:<")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
        
        
       
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("</sfpDynamicPinterest>","<script>  function pinitDyn() {
     
    	var urlImage = $('.sfppinterestImage').val();
       	var articleurlImage = encodeURIComponent(urlImage);
        var desImage = $('.sfppinterestdesImage').val();
       	var articledesImage = encodeURIComponent(desImage);
        var gotoLinkMe = 'https://pinterest.com/pin/create/button/?url='+
            '&media='+articleurlImage+'&description='+articleurlImage;
            
        window.open(gotoLinkMe,'1425475479797','width=660,height=600,scrollbars=yes;resizable=no');
    }
 </script>",$contents);
       	 
       	if (!strpos($contents, "sfpDynamicPinterest")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("<sfpDynamicPinterest>"," ",$contents);
       	 
       	if (!strpos($contents, "<sfpDynamicPinterest>")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("mailid:<","<input class='sfpdynmail' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "mailid:<")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("<sfpDynamicMail>"," ",$contents);
       	 
       	if (!strpos($contents, "<sfpDynamicMail>")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("</sfpDynamicMail>","<script> 
        function SFPsendmail(){		
         var sfpmail = $('.sfpdynmail').val();   
         var gotoLinkMe ='mailto:'+sfpmail+';
         window.location.href = gotoLinkMe;
          }
       </script>",$contents);
       	 
       	if (!strpos($contents, "sfpDynamicMail")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("<sfp_fb_Share_Start>"," ",$contents);
       	 
       	if (!strpos($contents, "<sfp_fb_Share_Start>")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
        
        
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("url:<","<input class='SfpLinkedInUrl' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "url:<")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("title:<","<input class='SfpLinkedInTitle' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "title:<")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("summary:<","<input class='SfpLinkedInSummary' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "summary:<")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("source:<","<input class='SfpLinkedInSource' type='hidden' value=",$contents);
       	 
       	if (!strpos($contents, "source:<")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
        
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("sfp_linkedin_Share_Simple","<script>
       			function linkedinDynSimple(url) {
       
       			var urlSimple = $('.linkedUrlSimple').val();
       			var articleUrlSimple = encodeURIComponent(urlSimple);
       			var gotoLinkMe = 'http://www.linkedin.com/shareArticle?mini=true' +
       			'&url=' + articleUrlSimple +
       			'&title=
       			&summary=
       			&source=;
       			window.open(gotoLinkMe,'LinkedIn', 'width=660,height=600,scrollbars=yes;resizable=no');
       }</script>",$contents);
       	 
       	if (!strpos($contents, "sfp_linkedin_Share_Simple")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       }
       
       foreach (glob($pathfolder."/*.php") as $searchs1) {
       	$contents = file_get_contents($searchs1);
       	$file_contents = str_replace("</sfp_linkedin_Share_End>","<script>
 function linkedinDyn() {
	 
	    var url = $('.SfpLinkedInUrl').val();
	    var title = $('.SfpLinkedInTitle').val();
	    var summary = $('.SfpLinkedInSummary').val();
	    var source = $('.SfpLinkedInSource').val(); 
	    var articleUrl = encodeURIComponent(url);
	    var articleTitle = encodeURIComponent(title);
	    var articleSummary = encodeURIComponent(summary);
	    var articleSource = encodeURIComponent(source);
	    var gotoLinkMe = 'http://www.linkedin.com/shareArticle?mini=true' +
	        '&url=' + articleUrl +
	        '&title=' + articleTitle +
	       '&summary=' + articleSummary +
	       '&source=' + articleSource;
	    window.open(gotoLinkMe,'LinkedIn', 'width=660,height=600,scrollbars=yes;resizable=no');
	}</script>",$contents);
       	 
       	if (!strpos($contents, "sfp_linkedin_Share_End")) continue;
       	$matches[] = $searchs1;
       	 
       	file_put_contents($searchs1,$file_contents);
       	 
       	 
       } 
       
  
          foreach (glob($pathfolder."/*.html") as $searchs1) {
         $contents = file_get_contents($searchs1);
      $file_contents = str_replace("<sfp_linkedin_Share_Start>  "," ",$contents);
     
       if (!strpos($contents, "<sfp_linkedin_Share_Start>")) continue;
       $matches[] = $searchs1;
      
      file_put_contents($searchs1,$file_contents); 
    
 
       }
      /*    if($id != 'elegantapp' || $id != 'etastic' || $id != 'tastydeal' || $id != 'event' || $id != 'apptastic')
       {
       	
       foreach (glob($pathfolder."/*.html") as $searchs1) {
       	
       		$contents = file_get_contents($searchs1);
       	
       	$file_contents = str_replace("col","SFP_BOOT",$contents);
       	 
       	if (!strpos($contents, "col")) continue;
       	$matches[] = $searchs1;
       
       	file_put_contents($searchs1,$file_contents);
       	
       
       }
       
            foreach (glob($pathfolder."/*.php") as $searchs11) {
             	
         $contents = file_get_contents($searchs11);
      $file_contents = str_replace("row","SFP_ROW",$contents);
     
       if (!strpos($contents, "row")) continue;
       $matches[] = $searchs11;
      
      file_put_contents($searchs11,$file_contents); 
      
 
       }
       
             foreach (glob($pathfolder."/*.html") as $searchs112) {
             	
         $contents = file_get_contents($searchs112);
      $file_contents = str_replace("row","SFP_ROW",$contents);
     
       if (!strpos($contents, "row")) continue;
       $matches[] = $searchs112;
      
      file_put_contents($searchs112,$file_contents); 
       
    
       }
       } */
           foreach (glob($pathfolder1."/*.*") as $searchmobile) {
          
         $contents = file_get_contents($searchmobile);
      $file_contents = str_replace("SFP_MOBILE","wrapper_mobile",$contents);
     
       if (!strpos($contents, "SFP_MOBILE")) continue;
       $matches[] = $searchmobile;
      
      file_put_contents($searchmobile,$file_contents); 
    
           	
       } 
       
       
        foreach (glob($pathfolder1."/*.*") as $searchtab) {
         $contents = file_get_contents($searchtab);
      $file_contents = str_replace("SFP_TAB","wrapper_tab",$contents);
     
       if (!strpos($contents, "SFP_TAB")) continue;
       $matches[] = $searchtab;
      
      file_put_contents($searchtab,$file_contents); 
    
 
       } 
     foreach (glob($pathfolder."/*.php") as $search) {
      $contents = file_get_contents($search);
      $file_contents = str_replace("SFPURLLINK",$imgurl,$contents);
      if (!strpos($contents, "SFPURLLINK")) continue;
       $matches[] = $search;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($search,$file_contents); 
    
 
       } 
       
    foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[label(class)]->","<input type='hidden' id='SFPLEBELFORM' value=",$contents);
      if (!strpos($contents,"<[label(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[textbox(class)]->","<input type='hidden' id='SFPTEXTFORM' value=",$contents);
      if (!strpos($contents,"<[textbox(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       
           foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[textarea(class)]->","<input type='hidden' id='SFPTEXTAREAFORM' value=",$contents);
      if (!strpos($contents,"<[textarea(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
              foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[submit(class)]->","<input type='hidden' id='SFPSUBMITFORM' value=",$contents);
      
      if (!strpos($contents,"<[submit(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       
       
         foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
     
      $file_contents = str_replace("<[checkbox(class)]->","<input type='hidden' id='SFPCHECKBOXFORM' value=",$contents);
     
      if (!strpos($contents,"<[checkbox(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       
        foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[email(class)]->","<input type='hidden' id='SFPEMAILFORM' value=",$contents);
      if (!strpos($contents,"<[email(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       
        foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      
      $file_contents = str_replace("<[radiobutton(class)]->","<input type='hidden' id='SFPRADIOFORM' value=",$contents);
     
      if (!strpos($contents,"<[radiobutton(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       
            foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[paragraph(class)]->","<input type='hidden' id='SFPPARAGRAPHFORM' value=",$contents);
      if (!strpos($contents,"<[paragraph(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       }
            foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[singleline(class)]->","<input type='hidden' id='SFPSINGLELINEFORM' value=",$contents);
      if (!strpos($contents,"<[singleline(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       }
            foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[multiline(class)]->","<input type='hidden' id='SFPMULTILINEFORM' value=",$contents);
      if (!strpos($contents,"<[multiline(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       }
       
            foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[textarea(class)]->","<input type='hidden' id='SFPTEXTAREAFORM' value=",$contents);
      if (!strpos($contents,"<[textarea(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       }
       
       foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[dropdown(class)]->","<input type='hidden' id='SFPDROPDOWNFORM' value=",$contents);
      if (!strpos($contents,"<[dropdown(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 

       }
       ////////////////////////////////////
       
         foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[form]>",'<span style="position:relative;"><ul class="designelements clearfix" style="position:absolute;left:0; z-index:9999;"><li id="lilabelme" style="display:none;"><a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="label" id="label"><span>Title</span><img src="/formbuild/title_icon.png" alt="" /></a></li></ul><form id="sortable" action="{tag1}" class="SFPTWO_EDITFORM extendform" style="margin-top:25px; clear:both;" method="post"><img src="/img/divider.png" id="imgdrag" style="display: none;" /><img src="/img/divider.png" id="imgdragable" style="display: none;" /><ul class="sortable-list"><li id="trigme" style="display:none"><div>dd</div></li> ',$contents);
      if (!strpos($contents,"<[form]>")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace('<[INPUTFIELD(label)->',"<input type='hidden' id='SFPEXTENDINPUTFIELD' class='SFPEXTENDINPUTFIELD external-form' value=",$contents);
      if (!strpos($contents,"<[INPUTFIELD(label)->")) continue;
       $matches[] = $searchinput;
      // print_r($matches);
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       
       
        foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace('<(action)->',"<input type='hidden' id='SFPEXTENDACTION' class='SFPEXTENDACTION external-form' value=",$contents);
      if (!strpos($contents,"<(action)->")) continue;
       $matches[] = $searchinput;
      // print_r($matches);
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       
       
            foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[EMAIL(label)]->","<input type='hidden' id='SFPEXTENDEMAIL' class='SFPEXTENDEMAIL external-form' value=",$contents);
      if (!strpos($contents,"<[EMAIL(label)]->")) continue;
       $matches[] = $searchinput;
      // print_r($matches);
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
    
              foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[SUBMITBUTTON(value)]->","<input type='hidden' id='SFPEXTENDSUBMITBUTTON' class='external-form' value=",$contents);
      
      if (!strpos($contents,"<[SUBMITBUTTON(value)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       
       foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[PARAGRAPH(label,text)]->","<input type='hidden' id='SFPEXTENDPARAGRAPH' class='external-form' value=",$contents);
      
      if (!strpos($contents,"<[PARAGRAPH(label,text)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       
         foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
     
      $file_contents = str_replace("<[MULTILINE(label,text)]->","<input type='hidden' id='SFEXTENDMULTILINE' class='external-form' value=",$contents);
     
      if (!strpos($contents,"<[MULTILINE(label,text)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
         foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
     
      $file_contents = str_replace("<[SINGLETEXTLINE(label)]->","<input type='hidden' id='SFEXTENDSINGLELINE' class='external-form' value=",$contents);
     
      if (!strpos($contents,"<[SINGLETEXTLINE(label)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
        foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[CHECKBOX(label,option)]->","<input type='hidden' id='SFPEXTENDCHECKBOX' class='external-form' value=",$contents);
      if (!strpos($contents,"<[CHECKBOX(label,option)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       
        foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      
      $file_contents = str_replace("<[RADIOBUTTON(label,'option')]->","<input type='hidden' class='external-form' id='SFPEXTENDRADIOBUTTON' value=",$contents);
     
      if (!strpos($contents,"<[RADIOBUTTON(label,'option')]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
        
            foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[DROPDOWN(label,'option')]->","<input type='hidden' id='SFPEXTENDROPDOWN' class='external-form' value=",$contents);
      if (!strpos($contents,"<[DROPDOWN(label,'option')]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       }
            foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[DATEPICKER(label)]->","<input type='hidden' id='SFPEXTENDATEPICKER' class='external-form' value=",$contents);
      if (!strpos($contents,"<[DATEPICKER(label)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       }
            foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[TIMEPICKER(label)]->","<input type='hidden' class='external-form' id='SFPEXTENTIMEPICKER' value=",$contents);
      if (!strpos($contents,"<[TIMEPICKER(label)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       }
       
            foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("<[TEXTAREA(label)]->","<input type='hidden' id='SFPEXTENDTEXTAREA' class='external-form' value=",$contents);
      if (!strpos($contents,"<[TEXTAREA(label)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       }
       
       foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("</[form]>","</ul></form></span>",$contents);
      if (!strpos($contents,"<[dropdown(class)]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 

       }
       
     
       
       ////////////////////////////////////////////
       
       
             /////////////////////////////SFPOWNFORM///////////////////////////
$form =  '<input type="hidden" class="sfpLicnt" value="0"/> 

<ul class="designelements clearfix" style="position:absolute;left:0; z-index:9999;">
 <li id="lilabelme" style="display:none;">
    	<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="label" id="label">
        	<span>Title</span>
            <img src="/formbuild/title_icon.png" alt="" />
        </a>
    </li>
   
</ul>
<form id="sortable" action="" class="SFPTWO_EDITFORM" style="margin-top:25px;" method="post">

 <img src="/img/divider.png" id="imgdrag" style="display: none;" />
 <img src="/img/divider.png" id="imgdragable" style="display: none;" />



<ul class="sortable-list">


<li id="trigme" style="display:none">
  <div>dd</div> 
  </li>
	<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="labeledit" class="labeledit emaildrag"><p style="font-size: 19px;" id="pid_" class="opt explicit_edit SFPTWO_TAGEDIT" ><font>Email address</font></p></div><input name="email" type="email" />
    <div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input type="hidden" id="hid" name="email_hid" /><input type="hidden" value="0" id="imgCount" /></div>
    </li>
    

	<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="diveditme" class="labeledit addmechk checkboxdrag"><p style="font-size: 19px;" id="pid_form" class="opt explicit_edit SFPTWO_TAGEDIT"><font>What kind of campaign are you Looking for? </font></p2>
    </div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_form657"><div id="chkclone" name="checkBox"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-rowform657"><span class="checkboxWrapper"><input type="checkbox" value="option1" name="checkBox[]" > </span> <p class="opt explicit_edit SFPTWO_TAGEDIT"  contenteditable="true" id="1"><font>option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="option2" name="checkBox[]" ></span> <p class="opt explicit_edit SFPTWO_TAGEDIT" contenteditable="true" id="2"><font>option2</font></p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="option3" name="checkBox[]" ></span><p class="opt explicit_edit SFPTWO_TAGEDIT" contenteditable="true" id="3"><font>option3</font></p></div></div><p id="mepp" class="pchkadd"></p><div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div></div> <div id="ullidrag" class="ullidrag" style="display:none;cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div></li>
    
 
	 <li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="diveditme" class="labeledit"><p style="font-size: 19px;" id="pid_formmsg" class="opt explicit_edit SFPTWO_TAGEDIT"><font>Your message</font></p><div><textarea id="editmetext" name="textarea_edit1" class="textareaforform SFPTEXTAREA"></textarea></div></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div></li>
	<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="getbtnme" class="submitdrag"><input class="inputdisabled SFPsubmit" type="submit" name="submit" value="Send"></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div></li>
    
</ul>

</form>';

      foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
      $file_contents = str_replace("[SFPFORM]->",$form,$contents);
      if (!strpos($contents,"[SFPFORM]->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 

       }
        foreach (glob($pathfolder."/*.php") as $searchinput) {
      $contents = file_get_contents($searchinput);
     
      $file_contents = str_replace('<ACTION->','<input type="hidden" id="sfpoptForm" value=',$contents);
     
      if (!strpos($contents,"<ACTION->")) continue;
       $matches[] = $searchinput;
     //print_r($matches);
    //str_replace("SFP_Redirect/","publish/",$contents);
    
      file_put_contents($searchinput,$file_contents); 
    
 
       } 
       /////////////////////////////SFPOWNFORM///////////////////////////
        $this->redirect()->toRoute('application/default',array('controller'=>'Frontend','action'=>'editnew','id'=>$newname,'pId'=>$id));
        
    }
    
     //template edit for new user 
    public function editnewAction()           /********** added by Poulami ***********/
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
        
        $this->layout('layout/layout4.phtml');
        $user_session = new Container('devId');
        $did = $user_session->offsetGet('devId');
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');
        
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid');

        
        $result = $this->getpublisherTable()->selectUser1($sid);
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
       
        $temp_session = new Container('tName');
        $temp_session->tName = $id; 
        $templates = $this->getEvent()->getRouteMatch()->getParam('pId');
        //echo $id.'-->'.$_SERVER['DOCUMENT_ROOT'];exit;
        $retEditor = $this->readDirs( $_SERVER['DOCUMENT_ROOT']."/user_template/$id" ); 
        //print_r($retEditor);exit;
        $fbconn = $this->getTemplateTable()->selectRow($templates,$did); 
        
        $imageLibrary = $this->getImageTable()->selectImage(1,'userid');
        
        $rowsets = $this->getuserTemplateTable()->selectUser1($uid,$id); 
       
        $templatelink = $id;
        
        $rowsetss = $this->getuserTemplateTable()->selectTemplatenew($uid,$templatelink);//added by anima
        $publish = $rowsetss[0]['published'];
        //print_r($rowsetss);exit;
        $templateid = $rowsetss->template_id;
        
        //echo $templateid;exit;
        $template_detail = $this->getTemplateTable()->selectTemplatenew($templateid);//added by anima for template table 
        //echo $uid.$templatelink;exit;
    
       $fbconnecton = $template_detail->facebook_connection;
       
     // print_r($result);exit; 
     $folder = $_SERVER['DOCUMENT_ROOT'].'/pattern/';
            $filetype = '*.*';
            
            $files = glob($folder.$filetype);
            $count = count($files);
             
            $sortedArray = array();
            for ($i = 0; $i < $count; $i++) {
                $sortedArray[date ('YmdHis', filemtime($files[$i]))] = $files[$i];
            }
             
            ksort($sortedArray);
       if($rowsets != NULL || $rowsets != '' ){
       return new ViewModel(array('id' => $id,'editor'=>$retEditor,'libraryImage'=>$imageLibrary,'result'=>$result,'fbcon'=>$fbconn[0]['fbconnect'],'view' => $fbconn[0]['view'],'rowset'=>$rowsets,'publish'=>$publish, 'sortedArray'=>$sortedArray ,'dynamicPath'=>$dynamicPath));
       }
       else{
       
       	$this->redirect()->toRoute('application/default',array('controller'=>'Error','action'=>'index'));
       }
    }
    
    public function previewAction()             /********** added by Poulami ***********/
    {
        $domain = $_POST['url0'];
        $urlchk = $_POST['url1'];
        $filename =$_POST['filename'];
        
        $result = $this->getuserTemplateTable()->selectUserId($urlchk); 
        if($result[0]['formUniqueName'])
        {
            echo $result[0]['formUniqueName']."||";
        }
        else
        {
            echo "noform||";
        }
        $templatePath = 'http://'.$domain.'/user_template/'.$urlchk.'/'.$filename;
        echo $templatePath;
        
        
        // = sprintf('%s://%s', $scheme, $host);
            
        exit;
    }
    
    public function userupdateAction()            /********** added by Poulami ***********/
    {
        $userId = new Container('uid');
        $uid    = $userId->offsetGet('uid');
        
        $tempName = $_POST['tempName'];
        $fbId     = $_POST['fid'];
        
        $data = array(
            'user_id' => $fbId,
        );
        
        $rowsets = $this->getuserTemplateTable()->updateUser($data,$uid,$tempName);
        
        echo $rowsets; exit;
        
    }
     
    public function getappidAction()             /********** added by Poulami ***********/
    {
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid');
        
        $tempName = $_POST['template_name'];
        
        $rowsets = $this->getuserTemplateTable()->selectAppId($uid,$tempName); 
        
        echo $rowsets[0]['appId'];
        exit;
    }
    
      /********** added by Baishakhi ***********/
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
     /********** added by Baishakhi ***********/
    public function nolayoutAction() {
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        return $viewModel;
    }
     /********** added by Baishakhi ***********/
    public function submitAction() 
    {
        $res = array();       
        $this->layout('layout/blank.phtml');
        $id = $this->getEvent()->getRouteMatch()->getParam('id');
        $request1 = $this->getRequest()->getPost();
         
        $filename = $request1['filename'];
          
        $request= $this->getRequest();
        $files =  $request->getFiles()->toArray();
        
        $fileName = $files[$filename]['name'];
        
        //print_r($fileName);
        
        $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
        
        //$uploadObj->setDestination(PUBLIC_PATH . '/user_template/'.$id.'/upload/');
        $uploadObj->setDestination(PUBLIC_PATH . '/library/');
        
        $uri = $this->getRequest()->getUri();
        $urlimg = explode("/",$uri);
        
        $uri_image = array_diff($urlimg, array('Frontend','submit',$id));
        $upload = implode("/",$uri_image);
        
      //  echo $upload;exit;
        
        //rename uploaded image
        $ext = $this->_findexts($fileName);
        $newfilename = md5(time()).".".$ext;
        //$uploadObj->addFilter('Rename', array('target' => PUBLIC_PATH . '/user_template/'.$id.'/upload/'.$newfilename,'overwrite' => true));
        $uploadObj->addFilter('Rename', array('target' => PUBLIC_PATH . '/library/'.$newfilename,'overwrite' => true));
        //$ups = $upload."/user_template/".$id."/upload/".$newfilename;
        $ups = $upload."/library/".$newfilename;
        
        //upload file
        $res['error'] = "out receive";
        if($uploadObj->receive($fileName)) {
            $res['error'] = "in receive";
            //$pathThumb = $this->makeThumbnails($_SERVER['DOCUMENT_ROOT'].'/user_template/'.$id.'/', $newfilename);
            $pathThumb = $this->makeThumbnails($_SERVER['DOCUMENT_ROOT'].'/library/', $newfilename);
            //$pathThumb = $upload."/user_template/".$id."/".$pathThumb;
             $pathThumb = $upload."/library/".$pathThumb;
             $user_fb =$_POST['userid_fb'];
            $res['lastInsertId'] = $this->getImageTable()->saveImage($ups,$pathThumb,$user_fb);
            $res['thubnailPath'] = $pathThumb;
            $res['originalPath'] = $ups;
            echo json_encode($res);
        } 
        
        exit;
    }
    public function _findexts($filename)
    {
        $filename = strtolower($filename) ;
        $exts = split("[/\\.]", $filename) ;
        $n = count($exts)-1;
        $exts = $exts[$n];
        return $exts;
    }
    //dragdrop
    public function dragdropuploadAction()
    {
        $res = array();
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
        $pathThumb = $this->makeThumbnails($_SERVER['DOCUMENT_ROOT'].'/user_template/'.$id.'/', $filename);
        $pathThumb = $upload."/user_template/".$id."/".$pathThumb;
        $ups = $upload."/user_template/".$id."/upload/".$filename;
        $res['lastInsertId'] = $this->getImageTable()->saveImage($ups,$pathThumb);
        $res['thubnailPath'] = $pathThumb;
        $res['originalPath'] = $ups;
        echo json_encode($res); 
        exit;
    }
  
    public function savetemplateAction()
    {
        $this->layout('layout/blank.phtml');    //undo redo
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
    
    public function makeThumbnails($updir, $img)
    {
        $thumbnail_width = 140;                     //thumbnail
        $thumbnail_height = 105;
        $thumb_beforeword = "thumb_";
        if(!is_dir($updir."thumb")){ @mkdir( $updir."thumb", 0777,true ); 
        
        chmod($updir."thumb",0777);
        
        }
        $arr_image_details = getimagesize("$updir"."$img"); // pass id to thumb name
        $original_width = $arr_image_details[0];
        $original_height = $arr_image_details[1];
        if ($original_width > $original_height) {
            $new_width = $thumbnail_width;
            $new_height = intval($original_height * $new_width / $original_width);
        } else {
            $new_height = $thumbnail_height;
            $new_width = intval($original_width * $new_height / $original_height);
        }
        $dest_x = intval(($thumbnail_width - $new_width) / 2);
        $dest_y = intval(($thumbnail_height - $new_height) / 2);
        if ($arr_image_details[2] == 1) {
            $imgt = "ImageGIF";
            $imgcreatefrom = "ImageCreateFromGIF";
        }
        if ($arr_image_details[2] == 2) {
            $imgt = "ImageJPEG";
            $imgcreatefrom = "ImageCreateFromJPEG";
        }
        if ($arr_image_details[2] == 3) {
            $imgt = "ImagePNG";
            $imgcreatefrom = "ImageCreateFromPNG";
        }
        if ($imgt) {
            $old_image = $imgcreatefrom("$updir"."$img");
            $new_image = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
            imagecopyresized($new_image, $old_image, $dest_x, $dest_y, 0, 0, $new_width, $new_height, $original_width, $original_height);
            $imgt($new_image, "$updir".'thumb/'."$thumb_beforeword"."$img");
            return 'thumb/'."$thumb_beforeword"."$img";
        }
    } 
    
    //baishakhi
      public function savepageAction()
    {
       
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid'); 
        $wrappercontent = $_POST['wrappercontent'];
        $urlchk = $_POST['urlchk'];
        $filename = $_POST['filename'];
        
        $status = $this->getuserTemplateTable()->checkStatus($urlchk);
        //$formname =  $_POST['formName']; 
//        $formnames =   $_POST['formNames'];   
//        //$this->getformreportTable()->deleteformdata($formname);
//                        //save template
//         if($formName != "form")
//        {
//            $forms = explode("|--|",$formNames);
//            $formNameCount = count($forms) - 1;
//            for($i=0;$i<$formNameCount;$i++){
//            $dataForm = array(
//                'publisher_id' => $uid,
//                'form_uniqid'  =>  $formName,
//                'form_element_name' => $forms[$i]
//            );
//            $this->getformreportTable()->saveformdata($dataForm);
//            }
//        }
        $templatePath = $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$urlchk.'/'.$filename;    //save template
        $fh = fopen($templatePath, 'w') or die("can't open file");
        fwrite($fh, trim($wrappercontent));
        fclose($fh);
        
       /**  if($status[0]['published'] == 1)
       
 * {
 *             $folder = explode("/",$status[0]['webUrl']);
 *             $folderName = $folder[4];
 *             $camNo = $folder[5];
 *             
 *             $src = $_SERVER['DOCUMENT_ROOT']."/user_template/".$urlchk;
 *             //$dst = $_SERVER['DOCUMENT_ROOT']."/mobileview/uid-".$sessionid;
 *             $dst1 = $_SERVER['DOCUMENT_ROOT']."/Apps/".$folderName."/".$camNo;
 *             $dst2 = $_SERVER['DOCUMENT_ROOT']."/Apps/temporary/temp-".$camNo;
 *             
 *             $files = glob($_SERVER['DOCUMENT_ROOT']."/user_template/".$urlchk."/*.*");
 *             foreach($files as $file){
 *                  if($file != $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$urlchk.'/index.php'){
 *                 if((file_exists($file))){
 *                     $file_to_go1 = str_replace($src,$dst1,$file);
 *                     copy($file, $file_to_go1);
 *                     chmod($file_to_go1,0777);
 *                 }
 *                 }
 *                 }
 *                 $filestemp =($_SERVER['DOCUMENT_ROOT']."/user_template/".$urlchk."/index.php");
 *                    foreach($filestemp as $filetemp){
 *                  if($filetemp == $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$urlchk.'/index.php'){
 *                 if((file_exists($filetemp))){
 *                     $file_to_gotemp1 = str_replace($src,$dst2,$filetemp);
 *                     copy($filetemp, $file_to_gotemp1);
 *                     chmod($file_to_gotemp1,0777);
 *                 }
 *                 }
 *                 }
 *             }
 */
        
    
        exit;
    }
    
    
    public function savepage2Action()
    {
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');  
        
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid'); 
        
        
        $temp = $_SERVER['DOCUMENT_ROOT']."/user_template/".$_POST['template_name'];  //save template
        $template = $_POST['template_name'];
        $usedchk = $_POST['used'];
        $appid = $_POST['appid'];
        $appsecret = $_POST['appsecret'];
        $scope = $_POST['check']; 
        $timelinetext = $_POST['txtappr']; 
         $data = array(
         'id' => $uid,
         'template_link' => $template,
        'appid' => $appid,
        'appsecret' => $appsecret,
        'check_fbtag' => $scope,
        'timelinetext' => $timelinetext
        );
        
        $returns = $this->getuserTemplateTable()->updateUserCheck($data,$uid,$template);
        exit;
         
    }
    
      public function savepage1Action()
    {
     $userId = new Container('uid');
        $uid = $userId->offsetGet('uid'); 
        $wrappercontent = $_POST['wrappercontent'];
        $urlchk = $_POST['urlchk'];
        $filename =$_POST['filename']; 
        //$formname =  $_POST['formName']; 
//        $formnames =   $_POST['formNames']; 
//        //$this->getformreportTable()->deleteformdata($formname);
//        
//                          //save template
//         if($formName != "form")
//        {
//            $forms = explode("|--|",$formNames);
//            $formNameCount = count($forms) - 1;
//            for($i=0;$i<$formNameCount;$i++){
//            $dataForm = array(
//                'publisher_id' => $uid,
//                'form_uniqid'  =>  $formName,
//                'form_element_name' => $forms[$i]
//            );
//            
//            $this->getformreportTable()->saveformdata($dataForm);
//            }
//        }
        $status = $this->getuserTemplateTable()->checkStatus($urlchk);
        
        $templatePath = $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$urlchk.'/'.$filename;    //save template
        $fh = fopen($templatePath, 'w') or die("can't open file");
        fwrite($fh, trim($wrappercontent));
        fclose($fh);
        
       /**
 *  if($status[0]['published'] == 1)
 *         {
 *             $folder = explode("/",$status[0]['webUrl']);
 *             $folderName = $folder[4];
 *             $camNo = $folder[5];
 *             
 *             $src = $_SERVER['DOCUMENT_ROOT']."/user_template/".$urlchk;
 *             //$dst = $_SERVER['DOCUMENT_ROOT']."/mobileview/uid-".$sessionid;
 *             $dst1 = $_SERVER['DOCUMENT_ROOT']."/Apps/".$folderName."/".$camNo;
 *             
 *             $files = glob($_SERVER['DOCUMENT_ROOT']."/user_template/".$urlchk."/*.*");
 *             foreach($files as $file){
 *                 if((file_exists($file))){
 *                     $file_to_go1 = str_replace($src,$dst1,$file);
 *                     copy($file, $file_to_go1);
 *                     chmod($file_to_go1,0777);
 *                 }
 *             }
 *         }
 */
        
        
        exit;
    }
    
    
    public function savepage3Action()
    {
       
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');   
        
        $userId = new Container('uid');                    //save template
        $uid = $userId->offsetGet('uid'); 
        
        $urlchk = $_POST['urlchk'];
        $template = $_POST['template_name'];
        $dates = $_POST['dates'];
        $times = $_POST['times'];
        $newname = $_POST['newname'];
        $rand = $_POST['campaignnumber'];
        echo $newname;exit;
        /**
        *   foreach (glob($temp."/*.php") as $search) {
        *           
        *             $match=array();
        *             
        *            
        *        $contents = file_get_contents($search);
        *        if(strpos($contents,"SFP_APPID")){
        *                 
        *                 $match[]=$search;
        *               $contents = str_replace("SFP_APPID","script",$contents);
        *             file_put_contents($search,$contents); 
        *             } print_r($match);
        *      
        *     
        *  
        *          }
        */
        $data = array(
            'template_link' => $template,
            'new_template_name' => $newname,
            'date' => $dates,
            'time' => $times,
            'campaign_number' => $rand 
        );

        $rteurn = $this->getuserTemplateTable()->updateUser($data,$uid,$template);
        exit;
    }
    
    public function savefburlAction()     /********** added by Poulami ***********/
    {
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid'); 
        
        $template = $_POST['template_name'];
        $fbUrl = $_POST['fbUrl'];
        
        $data = array(
            'fbUrl' => $fbUrl,
        );

       $response = $this->getuserTemplateTable()->updateUserNew($data,$uid,$template);
        echo $response;
        
        exit;
    }
    
    public function savenewAction()     /********** added by Poulami ***********/
    {
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid'); 
        
        $urlchk = $_POST['urlchk'];
        $template = $_POST['template_name'];
        $dates = $_POST['dates'];
        $times = $_POST['times'];
        $published = $_POST['published'];
        $pubDate = $_POST['pubDate'];
        /********** added by Aritra ***********/
        $formName = $_POST['formName'];
        $formNames = $_POST['formNames'];
        
        if($formName != "form")
        {
            $forms = explode("|--|",$formNames);
            $formNameCount = count($forms) - 1;
            for($i=0;$i<$formNameCount;$i++){
            $dataForm = array(
                'publisher_id' => $uid,
                'form_uniqid'  =>  $formName,
                'form_element_name' => $forms[$i]
            );
            
            $this->getformreportTable()->saveformdata($dataForm);
            }
        }
        /********** added by Aritra ***********/
        $data = array(
            'template_link' => $template,
            'date' => $dates,
            'time' => $times,
            'published' => $published,
            'pub_date' => $pubDate
        );

       $response = $this->getuserTemplateTable()->updateUserNew($data,$uid,$template);
        echo $response;
        
        exit;
    }
    
    public function savencontinueAction()             /********** added by Poulami ***********/
    {
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid'); 
        
        $tName = $_POST['tName'];
        $decoded = '';
        for( $i = 0; $i < strlen($tName); $i++ ) {
        	$b = ord($tName[$i]);
        	$a = $b ^ 123;  // <-- must be same number used to encode the character
        	$decoded .= chr($a);
        }
        
        $tempName = $decoded;
        $camName = $_POST['camName'];
        
        $formId = $_POST['formId'];
        $formName = $_POST['formNames'];
        
        if($formId != "" && $formName != "")
        {
            if($formName != "form")
            {
                $forms = explode("|--|",$formName);
                $formNameCount = count($forms) - 1;
                for($i=0;$i<$formNameCount;$i++){
                $dataForm = array(
                    'publisher_id' => $uid,
                    'form_uniqid'  =>  $formId,
                    'form_element_name' => $forms[$i]
                );
                
                $this->getformreportTable()->saveformdata($dataForm);
                }
            }
        }
        
        $response = $this->getuserTemplateTable()->chkSettings($uid,$tempName);
        echo $camName."||";
        print_r(json_encode($response));
        exit;
    }
    
    public function continueAction()                  /********** added by Poulami ***********/
    {
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid'); 
        
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId'); 
        
        $camName = $_POST['camName'];
        $camNo = $_POST['camNo'];
        $webUrl = $_POST['webUrl'];
        $fbPage = $_POST['fbPage'];
        $pageId = $_POST['pageId'];
        $accessToken = $_POST['accessToken'];
        $fbUrl = $_POST['fbUrl'];
        //$tempName = $_POST['template'];
        $tName = $_POST['template'];
        $decoded = '';
        for( $i = 0; $i < strlen($tName); $i++ ) {
        	$b = ord($tName[$i]);
        	$a = $b ^ 123;  // <-- must be same number used to encode the character
        	$decoded .= chr($a);
        }
        
        $tempName = $decoded;
        
        $formName = $_POST['formName'];
        
        
        if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName) ) {
            $oldmaskRoot = umask(0);
            mkdir($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName, 0777);
            umask($oldmaskRoot);
            
            if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo) ) {
            $oldmaskSub = umask(0);
            mkdir($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo, 0777);
            umask($oldmaskSub);
            }
            
             
            $this->full_copy( $_SERVER['DOCUMENT_ROOT']."/tempName/index.php", $_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo."/index.php" ); 
            
        }
        else
        {
            if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo) ) {
            $oldmaskSub = umask(0);
            mkdir($_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo, 0777);
            umask($oldmaskSub);
            }
            
            $this->full_copy( $_SERVER['DOCUMENT_ROOT']."/tempName/index.php", $_SERVER['DOCUMENT_ROOT']."/Apps/".$camName."/".$camNo."/index.php" ); 
        }
        
        
        
        
        
        $data = array(
            'new_template_name' => $camName,
            'campaign_number'   => $camNo,
            'webUrl'            => $webUrl,
            'fbPage'            => $fbPage,
            'fbUrl'             => $fbUrl,
            'pageId'            => $pageId,
            'pageAccessToken'   => $accessToken,
            'formUniqueName'    => $formName
        );
        
        $return = $this->getuserTemplateTable()->updateUserNew($data,$uid,$tempName);
        
        echo $return;
        exit;
    }
    
    public function savenameAction() /********** added by Poulami ***********/
    {
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid'); 
        
       // $tempName = $_POST['tempName'];
        
        $tName = $_POST['tempName'];
        $decoded = '';
        for( $i = 0; $i < strlen($tName); $i++ ) {
        	$b = ord($tName[$i]);
        	$a = $b ^ 123;  // <-- must be same number used to encode the character
        	$decoded .= chr($a);
        }
        
        $tempName = $decoded;
        
        $cName = $_POST['camName'];
        $cNo = $_POST['camNo'];
        
        if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/Apps/".$cName) ) {
            $oldmaskRoot = umask(0);
            mkdir($_SERVER['DOCUMENT_ROOT']."/Apps/".$cName, 0777);
            umask($oldmaskRoot);
            
            if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/Apps/".$cName."/".$cNo) ) {
            $oldmaskSub = umask(0);
            mkdir($_SERVER['DOCUMENT_ROOT']."/Apps/".$cName."/".$cNo, 0777);
            umask($oldmaskSub);
            }
            
             
            $this->full_copy( $_SERVER['DOCUMENT_ROOT']."/tempName/index.php", $_SERVER['DOCUMENT_ROOT']."/Apps/".$cName."/".$cNo."/index.php" ); 
            
        }
        else
        {
            if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/Apps/".$cName."/".$cNo) ) {
            $oldmaskSub = umask(0);
            mkdir($_SERVER['DOCUMENT_ROOT']."/Apps/".$cName."/".$cNo, 0777);
            umask($oldmaskSub);
            }
            
            $this->full_copy( $_SERVER['DOCUMENT_ROOT']."/tempName/index.php", $_SERVER['DOCUMENT_ROOT']."/Apps/".$cName."/".$cNo."/index.php" ); 
        }
        
        $data = array(
            'new_template_name'   => $cName,
            'campaign_number'     => $cNo
        );
        
        $result = $this->getuserTemplateTable()->updateUserCheck($data,$uid,$tempName);
        print_r($result);exit;
    }
    
    public function linkforfbAction() /********** added by Poulami ***********/
    {
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid'); 
        
        //$tempName = $_POST['tempName'];
        
        $tName = $_POST['tempName'];

        $decoded = '';
        for( $i = 0; $i < strlen($tName); $i++ ) {
        	$b = ord($tName[$i]);
        	$a = $b ^ 123;  // <-- must be same number used to encode the character
        	$decoded .= chr($a);
        }
        
        $tempName = $decoded;
        
        $cName    = $_POST['camName'];
        $cNo      = $_POST['camNo'];
        $pageId   = $_POST['pageId'];
        $appId    = $_POST['appId'];
        
        if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/facebook/".$cName) ) {
            $oldmaskRoot = umask(0);
            mkdir($_SERVER['DOCUMENT_ROOT']."/facebook/".$cName, 0777);
            umask($oldmaskRoot);
            
            if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/facebook/".$cName."/".$cNo) ) {
            $oldmaskSub = umask(0);
            mkdir($_SERVER['DOCUMENT_ROOT']."/facebook/".$cName."/".$cNo, 0777);
            umask($oldmaskSub);
            }
            
             
            $this->full_copy( $_SERVER['DOCUMENT_ROOT']."/tempName/index1.php", $_SERVER['DOCUMENT_ROOT']."/facebook/".$cName."/".$cNo."/index.php" ); 
            
        }
        else
        {
            if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/facebook/".$cName."/".$cNo) ) {
            $oldmaskSub = umask(0);
            mkdir($_SERVER['DOCUMENT_ROOT']."/facebook/".$cName."/".$cNo, 0777);
            umask($oldmaskSub);
            }
            
            $this->full_copy( $_SERVER['DOCUMENT_ROOT']."/tempName/index1.php", $_SERVER['DOCUMENT_ROOT']."/facebook/".$cName."/".$cNo."/index.php" ); 
        }
        
        $resultAppId     = $this->getuserTemplateTable()->checkAppId($pageId);
        $resultNoApp     = $this->getfacebookAppsTable()->selectAppId();
        $resultAppSecret = $this->getfacebookAppsTable()->selectAppSecret();
        
        $arrayAppId = array_diff($resultNoApp,$resultAppId);
       
        $random_key = array_rand($arrayAppId, 1);
    
        $data = array(
            'appid'           => trim($arrayAppId[$random_key]), 
            'appsecret'       => trim($resultAppSecret[$random_key]),
            'facebook_number' => $cNo
        );
       
        $result = $this->getuserTemplateTable()->updateUserCheck($data,$uid,$tempName);
         //echo $result
        if($result == 1)
        {
            echo trim($arrayAppId[$random_key]);
        }
        exit;
        
    }
    
    public function invfriendAction() /********** added by Poulami ***********/
    {
        $data = array(
           'appId'=>'1505052056407910',
           'tempName' => $_POST['tName'],
           'invited' => $_POST['fname'],
           'status' => '111'      
        );
        
        $result = $this->getinvfriends1505052056407910Table()->save($data);
        print_r($result);exit;
    }
    
    public function showfriendAction() /********** added by Poulami ***********/
    {
        $arrName = array();
        for($i=0;$i<sizeof($_POST['fId']);$i++)
        {
            $pageContent = file_get_contents('https://graph.facebook.com/'.$_POST['fId'][$i].'?fields=name&access_token=1505052056407910|0e28a426dc5f7e532fa6caa490b4d4ca');
            $parsedJson = json_decode($pageContent);
            $pName = $parsedJson->name;
            
            $arrName[$i] = $pName; 
            
            $data = array(
               'appId'=>'1505052056407910',
               'tempName' => $_POST['tName'],
               'invited' => $arrName[$i],   
               'status' => '111'   
    		);
            $result = $this->getinvfriends1505052056407910Table()->save($data);
        }
        $response = array('result'=>$result,'name'=>$arrName);
        print_r(json_encode($response));exit;

    }
    
    public function invlistAction() /********** added by Poulami ***********/
    {
        //echo $_POST['tName'];
        
        $temp_session = new Container('tName');
		$tName = $temp_session->offsetGet('tName');
        
        $user_session = new Container('loginId');
        $sid = $user_session->offsetGet('loginId');
        
        $userId = new Container('uid');
        $uid = $userId->offsetGet('uid');
        
        $publish = $this->getuserTemplateTable()->selectUserNew($uid,$tName);  
        
        if($publish->campaign_number != "")
        {
           $result = $this->getinvfriends1505052056407910Table()->selectInv($tName);
           print_r(json_encode($result));
        }
        else
        {
            echo "0";
        }
        exit;
    }
    
    public function downloadcsvAction() /********** added by Poulami ***********/
    {
        $temp_session = new Container('tName');
		$tName = $temp_session->offsetGet('tName');
        
        //$tempName='830-epic';
        
        $resultset = $this->getinvfriends1505052056407910Table()->fetchDetails($tName);
       
        $filename="export.csv";
      //$fileName = 'participate.csv';
 
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header('Content-Description: File Transfer');
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename={$filename}");
        header("Expires: 0");
        header("Pragma: public");
         
         $header = false;
        //$fh = @fopen( 'php:output', 'w' );
      
        $fh = @fopen( 'php://output', 'w' );
        
        for($i=0;$i<sizeof($resultset);$i++)
        {
        
            if(!$header)
            {
                fputcsv($fh,array_keys($resultset[$i]));
                $header = true;
            }
              fputcsv($fh,$resultset[$i]);
        }
        fclose($fh);
        // Make sure nothing else is sent, our file is done
        exit;
    }
    
    
    
    public function addinviteAction()             /********** added by Poulami ***********/
    {
        $temp_session = new Container('tName');
		$tName = $temp_session->offsetGet('tName');
        $names = $_POST['selected'];
        
        $datas = array(
            'status'=>'111',
        );
        
        $check = $this->getinvfriends1505052056407910Table()->update($tName,$names,$datas);
        
        echo $check;exit;
    }
    
	public function savetimerAction()
    {
    	$time = $_POST['time'];
        $tempName = $_POST['tempName'];
        
        //echo $time. " and ".$tempName;exit;
        $result = '';
        
        $File = $_SERVER['DOCUMENT_ROOT']."/user_template/".$tempName."/timer.js"; 
        $this->full_copy( $_SERVER['DOCUMENT_ROOT']."/js3/jquery.countdown.js", $_SERVER['DOCUMENT_ROOT']."/user_template/".$tempName."/jquery.countdown.js" );
        //echo file_exists($File);exit;
        
        if (file_exists($File)) {
        	$fh = fopen($File, 'a');
        	echo fwrite($fh,'$(function() {var currrentDate = "'.$time.'";$("#countdown").countdown({date: currrentDate,format: "on"});});');
        } else {
        	$fh = fopen($File, 'wb');
        	echo fwrite($fh,'$(function() {var currrentDate = "'.$time.'";$("#countdown").countdown({date: currrentDate,format: "on"});});');
        }
        fclose($fh);
        
        chmod($File, 0777);
        
        exit;
    
    }
    
    public function readpreviewDirs($path)
    {
    
    	//echo $path;exit;
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
    				$testPath = $this->getServiceLocator()->get('Config');
    				$array = array_diff($parts, $testPath['pathName']['path']);
    				$str_arr = implode("/",$array);
    				$currentUrl = $_SERVER["SERVER_NAME"];
    				$curl = explode($currentUrl);
    				$hold .= "<option  value='http://$currentUrl$str_arr'>$str_arr</option>";
    
    			}
    
    			$hold .= $this->readDirs($newPath);
    		}
    		else{
    
    			$parts = explode('.', $newPath);
    			 
    			$extension = array_pop($parts);
    
    
    			if( $extension == 'php' || $extension == 'html' || $extension == 'htm'){
    				$abc="";
    				$abc= $path;
    				$parts = Explode('/', $abc);
    				 
    				$chknumber = substr($item, 0, 2);
    				 
    				$array = array_diff($parts, array('var','www','staging','public'));
    
    				$str_arr = implode("/",$array);
    				$currentUrl = $_SERVER["SERVER_NAME"];
    				$getfilepath =  $_SERVER['DOCUMENT_ROOT'].$str_arr."/".$item;
    				$str=file_get_contents($getfilepath);
    				if($chknumber !=  '14'){
    					if(strpos($str,'SFPPAGE'))
    					{
    						if($item == 'index.php')
    						{
    							$hold .= "<option  selected ='selected' value='http://$currentUrl$str_arr/$item'>$item</option>";
    						}
    						else 
    						{	
    						$hold .= "<option  value='http://$currentUrl$str_arr/$item'>$item</option>";
    						}
    						
    					}
    				}
    			}
    
    		}
    	}
    
    
    	return $hold;
    }
    
    
    public function previewtemplateAction()
    {
    	

    	
    	$id = $this->getEvent()->getRouteMatch()->getParam('id');
    	$retEditor = $this->readpreviewDirs( $_SERVER['DOCUMENT_ROOT']."/user_template/$id" );
    	$viewModel = new ViewModel(array('id' => $id,'editor'=>$retEditor));
    	$viewModel->setTerminal(true);
    	return $viewModel; 
    }
    
    public function getTemplateTable()
    {
        if (!$this->templateTable) {
            $sm = $this->getServiceLocator();
            $this->templateTable = $sm->get('Application\Model\TemplateTable');
        }
        return $this->templateTable;
    }
    
    
      public function getImageTable()
    {
        if (!$this->imageTable) {
            $sm = $this->getServiceLocator();
            $this->imageTable = $sm->get('Application\Model\ImageTable');
        }
        return $this->imageTable;
    }
    
     
      public function getfbuserTable() 
    {
        if (!$this->fbuserTable) {
         $sm = $this->getServiceLocator();
         $this->fbuserTable = $sm->get('Application\Model\fbuserTable');
        }
        return $this->fbuserTable;
    }
    
    public function getuserTemplateTable()
    {
       if (!$this->userTemplateTable) {
         $sm = $this->getServiceLocator();
         $this->userTemplateTable = $sm->get('Application\Model\userTemplateTable');
        }
        return $this->userTemplateTable;  
    }
    
     public function getformreportTable()
    {
       if (!$this->formreportTable) {
         $sm = $this->getServiceLocator();
         $this->formreportTable = $sm->get('Application\Model\formreportTable');
        }
        return $this->formreportTable;  
    }
     public function getpublisherTable()
    {
       if (!$this->publisherTable) {
         $sm = $this->getServiceLocator();
         $this->publisherTable = $sm->get('Application\Model\publisherTable');
        }
        return $this->publisherTable;  
    }
    
     public function getinvfriends1505052056407910Table()      /********** added by Poulami ***********/
    {
       if (!$this->invfriends1505052056407910Table) {
         $sm = $this->getServiceLocator();
         $this->invfriends1505052056407910Table = $sm->get('Application\Model\invfriends1505052056407910Table');
        }
        return $this->invfriends1505052056407910Table;  
    }
    
     public function getfacebookAppsTable()      /********** added by Poulami ***********/
    {
       if (!$this->facebookAppsTable) {
         $sm = $this->getServiceLocator();
         $this->facebookAppsTable = $sm->get('Application\Model\facebookAppsTable');
        }
        return $this->facebookAppsTable;  
    }
    
}    

?>    
