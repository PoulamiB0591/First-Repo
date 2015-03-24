<!--SFPPAGE-->
<?php
       include('../include.php');
       include_once('/var/www/staging/public/sfpApi.php');
      
       

//Get the base-64 string from data
//echo $_POST['img_val'];
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
//echo $filteredData;
//Decode the string
$unencodedData=base64_decode($filteredData);

//Save the image
$imgs='img'.rand().'.png';
//echo($_SERVER['DOCUMENT_ROOT']);
file_put_contents("/var/www/staging/public/Apps/test/295/upload/".$imgs, $unencodedData);
$imglink = "/var/www/staging/public/Apps/test/295/upload/".$imgs;
//echo $imglink;
$imglink=explode('/',$imglink);
//print_r($imglink);
$imglinkadd = $imglink[5]."/".$imglink[6]."/".$imglink[7]."/".$imglink[8]."/".$imglink[9];
$imglinkaddme = $imglinkadd;
//echo $imglinkaddme;
?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
        <meta charset="utf-8">
        <title>Roel - Welcome to our Website!</title>
       <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/img/favicon.ico"> 
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/css/normalize.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/css/bootstrap.min.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/css/jquery.alerts.css"> 
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/css/main.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/js/style.css">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script data-require="angular.js@*" data-semver="1.2.0" src="//code.angularjs.org/1.2.0/angular.js"></script>
           <script src="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/js/plugins.js"></script>
        <!-- </script> -->
        <script src="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/js/jquery.alerts.js"></script>
         <script src="https://connect.facebook.net/nl_NL/all.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/js/html2canvas.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/js/jquery.plugin.html2canvas.js"></script>
        <script src="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/js/app.js"></script>
         <script type="text/javascript">
        
       
        
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
</script>
    
    
<div id="fb-root">

    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
      
           <div class="overlay_div">
        <img class="loading_img" src="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/712.GIF" /> 
        </div> 
              
        
    <div class="main_wrapper">
          <div class="container-fluid top">
            	<div class="row roel-container">
                <div class="SFPTWO_IMAGEEDIT expl tagsimg_1">
                	<img id="images1" src="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/img/logo.jpg" alt=""><!-- end of logo -->
                   <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="95754900a0bb8e0b13-roelpro" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div><div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="95754900a0bb8e0b13-roelpro" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                      <div class="explicit_edit" contenteditable="false"><a style="cursor: pointor;" title="Nodig je vrienden uit" class="invite disabled" onclick="invite()"><img src="//test.scampaigns.com/user_template/95754900a0bb8e0b13-roelpro/img/facebook_icon.png" alt=""><span class="explicit_edit" contenteditable="false">Nodig je<br>vrienden uit</span></a><!-- end of invite -->
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
        	<div class="main_navigation">
             <div class="container-fluid">
            	<div class="roel-container row">
                	<ul>
                    	<li class="explicit_edit enteroff SFPTWO_TAGEDIT tag_1" contenteditable="false"><a class="disabled" href="/Apps/test/295/index.php" title="Kies je tegel en foto" id="Kies">1) Kies je tegel en foto</a></li>
                    	<li class="explicit_edit enteroff SFPTWO_TAGEDIT tag_2" contenteditable="false"><a class="disabled" href="//test.scampaigns.com/spreuk.php" id="spreuk" title="Persoonlijke spreuk">2) Persoonlijke spreuk</a></li>
                    	<li class="explicit_edit enteroff SFPTWO_TAGEDIT tag_3" contenteditable="false"><a class="disabled" href="//test.scampaigns.com/bedankt.php" id="Bedankt" title="Bedankt">3) Bedankt</a></li>
                    <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></ul>
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
         
            <div class="main_content">
            	<div class="container-fluid bedankt-wrap">
                 <div class="col-lg-12">
                    <div class="SFPTWO_TEXTEDIT tags_1"><h2 class="SFPTWO_TAGEDIT explicit_edit  tag_4" contenteditable="false">Geen doel is te ver, als je plezier hebt in wat je doet....</h2><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                      <div style="margin: 80px 0px 0px;">
        <div id="target" class="img-cont">
            
              <?php echo "<img id ='imgscreen' src='//test.scampaigns.com/".$imglinkaddme."'/>"?>
             <p class="info fittext" id="mepreview" text="myText"></p>
               <p class="info-new fittext" id="mepreview2" text="myText"></p>
          </div>
          </div>
                    <div class="SFPTWO_TEXTEDIT tags_2"><h3 class="SFPTWO_TAGEDIT explicit_edit tag_5" contenteditable="false">Wat is jouw lijfspreuk als professional?</h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                </div>
                </div><!-- end of container -->
                <form enctype="multipart/form-data" action="bedankt.php" id="frms" name="lijfspreuk1" method="post" class="lijfspreuk">
                	<input ng-model="myText" name="lijfspreuk" class="meljf" id="lijfspreuk" maxlength="80" value="Jouw lijfspreuk" onblur="if(this.value=='') this.value='Jouw lijfspreuk';" onfocus="if(this.value=='Jouw lijfspreuk') this.value='';" type="text">
                   
                    <span>Maximaal 80 karakters</span>
                	<input name="captureimg" id="captureimg" value="<?php echo $_POST['img_val']; ?> " type="hidden">
                    <input name="litext" id="litext" value="" type="hidden">
                    <input id="uid" name="uid" value="" type="hidden">
                    <input id="fname" name="fname" value="" type="hidden">
                    <input id="lname" name="lname" value="" type="hidden">
                    <input id="email" name="email" value="" type="hidden">
                    <input name="img_val2" id="img_val2" value="" style="display: none;" type="text">
                  
                </form>
               <p class="explicit_edit" contenteditable="false"><input name="submit" class="spreuk_val inputdisabled" value="Deel je tegel op Facebook" onclick="canvas()" contenteditable="true" type="button">
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