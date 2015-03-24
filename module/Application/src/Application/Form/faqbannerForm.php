<?php
namespace Application\Form;
use Zend\Form\Form;
 
class faqbannerForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');
        $this->setAttribute('method', 'post');  
        $this->setAttribute('enctype','multipart/form-data');
        $this->add(array('name' => 'id','type' => 'hidden','options' => array('label' => 'id',)));
        $this->add(array('name' => 'bannerHeader','type' => 'Textarea',));
        $this->add(array('name' => 'questionLine','type' => 'Textarea',));
        $this->add(array('name' => 'picture','attributes' => array('type'  => 'file','class' => 'txtInput txtMedium'),));
        $this->add(array('name' => 'submit','attributes' => array('type'  => 'submit','value' => 'SUBMIT','class' => 'save_btn'),));
    }
}

?>