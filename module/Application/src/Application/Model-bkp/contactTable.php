<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class contactTable
{
	protected $tableGateWay;
	
    public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
    public function getResult($id)
    {
     $id = (int) $id; 
     $contactset = $this->tableGWay->select(array('id' => $id));
     $row = $contactset->current();  
     return $row;
    }
    
    public function insertcontact($subject,$message,$name,$phone,$email,$date,$time) 
    {
        
            $data = array(  
            'subject'=>$subject,
            'message'=>$message,
            'name'=>$name,
            'phone'=>$phone,
            'email'=> $email,
            'date'=> $date,
            'time'=>$time,
            ); 
            return $this->tableGWay->insert($data);
        

    }
        
/*public function updatebecomepublisherstudio($data,$id) 
{
    return $this->tableGWay->update($data,array('id'=>$id));     
}
              
public function deletebecomepublisherstudio($id)
{
    return  $this->tableGWay->delete(array('id' => (int)$id));
}
       
public function deletebecomepublisherstudiosubimage($data,$id)
{
    return $this->tableGWay->update($data,array('id'=>$id));  
}
     
public function fetchhomepageslidertableImages()
{
    $id = (int) $id;
    $rowset = $this->tableGWay->select(array('id' => $id));        
    $arr=array();
    foreach($rowset as $rset)
    {
        $arr[]=array( 
        "mainImagePath"=>$rset->mainImagePath,
        );
    }
    return $arr;

} 
         
public function fetchAll()
{
    $resultSet = $this->tableGWay->select();
    return $resultSet;
}*/
 
}
?>