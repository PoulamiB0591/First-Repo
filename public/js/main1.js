


$(function(){// document function start

$(function() {
var currentTemplateSFP;
var containerSelectorSFP;
var $animationInProgress;
$(".small_carausal").live("click",function(){
   
    //$.getScript("/js/jquery.easing.1.3.min.js"); 
    var res = $(this).find("#hiddens").val();
    var no = $("#hidden_val").val();
    for(var t=1;t<=no;t++)
    {
        if(t==res)
        {
            $(".demo"+t).css("left","0");
            $(".demo"+t).fadeIn(600);
            currentTemplateSFP = $(".demo"+t).attr('data-template');
        }
        else
        {
            $(".demo"+t).hide();
        }
    }
        $(".mob-desktop").fadeIn(400);
});
$(".close").live("click",function(){
    $(".mob-desktop").fadeOut(400);
});
////////////////////////////////////DO NOT TOUCH///////////////////////////////////////
/////////////////// for next arrow////////////////////
function goToNextTemplate(currentTemplateSFP) {
    if ($animationInProgress)
            return;
    $animationInProgress = true;
    targetTemplateSFP = $('[data-template="' + currentTemplateSFP + '"]').data('next');
    moveTemplateOutLeft(currentTemplateSFP);
    moveTemplateInLeft(targetTemplateSFP);
    
}
function moveTemplateOutLeft(templateId) {
    
    var containerSelector = '[data-template="' + templateId + '"]';
    $(containerSelector).fadeOut(800);
    $(containerSelector + ' .wrap-browser').stop().animate({ 'left': '-200%' }, 800);
    $(containerSelector + ' .wrap-mobile').stop().animate({ 'right': '200%' }, 800);
    $(containerSelector + ' .wrap-text').stop().animate({ 'right': '150%' }, 800);
}
function moveTemplateInLeft(templateId) {
        var containerSelector = '[data-template="' + templateId + '"]';
        //Reset the elements' position
        $(containerSelector + ' .wrap-browser').css({ 'left': '250%' }, 800);
        $(containerSelector + ' .wrap-mobile').css({ 'right': '-250%' }, 800);
        $(containerSelector + ' .wrap-text').css({ 'right': '-10%', 'opacity': '1' }, 800);
        $(containerSelector).fadeIn(800);
        $(containerSelector + ' .wrap-browser').stop().animate({ 'left': '0%' }, 800);
        $(containerSelector + ' .wrap-mobile').stop().delay(100).animate({ 'right': '0%' }, 800);
        $(containerSelector + ' .wrap-text').stop().delay(200).animate({ 'right': '50%', 'opacity': '1' }, 800, function () {
            $animationInProgress = false;
        });
        currentTemplateSFP = templateId;
    }
/////////////////////// for prev arrow ////////////////////
function goToPreviousTemplate(currentTemplateSFP){
        if ($animationInProgress)
            return;
        $animationInProgress = true;
        
        targetTemplateSFP = $('[data-template="' + currentTemplateSFP + '"]').data('prev');
        moveTemplateOutRight(currentTemplateSFP);
        moveTemplateInRight(targetTemplateSFP);
    }
function moveTemplateOutRight(templateId) {
        var containerSelector = '[data-template="' + templateId + '"]';
        $(containerSelector).fadeOut(800);
        $(containerSelector + ' .wrap-browser').stop().animate({ 'left': '200%' }, 800);
        $(containerSelector + ' .wrap-mobile').stop().animate({ 'right': '-200%' }, 800);
        $(containerSelector + ' .wrap-text').stop().animate({ 'right': '-100%' }, 800);
    }
function moveTemplateInRight(templateId) {
        var containerSelector = '[data-template="' + templateId + '"]';
        $(containerSelector + ' .wrap-browser').css({ 'left': '-250%' }, 800);
        $(containerSelector + ' .wrap-mobile').css({ 'right': '250%' }, 800);
        $(containerSelector + ' .wrap-text').css({ 'right': '200%', 'opacity': '1' }, 800);
        $(containerSelector).fadeIn(800);
        $(containerSelector + ' .wrap-text').stop().animate({ 'right': '50%', 'opacity': '1' }, 800);
        $(containerSelector + ' .wrap-mobile').stop().delay(100).animate({ 'right': '0%' }, 800);
        $(containerSelector + ' .wrap-browser').stop().delay(200).animate({ 'left': '0%' }, 800, function () {
            $animationInProgress = false;
        });
        currentTemplateSFP = templateId;
    }
    $('a#next').click(function () {
        goToNextTemplate(currentTemplateSFP);
    });
    $('a#prev').click(function () {
        goToPreviousTemplate(currentTemplateSFP);
    });
    function isPreviewDialogOpen() {
        return $('[data-template]:visible').length > 0;
    }
    $(document).keyup(function (e) {
        if (isPreviewDialogOpen()) 
        {
            switch (e.keyCode) 
            {
                case (27):
                    $(".close").trigger('click');
                    break;
                case (39):
                    goToNextTemplate(currentTemplateSFP);
                    break;
                case (37):
                    goToPreviousTemplate(currentTemplateSFP);
                    break;
            }
        }
    });










/////////////////////////////////////HERE ////////////////////////////////////////////
















































			$("a.read_more_btn").live("click",function() {
				if($(this).parent().children("div").css("height") == '228px'){
					$(this).parent().children("div").css({"height":"auto"});
				}else{
					$(this).parent().children("div").css({"height":"228px"});
				}
			return false;
		});
        
        
        
        
        
        $("a.blog_more_btn").live("click",function() {
				if($(this).parent().children("div").css("height") == '60px'){
					$(this).parent().children("div").css({"height":"auto"});
                     $(this).text("Less");
				}else{
					$(this).parent().children("div").css({"height":"60px"});
                     $(this).text("read more");
				}
			return false;
		});
        
        
        
        
        
        
        
        
	
	});





    var UrL = document.URL;
    var yz=0;
    $(".slide_button").click(function(){
        if(yz==0)
        {
            $(this).parent().animate({"right":0},300);
            $(".slide_button").addClass("slide_icon");
            yz++;
        }
        else
        {
            $(this).parent().animate({"right":"-300px"},300);
            $(".slide_button").removeClass("slide_icon");
            yz--;
        }
       return false
    });
    
    var xz=0;
			$("div.user > a").click(function() {
				if(xz==0){
					$(this).addClass('user_arrow');
					$("div.user_list").fadeIn(300);
					xz++;
				}else{
					$(this).removeClass('user_arrow');
					$("div.user_list").fadeOut(300);
					xz--;
				}
			return false;
		});
   
        
    $('#back-to-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
    
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
		//return false;
	});
    
    $(".fittext2").fitText(2);
    
    
    
        
    
    //============ dropdown start ===============
  //
            // Enable selectBox control and bind events
            //
            
            
 	//	======== menu dropdown start =========	
		var ele = $(".drop_nav");
			var all_divs = ele.find("div");
			var all_anchor = ele.children(".drop_nav li:nth-child(7)").children("a");
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
    
    $('#refresh').click(function(){
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
    
  
  
    $('select').selectBox({
        mobile: true
    })
    .focus(function () {
       // $('#console').append('Focus on ' + $(this).attr('name') + '<br />');
       // $('#console')[0].scrollTop = $('#console')[0].scrollHeight;
    })
    .blur(function () {
       // $('#console').append('Blur on ' + $(this).attr('name') + '<br />');
       // $('#console')[0].scrollTop = $('#console')[0].scrollHeight;
    })
    .change(function () {
        $("#loader12").show();
        
        //$('#console').append('Change on ' + $(this).attr('name') + ': ' + $(this).val() + '<br />');
        //$('#console')[0].scrollTop = $('#console')[0].scrollHeight;
        var res = $(this).val();
        if(res == "Select Template Category")
        {
            return false;
        }
        
        select_change(res);
      
    });

function select_change(res)
{
    var base_url = window.location.origin;
            $.ajax({ 
                type:'POST',
                data:{value:res},
                url:base_url+"/index/publishersearchtempcategory",
                success:function(data){
                  
                     $("#loader12").hide();
                    var res = data.split("[|]");
                    
                  
     var count = res.length - 1;
     var html = "";
     for(var i=0;i<count;i++)
     {
       if(res[i] != "|-||-||-|")
       {
        var innerhtml = res[i].split("|-|");
        
        var html = html +'<li class="clearfix col-lg-3 col-sm-4"><span class="listimg"><a href="javascript:void(0)" class="clearfix"><img src="'+innerhtml[3]+'" alt=""/></a></span><span class="innercontent"<h2 class="contact-name">'+innerhtml[0]+''+innerhtml[1]+'</h2><p>'+innerhtml[2]+'</p><div class="publish-bt"><ul><li><a href="javascript:void(0)">campaigns</a></li><li><img alt="" src="../img/icon-1.png"></li></ul></div></span></li>';
        
     }
     
     }
     

     $("#listdisplay").html(html); 
                  
                  
                     
                     }
                    });
}
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
            
            if (l.className == 'label_radio r_on') {
                l.className = (safari && inp.checked == true || inp.checked) ? 'label_radio r_off' : 'label_radio r_on';
                l.onclick = turn_radio;
            };
        };
    };
    var check_it = function() {
        var inp = gebtn(this,'input')[0];
        if (this.className == 'label_check c_off' || (!safari && inp.checked)) {
            $('#authId').attr('type', 'text');
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
                l.firstChild.setAttribute('value',0);
            };
            this.className = 'label_radio r_on';
            $(this).children('input').val(1);
            if (safari) inp.click();
        } else {
           
            this.className = 'label_radio r_off';
            $(this).children('input').val(0);
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
//	========scroll to bottom end ========     
//	======== tab to accordion start =========	
	$('.horizontalTab').responsiveTabs({
            rotate: false,
            startCollapsed: 'accordion',
            collapsible: 'accordion',
            setHash: true,
            
            //disabled: [3,4]
        });
        
   // $('.horizontalTab1').responsiveTabs1({ 
//            rotate: false,
//            startCollapsed: 'accordion',
//            collapsible: 'accordion',
//            setHash: true,
//            //disabled: [3,4]
//        });                
		
		 $(".verticalTab").responsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
    });
