<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
 


<!--SFPPAGE-->



<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <link rel="stylesheet" href="/editcss/jquery-ui.css">
<link rel="stylesheet" href="//test.scampaigns.com/user_template/5855499475a12d277-Optinapp--mod-template/css/style.css">
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

<link rel="stylesheet" type="text/css" media="all" href="//test.scampaigns.com/user_template/5855499475a12d277-Optinapp--mod-template/css/jui.checkboxes.css">

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->




<div class="details-n-winn-wrapper">
<div class="SFPTWO_IMAGEEDIT tagsimg_1 imgEdit1 ui-resizable imgEdit2 imgEdit3 imgEdit4 imgEdit5 imgEdit6" id="editable"><img id="images1" src="//test.scampaigns.com/user_template/5855499475a12d277-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%; margin:0 0 8px 0;"><div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" value="undefined" id="hid"><input type="hidden" value="5" id="imgCount"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 1000;"></div><img id="uploadLoading" src="/images/712.GIF" style="display: none; position: absolute; top: 50%; left: 50%; margin-left: -33px; margin-top: -33px; z-index: 999999999;"><img id="uploadLoading" src="/images/712.GIF" style="display: none; position: absolute; top: 50%; left: 50%; margin-left: -33px; margin-top: -33px; z-index: 999999999;"><img id="uploadLoading" src="/images/712.GIF" style="display: none; position: absolute; top: 50%; left: 50%; margin-left: -33px; margin-top: -33px; z-index: 999999999;"><img id="uploadLoading" src="/images/712.GIF" style="display: none; position: absolute; top: 50%; left: 50%; margin-left: -33px; margin-top: -33px; z-index: 999999999;"><img id="uploadLoading" src="/images/712.GIF" style="display: none; position: absolute; top: 50%; left: 50%; margin-left: -33px; margin-top: -33px; z-index: 999999999;"></div> 
<!--<div class="SFPTWO_IMAGEEDIT"><img id="images1" src="//test.scampaigns.com/user_template/5855499475a12d277-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%;"/></div>         
 -->       
<div class="tool-tip SFPTWO_TEXTEDIT tags_1"><h2 class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_1" contenteditable="false">Fill in your details and win! </h2><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
<div class="form-container jui-checkboxes-container" id="checkboxesInit2">



<ul class="designelements clearfix" style="position:absolute;left:0; z-index:9999;">
 <li id="lilabelme" style="display:none;">
    	<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="label" id="label" class="disabled">
        	<span>Title</span>
            <img src="https://test.scampaigns.com/formbuild/title_icon.png" alt="">
        </a>
    </li>
   
</ul>
<form id="" action="" class="SFPTWO_EDITFORM" style="margin-top:25px;" method="post">

 <img src="https://test.scampaigns.com/img/divider.png" id="imgdrag" style="display: none;">
 <img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">



<ul class="sortable-list ui-sortable">


<li id="trigme" style="display: none;">
  <div>dd</div> 
  </li>
	<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT tags_2"><div id="labeledit" class="labeledit emaildrag"><p style="font-size: 19px;" id="pid_" class="opt explicit_edit SFPTWO_TAGEDIT tag_2" contenteditable="false"><font>EmaiL address</font></p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><input name="email" type="email">
    <div id="ullidrag" class="ullidrag" style="cursor: move; display: none;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" name="email_hid"><input type="hidden" value="0" id="imgCount"></div>
    </li>
    

	<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT tags_3"><div id="diveditme" class="labeledit addmechk checkboxdrag"><p style="font-size: 19px;" id="pid_form" class="opt explicit_edit SFPTWO_TAGEDIT tag_3" contenteditable="false"><font>What kind of campaign are you Looking for? </font>
    </p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_form657"><div id="chkclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-rowform657"><span class="checkboxWrapper"><input type="checkbox" value="option1" name="check_1"> </span> <p class="opt explicit_edit SFPTWO_TAGEDIT tag_4" contenteditable="false" id="1"><font>option1</font></p> <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="option2" name="check_2"></span> <p class="opt explicit_edit SFPTWO_TAGEDIT tag_5" contenteditable="false" id="2"><font>option2</font></p> <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="option3" name="check_3"></span><p class="opt explicit_edit SFPTWO_TAGEDIT tag_6" contenteditable="false" id="3"><font>option3</font></p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></div><p id="mepp" class="pchkadd"></p><div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div></div> <div id="ullidrag" class="ullidrag" style="cursor: move; display: none;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid"><input type="hidden" value="0" id="imgCount"></div></li>
    
 
	 <li class="dottedLi ui-draggable SFPTWO_TEXTEDIT tags_4"><div id="diveditme" class="labeledit"><p style="font-size: 19px;" id="pid_formmsg" class="opt explicit_edit SFPTWO_TAGEDIT tag_7" contenteditable="false"><font>Your message</font></p><div><textarea id="editmetext" name="textarea_edit1" class="textareaforform SFPTEXTAREA"></textarea></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid"><input type="hidden" value="0" id="imgCount"></div></li>
	<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT tags_5"><div id="getbtnme" class="submitdrag"><input class="inputdisabled SFPsubmit" type="submit" name="submit" value="Send"></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid"><input type="hidden" value="0" id="imgCount"></div></li>
    
</ul>

</form>
</div>
</div>