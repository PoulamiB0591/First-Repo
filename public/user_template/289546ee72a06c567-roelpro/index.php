<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
 


<!--SFPPAGE-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <title>Roel - Welcome to our Website!</title>
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/normalize.css">
         <link rel="stylesheet" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/bootstrap.min.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/main.css">
        
        <!-- MAS slider -->
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/mas-slider.css">
		<link href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/mas-default.css" rel="stylesheet" type="text/css">
		<link href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/mas-part-view.css" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="//test.scampaigns.com/css/templateform.css"> 
       <link rel="stylesheet" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/jquery.alerts.css"> 
             <script src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="https://connect.facebook.net/nl_NL/all.js"></script>

    



    

    
    <div class=" fb_reset fb_reset" id="fb-root"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>

 <!--SFPScript type="text/javascript">

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

 </!--SFPScript> 
 
       <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->

        <div class="main_wrapper" id="change">
        
        	<div class="container-fluid top">
            	<div class="row roel-container">
                <div class="SFPTWO_IMAGEEDIT expl">
                	<img id="images1" src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/logo.jpg" alt=""><!-- end of logo -->
                   <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="289546ee72a06c567-roelpro" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                      <div class="explicit_edit" contenteditable="false"><a style="cursor: pointor;" title="Nodig je vrienden uit" class="invite" onclick="invite()"><img src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/facebook_icon.png" alt=""><span class="explicit_edit" contenteditable="false">Nodig je<br>vrienden uit</span></a><!-- end of invite -->
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
        	<div class="main_navigation">
             <div class="container-fluid">
            	<div class="roel-container row">
                	<ul>
                    	<li class="explicit_edit enteroff autosize" rel="26" contenteditable="false"><a style="font-size: 14px;" href="SFP_index" title="Kies je tegel en foto" class="active autosizethis">1) Kies je tegel encc foto</a></li>
                    	<li class="explicit_edit enteroff autosize" rel="24" contenteditable="false"><a style="font-size: 14px;" class="autosizethis" href="spreuk.php" id="spreuk" title="Persoonlijke spreuk">2) Persoonlijke spccreuk</a></li>
                    	<li class="explicit_edit enteroff autosize" rel="12" contenteditable="false"><a style="font-size: 14px;" class="autosizethis" href="bedankt.php" id="Bedankt" title="Bedankt">3) Bedanktcc</a></li>
                    </ul>
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->           
             <div class="main_content">
            	<div class="container-fluid bedankt-wrap">
                <div class="col-lg-12">
                    <div class="SFPTWO_TEXTEDIT autosize" rel="23"><h2 style="font-size: 77px;" class="SFPTWO_TAGEDIT explicit_edit autosizethis" contenteditable="false"><u><b>Kidsfgges</b></u> <u><b>een tegel ...</b></u></h2><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                    <div class="SFPTWO_TEXTEDIT"><h3 class="SFPTWO_TAGEDIT explicit_edit" contenteditable="false">... <b><u>en profileefgdgdfgr jezelf als professional</u></b></h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                </div>
                
                <div class="clearfix"></div>
                <div class="mas-cont col-lg-12">
                <div class="ms-partialview-template" id="partial-view-1">
            <!-- masterslider -->
            <div class="master-slider ms-skin-default" id="masterslider">
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                    <div class="ms-info">
                       
                    </div>  
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/2.png" alt="lorem ipsum dolor sit">    
                      <div class="ms-info">
                        
                    </div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/3.png" alt="lorem ipsum dolor sit">   
                     <div class="ms-info"></div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/4.png" alt="lorem ipsum dolor sit">   
                      <div class="ms-info"> </div>  
                </div>
                
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                        <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/2.png" alt="lorem ipsum dolor sit">   
                       <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/3.png" alt="lorem ipsum dolor sit"> 
                        <div class="ms-info"> </div> 
                </div>
            </div>
            <!-- end of masterslider -->
