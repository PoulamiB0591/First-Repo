<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
 

<!--SFPPAGE-->
<!--PHP
       include('../include.php');
          /*PHP DBCONNECT PHP*/
       PHP-->
       

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UwACU1BRGwYIXVhQBAQ="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(5),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(f){"stack"in f&&(t(1),t(4),"addEventListener"in window&&t(2),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(3),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:8,2:5,3:9,4:7,5:20,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],4:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(2);t("loader").features.stn=!0,t(1),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:6,2:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:20,2:21,ee:"QJf3ax",gos:"7eSDFh"}],6:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:21,2:20,ee:"QJf3ax"}],7:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:21,2:20,ee:"QJf3ax"}],8:[function(t,e){function n(t,e,n){var r=t[0];"string"==typeof r&&(r=new Function(r)),t[0]=o(r,"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:21,2:20,ee:"QJf3ax"}],9:[function(t,e){function n(){c.inPlace(this,d,"fn-")}function r(t,e){c.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}var i=t("ee").create(),a=t(1),s=t(2),c=s(i),f=s(a),u=window.XMLHttpRequest,d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=i,window.XMLHttpRequest=function(t){var e=new u(t);try{i.emit("new-xhr",[],e),f.inPlace(e,["addEventListener","removeEventListener"],"-",function(t,e){return e}),e.addEventListener("readystatechange",n,!1)}catch(r){try{i.emit("internal-error",[r])}catch(o){}}return e},window.XMLHttpRequest.prototype=u.prototype,c.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),i.on("send-xhr-start",r),i.on("open-xhr-start",r)},{1:5,2:21,ee:"QJf3ax"}],10:[function(t){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=e(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(n.cat=d.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r,this.startTime])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=e(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",[e])}catch(r){}}};for(var u=0;c>u;u++)n.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:11,3:9,4:5,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],11:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){p.proto="https"===d.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=p.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,c=s.document,f="addEventListener",u="attachEvent",d=(""+location).split("?")[0],p=e.exports={offset:i(),origin:d,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),s[f]("load",n,!1)):(c[u]("onreadystatechange",r),s[u]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],20:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],21:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s,t))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:20,ee:"QJf3ax"}]},{},["G9z0Bl",3,10,4]);</script>
        <title>Roel - Welcome to our Website!</title>
       <!--SFPhide <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/img/favicon.ico"> SFPhide-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/css/normalize.css">
         <link rel="stylesheet" href="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/css/bootstrap.min.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/css/main.css">
        
        <!-- MAS slider -->
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/css/mas-slider.css">
		<link href="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/css/mas-default.css" rel="stylesheet" type="text/css">
		<link href="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/css/mas-part-view.css" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="//test.scampaigns.com/css/templateform.css"> 
       <link rel="stylesheet" href="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/css/jquery.alerts.css"> 
      <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></SFPScript-->
             <!--SFPScript src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/js/vendor/modernizr-2.6.2.min.js"></SFPScript-->
        <!--SFPScript src="https://connect.facebook.net/nl_NL/all.js"></SFPScript-->

    



    

    
    <div class=" fb_reset" id="fb-root"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>

 <!--SFPScript type="text/javascript">

   window.fbAsyncInit = function() 
{
    
    FB.Canvas.setSize();
    FB.Canvas.setAutoGSFP_ROW();
}
function sizeChangeCallback() 
{
    FB.Canvas.setSize();
}
 function invite(){
      FB.init({
          appId      : 'SFPAPPID',
          xfbml      : true,
          version    : 'v2.0'
        });
  FB.ui({ method: 'apprequests', 
   message: 'My diaolog...'});
 }   
 
function facebookconnect(){
      
        $('.overlay_div').css('display','block');
        FB.init({
           appId      : 'SFPAPPID',
           xfbml      : true,
          version    : 'v2.0'
        });
        
    FB.login(function(response) {
       
   if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
    
     FB.api('/me', function(response) {
        console.log(response);
          var uid = response.id;	
          var email = response.email;
          var fname = response.first_name;
          var lname = response.last_name;
          localStorage.setItem('email',email);
          localStorage.setItem('uid',uid);
          localStorage.setItem('fname',fname);
          localStorage.setItem('lname',lname);
          // alert(localStorage.getItem('email'));
           $('#getprflmg').val(uid);
           FB.api('/me/picture',
             {
                "redirect": false,
                "height": "600",
                "type": "large",
                "width": "600"
            }, 
            function(response){ 
                console.log(response);
                $('#imgprvw').attr('src',response.data.url);                
                facebookimg += response.data.url;
                $('#getprfId').val(response.data.url);         
            });                        
           
          $('#imgprvw').css('display','block');
           $('#divimg').css('display','block');
            
            
        /**
 *   var query = FB.Data.query('select publish_stream,read_stream from permissions where uid={0}', uid);
 *                    query.wait(function(SFP_ROWs) {
 *                                     if(SFP_ROWs[0].publish_stream == 1) 
 *                                     {
 *                                         
 *                                         FB.getLoginStatus(function (response) 
 *                                         {
 *                                             if (response.authResponse) {
 *                                             var actok = response.authResponse.accessToken;
 *                                             }
 *                                         });
 *                                     } else {
 *                                     alert('Sorry! To enter the competition you have to accept our photo contest app. ');
 *                                     }
 *                                 });
 */
       console.log('Good to see you, ' + response.name + '.');
        $('.overlay_div').css('display','none');
     });
   } else {
     alert('User cancelled login or did not fully authorize.');
   }
 },{scope: 'SFPFBSCOPE'});
 
 
  
  }

 </SFPScript-->
 
       <!--[if lt IE 7]>
            <p class="bSFP_ROWsehappy">You are using an <strong>outdated</strong> bSFP_ROWser. Please <a href="//bSFP_ROWsehappy.com/">upgrade your bSFP_ROWser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->

        <div class="main_wrapper" id="change">
          <!--SFPhide  <div class="overlay_divsme" style="display:none; opacity:0.40;">
        <img class="loading_img" src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/712.GIF" /> 
        </div> SFPhide-->
        <input id="getslideid" type="hidden">
        	<div class="container-fluid top">
            	<div class="SFP_ROW roel-container">
                <div class="SFPTWO_IMAGEEDIT expl tagsimg_1">
                	<img id="images1" src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/img/logo.jpg" alt=""><!-- end of logo -->
                   </div>
                      <div class="explicit_edit" contenteditable="false"><a style="cursor: pointor;" title="Nodig je vrienden uit" class="invite" onclick="invite()"><img src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/img/facebook_icon.png" alt=""><span class="explicit_edit" contenteditable="false">Nodig je<br>vrienden uit</span></a><!-- end of invite -->
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
        	<div class="main_navigation">
             <div class="container-fluid">
            	<div class="roel-container SFP_ROW">
                	<ul>
                    	<li class="enteroff  SFPTWO_TAGEDIT tag_1"><a href="SFP_index" title="Kies je tegel en foto" class="active">1) Kies je tegel en foto</a></li>
                    	<li class="enteroff  SFPTWO_TAGEDIT tag_2"><a class="" href="spreuk.php" id="spreuk" title="Persoonlijke spreuk">2) Persoonlijke spreuk</a></li>
                    	<li class="enteroff  SFPTWO_TAGEDIT tag_3"><a class="" href="bedankt.php" id="Bedankt" title="Bedankt">3) Bedankt</a></li>
                    </ul>
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->           
             <div class="main_content">
            	<div class="container-fluid bedankt-wrap">
                <div class="SFP_BOOT-lg-12">
                    <div class="SFPTWO_TEXTEDIT tags_1"><h2 class="SFPTWO_TAGEDIT tag_4">Kies een tegel ...</h2></div>
                    <div class="SFPTWO_TEXTEDIT tags_2"><h3 class="SFPTWO_TAGEDIT tag_5">... en profileer jezelf als professional</h3></div>
                </div>
                
                <div class="clearfix"></div>
                <div class="mas-cont SFP_BOOT-lg-12">
                <div class="ms-partialview-template" id="partial-view-1">
            <!-- masterslider -->
            <div class="master-slider ms-skin-default" id="masterslider">
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                    <div class="ms-info">
                       
                    </div>  
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/img/2.png" alt="lorem ipsum dolor sit">    
                      <div class="ms-info">
                        
                    </div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/img/3.png" alt="lorem ipsum dolor sit">   
                     <div class="ms-info"></div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/img/4.png" alt="lorem ipsum dolor sit">   
                      <div class="ms-info"> </div>  
                </div>
                
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                        <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/img/2.png" alt="lorem ipsum dolor sit">   
                       <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/img/3.png" alt="lorem ipsum dolor sit"> 
                        <div class="ms-info"> </div> 
                </div>
            </div>
            <!-- end of masterslider -->
