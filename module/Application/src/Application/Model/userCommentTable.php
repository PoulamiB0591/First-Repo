<?php
//added by Arnab

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Predicate;

class userCommentTable {
    
    protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
    public function insertcom($data)
    {  
     $this->tableGWay->insert($data);
     $id = $this->tableGWay->lastInsertValue;
     return $id;  
    }
    
    public function selectcomment($tempid) {
     
       $rowset = $this->tableGWay->select(array('tempid'=>$tempid)); 
       return $rowset;  
    }
    
    public function updatecom($data,$uid,$tempid)
    {
      $rowset = $this->tableGWay->update($data,array('id'=>$uid,'tempid'=>$tempid)); 
       return $rowset;   
    }
}

?>