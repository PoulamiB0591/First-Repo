<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="position: absolute; top: 1052px; display: none;">
<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
<?php include_once('/var/www/staging/public/sfpForm.php');?>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <link rel="stylesheet" href="/editcss/jquery-ui.css">
<link rel="stylesheet" href="//test.scampaigns.com/user_template/967547891e7666a65-Optinapp--mod-template/css/style.css">
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

<link rel="stylesheet" type="text/css" media="all" href="//test.scampaigns.com/user_template/967547891e7666a65-Optinapp--mod-template/css/jui.checkboxes.css">

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->




<div class="details-n-winn-wrapper">
<div id="editable" style="display: block; height: 300px; width: 763px;" class="SFPTWO_IMAGEEDIT tagsimg_1 imgEdit2 ui-resizable imgEdit3 imgEdit4 imgEdit5 imgEdit6 imgEdit7"><div class="ui-draggable" id="draggable0" style="z-index:0; position:absolute;"><div><div class="ui-resizable" id="resizable0" style="z-index:0; height:768px; width:1024px;"><img class="layeredImage" id="images0" src="http://test.scampaigns.com/library/8f5c487cd55f9b8189b49ef22e22d812.jpg" style="height:100%; width:100%; z-index:0;"></div></div></div></div> 
<div style="height: 292px; width: 763px; display: none;" class="SFPTWO_IMAGEEDIT tagsimg_2 imgEdit1 ui-resizable imgEdit8 rand_797"><div class="ui-draggable" id="draggable1" style="z-index: 1; position: absolute; left: 254px; top: 7px;"><div><div class="ui-resizable" id="resizable1" style="z-index:1; height:768px; width:1024px;"><img class="layeredImage ui-draggable" id="images1" src="http://test.scampaigns.com/library/8f5c487cd55f9b8189b49ef22e22d812.jpg" style="height: 100%; width: 100%; z-index: 1; position: relative;"></div></div></div><div class="ui-draggable ui-draggable-disabled" id="draggable0" style="z-index:0; position:absolute;"><div><div class="ui-resizable" id="resizable0" style="z-index:0; height:768px; width:1024px;"><img class="layeredImage ui-draggable" id="images0" src="http://test.scampaigns.com/library/9b1bdf8aeab8490964e2eeec430d9571.jpg" style="height: 100%; width: 100%; z-index: 0; position: relative; left: -21px; top: -296px;"></div></div></div></div>         
        
<div class="tool-tip SFPTWO_TEXTEDIT tags_1"><h2 class="textedit SFPTWO_TAGEDIT edit tag_1 explicit_edit">Fill in your details and win! </h2></div>
<div class="form-container jui-checkboxes-container" id="checkboxesInit2">


<ul class="designelements clearfix" style="position:absolute;left:0; z-index:9999;">
 <li id="lilabelme" style="display:none;">
    	<a class="" style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="label" id="label">
        	<span>Title</span>
            <img src="https://test.scampaigns.com/formbuild/title_icon.png" alt="">
        </a>
    </li>
   
</ul>
<form name="form_1408478" id="" action="" class="SFPTWO_EDITFORM" style="margin-top:25px;" method="post">

 <img src="https://test.scampaigns.com/img/divider.png" id="imgdrag" style="position: relative; top: 294px; display: none;">
 <img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">

<ul class="sortable-list ui-sortable">
<li id="trigme" style="display: none;">
  <div>dd</div> 
  </li>
	<li class="dottedLi element1"><div id="labeledit" class="labeledit emaildrag"><p style="font-size: 19px; color: rgb(21, 172, 231); display: block;" id="pid_" class="opt SFPTWO_TAGEDIT tag_2 explicit_edit"><font color="#15ace7">EmaiL address</font></p></div><input name="email" type="email">
    
    </li>
    

	<li class="dottedLi element2"><div id="diveditme" class="labeledit addmechk checkboxdrag"><p style="font-size: 19px;" id="pid_form" class="opt explicit_edit"><font color="#15ace7">What kind of campaign are you Looking for? </font>
    </p></div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_form657"><div id="chkclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-rowform657"><span class="checkboxWrapper"><input value="option1" name="check_1" type="checkbox"> </span> <p class="opt explicit_edit" id="1"><font color="#15ace7">option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input value="option2" name="check_2" type="checkbox"></span> <p class="opt explicit_edit" id="2"><font color="#15ace7">option2</font></p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input value="option3" name="check_3" type="checkbox"></span><p class="opt explicit_edit" id="3"><font color="#15ace7">option3</font></p></div></div><p id="mepp" class="pchkadd"></p></div> </li><li style="display: list-item;" class="ui-draggable">
    	</li><li class="dottedLi SFPTWO_TEXTEDIT tags_NaN tags_2"><div id="labeledit" class="labeledit datedrag"><p id="pid_577" class="opt explicit_edit SFPTWO_TAGEDIT tag_NaN tag_3"><font color="#15ace7">Label</font></p></div><input name="" id="datepicker1" onclick="datepick(1)" type="text"></li>
    
    

	 <li class="dottedLi element3"><div id="diveditme" class="labeledit"><p style="font-size: 19px;" id="pid_formmsg" class="opt explicit_edit"><font color="#15ace7">Your message</font></p><div><textarea id="editmetext" name="textareaelement3"></textarea></div></div></li>
	<li><input class="" name="submit" value="Send" type="submit"></li>

</ul>
</form>
</div>
</div>