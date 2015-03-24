<?php
namespace Application\Model; 
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class faqContainer
{
    public $id;
    public $question;
    public $answer; 
    public $referenceId; 
        
     
public function exchangeArray($data)
{
    $this->id                = (isset($data['id']))              ? $data['id']             : null;
    $this->question          = (isset($data['question']))        ? $data['question']       : null;
    $this->answer            = (isset($data['answer']))          ? $data['answer']         : null;
    $this->referenceId       = (isset($data['referenceId']))     ? $data['referenceId']   : null;
  
    
}
     
   public function getArrayCopy() 
    {
         return get_object_vars($this);
         
    }
       
}

?>