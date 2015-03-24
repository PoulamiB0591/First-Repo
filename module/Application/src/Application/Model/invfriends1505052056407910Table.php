<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class invfriends1505052056407910Table
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
  
	
	public function save($data) //insert data
	{
	   $rowsetIns = $this->tableGWay->insert($data);
             return $rowsetIns;
    }
    
 
  public function selectInv($temp) //show the list of invited person respective to a template
 {
    $res = $this->tableGWay->select(array('tempName' => $temp));  
     
    $arr=array();
    foreach($res as $rset){
        $arr[]=array(
            'invited' => $rset->invited,
            'status' => $rset->status
        );
    }
    return $arr;  
 }
 
  public function fetchDetails($tName) //For details of participants
  {
    $resultSet = $this->tableGWay->select(array('tempName'=>$tName)); 
    
     $arr=array();
        foreach($resultSet as $rset){
            $arr[]=array(
                'appId'    => $rset->appId,
                'tempName' => $rset->tempName,
                'invited'  => $rset->invited,
                'status'   => $rset->status
            );
        }
     return $arr; 
  }
  
  public function update($tName,$name,$data)
  {
    return $this->tableGWay->update($data,array('invited'=>$name,'tempName'=>$tName));
  }
 
// public function deleteUser($uId) //delete user
// {
//   $result = $this->tableGWay->delete(array('devId' => (int)$uId));
//   return $result;
// }
   

}
?>