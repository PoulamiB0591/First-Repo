<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class fbuser 
{
    public $uId;
	public $fbId;
	public $fbName;
    public $fbLastName;
    public $fbemail;
    public $loginTime;
    public $regTime;
    public $password;
    public $hometown;
    public $rating;    
    public $fbuser; 
    public function exchangeArray($data)
	{
		$this->uId = (!empty($data['fbId'])) ? $data['uId'] : null;
		$this->fbId = (!empty($data['fbId'])) ? $data['fbId'] : null;
        $this->fbName = (!empty($data['fbName'])) ? $data['fbName'] : null;
        $this->fbLastName = (!empty($data['fbLastName'])) ? $data['fbLastName'] : null;
        $this->hometown = (!empty($data['hometown'])) ? $data['hometown'] : null;        
        $this->fbemail= (!empty($data['fbemail'])) ? $data['fbemail'] : null;
        $this->loginTime = (!empty($data['loginTime'])) ? $data['loginTime'] : null;
        $this->regTime = (!empty($data['regTime'])) ? $data['regTime'] : null;
        $this->password = (!empty($data['password'])) ? $data['password'] : null;
        $this->rating = (!empty($data['rating'])) ? $data['rating'] : null;
        $this->fbuser = (!empty($data['fbuser'])) ? $data['fbuser'] : null;
	} 
    
   // public function getArrayCopy() //added by Poulami
//    {
//         return get_object_vars($this);
//    }
}

?>