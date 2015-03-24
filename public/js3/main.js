var xz=0;
var wrapperPubForm = "";
var formUniName = $("#formUniName").val();
(function($){

	$(function(){
		
		if($('.wrapper').has('form').length) //$( "ul" ).has( "li" ).length
		{
			wrapperPubForm += $('.wrapper').find('form').html();
			//$('.wrapper').find('form').attr('name',formUniName.replace(/\s/g, '')); 
		}
		
		//alert(wrapperPubForm);
	   
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      
      window.fbAsyncInit = function() {
        FB.init({
            appId      : '1505052056407910',
            cookie     : true,  // enable cookies to allow the server to access 
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.1' // use version 2.0
          });
      };

      
      /********************** added by Poulami for twitter ********************/
      
      tweetdiv  =  document.getElementById('twtbox');
      //alert(tweetdiv);
      if(tweetdiv == '[object HTMLDivElement]')
      {
    	  createButton();
      }
      
      //document.getElementById('dbutton').addEventListener("click",createButton);

       function createButton() {

           // Remove Whatever is in the tweeetbox div if theres somethign 
           //there to avoid adding multiple tweetbuttons

           
           var elem = document.getElementById('twitterbutton');
           if (elem != null) {
               elem.parentNode.removeChild(elem);
           }

           // Create a New Tweet Element
           //msg  =  document.getElementById('msg').value;
           var link = document.createElement('a');
           link.setAttribute('href', 'https://twitter.com/share');
           link.setAttribute('class', 'twitter-share-button');
           link.setAttribute('style', 'margin-top:5px;');
           link.setAttribute('id', 'twitterbutton');
           link.setAttribute('data-count', 'vertical');
          /* link.setAttribute("data-text", "" + msg + "");
   	link.setAttribute("data-url", "www.google.com");
           link.setAttribute("data-via", "ami_koushik");
           link.setAttribute("data-size", "large");*/

          // Put it inside the twtbox div
           
           tweetdiv.appendChild(link);
           $.getScript('https://platform.twitter.com/widgets.js', function(){
           	//calling method load
           	twttr.widgets.load();
           	});
           //twttr.widgets.load(); //very important
       }
       
       
       
      /****************************************************************************************/
       
			$("div.user").live( "click", function() {
				 $(".popupus").hide();  
			        $(".slide_popup1").hide();  
			        $("div.popup").hide();
			        $("ul.ulshow").hide();
			        $("div.slide_popup").hide();
			        $('.restore1').hide();
			        $("div.popup, div.popupusbackground").hide();              
			         
				if(xz==0){
					$("div.user > a").addClass('user_arrow');
					$("div.user_list").fadeIn(300);
					xz++;
				}else{
					$("div.user > a").removeClass('user_arrow');
					$("div.user_list").fadeOut(300);
					xz--;
					click			}
			return false;
		});
		
		
		//var ab=0;
//		$("a#tabPub").live( "click", function() {
//			if(ab==0){
//				$(this).addClass("campaign_arrow");
//				$("div.publish").fadeIn(300);
//				ab++;
//			}else{
//				$(this).removeClass("campaign_arrow");
//				$("div.publish").fadeOut(300);
//				ab--;
//			}
//			return false;
//		});
         
        	$("#viewCam a.close_btn").click(function(){
		  
            var base_url = window.location.origin;
            var uri = location.href.split("/");
        
            var newurl = uri[5];
          
			$("div.popup_new, div.mask2").fadeOut(300, function() {
			$("div.mask2").remove();});
            
            $(".wrapper .SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /><a title='Spacing' class='spacing' href='javascript:void(0)'>spacing</a></div>");

            $(".wrapper .SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'>spacing</a></div>");
            
           // $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
            
            $(".wrapper .SFPTWO_EDITFORM ul").find("li").append('<div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div>');
           
            if($(".wrapper .SFPTWO_TEXTEDIT").find('a').hasClass('sfpDynamic')) 
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
            
            if($(".wrapper .SFPTWO_IMAGEEDIT").find('a').hasClass('sfpDynamic'))
            {  
         	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
      		    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').find('.setting-2').remove();
      			    setTimeout(function(){
                    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");

                 },1000);
      		
      	    }   
         
            if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicLike'))
  		  { 
  		      //alert("hh");
      	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
  		    $(".sfpfbDynamicLike").find('.setting-2').remove();
  			    setTimeout(function(){
                 $(".sfpfbDynamicLike").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

              },1000);
  		
  		 }
           if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicGoogle'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicGoogle").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicGoogle").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 } 
         
           if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicShare'))
 		  {  
     	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
 		    $(".sfpfbDynamicShare").find('.setting-2').remove();
 			    setTimeout(function(){
                $(".sfpfbDynamicShare").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

             },1000);
 		
 		 }
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweet'))
		  { 
		      //alert("hh");
   	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweet").find('.setting-2').remove();
			    setTimeout(function(){
              $(".sfpfbDynamicTweet").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

           },1000);
		
		 }
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweetBird'))
		  { 
		      //alert("hh");
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweetBird").find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpfbDynamicTweetBird").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

          },1000);
		
		 }  
         
        if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicLinkedin'))
		  { 
		      //alert("hh");
	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicLinkedin").find('.setting-2').remove();
			    setTimeout(function(){
           $(".sfpDynamicLinkedin").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

        },1000);
		
		 }
         
            if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicPinterest'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicPinterest").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicPinterest").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicMail'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicMail").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicMail").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
             $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".selectboxaddnow").append('<div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
            $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".chkboxaddnow").append('<div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
            $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".dropdowndrag").append('<div class="seteditdrop"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
            
            $(".wrapper .SFPTWO_TAGEDIT").addClass("explicit_edit"); 
            
            $('.explicit_edit').attr('contenteditable','true'); 
            $('.wrapper input[type="file"]').addClass('inputdisabled');
            $('.wrapper input[type="submit"]').addClass('inputdisabled');
            $('.wrapper input[type="button"]').addClass('inputdisabled');
            $('.wrapper button').addClass('inputdisabled');
            $('.wrapper a').addClass('SFPdisabled');
             $('div.setting-2 a').removeClass('SFPdisabled');  
             $('div.setedit a').removeClass('SFPdisabled'); 
             $('div.seteditopt a').removeClass('SFPdisabled');  
             $('div.seteditdrop a').removeClass('SFPdisabled'); 
             $('.wrapper .SFPTWO_EDITFORM a').removeClass('SFPdisabled');
             $('.imgedivdrg').removeClass('SFPdisabled');
             $('.closethisdrag').removeClass('SFPdisabled');
             $('div.setting-2').hide();
             
			return false
		});
        
        
		$("#pubCam a.close_btn").click(function(){
		  
            var base_url = window.location.origin;
            var uri = location.href.split("/");
        
            var newurl = uri[5];
          
			$("div.popup_new, div.mask2").fadeOut(300, function() {
			$("div.mask2").remove();});
            
            $(".wrapper .SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /><a title='Spacing' class='spacing' href='javascript:void(0)'>spacing</a></div>");

            $(".wrapper .SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'>spacing</a></div>");
            $(".wrapper .nowdrag").parent().find('.setting-2').remove();
            if($(".wrapper .SFPTWO_TEXTEDIT").find('a').hasClass('sfpDynamic'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
            
            if($(".wrapper .SFPTWO_IMAGEEDIT").find('a').hasClass('sfpDynamic'))
            {  
         	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
      		    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').find('.setting-2').remove();
      			    setTimeout(function(){
                    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");

                 },1000);
      		
      	    }
         
         
            if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicLike'))
  		  { 
  		      //alert("hh");
      	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
  		    $(".sfpfbDynamicLike").find('.setting-2').remove();
  			    setTimeout(function(){
                 $(".sfpfbDynamicLike").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

              },1000);
  		
  		 }
           if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicGoogle'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicGoogle").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicGoogle").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 } 
           if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicShare'))
 		  {  
     	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
 		    $(".sfpfbDynamicShare").find('.setting-2').remove();
 			    setTimeout(function(){
                $(".sfpfbDynamicShare").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

             },1000);
 		
 		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweet'))
		  { 
		      //alert("hh");
   	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweet").find('.setting-2').remove();
			    setTimeout(function(){
              $(".sfpfbDynamicTweet").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

           },1000);
		
		 }
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweetBird'))
		  { 
		      //alert("hh");
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweetBird").find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpfbDynamicTweetBird").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

          },1000);
		
		 }
         
        if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicLinkedin'))
		  { 
		      //alert("hh");
	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicLinkedin").find('.setting-2').remove();
			    setTimeout(function(){
           $(".sfpDynamicLinkedin").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

        },1000);
		
		 }
         
            if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicPinterest'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicPinterest").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicPinterest").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicMail'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicMail").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicMail").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
            // $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
            
            $(".wrapper .SFPTWO_EDITFORM ul").find("li").append('<div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div>');
           
              $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".selectboxaddnow").append('<div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
            $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".chkboxaddnow").append('<div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
            $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".dropdowndrag").append('<div class="seteditdrop"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
           
            $(".wrapper .SFPTWO_TAGEDIT").addClass("explicit_edit");
            
            $('.explicit_edit').attr('contenteditable','true'); 
            $('.wrapper input[type="file"]').addClass('inputdisabled');
            $('.wrapper input[type="submit"]').addClass('inputdisabled');
            $('.wrapper input[type="button"]').addClass('inputdisabled');
            $('.wrapper button').addClass('inputdisabled');
            $('.wrapper a').addClass('SFPdisabled');
             $('div.setting-2 a').removeClass('SFPdisabled');  
             $('div.setedit a').removeClass('SFPdisabled'); 
             $('div.seteditopt a').removeClass('SFPdisabled');  
             $('div.seteditdrop a').removeClass('SFPdisabled'); 
            $('.wrapper .SFPTWO_EDITFORM a').removeClass('SFPdisabled');
            $('.imgedivdrg').removeClass('SFPdisabled');
            $('.closethisdrag').removeClass('SFPdisabled');
              $('div.setting-2').hide();
              
              $('#dragfirst a').removeClass('SFPdisabled'); 
			return false
		});
        
        $(".tab_content4").hide(); //Hide all content
       	$("ul.nav li").removeClass("active");
    	$("ul.nav li:first").addClass("active").show(); //Activate first tab
    	//$(".tab_content4:first").show(); //Show first tab content
    	
       var cd=0;
		$("a.down").live( "click", function() {
			if(cd==0){
				$("div.date_time").slideToggle(300);
				$(this).addClass("down_arrow");
				cd++;
			}else{
				$("div.date_time").slideUp(300);
				$(this).removeClass("down_arrow");
				cd--;
			}
			return false;
		});
		
		
		/**
 * var ele = $("div.left_panel > ul");
 * 			var all_anchor = ele.children("li").children("a");
 * 			$("div.left_panel > ul > li > ul").fadeOut(300);
 * 			all_anchor.live('click',function(){
 * 			
 * 			if($(this).next('ul').length)
 * 		   {
 * 			if($(this).next().is(":hidden")){
 * 			   $("div.left_panel > ul > li > ul").fadeOut();
 * 			   all_anchor.removeClass("active");
 * 			   $(this).addClass("active").next('ul').fadeIn();
 * 			  }else{
 * 			   $(this).removeClass("active").next('ul').fadeOut();
 * 			  };  
 * 		   }
 * 		   else
 * 		   {
 * 			$("div.left_panel > ul > li > ul").fadeOut();
 * 			   all_anchor.removeClass("active");
 * 			   $(this).addClass("active");
 * 		   }
 * 		   return false;
 * 		});
 */
		
		
	//	$( ".datepicker" ).datepicker();
		
		
		$('#datetimepicker1').datetimepicker({
			datepicker:false,
			format:'H:i',
			step:5
		});
		
		
	/*	$("a.cancel_btn").live( "click", function() {
			$("div.popup, div.start").fadeIn(300);
			return false
		});
		$("div.popup > a.close_btn").live( "click", function() {
			$("div.popup, div.start").fadeOut(300);
			return false
		});*/
        
     
        
		
		
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content
		//On Click Event
		$("ul.tabs li").live( "click", function() {
			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content
			var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active content
			return false;
		});
		
		
		
		$("a.open").live( "click", function() {
			$("div.small_popup").fadeIn(300);
			$("body").append('<div class="mask"></div>');
			return false
		});
		$("div.small_popup > a.close_btn").live( "click", function() {
			$("div.small_popup, div.mask").fadeOut(300, function() {
				$("div.mask").remove();
				  $('div.setting-2').hide();
			});
			return false
		});
		
		
		$("a.open2").live( "click", function() {
			$("div.pop_img2").fadeIn(300);
			$("body").append('<div class="mask"></div>');
			$('.scroll-pane').jScrollPane();
			$('select.styled').customSelect();
			return false
		});
		
		$("a.open2back").live( "click", function() {
			
			$("div.popupusbackground").fadeOut(300);
			$("body").append('<div class="mask"></div>');
			$('.scroll-pane').jScrollPane();
			$('select.styled').customSelect();
			return false
		});
		
		$("div.pop_img2 > a.close_btn").live( "click", function() {
			$("div.pop_img2, div.mask").fadeOut(300, function() {
				$("div.mask").remove();
				  $('div.setting-2').hide();
			});
            $(".popup").css('display','block');
            $(".popupus").css('display','block');
             // $(".popupusbackground").css('display','block');
            return false
		});
		
			
