<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class rating 
{
	public $id;
	public $tempid;
    public $rating;
    public $hits;
    
    public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->tempid = (!empty($data['tempid'])) ? $data['tempid'] : null;
        $this->rating = (!empty($data['rating'])) ? $data['rating'] : null;
        $this->hits = (!empty($data['hits'])) ? $data['hits'] : null;
	} 
    
    public function getArrayCopy()
    {
         return get_object_vars($this);
    }
}

?>