<?php
namespace Application\Model;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class aboutUsImagesTable
{
	protected $tableGateWay;
	
public function __construct(TableGateway $tableGateway)
{
    $this->tableGWay = $tableGateway;
}

public function fetchAll($id)
{
    $id = (int) $id; 
    $rowset = $this->tableGWay->select(array('id' => $id));
    return ($rowset->count() !== 0) ? $rowset->current() : false;     
}

public function saveaboutUsImages($id,$data) 
{
    return $this->tableGWay->update($data,array('id'=>$id));   
}
 
 public function details(){
        $resultSet = $this->tableGWay->select();
        
        return $resultSet;
    }
} 
       
?>