//		
//		$(".tab_content2").hide(); //Hide all content
//		$("ul.tabs2 li:first").addClass("active").show(); //Activate first tab
//		$(".tab_content2:first").show(); //Show first tab content
//		//On Click Event
//		$("ul.tabs2 li").click(function() {
//			$("ul.tabs2 li").removeClass("active"); //Remove any "active" class
//			$(this).addClass("active"); //Add "active" class to selected tab
//			$(".tab_content2").hide(); //Hide all tab content
//			var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
//			$(activeTab).fadeIn(); //Fade in the active content
//			return false;
//		});
		
		
		
		
		
		
		
		/*$("a.open3").live( "click", function() {
			$("div.slide_popup").fadeIn(300);
			return false
		});
		$("div.slide_popup > a.close_btn").live( "click", function() {
			$("div.slide_popup").fadeOut(300);	
		return false
		});*/
		
		
		
	
		$(".tab_content3").hide(); //Hide all content
		$("ul.tabs3 li:first").addClass("active").show(); //Activate first tab
		$(".tab_content3:first").show(); //Show first tab content
		//On Click Event
		$("ul.tabs3 li").live( "click", function() {
		$("ul.tabs3 li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content3").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
		});	
        
        $(".tab_content5").hide(); //Hide all content
		$("ul.tabs5 li:first").addClass("active").show(); //Activate first tab
		$(".tab_content5:first").show(); //Show first tab content
		//On Click Event
		$("ul.tabs5 li").live( "click", function() {
		$("ul.tabs5 li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content5").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
		});	
	   
            $(".tab_content7").hide(); //Hide all content
			
       
      $(".save-n-continue").click(function (){
        $('#tabPrv').hide();
        $('#tabPl').show();
        $('ul.nav li').removeClass('active');
        $('ul.nav li:nth-child(2)').addClass('active').show();
      });
      
      /*$("#saveCam").click(function (){

        var url = location.href.split("/");
        var camName = document.getElementById('nameCam').value;
        var camNo = document.getElementById('cNo').value;
        var base_url = window.location.origin;
        
        camName = camName.replace(/ /g,"_");
        //alert(camName.indexOf("/") > -1);
        if(camName == "")
        {
            alert("Please insert a 
            ");
            return false;
        }
        if(camName.indexOf("/") > -1)
        {
            alert("Special character '/' is not allowed");
            return false;
        }
        
       // alert(camName);
        $.ajax({
           type : "POST",
           url : base_url+"/frontend/savename",
           data :  {camName : camName, camNo : camNo, tempName : url[5]},
           success : function (data)
           {
               if(data == 1)
               {
                    $("#url").show();
                    $("#fieldLabel").html('<label id="webUrl"> '+base_url+'/Apps/'+camName+'/'+camNo+'</label>');
               }
           }
        });
      });*/	
		
     $("div#tabPl > a.step_back").live( "click", function() {
			      //alert("2nd");
                  $("ul.nav li").removeClass("active");
   	              $("ul.nav li:first").addClass("active").show();
                  $(".tab_content4").hide(); 
                  $("#tabPrv").show(); 
             });
             
         $("div#tabPb > a.step_back").live( "click", function() {
			      //alert("3rd");
                  var base_url = window.location.origin;
                  $("ul.nav li").removeClass("active");
   	              $("ul.nav li:nth-child(2)").addClass("active").show();
                  $(".tab_content4").hide(); 
                  $('#tabPl').show();
                  
                  var tempName = location.href.split("/"); 
                  var encoded = "";
              	   var i;
                  for (i=0; i<tempName[5].length;i++) {
                      var a = tempName[5].charCodeAt(i);
                      var b = a ^ 123;    // bitwise XOR with any number, e.g. 123
                      encoded = encoded+String.fromCharCode(b);
                  }	
                   $.ajax({
                       type : "POST",
                       url : base_url+"/frontend/savencontinue",
                       data : {'tName' : encoded},
                       success : function(data)
                       {
                          var hold = data.split("||");
                            var jsObject = JSON.parse(hold[1]);
                           for(i=0;i<jsObject.length;i++)
                           {
                                if(jsObject[i].webUrl != "")
                                {
                                    //alert("campaign");
                                    $("#web").attr('class','span_check c_on');
                                    $("#web").children('input').attr('checked', true);
                                    
                                    $("#webPart").show();
                                    $(".camName").hide();
                                    $("#url").show();
                                    $("#fieldLabel").find('label#webUrl').show();
                                    $("#webUrl").text(jsObject[i].webUrl);
                                }
                                
                           } 
                       }
                });
             });    
		 
         /*********************** edited by Poulami *******************/
         $("div#tabPl > a.close_bottom").live( "click", function() {
                var setFlag = 0;
                var tempName = location.href.split("/");
                var base_url = window.location.origin;
                var camNo = document.getElementById('cNo').value;
                var camName = "";
                
                var encoded = "";
            	var i;
                for (i=0; i<tempName[5].length;i++) {
                    var a = tempName[5].charCodeAt(i);
                    var b = a ^ 123;    // bitwise XOR with any number, e.g. 123
                    encoded = encoded+String.fromCharCode(b);
                }	
                
		      if($("#web").attr('class') == 'span_check c_on')
              {
                camName = $("#nameCam").val();
              }
              
              if($("#facebook").attr('class') == 'span_check c_on')
              {
                
                var selectVal = $("#myItem").val();
                var value = selectVal.split('|--||--|');
                var fbPage = $("#myItem").find('option:selected').text();
                postmessagetofacebook($("#myItem").val());
              }
              
                var randHtml = $('.wrapper').find('form.SFPTWO_EDITFORM').html();
                if(randHtml == null)
                {
                    var randName = "form";
                }
                else
                {
                    var randName =$('.wrapper').find('form.SFPTWO_EDITFORM').attr('name');
                }
              
              if(fbPage == 'SELECT YOUR PAGE')
              {
                alert("Please select your facebook page and proceed");
                return false;
              }
              else if($("#web").attr('class') == 'span_check c_on' && camName == "")
              {
                alert("Please provide your campaign name and proceed");
                return false;
              }
              if($("#web").attr('class') != 'span_check c_on' && $("#facebook").attr('class') != 'span_check c_on')
              {
                    alert("Please select an option to continue");
              }
              else
              {
               // alert(camName);
                    $.ajax({
                       type : "POST",
                       url : base_url+"/frontend/savencontinue",
                       data : {'tName' : encoded,camName : camName},
                       success : function(data)
                       {
                            var hold = data.split("||");
                            var jsObject = JSON.parse(hold[1]);
                            var camName = hold[0].trim();
                            if(jsObject != undefined)
                            {
                                for(i=0;i<jsObject.length;i++)
                               {
                                    if(camName == undefined)
                                    {
                                        camName = "";
                                        
                                     }
                                    else if(jsObject[i].new_template_name != camName && camName != null)
                                    {
                                        camName = camName;
                                    }
                                    else if(jsObject[i].new_template_name == "")
                                    {
                                        camName = camName;
                                    } 
                                    else
                                    {
                                        camName = jsObject[i].new_template_name;
                                    }
                                    
                                    if(jsObject[i].fbPage == "")
                                    {
                                        selectVal = selectVal;
                                        value = selectVal.split('|--||--|');
                                        fbPage = fbPage;
                                    }
                                    else if(jsObject[i].fbPage != fbPage && fbPage != undefined )
                                    {
                                        if(jsObject[i].appId == "")
                                        {
                                            setFlag = 1;
                                        }
                                        selectVal = selectVal;
                                        value = selectVal.split('|--||--|');
                                        fbPage = fbPage;
                                    }
                                    else if(fbPage == undefined)
                                    {
                                        selectVal = "";
                                        value = "";
                                        fbPage = "";
                                        
                                    }
                                    else
                                    {
                                        if(jsObject[i].appId == "")
                                        {
                                            setFlag = 1;
                                        }
                                        selectVal = jsObject[i].pageId+"|--||--|"+jsObject[i].pageAccessToken;
                                        value = selectVal.split('|--||--|');
                                        fbPage = jsObject[i].fbPage;
                                    }
                               }
                            }
                            
                          var camName = camName.replace(/ /g,"_");
                          if(camName == "")
                          {
                            var webUrl = "";
                          }
                          else
                          {
                            var webUrl = base_url+'/Apps/'+camName+'/'+camNo;
                          }
                           //alert(webUrl + " && "+ camName + " && "+camNo);
                          
                            if(setFlag)
                            {
                                alert("Please connect to facebook app");
                            }
                            else
                            {
                                $.ajax({
                                   type : "POST",
                                   url : base_url+"/frontend/continue",
                                   data : {webUrl : webUrl, camName : camName, camNo : camNo, fbPage : fbPage, pageId : value[0], accessToken : value[1], fbUrl: $("#fbUrl").val(), template : encoded,formName : randName},
                                   success : function(data)
                                   {
                                        $("div#tabPl > a.close_bottom").text("Loading...");
                                        setTimeout(function(){
                                            $("div#tabPl > a.close_bottom").text("save & continue");
                                        $("ul.nav li").removeClass("active");
                       	                $("ul.nav li:nth-child(3)").addClass("active").show();
                                        $(".tab_content4").hide(); 
                                        $('#tabPb').show(); }, 5000);
                                   }
                                }); 
                            }
                       }
                   }); 
              }
        });/*********************** edited by Poulami *******************/
          
          
          
          $("div#tabPb > a.close_bottom").live( "click", function() {
                alert("3rdd");
            });
         
         
         $("#fbIcon").click(function(){
            
            var webUrl = $("#webLink").attr('href');
            
            //alert("facebook")
            FB.ui(
              {
                method: 'share',
                href: webUrl,
              },
              function(response) {
                if (response && !response.error_code) {
                  alert('Posting completed.');
                } else {
                  alert('Error while posting.');
                }
              }
            );
         });
         
         
         $('input[type="checkbox"]').click(function(){
            //if($(this).attr("value")=="1"){
//                $(".facebook").toggle();
//            }
            if($(this).attr("value")=="2"){
                $(".google").toggle();
            }
        });
         $('input[type="radio"]').click(function(){
              if($(this).attr("value")=="2"){
                  $(".text").hide();
                  $(".fb").show();
              }
              if($(this).attr("value")=="4"){
                  $(".text").hide();
                  $(".gle").show();
              }
          });
          
          
          $('input[type="radio"]').click(function(){
              if($(this).attr("value")=="1"){
                  $(".fb").hide();
              }
              if($(this).attr("value")=="3"){
                  $(".gle").hide();
              }
          });
		
		$("#addFrnd").click(function(){
		  
          var base_url = window.location.origin;
          var tempName = location.href.split("/");
          
          FB.ui({ method: 'apprequests', 
            app_id : '1442287646033724',
            message: 'My diaolog...'},
            function(response) 
              { 
                $.ajax({
                    type: 'POST',
                    url : base_url+'/frontend/showfriend',
                    data :{fId : response.to,tName : tempName[5]},
                    success : function(data)
                    {
                        
                        var jsObject = JSON.parse(data);
                       for(i=0;i<jsObject.name.length;i++)
                       {
                            if(jsObject.result == 1)
                            {
                                $('#friend').append("<tr><td>"+jsObject.name[i]+"</td><td><a href='#'>+</a></td></tr>");
                            }
                            else
                            {
                                alert("Your invitaion is not sent");
                            }
                       }
                    }
                });
              });
		});
        
        $("#fAdd").click(function(){
            
            var base_url = window.location.origin;
            var tempName = location.href.split("/");
            var name = $("#fName").val();
            
            $.ajax({
                    type: 'POST',
                    url : base_url+'/frontend/invfriend',
                    data :{fname : name,tName : tempName[5]},
                    success : function(data)
                    {
                        if(data == 1)
                        {
                            $('#friend').append("<tr><td>"+name+"</td><td><a href='#'>+</a></td></tr>");
                        }
                        else
                        {
                            alert("Your invitaion is not sent");
                            $.getScript('https://platform.twitter.com/widgets.js', function(){
                            	//calling method load
                            	twttr.widgets.load();
                            	});       }
                    }
            });
                    
            
        });
	   
       $("#report").click(function(){
        
          $('#invlist').find("tr:gt(0)").remove();
          $('#uinvlist').find("tr:gt(0)").remove();
           var base_url = window.location.origin;
           var tempName = location.href.split("/");
           var invNo = 0;
            $.ajax({
                    type: 'POST',
                    url : base_url+'/frontend/invlist',
                    data :{},
                    success : function(data)
                    {
                        if(data != 0)
                        {
                             var jsObject = JSON.parse(data);
                             
                            // alert(jsObject);
                             
                             var count = jsObject.length;
                             if(count != 0)
                             {
                                
                                for(i=jsObject.length;i>0;i--)
                                {
                                    
                                    var index = parseInt(i) - parseInt(1);
                                    if(jsObject[index].status == '111')
                                    {
                                       
                                        invNo = invNo + parseInt(1);
                                        if(invNo <= 5)
                                        {
                                            $('#invlist').append("<tr><td>"+jsObject[index].invited+"</td></tr>");
                                        }
                                    }
                                }
                                
                                for(i=0;i<jsObject.length;i++)
                                {
                                    if(jsObject[i].status == '101')
                                    {
                                        $('#uinvlist').append("<tr><td>"+jsObject[i].invited+"</td><td><input onclick='check(this);' id='accept' value='"+jsObject[i].invited+"' type='checkbox' /></td></tr>");
                                    }
                                }
                                $("#count").html(invNo);
                                                       
                             }
                             else
                             {
                                $("#report_ul").html('<li><h3>Reports</h3><p>There are no data saved yet</p></li>');
                             }
                        }
                        else
                        {
                            $("#report_ul").html('<li><h3>Reports</h3><p>There are no data saved yet</p></li>');
                        } 
                    }
            });
       });	
      
       
         $(window).scroll(function () {
   set = $(document).scrollTop()+"px";
   $('div.left_panel').animate({top:set},{duration:1000,queue:false});
  });
  
  
  $("a.open3").live('click', function(){
	  
		 $(".popupus").hide();  
         $(".slide_popup1").hide();  
         $("div.popup").hide();
         $("div.popupusbackground").hide();   
         $("ul.ulshow").hide();
         $('.restore1').hide();
          if($("div.user_list").css('display')=='block'){
         $("div.user").trigger('click');
        }
//  alert("test");

    // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;

  if($("div.popup").show())
  {
    $("div.popup").hide();
  }

  $("div.slide_popup").toggle(effect, options, duration);
  return false
 }); 
 
  $("a.open4").live('click', function(){
  

	  $(".popupus").hide();  
      $("div.popup").hide();
      $("div.popupusbackground").hide();  
      $("ul.ulshow").hide();
      $("div.slide_popup").hide();
      $('.restore1').hide();
       if($("div.user_list").css('display')=='block'){
         $("div.user").trigger('click');
        }
    // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;

  if($("div.popup").show())
  {
    $("div.popup").hide();
  }
   $('div.slide_popup1 #tab_1_new').show();
  $("div.slide_popup1").toggle(effect, options, duration);
  $('.slide_popup2').hide(effect, options, duration);
  $('.slide_popupurl').hide(effect, options, duration);
  $('.slide_fbshare').hide(effect, options, duration);
  $('.slide_fblike').hide(effect, options, duration);
  $('#tab1new').trigger('click')
  $('div.slide_popup1 #tab_2_new').hide();
  

  return false
 });
 
 //indexus slide.....................
 
 $("a.open5").live('click', function(){
  
    $("div.loadpage ul.ulshow").css('display','none');
    //$("div.loadpage ul.ulshow").css('display','none');
    $("div.slide_popup").hide();
    // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;

  if($("div.popup").show())
  {
    $("div.popup").hide();
  }

  $("div.slide_popup_indexus").toggle(effect, options, duration);
  return false
 }); 
 
 $("div.slide_popup_indexus > a.close_btn").click(function(){
      // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
  $("div.slide_popup_indexus").toggle(effect, options, duration);
 return false
 });
 
  //////*****************************

 /*$("a.open3").live('click', function(){
  $("div.slide_popup").animate({"right":0},300);
  return false
 });*/
  $("div.slide_popup > a.close_btn").click(function(){
      // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
  $("div.slide_popup").toggle(effect, options, duration);
 return false
 });
 
 $("div.slide_popup1 > a.close_btn").click(function(){
      // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };
    // Set the duration (default: 400 milliseconds)
    var duration = 700;
  $("div.slide_popup1").toggle(effect, options, duration);
 return false
 });
       
  $("div.slide_popup2 > a.close_btn").click(function(){
      // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
  $("div.slide_popup2").toggle(effect, options, duration);
 return false
 });
  
 
  $("div.slide_popupurl > a.close_url").click(function(){
      // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
  $("div.slide_popupurl").toggle(effect, options, duration);
 return false
 });
 
 
 $("div.slide_fblike > a.close_like").click(function(){
      // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
  $("div.slide_fblike").toggle(effect, options, duration);
 return false
 });
 
  
 $("div.slide_fbshare > a.close_share").click(function(){
      // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
  $("div.slide_fbshare").toggle(effect, options, duration);
 return false
 });
 
 $("div.slide_linkedin > a.close_linkedin").click(function(){
     // Set the effect type
   var effect = 'slide';

   // Set the options for the effect type chosen
   var options = { direction: 'right' };

   // Set the duration (default: 400 milliseconds)
   var duration = 700;
 $("div.slide_linkedin").toggle(effect, options, duration);
return false
});
 
 $("div.slide_linkedin_share > a.close_linkedin_share").click(function(){
     // Set the effect type
   var effect = 'slide';

   // Set the options for the effect type chosen
   var options = { direction: 'right' };

   // Set the duration (default: 400 milliseconds)
   var duration = 700;
 $("div.slide_linkedin_share").toggle(effect, options, duration);
return false
});
 
 
 
 $("div.slide_fbSimple_Share > a.close_fbSimple_Share").click(function(){
     // Set the effect type
   var effect = 'slide';

   // Set the options for the effect type chosen
   var options = { direction: 'right' };

   // Set the duration (default: 400 milliseconds)
   var duration = 700;
 $("div.slide_fbSimple_Share").toggle(effect, options, duration);
return false
});
 
 
 
 /******** close button for twitter share panel by Poulami ***********/
 $("div.slide_tweet_share > a.close_share").click(function(){
     // Set the effect type
   var effect = 'slide';

   // Set the options for the effect type chosen
   var options = { direction: 'right' };

   // Set the duration (default: 400 milliseconds)
   var duration = 700;
 $("div.slide_tweet_share").toggle(effect, options, duration);
return false
});
 
 /******** close button for twitter bird panel by Poulami ***********/
 $("div.slide_tweet_bird > a.close_share").click(function(){
     // Set the effect type
   var effect = 'slide';

   // Set the options for the effect type chosen
   var options = { direction: 'right' };

   // Set the duration (default: 400 milliseconds)
   var duration = 700;
 $("div.slide_tweet_share").toggle(effect, options, duration);
return false
});
 
 /******** close button for google share panel by Poulami ***********/
 $("div.slide_google_share > a.close_share").click(function(){
     // Set the effect type
   var effect = 'slide';

   // Set the options for the effect type chosen
   var options = { direction: 'right' };

   // Set the duration (default: 400 milliseconds)
   var duration = 700;
 $("div.slide_google_share").toggle(effect, options, duration);
return false
});
 

  
 $("a.edit").live('click', function(){
     if($("div.slide_popup").show())
  {
    $("div.slide_popup").hide();
  }
  if($("div.slide_popup1").show())
  {
    $("div.slide_popup1").hide();
  }
  
  if($("div.slide_popup2").show())
  {
    $("div.slide_popup2").hide();
  }
  
  if($("div.slide_popupurl").show())
  {
    $("div.slide_popupurl").hide();
  }
  
   if($("div.slide_popuplike").show())
  {
    $("div.slide_popuplike").hide();
  }
  
    if($("div.slide_popupshare").show())
  {
    $("div.slide_popupshare").hide();
  }
  
  $("div.popup").animate({"right":0},300);
  $("div.popup1").animate({"right":0},300);
  $("div.popup2").animate({"right":0},300);
  $("div.slide_popupurl").animate({"right":0},300);
  $("div.slide_popupshare").animate({"right":0},300);
  $("div.slide_popuplike").animate({"right":0},300);
  return false
 });

 
 
 
  $("div.popup > a.close_btn").click(function(){
  $("div.popup").animate({"right":"-416px"},300);
 return false
 });
       
	
	});
})(jQuery);


