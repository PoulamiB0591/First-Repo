<?php
include "encryption.php";
$con = mysql_connect("localhost","looqi_1","Testing1@") or die("cant connect");
$db = mysql_select_db("looqi_1", $con) or die ("not selected");

if(isset($_POST['param']) && $_POST['param'] == 'CHECK')
{
    if(isset($_POST['appId']))
    {
        $sql = mysql_query("SELECT * FROM `invfriends` WHERE `invited`='".$_POST['pName']."'");
        $num = mysql_num_rows($sql);
        $arr = mysql_fetch_assoc($sql);
        if($num > 0)
        {
            if($arr['status'] == '111')
            {
                $pImg = mc_encrypt($_POST['pImg'], ENCRYPTION_KEY);
                $pName = mc_encrypt($_POST['pName'], ENCRYPTION_KEY);
                
                setcookie('pName',$pName);
                setcookie('pId',$_POST['pId']);
                setcookie('pImg',$pImg);
                echo "1";
            }
            else
            {
                if($arr['status'] == '101')
                {
                    echo "2";
                }  
                else
                {
                    
                }              
            }
            
        }
        else        
        {
            echo "0";
        }
    }
}

if(isset($_POST['param']) && $_POST['param'] == 'SINV')         
{
    $sql = mysql_query("SELECT * FROM `invfriends` WHERE `invited`='".$_POST['uId']."'");
    $arr = mysql_fetch_assoc($sql);
    
    if($arr['status'] == '000')
    {
        $sqlIns = mysql_query("UPDATE `invfriends` SET `status`='010' WHERE `pId`='".$_POST['uId']."'");
        if(mysql_affected_rows())
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
    }
    else
    {
        echo "2";
    }  
}

if(isset($_POST['param']) && $_POST['param'] == 'UIDs')
{
    $array = array();
    $array = $_POST['data'];
        
    for($i=0;$i<sizeof($array);$i++)
    {
        $pageContent = file_get_contents('https://graph.facebook.com/'.$array[$i].'?access_token=1505052056407910|95ca8ce5d39322457490177ce9e640a8');
        $parsedJson  = json_decode($pageContent);
        $pName = $parsedJson->name;
        
        $sql = mysql_query("SELECT * FROM `invfriends` WHERE `invited`='".$pName."' AND `status`='101'");
        $num = mysql_num_rows($sql);
        if($num > 0)
        {
            //echo $num;
            echo "2";
        }
        else
        {
            $sqlIns = mysql_query("INSERT INTO `invfriends` (`invited`,`appId`,`status`,`tempFoldId`) VALUES('".$pName."','1505052056407910','101','435')");
            if(mysql_affected_rows())
            {
                echo "1";
            }
            else
            {
                echo "0";
            }
        }
    }
}

if(isset($_POST['param']) && $_POST['param'] == 'uName')
{
    $sql = mysql_query("SELECT * FROM `invfriends` WHERE `invited`='".$_POST['data']."' AND `status`='101'");
    $num = mysql_num_rows($sql);
    if($num > 0)
    {
        //echo $num;
        echo "2";
    }
    else
    {
        $sqlIns = mysql_query("INSERT INTO `invfriends` (`invited`,`appId`,`status`,`tempFoldId`) VALUES('".$_POST['data']."','1505052056407910','101','435')");
        if(mysql_affected_rows())
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
    }
}

/*if(isset($_POST['param']) && $_POST['param'] == 'eRequest')
{
    $pageContent = file_get_contents('https://graph.facebook.com/'.$_POST['data']);
    $parsedJson  = json_decode($pageContent);
    $pName = $parsedJson->name; 
    
    $sql = mysql_query("SELECT * FROM `epic_participate_stat` WHERE `pId`='".$_POST['data']."'");
    $num = mysql_num_rows($sql);
    $arr = mysql_fetch_assoc($sql);
    //echo $num;
    if($num == 0)
    {           
       $sqlIns = mysql_query("INSERT INTO `epic_participate_stat` (`pId`,`pName`,`status`) VALUES('".$_POST['data']."','".$pName."','101')");
        if(mysql_affected_rows())
        {
            $sqlInvIns = mysql_query("INSERT INTO `epic_inv_friends` (`uId`,`invited`) VALUES('".$_POST['data']."','".$pName."')");
            if(mysql_affected_rows())
            {
                echo "1";
            }
        }
        else
        {
            echo "0";
        }
    }
    else
    {
        if($arr['status'] == '000')
        {
            $sqlIns = mysql_query("UPDATE `epic_participate_stat` SET `status`='101' WHERE `pId`='".$_POST['data']."'");
            if(mysql_affected_rows())
            {
                $sqlInvIns = mysql_query("INSERT INTO `epic_inv_friends` (`uId`,`appId`,`invited`) VALUES('".$_POST['data']."','1505052056407910','".$pName."')");
                if(mysql_affected_rows())
                {
                    echo "1";
                }
            }
            else
            {
                echo "0";
            }
        }
        else
        {
            echo "2";
        }
    }
}*/

if(isset($_POST['param']) && $_POST['param'] == 'names')
{
    for($i=0;$i<sizeof($_POST['argument']);$i++)
    {
        $pageContent = file_get_contents('https://graph.facebook.com/'.$_POST['argument'][$i].'?access_token=1505052056407910|0e28a426dc5f7e532fa6caa490b4d4ca');
        $parsedJson  = json_decode($pageContent);
        $pName = $parsedJson->name;
        
        echo $pName;
    }
   
}



?>