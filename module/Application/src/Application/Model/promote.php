<?php

/**
 * @author 
 * @copyright 2014
 */

namespace Application\Model;
 
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
 
class promote

{
    public $id;
    public $devId;
    public $tempId;
    public $aboutCmp;
    public $campGoal;
    public $fbcoverDesc;
    public $fbcoverImage;
    public $responsiveImage; 
    public $responsiveDesc;
    public $screenshotId;
    public $bannerimage;
    public $bannertext;
 
public function exchangeArray($data)
{
    $this->id               = (isset($data['id']))                            ? $data['id']                 : null;
    $this->devId            = (isset($data['devId']))                         ? $data['devId']              : null;
    $this->tempId           = (isset($data['tempId']))                        ? $data['tempId']             : null;
    $this->aboutCmp         = (isset($data['aboutCmp']))                      ? $data['aboutCmp']           : null;
    $this->campGoal         = (isset($data['campGoal']))                      ? $data['campGoal']           : null;
    $this->fbcoverDesc      = (isset($data['fbcoverDesc']))                   ? $data['fbcoverDesc']        : null;
    $this->fbcoverImage     = (isset($data['fbcoverImage']))                  ? $data['fbcoverImage']       : null;
    $this->responsiveImage  = (isset($data['responsiveImage']))               ? $data['responsiveImage']    : null;
    $this->responsiveDesc   = (isset($data['responsiveDesc']))                ? $data['responsiveDesc']     : null;
    $this->screenshotId     = (isset($data['screenshotId']))                  ? $data['screenshotId']       : null;
    $this->bannerimage   = (isset($data['bannerimage']))                      ? $data['bannerimage']        : null;
    $this->bannertext     = (isset($data['bannertext']))                      ? $data['bannertext']         : null;
    
}
public function getArrayCopy() 
{
    return get_object_vars($this);
     
}
        
    
}

?>