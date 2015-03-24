
		
		
		$(function(){
		
		
		var ele = $("ul.accordion_side");
		var all_divs = ele.find("div");
		var all_anchor = ele.children("li").children("a");
		all_divs.slideUp();
		$("ul.accordion li:first-child a").next().slideDown();
		
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
		
		
		
		$(window).scroll(function () {
			set = $(document).scrollTop()+"px";
			$('.main-menu').animate({top:set},{duration:1000,queue:false});
		});

		
		
		$("a.js_onPageLink").bind("click", function (event) {
		var target = $(this).attr("href");
		$("html, body").stop().animate({
				scrollLeft: $(target).offset().left,
				scrollTop: $(target).offset().top
			}, 3000);
	});
		
	});	
		



// document function start


$(function(){

			bc=0;
			$("div.team_details").hover(function(){
				if(bc==0){
					$(this).children("div").animate({"bottom":"0"});
				$(this).children("div")
					bc++;
				}else{
					$(this).children("div").animate({"bottom":"-100%"});
					bc--;
				}
				return false;
			});

});	

	   
$(function() {
	
	 var base_url = window.location.origin+"/";
	 var curUrl = window.location;
	 var addIndex = base_url+"index"
	
	 if(curUrl == base_url || curUrl == addIndex )
    {
	if($.cookie("accesscode") !=null){
   	 $('#mask').hide();
 		$('.window').hide();
    	 $(".pop-foot p").hide();
   }
    }
var currentTemplateSFP;
var containerSelectorSFP;
var animationInProgress;
///////from becomepublisherview.phtml

 if($('#actionid').length){
  var radioVal = document.getElementById('actionid').value;  
            if(radioVal == '1')
            {
                $("label[for='radio-01']").attr('class','label_radio r_on');
                $("label[for='radio-01']").children('input').val(1);
            }
            else if(radioVal == '2')
            {
                $("label[for='radio-02']").attr('class','label_radio r_on');
                $("label[for='radio-02']").children('input').val(1);
            }
            else if(radioVal == '3')
            {
                $("label[for='radio-03']").attr('class','label_radio r_on');
                $("label[for='radio-03']").children('input').val(1);
            }
 }
//from blogoverview.phtml
function onAddTag(tag) {
			alert("Added a tag: " + tag);
		}
		function onRemoveTag(tag) {
			alert("Removed a tag: " + tag);
		}
		
		function onChangeTag(input,tag) {
			alert("Changed a tag: " + tag);
		}
		
		$(function() {

			$('#tags_1').tagsInput({width:'auto'});
			
		});
if($("#blank").length && $("#exist").length && $("#specialCharacter").length &&  $("#image").length){
var blank = $("#blank").val();
var exist = $("#exist").val(); 
var specialCharacter = $("#specialCharacter").val(); 
var image = $("#image").val(); 
if(blank == 1 || exist == 1 || specialCharacter == 1 || image == 1)
{
    $('#contenterrorDiv').css('display','block');  
    if (blank == 1)
    {
        $('#contenterrorDiv').html('<p>Please,put your link creator</p>'); 
    }
    if (exist == 1)
    { 
      $('#contenterrorDiv').html('<p>link creator already exist,choose different !!!</p>');
    }
    if (specialCharacter == 1)
    { 
      $('#contenterrorDiv').html('<p>There will be no special character in the link creator name !!!</p>');
    }
    if (image == 1)
    { 
      $('#contenterrorDiv').html('<p>Please put an valid image file !!!</p>');
    }
}
}
 //$("#searching").click(function(){
//    alert("gfh");
//   
//        var filter = $("#filter").val(), count = 0;
//     var res = "";
//        $("div.searchcls div.accordion-sub").each(function(){
//          
//            alert($(this).text().indexOf(filter));
//           if($(this).text().indexOf(filter)>=1)  {
//                
//               res = res + $(this).html();
//     
//               
//            }
//        });
//       
//      $(".searchcls").html(res);
//        var numberItems = count;
//        $("#filter-count").text("Number of Comments = "+count);
//    });
$(".small_carausal").live("click",function(){
    
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
    if (animationInProgress)
            return;
    animationInProgress = true;
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
            animationInProgress = false;
        });
        currentTemplateSFP = templateId;
    }
/////////////////////// for prev arrow ////////////////////
function goToPreviousTemplate(currentTemplateSFP){
        if (animationInProgress)
            return;
        animationInProgress = true;
        
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
            animationInProgress = false;
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


/////////////////////////////////////READ MORE BUTTON ////////////////////////////////////////////
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
			$("div.user").click(function() {
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
			//	return false;
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

    })
    .blur(function () {

    })
    .change(function () {
        $("#templateSelect").trigger('click');
        $("#loader12").show();

        var res = $(this).val();
        if(res == "Select Template Category")
        {
            return false;
        }
        
          var res1 = document.URL;
         var arr = res1.split("/");
         //alert($.inArray("becomepublisher",arr));
         if($.inArray("becomepublisher",arr) > 0)
         {
            select_change1(res);// for becomepublisher page
         }
         else
         {
           select_change(res); // other pages 
         }
      
    });
    
    
function select_change1(res) // select template category in becomepublisher page
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
                                
                              var innerhtml = res[i].split("|-|");  
                              html = html +'<li class="clearfix col-lg-3 col-sm-4"><span class="listimg"><a href="javascript:void(0)" class="clearfix"><img src="'+innerhtml[3]+'" alt=""/></a></span><span class="innercontent"<h2 class="contact-name">'+innerhtml[0]+''+innerhtml[1]+'</h2><p>'+innerhtml[2]+'</p><div class="publish-bt"></div></span></li>';
                              
                              }
                                  
                    
                    $("#listdisplay").html(html);
                    }
                    })  
            
    
    
}   
    

