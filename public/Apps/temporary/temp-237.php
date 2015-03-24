<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
 


<?php include_once('/var/www/staging/public/sfpForm.php');?>



  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UwACU1BRGwYIXVhQBAQ="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(5),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(f){"stack"in f&&(t(1),t(4),"addEventListener"in window&&t(2),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(3),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:8,2:5,3:9,4:7,5:20,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],4:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(2);t("loader").features.stn=!0,t(1),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:6,2:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:20,2:21,ee:"QJf3ax",gos:"7eSDFh"}],6:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:21,2:20,ee:"QJf3ax"}],7:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:21,2:20,ee:"QJf3ax"}],8:[function(t,e){function n(t,e,n){var r=t[0];"string"==typeof r&&(r=new Function(r)),t[0]=o(r,"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:21,2:20,ee:"QJf3ax"}],9:[function(t,e){function n(){c.inPlace(this,d,"fn-")}function r(t,e){c.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}var i=t("ee").create(),a=t(1),s=t(2),c=s(i),f=s(a),u=window.XMLHttpRequest,d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=i,window.XMLHttpRequest=function(t){var e=new u(t);try{i.emit("new-xhr",[],e),f.inPlace(e,["addEventListener","removeEventListener"],"-",function(t,e){return e}),e.addEventListener("readystatechange",n,!1)}catch(r){try{i.emit("internal-error",[r])}catch(o){}}return e},window.XMLHttpRequest.prototype=u.prototype,c.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),i.on("send-xhr-start",r),i.on("open-xhr-start",r)},{1:5,2:21,ee:"QJf3ax"}],10:[function(t){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=e(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(n.cat=d.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r,this.startTime])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=e(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",[e])}catch(r){}}};for(var u=0;c>u;u++)n.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:11,3:9,4:5,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],11:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){p.proto="https"===d.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=p.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,c=s.document,f="addEventListener",u="attachEvent",d=(""+location).split("?")[0],p=e.exports={offset:i(),origin:d,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),s[f]("load",n,!1)):(c[u]("onreadystatechange",r),s[u]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],20:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],21:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s,t))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:20,ee:"QJf3ax"}]},{},["G9z0Bl",3,10,4]);</script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>B2B Email Course</title>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//test.scampaigns.com/user_template/26654ab8a6ade14411-Loretta_Email_Course/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  
  <script>
    WebFont.load({
      google: {
        families: ['Open Sans', 'Raleway']
      }
    });
  </script>
 <script>
    WebFont.load({
      google: {
        families: ['Open Sans', 'Raleway']
      }
    });
  </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->




<div class="main_section">
<div class="header">
    <div class="container">
    	<div class="SFPTWO_IMAGEEDIT tagsimg_1">
    		<img src="//test.scampaigns.com/user_template/26654ab8a6ade14411-Loretta_Email_Course/images/1b2ayl6-fake-logo.png" class="company-logo">
        </div>
    </div>
</div>
<div class="main">
<div class="container">
  
  
<div class="main-heading tool-tip">
 <div class="SFPTWO_TEXTEDIT tags_1">      
    <h1 class="textedit SFPTWO_TAGEDIT edit tag_1">5 Conversion Tricks You’re Missing</h1></div>
     <div class="SFPTWO_TEXTEDIT tags_2">      
    <h4 class="textedit SFPTWO_TAGEDIT edit tag_2">Explain in the Subheadline something that Supports the Headline</h4>
  </div>
</div>
<div class="row main-center">
    <div class="col-sm-6 col-md-7 SFPTWO_IMAGEEDIT tagsimg_2">
        <img src="//test.scampaigns.com/user_template/26654ab8a6ade14411-Loretta_Email_Course/images/ar0imc-email-envelope.png" class="envelope img-responsive">
    </div>
    <div class="col-sm-6 col-md-5">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-offset-0">
            <div class="SFPTWO_TEXTEDIT tags_3">
                <h3 class="textedit SFPTWO_TAGEDIT edit tag_3">Get the Free <br> 5-day Email Course</h3></div>
                <div style="overflow: hidden; width: 100%;">
                 
              <span style="position:relative;"><ul class="designelements clearfix" style="position:absolute;left:0; z-index:9999;"><li id="lilabelme" style="display:none;"><a class="" style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="label" id="label"><span>Title</span><img src="/formbuild/title_icon.png" alt=""></a></li></ul><form name="form_1568549" id="editable" action="" class="SFPTWO_EDITFORM extendform" style="margin-top:25px; clear:both;" method="post"><img src="/img/divider.png" id="imgdrag" style="display: none;"><img src="/img/divider.png" id="imgdragable" style="display: none;"><ul style="" class="sortable-list ui-sortable"><li id="trigme" style="display: none;"><div>dd</div></li> 
              <li class="dottedLi SFPTWO_TEXTEDIT tags_4 element1"><div id="labeledit" class="labeledit textdrag"><p id="pid_139" class="opt SFPTWO_TAGEDIT getme tag_4"><font class="SFPCOLOR">First Name *</font></p></div><input name="textboxelement1" id="txtbox_117" class="SFPTEXT form-control" type="text"></li>
              <li class="dottedLi SFPTWO_TEXTEDIT tags_5 element2"><div id="labeledit" class="labeledit emaildrag"><p id="pid_900" class="opt SFPTWO_TAGEDIT getme tag_5"><font class="SFPCOLOR">Email *</font></p></div><input name="textBoxEmailelement2" id="email_570" class="SFPEMAIL form-control" type="email"></li>  
             <li class="dottedLi SFPTWO_TEXTEDIT tags_6 element3"><div id="getbtnme" class="submitdrag"><input class="btn btn-lg btn-block" name="submit" value="Send the eCourse" type="submit"></div></li>
              <li class="dottedLi SFPTWO_TEXTEDIT tags_7 element4"><div id="labeledit" class="labeledit singledrag"><p id="pid_256" class="opt SFPTWO_TAGEDIT note tag_6"><font class="SFPCOLOR">Tell them you're not going to spam them and point them to your <a href="#">privacy policy</a></font></p></div></li>
             <!--[form]-->
                <input style="" id="SFPTEXTFORM" value="form-control" type="hidden">
                <input style="" id="SFPSUBMITFORM" value="btn btn-lg btn-block" type="hidden">
                <input style="" id="SFPEMAILFORM" value="form-control" type="hidden">
                <input style="" id="SFPPARAGRAPHFORM" value="form-control" type="hidden">
                <input style="" id="SFPSINGLELINEFORM" value="note" type="hidden">
                <input style="" id="SFPMULTILINEFORM" value="form-control" type="hidden">
                <input style="" id="SFPTEXTAREAFORM" value="form-control" type="hidden">
                <input style="" id="SFPDROPDOWNFORM" value="form-control" type="hidden">
               <!-- <[dropdown-option(class)]->"getme"/>-->
                <input style="" id="SFPLEBELFORM" value="getme" type="hidden">
                
                </ul></form></span></div>
               </div> 
           
        </div>
    </div>
</div>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    	<div class="bullet-points-intro">
        	<div class="SFPTWO_TEXTEDIT tags_8">
            	<h3 class="textedit SFPTWO_TAGEDIT edit tag_7">Each Day You will Learn Something New</h3>
            </div>
        	<div class="SFPTWO_TEXTEDIT tags_9">
            	<p class="textedit SFPTWO_TAGEDIT edit tag_8">Intro description for Web App goes here. It tells people how this Web App is going to change their business. For the better of course. Not the worse. People wouldn't buy a Web App like that.</p>
            </div>
        </div>
        <div class="bullet-points">
        
        
        
        
        <div class="row has-bullet-line">
            <div class="col-xs-2 col-sm-1">
             <div class="SFPTWO_TEXTEDIT tags_10">
            	<span class="bullet-number textedit SFPTWO_TAGEDIT edit tag_9">1</span>
                </div>
            </div>
            <div class="col-xs-10 col-sm-11 tool-tip">
            <div class="SFPTWO_TEXTEDIT tags_11">
                <h4 class="textedit SFPTWO_TAGEDIT edit tag_10">Here's what they Learn in Lesson 1</h4></div>
             <div class="SFPTWO_TEXTEDIT tags_12">   
                <p class="textedit SFPTWO_TAGEDIT edit tag_11">This is the first point about your report that's going to get them itching to download. If it doesn't, be more pursuasive.</p>
              </div>
           </div>
        </div>

        <div class="row has-bullet-line">
            <div class="col-xs-2 col-sm-1">
            <div class="SFPTWO_TEXTEDIT tags_13">
            	<span class="bullet-number textedit SFPTWO_TAGEDIT edit tag_12">2</span>
                </div>
            </div>
            <div class="col-xs-10 col-sm-11 tool-tip">
             <div class="SFPTWO_TEXTEDIT tags_14">
                <h4 class="textedit SFPTWO_TAGEDIT edit tag_13">A Bit About What they Learn in Lesson 2 </h4> </div>
               <div class="SFPTWO_TEXTEDIT tags_15">
                <p class="textedit SFPTWO_TAGEDIT edit tag_14">This is the first point about your report that's going to get them itching to download. If it doesn't, be more pursuasive.</p>
            </div>
             </div>
        </div>

        <div class="row has-bullet-line">
            <div class="col-xs-2 col-sm-1">
            	<div class="SFPTWO_TEXTEDIT tags_16">
            	<span class="bullet-number textedit SFPTWO_TAGEDIT edit tag_15">3</span>
                </div>
            </div>
            <div class="col-xs-10 col-sm-11 tool-tip">
              <div class="SFPTWO_TEXTEDIT tags_17">
                <h4 class="textedit SFPTWO_TAGEDIT edit tag_16">And Then There's Lesson 3 </h4></div>
              <div class="SFPTWO_TEXTEDIT tags_18">
                <p class="textedit SFPTWO_TAGEDIT edit tag_17">This is the first point about your report that's going to get them itching to download. If it doesn't, be more pursuasive.</p>
             </div>
            </div>
        </div>

        <div class="row has-bullet-line">
            <div class="col-xs-2 col-sm-1">
            <div class="SFPTWO_TEXTEDIT tags_19">
            	<span class="bullet-number textedit SFPTWO_TAGEDIT edit tag_18">4</span>
                </div>
            </div>
            <div class="col-xs-10 col-sm-11 tool-tip">
            <div class="SFPTWO_TEXTEDIT tags_20">
                <h4 class="textedit SFPTWO_TAGEDIT edit tag_19">Why Not Move onto Lesson 4 </h4></div>
            <div class="SFPTWO_TEXTEDIT tags_21">
                <p class="textedit SFPTWO_TAGEDIT edit tag_20">This is the first point about your report that's going to get them itching to download. If it doesn't, be more pursuasive.</p>
             </div>
            </div>
        </div>
        
        <div class="row has-bullet-line">
            <div class="col-xs-2 col-sm-1">
            	<div class="SFPTWO_TEXTEDIT tags_22">
            	<span class="bullet-number textedit SFPTWO_TAGEDIT edit tag_21">5</span>
                </div>
            </div>
            <div class="col-xs-10 col-sm-11 tool-tip">
            <div class="SFPTWO_TEXTEDIT tags_23">
                <h4 class="textedit SFPTWO_TAGEDIT edit tag_22">By this time They're Brilliant Lesson 5</h4></div>
             <div class="SFPTWO_TEXTEDIT tags_24">
                <p class="textedit SFPTWO_TAGEDIT edit tag_23">This is the first point about your report that's going to get them itching to download. If it doesn't, be more pursuasive.</p>
            </div>
              </div>
        </div>
        
        
        
        
        
        
        
        
        </div>
    </div>
</div>
    
    
</div>
</div>
<div class="footer">
    <div class="container">
    
    	<div class="SFPTWO_TEXTEDIT tags_25"><p>©2014 Your Company, Inc.</p></div>
    </div>
</div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-3.newrelic.com","licenseKey":"f767fe6f50","applicationID":"5899235","transactionName":"YFwEMkZYX0ZYBhINVlkWMxRdFkRGXBc5EFxaSQoHQFweBw9TU1BYVQEHUFVdVAQNUVdVFHtWFANATVBqfAgHDVVoegkTRkpUGlALAgFBGUkOFg==","queueTime":0,"applicationTime":0,"atts":"TBsHRA5CTEg=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-476.min.js"}</script>