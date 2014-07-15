<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class templateimagesForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('templateimages');

        $this->setAttribute('method', 'post');       
      
        $this->setAttribute('enctype','multipart/form-data');



  $this->add(array(
            'name' => 'imgHeader',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'IMAGE HEADER',
            )
            
        ));
         $this->add(array(
            'name' => 'imgSubHeader',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'IMAGE SUB HEADER',
            )
            
        ));

 $this->add(array(
            'name' => 'imgDescription',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'DESCRIPTION FOR THE IMAGE',
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