<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
 


<!--SFPPAGE-->



<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <link rel="stylesheet" href="/editcss/jquery-ui.css">
<link rel="stylesheet" href="//test.scampaigns.com/user_template/55547839291e6086-Optinapp--mod-template/css/style.css">
<link rel="stylesheet" href="/editcss/jquery.datetimepicker.css">
<link rel="stylesheet" href="/editcss/jquery.timepicker.css">
<!--SFPScript type="text/javascript"  src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></!--SFPScript> 
<!--SFPScript type="text/javascript" src="/js3/jquery.datetimepicker.js"></!--SFPScript> 
<!--SFPScript type="text/javascript"  src="/js/jquery.timepicker.js"></!--SFPScript> 
<!--SFPScript>
function datepick(num)
{
  $('body').on('click', '#datepicker'+num, function(event) {
    
    $(this).datepicker({

       showOn: 'focus',

        yearRange: "1900:+85",

        changeMonth: true,

        changeYear: true
    }).focus();

});  
}


function timepick(num)
{
    $('body').on('click', '#timepicker'+num, function(event) {
     $(this).timepicker(
        {
       showOn: 'focus',
	addSliderAccess: true,
	sliderAccessArgs: { touchonly: false }
  }).focus();
}); 
}   
</!--SFPScript> 
<!--<link rel="stylesheet" href="http://localhost/zf_new/public/css/styles.css"/>
<link rel="stylesheet" href="http://localhost/zf_new/public/css/textarea.css"/>---->

<link rel="stylesheet" type="text/css" media="all" href="//test.scampaigns.com/user_template/55547839291e6086-Optinapp--mod-template/css/jui.checkboxes.css">

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->




<div class="details-n-winn-wrapper">
<div class="SFPTWO_IMAGEEDIT tagsimg_1"><img id="images1" src="//test.scampaigns.com/user_template/55547839291e6086-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%; margin:0 0 8px 0;"></div> 
<div class="SFPTWO_IMAGEEDIT tagsimg_2"><img id="images1" src="//test.scampaigns.com/user_template/55547839291e6086-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%;"></div>         
        
<div class="tool-tip SFPTWO_TEXTEDIT tags_1"><h2 class="textedit SFPTWO_TAGEDIT edit tag_1">Fill in your details and win! </h2></div>
<div class="form-container jui-checkboxes-container" id="checkboxesInit2">


<ul class="designelements clearfix" style="position:absolute;left:0; z-index:9999;">
 <li id="lilabelme" style="display:none;">
    	<a class="" style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="label" id="label">
        	<span>Title</span>
            <img src="https://test.scampaigns.com/formbuild/title_icon.png" alt="">
        </a>
    </li>
   
</ul>
<form name="form_1130937" id="editable" action="complete.php" class="SFPTWO_EDITFORM" style="margin-top:25px;" method="post">

 <img src="https://test.scampaigns.com/img/divider.png" id="imgdrag" style="display: none;">
 <img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">

<ul style="" class="sortable-list ui-sortable">
<li id="trigme" style="display: none;">
  <div>dd</div> 
  </li>
	<li style="" class="dottedLi ui-draggable SFPTWO_TEXTEDIT tags_2 element1"><div id="labeledit" class="labeledit emaildrag"><p style="font-size: 19px;color:#15ace7" id="pid_" class="opt SFPTWO_TAGEDIT tag_2"><font color="#15ace7">EmaiL address</font></p></div><input name="" type="email">
    
    </li>
    

	<li style="" class="dottedLi ui-draggable SFPTWO_TEXTEDIT tags_3 element2"><div id="diveditme" class="labeledit addmechk checkboxdrag"><p style="font-size: 19px;" id="pid_form" class="opt SFPTWO_TAGEDIT tag_3"><font color="#15ace7">What kind of campaign are you Looking for? </font>
    </p></div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_form657"><div id="chkclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-rowform657"><span class="checkboxWrapper"><input value="1" name="check_1" type="checkbox"> </span> <p class="opt SFPTWO_TAGEDIT tag_4" id="1"><font color="#15ace7">option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input value="2" name="check_2" type="checkbox"></span> <p class="opt SFPTWO_TAGEDIT tag_5" id="2"><font color="#15ace7">option2</font></p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input value="3" name="check_3" type="checkbox"></span><p class="opt SFPTWO_TAGEDIT tag_6" id="3"><font color="#15ace7">option3</font></p></div></div><p id="mepp" class="pchkadd"></p></div> </li>
    

	 <li style="" class="dottedLi ui-draggable SFPTWO_TEXTEDIT tags_4 element3"><div id="diveditme" class="labeledit"><p style="font-size: 19px;" id="pid_formmsg" class="opt SFPTWO_TAGEDIT tag_7"><font color="#15ace7">Your message</font></p><div><textarea id="editmetext" name="textareaelement3"></textarea></div></div></li>
	<li style=""><input class="" name="" value="Send" type="submit"></li>

</ul>
</form>
</div>
</div>