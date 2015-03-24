<?php
//added by Poulami
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Predicate;

class DeveloperTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
    public function getDeveloperWithId($id) 
    {
        $id = (int) $id;

        $rowset = $this->tableGWay->select(array('id' => $id));
        $row = $rowset->current();
        
        if(!$row)
        {
            throw new \Exception("Row not found");
        }
        
       return $row;
    }
    public function getDev($uname,$pwd)
    {
     $rowset = $this->tableGWay->select(array('uname' => $uname,'pwd'=>$pwd));
     return $rowset->current();   
    }
    
    public function getDevEmail($uname,$pwd)
    {
     $rowset = $this->tableGWay->select(array('eId' => $uname,'pwd'=>$pwd));
     return $rowset->current();   
    }
    
    public function getDeveloper($uname,$pwd) 
    {
        $rowset = $this->tableGWay->select(array('uname' => $uname,'pwd'=>$pwd));
        
        $rset = array();
        
        foreach($rowset as $rset){
            $arr['id']=$rset->id;
        }
        
        $id = $arr['id'];
        $user_session = new Container('devId');
        $user_session->devId = $id;
    
        if(0 === $rowset->count())
        {
            echo "Row not found";
        }
        else
        {
            return $rowset;
        }
        
        
    }
    public function userNames($uname)
    {
        
    $resultSet = $this->tableGWay->select(array('uname' => $uname));   
    $row = $resultSet->current();
//    foreach($resultSet as $rset)
//    {
//        $arr[]=$rset->uname;
//    }
    return $row;
    }
    public function getDeveloperWithEmail($email) 
    {
        $rowset = $this->tableGWay->select(array('eId' => $email));
        $row = $rowset->current();
        
        if(!$row)
        {
            return 0;
        }
        
       return $row;
    }
	
	public function saveDeveloper(Developer $dev) //edited by Poulami
	{
	   $data = array(
			'fName' => $dev->fName,
				'lName'=> $dev->lName,
				'eId' => $dev->eId,
				'uname'=> $dev->uname,
				'pwd'=> $dev->pwd 
		);
  
        $id = (int) $dev->id;
 
        if($id == 0)
        {
            if($this->getDeveloperWithEmail($data['eId']))
            {
                return 0;
            }
            else
            {
                $this->tableGWay->insert($data); 
                $id = $this->tableGWay->lastInsertValue;
                $user_session = new Container('devId');
                $user_session->devId = $id;
                
                return 1;
            }
               
        }
        else
        {
            if($this->getDeveloper($id))
            {
                $this->tableGWay->update($data,array('id'=>$id));
            }
            else
            {
                throw new \Exception('Developer does not exist');
            }
        }
	}
    
    public function delDeveloper($id)
    {
        $this->tableGWay->delete(array('id' => (int)$id));
    }
    
    public function fetchtemplate(){
        $resultSet = $this->tableGWay->select(array('devId' => $devId));
       $row = $rowset->current();
    }
    
    public function searchfName($dev)
    {
        
         $result=$this->tableGWay->select(new \Zend\Db\Sql\Predicate\Like('fName', '%'.$dev.'%'));
        
         return $result;
    }
    
     
    public function searchlName($dev)
    {
        
         $result=$this->tableGWay->select(new \Zend\Db\Sql\Predicate\Like('lName', '%'.$dev.'%'));
        
         return $result;
    }
     public function fetchEmail($id)
   {
        $id = (int) $id;
        
        $rowset = $this->tableGWay->select(array('id' => $id));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array( 
            "eId"=>$rset->eId,
            
            );
        }
     return $arr;

    
   } 
   
      public function fetchdetails($id)
   {
        $id = (int) $id;
        
        $rowset = $this->tableGWay->select(array('id' => $id));        
   
     return $rowset->current();

    
   }
    
    
     public function usersearch($user)
   {
    //$result = $this->tableGWay->select(new \Zend\Db\Sql\Predicate\PredicateSet(array('eId' => $user))new \Zend\Db\Sql\Predicate\PredicateSet(array('uname' => $user)));
    $result=$this->tableGWay->select(array('uname' => $user));      
     return $result->current();
   }
    
  
    
 public function fetchAll(){
        $resultSet = $this->tableGWay->select();
        return $resultSet;
    }
    public function searchdeveloper($value){
        $resultSet = $this->tableGWay->select(array('fName' => $value));
        return $resultSet;
    }
    
    
    public function insertReg1($data)
    {  
     $this->tableGWay->insert($data);
     $id = $this->tableGWay->lastInsertValue;
     return $id;
       
   
    }
    
    public function updateReg1($data,$id){
          $result = $this->tableGWay->update($data,array('id'=>$id));
          return $result;
    }
     public function selectrow($devId) //added by anima
    {
        $rowset = $this->tableGWay->select(array('id' => $devId));
        $row = $rowset->current();
        return $row;
    }

}
?>