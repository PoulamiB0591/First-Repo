<!--SFPPAGE-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page One</title>
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/75854991054221fc15-indexus/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/75854991054221fc15-indexus/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/75854991054221fc15-indexus/css/reset.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/75854991054221fc15-indexus/css/main.css">
        <!--SFPScript  type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></SFPScript-->
        
        <!--SFPScript  type="text/javascript" src="//test.scampaigns.com/user_template/75854991054221fc15-indexus/js/vendor/modernizr-2.6.2.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript">
        
        $(document).ready(function(){ 
            
        $(".label_radio").click(function(){
        $(".label_radio").removeClass("r_on");
        $(this).addClass("r_on").children("input[type='radio']").attr("checked", true);
                 });
               
              });
        function validation() {
                
                var radioButtons = $(".radios input:radio");
        var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));
        
                
            if(selectedIndex != -1) {
            var x = getCookie('answer');
            var hold = parseInt(selectedIndex) + 1;
            var value = $("#v"+hold).val();
            var answer = parseFloat(value) + parseFloat(x);
            document.cookie="answer="+answer;
            window.location.href='indexus9.php';
            return false;
            }
                else {
                    alert("Please Select a radio button!!");
                }
              }
            
            function getCookie(cname) {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for(var i=0; i<ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1);
                    if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
                }
                return "";
            }
            
            
        </SFPScript-->
    
    
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        
        
        <div class="main_wrap">
        
        
        
        <section class="main_step6">
                    <div class="container">
                        <header>
                            <div class="SFPTWO_IMAGEEDIT img_section tagsimg_1"><a title="Indexus" class="logo"><img src="//test.scampaigns.com/user_template/75854991054221fc15-indexus/img/logo.png" alt=""></a></div>
                            <p class="info">Bel: 020 - 697 20 66<br>Mail: <a class="" href="mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        </header>
                        <div class="main_content">
                            <div style="display: none;" class="SFPTWO_TEXTEDIT heading1 tags_1 randtxt_67"><h2 style="display: block;" class="heading SFPTWO_TAGEDIT tag_1" id="question">Wat voor dienstverlening<br><span>&nbsp;&nbsp; zoekt u?</span></h2></div>
                            <div style="display: none;" class="SFPTWO_TEXTEDIT heading1 tags_2 randtxt_863"><p class="intro SFPTWO_TAGEDIT tag_2"><strong>Naar wat voor dienstverlening bent u op zoek?</strong></p></div>
                            <fieldset class="radios indexusidentifier" id="5identifire">
                                <label class="label_radio"><input value="5" name="indexusapp" type="radio"><span id="s1">1</span></label>
                                <label class="label_radio"><input value="5" name="indexusapp" type="radio"><span id="s2">2</span></label>
                                <label class="label_radio"><input value="5" name="indexusapp" type="radio"><span id="s3">3</span></label>
                            <label class="label_radio"><input name="indexusapp" value="5" type="radio"><span id="s4">4</span></label><label class="label_radio"><input name="indexusapp" value="5" type="radio"><span id="s5">5gg</span></label><label class="label_radio"><input name="indexusapp" value="5" type="radio"><span id="s6">gfgfg</span></label><label class="label_radio"><input name="indexusapp" value="5" type="radio"><span id="s7"></span></label></fieldset>
                            <div style="display: none;" class="SFPTWO_IMAGEEDIT img_section tagsimg_2 imgEdit1 rand_899"><img src="//test.scampaigns.com/user_template/75854991054221fc15-indexus/img/icon1.png" alt=""></div>
                            <a class="button_btn" style="cursor: pointer;" onclick="validation();">Volgende stap <img src="//test.scampaigns.com/user_template/75854991054221fc15-indexus/img/icon3.png" alt=""></a>
                            <a class="vorige_stap">Vorige stap</a>
                        </div>
                        <div id="extrapageoption">
                        <input id="v1" value="1" type="hidden">
                        <input id="v2" value="2" type="hidden">
                        <input id="v3" value="3" type="hidden">
                        <input value="" id="v4" type="hidden"><input value="" id="v5" type="hidden"><input value="" id="v6" type="hidden"><input value="" id="v7" type="hidden"></div>
            </div>
		</section>
        <footer>
            <div class="container">
                    	<a href="http://www.indexus.nl/" target="_blank" class="web_link">www.indexus.nl</a>
                        <p class="SFPTWO_TAGEDIT tag_3">De Indexus belleggers check is een gratis mobiele app. Indexus is gespecialiseerd in vermogensbeheer en beleggingsadvies.</p>
            </div>
		</footer>
        
        
        
        
        
        </div><!-- end of main_wrap -->
        

        <!--SFPScript  type="text/javascript">window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</SFPScript-->
        <!--SFPScript  type="text/javascript" src="//test.scampaigns.com/user_template/75854991054221fc15-indexus/js/bootstrap.min.js"></SFPScript-->
        <!--SFPScript  type="text/javascript" src="//test.scampaigns.com/user_template/75854991054221fc15-indexus/js/plugins.js"></SFPScript-->
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->