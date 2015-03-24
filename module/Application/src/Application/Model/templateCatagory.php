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
 
class templateCatagory

{
public $id;
public $catagory;
public $date;
public $time;
   
public function exchangeArray($data)
{
    $this->id         = (isset($data['id']))            ? $data['id']       : null;
    $this->catagory   = (isset($data['catagory']))      ? $data['catagory'] : null;
    $this->date       = (isset($data['date']))          ? $data['date']     : null;
    $this->time       = (isset($data['time']))          ? $data['time']     : null;
    
}

public function getArrayCopy() 
{
     return get_object_vars($this);
     
}
    
    
}

?>