<?php

/*PHP DBCONNECT PHP*/
session_start();
        $sfp = new SmartfanPage();
      // print_r($_POST);exit; 
        if(@$_POST['val'] == 1) {
        $val = 0;$qs = 0;$value = 0;
        $selected_array = array();        
        $qs = $_POST['qs'];
        $value = $_POST['value'];        
        //if ($db_found) {

     // $sql1="INSERT INTO useranswers(temp_name,a1) VALUES ('indexus','10')";//$value=10
     $data = 
      array(    
      array(
      array('field'=>'temp_name',
            'value'=>'indexus'),
            array('field'=>'a1',
            'value'=>'10'),
            
            ),  
          );

 $datainsert =  array(
			'appId' => 'lNWyBR8YOcde4H9',
            'table' => 'useranswers',
            'field' => $data
            
            ); 
$result=$sfp->insert_table($datainsert);


        //$result1 = mysql_query($sql1);
        
       //echo $result;
        
      $_SESSION['AD'] = mysql_insert_id();
      
      if($result ) {
        echo "1";
      }

    //mysql_close($db_handle);
//  }
//       else {
//
//         echo "Database NOT Found";
//         mysql_close($db_handle);
//            }

        
        }
        //*******************************************//
        
         if(@$_POST['val'] == 2) {
        $val = 0;$qs = 0;$value = 0;        
        //$qd = $_SESSION['QD'];
        $ad = $_SESSION['AD'];
        $qs = $_POST['qs'];
        $value = $_POST['value'];
        
       // if ($db_found) {
      //$sql1="UPDATE  useranswers  SET  a2=  '20' WHERE `id` = '$ad'";
      $table = 'useranswers';
        $set = array(
         array( 
          'set'=>'a2',
          'value'=>'20'
          )
          );
        $setseparator = array(''); // separated by ","
        $where = array(
         array( 
          'where'=>'id',
          'value'=>'$ad'
          )
        );
        $whereseparator = array('');// separator by 'and' or 'or'
        $dataUpdate =  array(
            'appId' => 'lNWyBR8YOcde4H9',
            'table' => $table,
            'set'=>$set,
            'where'=>$where,
            'setseparator' => $setseparator,
            'whereseparator' => $whereseparator            
            );            
$result = $sfp->UpdateData($dataUpdate);
      
    //  $result1 = mysql_query($sql1);
      if($result ) {
        echo "1";
      }
      else {
         echo "0";
      }

   // mysql_close($db_handle);
//  }
//       else {
//
//         echo "Database NOT Found";
//         mysql_close($db_handle);
//            }
//
        
        }
        
        //**************//
        
         if(@$_POST['val'] == 3) {
        $val = 0;$qs = 0;$value = 0;
        
       // $qd = $_SESSION['QD'];
        $ad = $_SESSION['AD'];
        $qs = $_POST['qs'];
        $value = $_POST['value'];
        
        //if ($db_found) {

     // $sql1="UPDATE  useranswers  SET  a3=  '30' WHERE `id` ='$ad'";
      $table = 'useranswers';
        $set = array(
         array( 
          'set'=>'a3',
          'value'=>'30'
          )
          );
        $setseparator = array(''); // separated by ","
        $where = array(
         array( 
          'where'=>'id',
          'value'=>'$ad'
          )
        );
        $whereseparator = array('');// separator by 'and' or 'or'
        $dataUpdate =  array(
            'appId' => 'lNWyBR8YOcde4H9',
            'table' => $table,
            'set'=>$set,
            'where'=>$where,
            'setseparator' => $setseparator,
            'whereseparator' => $whereseparator            
            );            
$result = $sfp->UpdateData($dataUpdate);
      //$result1 = mysql_query($sql1);
      if($result ) {
        echo "1";
      }

   // mysql_close($db_handle);
//  }
//       else {
//
//         echo "Database NOT Found";
//         mysql_close($db_handle);
//            }

        
        }
        
        //*********************************//
        
         if(@$_POST['val'] == 4) {
        $val = 0;$qs = 0;$value = 0;        
       // $qd = $_SESSION['QD'];
        $ad = $_SESSION['AD'];
        $qs = $_POST['qs'];
        $value = $_POST['value'];
        
         //if ($db_found) {

     // $sql1="UPDATE  useranswers  SET  a4=  '40' WHERE `id` ='$ad'";
      $table = 'useranswers';
        $set = array(
         array( 
          'set'=>'a4',
          'value'=>'40'
          )
          );
        $setseparator = array(''); // separated by ","
        $where = array(
         array( 
          'where'=>'id',
          'value'=>'$ad'
          )
        );
        $whereseparator = array('');// separator by 'and' or 'or'
        $dataUpdate =  array(
            'appId' => 'lNWyBR8YOcde4H9',
            'table' => $table,
            'set'=>$set,
            'where'=>$where,
            'setseparator' => $setseparator,
            'whereseparator' => $whereseparator            
            );            
$result = $sfp->UpdateData($dataUpdate);
      //$result1 = mysql_query($sql1);
      if($result ) {
        echo "1";
      }

    //mysql_close($db_handle);
//  }
//       else {
//
//         echo "Database NOT Found";
//         mysql_close($db_handle);
//            }

        
        }
        
        //***************************//
        
         if(@$_POST['val'] == 5) {
        $val = 0;$qs = 0;$value = 0;
        $selected_array = array();
        
       // $qd = $_SESSION['QD'];
        $ad = $_SESSION['AD'];
        $qs = $_POST['qs'];
        $value = $_POST['value'];
        
        //$sql1="UPDATE  useranswers  SET  a5=  '100' WHERE `id` ='$ad'";
        $table = 'useranswers';
        $set = array(
         array( 
          'set'=>'a5',
          'value'=>'100'
          )
          );
        $setseparator = array(''); // separated by ","
        $where = array(
         array( 
          'where'=>'id',
          'value'=>'$ad'
          )
        );
        $whereseparator = array('');// separator by 'and' or 'or'
        $dataUpdate =  array(
            'appId' => 'lNWyBR8YOcde4H9',
            'table' => $table,
            'set'=>$set,
            'where'=>$where,
            'setseparator' => $setseparator,
            'whereseparator' => $whereseparator            
            );            
$result = $sfp->UpdateData($dataUpdate);
      //$result1 = mysql_query($sql1);
      
      //$total = mysql_query("SELECT * FROM `useranswers` WHERE `id`='$ad'");
         $select = 'id,temp_name,a1,a2,a3,a4,a5,result1,result2,name,useremail,phoneno';
    $data = array(
      array( 'selected'=>'id',
                   'value'=>'$ad'
    
    )    
    
    );
    
     $dataselect =  array(
			'appId' => 'lNWyBR8YOcde4H9',
            'table' => 'useranswers',
            'field'=>$select,
            'value' => $data
            
            );
  $results =  $sfp->select_table($dataselect);
      
     // $selected_array=mysql_fetch_array($total);
      
      $sum = $selected_array['a1']+$selected_array['a2']+$selected_array['a3']+$selected_array['a4']+$selected_array['a5']; 
      $sql2 ="UPDATE  useranswers  SET  result2=  '$sum' WHERE `id` ='$ad'";
      $table = 'useranswers';
        $set = array(
         array( 
          'set'=>'result2',
          'value'=>'$sum'
          )
          );
        $setseparator = array(''); // separated by ","
        $where = array(
         array( 
          'where'=>'id',
          'value'=>'$ad'
          )
        );
        $whereseparator = array('');// separator by 'and' or 'or'
        $dataUpdate =  array(
            'appId' => 'lNWyBR8YOcde4H9',
            'table' => $table,
            'set'=>$set,
            'where'=>$where,
            'setseparator' => $setseparator,
            'whereseparator' => $whereseparator            
            );            
$result = $sfp->UpdateData($dataUpdate);
      //$result2 = mysql_query($sql2);
   echo "1";
        
        }
        
        //********************************************//
        
        
        if(@$_POST['result'] == "123") {
            $ad = @$_SESSION['AD'];
               $total = 0;
               //$total = mysql_query("SELECT * FROM `useranswers` WHERE `id`='$ad'");
                $select = 'id,temp_name,a1,a2,a3,a4,a5,result1,result2,name,useremail,phoneno';
    $data = array(
      array( 'selected'=>'id',
                   'value'=>'$ad'
    
    )    
    
    );
    
     $dataselect =  array(
			'appId' => 'lNWyBR8YOcde4H9',
            'table' => 'useranswers',
            'field'=>$select,
            'value' => $data
            
            );
  $results =  $sfp->select_table($dataselect);
      // $selected_array=mysql_fetch_array($total); //session_destroy();
      //  echo $selected_array['result2'];
              
            }     
        
        
        ////*************************************************************************/////////////////
        if(@$_POST['val'] == 6) {
            //echo "work now!!";
        $eid = 0;$uname = 0;$phno = 0;
        $selected_array = array();
        
        $ad = $_SESSION['AD'];
        $uname = $_POST['uname'];
        $phno = $_POST['phno'];
        $eid = $_POST['eid'];
       // if ($db_found) {
//echo "UPDATE  useranswers  SET  name=  '$uname',useremail=  '$eid',phoneno=  '$phno' WHERE `id` ='$ad'";
     // $sql1="UPDATE  useranswers  SET  name=  '$uname',useremail=  '$eid',phoneno=  '$phno' WHERE `id` ='$ad'";
      $table = 'useranswers';
        $set = array(
         array( 
          'set'=>'name',
          'value'=>'$uname'
          ),array( 
          'set'=>'useremail',
          'value'=>'$eid'
          ),
          array( 
          'set'=>'phoneno',
          'value'=>'$phno'
          )
          );
        $setseparator = array(''); // separated by ","
        $where = array(
         array( 
          'where'=>'id',
          'value'=>'$ad'
          )
        );
        $whereseparator = array('');// separator by 'and' or 'or'
        $dataUpdate =  array(
            'appId' => 'lNWyBR8YOcde4H9',
            'table' => $table,
            'set'=>$set,
            'where'=>$where,
            'setseparator' => $setseparator,
            'whereseparator' => $whereseparator            
            );            
$result = $sfp->UpdateData($dataUpdate);
      //$result1 = mysql_query($sql1);
      
     // echo $result1;
      
      if($result) {
        echo "1";
        unset($_SESSION['AD']);
        
      }
      else {
        echo "0";
      }

    //mysql_close($db_handle);
//  }
//       else {
//
//         echo "Database NOT Found";
//         mysql_close($db_handle);
//            }

        
        }
        
        ///////////******************************************//////////////////////////
        
        
        
?>