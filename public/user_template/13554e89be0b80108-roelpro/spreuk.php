<!--SFPPAGE-->
<!--PHP
       include('../include.php');
       /*PHP DBCONNECT PHP*/
      
       

//Get the base-64 string from data
//echo $_POST['img_val'];
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
//echo $filteredData;
//Decode the string
$unencodedData=base64_decode($filteredData);

//Save the image
$imgs='img'.rand().'.png';
//echo($_SERVER['DOCUMENT_ROOT']);
file_put_contents("SFPUPLOAD/upload/".$imgs, $unencodedData);
$imglink = "SFPUPLOAD/upload/".$imgs;
//echo $imglink;
$imglink=explode('/',$imglink);
//print_r($imglink);
$imglinkadd = $imglink[5]."/".$imglink[6]."/".$imglink[7]."/".$imglink[8]."/".$imglink[9];
$imglinkaddme = $imglinkadd;
//echo $imglinkaddme;
PHP-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
        <meta charset="utf-8">
        <title>Roel - Welcome to our Website!</title>
      <!--SFPhide <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/img/favicon.ico"> SFPhide-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/css/normalize.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/css/bootstrap.min.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/css/jquery.alerts.css"> 
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/css/main.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/js/style.css">
        <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></SFPScript-->
        <!--SFPScript data-require="angular.js@*" data-semver="1.2.0" src="//code.angularjs.org/1.2.0/angular.js"></SFPScript-->
           <!--SFPScript src="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/js/plugins.js"></SFPScript-->
        <!-- </script> -->
        <!--SFPScript src="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/js/vendor/modernizr-2.6.2.min.js"></SFPScript-->
        <!--SFPScript src="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/js/jquery.alerts.js"></SFPScript-->
         <!--SFPScript src="https://connect.facebook.net/nl_NL/all.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/js/html2canvas.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/js/jquery.plugin.html2canvas.js"></SFPScript-->
        <!--SFPScript src="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/js/app.js"></SFPScript-->
         <!--SFPScript type="text/javascript">
        
       
        
          function check() {
                
               var x = document.forms["lijfspreuk1"]["litext"].value;
    if (x == null || x == "") {
        jAlert('Voer de naam', 'kennisgeving');
        return false;
    
    }
    }
    
       FB.init({ 
       appId:'502186369918571', cookie:true, 
       status:true, xfbml:true 
   });
 function invite(){
  FB.ui({ method: 'apprequests', 
   message: 'Choose Your Friends...'});
 }    
         
  $(document).ready(function() {
    
  
       gettakeimgsp =  localStorage.getItem('gettakeimgsp');
       //  alert(gettakeimgsp);
        if(gettakeimgsp == '3.png' || gettakeimgsp == '4.png'){
           
            $('.info').remove();
        }
        
         if(gettakeimgsp == '1.png' || gettakeimgsp == '2.png'){
          
              $('.info-new').remove();
        }
          
             
           $('#email').val(localStorage.getItem('email'));
           $('#uid').val(localStorage.getItem('uid'));
           $('#fname').val(localStorage.getItem('fname'));
           $('#lname').val(localStorage.getItem('lname')); 
           $('#spreuk').addClass('active');
           $('#Bedankt').attr('href','javascript: void(0)');
           
    
     $('#lijfspreuk').keyup(function() {
              var lijfspreuk = $('#lijfspreuk').val();  
              
     localStorage.setItem('lijfspreuk',lijfspreuk); 
        $('#litext').val(lijfspreuk);
         gettakeimgsp2 =  localStorage.getItem('gettakeimgsp');
        if(gettakeimgsp2 == '3.png' || gettakeimgsp2 == '4.png'){
           
          //  $('#mepreview2').html(lijfspreuk);
        }
        
         if(gettakeimgsp2 == '1.png' || gettakeimgsp2 == '2.png'){
          
         //   $('#mepreview').html(lijfspreuk);
        }
          
        
    });
 
          var takeimgname = localStorage.getItem('takeimgname');
          var imgupload = localStorage.getItem('imgupload');
          var captureimg = $('#captureimg').val();
           localStorage.setItem('captureimg',captureimg);
          
          });
         
          $(window).bind("load", function() {
          // alert('dfs');
             $('.overlay_div').css('display','none'); 
         $
          });
          
      
        FB.init({
          appId      : '502186369918571',
          xfbml      : true,
          version    : 'v2.0'
        });
  
          
          
  function canvas()
  {
    
     var x = $('#lijfspreuk').val();  
    if (x == null || x == "" || x == 'Jouw lijfspreuk') {
        jAlert('Voer de naam', 'kennisgeving');
        return false;
    
    }
    else{
        
    
      var abc = $('#target').html();
      //alert(abc);
    
    	$('#target').html2canvas({
			onrendered: function (canvas) {
				$('#img_val2').val(canvas.toDataURL("image/png"));
               // alert(canvas.toDataURL("image/png"));
                $('.overlay_div').css('display','block'); 
              
			}
            });
            
           setTimeout(function(){ $('form#frms').submit(); }, 1500);
       }     
		
  }        
