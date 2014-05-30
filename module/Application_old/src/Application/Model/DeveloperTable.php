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
			'fName' => $dev->fName,
				'lName'=> $dev->lName,
				'eId' => $dev->eId,
				'uname'=> $dev->uname,
				'pwd'=> $dev->pwd 
		);

        $this->tableGWay->insert($data);
	}
    
    public function delDeveloper($id)
    {
        $this->tableGWay->delete(array('id' => (int)$id));
    }
    public function fetchAll(){
        $resultSet = $this->tableGWay->select();
        return $resultSet;
    }
}
?>