/*************** set dynamic twitter share with id by Poulami *********************/
$(".tweet_share").live( "click", function() {
	
	var elem = document.getElementById('twitterbutton');
    if (elem != null) {
        elem.parentNode.removeChild(elem);
    }
    
    

    // Create a New Tweet Element
    id   = $('.tweetId').val();
    protocol = $(".sfpselectaccesstwt").val();
    url  = $('.tweetUrl').val();
    msg  = $('.tweetText').val();
    
    
    var link = document.createElement('a');
    link.setAttribute('href', 'https://twitter.com/share');
    link.setAttribute('class', 'twitter-share-button');
    link.setAttribute('style', 'margin-top:5px;');
    link.setAttribute('id', 'twitterbutton');
    link.setAttribute('data-count', 'vertical');
    link.setAttribute("data-text", msg);
    link.setAttribute("data-url", protocol+url);
    link.setAttribute("data-via", id);
    
    

   // Put it inside the twtbox div
    tweetdiv  =  document.getElementById('twtbox');
    tweetdiv.appendChild(link);
    $.getScript('https://platform.twitter.com/widgets.js', function(){
    	//calling method load
    	twttr.widgets.load();
    	});
});

/*************** set dynamic twitter share by Poulami *********************/
$(".tweet_bird").live( "click", function() {
	
	var u = $(".tweetUrlBird").val();
	var t = $(".tweetTextBird").val();
	
	$(".sfpfbDynamicTweetBird a").attr('onclick',"twt_bird_click('"+u+"','"+t+"')");
	
	
});

