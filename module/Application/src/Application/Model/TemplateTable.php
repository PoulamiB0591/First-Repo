<?php
//added by Poulami
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;


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
            "template_name"=>$rset->templateName,
            "tempalte_img"=>$rset->scImage,
            "approval"=>$rset->approval
            );
        }
     return $arr;

    
   } 
   public function getTemplate($id) 
    {
        $id = (int) $id;
        $rowset = $this->tableGWay->select(array('devId' => $id));      
        
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
				'scImage'=> $temp->scImage,
				'tempZipName' => $temp->tempZipName,
                'approval'=>$temp->approval
                
		);
        
        $id = (int) $temp->id;
        
        if($id == 0)
        {
            $this->tableGWay->insert($data); 
        }
        else
        {
            if($this->getTemplate($id))
            {
                $this->tableGWay->update($data,array('id'=>$id));
            }
            else
            {
                throw new \Exception('Developer does not exist');
            }
        }
	}
    
    
    
	public function approveTemplate($templateName,$devId) 
	{
	   $data = array(
            'approval'=> '1',
		);
    
                $this->tableGWay->update($data,array('templateName'=>$templateName,'devId'=>$devId));
            
	}
    
    	public function rejectTemplate($templateName,$devId) 
	{
	   $data = array(
            'approval'=> '0',
		);
    
                $this->tableGWay->update($data,array('templateName'=>$templateName,'devId'=>$devId));
            
	}
    
    
 public function selectTemplate($id)
 {
  $id = (int) $id;
        
        $rowset = $this->tableGWay->select(array('devId' => $id));        
        
        $arr=array();
        foreach($rowset as $rset){
            $arr[]=array(
            
            "template_name"=>$rset->templateName
            );
        }
   
     
            return $arr;  
     
 }
 
 public function delTemplate($id)
    {
        
        $this->tableGWay->delete(array('id' => (int)$id));
    }
    
 public function fetchAll($id){
        
        $resultSet = $this->tableGWay->select(array('id' => $id));
        
        $row = $resultSet->current();
        
        return $row;
    }
 
 
}
?>