function select_change(res) // search template category in other pages
{
    //alert(res);return false;
    var base_url = window.location.origin;
            $.ajax({ 
                type:'POST',
                data:{value:res},
                url:base_url+"/index/searchtempcategory",
                success:function(data){
                     $("#loader12").hide();
                   var currentUrl  = window.location.href;
                    var htmlText = "";
                    
                    var demohtml = "";
                  var res = data.split("|/|");
                  var count = res.length - 1;
                   $(".con_slider").find('div.static').each(function(){
                        $(this).hide();  
                     });
                  for(var i=0;i<count;i++)
                  {
                    var j = i + 1;
                  var ress = res[i].split("|-|");
                   if(ress[0] == "epic")
                   {
                   var neon = "Neon";
                   }
                   else
                   {
                   var neon = ress[0];
                   } 
                   if(currentUrl == base_url)
                    {
                   htmlText = htmlText + '<div class="owl-item"><div class="item small_carausal" style="cursor: pointer;"> <strong>'+neon+'</strong> <span><img alt="" src="'+base_url+'/files/'+ress[0]+'/'+ress[1]+'"></span><div><p>Facebook app</p><strong>Author: Smartfanpage</strong><a style="cursor: pointer;">Use now</a></div><input type="hidden" value="'+j+'" id="hiddens"></div></div>';
                    }
                 if(currentUrl == base_url+"/index/store" || currentUrl == base_url+"/Frontend/index1")
                    {
                        //alert(html);return false;
                    htmlText = htmlText + '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 small_carausal" style="cursor: pointer;"> <strong>'+neon+'</strong> <span><img alt="" src="'+base_url+'/files/'+ress[0]+'/'+ress[1]+'"></span><div><p>Facebook app</p><strong>Author: Smartfanpage</strong><a style="cursor: pointer;">Use now</a></div><input type="hidden" value="'+j+'" id="hiddens"></div>';
                    }
                  var uhtml = $("div."+ress[0]).html();
                  
                   // var classes = $("div."+ress[0]).attr('class');
                    //var classes1 = $("div."+ress[0]).attr('data-template');
                    var cls3 = $("div."+ress[0]).find("#hidden2").val();                                        
                     $(".demo"+cls3).html(uhtml);
                  //demohtml = demohtml + uthml;
                  //  var reshtml = $("div."+ress[0]).html();
                  //  alert(reshtml);
                    }
                
            
                  $("#hidden_val").val(i);
                  if(htmlText == "")
                  {
                    var htmls = "No data Found";
                      $(".owl-select").html(htmls); 
                      return false;
                  }
                 
                  $(".selectBox-dropdown-menu").hide();
                  if(currentUrl==base_url )
                    {
                  $(".owl-select").html(htmlText);
                   }
                   if(currentUrl==base_url +"/index/store" || currentUrl==base_url +"/Frontend/index1")
                    {
                    $(".slider").html(htmlText);  
                    }
                  
                  
                     
                     }
                    });
}

