<?php
namespace Application\Model;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class blogDetailsHeader
{
    public $id;
    public $bannerPath;
    public $date;
    public $questionLine;
    
public function exchangeArray($data)
{
    $this->id                = (isset($data['id']))           ? $data['id']              : null;
    $this->bannerPath        = (isset($data['bannerPath']))   ? $data['bannerPath']      : null;
    $this->date              = (isset($data['date']))         ? $data['date']            : null;
	$this->questionLine      = (isset($data['time']))         ? $data['time']            : null;
  
}

public function getArrayCopy() 
{
    return get_object_vars($this);
}

}
?>