<?php
namespace Application\Model; 
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class countryDetails
{
    public $id;
    public $countryName;
    public $dateTime; 
   
        
     
public function exchangeArray($data)
{
    $this->id              = (isset($data['id']))            ? $data['id']             : null;
    $this->countryName     = (isset($data['countryName']))   ? $data['countryName']    : null;
    $this->dateTime            = (isset($data['dateTime']))          ? $data['dateTime']           : null;
  
  
    
}
     
public function getArrayCopy() 
{
     return get_object_vars($this);
     
}
       
}

?>