//	======== tab to accordion end =========
//	======== prettyphoto start =========
   /* if(UrL != 'http://
   /'){		
    	$("ul#mycarousel li a[rel^='prettyPhoto[gallery1]']").prettyPhoto({
    		animation_speed:'normal',
    		theme:'light_square',
    	});	
    }*/
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
        if(clickid == 'thumbnails-list') 
        {
            $(this).addClass('thumbview');
        } 
        else 
        {
            $(this).removeClass('thumbview');
        }
        $('#listdisplay').fadeIn(200);  
    });
});






}); // document function end

/************************** new code for dropdown **************************/
var val = ""; 
$(".mdropdown dt a").on('click', function () {
    
          $(".mdropdown dd ul").slideToggle('fast');
      });

      $(".mdropdown dd ul li a").on('click', function () {
          $(".mdropdown dd ul").hide();
      });

      function getSelectedValue(id) {
           return $("#" + id).find("dt a span.value").html();
      }

      $(document).bind('click', function (e) {
          var $clicked = $(e.target);
          if (!$clicked.parents().hasClass("mdropdown")) $(".mdropdown dd ul").hide();
      });


      $('.mutliSelect input[type="checkbox"]').on('click', function () {
            
          var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
              title = $(this).val() + ",";
              
          if ($(this).is(':checked')) {
            
                val = val.concat(title);
                $("#wid").val(val);
                var html = '<span title="' + title + '">' + $(this).parent().text() + '</span>';
              
              if($('.multiSel').html())
              {
                var html = '<span title="' + title + '">' + ","+$(this).parent().text() + '</span>';
              }
              else
              {
                var html = '<span title="' + title + '">' + $(this).parent().text() + '</span>';
              }
              
              $('.multiSel').append(html);
              $(".hida").hide();
          } 
          else {
              val = val.replace(title, "");
              $("#wid").val(val);
              $('span[title="' + title + '"]').remove();
              var ret = $(".hida");
              $('.mdropdown dt a').append(ret);
              
          }
      });