</div>
                </div>
                </div><!-- end of container -->
               
                
                <div class="btn_blog">
                 <div id="divimg" style="display: none; height: 200px;width: 200px; border: 1px solid #000; margin: 0 auto;">
                 <img id="imgprvw" alt="" style="display: none; height: 100%;width: 100%;">
                </div>
                
                <p class="upload_fbbt SFPTWO_TAGEDIT tag_6">
                	<a class="" style="cursor: pointer;" id="getprf" onclick="facebookconnect();"><span class="explicit_edit" contenteditable="false">Gebruik mijn</span><strong class="explicit_edit" contenteditable="false">PROFIELFOTO</strong></a>
                     </p>
                     <form name="form_865771" class="upload_fbbt" enctype="multipart/form-data" method="post" id="target" action="run.php">
                    
                     <input value="0" id="takeimgname" name="takeimg" type="hidden">
                     <input id="getvalue" name="getvalue" type="hidden">
                     <input id="getfb" name="getfb" type="hidden">
                     <input class="" name="fileToUpload" id="fileToUpload" value="Upload je eigen FOTO" onchange="showimagepreview(this)" type="file">
                    
                	<p class="SFPTWO_TAGEDIT tag_7"><a class="" style="cursor:pointor;"><span class="explicit_edit" contenteditable="false">Upload je eigen</span><strong class="explicit_edit" contenteditable="false">FOTO</strong></a>
                    </p>
                     </form>
                    
                     
                     <form name="form_865771" method="post" id="targetfb" action="save.php">
                      
                       <input name="getprflmg" id="getprflmg" type="hidden"> 
                       <input name="getprfId" id="getprfId" type="hidden">
                     </form>
                </div><!-- end of btn_blog -->
                <p class="SFPTWO_TAGEDIT tag_8"><a href="javascript:void(0)" title="Ga verder" class="continue">Ga verder</a></p><!-- end of continue -->
           
           <div class="form-container jui-checkboxes-container" id="checkboxesInit2">

