<?php
namespace Application\Model;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class indexusPageTable
{
	protected $tableGateWay;
	
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGWay = $tableGateway;
    }
    
    public function fetchPageDetails($newpagename) {
        
        $rowset = $this->tableGWay->select(array('pageName' => $newpagename));
        $row = $rowset->current();
        
        if(!$row)
        {
            throw new \Exception("Row not found");
        }
        
       return $row;
       
    }

 
} 
?>