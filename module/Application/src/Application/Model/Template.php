<?php
//added by Poulami
namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class Template 
{
	public $id;
    public $devId;
	public $templateName;
	public $scImage;
	public $tempZipName;
    public $tempZipDesc;
    public $approval;
    
    //protected $inputFilter;
	
	function exchangeArray($data)
	{       
	    $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->devId = (!empty($data['devId'])) ? $data['devId'] : null;
		$this->templateName = (!empty($data['templateName'])) ? $data['templateName'] : null;
        $this->templateDesc = (!empty($data['templateDesc'])) ? $data['templateDesc'] : null;
        
		$this->scImage = (!empty($data['scImage'])) ? $data['scImage'] : $data['scImage'];
        
		$this->tempZipName = (!empty($data['tempZipName'])) ? $data['tempZipName'] : $data['tempZipName'];
        $this->approval = (!empty($data['approval'])) ? $data['approval'] : $data['approval'];
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