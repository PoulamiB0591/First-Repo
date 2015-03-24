<?php
//added by Arnab
namespace Application\Model;



class userComment 
{
	public $id;
	public $eId;
	public $name;
	public $comment;
    
    public $timeStamp;
    public $uid;
    public $profimage;
     public $tempid;
	
	public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
	
		$this->eId = (!empty($data['eId'])) ? $data['eId'] : null;
		$this->name = (!empty($data['name'])) ? $data['name'] : null;
		$this->comment = (!empty($data['comment'])) ? $data['comment'] : null;
        
        $this->timeStamp = (!empty($data['timeStamp'])) ? $data['timeStamp'] : null;
        $this->uid = (!empty($data['uid'])) ? $data['uid'] : null;
        $this->profimage = (!empty($data['profimage'])) ? $data['profimage'] : null;
        $this->tempid = (!empty($data['tempid'])) ? $data['tempid'] : null;
	} 
    
    public function getArrayCopy() 
    {
         return get_object_vars($this);
    }
    
	
}
?>