/*------------------------------------------ Refresh in becomepublisher page--------------------------*/

$('#refreshed1').click(function(){
   
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
        
        var html = html +'<li class="clearfix col-lg-3 col-sm-4"><span class="listimg"><a href="javascript:void(0)" class="clearfix"><img src="'+innerhtml[3]+'" alt=""/></a></span><span class="innercontent"<h2 class="contact-name">'+innerhtml[0]+''+innerhtml[1]+'</h2><p>'+innerhtml[2]+'</p><div class="publish-bt"></div></span></li>';
        
     }
     
     

     $("#listdisplay").html(html); 
    }
    });
    });
    
    
 /*------------------------------------------ Refresh in other pages--------------------------*/   
    
    $('#refreshed').click(function(){
  
  
    $("#loader12").show();
   var base_url = window.location.origin;
     $.ajax({
    type : 'POST',
    url : base_url+'/index/searchall',
    data : {},
    success : function(data)
    {
    var j =i + 1;
   $("#loader12").hide();
     var res = data.split("|/|");
    
     var count = res.length - 1;
     var html = "";
     var url  = window.location.href;
     for(var i=0;i<count;i++)
     {
        var innerhtml = res[i].split("|-|");
        if(innerhtml[0] == "epic")
                   {
                   var neon = "Neon";
                   }
                   else
                   {
                   var neon = innerhtml[0];
                   }
        
       if(url==base_url)
        {
         html = html + '<div class="owl-item"><div class="item small_carausal" style="cursor: pointer;"> <strong>'+neon+'</strong> <span><img alt="" src="'+base_url+'/files/'+innerhtml[0]+'/'+innerhtml[1]+'"></span><div><p>Facebook app</p><strong>Author: Smartfanpage</strong><a style="cursor: pointer;">Use now</a> </div><input type="hidden" value="'+j+'" id="hiddens"></div></div>';
        }
          if(url==base_url+"/index/store" || url==base_url+"/Frontend/index1")
        {
         html = html + '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 small_carausal" style="cursor: pointer;"> <strong>'+neon+'</strong> <span><img alt="" src="'+base_url+'/files/'+innerhtml[0]+'/'+innerhtml[1]+'"></span><div><p>Facebook app</p><strong>Author: Smartfanpage</strong><a style="cursor: pointer;">Use now</a> </div><input type="hidden" value="'+j+'" id="hiddens"></div>';
        }
        
     }
     
      $("#hidden_val").val(i);
if(url==base_url)
        {
       $(".owl-select").html(html);
       }
       if(url==base_url+"/index/store" || url==base_url+"/Frontend/index1")
        {
          $(".slider").html(html);  
        }
    }
  });
  
  $("#document-tab").click(function(){
    alert("aa");    
        
                $("#docu-tab-content-1").show(); 
                $("#docu-tab-content-2").hide();   
                $("#docu-tab-content-3").hide();              
                   
      });
 

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
            setHash: false,
        });
                      
		
		 $(".verticalTab").responsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
    });
