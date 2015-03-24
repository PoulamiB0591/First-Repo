<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class facebookAppsTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
   	public function selectAppId() //select appId data
	{
	
      $rowset = $this->tableGWay->select();
      
      foreach($rowset as $rset){
            $arr[]=$rset->appId;
        }
        
        return $arr;
              
	}
    
    public function selectAppSecret() //select appId data
	{
	
      $rowset = $this->tableGWay->select();
      
      foreach($rowset as $rset){
            $arr[]=$rset->appSecret;
        }
        
        return $arr;
              
	}
 } 
 ?>  