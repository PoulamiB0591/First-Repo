<?php
namespace Application\Model;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class address
{
    public $id;
    public $picture;
    public $imagePath;
    public $name;
    public $adrs;
    public $email;
    
public function exchangeArray($data)
{
    $this->id                = (isset($data['id']))             ? $data['id']              : null;
    $this->picture           = (isset($data['picture']))        ? $data['picture']         : null;
    $this->imagePath         = (isset($data['imagePath']))      ? $data['imagePath']       : null;
    $this->name              = (isset($data['name']))           ? $data['name']            : null;
    $this->adrs              = (isset($data['adrs']))           ? $data['adrs']            : null;
    $this->email             = (isset($data['email']))          ? $data['email']           : null;
  
}

public function getArrayCopy() 
{
    return get_object_vars($this);
}

}
?>