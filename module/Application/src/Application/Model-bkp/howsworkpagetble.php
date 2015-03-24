<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class howsworkpagetble
{
	public $id;

    public $Imagename;
    public $Imagelink;
    public $bannerheader;
    
                
    //protected $inputFilter;
	
    
  	public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		
 	    $this->bannerheader = (!empty($data['bannerheader'])) ? $data['bannerheader'] : null;
        $this->Imagename = (!empty($data['Imagename'])) ? $data['Imagename'] : null;
        $this->Imagelink = (!empty($data['Imagelink'])) ? $data['Imagelink'] : null;
        
        
        
		
	} 
    
    public function getArrayCopy() //added by Poulami
    {
         return get_object_vars($this);
         
    }
    /*public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("not used");
    }
    
    public function getInputFilter()
    {
        
    }*/
	
}
?>