</div>
                </div>
                </div><!-- end of container -->
               
                
                <div class="btn_blog">
                 <div id="divimg" style="display: none; height: 200px;width: 200px; border: 1px solid #000; margin: 0 auto;">
                 <img id="imgprvw" alt="" style="display: none; height: 100%;width: 100%;">
                </div>
                
                <p class="explicit_edit upload_fbbt" contenteditable="false">
                	<a class="" style="cursor: pointer;" id="getprf" onclick="facebookconnect();"><span class="explicit_edit" contenteditable="false">Gebruik mijn</span><strong class="explicit_edit" contenteditable="false">PROFIELgdfgFOTO</strong></a>
                     </p>
                     <form class="upload_fbbt" enctype="multipart/form-data" method="post" id="target" action="run.php">
                    
                     <input value="0" id="takeimgname" name="takeimg" type="hidden">
                     <input id="getvalue" name="getvalue" type="hidden">
                     <input id="getfb" name="getfb" type="hidden">
                     <input class="" name="fileToUpload" id="fileToUpload" value="Upload je eigen FOTO" onchange="showimagepreview(this)" type="file">
                    
                	<p class="explicit_edit" contenteditable="false"><a class="" style="cursor:pointor;"><span class="explicit_edit" contenteditable="false">Uploadfgdgdd je eigen</span><strong class="explicit_edit" contenteditable="false">FOTO</strong></a>
                    </p>
                     </form>
                    
                     
                     <form method="post" id="targetfb" action="save.php">
                      
                       <input name="getprflmg" id="getprflmg" type="hidden"> 
                     </form>
                </div><!-- end of btn_blog -->
                <p class="explicit_edit" contenteditable="false"><a href="javascript:void(0)" title="Ga verder" class="continue">Ga vefsfrder</a></p><!-- end of continue -->
           
           <div class="form-container jui-checkboxes-container" id="checkboxesInit2">

</div>
           
            </div><!-- end of main_content -->
          
          
            <div class="footer"></div><!-- end of footer -->
        </div><!-- end of main_wrapper -->
          
             <!--SFPScript <script src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/jquery.easing.min.js"></SFPScript-->
               <script src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/jquery.alerts.js"></script>
               
		<!--SFPScript src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/mas.min.js"></SFPScript-->
	<!--SFPScript script src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/mas-part.dev.js"></SFPScript-->
        <script src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/plugins.js"></script>
       <!--SFPScript src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/main.js"></SFPScript-->

    
    
     
             <!--SFPScript type="text/javascript">
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
        //setTimeout('reloadthispage()',20000);
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
</!--SFPScript> 

</div>

       
		<script type="text/javascript">
            var d = document;
            var safari = (navigator.userAgent.toLowerCase().indexOf() != -1) ? true : false;
            var gebtn = function(parEl,child) { return parEl.getElementsByTagName(child); };
            onload = function() {
                
                var body = gebtn(d,'body')[0];
                body.className = body.className && body.className != '' ? body.className + ' has-js' : 'has-js';
                
                if (!d.getElementById || !d.createTextNode) return;
                var ls = gebtn(d,'label');
                for (var i = 0; i < ls.length; i++) {
                    var l = ls[i];
                    if (l.className.indexOf('label_') == -1) continue;
                    var inp = gebtn(l,'input')[0];
                    if (l.className == 'label_check') {
                        l.className = (safari && inp.checked == true || inp.checked) ? 'label_check c_on' : 'label_check c_off';
                        l.onclick = check_it;
                    };
                    if (l.className == 'label_radio') {
                        l.className = (safari && inp.checked == true || inp.checked) ? 'label_radio r_on' : 'label_radio r_off';
                        l.onclick = turn_radio;
                    };
                };
            };
            var check_it = function() {
                var inp = gebtn(this,'input')[0];
                if (this.className == 'label_check c_off' || (!safari && inp.checked)) {
                    this.className = 'label_check c_on';
                    if (safari) inp.click();
                } else {
                    this.className = 'label_check c_off';
                    if (safari) inp.click();
                };
            };
            var turn_radio = function() {
                var inp = gebtn(this,'input')[0];
                if (this.className == 'label_radio r_off' || inp.checked) {
                    var ls = gebtn(this.parentNode,'label');
                    for (var i = 0; i < ls.length; i++) {
                        var l = ls[i];
                        if (l.className.indexOf('label_radio') == -1)  continue;
                        l.className = 'label_radio r_off';
                    };
                    this.className = 'label_radio r_on';
                    if (safari) inp.click();
                } else {
                    this.className = 'label_radio r_off';
                    if (safari) inp.click();
                };
            };
        </script>
        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
        