//	======== tab to accordion end =========
	
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






 // document function end

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
    
    	$("a.triggerset").click(function(){
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
    
    
    /*$('#srchterm').click(function(){
  
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

});*/  //work done by aritra checked by arnab

$('#srchterm').live("click",function(){ // searchbox according to category
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
    
     var count = res.length - 1;
     var html = "";
     var url  = window.location.href;
      //alert(url);
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
        if(url==base_url)
        {
         html = html + '<div class="owl-item"><div class="item small_carausal" style="cursor: pointer;"> <strong>'+neon+'</strong> <span><img alt="" src="'+base_url+'/files/'+innerhtml[0]+'/'+innerhtml[1]+'"></span><div><p>Facebook app</p><strong>Author: Smartfanpage</strong><a style="cursor: pointer;">Use now</a> </div><input type="hidden" value="'+j+'" id="hiddens"></div></div>';
        }
          if(url==base_url+"/index/store" || url==base_url+"/Frontend/index1")
        {
         html = html + '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 small_carausal" style="cursor: pointer;"> <strong>'+neon+'</strong> <span><img alt="" src="'+base_url+'/files/'+innerhtml[0]+'/'+innerhtml[1]+'"></span><div><p>Facebook app</p><strong>Author: Smartfanpage</strong><a style="cursor: pointer;">Use now</a> </div><input type="hidden" value="'+j+'" id="hiddens"></div>';
        }
     }
     
     //alert(html);return false;
     $("#hidden_val").val(i);
     
       if(html == "")
                  { 
                    var htmls = "No data Found";
                      $(".owl-item").html(htmls); 
                      return false;
                  }
       if(url==base_url)
       {
       $(".owl-select").html(html);
       }
       if(url==base_url+"/index/store"|| url==base_url+"/Frontend/index1")
       {
        $(".slider").html(html);
       }
    }
  });

}); 



function getpassword_throughemail() // get password through email (registration index page)
{
    var eid = $("#username").val();
    var fname = $("#fname").val();
    var lname = $("#lname").val();
   
    var regexemail = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/;
    var res = $("#sfpchk1").val();
    
    if(fname == "")
    {
      alert("First name should be entered");
        return false;  
    }
    else if(lname == "")
    {
      alert("Last name should be entered");
        return false;  
    }
    if(eid == "")
    {
        alert("email address should not be empty");
        return false;
    }
    else if (!eid.match(regexemail)) 
    {
       alert("Please put valid E-mail");
         
         return false;
    } 
    else if($(".label_check").hasClass('c_off'))
    {
      alert("select terms and condition");
         
         return false;  
    }
    else
    {
        $.ajax({
            type : 'POST',
            url : '/index/emailsignup',
            data : {eid:eid,fname:fname,lname:lname},
            success : function(data)
            {
                
                if(data == "1")
                {
                    $("#mail_sent").show();
                    setInterval(function(){ $("#mail_sent").hide();}, 10000);
                }
                else if(data.trim() == "2")
                {
                    $("#email_exists").show();
                    setInterval(function(){ $("#email_exists").hide();}, 10000);
                }
                else if(data == "3")
                {
                    $.ajax({
                        type : 'POST',
                        url : '/index/emailsignupfacebook',
                        data : {eid:eid,fname:fname,lname:lname},
                        success : function(data)
                        {
                            if(data == "1")
                            {
                                $("#mail_sent").show();
                                setInterval(function(){ $("#mail_sent").hide();}, 10000);
                            }              
                        }
                    });                
                }                             
                else
                {
                    alert("error");
                }
            }
        });
    }
}

$("#fullname").live('keydown', function(e){
    if (e.keyCode == 13)
        setPassword(); 
});

