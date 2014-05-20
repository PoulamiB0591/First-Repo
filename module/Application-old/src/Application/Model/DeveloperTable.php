<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

class DeveloperTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGateway = $tableGateway;
	}
	
	public function saveDeveloper(Developer $dev)
	{
		$data = array(
			'firstName' => $dev->fName,
				'lastName'=> $dev->lName,
				'emailId' => $dev->emailId,
				'userName'=> $dev->uName,
				'password'=> $dev->pwd 
		);
		
		$id = (int) $dev->id;
		
		if($id == 0)
		{
			$this->tableGateway->insert($data);
		}
	}
}
?>