/*************** set dynamic google share by Poulami *********************/
$(".google_share_btn").live("click", function(){
	var url = $('.goolgeUrl').val();
	$(".sfpfbDynamicGoogle a").attr('onclick',"googleShare('"+url+"')");
});



function preview()
{
	   $('.spacediv').css('display','none');
	  $(".popupus").hide();  
      $(".slide_popup1").hide();  
      $("div.popup").hide();
      $("ul.ulshow").hide();
      $("div.slide_popup").hide();
      $('.restore1').hide();
      if($("div.user_list").css('display')=='block'){
      	$("div.user").trigger('click');
      }
     
      $("div.popup, div.popupusbackground").hide();             
     
      
    if($(".user_list").css('display') == 'block')
    {
        $(".user_list").css('display','none');
        $(".user > a").attr('class','');
        xz = 0;
    }
    
    
    $("#tabPr").html("");
    
    //var nName = [];
    $("ul.nav li").removeClass("active");
   	$("ul.nav li:first").addClass("active").show();
    $(".tab_content4").hide(); 
    $("#tabPrv").show();        
    
    $('div.setting-2').remove();
    $('div.ullidrag').remove();
    $('div.setedit').remove();
    $('div.seteditopt').remove(); 
    $('div.seteditdrop').remove(); 
    $('.explicit_edit').attr('contenteditable',false); 
    
    $(".ui-resizable-handle").remove();
        
    $('.explicit_edit').removeAttr('contenteditable');
    
    
    $(".wrapper .SFPTWO_TAGEDIT").removeClass("explicit_edit");
    $(".wrapper .SFPTWO_TEXTEDIT").removeClass("explicit_edit");
    
    $('.wrapper input[type="file"]').removeClass('inputdisabled');
    $('.wrapper input[type="submit"]').removeClass('inputdisabled');
    $('.wrapper input[type="button"]').removeClass('inputdisabled');
    $('.wrapper button').removeClass('inputdisabled');
    $('.wrapper .inputdisabled').removeAttr('SFPdisabled');
    $('.wrapper a').removeClass('SFPdisabled'); 
    $('.wrapper input[type="file"]').removeAttr('SFPdisabled');
    $('.wrapper input[type="submit"]').removeAttr('SFPdisabled');
    $('.wrapper input[type="button"]').removeAttr('SFPdisabled');
    $('.imgedivdrg').removeClass('SFPdisabled');
    $('.closethisdrag').removeClass('SFPdisabled');
      $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".selectboxaddnow").append('<div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
$(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".chkboxaddnow").append('<div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
      $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".dropdowndrag").append('<div class="seteditdrop"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
           
    /*************************************  Added by Aritra **********************************************/
     var minNumber = 0000; // The minimum number you want
     var maxNumber = 1000; // The maximum number you want
     var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber); 
                                 
     var minNumber1 = 777; // The minimum number you want
     var maxNumber1 = 999; // The maximum number you want
     var random1 = Math.floor(Math.random() * (maxNumber1 + 1) + minNumber1); 
                                 
     
     
       var i = 1;
                $('.wrapper').find('form > ul li').each(function(){
                     if($(this).hasClass('dottedLi'))
                     {
                        var newclass = "element"+i;
                        $(this).addClass(newclass);
                        i++;
                     }
 
                });
                var total = $('.wrapper').find('form > ul li.dottedLi').length;
                for(var j =1; j<=total; j++)
                {
                    var cls = "element"+j; 
                   // alert(cls);
                    var htm0 = $('.wrapper').find('form > ul li.'+cls).find('input[type=email]').html();
                    var htm  = $('.wrapper').find('form > ul li.'+cls).find('input[type=text]').html();
                    var htm1 = $('.wrapper').find('form > ul li.'+cls).find('input[type=checkbox]').html();
                    var htm2 = $('.wrapper').find('form > ul li.'+cls).find('textarea').html();
                    var htm3 = $('.wrapper').find('form > ul li.'+cls).find('input[type=radio]').html();
                    var htm4 = $('.wrapper').find('form > ul li.'+cls).find('select').html();
                    
                    if(htm0 == "")
                    {
                     
                      var textEmailname = 'textBoxEmail'+cls;
                      $('.wrapper').find('form > ul li.'+cls).find('input[type=email]').attr('name',textEmailname);
                    }
                    
                    if(htm == "")
                    {
                     
                      var textname = 'textbox'+cls;
                      $('.wrapper').find('form > ul li.'+cls).find('input[type=text]').attr('name',textname); 
                    }
                    if(htm1 == "")
                    {
                        
                         var textname = 'checkBox'+cls;
                         $('.wrapper').find('form > ul li.'+cls).find('div#chkclone').attr('name',textname);
                         $('.wrapper').find('form > ul li.'+cls).find('input[type=checkbox]').attr('name',textname+'[]'); 
                        
                    }
                    if(htm2 == "")
                    {   
                      var textname = 'textarea'+cls;
                      $('.wrapper').find('form > ul li.'+cls).find('textarea').attr('name',textname); 
                    }
                     if(htm3 == "")
                    {
                        $('.wrapper').find('form > ul li.'+cls).find('input[type=radio]').each(function(){
                            $(this).attr('name','radioName');
                       });
                    }
                    
                    if(htm4 != null)
                    {
                      var selectboxname = 'selectbox'+cls;
                      $('.wrapper').find('form > ul li.'+cls).find('select').attr('name',selectboxname);   
                    }
                   /** if($('.wrapper').find('form > ul > li.'+cls).find('input[type=text]'))
                    {
                        alert("textbox");
                    }
                    else if($('.wrapper').find('form > ul > li.'+cls).find('input[type=checkbox]'))
                    {
                        alert("chkbox");
                    }**/
                }
                $('.wrapper').find('form > ul li').each(function(){ 
                    });
     /*************************************  Added by Aritra **********************************************/
    
    var resd =  $("#hidder").val();
    var d = new Date();
    var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    $('#saveautosave').val(time);
    
    $("div#pubCam").fadeIn(300);
    $("body").append("<div class='mask2'></div>"); 
    var url = location.href.split("/");
    var filename = $('#filename').val();
    
    var base_url = window.location.origin;
    var wrappercontent = $('.wrapper').html();
   
    
    if(new_name == "Photocontest")
    {
        alert("please provide new template name");
        return false;
    }
    
    var prCamNo   = document.getElementById('cNo').value;
    var prCamName = document.getElementById('newName').value;
    
    //alert(prCamName+" %%%%%% "+prCamNo);
    
    if(prCamNo == "" && prCamName == "")
    {
        var quotes = new Array("demo_name1", "demo_name2", "demo_name3", "demo_name4"),
        randno = quotes[Math.floor( Math.random() * quotes.length )];
        var new_name = randno;
        
        var campaignnumber = Math.round(Math.random() * 100 + 1);
        var campaignnumber1 = Math.round(Math.random() * 1000 + 1);
        var campaign = campaignnumber+campaignnumber1;
        
        document.getElementById('newName').value = new_name;
        document.getElementById('cNo').value     = campaign;
    }
    else
    {
        document.getElementById('newName').value = prCamName;
        document.getElementById('cNo').value     = prCamNo;
    }

   $.ajax({
        type:'POST',
        data:{wrappercontent:wrappercontent,urlchk:url[5],filename:filename},
        url:base_url+"/Frontend/savepage1",
        success:function(data){
              $('#tabPr').contents().find('a').css('pointer-events','none');
              $('#tabPr').contents().find('a').css('cursor','default');
              $('#tabPr').contents().find('input[type="submit"]').css('pointer-events','none');
              $('#tabPr').contents().find('input[type="submit"]').css('cursor','default');
              $('#tabPr').contents().find('input[type="button"]').css('pointer-events','none');
              $('#tabPr').contents().find('input[type="button"]').css('cursor','default');
              $('#tabPr').contents().find('input[type="file"]').css('pointer-events','none');
              $('#tabPr').contents().find('input[type="file"]').css('cursor','default');
            //alert('Your Page Is Saved');
        }
    });
    
    $.ajax({
        type : "POST",
        url : base_url+"/frontend/preview",
        data : {url0 : url[2], url1 : url[5], filename : 'index.php', campaignNo : campaign},
        beforeSend: function() {
            $(".load").css('display','block');
        },
        complete: function() {
            $(".load").css('display','none');
        },
        success : function(response)
        {
            var data = response.split("||");
            data[0] = data[0].replace(/\s/g, '');
            if(data[0] == "noform")
            {
                var rand = "form_"+random1+random;
                var res = $('.wrapper').find('form.SFPTWO_EDITFORM').html();
                
                if(res != "null")
                {
                  $('.wrapper').find('form').attr('name',rand);  
                }
            }
            else
            {
                $('.wrapper').find('form').attr('name',data[0].replace(/\s/g, '')); 
            }
            var el = document.getElementById('tabPr');
            el.src = data[1]; 
            //requestUrlWithAjaxPreview(data[1]);
        }
    });
    
    
    $.ajax({
        type:'POST',
        data:{},
        url: base_url+'/Ajaxcall/deleteall/'+url[5],
        success:function(data){
            $(".overlay").hide();
        }
    });
    
   
    return false
}
    
    

