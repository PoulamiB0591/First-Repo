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
 
class imagesAboutUs

{
    public $id;
    public $imagePath;
    public $imageName;
    public $imageDescription;
    public $date;
    public $time;
   
    public function exchangeArray($data)
    {
        $this->id  	             = (isset($data['id']))                ? $data['id']                   : null;
        $this->imagePath         = (isset($data['imagePath']))         ? $data['imagePath']            : null;
        $this->imageName         = (isset($data['imageName']))  	   ? $data['imageName']            : null;
        $this->imageDescription  = (isset($data['imageDescription']))  ? $data['imageDescription']     : null;
        $this->date              = (isset($data['date']))              ? $data['date']                 : null;
        $this->time              = (isset($data['time']))              ? $data['time']                 : null;
    }
    public function getArrayCopy() 
    {
         return get_object_vars($this);
         
    }
     
    
}

?>