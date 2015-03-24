<!--SFPPAGE-->



<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page One</title>
        <link rel="shortcut icon" type="SFPURLLINK/image/x-icon" href="img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="SFPURLLINK/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="SFPURLLINK/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="SFPURLLINK/css/reset.css">
        <link type="text/css" rel="stylesheet" href="SFPURLLINK/css/main.css">
        <!--SFPScript type="text/javascript" src="SFPURLLINK/js/vendor/modernizr-2.6.2.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript">
 
  $(document).ready(function(){ 
     $("#R1").click(function () {
        $(".label_radio").click(function(){
			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
            $('fieldset.radios label#R11').attr('class','label_radio r_on');         
           });
           });
           
            $("#R2").click(function () {
            $(".label_radio").click(function(){
			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
            $('fieldset.radios label#R12').attr('class','label_radio r_on');         
           });
           });
  $("#R3").click(function () {
       $(".label_radio").click(function(){
			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
            $('fieldset.radios label#R13').attr('class','label_radio r_on');         
           });
        
    });
    
     $("#R4").click(function () {
      $(".label_radio").click(function(){
			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
            $('fieldset.radios label#R14').attr('class','label_radio r_on');         
           });
     
    });
     $("#R5").click(function () {
        $(".label_radio").click(function(){
			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
            $('fieldset.radios label#R15').attr('class','label_radio r_on');         
           });
    });  
       
   
     $("#R11").click(function () {
        $(".label_radio").click(function(){
			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
            $('div.investor label#R1').attr('class','label_radio r_on');         
            
           });
        
    });
  $("#R12").click(function () {
        $(".label_radio").click(function(){
			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
            $('div.investor label#R2').attr('class','label_radio r_on');         
           });
        
    });
     $("#R13").click(function () {
        $(".label_radio").click(function(){
			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
            $('div.investor label#R3').attr('class','label_radio r_on');         
           });
    });
     $("#R14").click(function () {
       $(".label_radio").click(function(){
			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
            $('div.investor label#R4').attr('class','label_radio r_on');         
           });
        
    });
     $("#R15").click(function () {
        $(".label_radio").click(function(){
			$(".label_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);	      
            $('div.investor label#R5').attr('class','label_radio r_on');         
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
                if(val == 1) {
                    //alert("work now");
                     $.ajax({
            type:"POST",
            data:{val:val,qs:qs,value:value},
            url:"database.php",
            success:function(data){    
               if(data == 1)
                {
                window.location.href = "indexus7.php";
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
 
 </SFPScript-->

    
     
        <div class="main_wrap">       
        <section class="main_step2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <header>
                            <a style="cursor: pointer;" title="Indexus" class="logo disabled"><div class="SFPTWO_IMAGEEDIT tagsimg_1"><img src="SFPURLLINK/img/logo.png" alt=""><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="6575486ff530e7eb5-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div></a>
                            <p class="info">Bel: 020 - 697 20 66<br>Mail: <a class="disabled" href="mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        </header>
                        <div class="main_content">
                        	<div class="investor">
                                <label id="R1" class="label_radio"><input name="investorR" id="R1" value="1" type="radio"> <div class="SFPTWO_TEXTEDIT tags_1"><span class="SFPTWO_TAGEDIT explicit_edit tag_1" contenteditable="false">Pensioen</span><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></label>
                                <label id="R2" class="label_radio"><input name="investorR" id="R2" value="1" type="radio"> <div class="SFPTWO_TEXTEDIT tags_2"><span class="SFPTWO_TAGEDIT explicit_edit tag_2" contenteditable="false">Groei van vermogen</span><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></label>
                                <label id="R3" class="label_radio"><input name="investorR" id="R3" value="1" type="radio"> <div class="SFPTWO_TEXTEDIT tags_3"><span class="SFPTWO_TAGEDIT explicit_edit tag_3" contenteditable="false">Behoud van vermogen</span><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></label>
                                <label id="R4" class="label_radio"><input name="investorR" id="R4" value="1" type="radio"> <div class="SFPTWO_TEXTEDIT tags_4"><span class="SFPTWO_TAGEDIT explicit_edit tag_4" contenteditable="false">Aflossing van hypotheek</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></label>
                                <label id="R5" class="label_radio"><input name="investorR" id="R5" value="1" type="radio"> <div class="SFPTWO_TEXTEDIT tags_5"><span class="SFPTWO_TAGEDIT explicit_edit tag_5" contenteditable="false">Aanvulling voor inkomen</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></label>
                            </div>
                            <div class="SFPTWO_TEXTEDIT tags_6"><h2 class="heading" id="question">Met welk doel<br> <span>belegt u?</span></h2></div>
                            <a class="button_btn disabled" style="cursor: pointer;" title="Volgende stap" onclick="check()">Volgende stap</a>
                            <div class="SFPTWO_IMAGEEDIT tagsimg_2"><img src="SFPURLLINK/img/icon4.png" alt="" class="img-responsive"><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="6575486ff530e7eb5-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                            <fieldset class="radios">
                                <label id="R11" class="label_radio"><input name="investorR1" id="R11" value="1" type="radio"> <div class="SFPTWO_TEXTEDIT tags_7"><span class="SFPTWO_TAGEDIT explicit_edit tag_6" contenteditable="false">Pensioen</span><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></label>
                                <label id="R12" class="label_radio"><input name="investorR1" id="R12" value="1" type="radio"> <div class="SFPTWO_TEXTEDIT tags_8"><span class="SFPTWO_TAGEDIT explicit_edit tag_7" contenteditable="false">Groei van vermogen</span><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></label>
                                <label id="R13" class="label_radio"><input name="investorR1" id="R13" value="1" type="radio"><div class="SFPTWO_TEXTEDIT tags_9"><span class="SFPTWO_TAGEDIT explicit_edit tag_8" contenteditable="false">Behoud van vermogen</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></label>
                                <label id="R14" class="label_radio"><input name="investorR1" id="R14" value="1" type="radio"> <div class="SFPTWO_TEXTEDIT tags_10"><span class="SFPTWO_TAGEDIT explicit_edit tag_9" contenteditable="false">Aflossing van hypotheek</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></label>
                                <label id="R15" class="label_radio"><input name="investorR1" id="R15" value="1" type="radio"> <div class="SFPTWO_TEXTEDIT tags_11"><span class="SFPTWO_TAGEDIT explicit_edit tag_10" contenteditable="false">Aanvulling voor inkomen</span><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div></label>
                                <input id="val" name="hiddeninputname" value="" type="hidden">
                            </fieldset>
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
                        	<li><a class="active disabled">1</a></li>
                        	<li><a class="disabled">2</a></li>
                        	<li><a class="disabled">3</a></li>
                        	<li><a class="disabled">4</a></li>
                        	<li><a class="disabled">5</a></li>
                            <li><a class="disabled">6</a></li>
                        </ul>
                    	<a href="http://www.indexus.nl/" target="_blank" class="web_link disabled">www.indexus.nl</a>
                        <p>De Indexus belleggers check is een gratis mobiele app. Indexus is gespecialiseerd in vermogensbeheer en beleggingsadvies.</p>
                    </div>
                </div>
            </div>
		</footer>
        
        </div><!-- end of main_wrap -->
        
        <!--SFPScript type="text/javascript">window.jQuery || document.write('<script src="SFPURLLINK/js/vendor/jquery-1.10.2.min.js"><\/script>')</SFPScript-->
        <!--SFPScript type="text/javascript" src="SFPURLLINK/js/bootstrap.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="SFPURLLINK/js/plugins.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="SFPURLLINK/js/main.js"></SFPScript-->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->