<p id="savepr" style="display: none;"></p>



<!--------------------/********** added by Poulami ***********/------------------->	
<div style="display: block;" id="pubCam" class="popup_new">
    <a style="cursor: pointer;" class="close_btn">close</a>
    <h6>Preview &amp; publish</h6>
    
     <div class="tab">
        <ul class="nav nav-pills nav-wizard">
        <li class="active"><a class="">step 1) - preview</a><div class="nav-arrow"></div></li>
        <li><div class="nav-wedge"></div><a class="">Step 2)&nbsp;-&nbsp;publishing&nbsp;Platforms</a><div class="nav-arrow"></div></li>
        <li><div class="nav-wedge"></div><a class="">step 3) - publish</a><div class="nav-arrow"></div></li>
    </ul>
    
    <input value="demo_name4" id="newName" type="hidden">
    <input value="874" id="cNo" type="hidden">
    <input id="fbUrl" type="hidden">
    
    <div id="tabPrv">
    <p onclick="previewWindow();" style="cursor: pointer;">Preview in new window</p>
    <div id="tabPr"><img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
 


<!--SFPPAGE-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <title>Roel - Welcome to our Website!</title>
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/normalize.css">
         <link rel="stylesheet" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/bootstrap.min.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/main.css">
        
        <!-- MAS slider -->
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/mas-slider.css">
		<link href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/mas-default.css" rel="stylesheet" type="text/css">
		<link href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/mas-part-view.css" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="//test.scampaigns.com/css/templateform.css"> 
       <link rel="stylesheet" href="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/css/jquery.alerts.css"> 
             <script src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="https://connect.facebook.net/nl_NL/all.js"></script>

    



    

    
    <div class=" fb_reset fb_reset" id="fb-root"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>

 <!--SFPScript type="text/javascript">

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

 </!--SFPScript> 
 
       <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->

        <div class="main_wrapper" id="change">
        
        	<div class="container-fluid top">
            	<div class="row roel-container">
                <div class="SFPTWO_IMAGEEDIT expl">
                	<img id="images1" src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/logo.jpg" alt=""><!-- end of logo -->
                   <div class="setting-2" style="display:none"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="289546ee72a06c567-roelpro" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                      <div class="explicit_edit" contenteditable="false"><a style="cursor: pointor;" title="Nodig je vrienden uit" class="invite" onclick="invite()"><img src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/facebook_icon.png" alt=""><span class="explicit_edit" contenteditable="false">Nodig je<br>vrienden uit</span></a><!-- end of invite -->
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
        	<div class="main_navigation">
             <div class="container-fluid">
            	<div class="roel-container row">
                	<ul>
                    	<li class="explicit_edit enteroff autosize" rel="26" contenteditable="false"><a style="font-size: 14px;" href="SFP_index" title="Kies je tegel en foto" class="active autosizethis">1) Kies je tegel encc foto</a></li>
                    	<li class="explicit_edit enteroff autosize" rel="24" contenteditable="false"><a style="font-size: 14px;" class="autosizethis" href="spreuk.php" id="spreuk" title="Persoonlijke spreuk">2) Persoonlijke spccreuk</a></li>
                    	<li class="explicit_edit enteroff autosize" rel="12" contenteditable="false"><a style="font-size: 14px;" class="autosizethis" href="bedankt.php" id="Bedankt" title="Bedankt">3) Bedanktcc</a></li>
                    </ul>
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->           
             <div class="main_content">
            	<div class="container-fluid bedankt-wrap">
                <div class="col-lg-12">
                    <div class="SFPTWO_TEXTEDIT autosize" rel="23"><h2 style="font-size: 77px;" class="SFPTWO_TAGEDIT explicit_edit autosizethis" contenteditable="false"><u><b>Kidsfgges</b></u> <u><b>een tegel ...</b></u></h2><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                    <div class="SFPTWO_TEXTEDIT"><h3 class="SFPTWO_TAGEDIT explicit_edit" contenteditable="false">... <b><u>en profileefgdgdfgr jezelf als professional</u></b></h3><div class="setting-2" id="text" style="display:none"><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                </div>
                
                <div class="clearfix"></div>
                <div class="mas-cont col-lg-12">
                <div class="ms-partialview-template" id="partial-view-1">
            <!-- masterslider -->
            <div class="master-slider ms-skin-default" id="masterslider">
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                    <div class="ms-info">
                       
                    </div>  
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/2.png" alt="lorem ipsum dolor sit">    
                      <div class="ms-info">
                        
                    </div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/3.png" alt="lorem ipsum dolor sit">   
                     <div class="ms-info"></div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/4.png" alt="lorem ipsum dolor sit">   
                      <div class="ms-info"> </div>  
                </div>
                
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                        <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/2.png" alt="lorem ipsum dolor sit">   
                       <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/img/3.png" alt="lorem ipsum dolor sit"> 
                        <div class="ms-info"> </div> 
                </div>
            </div>
            <!-- end of masterslider -->
