<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
 


<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="position: absolute; top: 755px; display: none;">
 


<!--SFPPAGE-->



<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <link rel="stylesheet" href="/editcss/jquery-ui.css">
<link rel="stylesheet" href="//test.scampaigns.com/user_template/6205486e2ff48d865-Optinapp--mod-template/css/style.css">
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

<link rel="stylesheet" type="text/css" media="all" href="//test.scampaigns.com/user_template/6205486e2ff48d865-Optinapp--mod-template/css/jui.checkboxes.css">

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->




<div class="details-n-winn-wrapper">
<div class="SFPTWO_IMAGEEDIT tagsimg_1"><img id="images1" src="//test.scampaigns.com/user_template/6205486e2ff48d865-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%; margin:0 0 8px 0;"><div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div> 
<!--<div class="SFPTWO_IMAGEEDIT"><img id="images1" src="//test.scampaigns.com/user_template/6205486e2ff48d865-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%;"/></div>         
 -->       
<div class="tool-tip SFPTWO_TEXTEDIT tags_1"><h2 class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_1" contenteditable="false">Fill in your details and win! </h2><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
<div class="form-container jui-checkboxes-container" id="checkboxesInit2">


<ul class="designelements clearfix" style="position:absolute;left:0; z-index:9999;">
 <li id="lilabelme" style="top: 176px; left: -1px; display: none;">
    	<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="label" id="label" class="disabled">
        	<span>Title</span>
            <img src="https://test.scampaigns.com/formbuild/title_icon.png" alt="">
        </a>
    </li>
   
</ul>
<form id="editable" action="" class="SFPTWO_EDITFORM" style="margin-top:25px;" method="post">

 <img src="https://test.scampaigns.com/img/divider.png" id="imgdrag" style="position: relative; top: 673px; display: none;">
 <img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">

