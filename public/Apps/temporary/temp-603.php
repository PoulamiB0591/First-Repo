<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
 


<?php include_once('/var/www/staging/public/sfpForm.php');?>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <link rel="stylesheet" href="/editcss/jquery-ui.css">
<link rel="stylesheet" href="//test.scampaigns.com/user_template/353547d9b84bd8f67-Optinapp--mod-template/css/style.css">
<link rel="stylesheet" href="/editcss/jquery.datetimepicker.css">
<link rel="stylesheet" href="/editcss/jquery.timepicker.css">
<script type="text/javascript"  src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script> 
<script type="text/javascript" src="/js3/jquery.datetimepicker.js"></script> 
<script type="text/javascript"  src="/js/jquery.timepicker.js"></script> 
<script>
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
</script> 
<!--<link rel="stylesheet" href="http://localhost/zf_new/public/css/styles.css"/>
<link rel="stylesheet" href="http://localhost/zf_new/public/css/textarea.css"/>---->

<link rel="stylesheet" type="text/css" media="all" href="//test.scampaigns.com/user_template/353547d9b84bd8f67-Optinapp--mod-template/css/jui.checkboxes.css">

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->




<div class="details-n-winn-wrapper">
<div class="SFPTWO_IMAGEEDIT tagsimg_1"><img id="images1" src="//test.scampaigns.com/user_template/353547d9b84bd8f67-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%; margin:0 0 8px 0;"></div> 
<div class="SFPTWO_IMAGEEDIT tagsimg_2"><img id="images1" src="//test.scampaigns.com/user_template/353547d9b84bd8f67-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%;"></div>         
        
<div class="tool-tip SFPTWO_TEXTEDIT tags_1"><h2 class="textedit SFPTWO_TAGEDIT edit tag_1">Fill in your details and win! </h2></div>
<div class="form-container jui-checkboxes-container" id="checkboxesInit2">


<ul class="designelements clearfix" style="position:absolute;left:0; z-index:9999;">
 <li id="lilabelme" style="position: relative; top: 770px; left: 0px; display: none;"><a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="date" id="date"><span>Date picker</span><img src="https://test.scampaigns.com/formbuild/datepicker_icon.png" alt=""></a></li>
   
</ul>
<form name="form_1384967" id="editable" action="" class="SFPTWO_EDITFORM" style="margin-top:25px;" method="post">

 <img src="https://test.scampaigns.com/img/divider.png" id="imgdrag" style="position: relative; top: 770px; display: none;">
 <img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">

<ul style="" class="sortable-list">
<li id="trigme" style="display: none;">
  <div>dd</div> 
  </li>
	<li style="" class="dottedLi SFPTWO_TEXTEDIT tags_2 element1"><div id="labeledit" class="labeledit emaildrag"><p style="font-size: 19px;color:#15ace7" id="pid_" class="opt SFPTWO_TAGEDIT tag_2"><font color="#15ace7">EmaiL address</font></p></div><input name="email" type="email">
    
    </li>
    

	<li style="" class="dottedLi SFPTWO_TEXTEDIT tags_3 element2"><div id="diveditme" class="labeledit addmechk checkboxdrag"><p style="font-size: 19px;" id="pid_form" class="opt SFPTWO_TAGEDIT tag_3"><font color="#15ace7">What kind of campaign are you Looking for? </font>
    </p></div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_form657"><div id="chkclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-rowform657"><span class="checkboxWrapper"><input value="option1" name="check_7" type="checkbox"> </span> <p class="opt SFPTWO_TAGEDIT tag_4" id="1"><font color="#15ace7">option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input value="option2" name="check_8" type="checkbox"></span> <p class="opt SFPTWO_TAGEDIT tag_5" id="2"><font color="#15ace7">option2</font></p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input value="option3" name="check_9" type="checkbox"></span><p class="opt SFPTWO_TAGEDIT tag_6" id="3"><font color="#15ace7">option3</font></p></div></div><p id="mepp" class="pchkadd"></p></div> </li>
    

	 <li style="" class="dottedLi SFPTWO_TEXTEDIT tags_4 element3"><div id="diveditme" class="labeledit"><p style="font-size: 19px;" id="pid_formmsg" class="opt SFPTWO_TAGEDIT tag_7"><font color="#15ace7">Your message</font></p><div><textarea id="editmetext" name="textareaelement3"></textarea></div></div></li>
	<li style="" class="dottedLi element4"><div id="getbtnme" class="submitdrag"><input class="" name="submit" value="Send" type="submit"></div></li>

<li class="dottedLi element5"><div id="labeledit" class="labeledit emaildrag"><p id="pid_78" class="opt SFPTWO_TAGEDIT tag_8"><font color="#15ace7">Label</font></p></div><input name="" id="email_372" type="email"></li><br style=""><br style=""><li class="dottedLi element6"><div id="getbtnme" class="submitdrag editmybtn"><input class="" name="submit" value="send" type="submit"></div></li><li class="dottedLi element7"><div id="diveditme" class="labeledit paradrag"><p id="pid_993" class="opt SFPTWO_TAGEDIT tag_10"><font color="#15ace7">paragraph</font></p><div><p id="editmetext" name="" class="opt explicit_edit" style="border: 1px solid #eee; min-height: 30px; padding: 10px;" contenteditable="false">tttyy<br></p></div></div></li><li style="position: relative; z-index: 1; left: 0px; top: 0px;" class="dottedLi element8"><div id="labeledit" class="labeledit datedrag"><p id="pid_264" class="opt SFPTWO_TAGEDIT tag_11"><font color="#15ace7">cal</font></p></div><input class="hasDatepicker" name="textboxelement8" id="datepicker1" onclick="datepick(1)" type="text"></li></ul>
</form>
</div>
</div>