</div>
                </div>
                </div><!-- end of container -->
               
                
                <div class="btn_blog">
                 <div id="divimg" style="display: none; height: 200px;width: 200px; border: 1px solid #000; margin: 0 auto;">
                 <img id="imgprvw" alt="" style="display: none; height: 100%;width: 100%;">
                </div>
                
                <p class="explicit_edit upload_fbbt" contenteditable="false">
                	<a class="" style="cursor: pointer;" id="getprf" onclick="facebookconnect();"><span class="explicit_edit" contenteditable="false">Gebruik mijn</span><strong class="explicit_edit" contenteditable="false">PROFIELgdfgFOTO</strong></a>
                     </p>
                     <form class="upload_fbbt" enctype="multipart/form-data" method="post" id="target" action="run.php">
                    
                     <input value="0" id="takeimgname" name="takeimg" type="hidden">
                     <input id="getvalue" name="getvalue" type="hidden">
                     <input id="getfb" name="getfb" type="hidden">
                     <input class="" name="fileToUpload" id="fileToUpload" value="Upload je eigen FOTO" onchange="showimagepreview(this)" type="file">
                    
                	<p class="explicit_edit" contenteditable="false"><a class="" style="cursor:pointor;"><span class="explicit_edit" contenteditable="false">Uploadfgdgdd je eigen</span><strong class="explicit_edit" contenteditable="false">FOTO</strong></a>
                    </p>
                     </form>
                    
                     
                     <form method="post" id="targetfb" action="save.php">
                      
                       <input name="getprflmg" id="getprflmg" type="hidden"> 
                     </form>
                </div><!-- end of btn_blog -->
                <p class="explicit_edit" contenteditable="false"><a href="javascript:void(0)" title="Ga verder" class="continue">Ga vefsfrder</a></p><!-- end of continue -->
           
           <div class="form-container jui-checkboxes-container" id="checkboxesInit2">

</div>
           
            </div><!-- end of main_content -->
          
          
            <div class="footer"></div><!-- end of footer -->
        </div><!-- end of main_wrapper -->
          
             <!--SFPScript <script src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/jquery.easing.min.js"></SFPScript-->
               <script src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/jquery.alerts.js"></script>
               
		<!--SFPScript src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/mas.min.js"></SFPScript-->
	<!--SFPScript script src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/mas-part.dev.js"></SFPScript-->
        <script src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/plugins.js"></script>
       <!--SFPScript src="//test.scampaigns.com/user_template/289546ee72a06c567-roelpro/js/main.js"></SFPScript-->

    
    
     
             <!--SFPScript type="text/javascript">
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
        //setTimeout('reloadthispage()',20000);
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
</!--SFPScript> 

