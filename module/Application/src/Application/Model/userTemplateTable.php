<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Session\Container;

class userTemplateTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
    
    public function templateCheck($uid)
    {
        $resultSet = $this->tableGWay->select(array('user_id' => $uid)); 
        return $resultSet->count();
    }
    
   	public function saveUser($data) //insert data
	{
	
      $rowset = $this->tableGWay->insert($data);
      
      $id = $this->tableGWay->lastInsertValue;
      $userId = new Container('uid');
      $userId->uid = $id;
      
      
      return $rowset;
              
	}
    
    
    public function saveUserdet($data) //insert data
	{
	
      $rowset = $this->tableGWay->insert($data);
      return $rowset;
              
	}
    
     public function delcampaign($id)
    {
       return  $this->tableGWay->delete(array('id' => $id));
    }
    
       public function selectUser($sid,$temp)
    {
        $resultSet = $this->tableGWay->select(array('user_id' => $sid,'template_link' => $temp)); 
    
          return $resultSet->current(); 
    }
    
       public function selectUser1($sid,$temp)
    {
        $resultSet = $this->tableGWay->select(array('id' => $sid,'template_link' => $temp)); 
    
          return $resultSet->current(); 
    }
    
    public function selectUsertemplate($sid)
    {
        $resultSet = $this->tableGWay->select(array('user_id' => $sid));  
        //$this->tableGWay->order('new_template_name sort');
         
          return $resultSet->current(); 
    }
    
     public function selectUserNew($uid,$temp)
    {
        $resultSet = $this->tableGWay->select(array('id' => $uid,'template_link' => $temp)); 
    
          return $resultSet->current(); 
    }
    
    
     public function selectUserdet($id)
    {
        $resultSet = $this->tableGWay->select(array('id' => $id)); 
    
          return $resultSet->current(); 
    }
    
     public function selectUserId($url)
    {
        $resultSet = $this->tableGWay->select(array('template_link' => $url)); 
    
        foreach($resultSet as $rset){
            $arr[]=array(
             "userId"=>$rset->id,
             "formUniqueName" => $rset->formUniqueName,
            );
        }
        
        return $arr;
    }
    
    public function updateUser($data,$uid,$temp)
    {
      
        $resultSet = $this->tableGWay->update($data,array('id' => $uid,'template_link' => $temp));  
        return $resultSet;
    }
    
    public function updateUserNew($data,$uid,$temp)
    {
        $resultSet = $this->tableGWay->update($data,array('id' => $uid,'template_link' => $temp));
        
       return $resultSet;
    }
    
    public function selectAppId($uid,$tempName)
    {
      
        $resultSet = $this->tableGWay->select(array('id' => $uid,'template_link' => $tempName));  
        foreach($resultSet as $rset){
            $arr[]=array(
             "appId"=>$rset->appid,
            );
        }
        
        return $arr;
      
    }
    
    public function fetchpromote($tempid)
    {
        $resultSet = $this->tableGWay->select(array('template_id' => $tempid)); 
        
        return $resultSet;
    }
    
   
     //public function published($uid,$tempName)
//    {
//      
//        $resultSet = $this->tableGWay->select(array('id' => $uid,'template_link' => $tempName));  
//        foreach($resultSet as $rset){
//            $arr[]=array(
//             "published"=>$rset->published,
//            );
//        }
//        
//        return $arr;
//      
//    }
    
    public function updateUserCheck($data,$uid,$temp)
    {
        $resultSet = $this->tableGWay->update($data,array('id' => $uid,'template_link' => $temp));  
        return $resultSet;  
    }
    
    public function dashboard($uid)
    {
      $resultSet = $this->tableGWay->select(array('user_id' => $uid)); 
       foreach($resultSet as $rset){
            $arr[]=array(
                "id" => $rset->id
            );
        }
        rsort($arr);
           
        foreach($arr as $arrs)
        {
          $resultSets  = $this->tableGWay->select(array('id' => $arrs)); 
          $rownum[] = $resultSets->current();
        }
        //echo $rownum[0]->id; exit;
        
      return $rownum;
    }
    
    public function chkSettings($uid,$tName)
    {
        $resultSet = $this->tableGWay->select(array('id' => $uid,'template_link' => $tName)); 
        
        foreach($resultSet as $rset){
            $arr[]=array(
             "webUrl" => $rset->webUrl,
             "appId" => $rset->appid,
             "new_template_name" => $rset->new_template_name,
             "cNo" => $rset->campaign_number,
             "fbPage"=>$rset->fbPage,
             "pageId" => $rset->pageId,
             "pageAccessToken"=>$rset->pageAccessToken, 
             "fbUrl" => $rset->fbUrl,	 
            );
        }
        return $arr;
    }
    
     public function checkAppId($pageId) //delete user
     {
       $result = $this->tableGWay->select(array('pageId'=> $pageId));
       
       foreach($result as $rset){
            $arr[]=$rset->appid;	
        }
        
        return $arr;
     }
    
     public function deletecampaign($id) //delete user
 {
   $result = $this->tableGWay->delete(array('id' => $id));
   return $result;
 }
 public function selectTemplatenew($uid,$templatelink)//edited by anima
    {
        $resultSet = $this->tableGWay->select(array('id' => $uid,'template_link' => $templatelink)); 
        foreach($resultSet as $rset){
            $arr[]=array(
                "published" => $rset->published,	 
            );
        }
        return $arr;
    }
    
    public function checkStatus($templatelink)//edited by anima
    {
        $resultSet = $this->tableGWay->select(array('template_link' => $templatelink)); 
        foreach($resultSet as $rset){
            $arr[]=array(
             "webUrl"    => $rset->webUrl,
             "published" => $rset->published,	 
            );
        }
        return $arr;
    }
 
 } 
 ?>  