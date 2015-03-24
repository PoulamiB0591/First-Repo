<img src="/img/divider.png" id="imgdragable" style="display: none;">



<!--SFPPAGE-->


    
        <meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UwACU1BRGwYIXVhQBAQ="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(5),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(f){"stack"in f&&(t(1),t(4),"addEventListener"in window&&t(2),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(3),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:8,2:5,3:9,4:7,5:20,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],4:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(2);t("loader").features.stn=!0,t(1),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:6,2:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:20,2:21,ee:"QJf3ax",gos:"7eSDFh"}],6:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:21,2:20,ee:"QJf3ax"}],7:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:21,2:20,ee:"QJf3ax"}],8:[function(t,e){function n(t,e,n){var r=t[0];"string"==typeof r&&(r=new Function(r)),t[0]=o(r,"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:21,2:20,ee:"QJf3ax"}],9:[function(t,e){function n(){c.inPlace(this,d,"fn-")}function r(t,e){c.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}var i=t("ee").create(),a=t(1),s=t(2),c=s(i),f=s(a),u=window.XMLHttpRequest,d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=i,window.XMLHttpRequest=function(t){var e=new u(t);try{i.emit("new-xhr",[],e),f.inPlace(e,["addEventListener","removeEventListener"],"-",function(t,e){return e}),e.addEventListener("readystatechange",n,!1)}catch(r){try{i.emit("internal-error",[r])}catch(o){}}return e},window.XMLHttpRequest.prototype=u.prototype,c.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),i.on("send-xhr-start",r),i.on("open-xhr-start",r)},{1:5,2:21,ee:"QJf3ax"}],10:[function(t){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=e(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(n.cat=d.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r,this.startTime])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=e(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",[e])}catch(r){}}};for(var u=0;c>u;u++)n.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:11,3:9,4:5,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],11:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){p.proto="https"===d.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=p.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,c=s.document,f="addEventListener",u="attachEvent",d=(""+location).split("?")[0],p=e.exports={offset:i(),origin:d,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),s[f]("load",n,!1)):(c[u]("onreadystatechange",r),s[u]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],20:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],21:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s,t))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:20,ee:"QJf3ax"}]},{},["G9z0Bl",3,10,4]);</script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/css/bootstrap.min.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet" type="text/css">
           <!--SFPScript src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/js/jquery-1.9.1.min.js"></SFPScript-->
         <!--SFPScript src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/js/bootstrap.min.js"></SFPScript-->
        
        
        
            <div id="wrapper" class="SFPTWO_BACKGROUND">
                <div id="s01">
                    <div class="container">
                        <div class="textme"></div><div class="text-center SFPTWO_IMAGEEDIT tagsimg_1">
                            <img src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/logo.png" id="s01-logo">
                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                        <div class="hero-content-area">
                            <div class="SFP_ROW">
                                <div class="SFP_BOOT-md-7 SFP_BOOT-sm-6">
                                    <div class="hero-left-content">
                                    <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_1 texttagdelete">
                                    <h1 id="s01-h1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_1 tagdelete" contenteditable="false">Get Our Awesome Amazing New App!</h1>
                                    <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                        
                                        <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_2 texttagdelete">
                                          <h5 id="s01-h5" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_2 tagdelete" contenteditable="false">Dodio a, sit arcu porta, velit eu placerat, sociis augue! Facilisis placerat mid urna. Egestas, est nunc montes, sit, tempor pid et porttitor? Nec cras auctor augue nisi, sed mid, augue mauris tincidun</h5>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                      
                                        <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_3 texttagdelete">
                                         <h5 id="s01-h6" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_3 tagdelete" contenteditable="false">Available on App Store and Play Store</h5>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                        <div class="textme"></div><div class="hero-btn-area SFPTWO_TEXTEDIT tags_4 texttagdelete"><a href="#" id="s01-cta" class="btn btn-primary textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_4 tagdelete" contenteditable="false">Get App Now!</a>
                                    <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                </div>
                            </div>
                            <div class="SFP_BOOT-md-5 SFP_BOOT-sm-6 SFP_BOOT-bottom text-center">
                                <div class="textme"></div><div class="hero-img-right SFPTWO_IMAGEEDIT tagsimg_2">
                                    <img src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/hero_img2.png" id="hero-image" class="dummy img-responsive center-block dummy">
                                <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="s02" class="standard-layer">
                <div class="container">
                    <div class="SFP_ROW">
                        <div class="SFP_BOOT-md-12">
                        <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_5 texttagdelete">
                        
                          <h1 id="s02-h1" class="s02-main-header section-header text-center textedit SFPTWO_TAGEDIT edit explicit_edit tag_5 tagdelete" contenteditable="false">Benefits Section</h1>
                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                          
                          <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_6 texttagdelete">
                             <h4 id="s02-h4" class="sub-header text-center textedit SFPTWO_TAGEDIT edit explicit_edit tag_6 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</h4>
                          
                          <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                          
                         
                        </div>
                    </div>
                    <div class="SFP_ROW">
                        <div class="SFP_BOOT-sm-4 benefits-content-right-area">
                            <div id="s02-benefit1" class="benefit-content">
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_7 texttagdelete">
                            
                             <h1 id="s02-benefit1-h1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_7 tagdelete" contenteditable="false">Ecommerce</h1>
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                               
                                <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_8 texttagdelete">
                                
                                <p id="s02-benefit1-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_8 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore</p>
                                
                                
                                <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                
                            </div>
                            <div id="s02-benefit2" class="benefit-content">
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_9 texttagdelete">
                            
                             <h1 id="s02-benefit2-h1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_9 tagdelete" contenteditable="false">Table Reservations</h1>
                            
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                               
                                <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_10 texttagdelete">
                                
                                   <p id="s02-benefit2-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_10 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore</p>
                                
                                <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                             
                            </div>
                            <div id="s02-benefit3" class="benefit-content">
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_11 texttagdelete">
                            
                              <h1 id="s02-benefit3-h1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_11 tagdelete" contenteditable="false">Order Food</h1>
                            
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                              
                                <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_12 texttagdelete">
                                
                                 <p id="s02-benefit3-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_12 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore</p>
                                
                                <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                               
                            </div>
                            <div id="s02-benefit4" class="benefit-content">
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_13 texttagdelete">
                            
                                <h1 id="s02-benefit4-h1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_13 tagdelete" contenteditable="false">Coupons</h1>
                            
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                            
                                <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_14 texttagdelete">
                                
                                 <p id="s02-benefit4-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_14 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore</p>
                                
                                <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                               
                            </div>
                        </div>
                        <div class="textme"></div><div class="SFP_BOOT-sm-4 hidden-xs text-center SFPTWO_IMAGEEDIT tagsimg_3">
                            <img src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/benefits_img.png" id="s02-image">
                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                        <div class="SFP_BOOT-sm-4">
                            <div id="s02-benefit5" class="benefit-content">
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_15 texttagdelete">
                            
                              <h1 id="s02-benefit5-h1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_15 tagdelete" contenteditable="false">Scheduling</h1>
                            
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                              
                                <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_16 texttagdelete">
                                
                                     <p id="s02-benefit5-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_16 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore</p>
                                
                                <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                           
                            </div>
                            <div id="s02-benefit6" class="benefit-content">
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_17 texttagdelete">
                            
                              <h1 id="s02-benefit6-h1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_17 tagdelete" contenteditable="false">Click-to-Call</h1>
                            
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                              
                                <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_18 texttagdelete">
                                  <p id="s02-benefit6-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_18 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore</p>
                                
                                <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                              
                            </div>
                            <div id="s02-benefit7" class="benefit-content">
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_19 texttagdelete">
                            
                              <h1 id="s02-benefit7-h1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_19 tagdelete" contenteditable="false">Directions and Maps</h1>
                            
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                              
                                <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_20 texttagdelete">
                                
                                         <p id="s02-benefit7-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_20 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore</p>
                                
                                <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                       
                            </div>
                            <div id="s02-benefit8" class="benefit-content">
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_21 texttagdelete">
                            
                                 <h1 id="s02-benefit8-h1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_21 tagdelete" contenteditable="false">User Reviews</h1>
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                           
                                <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_22 texttagdelete">
                                
                                <p id="s02-benefit8-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_22 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore</p>
                                
                                <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="s03" class="standard-layer">
                <div class="container">
                    <div class="SFP_ROW">
                        <div class="SFP_BOOT-sm-7">
                        <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_23 texttagdelete">
                        
                           <h1 id="s03-h1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_23 tagdelete" contenteditable="false">Feature Section</h1>
                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                         
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_24 texttagdelete">
                            
                               <p id="s03-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_24 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                         
                        </div>
                        <div class="textme"></div><div class="SFP_BOOT-sm-5 text-center SFPTWO_IMAGEEDIT tagsimg_4">
                            <img src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/img2.png" class="dummy img-responsive center-block dummy" id="s03-image">
                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                    </div>
                </div>
            </div>
            <div id="s04" class="standard-layer">
                <div class="container">
                    <div class="SFP_ROW">
                        <div class="SFP_BOOT-sm-7">
                            <div class="textme"></div><div id="embed-video" class="video-area SFPTWO_IMAGEEDIT tagsimg_5">
                                <img src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/video_sample.jpg" style="margin-top: -25px" class="dummy img-responsive center-block dummy">
                            <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                        </div>
                        <div class="SFP_BOOT-sm-5">
                        <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_25 texttagdelete">
                          <h1 id="s04-h1">Video Section</h1>
                        
                        </div>
                          
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_26 texttagdelete">
                                <p id="s04-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_25 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dol</p>
                            
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div id="s05" class="standard-layer">
                <div class="container">
                    <div class="SFP_ROW">
                        <div class="textme"></div><div class="SFP_BOOT-md-12 text-center SFPTWO_IMAGEEDIT tagsimg_6">
                            <img src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/testimonial_pic.jpg" id="testimonial-pic" class="dummy img-responsive img-circle center-block dummy">
                           <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_27 texttagdelete">
                           
                            <p id="s05-text" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_26 tagdelete" contenteditable="false">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in"</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_28 texttagdelete">
                                 <span id="s05-testimonial-name" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_27 tagdelete" contenteditable="false">Jane Doe</span>
                            
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                        
                            <br><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_29 texttagdelete"> 
                            <span id="s05-testimonial-company" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_28 tagdelete" contenteditable="false">SEO, Some Company</span>
                            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                    </div>
                </div>
            </div>
            <div id="s06" class="standard-layer">
                <div class="container">
                    <div class="SFP_ROW">
                        <div class="SFP_BOOT-md-12">
                        <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_30 texttagdelete">
                         <h1 id="s06-h1" class="section-header text-center">Screenshots</h1>
                        
                        </div>
                           
                            <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_31 texttagdelete">
                                 <h4 id="s06-h4" class="sub-header text-center">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</h4>
                            
                            </div>
                       
                        </div>
                    </div>
                    <div class="SFP_ROW">
                        <div class="SFP_BOOT-sm-6">
                            <div class="SFP_ROW">
                                <div class="textme"></div><div class="SFP_BOOT-xs-6 SFPTWO_IMAGEEDIT tagsimg_7">
                                    <img src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/screen1.jpg" class="dummy screenshot-thumb img-responsive center-block dummy" id="s06-screenshot1">
                                <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                                <div class="textme"></div><div class="SFP_BOOT-xs-6 SFPTWO_IMAGEEDIT tagsimg_8">
                                    <img src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/screen2.jpg" class="dummy screenshot-thumb img-responsive center-block dummy" id="s06-screenshot2">
                                <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                            </div>
                        </div>
                        <div class="SFP_BOOT-sm-6">
                            <div class="SFP_ROW">
                                <div class="textme"></div><div class="SFP_BOOT-xs-6 SFPTWO_IMAGEEDIT tagsimg_9">
                                    <img src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/screen3.jpg" class="dummy screenshot-thumb img-responsive center-block dummy" id="s06-screenshot3">
                                <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                                <div class="textme"></div><div class="SFP_BOOT-xs-6 SFPTWO_IMAGEEDIT tagsimg_10">
                                    <img src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/screen4.jpg" class="dummy screenshot-thumb img-responsive center-block dummy" id="s06-screenshot4">
                                <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="s07" class="standard-layer">
                <div class="container">
                    <div class="SFP_ROW">
                        <div class="SFP_BOOT-md-12">
                        <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_32 texttagdelete">
                        
                        <h1 id="s07-h1" class="section-header text-center textedit SFPTWO_TAGEDIT edit explicit_edit tag_29 tagdelete" contenteditable="false">Pricing Packages</h1>
                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                            
                          <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_33 texttagdelete">
                            <h4 id="s07-h4" class="sub-header text-center textedit SFPTWO_TAGEDIT edit explicit_edit tag_30 tagdelete" contenteditable="false">Lorem ipsum dolor sit amet, ed do eiusmod tempor incididunt ut labore et dolore magna.</h4>
                      
                      <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                        </div>
                    </div>
                    <div id="price-box-outer">
                        <div class="SFP_ROW">
                            <div class="SFP_BOOT-sm-4">
                                <div class="price-box">
                                    <div class="header class=" sfptwo_textedit""="">
                                    <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_34 texttagdelete">
                                    <span id="price-header1" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_31 tagdelete" contenteditable="false">SILVER</span>
                                    <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                    <div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_11">
                                        <img id="pricebox-ribbon1" class="pricebox-ribbon" src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/ribbon.png">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                                    </div>
                                    <div></div>
                                    <div class="textme"></div><div id="price1" class="pricing SFPTWO_TEXTEDIT tags_35 texttagdelete"><div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_32 tagdelete" contenteditable="false"><span>$10</span> /month</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                    <div class="features">
                                        <ul id="features-list1">
                                          <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_36 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_33 tagdelete" contenteditable="false">Free image editing</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                          <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_37 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_34 tagdelete" contenteditable="false">Unlimited Profile Views</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                          <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_38 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_35 tagdelete" contenteditable="false">VIP access</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                         <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_39 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_36 tagdelete" contenteditable="false">Amazing Benefits</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                        <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_40 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_37 tagdelete" contenteditable="false">Amazing Content</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                         <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_41 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_38 tagdelete" contenteditable="false">Unlocked Maps</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                        </ul>
                                        <div class="textme"></div><div class="price-btn-area text-center SFPTWO_TEXTEDIT tags_42 texttagdelete">
                                            <a href="#" id="price1-btn" class="btn btn-primary btn-pricing textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_39 tagdelete" contenteditable="false">Get this Package</a>
                                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="SFP_BOOT-sm-4">
                                <div class="price-box">
                                    <div class="header"><div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_43 texttagdelete"><span class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_40 tagdelete" id="price-header2" contenteditable="false">GOLD</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                    <div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_12">
                                        <img id="pricebox-ribbon2" class="pricebox-ribbon" src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/ribbon.png">
                                        <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                                    </div>
                                    <div>
                                    <div class="textme"></div><div id="price2" class="pricing SFPTWO_TEXTEDIT tags_44 texttagdelete"><span class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_41 tagdelete" contenteditable="false">$30</span> /month<div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                    </div>
                                    <div class="features">
                                        <ul id="features-list2">
                                          <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_45 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_42 tagdelete" contenteditable="false">Free image editing</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                          <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_46 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_43 tagdelete" contenteditable="false">Unlimited Profile Views</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                           <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_47 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_44 tagdelete" contenteditable="false">VIP access</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                        <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_48 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_45 tagdelete" contenteditable="false">Amazing Benefits</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                         <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_49 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_46 tagdelete" contenteditable="false">Amazing Content</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                         <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_50 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_47 tagdelete" contenteditable="false">Unlocked Maps</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                        </ul>
                                        <div class="price-btn-area text-center">
                                            <div class="textme"></div><a href="#" id="price2-btn" class="btn btn-primary btn-pricing SFPTWO_TEXTEDIT disabled tags_51 texttagdelete">Get this Package</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="SFP_BOOT-sm-4">
                                <div class="price-box">
                                   <div class="header">  <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_52 texttagdelete"><span id="price-header3" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_48 tagdelete" contenteditable="false">PLATINUM</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                        <div class="textme"></div><div class="SFPTWO_IMAGEEDIT tagsimg_13">&lt;<img id="pricebox-ribbon3" class="pricebox-ribbon" src="//test.scampaigns.com/user_template/65554f45f0a46ebb6-apptastic/img/ribbon.png">/div&gt;
                                    <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input value="undefined" id="hid" type="hidden"><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input value="0" id="imgCount" type="hidden"></div></div>
                                    <div class="textme"></div><div id="price3" class="pricing SFPTWO_TEXTEDIT tags_53 texttagdelete"> <span class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_49 tagdelete" contenteditable="false">$75</span> /month<div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                                    <div class="features">
                                        <ul id="features-list3">
                                         <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_54 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_50 tagdelete" contenteditable="false">Free image editing</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                           <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_55 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_51 tagdelete" contenteditable="false">Unlimited Profile Views</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                           <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_56 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_52 tagdelete" contenteditable="false">VIP access</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                           <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_57 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_53 tagdelete" contenteditable="false">Amazing Benefits</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                         <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_58 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_54 tagdelete" contenteditable="false">Amazing Content</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                         <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_59 texttagdelete"> <div class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_55 tagdelete" contenteditable="false">Unlocked Maps</div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li> 
                                        </ul>
                                        <div class="price-btn-area text-center">
                                         <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_60 texttagdelete">
                                          <a href="#" id="price3-btn" class="btn btn-primary btn-pricing textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_56 tagdelete" contenteditable="false">Get this Package</a>
                                         <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="s08" class="standard-layer">
                <div class="container">
                    <div class="SFP_ROW">
                        <div class="SFP_BOOT-md-12 text-center">
                          <div> <div class="textme"></div><h1 id="s08-h1" class="section-header SFPTWO_TEXTEDIT textedit SFPTWO_TAGEDIT edit explicit_edit tag_57 tagdelete tags_61 texttagdelete" contenteditable="false">The Closing Argument Statment</h1><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div> 
                        <div> <div class="textme"></div><h4 id="s08-h4" class="sub-header SFPTWO_TEXTEDIT textedit SFPTWO_TAGEDIT edit explicit_edit tag_58 tagdelete tags_62 texttagdelete" contenteditable="false">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</h4><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>   
                       <div> <div class="textme"></div><a href="#" class="btn btn-primary SFPTWO_TEXTEDIT textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_59 tagdelete tags_63 texttagdelete" id="s08-cta" contenteditable="false">Get App Now!</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>    
                        </div>
                    </div>
                </div>
            </div>
            <div id="s09">
                <div class="container">
                    <div class="SFP_ROW">
                        <div class="SFP_BOOT-md-12 text-center">
                            <ul id="legal-links" class="list-inline">
                            <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_64 texttagdelete"><div> <a href="#" id="link1" class="textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_60 tagdelete" contenteditable="false">Private Policy</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                            </li>
                         <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_65 texttagdelete"> <div>  <a class="disabled" href="#" id="link2 class=" textedit="" sfptwo_tagedit="" edit="" explicit_edit""="">Legal Notice</a></div> 
                        </li>
                       <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_66 texttagdelete"> <div><a href="#" id="link3" class="textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_61 tagdelete" contenteditable="false">Sample 3</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div> 
                    </li>
                  <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_67 texttagdelete">   <div> <a href="#" id="link4" class="textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_62 tagdelete" contenteditable="false">Sample 4</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
                </li>
               <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_68 texttagdelete">  <div><a href="#" id="link5" class="textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_63 tagdelete" contenteditable="false">Sample 5</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
            </li>
           <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_69 texttagdelete"> <div> <a href="#" id="link6" class="textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_64 tagdelete" contenteditable="false">Sample 6</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
        </li>
        <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_70 texttagdelete"><div><a href="#" id="link7" class="textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_65 tagdelete" contenteditable="false">Sample 7</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div> 
    </li>
   <div class="textme"></div><li class="SFPTWO_TEXTEDIT tags_71 texttagdelete">  <div><a href="#" id="link8" class="textedit SFPTWO_TAGEDIT edit explicit_edit disabled tag_66 tagdelete" contenteditable="false">Sample 8</a><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>
</li>
</ul>
<div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_72 texttagdelete"><p id="disclaimer" class="textedit SFPTWO_TAGEDIT edit explicit_edit tag_67 tagdelete" contenteditable="false">Mockups and other creatives used for this template are available here are <a class="disabled" href="http://markeazy.com/product-category/landing-page-packages/apptastic/" target="blank">http://markeazy.com/product-category/landing-page-packages/apptastic/</a>.
<br>This template was made with love by <a class="disabled" href="http://markeazy.com" target="blank">Markeazy.com</a></p>
<div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></div>

</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-3.newrelic.com","licenseKey":"f767fe6f50","applicationID":"5899235","transactionName":"YFwEMkZYX0ZYBhINVlkWMxRdFkRGXBc5EFxaSQoHQFweAwxQU1BfAwwAVlUNB1BbB1BJWEdJEgdHTVhWFgwIAFxPFxYORA==","queueTime":0,"applicationTime":0,"atts":"TBsHRA5CTEg=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-476.min.js"}</script>


</div>

       
		<script type="text/javascript">
            var d = document;
            var safari = (navigator.userAgent.toLowerCase().indexOf() != -1) ? true : false;
            var gebtn = function(parEl,child) { return parEl.getElementsByTagName(child); };
            onload = function() {
                
                var body = gebtn(d,'body')[0];
                body.className = body.className && body.className != '' ? body.className + ' has-js' : 'has-js';
                
                if (!d.getElementById || !d.createTextNode) return;
                var ls = gebtn(d,'label');
                for (var i = 0; i < ls.length; i++) {
                    var l = ls[i];
                    if (l.className.indexOf('label_') == -1) continue;
                    var inp = gebtn(l,'input')[0];
                    if (l.className == 'label_check') {
                        l.className = (safari && inp.checked == true || inp.checked) ? 'label_check c_on' : 'label_check c_off';
                        l.onclick = check_it;
                    };
                    if (l.className == 'label_radio') {
                        l.className = (safari && inp.checked == true || inp.checked) ? 'label_radio r_on' : 'label_radio r_off';
                        l.onclick = turn_radio;
                    };
                };
            };
            var check_it = function() {
                var inp = gebtn(this,'input')[0];
                if (this.className == 'label_check c_off' || (!safari && inp.checked)) {
                    this.className = 'label_check c_on';
                    if (safari) inp.click();
                } else {
                    this.className = 'label_check c_off';
                    if (safari) inp.click();
                };
            };
            var turn_radio = function() {
                var inp = gebtn(this,'input')[0];
                if (this.className == 'label_radio r_off' || inp.checked) {
                    var ls = gebtn(this.parentNode,'label');
                    for (var i = 0; i < ls.length; i++) {
                        var l = ls[i];
                        if (l.className.indexOf('label_radio') == -1)  continue;
                        l.className = 'label_radio r_off';
                    };
                    this.className = 'label_radio r_on';
                    if (safari) inp.click();
                } else {
                    this.className = 'label_radio r_off';
                    if (safari) inp.click();
                };
            };
        </script>
        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->