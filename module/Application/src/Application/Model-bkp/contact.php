<?php

/**
 * @author 
 * @copyright 2014
 */

namespace Application\Model;
 
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class contact

{
    public $id;
    public $subject;
    public $message;
    public $name;
    public $phone;
	public $email;
	public $date;
	public $time;
  // protected $inputFilter;
     
    public function exchangeArray($data)
    {
        $this->id      = (isset($data['id']))       ? $data['id']          : null;
        $this->subject = (isset($data['subject']))  ? $data['subject']     : null;
        $this->message = (isset($data['message']))  ? $data['message']     : null;
        $this->name    = (isset($data['name']))     ? $data['name']        : null;
        $this->phone   = (isset($data['phone']))    ? $data['phone']       : null;
		$this->email   = (isset($data['email']))    ? $data['email']       : null;
		$this->date    = (isset($data['date']))     ? $data['date']        : null;
		$this->time    = (isset($data['time']))     ? $data['time']        : null;
    }
     public function getArrayCopy() 
    {
         return get_object_vars($this);
    }
     
    
}

?>