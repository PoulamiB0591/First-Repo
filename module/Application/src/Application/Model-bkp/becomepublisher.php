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
 
class becomepublisher

{
    public $picId;
    public $picHeader;
    
    public $picDescription;
    
    public $picPath;
   public $catagorypicPath;
   public $Author;
     
    public function exchangeArray($data)
    {
        $this->picId  = (isset($data['picId']))  ? $data['picId']     : null;
        $this->picHeader = (isset($data['picHeader']))  ? $data['picHeader']     : null;
        //$this->slideSubHeader = (isset($data['slideSubHeader']))  ? $data['slideSubHeader']     : null;
        $this->picDescription = (isset($data['picDescription']))  ? $data['picDescription']     : null;
       // $this->slideAmount=(isset($data['slideAmount']))  ? $data['slideAmount']     : null;
        $this->picPath  = (isset($data['picPath']))  ? $data['picPath']     : null;
        $this->catagorypicPath  = (isset($data['catagorypicPath']))  ? $data['catagorypicPath']     : null;
        $this->Author  = (isset($data['Author']))  ? $data['Author']     : null;
    }
 public function getArrayCopy() 
    {
         return get_object_vars($this);
         
    }
         
    
}

?>