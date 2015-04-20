<?php
namespace Application\Model;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Predicate;
use Zend\Db\Sql\Where;
use Zend\Db\Sql\Select; 

class shippingDetailsTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
    
    public function saveDetails($data) 
    {
    	return $this->tableGWay->insert($data);   
    }
    
    public function getPrice($uid,$tempName)
    {
    	$result = $this->tableGWay->select(array('userId'=>$uid,'templateName'=>$tempName));
    	$rowSet = $result->current();
    	return $rowSet;
    }
 
} 
       
?>