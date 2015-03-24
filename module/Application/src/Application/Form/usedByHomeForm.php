<?php


namespace Application\Form;


use Zend\Form\Form;

class usedByHome extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');

        $this->setAttribute('method', 'post');       
        
        $this->setAttribute('enctype','multipart/form-data');
        
       
        

        $this->add(array(
            'name' => 'appLink',
            'type' => 'Text',
            
            
        ));
        
        $this->add(array(
            'name' => 'appImage',
            'attributes' => array(
               'type'  => 'file',    
               'class' => 'txtInput txtMedium'
            ),
            'options' => array(
                'label' => 'Image upload:',
            ),
        ));
        
         $this->add(array(
              'name' => 'appsubmit',
              'attributes' => array(
                    'type'  => 'submit',
                    'value' => 'Upload App Image',
                    'class' => 'save_btn'
              ),
        ));
        
    }
}
?>