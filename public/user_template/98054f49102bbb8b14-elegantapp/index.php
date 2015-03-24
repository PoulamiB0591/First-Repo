<img src="/img/divider.png" id="imgdragable" style="display: none;">



<!--SFPPAGE-->


    
    
        <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UwACU1BRGwYIXVhQBAQ="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(5),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(f){"stack"in f&&(t(1),t(4),"addEventListener"in window&&t(2),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(3),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:8,2:5,3:9,4:7,5:20,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],4:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(2);t("loader").features.stn=!0,t(1),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:6,2:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:20,2:21,ee:"QJf3ax",gos:"7eSDFh"}],6:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:21,2:20,ee:"QJf3ax"}],7:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:21,2:20,ee:"QJf3ax"}],8:[function(t,e){function n(t,e,n){var r=t[0];"string"==typeof r&&(r=new Function(r)),t[0]=o(r,"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:21,2:20,ee:"QJf3ax"}],9:[function(t,e){function n(){c.inPlace(this,d,"fn-")}function r(t,e){c.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}var i=t("ee").create(),a=t(1),s=t(2),c=s(i),f=s(a),u=window.XMLHttpRequest,d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=i,window.XMLHttpRequest=function(t){var e=new u(t);try{i.emit("new-xhr",[],e),f.inPlace(e,["addEventListener","removeEventListener"],"-",function(t,e){return e}),e.addEventListener("readystatechange",n,!1)}catch(r){try{i.emit("internal-error",[r])}catch(o){}}return e},window.XMLHttpRequest.prototype=u.prototype,c.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),i.on("send-xhr-start",r),i.on("open-xhr-start",r)},{1:5,2:21,ee:"QJf3ax"}],10:[function(t){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=e(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(n.cat=d.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r,this.startTime])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=e(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",[e])}catch(r){}}};for(var u=0;c>u;u++)n.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:11,3:9,4:5,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],11:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){p.proto="https"===d.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=p.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,c=s.document,f="addEventListener",u="attachEvent",d=(""+location).split("?")[0],p=e.exports={offset:i(),origin:d,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),s[f]("load",n,!1)):(c[u]("onreadystatechange",r),s[u]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],20:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],21:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s,t))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:20,ee:"QJf3ax"}]},{},["G9z0Bl",3,10,4]);</script>
        <title></title>
        <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">
           <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/js/jquery-1.9.1.min.js"></SFPScript-->
           <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/js/bootstrap.min.js"></SFPScript-->
            <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/js/html5shiv.js"></SFPScript-->
             <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/js/functions.js"></SFPScript-->
         <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/js/wow.min.js"></SFPScript-->
            <link rel="stylesheet" href="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/css/bootstrap.min.css">
            <link rel="stylesheet" href="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/css/animate.css">
            <link rel="stylesheet" href="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/css/style.css">
        
        
        
     <!--   <div id="fb-root"></div>
<script>

FB.init({
    appId      : '1546857545560281',
    status     : true,
    xfbml      : true,
    version    : 'v2.0'
  });
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1546857545560281&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
      -->        
            <div id="wrapper " class="">
           
                <div class="main">
                <div id="logo-badge" class="logo-badge">
                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="logo-badge-inner SFPTWO_IMAGEEDIT tagsimg_1">
                        <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/logo.png" id="logo-badge-logo" class="img-responsive center-block"><a href="#page5-header" id="badge-btn" class="btn btn-primary btn-ribbon btn-block sfpDynamic">DOWNLOAD</a>
                    </div>
                </div>
                    <div class="page1-wrapper">
                        
                        <section id="main-hero" class="page1 section SFPTWO_BACKGROUND">
                            <div class="content">
                                <div class="container">
                                    <div class="SFP_ROW">
                                        <div class="SFP_BOOT-sm-6">
                                            <div class="p1-content">
                                              <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_1 texttagdelete">
                                              
                                               <h1 id="page1-header" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_1 tagdelete justifyme" data-wow-delay=".3s">ONE OF THE COOLEST APPS EVER MADE!</h1>
                                              </div> 
                                               
                                               <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_2 texttagdelete">
                                                <p id="page1-text" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_2 tagdelete" data-wow-delay=".6s">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquetSit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquet</p>
                                               </div>
                                               
                                                <div class="hero-btn-area wow fadeIn" data-wow-delay=".9s">
                                                    <ul class="list-inline">
                                                        <li data-lead-id="hero-info-btn-container">
                                                            <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_3 texttagdelete">
                                                            <a href="#video0-header" data-lead-id="btn-more-info" class="sfpDynamic btn btn-primary btn-hero-info textedit SFPTWO_TAGEDIT edit tag_3 tagdelete">MORE INFO</a>
                                                    </div>
                                                        </li>
                                                        <li data-lead-id="hero-btn-container">
                                                            <div class="dl-btn-container">
                                                            <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_2">
                                                                <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/download-btn-icon.png" data-lead-id="btn-hero-icon" class="btn-icon">
                                                               </div>
                                                               <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_4 texttagdelete">
                                                                <a href="https://www.google.com" data-lead-id="btn-hero" class="sfpDynamic btn btn-primary btn-hero btn-top-hero textedit SFPTWO_TAGEDIT edit tag_4 tagdelete">You can change this</a>
                                                           </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="hero-trust-container" class="trust-area wow fadeIn" data-wow-delay=".9s">
                                                    <ul class="list-inline">
                                                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li class="SFPTWO_IMAGEEDIT tagsimg_3">
                                                            <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/hero-trust-icon.png" id="hero-trust-img" class="trust-img">
                                                        </li>
                                                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_5 texttagdelete">
                                                      
                                                            <p id="hero-trust-text" class="trust-text textedit SFPTWO_TAGEDIT edit tag_5 tagdelete">Also Available in the <a href="#" class="sfpDynamic">App Store</a> and <a class="sfpDynamic" href="#">Play Store</a></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFP_BOOT-sm-6 SFPTWO_IMAGEEDIT tagsimg_4">
                                            <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/hero-app.png" id="hero-img" class="img-responsive center-block wow fadeIn" data-wow-delay=".3s">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <section id="video0_section" class="video0_section section">
                        <div class="content">
                            <div class="container">
                                <div class="SFP_ROW">
                                    <div class="SFP_BOOT-sm-12">
                                        <div class="wow fadeIn" data-wow-delay=".5s">
                                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_6 texttagdelete">
                                            <h1 id="video0-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_6 tagdelete">CHECK OUT OUR VIDEO</h1>
                                         </div>
                                         <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_7 texttagdelete">
                                            <h3 id="video0-sub-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_7 tagdelete">This video will reassure you that our book is amazing!</h3>
                                       </div>
                                        </div>
                                        <div id="video0-wrapper" class="video-wrapper">
                                            <div class="video-container wow fadeIn" data-wow-delay=".7s">
                                                <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div id="top-vid-area" class="vid-wrapper text-center SFPTWO_IMAGEEDIT tagsimg_5">
                                                    <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/vid_placeholder.jpg" class="img-responsive center-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="page2" class="page2 section">
                        <div class="content">
                            <div class="container">
                                <div class="SFP_ROW">
                                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFP_BOOT-sm-6 SFPTWO_IMAGEEDIT tagsimg_6">
                                        <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/iPhone2.png" id="page2-img" class="wow fadeIn img-responsive center-block" data-wow-delay="1s">
                                    </div>
                                    <div class="SFP_BOOT-sm-6">
                                        <div class="spacer"></div>
                                        <div class="p2-content wow fadeInRight" wow-delay="1s">
                                          <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_8 texttagdelete"><h1 id="page2-header" class="textedit SFPTWO_TAGEDIT edit tag_8 tagdelete">Here Are Some Of The Features!</h1>
                                          </div>  
                                          <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_9 texttagdelete">
                                            <p id="page2-text" class="textedit SFPTWO_TAGEDIT edit tag_9 tagdelete">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquet </p>
                                          </div>
                                            <div id="page2-list">
                                                <div data-lead-id="feature1-container" class="feature-point feature-point1 wow fadeIn" data-wow-delay="1s">
                                                   <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_7">
                                                    <img data-lead-id="feature1-icon" src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/feature-icon1.png" class="feature-icon img-responsive pull-left">
                                                    </div>
                                                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_10 texttagdelete">
                                                    <p data-lead-id="feature1-text" class="textedit SFPTWO_TAGEDIT edit tag_10 tagdelete">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquet mauris adipiscing hac ut! Velit aliquet</p>
                                                   </div>
                                                </div>
                                                <div data-lead-id="feature2-container" class="feature-point feature-point2 wow fadeIn" data-wow-delay="1.5s">
                                                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_8">
                                                    <img data-lead-id="feature2-icon" src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/feature-icon2.png" class="feature-icon img-responsive pull-left">
                                                    </div>
                                                  <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_11 texttagdelete">
                                                    <p data-lead-id="feature2-text" class="textedit SFPTWO_TAGEDIT edit tag_11 tagdelete">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquet mauris adipiscing hac ut! Velit aliquet</p>
                                                 </div>
                                                </div>
                                                <div data-lead-id="feature3-container" class="feature-point feature-point3 wow fadeIn" data-wow-delay="2s">
                                                 <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_9">
                                                    <img data-lead-id="feature3-icon" src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/feature-icon3.png" class="feature-icon img-responsive pull-left">
                                                    </div>
                                                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_12 texttagdelete">
                                                    <p data-lead-id="feature3-text" class="textedit SFPTWO_TAGEDIT edit tag_12 tagdelete">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquet mauris adipiscing hac ut! Velit aliquet</p>
                                               </div>
                                                </div>
                                                <div data-lead-id="feature4-container" class="feature-point feature-point4 wow fadeIn " data-wow-delay="2.5s">
                                                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_10">
                                                    <img data-lead-id="feature4-icon" src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/feature-icon4.png" class="feature-icon img-responsive pull-left">
                                                 </div>
                                                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_13 texttagdelete">
                                                    <p data-lead-id="feature4-text" class="textedit SFPTWO_TAGEDIT edit tag_13 tagdelete">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquet mauris adipiscing hac ut! Velit aliquet</p>
                                             </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="gallery_page" class="gallery_page section">
                        <div class="content">
                            <div class="container">
                                <div class="SFP_ROW">
                                    <div class="SFP_BOOT-sm-12">
                                        <div class="wow fadeIn" data-wow-delay=".3s">
                                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_14 texttagdelete">
                                            <h1 id="gallery-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_14 tagdelete">SCREENSHOTS</h1>
                                            </div>
                                            <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_15 texttagdelete">
                                            <h3 id="gallery-sub-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_15 tagdelete">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies.</h3>
                                      </div>
                                        </div>
                                        <div id="gallery_thumbs" class="gallery_thumbs">
                                            <ul class="list-unstyled list-inline text-center">
                                                <li id="img-container1">
                                                <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_11">
                                                    <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/screen1.jpg" id="screen1" class="img-responsive center-block wow zoomIn">
                                                  </div>
                                                  <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_16 texttagdelete">
                                                    <p id="screen_caption1" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_16 tagdelete" data-wow-delay=".3s">Sit dapibus odio turpis porttitor.</p>
                                            </div>
                                                </li>
                                                <li id="img-container2">
                                                <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_12">
                                                    <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/screen2.jpg" id="screen2" class="img-responsive center-block wow zoomIn" data-wow-delay=".6s">
                                                </div>
                                                <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_17 texttagdelete">
                                                    <p id="screen_caption2" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_17 tagdelete" data-wow-delay=".9s">Sit dapibus odio turpis porttitor.</p>
                                               </div>
                                                </li>
                                                <li id="img-container3">
                                                 <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_13">
                                                    <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/screen3.jpg" id="screen3" class="img-responsive center-block wow zoomIn" data-wow-delay="1s">
                                                   </div>
                                                <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_18 texttagdelete">
                                                    <p id="screen_caption3" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_18 tagdelete" data-wow-delay="1.3s">Sit dapibus odio turpis porttitor.</p>
                                               </div>
                                                </li>
                                                <li id="img-container4">
                                                 <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_14">
                                                    <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/screen4.jpg" id="screen4" class="img-responsive center-block wow zoomIn" data-wow-delay="1.5s">
                                                  </div>
                                                <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_19 texttagdelete">
                                                    <p id="screen_caption4" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_19 tagdelete" data-wow-delay="1.8s">Sit dapibus odio turpis porttitor.</p>
                                               </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <section id="page5" class="page5 section">
                        <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/office.jpg" id="page5-bg" class="background-img">
                        <div class="content">
                            <div class="container">
                                <div class="SFP_ROW">
                                    <div class="SFP_BOOT-sm-12 text-center">
                                        <div class="wow fadeIn" data-wow-delay=".3s">
                                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_20 texttagdelete">
                                            <h1 id="page5-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_20 tagdelete">DOWNLOAD THE APP!</h1>
                                       </div>
                                       <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_21 texttagdelete">
                                            <h3 id="page5-sub-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_21 tagdelete">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h3>
                                      </div>
                                        </div>
                                        <div id="buy-btn-area" class="buy-btn-area">
                                            <ul class="list-unstyled list-inline text-center">
                                                <li id="buy-btn1-container">
                                                    <div class="dl-btn-container wow fadeIn" data-wow-delay=".5s">
                                                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_15">
                                                        <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/download-btn-icon.png" data-lead-id="buy-btn-1-img" class="btn-icon">
                                                    </div>
                                                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_22 texttagdelete">
                                                        <a href="#" data-lead-id="buy-btn1" class="sfpDynamic btn btn-primary btn-hero btn-p51 textedit SFPTWO_TAGEDIT edit tag_22 tagdelete">DOWNLOAD HERE</a>
                                                  </div>
                                                    </div>
                                                </li>
                                                <li id="buy-btn2-container">
                                                    <div class="dl-btn-container wow fadeIn" data-wow-delay=".8s">
                                                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_16">
                                                        <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/apple-btn-icon.png" data-lead-id="buy-btn-2-img" class="btn-icon">
                                                  </div>
                                                  <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_23 texttagdelete">
                                                        <a href="#" data-lead-id="buy-btn2" class="sfpDynamic btn btn-primary btn-hero btn-p52 textedit SFPTWO_TAGEDIT edit tag_23 tagdelete"> APP STORE</a>
                                                   </div>
                                                    </div>
                                                </li>
                                                <li id="buy-btn3-container">
                                                    <div class="dl-btn-container wow fadeIn" data-wow-delay="1.1s">
                                                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_17">
                                                        <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/android-btn-icon.png" data-lead-id="buy-btn-3-img" class="btn-icon">
                                                       </div>
                                                       <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_24 texttagdelete">
                                                        <a href="#" data-lead-id="buy-btn3" class="btn btn-primary btn-hero btn-p53 textedit SFPTWO_TAGEDIT edit sfpDynamic tag_24 tagdelete">PLAY STORE</a>
                                                  </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="page6" class="page6 section">
                        <div class="content">
                            <div class="container">
                                <div class="SFP_ROW">
                                    <div class="SFP_BOOT-sm-12 text-center">
                                        <div class="wow fadeIn" data-wow-delay=".3s">
                                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_25 texttagdelete">
                                            <h1 id="page6-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_25 tagdelete">ABOUT OUR COMPANY</h1>
                                       </div>
                                       <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_26 texttagdelete">
                                            <h3 id="page6-sub-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_26 tagdelete">Lorem ipsum dolor sit amet, consectetur </h3>
                                     </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="SFP_ROW author-info-area">
                                    <div class="SFP_BOOT-sm-12 text-center"></div>
                                    <div class="SFP_BOOT-sm-4 text-center">
                                        <div class="wow fadeIn" data-wow-delay=".3s">
                                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_18">
                                            <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/company-img.png" id="author-img" class="img-responsive center-block author-img">
                                          </div>
                                            <ul class="list-unstyled list-inline author-social-icon-list">
                                                <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li class="SFPTWO_IMAGEEDIT sfpfbDynamicShare tagsimg_19"><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><a href="#" id="page6-social1" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT tagsimg_20"><img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/author_social_1.png" class="img-responsive block-center"></a>
                                                  
                    <input class="sfpfbpic" type="hidden" value="">
                    <input class="sfpfbname" type="hidden" value="">
                    <input class="sfpfbcaption" type="hidden" value="">
                    <input class="sfpfbdescription" type="hidden" value="">
                    <input class="sfpfblink" type="hidden" value="">
                    <input class="sfpfbredrct" type="hidden" value="">
                  
                                            
                                            </li>
                                            <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li class="class	SFPTWO_IMAGEEDIT sfpfbDynamicTweetBird tagsimg_21"><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><a href="#" id="page6-social2" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT tagsimg_22"><img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/author_social_2.png" class="img-responsive block-center"></a>
                                            <script> function twt_bird_click(u,t) {
        var child = window.open('http://twitter.com/share?url=' + encodeURIComponent(u) + '&t=' + encodeURIComponent(t), 'sharer', 'toolbar=0,status=0,width=626,height=436');
    }</script>
                                        </li>
                                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li class="SFPTWO_IMAGEEDIT sfpfbDynamicLinkedin tagsimg_23"><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><a href="" id="page6-social3" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT tagsimg_24"><img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/author_social_3.png" class="img-responsive block-center"></a>
                                    </li>
                                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li class="SFPTWO_IMAGEEDIT sfpfbDynamicGoogle tagsimg_25"><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><a href="#" id="page6-social4" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT tagsimg_26"><img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/author_social_4.png" class="img-responsive block-center"></a>
                                </li>
                                <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li class="SFPTWO_IMAGEEDIT sfpfbDynamicInstagram tagsimg_27"><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><a href="#" id="page6-social5" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT tagsimg_28"><img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/author_social_5.png" class="img-responsive block-center"></a>
                            </li>
                            <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li class="SFPTWO_IMAGEEDIT sfpfbDynamicYoutube tagsimg_29"><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><a href="#" id="page6-social6" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT tagsimg_30"><img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/author_social_6.png" class="img-responsive block-center"></a>
                        </li>
                    </ul> 
                </div>
            </div>
            <div class="SFP_BOOT-sm-8">
            <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_27 texttagdelete">
                <h2 id="page6-author-title" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_27 tagdelete" data-wow-delay=".5s">Awesome Apps llc.</h2>
               </div>
                <div class="wow fadeIn" data-wow-delay="1s">
              <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_28 texttagdelete">
                    <p id="author-text textedit SFPTWO_TAGEDIT edit explicit_edit">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                  </div>  
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section id="page7" class="page7 section">
<div class="content">
    <div class="container">
        <div class="SFP_ROW">
            <div class="SFP_BOOT-sm-12 text-center">
                <div class="wow fadeIn" data-wow-delay=".3s">
                <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_29 texttagdelete">
                    <h1 id="page7-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_28 tagdelete">LIKE AND SHARE!</h1>
                  </div>
                  <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_30 texttagdelete">
                    <h3 id="page7-sub-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_29 tagdelete">Support us by liking and sharing these social networks. We appreciate it!</h3>
              </div>
                </div>
                <div id="social-share-btn-area" class="social-share-btn-area wow fadeIn" data-wow-delay="1s">
                    <ul class="list-unstyled list-inline wow tada" data-wow-delay="1.9s">
                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li id="fb-btn-container" class="SFPTWO_IMAGEEDIT sfpfbDynamicLike tagsimg_31">
                        <div id="fb-btn" class="sfpLike"> 
                                  
       <script>

FB.init({
    appId      : '1546857545560281',
    status     : true,
    xfbml      : true,
    version    : 'v2.0'
  });
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1546857545560281&version=v2.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>			
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1546857545560281&version=v2.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like disabled fb_iframe_widget" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=1546857545560281&amp;container_width=0&amp;href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;layout=box_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true"><span style="vertical-align: bottom; width: 47px; height: 61px;"><iframe name="fe976d858" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=1546857545560281&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FrFG58m7xAig.js%3Fversion%3D41%23cb%3Df8722156%26domain%3Dtest.scampaigns.com%26origin%3Dhttp%253A%252F%252Ftest.scampaigns.com%252Fff736400c%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;layout=box_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true" class="" style="border: none; visibility: visible; width: 47px; height: 61px;"></iframe></span></div> 
                        </div>
                        </li>
                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li id="twitter-btn-container" class="SFPTWO_IMAGEEDIT sfpfbDynamicTweet tagsimg_32">
                            
                   			<div id="twtbox"><iframe id="twitterbutton" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.26f01cfa05bff9af89657dcbd8f7b705.en.html#_=1425313705184&amp;count=vertical&amp;dnt=false&amp;id=twitterbutton&amp;lang=en&amp;original_referer=http%3A%2F%2Ftest.scampaigns.com%2FFrontend%2Feditnew%2F98054f49102bbb8b14-elegantapp%2Felegantapp&amp;size=m&amp;text=SFPv2%20Smartfanpage%20%7C%20Editor&amp;url=http%3A%2F%2Ftest.scampaigns.com%2FFrontend%2Feditnew%2F98054f49102bbb8b14-elegantapp%2Felegantapp" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-vertical" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 57px; height: 62px;"></iframe></div>
                        </li>
                        <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li id="google-btn-container" class="SFPTWO_IMAGEEDIT sfpfbDynamicGoogle tagsimg_33">
                            <div id="google-btn" class="sfpGoogle">
                             
<script src="https://apis.google.com/js/platform.js" async="" defer="" gapi_processed="true"></script>
<div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 50px; height: 60px; background: transparent;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 50px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 60px;" tabindex="0" vspace="0" width="100%" id="I0_1425313705228" name="I0_1425313705228" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=tall&amp;origin=http%3A%2F%2Ftest.scampaigns.com&amp;url=http%3A%2F%2Ftest.scampaigns.com%2FFrontend%2Feditnew%2F98054f49102bbb8b14-elegantapp%2Felegantapp&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en_GB.6Ex8sbqqgWI.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAGLTcCNptsKqqHW7DF58vgC3jtM2Wf-Srw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1425313705228&amp;parent=http%3A%2F%2Ftest.scampaigns.com&amp;pfname=&amp;rpctoken=16868402" data-gapiattached="true" title="+1"></iframe></div>
                            </div>
                        </li>
                    </ul>
                    <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><li class="SFPTWO_IMAGEEDIT sfpfbDynamicShare tagsimg_34">
                    <a id="fb-share-btn" class="sfpDynamic sfpShare" rel="http://www.google.com">
                   
                        <img src="//test.scampaigns.com/user_template/98054f49102bbb8b14-elegantapp/img/fb_share.png" class="img-responsive block-center">      
                    </a>
                
                    <input class="sfpfbpic" type="hidden" value="">
                    <input class="sfpfbname" type="hidden" value="">
                    <input class="sfpfbcaption" type="hidden" value="">
                    <input class="sfpfbdescription" type="hidden" value="">
                    <input class="sfpfblink" type="hidden" value="">
                    <input class="sfpfbredrct" type="hidden" value="">
                    <script src="http://connect.facebook.net/en_US/all.js"></script><script type="text/javascript">

  FB.init({appId: '1505052056407910', status: true, cookie: true});
 	$('.sfpfbDynamicShare a').click(function(){
        
        			var pic  = $(this).parents('.sfpfbDynamicShare').find('.sfpfbpic').val();
        			var link =  $(this).parents('.sfpfbDynamicShare').find('.sfpfblink').val();
        			var caption =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbcaption').val();
        			var description =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbdescription').val();
        			var name =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbname').val();
        			var sfpfbredrct =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbredrct').val();
        
      var obj = {
          method: 'feed',
          redirect_uri: sfpfbredrct,
          link: link,
          picture: pic,
          name: name,
          caption: caption,
          description: description
        };
 
        function callback(response) {
          
        }
 
        FB.ui(obj, callback);
 });
</script>
               
                    </li>
                 
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section id="page8" class="page8 section">
<div class="content">
    <div class="container">
        <div class="SFP_ROW">
            <div class="SFP_BOOT-sm-12 text-center">
                
                <div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div class="textme"></div><div id="legal-area" class="disclaimer-area SFPTWO_TEXTEDIT tags_31 texttagdelete">
                    <p id="legal-text" class="textedit SFPTWO_TAGEDIT edit tag_30 tagdelete"><a class="sfpDynamic" href="#">Private Policy</a> | <a class="sfpDynamic" href="#">Legal Link</a> | Copyright Â© 2014 Elegent App. Get all mockups for this landing page and other marketing related stuff at <a class="sfpDynamic" href="http://markeazy.com">Markeazy.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
</div>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-3.newrelic.com","licenseKey":"f767fe6f50","applicationID":"5899235","transactionName":"YFwEMkZYX0ZYBhINVlkWMxRdFkRGXBc5EFxaSQoHQFweDAFVU1BfAwBXVgZbU1cBB1dQFFJVAwFVV0VUSRVJDVdTXB5IRFFB","queueTime":0,"applicationTime":0,"atts":"TBsHRA5CTEg=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-476.min.js"}</script>