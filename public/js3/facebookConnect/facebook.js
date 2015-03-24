function logInWithYourFaceBookAccount()
{
    var siteWithProtocol = location.protocol+"//"+document.location.hostname;
    var controllerAction = '/ajaxcall/userinsertupdate';
    var ajaxUrl = siteWithProtocol+controllerAction;
    var base_url = window.location.origin;
   
	 FB.login(function(response) {
	    FB.api('/me', function(response) {

	       if(response.verified == true)
           {
                var fname = response.first_name;
                var lname = response.last_name;
                var email = response.email;
                var fid   = response.id;
                
                $.ajax({
                    type:'POST',
                    data:{fname:fname,lname:lname,email:email,fid:fid},
                    url: base_url+'/Ajaxcall/userinsertupdate',
                    success:function(data){
                         window.location.href = base_url+"/Frontend/dashboard";       
                    }
                });
           }
           else
           {
            window.location.reload();
                //console.log(response);
     
           }
           //$.ajax({
//                type:'POST',
//                data:{},
//                url:
//                success:function(data){}
//            });
           
    });
  },{scope: 'email,manage_pages'});
}

$("#logout").live("click",function(event){ 
   
 fbLogout();
   event.preventDefault(); 
  });
  
function fbLogout(){
  var con = confirm( "Are you sure you want to logout??" );
  var base_url = window.location.origin;
  
   if( con ){ 
   
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
 
 
 /******************************* facebook login to publish **********************************/
 function logInWithToPublish()
{    
	var base_url = window.location.origin;
    
    FB.init({
        appId      : '507520019301583',
        cookie     : true,  // enable cookies to allow the server to access 
        // the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.0' // use version 2.0
    });
    
    $("#noConn").hide();
    $("#connBtn").hide();
    
    var url = location.href.split("/");
   
	 FB.login(function(response) {
	    FB.api('/me', function(responseLogin) {
	       
           if(responseLogin.verified == true)
           {
                var fname = responseLogin.first_name;
                var lname = responseLogin.last_name;
                var email = responseLogin.email;
                var fid = responseLogin.id;
                
                
                $.ajax({
                    type:'POST',
                    data:{fname:fname,lname:lname,email:email,fid:fid},
                    url: base_url+'/Ajaxcall/userinsertupdatenew',
                    success:function(data){
                        var jsObject = JSON.parse(data);
                         if(jsObject != undefined)
                            {
                                for(i=0;i<jsObject.length;i++)
                                {
                                    if(jsObject[i].success == 1)
                                    {
                                        $.ajax({
                                            type:'POST',
                                            data:{fid : jsObject[i].uId,tempName : url[5]},
                                            url: base_url+'/Frontend/userupdate',
                                            success : function (data)
                                            {
                                                //alert(data);
                                                if(data)
                                                {
                                                    $(".user_new").hide();
                                                    $(".user").show();
                                                    $(".user img#fbImg").attr('src','https://graph.facebook.com/'+responseLogin.id+'/picture?type=small');
                                                    $(".user p#fbName").text(responseLogin.name);
                                                    

                                                    /***** come here for friends ****/
                                                        FB.api('/'+fid+'/accounts', function(responsePages) {
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
                                                      
                                                    $("#fbPages").show();   
                                                }
                                           }
                                        });
                                    }                                 
                               }
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
}