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
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/css/reset.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/css/main.css">
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/js/vendor/modernizr-2.6.2.min.js"><!--SFPScript>
        <!--SFPScript type="text/javascript">
        
        function validation() {
            
            var val = '';
                val = $('input[checked=checked]').val();
                
                //alert($('label.r_on').prev('span').text());
                
                var qs = $("#question").text();
                //var value = $('label[class=r_on]').previous().text();
                var value = $('label.r_on').prev('span').text();
                 if(val == 3) {
                        //alert("work now");
                        $.ajax({
            type:"POST",
            data:{val:val,qs:qs,value:value},
            url:"database.php",
            success:function(data){    
               if(data == "1")
                {
                window.location.href = "indexus4.php";
                }
                //alert(data);
            }
        });  
        
                    }
                    else {
                        alert("Please Select a radio button!!");
                    }
            }
        </SFPScript-->
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
                        <header>
                            <div class="SFPTWO_IMAGEEDIT img_section"><a title="Indexus" class="logo"><img src="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/img/logo.png" alt="" /></a></div>
                            <p class="info">Bel: 020 - 697 20 66<br />Mail: <a href="mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        </header>
                        <div class="main_content">
                            <div class="SFPTWO_TEXTEDIT heading1"><h2 class="heading SFPTWO_TAGEDIT explicit_edit" id="question" >Met hoeveel geld<span>gaat u beleggen?</span></h2></div>
                            
                            <ul class="invest">
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/img/bar1.png" alt="" />
                                    <span>€50.000</span>
                                    <label class="label_radio"><input type="radio" /></label>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/img/bar2.png" alt="" />
                                    <span>€100.000</span>
                                    <label class="label_radio"><input type="radio" /></label>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/img/bar3.png" alt="" />
                                    <span>€250.000</span>
                                    <label class="label_radio"><input type="radio" /></label>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/img/bar4.png" alt="" />
                                    <span>€500.000</span>
                                    <label class="label_radio"><input type="radio" /></label>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/img/bar5.png" alt="" />
                                    <span>€50.000</span>
                                    <label class="label_radio"><input type="radio" /></label>
                                </li>
                            	<li>
                                	<img src="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/img/icon5.png" alt="" />
                                     
                                    <span>€2.500.000</span>
                                    <label class="label_radio"><input type="radio" /></label>
                                </li>
                            </ul>
                            <a class="button_btn" style="cursor: pointer;" onclick="validation();">Volgende stap <img src="//test.scampaigns.com/user_template/6005486eeaf99c585-indexus/img/icon3.png" alt="" /></a>
                            <a class="vorige_stap" style="cursor: pointer;">Vorige stap</a>
                        </div>
            </div>
		</section>
        <footer class="inside_footer">
            <div class="container">
                    	<ul>
                        	<li><a>1</a></li>
                        	<li><a>2</a></li>
                        	<li><a class="active">3</a></li>
                        	<li><a>4</a></li>
                        	<li><a>5</a></li>
                        </ul>
                    	<a href="http://www.indexus.nl/" target="_blank" class="web_link">www.indexus.nl</a>
                        <p>De Indexus belleggers check is een gratis mobiele app. Indexus is gespecialiseerd in vermogensbeheer en beleggingsadvies.</p>
            </div>
		</footer>
        
        
        
        
        
        </div><!-- end of main_wrap -->
        

        <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><!--SFPScript>
        <!--SFPScript type="text/javascript">window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')<!--SFPScript>
        <!--SFPScript type="text/javascript" src="js/bootstrap.min.js"><!--SFPScript>
        <!--SFPScript type="text/javascript" src="js/plugins.js"><!--SFPScript>
        <!--SFPScript type="text/javascript" src="js/main.js"><!--SFPScript>

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
