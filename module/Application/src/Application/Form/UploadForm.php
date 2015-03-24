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
        
        //$this->add(array(
//            'name' => 'templateName',
//            'type' => 'Text',
//             'attributes'=>array('id'=>'subject')
//            
//        ));
//
        $this->add(array(
             'name' => 'templateName',
             'type' => 'text',
              'attributes'=>array('id'=>'templateName',),));
         
        $this->add(array(
            'name' => 'templateDesc',
            'type' => 'Text',
           'attributes'=>array('id'=>'templateDesc',),));
           /*********  added by dibyendu ***/
           
            $this->add(array(
            'name' => 'templatePrice',
            'type' => 'Text',
           'attributes'=>array('onkeydown'=>'return priceFunction(event)','id'=>'templatePrice',),));
        //$this->add(array(
//            'type' => 'Zend\Form\Element\Select',
//            'name' => 'priceValue',
//            'attributes'=>array('id'=>'priceValue',),
//            'options'=> array(
//                'options' => array( '$', '&#8364;' )
//            )
//        ));
        /*  $this->add(array(
            		'type' => 'Zend\Form\Element\Checkbox',
            		'name' => 'sample-checkbox-01',
            		'attributes'=>array('id'=>'checkbox-01',),
            		'options' => array(
            				
            				'use_hidden_element' => false,
            				'checked_value' => 1,
            				'unchecked_value' => 0,
            				
            		)
            ));*/
            
           /* $this->add(array(
            		'type' => 'Zend\Form\Element\Checkbox',
            		'name' => 'sample-checkbox-01',
            		'attributes'=>array('id'=>'checkbox-01',),
            		'options' => array(
            				'label' => 'I agree to all terms and conditions',
            				'use_hidden_element' => false
            		),
            ));*/
            
            /* $this->add(array(
            		'type' => 'Zend\Form\Element\Checkbox',
            		'name' => 'sample-checkbox-01',
            		'attributes'=>array('id'=>'checkbox-01','style'=>'display: none;'),
            		'options' => array(
            				'label' => 'database-connection',
            				'use_hidden_element' => true,
            				'checked_value' => 1,
            				'unchecked_value' => 0,
            		),
            )); */
            $this->add(array(
            		'name' => 'oneTimePrice',
            		'type' => 'Text',
            		'attributes'=>array('onkeydown'=>'return oneTimePriceFunction(event)','id'=>'oneTimePrice',),));
        /*********  added by dibyendu ***/
         $this->add(array(
            'name' => 'file',
            'attributes' => array(
               'type'  => 'file',
      //'required' => 'required',
               'class' => 'nicefile',
               'id'=>'file',
            ),
            
        ));
        
        $this->add(array(
            'name' => 'scImage',
            'attributes' => array(
               'type'  => 'file',
      //'required' => 'required',
               'class' => 'nicefile',
               'id'=>'file2',
            ),
           
        ));
        $this->add(array(
        		'name' => 'desktopImage',
        		'attributes' => array(
        				'type'  => 'file',
        				//'required' => 'required',
        				'class' => 'nicefile',
        				'id'=>'desktopImage',
        		),
        		 
        ));
        
        $this->add(array(
        		'name' => 'mobileImage',
        		'attributes' => array(
        				'type'  => 'file',
        				//'required' => 'required',
        				'class' => 'nicefile',
        				'id'=>'mobileImage',
        		),
        		 
        ));
        
        /****** code added by Poulami ******/
        $this->add(array(
            'name' => 'widget',
            'type' => 'hidden',
            'attributes' => array(
                'id' => 'wid'
            ),      
            
        ));
        
        /***** added by Poulami ends ******/
         $this->add(array(
            'name' => 'authId',
            'type' => 'hidden',
            'attributes' => array(
                'id' => 'authId'
            ), 
            
        ));
        
        
//------------------------------------------------check box------------------------------------//
        $this->add(array(
              'name' => 'submit',
              'attributes' => array(
                    'type'  => 'submit',
                    'value' => 'Send data',
                    'class' => 'save_btn',
                    'style'=>'display: none;', 
                    'disabled'=>"",
                      'id'=>'submit',
              ),
        ));
        
    }
}
?>