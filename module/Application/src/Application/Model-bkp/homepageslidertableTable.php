<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class homepageslidertableTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
   public function getResult($id)
   {
     $id = (int) $id;
        
        $homepageslidertableset = $this->tableGWay->select(array('id' => $id));
         $row = $homepageslidertableset->current();  
        return $row;
        
      
        }
    
   
        
        public function inserthomepageslidertable($temp,$tempurl,$Title,$imageLink) 
        {
            
            
            $original=explode('/',$tempurl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$temp;
           
          if($temp !="")
          {
	   $data = array(  
           'Title'=>$Title,
           'imageLink'=>$imageLink,
         
           'ImagePath'=>$imageurl
		); 
        
    return $this->tableGWay->insert($data);
        }
        else
        {
            return 0;
        }
        
        }
        
	public function updatehomepageslidertable($data,$id) 
   {
           return $this->tableGWay->update($data,array('id'=>$id));     
   }
        
        
        
        
        
        public function deletehomepageslidertable($id)
    {
      return  $this->tableGWay->delete(array('id' => (int)$id));
    }
    
 
    
    
    public function fetchhomepageslidertableImages(){
          $slideno = (int) $slideno;
        
        $rowset = $this->tableGWay->select(array('id' => $slideno));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array( 
             "ImagePath"=>$rset-> slideImagePath,
            
            );
        }
     return $arr;

    
   } 
    
    
    

 public function fetchAll(){
        $resultSet = $this->tableGWay->select();
        return $resultSet;
    }
 
}
?>