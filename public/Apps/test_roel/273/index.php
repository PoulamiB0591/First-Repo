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
$values2 = str_replace(' ', '_', $values2);

$con = mysql_connect("localhost","phpmyadmin","Testing1@") or die("cant connect");
$db = mysql_select_db("sfp_staging", $con) or die ("not selected");

$sql1 = mysql_fetch_assoc(mysql_query("select * from  `userTemplate` where `campaign_number`='".$values."' and `new_template_name` = '".$values2."'")) ;
$value = $sql1['template_link'];
$sql = mysql_fetch_assoc(mysql_query("select * from  `userTemplate` where `template_link`='".$value."'")) ;


//echo("select * from  `userTemplate` where `campaign_number`='".$values."' and `new_template_name` = '".$values2."'");
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
//echo $sessionid;
//mkdir( $_SERVER['DOCUMENT_ROOT']."/mobileview/uid-".$sessionid,0777,true);
//chmod($_SERVER['DOCUMENT_ROOT']."/mobileview/uid-".$sessionid, 0777);
fopen($_SERVER['DOCUMENT_ROOT']."/Apps/temporary/temp-".$values.".php", "w");



//$userfilename ="uid-".$sessionid."/";
$userfolder = $_SERVER['DOCUMENT_ROOT']."/Apps/".$values2."/".$values;

$tempfile = $_SERVER['DOCUMENT_ROOT']."/Apps/temporary/temp-".$values.".php";
$file_handle = fopen($_SERVER['DOCUMENT_ROOT']."/user_template/".$value."/index.php", "r"); 
$file_handle1 = fopen($tempfile, "rw+");
chmod($tempfile,0777);
$src = $_SERVER['DOCUMENT_ROOT']."/user_template/".$value;
//$dst = $_SERVER['DOCUMENT_ROOT']."/mobileview/uid-".$sessionid;
$dst1 = $_SERVER['DOCUMENT_ROOT']."/Apps/".$values2."/".$values;

$files = glob($_SERVER['DOCUMENT_ROOT']."/user_template/".$value."/*.*");
      foreach($files as $file){
        //print_r($files);
       if($file != $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$value.'/index.php'){
      
       if((file_exists($file))){
          
      //$file_to_go = str_replace($src,$dst,$file);
      $file_to_go1 = str_replace($src,$dst1,$file);
      //copy($file, $file_to_go);
      copy($file, $file_to_go1);
      //chmod($file_to_go,0777);
       chmod($file_to_go1,0777);
      }
      }
      }
while (!feof($file_handle)) 
{
fwrite($file_handle1,fgets($file_handle));
}
$t2=file_get_contents($tempfile);
$t2 = str_replace("?php","?php",$t2);
$t2 = str_replace("script","script",$t2);
$t2 = str_replace("?","?",$t2);
$t2 = str_replace("script","script",$t2);
$t2 = str_replace("","",$t2);
$t2 = str_replace("","",$t2);
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
    if($search != $userfolder."index.php"){
    if (!strpos($contents, "/Apps/test_roel/273/index.php")) continue;
   
    str_replace("SFP_Redirect/","https://".$_SERVER['SERVER_NAME']."/",$contents);
   $file_contents = str_replace("/Apps/test_roel/273/index.php",$getindex,$contents);
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
    $contents = str_replace("?php","?php",$contents);
     $contents = str_replace(" "," ",$contents);
    $contents = str_replace("script","script",$contents);
    $contents = str_replace("?","?",$contents);
   $contents = str_replace("script","script",$contents);
   $contents = str_replace("","",$contents);
   $read = "include_once('/var/www/staging/public/sfpApi.php');";
    $contents = str_replace("include_once('/var/www/staging/public/sfpApi.php');",$read,$contents);
    
    
    
                        
   $contents = str_replace("/var/www/staging/public/Apps/test_roel/273",$_SERVER['DOCUMENT_ROOT']."/Apps/".$values2."/".$values,$contents);
    str_replace("SFP_Redirect/","https://".$_SERVER['SERVER_NAME']."/",$contents); 
   $contents = str_replace("script","script",$contents);
    $contents=str_replace(" "," ",$contents);
  $contents=str_replace(""," ",$contents);
  $contents=str_replace('email,',$var,$contents);
  $contents=str_replace("502186369918571",$sql['appid'],$contents);
  $contents=str_replace("3fbe6e056b8348f713346374c0c08295",$sql['appsecret'],$contents);
  $contents = str_replace("","",$contents);
  $contents = str_replace("","",$contents);
    file_put_contents($search,$contents); 
    
 
} 

 $str=file_get_contents($tempfile);

 $str=str_replace("SFP_Redirect/","https://".$_SERVER['SERVER_NAME']."/",$str);
  $str=str_replace("/Apps/test_roel/273/index.php",$getindex,$str);
 $str=str_replace("/var/www/staging/public/Apps/test_roel/273",$_SERVER['DOCUMENT_ROOT']."/Apps/".$values2."/".$values,$str);
 $str = str_replace(" "," ",$str);
 $str=str_replace('email,',$var,$str);
 $str=str_replace("502186369918571",$sql['appid'],$str);
 $str=str_replace("3fbe6e056b8348f713346374c0c08295",$sql['appsecret'],$str);
 $str = str_replace("","",$str);
 $str = str_replace("","",$str);
  file_put_contents($tempfile, $str);
 
include $tempfile;
 $pathfolder = $_SERVER['DOCUMENT_ROOT'].'/user_template/'.$value;
    $pathfolder1 = $_SERVER['DOCUMENT_ROOT']."/Apps/".$values2."/".$values;
chmod($pathfolder, 0777);
chmod($pathfolder1, 0777);

    foreach (glob($pathfolder."/*.php") as $searches) {
   
    chmod($searches,0777);
     $contents = file_get_contents($searches);
   // if (!strpos($contents, "SFP_Redirect/")) continue;
   
    str_replace("SFP_Redirect/","https://".$_SERVER['SERVER_NAME']."/",$contents);
    
    
   $file_contents = str_replace('502186369918571',$sql['appid'],$contents);
   $file_contents = str_replace('3fbe6e056b8348f713346374c0c08295',$sql['appsecret'],$contents);
   $file_content = str_replace('email,',$sql['check_fbtag'],$file_contents);
    file_put_contents($searches,$file_content); 
    
} 
 foreach (glob($pathfolder1."/*.php") as $searches1) {
   
    chmod($searches1,0777);
     $contents = file_get_contents($searches1);
   // if (!strpos($contents, "SFP_Redirect/")) continue;
   
    str_replace("SFP_Redirect/","https://".$_SERVER['SERVER_NAME']."/",$contents);
    
    
   $file_contents = str_replace('502186369918571',$sql['appid'],$contents);
   $file_contents = str_replace('3fbe6e056b8348f713346374c0c08295',$sql['appsecret'],$contents);
   $file_content = str_replace('email,',$sql['check_fbtag'],$file_contents);
    file_put_contents($searches,$file_content); 
    
} 

?>