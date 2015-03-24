<?php
namespace Application\Form;
use Zend\Form\Form;

class blogoverviewForm extends Form
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
            'name' => 'question',
            'type' => 'Textarea',
                   ));
      
        
       $this->add(array(
            'name' => 'answer',
            'type' => 'Textarea',
            'attributes'=>array( 'id'=>'bodyen',),
                 ));
        $this->add(array(
            'name' => 'linkCreator',
            'type' => 'Text',
            
                 ));
                 $this->add(array(
            'name' => 'tagInsert',
            'type' => 'Textarea',
            'attributes'=>array('id'=>'tags_1','class'=>"tags"),
                 ));
      $this->add(array(
            'name' => 'metaTitle',
            'type' => 'Textarea',
            
                 ));
                 $this->add(array(
            'name' => 'metaKeyword',
            'type' => 'Textarea',
            
                 ));
                 $this->add(array(
            'name' => 'metaDescription',
            'type' => 'Textarea',
            
                 ));
                 
                 $this->add(array(
                 		'name' => 'picture',
                 		'required'    => true,
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
           'attributes' => array
           ('type'  => 'submit','value' => 'Send data','class' => 'save_btn'),
                ));
        
    }
}
?>