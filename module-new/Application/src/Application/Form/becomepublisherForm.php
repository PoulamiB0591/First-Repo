<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class becomepublisherForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('becomepublisher');

        $this->setAttribute('method', 'post');       
      
        $this->setAttribute('enctype','multipart/form-data');



  $this->add(array(
            'name' => 'picHeader',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'PICTURE HEADER',
            )
            
        ));
        
            $this->add(array(
            'name' => 'picDescription',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'DESCRIPTION FOR THE PICTURE',
            )
            
        ));
         
      
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
       
     
        //submit
        $this->add(array(
              'name' => 'submit',
              'attributes' => array(
                    'type'  => 'submit',
                    'value' => 'update'
              ),
        ));
        
      
        
    }
}
?>