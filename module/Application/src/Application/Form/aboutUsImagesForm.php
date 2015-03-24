<?php
namespace Application\Form;
use Zend\Form\Form;
 
class aboutUsImagesForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm2');
        $this->setAttribute('method', 'post');  
        $this->setAttribute('enctype','multipart/form-data');
        $this->add(array('name' => 'id','type' => 'hidden','options' => array('label' => 'id',)));
        $this->add(array('name' => 'name','type' => 'Textarea',));
        $this->add(array('name' => 'designation','type' => 'Textarea',));
        $this->add(array('name' => 'fbLink','type' => 'Textarea',));
        $this->add(array('name' => 'twitterLink','type' => 'Textarea',));
        $this->add(array('name' => 'instagramLink','type' => 'Textarea',));
        $this->add(array('name' => 'picture','attributes' => array('type'  => 'file','class' => 'txtInput txtMedium'),));
        $this->add(array('name' => 'submit','attributes' => array('type'  => 'submit','value' => 'SUBMIT','class' => 'save_btn'),));
    }
}

?>