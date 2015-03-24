<?php
namespace Application\Model;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class blogoverview
{
public $id;
public $question;
public $answer;
public $month;
public $year;
public $days;
public $date;
public $timeofinsert;
public $linkCreator;
public $tagInsert;
public $metaTitle;
public $metaKeyword;
public $metaDescription;
    
public function exchangeArray($data)
{
    $this->id               = (isset($data['id']))              ? $data['id']              : null;
    $this->question         = (isset($data['question']))        ? $data['question']        : null;
    $this->answer           = (isset($data['answer']))          ? $data['answer']          : null;
    $this->month            = (isset($data['month']))           ? $data['month']           : null;
    $this->year             = (isset($data['year']))            ? $data['year']            : null;
    $this->days             = (isset($data['days']))            ? $data['days']            : null;
    $this->date             = (isset($data['date']))            ? $data['date']            : null;
    $this->timeofinsert     = (isset($data['timeofinsert']))    ? $data['timeofinsert']    : null;
    $this->linkCreator      = (isset($data['linkCreator']))     ? $data['linkCreator']     : null;   
    $this->tagInsert        = (isset($data['tagInsert']))       ? $data['tagInsert']       : null;
    $this->metaTitle        = (isset($data['metaTitle']))       ? $data['metaTitle']       : null;
    $this->metaKeyword      = (isset($data['metaKeyword']))     ? $data['metaKeyword']     : null;
    $this->metaDescription  = (isset($data['metaDescription'])) ? $data['metaDescription'] : null;
}
    
public function getArrayCopy() 
{
     return get_object_vars($this);     
}
             
}
?>