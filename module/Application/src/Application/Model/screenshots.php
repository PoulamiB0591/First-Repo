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
 
class screenshots

{
    public $id;
    public $tempId;
    public $screenshot_image;
    public $screenshot_desc;
    public $screenshot_header;
  // protected $inputFilter;
     
public function exchangeArray($data)
{
    $this->id                = (isset($data['id']))                 ? $data['id']                    : null;
    $this->tempId            = (isset($data['tempId']))             ? $data['tempId']                : null;
    $this->screenshot_image  = (isset($data['screenshot_image']))   ? $data['screenshot_image']      : null;
    $this->screenshot_desc   = (isset($data['screenshot_desc']))    ? $data['screenshot_desc']       : null;
    $this->screenshot_header = (isset($data['screenshot_header']))  ? $data['screenshot_header']     : null;
}

public function getArrayCopy() 
{
     return get_object_vars($this);
     
}
           
}

?>