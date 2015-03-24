<!--SFPPAGE-->
<?php 
       include('../include.php');
         
       ?><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <title>Roel - Welcome to our Website!</title>
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/css/normalize.css">
         <link rel="stylesheet" href="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/css/bootstrap.min.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/css/main.css">
        
        <!-- MAS slider -->
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/css/mas-slider.css">
		<link href="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/css/mas-default.css" rel="stylesheet" type="text/css">
		<link href="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/css/mas-part-view.css" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="//test.scampaigns.com/css/templateform.css"> 
       <link rel="stylesheet" href="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/css/jquery.alerts.css"> 
             <script src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="https://connect.facebook.net/nl_NL/all.js"></script>

    



    

    
    <div class=" fb_reset" id="fb-root"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>

<script>

   window.fbAsyncInit = function() 
{
    
    FB.Canvas.setSize();
    FB.Canvas.setAutoGrow();
}
function sizeChangeCallback() 
{
    FB.Canvas.setSize();
}
 function invite(){
      FB.init({
          appId      : 'SFPAPPID',
          xfbml      : true,
          version    : 'v2.0'
        });
  FB.ui({ method: 'apprequests', 
   message: 'My diaolog...'});
 }   
 
function facebookconnect(){
      
        $('.overlay_div').css('display','block');
        FB.init({
           appId      : 'SFPAPPID',
           xfbml      : true,
          version    : 'v2.0'
        });
        
    FB.login(function(response) {
       
   if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
    
     FB.api('/me', function(response) {
          var uid = response.id;	
          var email = response.email;
          var fname = response.first_name;
          var lname = response.last_name;
          localStorage.setItem('email',email);
          localStorage.setItem('uid',uid);
          localStorage.setItem('fname',fname);
          localStorage.setItem('lname',lname);
          // alert(localStorage.getItem('email'));
           $('#getprflmg').val(uid);
           facebookimg += 'https://graph.facebook.com/'+uid+'/picture?type=large';
           //facebookme = 'https://graph.facebook.com/'+uid+'/picture?type=large';
           $('#divimg').css('display','block');
             $('#imgprvw').css('display','block');
            $('#imgprvw').attr('src','https://graph.facebook.com/'+uid+'/picture?type=large');
        /**
 *   var query = FB.Data.query('select publish_stream,read_stream from permissions where uid={0}', uid);
 *                    query.wait(function(rows) {
 *                                     if(rows[0].publish_stream == 1) 
 *                                     {
 *                                         
 *                                         FB.getLoginStatus(function (response) 
 *                                         {
 *                                             if (response.authResponse) {
 *                                             var actok = response.authResponse.accessToken;
 *                                             }
 *                                         });
 *                                     } else {
 *                                     alert('Sorry! To enter the competition you have to accept our photo contest app. ');
 *                                     }
 *                                 });
 */
       console.log('Good to see you, ' + response.name + '.');
        $('.overlay_div').css('display','none');
     });
   } else {
     alert('User cancelled login or did not fully authorize.');
   }
 },{scope: 'SFPFBSCOPE'});
 
 
  
  }

    </script>
 
       <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->

        <div class="main_wrapper" id="change">
        
        	<div class="container-fluid top">
            	<div class="row roel-container">
                <div class="SFPTWO_IMAGEEDIT expl">
                	<img id="images1" src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/img/logo.jpg" alt=""/><!-- end of logo -->
                   </div>
                      <div  class="explicit_edit"><a style="cursor: pointor;"  title="Nodig je vrienden uit" class="invite" onclick="invite()"><img src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/img/facebook_icon.png" alt=""><span class="explicit_edit">Nodig je<br>vrienden uit</span></a><!-- end of invite -->
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
        	<div class="main_navigation">
             <div class="container-fluid">
            	<div class="roel-container row">
                	<ul>
                    	<li class="explicit_edit enteroff autosize" rel="24"><a href="SFP_index" title="Kies je tegel en foto"  class="active autosizethis">1) Kies je tegel en foto</a></li>
                    	<li class="explicit_edit enteroff autosize" rel="22"><a class="autosizethis" href="SFP_Redirect/spreuk.php" id="spreuk" title="Persoonlijke spreuk">2) Persoonlijke spreuk</a></li>
                    	<li class="explicit_edit enteroff autosize" rel="10"><a class="autosizethis" href="SFP_Redirect/bedankt.php" id="Bedankt"  title="Bedankt">3) Bedankt</a></li>
                    </ul>
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->           
             <div class="main_content">
            	<div class="container-fluid bedankt-wrap">
                <div class="col-lg-12">
                    <div class="SFPTWO_TEXTEDIT explicit_edit autosize" rel="18"><h2 class="SFPTWO_TAGEDIT autosizethis">Kies een tegel ...</h2></div>
                    <div class="SFPTWO_TEXTEDIT explicit_edit"><h3 class="SFPTWO_TAGEDIT">... en profileer jezelf als professional</h3></div>
                </div>
                
                <div class="clearfix"></div>
                <div class="mas-cont col-lg-12">
                <div class="ms-partialview-template" id="partial-view-1">
            <!-- masterslider -->
            <div class="master-slider ms-skin-default" id="masterslider">
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                    <div class="ms-info">
                       
                    </div>  
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/img/2.png" alt="lorem ipsum dolor sit">    
                      <div class="ms-info">
                        
                    </div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/img/3.png" alt="lorem ipsum dolor sit">   
                     <div class="ms-info"></div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/img/4.png" alt="lorem ipsum dolor sit">   
                      <div class="ms-info"> </div>  
                </div>
                
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                        <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/img/2.png" alt="lorem ipsum dolor sit">   
                       <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/img/3.png" alt="lorem ipsum dolor sit"> 
                        <div class="ms-info"> </div> 
                </div>
            </div>
            <!-- end of masterslider -->