/********************* code for expanding and contracting error details by Poulami *****************************/
function expand(val) {
    
    //var val = $("#sVal").val();
    if( val == 'gMap')
   {
         $('.'+val).html('<input id="sVal" type="hidden" value="'+val+'" /><p>You have added the Map widget but the id for the particular div is not perfect. It should be gMap. To add this edit your index.php file in edit template section.</p><a style="cursor:pointer" onclick="upClick(\''+val+'\');" class="up" title="Contract details"></a>');
        
   }
   else if( val == 'cForm')
   {
         $('.'+val).html('<input id="sVal" type="hidden" value="'+val+'" /><p>You have added the Contact Form widget but the class for the particular form is not perfect. It should be cForm. To add this edit your index.php file in edit template section.</p><a style="cursor:pointer" onclick="upClick(\''+val+'\');" class="up" title="Contract details"></a>');
       // $(this).attr('id','close');
   }
   else
   {
         $('.'+val).html('<input id="sVal" type="hidden" value="'+val+'" /><p>You have added the Newsletter widget but the id for the particular div is not perfect. It should be nLtr. To add this edit your index.php file in edit template section.</p><a style="cursor:pointer" onclick="upClick(\''+val+'\');" class="up" title="Contract details"></a>');
   }
}

function upClick(val) {
    
    $('.'+val).html('<input id="sVal" type="hidden" value="'+val+'" /><a onclick="expand(\''+val+'\');" style="cursor:pointer" title="Expand details">Expand details</a>');
}





