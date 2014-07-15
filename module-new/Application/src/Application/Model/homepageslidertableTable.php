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
   public function getResult($slideno)
   {
     $slideno = (int) $slideno;
        
        $homepageslidertableset = $this->tableGWay->select(array('slideno' => $slideno));
         $row = $homepageslidertableset->current();  
        return $row;
        
      
        }
    
   
        
        public function inserthomepageslidertable($temp,$tempurl,$tempHeader,$tempSubHeader,$tempDescription,$tempAmount) 
        {
            
            
            $original=explode('/',$tempurl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$temp;
           
          if($temp !="")
          {
	   $data = array(  
           'slideHeader'=>$tempHeader,
           'slideSubHeader'=>$tempSubHeader,
           'slideDescription'=>$tempDescription,
           'slideAmount'=>$tempAmount,
            'slideImagePath'=>$imageurl
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
           return $this->tableGWay->update($data,array('slideno'=>$id));     
   }
        
        
        
        
        
        public function deletehomepageslidertable($slideno)
    {
      return  $this->tableGWay->delete(array('slideno' => (int)$slideno));
    }
    
 
    
    
    public function fetchhomepageslidertableImages(){
          $slideno = (int) $slideno;
        
        $rowset = $this->tableGWay->select(array('slideno' => $slideno));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array( 
             "slideImagePath"=>$rset-> slideImagePath,
            
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