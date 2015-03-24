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
        <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></SFPScript-->
        
        <!--SFPScript type="text/javascript" src="js/vendor/modernizr-2.6.2.min.js"></SFPScript-->
        
        <!--SFPScript type="text/javascript">
 
              $(document).ready(function(){ 
                 $("#R1").click(function () {
                    $(".label_radio1").click(function(){
                        $(".label_radio").removeClass('r_on');
            			$(".label_radio1").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('fieldset.radios label#R11').attr('class','label_radio r_on');   
                        $('.radios #r1').attr("checked", true);  
                       });
                       });
                       
                        $("#R2").click(function () {
                        $(".label_radio1").click(function(){
                        $(".label_radio").removeClass('r_on');
            			$(".label_radio1").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('fieldset.radios label#R12').attr('class','label_radio r_on');    
                        $('.radios #r2').attr("checked", true); 
                       });
                       });
              $("#R3").click(function () {
                   $(".label_radio1").click(function(){
                    $(".label_radio").removeClass('r_on');
            			$(".label_radio1").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('fieldset.radios label#R13').attr('class','label_radio r_on');         
                       });
                $('.radios #r3').attr("checked", true);
                    
                });
                
                 $("#R4").click(function () {
                  $(".label_radio1").click(function(){
                    $(".label_radio").removeClass('r_on');
            			$(".label_radio1").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('fieldset.radios label#R14').attr('class','label_radio r_on');         
                       });
                 $('.radios #r4').attr("checked", true);
                });
                 $("#R5").click(function () {
                    $(".label_radio1").click(function(){
                        $(".label_radio").removeClass('r_on');
            			$(".label_radio1").removeClass("r_on").children("input[type='radio']").attr("checked", false);
            			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
                        $('fieldset.radios label#R15').attr('class','label_radio r_on');         
                       });
               $('.radios #r5').attr("checked", true);
                });  
                   
               
                 $("#R11").click(function () {
                    $(".label_radio").click(function(){
                        $(".label_radio1").removeClass('r_on1');
                        $(".label_radio").removeClass('r_on');
                        $(this).addClass("r_on");
            		    $('div.investor label#R1').attr('class','label_radio1 r_on1');         
                       });
                    $('.radios #r1').attr("checked", true);
                });
              $("#R12").click(function () {
                    $(".label_radio").click(function(){
                        $(".label_radio1").removeClass('r_on1');
                        $(".label_radio").removeClass('r_on');
                        $(this).addClass("r_on");
            		    $('div.investor label#R2').attr('class','label_radio1 r_on1');         
                       });
                  $('.radios #r2').attr("checked", true);  
                });
                 $("#R13").click(function () {
                    $(".label_radio").click(function(){
                        $(".label_radio1").removeClass('r_on1');
                        $(".label_radio").removeClass('r_on');
            			$(this).addClass("r_on");	      
                        $('div.investor label#R3').attr('class','label_radio1 r_on1');         
                       });
               $('.radios #r3').attr("checked", true);
                });
                 $("#R14").click(function () {
                   $(".label_radio").click(function(){
                    $(".label_radio1").removeClass('r_on1');
            			$(".label_radio").removeClass('r_on');
                        $(this).addClass("r_on");	      
                        $('div.investor label#R4').attr('class','label_radio1 r_on1');         
                       });
                    $('.radios #r4').attr("checked", true);
                });
                 $("#R15").click(function () {
                    $(".label_radio").click(function(){
                        $(".label_radio1").removeClass('r_on1');
                        $(".label_radio").removeClass('r_on');
            			$(this).addClass("r_on");	      
                        $('div.investor label#R5').attr('class','label_radio1 r_on1');         
                       });
               $('.radios #r5').attr("checked", true);
                });
                $("input[type=radio]").click(function () {
                       var val1 = $(this).next().text();
                       //alert(val1);
                       $('input[name=hiddeninputname]').val(val1); 
                    });
                
             });
             
    function check()
    {    
        var radioButtons = $(".radios input:radio[name='investorR1']");
        var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));
        
        //alert(val) ;          
        if(selectedIndex != -1) {
        
            var hold = parseInt(selectedIndex) + 1;
            var value = $("#v"+hold).val();
            document.cookie="answer="+value;
            window.location.href='indexus6.php';
            return false;
        }
        else
        {
            alert("Please Select a radio button!!");
        }
        
    }
             
             </SFPScript-->
    
    
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        
        
        <div class="main_wrap">
        
        
        
        <section class="main_step2">
            <div class="container">
               
                        <header>
                           <div class="SFPTWO_IMAGEEDIT img_section tagsimg_1"><a style="cursor: pointer;" title="Indexus" class="logo disabled"><img src="//test.scampaigns.com/user_template/75854991054221fc15-indexus/img/logo.png" alt=""></a><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="75854991054221fc15-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="75854991054221fc15-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                            <p class="info SFPTWO_TAGEDIT tag_1 explicit_edit" contenteditable="false">Bel: 020 - 697 20 66<br>Mail: <a class="disabled" href="mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></header>
                        <div class="main_content">
                        	<div class="investor">
                                <label id="R1" class="label_radio1"><input id="r1" name="investorR" value="1" type="radio"> <span id="es1"> Pensioen </span></label>
                                <label id="R2" class="label_radio1"><input id="r2" name="investorR" value="2" type="radio"> <span id="es2">Groei van vermogen </span></label>
                                <label id="R3" class="label_radio1"><input id="r3" name="investorR" value="3" type="radio"> <span id="es3">Behoud van vermogen </span></label>
                                <label id="R4" class="label_radio1"><input id="r4" name="investorR" value="4" type="radio"> <span id="es4">Aflossing van hypotheek</span></label>
                                <label id="R5" class="label_radio1"><input id="r5" name="investorR" value="5" type="radio"> <span id="es5">Aanvulling voor inkomencgg</span></label>
                            </div>
                           <div class="SFPTWO_TEXTEDIT heading1 tags_1"><h2 class="heading SFPTWO_TAGEDIT tag_2 explicit_edit" contenteditable="false">Met welk doel <span>belegt u?</span></h2><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                           
                            <div class="SFPTWO_IMAGEEDIT img_section tagsimg_2"><img src="//test.scampaigns.com/user_template/75854991054221fc15-indexus/img/icon4.png" alt=""><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="75854991054221fc15-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="75854991054221fc15-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                            <fieldset class="radios">
                                <label id="R11" class="label_radio"><input id="r1" name="investorR1" value="1" type="radio"> <span id="s1"> Pensioen </span></label>
                                <label id="R12" class="label_radio"><input id="r2" name="investorR1" value="2" type="radio"> <span id="s2">Groei van vermogen </span></label>
                                <label id="R13" class="label_radio"><input id="r3" name="investorR1" value="3" type="radio"> <span id="s3">Behoud van vermogen </span></label>
                                <label id="R14" class="label_radio"><input id="r4" name="investorR1" value="4" type="radio"> <span id="s4">Aflossing van hypotheek</span></label>
                               <label id="R15" class="label_radio"><input id="r5" name="investorR1" value="5" type="radio"> <span id="s5">Aanvulling voor inkomencgg</span></label>
                                <input id="val" name="hiddeninputname" value="" type="hidden">
                            </fieldset>
                            <a class="button_btn SFPTWO_TAGEDIT tag_3 explicit_edit disabled" style="cursor: pointer;" onclick="check()" contenteditable="false">Volgende stap <img src="//test.scampaigns.com/user_template/75854991054221fc15-indexus/img/icon3.png" alt=""></a>
                        <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                        <div>
                        <input id="v1" value="1" type="hidden">
                        <input id="v2" value="2" type="hidden">
                        <input id="v3" value="3" type="hidden">
                        <input id="v4" value="4" type="hidden">
                        <input id="v5" value="5gg" type="hidden">
                        </div>
                        
                    </div>
		</section>
        <footer class="inside_footer">
            <div class="container">
                
                    	<ul>
                        	<li><a class="active disabled">1</a></li>
                        	<li><a class="disabled">2</a></li>
                        	<li><a class="disabled">3</a></li>
                        	<li><a class="disabled">4</a></li>
                        	<li><a class="disabled">5</a></li>
                        </ul>
                    	<a href="http://www.indexus.nl/" target="_blank" class="web_link disabled">www.indexus.nl</a>
                        <p class="SFPTWO_TAGEDIT tag_4 explicit_edit" contenteditable="false">De Indexus belleggers check is een gratis mobiele app. Indexus is gespecialiseerd in vermogensbeheer en beleggingsadvies.</p>
            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
		</footer>
        
        
        
        
        
        </div><!-- end of main_wrap -->
        

        <!--SFPScript type="text/javascript">window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/75854991054221fc15-indexus/js/bootstrap.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/75854991054221fc15-indexus/js/plugins.js"></SFPScript-->
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->