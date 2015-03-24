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
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/14554870ef92b24510-indexus/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/14554870ef92b24510-indexus/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/14554870ef92b24510-indexus/css/reset.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/14554870ef92b24510-indexus/css/main.css">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        
        <script type="text/javascript" src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        <script type="text/javascript">
 
              $(document).ready(function(){ 
                 $("#R1").click(function () {
                    $(".label_radio1").click(function(){
            			$(".label_radio1").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('fieldset.radios label#R11').attr('class','label_radio r_on');         
                       });
                       });
                       
                        $("#R2").click(function () {
                        $(".label_radio1").click(function(){
            			$(".label_radio1").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('fieldset.radios label#R12').attr('class','label_radio r_on');         
                       });
                       });
              $("#R3").click(function () {
                   $(".label_radio1").click(function(){
            			$(".label_radio1").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('fieldset.radios label#R13').attr('class','label_radio r_on');         
                       });
                    
                });
                
                 $("#R4").click(function () {
                  $(".label_radio1").click(function(){
            			$(".label_radio1").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('fieldset.radios label#R14').attr('class','label_radio r_on');         
                       });
                 
                });
                 $("#R5").click(function () {
                    $(".label_radio1").click(function(){
            			$(".label_radio1").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('fieldset.radios label#R15').attr('class','label_radio r_on');         
                       });
                });  
                   
               
                 $("#R11").click(function () {
                    $(".label_radio").click(function(){
            			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('div.investor label#R1').attr('class','label_radio1 r_on');         
                        
                       });
                    
                });
              $("#R12").click(function () {
                    $(".label_radio").click(function(){
            			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('div.investor label#R2').attr('class','label_radio1 r_on');         
                       });
                    
                });
                 $("#R13").click(function () {
                    $(".label_radio").click(function(){
            			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('div.investor label#R3').attr('class','label_radio1 r_on');         
                       });
                });
                 $("#R14").click(function () {
                   $(".label_radio").click(function(){
            			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('div.investor label#R4').attr('class','label_radio1 r_on');         
                       });
                    
                });
                 $("#R15").click(function () {
                    $(".label_radio").click(function(){
            			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('div.investor label#R5').attr('class','label_radio1 r_on');         
                       });
                });
                $("input[type=radio]").click(function () {
                       var val1 = $(this).next().text();
                       //alert(val1);
                       $('input[name=hiddeninputname]').val(val1); 
                    });
                
             });
             
             function check()
                         {
                            var val = '';
                            val = $('input[checked=checked]').val(); 
                            var qs = $("#question").text();
                            //var value = $('label[class=r_on] > input[checked=checked]').text();
                            var value = $('#val').val(); 
                                //alert(val) ;          
                            if(val) {
                                //alert("work now");
                                 $.ajax({
                        type:"POST",
                        data:{param :'first',val:val,qs:qs,value:value},
                        url:"database.php",
                        success:function(data){
                            
                            alert(data);
                            
                            
                           if(data == 1)
                            {
                            window.location.href = "indexus2.php";
                            }
                            //alert(data);
                        }
                    });  
                            }
                            else
                            {
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
        
        
        
        <section class="main_step2">
            <div class="container">
               
                        <header>
                           <div class="SFPTWO_IMAGEEDIT img_section"><a style="cursor: pointer;" title="Indexus" class="logo"><img src="//test.scampaigns.com/user_template/14554870ef92b24510-indexus/img/logo.png" alt="" /></a></div>
                            <p class="info SFPTWO_TAGEDIT explicit_edit">Bel: 020 - 697 20 66<br />Mail: <a href="mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        </header>
                        <div class="main_content">
                        	<div class="investor">
                                <label id="R1" class="label_radio1"><input type="radio" name="investorR" value="1" id="R1"/> <span>Pensioen</span></label>
                                <label id="R2" class="label_radio1"><input type="radio" name="investorR" value="2" id="R2"/> <span>Groei van vermogen</span></label>
                                <label id="R3" class="label_radio1"><input type="radio" name="investorR" value="3" id="R3"/> <span>Behoud van vermogen</span></label>
                                <label id="R4" class="label_radio1"><input type="radio" name="investorR" value="4" id="R4"/> <span>Aflossing van hypotheek</span></label>
                                <label id="R5" class="label_radio1"><input type="radio" name="investorR" value="5" id="R5"/> <span>Aanvulling voor inkomen</span></label>
                            </div>
                           <div class="SFPTWO_TEXTEDIT heading1"><h2 class="heading SFPTWO_TAGEDIT explicit_edit">Met welk doel <span>belegt u?</span></h2></div>
                           
                            <div class="SFPTWO_IMAGEEDIT img_section"><img src="//test.scampaigns.com/user_template/14554870ef92b24510-indexus/img/icon4.png" alt="" /></div>
                            <fieldset class="radios">
                                <label id="R11" class="label_radio"><input type="radio" name="investorR1" value="1" id="R11"/> Pensioen</label>
                                <label id="R12" class="label_radio"><input type="radio" name="investorR1" value="2" id="R12"/> Groei van vermogen</label>
                                <label id="R13" class="label_radio"><input type="radio" name="investorR1" value="3" id="R13"/> Behoud van vermogen</label>
                                <label id="R14" class="label_radio"><input type="radio" name="investorR1" value="4" id="R14"/> Aflossing van hypotheek</label>
                               <label id="R15" class="label_radio"><input type="radio" name="investorR1" value="5" id="R15"/> Aanvulling voor inkomen</label>
                                <input id="val" type="hidden" name="hiddeninputname" value="" />
                            </fieldset>
                            <a class="button_btn SFPTWO_TAGEDIT explicit_edit" style="cursor: pointer;" onclick="check()">Volgende stap <img src="//test.scampaigns.com/user_template/14554870ef92b24510-indexus/img/icon3.png" alt="" /></a>
                        </div>
                    </div>
		</section>
        <footer class="inside_footer">
            <div class="container">
                
                    	<ul>
                        	<li><a class="active">1</a></li>
                        	<li><a>2</a></li>
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
        <script type="text/javascript" src="//test.scampaigns.com/user_template/14554870ef92b24510-indexus/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/14554870ef92b24510-indexus/js/plugins.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/14554870ef92b24510-indexus/js/main.js"></script>

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
