<?php

$url = $_SERVER['REQUEST_URI'];

$urlParts = explode("/",$url);

$fbNo = $urlParts[3];
$camFolder = $urlParts[2];

//echo $values." &&&& ".$values2; 
$con = mysql_connect("localhost","phpmyadmin","Testing1@") or die("cant connect");
$db = mysql_select_db("sfp_staging", $con) or die ("not selected");


$sql1 = mysql_fetch_assoc(mysql_query("select * from  `userTemplate` where `facebook_number`='".$fbNo."'")) ;

$formId = $sql1['formUniqueName'];



$elements = array();
$values = array();


if(isset($_POST['submit']))
{
    $sqlForm = mysql_query("SELECT * FROM `formreport` WHERE `form_uniqid`='".$formId."'");
   while($arrForm = mysql_fetch_assoc($sqlForm))
   {
       $elements[] = $arrForm['form_element_name'];
       if (array_key_exists($arrForm['form_element_name'], $_POST)) {
           $values[] = $_POST[$arrForm['form_element_name']];
            $delete = mysql_query("DELETE FROM `formreport` WHERE `form_uniqid`='".$formId."' AND `count`=0");
        }
   }
  
   //print_r($values); echo "<br />"; print_r($elements);exit;
   $sqlFetch = mysql_query("SELECT * FROM `formreport` WHERE `publisher_id`='".$sql['id']."' AND `form_uniqid`='".$formId."' ORDER BY `id` DESC LIMIT 0,1");
    $fetch = mysql_fetch_assoc($sqlFetch);
        $num = mysql_num_rows($sqlFetch);
        
    $count = $fetch['count']+1;
    
   for($i=0;$i<sizeOf($elements);$i++)
   {
    
        if(is_array($values[$i]))
        {
            $checkVal = "";
            for($j=0;$j<sizeof($values[$i]);$j++)
            {
                $checkVal .= $values[$i][$j].",";
            }
            
            $checkVal = substr($checkVal,0,-1);
            
            $sqlInsert = mysql_query("INSERT INTO `formreport`(`publisher_id`, `form_uniqid`, `form_element_name`, `form_element_values`,`count`) VALUES ('".$sql1['id']."','".$formId."','".$elements[$i]."','".$checkVal."','".$count."')");
        }
        else
        {
             $sqlInsert = mysql_query("INSERT INTO `formreport`(`publisher_id`, `form_uniqid`, `form_element_name`, `form_element_values`,`count`) VALUES ('".$sql1['id']."','".$formId."','".$elements[$i]."','".$values[$i]."','".$count."')");
        }
    }
}
?>