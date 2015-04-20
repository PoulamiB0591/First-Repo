<?php
//added by Poulami
namespace Application\Model;


use Application\Model\Developer;
use Application\Model\DeveloperTable;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Predicate;
use Zend\Db\Sql\Where;
use Zend\Db\Sql\Select;  //creating a object type of select 2 access any table
class TemplateTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
   public function getResult($id)
   {
     $id = (int) $id;
        
        $rowset = $this->tableGWay->select(array('devId' => $id));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            
            "devId"=>$rset->devId,
            "template_name"=>$rset->tempFoldName,
            "tempalte_img"=>$rset->scImage,
            "approval"=>$rset->approval
            );
        }
     return $arr;

    
   } 
   public function getTemplate($id) 
    {
        $id = (int) $id;
        $rowset = $this->tableGWay->select(array('devId' => $id, 'status'=> 'added'));      
        
        //$row = $rowset->current();
        
        if(0 === $rowset->count())
        {
            try
            {
                throw new \Exception("Row not found");
            }
            catch(\Exception $e)
            {
                return array('count'=>$rowset->count(),'result'=>'1');
            }
        
        }
        else
        {
            if($rowset->count() == '1')
            {
                return array('count'=>$rowset->count(),'result'=>$rowset->current());
            }
            else
            {
                return array('count'=>$rowset->count(),'result'=>$rowset);
            }
        }
    }
	
	public function saveTemplate(Template $temp) //edited by Poulami
	{
    
       
	   $data = array(
            'devId'=> $temp->devId,
			'templateName' => $temp->templateName,
            'templateDesc' => $temp->templateDesc,
            'templatePrice' => $temp->templatePrice,
	   		'oneTimePrice' => $temp->oneTimePrice,
				'scImage'=> $temp->scImage,
	   		'desktopImage'=> $temp->desktopImage,
	   		'mobileImage'=> $temp->mobileImage,
				'tempZipName' => $temp->tempZipName,
                'tempFoldName' => $temp->tempFoldName, //added by Poulami
                'widgets'=> $temp->widgets, //added by Poulami
                'view' => $temp->view, // added by Poulami
                //'authId' => $temp->authId,
                'approval'=>$temp->approval,
                'status'=>'added',
                'fbconnect' =>$temp->fbconnect,
	   		    'databaseCheck'=>$temp->databaseCheck,
                'facebook_connection'=>$temp->facebook_connection,
                'template_select'=>$temp->template_select
                
                
                
		);
        
        $id = (int) $temp->id;
        
        if($id == 0)
        {
            $this->tableGWay->insert($data); 
            return 1;
        }
        else
        {
            if($this->getTemplate($id))
            {
                $this->tableGWay->update($data,array('id'=>$id));
                return 1;
            }
            else
            {
                throw new \Exception('Developer does not exist');
            }
        }
	}
    
    
    
	public function approveTemplate($tempFoldName,$devId) 
	{
	   $data = array(
            'approval'=> '1',
		);
    
                $this->tableGWay->update($data,array('tempFoldName'=>$tempFoldName,'devId'=>$devId));
            
	}
    
    	public function rejectTemplate($tempFoldName,$devId) 
	{
	   $data = array(
            'approval'=> '0',
		);
    
                $this->tableGWay->update($data,array('tempFoldName'=>$tempFoldName,'devId'=>$devId));
            
	}
    
    
    public function selectRow($temp)
    {
       
        $rowset = $this->tableGWay->select(array('templateName'=>$temp)); 
        $arr=array();
          foreach($rowset as $rset){
            $arr[]=array(
            
            "fbconnect"=>$rset->fbconnect,
            "view"=>$rset->view,
          
            );
        }
     return $arr;
    }
    
    /******** get template price for publish *******/
    public function getTempPrice($tempName)
    {
    	$rowset = $this->tableGWay->select(array('templateName'=>$tempName));
    	$arr    = array();
    	
    	foreach($rowset as $rset){
    		$arr[]=array(
    			"price"=>$rset->templatePrice,
     		);
    	}
    	return $arr;
    }
    
 public function selectTemplate($id)
 {
  $id = (int) $id;
        
        $rowset = $this->tableGWay->select(array('devId' => $id));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            
            "template_name"=>$rset->tempFoldName
            );
        }
   
     
            return $arr;  
     
 }
 
 public function delTemplate($userId,$id)
    {
        $data = array(
            'status'=> 'deleted',
		);
       return $this->tableGWay->update($data,array('id' => (int)$id,'devId'=>$userId));
      // $this->tableGWay->delete(array('id' => (int)$id));
    
    }
    
 public function fetchAll($id){
        
        $resultSet = $this->tableGWay->select(array('id' => $id));
        
        $row = $resultSet->current();
        
        return $row;
    }
    
   public function selecttemp($id){
        
        $resultSet = $this->tableGWay->select(array('templateName' => $id));
        
          $arr=array();
        foreach($resultSet as $rset){
            $arr[]=array(
            
            "template_id"=>$rset->id
            );
        }
        
        return $arr;
    }  
 
 public function fetchTemplate()
{
    $resultSet = $this->tableGWay->select(); 
    
    return $resultSet;
}  

