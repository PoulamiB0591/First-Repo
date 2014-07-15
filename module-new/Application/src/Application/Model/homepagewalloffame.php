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
   // protected $inputFilter;
     
    public function exchangeArray($data)
    {
        $this->pid  = (isset($data['pid']))  ? $data['pid']     : null;
        $this->piclink = (isset($data['piclink']))  ? $data['piclink']     : null;
          $this->pname = (isset($data['pname']))  ? $data['pname']     : null;
        
    }
     
    
}

?>