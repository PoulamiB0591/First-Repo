<!--SFPPAGE-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page One</title>
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/9095486ef28ecda79-indexus/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/9095486ef28ecda79-indexus/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/9095486ef28ecda79-indexus/css/reset.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/9095486ef28ecda79-indexus/css/main.css">
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/9095486ef28ecda79-indexus/js/vendor/modernizr-2.6.2.min.js"><!--SFPScript>
        
        <!--SFPScript type="text/javascript">
        
        $(function (){
           $.ajax({
               type:"POST",
               url:"database.php",
               data:{result:"123"},
               success:function(data){
                    //alert(data);
                    $("#resHide").hide();
                    $("#res").html('&euro; '+data+'.000');
                    $("#res").show();
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
    
    
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        
        
        <div class="main_wrap">
        
        <div class="popup">        	
            <h2>Voer hieronder uw gegevens in.</h2>
            <form action="/" name="details" method="post">
            <ul>
            	<li>
                	<label>Uw naam: <span>*</span></label>
                    <input name="naam" id="name" value="" type="text">
                </li>
            	<li>
                	<label>Uw telefoonnummer: <span>*</span></label>
                    <input name="telefoonnummer" id="telno" value="" type="text">
                </li>
            	<li>
                	<label>Uw emailadres: <span>*</span></label>
                    <input name="emailadres" id="email" value="" type="text">
                </li>
            	<li>
                	<label>&nbsp;</label>
                    <input class="inputdisabled" name="submit" value="Versturen" onclick="addDetails();" type="button">
                </li>
            	<li><a style="cursor: pointer;" class="close_btn disabled">Sluiten</a></li>
            </ul>
            </form>
        </div>
        
        <section class="main_step4">
            <div class="container">
                        <header>
                            <div class="SFPTWO_IMAGEEDIT img_section tagsimg_1"><a title="Indexus" class="logo disabled"><img src="//test.scampaigns.com/user_template/9095486ef28ecda79-indexus/img/logo.png" alt=""></a><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="9095486ef28ecda79-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                             <p class="info SFPTWO_TAGEDIT explicit_edit tag_1" contenteditable="false">Bel: 020 - 697 20 66<br>Mail: <a class="disabled" href="mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></header>
                        <div class="main_content">
                            <div class="SFPTWO_TEXTEDIT heading1 tags_1"><h2 class="heading SFPTWO_TAGEDIT explicit_edit tag_2" contenteditable="false">Uw verwacht<span>doelvermogen is...</span></h2><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                            <h3><p id="resHide">result</p><p id="res" style="display:none ;"></p></h3>
                            <p class="SFPTWO_TAGEDIT explicit_edit tag_3" contenteditable="false">Wij kunnen u ook een uitgebreide analyse toesturen, gebaseerd op de door u doorgelopen. Weten hoe? Ga verder via onderstaande knop.</p>
                            
                            <div class="SFPTWO_IMAGEEDIT img_section tagsimg_2"><img src="//test.scampaigns.com/user_template/9095486ef28ecda79-indexus/img/icon7.png" alt="" class="img_response"><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="9095486ef28ecda79-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                            
                            <a class="button_btn button_btn2 disabled"><span>Ja, ik wil de uitgebreide analyse opvragen</span> <img src="img/icon3.png" alt=""></a>
                            <a class="vorige_stap disabled">Vorige stap</a>
                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
            </div>
		</section>
        <footer class="inside_footer">
            <div class="container">
                    	<ul>
                        	<li><a class="disabled">1</a></li>
                        	<li><a class="disabled">2</a></li>
                        	<li><a class="disabled">3</a></li>
                        	<li><a class="disabled">4</a></li>
                        	<li><a class="active disabled">5</a></li>
                        </ul>
                    	<a class="SFPTWO_TAGEDIT explicit_edit disabled tag_4" href="http://www.indexus.nl/" target="_blank" contenteditable="false">www.indexus.nl</a>
                        <p class="SFPTWO_TAGEDIT explicit_edit tag_5" contenteditable="false">De Indexus belleggers check is een gratis mobiele app. Indexus is gespecialiseerd in vermogensbeheer en beleggingsadvies.</p>
            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
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