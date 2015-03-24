<!--SFPPAGE-->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page One</title>
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/7825487ff1526aca13-indexus/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/7825487ff1526aca13-indexus/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/7825487ff1526aca13-indexus/css/reset.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/7825487ff1526aca13-indexus/css/main.css">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        
        <script type="text/javascript" src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        <script type="text/javascript">
         
        
        
        $(document).ready(function(){ 
            
                $("span").removeClass("active");
                $(this).addClass('active');
            
               $(".radios > label").click(function(event){ 
                $(".label_radio").click(function(){
        $(".label_radio").removeClass("r_on");
        $(this).addClass("r_on").children("input[type='radio']").attr("checked", true);
                 });
               
            var search = $(this).text();            
              $('div.jaar > span').each(function(){                
                  var res =$(this).text(); 
                  if(res.trim() == search.trim()){
                    
                    //alert(res.trim());
                       $("span").removeClass("active");
                       $(this).addClass('active');                       
                       return false;
                    }
             }); 
             
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
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        
        
        <div class="main_wrap">
        
        
        
        <section class="main_step3">
            <div class="container">
                
                        <header>
                            <div class="SFPTWO_IMAGEEDIT img_section"><a title="Indexus" class="logo"><img src="//test.scampaigns.com/user_template/7825487ff1526aca13-indexus/img/logo.png" alt="" /></a></div>
                            <p class="info SFPTWO_TAGEDIT explicit_edit">Bel: 020 - 697 20 66<br />Mail: <a href="mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        </header>
                        <div class="main_content">
                            <div class="SFPTWO_TEXTEDIT heading1"><h2 class="heading SFPTWO_TAGEDIT explicit_edit">Over hoeveel jaar<span>wilt u over uw vermogen beschikken?</span></h2></div>
                            <div class="SFPTWO_IMAGEEDIT img_section"><img src="//test.scampaigns.com/user_template/7825487ff1526aca13-indexus/img/icon1.png" alt="" /></div>
                            <fieldset class="radios">
                                <label class="label_radio"><input type="radio" value="2" name="indexusapp" /> <span id="s1">20 jaar </span></label>
                                <label class="label_radio"><input type="radio" value="2" name="indexusapp" /> <span id="s2">15 jaar </span></label>
                                <label class="label_radio"><input type="radio" value="2" name="indexusapp" /> <span id="s3">10 jaar</span></label>
                                <label class="label_radio"><input type="radio" value="2" name="indexusapp" /> <span id="s4">5 jaar</span></label>
                            </fieldset>
                            <div class="jaar"  id="jaarindexus2">
                            	<span id="es1">20 jaar</span>
                            	<span id="es2">15 jaar</span>
                            	<span id="es3">10 jaar</span>
                            	<span id="es4">5 jaar</span>
                            </div>
                           <a class="button_btn" style="cursor: pointer;" id="submit" onclick="validation();">Volgende stap <img src="//test.scampaigns.com/user_template/7825487ff1526aca13-indexus/img/icon3.png" alt="" /></a>
                            <a class="vorige_stap" style="cursor: pointer;">Vorige stap</a>
                        </div>
                        <div>
                        <input type="hidden" id="v1" value="1"/>
                        <input type="hidden" id="v2" value="2"/>
                        <input type="hidden" id="v3" value="3"/>
                        <input type="hidden" id="v4" value="4"/>
                        </div>
                        
            </div>
		</section>
        <footer class="inside_footer">
            <div class="container">
                
                    	<ul>
                        	<li><a>1</a></li>
                        	<li><a class="active">2</a></li>
                        	<li><a>3</a></li>
                        	<li><a>4</a></li>
                        	<li><a>5</a></li>
                        </ul>
                    	<a href="http://www.indexus.nl/" target="_blank" class="web_link">www.indexus.nl</a>
                        <p class="SFPTWO_TAGEDIT explicit_edit">De Indexus belleggers check is een gratis mobiele app. Indexus is gespecialiseerd in vermogensbeheer en beleggingsadvies.</p>
            </div>
		</footer>
        
        
        
        
        
        </div><!-- end of main_wrap -->
        

        <script type="text/javascript">window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/7825487ff1526aca13-indexus/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/7825487ff1526aca13-indexus/js/plugins.js"></script>
        

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
