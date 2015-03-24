<?php
namespace Application\Model;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class publisher
{
    public $id;
   	public $fbId;
	public $fbName;
    public $fbLastName;
    public $email;
    public $password;
    public $fname;
    public $lname;
    public $loginTime;
    public $regTime;
    public $rating;    
    public $fbuser; 
    public $hometown;
    public $sfpuser;

public function exchangeArray($data)
{
    $this->id= (isset($data['id'])) ? $data['id'] : null;
    $this->fbId = (!empty($data['fbId'])) ? $data['fbId'] : null;
    $this->fbName = (!empty($data['fbName'])) ? $data['fbName'] : null;
    $this->fbLastName = (!empty($data['fbLastName'])) ? $data['fbLastName'] : null;      
    $this->loginTime = (!empty($data['loginTime'])) ? $data['loginTime'] : null;
    $this->regTime = (!empty($data['regTime'])) ? $data['regTime'] : null;
    $this->rating = (!empty($data['rating'])) ? $data['rating'] : null;
    $this->fbuser = (!empty($data['fbuser'])) ? $data['fbuser'] : null;
    $this->hometown = (!empty($data['hometown'])) ? $data['hometown'] : null;  
    $this->email = (isset($data['email']))          ? $data['email']           : null;
    $this->password = (isset($data['password']))       ? $data['password']        : null;
    $this->fname = (isset($data['fname']))          ? $data['fname']              : null;
    $this->lname = (isset($data['lname']))          ? $data['lname']              : null;
    $this->sfpuser = (isset($data['sfpuser']))          ? $data['sfpuser']              : null;
}

public function getArrayCopy() 
{
    return get_object_vars($this);
}

}
?>