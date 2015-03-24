<?php
//added by Arnab
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Predicate;

class userTemplateDetailsTable {
    
    protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
    public function insertFolderDetails($foldername,$pagename,$recentpage) {
        
        
        $data = array(
			    'folder_name' => $foldername,
				'pageName'=> $pagename,
				'newpagename' => $recentpage
		    );
        
     $this->tableGWay->insert($data);
     $id = $this->tableGWay->lastInsertValue;
     return $id;
     
    }
    
    public function fetchRealPagename($foldername,$newpagename) {
        
        $rowset = $this->tableGWay->select(array('folder_name' => $foldername,'newpagename' =>$newpagename ));
        $row = $rowset->current();
        return $row;
    }
    
    
    
}

?>