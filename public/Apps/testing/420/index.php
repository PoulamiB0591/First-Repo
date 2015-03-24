<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<?php

$getindex = $_SERVER['REQUEST_URI']."index.php";
$url = $_SERVER['REQUEST_URI'];

$folder = explode("/",$url);

$values = $folder[3];
$values2 = $folder[2];

$con = mysql_connect("localhost","phpmyadmin","Testing1@") or die("cant connect");
$db = mysql_select_db("sfp_staging", $con) or die ("not selected");

//echo "select * from  `userTemplate` where `campaign_number`='".$values."' and `new_template_name` = '".$values2."'";

$sql1 = mysql_fetch_assoc(mysql_query("select * from  `userTemplate` where `campaign_number`='".$values."' and `new_template_name` = '".$values2."'")) ;
$value = $sql1['template_link'];
$sql = mysql_fetch_assoc(mysql_query("select * from  `userTemplate` where `template_link`='".$value."'")) ;
?>
<?php
$getuniq = rand(5, 15); 
$nexuniq = time();
$nextone = uniqid();
function gen_random_string($length=16)
{
    $chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";//length:36
    $final_rand='';
    for($i=0;$i<$length; $i++)
    {
        $final_rand .= $chars[ rand(0,strlen($chars)-1)];
 
    }
    return $final_rand;
}
$sessionid = $getuniq.$nexuniq.$nextone;


$form =  "<?php include_once('/var/www/staging/public/sfpForm.php');?>";
$userfolder = $_SERVER['DOCUMENT_ROOT']."/Apps/".$values2."/".$values;
$tempfile = $_SERVER['DOCUMENT_ROOT']."/Apps/temporary/temp-".$values.".php";





if ( !file_exists($_SERVER['DOCUMENT_ROOT']."/Apps/temporary/temp-".$values.".php") ) {

fopen($_SERVER['DOCUMENT_ROOT']."/Apps/temporary/temp-".$values.".php", "w");
$file_handle = fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$value."/index.php", "r"); 
$file_handle1 = fopen($tempfile, "rw+");
chmod($tempfile,0777);
}
else{
    
  
   $file = $_SERVER['DOCUMENT_ROOT']."/user_template/".$value."/index.php";
$newfile = $_SERVER['DOCUMENT_ROOT']."/Apps/temporary/temp-".$values.".php";

copy($file, $newfile);



}





$file_handle2 = fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$value."/index.php", "r"); 
$file_handle3 = fopen($tempfile, "rw+");
chmod($tempfile,0777);  

$src = $_SERVER['DOCUMENT_ROOT']."/user_template/".$value;
//$dst = $_SERVER['DOCUMENT_ROOT']."/mobileview/uid-".$sessionid;
$dst1 = $_SERVER['DOCUMENT_ROOT']."/Apps/".$values2."/".$values;

$files = glob($_SERVER['DOCUMENT_ROOT']."/user_template/".$value."/*.*");
      foreach($files as $file){
        
       if($file != $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$value.'/index.php'){
      
       if((file_exists($file))){
          
      $file_to_go1 = str_replace($src,$dst1,$file);
      copy($file, $file_to_go1);
      chmod($file_to_go1,0777);
      }
      }
      }
      
while (!feof($file_handle2)) 
{
fwrite($file_handle3,fgets($file_handle2));
}

//$fileContents = file_get_contents($tempfile);
//
////Output to new file
//$fh = fopen($_SERVER['DOCUMENT_ROOT']."/Apps/".$values2."/".$values."/index.php", 'w+');
//
//fputs($fh,$fileContents);
//fclose($fh);


