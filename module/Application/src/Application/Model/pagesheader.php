<?php

/**
 * @author 
 * @copyright 2014
 */

namespace Application\Model;
 
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class pagesheader

{
    public $id;
    public $pagename;
	public $date;
	public $time;
  // protected $inputFilter;
     
    public function exchangeArray($data)
    {
        $this->id       = (isset($data['id']))         ? $data['id']               : null;
        $this->pagename = (isset($data['pagename']))   ? $data['pagename']         : null;
		$this->date     = (isset($data['date']))       ? $data['date']             : null;
		$this->time     = (isset($data['time']))       ? $data['time']             : null;
    }
     public function getArrayCopy() 
    {
         return get_object_vars($this);
    }
     
    
}

?>