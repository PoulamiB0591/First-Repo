<?php
include('sfpApi.php');
$sfp = new SmartfanPage();

 $data=array(array(
         'fieldname'=>'id',
         'type'=>'int',
      'length'=>'11', 
     'primary'=>1
       ),
       array(
         'fieldname'=>'name',
         'type'=>'varchar',
      'length'=>'100' 

       ),
       array(
         'fieldname'=>'day',
         'type'=>'enum',
      'length'=>"'sun','mon','tue'"

       )
       
       
       );
     
      $datas =  array(
			'appId' => 'lNWyBR8YOcde4H9',/* generated appId which will be provided to the developer according to specific template */
            'table' => 'optinapp',/* table name which will be provided by developer to specify in which table they want to insert values */
            'data' => $data/* this field will be in array format which is previously created by developer */
            );  
  $sfp->create_table($datas);
  
  exit;
$table = 'customer';

$set = array(
   array( 
          'set'=>'name',
          'value'=>'ddsd'
          ),
     array( 
            'set'=>'title',
            'value'=>'dssdsd'
          )
);

$setseparator = array(',');
$where = array(
    array( 
          'where'=>'id',
          'value'=>'1'
          )
  

);

$whereseparator = array('');


  $dataUpdate =  array(
            'appId' => '1505052056407910',
            'table' => $table,
            'set'=>$set,
            'where'=>$where,
            'setseparator' => $setseparator,
            'whereseparator' => $whereseparator
            
            );
            
     $sfp->UpdateData($dataUpdate);
   
   
   
   
   ?>