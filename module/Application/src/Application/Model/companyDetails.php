<?php
namespace Application\Model; 
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class companyDetails
{
    public $id;
    public $companyName;
    public $dateTime; 
   
        
     
public function exchangeArray($data)
{
    $this->id              = (isset($data['id']))            ? $data['id']             : null;
    $this->companyName     = (isset($data['companyName']))   ? $data['companyName']    : null;
    $this->dateTime            = (isset($data['dateTime']))          ? $data['dateTime']           : null;
   
  
    
}
     
public function getArrayCopy() 
{
     return get_object_vars($this);
     
}
       
}

?>