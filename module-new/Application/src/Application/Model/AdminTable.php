<?php
//added by Poulami
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class AdminTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
    public function getAdmin($uname,$pwd) 
    {
        $rowset = $this->tableGWay->select(array('username'=>$uname,'password'=>$pwd));
        
        if(0 === $rowset->count())
        {
            echo "Row not found";
        }
        else
        {
            return $rowset;
        }
    }
}
?>