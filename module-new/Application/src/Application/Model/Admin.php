<?php
//added by Poulami
namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class Admin 
{
	public $uname;
	public $pwd;
    
    public function exchangeArray($data)
	{
		$this->uname = (!empty($data['uname'])) ? $data['uname'] : null;
		$this->pwd = (!empty($data['pwd'])) ? $data['pwd'] : null;
	} 
    
    public function getArrayCopy() //added by Poulami
    {
         return get_object_vars($this);
    }
}

?>