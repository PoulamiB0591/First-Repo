<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class homepagewalloffameForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');

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
       $this->add(array(
       		'name' => 'description',
       		'type' => 'Textarea',
       
       
       
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