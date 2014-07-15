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
            'options' => array(
                'label' => 'DevId',
            ),
        )); /***** added by Poulami ends ******/
        
        $this->add(array(
            'name' => 'templateName',
            'type' => 'Text',
            'options' => array(
                'label' => 'Template Name',
            )
        ));
        
         $this->add(array(
            'name' => 'file',
            'attributes' => array(
               'type'  => 'file',
      'required' => 'required',
               'class' => 'txtInput txtMedium'
            ),
            'options' => array(
                'label' => 'File upload:',
            ),
        ));
        
        $this->add(array(
            'name' => 'scImage',
            'attributes' => array(
               'type'  => 'file',
      'required' => 'required',
               'class' => 'txtInput txtMedium'
            ),
            'options' => array(
                'label' => 'Screenshot upload:',
            ),
        ));
       
        
        
        $this->add(array(
              'name' => 'submit',
              'attributes' => array(
                    'type'  => 'submit',
                    'value' => 'Send data'
              ),
        ));
        
    }
}
?>