<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class homepagetableTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
 public function fetchAll($id){
        $resultSet = $this->tableGWay->select(array('id' => $id));
        $row = $resultSet->current();
       // print_r($row);exit;
        return $row;
    }
    public function gethomepagetable($id) 
    {
        $id = (int) $id;
        
        $rowset = $this->tableGWay->select(array('id' => $id));
        $row = $rowset->current();
        
        return $row;
        
        }
     
        

        public function savehomepagetable($id,$cms) 
	   {
	  
       return $this->tableGWay->update($cms, array('id' => $id));
            
          
        }
     



 
}
        
    
	
        
    


?>