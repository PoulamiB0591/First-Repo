<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class ratingTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
   
   public function insertrate($data)
   {
    $res = $this->tableGWay->insert($data);
    return $res;
   } 
   
   public function selectrate($tempid)
   {
    $rowset = $this->tableGWay->select(array('tempid'=>$tempid));
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(  
            "tempid"=>$rset->tempid,
            "rating"=>$rset->rating,
            "hits"=>$rset->hits
            );
        }
     return $arr;
   }
   
     public function updaterate($data,$tempid)
   {
    $temps = $this->tableGWay->update($data,array('tempid'=>$tempid));
    return $temps;
   }

}
?>