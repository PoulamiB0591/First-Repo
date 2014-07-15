<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class templatestoretble
{
	public $id;

    public $BannerHeader;
    public $BannerDesc;
    public $campaignques;
    public $campaignheading;
    public $campaignsubhead;
    public $campaigndesc;
    public $campaignlink;
    public $cname;
   public $plink;
   public $pname;
                
    //protected $inputFilter;
	
    
  	public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		
 	    $this->BannerHeader = (!empty($data['BannerHeader'])) ? $data['BannerHeader'] : null;
        $this->BannerDesc = (!empty($data['BannerDesc'])) ? $data['BannerDesc'] : null;
        $this->campaignques = (!empty($data['campaignques'])) ? $data['campaignques'] : null;
        $this->campaignheading = (!empty($data['campaignheading'])) ? $data['campaignheading'] : null;
        $this->campaignsubhead = (!empty($data['campaignsubhead'])) ? $data['campaignsubhead'] : null;
        $this->campaigndesc  = (isset($data['campaigndesc']))  ? $data['campaigndesc']     : null;
        $this->campaignlink  = (isset($data['campaignlink']))  ? $data['campaignlink']     : null;
         $this->cname  = (isset($data['cname']))  ? $data['cname']     : null;
        $this->plink  = (isset($data['plink']))  ? $data['plink']     : null;
         $this->pname  = (isset($data['pname']))  ? $data['pname']     : null; 
        
		
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