$("#emailForRegister").live('keydown', function(e){
    if (e.keyCode == 13)
        setPassword(); 
});
function setPassword() 
{
    $("#submitButtonLoader").show();
    $("#signupGeneralMessage").hide();
    $("#signupGeneralMessage").html("");
    $(".signupGeneralMessageReverse").hide();
    var name = $("#fullname").val();
    var email = $("#emailForRegister").val();
    var regexemail = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/;
    if(name == "")
    {
        $("#submitButtonLoader").hide();
        $("#signupGeneralMessage").show();
        $("#signupGeneralMessage").html("Name should not be empty");
        return false;  
    }    
    if(email == "")
    {
        $("#submitButtonLoader").hide();
        $("#signupGeneralMessage").show();
        $("#signupGeneralMessage").html("Email address should not be empty");
        return false;
    }
    else if (!email.match(regexemail)) 
    {  
       $("#submitButtonLoader").hide();       
       $("#signupGeneralMessage").show();
       $("#signupGeneralMessage").html("Please put valid E-mail");
       return false;
    } 
     else
    {
        $.ajax({
            type : 'POST',
            url : '/index/directSignup',
            data : {email:email,name:name},
            success : function(data)
            {
                $("#submitButtonLoader").hide();
                if(data == "1")
                {
                    $("#mail_sent").show();
                    setInterval(function(){ $("#mail_sent").hide();}, 30000);
                }
                else if(data.trim() == "2")
                {
                    $("#email_exists").show();
                    setInterval(function(){ $("#email_exists").hide();}, 30000);
                }
                                
                else
                {
                    alert("error");
                }
            }
        });
    }    
   
}


function updatepass() // registration index page (updatepass)
{
  var eid = $("#username").text();
  var pass = $("#password").val(); 
  var repass = $("#repassword").val();
  var base_url = window.location.origin; 
  if(pass == "" && repass != "")
  {
    alert("please type your password");
    return false;
  }
  else if(repass == "" && pass != "")
  {
    alert("please retype your password");
    return false;
  }
  else if(repass == "" && pass == "")
  {
    alert("please type password and retype");
    return false;
  }
  if(pass != repass)
  {
    alert("passwords are not matched");
    return false;
  }
  else
  {
   $.ajax({
    type : 'POST',
    url : '/index/updatepass',
    data : {pass:pass,eid:eid},
    success : function(data)
    {
       //alert(data);return false;
      //if(data == "1")
//      {
//        window.location.href=base_url+"/Frontend/dashboard";
//      }
        if(data.trim() == "1")
        {
         
          window.location.href= base_url+"/Frontend/dashboard/sfpuser";  
        }
        
    }
  }); 
  }
   
}
/*----------------------------------------------------- publisher login --------------------------------------------*/
//function continuelog1() 
//{
//    var base_url = window.location.origin; 
//    //alert(base_url);return false;
//    //alert('abd');return false;
//    var uname = $("#username").val();
//    var pass = $("#password").val();
//     $.ajax({
//    type : 'POST',
//    url : '/index/loginpublisher',
//    data : {email:uname,pass:pass},
//    success : function(data)
//    {   
//        //alert(data);return false;
//     if(data == "1")
//     {
//        
//        window.location.href= base_url+"/Frontend/dashboard";
//     }
//     else if(data == "3")
//     {
//      $("#log-alert1").show();
//      setInterval(function(){ $("#log-alert1").hide();}, 10000);  
//             
//     }          
//     else
//     {
//        $("#log-alert").show();
//         setInterval(function(){ $("#log-alert").hide();}, 10000);
// 
//     }
//    }
//  });
//}
//from devtemplate.phtml
function continuelog1() 
{
    var base_url = window.location.origin; 
    var uname = $("#username").val();
    var pass = $("#password").val();
    if($('#username').val()==''){
       //$("#log-alert1").html("* please provide valid username or password");
         $("#log-alert").show();
      setInterval(function(){ $("#log-alert1").hide();}, 10000);    
    }
    else if($('#password').val()==''){
     //  $("#log-alert1").html("* please provide valid username or password");
         $("#log-alert").show();
      setInterval(function(){ $("#log-alert1").hide();}, 10000);    
    }
    else{
       $.ajax({
    type : 'POST',
    url : '/index/loginpublisher',
    data : {email:uname,pass:pass},
    success : function(data)
    { 
    //alert(data);return false;
   
     if(data == 1)
     {
        //alert(base_url+"/Frontend/dashboard/sfpuser");
       
        window.location.href= base_url+"/Frontend/dashboard";
     }
          
     else
     {
        $("#log-alert").show();
        
 
     }
    }
  });  
    }
    
}

