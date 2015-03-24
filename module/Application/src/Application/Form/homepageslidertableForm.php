<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class homepageslidertableForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');

        $this->setAttribute('method', 'post');       
      
        $this->setAttribute('enctype','multipart/form-data');



  $this->add(array(
            'name' => 'Title',
            'type' => 'Textarea',
            
            'options' => array(
                'label' => 'COMMUNITY TITLE',
            )
            
        ));
        // $this->add(array(
//            'name' => 'slideSubHeader',
//            'type' => 'Textarea',
//            'required' => 'required',
//            'options' => array(
//                'label' => 'SLIDE SUB HEADER',
//            )
//            
//        ));


         //$this->add(array(
//            'name' => 'slideAmount',
//            'type' => 'Textarea',
//            'required' => 'required',
//            'options' => array(
//                'label' => 'SET AMOUNT',
//            )
//            
//        ));
        $this->add(array(
            'name' => 'imageLink',
            'type' => 'Text',
            
            'options' => array(
                'label' => 'Iamge Link',
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
                    'value' => 'Insert'
              ),
        ));
        
      
        
    }
}
?>