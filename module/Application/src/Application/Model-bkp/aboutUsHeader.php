<?php
namespace Application\Model;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class aboutUsHeader
{
public $id;
public $header;
public $description;
public $dateOfInsert;
public $time;
    
public function exchangeArray($data)
{
    $this->id                  = (isset($data['id']))              ? $data['id']              : null;
    $this->header              = (isset($data['header']))          ? $data['header']          : null;
    $this->description         = (isset($data['description']))     ? $data['description']     : null;
    $this->dateOfInsert        = (isset($data['dateOfInsert']))    ? $data['dateOfInsert']    : null;
    $this->time                = (isset($data['time']))            ? $data['time']            : null;
}
    
public function getArrayCopy() 
{
     return get_object_vars($this);     
}
             
}
?>