</div>

       
		<script type="text/javascript">
            var d = document;
            var safari = (navigator.userAgent.toLowerCase().indexOf() != -1) ? true : false;
            var gebtn = function(parEl,child) { return parEl.getElementsByTagName(child); };
            onload = function() {
                
                var body = gebtn(d,'body')[0];
                body.className = body.className && body.className != '' ? body.className + ' has-js' : 'has-js';
                
                if (!d.getElementById || !d.createTextNode) return;
                var ls = gebtn(d,'label');
                for (var i = 0; i < ls.length; i++) {
                    var l = ls[i];
                    if (l.className.indexOf('label_') == -1) continue;
                    var inp = gebtn(l,'input')[0];
                    if (l.className == 'label_check') {
                        l.className = (safari && inp.checked == true || inp.checked) ? 'label_check c_on' : 'label_check c_off';
                        l.onclick = check_it;
                    };
                    if (l.className == 'label_radio') {
                        l.className = (safari && inp.checked == true || inp.checked) ? 'label_radio r_on' : 'label_radio r_off';
                        l.onclick = turn_radio;
                    };
                };
            };
            var check_it = function() {
                var inp = gebtn(this,'input')[0];
                if (this.className == 'label_check c_off' || (!safari && inp.checked)) {
                    this.className = 'label_check c_on';
                    if (safari) inp.click();
                } else {
                    this.className = 'label_check c_off';
                    if (safari) inp.click();
                };
            };
            var turn_radio = function() {
                var inp = gebtn(this,'input')[0];
                if (this.className == 'label_radio r_off' || inp.checked) {
                    var ls = gebtn(this.parentNode,'label');
                    for (var i = 0; i < ls.length; i++) {
                        var l = ls[i];
                        if (l.className.indexOf('label_radio') == -1)  continue;
                        l.className = 'label_radio r_off';
                    };
                    this.className = 'label_radio r_on';
                    if (safari) inp.click();
                } else {
                    this.className = 'label_radio r_off';
                    if (safari) inp.click();
                };
            };
        </script>
        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
        

<p id="savepr" style="display: none;"></p>



