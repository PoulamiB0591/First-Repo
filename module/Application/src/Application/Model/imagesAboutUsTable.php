<?php

/**
* @author
* @copyright 2014
*/
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class imagesAboutUsTable
{
    protected $tableGateWay;
    
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGWay = $tableGateway;
    }
    
    public function getResult($id)
    {
        $id = (int) $id;
        $imagesAboutUsset = $this->tableGWay->select(array('id' =>$id));
        $row = $imagesAboutUsset->current();
        return $row;
    }
    
    public function insertimagesAboutUs($data)
    {
    	//print_r($data);exit;
        
        if($data[imagePath] !="")
        {
            return $this->tableGWay->insert($data);
        }
        else
        {
            return 0;
        }
    }
    
    public function updateimagesAboutUs($data,$id)
    {
        return $this->tableGWay->update($data,array('id'=>$id));
    }
    
    public function deleteimagesAboutUs($id)
    {
        return  $this->tableGWay->delete(array('id' =>(int)$id));
    }
    
    public function fetchimagesAboutUsImages()
    {
        $id = (int) $id;
        $rowset = $this->tableGWay->select(array('id' =>$id));
        $arr=array();
        foreach($rowset as $rset)
        {
            $arr[]=array(
            "imagePath"=>$rset->imagePath,
            "imageName"=>$rset->imageName,
            "imageDescription"=>$rset->imageDescription,
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
?>