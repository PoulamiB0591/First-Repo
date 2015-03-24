<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="position: absolute; top: 808px; display: none;">
 


<?php include_once('/var/www/staging/public/sfpForm.php');?>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=u(e),f=c.length,s=i(a,o,r),p=0;f>p;p++)c[p].apply(s,n);return s}function a(t,e){f[t]=u(t).concat(e)}function u(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:u,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=l.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){l.proto="https"===p.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=l.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),u=window,c=u.document,f="addEventListener",s="attachEvent",p=(""+location).split("?")[0],l=e.exports={offset:i(),origin:p,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),u[f]("load",n,!1)):(c[s]("onreadystatechange",r),u[s]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}]},{},["G9z0Bl"]);</script>

 <link rel="stylesheet" href="/editcss/jquery-ui.css">
<link rel="stylesheet" href="//test.scampaigns.com/user_template/49854a10d3f0533c5-Optinapp--mod-template/css/style.css">
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

<link rel="stylesheet" type="text/css" media="all" href="//test.scampaigns.com/user_template/49854a10d3f0533c5-Optinapp--mod-template/css/jui.checkboxes.css">

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->




<div class="details-n-winn-wrapper">
<div class="SFPTWO_IMAGEEDIT tagsimg_1"><img id="images1" src="//test.scampaigns.com/user_template/49854a10d3f0533c5-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%; margin:0 0 8px 0;"></div> 
<!--<div class="SFPTWO_IMAGEEDIT"><img id="images1" src="//test.scampaigns.com/user_template/49854a10d3f0533c5-Optinapp--mod-template/img/top-img.jpg" alt="" style="width: 100%;"/></div>         
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
<form name="form_1585819" id="editable" action="" class="SFPTWO_EDITFORM" style="margin-top:25px;" method="post">

 <img src="https://test.scampaigns.com/img/divider.png" id="imgdrag" style="position: relative; top: 306px; display: none;">
 <img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">

<ul style="" class="sortable-list">

<li id="trigme" style="display: none;">
  <div>dd</div> 
  </li>

	<li style="" class="dottedLi SFPTWO_TEXTEDIT tags_2 element1"><div id="labeledit" class="labeledit emaildrag"><p style="font-size: 19px;" id="pid_" class="opt SFPTWO_TAGEDIT tag_2"><font>EmaiL address</font></p></div><input name="email" type="email">
    
    </li>
    

	<li style="" class="dottedLi SFPTWO_TEXTEDIT tags_3 element2"><div id="diveditme" class="labeledit addmechk checkboxdrag"><p style="font-size: 19px;" id="pid_form" class="opt SFPTWO_TAGEDIT tag_3"><font>What kind of campaign are you Looking for? </font>
    </p></div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_form657"><div id="chkclone" name="checkBox"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-rowform657"><span class="checkboxWrapper"><input value="option1" name="check_7" type="checkbox"> </span> <p class="opt SFPTWO_TAGEDIT tag_4" id="1"><font>option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input value="option2" name="check_8" type="checkbox"></span> <p class="opt SFPTWO_TAGEDIT tag_5" id="2"><font>option2</font></p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input value="option3" name="check_9" type="checkbox"></span><p class="opt SFPTWO_TAGEDIT tag_6" id="3"><font>option3</font></p></div></div><p id="mepp" class="pchkadd"></p>    <div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> </div> </li>
    
 
	 <li style="display: list-item;" class="">
    	<li class="dottedLi SFPTWO_TEXTEDIT tags_6"><p id="pid_626" class="opt SFPTWO_TAGEDIT tag_8 undefined"><font class="SFPCOLOR">dropdown</font></p><div class="dropdowndrag adddrop"><select class="select undefined" id="hours210" style="font-family: times new roman;font-size: 15px; height: 30px;margin-bottom: 10px;width: 120px;"><option value="0">Select</option><option id="1" value="option1">option1</option><option id="2" value="option2">option2</option></select>   <div class="seteditdrop"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> </div></li>
    </li><li style="" class="dottedLi SFPTWO_TEXTEDIT tags_4 element3"><div id="diveditme" class="labeledit"><p style="font-size: 19px;" id="pid_formmsg" class="opt SFPTWO_TAGEDIT tag_7"><font>Your message</font></p><div><textarea id="editmetext" name="textareaelement3" class="textareaforform SFPTEXTAREA"></textarea></div></div></li>
	<li style="" class="dottedLi SFPTWO_TEXTEDIT tags_5 element4"><div id="getbtnme" class="submitdrag"><input class="SFPsubmit" name="submit" value="Send" type="submit"></div></li>
    
</ul>
</form>
</div>
</div>




<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-3.newrelic.com","licenseKey":"f767fe6f50","applicationID":"5899235","transactionName":"YFwEMkZYX0ZYBhINVlkWMxRdFkRGXBc5EFxaSQoHQFweAQBdU1BYBgkCVVIJBAYKBlNJdkdNDwhVSUEYFAgJABRDXAsWWFhFUBYMCABcTxcWDkQ=","queueTime":0,"applicationTime":0,"atts":"TBsHRA5CTEg=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-476.min.js"}</script>