function accessLogin() 
{
	
    var base_url = window.location.origin; 
    var textcode = $("#textcode").val();
 
     if($('#textcode').val()==''){
       //$("#log-alert1").html("* please provide valid username or password");
       return false;
    
    }
  
    else{
    	
       $.ajax({
    type : 'POST',
    url : '/index/accesscode',
    data : {textcode:textcode},
    success : function(data)
    { 
    //alert(data);return false;
   
     if(data == 1)
     {
    	 $('#mask').hide();
 		$('.window').hide();
    	 $(".pop-foot p").hide();
    	
    	 
     }
          
     else
     {
    	 $(".pop-foot p").show();
        
 
     }
    }
  });  
    }
    
}
function runScript(e)
{
	if (e.keyCode == 13) {
		accessLogin();
    }
}
function goBack() {
    window.history.back()
}
//from managecamp.phtml start
function blocker(id)
{
    var base_url = window.location.origin; 
           $.ajax({
           type : "POST",
           url : base_url+"/admin/updateblocker",
           data :  {tempid : id},
           success : function (data)
           {
                if(data == 1)
                {
                    alert("unblocked successfully");
                    //$("#blocker"+id).val("block");
                    $("#tab"+id).html('<input type="button" id="blocker'+id+'" value="block" onclick="unblocker('+id+')" />');
                }
                else
                {
                    alert("error");
                }
           }
        });
        return false;
}
//ckeditor function
//function editor(){
//                var body = CKEDITOR.instances['bodyen'].getData();
//                alert(body);
//                }
////
function unblocker(id)
{
     var base_url = window.location.origin; 
           $.ajax({
           type : "POST",
           url : base_url+"/admin/updateunblocker",
           data :  {tempid : id},
           success : function (data)
           {
        
                if(data == 1)
                {
                    alert("blocked successfully");
                   // $("#blocker"+id).val("unblock");
                    $("#tab"+id).html('<input type="button" id="blocker'+id+'" value="unblock" onclick="return blocker('+id+')"/>');
                }
                else
                {
                    alert("error");
                }
           }
        });
}
//from tempfile.phtml
function requestUrlWithAjax(url)
{var xmlhttp;
 
    //1. create the xmlhttp object
 
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
 
    //2. assign the handler for the onchange event of the object
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            // we arrive here when we have successfully retrieved  the url we asked for
            //1. Set the response text to the text area's value
            //document.getElementById('ajaxResultTarget').html =  url;
             var NWin = window.open((url), '', 'height=400,width=500');
         if (window.focus) 
        {
        NWin.focus();
        }
        return false;
            //2. copy the name of the file retrieved directly above the text-area
         //var iFrame = $('#ajaxResultTarget');
        // iFrame.load(xmlhttp.responseText);
            
            
            // $('#textvalurl').val(url);
            //3. set the filename to the hidden input - see line 199
//          document.getElementById('frmFileName').value = url;

 
            //4. scroll the document down to editingFilename - just above the text-area
           // var xPos, yPos, tgtElem;
          //  tgtElem = document.getElementById('editingFilename');
          //  xPos = 0;
          //  yPos = tgtElem.offsetTop;
          //  window.scrollTo(xPos, yPos);
        }
    }
 
    //3. specify a GET request for the indicated filename,
    //   set asynchronous to true (dont wait for the send method to complete before continuing)
    xmlhttp.open("GET",url,true);
 
    //4. make the request
    xmlhttp.send();
}
 
 
 function goBack() {
    window.history.back()
}
///end tempfile.phtml
//end managecamp.phtml 
function downloadReport()
{
  
    
    var $rows = $("#report").find('tr:has(td)'),
    
    // Temporary delimiter characters unlikely to be typed by keyboard
    // This is to avoid accidentally splitting the actual contents
    tmpColDelim = String.fromCharCode(11), // vertical tab character
    tmpRowDelim = String.fromCharCode(0), // null character

    // actual delimiter characters for CSV format
    colDelim = '","',
    rowDelim = '"\r\n"',

    // Grab text from table into CSV formatted string
    csv = '"' + $rows.map(function (i, row) {
        var $row = $(row),
            $cols = $row.find('td');

        return $cols.map(function (j, col) {
            var $col = $(col),
                text = $col.text();

            return text.replace('"', '""'); // escape double quotes

        }).get().join(tmpColDelim);

    }).get().join(tmpRowDelim)
        .split(tmpRowDelim).join(rowDelim)
        .split(tmpColDelim).join(colDelim) + '"',

    // Data URI
    csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);
