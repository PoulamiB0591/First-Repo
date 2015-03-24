<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class createapp 
{

	public $devId;
	public $date;
    public $email;
    public $appid;

    
    public function exchangeArray($data)
	{
		
		$this->devId = (!empty($data['devId'])) ? $data['devId'] : null;
        $this->date = (!empty($data['date'])) ? $data['date'] : null;
        $this->email = (!empty($data['email'])) ? $data['email'] : null;
        $this->appid = (!empty($data['appid'])) ? $data['appid'] : null;
	} 
    
   // public function getArrayCopy() //added by Poulami
//    {
//         return get_object_vars($this);
//    }
}

?>