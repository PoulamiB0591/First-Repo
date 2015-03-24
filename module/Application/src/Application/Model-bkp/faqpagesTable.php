<?php
namespace Application\Model;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class faqpagesTable
{
protected $tableGateWay;
	
public function __construct(TableGateway $tableGateway)
{
        $this->tableGWay = $tableGateway;
}
    
 public function fetchAll()
 {
        $resultSet = $this->tableGWay->select();
        return $resultSet;
 }

}
?>