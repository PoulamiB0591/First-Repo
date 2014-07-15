<?php


namespace Application\Form;


use Zend\Form\Form;

class UploadForm2 extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');

        $this->setAttribute('method', 'post');       
        
        $this->setAttribute('enctype','multipart/form-data');
        $this->add(array(
            'name' => 'id',
            'type' => 'hidden',
            
            
        ));
       
        

        $this->add(array(
            'name' => 'change_tagline',
            'type' => 'Textarea',
            
            
        ));
        
        $this->add(array(
            'name' => 'text2',
            'type' => 'Textarea',
            
        ));
        
        $this->add(array(
            'name' => 'text3',
            'type' => 'Textarea',
           
            
        ));
        
        $this->add(array(
            'name' => 'text5',
            'type' => 'Textarea',
            
            
        ));
        
        $this->add(array(
            'name' => 'text6',
            'type' => 'Textarea',
            
            
        ));
         
        $this->add(array(
            'name' => 'header',
            'type' => 'Textarea',
            
            
        ));
         
        $this->add(array(
            'name' => 'hdescription',
            'type' => 'Textarea',
            
            
        ));
        
        $this->add(array(
            'name' => 'pname',
            'attributes' => array(
               'type'  => 'file',
      
               'class' => 'txtInput txtMedium'
            ),
           
        ));
        
       // $this->add(array(
//    'name' => 'plink',
//    'type'  => 'Image',
//    'attributes' => array(
//        'height'=> '200',
//            'width' => '200',
//        'src' => 'http://localhost/zf_new/public/upload/Chrysanthemum.jpg',
//    ),
//));
        
        
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