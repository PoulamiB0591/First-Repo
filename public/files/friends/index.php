<!--SFPPAGE-->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title> 
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--SFPhide <link rel="shortcut icon" type="image/x-icon" href="SFPURLLINK/img/favicon.png"> SFPhide-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'/>
        
       
        <link rel="stylesheet" href="SFPURLLINK/css/style.css">
        
        <!--SFPScript src="SFPURLLINK/js/vendor/modernizr-2.6.2.min.js"></SFPScript-->
        <!--SFPScript src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></SFPScript-->
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



      <div class="layout-shower-col clearfix">
     
      <div class="friends-sample-templates-wrapper">
                   <div class="action-coundwon-col">
                   <div class="tool-tip SFPTWO_TEXTEDIT">
                   <h2 contenteditable="true" class="textedit SFPTWO_TAGEDIT edit explicit_edit">DE ACTIE  VERLOOPT OVER: </h2>
                   </div>
                   <div class="SFPTWO_TIMER">
                  <!--<div id="clock">
<p> <span id="weeks"></span> Weeks </p>
<div class="space">:</div>
<p> <span id="days"></span> dagen </p>

<p> <span id="hours"></span> uur </p>

<p> <span id="minutes"></span> minuten </p>

<p> <span id="seconds"></span> sec. </p>
</div>-->

                                <div id="countdown">
                                
                     <div class="first-count">          
                	<p class="days">00</p>
                	<p class="timeRefDays">dagen</p>
                    </div> 
                    
                    <div class="first-count"> 
                	<p class="hours">00</p>
                	<p class="timeRefHours">uur </p>
                    </div>
                    
                    <div class="first-count">
                	<p class="minutes">00</p>
                	<p class="timeRefMinutes">minuten</p>
                    
                    </div>
                    
                    <div class="first-count">
                	<p class="seconds">00</p>
                	<p class="timeRefSeconds">sec</p>
                    
                    </div>
                                </div>
                            
                   </div>
                   </div>
                   <div class="sample-image-loader">
                   <div class="SFPTWO_IMAGEEDIT image-with-text-wrap">
                   <img src="SFPURLLINK/img/top-image.jpg" alt="" style="width: 100%; margin:0 0 8px 0;">
                   <div id="dragfirst" class="SFPTWO_TEXTEDIT getdragit" style="position:absolute;z-index:999;width: auto;height:auto;top:0;"><div><a class="imgedivdrg"></a><a class="closethisdrag deleteme"></a></div><div id="nowdrag" class="explicit_edit nowdrag SFPTWO_TAGEDIT" contenteditable="true"><h2>Maak nieuwe koptekst. Deze kun je<br />wijzigen, verplaatsen en verslepen</h2></div></div>
                   </div>
                   <!-- <div class="SFPTWO_TEXTEDIT image-with-text-editable" id="dragfirst">
                   
                   <div class="nowdrag SFPTWO_TAGEDIT explicit_edit" id="nowdrag" contenteditable="true">
                   Maak nieuwe koptekst. Deze kun je <br>
					wijzigen, verplaatsen en verslepen
                   </div></div>-->
                 
                  
                   </div>
                   <div class="form-container jui-checkboxes-container" id="checkboxesInit2">

[DEFSFPFORM]-><ACTION->""/>
</div>
                   <!--  <div class="sample-form clearfix">
                   <ul class="clearfix">
                   	<li><label for="email">E-mailadres</label> <input type="text" name="email"></li>
                    <li><label for="email">Telefoonnummer</label> <input type="text" name="Telefoonnummer"></li>
                    	<li><label for="email">Voornatam</label> <input type="text" name="Voornatam"></li>
                        	
                            	<li><label for="email">Woonplaats</label> <input type="text" name="Woonplaats"></li>
                                	<li><label for="email">Achternaam</label> <input type="text" name="Achternaam"></li>
                                    
                   </ul>
                   </div>-->

                   
                   </div>
                   
      </div><!--end of layout shower-->



       
        
         
         
        
         <!--SFPScript src="SFPURLLINK/js/timer.js"></SFPScript-->
         <!--SFPScript>
        function checkCountdown()
         {
            var mainUrl = window.location.origin;
            var appLink = $("#appLinkInpput").val();
            //alert(appLink);
            
            
            var days = $(".days").text();
            var hours = $(".hours").text();
            var minutes = $(".minutes").text();
            var seconds = $(".seconds").text();
            if((days == 00) && (hours == 00) && (minutes == 00) && (seconds == 00))
            {
                alert("Sorry, deze actie is voorbij. Het is helaas niet meer mogelijk om je gegevens achter te laten.");
            }
            else
            {
                var appLink = $("#appLinkInpput").val();
                var allLinksOFTheApp = location.pathname + location.search;
                var formdata = "";
                var checkItem = 0;
                var checkConditionForFriends = $(".agreement").css("display");
                
                
                $.ajax({
                       type: "POST",
                       url: mainUrl+"/selectLanguage.php?marker="+appLink,
                       success: function(msg){
                            var identifier = msg.split('@@');
                     
                
                
                if(checkConditionForFriends == 'block'){
                    if(!$('#termscond').is(":checked")) {
                        checkItem = 1;
                        alert(identifier[0].trim());
                        return false ;
                    }
                }
                $("input[type=text]").each(function(){
                    if($(this).attr('name') == "E-mailadres")
                    {
                         var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if(!filter.test($(this).val())){
                            alert(identifier[2].trim());
                            checkItem = 1;
                            return false;
                        }
                        
                    }
                        
                    else if($(this).val() == "")
                    {
                        alert(identifier[1].trim());
                        checkItem = 1;
                        return false;
                        
                    }
                    formdata = formdata + $(this).attr('name') + '=' + $(this).val() + "&";
                    
                });
                
                
                                     
                   
                formdata = formdata + "appLink="+appLink;
                formdata = formdata + "&checkapplink="+allLinksOFTheApp;
                if(checkItem == 0){
                    $.ajax({
                       type: "POST",
                       url: "../../../mailAjaxSend.php?"+formdata,
                       success: function(msg){
                        var hold = msg.split('||||');
                        if(hold[0].trim() != "")
                            {alert(hold[0]);}
                            else
                                {alert("Bedankt! De winnaar wordt via onze Facebook pagina bekend gemaakt");}
                         window.location.href = hold[1];
                        
                       }
                    });
                }
                
            }
                    });
            
                
                
                
            }
        } 
        
                     
         </SFPScript-->
        
        



<input type="hidden" id="appLinkInpput" value="<?php echo $pdfDestination;?>" />
    </body>
</html>
