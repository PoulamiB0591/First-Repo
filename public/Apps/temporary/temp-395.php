<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
 


<?php include_once('/var/www/staging/public/sfpForm.php');?>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <link rel="stylesheet" href="/editcss/jquery-ui.css">
<link rel="stylesheet" href="//test.scampaigns.com/user_template/450549a816f1c11112-Optinapp--mod-template/css/style.css">
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

<link rel="stylesheet" type="text/css" media="all" href="//test.scampaigns.com/user_template/450549a816f1c11112-Optinapp--mod-template/css/jui.checkboxes.css">

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->




<div class="details-n-winn-wrapper">
<div style="height: 299px; width: 763px;" id="editable" class="SFPTWO_IMAGEEDIT tagsimg_1 imgEdit1 ui-resizable imgEdit2 imgEdit3"><div class="ui-draggable" id="draggable2" style="z-index: 2; position: absolute; left: -117px; top: -307px;"><div><div class="ui-resizable" id="resizable2" style="z-index: 2; height: 319px; width: 478.5px; top: 308px; left: 461.5px;"><img class="layeredImage" id="images2" src="http://test.scampaigns.com/library/8e63da79b1230a3ba80a013992aec943.jpg" style="height:100%; width:100%; z-index:2;"></div></div></div><div aria-disabled="true" class="ui-draggable ui-draggable-disabled ui-state-disabled" id="draggable1" style="z-index: 1; position: absolute; left: -1010px; top: -609px;"><div><div aria-disabled="true" class="ui-resizable ui-resizable-disabled ui-state-disabled" id="resizable1" style="z-index: 1; height: 85px; width: 151.162px; top: 635px; left: 1126.84px;"><img class="layeredImage ui-draggable" id="images1" src="http://test.scampaigns.com/library/b3e837099c615d0c7230a01654cbf45c.png" style="height: 100%; width: 100%; z-index: 1; position: relative;"></div></div></div><div aria-disabled="true" class="ui-draggable ui-draggable-disabled ui-state-disabled" id="draggable0" style="z-index: 0; position: absolute; left: -299px; top: -210px;"><div><div aria-disabled="true" class="ui-resizable ui-resizable-disabled ui-state-disabled" id="resizable0" style="z-index: 0; height: 566px; width: 755.015px; top: 202px; left: 301px;"><img class="layeredImage ui-draggable" id="images0" src="http://test.scampaigns.com/library/3ad5f635e16ff007d3c3e43fa7e1782d.jpg" style="height: 100%; width: 100%; z-index: 0; position: relative;"></div></div></div></div> 
<!--<div class="SFPTWO_IMAGEEDIT"><img id="images1" src="//test.scampaigns.com/user_template/450549a816f1c11112-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%;"/></div>         
 -->       
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
<form name="form_1307648" id="" action="" class="SFPTWO_EDITFORM" style="margin-top:25px;" method="post">

 <img src="https://test.scampaigns.com/img/divider.png" id="imgdrag" style="display: none;">
 <img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">



<ul style="" class="sortable-list ui-sortable">


<li id="trigme" style="display: none;">
  <div>dd</div> 
  </li>
	<li style="" class="dottedLi ui-draggable SFPTWO_TEXTEDIT tags_2 element1"><div id="labeledit" class="labeledit emaildrag"><p style="font-size: 19px;" id="pid_" class="opt SFPTWO_TAGEDIT tag_2"><font>EmaiL address</font></p></div><input name="email" type="email">
    
    </li>
    

	<li style="" class="dottedLi ui-draggable SFPTWO_TEXTEDIT tags_3 element2"><div id="diveditme" class="labeledit addmechk checkboxdrag"><p style="font-size: 19px;" id="pid_form" class="opt SFPTWO_TAGEDIT tag_3"><font>What kind of campaign are you Looking for? </font>
    </p></div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_form657"><div id="chkclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-rowform657"><span class="checkboxWrapper"><input value="option1" name="check_1" type="checkbox"> </span> <p class="opt SFPTWO_TAGEDIT tag_4" id="1"><font>option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input value="option2" name="check_2" type="checkbox"></span> <p class="opt SFPTWO_TAGEDIT tag_5" id="2"><font>option2</font></p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input value="option3" name="check_3" type="checkbox"></span><p class="opt SFPTWO_TAGEDIT tag_6" id="3"><font>option3</font></p></div></div><p id="mepp" class="pchkadd"></p><div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> </div> </li>
    
 
	 <li style="" class="dottedLi ui-draggable SFPTWO_TEXTEDIT tags_4 element3"><div id="diveditme" class="labeledit"><p style="font-size: 19px;" id="pid_formmsg" class="opt SFPTWO_TAGEDIT tag_7"><font>Your message</font></p><div><textarea id="editmetext" name="textareaelement3" class="textareaforform SFPTEXTAREA"></textarea></div></div></li>
	<li style="" class="dottedLi ui-draggable SFPTWO_TEXTEDIT tags_5 element4"><div id="getbtnme" class="submitdrag"><input class="SFPsubmit" name="submit" value="Send" type="submit"></div></li>
    
</ul>

</form>
</div>
</div>