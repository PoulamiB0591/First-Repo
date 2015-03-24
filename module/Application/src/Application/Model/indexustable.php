<?php
//added by Arnab
namespace Application\Model;

class indexustable 
{
	public $id;
	public $pagename;
	public $question;
	public $a1;
	public $a2;
	public $a3;
    
    public $a4;
    public $a5;
    public $a6;
	
	public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->pagename = (!empty($data['pagename'])) ? $data['pagename'] : null;
		$this->question = (!empty($data['question'])) ? $data['question'] : null;
		$this->a1 = (!empty($data['a1'])) ? $data['a1'] : null;
		$this->a2 = (!empty($data['a2'])) ? $data['a2'] : null;
		$this->a3 = (!empty($data['a3'])) ? $data['a3'] : null;
        
        $this->a4 = (!empty($data['a4'])) ? $data['a4'] : null;
        $this->a5 = (!empty($data['a5'])) ? $data['a5'] : null;
        $this->a6 = (!empty($data['a6'])) ? $data['a6'] : null;
 
	} 
    
    public function getArrayCopy()
    {
         return get_object_vars($this);
    }
    
}
?>