if(encodeURIComponent(csv) == '%22%22')
{
    alert("Your report is blank");
}
else
{
   $(".download-report")
    .attr({
    'download': 'report.csv',
        'href': csvData,
        'target': '_blank'
    }); 
}

}
$(".leave-a-reply").click(function () {
	//  alert("chk");
 $(".form-conatainer").find('#name').val("");
 $(".form-conatainer").find('#email').val("");
 $(".form-conatainer").find('#comment').val("");
      $(".form-conatainer").css('display','block');
      
  });
/*----------------------------------------------------- publisher login --------------------------------------------*/

          $(document).ready(function () {
      
        	  $("#database").find('input:first').remove();
                $(".cancel").live("click",function () {
                   
                    $(".form-conatainer").css('display','none');                 
                    
                });
                
                //	======== prettyphoto start =========
    
//	======== prettyphoto end =========

            });
            
             $("#submit1").live("click",function () {
                    var base_url = window.location.origin; 
                     var count = 1;
                     var name = $("#name").val();
                     var eid = $("#email").val();
                     var comment = $("#comment").val();
                     var hidtemp = $("#hiddentemp").val();
                     var regexemail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                     
     if(eid == '' || name == '' || comment == '')
    {
        count = 0;
        alert("please fill the required fields");
        return false;
    }
    if (!eid.match(regexemail)) 
    {
       count = 0;
       alert("Please put valid E-mail");       
         return false;
    } 
    
        if(count != 0) {
            var commnts = $(".pur-infos").find('span#commnts').html();
            
             $.ajax({
            type:'POST',
            data:{count:count,eid:eid,name:name,comment:comment,tempid:hidtemp},
            url:base_url+"/index/marketing",
            success:function(data){
            	
            	var commentSplit = data.split("|");
            	
                var rescommnt = parseInt(commnts) + parseInt(1);
                $(".pur-infos").find('span#commnts').html(rescommnt);
                $(".commnt-box").html(commentSplit[0]);
                $("#commentTag").text("Comments about this campaign ("+commentSplit[1]+")");
                $(".form-conatainer").css('display','none');
            }
        });  
        
        }
        
        else
    {
        alert("Please enter your comment!!!!!!!");
    }
                    
                });
   
    $("#deldev").live("click",function () {
           var base_url = window.location.origin; 
        var id = $(this).parent().find("#hiddendev").val();
      $(this).parent().parent().remove();
       
      
       $.ajax({
            type:'POST',
            data:{devid:id},
            url:base_url+"/Admin/deletedeveloper",
            success:function(data){
            
                if(data == "1")
                {
    
                    alert("developer deleted successfully");
                }
                
            }
        });
    });
/****************** for template index database********************/    

    
    
/******************************************************************/    
    
/*----------------------------------------------------------- Facebook share-------------------------------------------*/
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1442287646033724&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


/*----------------------------------------------------------- Twitter share-------------------------------------------*/
window.twttr = (function (d,s,id) {
 var t, js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return; js=d.createElement(s); js.id=id;
 js.src="https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
 return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
 }(document, "script", "twitter-wjs"));

//Once twttr is ready, bind a callback function to the tweet event
  twttr.ready(function(twttr) { 
   
         twttr.events.bind('tweet', function (event) {
         var item =event.target.id; /*item id*/  
         var id = item.split("-"); /*Split item id by �-�*/  
         var takeid = id[1]; /*only item id */  
         var uid =$('#uid').val(); /* user id from input type hidden field  */  
         var itemid = takeid; /*store item id in a variable*/  
    

      
       });
 }); 
 //edited by anima
$("body").click(function(){
 $('#popupList').hide();
 //$('.icon-arrow-down').trigger('click');
});

$('#contenterrorDiv').css('display','block');
//CKEDITOR.replace( 'bodyen' );