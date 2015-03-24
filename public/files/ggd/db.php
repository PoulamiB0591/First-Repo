<?php
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
            'table' => 'student',/* table name which will be provided by developer to specify in which table they want to insert values */
            'data' => $data/* this field will be in array format which is previously created by developer */
            );  
  $sfp->create_table($datas);
  
  ?>
<!-------------------------------------------------------------------------------------------Data Insert-------------------------->
   
  <?php
    $data = 
    array(
    
    array(
     array('field'=>'id',
            'value'=>'4'),
            array('field'=>'name',
            'value'=>'aritra'),
            array('field'=>'day',
            'value'=>'sun'
            ),
            ),
            
         array(    
             array('field'=>'id',
            'value'=>'7'),
            array('field'=>'name',
            'value'=>'dsdsd'),
            array('field'=>'day',
            'value'=>'mon')
    
     )
     
     );

  
   
    
 $datainsert =  array(
			'appId' => 'lNWyBR8YOcde4H9',
            'table' => 'student',
            'field' => $data
            
            );
      

$sfp->insert_table($datainsert);

  ?>
<!--------------------------------------------------------------------------------------Data Select---------------------------------------------------------->  
  <?php  
    $select = 'id,name,day';
    $data = array(
      array( 'selected'=>'day',
                   'value'=>'sun'
    
    ),
      array( 'selected'=>'name',
                   'value'=>'aritra'
    
    )
    
    );
    
     $dataselect =  array(
			'appId' => 'lNWyBR8YOcde4H9',
            'table' => 'student',
            'field'=>$select,
            'value' => $data
            
            );
  $results =  $sfp->select_table($dataselect);

?>

<!-----------------------------------------------------------------------------------data select join ----------------------------------------------------->


<?php
$field = 'a.name,b.fName,c.templateName';

$table = array(
array(
'table' => 'developer',
'alias' => 'b',

),
array(
'table' => 'studentlNWyBR8YOcde4H9',
'alias' => 'a'
),
array(
'table' => 'template',
'alias' => 'c'
)
);




 $data = array(
      array( 'selected'=>'a.day',
                   'value'=>'sun'
    
    ),
     array( 'selected'=>'a.id',
                   'value'=>'b.id'
    
    ),
     array( 'selected'=>'b.id',
                   'value'=>'c.id'
    
    )
    
    );

$separator = array('or','and');



  $dataselect =  array(
			'appId' => 'lNWyBR8YOcde4H9',
            'tables' => $table,
            'field'=>$field,
           
            'data'=>$data,
            'separator' => $separator
            
            );

 $selects = $sfp->select_join($dataselect);
 echo "<pre/>";
 print_r($selects);
?>