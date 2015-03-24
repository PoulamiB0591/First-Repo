<!--SFPPAGE-->
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php 
       include('../include.php');?>
 <link rel="stylesheet" href="/editcss/jquery-ui.css"/>
<link rel="stylesheet" href="//test.scampaigns.com/user_template/27254e34ccf0947d8-Optinapp--mod-template/css/style.css"/>
<link rel="stylesheet" href="/editcss/jquery.datetimepicker.css"/>
<link rel="stylesheet" href="/editcss/jquery.timepicker.css"/>
<!--SFPScript type="text/javascript"  src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></!--SFPScript> 
<!--SFPScript type="text/javascript" src="/js3/jquery.datetimepicker.js"></!--SFPScript> 
<!--SFPScript type="text/javascript"  src="/js/jquery.timepicker.js"></!--SFPScript> 

<!--SFPScript>
$(".jui-checkbox-SFP_ROW p.SFPTWO_TAGEDIT").live( "click", function(){
    $(this).parent().find('input[type="checkbox"]').trigger('click');
});

$(".jui-checkbox-SFP_ROW p.SFPTWO_TAGEDIT").live( "click", function(){
    $(this).parent().find('input[type="radio"]').trigger('click');
});

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
       'step': '30',
		  'step': '30',
			'minTime': '00:00',
			'maxTime': '23:59',
			'timeFormat': 'H:i',
  }).focus();
}); 
}   
</!--SFPScript> 
  <!--SFPhide  
  <style>
  .SFPTWO_EDITFORM li {
  margin-bottom: 26px;
}
.jui-checkbox-SFP_ROW {
  height: auto;
  overflow: hidden;
} 
  </style>
  SFPhide-->
<!--<link rel="stylesheet" href="http://localhost/zf_new/public/css/styles.css"/>
<link rel="stylesheet" href="http://localhost/zf_new/public/css/textarea.css"/>---->

<link rel="stylesheet" type="text/css" media="all" href="//test.scampaigns.com/user_template/27254e34ccf0947d8-Optinapp--mod-template/css/jui.checkboxes.css"/>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->
</head>

<body>

<div class="details-n-winn-wrapper SFPTWO_BACKGROUND">
<div class="SFPTWO_IMAGEEDIT"><img id="images1" src="//test.scampaigns.com/user_template/27254e34ccf0947d8-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%; margin:0 0 8px 0;"/></div> 
<!--<div class="SFPTWO_IMAGEEDIT"><img id="images1" src="//test.scampaigns.com/user_template/27254e34ccf0947d8-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%;"/></div>         
 -->       
<div class="tool-tip SFPTWO_TEXTEDIT"><h2 class="textedit SFPTWO_TAGEDIT edit explicit_edit"  contenteditable="true">Fill in your details and win! </h2></div>
<div class="form-container jui-checkboxes-container" id="checkboxesInit2">


        
        <ul class="designelements clearfix" style="position:absolute;left:0; z-index:9999;">
        <li id="lilabelme" style="display:none;">
        <a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="label" id="label">
        <span>Title</span>
        <img src="/formbuild/title_icon.png" alt="" />
        </a>
        </li>
        
        </ul>
        <form id="sortable" action="" class="SFPTWO_EDITFORM" style="margin-top:25px;" method="post">
        
        <img src="/img/divider.png" id="imgdrag" style="display: none;" />
        <img src="/img/divider.png" id="imgdragable" style="display: none;" />
        
        
        
        <ul class="sortable-list">
        
        
        <li id="trigme" style="display:none">
        <div>dd</div> 
        </li>
        <li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="labeledit" class="labeledit emaildrag"><p style="font-size: 19px;" id="pid_" class="opt explicit_edit SFPTWO_TAGEDIT" ><font>EmaiL address</font></p></div><input name="email" type="email" />
        <div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" name="email_hid" /><input type="hidden" value="0" id="imgCount" /></div>
        </li>
        
        
        <li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="diveditme" class="labeledit addmechk checkboxdrag"><p style="font-size: 19px;" id="pid_form" class="opt explicit_edit SFPTWO_TAGEDIT"><font>What kind of campaign are you Looking for? </font></p2>
        </div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_form657"><div id="chkclone" name="checkBox"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-rowform657"><span class="checkboxWrapper"><input type="checkbox" value="option1" name="checkBox[]" > </span> <p class="opt explicit_edit SFPTWO_TAGEDIT"  contenteditable="true" id="1"><font>option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="option2" name="checkBox[]" ></span> <p class="opt explicit_edit SFPTWO_TAGEDIT" contenteditable="true" id="2"><font>option2</font></p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="option3" name="checkBox[]" ></span><p class="opt explicit_edit SFPTWO_TAGEDIT" contenteditable="true" id="3"><font>option3</font></p></div></div><p id="mepp" class="pchkadd"></p><div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div></div> <div id="ullidrag" class="ullidrag" style="display:none;cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div></li>
        
        
        <li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="diveditme" class="labeledit"><p style="font-size: 19px;" id="pid_formmsg" class="opt explicit_edit SFPTWO_TAGEDIT"><font>Your message</font></p><div><textarea id="editmetext" name="textarea_edit1" class="textareaforform SFPTEXTAREA"></textarea></div></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div></li>
        <li class="dottedLi ui-draggable SFPTWO_TEXTEDIT"><div id="getbtnme" class="submitdrag"><input class="inputdisabled SFPsubmit" type="submit" name="submit" value="Send"></div><div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div></li>
        
        </ul>
        
        </form><input type="hidden" id="sfpoptForm" value=""/>
</div>
</div>




</body>

</html>
