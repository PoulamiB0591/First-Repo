<?php
namespace Application\Model;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;

class blogoverviewTable
{
protected $tableGateWay;
	
public function __construct(TableGateway $tableGateway)
{
	$this->tableGWay = $tableGateway;
}

public function getResult($id)
{
$id = (int) $id;
$blogoverviewset = $this->tableGWay->select(array('id' => $id));
$row = $blogoverviewset->current();  
return $row;
}

public function insertblogoverview($question,$answer,$month,$year,$days,$date,$timeofinsert,$linkCreator,$tagInsert,$metaTitle,$metaKeyword,$metaDescription,$imagePath) 
{
    if($question !="")
    {
        $data = array('question'=>$question,
                      'answer'=>$answer,
                      'month'=>$month,
                      'year'=>$year,
                      'days'=>$days,
                      'date'=>$date,
                      'timeofinsert'=>$timeofinsert,
                      'linkCreator'=>$linkCreator,
                      'tagInsert'=>$tagInsert,
                      'metaTitle'=>$metaTitle,
                      'metaKeyword'=>$metaKeyword,
                      'metaDescription'=>$metaDescription,
        			  'imagePath'=>$imagePath,
        		); 
        return $this->tableGWay->insert($data);
    }
    else
    {
        return 0;
    }

}

public function blogLinkCreatorLinks()
{
 
    $resultSet = $this->tableGWay->select();   
    $arr=array();
    foreach($resultSet as $rset)
    {
        $arr[]=$rset->linkCreator;
    }
    return $arr;
}        
public function updateblogoverview($data,$id) 
{
       return $this->tableGWay->insert($data);     
}
   
public function deleteblogoverview($id)
{
    return  $this->tableGWay->delete(array('id' => (int)$id));
}
public function getdetails($id) 
{
    $rowset = $this->tableGWay->select(array('id' => $id));
    $row = $rowset->current();
    
    if(!$row)
    {
        return 0;
    }
    
    return $row;
}
public function fetchblogoverviewquestions()
{
    $id = (int) $id;
    $rowset = $this->tableGWay->select(array('id' => $id));        
    $arr=array();
    foreach($rowset as $rset)
    {
        $arr[]=array( "question"=>$rset-> question,);
    }
    return $arr;
} 
public function getblogdetails($linkCreator)
{
    
        
  $rowset = $this->tableGWay->select(array('linkCreator' => $linkCreator)); 
    $row = $rowset->current();
    
    if(!$row)
    {
        return 0;
    }
    
    return $row;
} 


public function fetchAll()
{
    $resultSet = $this->tableGWay->select();
    return $resultSet;
}

}
?>