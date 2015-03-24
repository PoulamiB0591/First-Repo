<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class imagesAboutUsForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');
        $this->setAttribute('method', 'post');       
        $this->setAttribute('enctype','multipart/form-data');
        
        $this->add(array(
            'name' => 'imageName',
            'type' => 'Text',
            'options' => array(
               					 'label' => 'IMAGE NAME',
            				  )         
        			));
       
        $this->add(array(
            'name' => 'imageDescription',
            'type' => 'Textarea',
            'options' => array(
            					'label' => 'IMAGE DESCRIPTION',
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