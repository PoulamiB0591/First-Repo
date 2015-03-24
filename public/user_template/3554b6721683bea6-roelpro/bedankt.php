<!--SFPPAGE-->
<!--PHP
       include('../include.php');
          /*PHP DBCONNECT PHP*/
       PHP-->
  <!--PHP
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


 PHP-->   
<!--PHP
//Get the base-64 string from data
//echo $_POST['img_val'];
$filteredData=substr($_POST['img_val2'], strpos($_POST['img_val2'], ",")+1);
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

$fullpath = "SFP_TimelinePost/".$imglinkadd;


PHP-->        

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
        <meta charset="utf-8">
        <title>Roel - Welcome to our Website!</title>
         <!--SFPhide <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/img/favicon.ico"> SFPhide-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/css/normalize.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/css/bootstrap.min.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro//css/main.css">
        <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/js/html2canvas.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/js/jquery.plugin.html2canvas.js"></SFPScript-->   
       <!--SFPScript src="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/js/vendor/modernizr-2.6.2.min.js"></SFPScript-->
       <!--SFPScript src="https://connect.facebook.net/nl_NL/all.js"></SFPScript-->
         <!--SFPScript type="text/javascript">
         
         
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
          appId      : 'SFPAPPID',
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
                   message: '',
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
</SFPScript-->
<style>





</style>
        
        
    
    
    
        <!--[if lt IE 7]>
            <p class="bSFP_ROWsehappy">You are using an <strong>outdated</strong> bSFP_ROWser. Please <a href="//bSFP_ROWsehappy.com/">upgrade your bSFP_ROWser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
       <!--SFPhide  <div class="overlay_div">
        <img class="loading_img" src="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/712.GIF" /> 
        </div> SFPhide-->
      <div class="SFPTWO_BACKGROUND">
    <div class="main_wrapper">
        
         <div class="container-fluid top">
            	<div class="SFP_ROW roel-container">
                <div class="SFPTWO_IMAGEEDIT expl tagsimg_1">
                	<img id="images1" src="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/img/logo.jpg" alt=""><!-- end of logo -->
                   </div>
                      <div class="explicit_edit" contenteditable="false"><a style="cursor: pointor;" title="Nodig je vrienden uit" class="invite" onclick="invite()"><img src="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/img/facebook_icon.png" alt=""><span class="explicit_edit" contenteditable="false">Nodig je<br>vrienden uit</span></a><!-- end of invite -->
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
        	<div class="main_navigation">
             <div class="container-fluid">
            	<div class="roel-container SFP_ROW">
                	<ul>
                    	<li class="enteroff  SFPTWO_TAGEDIT tag_1"><a href="SFP_index" class="" title="Kies je tegel en foto" id="Kies">1) Kies je tegel en foto</a></li>
                    	<li class="enteroff  SFPTWO_TAGEDIT tag_2"><a href="SFP_Redirect/spreuk.php" class="" id="spreuk" title="Persoonlijke spreuk">2) Persoonlijke spreuk</a></li>
                    	<li class="enteroff  SFPTWO_TAGEDIT tag_3"><a href="SFP_Redirect/bedankt.php" class="" id="Bedankt" title="Bedankt">3) Bedankt</a></li>
                    </ul>
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
            <div class="main_content">
            
            	<div class="container-fluid bedankt-wrap">
                <div class="SFP_BOOT-lg-12">
                    <div class="SFPTWO_TEXTEDIT tags_1"><h2 class="SFPTWO_TAGEDIT  tag_4 bydelete">merci beaucoup</h2></div>
                    <div class="SFPTWO_TEXTEDIT tags_2"><h3 class="SFPTWO_TAGEDIT  tag_5 bydelete editme">Je hebt je tegel gedeeld op Facebook.</h3></div>
                    </div>
                    <div class="clearfix"></div>
                <div class="img-cont clearfix">
                 
              <!--PHP echo '<img id ="imgscreen" src="'.$fullpath.'" />'PHP-->
               
                </div>
                </div>
                </div>
                <input type="button" id="triggerme" onclick="timelinepost()" style="display: none;" class="">
                <!-- end of container -->
                <div class="btn_blog SFPTWO_TAGEDIT tag_6" style="cursor: pointer;">
                	<a style="cursor:pointor;width: 260px;" onclick="invite()" class=""><strong>FACEBOOK VRIENDEN</strong><span>uitnodigen voor deze app</span></a>
                </div><!-- end of btn_blog -->
            </div><!-- end of main_content -->
            <div class="footer"></div><!-- end of footer -->
        </div><!-- end of main_wrapper -->

        <!--SFPScript src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></SFPScript-->
        <!--SFPScript> window.jQuery || document.write('<!--SFPScript src="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/js/vendor/jquery-1.10.2.min.js"><\/script>')</SFPScript-->
        <!--SFPScript src="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/js/plugins.js"></SFPScript-->
        <!--SFPScript src="//test.scampaigns.com/user_template/3554b6721683bea6-roelpro/js/main.js"></SFPScript-->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->