<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
<!--SFPPAGE-->
<!--PHP
       include('../include.php');
          /*PHP DBCONNECT PHP*/
       PHP-->
       

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <title>Roel - Welcome to our Website!</title>
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/css/normalize.css">
         <link rel="stylesheet" href="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/css/bootstrap.min.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/css/main.css">
        
        <!-- MAS slider -->
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/css/mas-slider.css">
		<link href="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/css/mas-default.css" rel="stylesheet" type="text/css">
		<link href="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/css/mas-part-view.css" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="//test.scampaigns.com/css/templateform.css"> 
       <link rel="stylesheet" href="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/css/jquery.alerts.css"> 
      <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></!--SFPScript> 
             <!--SFPScript src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/js/vendor/modernizr-2.6.2.min.js"></!--SFPScript> 
        <!--SFPScript src="https://connect.facebook.net/nl_NL/all.js"></!--SFPScript> 

    



    

    
    <div class=" fb_reset" id="fb-root"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>

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
          <!--SFPhide  <div class="overlay_divsme" style="display:none; opacity:0.40;">
        <img class="loading_img" src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/712.GIF" /> 
        </div> SFPhide-->
        <input id="getslideid" type="hidden">
        	<div class="container-fluid top">
            	<div class="row roel-container">
                <div style="height: 84px; width: 102px;" id="editable" class="SFPTWO_IMAGEEDIT expl tagsimg_1 ui-resizable"><div id="draggable0" class="imagesEditable0321 ui-draggable ui-draggable-handle" style="z-index: 0; position: absolute; display: none;"><div><div class="ui-resizable" id="resizable0" style="z-index:0; height:768px; width:1024px;"><img class="layeredImage" id="images0" src="http://test.scampaigns.com/library/8f5c487cd55f9b8189b49ef22e22d812.jpg" style="height:100%; width:100%; z-index:0;"><div style="z-index: 90;" class="ui-resizable-handle ui-resizable-ne"></div><div style="z-index: 90;" class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se"></div><div style="z-index: 90;" class="ui-resizable-handle ui-resizable-sw"></div><div style="z-index: 90;" class="ui-resizable-handle ui-resizable-nw"></div></div></div></div>
                	<!-- end of logo -->
                   <div class="setting-2" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input value="5525476f0f66cb3110-roelpro" id="hid" type="hidden"><input value="1" id="imgCount" type="hidden"></div><div style="z-index: 90;" class="ui-resizable-handle ui-resizable-s"></div></div>
                      <div class="explicit_edit" contenteditable="false"><a style="cursor: pointor;" title="Nodig je vrienden uit" class="invite disabled" onclick="invite()"><img src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/img/facebook_icon.png" alt=""><span class="explicit_edit" contenteditable="false">Nodig je<br>vrienden uit</span></a><!-- end of invite -->
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->
        	<div class="main_navigation">
             <div class="container-fluid">
            	<div class="roel-container row">
                	<ul>
                    	<li class="explicit_edit enteroff autosize" rel="24" contenteditable="false"><a href="SFP_index" title="Kies je tegel en foto" class="active autosizethis disabled">1) Kies je tegel en foto</a></li>
                    	<li class="explicit_edit enteroff autosize" rel="22" contenteditable="false"><a class="autosizethis disabled" href="spreuk.php" id="spreuk" title="Persoonlijke spreuk">2) Persoonlijke spreuk</a></li>
                    	<li class="explicit_edit enteroff autosize" rel="10" contenteditable="false"><a class="autosizethis disabled" href="bedankt.php" id="Bedankt" title="Bedankt">3) Bedankt</a></li>
                    </ul>
                    </div>
                </div><!-- end of container -->
            </div><!-- end of top -->           
             <div class="main_content">
            	<div class="container-fluid bedankt-wrap">
                <div class="col-lg-12">
                    <div class="SFPTWO_TEXTEDIT autosize tags_1" rel="18"><h2 class="SFPTWO_TAGEDIT explicit_edit autosizethis tag_1" contenteditable="false">Kies een tegel ...</h2><div class="setting-2" id="text" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                    <div class="SFPTWO_TEXTEDIT tags_2"><h3 class="SFPTWO_TAGEDIT explicit_edit tag_2" contenteditable="false">... en profileer jezelf als professional</h3><div class="setting-2" id="text" style="display: none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a></div></div>
                </div>
                
                <div class="clearfix"></div>
                <div class="mas-cont col-lg-12">
                <div class="ms-partialview-template" id="partial-view-1">
            <!-- masterslider -->
            <div class="master-slider ms-skin-default" id="masterslider">
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                    <div class="ms-info">
                       
                    </div>  
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/img/2.png" alt="lorem ipsum dolor sit">    
                      <div class="ms-info">
                        
                    </div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/img/3.png" alt="lorem ipsum dolor sit">   
                     <div class="ms-info"></div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/img/4.png" alt="lorem ipsum dolor sit">   
                      <div class="ms-info"> </div>  
                </div>
                
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                        <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/img/2.png" alt="lorem ipsum dolor sit">   
                       <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/img/3.png" alt="lorem ipsum dolor sit"> 
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
                	<a class="disabled" style="cursor: pointer;" id="getprf" onclick="facebookconnect();"><span class="explicit_edit" contenteditable="false">Gebruik mijn</span><strong class="explicit_edit" contenteditable="false">PROFIELFOTO</strong></a>
                     </p>
                     <form class="upload_fbbt" enctype="multipart/form-data" method="post" id="target" action="run.php">
                    
                     <input value="0" id="takeimgname" name="takeimg" type="hidden">
                     <input id="getvalue" name="getvalue" type="hidden">
                     <input id="getfb" name="getfb" type="hidden">
                     <input class="inputdisabled" name="fileToUpload" id="fileToUpload" value="Upload je eigen FOTO" onchange="showimagepreview(this)" type="file">
                    
                	<p class="explicit_edit" contenteditable="false"><a class="disabled" style="cursor:pointor;"><span class="explicit_edit" contenteditable="false">Upload je eigen</span><strong class="explicit_edit" contenteditable="false">FOTO</strong></a>
                    </p>
                     </form>
                    
                     
                     <form method="post" id="targetfb" action="save.php">
                      
                       <input name="getprflmg" id="getprflmg" type="hidden"> 
                     </form>
                </div><!-- end of btn_blog -->
                <p class="explicit_edit" contenteditable="false"><a href="javascript:void(0)" title="Ga verder" class="continue disabled">Ga verder</a></p><!-- end of continue -->
           
           <div class="form-container jui-checkboxes-container" id="checkboxesInit2">

