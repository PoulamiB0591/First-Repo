<?php
namespace Application\Form;
use Zend\Form\Form;

class forgetpasswordForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');
        $this->setAttribute('method', 'post');  
        $this->setAttribute('enctype','multipart/form-data');
        
        $this->add(array(
            'name' => 'id',
            'type' => 'hidden',
            'options' => array
            ('label' => 'id',)
                      ));
       
       $this->add(array(
            'name' => 'newpass',
            'type' => 'password',
            'attributes'=>array('id'=>'newpass'),
                   ));
      
        
       $this->add(array(
            'name' => 'conpass',
            'type' => 'password',
            'attributes'=>array('id'=>'conpass'),
                 ));
        
      
       
           $this->add(array(
              'name' => 'submit',
              'attributes' => array(
                    'type'  => 'submit',
                    'value' => 'SEND',
                    'class' => 'continue',
                    'style'=>'display: none;', 
                    'disabled'=>"",
                      'id'=>'submitbutton_check',
              ),
        ));
        
    }
}
?>