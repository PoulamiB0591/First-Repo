<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class transactionDetails
{
	public $id;
	public $userId;
	public $orderId;
	public $trsxId;
	public $status;
	public $amount;
	public $description;
	public $entrancecode;
	public $issuerId;
	public $timestamp;
	public $consumerName;
	public $consumerAccount;
	public $consumerCity;
	public $consumerIban;
	public $consumerBic;
	public $complete;
     
    
    public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->userId = (!empty($data['userId'])) ? $data['userId'] : null;
        $this->orderId = (!empty($data['orderId'])) ? $data['orderId'] : null;
        $this->trsxId = (!empty($data['trsxId'])) ? $data['trsxId'] : null;
        $this->status= (!empty($data['status'])) ? $data['status'] : null;
       
        $this->amount= (!empty($data['amount'])) ? $data['amount'] : null;
        $this->description= (!empty($data['description'])) ? $data['description'] : null;
        $this->entrancecode= (!empty($data['entrancecode'])) ? $data['entrancecode'] : null;
       
        $this->issuerId= (!empty($data['issuerId'])) ? $data['issuerId'] : null;
        $this->timestamp= (!empty($data['timestamp'])) ? $data['timestamp'] : null;
        $this->consumerName = (!empty($data['consumerName'])) ? $data['consumerName'] : null;
        $this->consumerAccount = (!empty($data['consumerAccount'])) ? $data['consumerAccount'] : null;
        $this->consumerCity = (!empty($data['consumerCity'])) ? $data['consumerCity'] : null;
        $this->consumerIban = (!empty($data['consumerIban'])) ? $data['consumerIban'] : null;
        $this->consumerBicn = (!empty($data['consumerBic'])) ? $data['consumerBic'] : null;
        $this->complete = (!empty($data['complete'])) ? $data['complete'] : null;
        
         
	} 
    
    public function getArrayCopy() 
    {
         return get_object_vars($this);
    }
}

?>