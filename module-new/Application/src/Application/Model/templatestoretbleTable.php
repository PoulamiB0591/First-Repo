<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class templatestoretbleTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
 public function fetchAll($id){
        $resultSet = $this->tableGWay->select(array('id' => $id));
        $row = $resultSet->current();
       // print_r($row);exit;
        return $row;
    }
    public function gettemplatestoretble($id) 
    {
        $id = (int) $id;
        
        $rowset = $this->tableGWay->select(array('id' => $id));
        $row = $rowset->current();
        
        return $row;
        
        }
     
        

        public function savetemplatestoretble($id,$cms) 
	   {
	  
       return $this->tableGWay->update($cms, array('id' => $id));
            
          
        }
       //$this->tableGWay->update($data,array('id'=>$id));
      
           
}        
//        public function getResult($id)
//   {
//     $id = (int) $id;
//        
//        $profileset = $this->tableGWay->select(array('id' => $id));        
//        
//        $arr=array();
//        foreach($profileset as $pset){
//            $arr[]=array(
//            
//            "id"=>$pset->id,
//           
//            "pname"=>$pset->pname,
//            "plink"=>$pset->plink,
//          
//            );
//             return $arr;
//        }
//        }
//         public function updatecms($temp,$tempurl) {
//            
//            
//             $original=explode('/',$tempurl,-2);
//            $URI = IMPLODE("/",$original);
//            $imageurl = $URI."/files/".$temp;
//             
//	   $data = array(
//               
//            'pname'=>$temp,
//            'plink'=>$imageurl
//		); 
//        $id='1';
//           return $this->tableGWay->update($data,$id);
//            
//            
//            
//            
//        }
        
            
// public function selectProfile($id)
// {
//  $id = (int) $id;
//        
//        $rowset = $this->tableGWay->select(array('id' => $id));        
//        
//        $arr=array();
//        foreach($rowset as $pset){
//            $arr[]=array(
//            
//            "pname"=>$pset->pname
//            );
//        }
//   
//     
//            return $arr;  
//     
// }
// 
// 
//    
//
//    
// /*public function fetchAll($pid){
//        
//        $resultSet = $this->tableGWay->select(array('pid' => $pid));
//        
//         $arr=array();
//        foreach($resultSet as $pset){
//            $arr[]=array(
//            
//            "pname"=>$pset->pname
//            );
//        }
//          
//$arr = (object) $photo;
//return $photo;
//    }*/
//    
//public function fetchProfile($id)
//{
//    $resultSet = $this->tableGWay->select(array('id' => $id)); 
//   
//    return $resultSet;
//}    
// public function get($id)
//    {
//        $id  = (int) $id;
//        $rowset = $this->tableGateway->select();
//        $row = $rowset->current();
//        if (!$row) {
//            throw new \Exception("Could not find row $id");
//        }
//        return $row;
//    }
//
// 
//}
//        
//    
//	
//        
//    
//
//
?>