<!--SFPPAGE-->
<?php
include "encryption.php";
$img = mc_decrypt($_COOKIE['pImg'], ENCRYPTION_KEY);
$pName = mc_decrypt($_COOKIE['pName'], ENCRYPTION_KEY);
?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Demo Title</title>
        
    <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/69354afce528855f13-epic/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/69354afce528855f13-epic/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/69354afce528855f13-epic/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/69354afce528855f13-epic/css/bootstrap-theme.min.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/69354afce528855f13-epic/css/main.css">
        <script type="text/javascript" src="//test.scampaigns.com/user_template/69354afce528855f13-epic/js/vendor/modernizr-2.6.2.min.js"></script>
    
    
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        <div class="main_wrap">
            <div class="SFPTWO_TEXTEDIT tags_1"><h2 class="SFPTWO_TAGEDIT explicit_edit tag_1" contenteditable="false">Full moon party</h2><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            <div class="SFPTWO_TEXTEDIT tags_2"><p class="neon_text SFPTWO_TAGEDIT explicit_edit tag_2" contenteditable="false"><strong>You're officially invited<br></strong></p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            <p id="pName_hide" class="neon_text">&lt;full name&gt;</p>
            <p class="neon_text"><?php echo $pName; ?></p>
            
          <div class="img_pic" style="display: none;">
            	<div class="SFPTWO_IMAGEEDIT tagsimg_1"><img id="images1" src="//test.scampaigns.com/user_template/69354afce528855f13-epic/img/frame_img.png" alt=""><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="69354afce528855f13-epic" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
            	<img id="pPic" src="<?php echo $img; ?>" alt="YOUR PROFILE PICTURE"> 
            </div><!-- end of img_pic -->
            <strong><p id="pPic_hide" class="neon_text">&lt;profile picture&gt;</p></strong>
            <div class="SFPTWO_TEXTEDIT tags_3"><p class="neon_text SFPTWO_TAGEDIT explicit_edit tag_3" contenteditable="false"><strong>You've received an<br>e-mail to <br><br></strong></p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            <strong><p id="pEmail_hide" class="neon_text">&lt;e-mail&gt;</p><p class="neon_text"><?php echo $_COOKIE['pEmail']; ?></p></strong>
            <div class="SFPTWO_TEXTEDIT tags_4"><p class="neon_text SFPTWO_TAGEDIT explicit_edit tag_4" contenteditable="false"><strong>Want to be be a VIP<br>Member?</strong></p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            <a href="add.php" class="button_btn disabled" title="Try again">Invite other Friends as well</a><!-- end of button_btn -->
            <div class="SFPTWO_TEXTEDIT tags_5"><h5 class="SFPTWO_TAGEDIT explicit_edit tag_5" contenteditable="false">Why should you<br>be a VIP member?</h5><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            <ul class="option">
            	<li class="clearfix"><div class="SFPTWO_IMAGEEDIT tagsimg_2"><span><img id="images1" src="//test.scampaigns.com/user_template/69354afce528855f13-epic/img/bottle_icon.png" alt=""></span><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="69354afce528855f13-epic" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div> <div class="SFPTWO_TEXTEDIT tags_6"><p class="SFPTWO_TAGEDIT explicit_edit tag_6" contenteditable="false">VIP Threathments</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></li>
            	<li class="clearfix"><div class="SFPTWO_IMAGEEDIT tagsimg_3"><span><img id="images1" src="//test.scampaigns.com/user_template/69354afce528855f13-epic/img/bottle_icon.png" alt=""></span><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="69354afce528855f13-epic" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div> <div class="SFPTWO_TEXTEDIT tags_7"><p class="SFPTWO_TAGEDIT explicit_edit tag_7" contenteditable="false">Epic night with your friends</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></li>
            	<li class="clearfix"><div class="SFPTWO_IMAGEEDIT tagsimg_4"><span><img id="images1" src="//test.scampaigns.com/user_template/69354afce528855f13-epic/img/bottle_icon.png" alt=""></span><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="69354afce528855f13-epic" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div> <div class="SFPTWO_TEXTEDIT tags_8"><p class="SFPTWO_TAGEDIT explicit_edit tag_8" contenteditable="false">Your favorite cocktail</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></li>
            </ul><!-- end of option -->
            <h4><span>#</span>AMBITJANZ</h4></div>
        <!-- end of main_wrap -->
        
        
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script src="//test.scampaigns.com/user_template/69354afce528855f13-epic/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/69354afce528855f13-epic/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/69354afce528855f13-epic/js/plugins.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/69354afce528855f13-epic/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
        
        <script>
        $(function (){
           $("#pName_hide").hide(); 
           $("#pPic_hide").hide();
           $("#pEmail_hide").hide();
           
           $(".img_pic").show();                      
        });
        
       </script>