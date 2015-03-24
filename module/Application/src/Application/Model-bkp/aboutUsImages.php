<?php
namespace Application\Model;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class aboutUsImages
{
    public $id;
    public $name;
    public $designation;
    public $bannerPath;
    public $fbLink;
    public $twitterLink;
    public $dateOfInsert;
    public $timeOfInsert;
    public $instagramLink;
    
public function exchangeArray($data)
{
    $this->id                = (isset($data['id']))              ? $data['id']               : null;
    $this->name              = (isset($data['name']))            ? $data['name']             : null;
    $this->designation       = (isset($data['designation']))     ? $data['designation']      : null;
	$this->fbLink            = (isset($data['fbLink']))          ? $data['fbLink']           : null;
    $this->twitterLink       = (isset($data['twitterLink']))     ? $data['twitterLink']      : null;
    $this->instagramLink     = (isset($data['instagramLink']))   ? $data['instagramLink']    : null;
    $this->dateOfInsert      = (isset($data['dateOfInsert']))    ? $data['dateOfInsert']     : null;
	$this->timeOfInsert      = (isset($data['timeOfInsert']))    ? $data['timeOfInsert']     : null;
	$this->bannerPath        = (isset($data['bannerPath']))      ? $data['bannerPath']       : null;
  
}

public function getArrayCopy() 
{
    return get_object_vars($this);
}

}
?>