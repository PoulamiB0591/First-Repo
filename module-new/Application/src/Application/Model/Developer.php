<?php
//added by Poulami
namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class Developer 
{
	public $id;
	public $fName;
	public $lName;
	public $eId;
	public $uname;
	public $pwd;
    
    //protected $inputFilter;
	
	public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->fName = (!empty($data['fName'])) ? $data['fName'] : null;
		$this->lName = (!empty($data['lName'])) ? $data['lName'] : null;
		$this->eId = (!empty($data['eId'])) ? $data['eId'] : null;
		$this->uname = (!empty($data['uname'])) ? $data['uname'] : null;
		$this->pwd = (!empty($data['pwd'])) ? $data['pwd'] : null;
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