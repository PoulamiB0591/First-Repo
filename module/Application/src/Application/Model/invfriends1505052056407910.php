<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class  invfriends1505052056407910
{

	public $appId;
    public $tempName;
    public $invited;
    public $status;
    
    

    
    public function exchangeArray($data)
	{
		
		//$this->uId = (!empty($data['uId'])) ? $data['uId'] : null;
        $this->appId = (!empty($data['appId'])) ? $data['appId'] : null;
        $this->tempName = (!empty($data['tempName'])) ? $data['tempName'] : null;
        $this->invited = (!empty($data['invited'])) ? $data['invited'] : null;
        $this->status = (!empty($data['status'])) ? $data['status'] : null;
	} 
    
   // public function getArrayCopy() //added by Poulami
//    {
//         return get_object_vars($this);
//    }
}

?>