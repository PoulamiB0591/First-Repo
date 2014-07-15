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
 
class templateimages

{
    public $imgid;
    public $imgHeader;
    public $imgSubHeader;
    public $imgDescription;
   
    public $imgPath;
  
     
    public function exchangeArray($data)
    {
        $this->imgid  = (isset($data['imgid']))  ? $data['imgid']     : null;
        $this->imgHeader = (isset($data['imgHeader']))  ? $data['imgHeader']     : null;
        $this->imgSubHeader = (isset($data['imgSubHeader']))  ? $data['imgSubHeader']     : null;
        $this->imgDescription = (isset($data['imgDescription']))  ? $data['imgDescription']     : null;
       
        $this->imgPath  = (isset($data['imgPath']))  ? $data['imgPath']     : null;
    }
     
    
}

?>