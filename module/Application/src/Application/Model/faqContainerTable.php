<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class faqContainerTable
{
protected $tableGateWay;

public function __construct(TableGateway $tableGateway)
{
	$this->tableGWay = $tableGateway;
}

public function getResult($id)
{
   
    $id = (int) $id;
    $faqContainerset = $this->tableGWay->select(array('referenceId' => $id));
    
    
    //$row = $faqContainerset->current();  
    //return $row;
   $arr=array();
        foreach($faqContainerset as $resultt){
              $arr[]=array( 
             "id"=>$resultt->id,
               "question"=>$resultt->question,
               "answer"=>$resultt->answer,
               "referenceId"=>$resultt->referenceId,
                );
                }
             return $arr;
   
}
             
public function insertfaqContainer($question,$answer,$referenceId) 
{
    
 
    if($question !="")
    {
        $data = array(  
        'question'=>$question,
        'answer'=>$answer,
        'referenceId'=>$referenceId,
        ); 
        return $this->tableGWay->insert($data);
    }
    else
    {
        return 0;
    }

}
        
public function updatefaqContainer($data,$id) 
{
    return $this->tableGWay->update($data,array('id'=>$id));     
}
              
public function deletefaqContainer($id)
{
    return  $this->tableGWay->delete(array('id' => (int)$id));
}
       
  
         
public function fetchfaqContainer($id)
{
$id = (int) $id;
$faqContainerset = $this->tableGWay->select(array('id' => $id));
$row = $faqContainerset->current();  
return $row;


    
               

}
public function getsearchresult($id)
{
   
    $id = (int) $id;
    $faqContainerset = $this->tableGWay->select(array('id' => $id));
    
    
    $row = $faqContainerset->current();  
    return $row;
   
}
  
public function searchingques($dev)
{
        
         $result=$this->tableGWay->select(new \Zend\Db\Sql\Predicate\Like('question', '%'.$dev.'%'));
                  
         return $result;
}
public function searchingans($dev)
{
        
         $result=$this->tableGWay->select(new \Zend\Db\Sql\Predicate\Like('answer', '%'.$dev.'%'));
         return $result;
}
}
?>