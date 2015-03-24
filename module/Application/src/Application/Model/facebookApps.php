<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class facebookApps
{
   	public $id;
	public $appId;
	public $appSecret;
    
    
    public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->appId = (!empty($data['appId'])) ? $data['appId'] : null;
        $this->appSecret = (!empty($data['appSecret'])) ? $data['appSecret'] : null;
	} 
    
    public function getArrayCopy() 
    {
         return get_object_vars($this);
    }
}

?>