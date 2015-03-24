<?php
namespace Application\Model;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class requestemail
{
    public $id;
   	public $name;
	public $phn;
    public $email;
    public $timestamp;
 

public function exchangeArray($data)
{
    $this->id= (isset($data['id'])) ? $data['id'] : null;
    $this->name = (!empty($data['name'])) ? $data['name'] : null;
    $this->email = (!empty($data['email'])) ? $data['email'] : null;
    $this->phn = (!empty($data['phn'])) ? $data['phn'] : null;      
    $this->timestamp = (!empty($data['timestamp'])) ? $data['timestamp'] : null;
   
}

public function getArrayCopy() 
{
    return get_object_vars($this);
}

}
?>