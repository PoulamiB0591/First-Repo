<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class becomepublisherbannerForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('becomepublisherbanner');

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
            'name' => 'bannerHeader',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'BANNER HEADER',
            )
            
        ));
         $this->add(array(
        'name' => 'filFormOneHeader',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'CREATE ACCOUNT HEADER',
            )
            
        ));
         $this->add(array(
          'name' => 'filFormOneDescription',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'CREATE ACCOUNT DESCRIPTION',
            )
            
        ));  
         $this->add(array(
      'name' => 'filFormTwoHeader',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'COMPANY PROFILE HEADER',
            )
            
        )); 
         $this->add(array( 
		'name' => 'filFormTwoDescription',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'COMPANY PROFILE DESCRIPTION',
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
                    'value' => 'SUBMIT'
              ),
        ));
        
      
        
    }
}

?>