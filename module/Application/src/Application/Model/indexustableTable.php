<?php
//added by arnab
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Predicate;

class indexustableTable {
    
    	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
     public function getTableWithPagename($pagename) {
        //echo $pagename;exit;
        $array = array();
        $rowset = $this->tableGWay->select(array('pagename' => $pagename));
        //$row = $rowset->current();
        //print_r($rowset);exit;
        for($i=0;$i<$rowset.length-3;$i++) {
            $array[$i] = $rowset->a.$i+1;
        }
        print_r($array);exit;
        if(!$rowset)
        {
            throw new \Exception("Row not found");
        }
        
        return $array;
     } 
}
?>