<!--SFPPAGE-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page One</title>
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/26354895ed2548b414-indexus/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/26354895ed2548b414-indexus/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/26354895ed2548b414-indexus/css/reset.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/26354895ed2548b414-indexus/css/main.css">
        <script  type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        
        <script  type="text/javascript" src="//test.scampaigns.com/user_template/26354895ed2548b414-indexus/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <script type="text/javascript">
        $(document).ready(function(){ 
            
                $(".label_radio").click(function(){
        $(".label_radio").removeClass("r_on");
        $(this).addClass("r_on").children("input[type='radio']").attr("checked", true);
                 });
               
              });
        
        function validation() {
                
                var radioButtons = $(".profiel input:radio");
        var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));
        
                
            if(selectedIndex != -1) {
            var x = getCookie('answer');
            var hold = parseInt(selectedIndex) + 1;
            var value = $("#v"+hold).val();
            var answer = parseFloat(value) + parseFloat(x);
            document.cookie="answer="+answer;
            window.location.href='indexusR.php';
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
            
        </script>
    
    
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        
        
        <div class="main_wrap">
        
        
        
        <section class="main_step4">
            <div class="container">
                        <header>
                            <div class="SFPTWO_IMAGEEDIT img_section tagsimg_1"><a title="Indexus" class="logo"><img src="//test.scampaigns.com/user_template/26354895ed2548b414-indexus/img/logo.png" alt=""></a></div>
                            <p class="info">Bel: 020 - 697 20 66<br>Mail: <a class="" href="mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        </header>
                        <div class="main_content">
                            <div class="SFPTWO_TEXTEDIT heading1 tags_1"><h2 class="heading SFPTWO_TAGEDIT tag_1" id="question">Wat is uw<span>risico profiel?</span></h2></div>
                            
                            
                           
                            <ul class="profiel radios">
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/26354895ed2548b414-indexus/img/defensief_img.png" alt="">
                                    <label class="label_radio"><input value="4" name="indexusapp" type="radio"></label>
                                    <span id="s1">Defensief</span>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/26354895ed2548b414-indexus/img/neutraal_img.png" alt="">
                                    <label class="label_radio"><input value="4" name="indexusapp" type="radio"></label>
                                    <span id="s2">Neutraal</span>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/26354895ed2548b414-indexus/img/offensief_img.png" alt="">
                                    <label class="label_radio"><input value="4" name="indexusapp" type="radio"></label>
                                    <span id="s3">Offe</span>
                                </li>
                            </ul>
                             <a class="button_btn" style="cursor: pointer;" onclick="validation();">Volgende stap<img src="img/icon3.png" alt=""></a>
                             <a class="vorige_stap">Vorige stap</a>
                        </div>
                        <div>
                        <input id="v1" value="1" type="hidden">
                        <input id="v2" value="2" type="hidden">
                        <input id="v3" value="6" type="hidden">
                        </div>
            </div>
		</section>
        <footer class="inside_footer">
            <div class="container">
                    	<ul>
                        	<li><a class="">1</a></li>
                        	<li><a class="">2</a></li>
                        	<li><a class="">3</a></li>
                        	<li><a class="active">4</a></li>
                        	<li><a class="">5</a></li>
                        </ul>
                    	<a href="http://www.indexus.nl/" target="_blank" class="web_link">www.indexus.nl</a>
                        <p class="SFPTWO_TAGEDIT tag_2">De Indexus belleggers check is een gratis mobiele app. Indexus is gespecialiseerd in vermogensbeheer en beleggingsadvies.</p>
            </div>
		</footer>
        
        
        
        
        
        </div><!-- end of main_wrap -->
        

        <script  type="text/javascript">window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script  type="text/javascript" src="//test.scampaigns.com/user_template/26354895ed2548b414-indexus/js/bootstrap.min.js"></script>
        <script  type="text/javascript" src="//test.scampaigns.com/user_template/26354895ed2548b414-indexus/js/plugins.js"></script>
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->