</div>
           
            </div><!-- end of main_content -->
          
          
            <div class="footer"></div><!-- end of footer -->
        </div><!-- end of main_wrapper -->
          
             <!--SFPScript src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/js/jquery.easing.min.js"></SFPScript-->
               <!--SFPScript src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/js/jquery.alerts.js"></SFPScript-->
               
		<!--SFPScript src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/js/mas.min.js"></SFPScript-->
	<!--SFPScript script src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/js/mas-part.dev.js"></SFPScript-->
        <!--SFPScript src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/js/plugins.js"></SFPScript-->
       <!--SFPScript src="//test.scampaigns.com/user_template/69754accbef4f1748-roelpro/js/main.js"></SFPScript-->

    
    
     
                 <!--SFPScript type="text/javascript">
     function reloadthispage()
     {
        jAlert("Ofwel limiet is overschreden of afbeelding is niet gefundeerde");
        window.location.href = 'index.php';
        //top.location.href = 'https://www.facebook.com/waytowork/app_1484924788415270';
        
     }
        var facebookimg = "";
    $(document).ready(function() {
        
        localStorage.removeItem('email');
          localStorage.removeItem('uid');
          localStorage.removeItem('fname');
          localStorage.removeItem('lname');
      //  jAlert(localStorage.getItem('email'));
        $('#spreuk').attr('href','javascript: void(0)');
        $('#Bedankt').attr('href','javascript: void(0)');
        
   $("input[type='file'][name*='fileToUpload']").filter(function(k){
   if($(this).val().length == 0){
          // jAlert("field is empty");
        }
        else{
            var getme= "null";
        }
   });
  
   $("input:file#fileToUpload").change(function (){
    
    var filename = $(this).val();
       $('#getvalue').val(filename);
       $('#getfb').val('');
        //jAlert("field is not empty");
       
     });
     
       $("input:file#fileToUploadfb").change(function (){
    
       var filename = facebookimg;
       $('#getvalue').val(filename);
       $('#getfb').val('');
        //jAlert("field is not empty");
       
     });
     
     $(".continue").click(function(){
      
        setTimeout('reloadthispage()',90000);
          $('.overlay_div').css('display','block');
        var getfb  = $('#getfb').val();
        var getme = $('#getvalue').val();
       
         if($('#getslideid').val()=='')
        {
            jAlert("Kies een frame");
        }  
         
        else if( getfb =="" && getme=="")
        {   jAlert('Neem foto uploaden', 'kennisgeving');
            $('.overlay_div').css('display','none');
            }
            else{
      
        if(getme != ""){
             $('.overlay_divsme').css('display','block');
              $( "#target" ).submit();
          
         
        }
        else if($('#getslideid').val()=='')
        {
            jAlert("Kies een frame");
        }   
        else if(getfb != "" ){
        $('.overlay_divsme').css('display','block');
         $( "#targetfb" ).submit();   
       // window.location.href="save.php"; 
        }
        }
         });
     
     $("#getprf").click(function(){
      $('#getvalue').val('');
      $('#getfb').val('fbprf');
       
     }); 
     setInterval('chooseFrame()',100);
     
     $(".ms-slide").click(function(){
        console.log('test');
       var  getimg = $(this).children().find('img').attr('src');
       $('#getslideid').val(getimg);
     $('#takeimgname').val(getimg);  
     localStorage.setItem('takeimgname',getimg);
     
     localStorage.setItem('facebookimg',facebookimg);
    // $.session.set("takeimgname",getimg);
     });
    });
    function chooseFrame() {
        var  getimg1 = $(".ms-sl-selected").children().find('img').attr('src');
        $('#getslideid').val(getimg1);
        $('#takeimgname').val(getimg1);
        console.log(getimg1);
         localStorage.setItem('takeimgname',getimg1);
     
        localStorage.setItem('facebookimg',facebookimg);
     }
</SFPScript-->