<!--------------------/********** added by Poulami ***********/------------------->	
<div style="display: block;" id="pubCam" class="popup_new">
    <a style="cursor: pointer;" class="close_btn">close</a>
    <h6>Preview &amp; publish</h6>
    
     <div class="tab">
        <ul class="nav nav-pills nav-wizard">
        <li class="active"><a class="">step 1) - preview</a><div class="nav-arrow"></div></li>
        <li><div class="nav-wedge"></div><a class="">Step 2)&nbsp;-&nbsp;publishing&nbsp;Platforms</a><div class="nav-arrow"></div></li>
        <li><div class="nav-wedge"></div><a class="">step 3) - publish</a><div class="nav-arrow"></div></li>
    </ul>
    
    <input id="newName" type="hidden">
    <input id="cNo" type="hidden">
    <input id="fbUrl" type="hidden">
    
    <div id="tabPrv">
    <p onclick="previewWindow();" style="cursor: pointer;">Preview in new window</p>
    <div id="tabPr"></div><div><a title="Save &amp; Continue" class="save-n-continue" style="cursor: pointer;">continue</a></div></div>
     <div style="display: none;" id="tabFi" class="tab_content4">  
     		<div>
                <ul class="link_all">
                	<li><h5>Yesss, you're done!</h5></li>
                    <li id="webL" style="display: none;">
                    	<strong>Your WEB link is (smartlink):</strong>
                        <a class="" id="webLink" style="cursor: pointer;" target="_blank"></a>
                    </li>
                    <li id="fbL" style="display: none;">
                    	<strong>Your Facebook link is:</strong>
                        <a class="" id="fbLink" style="cursor: pointer;" target="_blank"></a>
                    </li>
                </ul>
                <hr>
                <ul class="link_all">
                	<li><h5>Start promoting your campaign</h5></li>
                    <li>
                    	<strong>Share on:</strong>
                    </li>
                </ul>
                <ul class="blog_icon_all">
                	<li><a style="cursor: pointer;" target="_blank" title="Facebook" id="fbIcon" class="facebook">facebook</a></li>
                	<li><a href="http://instagram.com/" target="_blank" title="Instagram" class="instagram">instagram</a></li>
                	<li><a href="https://twitter.com/" target="_blank" title="Twitter" class="twitter">twitter</a></li>
                	<li><a href="https://www.linkedin.com/" target="_blank" title="Linkedin" class="linkedin">linkedin</a></li>
                	<li><a href="https://www.pinterest.com/" target="_blank" title="Pinterest" class="pinterest">pinterest</a></li>
                </ul>
                </div>
                <!--<a href="#" class="step_back" title="Step back">Step back</a>-->
                <!--<a style="cursor: pointer;" class="close_bottom" title="Close">Close</a>-->
            </div><!-- end of tab1/tab_content -->
            <div style="display: none;" id="tabPb" class="tab_content4">
                <div>
                	<ul>
                		<li><h5>Hoera! You're ready to launch your campaign</h5></li>
                    </ul>
                    <span class="publish"><a class="" style="cursor: pointer;" onclick="pubFi();"><img src="/popupImg/publish.png" alt=""></a></span>
                </div>
                <a style="cursor: pointer;" class="step_back" title="Step back">Step back</a>
                <!--<a href="#" class="close_bottom" title="Save &amp; Continue">save &amp; continue</a>-->
            </div><!-- end of tab2/tab_content -->
            <div style="display: none;" id="tabPl" class="tab_content4"> 
                <div> 
                	<ul>
                		<li><h5>Choose your publishing platform</h5></li>
                    </ul>
                    <hr style="margin-bottom:0;">
                    
                   <div class="side_opti">
    <!--<fieldset class="checkboxes">
    	<label id="web" class="label_check"><input id="checkbox-01" value="1" type="checkbox" /> WEB</label>
    </fieldset>-->
    
    
    <div class="checkboxes">
        <span id="web" class="span_check"><input id="checkbox-01" value="1" type="checkbox"> WEB</span>
        
    </div>
    
    <div id="webPart" style="display: none;">
    <span class="camName"><p>Insert your campaign name : </p><input id="nameCam" type="text"> <a id="saveCam" style="cursor: pointer;" class="close_bottom" title="Save Campaign Name">Insert</a> </span>
    
    <div id="url" style="display: none;">
    <h4>Your generated url:</h4>
    <div id="fieldLabel" class="radios"><label id="webUrl"></label>
   <!-- <label class="label_radio r_off"><input type="radio" id="answers1" value="0" name="sample-radio">zxczxczxc</label>--></div>
   </div>
    
     </div>
      </div>  
      
              
            <div class="side_opti">
    <div class="checkboxes">
        <span id="facebook" class="span_check"><input id="checkbox-01" value="1" type="checkbox"> FACEBOOK</span>
        
    </div>
    
    <h4 id="noConn" style="display: none;">You're not connected to Facebook yet!</h4>
    
    <a style="cursor: pointer; display: none;" id="connBtn" class="close_bottom" onclick="logInWithToPublish();" title="Connect Now">Connect now</a>
    <div id="fbPages" style="display: none;">
    <h4>Choose your Facebook page:</h4>
    <select id="myItem" name="connected" onchange="postmessagetofacebook(this.value)">
    </select>
    </div>
      </div> 
      
                </div>
                <a style="cursor: pointer;" class="step_back" title="Step back">Step back</a>
                <a style="cursor: pointer;" class="close_bottom" title="Save &amp; Continue">save &amp; continue</a>
            </div><!-- end of tab3/tab_content -->
    </div>
    
</div><!-- end of popup_new -->

