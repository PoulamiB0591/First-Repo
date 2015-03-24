<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class becomepublisherstudioTable
{
protected $tableGateWay;

public function __construct(TableGateway $tableGateway)
{
	$this->tableGWay = $tableGateway;
}

public function getResult($id)
{
    $id = (int) $id;
    $becomepublisherstudioset = $this->tableGWay->select(array('id' => $id));
    $row = $becomepublisherstudioset->current();  
    return $row;
}
             
public function insertbecomepublisherstudio($picNewName,$tempurl,$imageurlsub,$subHeadLine,$headLine,$tagLine,$description) 
{
    if($picNewName !="")
    {
        $data = array(  
        'headLine'=>$headLine,
        'subHeadLine'=>$subHeadLine,
        'tagLine'=>$tagLine,
        'description'=>$description,
        'mainImagePath'=> $tempurl,
        'subImagePath'=> $imageurlsub,
        ); 
        return $this->tableGWay->insert($data);
    }
    else
    {
        return 0;
    }

}
        
public function updatebecomepublisherstudio($data,$id) 
{
    return $this->tableGWay->update($data,array('id'=>$id));     
}
              
public function deletebecomepublisherstudio($id)
{
    return  $this->tableGWay->delete(array('id' => (int)$id));
}
       
public function deletebecomepublisherstudiosubimage($data,$id)
{
    return $this->tableGWay->update($data,array('id'=>$id));  
}
     
public function fetchhomepageslidertableImages()
{
    $id = (int) $id;
    $rowset = $this->tableGWay->select(array('id' => $id));        
    $arr=array();
    foreach($rowset as $rset)
    {
        $arr[]=array( 
        "mainImagePath"=>$rset->mainImagePath,
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