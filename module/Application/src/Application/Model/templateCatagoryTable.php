<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;

class templateCatagoryTable
{
    
protected $tableGateWay;

public function __construct(TableGateway $tableGateway)
{
    $this->tableGWay = $tableGateway;
}

public function getResult($id)
{
    $id = (int) $id;
    $termset = $this->tableGWay->select(array('id' => $id));
    $row = $termset->current();  
    return $row;
}

public function inserttemplateCatagory($templateCatagory,$array_time,$array_date)
{

    $data = array(  
    //'header'=>$Header,
    
    		'catagory'=>$templateCatagory,
    		'date'=>$array_date,
    		'time'=>$array_time,
    );
    return $this->tableGWay->insert($data);
}

public function updatetemplateCatagory($templateCatagory,$array_time,$array_date,$id) 
{
    $data = array(  
    'catagory'=>$templateCatagory,
    		'date'=>$array_date,
    		'time'=>$array_time,
    );
    return $this->tableGWay->update($data,array('id'=>$id));
}

public function deletetemplateCatagory($id)
{
    return  $this->tableGWay->delete(array('id' => (int)$id));
}

public function fetchAll()
{
    $resultSet = $this->tableGWay->select();
    return $resultSet;
}

}
?>