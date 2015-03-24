<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class ImageTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
  
	
	public function saveImage($path,$pathThumb,$uid) 
	{
	       $data = array(
           'userid' => $uid,
            'path'=> $path,
            'pathThumb'=>$pathThumb
		);
    
                $this->tableGWay->insert($data);
                $id = $this->tableGWay->lastInsertValue;
                return $id;                              
	}
    
  
     public function selectImage($id,$compareField)
 {
        $rowset = $this->tableGWay->select(array($compareField => $id));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            "id"=>$rset->id,            
            "path"=>$rset->path,
            "pathThumb"=>$rset->pathThumb
            );
        }
    return $arr;  
     
 }
 
 
 
 public function deleteImage($id)
 {
   $img = $this->tableGWay->delete(array('id' => (int)$id));
   return $img;
 }
   

}
?>