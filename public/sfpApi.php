<?php

class BaseClass {
   function __construct() {
      $username = "phpmyadmin";
        $password = "Testing1@";
        $hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
or die("Unable to connect to MySQL");

$selected = mysql_select_db("sfp_staging",$dbhandle) 
or die("Could not select db");
   }
} 


class SmartfanPage extends BaseClass {
   function __construct() {
       parent::__construct();
      
   }

    function create_table($data)
    {  
       
      $table = $data['table'];
      $id = $data['appId'];
      $data = $data['data'];
      $templateName = $_POST['templateName'];/***** newly added ******/
      $results ="";
      foreach($data as $datum)
      {
        
        if($datum['length'] == "")
        {
            $res_length = "";
        }
        else{
            $res_length = "(".$datum['length'].")";
        }
        
       $result =  $datum['fieldname']." ".$datum['type'].$res_length;
       
       if($datum['primary'] != "1")
       {
        $results .= ",".$result;
       }
       else
       {
        $results .= $result." PRIMARY KEY";
       }
      }
      $results = $results." ,sfp_own varchar(100)";
      $this_table=$table.$id;
      $checktable = mysql_query("SHOW TABLES LIKE '$this_table'");
     $table_exists =mysql_num_rows($checktable) ;
     //echo "Create table ".$table.$id."(".$results.")"; exit;
     if($table_exists == 0)
     {
    $ret = "Create table ".$table.$id."(".$results.")";
    mysql_query($ret);
   /*** Added by Aritra ****/ $upRet = mysql_query("UPDATE `template` SET `templateTableName`='".$table.$id."' WHERE `templateName`='".$templateName."'");
   /*** Added by Aritra ****/
    
     }  
    }
   
    function insert_table($data)
    {
       $tables = $data['table'];
       $value=$data['field'];
       
       
       
       $id = $data['appId'];
       $co = count($value);
       
       $fld="";
       $val="";
       $insert="";
       for($i=0;$i<$co;$i++)
       {
        
           foreach($value[$i] as $values) 
           {
            $fld .=  ",`".$values['field']."`";
            
           }
           $fld=substr($fld,1);
           break;
           }
      for($i=0;$i<$co;$i++)
       {   
           //$fld=substr($fld,1);
           foreach($value[$i] as $values)  
           {
            $val .= ",'".$values['value']."'";
             
           }
           $val = substr($val,1);
          $insert .= ",(".$val.")";
          
          $val ="";
       }
       
      
         $insert = substr($insert,1);
      
      
    /* $fld="";
     $val="";
       foreach($value as $values)
       {
        $fld .=  ",`".$values['field']."`";
       }
       $fld=substr($fld,1);
       foreach($value as $values)
       {
        $val .= ",'".$values['value']."'";
       }
       $val = substr($val,1); */
       $rets = "Insert into `".$tables.$id."` (".$fld.") values ".$insert."";
       
        mysql_query($rets);
       
      $affectrows =  mysql_affected_rows();
      return $affectrows;
       
    }

    
    function select_table($data)
    {
        /* fetch array*/
        $res="";
        $tables = $data['table'];
        $name=$data['field'];
        $value = $data['value'];
        $result = "";
        $id = $data['appId'];
        
        $co = count($value);
        $vid = "";
        if($co > 1)
        {
        for($i=0;$i<$co;$i++)
        {
            
              $res .= " and ".$value[$i]['selected']."='".$value[$i]['value']."'"; 
            
            $result .= $res;
            $res = "";
        }
         $result = substr($result,4);
        }
        else
        {
           $result = $value[0]['selected']."='".$value[0]['value']."'"; 
        }
        
        
         $rets1 = "select ".$name." from ".$tables.$id. " where ".$result;
         
         $results = mysql_query($rets1);
       
         $arr_res = array();
         while($returns = mysql_fetch_assoc($results))
         { 
            $arr_res[] = $returns;
         }
         
         return $arr_res;
       
        
    }
    
    
    function select_num_rows($data)
    {
        /* fetch array*/
        $res="";
        $tables = $data['table'];
        $name=$data['field'];
        $value = $data['value'];
        $result = "";
        $id = $data['appId'];
        
        $co = count($value);
        $vid = "";
        if($co > 1)
        {
        for($i=0;$i<$co;$i++)
        {
            
              $res .= " and ".$value[$i]['selected']."='".$value[$i]['value']."'"; 
            
            $result .= $res;
            $res = "";
        }
         $result = substr($result,4);
        }
        else
        {
           $result = $value[0]['selected']."='".$value[0]['value']."'"; 
        }
        
        
         $rets1 = "select ".$name." from ".$tables.$id. " where ".$result;
         
         $results = mysql_query($rets1);
       
        
         $return_num_rows = mysql_num_rows($results);
      
         
         return $return_num_rows;
       
        
    }
    
    
    function select_join($data)
    {
        $table = $data['tables'];
        $field = $data['field'];
        
        $separate = $data['separator'];
        
        $value = $data['data'];
        $con1 = count($table);
        
        for($j=0;$j<$con1;$j++)
        {
         
            $tabs .= " ,".$table[$j]['table']." ".$table[$j]['alias'];
        
        }
       
        $tabs = substr($tabs,2);
        
       $con = count($value);
       
       for($i=0;$i<$con;$i++)
       {
        
        $res .= $value[$i]['selected']."='".$value[$i]['value']."' ".$separate[$i]." "; 
            
            $result .= $res;
            $res = "";
       }
       
       $res11 = "select ".$field." from ".$tabs." where ".$result;
       
       $rets12 = mysql_query($res11);
        $arr_res = array();
         while($returns = mysql_fetch_assoc($rets12))
         {
            $arr_res[] = $returns;
         }
         
         return $arr_res;
       
    }
    
    function updateData($data)
    {
       $table = $data['table'];
       $set = $data['set'];
       $where = $data['where']; 
       $id=$data['appId'];
       $setseparate = $data['setseparator'];
       $whereseparate = $data['whereseparator'];
       $setcount = count($set);
       $result = "";
       $result1 = "";
       for($i=0;$i<$setcount;$i++)
       {
            $res = $set[$i]['set']."='".$set[$i]['value']."' ".$setseparate[$i]." "; 
            
            $result .= $res;
            $res = "";
       }
       
       $wherecount = count($where);
      
       for($j=0;$j<$wherecount;$j++)
       {
        $res1 = $where[$j]['where']."='".$where[$j]['value']."' ".$whereseparate[$j]." "; 
            
            $result1 .= $res1;
            $res1 = "";
       }
       
       $updatequery = "update ".$table.$id." set ".$result." where ".$result1;
       mysql_query($updatequery);

      $affected_rows =  mysql_affected_rows();
      return $affected_rows;
        
    }
}
?>