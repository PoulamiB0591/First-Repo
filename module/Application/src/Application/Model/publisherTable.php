<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class publisherTable
{
	protected $tableGateWay;
	
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGWay = $tableGateway;
    }
       
   public function updateDetails($email,$pass,$fname,$lname)
   {
       $data = array(
           'password' => $pass,
           'fname' => $fname,
           'lname' => $lname,
           'regTime'=>date('y-m-d h:i:s'),
           'sfpuser'=>'1'
       );
    return $this->tableGWay->update($data,array('email'=>$email));
   }
   
   public function saveAll($email,$pass,$fname,$lname)
   {
       $data = array(
           'email' => $email,
           'password' => $pass,
           'fname' => $fname,
           'lname' => $lname,
           'regTime'=>date('y-m-d h:i:s'),
           'sfpuser'=>'1'
       );
    return $this->tableGWay->insert($data);
   }
   public function saveHomeUser($email,$pass,$name)
   {
       $data = array(
           'email' => $email,
           'password' => $pass,
           'fname' => $name,
           
           'regTime'=>date('y-m-d h:i:s'),
           'sfpuser'=>'1'
       );
    return $this->tableGWay->insert($data);
   }
   
   	public function saveUser($data) //insert facebook data 
	{
	
      $rowset = $this->tableGWay->insert($data);
    
       //$arr=array();
//        foreach($rowset as $rset){ 
//            $arr[]=array(
//            "id" =>$rset->id,
//            "fbId"=>$rset->fbId,            
//            "fbName"=>$rset->fbName,
//            "fbLastName"=>$rset->fbLastName,  
//            "email"=>$rset->email,                
//            "loginTime"=>$rset->loginTime,
//            "fbuser" => 1,
//            
//            );
//        }
//           $id = $this->tableGWay->lastInsertValue;
//           $arr['lastinsertid']=$id;
      $id = $this->tableGWay->lastInsertValue;
            return $id; 
      
               
	}
    
      public function selectUser($fbId) //For show details for a particuler fb id
 {
        $rowset = $this->tableGWay->select(array('fbId' => $fbId));        
         
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "id"=>$rset->id,
            "fbId"=>$rset->fbId,            
            "fbName"=>$rset->fbName,
            "fbLastName"=>$rset->fbLastName,
          //  "hometown"=>$rset->hometown,                        
            "email"=>$rset->fbemail,
            "loginTime"=>$rset->loginTime,
            "regTime"=>$rset->regTime,
            "fbuser" => $rset->fbuser
            );
        }
     
            return $arr;  
     
 }
 
 
    public function selectUser1($id) //For show details for a particuler fb id
 {
        
        $rowset = $this->tableGWay->select(array('id' => $id));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "id"=>$rset->id,
            "fbId"=>$rset->fbId,            
            "fbName"=>$rset->fbName,
            "fbLastName"=>$rset->fbLastName,
            "hometown"=>$rset->hometown,                        
            "fbemail"=>$rset->fbemail,
            "loginTime"=>$rset->loginTime,
             "fname"=>$rset->fname,
             "lname"=>$rset->lname,        
            "regTime"=>$rset->regTime,
            "rating"=>$rset->rating,
            "fbuser" => $rset->fbuser,
            "sfpuser" => $rset->sfpuser
            
            );
        }
   
   
            return $arr;  
     
 }
 
 
 
 public function updateUser($data,$fbId)
{
 $resultSet = $this->tableGWay->update($data,array('fbId' => $fbId));  
 return  $resultSet;
}


 public function updateUseremail($data,$email)
{
 $resultSet = $this->tableGWay->update($data,array('email' => $email));  
 return  $resultSet;
}


 public function updateUserNew($data,$uId)
{
 $resultSet = $this->tableGWay->update($data,array('fbId' => $uId));
 
 $rowset = $this->tableGWay->select(array('id' => $uId)); 
   
   $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "success" => "1",
            "id"=>$rset->id, 
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
   

   public function selectEmail($email)
   {
   $rowset = $this->tableGWay->select(array('email' =>$email));        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "id"=>$rset->id,
            "fbId"=>$rset->fbId,            
            "fbName"=>$rset->fbName,
            "fbLastName"=>$rset->fbLastName,                        
            "email"=>$rset->email,
            "loginTime"=>$rset->loginTime,
            "regTime"=>$rset->regTime,
            "password" =>$rset->password,
            "fbuser" => $rset->fbuser
            );
        }
   return $arr;  
   }
   public function selectpass($pass)
   {
    $res = $this->tableGWay->select(array('password'=>$pass));
    return $res->current();
   }
   
     public function selectemailuser($eId) //For show details for a particuler fb id
 {
        
        $rowset = $this->tableGWay->select(array('email' =>$eId));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "id"=>$rset->id,
            "fbId"=>$rset->fbId,            
            "fbName"=>$rset->fbName,
            "fbLastName"=>$rset->fbLastName,
           // "hometown"=>$rset->hometown,                        
            "email"=>$rset->fbemail,
            "loginTime"=>$rset->loginTime,
            "regTime"=>$rset->regTime,
            "password" =>$rset->password,
            "fbuser" => $rset->fbuser
            );
        }
   
     
            return $arr;  
     
 } 
 
    public function selectUseremail($eId,$pass) //For show details for a particuler fb id
 {
        
        $rowset = $this->tableGWay->select(array('email' =>$eId,'password'=>$pass));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "id"=>$rset->id,
            "fbId"=>$rset->fbId,            
            "fbName"=>$rset->fbName,
            "fbLastName"=>$rset->fbLastName,
           //"hometown"=>$rset->hometown,                        
            "email"=>$rset->fbemail,
            "loginTime"=>$rset->loginTime,
            "regTime"=>$rset->regTime,
            "fbuser" => $rset->fbuser
            
            );
        }
   
     
            return $arr;  
     
 }
   public function updatepassword($pass,$email)
   {
     $data = array(
    'email' => $email,
    'password' => $pass
    );
   
    $res = $this->tableGWay->update($data,array('email'=>$email));
    return $res;
   }
 
    public function emailUpdate($fname,$lname,$email,$pass)
   {
     $data = array(
    'fname'=>$fname,
    'lname'=>$lname,
     'password' => $pass,
    'regTime'=>date('y-m-d h:i:s')
    );
    
   
    $res = $this->tableGWay->update($data,array('email'=>$email));
    print_r($res);exit;
    return $res;
   }
 
     public function emailUpdateFb($fbId,$fbName,$fbLastName,$email)
   {
     $data = array(
     "fbId"=>$rset->fbId,            
     "fbName"=>$rset->fbName,
     "fbLastName"=>$rset->fbLastName,
     //"hometown"=>$rset->hometown,                        
     "email"=>$rset->fbemail,
     "fbuser" =>1,
     'loginTime'=>date('y-m-d h:i:s')
    );
    
   
    $res = $this->tableGWay->update($data,array('email'=>$email));
    print_r($res);exit;
    return $res;
   }
 
 
   public function selectdata($email,$pass)
   {
    $res = $this->tableGWay->select(array('email'=>$email,'password'=>$pass));
    return $res->current();
   }
   
    public function selectpassnow($email)
   {
       $result=$this->tableGWay->select(array('email'=>$email));
         return $result;
     
   }
   
   public function chkLogin($id)
   {
   	$result=$this->tableGWay->select(array('id'=>$id));
   	
   	foreach($result as $res)
   	{
   		$user = $res->fbuser;
   	}
   	
   	return $user; 
   	 
   }
   
 
} 
       
?>