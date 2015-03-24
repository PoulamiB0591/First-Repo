<?php
namespace Application\Model;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class contactheader
{
    public $id;
    public $picture;
    public $imagePath;
    public $headerLine;
   
    
public function exchangeArray($data)
{
    $this->id                = (isset($data['id']))             ? $data['id']              : null;
    $this->picture           = (isset($data['picture']))        ? $data['picture']         : null;
    $this->imagePath         = (isset($data['imagePath']))      ? $data['imagePath']       : null;
    $this->headerLine        = (isset($data['headerLine']))     ? $data['headerLine']      : null;

  
}

public function getArrayCopy() 
{
    return get_object_vars($this);
}

}
?>