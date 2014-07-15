<?php


namespace Application\Form;


use Zend\Form\Form;

class UploadForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm');

        $this->setAttribute('method', 'post');       
        
        $this->setAttribute('enctype','multipart/form-data');
        
        /***** added by Poulami ******/
        $this->add(array(
            'name' => 'devId',
            'type' => 'hidden',
            
        )); /***** added by Poulami ends ******/
        
        $this->add(array(
            'name' => 'templateName',
            'type' => 'Text',
            
        ));

        $this->add(array(
            'name' => 'templateDesc',
            'type' => 'Textarea',
            
        ));
        
         $this->add(array(
            'name' => 'file',
            'attributes' => array(
               'type'  => 'file',
      'required' => 'required',
               'class' => 'nicefile'
            ),
            
        ));
        
        $this->add(array(
            'name' => 'scImage',
            'attributes' => array(
               'type'  => 'file',
      'required' => 'required',
               'class' => 'nicefile'
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