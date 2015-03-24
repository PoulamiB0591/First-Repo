<?php
namespace Application\Model;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class faqbanner
{
    public $id;
    public $picture;
    public $bannerPath;
    public $bannerHeader;
    public $questionLine;
    
public function exchangeArray($data)
{
    $this->id                = (isset($data['id']))           ? $data['id']              : null;
    $this->picture           = (isset($data['picture']))      ? $data['picture']         : null;
    $this->bannerPath        = (isset($data['bannerPath']))   ? $data['bannerPath']      : null;
    $this->bannerHeader      = (isset($data['bannerHeader'])) ? $data['bannerHeader']    : null;
	$this->questionLine      = (isset($data['questionLine'])) ? $data['questionLine']    : null;
  
}

public function getArrayCopy() 
{
    return get_object_vars($this);
}

}
?>