function previewWindow()
{
    var base_url = window.location.origin;
    var campaign = document.getElementById('cNo').value;
    var url = location.href.split("/");
    var filename = $('#filename').val();
    
    $.ajax({
        type : "POST",
        url : base_url+"/frontend/preview",
        data : {url0 : url[2], url1 : url[5], filename : filename, campaignNo : campaign},
        success : function(response)
        {
            //alert(response);
            var data = response.split("||");
            
            requestUrlWithAjaxPreviewWindow(data[1]);
        }
    });
    
    return false
}
    
    
function requestUrlWithAjaxPreviewWindow(url)
{
    //alert(url);
    var xmlhttp;
    
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
             var NWin = window.open((url), '', 'height=400,width=500');
             if (window.focus) 
            {
                NWin.focus();
            }
            return false;
        }
    }
    
    //3. specify a GET request for the indicated filename,
    //   set asynchronous to true (dont wait for the send method to complete before continuing)
    xmlhttp.open("GET",url,true);
    
    //4. make the request
    xmlhttp.send();
}

function requestUrlWithAjaxPreview(url)
{
    //alert(url);
    var xmlhttp;
    
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
             $("#tabPr").attr('src',url);
            
             
            // alert(xmlhttp.responseText);
             $('#tabPr div.setting-2').remove();
    $('#tabPr div.ullidrag').remove();
     $('#tabPr div.setedit').remove();
      $('#tabPr div.seteditopt').remove(); 
      $('#tabPr div.seteditdrop').remove(); 
    $('#tabPr .explicit_edit').attr('contenteditable',false); 
    
    $("#tabPr .ui-resizable-handle").remove();
        
    $('#tabPr .explicit_edit').removeAttr('contenteditable');
    
    
    $("#tabPr .SFPTWO_TAGEDIT").removeClass("explicit_edit");
    $("#tabPr .SFPTWO_TEXTEDIT").removeClass("explicit_edit");
    
    $('#tabPr input[type="file"]').removeClass('inputdisabled');
    $('#tabPr input[type="submit"]').removeClass('inputdisabled');
    $('#tabPr input[type="button"]').removeClass('inputdisabled');
    $('#tabPr button').removeClass('inputdisabled');
    $('#tabPr .inputdisabled').removeAttr('SFPdisabled');
    $('#tabPr a').removeClass('SFPdisabled'); 
    $('#tabPr input[type="file"]').removeAttr('SFPdisabled');
    $('#tabPr input[type="submit"]').removeAttr('SFPdisabled');
    $('#tabPr input[type="button"]').removeAttr('SFPdisabled');
    $('.imgedivdrg').removeClass('SFPdisabled');
    $('.closethisdrag').removeClass('SFPdisabled');
        }
    }
    
    //3. specify a GET request for the indicated filename,
    //   set asynchronous to true (dont wait for the send method to complete before continuing)
    xmlhttp.open("GET",url,true);
    
    //4. make the request
    xmlhttp.send();
}


