<?php

namespace Application\Model;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class animatedImageTable
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
    
    public function deleteanimage($imageID)
    {
      return  $this->tableGWay->delete(array('imageId' => (int)$imageID));
    }
    
    public function getResult($pid)
     {
     $pid = (int) $pid;
        
         $appimageset = $this->tableGWay->select(array('imageId' => $pid));
         $row =$appimageset->current();  
         return $row;        
      }
  public function updateanimateimage($data,$id) 
   {
      return $this->tableGWay->update($data,array('imageId'=>$id));        
      
   }
      
   public function insertanimatedImage($tempurl) 
        {
        $data = array(  
            
             'imagePath'=>$tempurl
 );
    return $this->tableGWay->insert($data);
       
        
        }
}
?>