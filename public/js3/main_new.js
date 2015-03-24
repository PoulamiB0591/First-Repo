(function($){

	$(function(){
	   
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
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.1' // use version 2.0
          });
      };
		
		var xz=0;
			$("div.user > a").live( "click", function() {
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
        
        
		$("a.close_btn").click(function(){
			$("div.popup_new, div.mask2").fadeOut(300, function() {
			$("div.mask2").remove();
		});
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
		
		
		$( ".datepicker" ).datepicker();
		
		
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
		$("div.pop_img2 > a.close_btn").live( "click", function() {
			$("div.pop_img2, div.mask").fadeOut(300, function() {
				$("div.mask").remove();
				
			});
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
	   
      $(".save-n-continue").click(function (){
        $('#tabPrv').hide();
        $('#tabPl').show();
        $('ul.nav li').removeClass('active');
        $('ul.nav li:nth-child(2)').addClass('active').show();
        
        
        var cNo = document.getElementById("cNo").value;
        cNo = cNo.split(",");
        
        var nName = document.getElementById("newName").value;
        nName = nName.split(",");
        
        
        for(i=0;i<cNo.length-1;i++)
        {
            if(!($("#fieldLabel").find('label#webUrl'+(i+parseInt(1))).length))
            {
                if(cNo[i+parseInt(1)] == "")
                {
                    $("#fieldLabel").append('<label id="webUrl'+(i+parseInt(1))+'" class="label_radio_new r_off"><input type="radio" id="answers0" value="17" name="sample-radio"> https://test.scampaigns.com/mobileview/index.php?'+nName[i]+'='+cNo[i]+'</label>');
                    break;
                }
                
                if(cNo[i] != cNo[i+parseInt(1)] && cNo[i+parseInt(1)] != "")
                {
                    $("#fieldLabel").append('<label id="webUrl'+(i+parseInt(1))+'" class="label_radio_new r_off"><input type="radio" id="answers0" value="17" name="sample-radio"> https://test.scampaigns.com/mobileview/index.php?'+nName[i]+'='+cNo[i]+'</label>');
                    break;
                }
            }
            
         }
      });	
		
     $("div#tabPl > a.step_back").live( "click", function() {
			      //alert("2nd");
                  $("ul.nav li").removeClass("active");
   	              $("ul.nav li:first").addClass("active").show();
                  $(".tab_content4").hide(); 
                  $("#tabPrv").show(); 
             });
             
         $("div#tabPb > a.step_back").live( "click", function() {
			      //alert("3rd");
                  $("ul.nav li").removeClass("active");
   	              $("ul.nav li:nth-child(2)").addClass("active").show();
                  $(".tab_content4").hide(); 
                  $('#tabPl').show();
             });    
		 $("div#tabPl > a.close_bottom").live( "click", function() {
		  
               var tempName = location.href.split("/");
		      if($("#web").attr('class') == 'span_check c_on')
              {
                var webUrl = $("#fieldLabel").find('label.r_on').text();
                var urlParts = webUrl.split("=");
                var cName = urlParts[0].split("?");
              }
              
              if($("#facebook").attr('class') == 'span_check c_on')
              {
                var value = $("#myItem").val().split('|--||--|');
                var fbPage = $("#myItem").find('option:selected').text();
                //alert(fbPage);
                
              }
              
              $.ajax({
                   type : "POST",
                   url : "http://test.scampaigns.com/frontend/continue",
                   data : {cNo : urlParts[1], new_name : cName[1], webUrl : webUrl, fbPage : fbPage, pageId : value[0], accessToken : value[1], template : tempName[5] },
                   success : function(data)
                   {
                        if(data == 1)
                        {
                            //alert("3rdd");
                          $("ul.nav li").removeClass("active");
           	              $("ul.nav li:last").addClass("active").show();
                          $(".tab_content4").hide(); 
                          $('#tabPb').show();
                        }
                        else
                        {
                            alert("Edit settings to save and continue");
                        }
                   }
                });
 
                
             });
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
		  
          var tempName = location.href.split("/");
          
          FB.ui({ method: 'apprequests', 
            message: 'My diaolog...'},
            function(response) 
              { 
                $.ajax({
                    type: 'POST',
                    url : 'http://test.scampaigns.com/frontend/showfriend',
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
            
            //alert($("#fName").val());
            var tempName = location.href.split("/");
            var name = $("#fName").val();
            
            $.ajax({
                    type: 'POST',
                    url : 'http://test.scampaigns.com/frontend/invfriend',
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
                        }
                    }
            });
                    
            
        });
	   
       $("#report").click(function(){
        
          $('#invlist').find("tr:gt(0)").remove();
          $('#uinvlist').find("tr:gt(0)").remove();
           var tempName = location.href.split("/");
           var invNo = 0;
            $.ajax({
                    type: 'POST',
                    url : 'http://test.scampaigns.com/frontend/invlist',
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

  $("div.slide_popup1").toggle(effect, options, duration);
  return false
 });

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
       
 
 
 $("a.edit").live('click', function(){
     if($("div.slide_popup").show())
  {
    $("div.slide_popup").hide();
  }
  if($("div.slide_popup1").show())
  {
    $("div.slide_popup1").hide();
  }
  $("div.popup").animate({"right":0},300);
  $("div.popup1").animate({"right":0},300);
  return false
 });
  $("div.popup > a.close_btn").click(function(){
  $("div.popup").animate({"right":"-416px"},300);
 return false
 });
       
	
	});
})(jQuery);

function preview()
{
    var nName = [];
    $("ul.nav li").removeClass("active");
   	$("ul.nav li:first").addClass("active").show();
    $(".tab_content4").hide(); 
    $("#tabPrv").show();        
    
    $('div.setting-2').remove();
    $('.explicit_edit').removeClass('explicit_edit');
    $('.wrapper input[type="file"]').removeClass('inputdisabled');
    $('.wrapper input[type="submit"]').removeClass('inputdisabled');
    $('.wrapper input[type="button"]').removeClass('inputdisabled');
    $('.wrapper button').removeClass('inputdisabled');
    $('.wrapper .inputdisabled').removeAttr('disabled');
    $('.wrapper a').removeClass('disabled'); 
    $('.wrapper input[type="file"]').removeAttr('disabled');
    $('.wrapper input[type="submit"]').removeAttr('disabled');
    $('.wrapper input[type="button"]').removeAttr('disabled');
    
    var resd =  $("#hidder").val();
    var d = new Date();
    var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    $('#saveautosave').val(time);
    
    $("div#pubCam").fadeIn(300);
    $("body").append("<div class='mask2'></div>"); 
    var url = location.href.split("/");
    var filename = $('#filename').val();
    
    var quotes = new Array("demo_name1", "demo_name2", "demo_name3", "demo_name4"),
    randno = quotes[Math.floor( Math.random() * quotes.length )];
    var new_name = randno;
    
    if(new_name == "Photocontest")
    {
        alert("please provide new template name");
        return false;
    }
    var campaignnumber = Math.round(Math.random() * 100 + 1);
    var campaignnumber1 = Math.round(Math.random() * 1000 + 1);
    var campaign = campaignnumber+campaignnumber1;
     
    
    document.getElementById('newName').value += new_name+",";
    document.getElementById('cNo').value += campaign+",";
    
    $.ajax({
        type : "POST",
        url : "http://test.scampaigns.com/frontend/preview",
        data : {url0 : url[2], url1 : url[5], filename : filename},
        success : function(response)
        {
            //alert(response);
            requestUrlWithAjaxPreview(response);
        }
    });
    
    var base_url = window.location.origin;
    var uri = document.URL;
    var res1 = uri.split("/");
    $.ajax({
        type:'POST',
        data:{},
        url: base_url+'/Ajaxcall/deleteall/'+res1[5],
        success:function(data){
            $(".overlay").hide();
        }
    });
    
    
    return false
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
            $("#tabPr").html(xmlhttp.responseText);
        }
    }
    
    //3. specify a GET request for the indicated filename,
    //   set asynchronous to true (dont wait for the send method to complete before continuing)
    xmlhttp.open("GET",url,true);
    
    //4. make the request
    xmlhttp.send();
}

function previewWindow()
{
    var campaign = document.getElementById('cNo').value;
    var url = location.href.split("/");
    var filename = $('#filename').val();
    
    $.ajax({
        type : "POST",
        url : "http://test.scampaigns.com/frontend/preview",
        data : {url0 : url[2], url1 : url[5], filename : filename, campaignNo : campaign},
        success : function(response)
        {
            //alert(response);
            requestUrlWithAjaxPreviewWindow(response);
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

function postmessagetofacebook(value)
{
    var tempName = location.href.split("/");
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
    FB.api("/"+holdingvalue[0]+"/tabs","POST",{
        "app_id": appId,
        "access_token" : holdingvalue[1],
    },
    function (response) {
        //alert(JSON.stringify(response));
        
      if(JSON.stringify(response))
      {
        fetchPage(appId,holdingvalue[0]);
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
                    console.log(response.data[i].link);
                }
            }
         }
        }
    );
}

function pubFi()
{
    var d = new Date();
    var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var templates = $("#hiddens").val(); 
    var dates = $("#datepicker").val();	
    var times = $("#datetimepicker1").val();
    //var new_name = document.getElementById('newName').value;
    //var campaignNo = document.getElementById('cNo').value;
    var url = location.href.split("/");
    
    if($("#web").attr('class') == 'span_check c_on')
    { 
         //alert($("#fieldLabel").find('label#webUrl:nth-child('+i+')').text());
        var webLink = $("#fieldLabel").find('label.r_on').text();
        
        $('#saveautosave').val(time);		
        
    }
    
    if($("#facebook").attr('class') == 'span_check c_on')
    {
        //($("#myItem").val());
        var pageId = $("#myItem").val();
        var fbPage = $("#myItem").find('option[value='+$("#myItem").val()+']').text();
        var pageAccessToken = $("#myItem").find('option[value='+$("#myItem").val()+']').attr('id');
        
        //window.location.href='https://www.facebook.com/pages/'+response.name+'/'+response.id+'?sk=app_629731850476780';
        //window.location.href=response.link+'?sk=app_1505052056407910';
    }
    
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
    
    $.ajax({
        type:'POST',
        data:{urlchk : url[5],dates : dates,times : times,template_name : templates,published : '1',pubDate : today},
        url:"http://test.scampaigns.com/Frontend/savenew",
        success:function(data){
            if(data)
            {
                $("#tabPub").text('view campaign');
                $("#tabPub").attr('onclick','viewCam();');
                
                $("div#viewCam").fadeIn(300);
                $("body").append("<div class='mask2'></div>"); 
                $("#tabView").show(); 
                
                var tempName = location.href.split("/");
    
                $.ajax({
                   type : "POST",
                   url : "http://test.scampaigns.com/frontend/savencontinue",
                   data : {'tName' : tempName[5]},
                   success : function(data)
                   {
                        var jsObject = JSON.parse(data);
                        for(i=0;i<jsObject.length;i++)
                       {
                            if(jsObject[i].webUrl != null)
                            {
                                //alert(campaign);
                                $("#webLView").show();
                                $("#webLinkView").attr('href',jsObject[i].webUrl);
                                $("#webLinkView").text(jsObject[i].webUrl);
                            }
                            
                            if(jsObject[i].fbPage != null)
                            {
                                $("#fbLView").show();
                                $("#fbLinkView").attr('href','https://www.facebook.com/pages/'+jsObject[i].fbPage+'/page_ID?sk=app_1505052056407910');
                                $("#fbLinkView").text('https://www.facebook.com/pages/'+jsObject[i].fbPage+'/page_ID?sk=app_1505052056407910');  
                            }
                       }
                   }
                });          
            }
        }
    });
    
}

function viewCam()
{
    $("div#viewCam").fadeIn(300);
    $("body").append("<div class='mask2'></div>"); 
    $("#tabView").show();
    
    var tempName = location.href.split("/");
    
    $.ajax({
       type : "POST",
       url : "http://test.scampaigns.com/frontend/savencontinue",
       data : {'tName' : tempName[5]},
       success : function(data)
       {
            var jsObject = JSON.parse(data);
            for(i=0;i<jsObject.length;i++)
           {
                if(jsObject[i].webUrl != null)
                {
                    //alert(campaign);
                    $("#webLView").show();
                    $("#webLinkView").attr('href',jsObject[i].webUrl);
                    $("#webLinkView").text(jsObject[i].webUrl);
                }
                
                if(jsObject[i].fbPage != null)
                {
                    $("#fbLView").show();
                    $("#fbLinkView").attr('href','https://www.facebook.com/pages/'+jsObject[i].fbPage+'/page_ID?sk=app_1505052056407910');
                    $("#fbLinkView").text('https://www.facebook.com/pages/'+jsObject[i].fbPage+'/page_ID?sk=app_1505052056407910');  
                }
           }
       }
    });
}

function check(inp)
{
    var invite = $("#count").html();
    //alert(invite);
    if($(inp).prop("checked") == true){
        var names = $(inp).val();
        
        $.ajax({
            type: 'post',
            data: {selected : names},
            url: 'http://test.scampaigns.com/frontend/addinvite',
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
