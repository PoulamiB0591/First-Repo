<?php
namespace Application\Model;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class formreport
{
    public $id;
    public $publisher_id;
    public $form_uniqid;
    public $form_element_name;
    public $form_element_values;
    public $count;
    public $counter;
  
    
public function exchangeArray($data)
{
    $this->id                     = (isset($data['id']))                  ? $data['id']                   : null;
    $this->publisher_id           = (isset($data['publisher_id']))        ? $data['publisher_id']         : null;
    $this->form_uniqid            = (isset($data['form_uniqid']))         ? $data['form_uniqid']          : null;
    $this->form_element_name      = (isset($data['form_element_name']))   ? $data['form_element_name']    : null;
    $this->form_element_values    = (isset($data['form_element_values'])) ? $data['form_element_values']  : null;
    $this->count                  = (isset($data['count'])) ? $data['count']  : null;
    $this->counter                = (isset($data['counter'])) ? $data['counter']  : null;
    
}

public function getArrayCopy() 
{
    return get_object_vars($this);
}

}
?>