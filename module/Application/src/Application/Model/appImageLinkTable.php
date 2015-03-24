<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class appImageLinkTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
  
    public function selectAll(){
        $resultSet = $this->tableGWay->select();        
        return $resultSet;
    }
    public function deleteappimage($imageID)
    {
      return  $this->tableGWay->delete(array('linkID' => (int)$imageID));
    }
    
     public function getResult($pid)
     {
     $pid = (int) $pid;
        
        $appimageset = $this->tableGWay->select(array('linkID' => $pid));
         $row =$appimageset->current();  
         return $row;        
      }
      
      
   public function updateappimage($data,$id) 
   {
      return $this->tableGWay->update($data,array('linkID'=>$id));          
       
   }
          
public function insertappImageLink($tempurl,$picNewName) 
        {
        $data = array(  
            'imageLink'=>$tempurl,
             'imagePath'=>$picNewName
                );
    return $this->tableGWay->insert($data);
       
        
        }
}
?>