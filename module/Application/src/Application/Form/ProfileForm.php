<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class ProfileForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('Profile');

        $this->setAttribute('method', 'post');       
      
        $this->setAttribute('enctype','multipart/form-data');

      
        $this->add(array(
            'name' => 'picture',
            'attributes' => array(
               'type'  => 'file',
      'required' => 'required',
               'class' => 'txtInput txtMedium'
            ),
            'options' => array(
                'label' => 'File upload:',
            ),
        ));
       
        
        //submit
        $this->add(array(
              'name' => 'submit',
              'attributes' => array(
                    'type'  => 'submit',
                    'value' => 'Send data'
              ),
        ));
        
    }
}
?>