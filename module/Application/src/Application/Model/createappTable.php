<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class createappTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
  
	
	public function saveUser($data) //insert data
	{
	
      $rowset = $this->tableGWay->insert($data);
      /* $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            
            "devId"=>$rset->fbId,            
            "date"=>$rset->date,
          
            
            );
        }
   
     
            return $arr; */
            return $rowset;
      
               
	}
    
  
 
 
 
  public function selectUser($fbId) //For show details for a particuler fb id
 {
        
        $rowset = $this->tableGWay->select(array('devId' => $fbId));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            
            "devId"=>$rset->devId,            
            "date"=>$rset->date,
            "email"=>$rset->email,
            "appid"=>$rset->appid
            
            );
        }
   
     
            return $arr;  
     
 }
 
  public function fetchAppId($id,$authId) //For verification of appId 
  {
    $resultSet = $this->tableGWay->select(array('devId' => $id,'appid' => $authId)); 
    
     $row = $resultSet->current();
        
     if($row)
     {
        return 1;
     }
     else
     {
        return 0;
     }
  } 
 
 
 public function deleteUser($uId) //delete user
 {
   $result = $this->tableGWay->delete(array('devId' => (int)$uId));
   return $result;
 }
   

}
?>