<?php
namespace Application\Model;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class indexusPage
{
    public $id;
    public $pageName;
    public $answerText;
    
        
    public function exchangeArray($data)
    {
        $this->id                  = (isset($data['id']))              ? $data['id']              : null;
        $this->pageName              = (isset($data['pageName']))          ? $data['pageName']          : null;
        $this->answerText         = (isset($data['answerText']))     ? $data['answerText']     : null;
        
    }
        
    public function getArrayCopy() 
    {
         return get_object_vars($this);     
    }
             
}
?>