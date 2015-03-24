<?php

namespace Application\Form;
 
use Zend\Form\Form;
 
class becomepublisherForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');

        $this->setAttribute('method', 'post');       
      
        $this->setAttribute('enctype','multipart/form-data');



  $this->add(array(
            'name' => 'picHeader',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'PICTURE HEADER',
            )
            
        ));
        
            $this->add(array(
            'name' => 'picDescription',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'DESCRIPTION FOR THE PICTURE',
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
       
     
        $this->add(array(
            'name' => 'catagory',
            'attributes' => array(
               'type'  => 'hidden',
    
               'class' => 'txtInput txtMedium'
            ),
            'options' => array(
                'label' => 'SET CATAGORY:',
            ),
               ));            

        //$this->add(array(
//        'type' => 'Zend\Form\Element\Radio',
//        'name' => 'multi-checkbox',
//        'options' => array(
//            'label' => 'What do you like ?',
//            'value_options' => array(
//                '1' => 'Golden Author',
//                '2' => 'Bronze Author',
//                '3' => 'Zilver Author',
//            ),
//           
//        )
//    ));
    $this->add(array(
        'type' => 'Zend\Form\Element\Radio',
        'name' => 'multi-checkbox',
       
        'options' => array(
        'label' => 'What do you like ?',
            'value_options' => array(
                'Golden Author' => array(
                'value' => 'Golden Author',
                'attributes' => array(
                   'id'=>'1',
                   'class'=>'1',
                )
           
        ),
        'Bronze Author' => array(
                'value' => '2',
                'attributes' => array(
                   'id'=>'2',
                   'class'=>'2',
                )
           
        ),
        'Zilver Author' => array(
                'value' => '3',
                'attributes' => array(
                   'id'=>'3',
                   'class'=>'3',
                )
           
        )
        )
        )
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