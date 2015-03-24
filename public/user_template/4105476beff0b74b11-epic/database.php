<?php

/*PHP DBCONNECT PHP*/
include "encryption.php";
$sfp = new SmartfanPage();
if(isset($_POST['param']) && $_POST['param'] == 'CHECK')
{
    if(isset($_POST['appId']))
    {
        //$sql = mysql_query("SELECT * FROM `invfriends` WHERE `invited`='".$_POST['pName']."'");
         $select = 'id,appId,tempName,invited,status,tempFoldId';
    $data = array(
      array( 'selected'=>'invited',
                   'value'=>$_POST['pName'],
    
    )
    );
    
     $dataselect =  array(
			'appId' => '1505052056407910',
            'table' => 'invfriends',
            'field'=>$select,
            'value' => $data
            
            );
  $results =  $sfp->select_table($dataselect);
      
   $num = $sfp->select_num_rows($dataselect) ; 

        if($num > 0)
        {
            foreach($results as $array)
            {
                
                echo $array;
                
                /*if($array['status'] == '111')
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
                    if($array['status'] == '101')
                    {
                        echo "2";
                    }  
                    else
                    {
                        
                    }              
                }*/
                
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
    //$sql = mysql_query("SELECT * FROM `invfriends` WHERE `invited`='".$_POST['uId']."'");
     $select = 'id,appId,tempName,invited,status,tempFoldId';
    $data = array(
      array( 'selected'=>'invited',
                   'value'=>$_POST['uId']
    
    )
    );
    
     $dataselect2 =  array(
			'appId' => '1505052056407910',
            'table' => 'invfriends',
            'field'=>$select,
            'value' => $data
            
            );
  $arr =  $sfp->select_table($dataselect2);
        
    
    //$arr = mysql_fetch_assoc($sql);
    
    if($arr['status'] == '000')
    {
        //$sqlIns = mysql_query("UPDATE `invfriends` SET `status`='010' WHERE `pId`='".$_POST['uId']."'");
         $data = 
    array(
    
    array(
     array('field'=>'status',
            'value'=>'010'),
            )
     );
    
 $datainsert =  array(
			'appId' => '1505052056407910',
            'table' => 'invfriends',
            'field' => $data
            
            );
      

$sfp->insert_table($datainsert);

        
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
        
        //$sql = mysql_query("SELECT * FROM `invfriends` WHERE `invited`='".$pName."' AND `status`='101'");
        $select = 'id,appId,tempName,invited,status,tempFoldId';
    $data = array(
      array( 'selected'=>'invited',
                   'value'=>$pName
    
    ),
      array( 'selected'=>'status',
                   'value'=>'101'
    
    )
    
    );
    
     $dataselect =  array(
			'appId' => '1505052056407910',
            'table' => 'invfriends',
            'field'=>$select,
            'value' => $data
            
            );
  $sql =  $sfp->select_table($dataselect);

        
        $num = mysql_num_rows($sql);
        if($num > 0)
        {
            //echo $num;
            echo "2";
        }
        else
        {
            //$sqlIns = mysql_query("INSERT INTO `invfriends` (`invited`,`appId`,`status`,`tempFoldId`) VALUES('".$pName."','1505052056407910','101','435')");
             $data = 
    array(
    
    array(
     array('field'=>'invited',
            'value'=>$pName),
            array('field'=>'appId',
            'value'=>'1505052056407910'),
            array('field'=>'status',
            'value'=>'101'),
             array('field'=>'tempFoldId',
            'value'=>'435')
            )
     );

  
   
    
 $datainsert =  array(
			'appId' => '1505052056407910',
            'table' => 'invfriends',
            'field' => $data
            
            );
      

$sfp->insert_table($datainsert);
            
            
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
    //$sql = mysql_query("SELECT * FROM `invfriends` WHERE `invited`='".$_POST['data']."' AND `status`='101'");
    $select = 'id,appId,tempName,invited,status,tempFoldId';
    $data = array(
      array( 'selected'=>'invited',
                   'value'=>$_POST['data']),
                   
      array( 'selected'=>'status',
                   'value'=>'101'
    
    )
    
    );
    
     $dataselect =  array(
			'appId' => '1505052056407910',
            'table' => 'invfriends',
            'field'=>$select,
            'value' => $data
            
            );
  $sql =  $sfp->select_table($dataselect);
        
    
    
    $num = mysql_num_rows($sql);
    if($num > 0)
    {
        //echo $num;
        echo "2";
    }
    else
    {
        //$sqlIns = mysql_query("INSERT INTO `invfriends` (`invited`,`appId`,`status`,`tempFoldId`) VALUES('".$_POST['data']."','1505052056407910','101','435')");
         $data = 
    array(
    
    array(
     array('field'=>'invited',
            'value'=>$_POST['data']),
            array('field'=>'appId',
            'value'=>'1505052056407910'),
            array('field'=>'status',
            'value'=>'101'),
             array('field'=>'tempFoldId',
            'value'=>'435')
            )
     );

  
   
    
 $datainsert =  array(
			'appId' => '1505052056407910',
            'table' => 'invfriends',
            'field' => $data
            
            );
      

$sfp->insert_table($datainsert);
                    
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