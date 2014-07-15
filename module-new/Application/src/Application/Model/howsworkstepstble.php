<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class howsworkstepstble
{
	public $id;

    public $imagename;
    public $Imagepath;
    public $header;
     public $Description;
    
                
    //protected $inputFilter;
	
    
  	public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		
 	    $this->header = (!empty($data['header'])) ? $data['header'] : null;
        $this->imagename = (!empty($data['imagename'])) ? $data['imagename'] : null;
        $this->Imagepath = (!empty($data['Imagepath'])) ? $data['Imagepath'] : null;
        $this->Description = (!empty($data['Description'])) ? $data['Description'] : null;
        
		
	} 
    
    public function getArrayCopy() 
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