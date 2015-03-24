<!--SFPPAGE-->
<!--PHP
include "encryption.php";
$name = mc_decrypt($_COOKIE['pName'], ENCRYPTION_KEY); 
PHP-->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]--><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Demo Title</title>
        
    <link rel="shortcut icon" type="//test.scampaigns.com/user_template/831547d9d782e0788-epic/image/x-icon" href="img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/831547d9d782e0788-epic/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/831547d9d782e0788-epic/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/831547d9d782e0788-epic/css/bootstrap-theme.min.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/831547d9d782e0788-epic/css/main.css">
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/831547d9d782e0788-epic/js/vendor/modernizr-2.6.2.min.js"></SFPScript-->
    </head>
    <body>
    
    <!--SFPScript>
    
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      
      window.fbAsyncInit = function (){
            FB.init({
                appId      : '1505052056407910',
                cookie     : true,  // enable cookies to allow the server to access 
                                    // the session
                xfbml      : true,  // parse social plugins on this page
                version    : 'v2.0' // use version 2.0
              });
          };
          
    </SFPScript-->
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        <div class="main_wrap">
            <div class="SFPTWO_TEXTEDIT"><h2 class="SFPTWO_TAGEDIT explicit_edit">Full moon party</h2></div>
            <div class="SFPTWO_TEXTEDIT"><p class="neon_text SFPTWO_TAGEDIT explicit_edit"><strong>You're officially invited<br /><!--PHP echo $name;PHP--></strong></p></div>
            <a onclick="fInvMulti()" style="cursor: pointer;" class="app"><div class="SFPTWO_IMAGEEDIT"><img id="images1" src="//test.scampaigns.com/user_template/831547d9d782e0788-epic/img/facebook_app.png" alt="" /></div></a>
            <div class="SFPTWO_TEXTEDIT"><p class="neon_text SFPTWO_TAGEDIT explicit_edit"><strong>OR....</strong><br />Add your friends to this EPIC party</p></div>
            <form action="#" method="post" name="">
            	<input type="text" id="fName" name="name" value="Full name" onBlur="if(this.value=='') this.value='Full name'" onFocus="if(this.value=='Full name') this.value=''" />
            	<input type="text" id="fEmail" name="email" value="E-mail" onBlur="if(this.value=='') this.value='E-mail'" onFocus="if(this.value=='E-mail') this.value=''" />
            </form>
            <a style="cursor: pointer;" onclick="fInvEmail()" class="button_btn" title="Try again">Add this friend</a><!-- end of button_btn -->
            <h4><span>#</span>AMBITJANZ</h4>
        </div><!-- end of main_wrap -->
        
        
        <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript">window.jQuery || document.write('<script src="//test.scampaigns.com/user_template/831547d9d782e0788-epic/js/vendor/jquery-1.10.2.min.js"><\/script>')</SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/831547d9d782e0788-epic/js/bootstrap.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/831547d9d782e0788-epic/js/plugins.js"></SFPScript-->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
        
        <!--SFPScript>
        function fInvMulti()
        {
            
               
             FB.ui({ 
                method : apprequests,
                message: 'My diaolog...'
                },
                function(response) 
                { 
                    $.ajax({
                       type : "POST",
                       url : 'database.php',
                       data : {"param":"UIDs", data:response.to},
                       succcess : function(data)
                       {
                        if(data == 1)
                        {
                            alert("your invitaion is sent");
                            window.location.href = 'vip.php';
                        }
                        else if(data == 2)
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
            var email = $("#fEmail").val();
            var fEmail = validateEmail(email);
            
            if(fEmail != 0)  {
            $.ajax({
               type : "POST",
               url : 'database.php',
               data : {"param":"uName", data:fName},
               succcess : function(data)
               {
                alert(data);
                        
                    if(data == 1)
                    {
                        alert("your invitaion is sent");
                        window.location.href = 'vip.php';
                    }
                    else if(data == 2)
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
         }
         
         function validateEmail(email) {
              
                  var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
                     if (reg.test(email)){
                               alert(" valid Email!!!!!!!!!!!!!!!");
                               return email;
                                         }
                     else{
                        alert("Please Enter A valid Email!!!!!!!!!!!!!!!");
                        return 0;
                         }
         }
        </SFPScript-->
    </body>
</html>
