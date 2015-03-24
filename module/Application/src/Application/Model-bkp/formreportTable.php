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
        return $this->tableGWay->insert($data);   
    }
    
    
    public function selectFormDetails($formId) 
    {
        $result = $this->tableGWay->select(array('form_uniqid'=>$formId)); 
        
        $arr = array();
        
        foreach($result as $rset){
            $arr[]=array(
             "count" => $rset->count,
             "form_element_values"=>$rset->form_element_values,
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