<!--SFPPAGE-->
<?php
       include('../include.php');
          include_once('/var/www/staging/public/sfpApi.php');
       ?>
  <?php
     $sfp = new SmartfanPage();
   $data = 
    array(
    
    array(
     array('field'=>'fbid',
            'value'=>$_POST['uid']),
            array('field'=>'fbfirstname',
            'value'=>$_POST['fname']),
            array('field'=>'fblastname',
            'value'=>$_POST['lname']),
            array('field'=>'email',
            'value'=>$_POST['email']),
            array('field'=>'logintime',
            'value'=>date('Y/m/d H:i:s')
            )
            )
    
     );

  
   
    
 $datainsert =  array(
			'appId' => 'lNWyBR8YOcde4H9',
            'table' => 'roelpro_user',
            'field' => $data
            
            );
      

$sfp->insert_table($datainsert);


 ?>   
<?php
//Get the base-64 string from data
//echo $_POST['img_val'];
$filteredData=substr($_POST['img_val2'], strpos($_POST['img_val2'], ",")+1);
//echo $filteredData;
//Decode the string
$unencodedData=base64_decode($filteredData);

//Save the image
$imgs='img'.rand().'.png';
//echo($_SERVER['DOCUMENT_ROOT']);
file_put_contents("/var/www/staging/public/Apps/testing_roel_atmpt_21/604/upload/".$imgs, $unencodedData);
$imglink = "/var/www/staging/public/Apps/testing_roel_atmpt_21/604/upload/".$imgs;
//echo $imglink;
$imglink=explode('/',$imglink);
//print_r($imglink);
$imglinkadd = $imglink[5]."/".$imglink[6]."/".$imglink[7]."/".$imglink[8]."/".$imglink[9];

$fullpath = "http://test.scampaigns.com/".$imglinkadd;


?>        

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
        <meta charset="utf-8">
        <title>Roel - Welcome to our Website!</title>
          <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/img/favicon.ico"> 
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/css/normalize.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/css/bootstrap.min.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro//css/main.css">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/js/html2canvas.js"></script>
        <script type="text/javascript" src="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/js/jquery.plugin.html2canvas.js"></script>   
       <script src="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/js/vendor/modernizr-2.6.2.min.js"></script>
       <script src="https://connect.facebook.net/nl_NL/all.js"></script>
         <script type="text/javascript">
         
         
          $(document).ready(function() {
         
         $('.overlay_div').css('display','block');
            
         $('#spreuk').removeClass('active');
        $('#Bedankt').addClass('active');
         
          $('#spreuk').attr('href','javascript: void(0)');
        
          var takeimgname = localStorage.getItem('takeimgname');
          var imgupload = localStorage.getItem('imgupload');
          var lijfspreuk = localStorage.getItem('lijfspreuk');
          
          //alert(lijfspreuk);
          var captureimg = localStorage.getItem('captureimg');
          //alert(captureimg)
          //$('.img-cont').css('background',"url('"+takeimgname+"') no-repeat"); 
          $('#back-img').attr('src',takeimgname);
          $('#front-img').attr('src',imgupload);
          $('.info').html(lijfspreuk);
          $('#capturesrc').attr('src',captureimg);
          //alert(takeimgname);
         // alert(imgupload);
          //alert(lijfspreuk);
          
         });
         
           FB.init({
          appId      : '502186369918571',
          xfbml      : true,
          version    : 'v2.0'
        });
    function invite(){
    FB.ui({ method: 'apprequests', 
     message: 'My diaolog...'});
   } 
   
    $(window).bind("load", function() {
         $('.overlay_div').css('display','none');
         $('#triggerme').trigger( "click" );
   
          });   
          
   function timelinepost(){
        var img = $('#imgscreen').attr('src');
       // alert(img);
     FB.login(function(response) {
       if (response.authResponse) {
        // login success, then post a photo
        FB.api('me/photos',
               'post',
               {
                   message: 'Testing the Roel Pro app',
                   url: img
               },
               function(response) {
                 console.log(response);
                 if (!response || response.error) {
                     console.log('failed');
                 } else {
                     console.log('success');
                 }
               }
        );
    }
}, {scope: 'publish_actions'});
    
   }       
