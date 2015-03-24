<?php
//added by Arnab
namespace Application\Model;

class userTemplateDetails 
{
	public $id;
	public $folder_name;
	public $pageName;
	public $newpagename;
	public $values;
    //public $timestamp;
    
	
    
	
	public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->folder_name = (!empty($data['folder_name'])) ? $data['folder_name'] : null;
		$this->pageName = (!empty($data['pageName'])) ? $data['pageName'] : null;
		$this->newpagename = (!empty($data['newpagename'])) ? $data['newpagename'] : null;
		$this->values = (!empty($data['values'])) ? $data['values'] : null;
        $this->timestamp = (!empty($data['timestamp'])) ? $data['timestamp'] : null;
		
	} 
    
    public function getArrayCopy() 
    {
         return get_object_vars($this);
    }
	
}
?>