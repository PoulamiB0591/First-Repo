<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class howsworkstepstbleTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
     public function savehowsworkstepstble($cms)
	   {
        //$test=$this->tableGWay->insert($cms);
       return $this->tableGWay->insert($cms);
         //print_r($test);exit;   
          
        }
         
         
         public function fetchAll(){
        $resultSet = $this->tableGWay->select();
        return $resultSet;
    }
    public function updateheader($id,$cms) 
	   {
	  
       return $this->tableGWay->update($cms, array('id' => $id));
            
          
        }
       //$this->tableGWay->update($data,array('id'=>$id));
     public function howsworkstepstble($id)
     {
        $resultSet = $this->tableGWay->select(array('id'=>$id));
      
        return $resultSet->current();
     }
       public function deletehowsworkstepstble($id)
    {
       $this->tableGWay->delete(array('id' => (int)$id));
    }
    
      public function insertsteptble($data)
       
       {
      
      // $original=explode('/',$imageurl,-2);
//            $URI = IMPLODE("/",$original);
//            $tempurl = $URI."/upload/".$fileName;
//          if($temp !="")
//          {
//	   $data = array(  
//        'header'=> $header,
//				'Imagepath'=>$tempurl,
//                'Imagename'=>$fileName,
//                'Description'=>$Description
//          
//		); 
    return $this->tableGWay->insert($data);
       // }
//        else
//        {
//            return 0;
//        }
//        
//        }
        
     
        
     
           
}   
}     

?>