$t2=file_get_contents($tempfile);
$t2 = str_replace("!--PHP","?php",$t2);
$t2 = str_replace("!--SFPScript","script",$t2);
$t2 = str_replace("PHP--","?",$t2);
$t2 = str_replace("SFPScript--","script",$t2);
$t2 = str_replace("<!--SFPhide","",$t2);
$t2 = str_replace("SFPhide-->","",$t2);
$t2 = str_replace("SFP_BOOT","col",$t2);
$t2 = str_replace("SFP_ROW","row",$t2);
file_put_contents($tempfile,$t2);
if(!(is_dir($userfolder."/upload"))){
     mkdir($userfolder."/upload",0777,true);
}
chmod($userfolder."/upload", 0777);

    /*foreach (glob($userfolder."/*.php") as $search) {
    $contents = file_get_contents($search);
    if($search != $userfolder."index.php"){
    if (!strpos($contents, "SFP_Redirect/")) continue;
   
    //str_replace("SFP_Redirect/","mobileview/",$contents);
   $file_contents = str_replace("SFP_Redirect/",$userfilename,$contents);
    file_put_contents($search,$file_contents); 
    
} 
} */

  foreach (glob($userfolder."/*.php") as $search) {
    $contents = file_get_contents($search);
    
     
    
    if($search != $userfolder."/index.php"){
        if (!strpos($contents, "SFP_index")) continue;
       
        str_replace("SFP_Redirect/","//".$_SERVER['SERVER_NAME']."/",$contents);
        str_replace("SFP_TimelinePost/","http://".$_SERVER['SERVER_NAME']."/",$contents);
        str_replace("SFP_Link/","/Apps/".$values2."/".$values."/",$contents);
        $file_contents = str_replace("SFP_index",$getindex,$contents);
        
        file_put_contents($search,$file_contents); 
    } 
} 

$scope = explode(",",$sql['check_fbtag']);

$a1 = array('0','1');
$scope1 = array_diff($scope,$a1);
$var = "";
foreach($scope1 as $scopes)
{

  $var .=  $scopes.","; 
 
}

foreach (glob($userfolder."/*.php") as $search) {
    $contents = file_get_contents($search);
    
     
   if($search != $userfolder."/index.php"){ 
    
    $contents = str_replace("!--PHP","?php",$contents);
     $contents = str_replace("//PHP"," ",$contents);
    $contents = str_replace("!--SFPScript","script",$contents);
    $contents = str_replace("PHP--","?",$contents);
    $contents = str_replace("SFPScript--","script",$contents);
    $contents = str_replace("SFPScript*/","",$contents);
    $read = "include_once('/var/www/staging/public/sfpApi.php');";
    $contents = str_replace("/*PHP DBCONNECT PHP*/",$read,$contents);
    
    
    
                        
   $contents = str_replace("SFPUPLOAD",$_SERVER['DOCUMENT_ROOT']."/Apps/".$values2."/".$values,$contents);
   $contents =  str_replace("SFP_Redirect/","//".$_SERVER['SERVER_NAME']."/",$contents); 
   $contents =  str_replace("SFP_TimelinePost/","http://".$_SERVER['SERVER_NAME']."/",$contents);
   $contents = str_replace("SFP_Link/","/Apps/".$values2."/".$values."/",$contents);
   $contents = str_replace("!--SFPScript","script",$contents);
   $contents = str_replace("SFPScript--","script",$contents);
    $contents=str_replace("/*SFPScript"," ",$contents);
  $contents=str_replace("SFPScript*/"," ",$contents);
  $contents=str_replace('SFPFBSCOPE',$var,$contents);
  $contents=str_replace("SFPAPPID",$sql['appid'],$contents);
  $contents=str_replace("SFPAPPSECRET",$sql['appsecret'],$contents);
  $contents=str_replace("SFPTIMELINETEXT",$sql['timelinetext'],$contents);
  $contents = str_replace("<!--SFPhide","",$contents);
  $contents = str_replace("SFPhide-->","",$contents);
  $contents = str_replace("SFP_BOOT","col",$contents);
   $contents = str_replace("SFP_ROW","row",$contents);
  
   
    file_put_contents($search,$contents); 
  }  
  
} 

 $str=file_get_contents($tempfile);

 $str=str_replace("SFP_Redirect/","//".$_SERVER['SERVER_NAME']."/",$str);
 $str =  str_replace("SFP_TimelinePost/","http://".$_SERVER['SERVER_NAME']."/",$str);
 $str = str_replace("SFP_Link/","/Apps/".$values2."/".$values."/",$str);
  $str=str_replace("SFP_index",$getindex,$str);
 $str=str_replace("SFPUPLOAD",$_SERVER['DOCUMENT_ROOT']."/Apps/".$values2."/".$values,$str);
 $str = str_replace("//PHP"," ",$str);
 $str=str_replace('SFPFBSCOPE',$var,$str);
 $str=str_replace("SFPAPPID",$sql['appid'],$str);
 $str=str_replace("SFPAPPSECRET",$sql['appsecret'],$str);
 $str=str_replace("SFPTIMELINETEXT",$sql['timelinetext'],$str);
 $str = str_replace("<!--SFPhide","",$str);
 $str = str_replace("SFPhide-->","",$str);
  $str = str_replace("SFP_BOOT","col",$str);
  $str = str_replace("SFP_ROW","row",$str);
 if (strpos($str, "SFPTWO_EDITFORM"))
  {
    $str = str_replace("<!--SFPPAGE-->",$form,$str);
    $count = 0;
    $lines = file($tempfile);
    // Loop through our array, show HTML source as HTML source; and line numbers too.
    foreach ($lines as $line_num => $line) {
        
        if(strpos($line,"<form") !== FALSE)
        {
            $actionStr = strstr($line,'.php',true);
            $actionName = substr($actionStr,(strpos($actionStr,'action="')+8));
            
                                    
         }
    }
  }
  file_put_contents($tempfile, $str);
 

