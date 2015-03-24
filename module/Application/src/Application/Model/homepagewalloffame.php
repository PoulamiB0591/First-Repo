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
 
class homepagewalloffame

{
    public $pid;
    public $piclink;       
    public $description;
    public $pname;
    public function exchangeArray($data)
    {
        $this->pid  = (isset($data['pid']))  ? $data['pid']     : null;
        $this->piclink = (isset($data['piclink']))  ? $data['piclink']     : null;
        $this->description = (isset($data['description']))  ? $data['description']     : null;
        $this->pname = (isset($data['pname']))  ? $data['pname']     : null;
        
    }
    public function getArrayCopy() 
    {
         return get_object_vars($this);
    }
      
    
}

?>