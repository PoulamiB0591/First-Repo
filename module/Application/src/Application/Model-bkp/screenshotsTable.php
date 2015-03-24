<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class screenshotsTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
    public function insertscreenshot($data)
    {
        $resultSet = $this->tableGWay->insert($data);
        $id =  $this->tableGWay->lastInsertValue;
        return $id;
    }
    
    public function selectscreen($tempId)
    {
      $result = $this->tableGWay->select(array('tempId'=>$tempId));
      return $result->current();
    }
    
      public function updatescreenshot($data,$tempid)
    {
        return $this->tableGWay->update($data,array('tempId'=>$tempid)); 
      
    }
    
      public function updatescreen($data,$sid)
    {
        return $this->tableGWay->update($data,array('id'=>$sid)); 
      
    }
    
     public function selectAllscreen($tempId)
    {
      $result = $this->tableGWay->select(array('tempId'=>$tempId));
      return $result;
    }
    
    public function selectscreenshot($sid)
    {
     $result = $this->tableGWay->select(array('id'=>$sid));
      return $result->current();   
    }
    
    public function deletescreenshot($sid)
    {
     $result = $this->tableGWay->delete(array('id'=>$sid));
      return $result;   
    }
}
?>