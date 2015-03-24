<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class requestemailTable
{
	protected $tableGateWay;
	
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGWay = $tableGateway;
    }
       

   
   public function saveAll($name,$email,$phn)
   {
       $data = array(
           'email' => $email,
           'name' => $name,
           'phn' => $phn,
           'timestamp' => date('y-m-d h:i:s')
       );
    return $this->tableGWay->insert($data);
   }
  
} 
       
?>