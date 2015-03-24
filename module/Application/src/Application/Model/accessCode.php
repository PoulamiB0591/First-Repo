<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class accessCode 
{
   	public $id;
	public $accCode;
	
    
    public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->accCode = (!empty($data['accCode'])) ? $data['accCode'] : null;
        
         
         
	} 
    
    public function getArrayCopy() 
    {
         return get_object_vars($this);
    }
}

?>