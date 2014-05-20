<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;

class DeveloperTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
    public function getDeveloper($id)
    {
        $id = (int) $id;
        
        $rowset = $this->tableGateWay->select(array('id' => $id));
        $row = $rowset->current();
        
        if(!$row)
        {
            throw new \Exception("Row not found");
        }
        
        return $row;
    }
	
	public function saveDeveloper(Developer $dev)
	{
	   $data = array(
			'firstName' => $dev->fName,
				'lastName'=> $dev->lName,
				'emailId' => $dev->eId,
				'userName'=> $dev->uname,
				'password'=> $dev->pwd 
		);

        $this->tableGWay->insert($data);
	}
    
    public function delDeveloper($id)
    {
        $this->$tableGateway->delete(array('id' => (int)$id));
    }
    
    public function fetchAll(){
        $resultSet = $this->tableGWay->select();
        return $resultSet;
    }
    
}
?>

