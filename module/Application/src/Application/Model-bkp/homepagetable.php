<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class homepagetable
{
	public $id;

    public $change_tagline;
    public $text2;
    public $text3;
    public $text5;
    public $text6;

    public $pname;
    public $plink;
     public $hdescription;
    
     public $header;
    
    
    //protected $inputFilter;
	
    
  	public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		
 	    $this->change_tagline = (!empty($data['change_tagline'])) ? $data['change_tagline'] : null;
        $this->text2 = (!empty($data['text2'])) ? $data['text2'] : null;
        $this->text3 = (!empty($data['text3'])) ? $data['text3'] : null;
        $this->text5 = (!empty($data['text5'])) ? $data['text5'] : null;
        $this->text6 = (!empty($data['text6'])) ? $data['text6'] : null;
        $this->pname  = (isset($data['pname']))  ? $data['pname']     : null;
        $this->plink  = (isset($data['plink']))  ? $data['plink']     : null;
        $this->header  = (isset($data['header']))  ? $data['header']     : null;
        $this->hdescription  = (isset($data['hdescription']))  ? $data['hdescription']     : null;
        
		
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