</script>
<style>





</style>
        
        
    
    
    
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
         <div class="overlay_div">
        <img class="loading_img" src="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/712.GIF" /> 
        </div> 
        
    <div class="main_wrapper">
        
         <div class="container-fluid top">
            	<div class="row roel-container">
                <div class="SFPTWO_IMAGEEDIT expl tagsimg_1 imgEdit10 ui-resizable" id="editable" style="height: 84px; width: 102px;"><div id="draggable3" style="z-index:3; position:absolute;" class="ui-draggable"><div><div id="resizable3" style="z-index:3; height:79px; width:279px;" class="ui-resizable"><img class="layeredImage" id="images3" src="http://test.scampaigns.com/library/f3b3c5c2b421b99ddb7346ea2bb13c88.png" style="height:100%; width:100%; z-index:3;"><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 1000;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 1000;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 1000;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 1000;"></div></div></div></div>
                	<img id="images1" src="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/img/logo.jpg" alt=""><!-- end of logo -->
                   <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" value="275549abbc995ba015-roelpro" id="hid"><input type="hidden" value="4" id="imgCount"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 1000;"></div></div>
                      <div class="explicit_edit" contenteditable="false"><a style="cursor: pointor;" title="Nodig je vrienden uit" class="invite disabled" onclick="invite()"><img src="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/img/facebook_icon.png" alt=""><span class="explicit_edit" contenteditable="false">Nodig je<br>vrienden uit</span></a><!-- end of invite -->
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
        	<div class="main_navigation">
             <div class="container-fluid">
            	<div class="roel-container row">
                	<ul>
                    	<li class="enteroff  SFPTWO_TAGEDIT tag_1 explicit_edit" contenteditable="false"><a href="/Apps/testing_roel_atmpt_21/604/index.php" class="disabled" title="Kies je tegel en foto" id="Kies">1) Kies je tegel en foto</a></li>
                    	<li class="enteroff  SFPTWO_TAGEDIT tag_2 explicit_edit" contenteditable="false"><a href="//test.scampaigns.com/spreuk.php" class="disabled" id="spreuk" title="Persoonlijke spreuk">2) Persoonlijke spreuk</a></li>
                    	<li class="enteroff  SFPTWO_TAGEDIT tag_3 explicit_edit" contenteditable="false"><a href="//test.scampaigns.com/bedankt.php" class="disabled" id="Bedankt" title="Bedankt">3) Bedankt</a></li>
                    <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></ul>
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
            <div class="main_content">
            
            	<div class="container-fluid bedankt-wrap">
                <div class="col-lg-12">
                    <div class="SFPTWO_TEXTEDIT tags_1"><h2 class="SFPTWO_TAGEDIT  tag_4 explicit_edit" contenteditable="false">Thank You.........................................................</h2><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                    <div class="SFPTWO_TEXTEDIT tags_2"><h3 class="SFPTWO_TAGEDIT  tag_5 explicit_edit" contenteditable="false">This is a test&nbsp;</h3><div class="setting-2" id="text" style="display: none;"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                    </div>
                    <div class="clearfix"></div>
                <div class="img-cont clearfix">
                 
              <?php echo '<img id ="imgscreen" src="'.$fullpath.'" />'?>
               
                </div>
                </div>
                </div>
                <input type="button" id="triggerme" onclick="timelinepost()" style="display: none;" class="inputdisabled">
                <!-- end of container -->
                <div class="btn_blog SFPTWO_TAGEDIT tag_6 explicit_edit" style="cursor: pointer;" contenteditable="false">
                	<a style="cursor:pointor;width: 260px;" onclick="invite()" class="disabled"><strong>FACEBOOK VRIENDEN</strong><span>uitnodigen voor deze app</span></a>
                </div><!-- end of btn_blog -->
            <div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div><!-- end of main_content -->
            <div class="footer"></div><!-- end of footer -->
        <!-- end of main_wrapper -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script> window.jQuery || document.write('<script src="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/js/plugins.js"></script>
        <script src="//test.scampaigns.com/user_template/275549abbc995ba015-roelpro/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->