function postmessagetofacebook(value)
{
   // alert(value);
    var tempName = location.href.split("/");
    var encoded = "";
	var i;
    for (i=0; i<tempName[5].length;i++) {
        var a = tempName[5].charCodeAt(i);
        var b = a ^ 123;    // bitwise XOR with any number, e.g. 123
        encoded = encoded+String.fromCharCode(b);
    }	
    
    if(tempName[6] == 'roelpro')
    {
        var appId = '502186369918571';
        //var appSec = '3fbe6e056b8348f713346374c0c08295';
    }
    else if(tempName[6] == 'epic')
    {
        var appId = '1505052056407910';
        //var appSec = '0e28a426dc5f7e532fa6caa490b4d4ca';
    }    
    else
    {
        var appId = '502186369918571';
        //var appSec = '3fbe6e056b8348f713346374c0c08295';
    }
    
    var holdingvalue = value.split('|--||--|');
    
    var url = location.href.split("/");
    var campaignnumber = Math.round(Math.random() * 100 + 1);
    var campaignnumber1 = Math.round(Math.random() * 1000 + 1);
    var campaign = campaignnumber+campaignnumber1;
    document.getElementById('fNo').value = campaign;
    var fbNo = document.getElementById('fNo').value;
    var base_url = window.location.origin;
    var camName = document.getElementById('nameCam').value;
    
    //camName = camName.replace(/ /g,"_");
    //alert(camName);
   $.ajax({
           type : "POST",
           url : base_url+"/frontend/linkforfb",
           data :  {appId : appId,pageId : holdingvalue[0],camName : 'pageTab',camNo : fbNo,tempName : encoded},
           success : function (data)
           {
              var idApp = data.trim();
                FB.api("/"+holdingvalue[0]+"/tabs","POST",{
                        "app_id": idApp,
                        "access_token" : holdingvalue[1],
                    },
                    function (response) {
                       // alert(JSON.stringify(response));
                        
                      if(JSON.stringify(response))
                      {
                         if(camName != "")
                         {
                            FB.api('/' + holdingvalue[0] + '/tabs/app_'+idApp, 'post', {
                              access_token: holdingvalue[1],
                              custom_name: camName
                              }, function(response){
                                if(JSON.stringify(response)){
                                    fetchPage2(idApp,holdingvalue[0],holdingvalue[1]);
                                }
                                else{
                                  alert('Error on update tab');
                                }
                            });
                         }
                         else
                         {
                            FB.api('/' + holdingvalue[0] + '/tabs/app_'+idApp, {
                              access_token: holdingvalue[1],
                              }, function(response){
                                if(JSON.stringify(response)){
                                    FB.api('/' + holdingvalue[0] + '/tabs/app_'+idApp, 'post', {
                                      access_token: holdingvalue[1],
                                      custom_name: 'Smartfanpage',
                                      }, function(response){
                                        if(JSON.stringify(response)){
                                            fetchPage2(idApp,holdingvalue[0],holdingvalue[1]);
                                        }
                                        else{
                                          alert('Error on update tab');
                                        }
                                    });
                                }
                                else{
                                  alert('Error on update tab');
                                } 
                            }); 
                           // fetchPage2(idApp,holdingvalue[0],holdingvalue[1]);
                         }
                      } 
                    }
                  );
            }
        });
}

