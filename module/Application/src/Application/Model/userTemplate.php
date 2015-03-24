<?php

namespace Application\Model;

/*use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;*/

class userTemplate 
{
   	public $id;
	public $user_id;
	public $template_id;
    public $template_name;
    public $template_link;
    public $new_template_name;
    public $date;
     public $time;
     public $appid;
     public $appsecret;
     public $check_fbtag;
     public $campaign_number;
     public $webUrl;
     public $facebook_number;
     public $fbPage;
     public $pageId;
     public $pageAccessToken;
     public $fbUrl;
     public $published;
     public $pub_date;
     public $end_date;
     public $org_reach;
     public $sp_reach;
     public $fb_share;
     public $twitter_share;
     public $linked_share;
     public $formUniqueName;
    
    public function exchangeArray($data)
	{
		$this->id = (!empty($data['id'])) ? $data['id'] : null;
		$this->user_id = (!empty($data['user_id'])) ? $data['user_id'] : null;
        $this->template_id = (!empty($data['template_id'])) ? $data['template_id'] : null;
        $this->template_name = (!empty($data['template_name'])) ? $data['template_name'] : null;
        $this->template_link= (!empty($data['template_link'])) ? $data['template_link'] : null;
       
        $this->new_template_name= (!empty($data['new_template_name'])) ? $data['new_template_name'] : null;
        $this->date= (!empty($data['date'])) ? $data['date'] : null;
        $this->time= (!empty($data['time'])) ? $data['time'] : null;
       
        $this->appid= (!empty($data['appid'])) ? $data['appid'] : null;
        $this->appsecret= (!empty($data['appsecret'])) ? $data['appsecret'] : null;
        $this->check_fbtag = (!empty($data['check_fbtag'])) ? $data['check_fbtag'] : null;
        $this->campaign_number = (!empty($data['campaign_number'])) ? $data['campaign_number'] : null;
        $this->facebook_number = (!empty($data['facebook_number'])) ? $data['facebook_number'] : null;
        $this->webUrl = (!empty($data['webUrl'])) ? $data['webUrl'] : "";
        $this->fbPage = (!empty($data['fbPage'])) ? $data['fbPage'] : null;
        $this->pageId = (!empty($data['pageId'])) ? $data['pageId'] : null;
        $this->pageAccessToken = (!empty($data['pageAccessToken'])) ? $data['pageAccessToken'] : null;
        $this->fbUrl = (!empty($data['fbUrl'])) ? $data['fbUrl'] : "";
        $this->published = (!empty($data['published'])) ? $data['published'] : null;
        $this->pub_date = (!empty($data['pub_date'])) ? $data['pub_date'] : null;
        $this->end_date = (!empty($data['end_date'])) ? $data['end_date'] : null;
        $this->org_reach = (!empty($data['org_reach'])) ? $data['org_reach'] : null;
        $this->sp_reach = (!empty($data['sp_reach'])) ? $data['sp_reach'] : null;
        $this->fb_share = (!empty($data['fb_share'])) ? $data['fb_share'] : null;
        $this->twitter_share = (!empty($data['twitter_share'])) ? $data['twitter_share'] : null;
        $this->linked_share = (!empty($data['linked_share'])) ? $data['linked_share'] : null;
        $this->formUniqueName = (!empty($data['formUniqueName'])) ? $data['formUniqueName'] : null;
           
         
         
	} 
    
    public function getArrayCopy() 
    {
         return get_object_vars($this);
    }
}

?>