<div id="viewCam" class="popup_new">
    <a style="cursor: pointer;" class="close_btn">close</a>
    <h6>view campaign</h6>
    
     <div class="tab">
        <ul id="nav_new" class="nav nav-pills nav-wizard">
        
       <!-- <li><div class="nav-wedge"></div><a data-toggle="tab">view campaign links</a></li>-->
        
    </ul>
    
    <div style="display: none;" id="tabView" class="tab_content4">   
     		<div>
                <ul class="link_all">
                	<li><h5>Yesss, you're done!</h5></li>
                    <li id="webLView" style="display: none;">
                    	<strong>Your WEB link is (smartlink):</strong>
                        <a class="" id="webLinkView" style="cursor: pointer;" target="_blank"></a>
                    </li>
                    <li id="fbLView" style="display: none;">
                    	<strong>Your Facebook link is:</strong>
                        <a class="" id="fbLinkView" style="cursor: pointer;" target="_blank"></a>
                    </li>
                </ul>
                <hr>
                <ul class="link_all">
                	<li><h5>Start promoting your campaign</h5></li>
                    <li>
                    	<strong>Share on:</strong>
                    </li>
                </ul>
                <ul class="blog_icon_all">
                	<li><a style="cursor: pointer;" target="_blank" title="Facebook" id="fbIcon" class="facebook">facebook</a></li>
                	<li><a href="http://instagram.com/" target="_blank" title="Instagram" class="instagram">instagram</a></li>
                	<li><a href="https://twitter.com/" target="_blank" title="Twitter" class="twitter">twitter</a></li>
                	<li><a href="https://www.linkedin.com/" target="_blank" title="Linkedin" class="linkedin">linkedin</a></li>
                	<li><a href="https://www.pinterest.com/" target="_blank" title="Pinterest" class="pinterest">pinterest</a></li>
                </ul>
                </div>
                <!--<a href="#" class="step_back" title="Step back">Step back</a>-->
                <!--<a style="cursor: pointer;" class="close_bottom" title="Close">Close</a>-->
            </div><!-- end of tab1/tab_content -->
     </div>  
  </div></div><div><a title="Save &amp; Continue" class="save-n-continue" style="cursor: pointer;">continue</a></div></div>
     <div style="display: none;" id="tabFi" class="tab_content4">  
     		<div>
                <ul class="link_all">
                	<li><h5>Yesss, you're done!</h5></li>
                    <li id="webL" style="display: none;">
                    	<strong>Your WEB link is (smartlink):</strong>
                        <a class="" id="webLink" style="cursor: pointer;" target="_blank"></a>
                    </li>
                    <li id="fbL" style="display: none;">
                    	<strong>Your Facebook link is:</strong>
                        <a class="" id="fbLink" style="cursor: pointer;" target="_blank"></a>
                    </li>
                </ul>
                <hr>
                <ul class="link_all">
                	<li><h5>Start promoting your campaign</h5></li>
                    <li>
                    	<strong>Share on:</strong>
                    </li>
                </ul>
                <ul class="blog_icon_all">
                	<li><a style="cursor: pointer;" target="_blank" title="Facebook" id="fbIcon" class="facebook">facebook</a></li>
                	<li><a href="http://instagram.com/" target="_blank" title="Instagram" class="instagram">instagram</a></li>
                	<li><a href="https://twitter.com/" target="_blank" title="Twitter" class="twitter">twitter</a></li>
                	<li><a href="https://www.linkedin.com/" target="_blank" title="Linkedin" class="linkedin">linkedin</a></li>
                	<li><a href="https://www.pinterest.com/" target="_blank" title="Pinterest" class="pinterest">pinterest</a></li>
                </ul>
                </div>
                <!--<a href="#" class="step_back" title="Step back">Step back</a>-->
                <!--<a style="cursor: pointer;" class="close_bottom" title="Close">Close</a>-->
            </div><!-- end of tab1/tab_content -->
            <div style="display: none;" id="tabPb" class="tab_content4">
                <div>
                	<ul>
                		<li><h5>Hoera! You're ready to launch your campaign</h5></li>
                    </ul>
                    <span class="publish"><a class="" style="cursor: pointer;" onclick="pubFi();"><img src="/popupImg/publish.png" alt=""></a></span>
                </div>
                <a style="cursor: pointer;" class="step_back" title="Step back">Step back</a>
                <!--<a href="#" class="close_bottom" title="Save &amp; Continue">save &amp; continue</a>-->
            </div><!-- end of tab2/tab_content -->
            <div style="display: none;" id="tabPl" class="tab_content4"> 
                <div> 
                	<ul>
                		<li><h5>Choose your publishing platform</h5></li>
                    </ul>
                    <hr style="margin-bottom:0;">
                    
                   <div class="side_opti">
    <!--<fieldset class="checkboxes">
    	<label id="web" class="label_check"><input id="checkbox-01" value="1" type="checkbox" /> WEB</label>
    </fieldset>-->
    
    
    <div class="checkboxes">
        <span id="web" class="span_check"><input id="checkbox-01" value="1" type="checkbox"> WEB</span>
        
    </div>
    
    <div id="webPart" style="display: none;">
    <span class="camName"><p>Insert your campaign name : </p><input id="nameCam" type="text"> <a id="saveCam" style="cursor: pointer;" class="close_bottom" title="Save Campaign Name">Insert</a> </span>
    
    <div id="url" style="display: none;">
    <h4>Your generated url:</h4>
    <div id="fieldLabel" class="radios"><label id="webUrl"></label>
   <!-- <label class="label_radio r_off"><input type="radio" id="answers1" value="0" name="sample-radio">zxczxczxc</label>--></div>
   </div>
    
     </div>
      </div>  
      
              
            <div class="side_opti">
    <div class="checkboxes">
        <span id="facebook" class="span_check"><input id="checkbox-01" value="1" type="checkbox"> FACEBOOK</span>
        
    </div>
    
    <h4 id="noConn" style="display: none;">You're not connected to Facebook yet!</h4>
    
    <a style="cursor: pointer; display: none;" id="connBtn" class="close_bottom" onclick="logInWithToPublish();" title="Connect Now">Connect now</a>
    <div id="fbPages" style="display: none;">
    <h4>Choose your Facebook page:</h4>
    <select id="myItem" name="connected" onchange="postmessagetofacebook(this.value)">
    </select>
    </div>
      </div> 
      
                </div>
                <a style="cursor: pointer;" class="step_back" title="Step back">Step back</a>
                <a style="cursor: pointer;" class="close_bottom" title="Save &amp; Continue">save &amp; continue</a>
            </div><!-- end of tab3/tab_content -->
    </div>
    