</div>
                </div>
                </div><!-- end of container -->
               
                
                <div class="btn_blog">
                 <div id="divimg" style="display: none; height: 200px;width: 200px; border: 1px solid #000; margin: 0 auto;">
                 <img id="imgprvw" alt="" style="display: none; height: 100%;width: 100%;"/>
                </div>
                
                <p class="explicit_edit upload_fbbt">
                	<a class="" style="cursor: pointer;" id="getprf" onclick="facebookconnect();"><span class="explicit_edit">Gebruik mijn</span><strong class="explicit_edit">PROFIELFOTO</strong></a>
                     </p>
                     <form class="upload_fbbt" enctype="multipart/form-data" method="post" id="target" action="SFP_Redirect/run.php">
                    
                     <input value="0" id="takeimgname" name="takeimg" type="hidden"/>
                     <input id="getvalue" name="getvalue" type="hidden"/>
                     <input id="getfb" name="getfb" type="hidden"/>
                     <input class="" name="fileToUpload" id="fileToUpload" value="Upload je eigen FOTO" type="file"  onchange="showimagepreview(this)"/>
                    
                	<p class="explicit_edit"><a class="" style="cursor:pointor;"><span class="explicit_edit">Upload je eigen</span><strong class="explicit_edit">FOTO</strong></a>
                    </p>
                     </form>
                    
                     
                     <form method="post" id="targetfb" action="SFP_Redirect/save.php">
                      
                       <input name="getprflmg" id="getprflmg" type="hidden"> 
                     </form>
                </div><!-- end of btn_blog -->
                <p class="explicit_edit"><a href="javascript:void(0)" title="Ga verder" class="continue">Ga verder</a></p><!-- end of continue -->
           
           <div class="form-container jui-checkboxes-container" id="checkboxesInit2">

</div>
           
            </div><!-- end of main_content -->
          
          
            <div class="footer"></div><!-- end of footer -->
        </div><!-- end of main_wrapper -->
          
             <!--SFPScript <script src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/js/jquery.easing.min.js"></SFPScript-->
               <script src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/js/jquery.alerts.js"></script>
               
		<!--SFPScript src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/js/mas.min.js"></SFPScript-->
	<!--SFPScript script src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/js/mas-part.dev.js"></SFPScript-->
        <script src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/js/plugins.js"></script>
       <!--SFPScript src="//test.scampaigns.com/user_template/601545b1810ee9289-roelpro/js/main.js"></SFPScript-->

    
    
     
                <script type="text/javascript">
     function reloadthispage()
     {
        alert("Please upload a human's photo with front face");
        //top.location.href = 'https://www.facebook.com/waytowork/app_1484924788415270';
     }
        var facebookimg = "";
    $(document).ready(function() {
        
        localStorage.removeItem('email');
          localStorage.removeItem('uid');
          localStorage.removeItem('fname');
          localStorage.removeItem('lname');
      //  alert(localStorage.getItem('email'));
        $('#spreuk').attr('href','javascript: void(0)');
        $('#Bedankt').attr('href','javascript: void(0)');
        
   $("input[type='file'][name*='fileToUpload']").filter(function(k){
   if($(this).val().length == 0){
          // alert("field is empty");
        }
        else{
             alert("field is not empty");
        }
   });
  
   $("input:file#fileToUpload").change(function (){
    
    var filename = $(this).val();
       $('#getvalue').val(filename);
       $('#getfb').val('');
        //alert("field is not empty");
       
     });
     
       $("input:file#fileToUploadfb").change(function (){
    
       var filename = facebookimg;
       $('#getvalue').val(filename);
       $('#getfb').val('');
        //alert("field is not empty");
       
     });
     
     $(".continue").click(function(){
        setTimeout('reloadthispage()',20000);
          $('.overlay_div').css('display','block');
        var getfb  = $('#getfb').val();
        var getme = $('#getvalue').val();
        
        if( getfb =="" && getme=="")
        {
            jAlert('Neem foto uploaden', 'kennisgeving');
            $('.overlay_div').css('display','none');
            }
            else{
      
        if(getme != ""){
              $( "#target" ).submit();
          
         
        }
        else if(getfb != "" ){
            
         $( "#targetfb" ).submit();   
       // window.location.href="save.php"; 
        }
        }
         });
     
     $("#getprf").click(function(){
      $('#getvalue').val('');
      $('#getfb').val('fbprf');
       
     }); 
     
     $(".ms-slide").click(function(){
       var  getimg = $(this).children().find('img').attr('src');
     $('#takeimgname').val(getimg);  
     localStorage.setItem('takeimgname',getimg);
     
     localStorage.setItem('facebookimg',facebookimg);
    // $.session.set("takeimgname",getimg);
     });
    });
</script>