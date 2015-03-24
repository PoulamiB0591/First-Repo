<?php
//added by Poulami
namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class Listing 
{
	public $page_list;
	public $id;
    public $actionedit;
    public $controller;
    public $actionlink;
    //protected $inputFilter;
	
    
  	public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->page_list = (!empty($data['page_list'])) ? $data['page_list'] : null;
 	    $this->actionedit = (!empty($data['actionedit'])) ? $data['actionedit'] : null;
        $this->controller = (!empty($data['controller'])) ? $data['controller'] : null;
         $this->actionlink = (!empty($data['actionlink'])) ? $data['actionlink'] : null;
		
	} 
    
    public function getArrayCopy() //added by Poulami
    {
         return get_object_vars($this);
    }
    /*public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("not used");
    }
    
    public function getInputFilter()
    {
        
    }*/
	
}
?>