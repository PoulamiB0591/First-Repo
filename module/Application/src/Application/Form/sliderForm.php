<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class homepageslidertableForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('homepageslidertable');

        $this->setAttribute('method', 'post');       
      
        $this->setAttribute('enctype','multipart/form-data');



  $this->add(array(
            'name' => 'slideHeader',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'SLIDE HEADER',
            )
            
        ));
         $this->add(array(
            'name' => 'slideSubHeader',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'SLIDE SUB HEADER',
            )
            
        ));

 $this->add(array(
            'name' => 'slideDescription',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'DESCRIPTION FOR THE SLIDE',
            )
            
        ));
         $this->add(array(
            'name' => 'slideAmount',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'SET AMOUNT',
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