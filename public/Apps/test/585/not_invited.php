<!--SFPPAGE-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Demo Title</title>
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/css/bootstrap-theme.min.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/css/main.css">
        <script  type="text/javascript" src="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/js/vendor/modernizr-2.6.2.min.js"></script>
    
    
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        
        
        <div class="main_wrap">
            <div class="SFPTWO_TEXTEDIT tags_1"><h2 class="SFPTWO_TAGEDIT explicit_edit tag_1" contenteditable="false">Full moon party</h2><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            <div class="SFPTWO_TEXTEDIT tags_2"><p class="neon_text SFPTWO_TAGEDIT explicit_edit tag_2" contenteditable="false"><strong>Too bad....</strong>You're not invited...</p><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            <div class="SFPTWO_IMAGEEDIT tagsimg_1"><span class="img"><img id="images1" src="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/img/crying_img.png" alt=""></span><div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="212547c55e32a81d15-epic" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div><!-- end of img -->
            <div class="SFPTWO_TEXTEDIT tags_3"><p class="neon_text SFPTWO_TAGEDIT explicit_edit tag_3" contenteditable="false"><strong>But don't worry</strong>You can still be part<br>of this EPIC Party.</p><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            <a style="cursor: pointer;" onclick="sInv();" class="button_btn disabled" title="Add yourself to the jury">Add yourself to the jury</a><!-- end of button_btn -->
            <h4><span>#</span>AMBITJANZ</h4>
        </div><!-- end of main_wrap -->
        
    
        
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script src="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/js/plugins.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/js/jquery.cookie.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/212547c55e32a81d15-epic/js/main.js"></script>
        


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
       </script>