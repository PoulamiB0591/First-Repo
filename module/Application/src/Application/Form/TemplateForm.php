<?php


namespace Application\Form;


use Zend\Form\Form;

class TemplateForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');

        $this->setAttribute('method', 'post');       
        
        $this->setAttribute('enctype','multipart/form-data');
        $this->add(array(
            'name' => 'id',
            'type' => 'hidden',
            'options' => array(
                'label' => 'id',
            )
            
        ));
       
        

        $this->add(array(
            'name' => 'BannerHeader',
            'type' => 'Textarea',
            
            
        ));
        
        $this->add(array(
            'name' => 'BannerDesc',
            'type' => 'Textarea',
            
            
        ));
        
        $this->add(array(
            'name' => 'campaignques',
            'type' => 'Textarea',
            
        ));
        
        $this->add(array(
            'name' => 'campaignheading',
            'type' => 'Textarea',
            
            
        ));
        
        $this->add(array(
            'name' => 'campaignsubhead',
            'type' => 'Textarea',
            
            
        ));
        
        $this->add(array(
            'name' => 'campaigndesc',
            'type' => 'Textarea',
            
            
        ));
                $this->add(array(
            'name' => 'campaignlink',
            'attributes' => array(
               'type'  => 'file',
     
               'class' => 'txtInput txtMedium'
            ),
            
        ));
       
      
          $this->add(array(
            'name' => 'pname',
            'attributes' => array(
               'type'  => 'file',
     
               'class' => 'txtInput txtMedium'
            ),
            
        ));
      
        
        
         $this->add(array(
              'name' => 'submit',
              'attributes' => array(
                    'type'  => 'submit',
                    'value' => 'Send data',
                    'class' => 'save_btn'
              ),
        ));
        
    }
}
?>