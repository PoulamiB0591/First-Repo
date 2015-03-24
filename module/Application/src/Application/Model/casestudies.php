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
 
class casestudies

{
    public $vedioId;
    public $vedioHeader;
    
    public $VedioDescription;
    
    public $VedioPath;
    public $imgPath;
  // protected $inputFilter;
     
    public function exchangeArray($data)
    {
        $this->vedioId  = (isset($data['vedioId']))  ? $data['vedioId']     : null;
        $this->vedioHeader = (isset($data['vedioHeader']))  ? $data['vedioHeader']     : null;
        //$this->slideSubHeader = (isset($data['slideSubHeader']))  ? $data['slideSubHeader']     : null;
        $this->VedioDescription = (isset($data['VedioDescription']))  ? $data['VedioDescription']     : null;
       // $this->slideAmount=(isset($data['slideAmount']))  ? $data['slideAmount']     : null;
        $this->VedioPath  = (isset($data['VedioPath']))  ? $data['VedioPath']     : null;
        $this->imgPath  = (isset($data['imgPath']))  ? $data['imgPath']     : null;
    }
  public function getArrayCopy() 
    {
         return get_object_vars($this);
         
    }
        
    
}

?>