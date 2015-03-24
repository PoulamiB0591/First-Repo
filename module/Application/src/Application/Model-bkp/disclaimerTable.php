<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;

class disclaimerTable
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

public function insertterms($subhead,$Description)
{
    $data = array(  
    //'header'=>$Header,
    'subheader'=>$subhead,
    'description'=>$Description,
    );
    return $this->tableGWay->insert($data);
}

public function updateterms($subhead,$Description,$id) 
{
    $data = array(  
    'subheader'=>$subhead,
    'description'=>$Description,
    );
    return $this->tableGWay->update($data,array('id'=>$id));
}

public function deleteterms($id)
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