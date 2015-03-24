<?php
$con = mysql_connect("localhost","phpmyadmin","Testing1@") or die("cant connect");
$db = mysql_select_db("sfp_staging", $con) or die ("not selected");

$arrName = array();
        for($i=0;$i<sizeof($_POST['fId']);$i++)
        {
            $pageContent = file_get_contents('https://graph.facebook.com/'.$_POST['fId'][$i].'?access_token=1505052056407910|0e28a426dc5f7e532fa6caa490b4d4ca');
            $parsedJson  = json_decode($pageContent);
            $pName = $parsedJson->name;
            $pId = $parsedJson->id;
            
            $arrName[$i] = $pName;
            
            $sql_Ins = mysql_query("INSERT INTO `epic_inv_friends` (`uId`,`appId`,`invited`) VALUES ('".$pId."','1505052056407910','".$pName."',)");
            
            echo $sql_Ins;
            
        }
       // print_r(json_encode($arrName));?>