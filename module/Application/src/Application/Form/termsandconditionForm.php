<?php


namespace Application\Form;


use Zend\Form\Form;

class termsandconditionForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');

        $this->setAttribute('method', 'post');       
        
        $this->setAttribute('enctype','multipart/form-data');
       
        
//
//        $this->add(array(
//            'name' => 'headline',
//            'type' => 'Text',
//            
//            
//        ));
        
        $this->add(array(
            'name' => 'subheader',
            'type' => 'Text',
        ));
      
         $this->add(array(
            'name' => 'description',
            'type' => 'Textarea',
        ));
      
         $this->add(array(
              'name' => 'conditionsubmit',
              'attributes' => array(
                    'type'  => 'submit',
                    'value' => 'Send data',
                    'class' => 'save_btn'
              ),
        ));
        
    }
}
?>