include $tempfile;
 $pathfolder = $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$value;
    $pathfolder1 = $_SERVER['DOCUMENT_ROOT']."/Apps/".$values2."/".$values;
chmod($pathfolder, 0777);
chmod($pathfolder1, 0777);

    foreach (glob($pathfolder."/*.php") as $searches) {
  if($searches != $userfolder."/index.php"){ 
    chmod($searches,0777);
     $contents = file_get_contents($searches);
   // if (!strpos($contents, "SFP_Redirect/")) continue;
   
   $file_contents = str_replace("SFP_Redirect/","//".$_SERVER['SERVER_NAME']."/",$contents);
   $file_contents = str_replace("SFP_TimelinePost/","http://".$_SERVER['SERVER_NAME']."/",$contents);
   $file_contents = str_replace("SFP_Link/","/Apps/".$values2."/".$values."/",$contents); 
    
   $file_contents = str_replace('SFPAPPID',$sql['appid'],$contents);
   $file_contents = str_replace('SFPAPPSECRET',$sql['appsecret'],$contents);
   $file_content = str_replace('SFPFBSCOPE',$var,$file_contents);
    $file_content=str_replace("SFPTIMELINETEXT",$sql['timelinetext'],$file_content);
    file_put_contents($searches,$file_content); 
  }  
} 
 foreach (glob($pathfolder1."/*.php") as $searches1) {
    
    $contents = file_get_contents($searches1);
   
    
   if($searches1 != $userfolder."/index.php"){
    chmod($searches1,0777);
   // if (!strpos($contents, "SFP_Redirect/")) continue;
   
     $file_contents = str_replace("SFP_Redirect/","//".$_SERVER['SERVER_NAME']."/",$contents);
     $file_contents = str_replace("SFP_TimelinePost/","http://".$_SERVER['SERVER_NAME']."/",$contents);
     $file_contents = str_replace("SFP_Link/","/Apps/".$values2."/".$values."/",$contents);
    
    
   $file_contents = str_replace('SFPAPPID',$sql['appid'],$contents);
   $file_contents = str_replace('SFPAPPSECRET',$sql['appsecret'],$contents);
   $file_content = str_replace('SFPFBSCOPE',$var,$file_contents);
    $file_content=str_replace("SFPTIMELINETEXT",$sql['timelinetext'],$file_content);
   
   
   
    file_put_contents($searches,$file_content); 
   } 
} 

?>
