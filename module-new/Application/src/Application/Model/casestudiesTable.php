<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class casestudiesTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
   public function getResult($vedioId)
   {
     $vedioId = (int) $vedioId;
        
        $casestudiesset = $this->tableGWay->select(array('vedioId' => $vedioId));
         $row = $casestudiesset->current();  
        return $row;
        
      
        }
    
   
        
        public function insertcasestudies($tempHeader,$tempDescription,$imageurl) 
        {
            
            
           /* $original=explode('/',$tempurl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/files/".$temp;*/
          
          
	   $data = array(  
           'vedioHeader'=>$tempHeader,
          
           'VedioDescription'=>$tempDescription,
           
            'VedioPath'=>$imageurl
		); 
     
        if ($data['VedioPath']=='')
        {
         return 0;   
        }
        else
        {return $this->tableGWay->insert($data); }
          
           
            
            
            
        }
        
	public function updatecasestudies($data,$id) 
   {
   // print_r($id);exit;
           return $this->tableGWay->update($data,array('vedioId'=>$id));     
   }
        
        
        
        
        
        public function deletecasestudies($vedioId)
    {
      return  $this->tableGWay->delete(array('vedioId' => (int)$vedioId));
    }
    
 
    
    
    public function fetchcasestudiesImages(){
          $vedioId = (int) $vedioId;
        
        $rowset = $this->tableGWay->select(array('vedioId' => $vedioId));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array( 
             "VedioPath"=>$rset->VedioPath,
            
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