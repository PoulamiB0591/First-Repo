function logInWithYourFaceBookAccount()
{
    //alert("facebook");
    FB.init({
        appId      : '507520019301583',
        cookie     : true,  // enable cookies to allow the server to access 
        // the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.0' // use version 2.0
    });
    
    var siteWithProtocol = location.protocol+"//"+document.location.hostname;
    var controllerAction = '/ajaxcall/userinsertupdate';
    var ajaxUrl = siteWithProtocol+controllerAction;
    var base_url = window.location.origin;
    
    FB.login(function(responseLogin) 
    {
        //alert(responseLogin.status);
        console.log(responseLogin);
        
        if(responseLogin.status == "connected")
        {
            FB.api('/me', function(response) 
            { 
                
                console.log(response);
                if(response)
                {
                    var fname = response.first_name;
                    var lname = response.last_name;
                    var email = response.email;
                    var fid = response.id;
                    var l = response.hometown;
                    
                    if(typeof l === "undefined")
                    {
                        var  location = "undefined"; 
                    }
                    if(typeof email === "undefined")
                    {
                        var  email = "undefined"; 
                    }
                    
                    $.ajax({
                        type:'POST',
                        data:{fname:fname,lname:lname,email:email,fid:fid,location:location},
                        url: base_url+'/Ajaxcall/userinsertupdate',
                        success:function(data){
                            var jsObject = JSON.parse(data);
                            if(jsObject['result'] == 1)
                            {
                               $.ajax({
                                    type:'POST',
                                    data:{fname:fname},
                                    url: base_url+'/Ajaxcall/templatecheck', 
                                    success:function(data){
                                        if(data == 0)
                                        {
                                             window.location.href=base_url+"/Frontend/index1";  
                                        }
                                        else
                                        {
                                             window.location.href=base_url+"/Frontend/dashboard";  
                                        }
                                    } 
                                }); 
                            }       
                        }
                    });
                 }
             });
        }
        else
        {
            window.location.href = base_url;
        }
    },{scope: 'email,user_location,user_hometown,manage_pages'});
}

function logInWithToPublish()
{    
	//alert("facebook");
    $("#noConn").hide();
    $("#connBtn").hide();
    
    var url = location.href.split("/");
    var siteWithProtocol = location.protocol+"//"+document.location.hostname;
    var controllerAction = '/ajaxcall/userinsertupdate';
    var ajaxUrl = siteWithProtocol+controllerAction;
   
	 FB.login(function(response) {
	    FB.api('/me', function(responseLogin) {
	       if(responseLogin.verified == true)
           {
                var fname = responseLogin.first_name;
                var lname = responseLogin.last_name;
                var email = responseLogin.email;
                var fid = responseLogin.id;
                var base_url = window.location.origin;
                
                $.ajax({
                    type:'POST',
                    data:{fname:fname,lname:lname,email:email,fid:fid},
                    url: base_url+'/Ajaxcall/userinsertupdate',
                    success:function(data){
                        
                        if(data == 1)
                        {
                            
                            $.ajax({
                                type:'POST',
                                data:{fid : fid,tempName : url[5]},
                                url: base_url+'/Frontend/userupdate',
                                success : function (data)
                                {
                                    if(data == 1)
                                    {
                                        $(".user_new").hide();
                                        $(".user").show();
                                        $(".user img#fbImg").attr('src','https://graph.facebook.com/'+responseLogin.id+'/picture?type=small');
                                        $(".user p#fbName").text(responseLogin.name);
                                    }
                                  
                                }
                            });
                        }
                    }
                });
                
           }
           else
           {
            window.location.reload();
           }
    });
  },{scope: 'email,manage_pages'});
  
	 alert("Loading pages...");
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
         });
       } else if (response.status === 'not_authorized') {
         alert("not authorized");
       } else {
    	   $("#noConn").show();
           $("#connBtn").show();
       }
      },{perms: 'manage_pages'});
     $("#fbPages").show();   
     
     //alert("facebook end");
	 
}
$(document).ready(function() {
$('body').on('click', '#logout', function(event) {

 //   alert("Dd");    
    
     FB.init({
    appId      : '507520019301583',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.0' // use version 2.0
  });
   
 fbLogout();
   event.preventDefault(); 
  });
});  
function fbLogout(){
  var con = confirm( "Are you sure you want to logout??" );
  var base_url = window.location.origin;
  
   if( con ){
    $.ajax({
            type:'POST',
            data:{},
            url: base_url+'/Ajaxcall/logout',
            success:function(data){
                  window.location.href = base_url;      
            }
            }); 
   
  FB.getLoginStatus(function(response) {
        if (response && response.status === 'connected') {
            FB.logout(function(response) {
                       $.ajax({
            type:'POST',
            data:{},
            url: base_url+'/Ajaxcall/logout',
            success:function(data){
                  window.location.href = base_url;      
            }
            });
               
            });
        }
     
     
        
    }); 
    
          
 }

 }