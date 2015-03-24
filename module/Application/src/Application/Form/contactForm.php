<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class contactForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');

        $this->setAttribute('method', 'post');       
        $this->setAttribute('enctype','multipart/form-data');



$this->add(array(
             'name' => 'subject',
             'type' => 'text',
             'options' => array(
             'label' => 'Subject',),
             'attributes'=>array('id'=>'subject',),));
         
$this->add(array(
             'name' => 'message',
             'type' => 'Textarea',
             'options' => array('label' => 'Message',),
             'attributes'=>array( 'id'=>'message',),));
                               
$this->add(array(
             'name' => 'name',
             'type' => 'text',
             'options' => array('label' => 'NAME', ),
             'attributes'=>array('onkeypress'=>'return onlyAlphabets(event,this);', 'id'=>'name',),));
                 
$this->add(array(
             'name' => 'phone',
             'type' => 'text',
             'maxlength'=>"10",
             'options' => array( 'label' => 'Phone', ),
             'attributes'=>array('onkeydown'=>'return phoneFunction(event)','id'=>'phone',),));   
                 
$this->add(array(
             'name' => 'email',
             'type' => 'email',
             'options' => array('label' => 'Email',),
             'attributes'=>array('onkeydown'=>'return emailFunction()', 'id'=>'email',),));
                 

$this->add(array(
              'name' => 'submit',
              'attributes' => array(
              'type'  => 'submit',
              'value' => 'submit',
              'onclick'=>'return submitFunction()', 'id'=>'submit',
                        ),
                        ));
        
      
        
    }
}
?>