function fetchPage2(appId,pageId,accessToken)
{
    //alert(appId+" $$$$$ "+pageId);
    FB.api("/"+pageId+"/tabs","GET",{
    "access_token" : accessToken,
    },
    function (response) {
         //console.log(response);
         for(var i=2;i<response.data.length; i++)
         {
            if(typeof response.data[i].application != 'undefined')
            {    
                if(response.data[i].application['id'] == appId )
                {
                    console.log(response.data[i].link);
                    document.getElementById('fbUrl').value = response.data[i].link;
                }
            }
         }
        }
    );
}

function fetchPage(appId,pageId)
{
    //alert(appId+" $$$$$ "+pageId);
    FB.api("/"+pageId+"/tabs", function (response) {
         //console.log(response);
         for(var i=2;i<response.data.length; i++)
         {
            if(typeof response.data[i].application != 'undefined')
            {    
                if(response.data[i].application['id'] == appId )
                {
                    //console.log(response.data[i].link);
                    document.getElementById('fbUrl').value = response.data[i].link;
                }
            }
         }
        }
    );
}

function pubFi()
{
    var base_url = window.location.origin;
    var d = new Date();
    var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var templates = $("#hiddens").val(); 
    var dates = $("#datepicker").val();	
    var times = $("#datetimepicker1").val();
    //var new_name = document.getElementById('newName').value;
    //var campaignNo = document.getElementById('cNo').value;
    var url = location.href.split("/");
    var encoded = "";
	   var i;
    for (i=0; i<url[5].length;i++) {
        var a = url[5].charCodeAt(i);
        var b = a ^ 123;    // bitwise XOR with any number, e.g. 123
        encoded = encoded+String.fromCharCode(b);
    }	
    
    $('#saveautosave').val(time);
    
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    
    if(dd<10) {
        dd='0'+dd
    } 
    
    if(mm<10) {
        mm='0'+mm
    } 
    
    today = mm+'/'+dd+'/'+yyyy;
    
    /*************************************  Added by Aritra ******************************************/
    var randHtml = $('.wrapper').find('form.SFPTWO_EDITFORM').html();
     var formNames = ""; 
   if(randHtml == null)
   {
        var randName = "form";
        formNames = "demoform";
   }
   else
   {
        var randName =$('.wrapper').find('form.SFPTWO_EDITFORM').attr('name');
        $('.wrapper').find('form.SFPTWO_EDITFORM > ul li.dottedLi').each(function(){
          
        var htm0 = $(this).find('input[type=email]').html();
        var htm = $(this).find('input[type=text]').html();
        var htm1 = $(this).find('input[type=checkbox]').html();
        var htm2 = $(this).find('textarea').html();
        var htm3 = $(this).find('input[type=radio]').html();
        var htm4 = $(this).find('select').html();
        
        //alert(htm0+" &&& "+htm + " &&& "+ htm1 + " &&&& "+htm2+" &&&&& "+htm3+" &&&& "+htm4);
        
        if(htm0 == "")
        {
          var textBoxEmailName = $(this).find('input[type=email]').attr('name');
          formNames +=  textBoxEmailName+"|--|";
        }
        
        
        if(htm == "")
        {
          var textBoxName = $(this).find('input[type=text]').attr('name');
          formNames +=  textBoxName+"|--|";
        }
        
       
        if(htm1 == "")
        {
          var chkBoxName = $(this).find('div#chkclone').attr('name');
          formNames += chkBoxName+"|--|";
        }
        
        if(htm3 == "")
        {
          var radioName = $(this).find('div#radioclone').attr('name');
          formNames += radioName+"|--|"; 
        }
        
         if(htm2 == "")
        {
          var textAreaName = $(this).find('textarea').attr('name');
          formNames +=  textAreaName+"|--|";
        }
        
        if(htm4 != null)
        {
          var selectboxName = $(this).find('select').attr('name');
          formNames +=  selectboxName+"|--|";
        }
        
        
            
        });
        
   }
   /*************************************  Added by Aritra ******************************************/
   
   /********************* text div block *************************/
   $(".wrapper").find('div.textme').css('inline','block');
   
   
   
   
    var fbUrl = $("#fbUrl").val();
    //alert(fbUrl);
    $.ajax({
        type:'POST',
        data:{fbUrl : fbUrl, template_name : templates},
        url:base_url+"/Frontend/savefburl",
        success:function(data){
            if(data)
            {
                $.ajax({
                    type:'POST',
                    data:{urlchk : encoded,dates : dates,times : times,template_name : templates,published : "1",pubDate : today,formName : randName,formNames:formNames},
                    url:base_url+"/Frontend/savenew",
                    success:function(data){
                        if(data)
                        {
                            $("#tabPub").text('view campaign');
                            $("#tabPub").attr('onclick','viewCam();');
                            $("#tabPb").fadeOut(300);
                            $("div#viewCam").fadeIn(300);
                            $("body").append("<div class='mask2'></div>"); 
                            $("#tabView").show();  
                            
                            $.ajax({
                               type : "POST",
                               url : base_url+"/frontend/savencontinue",
                               data : {'tName' : encoded},
                               success : function(data)
                               {
                                    var hold = data.split("||");
                                    var jsObject = JSON.parse(hold[1]);
                                    //alert(jsObject.length +" &&&&&&&&& "+jsObject[0].webUrl);
                                    for(i=0;i<jsObject.length;i++)
                                    {
                                        //alert(campaign);
                                        if($("#web").attr('class') == 'span_check c_on')
                                        {
                                            $("#webLView").show();
                                            $("#webLinkView").attr('href',jsObject[i].webUrl);
                                            $("#webLinkView").text(jsObject[i].webUrl);
                                        }
                                        
                                        if($("#facebook").attr('class') == 'span_check c_on')
                                        {
                                            $("#fbLView").show();
                                            $("#fbLinkView").attr('href',jsObject[i].fbUrl);
                                            $("#fbLinkView").text(jsObject[i].fbUrl);
                                        }  
                                        
                                   }
                               }
                            });          
                        }
                    }
                });
            }
        }
    });
}

