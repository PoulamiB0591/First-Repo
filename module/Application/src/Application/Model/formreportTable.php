<?php
namespace Application\Model;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class formreportTable
{
	protected $tableGateWay;
	
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGWay = $tableGateway;
    }
    
       
    public function saveformdata($data) 
    {
    	$formId          = $data['form_uniqid'];
    	$formElementName = $data['form_element_name'];
    	$result = $this->tableGWay->select(array('form_uniqid'=>$formId,'form_element_name'=>$formElementName,'count'=>'0'));
    	
    	if($result->count() > 0)
    	{
    		$this->tableGWay->delete(array('form_uniqid'=>$formId,'form_element_name'=>$formElementName,'count'=>'0'));
    		return $this->tableGWay->insert($data);
    	}
    	else
    	{
    		return $this->tableGWay->insert($data);
    	}
    	 
    }
    
    
    public function selectFormDetails($formId) 
    {
        $result = $this->tableGWay->select(array('form_uniqid'=>$formId)); 
        
        $arr = array();
        
        foreach($result as $rset){
            $arr[]=array(
             "count"              => $rset->count,
             "form_element_values"=>$rset->form_element_values,
             "counter"            =>$rset->counter
            );
        }
        
        return $arr;
    }
    
      public function deleteformdata($formdata) 
    {
        return $this->tableGWay->delete(array('form_uniqid'=>$formdata,'count'=>'0'));   
    }
} 
       
?>