<?php
//added by Poulami
namespace Application\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
use Application\Model\Developer;
use Application\Model\DeveloperTable;
use Zend\Validator\Digits;

class Template 
{
	public $id;
    public $devId;
	public $templateName;
	public $scImage;
	public $tempZipName;
    public $tempFoldName;
   // public $tempZipDesc;
    public $widgets;
    public $view;
    //public $authId;
    public $approval;
    public $autometic_review;
    protected $inputFilter;
   
	public $fbconnect;
	public $databaseCheck;
    public $permission;
    public $facebook_connection;
    public $template_select;
    public $templateTableName;
    public $templateDesc;
    public $templatePrice;
    public $desktopImage;
    public $mobileImage;
    public $oneTimePrice;
   	public $fName;
	public $lName;
	public $eId;
	public $uname;
	public $pwd;
	public $did;
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
   
   // public $databaseCheck;
    
	function exchangeArray($data)
	{   
	   
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->did = (!empty($data['did'])) ? $data['did'] : null;
        $this->devId = (!empty($data['devId'])) ? $data['devId'] : null;
		$this->templateName = (!empty($data['templateName'])) ? $data['templateName'] : null;
        $this->templateDesc = (!empty($data['templateDesc'])) ? $data['templateDesc'] : null;
         $this->templatePrice = (!empty($data['templatePrice'])) ? $data['templatePrice'] : null;
         $this->oneTimePrice = (!empty($data['oneTimePrice'])) ? $data['oneTimePrice'] : null;
        // $this->Author = (!empty($data['Author'])) ? $data['Author'] : null;
		$this->scImage = (!empty($data['scImage'])) ? $data['scImage'] : $data['scImage'];
		$this->desktopImage = (!empty($data['desktopImage'])) ? $data['desktopImage'] : $data['desktopImage'];
		$this->mobileImage = (!empty($data['mobileImage'])) ? $data['mobileImage'] : $data['mobileImage'];
		$this->tempZipName = (!empty($data['tempZipName'])) ? $data['tempZipName'] : $data['tempZipName'];
        $this->tempFoldName = (!empty($data['tempFoldName'])) ? $data['tempFoldName'] : $data['tempFoldName'];
        //$this->Author = (!empty($data['Author'])) ? $data['Author'] : $data['Author'];
        $this->widgets = (!empty($data['widgets'])) ? $data['widgets'] : $data['widgets'];
        $this->view = (!empty($data['view'])) ? $data['view'] : $data['view'];
       // $this->authId = (!empty($data['authId'])) ? $data['authId'] : $data['authId'];
        $this->approval = (!empty($data['approval'])) ? $data['approval'] : $data['approval'];
        $this->fbconnect = (!empty($data['fbconnect'])) ? $data['fbconnect'] : $data['fbconnect'];
        $this->databaseCheck = (!empty($data['databaseCheck'])) ? $data['databaseCheck'] : $data['databaseCheck'];
        
        
        $this->permission = (!empty($data['permission'])) ? $data['permission'] : $data['permission'];
       $this->autometic_review  = (!empty($data['autometic_review'])) ? $data['autometic_review'] : $data['autometic_review'];
        $this->facebook_connection  = (!empty($data['facebook_connection'])) ? $data['facebook_connection'] : $data['facebook_connection'];
       $this->template_select = (!empty($data['template_select'])) ? $data['template_select'] : $data['template_select'];	
        $this->templateTableName = (!empty($data['templateTableName'])) ? $data['templateTableName'] : $data['templateTableName'];	

        
        
        
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
    
    } 
    
    public function getArrayCopy() //added by Poulami
    {
         return get_object_vars($this);
    }
    
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    public function getInputFilter()
    {
        if(!$this->inputFilter)
        {
            $inputFilter = new InputFilter();
            
            $inputFilter->add(array(
                'name' => 'tempZipName',
                'required' => true,
                'validators' => array(
                     array(
                         'name' => 'StringLength',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min' => 0,
                             'max' => 100,
                         ),
                     ),
                ),

            ));
            
            $this->inputFilter = $inputFilter;
        }
        
        return $this->inputFilter;
    }
    

	
}
?>