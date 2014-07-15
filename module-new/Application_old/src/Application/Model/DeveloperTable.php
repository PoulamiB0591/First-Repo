<?php
//added by Poulami
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

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
        
        $rowset = $this->tableGWay->select(array('id' => $id));
        $row = $rowset->current();
        
        if(!$row)
        {
            throw new \Exception("Row not found");
        }
        
        return $row;
    }
	
	public function saveDeveloper(Developer $dev) //edited by Poulami
	{
	   $data = array(
			'fName' => $dev->fName,
				'lName'=> $dev->lName,
				'eId' => $dev->eId,
				'uname'=> $dev->uname,
				'pwd'=> $dev->pwd 
		);
  
        $id = (int) $dev->id;
        
        if($id == 0)
        {
            $this->tableGWay->insert($data); 
            
            $id = $this->tableGWay->lastInsertValue;
            $user_session = new Container('devId');
            $user_session->devId = $id;   
        }
        else
        {
            if($this->getDeveloper($id))
            {
                $this->tableGWay->update($data,array('id'=>$id));
            }
            else
            {
                throw new \Exception('Developer does not exist');
            }
        }
	}
    
    public function delDeveloper($id)
    {
        $this->tableGWay->delete(array('id' => (int)$id));
    }
    
    public function fetchtemplate(){
        $resultSet = $this->tableGWay->select(array('devId' => $devId));
       $row = $rowset->current();
    }
    


}
?>