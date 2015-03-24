<!--SFPPAGE-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page One</title>
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/css/reset.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/css/main.css">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        
        <script type="text/javascript" src="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript">
        
         $(document).ready(function(){ 
            
                $(".label_radio").click(function(){
        $(".label_radio").removeClass("r_on");
        $(this).addClass("r_on").children("input[type='radio']").attr("checked", true);
                 });
               
              });
        
        
        function validation() {
                
                var radioButtons = $(".invest input:radio");
        var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));
        
                
            if(selectedIndex != -1) {
            var x = getCookie('answer');
            var hold = parseInt(selectedIndex) + 1;
            var value = $("#v"+hold).val();
            var answer = parseFloat(value) + parseFloat(x);
            document.cookie="answer="+answer;
            window.location.href='indexus4.php';
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
                            <div class="SFPTWO_IMAGEEDIT img_section tagsimg_1"><a title="Indexus" class="logo disabled"><img src="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/img/logo.png" alt=""></a><div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="5995487c9cc34ed97-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                            <p class="info SFPTWO_TAGEDIT explicit_edit tag_1" contenteditable="false">Bel: 020 - 697 20 66<br>Mail: <a class="disabled" href="mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></header>
                        <div class="main_content">
                            <div class="SFPTWO_TEXTEDIT heading1 tags_1"><h2 class="heading SFPTWO_TAGEDIT explicit_edit tag_2" id="question" contenteditable="false">Met hoeveel geld<span>gaat u beleggen?</span></h2><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                            
                            <ul class="invest radios">
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/img/bar1.png" alt="">
                                    <span id="s1">€50.000</span>
                                    <label class="label_radio"><input value="3" name="indexusapp" type="radio"></label>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/img/bar2.png" alt="">
                                    <span id="s2">€100.000</span>
                                    <label class="label_radio"><input value="3" name="indexusapp" type="radio"></label>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/img/bar3.png" alt="">
                                    <span id="s3">€250.000</span>
                                    <label class="label_radio"><input value="3" name="indexusapp" type="radio"></label>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/img/bar4.png" alt="">
                                    <span id="s4">€500.000</span>
                                    <label class="label_radio"><input value="3" name="indexusapp" type="radio"></label>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/img/bar5.png" alt="">
                                    <span id="s5">€50.000</span>
                                    <label class="label_radio"><input value="3" name="indexusapp" type="radio"></label>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/img/icon5.png" alt="">
                                     
                                    <span id="s6">€2.500.000</span>
                                    <label class="label_radio"><input value="3" name="indexusapp" type="radio"></label>
                                </li>
                            </ul>
                            <a class="button_btn disabled" style="cursor: pointer;" onclick="validation();">Volgende stap <img src="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/img/icon3.png" alt=""></a>
                            <a class="vorige_stap disabled" style="cursor: pointer;">Vorige stap</a>
                        </div>
                        <div>
                        <input id="v1" value="3" type="hidden">
                        <input id="v2" value="5" type="hidden">
                        <input id="v3" value="7" type="hidden">
                        <input id="v4" value="9" type="hidden">
                        <input id="v5" value="4" type="hidden">
                        <input id="v6" value="6" type="hidden">
                        </div>
            </div>
		</section>
        <footer class="inside_footer">
            <div class="container">
                    	<ul>
                        	<li><a class="disabled">1</a></li>
                        	<li><a class="disabled">2</a></li>
                        	<li><a class="active disabled">3</a></li>
                        	<li><a class="disabled">4</a></li>
                        	<li><a class="disabled">5</a></li>
                        </ul>
                    	<a href="http://www.indexus.nl/" target="_blank" class="web_link disabled">www.indexus.nl</a>
                        <p class="SFPTWO_TAGEDIT explicit_edit tag_3" contenteditable="false">De Indexus belleggers check is een gratis mobiele app. Indexus is gespecialiseerd in vermogensbeheer en beleggingsadvies.</p>
            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
		</footer>
        
        
        
        
        
        </div><!-- end of main_wrap -->
        

        <script type="text/javascript">window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/5995487c9cc34ed97-indexus/js/plugins.js"></script>
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->