<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class companyDetailsTable
{
protected $tableGateWay;

public function __construct(TableGateway $tableGateway)
{
	$this->tableGWay = $tableGateway;
}

public function getResult($id)
{
    $id = (int) $id;
    $companyDetailsset = $this->tableGWay->select(array('id' => $id));
    $row = $companyDetailsset->current();  
    return $row;
}
             
public function insertcompanyDetails($countryname) 
{
        $data = array(  
                'companyName'=>$countryname                
                ); 
        return $this->tableGWay->insert($data);
  }
        
public function updcompanyDetails($cmpname,$id) 
{
    $id = (int)$id;
    $data = array(  
                'companyName'=>$cmpname                
                ); 
    return $this->tableGWay->update($data,array('id'=>$id));     
}
              
public function deletecompanyDetails($id)
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