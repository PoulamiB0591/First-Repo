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
 
class becomepublisherbanner

{
    public $bannerId;
    public $bannerHeader;
    
   public $filFormOneHeader;
    public $filFormOneDescription;
	public $filFormTwoHeader ;
	public $filFormTwoDescription;
	public $bannerPath;
  // protected $inputFilter;
     
    public function exchangeArray($data)
    {
        $this->bannerId  = (isset($data['bannerId']))  ? $data['bannerId']     : null;
        $this->bannerHeader = (isset($data['bannerHeader']))  ? $data['bannerHeader']     : null;
        
        $this->bannerPath  = (isset($data['bannerPath']))  ? $data['bannerPath']     : null;
		$this->filFormOneHeader  = (isset($data['filFormOneHeader']))  ? $data['filFormOneHeader']     : null;
		$this->filFormOneDescription  = (isset($data['filFormOneDescription']))  ? $data['filFormOneDescription']     : null;
		$this->filFormTwoHeader  = (isset($data['filFormTwoHeader']))  ? $data['filFormTwoHeader']     : null;
		$this->filFormTwoDescription  = (isset($data['filFormTwoDescription']))  ? $data['filFormTwoDescription']     : null;
    }
     
    
}

?>