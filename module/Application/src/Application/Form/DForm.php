<?php 

namespace Application\Form;

use Zend\Form\Form;

class DForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('devForm');
        
        $this->add(array(
            'name' => 'id',
            'type' => 'text',
        ));
        
        $this->add(array(
            'name' => 'fName',
            'type' => 'Text',
            'options' => array(
                'label' => 'First Name',
            )
        ));
        
        $this->add(array(
            'name' => 'lName',
            'type' => 'Text',
            'options' => array(
                'label' => 'Last Name',
            )
        ));
        
        $this->add(array(
            'name' => 'eId',
            'type' => 'Text',
            'options' => array(
                'label' => 'Email ID',
            )
        ));
        
        $this->add(array(
            'name' => 'uname',
            'type' => 'Text',
            'options' => array(
                'label' => 'User Name',
            )
        ));
        
        $this->add(array(
            'name' => 'pwd',
            'type' => 'Password',
            'options' => array(
                'label' => 'Password',
            )
        ));
        
        $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => array(
                'value' => 'Register',
                'id' => 'regButton',
            )
        ));
    }
}

