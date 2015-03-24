<!--SFPPAGE-->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Result Page</title>
        <link rel="shortcut icon" type="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/image/x-icon" href="img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/css/reset.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/css/main.css">
       <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/js/vendor/modernizr-2.6.2.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript">
        
        $(function (){
           $.ajax({
               type:"POST",
               url:"database.php",
               data:{result:"123"},
               success:function(data){
                    //alert(data);
                    $("#res").html('&euro; '+data+'.000');
               }     
               
           }); 
        });        
        
        
        function addDetails() {
            //alert("work now!!");
            var count = 0;
            var uname = $("#name").val();
            var phno = $("#telno").val();
            var eid = $("#email").val();
            var letters = /^[A-Za-z]+$/;
            var regexemail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var filter = /^[0-9-+]+$/;
            
            if(uname == '' || phno == '' || eid == '')
    {
        //alert("please fill the required fields");
        //return false;
        
                     if(uname == '') {
                        alert("please fill Your Name!!");
                        return false;
                     }
                     else if(phno == '') {
                        alert("please fill Your Phone No!!");
                        return false;  
                     }
                     else {
                        alert("please fill Your Email ID!!");
                        return false;
                     }
                 
    }
            
    
            if (!uname.match(letters)) 
    {
       alert("Please put valid Name");
         
         return false;
    } 
    
             if (!phno.match(filter)) {
           
        alert("Please put valid Phone Number");     
         return false;
    }   
                
                
              if (!eid.match(regexemail)) 
    {
       alert("Please put valid E-mail");
         
         return false;
    } 
    
    
             if(count == 0) {
                 //alert("work now!!");
   $.ajax({
            type:"POST",
            data:{val:6,uname:uname,phno:phno,eid:eid},
            url:"database.php",
            success:function(data){   
                
               if(data == 1)
                {
                    $("div.popup, div.mask").fadeOut(300, function(){
        				$("div.mask").remove();
        			});
                }
                
            }
        }); 
         
        
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
        
<?php
//session_start();
//$sum = @$_SESSION['total'];
//$sum = @$_GET['data'];
//session_destroy();
?>      
        
        <div class="main_wrap">
        
        <div class="popup">
        	<a style="cursor: pointer;" class="close_btn">Sluiten</a>
            <h2>Voer hieronder uw gegevens in.</h2>
            <form action="/" name="details" method="post">
            <ul>
            	<li>
                	<label>Uw naam: <span>*</span></label>
                    <input type="text" name="naam" id="name" value="" />
                </li>
            	<li>
                	<label>Uw telefoonnummer: <span>*</span></label>
                    <input type="text" name="telefoonnummer" id="telno" value="" />
                </li>
            	<li>
                	<label>Uw emailadres: <span>*</span></label>
                    <input type="text" name="emailadres" id="email" value="" />
                </li>
            	<li>
                	<label>&nbsp;</label>
                    <input type="button" name="submit" value="Versturen" onclick="addDetails();"  />
                </li>
            </ul>
            </form>
        </div>
        
        <section class="main_step4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <header>
                            <a style="cursor: pointer;"title="Indexus" class="logo"><div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/img/logo.png" alt="" /></div></a>
                            <p class="info">Bel: 020 - 697 20 66<br />Mail: <a href="mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        </header>
                        <div class="main_content">
                            <h2 class="heading">Uw verwacht<br /><span>&nbsp;&nbsp; doelvermogen is...</span></h2>
                            <h3><p id="res"></p></h3>
                            <p>Wij kunnen u ook een uitgebreide analyse toesturen, gebaseerd op de door u doorgelopen. Weten hoe? Ga verder via onderstaande knop.</p>
                            <a class="button_btn button_btn3" style="cursor: pointer;" title="Volgende stap"><span>Ja, ik wil de uitgebreide analyse opvragen</span> <div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/img/icon3.png" alt="" /></div></a>
                            <a class="vorige_stap" style="cursor: pointer;" title="Vorige stap">Vorige stap</a>
                            <div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/img/icon7.png" alt="" /></div>
                        </div>
                    </div>
                </div>
            </div>
		</section>
        <footer class="inside_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    	<ul>
                        	<li><a>1</a></li>
                        	<li><a>2</a></li>
                        	<li><a>3</a></li>
                        	<li><a>4</a></li>
                            <li><a>5</a></li>
                        	<li><a class="active">6</a></li>
                        </ul>
                    	<a href="http://www.indexus.nl/" target="_blank" class="web_link">www.indexus.nl</a>
                        <p>De Indexus belleggers check is een gratis mobiele app. Indexus is gespecialiseerd in vermogensbeheer en beleggingsadvies.</p>
                    </div>
                </div>
            </div>
		</footer>
        
        
        
        
        
        </div><!-- end of main_wrap -->
        

        <!--SFPScript type="text/javascript">window.jQuery || document.write('<script src="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/js/vendor/jquery-1.10.2.min.js"><\/script>')</SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/js/bootstrap.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/js/plugins.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/4105478972861f9a12-indexus/js/main.js"></SFPScript-->

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
