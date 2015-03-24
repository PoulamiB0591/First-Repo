<?php

/**
 * @author 
 * @copyright 2014
 */

namespace Application\Model;
 
/*use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 */
class  blogdetailss

{
    public $id;
    public $name;
    public $email;
    public $message;
    public $date;
    public $time;
    public $image;
    
  // protected $inputFilter;
     
    public function exchangeArray($data)
    {
        $this->id  = (isset($data['id']))  ? $data['id']     : null;
        $this->name = (isset($data['name']))  ? $data['name']     : null;
        $this->email  = (isset($data['email']))  ? $data['email']     : null;
           $this->message  = (isset($data['message']))  ? $data['message']     : null;
        $this->date = (isset($data['date']))  ? $data['date']     : null;
        $this->time  = (isset($data['time']))  ? $data['time']     : null;
        $this->image  = (isset($data['image']))  ? $data['image']     : null;
    }
    
    
}

?>