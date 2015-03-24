<?php
namespace Application\Model; 
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class becomepublisherstudio
{
    public $id;
    public $headLine;
    public $subHeadLine; 
    public $tagLine; 
    public $description; 
    public $mainImagePath; 
    public $subImagePath;       
     
public function exchangeArray($data)
{
    $this->id                = (isset($data['id']))              ? $data['id']             : null;
    $this->headLine          = (isset($data['headLine']))        ? $data['headLine']       : null;
    $this->subHeadLine       = (isset($data['subHeadLine']))     ? $data['subHeadLine']    : null;
    $this->tagLine           = (isset($data['tagLine']))         ? $data['tagLine']        : null;
    $this->description       = (isset($data['description']))     ? $data['description']    : null;
    $this->mainImagePath     = (isset($data['mainImagePath']))   ? $data['mainImagePath']  : null;
    $this->subImagePath      = (isset($data['subImagePath']))    ? $data['subImagePath']   : null;
    
}
     
   public function getArrayCopy() 
    {
         return get_object_vars($this);
         
    }
       
}

?>