<?php
namespace Application\Model;

class faqpages 
{
public $page_list;
public $id;
public $actionedit;
public $controller;
public $actionlink;	
    
public function exchangeArray($data)
{
	$this->id          = (!empty($data['id']))         ?   $data['id']             : null;
	$this->page_list   = (!empty($data['page_list']))  ?   $data['page_list']      : null;
    $this->actionedit  = (!empty($data['actionedit'])) ?   $data['actionedit']     : null;
    $this->controller  = (!empty($data['controller'])) ?   $data['controller']     : null;
    $this->actionlink  = (!empty($data['actionlink'])) ?   $data['actionlink']     : null;
	
} 

public function getArrayCopy() 
{
     return get_object_vars($this);
}
  
}
?>