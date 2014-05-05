/* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-touch-shiv-cssclasses-teststyles-prefixes-load
 */
;window.Modernizr=function(a,b,c){function w(a){j.cssText=a}function x(a,b){return w(m.join(a+";")+(b||""))}function y(a,b){return typeof a===b}function z(a,b){return!!~(""+a).indexOf(b)}function A(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:y(f,"function")?f.bind(d||b):f}return!1}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n={},o={},p={},q=[],r=q.slice,s,t=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},u={}.hasOwnProperty,v;!y(u,"undefined")&&!y(u.call,"undefined")?v=function(a,b){return u.call(a,b)}:v=function(a,b){return b in a&&y(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=r.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(r.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(r.call(arguments)))};return e}),n.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:t(["@media (",m.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c};for(var B in n)v(n,B)&&(s=B.toLowerCase(),e[s]=n[B](),q.push((e[s]?"":"no-")+s));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)v(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},w(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._prefixes=m,e.testStyles=t,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+q.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};


(function($){
    
    function createCookie(name,value,days) {
    	if (days) {
    		var date = new Date();
    		date.setTime(date.getTime()+(days*24*60*60*1000));
    		var expires = "; expires="+date.toGMTString();
    	}
    	else var expires = "";
    	document.cookie = name+"="+value+expires+"; path=/";
    }
    
    function readCookie(name) {
    	var nameEQ = name + "=";
    	var ca = document.cookie.split(';');
    	for(var i=0;i < ca.length;i++) {
    		var c = ca[i];
    		while (c.charAt(0)==' ') c = c.substring(1,c.length);
    		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    	}
    	return null;
    }
    
    function eraseCookie(name) {
    	createCookie(name,"",-1);
    }
    
	var deviceAgent = navigator.userAgent.toLowerCase();
	
	var isTouchDevice = Modernizr.touch || 
	(deviceAgent.match(/(iphone|ipod|ipad)/) ||
	deviceAgent.match(/(android)/)  || 
	deviceAgent.match(/(iemobile)/) || 
	deviceAgent.match(/iphone/i) || 
	deviceAgent.match(/ipad/i) || 
	deviceAgent.match(/ipod/i) || 
	deviceAgent.match(/blackberry/i) || 
	deviceAgent.match(/bada/i));

    $.fn.togglePlaceholder = function() {
        return this.each(function() {
            $(this)
            .data("holder", $(this).attr("placeholder"))
            .focusin(function(){
                $(this).attr('placeholder','');
            })
            .focusout(function(){
                $(this).attr('placeholder',$(this).data('holder'));
            });
        });
    };
    
    function trim(s)
    {
    	return rtrim(ltrim(s));
    }
    
    function ltrim(s)
    {
    	var l=0;
    	while(l < s.length && s[l] == ' ')
    	{	l++; }
    	return s.substring(l, s.length);
    }
    
    function rtrim(s)
    {
    	var r=s.length -1;
    	while(r > 0 && s[r] == ' ')
    	{	r-=1;	}
    	return s.substring(0, r+1);
    }
	
    function start_client_quotes_slideshow(){
        
        $('.site .home-quotes ul.quotes').quotesPanel({ 
			'cont' : '.site .home-quotes', 
			'nav_list': '.site .home-quotes ul.nav',
			'btn_prev' : '.site .home-quotes a.prev',
			'btn_next' : '.site .home-quotes a.next',  
			'sliderTimeout' : '8000',
            'fadeout' : 0
			});  
        
    }
    
    function start_quotes_slideshow(){
		

    	$('.site .quote-block ul').quotesPanel({ 
			'cont' : '.site .quote-block', 
			'nav_list': '.awards_nav.for_quotes ul.nav', 
			'sliderTimeout' : '8000'
			});              
    }
    
    
    function start_awards_slideshow(){

        $('.site .award_links ul').quotesPanel({ 
			'cont' : '.site .award_links', 
			'nav_list': '.awards_nav.for_awards ul.nav', 
			'sliderTimeout' : '8000'
			});    
        
    }
    
    function start_homecontact_slideshow(){
	
    	$('.site .home-contact .img_wrapper ul').quotesPanel({ 
			'cont' : '.site .home-contact .img_wrapper', 
			'nav_list': '.site .home-contact .nav', 
			'sliderTimeout' : '8000',
            'fadeout' : 0
			});   
             
        
    }


    function works_filter_height(){
        
        $(".work_thumb a img:first").each(function(){
           
           var this_img         = $(this);
           var this_img_height  = $(this_img).css('height', 'auto').outerHeight();
           
           // filter box height
           var filter_box       = $(".site .work_thumb.with_filter .filter:visible");
           $(".site .work_thumb.with_filter .filter").height(this_img_height);
           $(".site .work_thumb a img").css('height' , this_img_height) ;
           
           // align list in filter box
           var filter_list      = $(".work_thumb.with_filter .filter:visible ul");
           
           
           var filter_box_width     = $(filter_box).outerWidth();
           var filter_box_height    = $(filter_box).outerHeight();
           
           var filter_list_width    = $(filter_list).outerWidth();
           var filter_list_height   = $(filter_list).outerHeight();
           
           var filter_new_left      = (filter_box_width - filter_list_width) / 2;
           var filter_new_top       = (filter_box_height - filter_list_height) / 2;
           
           if( filter_new_top < 0 ){ filter_new_top = 0; }
           if( filter_new_left < 0 ){ filter_new_left = 0; }
           
           $(".site .work_thumb.with_filter .filter ul").css('margin-top' , filter_new_top );
           $(".site .work_thumb.with_filter .filter ul").css('margin-left' , filter_new_left );
           //$(".site .work_thumb.with_filter .filter ul").css('left' , filter_new_left );
            
        });
        
    }


	jQuery.fn.quotesPanel = function(settings){
		
		var config = {
			'sliderTimeout'	: 5000, //ms
			'quotes_list'	: '',
			'nav_list'		: '',
			'fadeout'		: 1,
			'cont'			: null,
			'btn_prev'		: null,
			'btn_next'		: null,
			'mark_class'	: 'slider_quotes_list',
            'fadein_speed'	: 400
			
	    };
	    if (settings){$.extend(config, settings);}
		

		
		return this.each(function(){
			
			var slider_interval = null;
			
			var this_c = $(this);
			$(this_c).addClass(config.mark_class);
			$("li:first",this_c).addClass('active');
			
			// update nav
			if( config.nav_list ){
				
				// clear
				$(config.nav_list).html('');
				
				// fill
				if( $("li",this_c).size() ){

					inner_html = '';
					for(i=1; i<=$("li",this_c).size(); i++){
						inner_html += '<li><a href="#"><span></span></a></li>';
					}
					$(config.nav_list).append(inner_html);
				}
				
				// mark active
				$("a:first",config.nav_list).addClass('active');
				
				
				// btn prev
				if( config.btn_prev ){
					
					$(config.btn_prev).bind('click', function(){
					
						// stop
						// clearInterval(slider_interval);
						
						next_index	= $("li.active",this_c).prev();
						if( next_index.length == 0 ){ next_index = $("li",this_c).size() - 1; /* goto last  */ }
						else { next_index	= $("li",this_c).index(next_index); }						
					
						next_zindex = parseInt($("li.active",this_c).css('z-index'), 10) + 1;
						
						quotes_list = $('.' + config.mark_class, config.cont);
						
						
						if( !config.fadeout ){
							
							$("li.active",quotes_list).removeClass('active');
							
							$("li", quotes_list).eq(next_index)
							.css('z-index', next_zindex)
							.hide()
							.fadeIn( config.fadein_speed, function(){
								$(this).addClass('active');
								$("a",config.nav_list).removeClass('active');
								$("a",config.nav_list).eq(next_index).addClass('active');
							});	
					
						}
					
						return false;
					

						
					});
					
				}
				
				
				// btn next
				if( config.btn_next ){
					
					$(config.btn_next).bind('click', function(){
						
						// stop
						clearInterval(slider_interval);
						
						next_index	= $("li.active",this_c).next();
						if( next_index.length == 0 ){ next_index = 0 /* back to start */ }
						else { next_index	= $("li",this_c).index(next_index); }	
											
						next_zindex = parseInt($("li.active",this_c).css('z-index'), 10) + 1;
						
						quotes_list = $('.' + config.mark_class, config.cont);
						
						
						if( !config.fadeout ){
							
							$("li.active",quotes_list).removeClass('active');
							
							$("li", quotes_list).eq(next_index)
							.css('z-index', next_zindex)
							.hide()
							.fadeIn( config.fadein_speed, function(){
								$(this).addClass('active');
								$("a",config.nav_list).removeClass('active');
								$("a",config.nav_list).eq(next_index).addClass('active');
							});	
					
						}
					
						return false;
						
					});
					
					
				}
				
				// attach clicks
				$("a",config.nav_list).bind('click', function(){
					if( !$(this).hasClass('active') ){
						
						// stop
						clearInterval(slider_interval);
						
						// this index
						var this_a_index = $("a",config.nav_list).index(this);
						
						// show
						//quotes_list = $(this).closest('.' + config.mark_class);
						//quotes_list = null;
						//if(quotes_list.length == 0){ quotes_list = $('.' + config.mark_class); }
						quotes_list = $('.' + config.mark_class, config.cont);

						// zindex
						next_zindex = parseInt($("li.active",this_c).css('z-index'), 10) + 1;

						// fadeout current
						if( config.fadeout ){
							$("li.active",quotes_list)
							.fadeOut(config.fadein_speed, function(){
								
								$("li.active",quotes_list).removeClass('active');
								
								$("li", quotes_list).eq(this_a_index)
								.css('z-index', next_zindex)
								.hide()
								.fadeIn( config.fadein_speed, function(){
									$(this).addClass('active');
									$("a",config.nav_list).removeClass('active');
									$("a",config.nav_list).eq(this_a_index).addClass('active');
								});	
								
							});
						}
						else {

								
								$("li.active",quotes_list).removeClass('active');
								
								$("li", quotes_list).eq(this_a_index)
								.css('z-index', next_zindex)
								.hide()
								.fadeIn( config.fadein_speed, function(){
									$(this).addClass('active');
									$("a",config.nav_list).removeClass('active');
									$("a",config.nav_list).eq(this_a_index).addClass('active');
								});	
								
					
						}

    					// auto
    			        slider_interval = setInterval(function(){
    
    						show_next();
    			
    			        }, config.sliderTimeout);
				
						
						
					}
					return false;	
				});
				
			}

			var show_next = function(){
				
				// current active
				//var this_a_index = $("a",config.nav_list).index( $("a.active",config.nav_list) );
				var this_a_index = $(config.nav_list + " a" ).index( $(config.nav_list + " a.active") );
		

				// show
				// quotes_list = $("a",config.nav_list).closest('.' + config.mark_class);
				//if(quotes_list.length == 0){ quotes_list = $('.' + config.mark_class, config.cont); }
				var quotes_list = $('.' + config.mark_class, config.cont);


				// next li
				var next_index  = this_a_index + 1; 
				if( next_index == ($("li",this_c).size()) ){ next_index = 0; }

				
				// current zindex
				var next_zindex = parseInt($("li.active",this_c).css('z-index'), 10) + 1;
				if( $("li.active",this_c).size() == 0 ){ next_zindex = parseInt($("li.first",this_c).css('z-index'), 10) + 1; }

				

				// fadeout current
				if( config.fadeout ){
					
					$("li.active",quotes_list)
					.fadeOut(config.fadein_speed , function(){
						
						$("li.active",quotes_list).removeClass('active');
						
						$("li", quotes_list).eq(next_index)
						.css('z-index', next_zindex)
						.hide()
						.fadeIn( config.fadein_speed, function(){
							$(this).addClass('active');
							$(config.nav_list + " a" ).removeClass('active');
							$(config.nav_list + " a" ).eq(next_index).addClass('active');
						});	
						
						
					});
					
				}
				else {

					$("li.active",quotes_list).removeClass('active');
					
					$("li", quotes_list).eq(next_index)
					.css('z-index', next_zindex)
					.hide()
					.fadeIn( config.fadein_speed, function(){
						$(this).addClass('active');
						$(config.nav_list + " a" ).removeClass('active');
						$(config.nav_list + " a" ).eq(next_index).addClass('active');
						
						
						
					});	
						
						
				
				}

			}

			
			// timeout
			var autoslider = function(){
				
					// auto
			        slider_interval = setInterval(function(){

						show_next();
			
			        }, config.sliderTimeout);				
				
			}
			
			if( config.sliderTimeout && ($("li",this_c).size() > 1) ){

				// init
				autoslider();
				
			}
			
		});
		
	};
	
    
    (function (jQuery) {
    
        function getStyle(elem, name) {
            return (elem.currentStyle && elem.currentStyle[name]) || elem.style[name];
        }
    
        function getClip(elem) {
            var cssClip = $(elem).css('clip') || '';
    
            if (!cssClip) {
                // Try to get the clip rect another way for IE8.
                // This is a workaround for jQuery's css('clip') returning undefined
                // when the clip is defined in an external stylesheet in IE8. -JPOEHLS
                var pieces = {
                    top: getStyle(elem, 'clipTop'),
                    right: getStyle(elem, 'clipRight'),
                    bottom: getStyle(elem, 'clipBottom'),
                    left: getStyle(elem, 'clipLeft')
                };
    
                if (pieces.top && pieces.right && pieces.bottom && pieces.left) {
                    cssClip = 'rect(' + pieces.top + ' ' + pieces.right + ' ' + pieces.bottom + ' ' + pieces.left + ')';
                }
            }
    
            // Strip commas and return.
            return cssClip.replace(/,/g, ' ');
        }
    
        jQuery.fx.step.clip = function (fx) {
            if (fx.pos === 0) {
                var cRE = /rect\(([0-9\.]{1,})(px|em)[,]?\s+([0-9\.]{1,})(px|em)[,]?\s+([0-9\.]{1,})(px|em)[,]?\s+([0-9\.]{1,})(px|em)\)/;
    
                fx.start = cRE.exec(getClip(fx.elem));
                if (typeof fx.end === 'string') {
                    fx.end = cRE.exec(fx.end.replace(/,/g, ' '));
                }
            }
            if (fx.start && fx.end) {
                var sarr = new Array(), earr = new Array(), spos = fx.start.length, epos = fx.end.length,
                    emOffset = fx.start[ss + 1] == 'em' ? (parseInt($(fx.elem).css('fontSize')) * 1.333 * parseInt(fx.start[ss])) : 1;
                for (var ss = 1; ss < spos; ss += 2) { sarr.push(parseInt(emOffset * fx.start[ss])); }
                for (var es = 1; es < epos; es += 2) { earr.push(parseInt(emOffset * fx.end[es])); }
                fx.elem.style.clip = 'rect(' +
                    parseInt((fx.pos * (earr[0] - sarr[0])) + sarr[0]) + 'px ' +
                    parseInt((fx.pos * (earr[1] - sarr[1])) + sarr[1]) + 'px ' +
                    parseInt((fx.pos * (earr[2] - sarr[2])) + sarr[2]) + 'px ' +
                    parseInt((fx.pos * (earr[3] - sarr[3])) + sarr[3]) + 'px)';
            }
        }
    })(jQuery);
    
    
    
    function hasVerticalScroll(){
        if ($(document).height() > $(window).height() ){
            return true;
        }
        return false;

    }

    function getScrollbarWidth() {
        var outer = document.createElement("div");
        outer.style.visibility = "hidden";
        outer.style.width = "100px";
        document.body.appendChild(outer);
    
        var widthNoScroll = outer.offsetWidth;
        // force scrollbars
        outer.style.overflow = "scroll";
    
        // add innerdiv
        var inner = document.createElement("div");
        inner.style.width = "100%";
        outer.appendChild(inner);        
    
        var widthWithScroll = inner.offsetWidth;
    
        // remove divs
        outer.parentNode.removeChild(outer);
    
        return widthNoScroll - widthWithScroll;
    }
    
    
    show_hide_filterbox = function(this_block , el){
        

        var is_visible_on_this_res = parseInt( $(el).css('line-height') );
        
        // console.log( this_block , el, is_visible_on_this_res  , $(el).css('line-height')  );
        
        //if( $(this).css('opacity') == 1 ){
        if( is_visible_on_this_res ){
            
            // "show" - if not visible
            if( $(this_block).css('display') == 'none' ){
                $(this_block).show().css('opacity' , 0);    
            }
            
            // already visible - wresize - dont animate
            else {
                
            }
            
            
            // $(window).trigger('resize');
            works_filter_height();
            
            $(this_block)
            //.fadeIn(function(){
            .animate({ 'opacity' : 1 } , function(){

                // mark as done
                $(this_block).addClass('animated');
                
                // run again
                $().animateWorkThumbs();
                
            });
            
            
            
        }
        // hidden on this resolution - skip
        else {
            
            // mark as done
            $(this_block)
            .hide()
            .css('opacity' , 1)
            .addClass('animated');
            
            // run again
            $().animateWorkThumbs();
            
        }
        
    }
    
    
    
    
    jQuery.fn.animateWorkThumbs = function(settings){
        
        var config = {
                w_resize : 0,
                fadein_speed: 250
        };
        

        // this = $(".work_thumb:not(.animated):first");
        // extend
        if (settings){$.extend(config, settings);}
        
        
        var $this = this;
        
        var blocks_list     = $(".work_thumb:not(.animated):first");
        //var blocks_list_all = $(".work_thumb:not(.animated)");
        //var blocks_all      = $(".work_thumb:visible");
        // if( config.w_resize ){ blocks_list = null; }
        
        //return this.each(function (){
        $(blocks_list).each(function (){
            

            
            // go block by block
            // $(homepage_block).each(function(){
            
            if(  config.w_resize == 0 ){
                
                
                    var this_block = this;
        
                    // get
                    var next_img        = $("img:not(.skip_img):first" , this_block);
                    
                    
                    // thumb
                    if( $(next_img).size() ){
                        
                        // preload image
            			$("<img />")
                        .attr( 'src' , $(next_img).attr('src') + '?' + Math.random() )
                        .attr( 'width', $(next_img).attr('width') )
                        .attr( 'height', $(next_img).attr('height') )
            			.load(function(){
            			 
                                // copy class
                                $(this).attr('class' , $("img", this_block).attr('class') );
        
                                // append img
                                $("img:first", this_block)
                                .after(this);
                                
                                // remove prev img
                                $("img:first", this_block).remove();
        
                                // show this block
                                /*
                                $(this_block)
                                .show();
                                */
                                
                                // window resize
                                // $(window).trigger('resize');
                                
                                $(this_block)
                                //.hide()
                                //.css('opacity' , 1)
                                //.fadeIn(function(){
                                .animate(  { 'opacity' : 1 } , config.fadein_speed , function(){
                                    
                                    // mark as done
                                    $(this_block).addClass('animated');
                                    
                                    // run again
                                    $().animateWorkThumbs();
                                    
                                });
                         
                        });
                        
                    }
                    
                    // filter box
                    else {
                        
                        // console.log(this);
                        
                        // visible on this resolution  - animate!
                        
                        // this.show_hide_filterbox(this_block , this);
                        show_hide_filterbox(this_block , this);
                        

        
        
                        
                    }
                    
                    
                // last?
                if( $(".work_thumb").size() == ($(".work_thumb.animated").size() + 1) ){
                    if( !$("body").hasClass('thouch_resize') ){
                        $("body").addClass('thouch_resize');
                        wresize();    
                    }
                    
                }

                                    
            }
            

                
            // });
            
            

            

                       
        });
        
        return $this;

        
    }
    
    jQuery.fn.animateHomepageBlocks = function(settings){
    

        var config = {
            //mask_direction : 'left',
            mask_direction : 'right',
            clip_anim_duration : 750,
            scrl_to_bottom : false
        };
        // extend
        if (settings){$.extend(config, settings);}
    

    
            // init mask direction
            var mask_direction      = config.mask_direction;
            var clip_anim_duration  = config.clip_anim_duration;
            
 
           // var homepage_block = $(".home-block.home-featured-work:not(.animated):first");
           var homepage_block = $(".home-block:not(.animated):first");
           // $(".home-block:not(.animated)").hide();

           
           // go block by block
           $(homepage_block).each(function(){

            
                var this_block = this;

                // home-featured-work ?
                if( 
                    (
                    $(this_block).hasClass('home-featured-work') 
                    ||
                    $(this_block).hasClass('home-latest-news') 
                    ||
                    $(this_block).hasClass('home-quotes') 
                    ||
                    $(this_block).hasClass('home-contact') 
                    

                    ||
                    $(this_block).hasClass('text-block')
                    ||
                    $(this_block).hasClass('home-wide-image')
                    ||
                    $(this_block).hasClass('home-images-cols')
                    )
                    /*
                    &&
                    !$(this_block).hasClass('hidden') 
                        */   
                     ){
                        
                        
                    if( !$(this_block).hasClass('hidden')  ){
                        
                        // add mask layer
                        if( $(".mask_layer" , this_block ).size() == 0 ){
                            $(this_block).prepend('<div class="mask_layer"></div>');
                        }
                    
                        // preloader
                        $(".loading").remove();
                        $(this_block).prepend('<div class="loading">');
                        $(this_block).css('opacity' , 1);
                        $(".loading").fadeIn();
    
                        
                        // get
                        //var next_img        = $("img:first" , this_block);
                        var next_img        = $("img:not(.skip_img):first" , this_block);
                        var clip_wrapper    = $(".clip_wrapper" , this_block);
                        var mask_layer      = $(".mask_layer" , this_block);
                        
                        
                        // console.log( next_img , $(next_img).size() );
       
                        // preload image
            			$("<img />")
                        .attr( 'src' , $(next_img).attr('src') + '?' + Math.random() )
                        .attr( 'width', $(next_img).attr('width') )
                        .attr( 'height', $(next_img).attr('height') )
            			.load(function(){
            			    
    
                            // remove preloader
                            $(".loading").remove();
            			
                            // copy class
                            $(this).attr('class' , $("img", this_block).attr('class') );
    
                            // append img
                            //$("img:first", this_block)
                            $(next_img)
                            .after(this);
                            
                            // remove prev img
                            //$("img:first", this_block).remove();
                            $(next_img).remove();
    
                            // show this block
                            // $(this_block).show();
                            $(this_block).css('opacity' , 1);
    
                            // trigger win resize
                            $(window).trigger('resize');
                            
    
                            
                            // this block height + width
                            var this_block_height = $(this_block).height();
                            var this_block_width  = $(this_block).width();
    
                            
    
                                
                                // news page on  <= 1024
                                if( ($(window).width() <= 1024)
                                    &&
                                    $(this_block).hasClass('home-latest-news') 
                                    &&
                                    (this_block_height == 0) ){
                                    
                                    var img_left_box_height     = $(".image-left" , this_block).outerHeight();
                                    var text_right_box_height   = $(".text-right" , this_block).outerHeight();
        
                                    var new_min_height          = img_left_box_height  + text_right_box_height;
                                    $(this_block).css('min-height' , new_min_height);
                                    
                                    this_block_height = $(this_block).height();      
                                    
                                    // auto margin top for text
                                    // $(".text-right" , this_block).css('margin-top' , img_left_box_height );
                                    
                                }
    
    
    
                            
                            // left or right side?
                            if( 'left' == mask_direction ){
                                $(mask_layer)
                                .css('left' , '0px');   
                            }
                            else if( 'right' == mask_direction ){
                                $(mask_layer)
                                .css('left' , 'auto')
                                .css('right' , '0px');                            
                            }
    
                            
        
                                // news hidden!
                                anim_speed = clip_anim_duration;
                                if( $(this_block).hasClass('hidden') ){
                                   
                                    $("body").addClass('can_load_next');
                                    anim_speed = 1; // skip
    
                                }
                            
                                
                                if( config.scrl_to_bottom ){
                                   
                                    $("html,body")
                                    .delay(100)
                                    .animate({ scrollTop: $(document).height() }, 'slow', function(){ 
                    
                                    });
                                    
                                    // wresize();
                                    
                                }
                            
                            $(mask_layer)
                            .animate({
                                'width': '0px'
                            }, anim_speed, "Power4.easeInOut", function(){
                                
                                
                                // mark as animated
                                $(this_block).addClass('animated');
                                              
                                // next
                                if( 'left' == mask_direction ){
                                    config.mask_direction = 'right';
                                }
                                else if( 'right' == mask_direction ){
                                    config.mask_direction = 'left';
                                }
                                
                                // start slideshow
                                // start_awards_slideshow();
                                if( $(".page-template-about-php").size() && $(this).closest('.awards-block').size() ){ start_awards_slideshow(); }
                                
                                if( $(".page-template-about-php").size() && $(this).closest('.black-quotes').size() ){ start_quotes_slideshow(); }

                                // goto next
                                $().animateHomepageBlocks({ 'mask_direction' : config.mask_direction });

                                
                            });                        
    
    
            
            			});	     
                                           
                    }
                    
                    // skip
                    else {
                        
                        // mark as animated
                        $(this_block).addClass('animated');
                
                        // goto next
                        $().animateHomepageBlocks({ 'mask_direction' : config.mask_direction });
                        
                    }
                    

                    
                }
                else if(  
                     $(this_block).hasClass('work-details-nav')
                     ||
                     $(this_block).hasClass('home-latest-news-nav')
                     
                ){
                    
                    $(this_block).animate({'opacity' : 1});
                    
                }
                
                

            
           });

    
    }
    
     jQuery.fn.croppedImgAlignToMiddle = function(settings){
        
        var config = {
            
        };
        
        // extend
        if (settings){$.extend(config, settings);}
      
        
        return this.each(function(){
            
            var this_img        = $(this);
            var parent_cont     = $(this).parent();
    

            
            var img_parent_cont_width    = $(parent_cont).outerWidth();
            var img_parent_cont_height   = $(parent_cont).outerHeight();
           
            var this_img_width           = $(this_img).outerWidth();   
            var this_img_height          = $(this_img).outerHeight();
            

            
            // img = display:none
            if( (this_img_width == 0)
                    &&
                (this_img_height == 0)
                
                ||
                (this_img_height == 0)
               ){
                
     
                
                    // .mobile_gallery_slideshow_wrapper
                    if( $(this_img).closest('.mobile_gallery_slideshow').size()  ){
                       
                        this_img_wrapper = $(this_img).closest('.mobile_gallery_slideshow');
                        
                        var visible_img  = $("li.active img" , this_img_wrapper);

                        var this_img_width           = $(visible_img).outerWidth();   
                        var this_img_height          = $(visible_img).outerHeight();
        

                        
                    }
                
               }
    
            
            // hoz align
            var thig_img_new_left   = (img_parent_cont_width - this_img_width) / 2;
            
            
            $(this_img).css('right', 'auto').css('left' , thig_img_new_left );

            // vertical align
            var img_new_top      = ( img_parent_cont_height - this_img_height ) / 2 ; 
            $(this_img).css('top' , img_new_top );
            
            // console.log( parent_cont  ,img_parent_cont_width , img_parent_cont_height , thig_img_new_left , img_new_top , this_img_width , this_img_height );
            
            
        });
        
     };
    
     jQuery.fn.cropNewsImage = function(settings){
      
        
        var config = {
            
        };
        
        // extend
        if (settings){$.extend(config, settings);}
      
        
        return this.each(function(){
           
            // this
            this_img = this;
            
            // init
            var img_parent_cont          = $(this_img).closest('.image-left');
            var img_parent_cont_width    = $(img_parent_cont).outerWidth();
            var img_parent_cont_height   = $(img_parent_cont).outerHeight();
           
            var img_box_height           = $(img_parent_cont).outerHeight();
            var this_img_height          = $(this_img).outerHeight();
           
            // lock cont to 600px height
            // $(img_parent_cont).css('height' , featured_work_image_crop_height);
        
            // img - position to center
            // $(this_img).addClass('fixed');
            
            // align image to middle - horizontal (vertical = 100% fill)
            var this_img_width      = $(this_img).outerWidth();
            if( !this_img_width ){ this_img_width = $(this_img).attr('width'); }
            //if( ($(window).width() <= 1024) && (!this_img_width ) ){ this_img_width = $(window).width(); }           
            var thig_img_new_left   = img_parent_cont_width - this_img_width;

            // lower res
            if( $(window).width() <= 1024 ){ thig_img_new_left = thig_img_new_left / 2; }
            
            // console.log(this_img , img_parent_cont_width  , this_img_width , thig_img_new_left ) ;
            

            
            $(this_img).css('left' , thig_img_new_left );
            $(this_img).css('right' , 'auto');
            
   
            
            
            // vertical align
            var img_new_top      = ( img_box_height - this_img_height ) / 2 ; 
            $(this_img).css('top' , img_new_top );
            
       
       });
        
     }
    
     jQuery.fn.cropFeaturedImage = function(settings){
      
        
        var config = {
            
        };
        
        // extend
        if (settings){$.extend(config, settings);}
      
        
        return this.each(function(){
           
            // this
            this_img = this;

            
            // init
            var img_parent_cont          = $(this_img).closest('.home-featured-work');
            var img_parent_cont_width    = $(img_parent_cont).outerWidth();
            var img_parent_cont_height   = $(img_parent_cont).outerHeight();
            
            // news
            if( !img_parent_cont_width ){
                if( $(this_img).closest('.home-latest-news .image-left').size() ){
                    img_parent_cont_news     = $(this_img).closest('.home-latest-news .image-left');
                    img_parent_cont_width    = $(img_parent_cont_news).outerWidth();
                    img_parent_cont_height   = $(img_parent_cont_news).outerHeight();                    
                }
            }
            
            // mobile slideshow
            if( !img_parent_cont_width ){
                if( $(this_img).closest('.mobile_gallery_slideshow').size() ){
                    img_parent_cont_mm       = $(this_img).closest('.mobile_gallery_slideshow');
                    img_parent_cont_width    = $(img_parent_cont_mm).outerWidth();
                    img_parent_cont_height   = $(img_parent_cont_mm).outerHeight();   
                }
            }
            


            
   
  
            
           //  console.log(this, img_parent_cont_height);
           
            // lock cont to 600px height
            $(img_parent_cont).css('height' , featured_work_image_crop_height);
        
            // img - position to center
            $(this_img).addClass('fixed');
            
            // align image to middle - horizontal (vertical = 100% fill)
            var this_img_width      = $(this_img).outerWidth();
            if( this_img_width == 0 ){
                if( $(this).parent().css('display') == 'none' ){
                    $(this).parent().show();
                    this_img_width = $(this_img).outerWidth();
                    $(this).parent().hide();
                }                 
            }
            var thig_img_new_left   = img_parent_cont_width - this_img_width;
            
            // center
            thig_img_new_left = thig_img_new_left / 2;
            
            // console.log( this , img_parent_cont_width  , this_img_width );
            //$(this_img).css('left' , 0 );
            //$(this_img).css('margin-left' , 0 );
            
 
            
            if( $(this_img).css('position') == 'absolute' ){
                $(this_img).css('left' , thig_img_new_left );    
                

                
                if( $(this_img).closest('.mobile_gallery_slideshow').size() ){
                    //console.log( this_img , thig_img_new_left );
                    $(this_img).css('left' , 0 );
                    $(this_img).css('margin-left' , thig_img_new_left );
                }
            }
            else {
                $(this_img).css('margin-left' , thig_img_new_left );
            }
            
   
       
       });
        
     }

    function wprlx(){
     
        //var current_scrl_top    = $("body").scrollTop();
        var current_scrl_top    = $(window).scrollTop();
        
        // console.log($("body").scrollTop() , $(window).scrollTop());
        
        // quotes prlx img
        $(".site .home-quotes ul.quotes li .img_wrapper img").each(function(){
           
                
            var this_img    = this;
            
            var parent_box  = $(this_img).closest('.home-quotes');
           
            // mobile
            if( $("aside.main").css('display') == 'none' ){
                
                var new_left    = ( $(parent_box).outerWidth() - $(this_img).outerWidth() ) / 2;
                var new_top     = ( $(parent_box).outerHeight() - $(this_img).outerHeight() ) / 2;

                
                $(this_img).css('margin-left' , new_left );
                $(this_img).css('margin-top' , new_top );     
                
            }
            // only on >1024px
            else {

                
                var new_left    = ( $(parent_box).outerWidth() - $(this_img).outerWidth() ) / 2;
                var new_top     = ( $(parent_box).outerHeight() - $(this_img).outerHeight() ) / 2;
                new_top         = new_top + (current_scrl_top/10);
                
                var q_box       = $(".site .home-quotes");
                var q_offset    = $(q_box).offset();
                new_top         = current_scrl_top - q_offset.top;
                new_top         = new_top / 5;
                
                // console.log( new_top );
                
                // console.log(current_scrl_top , new_top);
                // if( new_top > 0 ){ new_top = 0; }
                
                $(this_img).css('margin-left' , new_left );
                $(this_img).css('margin-top' , new_top );                
                
            }
           

            
        });
        
        
        // news footer loader - show next (1)
        
        /*
        if( $("body").hasClass('can_load_next') ){
            var news_nav    = $(".home-latest-news-nav");
            var nav_height  = $(news_nav).outerHeight();
            var user_scrl   = $(document).height() - $(window).height() - 1;// (nav_height );
            if( current_scrl_top && (current_scrl_top > user_scrl ) ){
                
                // load next news
                var next_news = $(".home-latest-news.hidden:first");
                
                if( $(next_news).size() == 0 ){
                    $(".site .home-latest-news-nav .preloader").css('opacity', 0);
                }
                else {
                    
                    // reset class, reset mask layer
                    $(next_news).animate({},
                    1500, function(){
                       
                        $(next_news).removeClass('animated hidden');
                        $(".mask_layer" , next_news).css('width' , '100%');
                        
                        // console.log( next_news );
                        $().animateHomepageBlocks();                      
                        
                    });
                 
                    
                }
                
    
                    
            }            
        }
        */

        
        
        
    }

    // init
    var featured_work_image_crop_height = 600;
    var menu_animated                   = 0;
    /*
    var showFilter = $().animateWorkThumbs({'w_resize' : 1});
    console.log( showFilter , showFilter.show_hide_filterbox );*/
    function wresize(){
        

        // mac/ff
        $(".mac_ff .work_thumb").each(function(){
        //$(".work_thumb").each(function(){
            
             var this_thumb     = this;
             var main_menu      = $("aside.main");
             var mobile_menu    = $(".mobile_menu");
             var thumb_cont     = $(".work-cont");
             var cont_width     = $(thumb_cont).outerWidth() - parseInt( $(thumb_cont).css('padding-left') );
             
             // console.log( $(thumb_cont).css('padding-left') , cont_width );  
             var thumb_width    = 0;
             
            // >= 1280 , 33%
            var menu_width      =  parseInt( $(main_menu).width(), 10 );
            if( menu_width == 240 ){
                thumb_width = Math.ceil(cont_width / 3);
                if( (thumb_width * 3) > cont_width ){
                    thumb_width = thumb_width -1;
                }                
            }

            
            // 1025-1280 , 50%
            else if( (menu_width == 180) || $(mobile_menu).css('display') == 'block' ){
                thumb_width = Math.ceil(cont_width / 2);
                if( (thumb_width * 2) > cont_width ){
                    thumb_width = thumb_width -1;
                }   
            }
            
            // <=1024 , 33%
            
            // <=800 , 33%
            
            
            $(this_thumb).width( thumb_width );
            //console.log( thumb_width, this.getBoundingClientRect().width  );    
        });
        
     
        // var showFilter = $().animateWorkThumbs();;
        //console.log(showFilter);

        // get 
        var current_window_width    = $(window).width();
        var current_window_height   = $(window).height();
        

        
        // .site .home-featured-work img.panel-img + contact box
        var featured_work_image     = $(".site .home-featured-work img.panel-img");
        //var featured_work_image     = $(".site .home-featured-work.animated img.panel-img");
        
        // .site .home-latest-news .text-right
        var latest_news_text_box    = $(".site .home-latest-news .text-right , .site .text-block .left");
        
        // .site .home-contact
        var contact_us_box          = $(".site .home-contact");
        
        // 1025 - 1680+
        
        if( current_window_width >= 1025 ){


            // .site .home-featured-work img.panel-img
            $(featured_work_image).each(function(){
               

                var this_img                 = $(this);


                var img_parent_cont          = $(this_img).closest('.home-featured-work');
                
                //$(".clip_wrapper" , img_parent_cont).css('position', 'inherit');
                if( $(this_img).outerHeight() ){
                    //$(img_parent_cont).css('min-height' , $(this_img).outerHeight() );
                    $(img_parent_cont).css('height' , $(this_img).outerHeight() );
                }
                
                var img_parent_cont_width    = $(img_parent_cont).outerWidth();
                var img_parent_cont_height   = $(img_parent_cont).outerHeight();



                // remove cont fixed height (from before)
                $(img_parent_cont).css('height' , 'auto');
                
                // restore img auto resize
                $(this_img).removeClass('fixed');
               
               // resize - width: 100%, height auto, max width
               if( $(img_parent_cont).outerHeight() > featured_work_image_crop_height ){
                
                    // auto resize (from CSS)
                 
               }
               
               // crop inside cont
               else {
                
                    $(this_img).cropFeaturedImage();
                    
                
               }
               
               // revert
               // $(".clip_wrapper" , img_parent_cont).css('position', 'absolute');
               

                
            });
            
            

            
            
            // contact_us_box
            $(contact_us_box).each(function(){
                
                // this
                var this_contact_box    = $(this);
                
                // set img width
                var this_box_width      = $(this_contact_box).outerWidth();
                $('img' , this_contact_box).width(this_box_width);
                
                // get img height
                var this_box_img_height = $('img' , this_contact_box).outerHeight();
 
                // calc contact box height
                // $(this_contact_box).css('height', this_box_img_height);
                
            });
            

            
            
            
        }
        
        // 701 - 1024
        else if( current_window_width <= 1024
                    &&
                 current_window_width > 700   
                ){
                    
                // .site .home-featured-work img.panel-img
                $(featured_work_image).each(function(){
                    
                    var this_img = this;
                    
                    // $(".home-featured-work").height('auto');
                    
                    // crop featured image
                    $(this_img).cropFeaturedImage();
                    
                    
                });

                
                // .site .home-latest-news .image-left img
                $(".site .home-latest-news .image-left img").cropNewsImage();
                
                
                // about page , contact page 
                // 700 - 1024 - crop images , align to middle
                $(".site .text-block .right img").croppedImgAlignToMiddle();
                
                

                
                
                
        }
        
        // 361 - 700
        else if( current_window_width <= 700
                    /*&&
                 current_window_width > 360*/
                ){
                    
                // .site .home-featured-work img.panel-img
                $(featured_work_image).each(function(){
                    
                    var this_img = this;
                    
                    // $(".home-featured-work").height('auto');
                    
                    // crop featured image
                    $(this_img).cropFeaturedImage();
                    
                    
                });
                
                // home pagest news
                //$(".home .home-latest-news .image-left img").each(function(){
                $(".home-latest-news .image-left img , ul.mobile_gallery_slideshow li img").each(function(){
                    
                    var this_img = this;
                    
                    // < 540px width
                    if( ( $(this_img).outerHeight() == 400 ) 
                        ||
                        ( $(this_img).outerHeight() == 300 /* news */ ) 
                        ){
                        
                    
                        // crop featured image
                        $(this_img).cropFeaturedImage();
                        
                    }
                    else {
                                
                        // reset news img margin
                        $(".site .home-latest-news .image-left img , ul.mobile_gallery_slideshow li img").css('margin-left' , 0);
                        
                    }
                    


                    
                    
                });
                
                
                // about page , contact page 
                // 360 - 700 - resize images
                
                
                
                    
        }
        
        // < 360
        else if( current_window_width <= 360 ){
            
        }
        
        
        
        
        // align ".site .home-featured-work .info-box" to vertical middle
        var info_box = $(".site .home-featured-work .info-box");
        $(info_box).each(function(){
           
           // this
           var this_box             = $(this);
           
           // parent div
           var info_box_cont        = $(this).closest('.home-featured-work');
           var info_box_cont_height = $(info_box_cont).outerHeight();
           
           var this_box_height      = $(this_box).outerHeight();
           
           // align
           var top_margin           = (info_box_cont_height - this_box_height ) / 2;
           $(this_box).css('top', top_margin);

            
        });
        
        
        // desktop view
        if( current_window_width >= 1025 ){
            
            // .site .home-latest-news .text-right
            $(latest_news_text_box).each(function(){
               
               // this
               var this_text_box    = $(this);
               
                
               // get this text box height
               var text_box_height  = $(this_text_box).outerHeight();
               var text_box_width   = $(this_text_box).outerWidth();

               // homepage news box
               //if( !$(this).parent().hasClass('project-desc') ){
               //if( !$(this).parent().hasClass('text-block') ){
               if( !$(this).closest('.text-block').size() ){

                    

                   // set parent cont height
                   var text_box_cont    = $(this).closest('.home-latest-news');
                   var img_box_cont     = $('.image-left' , text_box_cont );
                   if( text_box_height ){
                        $(text_box_cont).height( text_box_height );
                   }
                   
                   $(img_box_cont).height( text_box_height );
                   
                   // align to center of IMAGE box (.image-left) - text box width!
                   var this_img         = $('img' , img_box_cont);
                   var this_img_width   = $(this_img).outerWidth();
                   var this_img_height  = $(this_img).outerHeight();
                   
                   var img_box_width    = $(img_box_cont).outerWidth();
                   var img_box_height   = $(img_box_cont).outerHeight();
        
                   var img_new_left     = ( (img_box_width - text_box_width) - this_img_width ) / 2 ;
                   var img_new_top      = ( img_box_height - this_img_height ) / 2 ; 
                   

                   
                   // horizontal align
                   if( !$(text_box_cont).hasClass('alt') ){
                    
                        // img in left box
                        $(this_img).css('left' , img_new_left ); 
                   }
                   else {
                    
                        // img in right box
                        $(this_img).css('left', 'auto');
                        $(this_img).css('right' , img_new_left );
                   }
                   
                   
                   // vertical align
                   $(this_img).css('top' , img_new_top );
                
               }
               
               // project desc box
               else {
                
                   // set parent cont height
                   var text_box_cont    = $(this).closest('.text-block');
                   
                   
                   var img_box_cont     = $('.right' , text_box_cont );
                   var this_img         = $('img' , img_box_cont);
                   
                   
                   if( !$(this_img).closest('.box_top').size() ){
                        
                        /*
                           if( $(this_img).closest('.box_top').size() ){ img_box_cont = $(this_img).closest('.box_top'); }
                           if( $(this_img).closest('.box_bottom').size() ){ img_box_cont = $(this_img).closest('.box_bottom');  }
                       */
    
                       
                       $(text_box_cont).height( text_box_height );
                       $(img_box_cont).height( text_box_height );
                    /*
                            if( $(this_img).closest('.box_top').size() ){ $(img_box_cont).height( text_box_height / 2 ); }
                            if( $(this_img).closest('.box_bottom').size() ){ $(img_box_cont).height( Math.ceil(text_box_height / 2) );  }
                       */
                       // align to center of IMAGE box (.image-left) - text box width!
                       /*
                       if( $(this_img).closest('.box_top').size() ){ this_img         = $('img' , img_box_cont); }
                       if( $(this_img).closest('.box_bottom').size() ){ this_img         = $('img' , img_box_cont); }
                       */
                       
                       
                       var this_img_width   = $(this_img).outerWidth();
                       var this_img_height  = $(this_img).outerHeight();
                       
                       // console.log(this_img , this_img_width);
                       
                       
                       
                       var img_box_width    = $(img_box_cont).outerWidth();
                       var img_box_height   = $(img_box_cont).outerHeight();
            
                       var img_new_left     = ( (img_box_width - text_box_width) - this_img_width ) / 2 ;
                       var img_new_top      = ( img_box_height - this_img_height ) / 2 ; 
                       
                       // console.log(img_new_left);
        
                       
                        // horizontal align
                        // img in left box
                        if( $(text_box_cont).hasClass('alt')
                            ||
                            $(text_box_cont).hasClass('project-desc')
                             ){
                            $(this_img).css('left' , img_new_left );    
                        }
                        
                        // on right
                        else {
                            
                            $(this_img).css('left' , 'auto' );  
                            $(this_img).css('right' , img_new_left );  
                            
                        }
                         
                       // vertical align
                       $(this_img).css('top' , img_new_top );
                       
                    
                   }
                   else {
                    
                       var text_box_cont    = $(".box_top , .box_bottom");
                       
                       $(text_box_cont).each(function(){
                        
                           var current_box_cont = this;
                               img_box_cont = current_box_cont;
                           var this_img         = $('img' , img_box_cont);
                           
                       
                           
                            /*
                           if( $(this_img).closest('.box_top').size() ){ img_box_cont = $(this_img).closest('.box_top'); }
                           if( $(this_img).closest('.box_bottom').size() ){ img_box_cont = $(this_img).closest('.box_bottom');  }
                           */
                           
        
        // console.log($(this_img).closest('.box_top').size() , $(this_img).closest('.box_bottom').size() );
                           
                           // $(text_box_cont).height( text_box_height );
                           $(img_box_cont).height( text_box_height );
                        /*
                                if( $(this_img).closest('.box_top').size() ){ $(img_box_cont).height( text_box_height / 2 ); }
                                if( $(this_img).closest('.box_bottom').size() ){ $(img_box_cont).height( Math.ceil(text_box_height / 2) );  }
                           */
                           
                           $(img_box_cont).height( Math.ceil(text_box_height / 2) - 1 );
                           
                           
                           
                           // align to center of IMAGE box (.image-left) - text box width!
                           /*
                           if( $(this_img).closest('.box_top').size() ){ this_img         = $('img' , img_box_cont); }
                           if( $(this_img).closest('.box_bottom').size() ){ this_img         = $('img' , img_box_cont); }
                           */
                           
                           
                           var this_img_width   = $(this_img).outerWidth();
                           var this_img_height  = $(this_img).outerHeight();
                               
                           
                           var img_box_width    = $(img_box_cont).outerWidth();
                           var img_box_height   = $(img_box_cont).outerHeight();
                
                           var img_new_left     = ( (img_box_width - text_box_width) - this_img_width ) / 2 ;
                           var img_new_top      = ( img_box_height - this_img_height ) / 2 ; 
                           

                            
                           if( ($(img_box_cont).height() * 2) < Math.ceil(text_box_height )  ){
                                $(".box_bottom").height( $(img_box_cont).height() + 1 );
                           }
            
                           $(this_img).css('left' , img_new_left ); 
                           
                            // horizontal align
                            // img in left box
                            /*
                            if( $(text_box_cont).hasClass('alt')
                                ||
                                $(text_box_cont).hasClass('project-desc')
                                 ){
                                $(this_img).css('left' , img_new_left );    
                            }
                            
                            // on right
                            else {
                                
                                $(this_img).css('left' , 'auto' );  
                                $(this_img).css('right' , img_new_left );  
                                
                            }
                            */
                             
                           // vertical align
                           $(this_img).css('top' , img_new_top );                             
                        
                       });
                       
                       
                   
                    
                   }

                   

                
               }
               
               

               
                
            });    
            

                    
        }
        
        // min height on small res
        $(".home-latest-news.animated").each(function(){
            
            this_block = this;
            

            if( $(window).width() <= 1024 ){
                
                var img_left_box_height     = $(".image-left" , this_block).outerHeight();
                var text_right_box_height   = $(".text-right" , this_block).outerHeight();
                
                var new_min_height          = img_left_box_height  + text_right_box_height;
                $(this_block).css('min-height' , new_min_height);
                    
                // auto margin top for text
                // $(".text-right" , this_block).css('margin-top' , img_left_box_height );

                
            }
            else {
                
                // remove for wide screens
                $(this_block).css('min-height' , 0);
                $(".text-right" , this_block).css('margin-top' , 0 );
                
            }
            
        });


        // .site .home-quotes ul.quotes li .img_wrapper img - align to middle + parallex
        wprlx();
        


               
       // single project page - images in 2 cols - height: 100%, width auto, align to center (top)
       $(".home-images-cols img").each(function(){
        
            var this_img    = this;
            
            var parent_box  = $(this_img).parent();
            
            var new_left    = ( $(parent_box).outerWidth() - $(this_img).outerWidth() ) / 2;
            
            $(this_img).css('margin-left' , new_left );
            
        
       });
       

        
        
        
        // align ".site .home-contact .wrapper" to vertical middle
        $(contact_us_box).each(function(){
            
            var this_contact_box        = this;
            var this_text_wrapper       =  $(".wrapper", this_contact_box );
            
            var this_contact_box_height = $(this_contact_box).outerHeight();
            var this_wrapper_height     = $(this_text_wrapper).outerHeight();
            
            var new_wrapper_top         = (this_contact_box_height - this_wrapper_height) / 2;
            $(this_text_wrapper).css('top' , new_wrapper_top );
            
        });
        
        
        
        // works - archive - filter height
        works_filter_height();


     
        // filter box
        if( menu_animated ){
            var work_filters = $('.with_filter');
            $(work_filters).each(function(){
                show_hide_filterbox( this , this );
            });
             
        }
        
        
        
        // work_thumb - put height on a (for hover)
        /*
        $(".work_thumb.animated a")
        .each(function(){
           
           var this_a   = $(this);
           var a_cont   = $(this_a).closest('.work_thumb');
           var a_img    = $("img" , a_cont);

           // this a + cont also
           $(this_a).width( $(a_img).outerWidth() );
           $(this_a).height( $(a_img).outerHeight() );

            
        });
        */
        
        // new zindex - hover over prevs
        //$(".work_thumb.animated a:not(.can_hover)")
        $(".work_thumb.animated:not(.can_hover)")
        .bind('mouseenter', function(){
            
            var this_a = $(this);
            

            max_zindex = new Date().getTime();
            max_zindex = max_zindex.toString(); 
            max_zindex = max_zindex.slice(-5);

            
            $(".hover-box").css('z-index' , max_zindex);
            // $(".hover-box").css('z-index' , max_zindex);
                        
            $(this_a).addClass('can_hover');
            
            
        });
        

        
        
        
        
        // .animated .clip_wrapper - resize clip to full
        // $(".animated .clip_wrapper").css('clip', 'rect(0px, 2000px, 5000px, 0px)' );
        
        
        // hide left menu text
        var height_limit  = 680;
        var height_limit2 = 660;
        var logo_limit    = 94;
        var site_logo     = $("aside.main .logo-cont a").height();
        if( 
            
            ( site_logo != logo_limit && ($(window).height() < height_limit ) )
            ||
            ( site_logo == logo_limit && ($(window).height() < height_limit2 ) )

        
        ){
            
            
            //$("aside.main .bottom-cont .menu-social-menu-container , aside.main .bottom-cont .copy").hide();
            //$("aside.main .bottom-cont .copy").hide();
            
            $("body").addClass('hide_footer_text');
        }
        else {
            //$("aside.main .bottom-cont .menu-social-menu-container , aside.main .bottom-cont .copy").show();
            //$("aside.main .bottom-cont .copy").show();
            $("body").removeClass('hide_footer_text');
        }
        var height_limit_icons = 610;
        var height_limit_icons2 = 590;
        if( 
            
        
            ( site_logo != logo_limit && ($(window).height() < height_limit_icons ) )
            ||
            ( site_logo == logo_limit && ($(window).height() < height_limit_icons2 ) )
            
  
            
            ){
            //$("aside.main .bottom-cont .menu-social-menu-container , aside.main .bottom-cont .copy").hide();
            //$("aside.main .bottom-cont .copy").hide();
            $("body").addClass('hide_footer_icons');
        }
        else {
            //$("aside.main .bottom-cont .menu-social-menu-container , aside.main .bottom-cont .copy").show();
            //$("aside.main .bottom-cont .copy").show();
            $("body").removeClass('hide_footer_icons');
        }
        
        
        // mobile menu opened - from mobile to desktop
        //if( current_window_width >= 1025 ){
        /*
        if( $(".mobile_menu").css('display') != 'block' ){
            if( parseInt($("aside.mobile").css('right')) == '0' ){
                $(".site").css('margin-left' , 0);    
            }
                
        } 
        else {
            if( parseInt($("aside.mobile").css('right')) == '0' ){
                $(".site").css('margin-left' , -200);    
            }
        }
        */
        
        
        
        // align quotes on homepage to v. middle
        var quotes_text = $(".site .home-quotes ul.quotes li .text_wrapper .span_w");
        $(quotes_text).each(function(){
           
            var this_t       = this;
            var this_height  = $(this_t).outerHeight();
            var this_parent  = $(this_t).closest('.text_wrapper');
            var this_p_height= $(this_parent).outerHeight();
            var this_li      = $(this_t).closest('li');
            
            // hidden!
            if( !this_height ){
            
                // calc first
                $(this_li).show();
                this_p_height= $(this_parent).outerHeight();
                this_height  = $(this_t).outerHeight();
                $(this_li).hide();
            
            }
                       
            // current active
            var new_margin  = (this_p_height  - this_height) / 2;
            $(this_t).css('margin-top' , new_margin );
            



            
        });
        
        // .site .work_thumb a span.overlay
        var overlay_divs = $(".site .work_thumb a span.overlay");
        $(overlay_divs).each(function(){
           
            var this_div        = this;
            var this_wrapper    = $(this_div).closest('.wrapper');
            
            $(this_div).css('bottom'  , $(this_wrapper).outerHeight() * (-1) );
            
            
        });
        
        
        // min height for white background
        $(".site.work-cont").css('min-height' , $(window).height() );
        
        
        // opened mobile menu - hide on desktop
        // console.log( $(".site").css('margin-left') );
        /*
        if( $("aside.main").css('display') == 'block'
             &&
            $("aside.mobile").css('display') == 'block'
             ){
                
                // hide mobile menu
                $("aside.mobile").css('display', 'none');
                $(".mobile_menu").css('margin-left' , 0);
                
                
             }
        // restore mobile menu
        if( $(".site").css('margin-left') == '-200px' ){
                $("aside.mobile").css('display', 'block');
                $(".mobile_menu").css('margin-left' , -200);
        }
        */
        
        
        // awards - text slider - height
        var awards_ss_list = $(".site .award_links ul , .site .quote-block ul");
        $(awards_ss_list).each(function(){
           
           var this_list        = this;
           var closest_wrapper  = $(this_list).closest('.left');
           
           //if( $(closest_wrapper).css('position') == 'static' ){
            
               $(this_list).attr('data-min-height' , 0);
               $(this_list).css('min-height' , 0);
               
               //$("li.active" , this_list ).each(function(){
               $("li" , this_list ).each(function(){
                
                    var this_li         = this;
                    var this_li_height  = 0;
                    
                    // has active class?
                    if( !$(this_li).hasClass('active') ){ $(this_li).show(); }

                    // awards
                    if( $("a" , this_li).size() ){
                        $("a" , this_li).each(function(){
                           
                            this_li_height = this_li_height + $(this).outerHeight();
                            
                        });                        
                    }
                    
                    // quotes
                    if( $(".quote-block" , this_li).size() ){
                        $(".quote-block" , this_li).each(function(){
                           
                            this_li_height = this_li_height + $(this).outerHeight();
                            
                        });                        
                    }

               
                    // console.log(this_li , this_li_height);
                    // console.log( parseInt($(this_list).css('min-height')) , this_li_height );
                    this_li_height = this_li_height + 40;
                    //if( this_li_height > parseInt($(this_list).css('min-height')) ){
                    if( this_li_height > parseInt($(this_list).attr('data-min-height')) ){

                        $(this_list).attr('data-min-height' , this_li_height);
                        $(this_list).css('min-height' , this_li_height);
                        
                    }
                    
                    
                    
                    // has active class?
                    if( !$(this_li).hasClass('active') ){ $(this_li).hide(); }
                    
                
               });        
                   
           //}

        });
        

        // work thubms - 1px diff on 33% width
        var blocks_list_all = $(".work_thumb:not(.animated)");
        var blocks_all      = $(".work_thumb:visible");
        if( isTouchDevice 
            &&
            ($(window).width() > 800)
            &&
            ($(window).width() < 1025)
            ){
            
            if( $(blocks_list_all).size()  == 1 ){
                
                var all_blocks_width = $(blocks_all).eq(0).outerWidth() +  $(blocks_all).eq(1).outerWidth() +  $(blocks_all).eq(2).outerWidth();
                var width            = $(window).width();

                if( width > all_blocks_width ){
                    var width_diff = width - all_blocks_width;
                    
                    $(blocks_all).each(function(index){
                        if( ((index + 1) % 3) == 0 ){
                            $(blocks_all).eq(index).width( $(blocks_all).eq(index).outerWidth() + width_diff  ).addClass('manual_width');
                        }
                    });
                    

                }
                else {
                    $(blocks_all).width('auto');
                }
                

            }    
                        
            
        }
        else if( isTouchDevice 
            &&
            ($(window).width() <= 800)
            ){

            $(".manual_width").removeAttr('style').css('opacity' , 1).removeClass('manual_width');    
                
            // $(".manual_width").width('auto');
        }
        
        
        // single work page - same height for desc boxes
        var desc_box = $(".single-work .site .text-block.alt .left .desc_box");
        $(desc_box).each(function(){
           
            var this_box        = this;
            var this_cont       = $(this_box).parent();
            
            var left_box        = $(".desc_box" , this_cont);
            var right_box       = $(".client_box" , this_cont);
            
            $(left_box).css('padding-bottom', 0);
            $(right_box).css('padding-bottom', 0);
            
            var left_box_height = $(left_box).outerHeight();
            var right_box_height= $(right_box).outerHeight();
            
            // console.log( left_box_height , right_box_height );
            
            // table
            if( $(left_box).css('float') == 'left' ){
                
                if( left_box_height < right_box_height ){
                    $(left_box).css('padding-bottom', right_box_height - left_box_height);
                }
                else if( left_box_height > right_box_height ){
                    $(right_box).css('padding-bottom', left_box_height - right_box_height);
                }
                
            }
            // desktop
            else {
                $(left_box).css('padding-bottom', 0);
                $(right_box).css('padding-bottom', 0);
            }
            
            
        });
        
        
        // homepage contact slideshow list height
        $(".site .home-contact .img_wrapper ul.slider_quotes_list li.active").each(function(){
           
           var this_list = $(this).closest('.slider_quotes_list');
           
           $(this_list).height( $("img" , this).outerHeight() );
            
        });
        
        // resize mobile menu background is opened
        var mobile_menu = $("aside.mobile, #menu");
        if( $(".opened_mobile_menu").size() ){
            $(mobile_menu)
            .height('auto')
            .height( $(document).height() );            
        }

        // vimeo
        $(".vimeo_wrapper").each(function(){
           
            var this_cont = $(this).closest('.has_vimeo_player');
            var video_w   = $(".inner_wrapper", this);
            var cont_h    = $(this_cont).outerHeight();
            var this_h    = $(video_w).outerHeight();
            
            if( cont_h > this_h ){
                $(video_w).css('margin-top',  (cont_h-this_h) / 2 );
            }
            else {
                $(video_w).css('margin', 0);
            }
  
        });
        
        // vimeo iframe resize
        $(".vimeo_wrapper .inner_wrapper iframe").each(function(){
           var this_iframe  = $(this);
           var this_closest = $(this_iframe).closest('.video_cont');
           $(this_iframe).width( $(this_closest).outerWidth() ).height( $(this_closest).outerHeight() );
        });



                
    } // wresize end
    
    $(document).ready( function() {
    //$(window).ready( function() {
        
		// isTouchDevice
		if( isTouchDevice ){ $("body").addClass('isTouchDevice');  }
        
        // FF/Mac?
        var isMac = navigator.platform.toUpperCase().indexOf('MAC')>=0;
        var FF    = !(window.mozInnerScreenX == null);
        if( isMac && FF ){ $("body").addClass('mac_ff');  }
        
        // densiti limit
        // var density_limit_px = 0.99;
        var density_limit_px = 1;
        if( window.devicePixelRatio > density_limit_px ){
            var imgs_to_replace = $("[srcset]"); /* tmp just .award_logos */
            console.log(imgs_to_replace);
            $(imgs_to_replace).each(function(){
                var this_img    = this;
                var this_double = $(this_img).attr('srcset')
                    this_double = this_double.replace(" 2x",""); 
                if( this_double ){
                    $(this_img).attr('src' , this_double);
                }
            });
            
        } 
        
        // safari?
        if( navigator.userAgent.indexOf('Chrome') != -1 ){
            $("body").addClass('is_chrome');
        }
        if( navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1 && navigator.userAgent.indexOf('Android') == -1 ){
            $("body").addClass('is_safari');
        }
        
        // a.menu-trigger
        $("a.menu-trigger")
        .bind('click', function(){

            //var scrl_width      = getScrollbarWidth();
            var scrl_width      = 0;
            var mobile_menu     = $("aside.mobile");
            var site_elements   = $(".mobile_menu , .site");
            var site_el_main    = $("html");
            var move_margin     = 200;
            var menu_right      = 0;            
            

            var margin_left     = (-1) * move_margin;
            
            // show menu
            if( !$(this).hasClass('expanded') ){
                
                /*
                $(site_elements)
                .animate({
                   'margin-left' : margin_left
                });
                */
                $(site_elements)
                .addClass('opened_mobile_menu');

                
                $(mobile_menu)
                .height( $(document).height() );
                
                
                // html
                $(site_el_main)
                .addClass('opened_mobile_menu');
                /*.animate(0, function(){
                    $(this).addClass('opened_mobile_menu');    
                });*/
                
                
                /*
                $(mobile_menu)
                .show()
                .height( $(document).height() )
                .css('right' , (-1) * ( move_margin -scrl_width ) )
                .animate({
                   'right' : menu_right + scrl_width
                });
                */


                
                $(this).addClass('expanded');
                
            }
            
            // hide menu
            else {
                
                /*
                $(site_elements)
                .animate({
                   'margin-left' : 0 
                });
                */
                
                $(site_elements)
                .removeClass('opened_mobile_menu');
                
                // html
                $(site_el_main)
                .removeClass('opened_mobile_menu');
                /*.animate(500, function(){
                    $(this).removeClass('opened_mobile_menu');    
                });*/
            


                /*
                $(mobile_menu)
                .animate({
                   'right' : margin_left + scrl_width
                }, function(){
                    
                    $(this)
                    .hide()
                    .css('right' , margin_left);
                    
                });   
                */
   

                
                $(this).removeClass('expanded');
                
            }
            
            return false;
            
        });
        
        
        
       //  scroll
       //  if($.browser.firefox){ $("html,body").css('overflow-x', 'hidden'); } 
        // $(window).bind('scroll', function(){ console.log( $("body").scrollTop() ); });
        
        //$("body")
        $(window)
        .bind('scroll', wprlx )
        .trigger('scroll');
        
        // window resize
        $(window)
        .bind('resize', wresize )
        .trigger('resize');
        

        

        
        // window load - animations
        
        // homepage           
        var leftmenu_anim_speed = 750;
        if( $(window).width() <= 1024 ){ leftmenu_anim_speed = 1; menu_animated = 1; }
        if( $("body").hasClass('visited') ){ leftmenu_anim_speed = 0; menu_animated = 1; }
        if( $("body").hasClass('home')
            ||
            $("body").hasClass('page-template-news-php')
            ||
            $("body").hasClass('single-work')
            ||
            $("body").hasClass('page-template-contact-php')
            ||
            $("body").hasClass('page-template-about-php')
            
            ||
            $("body").hasClass('page-template-work-php')
            
             ){
        
            // left menu - only once
            var leftmenu            = $("aside.main");
            var leftmenu_width      = $(leftmenu).outerWidth();
            
            // delay on first load
            var delay_menu_load     = 0;
            var first_visit         = readCookie('dart_first_visit');
            if( !first_visit ){
                delay_menu_load     = 1000; // 1s
                createCookie('dart_first_visit','1',1);
            }

            
            // animate left menu
            $(leftmenu)
            .delay(delay_menu_load)
            .css('left' , "-" + leftmenu_width )
            .animate({
                'left' : 0
            } , leftmenu_anim_speed , "Power4.easeInOut", function(){

               // show .site
               $(".site").show();
               
               
               if( !$("body").hasClass('page-template-work-php') ){
                    
                   // hide all blocks inside
                   $().animateHomepageBlocks();
                
               }
               else {
                
                   
                   // hide all blocks inside
                   $().animateWorkThumbs();
                    
               }


               // can show works
               menu_animated = 1;
               

                
            });
             
            
        }

        
        
        // tweenmax anims
        $(".site .work_thumb")
        .bind('mouseenter', function(){
            
            var this_box = this;
            
            if( !$(this).hasClass('disabled') ){
                
                // a
                $(".hover-box",this)
                .stop(true, false)
                .animate({
                   'border-width' : '15px',
                   'margin' : '-15px 0px 0px -15px' 
                }, 250 , "Power4.easeInOut");
                
                
    
                
                // text overlay
                if( !$(this).hasClass('checked') ){ 
                    $("span.overlay" , this).css('bottom' , '-480px');
                    $(this).addClass('checked'); 
                }
                
                $("span.overlay" , this)
                .stop(true, false)
                // .css('bottom' , '-'+ ( $(this).outerHeight() - $("span.overlay" , this).outerHeight() ) +'px')
                .show()
                .animate({
                   'bottom': '0px'
                }, 400 , "Power4.easeInOut", function(){
                    
                    $(this_box).addClass('show_cursor');
                    
                });
                
                // color bar
                var color_overlay   = $("span.overlay" , this);
                var overlay_width   = $(color_overlay).outerWidth() - 40 - 40; /* padding right and left */
                var color_bar       = $("span.color-bar" , this);
                var color_bar_width = $(color_bar).outerWidth();
                color_bar_width = 500;
                
                // console.log(color_overlay , $(color_overlay).outerWidth(),  color_bar , color_bar_width );
                
                var left_margin = parseInt(overlay_width) / 4 * (-1);
   
                
                $(color_bar)
                .stop(true, false)
                //.delay(125)
                //.hide()
                .css('opacity' , 0)
                .width( overlay_width / 2 )
                .css('margin-left' , left_margin )
                .animate({
                    'opacity' : 1,
                    'margin-left' : '-' + (overlay_width / 2), 
                    'width': overlay_width
                }, 400 , "Power4.easeInOut");        
                      
                
            }
            

            
        })
        .bind('mouseleave', function(){
            
            $('.show_cursor').removeClass('show_cursor');
            
            if( !$(this).hasClass('disabled') ){
                
                $(".hover-box",this)
                .stop(true, false)
                .animate({
                   'border-width' : '0px',
                   'margin' : '0px 0px 0px 0px' 
                }, 250, "Power4.easeInOut" );
                
                
                // text overlay
                var overlay_wrapper = $('.wrapper' , this).outerHeight();

                $("span.overlay" , this)
                .stop(true, false)
                .animate({
                   //'bottom': '-'+ ( $(this).outerHeight() - $("span.overlay" , this).outerHeight() ) +'px'
                   'bottom' : overlay_wrapper * (-1)
                }, 400 , "Power4.easeInOut", function(){
                    $(this).hide();
                });
                
                // color bar
                var color_bar       = $("span.color-bar" , this);
                $(color_bar)
                .stop(true, false)
                .animate({
                   'width': 0,
                   'opacity' : 0 , 
                   'margin-left' : 0
                }, 250 , "Power4.easeInOut");     
                /*
                $("span.color-bar" , this)
                .stop(true, false)
                .animate({
                   'width': 0
                }, 500 , "Power4.easeInOut");     
                */           
                
            }
            

            
        });
        
        
        // homepage bottom contact box
        
        if( $(".home-contact").size() ){
            
            var hc_slideshow = function(){ start_homecontact_slideshow(); }
            var tmp0 = setTimeout( hc_slideshow , 1000 );
                
            
        }
        
        // about page - awards panel
        /*
        if( $(".page-template-about-php .award_links").size() ){
            
            var a_slideshow = function(){ start_awards_slideshow(); }
            var tmp1 = setTimeout( a_slideshow , 1000 );
                
            
        }
        */
        
        // about page - quotes panel
        /*
        if( $(".page-template-about-php .quote-block").size() ){
            
            var q_slideshow = function(){ start_quotes_slideshow(); }
            var tmp2 = setTimeout( q_slideshow , 6000 );
                
            
        }
        */
        


        // client quotes
        if( $(".site .home-quotes ul.quotes").size() ){

            var c_slideshow = function(){ start_client_quotes_slideshow(); }
            var tmp3 = setTimeout( c_slideshow , 3000 );
                
            
        }
        
        
        
        // checkbox skin
       // $(".filter input[type=radio], .filter input[type=checkbox]").uniform();

        // .hover-box click
        $(".hover-box").bind('click', function(){
            if( !$(this).closest('.work_thumb').hasClass('disabled') ){
                window.location.href = $("a" , $(this).closest('.work_thumb') ).attr('href');    
            }
            return false; 
        });
        
        // label
        /*
        $(".filter label").bind('click', function(){
           var closest_li = $(this).closest('li');
           console.log($('input' , closest_li).prop('checked') ); 
           if( !$('input' , closest_li).prop('checked') ){ $('input' , closest_li).prop('checked', true); }
           else { $('input' , closest_li).prop('checked', false); }
           $.uniform.update(); 
        });
        */
        
        
        
        $(".follow-us ul.menu a").each(function(){
           $(this).html('<span>'+$(this).html()+'</span>'); 
        });
        
        // a.site_btn
        $("a.site_btn").each(function(){
           if( $("span", this).size() == 0 ){ $(this).html('<span class="icon"></span><span class="text">' + $(this).html() + '</span>' ); } 
        });
        
        // a.site_btn
        $(".wpcf7 a.site_btn").bind('click', function(){ $(this).closest('form').submit(); return false; });
        
        
        // filter input change - apply to all!
        var white_box_speed = 250;
        $("input[data-preselected]").addClass('preselected');
        $(".filter input").bind('change', function(){
            
            var this_input  = this;
            var this_value  = $(this_input).val();
            var all_work    = false;
            if( $(this_input).hasClass('preselected') ){ all_work = true; }
            
            // propagate to other filters
            var this_filter = $(this).closest('.filter');
            var this_index  = $("input" , $(this_filter)).index( this );
            
            $(".filter input").prop('checked', false);
            $(".filter").each(function(){
                $("input" ,this).eq(this_index).prop('checked', true);
                $.uniform.update(); 
            });
            
            
            // show/hide thumbs
            if( all_work ){
                
                // show all
                $(".work_thumb .white-box").fadeOut(white_box_speed);
                $(".work_thumb").removeClass('disabled');
                
            }
            else {
                
                // show one category
                /*
                if( $("work_thumb.disabled").size() ){
                    
                }
                else {
                    
                }
                */
                
                if( $(".work_thumb.disabled .white-box").size() ){
                    var disabled_boxes = $(".work_thumb.disabled");
                    $(disabled_boxes).removeClass('disabled');
                    $(".white-box" , disabled_boxes).fadeOut(white_box_speed , function(){
                        $(".work_thumb:not(.with_filter):not(.has_term_" + this_value + ")" ).addClass('disabled');
                        $(".work_thumb:not(.with_filter):not(.has_term_" + this_value + ") .white-box").fadeIn(white_box_speed);                    
                    });                    
                }
                else {
                        $(".work_thumb:not(.with_filter):not(.has_term_" + this_value + ")" ).addClass('disabled');
                        $(".work_thumb:not(.with_filter):not(.has_term_" + this_value + ") .white-box").fadeIn(white_box_speed);   
                }
                
                /*
                $(".work_thumb.disabled .white-box").fadeOut();
                $(".work_thumb.disabled").removeClass('disabled');
                
                
                $(".work_thumb:not(.with_filter):not(.has_term_" + this_value + ")" ).addClass('disabled');
                $(".work_thumb:not(.with_filter):not(.has_term_" + this_value + ") .white-box").fadeIn();   
                */
                
                
            }
            
            

           
        });
        
        
        // back-to-top
        $(".back-to-top a").bind('click', function(){
            // console.log( $("html").scrollTop() , $("body").scrollTop() );
            /*if($.browser.safari) bodyelem = $("body");
            else bodyelem = $("html,body");*/
			//$("body,html,document").animate({scrollTop:0}, 'slow');
            //$("html,body").animate({ scrollTop: 0 }, 'slow');
            /*
            if($.browser.safari) 
                bodyelem = $("body");
            else 
                bodyelem = $("html,body");
            
            bodyelem.animate({scrollTop:0},{queue:false, duration:500, easing:"linear"});
            */
            $("html,body").animate({ scrollTop: 0 }, 'slow');
            return false; 
        });
        
        // info - 1st slideshow
        $('.mobile_gallery_slideshow_wrapper:eq(0) ul.mobile_gallery_slideshow').quotesPanel({ 
			'cont' : '.site .mobile_gallery_slideshow_wrapper:eq(0)', 
			'nav_list': 'ul.mobile_slideshow_nav:eq(0)',
			'sliderTimeout' : '8000',
            //'sliderTimeout' : '800000',
            'fadeout' : 0
			});  
            
        // info - 2nd slideshow
        $('.mobile_gallery_slideshow_wrapper:eq(1) ul.mobile_gallery_slideshow').quotesPanel({ 
			'cont' : '.site .mobile_gallery_slideshow_wrapper:eq(1)', 
			'nav_list': 'ul.mobile_slideshow_nav:eq(1)',
			'sliderTimeout' : '8000',
            //'sliderTimeout' : '800000',
            'fadeout' : 0
			});  
            
        // info - 3rd slideshow
        $('.mobile_gallery_slideshow_wrapper:eq(2) ul.mobile_gallery_slideshow').quotesPanel({ 
			'cont' : '.site .mobile_gallery_slideshow_wrapper:eq(2)', 
			'nav_list': 'ul.mobile_slideshow_nav:eq(2)',
			'sliderTimeout' : '8000',
            //'sliderTimeout' : '800000',
            'fadeout' : 0
			});  
                
        // placeholder
        $("[placeholder]").togglePlaceholder();
        
        // hide load news news button if < 5
        if( $(".site .home-latest-news").size() <= 5 ){  $("a#load_next_news").css('opacity', 0); }
        
        // load next news
        $("a#load_next_news").bind('click', function(){
           
           // load 2 next news
           var load_news_limit  = 2;
           
           // get news
           //var next_news       = $(".site .home-latest-news.hidden").slice(0,2);
           var next_news       = $(".site .home-latest-news.hidden:first");
           if( $(next_news).size() ){
            
                // show preloader
                $(".site .home-latest-news-nav .preloader").css('opacity' , 1);
            
                // reset class, reset mask layer
                $(next_news).removeClass('animated hidden');
                $(".mask_layer" , next_news).css('width' , '100%');
                
                // console.log( next_news );
                $().animateHomepageBlocks({ 'scrl_to_bottom' : true });   
                
                
                /*
                $("html,body")
                .delay(1000)
                .animate({ scrollTop: $(document).height() }, 'slow', function(){ 

                });
                */
                
                $(".site .home-latest-news-nav .preloader")
                .animate({}, 500, function(){
                    $(this).css('opacity' , 0);
                });

                
                
                if( $(".site .home-latest-news.hidden").size() == 0 ){
                    //$("a#load_next_news").css('opacity' , 0);
                    $("a#load_next_news").remove();
                }
            
           }
           else {
                $("a#load_next_news").css('opacity' , 0);
           }
           
           
           return false;
            
        });
        
        
        // vimeo
        $(".vimeo_wrapper .inner_wrapper a.play_btn").bind('click', function(){
            var vimeo_wrapper = $(this).closest('.vimeo_wrapper');
            var video_url     = $(".video_cont" , vimeo_wrapper ).html();
            video_url         = video_url.split('/');
            // <iframe src="//player.vimeo.com/video/60475086" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/60475086">DRM CHAIR</a> from <a href="http://vimeo.com/thibaultbrevet">Thibault Brevet</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
            $(".video_cont" , vimeo_wrapper ).show().html('<iframe src="//player.vimeo.com/video/'+video_url[ video_url.length - 1 ]+'?autoplay=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
            $(".video_cont iframe").width( $(".video_cont" , vimeo_wrapper ).outerWidth() ).height( $(".video_cont" , vimeo_wrapper ).outerHeight() );
            return false; 
        });
        
        
        // console.log( $("body.single-work div.site div.home-block div.clip_wrapper img.panel-img").outerHeight() );

        /*
        $("body")
        // .delay(5000)
        .animate({}, 5000, function(){
            if( $("body.page-template-contact-php").size() ){
                alert( $("body.page-template-contact-php div.site div.home-block div.clip_wrapper div.right img.post-image").outerWidth() );    
            }
                
        });
        */
        
        
    });
	
})(jQuery);
	