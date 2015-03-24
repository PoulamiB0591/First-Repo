<!--SFPPAGE-->
<!--PHP
include "encryption.php";
$img = mc_decrypt($_COOKIE['pImg'], ENCRYPTION_KEY);
$pName = mc_decrypt($_COOKIE['pName'], ENCRYPTION_KEY);
PHP-->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Demo Title</title>
        
    <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/95954605fc4c12249-epic/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/95954605fc4c12249-epic/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/95954605fc4c12249-epic/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/95954605fc4c12249-epic/css/bootstrap-theme.min.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/95954605fc4c12249-epic/css/main.css">
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/95954605fc4c12249-epic/js/vendor/modernizr-2.6.2.min.js"></SFPScript-->
    
    
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        <div class="main_wrap">
            <div class="SFPTWO_TEXTEDIT"><h2 class="SFPTWO_TAGEDIT explicit_edit">Full moon party</h2></div>
            <div class="SFPTWO_TEXTEDIT"><p class="neon_text SFPTWO_TAGEDIT explicit_edit"><strong>You're officially invited<br></strong></p></div>
            <p id="pName_hide" class="neon_text">&lt;full name&gt;</p>
            <p class="neon_text"><!--PHP echo $pName; PHP--></p>
            <div class="img_pic">
            	<div class="SFPTWO_IMAGEEDIT"><img id="images1" src="//test.scampaigns.com/user_template/95954605fc4c12249-epic/img/frame_img.png" alt=""></div>
            	<img id="pPic" src="<!--PHP echo $img; PHP-->" alt="YOUR PROFILE PICTURE"> 
            </div><!-- end of img_pic -->
            <div class="SFPTWO_TEXTEDIT"><p class="neon_text SFPTWO_TAGEDIT explicit_edit"><strong>You've received an<br>e-mail to <br><br></strong></p></div>
            <strong><p id="pEmail_hide" class="neon_text">&lt;e-mail&gt;</p><p class="neon_text"><!--PHP echo $_COOKIE['pEmail']; PHP--></p></strong>
            <div class="SFPTWO_TEXTEDIT"><p class="neon_text SFPTWO_TAGEDIT explicit_edit"><strong>Want to be be a VIP<br>Member?</strong></p></div>
            <a href="add.php" class="button_btn disabled" title="Try again">Invite other Friends as well</a><!-- end of button_btn -->
            <div class="SFPTWO_TEXTEDIT"><h5 class="SFPTWO_TAGEDIT explicit_edit">Why should you<br>be a VIP member?</h5></div>
            <ul class="option">
            	<li class="clearfix"><div class="SFPTWO_IMAGEEDIT"><span><img id="images1" src="//test.scampaigns.com/user_template/95954605fc4c12249-epic/img/bottle_icon.png" alt=""></span></div> <div class="SFPTWO_TEXTEDIT"><p class="SFPTWO_TAGEDIT explicit_edit">VIP Threathments</p></div></li>
            	<li class="clearfix"><div class="SFPTWO_IMAGEEDIT"><span><img id="images1" src="//test.scampaigns.com/user_template/95954605fc4c12249-epic/img/bottle_icon.png" alt=""></span></div> <div class="SFPTWO_TEXTEDIT"><p class="SFPTWO_TAGEDIT explicit_edit">Epic night with your friends</p></div></li>
            	<li class="clearfix"><div class="SFPTWO_IMAGEEDIT"><span><img id="images1" src="//test.scampaigns.com/user_template/95954605fc4c12249-epic/img/bottle_icon.png" alt=""></span></div> <div class="SFPTWO_TEXTEDIT"><p class="SFPTWO_TAGEDIT explicit_edit">Your favorite cocktail</p></div></li>
            </ul><!-- end of option -->
            <h4><span>#</span>AMBITJANZ</h4></div>
        <!-- end of main_wrap -->
        
        
        <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript">window.jQuery || document.write('<script src="//test.scampaigns.com/user_template/95954605fc4c12249-epic/js/vendor/jquery-1.10.2.min.js"><\/script>')</SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/95954605fc4c12249-epic/js/bootstrap.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/95954605fc4c12249-epic/js/plugins.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/95954605fc4c12249-epic/js/main.js"></SFPScript-->

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
        $(function (){
           $("#pName_hide").hide(); 
           $("#pEmail_hide").hide();
        });
        
       </SFPScript-->
    </body>
</html>