/******************** ajax call on save button ********************/
//$(".save_btn").click(function (){
//  $.ajax({
//    type : 'POST',
//    url : '/template/addtemplate',
//    data : {'id':'test'},
//    success : function(data,status)
//    {
//        alert(data.message);
//    }
//  });
//});


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
  
     
        $("#checkbox-02").click(function(){
        if($(this).attr("value")=="2"){
                $(".sfp-fb").toggle(); 
                $(".sfp-fb2").hide();               
            }       
      });
      
       $("#checkbox-03").click(function(){
        if($(this).attr("value")=="1"){
                $(".sfp-fb2").toggle();             
            }       
      });
           
    
    //  tab active function.......................
    $("#tab-1").show(); 
    $("div.horizontalTab1 ul li:first").addClass("active");
    
    
    $('#search').click(function(){
  $("#loader12").show();
   var txt = $('#srch-term').val();
   if(txt == "")
   {
    alert("please enter search item");
    return false;
   }
   var base_url = window.location.origin;
     $.ajax({
    type : 'POST',
    url : base_url+'/index/searchtemplate',
    data : {srch:txt},
    success : function(data)
    {
        $("#loader12").hide();
     var res = data.split("[|]");
     var count = res.length - 1;
     var html = "";
     for(var i=0;i<count;i++)
     {
        var innerhtml = res[i].split("|-|");
        
        var html = html +'<li class="clearfix col-lg-3 col-sm-4"><span class="listimg"><a href="javascript:void(0)" class="clearfix"><img src="'+innerhtml[3]+'" alt=""/></a></span><span class="innercontent"<h2 class="contact-name">'+innerhtml[0]+''+innerhtml[1]+'</h2><p>'+innerhtml[2]+'</p><div class="publish-bt"><ul><li><a href="javascript:void(0)">campaigns</a></li><li><img alt="" src="../img/icon-1.png"></li></ul></div></span></li>';
        
     }
     
     

     $("#listdisplay").html(html);  
    }
  });

});
 $('#srchterm').live("click",function(){
   $("#loader12").show();
   var txt = $('#srch-term').val();
   if(txt == "")
   {
     $("#loader12").hide();
    alert("please enter search item");
    return false;
   }
   var base_url = window.location.origin;
     $.ajax({
    type : 'POST',
    url : base_url+'/index/searchcat',
    data : {srch:txt},
    success : function(data)
    {
 $("#loader12").hide();
     var res = data.split("|/|");
     //$("#listdisplay").remove();
     var count = res.length - 1;
     var html = "";
     for(var i=0;i<count;i++)
     {
        var j =i + 1;
        var innerhtml = res[i].split("|-|");
        if(innerhtml[0] == "epic")
                   {
                   var neon = "Neon";
                   }
                   else
                   {
                   var neon = innerhtml[0];
                   }
        
         html = html + '<div class="owl-item"><div class="item small_carausal" style="cursor: pointer;"> <strong>'+neon+'</strong> <span><img alt="" src="'+base_url+'/files/'+innerhtml[0]+'/'+innerhtml[1]+'"></span><div><p>Facebook app</p><strong>Author: Smartfanpage</strong><a style="cursor: pointer;">Use now</a> </div><input type="hidden" value="'+j+'" id="hiddens"></div></div>';
        
     }
     $("#hidden_val").val(i);
       if(html == "")
                  {
                     
                    var htmls = "No data Found";
                      $(".owl-wrapper").html(htmls); 
                      return false;
                  }

       $(".owl-select").html(html);
    }
  });

}); 


  
  $("#document-tab").click(function(){
    alert("aa");    
        
                $("#docu-tab-content-1").show(); 
                $("#docu-tab-content-2").hide();   
                $("#docu-tab-content-3").hide();              
                   
      });
 



$('#refreshed').click(function(){
  
  
    $("#loader12").show();
   var base_url = window.location.origin;
     $.ajax({
    type : 'POST',
    url : base_url+'/index/searchalldev',
    data : {},
    success : function(data)
    {
    
   $("#loader12").hide();
   var res = data.split("[|]");
     var count = res.length - 1;
     var html = "";
     for(var i=0;i<count;i++)
     {
        var innerhtml = res[i].split("|-|");
        
        var html = html +'<li class="clearfix col-lg-3 col-sm-4"><span class="listimg"><a href="javascript:void(0)" class="clearfix"><img src="'+innerhtml[3]+'" alt=""/></a></span><span class="innercontent"<h2 class="contact-name">'+innerhtml[0]+''+innerhtml[1]+'</h2><p>'+innerhtml[2]+'</p><div class="publish-bt"><ul><li><a href="javascript:void(0)">campaigns</a></li><li><img alt="" src="../img/icon-1.png"></li></ul></div></span></li>';
        
     }
     $("#listdisplay").html(html);
    }
  });
  
  });
 
   
 
 
    
  /*  function submitFunction() {
         $("#tab-2").show();
         $("div.horizontalTab1 ul li:first").removeClass("active");//nth-child(2)
         $("div.horizontalTab1 ul li:nth-child(2)").addClass("active");
    }*/
