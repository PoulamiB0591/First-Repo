<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class animatedImageTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
  
    public function selectAll(){
        $resultSet = $this->tableGWay->select();
        
        return $resultSet;
    }
public function insertanimatedImage($imageurl) 
        {
        $data = array(             
             'imagePath'=>$imageurl
 );
    return $this->tableGWay->insert($data);
       
        
        }
}
?>