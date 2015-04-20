<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class transactionDetailsTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
	
	public function saveDetails($data)
	{
		$uid = $data['userId'];
		$trsxId = $data['trsxId'];
		
		$resultSet = $this->tableGWay->select(array('userId' => $uid, 'trsxId'=>$trsxId));
		if($resultSet->count() == 1)
		{
			$rowset = 0;
		}
		else
		{
			$rowset = $this->tableGWay->insert($data);
		}
		
		return $rowset;
		
	}
	
	public function getStatus($uid,$trsxId)
	{
		$resultSet = $this->tableGWay->select(array('userId' => $uid, 'trsxId'=>$trsxId));
		if($resultSet->count() != 1)
		{
			$rowset = 0;
		}
		else
		{
			$rowset = $resultSet->current();
		}
	
		return $rowset;
	
	}
    
    
 
 } 
 ?>  