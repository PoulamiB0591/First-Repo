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
            appId      : '629731850476780',
            cookie     : true,  // enable cookies to allow the server to access 
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.0' // use version 2.0
          });
      };
    });
})(jQuery);

// This function is called when someone finishes with the Login
// Button.  See the onlogin handler attached to it in the sample
// code below.
function Login()
{
    FB.login(function(response) {
       if (response.authResponse) {
         console.log('Welcome!  Fetching your information.... ');
             FB.api('/me', function(response) {
               FB.api('/me/picture', function(responsePic) { 
                
                $.cookie('pEmail',response.email);
                
                $.ajax({
                    type : 'POST',
                    url : 'db.php',
                    data : {'param':'CHECK',pId : response.id, pName : response.name, pImg: responsePic.data['url'], appId : '629731850476780'},
                    success : function(data)
                    {
                        if(data == 0)
                        {
                            window.location.href = 'not_invited.php';
                        }
                        else if(data == 1)
                        {
                            window.location.href = 'vip.php';
                        }
                        else
                        {
                            alert("Your invitation is not yet approved");
                        }
                    }
                });
            });
          }); 
       } else {
            window.location.href = 'pervert.php';
       }
     },{scope:'public_profile,email,user_friends,read_friendlists'});
}   

function sInv()
{
    $.ajax({
        type : 'POST',
        url : 'db.php',
        data : {'param':'SINV',uId : $.cookie('pId'),uName : $.cookie('pName')},
        success : function(data)
        {
            if(data == 1)
            {
                window.location.href = 'index.php';
            }
            else if(data == 2)
            {
                alert("your invitation is not approved");
            }
        }
    });
}

function fInvMulti()
{
     FB.ui({ 
        method: 'apprequests', 
        message: 'My diaolog...'
        },
        function(response) 
        { 
            $.ajax({
               type : "POST",
               url : 'db.php',
               data : {"param":"UIDs", data:response.to},
               succcess : function(response)
               {
                if(response == 1)
                {
                    alert("your invitaion is sent");
                    window.location.href = 'vip.php';
                }
                else if(response == 2)
                {
                    alert("The person is already invited");
                }
                else
                {
                    alert("your invitaion is not sent");
                }
               } 
            });
        });
 }
 
 function fInvEmail()
 {
    
    var fName = $("#fName").val();
    
    $.ajax({
       type : "POST",
       url : 'db.php',
       data : {"param":"uName", data:fName},
       succcess : function(response)
       {
        if(response == 1)
        {
            alert("your invitaion is sent");
            window.location.href = 'vip.php';
        }
        else if(response == 2)
        {
            alert("The person is already invited");
        }
        else
        {
            alert("your invitaion is not sent");
        }
       } 
    });
 } 
    