public function insertautometicreview($data)
{
     $rowset = $this->tableGWay->insert($data);  print_r($select);
      return $rowset;
}

    public function fetchTemplateByTempName($name)
    {
        $user_session = new Container('devId');
        $id = $user_session->devId; 
        $resultSet = $this->tableGWay->select(array('devId'=>$id,'tempFoldName'=>$name)); 
        
        $row = $resultSet->current();
        
        return $row;
    } 
     public function selectTemplatenew($templateid)//edited by anima
    {
        $resultSet = $this->tableGWay->select(array('id' => $templateid)); 
        return $resultSet->current(); 
    }
    public function updateThumbImage($data,$tempid)
    {
    	//print_r($data);exit;
    	//$result=$this->tableGWay->update($data,array('id'=>$tempId));
    	$result = $this->tableGWay->update($data,array('id'=>$tempid));
    	print_r(trim($result));exit;
    	
    }
    
    public function searchcategory($dev)
    {
        
         $result=$this->tableGWay->select(new \Zend\Db\Sql\Predicate\Like('template_select', '%'.$dev.'%'));
         return $result;
    }
     public function searchtemplname($dev)
    {
        
         //$result=$this->tableGWay->select(new \Zend\Db\Sql\Predicate\Like('templateName', '%'.$dev.'%'));
         //echo $result;exit;       
         //return $result;
     
    $sql = new Sql( $this->tableGWay->adapter );
    $where = new Where();
    $where -> equalTo( 'template.templateName', $dev );
				
		 $select = $sql->select();
         $select -> from ($this->tableGWay->getTable())
                 -> join ( 'developer', 'template.devId = developer.id')
                 -> where("template.templateName LIKE '%".$dev."%'");
    
         $result = $this->tableGWay->selectWith($select);
         //print($result);exit;

         return $result ;
         
         
    }
public function searchtempcategory($template)
    {
        
         $result=$this->tableGWay->select(array('template_select'=>$template,'approval'=>1));
   
         return $result;
    }
   public function searchtempcategory1($template)
    {
        
         $result=$this->tableGWay->select(array('template_select'=>$template));
         return $result;
    }
    
    
    
    
    public function searchall()
    {
        
         $result=$this->tableGWay->select(array('approval'=>1));
         return $result;
    }
    
    public function getsearchresult($id)
{
   
   $id = (int) $id;
    $faqContainerset = $this->tableGWay->select(array('id' => $id));
    
    
    $row = $faqContainerset->current();  
    return $row;
   
} 
/*

public function getDetailsTemplate($id)
{
	$sql = new Sql($this->adapter);
	$select = $sql->select();
	$select->from($this->table)
	->join('developer', 'template.devId = developer.id');

	$where = new  Where();
	$where->equalTo('approval', $id) ;
	$select->where($where);

	//you can check your query by echo-ing :
	// echo $select->getSqlString();
	$statement = $sql->getSqlString();
	$result = $statement->execute();

	return $result;
	
	SELECT `websites`.*, `s`.`website_id` AS `websites.id` 
FROM `websites` 
INNER JOIN `websites_statistics` AS `s` ON `s`.`website_id` = `websites`.`id` 
WHERE `websites`.`website` = 'google.com'
	
	
	$sql = new Sql( $this->tableGWay->adapter );
    $where = new Where()
    $select = $sql->select();
    $select->from('template')
           ->join(array('dev' => 'developer'), 'template.devId = dev.id  ', \Zend\Db\Sql\Select::JOIN_INNER)
           ->where(array('template.approval' => $id));

    $resultSet = $this->tableGateway->selectWith($select);

    echo $select->getSqlString();

    return $resultSet;
}
*/
 



public function getAuthor($number)
{
  
    $sql = new Sql( $this->tableGWay->adapter );
    $where = new Where();
    $where -> equalTo( 'template.approval', $number );
    //$table = $this->tableGWay->getTable();
    $select = $sql->select();
    $select -> from ($this->tableGWay->getTable())
            -> join (array('s' => 'developer'), 's.id = template.devId',
    		array('did' => 'id','uname'=>'uname','fName'=>'fName','lName' => 'lName','eId'=>'eId','pwd'=>'pwd','timestamp'=>'timestamp','date'=>'date','gender'=>'gender','cname'=>'cname','ctype'=>'ctype','cphone'=>'cphone','ccity'=>'ccity','ccountry'=>'ccountry','cdesc'=>'cdesc','cimage'=>'cimage','uniq'=>'uniq','rating'=>'rating'))
            -> where( 'template.approval=1' ) ;
    
    $result = $this->tableGWay->selectWith($select);
   
    return $result ;
    
}
    

}
?>