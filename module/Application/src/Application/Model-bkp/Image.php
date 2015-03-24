<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class Image 
{
	public $id;
    public $userid;
	public $path;
    public $pathThumb;
    
    public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->userid = (!empty($data['userid'])) ? $data['userid'] : null;
		$this->path = (!empty($data['path'])) ? $data['path'] : null;
        $this->pathThumb = (!empty($data['pathThumb'])) ? $data['pathThumb'] : null;
	} 
    
    public function getArrayCopy() 
    {
         return get_object_vars($this);
    }
}

?>