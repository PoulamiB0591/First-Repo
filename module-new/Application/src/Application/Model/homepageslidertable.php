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
    public $slideno;
    public $slideHeader;
    public $slideSubHeader;
    public $slideDescription;
    public $slideAmount;
    //public $pname;
    public $slideImagePath;
   protected $inputFilter;
     
    public function exchangeArray($data)
    {
        $this->slideno  = (isset($data['slideno']))  ? $data['slideno']     : null;
        $this->slideHeader = (isset($data['slideHeader']))  ? $data['slideHeader']     : null;
        $this->slideSubHeader = (isset($data['slideSubHeader']))  ? $data['slideSubHeader']     : null;
        $this->slideDescription = (isset($data['slideDescription']))  ? $data['slideDescription']     : null;
        $this->slideAmount=(isset($data['slideAmount']))  ? $data['slideAmount']     : null;
        $this->slideImagePath  = (isset($data['slideImagePath']))  ? $data['slideImagePath']     : null;
    }
     
    
}

?>