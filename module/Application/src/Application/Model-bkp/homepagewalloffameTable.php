<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class homepagewalloffameTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
   public function getResult($pid)
   {
     $pid = (int) $pid;
        
        $homepagewalloffameset = $this->tableGWay->select(array('pid' => $pid));
         $row =    $homepagewalloffameset->current();  
        return $row;
        
      
        }
    
   
        
        public function inserthomepagewalloffame($tempurl,$pname,$description,$temp) 
        {
            
       /**
 *  
 * 	   
 *           
 *         
 */
            $original=explode('/',$tempurl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/upload/".$temp;
           
          if($temp !="")
          {
	   $data = array(  
            'piclink'=>$tempurl,
             'pname'=>$pname,
	   		'description'=>$description
 	); 
    return $this->tableGWay->insert($data);
        }
        else
        {
            return 0;
        }
        
        }
        
        
        

	public function updatehomepagewalloffame($data,$pid) 
   {

   
           return $this->tableGWay->update($data,array('pid'=>$pid)); 
            
            
   }
        
        
        
        
        
        public function deletehomepagewalloffame($pid)
    {
      return  $this->tableGWay->delete(array('pid' => (int)$pid));
    }
    
 
    
    
  /*  public function fetchhomepageslidertableImages(){
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
    */
    
    

 public function fetchAll(){
        $resultSet = $this->tableGWay->select();
        return $resultSet;
    }
 
}
?>