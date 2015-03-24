<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class promoteTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
 
       
    public function insertpromote($data)
    {
        $resultSet = $this->tableGWay->insert($data);
        return $resultSet;
    }
    
    public function selectpromote($devId,$tempId)
    {
      $result = $this->tableGWay->select(array('devId'=>$devId,'tempId'=>$tempId));
      return $result->current();
    }
      
    public function updatepromote($data,$devId,$tempId)
    {
       return $this->tableGWay->update($data,array('devId'=>$devId,'tempId'=>$tempId)); 
    }  
    
    public function saveImage($data,$devId,$tempId)
    {
    	
    	  return $this->tableGWay->update($data,array('devId'=>$devId,'tempId'=>$tempId)); 
    	
    
    }
    
    public function saveImagebnr($data,$devId,$tempId)
    {
    	 
    	return $this->tableGWay->update($data,array('devId'=>$devId,'tempId'=>$tempId));
    	 
    
    }
    
    public function saveImagetxt($data,$devId,$tempId)
    {
    	 
    	return $this->tableGWay->update($data,array('devId'=>$devId,'tempId'=>$tempId));
    	 
    
    }
    

}
?>