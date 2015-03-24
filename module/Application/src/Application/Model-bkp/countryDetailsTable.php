<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class countryDetailsTable
{
protected $tableGateWay;

public function __construct(TableGateway $tableGateway)
{
	$this->tableGWay = $tableGateway;
}

public function getResult($id)
{
    $id = (int) $id;
    $countryDetailsset = $this->tableGWay->select(array('id' => $id));
    $row = $countryDetailsset->current();  
    return $row;
}
             
public function insertcountryDetails($countryName) 
{
        $data = array(  
                'countryName'=>$countryName
               
                ); 
        return $this->tableGWay->insert($data);
  }
        
public function updatecountryDetails($cmpname,$id) 
{
    $id = (int)$id;
    $data = array(  
                'countryName'=>$cmpname                
                ); 
    return $this->tableGWay->update($data,array('id'=>$id));  
}
              
public function deletecountryDetails($id)
{
    return  $this->tableGWay->delete(array('id' => (int)$id));
}
       
   
 
         
public function fetchAll()
{
    $resultSet = $this->tableGWay->select();
    return $resultSet;
}
 
}
?>