function viewCam()
{
	var wrapperNewForm = "";
	$( ".save_hgdfggfdgdfgfdsygfyfdsy" ).trigger( "click" );
	
	if($('.wrapper').has('form').length) //$( "ul" ).has( "li" ).length
	{
		wrapperNewForm += $('.wrapper').find('form').html();
		//$('.wrapper').find('form').attr('name',formUniName.replace(/\s/g, '')); 
	}
	
	/*alert(wrapperPubForm);
	alert(wrapperNewForm);*/
	
	if(wrapperPubForm == wrapperNewForm)
	{
		$('.wrapper').find('form').attr('name',formUniName.replace(/\s/g, ''));
	}
	else
	{
		var minNumber = 0000; // The minimum number you want
		var maxNumber = 1000; // The maximum number you want
		var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber); 

		var minNumber1 = 777; // The minimum number you want
		var maxNumber1 = 999; // The maximum number you want
		var random1 = Math.floor(Math.random() * (maxNumber1 + 1) + minNumber1); 
		
		var rand = "form_"+random1+random;
		
		$('.wrapper').find('form').attr('name',rand.replace(/\s/g, ''));
	}
	
    $("div#viewCam").fadeIn(300);
    $("body").append("<div class='mask2'></div>"); 
    $("#tabView").show();
    
    var tempName = location.href.split("/"); 
    var encoded = "";
	for (i=0; i<tempName[5].length;i++) {
        var a = tempName[5].charCodeAt(i);
        var b = a ^ 123;    // bitwise XOR with any number, e.g. 123
        encoded = encoded+String.fromCharCode(b);
    }	
    var base_url = window.location.origin;
    var formId = $('.wrapper').find('form.SFPTWO_EDITFORM').attr('name');
    var formNames = "";
    
   // alert(formId);
    
    var i = 1;
    $('.wrapper').find('form > ul li').each(function(){
         if($(this).hasClass('dottedLi'))
         {
            var newclass = "element"+i;
            $(this).addClass(newclass);
            i++;
         }

    });
    var total = $('.wrapper').find('form > ul li.dottedLi').length;
    for(var j =1; j<=total; j++)
    {
        var cls = "element"+j; 
       // alert(cls);
        var htm0 = $('.wrapper').find('form > ul li.'+cls).find('input[type=email]').html();
        var htm  = $('.wrapper').find('form > ul li.'+cls).find('input[type=text]').html();
        var htm1 = $('.wrapper').find('form > ul li.'+cls).find('input[type=checkbox]').html();
        var htm2 = $('.wrapper').find('form > ul li.'+cls).find('textarea').html();
        var htm3 = $('.wrapper').find('form > ul li.'+cls).find('input[type=radio]').html();
        var htm4 = $('.wrapper').find('form > ul li.'+cls).find('select').html();
        
        if(htm0 == "")
        {
         
          var textEmailname = 'textBoxEmail'+cls;
          $('.wrapper').find('form > ul li.'+cls).find('input[type=email]').attr('name',textEmailname);
        }
        
        if(htm == "")
        {
         
          var textname = 'textbox'+cls;
          $('.wrapper').find('form > ul li.'+cls).find('input[type=text]').attr('name',textname); 
        }
        if(htm1 == "")
        {
            
             var textname = 'checkBox'+cls;
             $('.wrapper').find('form > ul li.'+cls).find('div#chkclone').attr('name',textname);
             $('.wrapper').find('form > ul li.'+cls).find('input[type=checkbox]').attr('name',textname+'[]'); 
            
        }
        if(htm2 == "")
        {   
          var textname = 'textarea'+cls;
          $('.wrapper').find('form > ul li.'+cls).find('textarea').attr('name',textname); 
        }
         if(htm3 == "")
        {
            $('.wrapper').find('form > ul li.'+cls).find('input[type=radio]').each(function(){
                $(this).attr('name','radioName');
           });
        }
        
        if(htm4 != null)
        {
          var selectboxname = 'selectbox'+cls;
          $('.wrapper').find('form > ul li.'+cls).find('select').attr('name',selectboxname);   
        }
       /** if($('.wrapper').find('form > ul > li.'+cls).find('input[type=text]'))
        {
            alert("textbox");
        }
        else if($('.wrapper').find('form > ul > li.'+cls).find('input[type=checkbox]'))
        {
            alert("chkbox");
        }**/
    }
        
        
    $('.wrapper').find('form.SFPTWO_EDITFORM > ul li.dottedLi').each(function(){
          
        var htm0 = $(this).find('input[type=email]').html();
        var htm = $(this).find('input[type=text]').html();
        var htm1 = $(this).find('input[type=checkbox]').html();
        var htm2 = $(this).find('textarea').html();
        var htm3 = $(this).find('input[type=radio]').html();
        var htm4 = $(this).find('select').html();
        
        //alert(htm0+" &&& "+htm + " &&& "+ htm1 + " &&&& "+htm2+" &&&&& "+htm3+" &&&& "+htm4);
        
        if(htm0 == "")
        {
          var textBoxEmailName = $(this).find('input[type=email]').attr('name');
          formNames +=  textBoxEmailName+"|--|";
        }
        
        
        if(htm == "")
        {
          var textBoxName = $(this).find('input[type=text]').attr('name');
          formNames +=  textBoxName+"|--|";
        }
        
       
        if(htm1 == "")
        {
          var chkBoxName = $(this).find('div#chkclone').attr('name');
          formNames += chkBoxName+"|--|";
        }
        
        if(htm3 == "")
        {
          var radioName = $(this).find('div#radioclone').attr('name');
          formNames += radioName+"|--|"; 
        }
        
         if(htm2 == "")
        {
          var textAreaName = $(this).find('textarea').attr('name');
          formNames +=  textAreaName+"|--|";
        }
        
        if(htm4 != null)
        {
          var selectboxName = $(this).find('select').attr('name');
          formNames +=  selectboxName+"|--|";
        }
        
        
            
        });    
    
    $.ajax({
       type : "POST",
       url : base_url+"/frontend/savencontinue",
       data : {'tName' : encoded,formId : formId, formNames : formNames},
       success : function(data)
       {
         var hold = data.split("||");
            var jsObject = JSON.parse(hold[1]);
            for(i=0;i<jsObject.length;i++)
           {
             if(jsObject[i].webUrl != "")
             {
                $("#webLView").show();
                $("#webLinkView").attr('href',jsObject[i].webUrl);
                $("#webLinkView").text(jsObject[i].webUrl);
             }
             
             if(jsObject[i].fbUrl != "")
             {
                $("#fbLView").show();
                $("#fbLinkView").attr('href',jsObject[i].fbUrl);
                $("#fbLinkView").text(jsObject[i].fbUrl); 
             }  
           }
       }
    });
}

function check(inp)
{   
    var base_url = window.location.origin;
    var invite = $("#count").html();
    //alert(invite);
    if($(inp).prop("checked") == true){
        var names = $(inp).val();
        
        $.ajax({
            type: 'post',
            data: {selected : names},
            url: base_url+'/frontend/addinvite',
            success: function (data) {
               // alert(data);
                if(data == 1) {
                     $('#invlist > tbody > tr:last').remove();
                    
                    $('<tr><td>'+names+'</td></tr>').insertBefore('#invlist > tbody > tr:nth-child(2)');
                    //alert(search);
                    $('#uinvlist tr').each(function(){
                        if($(this).find('td').eq(0).text() == names){
                            $(this).closest( 'tr').remove();
                            invite = parseInt(invite) + parseInt(1);
                            $("#count").html(invite);
                        }
                    });
                }
                
            }
        });
    }
}


//indexus js works*************************************************************************************************



function addPages(pagename) {
    
     //alert("work now!!!!");
      var base_url = window.location.origin;
      //alert(base_url);
      var uri = document.URL;
      //alert(uri);
      var uripart = uri.split("editnew/");
      //alert(uripart);
      var data = uripart[1].split("/");
      //alert(uripart);
      var foldername = data[0];
      //alert(foldername);
      //alert(pagename);
      
      $.ajax({
            type: 'post',
            data: {pagename : pagename,foldername : foldername},
            url: base_url+'/app/pageadded',
            success: function (data) {
                
                //alert(data);
                //alert(uri);
                var pageurl = uri.split('/indexus');
                //alert(pageurl[0]);
                var totalpath = data.split('/indexus');
                var listedpage = totalpath[0];
                base_url = window.location.origin;
                var temp = data.split('public/');
                var changed_url = base_url+'/'+temp[1];
                //alert(changed_url);
                var result = changed_url.split('-indexus/');
                //alert(result);
                var result2 = result[1].split('.');
                //alert(result2);
                var newpagename = result2[0];
                //alert(newpagename);
                var newpageurl = pageurl[0]+'/'+newpagename+'.php';
                 //alert(newpageurl);
                requestUrlWithAjax(changed_url);
                //alert("ok in here");
                //addContent(pagename,foldername,newpagename);
               
                $("div.loadpage ul.ulshow").append('<li><a onclick="requestUrlWithAjax(this.innerHTML)" style="cursor:pointer;" class="pages" id="lidet">'+changed_url+'</a><a style="cursor:pointer;">'+newpagename+'.php</a></li>');
                
            }
            });
      
}

 function fbs_click()
 {
    u       = document.getElementById('webLinkView').href;
    var obj = {method: 'feed',link: u,picture: 'http://test.scampaigns.com/popupImg/facebook_icon_btn.png',name: 'title',description: 'desc'};
    function callback(response) {}
    FB.ui(obj, callback);

    }
    
    function twt_click()
    {
     u=document.getElementById('webLinkView').href;
    t='hello';
    var child = window.open('http://twitter.com/share?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');   
    }
    
    function pint_click()
    {
         u=document.getElementById('webLinkView').href;
    t='hello';

    var child = window.open('https://pinterest.com/pin/create/button/?url='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');    
    }
    
/*********************** tweet bird *******************/
    function twt_bird_click(u,t) {
        var child = window.open('http://twitter.com/share?url=' + encodeURIComponent(u) + '&t=' + encodeURIComponent(t), 'sharer', 'toolbar=0,status=0,width=626,height=436');
    }
    



 