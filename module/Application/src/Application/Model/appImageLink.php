<?php

namespace Application\Model;
 
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class appImageLink

{
    public $linkID;
    public $imageLink;
    public $imagePath;    
   public  $dateTime;
    public function exchangeArray($data)
    {
        $this->linkID  = (isset($data['linkID']))  ? $data['linkID']     : null;
        $this->imageLink = (isset($data['imageLink']))  ? $data['imageLink']     : null;
        $this->imagePath = (isset($data['imagePath']))  ? $data['imagePath']     : null;
        $this->dateTime = (isset($data['dateTime']))  ? $data['dateTime']     : null;
        
    }
  public function getArrayCopy() 
{
     return get_object_vars($this);
}   
    
}

?>