<?php
//developed by dibyendu
namespace Application\Model;
 
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class animatedImage

{
    public $imageId;   
    public $imagePath;    
    
    public function exchangeArray($data)
    {
        $this->imageId  = (isset($data['imageId']))  ? $data['imageId']     : null;      
        $this->imagePath = (isset($data['imagePath']))  ? $data['imagePath']     : null;
           
        
    }
  public function getArrayCopy() 
{
     return get_object_vars($this);
}   
    
}

?>