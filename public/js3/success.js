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
		
		var fbPageId  = $("#fbPageId").val();
		var pageToken = $("#fbPageAccessToken").val();
		var value     = fbPageId+"|--||--|"+pageToken;
		var tempName  = $("#tempName").val();
		var camName   = $("#camName").val();
		var fbNo      = $("#fbNo").val();
		
		
		if(fbPageId == '' && camName != '')
		{
			$("#webLView").show();
			$("#fbLView").hide();
		}
		
		if(camName == '' && fbPageId != '')
		{
			$("#webLView").hide();
			$("#fbLView").show();
		}
		
		postmessagetofacebook(value,tempName,camName,fbNo);
	});
})(jQuery)

/*************** generate facebook smartlink ***************/
function postmessagetofacebook(value,tempName,camName,fbNo)
{
   // alert(value);
	
    var tempName = tempName;
    var encoded = "";
	var i;
    for (i=0; i<tempName.length;i++) {
        var a = tempName.charCodeAt(i);
        var b = a ^ 123;    // bitwise XOR with any number, e.g. 123
        encoded = encoded+String.fromCharCode(b);
    }	
    
    
    var holdingvalue = value.split('|--||--|');
    
    var url = location.href.split("/");
    var base_url = window.location.origin;
    var camName = camName;
    
    //camName = camName.replace(/ /g,"_");
    //alert(camName);
   $.ajax({
           type : "POST",
           url : base_url+"/frontend/linkforfb",
           data :  {appId : 'appId',pageId : holdingvalue[0],camName : 'pageTab',tempName : encoded},
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
                    $("#fbLinkView").attr('href',response.data[i].link);
                }
            }
         }
        }
    );
}