</div><!-- end of popup_new -->

<div id="viewCam" class="popup_new">
    <a style="cursor: pointer;" class="close_btn">close</a>
    <h6>view campaign</h6>
    
     <div class="tab">
        <ul id="nav_new" class="nav nav-pills nav-wizard">
        
       <!-- <li><div class="nav-wedge"></div><a data-toggle="tab">view campaign links</a></li>-->
        
    </ul>
    
    <div style="display: none;" id="tabView" class="tab_content4">   
     		<div>
                <ul class="link_all">
                	<li><h5>Yesss, you're done!</h5></li>
                    <li id="webLView" style="display: none;">
                    	<strong>Your WEB link is (smartlink):</strong>
                        <a class="" id="webLinkView" style="cursor: pointer;" target="_blank"></a>
                    </li>
                    <li id="fbLView" style="display: none;">
                    	<strong>Your Facebook link is:</strong>
                        <a class="" id="fbLinkView" style="cursor: pointer;" target="_blank"></a>
                    </li>
                </ul>
                <hr>
                <ul class="link_all">
                	<li><h5>Start promoting your campaign</h5></li>
                    <li>
                    	<strong>Share on:</strong>
                    </li>
                </ul>
                <ul class="blog_icon_all">
                	<li><a style="cursor: pointer;" target="_blank" title="Facebook" id="fbIcon" class="facebook">facebook</a></li>
                	<li><a href="http://instagram.com/" target="_blank" title="Instagram" class="instagram">instagram</a></li>
                	<li><a href="https://twitter.com/" target="_blank" title="Twitter" class="twitter">twitter</a></li>
                	<li><a href="https://www.linkedin.com/" target="_blank" title="Linkedin" class="linkedin">linkedin</a></li>
                	<li><a href="https://www.pinterest.com/" target="_blank" title="Pinterest" class="pinterest">pinterest</a></li>
                </ul>
                </div>
                <!--<a href="#" class="step_back" title="Step back">Step back</a>-->
                <!--<a style="cursor: pointer;" class="close_bottom" title="Close">Close</a>-->
            </div><!-- end of tab1/tab_content -->
     </div>  
  </div>