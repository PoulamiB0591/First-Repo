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
 
class termsservice

{
    public $id;
    public $header;
    public $subheader;
    public $description;
   
     
    public function exchangeArray($data)
    {
        $this->id  = (isset($data['id']))  ? $data['id']     : null;
        $this->header = (isset($data['header']))  ? $data['header']     : null;
        $this->subheader = (isset($data['subheader']))  ? $data['subheader']     : null;
      $this->description  = (isset($data['description']))  ? $data['description']     : null;
        
    }
  public function getArrayCopy() 
    {
         return get_object_vars($this);
         
    }
        
    
}

?>