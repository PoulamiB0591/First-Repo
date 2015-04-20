<?php
namespace Application\Model;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Predicate;
use Zend\Db\Sql\Where;
use Zend\Db\Sql\Select; 

class orderIdTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
    
    public function fetchData() 
    {
    	$resultSet =  $this->tableGWay->select();
    	//$rowSet = $resultSet->current();
    	$id = $resultSet->count();
    	
    	$actualResult = $this->tableGWay->select(array('id'=>$id));
    	$rowSet = $actualResult->current();

    	return $rowSet;
    }
    
    public function saveData($data)
    {
    	$resultSet =  $this->tableGWay->insert($data);
    	return $resultSet;
    }
    
    public function fetchUserId($orderId)
    {
    	$actualResult = $this->tableGWay->select(array('value'=>$orderId));
    	$rowSet = $actualResult->current();
    
    	return $rowSet;
    }
 
} 
       
?>