<ul class="sortable-list ui-sortable" style="">
<li id="trigme" style="display: none;">
  <div>dd</div> 
  </li>
	<li class="dottedLi SFPTWO_TEXTEDIT tags_2 randtxt_638" style="display: none;"><div id="labeledit" class="labeledit emaildrag"><p style="font-size: 19px;color:#15ace7" id="pid_" class="opt explicit_edit SFPTWO_TAGEDIT tag_2" contenteditable="false"><font color="#15ace7">EmaiL address</font></p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><input name="email" type="email">
    <div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a><input id="hid" name="email_hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div>
    </li><li class="" style="display: list-item;">
    	</li><li style="" class="dottedLi SFPTWO_TEXTEDIT tags_6 tags_3"><div id="labeledit" class="labeledit timedrag"><p id="pid_547" class="opt explicit_edit SFPTWO_TAGEDIT tag_9 tag_3" contenteditable="false">First name</p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><input name="timepicker" id="timepicker1" onclick="timepick(1)" class="ui-timepicker-input" autocomplete="off" type="text"><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a><input id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></li>
    <li class="" style="display: list-item;">
    	</li><li style="" class="dottedLi SFPTWO_TEXTEDIT tags_7 tags_4"><div id="labeledit" class="labeledit emaildrag"><p id="pid_180" class="opt explicit_edit SFPTWO_TAGEDIT tag_10 tag_4" contenteditable="false">Last name&nbsp;</p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><input name="" id="email_268" type="email"><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a><input id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></li>
    
    

	<li class="dottedLi SFPTWO_TEXTEDIT tags_3 randtxt_662 tags_5" style="display: none;"><div id="diveditme" class="labeledit addmechk checkboxdrag"><p style="font-size: 19px;" id="pid_form" class="opt explicit_edit SFPTWO_TAGEDIT tag_3 tag_5" contenteditable="false"><font color="#15ace7">What kind of campaign are you Looking for? </font>
    </p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_form657"><div id="chkclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-rowform657"><span class="checkboxWrapper"><input value="option1" name="check_1" type="checkbox"> </span> <p class="opt explicit_edit SFPTWO_TAGEDIT tag_4 tag_6" id="1" contenteditable="false"><font color="#15ace7">option1</font></p> <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input value="option2" name="check_2" type="checkbox"></span> <p class="opt explicit_edit SFPTWO_TAGEDIT tag_5 tag_7" id="2" contenteditable="false"><font color="#15ace7">option2</font></p> <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input value="option3" name="check_3" type="checkbox"></span><p class="opt explicit_edit SFPTWO_TAGEDIT tag_6 tag_8" id="3" contenteditable="false"><font color="#15ace7">option3</font></p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></div><p id="mepp" class="pchkadd"></p><div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)">cc</a></div> </div><div id="ullidrag" class="ullidrag" style="display:none;cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a><input id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></li>
    

	 <li class="" style="display: list-item;">
    	</li><li class="dottedLi SFPTWO_TEXTEDIT tags_5 randtxt_355 tags_6" style="display: none;"><div id="labeledit" class="labeledit addmechk checkboxdrag"><p id="pid_47" class="opt explicit_edit SFPTWO_TAGEDIT tag_8 tag_9" contenteditable="false"><font color="#15ace7">Label</font></p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><div class="checksboxes p_scents chkboxaddnow editmyopt adding" id="checksboxes_813"><div id="chkclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row813"><span class="checkboxWrapper"><input value="1" name="name" type="checkbox"> </span> <p class="opt explicit_edit" id="1" contenteditable="false"><font color="#15ace7">option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input value="2" name="name" type="checkbox"></span> <p class="opt explicit_edit" id="2" contenteditable="false"><font color="#15ace7">option2</font></p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input value="3" name="name" type="checkbox"></span><p class="opt explicit_edit" id="3" contenteditable="false"><font color="#15ace7">option3</font></p></div></div><p id="mepp" class="pchkadd"></p><div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)">cc</a></div> </div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a><input id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></li>
    <li class="dottedLi SFPTWO_TEXTEDIT tags_4 randtxt_801 tags_7" style="position: relative; display: none;"><div id="diveditme" class="labeledit"><p style="font-size: 19px;" id="pid_formmsg" class="opt explicit_edit SFPTWO_TAGEDIT tag_7 tag_10" contenteditable="false"><font color="#15ace7">Your message</font></p><div><textarea id="editmetext" name="textarea_edit1"></textarea></div><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a><input id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></li>
	<li class="" style="display: list-item;">
    	</li><li style="" class="dottedLi"><div id="diveditme" class="labeledit paradrag"><p id="pid_674" class="opt explicit_edit SFPTWO_TAGEDIT tag_11" contenteditable="false"><font color="#15ace7">Label</font></p><div><p id="editmetext" name="" class="opt explicit_edit" style="border: 1px solid #eee; min-height: 30px; padding: 10px;" contenteditable="false"><font color="#15ace7">Text</font></p></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></li>
    <li class="" style="display: list-item;">
    	</li><li style="" class="dottedLi"><div id="labeledit" class="labeledit multilinedrag"><p id="pid_395" class="opt explicit_edit SFPTWO_TAGEDIT tag_12" contenteditable="false"><font color="#15ace7">Label</font></p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><div class="checksboxes p_scents multilineme" id="checksboxes_221"><div id="multiclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row221"><p style="border: 1px solid #eee; padding: 10px; min-height: 30px; text-decoration: underline;" class="opt explicit_edit" id="1" contenteditable="false"><font color="#15ace7">Text1</font></p><div><font color="#15ace7"><br></font></div><div><font color="#15ace7"><br></font></div><p></p> </div><div class="jui-checkbox-row"></div></div><p id="mepp" class="meline"></p></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></li>
    <li class="dottedLi" style=""><div id="getbtnme" class="submitdrag editmybtn"><input class="inputdisabled" name="submit" value="Verzenden" type="submit"></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></li>

</ul>
</form>
</div>
</div>