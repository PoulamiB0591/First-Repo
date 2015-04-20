<?php
namespace Application\Model;

use Zend\InputFilter\InputFilter;

class shippingDetails
{
    public $id;
    public $userId;
    public $templateName;
    public $companyName;
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $address;
    public $zipcode;
    public $totalSum;
    
    
	function exchangeArray($data)
	{
		$this->id                = (isset($data['id']))             ? $data['id']              : null;
		$this->userId            = (isset($data['userId']))             ? $data['userId']              : null;
		$this->templateName      = (isset($data['templateName']))             ? $data['templateName']              : null;
		$this->companyName       = (isset($data['companyName']))        ? $data['companyName']         : null;
	    $this->firstName         = (isset($data['firstName']))      ? $data['firstName']       : null;
	    $this->lastName          = (isset($data['lastName']))           ? $data['lastName']            : null;
	    $this->email             = (isset($data['email']))          ? $data['email']           : null;
	    $this->phone             = (isset($data['phone']))           ? $data['phone']            : null;
	    $this->address           = (isset($data['address']))          ? $data['address']           : null;
	    $this->zipcode           = (isset($data['zipcode']))          ? $data['zipcode']           : null;
	    $this->totalSum      = (isset($data['totalSum']))             ? $data['totalSum']              : null;
	  
	}

	public function getArrayCopy() 
	{
	    return get_object_vars($this);
	}

}
?>