<?php
//added by Poulami
namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class Developer 
{
	public $id;
	public $fName;
	public $lName;
	public $eId;
	public $uname;
	public $pwd;
    public $stepsCompleted;
    public $timeStamp;
    public $date;
    public $gender;
    public $cname;
    public $ctype;
    public $cphone;
    public $ccity;
    public $ccountry;
    public $cdesc;
    public $cimage;
    public $uniq;
    public $rating;
    //protected $inputFilter;
	
	public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->fName = (!empty($data['fName'])) ? $data['fName'] : null;
		$this->lName = (!empty($data['lName'])) ? $data['lName'] : null;
		$this->eId = (!empty($data['eId'])) ? $data['eId'] : null;
		$this->uname = (!empty($data['uname'])) ? $data['uname'] : null;
		$this->pwd = (!empty($data['pwd'])) ? $data['pwd'] : null;
        
        $this->timeStamp = (!empty($data['timeStamp'])) ? $data['timeStamp'] : null;
        $this->date = (!empty($data['date'])) ? $data['date'] : null;
        $this->gender = (!empty($data['gender'])) ? $data['gender'] : null;
        $this->cname = (!empty($data['cname'])) ? $data['cname'] : null;
        $this->ctype = (!empty($data['ctype'])) ? $data['ctype'] : null;
        $this->cphone = (!empty($data['cphone'])) ? $data['cphone'] : null;
        $this->ccity = (!empty($data['ccity'])) ? $data['ccity'] : null;
        $this->ccountry = (!empty($data['ccountry'])) ? $data['ccountry'] : null;
        $this->cdesc = (!empty($data['cdesc'])) ? $data['cdesc'] : null;
        $this->cimage = (!empty($data['cimage'])) ? $data['cimage'] : null;
         $this->uniq = (!empty($data['uniq'])) ? $data['uniq'] : null;
         $this->rating = (!empty($data['rating'])) ? $data['rating'] : null;
         $this->stepsCompleted = (!empty($data['stepsCompleted'])) ? $data['stepsCompleted'] : null;
	} 
    
    public function getArrayCopy() //added by Poulami
    {
         return get_object_vars($this);
    }
    /*public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("not used");
    }
    
    public function getInputFilter()
    {
        
    }*/
	
}
?>