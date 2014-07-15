<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class becomepublisherTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
   public function getResult($picId)
   {
     $picId = (int) $picId;
        
        $becomepublisherset = $this->tableGWay->select(array('picId' => $picId));
         $row = $becomepublisherset->current();  
        return $row;
        
      
        }
        public function insertbecomepublisher($temp,$tempurl,$tempHeader,$tempDescription) 
        {
            
            
            $original=explode('/',$tempurl,-2);
            $URI = IMPLODE("/",$original);
            $furl = $URI."/upload/".$temp;
           
          if($temp !="")
          {
          
	   $data = array(  
           'picHeader'=>$tempHeader,
          
           'picDescription'=>$tempDescription,
           
            'picPath'=>$furl
		); 
       // print_r($data);exit;
        return $this->tableGWay->insert($data);
        }
        else
        {
            return 0;
        }
        
        }
        
	public function updatebecomepublisher($data,$id) 
   {
           return $this->tableGWay->update($data,array('picId'=>$id));     
   }
   
        public function deletebecomepublisher($picId)
    {
      return  $this->tableGWay->delete(array('picId' => (int)$picId));
    }
   public function fetchbecomepublisherImages(){
          $picId = (int) $picId;
        
        $rowset = $this->tableGWay->select(array('picId' => $picId));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array( 
             "picPath"=>$rset-> picPath,
            
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