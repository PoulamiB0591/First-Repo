<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class fbuserTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
  
	
	public function saveUser($data) //insert data
	{
	
      $rowset = $this->tableGWay->insert($data);
       $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "uId" =>$rset->uId,
            "fbId"=>$rset->fbId,            
            "fbName"=>$rset->fbName,
            "fbLastName"=>$rset->fbLastName,
            "hometown"=>$rset->hometown,                                    
            "loginTime"=>$rset->loginTime,
            "regTime"=>$rset->regTime,
            "fbuser" => $rset->fbuser
            
            );
        }
   
     
            return $arr; 
      
               
	}
    
  
 
 
  public function selectUser($fbId) //For show details for a particuler fb id
 {
        $rowset = $this->tableGWay->select(array('fbId' => $fbId));        
         
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "uId"=>$rset->uId,
            "fbId"=>$rset->fbId,            
            "fbName"=>$rset->fbName,
            "fbLastName"=>$rset->fbLastName,
            "hometown"=>$rset->hometown,                        
            "fbemail"=>$rset->fbemail,
            "loginTime"=>$rset->loginTime,
            "regTime"=>$rset->regTime,
            "fbuser" => $rset->fbuser
            );
        }
     
            return $arr;  
     
 }
 
   public function selectUseremail($eId,$pass) //For show details for a particuler fb id
 {
        
        $rowset = $this->tableGWay->select(array('fbemail' =>$eId,'password'=>$pass));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "uId"=>$rset->uId,
            "fbId"=>$rset->fbId,            
            "fbName"=>$rset->fbName,
            "fbLastName"=>$rset->fbLastName,
            "hometown"=>$rset->hometown,                        
            "fbemail"=>$rset->fbemail,
            "loginTime"=>$rset->loginTime,
            "regTime"=>$rset->regTime,
            "fbuser" => $rset->fbuser
            
            );
        }
   
     
            return $arr;  
     
 }
 
   public function selectemail($eId) //For show details for a particuler fb id
 {
        
        $rowset = $this->tableGWay->select(array('fbemail' =>$eId));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "uId"=>$rset->uId,
            "fbId"=>$rset->fbId,            
            "fbName"=>$rset->fbName,
            "fbLastName"=>$rset->fbLastName,
            "hometown"=>$rset->hometown,                        
            "fbemail"=>$rset->fbemail,
            "loginTime"=>$rset->loginTime,
            "regTime"=>$rset->regTime,
            "password" =>$rset->password,
            "fbuser" => $rset->fbuser
            );
        }
   
     
            return $arr;  
     
 } 
   public function selectUser1($uId) //For show details for a particuler fb id
 {
        
        $rowset = $this->tableGWay->select(array('uId' => $uId));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "uId"=>$rset->uId,
            "fbId"=>$rset->fbId,            
            "fbName"=>$rset->fbName,
            "fbLastName"=>$rset->fbLastName,
            "hometown"=>$rset->hometown,                        
            "fbemail"=>$rset->fbemail,
            "loginTime"=>$rset->loginTime,
                        
            "regTime"=>$rset->regTime,
            "rating"=>$rset->rating,
            "fbuser" => $rset->fbuser
            
            );
        }
   
     
            return $arr;  
     
 }
 

 
    
public function updateUser($data,$fbId)
{
 $resultSet = $this->tableGWay->update($data,array('uId' => $fbId));  
 return  $resultSet;
}

public function updateUserNew($data,$uId)
{
 $resultSet = $this->tableGWay->update($data,array('uId' => $uId));
 $rowset = $this->tableGWay->select(array('uId' => $uId)); 
   
   $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "success" => "1",
            "uId"=>$rset->uId, 
            );
        } 
 return  $arr;
}
 
  public function fetchAll() //For show details 
{
    $resultSet = $this->tableGWay->select(); 
    
    return $resultSet;
} 
 
 
 public function deleteUser($uId) //delete user
 {
   $result = $this->tableGWay->delete(array('uId' => (int)$uId));
   return $result;
 }
   

}
?>