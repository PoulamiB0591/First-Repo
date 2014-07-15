<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class becomepublisherbannerTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
   public function getResult($bannerId)
   {
     $bannerId = (int) $bannerId;
        
        $becomepublisherset = $this->tableGWay->select(array('bannerId' => $bannerId));
         $row = $becomepublisherbannerset->current();  
        return $row;
        
      
        }
    
   
        
        public function insertbecomepublisherbanner($temp,$tempurl,$tempHeader,$tempfilloneheader,$tempfilloneDescription,$tempfilltwoheader,$tempfilltwodescription) 
        {
            
            
            $original=explode('/',$tempurl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$temp;
          
          if($temp !="")
          {
	   $data = array(  
           'bannerHeader'=>$tempHeader,
            'bannerPath'=>$imageurl,
			'filFormOneHeader'=>$tempfilloneheader,
			'filFormOneDescription'=>$tempfilloneDescription,
			'filFormTwoHeader'=>$tempfilltwoheader,
            'filFormTwoDescription' =>$tempfilltwodescription,			
		); 
      
        
        return $this->tableGWay->insert($data);
        }
        else
        {
            return 0;
        }
        
        }
        
	public function updatebecomepublisherbanner($data,$id) 
   {
           return $this->tableGWay->update($data,array('bannerId'=>$id));     
   }
        
        
        
        
        
        public function deletebecomepublisherbanner($bannerId)
    {
      return  $this->tableGWay->delete(array('bannerId' => (int)$bannerId));
    }
    
 
    
    
    public function fetchbecomepublisherImages(){
          $bannerId = (int) $bannerId;
        
        $rowset = $this->tableGWay->select(array('bannerId' => $bannerId));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array( 
             "bannerPath"=>$rset-> bannerPath,
            
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