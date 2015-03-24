<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Predicate;

class accessCodeTable
{
	protected $tableGateWay;
    
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
	
  

    public function selectaccesCode($accCode)
    {
    	
    	$rowset = $this->tableGWay->select(array('accCode' =>$accCode));
    	$arr=array();
    	foreach($rowset as $rset){
    		$arr[]=array(
    				"id"=>$rset->id,
    				"accCode"=>$rset->accCode
    		);
    	}
    	
    	return $arr;
    }

  

}
?>