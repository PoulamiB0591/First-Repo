<!--SFPPAGE-->
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php 
       include('../include.php');?>
 <link rel="stylesheet" href="/editcss/jquery-ui.css"/>
<link rel="stylesheet" href="//test.scampaigns.com/user_template/32054a672b4c23ee14-Optinapp--mod-template/css/style.css"/>
<link rel="stylesheet" href="/editcss/jquery.datetimepicker.css"/>
<link rel="stylesheet" href="/editcss/jquery.timepicker.css"/>
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

<link rel="stylesheet" type="text/css" media="all" href="//test.scampaigns.com/user_template/32054a672b4c23ee14-Optinapp--mod-template/css/jui.checkboxes.css"/>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->
</head>

<body>

<div class="details-n-winn-wrapper">
<div class="SFPTWO_IMAGEEDIT"><img id="images1" src="//test.scampaigns.com/user_template/32054a672b4c23ee14-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%; margin:0 0 8px 0;"/></div> 
<!--<div class="SFPTWO_IMAGEEDIT"><img id="images1" src="//test.scampaigns.com/user_template/32054a672b4c23ee14-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%;"/></div>         
 -->       
<div class="tool-tip SFPTWO_TEXTEDIT"><h2 class="textedit SFPTWO_TAGEDIT edit explicit_edit"  contenteditable="true">Fill in your details and win! </h2></div>
<div class="form-container jui-checkboxes-container" id="checkboxesInit2">


<ul class="designelements clearfix" style="position:absolute;left:20%;">
 <li id="lilabelme" style="display:none;">
    	<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="label" id="label">
        	<span>Title</span>
            <img src="https://test.scampaigns.com/formbuild/title_icon.png" alt="" />
        </a>
    </li>
   
</ul>
<form id="sortable" action="{tag1}" class="SFPTWO_EDITFORM" style="margin-top:25px;">

 <img src="https://test.scampaigns.com/img/divider.png" id="imgdrag" style="display: none;" />


<ul class="sortable-list">

	<li class="dottedLi ui-draggable"><div id="labeledit" class="labeledit emaildrag"><p style="font-size: 19px;" id="pid_" class="opt">EmaiL address</p></div><input name="" type="text" />
    <div class="setting-2 prevnext"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a class="prev" href="#">Previous</a>&nbsp;<a class="next" href="#">After</a></div>
    </li>
    

	<li class="dottedLi ui-draggable"><div id="diveditme" class="labeledit addmechk checkboxdrag"><p style="font-size: 19px;" id="pid_form" class="opt">What kind of campaign are you Looking for? </p2>
    </div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_form657"><div id="chkclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-rowform657"><span class="checkboxWrapper"><input type="checkbox" value="1" name="name" > </span> <p class="opt" id="1">option1</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="2" name="name" ></span> <p class="opt" id="2">option2</p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="3" name="name" ></span><p class="opt" id="3">option3</p></div></div><p id="mepp" class="pchkadd"></p></div> <div class="setting-2 prevnext"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a class="prev" href="#">Previous</a>&nbsp;<a class="next" href="#">After</a></div></li>
    

	 <li class="dottedLi ui-draggable"><div id="diveditme" class="labeledit"><p style="font-size: 19px;" id="pid_formmsg" class="opt">Your message</p><div><textarea id="editmetext" name=""></textarea></div></div><div class="setting-2 prevnext"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a class="prev" href="#">Previous</a>&nbsp;<a class="next" href="#">After</a></div></li>
	<li><input name="" type="submit" value="Send"><div class="setting-2 prevnext"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a class="prev" href="#">Previous</a>&nbsp;<a class="next" href="#">After</a></div></li>

</ul>
</form>-><input type='text' id='sfpoptForm'value=""/>
</div>
</div>




</body>

</html>
