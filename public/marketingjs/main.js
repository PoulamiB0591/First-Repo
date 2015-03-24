// JavaScript Document

		

	$(function(){
			//	========back to top start =========	
			$('#back-to-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

		//	========back to top end =========	
	//========for mobile social icons===========
	
	var xz=0;
			$(".button").click(function(){
				if(xz==0){
					$(this).parent().animate({"right":0},300);
					xz++;
				}else{
					$(this).parent().animate({"right":-87},300);
					xz--;
				}
				return false;
			});
	
						
//========End for mobile social icons===========			
	
   /* $('.site').css({'height':($(document).height())+'%'});
    $(window).resize(function(){
        $('.site').css({'height':($(document).height())+'%'});
    });*/

	//	======== menu dropdown start =========	
		var ele = $(".drop_nav");
			var all_divs = ele.find("div");
			var all_anchor = ele.children(".drop_nav li:nth-child(8)").children("a");
			all_divs.slideUp();
			
			all_anchor.click(function(){
				if($(this).next().is(":hidden")){
					all_divs.slideUp();
					all_anchor.removeClass("active");
					$(this).addClass("active").next().slideDown();
				}else{
					$(this).removeClass("active").next().slideUp();
				};
				return false;
			});
			
//	======== menu dropdown end =========
	
//	======== fit text start =========
		$(".fittext2").fitText(2);
//	======== fit text end =========

//============ dropdown start ===============
  //
            // Enable selectBox control and bind events
            //

            $('#create').click(function () {
                $('SELECT').selectBox();
            });

            $('#destroy').click(function () {
                $('SELECT').selectBox('destroy');
            });

            $('#enable').click(function () {
                $('SELECT').selectBox('enable');
            });

            $('#disable').click(function () {
                $('SELECT').selectBox('disable');
            });

            $('#serialize').click(function () {
                $('#console').append('<br />-- Serialized data --<br />' +
                        $('FORM').serialize().replace(/&/g, '<br />') + '<br /><br />');
                $('#console')[0].scrollTop = $('#console')[0].scrollHeight;
            });

            $('#refresh').click(function() {
                $('SELECT OPTION').each(function() {
                    $(this).text('Refreshed ' + $(this).val());
                });
                $('SELECT').selectBox('refresh');
            });

            $('#value-1').click(function () {
                $('SELECT').selectBox('value', 1);
            });

            $('#value-2').click(function () {
                $('SELECT').selectBox('value', 2);
            });

            $('#value-2-4').click(function () {
                $('SELECT').selectBox('value', [2, 4]);
            });

            $('#options').click(function () {
                $('SELECT').selectBox('options', {
                    'Opt Group 1': {
                        '1': 'Value 1',
                        '2': 'Value 2',
                        '3': 'Value 3',
                        '4': 'Value 4',
                        '5': 'Value 5'
                    },
                    'Opt Group 2': {
                        '6': 'Value 6',
                        '7': 'Value 7',
                        '8': 'Value 8',
                        '9': 'Value 9',
                        '10': 'Value 10'
                    },
                    'Opt Group 3': {
                        '11': 'Value 11',
                        '12': 'Value 12',
                        '13': 'Value 13',
                        '14': 'Value 14',
                        '15': 'Value 15'
                    }
                });
            });

            $('select')
                    .selectBox({
                        mobile: true
                    })
                    .focus(function () {
                        $('#console').append('Focus on ' + $(this).attr('name') + '<br />');
                        $('#console')[0].scrollTop = $('#console')[0].scrollHeight;
                    })
                    .blur(function () {
                        $('#console').append('Blur on ' + $(this).attr('name') + '<br />');
                        $('#console')[0].scrollTop = $('#console')[0].scrollHeight;
                    })
                    .change(function () {
                        $('#console').append('Change on ' + $(this).attr('name') + ': ' + $(this).val() + '<br />');
                        $('#console')[0].scrollTop = $('#console')[0].scrollHeight;
                    });

//============ dropdown end ===============
//============ body  carousel start  ===============

      $(".owl-demo").owlCarousel({
		  navigation : true,
        autoPlay: 3000,
        items : 5,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [1024,4]
      });

 	$(".owl-demo2").owlCarousel({
			navigation : true,
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem : true
		});
	
	
	//============ body  carousel end  ===============				
				
		//============ for redio button start  ===============					

    var d = document;
    var safari = (navigator.userAgent.toLowerCase().indexOf('safari') != -1) ? true : false;
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

	//============ for redio button end  ===============					

							

		//	========scroll to bottom start =========	
	 $("a.js_onPageLink").bind("click", function (event) {
        event.preventDefault ? event.preventDefault() : event.returnValue = false;
        var target = $(this).attr("href");
        $("html, body").stop().animate({
                scrollLeft: $(target).offset().left,
                scrollTop: $(target).offset().top
            }, 1200);
    });
	//	========scroll to bottom end =========
	//	======== tab to accordion start =========	
	

         $('#horizontalTab').responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                //disabled: [3,4]
            });
			
			 $(".verticalTab").responsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
   
	//	======== tab to accordion end =========	
	//	======== prettyphoto start =========		
		
		//	======== prettyphoto end =========	
			
	

	//	======== accordion start =========	
	$(".accordion-sub h3:first").addClass("active");
	$(".accordion-sub p:not(:first)").hide();

	$(".accordion-sub h3").click(function(){
		$(this).next("p").slideToggle("slow")
		.siblings("p:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings("h3").removeClass("active");
	});

	//	======== accordion end =========	


  $('.options a').on('click', function(e){
    e.preventDefault();
    
    if($(this).hasClass('active')) {
      // do nothing if the clicked link is already active
      return;
    }
    
    $('.options a').removeClass('active');
    $(this).addClass('active');
    
    var clickid = $(this).attr('id');
    

    $('#listdisplay').fadeOut(240, function(){
      if(clickid == 'thumbnails-list') {
        $(this).addClass('thumbview');
      } else {
        $(this).removeClass('thumbview');
      }

      $('#listdisplay').fadeIn(200);  
    });
  });
  
  
  
  
  //	======== slideUp start =========	
  $("ul.campaigns-list > li > div + div ul").slideUp();
	
	$("a.setting_clk").click(function(){
		if($(this).parent().children("ul").is(":hidden")){
			$("ul.campaigns-list > li > div + div ul").slideUp();
			$(this).parent().children("ul").slideDown();
		}else{
			$(this).parent().children("ul").slideUp();
		};
		return false;
	});
  //	======== slideUp end =========	
  


	
});

