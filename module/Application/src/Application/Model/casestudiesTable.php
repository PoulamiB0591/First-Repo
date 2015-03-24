<?php

/**
 * @author 
 * @copyright 2014
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
class casestudiesTable
{
	protected $tableGateWay;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGWay = $tableGateway;
	}
   public function getResult($vedioId)
   {
     $vedioId = (int) $vedioId;
        
        $casestudiesset = $this->tableGWay->select(array('vedioId' => $vedioId));
         $row = $casestudiesset->current();  
        return $row;
        
      
        }
    
   
        
        public function insertcasestudies($tempHeader,$tempDescription,$vediourl,$imageurl) 
        {
            
            
           /* $original=explode('/',$tempurl,-2);
            $URI = IMPLODE("/",$original);
            $imageurl = $URI."/files/".$temp;*/
            
	   $datavedio = array(  
           'vedioHeader'=>$tempHeader,
          
           'VedioDescription'=>$tempDescription,
           
            'VedioPath'=>$vediourl,
            
		); 
        $dataimage = array(  
           'vedioHeader'=>$tempHeader,
          
           'VedioDescription'=>$tempDescription,
           
            
            'imgPath'=>$imageurl,
		); 
      $dataimagevedio = array(  
           'vedioHeader'=>$tempHeader,
          
           'VedioDescription'=>$tempDescription,
           
            'VedioPath'=>$vediourl,
            'imgPath'=>$imageurl,
		);
       
      
     
      /*  if ($data['VedioPath']=='' || $data['imgPath']=='')
        {
         return 0;   
        }
        else
        {return $this->tableGWay->insert($data); }*/
                  
                if($imageurl == '' && $vediourl != '')
                   {  
                        
                            return $this->tableGWay->insert($datavedio);
                   }
                if($imageurl != '' && $vediourl == '')
                   {
                            
                            return $this->tableGWay->insert($dataimage);
                   }
                   
                if($imageurl != '' && $vediourl != '') 
                   {
                             
                            return $this->tableGWay->insert($dataimagevedio);
                   } 
          else
          {
            return 0;
          }
           
           
            
        }
        
	public function updatecasestudies($tempHeader,$tempDescription,$vediourl,$imageurl,$id) 
   {
   // print_r($id);exit;
          
          /* $datavedio = array(  
           'vedioHeader'=>$tempHeader,
          
           'VedioDescription'=>$tempDescription,
           
            'VedioPath'=>$vediourl,
            
		); 
        
        $dataimage = array(  
           'vedioHeader'=>$tempHeader,
          
           'VedioDescription'=>$tempDescription,
           
            
            'imgPath'=>$imageurl,
		); */
      $dataimagevedio = array(  
           'vedioHeader'=>$tempHeader,
          
           'VedioDescription'=>$tempDescription,
           
            'VedioPath'=>$vediourl,
            'imgPath'=>$imageurl,
		);
       
     
         
          
          
     
      /*  if ($data['VedioPath']=='' || $data['imgPath']=='')
        {
         return 0;   
        }
        else
        {return $this->tableGWay->insert($data); }*/
                  if ($imageurl == '' && $vediourl== '')
                  {
                    
                    return 0;
                  }
                if($imageurl == '' && $vediourl != '')
                   {  
                        
                            return $this->tableGWay->update($dataimagevedio,array('vedioId'=>$id));
                   }
                if($imageurl != '' && $vediourl == '')
                   {
                            
                            return $this->tableGWay->update($dataimagevedio,array('vedioId'=>$id));
                            
                   }
                   
                if($imageurl != '' && $vediourl != '') 
                   {
                             
                            return $this->tableGWay->update($dataimagevedio,array('vedioId'=>$id));
                   } 
          
           
           
                
   }
        
        
        
        
        
        public function deletecasestudies($vedioId)
    {
      return  $this->tableGWay->delete(array('vedioId' => (int)$vedioId));
    }
    
 
    
    
    public function fetchcasestudiesImages(){
          $vedioId = (int) $vedioId;
        
        $rowset = $this->tableGWay->select(array('vedioId' => $vedioId));        
        
        $arr=array();
        foreach($rowset as $rset){
              $arr[]=array( 
              "VedioPath"=>$rset->VedioPath,
               "imgPath"=>$rset->imgPath,
                );
                }
             return $arr;

    
              } 
    
    
    

 public function fetchAll(){
        $resultSet = $this->tableGWay->select();
        return $resultSet;
    }
 
}
?>