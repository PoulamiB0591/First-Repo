<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class becomepublisherstudioForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('becomepublisherstudio');

        $this->setAttribute('method', 'post');       
      
        $this->setAttribute('enctype','multipart/form-data');



  $this->add(array(
            'name' => 'headLine',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'HEADER',
            )
            
        ));
         $this->add(array(
            'name' => 'subHeadLine',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'SUB HEADER',
            )
            
        ));

 $this->add(array(
            'name' => 'description',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'DESCRIPTION',
            )
            
        ));
        
         $this->add(array(
            'name' => 'tagLine',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'TAG LINE',
            )
            
        ));

      
        $this->add(array(
            'name' => 'mainImage',
            'attributes' => array(
               'type'  => 'file',
    
               'class' => 'txtInput txtMedium'
            ),
            'options' => array(
                'label' => 'File upload for main Image:',
            ),
        ));
       $this->add(array(
            'name' => 'subImage',
            'attributes' => array(
               'type'  => 'file',
    
               'class' => 'txtInput txtMedium'
            ),
            'options' => array(
                'label' => 'File upload for Subimage:',
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