</div>
           
            </div><!-- end of main_content -->
          
          
            <div class="footer"></div><!-- end of footer -->
        </div><!-- end of main_wrapper -->
          
             <!--SFPScript src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/js/jquery.easing.min.js"></SFPScript-->
               <!--SFPScript src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/js/jquery.alerts.js"></SFPScript-->
               
		<!--SFPScript src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/js/mas.min.js"></SFPScript-->
	<!--SFPScript script src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/js/mas-part.dev.js"></SFPScript-->
        <!--SFPScript src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/js/plugins.js"></SFPScript-->
       <!--SFPScript src="//test.scampaigns.com/user_template/5525476f0f66cb3110-roelpro/js/main.js"></SFPScript-->

    
    
     
                 <!--SFPScript type="text/javascript">
     function reloadthispage()
     {
        jAlert("Ofwel limiet is overschreden of afbeelding is niet gefundeerde");
        window.location.href = 'index.php';
        //top.location.href = 'https://www.facebook.com/waytowork/app_1484924788415270';
        
     }
        var facebookimg = "";
    $(document).ready(function() {
        
        localStorage.removeItem('email');
          localStorage.removeItem('uid');
          localStorage.removeItem('fname');
          localStorage.removeItem('lname');
      //  jAlert(localStorage.getItem('email'));
        $('#spreuk').attr('href','javascript: void(0)');
        $('#Bedankt').attr('href','javascript: void(0)');
        
   $("input[type='file'][name*='fileToUpload']").filter(function(k){
   if($(this).val().length == 0){
          // jAlert("field is empty");
        }
        else{
             jAlert("field is not empty");
        }
   });
  
   $("input:file#fileToUpload").change(function (){
    
    var filename = $(this).val();
       $('#getvalue').val(filename);
       $('#getfb').val('');
        //jAlert("field is not empty");
       
     });
     
       $("input:file#fileToUploadfb").change(function (){
    
       var filename = facebookimg;
       $('#getvalue').val(filename);
       $('#getfb').val('');
        //jAlert("field is not empty");
       
     });
     
     $(".continue").click(function(){
      
        setTimeout('reloadthispage()',20000);
          $('.overlay_div').css('display','block');
        var getfb  = $('#getfb').val();
        var getme = $('#getvalue').val();
       
        if($('#getslideid').val()=='')
        {
            jAlert("Kies een frame");
        }   
        else if( getfb =="" && getme=="")
        {
            jAlert('Neem foto uploaden', 'kennisgeving');
            $('.overlay_div').css('display','none');
            }
            else{
      
        if(getme != ""){
             $('.overlay_divsme').css('display','block');
              $( "#target" ).submit();
          
         
        }
        else if($('#getslideid').val()=='')
        {
            jAlert("Kies een frame");
        }   
        else if(getfb != "" ){
        $('.overlay_divsme').css('display','block');
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
       $('#getslideid').val(getimg);
     $('#takeimgname').val(getimg);  
     localStorage.setItem('takeimgname',getimg);
     
     localStorage.setItem('facebookimg',facebookimg);
    // $.session.set("takeimgname",getimg);
     });
    });
</SFPScript-->