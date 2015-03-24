<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class blogdetailssTable
{
protected $tableGateway;

public function __construct(TableGateway $tableGateway)
{
$this->tableGWay = $tableGateway;
}
public function insertblog($data) 
{
print_r($data);
return $this->tableGWay->insert($data);     
}

public function saveUserdet($data) //insert data
{
$rowset = $this->tableGWay->insert($data);
return $rowset;
}

public function getdetails($id)
{
$linkCreator = $id;
$rowset = $this->tableGWay->select(array('pageid' => $linkCreator));  
$arr=array(); 
foreach($rowset as $row)
    {
        $arr[] = array(
        'name' => $row->name, 
        'email'=>$row->email,
        'message'=>$row->message,
        'date'=>$row->date,
        'time'=>$row->time,
        'image'=>$row->image,
        );
    }
return $arr;
}

public function fetchAll()
{
    $resultSet = $this->tableGWay->select();
    return $resultSet;
}
}