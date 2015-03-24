<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class templateimagesTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
   public function getResult($imgid)
   {
     $imgid = (int) $imgid;
     
        $templateimagesset = $this->tableGWay->select(array('imgid' => $imgid));
         $row = $templateimagesset->current();  
 
        return $row;
        
      
        }
    
   
        
        public function inserttemplateimages($temp,$tempurl,$tempHeader,$tempSubHeader,$tempDescription) 
        {
            
            
            $original=explode('/',$tempurl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$temp;
          
          
	   $data = array(  
           'imgHeader'=>$tempHeader,
           'imgSubHeader'=>$tempSubHeader,
           'imgDescription'=>$tempDescription,
          
            'imgPath'=>$imageurl
		); 
      
        
        
          return $this->tableGWay->insert($data); 
           
            
            
            
        }
        
	public function updatetemplateimages($data,$id) 
   {
           return $this->tableGWay->update($data,array('imgid'=>$id));     
   }
        
        
        
        
        
        public function deletetemplateimages($imgid)
    {
      return  $this->tableGWay->delete(array('imgid' => (int)$imgid));
    }
    
 
    
    
    public function fetchtemplateimagesImages(){
          $imgid = (int) $imgid;
        
        $rowset = $this->tableGWay->select(array('imgid' => $imgid));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array( 
             "imgPath"=>$rset-> imgPath,
            
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