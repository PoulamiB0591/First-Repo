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
 
class orderId
{
    public $id;
    public $value;
    public $userId;
    
 
	public function exchangeArray($data)
	{
	    $this->id               = (isset($data['id']))                            ? $data['id']                 : null;
	    $this->value            = (isset($data['value']))                         ? $data['value']              : null;
	    $this->userId            = (isset($data['userId']))                         ? $data['userId']              : null;
	    
	}
	public function getArrayCopy() 
	{
	    return get_object_vars($this);
	     
	}
	        
    
}

?>