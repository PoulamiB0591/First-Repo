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
	            appId      : '507520019301583',
	            cookie     : true,  // enable cookies to allow the server to access 
	            xfbml      : true,  // parse social plugins on this page
	            version    : 'v2.1' // use version 2.0
	          });
	      };
		 
	      
	      var prCamNo   = document.getElementById('cNo').value;
	      var prCamName = document.getElementById('newName').value;
	      var saveName  = '';
	      
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
	      
	      
	      var base_url = window.location.origin;
	      
	      
	      /********************* back to publish page *****************/
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
                    var jsObject = JSON.parse(hold[2]);
                   for(i=0;i<jsObject.length;i++)
                   {
                	    if(jsObject[i].webUrl != "")
                        {
                        	$("#web").attr('class','span_check c_on');
							$("#web").children('input').attr('checked', true);
							
							$("#domain").show();
							$("#domain #sfpDom").addClass("r_on").children("input[type='radio']").attr("checked", true);
							
							$("#webPart").show();
							saveName = jsObject[i].new_template_name;
							saveName = saveName.replace(/_/g," "); 
							$("#nameCam").val(saveName);
                        }
                        
                        if(jsObject[i].fbPage != null)
                        {
                        	$("#facebook").attr('class','span_check c_on');
            				$("#facebook").children('input').attr('checked', true);
            				
            				FB.getLoginStatus(function(response) {
            					console.log(response);
            					if (response.status === 'connected') {

            						$("#noConn").hide();
            						$("#connBtn").hide();

            						FB.api('/me/accounts', function(responsePages) {
            							//alert(JSON.stringify(responsePages));
            							console.log(responsePages);
            							$("#myItem option").remove(); 

            							page1 = '<option value="SELECT YOUR PAGE">SELECT YOUR PAGE</option>';
            							$("#myItem").append(page1);
            							for(var i=0;i<responsePages.data.length;i++)
            							{
            								pages = '<option value="'+responsePages.data[i].id+'|--||--|'+responsePages.data[i].access_token+'">'+responsePages.data[i].name+'</option>';
            								$("#myItem").append(pages);
            							}
            							$("#fbPages").show(); 
            						});
            					} else if (response.status === 'not_authorized') {
            						alert("not authorized");
            					} else {
            						$("#noConn").show();
            						$("#connBtn").show();
            					}
            				},{perms: 'manage_pages'});
                		}
                   } 
               }
        });
		
		/******************* WEB SELECT FOR PUBLISH ******************/
		$("#web").click(function(){
			if($(this).children("input[type='checkbox']").attr("checked")){
				$(this).children("input[type='checkbox']").attr("checked", false);
				$(this).removeClass("c_on");

				$("#domain").hide();
				$("#webPart").hide();
			}else{
				$(this).children("input[type='checkbox']").attr("checked", true);
				$(this).addClass("c_on");

				$("#domain").show();
				$("#webPart").hide();

			};
		});
		
		/****************** SELECTION OF DOMAIN ******************/
		$(".span_radio").click(function(){
			$(".span_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);
			
			if($(this).attr('id') == 'sfpDom')
			{
				$("#yourDomain").hide();
				$("#webPart").show();
				
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
						var jsObject = JSON.parse(hold[2]);

						if(jsObject != null)
						{
							for(i=0;i<jsObject.length;i++)
							{
								if(jsObject[i].new_template_name != "")
								{

									$("#web").attr('class','span_check c_on');
									$("#web").children('input').attr('checked', true);

									$("#webPart").show();
									$("#nameCam").text(jsObject[i].new_template_name);
								}
							}  
						}
					}
				});
			}
			else
			{
				$("#webPart").hide();
				$("#yourDomain").show();				
			}
		});
		
		
		/******************* FB SELECT FOR PUBLISH ******************/
		$("#facebook").click(function(){
			if($(this).children("input[type='checkbox']").attr("checked")){
				$(this).children("input[type='checkbox']").attr("checked", false);
				$(this).removeClass("c_on");
				$("#noConn").hide();
				$("#connBtn").hide();
				$("#fbPages").hide();
			}else{
				$("#facebook").attr('class','span_check c_on');
				$("#facebook").children('input').attr('checked', true);

				FB.getLoginStatus(function(response) {
					console.log(response);
					if (response.status === 'connected') {

						$("#noConn").hide();
						$("#connBtn").hide();

						FB.api('/me/accounts', function(responsePages) {
							//alert(JSON.stringify(responsePages));
							console.log(responsePages);
							$("#myItem option").remove(); 

							page1 = '<option value="SELECT YOUR PAGE">SELECT YOUR PAGE</option>';
							$("#myItem").append(page1);
							for(var i=0;i<responsePages.data.length;i++)
							{
								pages = '<option value="'+responsePages.data[i].id+'|--||--|'+responsePages.data[i].access_token+'">'+responsePages.data[i].name+'</option>';
								$("#myItem").append(pages);
							}

							$("#fbPages").show();  
						});
					} else if (response.status === 'not_authorized') {
						alert("not authorized");
					} else {
						$("#noConn").show();
						$("#connBtn").show();
					}
				},{perms: 'manage_pages'});
			};
		});
	});
})(jQuery)

/*************** save details to database and proceed to payment ****************/
function savencontinue()
{
	var setFlag  = 0;
	var tempName = location.href.split("/");
	var base_url = window.location.origin;
	var camNo    = document.getElementById('cNo').value;
	var selectVal = '';
	var camName  = "";
	var fbPage   = '';
	var value    = '';
	var fbNo     = '';
	

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
		selectVal           = $("#myItem").val();
		value               = selectVal.split('|--||--|');
		fbPage              = $("#myItem").find('option:selected').text();
		var campaignnumber  = Math.round(Math.random() * 100 + 1);
	    var campaignnumber1 = Math.round(Math.random() * 1000 + 1);
	    var campaign        = campaignnumber+campaignnumber1;
		fbNo                = campaign;
		//postmessagetofacebook($("#myItem").val());
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
				var jsObject = JSON.parse(hold[2]);
				var camName = hold[1].trim();
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
						else if(fbPage == null)
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
						data : {webUrl : webUrl, camName : camName, camNo : camNo, fbPage : fbPage, pageId : value[0], accessToken : value[1], fbNo : fbNo, template : encoded},
						success : function(data)
						{
							$("div#tab4 a.close_bottom").attr("onclick",'');
							$("div#tab4 a.close_bottom").text("LOADING...");
							
							setTimeout(function() { 
								$("div#tab4 a.close_bottom").attr("onclick",'savencontinue()');
								$("div#tab4 a.close_bottom").text("SAVE & CONTINUE");
								
								
								window.location = window.location.origin+"/Frontend/payment/"+tempName[5];
							},5000);
						}
					}); 
				}
			}
		}); 
	}
}

