<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class casestudiesForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');

        $this->setAttribute('method', 'post');       
      
        $this->setAttribute('enctype','multipart/form-data');



$this->add(array(
             'name' => 'vedioHeader',
             'type' => 'Textarea',
             'options' => array(
             'label' => 'VEDIO HEADER',
                  )
                  ));
         

$this->add(array(
             'name' => 'VedioDescription',
             'type' => 'Textarea',
             'options' => array(
             'label' => 'DESCRIPTION FOR THE VEDIO',
                )
                ));
                
               
$this->add(array(
             'name' => 'VedioPath',
             'type' => 'Textarea',
             'options' => array(
             'label' => 'PUT THE VEDIO LINK',
                 )
                 ));
                 

$this->add(array(
             'name' => 'picture',
             'attributes' => array(
             'type'  => 'file',
             'class' => 'txtInput txtMedium'
                   ),
             'options' => array(
             'label' => 'Image upload:',
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