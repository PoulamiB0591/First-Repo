<!--SFPPAGE-->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Five</title>
        <link rel="shortcut icon" type="//test.scampaigns.com/user_template/744546c864e4595412-indexus/image/x-icon" href="img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/744546c864e4595412-indexus/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/744546c864e4595412-indexus/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/744546c864e4595412-indexus/css/reset.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/744546c864e4595412-indexus/css/main.css">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/744546c864e4595412-indexus/js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript">
        
        function validation() {
            
               var val = '';
                val = $('input[checked=checked]').val();
                var qs = $("#question").text();
                var value = $('label.r_on').text();
                
                 if(val == 5) {
                         //alert("work now");
                        $.ajax({
            type:"POST",
            data:{val:val,qs:qs,value:value},
            url:"database.php",
            success:function(data){    
               if(data == "1")
                {
                window.location.href = "indexusR.php";
                }
                //alert(data);
            }
        });  
        
                    }
                    else {
                        alert("Please Select a radio button!!");
                    }
            }
            
            
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        
        
        <div class="main_wrap">
        
        
        
        <section class="main_step4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <header>
                            <a style="cursor: pointer;" title="Indexus" class="logo"><div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/744546c864e4595412-indexus/img/logo.png" alt="" /></div></a>
                            <p class="info">Bel: 020 - 697 20 66<br />Mail: <a href="mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        </header>
                        <div class="main_content">
                            <h2 class="heading">Wat voor dienstverlening<br /><span>&nbsp;&nbsp; zoekt u?</span></h2>
                            <p class="intro" id="question" ><strong>Naar wat voor dienstverlening bent u op zoek?</strong></p>
                            <fieldset class="radios">
                                <label class="label_radio"><input type="radio" name="radio" id="rd" value="5" /> Ik wil zelf beleggen</label>
                                <label class="label_radio"><input type="radio" name="radio" id="rd" value="5" /> Ik wil samen beleggen</label>
                                <label class="label_radio"><input type="radio" name="radio" id="rd" value="5" /> Ik wil voor mij laten beleggen</label>
                            </fieldset>
                            <div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/744546c864e4595412-indexus/img/icon1.png" alt="" /></div>
                            <a class="button_btn" style="cursor: pointer;" title="Volgende stap" onclick="validation();" >Volgende stap</a>
                            <a class="vorige_stap" style="cursor: pointer;" title="Vorige stap">Vorige stap</a>
                        </div>
                    </div>
                </div>
            </div>
		</section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    	<a href="http://www.indexus.nl/" target="_blank" class="web_link">www.indexus.nl</a>
                        <p>De Indexus belleggers check is een gratis mobiele app. Indexus is gespecialiseerd in vermogensbeheer en beleggingsadvies.</p>
                    </div>
                </div>
            </div>
		</footer>
        
        
        
        
        
        </div><!-- end of main_wrap -->
        

        <script type="text/javascript">window.jQuery || document.write('<script src="//test.scampaigns.com/user_template/744546c864e4595412-indexus/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/744546c864e4595412-indexus/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/744546c864e4595412-indexus/js/plugins.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/744546c864e4595412-indexus/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
    </body>
</html>
