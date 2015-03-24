<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class becomepublisherbannerTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
 public function fetchAll($id){
      $id = (int) $id;
      
     $rowset = $this->tableGWay->select(array('id' => $id));
  /**
 *   print_r ($rowset);
 *     exit;
 */
     return ($rowset->count() !== 0) ? $rowset->current() : false;
      /*  $resultSet = $this->tableGWay->select(array('bannerid' => $bannerid));
        $row = $resultSet->current();
       // print_r($row);exit;
        return $row;*/
    }
    //public function getbecomepublisherbannerTable($id) 
//    {
//        $id = (int) $id;
//        
//        $rowset = $this->tableGWay->select(array('id' => $id));
//        $row = $rowset->current();
//        
//        return $row;
//        
//        }
//     
        

        public function savebecomepublisherbanner($id,$data) 
	   {
	       //echo $imageurl;exit;
	  //print_r($data);exit;
      return $this->tableGWay->update($data,array('id'=>$id));
   //echo $ret;exit;
      //return $ret;
            
          
        }
       //$this->tableGWay->update($data,array('id'=>$id));
       
     
      
           
}        

?>