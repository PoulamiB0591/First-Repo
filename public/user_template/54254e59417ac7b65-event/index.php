<img src="/img/divider.png" id="imgdragable" style="display: none;">



<!--SFPPAGE-->


    
        <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UwACU1BRGwYIXVhQBAQ="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(5),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(f){"stack"in f&&(t(1),t(4),"addEventListener"in window&&t(2),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(3),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:8,2:5,3:9,4:7,5:20,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],4:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(2);t("loader").features.stn=!0,t(1),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:6,2:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:20,2:21,ee:"QJf3ax",gos:"7eSDFh"}],6:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:21,2:20,ee:"QJf3ax"}],7:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:21,2:20,ee:"QJf3ax"}],8:[function(t,e){function n(t,e,n){var r=t[0];"string"==typeof r&&(r=new Function(r)),t[0]=o(r,"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:21,2:20,ee:"QJf3ax"}],9:[function(t,e){function n(){c.inPlace(this,d,"fn-")}function r(t,e){c.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}var i=t("ee").create(),a=t(1),s=t(2),c=s(i),f=s(a),u=window.XMLHttpRequest,d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=i,window.XMLHttpRequest=function(t){var e=new u(t);try{i.emit("new-xhr",[],e),f.inPlace(e,["addEventListener","removeEventListener"],"-",function(t,e){return e}),e.addEventListener("readystatechange",n,!1)}catch(r){try{i.emit("internal-error",[r])}catch(o){}}return e},window.XMLHttpRequest.prototype=u.prototype,c.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),i.on("send-xhr-start",r),i.on("open-xhr-start",r)},{1:5,2:21,ee:"QJf3ax"}],10:[function(t){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=e(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(n.cat=d.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r,this.startTime])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=e(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",[e])}catch(r){}}};for(var u=0;c>u;u++)n.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:11,3:9,4:5,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],11:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){p.proto="https"===d.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=p.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,c=s.document,f="addEventListener",u="attachEvent",d=(""+location).split("?")[0],p=e.exports={offset:i(),origin:d,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),s[f]("load",n,!1)):(c[u]("onreadystatechange",r),s[u]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],20:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],21:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s,t))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:20,ee:"QJf3ax"}]},{},["G9z0Bl",3,10,4]);</script>
        <title></title>
        <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet" type="text/css">
            <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/js/jquery-1.9.1.min.js"></SFPScript-->
            <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/js/bootstrap.min.js"></SFPScript-->
            <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/js/html5shiv.js"></SFPScript-->
            <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/js/functions.js"></SFPScript-->
            <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/js/classie.js"></SFPScript-->
            <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/js/custom.js"></SFPScript-->
            
            <link rel="stylesheet" href="//test.scampaigns.com/user_template/54254e59417ac7b65-event/css/bootstrap.min.css">
            <link rel="stylesheet" href="//test.scampaigns.com/user_template/54254e59417ac7b65-event/css/style.css">
        
        
        
        <div class="wrapper_main">
            <header data-lead-id="top-SFP_ROW-section">
                <div id="top-section"><!-- START OF SECTION -->
                <div class="container">
                    <div class="SFP_ROW">
                        <div class="SFP_BOOT-md-3">
                            <div class="logo-container">
                               <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_1">
                                	<img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo.png" id="logo" class="img-responsive">
                                <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                            </div>
                        </div>
                        <div class="SFP_BOOT-md-9">
                            <div class="top-menu-container">
                                <ul data-lead-id="top-menu" class="list-inline">
                                    <li data-lead-id="top-link1-container"><a class="disabled" href="#anchor1"><div class="SFPTWO_TEXTEDIT tags_1 texttagdelete"><span data-lead-id="top-link1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_1 tagdelete" contenteditable="false">ABOUT</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></a></li>
                                    <li data-lead-id="top-link2-container"><a class="disabled" href="#anchor2"><div class="SFPTWO_TEXTEDIT tags_2 texttagdelete"><span data-lead-id="top-link2" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_2 tagdelete" contenteditable="false">SCHEDULE</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></a></li>
                                    <li data-lead-id="top-link3-container"><a class="disabled" href="#anchor3"><div class="SFPTWO_TEXTEDIT tags_3 texttagdelete"><span data-lead-id="top-link3" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_3 tagdelete" contenteditable="false">PRESENTERS</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></a></li>
                                    <li data-lead-id="top-link4-container"><a class="disabled" href="#anchor4"><div class="SFPTWO_TEXTEDIT tags_4 texttagdelete"><span data-lead-id="top-link4" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_4 tagdelete" contenteditable="false">PARTNERS</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></a></li>
                                    <li data-lead-id="top-link5-container"><a class="disabled" href="#anchor5"><div class="SFPTWO_TEXTEDIT tags_5 texttagdelete"><span data-lead-id="top-link5" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_5 tagdelete" contenteditable="false">TICKETS</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></a></li>
                                    <li data-lead-id="top-link6-container"><a class="disabled" href="#anchor6"><div class="SFPTWO_TEXTEDIT tags_6 texttagdelete"><span data-lead-id="top-link6" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_6 tagdelete" contenteditable="false">TESTIMONIALS</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></a></li>
                                    <li data-lead-id="top-link7-container"><a class="disabled" href="#anchor7"><div class="SFPTWO_TEXTEDIT tags_7 texttagdelete"><span data-lead-id="top-link7" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_7 tagdelete" contenteditable="false">LOCATION</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></a></li>
                                    <li data-lead-id="top-link8-container"><a class="disabled" href="#anchor8"><div class="SFPTWO_TEXTEDIT tags_8 texttagdelete"><span data-lead-id="top-link8" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_8 tagdelete" contenteditable="false">REGISTER</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></a></li>
                                    <li data-lead-id="top-link9-container"><a class="disabled" href="#anchor9"><div class="SFPTWO_TEXTEDIT tags_9 texttagdelete"><span data-lead-id="top-link9" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_9 tagdelete" contenteditable="false">FAQ</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div><!-- END OF SECTION -->
            </header>
            <div id="hero-section"><!-- START OF SECTION -->
            <div style="display: none;" data-lead-id="overlay" class="overlay"></div>
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-md-12">
                        <div data-lead-id="hero-info-conatiner" class="hero-info-container">
                           <div class="SFPTWO_TEXTEDIT tags_10 texttagdelete"> <h1 data-lead-id="hero-header" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_10 tagdelete" contenteditable="false">SOME AWESOME EVENT</h1><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                            <div class="SFPTWO_TEXTEDIT tags_11 texttagdelete"><h2 data-lead-id="hero-sub-header" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_11 tagdelete" contenteditable="false">WHERE YOU COME TO LEARN OR SEE AWESOME THINGS</h2><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                            <div data-lead-id="counter" class="counter">
                                <ul class="list-inline">
                                    <li>
                                        <div class="counter-box">
                                            <div class="number">
                                            <div class="SFPTWO_TEXTEDIT tags_12 texttagdelete">
                                                <span class="days textedit SFPTWO_TAGEDIT edit explicit_edit tag_12 tagdelete" contenteditable="false">58</span>
                                                <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            </div>
                                             <div class="SFPTWO_TEXTEDIT tags_13 texttagdelete">
                                            <div class="duration textedit SFPTWO_TAGEDIT edit explicit_edit tag_13 tagdelete" contenteditable="false">
                                                Days 
                                            </div>
                                            <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter-box">
                                            <div class="number">
                                            <div class="SFPTWO_TEXTEDIT tags_14 texttagdelete">
                                                <span class="hours duration textedit SFPTWO_TAGEDIT edit explicit_edit tag_14 tagdelete" contenteditable="false">15</span>
                                                <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            </div>
                                             <div class="SFPTWO_TEXTEDIT tags_15 texttagdelete">
                                            <div class="duration duration textedit SFPTWO_TAGEDIT edit explicit_edit tag_15 tagdelete" contenteditable="false">
                                                Hours
                                            </div>
                                            <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter-box">
                                            <div class="number">
                                            <div class="SFPTWO_TEXTEDIT tags_16 texttagdelete">
                                                <span class="duration textedit SFPTWO_TAGEDIT edit explicit_edit tag_16 tagdelete" contenteditable="false">42</span>
                                                <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                               </div>
                                            <div class="SFPTWO_TEXTEDIT tags_17 texttagdelete">
                                            <div class="duration textedit SFPTWO_TAGEDIT edit explicit_edit tag_17 tagdelete" contenteditable="false">
                                                Minutes
                                            </div>
                                            <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                         </div>
                                    </li>
                                    <li>
                                        <div class="counter-box">
                                            <div class="number">
                                             <div class="SFPTWO_TEXTEDIT tags_18 texttagdelete">
                                                <span class="seconds textedit SFPTWO_TAGEDIT edit explicit_edit tag_18 tagdelete" contenteditable="false">12</span>
                                                <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            </div>
                                            <div class="SFPTWO_TEXTEDIT tags_19 texttagdelete">
                                            <div class="duration textedit SFPTWO_TAGEDIT edit explicit_edit tag_19 tagdelete" contenteditable="false">
                                                Seconds
                                            </div>
                                            <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                              <div style="display: none;" class="SFPTWO_TEXTEDIT tags_20 texttagdelete randtxt_783">  <a href="#" data-lead-id="btn-hero" class="btn btn-primary btn-hero textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_20 tagdelete" contenteditable="false">REGISTER</a><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div id="hero-details-section"><!-- START OF SECTION -->
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-md-12">
                        <div class="details-container">
                            <ul class="list-inline">
                                <li data-lead-id="details-box1">
                                    <div class="details-box">
                                        <div class="pull-left details-img">
                                           <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_2">
                                            	<img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/cal_icon.png" data-lead-id="details-box1-img" class="img-responsive">
                                            <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        </div>
                                        <div class="details-info">
                                            <div class="SFPTWO_TEXTEDIT tags_21 texttagdelete"><h4 data-lead-id="details-box1-header" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_21 tagdelete" contenteditable="false">JUNE 19TH</h4><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                             <div class="SFPTWO_TEXTEDIT tags_22 texttagdelete"><p data-lead-id="details-box1-subheader" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_22 tagdelete" contenteditable="false">COMING THIS SUMMER</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="details-box2">
                                    <div class="details-box">
                                        <div class="pull-left details-img">
                                           <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_3">
                                            	<img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/marker_icon.png" data-lead-id="details-box2-img" class="img-responsive">
                                            <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        </div>
                                        <div class="details-info">
                                            <div class="SFPTWO_TEXTEDIT tags_23 texttagdelete"><h4 data-lead-id="details-box2-header" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_23 tagdelete" contenteditable="false">PHOENIX, AZ</h4><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_24 texttagdelete"><p data-lead-id="details-box2-subheader" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_24 tagdelete" contenteditable="false">1548 MEETING ROAD STE: 101</p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="details-box3">
                                    <div class="details-box">
                                        <div class="pull-left details-img">
                                          <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_4">
                                            <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker_icon.png" data-lead-id="details-box3-img" class="img-responsive">
                                            <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        </div>
                                        <div class="details-info">
                                            <div class="SFPTWO_TEXTEDIT tags_25 texttagdelete"><h4 data-lead-id="details-box3-header" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_25 tagdelete" contenteditable="false">20 SPEAKERS</h4><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_26 texttagdelete"><p data-lead-id="details-box3-subheader" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_26 tagdelete" contenteditable="false">THEY KNOW SOME STUFF</p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="details-box4">
                                    <div class="details-box">
                                        <div class="pull-left details-img">
                                         <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_5">
                                            <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/group_icon.png" data-lead-id="details-box4-img" class="img-responsive">
                                            <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        </div>
                                        <div class="details-info">
                                            <div class="SFPTWO_TEXTEDIT tags_27 texttagdelete"> <h4 data-lead-id="details-box4-header" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_27 tagdelete" contenteditable="false">300 SPOTS</h4><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                             <div class="SFPTWO_TEXTEDIT tags_28 texttagdelete"><p data-lead-id="details-box4-subheader" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_28 tagdelete" contenteditable="false">HURRY AND RESERVE!</p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div id="about-section" class="section"><!-- START OF SECTION -->
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-md-5">
                        <div class="SFPTWO_TEXTEDIT tags_29 texttagdelete">
                        <h1 id="anchor1" data-lead-id="about-header" class="section-main-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_29 tagdelete" contenteditable="false">About The Event</h1>
                        <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        <div class="SFPTWO_TEXTEDIT tags_30 texttagdelete">
                        <p data-lead-id="about-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_30 tagdelete justifyme" contenteditable="false">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie cursus nibh a finibus. Donec et venenatis nisi. Donec venenatis ligula sed tellus lacinia, a congue tellus aliquet. Phasellus ac dui dapibus, finibus velit ac, sollicitudin nulla. Vestibulum eget sem non ante vehicula imperdiet. Vestibulum in volutpat augue. Sed congue fringillit ac, sollicitudin nulla. Vestibulum eget sem non ante vehicula imperdiet. Vestibulum in volutpat augue. Sed congue fringilla commodo. Donec euismod</p>
                        <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                    </div>
                    <div class="SFP_BOOT-md-7">
                        <div data-lead-id="about-image-container" class="about-image-container">
                            <ul class="list-inline">
                                <li>
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_6">
                                    <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/about_img1.jpg" data-lead-id="about-image1" class="img-responsive center-block"><div id="dragfirst" class="SFPTWO_TEXTEDIT tags_217 texttagdelete" style="position: absolute; margin: 7px 3px; top: 62.9px; z-index: 999; left: 51.95px;"><div id="nowdrag" class="explicit_edit nowdrag SFPTWO_TAGEDIT tag_208 tagdelete bydelete editme" contenteditable="false"><font style="font-size: 34px;" face="Courier New">dfggjlkjkjext</font></div><div><a class="imgedivdrg"></a><a class="closethisdrag deleteme"></a></div></div>
                                    <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                </li>
                                <li> <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_7 imgEdit5"><div style="width: 237px; height: auto;" class="img-responsive center-block" id="wrapimgdiv"><img style="width: 100%;" src="http://test.scampaigns.com/library/797ee7838e6a3131d98213e14b6b3b89.jpg" data-lead-id="about-image2" class=""></div><div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div></li>
                                <li> <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_8"><img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/about_img3.jpg" data-lead-id="about-image3" class="img-responsive center-block"><div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div></li>
                                <li> <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_9"><img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/about_img4.jpg" data-lead-id="about-image4" class="img-responsive center-block"><div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div id="video-section" class="section"><!-- START OF SECTION -->
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-md-6">
                        <div id="video0-wrapper" class="video-wrapper">
                            <div class="video-container" data-wow-delay=".7s">
                                <div id="top-vid-area" class="vid-wrapper text-center">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_10">
                                    <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/vid_placeholder.jpg" class="dummy img-responsive center-block dummy">
                                    <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="SFP_BOOT-md-6">
                        
                       <div class="SFPTWO_TEXTEDIT tags_31 texttagdelete"> <h1 data-lead-id="video-header" class="section-main-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_31 tagdelete" contenteditable="false">Video of Event</h1><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                       <div class="SFPTWO_TEXTEDIT tags_32 texttagdelete"> <p data-lead-id="video-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_32 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie cursus nibh a finibus. Donec et venenatis nisi. Donec venenatis ligula sed tellus lacinia, a congue tellus aliquet. Phasellus ac dui dapibus, finibus velit ac, sollicitudin nulla. Vestibulum eget sem non ante vehicula imperdiet. Vestibulum in volutpat augue. Sed congue fringillit ac, sollicitudin nulla. Vestibulum eget sem non ante vehicula imperdiet. Vestibulum in volutpat augue. Sed congue fringilla commodo. Donec euismod</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        
                        
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div id="schedule-section" class="section"><!-- START OF SECTION -->
            <a class="anchor disabled" name="anchor2"></a>
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-md-12">
                    <div class="SFPTWO_TEXTEDIT tags_33 texttagdelete">
                        <h1 id="anchor2" data-lead-id="schedule-header" class="section-main-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_33 tagdelete" contenteditable="false">SCHEDULE OF PRESENTERS</h1>
                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        <div class="SFPTWO_TEXTEDIT tags_34 texttagdelete">
                        <h3 data-lead-id="schedule-sub-header" class="section-sub-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_34 tagdelete" contenteditable="false">Four days packed full of learning!</h3>
                        <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        <div data-lead-id="day1-container" class="schedule-container">
                            <ul class="list-inline">
                                <li data-lead-id="day1-display-container" class="day-display-container">
                                <div class="SFPTWO_TEXTEDIT tags_35 texttagdelete">
                                    <div data-lead-id="day1-display" class="day-display textedit SFPTWO_TAGEDIT edit explicit_edit tag_35 tagdelete" contenteditable="false">DAY 1</div>
                                    <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                </li>
                                <li data-lead-id="time-slot1-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_11">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot1-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_36 texttagdelete">
                                        <p data-lead-id="time-slot1-time textedit SFPTWO_TAGEDIT edit explicit_edit" class="time-slot-time">8:00am - 9:00am</p>
                                        </div>
                                        <div class="SFPTWO_TEXTEDIT tags_37 texttagdelete"><h4 data-lead-id="time-slot1-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_36 tagdelete" contenteditable="false">Speaker 1</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_38 texttagdelete"><p data-lead-id="time-slot1-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_37 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot2-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_12">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot2-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_39 texttagdelete">
                                        <p data-lead-id="time-slot2-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_38 tagdelete" contenteditable="false">8:00am - 9:00am</p>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_40 texttagdelete">
                                        <h4 data-lead-id="time-slot2-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_39 tagdelete" contenteditable="false">Speaker 2</h4>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_41 texttagdelete">
                                        <p data-lead-id="time-slot2-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_40 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot3-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_13">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot3-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_42 texttagdelete">
                                        <p data-lead-id="time-slot3-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_41 tagdelete" contenteditable="false">8:00am - 9:00am</p>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_43 texttagdelete">
                                        <h4 data-lead-id="time-slot3-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_42 tagdelete" contenteditable="false">Speaker 3</h4>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_44 texttagdelete">
                                        <p data-lead-id="time-slot3-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_43 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot4-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_14">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot4-img" class="img-responsive textedit SFPTWO_TAGEDIT edit explicit_edit tag_44 tagdelete" contenteditable="false">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_45 texttagdelete">
                                        <p data-lead-id="time-slot4-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_45 tagdelete" contenteditable="false">8:00am - 9:00am</p>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_46 texttagdelete">
                                        <h4 data-lead-id="time-slot4-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_46 tagdelete" contenteditable="false">Speaker 4</h4>
                                        <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_47 texttagdelete">
                                        <p data-lead-id="time-slot4-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_47 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div data-lead-id="day2-container" class="schedule-container">
                            <ul class="list-inline">
                                <li data-lead-id="day2-display-container" class="day-display-container">
                                <div class="SFPTWO_TEXTEDIT tags_48 texttagdelete">
                                    <div data-lead-id="day2-display" class="day-display textedit SFPTWO_TAGEDIT edit explicit_edit tag_48 tagdelete" contenteditable="false">DAY 2</div>
                                    <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                </li>
                                <li data-lead-id="time-slot5-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_15">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot5-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_49 texttagdelete">
                                        <p data-lead-id="time-slot5-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_49 tagdelete" contenteditable="false">8:00am - 9:00am</p>
                                       <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                       <div class="SFPTWO_TEXTEDIT tags_50 texttagdelete">
                                        <h4 data-lead-id="time-slot5-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_50 tagdelete" contenteditable="false">Speaker 5</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_51 texttagdelete">
                                        <p data-lead-id="time-slot5-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_51 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot6-box">
                                    <div class="schedule-box">
                                         <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_16">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot6-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                         <div class="SFPTWO_TEXTEDIT tags_52 texttagdelete">
                                        <p data-lead-id="time-slot6-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_52 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                          <div class="SFPTWO_TEXTEDIT tags_53 texttagdelete"><h4 data-lead-id="time-slot6-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_53 tagdelete" contenteditable="false">Speaker 6</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                          <div class="SFPTWO_TEXTEDIT tags_54 texttagdelete"><p data-lead-id="time-slot6-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_54 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot7-box">
                                    <div class="schedule-box">
                                         <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_17">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot7-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                         <div class="SFPTWO_TEXTEDIT tags_55 texttagdelete">
                                        <p data-lead-id="time-slot7-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_55 tagdelete" contenteditable="false">8:00am - 9:00am</p>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                         <div class="SFPTWO_TEXTEDIT tags_56 texttagdelete">
                                        <h4 data-lead-id="time-slot7-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_56 tagdelete" contenteditable="false">Speaker 7</h4>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                         <div class="SFPTWO_TEXTEDIT tags_57 texttagdelete">
                                        <p data-lead-id="time-slot7-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_57 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot8-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_18">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot8-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_58 texttagdelete">
                                        <p data-lead-id="time-slot8-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_58 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_59 texttagdelete">
                                        <h4 data-lead-id="time-slot8-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_59 tagdelete" contenteditable="false">Speaker 8</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_60 texttagdelete">
                                        <p data-lead-id="time-slot8-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_60 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div data-lead-id="day3-container" class="schedule-container">
                            <ul class="list-inline">
                                <li data-lead-id="day3-display-container" class="day-display-container">
                                    <div data-lead-id="day3-display" class="day-display">DAY 3</div>
                                </li>
                                <li data-lead-id="time-slot9-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_19">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot9-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_61 texttagdelete">
                                        <p data-lead-id="time-slot9-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_61 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_62 texttagdelete">
                                        <h4 data-lead-id="time-slot9-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_62 tagdelete" contenteditable="false">Speaker 9</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_63 texttagdelete">
                                        <p data-lead-id="time-slot9-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_63 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot10-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_20">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot10-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_64 texttagdelete">
                                        <p data-lead-id="time-slot10-time textedit SFPTWO_TAGEDIT edit explicit_edit" class="time-slot-time">8:00am - 9:00am</p></div>
                                        <div class="SFPTWO_TEXTEDIT tags_65 texttagdelete">
                                        <h4 data-lead-id="time-slot10-header textedit SFPTWO_TAGEDIT edit explicit_edit" class="time-slot-header">Speaker 10</h4></div>
                                        <div class="SFPTWO_TEXTEDIT tags_66 texttagdelete">
                                        <p data-lead-id="time-slot10-text textedit SFPTWO_TAGEDIT edit explicit_edit" class="time-slot-text">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot11-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_21">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot11-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_67 texttagdelete">
                                        <p data-lead-id="time-slot11-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_64 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_68 texttagdelete">
                                        <h4 data-lead-id="time-slot11-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_65 tagdelete" contenteditable="false">Speaker 11</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_69 texttagdelete">
                                        <p data-lead-id="time-slot11-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_66 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot12-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_22">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot12-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_70 texttagdelete">
                                        <p data-lead-id="time-slot12-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_67 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_71 texttagdelete">
                                        <h4 data-lead-id="time-slot12-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_68 tagdelete" contenteditable="false">Speaker 12</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_72 texttagdelete">
                                        <p data-lead-id="time-slot12-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_69 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div data-lead-id="day4-container" class="schedule-container">
                            <ul class="list-inline">
                                <li data-lead-id="day4-display-container" class="day-display-container">
                                    <div data-lead-id="day4-display" class="day-display">DAY 4</div>
                                </li>
                                <li data-lead-id="time-slot13-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_23">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot13-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                          <div class="SFPTWO_TEXTEDIT tags_73 texttagdelete">
                                        <p data-lead-id="time-slot13-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_70 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                          <div class="SFPTWO_TEXTEDIT tags_74 texttagdelete">
                                        <h4 data-lead-id="time-slot13-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_71 tagdelete" contenteditable="false">Speaker 13</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                          <div class="SFPTWO_TEXTEDIT tags_75 texttagdelete">
                                        <p data-lead-id="time-slot13-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_72 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot14-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_24">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot14-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                          <div class="SFPTWO_TEXTEDIT tags_76 texttagdelete">
                                        <p data-lead-id="time-slot14-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_73 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                          <div class="SFPTWO_TEXTEDIT tags_77 texttagdelete">
                                        <h4 data-lead-id="time-slot14-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_74 tagdelete" contenteditable="false">Speaker 14</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                          <div class="SFPTWO_TEXTEDIT tags_78 texttagdelete">
                                        <p data-lead-id="time-slot14-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_75 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot15-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_25">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot15-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                          <div class="SFPTWO_TEXTEDIT tags_79 texttagdelete">
                                        <p data-lead-id="time-slot15-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_76 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                          <div class="SFPTWO_TEXTEDIT tags_80 texttagdelete">
                                        <h4 data-lead-id="time-slot15-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_77 tagdelete" contenteditable="false">Speaker 15</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                          <div class="SFPTWO_TEXTEDIT tags_81 texttagdelete">
                                        <p data-lead-id="time-slot15-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_78 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot16-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_26">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot16-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                         <div class="SFPTWO_TEXTEDIT tags_82 texttagdelete">
                                        <p data-lead-id="time-slot16-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_79 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                         <div class="SFPTWO_TEXTEDIT tags_83 texttagdelete">
                                        <h4 data-lead-id="time-slot16-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_80 tagdelete" contenteditable="false">Speaker 16</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                         <div class="SFPTWO_TEXTEDIT tags_84 texttagdelete">
                                        <p data-lead-id="time-slot16-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_81 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div data-lead-id="day5-container" class="schedule-container">
                            <ul class="list-inline">
                                <li data-lead-id="day5-display-container" class="day-display-container">
                                    <div data-lead-id="day5-display" class="day-display">DAY 5</div>
                                </li>
                                <li data-lead-id="time-slot17-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_27">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot17-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_85 texttagdelete">
                                        <p data-lead-id="time-slot17-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_82 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_86 texttagdelete">
                                        <h4 data-lead-id="time-slot17-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_83 tagdelete" contenteditable="false">Speaker 17</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_87 texttagdelete">
                                        <p data-lead-id="time-slot17-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_84 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot18-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_28">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot18-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_88 texttagdelete">
                                        <p data-lead-id="time-slot18-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_85 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_89 texttagdelete">
                                        <h4 data-lead-id="time-slot18-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_86 tagdelete" contenteditable="false">Speaker 18</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_90 texttagdelete">
                                        <p data-lead-id="time-slot18-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_87 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot19-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_29">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot19-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_91 texttagdelete">
                                        <p data-lead-id="time-slot19-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_88 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_92 texttagdelete">
                                        <h4 data-lead-id="time-slot19-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_89 tagdelete" contenteditable="false">Speaker 19</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_93 texttagdelete">
                                        <p data-lead-id="time-slot19-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_90 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot20-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_30">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot20-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_94 texttagdelete">
                                        <p data-lead-id="time-slot20-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_91 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_95 texttagdelete">
                                        <h4 data-lead-id="time-slot20-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_92 tagdelete" contenteditable="false">Speaker 20</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_96 texttagdelete">
                                        <p data-lead-id="time-slot20-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_93 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div data-lead-id="day6-container" class="schedule-container">
                            <ul class="list-inline">
                                <li data-lead-id="day6-display-container" class="day-display-container">
                                <div class="SFPTWO_TEXTEDIT tags_97 texttagdelete">
                                    <div data-lead-id="day6-display" class="day-display textedit SFPTWO_TAGEDIT edit explicit_edit tag_94 tagdelete" contenteditable="false">DAY 6</div>
                                    <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                </li>
                                <li data-lead-id="time-slot21-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_31">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot21-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        
                                        <p data-lead-id="time-slot21-time" class="time-slot-time">8:00am - 9:00am</p>
                                        <h4 data-lead-id="time-slot21-header" class="time-slot-header">Speaker 21</h4>
                                        <p data-lead-id="time-slot21-text" class="time-slot-text">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot22-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_32">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot22-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_98 texttagdelete">
                                        <p data-lead-id="time-slot22-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_95 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_99 texttagdelete">
                                        <h4 data-lead-id="time-slot22-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_96 tagdelete" contenteditable="false">Speaker 22</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_100 texttagdelete">
                                        <p data-lead-id="time-slot22-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_97 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot23-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_33">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot23-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_101 texttagdelete">
                                        <p data-lead-id="time-slot23-time" class="time-slot-time">8:00am - 9:00am</p></div>
                                        <div class="SFPTWO_TEXTEDIT tags_102 texttagdelete">
                                        <h4 data-lead-id="time-slot23-header" class="time-slot-header">Speaker 23</h4></div>
                                        <div class="SFPTWO_TEXTEDIT tags_103 texttagdelete">
                                        <p data-lead-id="time-slot23-text" class="time-slot-text">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot24-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_34">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot24-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_104 texttagdelete">
                                        <p data-lead-id="time-slot24-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_98 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_105 texttagdelete">
                                        <h4 data-lead-id="time-slot24-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_99 tagdelete" contenteditable="false">Speaker 24</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_106 texttagdelete">
                                        <p data-lead-id="time-slot24-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_100 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div data-lead-id="day7-container" class="schedule-container">
                            <ul class="list-inline">
                                <li data-lead-id="day7-display-container" class="day-display-container">
                                <div class="SFPTWO_TEXTEDIT tags_107 texttagdelete">
                                    <div data-lead-id="day7-display" class="day-display textedit SFPTWO_TAGEDIT edit explicit_edit tag_101 tagdelete" contenteditable="false">DAY 7</div>
                                    <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                </li>
                                <li data-lead-id="time-slot25-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_35">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot25-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_108 texttagdelete">
                                        <p data-lead-id="time-slot25-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_102 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_109 texttagdelete">
                                        <h4 data-lead-id="time-slot25-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_103 tagdelete" contenteditable="false">Speaker 25</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_110 texttagdelete">
                                        <p data-lead-id="time-slot25-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_104 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot26-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_36">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot26-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_111 texttagdelete">
                                        <p data-lead-id="time-slot26-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_105 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_112 texttagdelete">
                                        <h4 data-lead-id="time-slot26-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_106 tagdelete" contenteditable="false">Speaker 26</h4><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_113 texttagdelete">
                                        <p data-lead-id="time-slot26-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_107 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot27-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_37">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot27-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_114 texttagdelete">
                                        <p data-lead-id="time-slot27-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_108 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_115 texttagdelete">
                                        <h4 data-lead-id="time-slot27-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_109 tagdelete" contenteditable="false">Speaker 27</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_116 texttagdelete">
                                        <p data-lead-id="time-slot27-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_110 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                                <li data-lead-id="time-slot28-box">
                                    <div class="schedule-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_38">
                                        <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/clock_icon.png" data-lead-id="time-slot28-img" class="img-responsive">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_117 texttagdelete">
                                        <p data-lead-id="time-slot28-time" class="time-slot-time textedit SFPTWO_TAGEDIT edit explicit_edit tag_111 tagdelete" contenteditable="false">8:00am - 9:00am</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_118 texttagdelete">
                                        <h4 data-lead-id="time-slot28-header" class="time-slot-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_112 tagdelete" contenteditable="false">Speaker 28</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_119 texttagdelete">
                                        <p data-lead-id="time-slot28-text" class="time-slot-text textedit SFPTWO_TAGEDIT edit explicit_edit tag_113 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, udictum, purs d ddsdsd</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center">
                        <div class="SFPTWO_TEXTEDIT tags_120 texttagdelete">
                            <a href="#" data-lead-id="btn-schedule" class="btn btn-default btn-schedule textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_114 tagdelete" contenteditable="false">View Full Schedule</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div id="cta50-section" class="section"><!-- START OF SECTION -->
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-md-7">
                        <div class="cta50-text">
                         <div class="SFPTWO_TEXTEDIT tags_121 texttagdelete">
                            <h1 data-lead-id="cta50-header" class="section-main-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_115 tagdelete" contenteditable="false">DON'T MISS THIS EVENT!</h1><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                             <div class="SFPTWO_TEXTEDIT tags_122 texttagdelete">
                            <h4 data-lead-id="cta50-sub-header" class="section-sub-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_116 tagdelete" contenteditable="false">RESERVE YOUR SPOT BEFORE WE ARE SOLD OUT!</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        </div>
                    </div>
                    <div class="SFP_BOOT-md-5">
                        <div class="btn-cta50-container">
                         <div class="SFPTWO_TEXTEDIT tags_123 texttagdelete">
                            <a href="#" data-lead-id="cta50-btn" class="btn btn-primary btn-cta50 textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_117 tagdelete" contenteditable="false">REGISTER</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div id="presenters-section" class="section"><!-- START OF SECTION -->
            <a class="anchor disabled" name="anchor3"></a>
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-md-12 text-center">
                     <div class="SFPTWO_TEXTEDIT tags_124 texttagdelete">
                        <h1 id="anchor3" data-lead-id="presenters-header" class="section-main-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_118 tagdelete" contenteditable="false">PRESENTERS</h1><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                         <div class="SFPTWO_TEXTEDIT tags_125 texttagdelete">
                        <h3 data-lead-id="presenters-sub-header" class="section-sub-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_119 tagdelete" contenteditable="false">These people are some trained professionals!</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        <div class="speaker-profile-container">
                            <ul class="list-inline text-center">
                                <li data-lead-id="presenter1-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_39">
                                        <img data-lead-id="presenter1-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker1.jpg">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                        <div class="SFPTWO_TEXTEDIT tags_126 texttagdelete">
                                            <h3 data-lead-id="presenter1-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_120 tagdelete" contenteditable="false">John Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_127 texttagdelete">
                                            <p data-lead-id="presenter1-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_121 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter2-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_40">
                                        <img data-lead-id="presenter2-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker2.jpg">
                                        <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                        <div class="SFPTWO_TEXTEDIT tags_128 texttagdelete">
                                            <h3 data-lead-id="presenter2-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_122 tagdelete" contenteditable="false">Jane Doe</h3>
                                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_129 texttagdelete">
                                            <p data-lead-id="presenter2-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_123 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p>
                                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter3-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_41">
                                        <img data-lead-id="presenter3-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker3.jpg">
                                        <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                        <div class="SFPTWO_TEXTEDIT tags_130 texttagdelete">
                                            <h3 data-lead-id="presenter3-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_124 tagdelete" contenteditable="false">Billy Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_131 texttagdelete">
                                            <p data-lead-id="presenter3-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_125 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter4-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_42">
                                        <img data-lead-id="presenter4-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker4.jpg">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                        <div class="SFPTWO_TEXTEDIT tags_132 texttagdelete">
                                            <h3 data-lead-id="presenter4-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_126 tagdelete" contenteditable="false">Chief Doeardee</h3>
                                           <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_133 texttagdelete">
                                            
                                            <p data-lead-id="presenter4-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_127 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p>
                                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter5-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_43">
                                        <img data-lead-id="presenter5-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker5.jpg">
                                        <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                        <div class="SFPTWO_TEXTEDIT tags_134 texttagdelete">
                                            <h3 data-lead-id="presenter5-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_128 tagdelete" contenteditable="false">Bob Doe</h3>
                                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_135 texttagdelete">
                                            <p data-lead-id="presenter5-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_129 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p>
                                            <div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter6-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_44">
                                        <img data-lead-id="presenter6-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker6.jpg">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                         <div class="SFPTWO_TEXTEDIT tags_136 texttagdelete">
                                            <h3 data-lead-id="presenter6-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_130 tagdelete" contenteditable="false">Jack Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                             <div class="SFPTWO_TEXTEDIT tags_137 texttagdelete">
                                            <p data-lead-id="presenter6-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_131 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter7-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_45">
                                        <img data-lead-id="presenter7-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker7.jpg">
                                       <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                        <div class="SFPTWO_TEXTEDIT tags_138 texttagdelete">
                                            <h3 data-lead-id="presenter7-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_132 tagdelete" contenteditable="false">Brad Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_139 texttagdelete">
                                            <p data-lead-id="presenter7-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_133 tagdelete" contenteditable="false">sIcula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter8-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_46">
                                        <img data-lead-id="presenter8-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker8.jpg">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                        <div class="SFPTWO_TEXTEDIT tags_140 texttagdelete">
                                            <h3 data-lead-id="presenter8-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_134 tagdelete" contenteditable="false">Sally Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_141 texttagdelete">
                                            <p data-lead-id="presenter8-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_135 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter9-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_47">
                                        <img data-lead-id="presenter9-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker1.jpg">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                         <div class="SFPTWO_TEXTEDIT tags_142 texttagdelete">
                                            <h3 data-lead-id="presenter9-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_136 tagdelete" contenteditable="false">Bob Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                             <div class="SFPTWO_TEXTEDIT tags_143 texttagdelete">
                                            <p data-lead-id="presenter9-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_137 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter10-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_48">
                                        <img data-lead-id="presenter10-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker2.jpg">
                                        <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                         <div class="SFPTWO_TEXTEDIT tags_144 texttagdelete">
                                            <h3 data-lead-id="presenter10-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_138 tagdelete" contenteditable="false">Jack Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                             <div class="SFPTWO_TEXTEDIT tags_145 texttagdelete">
                                            <p data-lead-id="presenter10-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_139 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter11-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_49">
                                        <img data-lead-id="presenter11-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker3.jpg">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                         <div class="SFPTWO_TEXTEDIT tags_146 texttagdelete">
                                            <h3 data-lead-id="presenter11-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_140 tagdelete" contenteditable="false">Brad Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                             <div class="SFPTWO_TEXTEDIT tags_147 texttagdelete">
                                            <p data-lead-id="presenter11-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_141 tagdelete" contenteditable="false">sIcula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter12-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_50">
                                        <img data-lead-id="presenter12-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker4.jpg">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                         <div class="SFPTWO_TEXTEDIT tags_148 texttagdelete">
                                            <h3 data-lead-id="presenter12-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_142 tagdelete" contenteditable="false">Sally Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                             <div class="SFPTWO_TEXTEDIT tags_149 texttagdelete">
                                            <p data-lead-id="presenter12-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_143 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter13-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_51">
                                        <img data-lead-id="presenter13-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker5.jpg">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                         <div class="SFPTWO_TEXTEDIT tags_150 texttagdelete">
                                            <h3 data-lead-id="presenter13-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_144 tagdelete" contenteditable="false">Bob Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                             <div class="SFPTWO_TEXTEDIT tags_151 texttagdelete">
                                            <p data-lead-id="presenter13-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_145 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter14-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_52">
                                        <img data-lead-id="presenter14-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker6.jpg">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                        <div class="SFPTWO_TEXTEDIT tags_152 texttagdelete">
                                            <h3 data-lead-id="presenter14-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_146 tagdelete" contenteditable="false">Jack Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_153 texttagdelete">
                                            <p data-lead-id="presenter14-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_147 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter15-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_53">
                                        <img data-lead-id="presenter15-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker7.jpg">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                        <div class="SFPTWO_TEXTEDIT tags_154 texttagdelete">
                                            <h3 data-lead-id="presenter15-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_148 tagdelete" contenteditable="false">Brad Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_155 texttagdelete">
                                            <p data-lead-id="presenter15-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_149 tagdelete" contenteditable="false">sIcula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="presenter16-container">
                                    <div class="speaker-profile-box">
                                     <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_54">
                                        <img data-lead-id="presenter16-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/speaker8.jpg">
                                        <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div class="speaker-profile-info">
                                        <div class="SFPTWO_TEXTEDIT tags_156 texttagdelete">
                                            <h3 data-lead-id="presenter16-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_150 tagdelete" contenteditable="false">Sally Doe</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_157 texttagdelete">
                                            <p data-lead-id="presenter16-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_151 tagdelete" contenteditable="false">Icula imperdiet. Vestibulum</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="SFPTWO_TEXTEDIT tags_158 texttagdelete">
                        <a href="#" data-lead-id="btn-presenters" class="btn btn-default textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_152 tagdelete" contenteditable="false">View All Presenters</a>
                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div id="partners-section" class="section"><!-- START OF SECTION -->
            <a class="anchor disabled" name="anchor4"></a>
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-md-12 text-center">
                    <div class="SFPTWO_TEXTEDIT tags_159 texttagdelete">
                        <h1 id="anchor4" data-lead-id="partners-header" class="section-main-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_153 tagdelete" contenteditable="false">PARTNERS</h1><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        <div class="SFPTWO_TEXTEDIT tags_160 texttagdelete">
                        <h3 data-lead-id="partners-sub-header" class="section-sub-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_154 tagdelete" contenteditable="false">Check out these sponsors for the event.</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        <div data-lead-id="partners-container" class="partners-container">
                            <ul class="list-inline text-center">
                                <li data-lead-id="partners-logo1-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_55">
                                    <img data-lead-id="partners-logo1" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo1.png" class="img-responsive center-block">
                                   <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div> 
                                </li>
                                <li data-lead-id="partners-logo2-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_56">
                                    <img data-lead-id="partners-logo2" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo2.png" class="img-responsive center-block">
                                    <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                </li>
                                <li data-lead-id="partners-logo3-container">
                                    <img data-lead-id="partners-logo3" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo3.png" class="img-responsive center-block">
                                    
                                </li>
                                <li data-lead-id="partners-logo4-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_57">
                                    <img data-lead-id="partners-logo4" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo4.png" class="img-responsive center-block">
                                    <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                </li>
                                <li data-lead-id="partners-logo5-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_58">
                                    <img data-lead-id="partners-logo5" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo5.png" class="img-responsive center-block">
                                   <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div> 
                                </li>
                                <li data-lead-id="partners-logo6-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_59">
                                    <img data-lead-id="partners-logo6" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo6.png" class="img-responsive center-block">
                                   <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div> 
                                </li>
                                <li data-lead-id="partners-logo7-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_60">
                                    <img data-lead-id="partners-logo7" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo7.png" class="img-responsive center-block">
                                    <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                </li>
                                <li data-lead-id="partners-logo8-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_61">
                                    <img data-lead-id="partners-logo8" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo8.png" class="img-responsive center-block">
                                   <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div> 
                                </li>
                                <li data-lead-id="partners-logo9-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_62">
                                    <img data-lead-id="partners-logo9" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo9.png" class="img-responsive center-block">
                                   <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div> 
                                </li>
                                <li data-lead-id="partners-logo10-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_63">
                                    <img data-lead-id="partners-logo10" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo10.png" class="img-responsive center-block">
                                  <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>  
                                </li>
                                <li data-lead-id="partners-logo11-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_64">
                                    <img data-lead-id="partners-logo11" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo11.png" class="img-responsive center-block">
                                  <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>  
                                </li>
                                <li data-lead-id="partners-logo12-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_65">
                                    <img data-lead-id="partners-logo12" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo12.png" class="img-responsive center-block">
                                  <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>  
                                </li>
                                <li data-lead-id="partners-logo13-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_66">
                                    <img data-lead-id="partners-logo13" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo13.png" class="img-responsive center-block">
                                  <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>  
                                </li>
                                <li data-lead-id="partners-logo14-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_67">
                                    <img data-lead-id="partners-logo14" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo14.png" class="img-responsive center-block">
                                 <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>   
                                </li>
                                <li data-lead-id="partners-logo15-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_68">
                                    <img data-lead-id="partners-logo15" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo15.png" class="img-responsive center-block">
                                  <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>  
                                </li>
                                <li data-lead-id="partners-logo16-container">
                                 <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_69">
                                    <img data-lead-id="partners-logo16" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/logo16.png" class="img-responsive center-block">
                                  <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>  
                                </li>
                            </ul>
                        </div>
                        <div>
                            <a href="#" data-lead-id="btn-partners" class="btn btn-default btn-partners disabled">View All Partners</a>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div id="buy-section" class="section"><!-- START OF SECTION -->
            <a class="anchor disabled" name="anchor5"></a>
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-md-12 text-center">
                    <div class="SFPTWO_TEXTEDIT tags_161 texttagdelete">
                   <h1 id="anchor5" data-lead-id="buy-header" class="section-main-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_155 tagdelete" contenteditable="false">BUY TICKETS</h1><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                     <div class="SFPTWO_TEXTEDIT tags_162 texttagdelete">   <h3 data-lead-id="buy-sub-header" class="section-sub-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_156 tagdelete" contenteditable="false">You know you wanna go... just buy already!</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        <div data-lead-id="buy-box-container" class="buy-box-container">
                            <ul class="list-inline text-center">
                                <li data-lead-id="buy-box1">
                                    <div class="buy-box"><!--buy box-->
                                    <div class="buy-header-area">
                                        <div class="SFPTWO_TEXTEDIT tags_163 texttagdelete"><h1 data-lead-id="buy-box1-header textedit SFPTWO_TAGEDIT edit explicit_edit">Bronze Package</h1></div>
                                        <div class="SFPTWO_TEXTEDIT tags_164 texttagdelete"><h2 data-lead-id="buy-box1-price textedit SFPTWO_TAGEDIT edit explicit_edit"><span>$</span>20</h2></div>
                                       <div class="SFPTWO_TEXTEDIT tags_165 texttagdelete"> <p data-lead-id="buy-box1-text textedit SFPTWO_TAGEDIT edit explicit_edit">We will email your ticket</p></div>
                                    </div>
                                    <div class="buy-feature-list">
                                        <ul data-lead-id="buy-box1-features" class="list-unstyled">
                                            <div class="SFPTWO_TEXTEDIT tags_166 texttagdelete">
                                            <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_157 tagdelete" contenteditable="false">Cool things to do</li>
                                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_167 texttagdelete">
                                            <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_158 tagdelete" contenteditable="false">Fancy people to meet</li>
                                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </ul>
                                    </div>
                                    <div class="buy-btn-container">
                                    <div class="SFPTWO_TEXTEDIT tags_168 texttagdelete">
                                        <a href="#" data-lead-id="btn-buy-box1" class="btn btn-primary btn-buy btn-block textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_159 tagdelete" contenteditable="false">REGISTER</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                    </div><!--END Buy Box-->
                                    
                                    
                                </li>
                                <li data-lead-id="buy-box2">
                                    <div class="buy-box"><!--buy box-->
                                    <div class="buy-header-area">
                                       <div class="SFPTWO_TEXTEDIT tags_169 texttagdelete"> <h1 data-lead-id="buy-box2-header" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_160 tagdelete" contenteditable="false">Silver Package</h1><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>.
                                        <div class="SFPTWO_TEXTEDIT tags_170 texttagdelete"><h2 data-lead-id="buy-box2-price" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_161 tagdelete" contenteditable="false"><span>$</span>40</h2><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_171 texttagdelete"><p data-lead-id="buy-box2-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_162 tagdelete" contenteditable="false">We will email your ticket</p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                    <div class="buy-feature-list">
                                        <ul data-lead-id="buy-box2-features" class="list-unstyled">
                                          <div class="SFPTWO_TEXTEDIT tags_172 texttagdelete">  <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_163 tagdelete" contenteditable="false">Get free food and stuff</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_173 texttagdelete"><li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_164 tagdelete" contenteditable="false">Cool things to do</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                           <div class="SFPTWO_TEXTEDIT tags_174 texttagdelete"> <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_165 tagdelete" contenteditable="false">Fancy people to meet</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            
                                            
                                        </ul>
                                    </div>
                                    <div class="buy-btn-container">
                                    <div class="SFPTWO_TEXTEDIT tags_175 texttagdelete">
                                        <a href="#" data-lead-id="btn-buy-box2" class="btn btn-primary btn-buy btn-block textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_166 tagdelete" contenteditable="false">REGISTER</a>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                    </div><!--END Buy Box-->
                                    
                                    
                                </li>
                                <li data-lead-id="buy-box3">
                                    <div class="buy-box"><!--buy box-->
                                    <div class="buy-header-area">
                                    
                                      <div class="SFPTWO_TEXTEDIT tags_176 texttagdelete">  <h1 data-lead-id="buy-box3-header" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_167 tagdelete" contenteditable="false">Gold Package</h1><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                       <div class="SFPTWO_TEXTEDIT tags_177 texttagdelete"> <h2 data-lead-id="buy-box3-price" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_168 tagdelete" contenteditable="false"><span>$</span>80</h2><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                       <div class="SFPTWO_TEXTEDIT tags_178 texttagdelete"> <p data-lead-id="buy-box3-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_169 tagdelete" contenteditable="false">We will email your ticket</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                    <div class="buy-feature-list">
                                        <ul data-lead-id="buy-box3-features" class="list-unstyled">
                                           <div class="SFPTWO_TEXTEDIT tags_179 texttagdelete"> <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_170 tagdelete" contenteditable="false">Get free food and stuff</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_180 texttagdelete"><li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_171 tagdelete" contenteditable="false">Cool things to do</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                           <div class="SFPTWO_TEXTEDIT tags_181 texttagdelete"> <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_172 tagdelete" contenteditable="false">Fancy people to meet</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_182 texttagdelete"><li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_173 tagdelete" contenteditable="false">Free WiFi</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            
                                        </ul>
                                    </div>
                                    <div class="buy-btn-container">
                                       <div class="SFPTWO_TEXTEDIT tags_183 texttagdelete"> <a href="#" data-lead-id="btn-buy-box3" class="btn btn-primary btn-buy btn-block extedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_174 tagdelete" contenteditable="false">REGISTER</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                    </div><!--END Buy Box-->
                                    
                                    
                                </li>
                                <li data-lead-id="buy-box4">
                                    <div class="buy-box"><!--buy box-->
                                    <div class="buy-header-area">
                                       <div class="SFPTWO_TEXTEDIT tags_184 texttagdelete"> <h1 data-lead-id="buy-box4-header" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_175 tagdelete" contenteditable="false">Platinum Package</h1><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_185 texttagdelete"><h2 data-lead-id="buy-box4-price" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_176 tagdelete" contenteditable="false"><span>$</span>100</h2><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        <div class="SFPTWO_TEXTEDIT tags_186 texttagdelete"><p data-lead-id="buy-box4-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_177 tagdelete" contenteditable="false">We will email your ticket</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                    <div class="buy-feature-list">
                                        <ul data-lead-id="buy-box4-features" class="list-unstyled">
                                        <div class="SFPTWO_TEXTEDIT tags_187 texttagdelete">
                                            <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_178 tagdelete" contenteditable="false">Get free food and stuff</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_188 texttagdelete">
                                            <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_179 tagdelete" contenteditable="false">Cool things to do</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_189 texttagdelete">
                                            <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_180 tagdelete" contenteditable="false">Fancy people to meet</li><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_190 texttagdelete">
                                            <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_181 tagdelete" contenteditable="false">Free WiFi</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                            <div class="SFPTWO_TEXTEDIT tags_191 texttagdelete">
                                            <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_182 tagdelete" contenteditable="false">All access pass</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </ul>
                                    </div>
                                    <div class="buy-btn-container">
                                    <div class="SFPTWO_TEXTEDIT tags_192 texttagdelete">
                                        <a href="#" data-lead-id="btn-buy-box4" class="btn btn-primary btn-buy btn-block textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_183 tagdelete" contenteditable="false">REGISTER</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                    </div>
                                    </div><!--END Buy Box-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div id="testimonial-section" class="section"><!-- START OF SECTION -->
            <a class="anchor disabled" name="anchor8"></a>
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-sm-12">
                    <div class="SFPTWO_TEXTEDIT tags_193 texttagdelete">
                        <h1 id="anchor6" data-lead-id="testimonial-header" class="section-main-header text-center textedit SFPTWO_TAGEDIT edit explicit_edit tag_184 tagdelete" contenteditable="false">Testimonials</h1><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        <div class="SFPTWO_TEXTEDIT tags_194 texttagdelete"><h3 data-lead-id="testimonial-sub-header" class="section-sub-header text-center textedit SFPTWO_TAGEDIT edit explicit_edit tag_185 tagdelete" contenteditable="false">Heres what these cool people have said about us.</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                    </div>
                </div>
                <div class="testimonial-container">
                    <div class="SFP_ROW">
                        <div class="SFP_BOOT-md-12">
                            <ul class="list-inline">
                                <li data-lead-id="testimonial1-container">
                                    <div class="testimonial-box">
                                    <div class="SFPTWO_TEXTEDIT tags_195 texttagdelete">
                                        <div data-lead-id="testimonial1-quote" class="testimonial-bubble textedit SFPTWO_TAGEDIT edit explicit_edit tag_186 tagdelete" contenteditable="false">
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie cursus nibh a finibus. Donec et venenatis nisi. Donec venenatis ligula sed tellus lacinia, a congue tellus aliquet. Phasellus ac dui dapibus, finibus velit ac, sollicitudin."
                                        </div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                         <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_70">
                                        <img data-lead-id="testimonial1-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/testimonial1.jpg" class="img-responsive center-block">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                   
                                        <div data-lead-id="testimonial1-info" class="testimonial-info ">
                                        <div class="SFPTWO_TEXTEDIT tags_196 texttagdelete">
                                            <strong class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_187 tagdelete" contenteditable="false">Tammy Doe</strong><br>markeazy.com<div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li data-lead-id="testimonial2-container">
                                    <div class="testimonial-box">
                                    <div class="SFPTWO_TEXTEDIT tags_197 texttagdelete">
                                        <div data-lead-id="testimonial2-quote" class="testimonial-bubble textedit SFPTWO_TAGEDIT edit explicit_edit tag_188 tagdelete" contenteditable="false">
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie cursus nibh a finibus. Donec et venenatis nisi. Donec venenatis ligula sed tellus lacinia, a congue tellus aliquet. Phasellus ac dui dapibus, finibus velit ac, sollicitudin."</div>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                         <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_71">
                                        <img data-lead-id="testimonial2-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/testimonial2.jpg" class="img-responsive center-block">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div data-lead-id="testimonial2-info" class="testimonial-info">
                                         <div class="SFPTWO_TEXTEDIT tags_198 texttagdelete">
                                            <strong class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_189 tagdelete" contenteditable="false">Betty Doe</strong><br>markeazy.com<div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-lead-id="testimonial3-container">
                                    <div class="testimonial-box">
                                    <div class="SFPTWO_TEXTEDIT tags_199 texttagdelete">
                                        <div data-lead-id="testimonial3-quote" class="testimonial-bubble textedit SFPTWO_TAGEDIT edit explicit_edit tag_190 tagdelete" contenteditable="false">
                                         
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie cursus nibh a finibus. Donec et venenatis nisi. Donec venenatis ligula sed tellus lacinia, a congue tellus aliquet. Phasellus ac dui dapibus, finibus velit ac, sollicitudin."</div>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                         <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_72">
                                        <img data-lead-id="testimonial3-image" src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/testimonial3.jpg" class="img-responsive center-block">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                        <div data-lead-id="testimonial3-info" class="testimonial-info">
                                        <div class="SFPTWO_TEXTEDIT tags_200 texttagdelete">
                                            <strong class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_191 tagdelete" contenteditable="false">Bob Doe</strong><br>markeazy.com<div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div class="location-section" data-lead-id="location-section"><!-- START OF SECTION -->
            <a class="disabled" name="anchor7"></a>
            <div data-lead-id="location-map">
             <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_73">
                <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/map.jpg" class="img-responsive center-block">
                <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
            </div>
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-sm-12">
                        <div data-lead-id="location-container" class="location-box">
                        <div class="SFPTWO_TEXTEDIT tags_201 texttagdelete">
                         <h1 data-lead-id="location-title" class="location-box-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_192 tagdelete" contenteditable="false">location</h1><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                            <div data-lead-id="location-info" class="location-box-info">
                                <p></p><div class="SFPTWO_TEXTEDIT tags_202 texttagdelete"><strong class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_193 tagdelete" contenteditable="false">Scottsdale Resort and Conference Center</strong><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><p></p>
                               <div class="SFPTWO_TEXTEDIT tags_203 texttagdelete"> <p class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_194 tagdelete" contenteditable="false">7700 E Mccormick Pkwy</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                              <div class="SFPTWO_TEXTEDIT tags_204 texttagdelete">  <p class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_195 tagdelete" contenteditable="false">Scottsdale, AZ 85258 <br><br></p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                               <div class="SFPTWO_TEXTEDIT tags_205 texttagdelete"> <p class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_196 tagdelete" contenteditable="false">P: 1800-589-3258</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                               <div class="SFPTWO_TEXTEDIT tags_206 texttagdelete"> <p class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_197 tagdelete" contenteditable="false">W: conference.com</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                            </div>
                            <div class="SFPTWO_TEXTEDIT tags_207 texttagdelete"> 
                            <a href="#" data-lead-id="btn-location" class="btn btn-default btn-location btn-block textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_198 tagdelete" contenteditable="false">Get Directions</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div id="cta60-section" class="section text-center"><!-- START OF SECTION -->
            
            <div class="SFPTWO_TEXTEDIT tags_208 texttagdelete"><h1 id="anchor8" data-lead-id="cta60-header" class="section-main-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_199 tagdelete" contenteditable="false">Register Now!</h1><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
           <div class="SFPTWO_TEXTEDIT tags_209 texttagdelete"> <h3 data-lead-id="cta60-sub-header" class="section-sub-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_200 tagdelete" contenteditable="false">finibus dictum, purus augue vestibulum libero, u</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
           <div class="SFPTWO_TEXTEDIT tags_210 texttagdelete"> <a href="#" data-lead-id="btn-cta60" class="btn btn-primary btn-cta60 textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_201 tagdelete" contenteditable="false">REGISTER</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            
            </div><!-- END OF SECTION -->
            <div id="faq-section" data-lead-id="faq-section" class="faq-section section"><!-- START OF SECTION -->
            <div class="container">
                <div class="SFP_ROW">
                    <div class="SFP_BOOT-md-12">
                        <h1 id="anchor9" data-lead-id="faq-header" class="section-main-header text-center">FAQ</h1>
                        <div class="SFPTWO_TEXTEDIT tags_211 texttagdelete">
                        <h3 data-lead-id="faq-sub-header" class="section-sub-header text-center textedit SFPTWO_TAGEDIT edit explicit_edit tag_202 tagdelete" contenteditable="false">Got a burning question? It may be answered already below!</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        <div data-lead-id="faq-list-container" class="faq-list-container">
                            <ul data-lead-id="faq-list" class="list-unstyled">
                               <div class="SFPTWO_TEXTEDIT tags_212 texttagdelete"> <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_203 tagdelete" contenteditable="false"><strong>My Embeded Map doesnt look right!</strong><br>When embeding the map into the map section above, use the "large" (or larger) option when getting the embed code.</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                                <div class="SFPTWO_TEXTEDIT tags_213 texttagdelete"><li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_204 tagdelete" contenteditable="false"><strong>FAQ Question 2</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie cursus nibh a finibus. Donec et venenatis nisi. Donec venenatis ligula sed tellus lacinia, a congue tellus aliquet. Phasellus ac dui dapibus, finibus velit ac, sollicitudin.</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                               <div class="SFPTWO_TEXTEDIT tags_214 texttagdelete"> <li class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_205 tagdelete" contenteditable="false"><strong>FAQ Question 3</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie cursus nibh a finibus. Donec et venenatis nisi. Donec venenatis ligula sed tellus lacinia, a congue tellus aliquet. Phasellus ac dui dapibus, finibus velit ac, sollicitudin.</li><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></ul>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- END OF SECTION -->
            <div id="share-section" class="section text-center"><!-- START OF SECTION -->
            <div class="SFPTWO_TEXTEDIT tags_215 texttagdelete"><h1 data-lead-id="share-header" class="section-main-header textedit SFPTWO_TAGEDIT edit explicit_edit tag_206 tagdelete" contenteditable="false">Like and Share!</h1><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            <div class="share-container">
                <ul class="list-unstyled list-inline">
                    <li id="fb-btn-container">
                        <div id="fb-btn">
                         <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_74">
                            <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/fb-like.jpg" class="dummy img-responsive block-center dummy">
                            <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                        </div>
                    </li>
                    <li id="twitter-btn-container">
                        <div id="twitter-btn">
                         <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_75">
                            <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/twitter-like.jpg" class="dummy img-responsive block-center dummy">
                            <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                        </div>
                    </li>
                    <li id="google-btn-container">
                        <div id="google-btn">
                         <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_76">
                            <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/google-like.jpg" class="dummy img-responsive block-center dummy">
                            <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled list-inline">
                    <li id="fb-share-btn-container">
                        <a class="disabled" href="#" id="fb-share-btn">
                         <div class="logo-area text-center SFPTWO_IMAGEEDIT tagsimg_77">
                            <img src="//test.scampaigns.com/user_template/54254e59417ac7b65-event/img/fb_share.png" class="dummy img-responsive block-center dummy">
                            <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                        </a>
                    </li>
                    
                </ul>
            </div>
            
            
            </div><!-- END OF SECTION -->
            <div id="legal-section" class="section text-center"><!-- START OF SECTION -->
            <div class="SFPTWO_TEXTEDIT tags_216 texttagdelete">
            <p data-lead-id="legal-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_207 tagdelete" contenteditable="false">
            ©2014 markeazy.com. Get all mockups and other creatives at markeazy.com <a class="disabled" href="#">Privacy Policy</a>
            
            </p>
            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            </div><!-- END OF SECTION -->
            </div>
        <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-3.newrelic.com","licenseKey":"f767fe6f50","applicationID":"5899235","transactionName":"YFwEMkZYX0ZYBhINVlkWMxRdFkRGXBc5EFxaSQoHQFweAA1XU1BcAgBSVwNYUgJbU1NJXEFcCBIbUF9RXB1IFFFH","queueTime":0,"applicationTime":0,"atts":"TBsHRA5CTEg=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-476.min.js"}</script>