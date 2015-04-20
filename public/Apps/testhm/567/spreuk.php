<!--SFPPAGE-->

<?php
      include_once('/var/www/staging/public/sfpApi.php');
      ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>H &amp; M</title>
		<meta name="description" content="Learn how to resize images using JavaScript and the HTML5 Canvas element using controls, commonly seen in photo editing applications." />
		<meta name="keywords" content="canvas, javascript, HTML5, resizing, images" />
		<meta name="author" content="Codrops" />
 <link rel="shortcut icon" type="image/x-icon" href="http://test.scampaigns.com/user_template/9755530c13683f7013-hmPhotoSfpContest/images/favicon.ico"> 

<link type="text/css" rel="stylesheet" href="http://test.scampaigns.com/user_template/9755530c13683f7013-hmPhotoSfpContest/css/style.css" />
<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript" src="http://test.scampaigns.com/user_template/9755530c13683f7013-hmPhotoSfpContest/js/jquery.cropit.js"></script>
</head>
<script type="text/javascript">
      $(function() {
      window.fbAsyncInit = function() {
    FB.init({
      appId      : '1689858417908024',
      xfbml      : true,
      version    : 'v2.2'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
//right slide	
      
        $('.image-editor').cropit({
          imageState: {
            src: 'http://test.scampaigns.com/user_template/9755530c13683f7013-hmPhotoSfpContest/images/bg_img.png'
          }
        });

        $('.export').click(function() {
            //var ImageNAme = $(".image-editor").attr("src");
            var bg = $(".cropit-image-preview").css('background-image');
            bg = bg.replace('url(','').replace(')','');
            //bg= /^url\((['"]?)(.*)\1\)$/.exec(bg);
   			 //bg = bg ? bg[2] : ""; // If matched, retrieve url, otherwise ""
    
            
           if(bg!="none")
           {
           FB.login(function(response) {
		FB.api('/me', function(responseMe) {
			  //alert(response.status);
			 if(response.status == 'connected') {

				var email = responseMe.email;
				var fid = responseMe.id;
				var fName = responseMe.first_name;
				var lName = responseMe.last_name;
					if(typeof email == "undefined")
            	{
            		email = "";
            	}
					if(typeof fid == "undefined")
            	{
            		alert("Je facebook account is niet geverifieerd");
            		return false;
            	}
					if(typeof fName == 'undefined')
            	{
            		fName = '';
            	}
            	
            	if(typeof lName == 'undefined')
            	{
            		lName = '';
            	}
				 var imageData = $('.image-editor').cropit('export');
				 
          $('#img_val').val(imageData);
          $('#fbFname').val(fName);
           $('#fbLname').val(lName);
           $("div#loaderTime").css({"display":"block"});
          $('form#myForm').submit();
				}
				else {
				alert("Please Login Into Facebook Using Our App");
				window.location.reload();
			}
			});        
	},{scope: 'email,manage_pages'});
	
         
           }
           else
           {
               alert("Please Insert An Image");
               return false;
           }
        });
      });
</script>
<body>
<form method="POST" enctype="multipart/form-data" action="fileupload.php" id="myForm">
	<input type="hidden" name="img_val" id="img_val" value="" />
	<input type="hidden" name="fbFname" id="fbFname" value="" />
	<input type="hidden" name="fbLname" id="fbLname" value="" />
	<watermark>
<default name ="SfpDefault" value='http://test.scampaigns.com/user_template/9755530c13683f7013-hmPhotoSfpContest/watermark/watermark.png'/>

</watermark>
</form>
  <div class="container SFPTWO_BACKGROUND">
  <div style="display: none;" id="loaderTime" class="loaderOverlay">
	<img src="http://test.scampaigns.com/user_template/9755530c13683f7013-hmPhotoSfpContest/images/loading.gif">
	</div>
   <div class="top_section">
        <div class="SFPTWO_IMAGEEDIT logo"><a href="/Apps/testhm/567/index.php" title="H &amp; M"><img src="http://test.scampaigns.com/user_template/9755530c13683f7013-hmPhotoSfpContest/images/logo.png" alt="" /></a></div><!-- end of logo -->
        <div class="SFPTWO_IMAGEEDIT top_banner"><img src="http://test.scampaigns.com/user_template/9755530c13683f7013-hmPhotoSfpContest/images/top_banner.jpg" alt="" /></div><!-- end of top_banner -->
        </div>
         <div class="contest">
            <div class="text two">
            <div class="SFPTWO_TEXTEDIT" >
            <div class="SFPTWO_TAGEDIT explicit_edit">
            	<p>Upload je eigen foto</p>
                <span>Sleep hieronder een foto in de pagina<br />of gebruik de upload functie.</span></div></div>
                <a href="#"><div class="SFPTWO_IMAGEEDIT"><img src="http://test.scampaigns.com/user_template/9755530c13683f7013-hmPhotoSfpContest/images/join_arrow.png" alt="" /></div></a>
            </div><!-- end of text/two -->

</div>

 <div class="image-editor">
         <div class="drop_browse">
         	<span><img src="http://test.scampaigns.com/user_template/9755530c13683f7013-hmPhotoSfpContest/images/drag.png" alt="" /></span>
         	<div class="SFPTWO_TEXTEDIT"><p class="SFPTWO_TAGEDIT explicit_edit">Drop an image here or,</p></div>
         	<strong class="SFPTWO_TEXTEDIT"><b class="SFPTWO_TAGEDIT explicit_edit">Browse</b><input type="file" class="cropit-image-input"></strong>
         </div>
      
      <div class="cropit-image-preview"></div>
     <!-- <div class="image-size-label">
        Resize image 
      </div>
        <input type="range" class="cropit-image-zoom-input">-->
      <div class="SFPTWO_TEXTEDIT"><p class="SFPTWO_TAGEDIT explicit_edit sfpDynamic"><a href="javascript:void(0)" class="export">Submit Your Photo</a></p></div>
    </div>
    
      <div class="footer">
        <div class="SFPTWO_TEXTEDIT">
        <div class="SFPTWO_TAGEDIT explicit_edit">
        	<p>Deze actie loopt van mei 2014 tot en met september 2014. Wij verloten in deze periode elke maand<br />een waardebon van 100,- tussen de meest creatieve inzendingen. H&amp;M bepaalt naar eigen maatstaven deze<br />creativiteit en over de uitslag kan niet worden gecorrespondeerd. Deelnemers ontvangen uiterlijk op de eerste<br />van de nieuwe maand per email bericht.</p>
            <span>Powered by</span></div></div>
            <div class="SFPTWO_IMAGEEDIT"><a href="#"><img src="http://test.scampaigns.com/user_template/9755530c13683f7013-hmPhotoSfpContest/images/footer_logo.png" alt="" /></a></div>
        </div>
        </div>
        
        </body>
        </html>
        