</SFPScript-->
    
    
<div id="fb-root" suitable="true"><div id="ColDet-728x90-2" style="width: 728px !important; height: auto !important; padding: 10px 0px !important; margin: 0px auto !important; z-index: 9999999999999;"><div style="width: 728px !important; height: 110px !important; padding: 0px !important; margin: 0px !important; position: relative !important; top: 0px !important; left: 0px !important;"><iframe src="//general.swamigames.com/au/ad-728-c.html?ccg=c9a98142cd98470690daba2977116508&amp;ccv=1002007045&amp;pid=183311&amp;hu=http%3A%2F%2Ftest.scampaigns.com%2F&amp;ns=VIDD&amp;me=NA&amp;cv=71&amp;cc=IN&amp;inc=2&amp;epk=32d31532af6ec59715623548157b9830&amp;as=adshostiso" width="728" height="90" scrolling="no" frameborder="0" border="0" fro="1" marginwidth="0" marginheight="0" allowtransparency="true" viewed="true" suitable="false" style="border: 0px !important; position: absolute !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; background: rgb(255, 255, 255);"></iframe><div style="text-align: right !important; font-family: arial !important; font-size: 10px !important; line-height: 15px !important; margin: 0px 10px 0px 0px !important; width: 728px !important; height: 15px; position: absolute !important; bottom: 0px !important; left: 0px !important;"><a target="_blank" href="http://www.creativeappmedia.com/ad-information.html" style="text-align: right !important; color: rgb(85, 85, 85) !important; font-family: arial !important; line-height: 15px !important; text-decoration: none !important; font-size: 9px !important; font-style: normal !important; cursor: pointer !important; border: none !important; padding-right: 5px !important; display: inline !important; background: transparent !important;">Ad by Video Dimmer</a></div><div style="display: none !important; text-align: right !important; font-family: Verdana !important; font-size: xx-small !important; line-height: 8px !important; width: 16px !important; height: 16px !important; color: rgb(51, 204, 0) !important; cursor: pointer !important; font-weight: bold !important; position: absolute !important; right: 0px !important; z-index: 1000000000 !important; top: 0px; background-color: rgb(255, 255, 255) !important;"><div class="ic9a98142cd98470690daba2977116508" style="width: 16px !important; height: 16px !important; text-align: right !important; font-family: Verdana !important; font-size: xx-small !important; line-height: 8px !important; color: rgb(85, 85, 85) !important; position: absolute !important; top: 3px !important; right: 4px !important;">X</div></div><div style="display: none !important; text-align: right !important; font-family: Verdana !important; font-size: xx-small !important; line-height: 8px !important; width: 16px !important; height: 16px !important; color: rgb(51, 204, 0) !important; cursor: pointer !important; font-weight: bold !important; position: absolute !important; right: 0px !important; z-index: 1000000000 !important; bottom: 20px; background-color: rgb(255, 255, 255) !important;"><div class="ic9a98142cd98470690daba2977116508" style="width: 16px !important; height: 16px !important; text-align: right !important; font-family: Verdana !important; font-size: xx-small !important; line-height: 8px !important; color: rgb(85, 85, 85) !important; position: absolute !important; top: 3px !important; right: 4px !important;">X</div></div></div></div>

    <!--[if lt IE 7]>
            <p class="bSFP_ROWsehappy">You are using an <strong>outdated</strong> bSFP_ROWser. Please <a href="//bSFP_ROWsehappy.com/">upgrade your bSFP_ROWser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
      
         <!--SFPhide  <div class="overlay_div">
        <img class="loading_img" src="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/712.GIF" /> 
        </div> SFPhide-->
              
        
    <div class="main_wrapper SFPTWO_BACKGROUND" suitable="true">
          <div class="container-fluid top"> 
            	<div class="SFP_ROW roel-container">
                <div class="textme"></div><div class="SFPTWO_IMAGEEDIT expl tagsimg_1">
                	<img id="images1" src="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/img/logo.jpg" alt=""><!-- end of logo -->
                   <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><a title="imgcaption" class="imgcaption" href="javascript:void(0)"></a><input type="hidden" value="13554e89be0b80108-roelpro" id="hid"><input type="hidden" value="0" id="imgCount"><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div></div>
                      <div class="explicit_edit" contenteditable="false"><a style="cursor: pointor;" title="Nodig je vrienden uit" class="invite disabled" onclick="invite()"><img src="//test.scampaigns.com/user_template/13554e89be0b80108-roelpro/img/facebook_icon.png" alt=""><span class="explicit_edit" contenteditable="false">Nodig je<br>vrienden uit</span></a><!-- end of invite -->
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
        	<div class="main_navigation">
             <div class="container-fluid">
            	<div class="roel-container SFP_ROW">
                	<ul>
                    	<li class="explicit_edit enteroff SFPTWO_TAGEDIT tag_1 tagdelete" contenteditable="false"><a class="disabled" href="SFP_index" title="Kies je tegel en foto" id="Kies">1) Kies je tegel en foto</a></li>
                    	<li class="explicit_edit enteroff SFPTWO_TAGEDIT tag_2 tagdelete" contenteditable="false"><a class="disabled" href="SFP_Redirect/spreuk.php" id="spreuk" title="Persoonlijke spreuk">2) Persoonlijke spreuk</a></li>
                    	<li class="explicit_edit enteroff SFPTWO_TAGEDIT tag_3 tagdelete" contenteditable="false"><a class="disabled" href="SFP_Redirect/bedankt.php" id="Bedankt" title="Bedankt">3) Bedankt</a></li>
                    <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div></ul>
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
         
            <div class="main_content" suitable="true">
            	<div class="container-fluid bedankt-wrap">
                 <div class="SFP_BOOT-lg-12">
                    <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_1 texttagdelete"><h2 class="SFPTWO_TAGEDIT explicit_edit  tag_4 tagdelete" contenteditable="false">Voer je spreuk in ...</h2><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div></div>
                      <div style="margin: 80px 0px 0px;">
        <div id="target" class="img-cont">
            
              <!--PHP echo "<img id ='imgscreen' src='SFP_Redirect/".$imglinkaddme."'/>"PHP-->
             <p class="info fittext" id="mepreview" text="myText"></p>
               <p class="info-new fittext" id="mepreview2" text="myText"></p>
          </div>
          </div>
                    <div class="textme"></div><div class="SFPTWO_TEXTEDIT tags_2 texttagdelete spaceedit"><h3 class="SFPTWO_TAGEDIT explicit_edit tag_5 tagdelete justifyme" contenteditable="false">Wat is jouw lijfspreuk als professional?</h3><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div></div>
                </div>
                </div><!-- end of container -->
                <form enctype="multipart/form-data" action="bedankt.php" id="frms" name="lijfspreuk1" method="post" class="lijfspreuk">
                	<input ng-model="myText" type="text" name="lijfspreuk" class="meljf" id="lijfspreuk" maxlength="80" value="Jouw lijfspreuk" onblur="if(this.value=='') this.value='Jouw lijfspreuk';" onfocus="if(this.value=='Jouw lijfspreuk') this.value='';">
                   
                    <span>Maximaal 80 karakters</span>
                	<input type="hidden" name="captureimg" id="captureimg" value="<!--PHP echo $_POST['img_val']; PHP--> ">
                    <input type="hidden" name="litext" id="litext" value="">
                    <input type="hidden" id="uid" name="uid" value="">
                    <input type="hidden" id="fname" name="fname" value="">
                    <input type="hidden" id="lname" name="lname" value="">
                    <input type="hidden" id="email" name="email" value="">
                    <input type="text" name="img_val2" id="img_val2" value="" style="display: none;">
                  
                </form>
               <p class="explicit_edit" contenteditable="false"><input type="button" name="submit" class="spreuk_val inputdisabled" value="Deel je tegel op Facebook" onclick="canvas()" contenteditable="true">
                </p>
            </div><!-- end of main_content -->
            <div class="footer"></div><!-- end of footer -->
        </div><!-- end of main_wrapper -->

       
    
   
 
        
       
        
        
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
    

</div>