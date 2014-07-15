<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class homepagewalloffameForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('homepagewalloffame');

        $this->setAttribute('method', 'post');       
      
        $this->setAttribute('enctype','multipart/form-data');

      
        $this->add(array(
            'name' => 'picture',
            'attributes' => array(
               'type'  => 'file',
     
               'class' => 'txtInput txtMedium'
            ),
            'options' => array(
                'label' => 'File upload:',
            ),
        ));
       
       $this->add(array(
            'name' => 'pname',
            'type' => 'Text',
            
            
        ));
     
        //submit
        $this->add(array(
              'name' => 'submit',
              'attributes' => array(
                    'type'  => 'submit',
                    'value' => 'upload'
              ),
        ));
        
    }
}
?>