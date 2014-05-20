<?php
namespace Application\Model;

class Developer
{
	public $id;
	public $fName;
	public $lName;
	public $emailId;
	public $uName;
	public $pwd;
	
	public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->fName = (!empty($data['fName'])) ? $data['fName'] : null;
		$this->lName = (!empty($data['lName'])) ? $data['lName'] : null;
		$this->emailId = (!empty($data['emailId'])) ? $data['emailId'] : null;
		$this->uName = (!empty($data['uName'])) ? $data['uName'] : null;
		$this->pwd = (!empty($data['pwd'])) ? $data['pwd'] : null;
	} 
	
}
?>