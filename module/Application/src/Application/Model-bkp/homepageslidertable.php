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
 
class homepageslidertable

{
    public $id;
    public $Title;
    public $imageLink;
    public $Description;
    public $ImagePath;
    public $dateTime;
   protected $inputFilter;
     
    public function exchangeArray($data)
    {
        $this->id  = (isset($data['id']))  ? $data['id']     : null;
        $this->Title = (isset($data['Title']))  ? $data['Title']     : null;
        $this->imageLink = (isset($data['imageLink']))  ? $data['imageLink']     : null;
      
        //$this->slideAmount=(isset($data['slideAmount']))  ? $data['slideAmount']     : null;
        $this->ImagePath  = (isset($data['ImagePath']))  ? $data['ImagePath']     : null;
         $this->dateTime  = (isset($data['dateTime']))  ? $data['dateTime']     : null;
    }
    public function getArrayCopy() 
    {
         return get_object_vars($this);
         
    }
     
    
}

?>