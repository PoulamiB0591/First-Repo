<img src="/img/divider.png" id="imgdragable" style="display: none;">



<!--SFPPAGE-->


    
    
        <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UwACU1BRGwYIXVhQBAQ="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t){try{i.console&&console.log(t)}catch(e){}}var n,r=t("ee"),o=t(1),i={};try{n=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(i.console=!0,-1!==n.indexOf("dev")&&(i.dev=!0),-1!==n.indexOf("nr_dev")&&(i.nrDev=!0))}catch(a){}i.nrDev&&r.on("internal-error",function(t){e(t.stack)}),i.dev&&r.on("fn-err",function(t,n,r){e(r.stack)}),i.dev&&(e("NR AGENT IN DEVELOPMENT MODE"),e("flags: "+o(i,function(t){return t}).join(", ")))},{1:23,ee:"QJf3ax"}],4:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,t(4),window.onerror=e;try{throw new Error}catch(f){"stack"in f&&(t(1),t(5),"addEventListener"in window&&t(2),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(3),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:10,2:7,3:11,4:3,5:9,6:24,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t){t("loader").features.ins=!0},{loader:"G9z0Bl"}],6:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(1);t("loader").features.stn=!0,t(2),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:10,2:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],7:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:24,2:25,ee:"QJf3ax",gos:"7eSDFh"}],8:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:25,2:24,ee:"QJf3ax"}],9:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:25,2:24,ee:"QJf3ax"}],10:[function(t,e){function n(t,e,n){var r=t[0];"string"==typeof r&&(r=new Function(r)),t[0]=o(r,"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:25,2:24,ee:"QJf3ax"}],11:[function(t,e){function n(){f.inPlace(this,p,"fn-")}function r(t,e){f.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}function i(t,e){for(var n in t)e[n]=t[n];return e}var a=t("ee").create(),s=t(1),c=t(2),f=c(a),u=c(s),d=window.XMLHttpRequest,p=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=a,window.XMLHttpRequest=function(t){var e=new d(t);try{a.emit("new-xhr",[],e),u.inPlace(e,["addEventListener","removeEventListener"],"-",function(t,e){return e}),e.addEventListener("readystatechange",n,!1)}catch(r){try{a.emit("internal-error",[r])}catch(o){}}return e},i(d,XMLHttpRequest),XMLHttpRequest.prototype=d.prototype,f.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),a.on("send-xhr-start",r),a.on("open-xhr-start",r)},{1:7,2:25,ee:"QJf3ax"}],12:[function(t){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=e(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(n.cat=d.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r,this.startTime])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=e(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",[e])}catch(r){}}};for(var u=0;c>u;u++)n.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:13,3:11,4:7,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],13:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],14:[function(t,e){function n(t){return function(){r(t,[(new Date).getTime()].concat(i(arguments)))}}var r=t("handle"),o=t(1),i=t(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(t,e){window.NREUM[e]=n("api-"+e)}),e.exports=window.NREUM},{1:23,2:24,handle:"D5DuLP"}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=l.info=NREUM.info;if(t&&t.licenseKey&&t.applicationID&&f&&f.body){s(h,function(e,n){e in t||(t[e]=n)}),l.proto="https"===p.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=f.createElement("script");e.src=l.proto+t.agent,f.body.appendChild(e)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=t(1),c=(t(2),window),f=c.document,u="addEventListener",d="attachEvent",p=(""+location).split("?")[0],h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-593.min.js"},l=e.exports={offset:i(),origin:p,features:{}};f[u]?(f[u]("DOMContentLoaded",o,!1),c[u]("load",n,!1)):(f[d]("onreadystatechange",r),c[d]("onload",n)),a("mark",["firstbyte",i()])},{1:23,2:14,handle:"D5DuLP"}],23:[function(t,e){function n(t,e){var n=[],o="",i=0;for(o in t)r.call(t,o)&&(n[i]=e(o,t[o]),i+=1);return n}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],24:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],25:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s,t))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:24,ee:"QJf3ax"}]},{},["G9z0Bl",4,12,6,5]);</script>
        <title></title>
        <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">
           <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/js/jquery-1.9.1.min.js"></SFPScript-->
           <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/js/bootstrap.min.js"></SFPScript-->
            <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/js/html5shiv.js"></SFPScript-->
             <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/js/functions.js"></SFPScript-->
         <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/js/wow.min.js"></SFPScript-->
            <link rel="stylesheet" href="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/css/bootstrap.min.css">
            <link rel="stylesheet" href="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/css/animate.css">
            <link rel="stylesheet" href="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/css/style.css">
        
        
        
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
            <div id="wrapper" class="">
           
                <div class="main">
                
                <div class="textme" style="display:inline-block;"></div><div id="logo-badge" class="logo-badge SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_1">
                    <div class="logo-badge-inner">
                        <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/logo.png" id="logo-badge-logo" class="img-responsive center-block"><a href="#page5-header" id="badge-btn" class="btn btn-primary btn-ribbon btn-block sfpDynamic">DOWNLOAD</a>
                    </div>
                </div>
                    <div class="page1-wrapper">
                        
                        <section id="main-hero" class="page1 section SFPTWO_BACKGROUND">
                            <div class="content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="p1-content">
                                              <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_1 texttagdelete">
                                              
                                               <h1 id="page1-header" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_1 tagdelete" data-wow-delay=".3s">ONE OF THE COOLEST APPS EVER MADE!</h1>
                                              </div> 
                                               
                                               <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_2 texttagdelete">
                                                <p id="page1-text" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_2 tagdelete" data-wow-delay=".6s">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquetSit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquet</p>
                                               </div>
                                               
                                                <div class="hero-btn-area wow fadeIn" data-wow-delay=".9s">
                                                    <ul class="list-inline">
                                                        <li data-lead-id="hero-info-btn-container">
                                                            <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_3 texttagdelete">
                                                            <a href="#video0-header" data-lead-id="btn-more-info" class="sfpDynamic btn btn-primary btn-hero-info textedit SFPTWO_TAGEDIT edit tag_3 tagdelete">MORE INFO</a>
                                                    </div>
                                                        </li>
                                                        <li data-lead-id="hero-btn-container">
                                                            <div class="dl-btn-container">
                                                            <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_2">
                                                                <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/download-btn-icon.png" data-lead-id="btn-hero-icon" class="btn-icon">
                                                               </div>
                                                               <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_4 texttagdelete">
                                                                <a href="#" data-lead-id="btn-hero" class="sfpDynamic btn btn-primary btn-hero btn-top-hero textedit SFPTWO_TAGEDIT edit tag_4 tagdelete">DOWNLOAD THE APP</a>
                                                           </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="hero-trust-container" class="trust-area wow fadeIn" data-wow-delay=".9s">
                                                    <ul class="list-inline">
                                                        <div class="textme" style="display:inline-block;"></div><li class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_3">
                                                            <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/hero-trust-icon.png" id="hero-trust-img" class="trust-img">
                                                        </li>
                                                        <div class="textme" style="display:inline-block;"></div><li class="SFPTWO_TEXTEDIT tags_5 texttagdelete">
                                                      
                                                            <p id="hero-trust-text" class="trust-text textedit SFPTWO_TAGEDIT edit tag_5 tagdelete">Also Available in the <a href="#" class="">App Store</a> and <a class="" href="#">Play Store</a></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="textme" style="display:inline-block;"></div><div class="col-sm-6 SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_4">
                                            <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/hero-app.png" id="hero-img" class="img-responsive center-block wow fadeIn" data-wow-delay=".3s">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <section id="video0_section" class="video0_section section">
                        <div class="content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="wow fadeIn" data-wow-delay=".5s">
                                        <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_6 texttagdelete">
                                            <h1 id="video0-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_6 tagdelete">CHECK OUT OUR VIDEO</h1>
                                         </div>
                                         <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_7 texttagdelete">
                                            <h3 id="video0-sub-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_7 tagdelete">This video will reassure you that our book is amazing!</h3>
                                       </div>
                                        </div>
                                        <div id="video0-wrapper" class="video-wrapper">
                                            <div class="video-container wow fadeIn" data-wow-delay=".7s">
                                                <div class="textme" style="display:inline-block;"></div><div id="top-vid-area" class="vid-wrapper text-center SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_5">
                                                    <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/vid_placeholder.jpg" class="img-responsive center-block">
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
                                <div class="row">
                                    <div class="col-sm-6">
                                    <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_6">
                                        <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/iPhone2.png" id="page2-img" class="wow fadeIn img-responsive center-block" data-wow-delay="1s">
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="spacer"></div>
                                        <div class="p2-content wow fadeInRight" wow-delay="1s">
                                          <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_8 texttagdelete"><h1 id="page2-header" class="textedit SFPTWO_TAGEDIT edit tag_8 tagdelete">Here Are Some Of The Features!</h1>
                                          </div>  
                                          <div https:="" apis.google.com="" u="" 0="" se="" _="" +1="" sharebutton?plusshare="true&amp;usegapi=1&amp;height=60&amp;annotation=vertical-bubble&amp;action=share&amp;origin=http%3A%2F%2Flocalhost&amp;url=http%3A%2F%2Fwww.mylooqi.com%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.KJx6NR4qjao.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAGLTcCPrdHtwSoUz-2ZKaKY-306A2GLrlQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1425638292851&amp;parent=http%3A%2F%2Flocalhost&amp;pfname=&amp;rpctoken=30416170class=&quot;SFPTWO_TEXTEDIT&quot;">
                                            <p id="page2-text" class="textedit SFPTWO_TAGEDIT edit tag_9 tagdelete">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquet </p>
                                          </div>
                                            <div id="page2-list">
                                                <div data-lead-id="feature1-container" class="feature-point feature-point1 wow fadeIn" data-wow-delay="1s">
                                                   <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_7">
                                                    <img data-lead-id="feature1-icon" src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/feature-icon1.png" class="feature-icon img-responsive pull-left">
                                                    </div>
                                                    <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_9 texttagdelete">
                                                    <p data-lead-id="feature1-text" class="textedit SFPTWO_TAGEDIT edit tag_10 tagdelete">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquet mauris adipiscing hac ut! Velit aliquet</p>
                                                   </div>
                                                </div>
                                                <div data-lead-id="feature2-container" class="feature-point feature-point2 wow fadeIn" data-wow-delay="1.5s">
                                                    <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_8">
                                                    <img data-lead-id="feature2-icon" src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/feature-icon2.png" class="feature-icon img-responsive pull-left">
                                                    </div>
                                                  <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_10 texttagdelete">
                                                    <p data-lead-id="feature2-text" class="textedit SFPTWO_TAGEDIT edit tag_11 tagdelete">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquet mauris adipiscing hac ut! Velit aliquet</p>
                                                 </div>
                                                </div>
                                                <div data-lead-id="feature3-container" class="feature-point feature-point3 wow fadeIn" data-wow-delay="2s">
                                                 <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_9">
                                                    <img data-lead-id="feature3-icon" src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/feature-icon3.png" class="feature-icon img-responsive pull-left">
                                                    </div>
                                                    <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_11 texttagdelete">
                                                    <p data-lead-id="feature3-text" class="textedit SFPTWO_TAGEDIT edit tag_12 tagdelete">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies adipiscing, mauris adipiscing hac ut! Velit aliquet mauris adipiscing hac ut! Velit aliquet</p>
                                               </div>
                                                </div>
                                                <div data-lead-id="feature4-container" class="feature-point feature-point4 wow fadeIn " data-wow-delay="2.5s">
                                                    <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_10">
                                                    <img data-lead-id="feature4-icon" src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/feature-icon4.png" class="feature-icon img-responsive pull-left">
                                                 </div>
                                                    <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_12 texttagdelete">
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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="wow fadeIn" data-wow-delay=".3s">
                                        <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_13 texttagdelete">
                                            <h1 id="gallery-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_14 tagdelete">SCREENSHOTS</h1>
                                            </div>
                                            <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_14 texttagdelete">
                                            <h3 id="gallery-sub-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_15 tagdelete">Sit dapibus odio turpis porttitor. Vel ac rhoncus, dictumst adipiscing ultricies.</h3>
                                      </div>
                                        </div>
                                        <div id="gallery_thumbs" class="gallery_thumbs">
                                            <ul class="list-unstyled list-inline text-center">
                                                <li id="img-container1">
                                                <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_11">
                                                    <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/screen1.jpg" id="screen1" class="img-responsive center-block wow zoomIn">
                                                  </div>
                                                  <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_15 texttagdelete">
                                                    <p id="screen_caption1" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_16 tagdelete" data-wow-delay=".3s">Sit dapibus odio turpis porttitor.</p>
                                            </div>
                                                </li>
                                                <li id="img-container2">
                                                <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_12">
                                                    <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/screen2.jpg" id="screen2" class="img-responsive center-block wow zoomIn" data-wow-delay=".6s">
                                                </div>
                                                <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_16 texttagdelete">
                                                    <p id="screen_caption2" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_17 tagdelete" data-wow-delay=".9s">Sit dapibus odio turpis porttitor.</p>
                                               </div>
                                                </li>
                                                <li id="img-container3">
                                                 <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_13">
                                                    <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/screen3.jpg" id="screen3" class="img-responsive center-block wow zoomIn" data-wow-delay="1s">
                                                   </div>
                                                <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_17 texttagdelete">
                                                    <p id="screen_caption3" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_18 tagdelete" data-wow-delay="1.3s">Sit dapibus odio turpis porttitor.</p>
                                               </div>
                                                </li>
                                                <li id="img-container4">
                                                 <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_14">
                                                    <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/screen4.jpg" id="screen4" class="img-responsive center-block wow zoomIn" data-wow-delay="1.5s">
                                                  </div>
                                                <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_18 texttagdelete">
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
                        <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/office.jpg" id="page5-bg" class="background-img">
                        <div class="content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <div class="wow fadeIn" data-wow-delay=".3s">
                                        <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_19 texttagdelete">
                                            <h1 id="page5-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_20 tagdelete">DOWNLOAD THE APP!</h1>
                                       </div>
                                       <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_20 texttagdelete">
                                            <h3 id="page5-sub-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_21 tagdelete">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h3>
                                      </div>
                                        </div>
                                        <div id="buy-btn-area" class="buy-btn-area">
                                            <ul class="list-unstyled list-inline text-center">
                                                <li id="buy-btn1-container">
                                                    <div class="dl-btn-container wow fadeIn" data-wow-delay=".5s">
                                                   
                                                       
                                                  
                                                    <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_21 texttagdelete"> <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/download-btn-icon.png" data-lead-id="buy-btn-1-img" class="btn-icon">
                                                        <a href="#" data-lead-id="buy-btn1" class="sfpDynamic btn btn-primary btn-hero btn-p51 textedit SFPTWO_TAGEDIT edit tag_22 tagdelete">DOWNLOAD HERE</a>
                                                  </div>
                                                    </div>
                                                </li>
                                                <li id="buy-btn2-container">
                                                    <div class="dl-btn-container wow fadeIn" data-wow-delay=".8s">
                                                    
                                                       
                                                  
                                                  <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_22 texttagdelete"> <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/apple-btn-icon.png" data-lead-id="buy-btn-2-img" class="btn-icon">
                                                        <a href="#" data-lead-id="buy-btn2" class="sfpDynamic btn btn-primary btn-hero btn-p52 textedit SFPTWO_TAGEDIT edit tag_23 tagdelete"> APP STORE</a>
                                                   </div>
                                                    </div>
                                                </li>
                                                <li id="buy-btn3-container">
                                                    <div class="dl-btn-container wow fadeIn" data-wow-delay="1.1s">
                                                    
                                                       
                                                      
                                                       <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_23 texttagdelete"> <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/android-btn-icon.png" data-lead-id="buy-btn-3-img" class="btn-icon">
                                                        <a href="#" data-lead-id="buy-btn3" class="sfpDynamic btn btn-primary btn-hero btn-p53 textedit SFPTWO_TAGEDIT edit sfpDynamic tag_24 tagdelete">PLAY STORE</a>
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
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <div class="wow fadeIn" data-wow-delay=".3s">
                                        <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_24 texttagdelete">
                                            <h1 id="page6-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_25 tagdelete">ABOUT OUR COMPANY</h1>
                                       </div>
                                       <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_25 texttagdelete">
                                            <h3 id="page6-sub-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_26 tagdelete">Lorem ipsum dolor sit amet, consectetur </h3>
                                     </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row author-info-area">
                                    <div class="col-sm-12 text-center"></div>
                                    <div class="col-sm-4 text-center">
                                        <div class="wow fadeIn" data-wow-delay=".3s">
                                        <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_15">
                                            <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/company-img.png" id="author-img" class="img-responsive center-block author-img">
                                          </div>
                                            <ul class="list-unstyled list-inline author-social-icon-list">
                                                <div class="textme" style="display:inline-block;"></div><li class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_16"><div class="textme" style="display:inline-block;"></div><a href="#" id="page6-social1" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_17"><img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/author_social_1.png" class="img-responsive block-center"></a>
                                             </li>
                                            <div class="textme" style="display:inline-block;"></div><li class="class	SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_18"><div class="textme" style="display:inline-block;"></div><a href="#" id="page6-social2" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_19"><img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/author_social_2.png" class="img-responsive block-center"></a>
                                        </li>
                                        <div class="textme" style="display:inline-block;"></div><li class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_20"><div class="textme" style="display:inline-block;"></div><a href="" id="page6-social3" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_21"><img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/author_social_3.png" class="img-responsive block-center"></a>
                                    </li>
                                    <div class="textme" style="display:inline-block;"></div><li class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_22"><div class="textme" style="display:inline-block;"></div><a href="#" id="page6-social4" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_23"><img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/author_social_4.png" class="img-responsive block-center"></a>
                                 </li>
                                <div class="textme" style="display:inline-block;"></div><li class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_24"><div class="textme" style="display:inline-block;"></div><a href="#" id="page6-social5" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_25"><img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/author_social_5.png" class="img-responsive block-center"></a>
                            </li>
                            <div class="textme" style="display:inline-block;"></div><li class="SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_26"><div class="textme" style="display:inline-block;"></div><a href="#" id="page6-social6" class="sfpDynamic author-social-icon SFPTWO_IMAGEEDIT nownsfpimgdel tagsimg_27"><img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/author_social_6.png" class="img-responsive block-center"></a>
                        </li>
                    </ul> 
                </div>
            </div>
            <div class="col-sm-8">
            <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_26 texttagdelete">
                <h2 id="page6-author-title" class="wow fadeIn textedit SFPTWO_TAGEDIT edit tag_27 tagdelete" data-wow-delay=".5s">Awesome Apps llc.</h2>
               </div>
                <div class="wow fadeIn" data-wow-delay="1s">
              <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_27 texttagdelete">
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
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="wow fadeIn" data-wow-delay=".3s">
                <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_28 texttagdelete">
                    <h1 id="page7-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_28 tagdelete">LIKE AND SHARE!</h1>
                  </div>
                  <div class="textme" style="display:inline-block;"></div><div class="SFPTWO_TEXTEDIT tags_29 texttagdelete">
                    <h3 id="page7-sub-header" class="text-center textedit SFPTWO_TAGEDIT edit tag_29 tagdelete">Support us by liking and sharing these social networks. We appreciate it!</h3>
              </div>
                </div>
                <div id="social-share-btn-area" class="social-share-btn-area wow fadeIn" data-wow-delay="1s">
                    <ul class="list-unstyled list-inline wow tada" data-wow-delay="1.9s">
                        <div class="textme" style="display:inline-block;"></div><li id="fb-btn-container" class="SFPTWO_IMAGEEDIT sfpfbDynamicLike nownsfpimgdel tagsimg_28">
                        
                                  
       			<script>
       
       			FB.init({
       			appId      : '1505052056407910',
       			status     : true,
       			xfbml      : true,
       			version    : 'v2.0'
       });
       			(function(d, s, id) {
       			var js, fjs = d.getElementsByTagName(s)[0];
       			if (d.getElementById(id)) return;
       			js = d.createElement(s); js.id = id;
       			js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1505052056407910&version=v2.0';
       			fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));</script>
       			<div id="fb-root"></div>
       			<script>(function(d, s, id) {
       			var js, fjs = d.getElementsByTagName(s)[0];
       			if (d.getElementById(id)) return;
       			js = d.createElement(s); js.id = id;
       			js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1505052056407910&version=v2.0';
       			fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));</script>
       			<div fb-iframe-plugin-query="action=like&amp;app_id=1505052056407910&amp;container_width=0&amp;href=http%3A%2F%2Ftest.scampaigns.com%2FFrontend%2Feditnew%2F475506adc143b9d8-elegantapp%2Ftest.scampaigns.com&amp;layout=box_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true" fb-xfbml-state="rendered" class="fb-like disabled fb_iframe_widget" data-href="test.scampaigns.com" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"><span style="vertical-align: bottom; width: 49px; height: 61px;"><iframe class="" src="http://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=1505052056407910&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F6Dg4oLkBbYq.js%3Fversion%3D41%23cb%3Df8f1d9864e2e86%26domain%3Dtest.scampaigns.com%26origin%3Dhttp%253A%252F%252Ftest.scampaigns.com%252Ff2b1838a78ac95c%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Ftest.scampaigns.com%2FFrontend%2Feditnew%2F475506adc143b9d8-elegantapp%2Ftest.scampaigns.com&amp;layout=box_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=true" style="border: medium none; visibility: visible; width: 49px; height: 61px;" title="fb:like Facebook Social Plugin" scrolling="no" allowtransparency="true" name="f3e87511af75e14" frameborder="0" height="1000px" width="1000px"></iframe></span></div> 
                        
                        </li>
                        <div class="textme" style="display:inline-block;"></div><li id="twitter-btn-container" class="SFPTWO_IMAGEEDIT sfpfbDynamicTweet nownsfpimgdel tagsimg_29">
                            
                   			<div id="twtbox"><iframe style="width: 58px; height: 62px;" data-twttr-rendered="true" title="Twitter Tweet Button" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-vertical" src="http://platform.twitter.com/widgets/tweet_button.3b6d1172463333ba9e3a4714e5a08ce6.en.html#_=1426500142463&amp;count=vertical&amp;dnt=false&amp;id=twitterbutton&amp;lang=en&amp;original_referer=http%3A%2F%2Ftest.scampaigns.com%2FFrontend%2Feditnew%2F475506adc143b9d8-elegantapp%2Felegantapp&amp;size=m&amp;text=SFPv2%20Smartfanpage%20%7C%20Editor&amp;url=http%3A%2F%2Ftest.scampaigns.com%2FFrontend%2Feditnew%2F475506adc143b9d8-elegantapp%2Felegantapp" allowtransparency="true" scrolling="no" id="twitterbutton" frameborder="0"></iframe></div>
                        </li>
                    </ul>
                    <div class="textme" style="display:inline-block;"></div><li class="SFPTWO_IMAGEEDIT sfpfbDynamicShare nownsfpimgdel tagsimg_30">
                    <a id="fb-share-btn" class="sfpDynamic sfpShare" rel="http://www.google.com">
                   
                        <img src="//test.scampaigns.com/user_template/475506adc143b9d8-elegantapp/img/fb_share.png" class="img-responsive block-center">      
                    </a>
                	 
                    <input class="sfpfbpic" value="" type="hidden">
                    <input class="sfpfbname" value="" type="hidden">
                    <input class="sfpfbcaption" value="" type="hidden">
                    <input class="sfpfbdescription" value="" type="hidden">
                    <input class="sfpfblink" value="test.scampaigns.com" type="hidden">
                     <!--SFPScript src='http://connect.facebook.net/en_US/all.js'></script><script type='text/javascript'>

  FB.init({appId: '1505052056407910', status: true, cookie: true,version:'v2.0'});
 	$('.sfpfbDynamicShare a').click(function(){
        
        			var pic  = $(this).parents('.sfpfbDynamicShare').find('.sfpfbpic').val();
        			var link =  $(this).parents('.sfpfbDynamicShare').find('.sfpfblink').val();
        			var caption =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbcaption').val();
        			var description =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbdescription').val();
        			var name =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbname').val();
        			var sfpfbredrct =  $(this).parents('.sfpfbDynamicShare').find('.sfpfbredrct').val();
        
      var obj = {
          method: 'feed',
          redirect_uri: 'sfpfbredrct',
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
</SFPScript-->
               
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
        <div class="row">
            <div class="col-sm-12 text-center">
                
                <div class="textme" style="display:inline-block;"></div><div id="legal-area" class="disclaimer-area SFPTWO_TEXTEDIT tags_30 texttagdelete">
                    <p id="legal-text" class="textedit SFPTWO_TAGEDIT edit tag_30 tagdelete justifyme"><a class="sfpDynamic" href="#">Private Policy</a> | <a class="sfpDynamic" href="#">Legal Link</a> | Copyright © 2014 Elegent App. Get all mockups for this landing page and other marketing related stuff at <a class="sfpDynamic" href="http://markeazy.com">Markeazy.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
</div>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"f767fe6f50","applicationID":"5899235","transactionName":"YFwEMkZYX0ZYBhINVlkWMxRdFkRGXBc5EFxaSQoHQFweAQ5QU1QPVl0FVwAKUwxdXUsBVVJeBwhAWEFFFgwIAFxPFxYORA==","queueTime":0,"applicationTime":0,"atts":"TBsHRA5CTEg=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-593.min.js"}</script>