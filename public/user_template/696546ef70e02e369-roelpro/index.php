<img src="https://test.scampaigns.com/img/divider.png" id="imgdragable" style="display: none;">
<!--SFPPAGE-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <title>Roel - Welcome to our Website!</title>
        <link rel="shortcut icon" type="image/x-icon" href="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/css/normalize.css">
         <link rel="stylesheet" href="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/css/bootstrap.min.css">
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/css/main.css">
        
        <!-- MAS slider -->
        <link rel="stylesheet" href="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/css/mas-slider.css">
		<link href="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/css/mas-default.css" rel="stylesheet" type="text/css">
		<link href="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/css/mas-part-view.css" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="//test.scampaigns.com/css/templateform.css"> 
       <link rel="stylesheet" href="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/css/jquery.alerts.css"> 
             <script src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/js/vendor/modernizr-2.6.2.min.js"></script>
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
                	<img id="images1" src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/img/logo.jpg" alt=""><!-- end of logo -->
                   <div class="setting-2" style="display: none;"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="696546ef70e02e369-roelpro" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div><div class="setting-2" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="696546ef70e02e369-roelpro" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                      <div class="explicit_edit" contenteditable="false"><a style="cursor: pointor;" title="Nodig je vrienden uit" class="invite disabled" onclick="invite()"><img src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/img/facebook_icon.png" alt=""><span class="explicit_edit" contenteditable="false">Nodig je<br>vrienden uit</span></a><!-- end of invite -->
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
                    <div id="editable" class="SFPTWO_TEXTEDIT autosize" rel="18"><h2 class="SFPTWO_TAGEDIT explicit_edit autosizethis" contenteditable="false">Kies een tegel ...</h2><div class="setting-2" id="text" style="display: none;"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display: none;"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div></div>
                    <div style="display: none;" id="editable" class="SFPTWO_TEXTEDIT randtxt_945"><div style="visibility: hidden; border-width: 1px;" id="mceu_13" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application"><div id="mceu_13-body" class="mce-container-body mce-stack-layout"><div style="border-width: 0px 0px 1px;" id="mceu_14" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar"><div id="mceu_14-body" class="mce-container-body mce-flow-layout"><div aria-haspopup="true" role="menuitem" id="mceu_15" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_15"><button class="inputdisabled" id="mceu_15-open" role="presentation" type="button" tabindex="-1"><span>File</span> <i class="mce-caret"></i></button></div><div aria-haspopup="true" role="menuitem" id="mceu_16" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_16"><button class="inputdisabled" id="mceu_16-open" role="presentation" type="button" tabindex="-1"><span>Edit</span> <i class="mce-caret"></i></button></div><div aria-haspopup="true" role="menuitem" id="mceu_17" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_17"><button class="inputdisabled" id="mceu_17-open" role="presentation" type="button" tabindex="-1"><span>View</span> <i class="mce-caret"></i></button></div><div aria-haspopup="true" role="menuitem" id="mceu_18" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_18"><button class="inputdisabled" id="mceu_18-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_19" class="mce-toolbar-grp mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group"><div id="mceu_19-body" class="mce-container-body mce-stack-layout"><div id="mceu_20" class="mce-container mce-toolbar mce-first mce-last mce-stack-layout-item" role="toolbar"><div id="mceu_20-body" class="mce-container-body mce-flow-layout"><div role="group" id="mceu_21" class="mce-container mce-first mce-flow-layout-item mce-btn-group"><div id="mceu_21-body"><div aria-disabled="true" aria-label="Undo" role="button" id="mceu_0" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" aria-labelledby="mceu_0"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div aria-disabled="true" aria-label="Redo" role="button" id="mceu_1" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" aria-labelledby="mceu_1"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div><div role="group" id="mceu_22" class="mce-container mce-flow-layout-item mce-btn-group"><div id="mceu_22-body"><div aria-haspopup="true" role="button" id="mceu_2" class="mce-widget mce-btn mce-menubtn mce-first mce-last" tabindex="-1" aria-labelledby="mceu_2"><button class="inputdisabled" id="mceu_2-open" role="presentation" type="button" tabindex="-1"><span>Formats</span> <i class="mce-caret"></i></button></div></div></div><div role="group" id="mceu_23" class="mce-container mce-flow-layout-item mce-btn-group"><div id="mceu_23-body"><div aria-label="Bold" role="button" id="mceu_3" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_3"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div aria-label="Italic" role="button" id="mceu_4" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_4"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div role="group" id="mceu_24" class="mce-container mce-flow-layout-item mce-btn-group"><div id="mceu_24-body"><div aria-label="Align left" role="button" id="mceu_5" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_5"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div aria-label="Align center" role="button" id="mceu_6" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_6"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div aria-label="Align right" role="button" id="mceu_7" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_7"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div aria-label="Justify" role="button" id="mceu_8" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_8"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div role="group" id="mceu_25" class="mce-container mce-flow-layout-item mce-btn-group"><div id="mceu_25-body"><div aria-label="Bullet list" role="button" id="mceu_9" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_9"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div><div aria-label="Numbered list" role="button" id="mceu_10" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_10"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div><div aria-label="Decrease indent" role="button" id="mceu_11" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_11"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div aria-label="Increase indent" role="button" id="mceu_12" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_12"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div></div></div><div role="group" id="mceu_26" class="mce-container mce-last mce-flow-layout-item mce-btn-group"><div id="mceu_26-body"></div></div></div></div></div></div><div style="border-width: 1px 0px 0px;" id="mceu_27" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group"><iframe style="width: 100%; height: 100px; display: block;" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" allowtransparency="true" id="editH238_ifr" frameborder="0"></iframe></div><div style="border-width: 1px 0px 0px;" id="mceu_28" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group"><div id="mceu_28-body" class="mce-container-body mce-flow-layout"><div id="mceu_29" class="mce-path mce-first mce-flow-layout-item"><div role="button" class="mce-path-item mce-last" data-index="0" tabindex="-1" id="mceu_29-0" aria-level="0">p</div></div><div id="mceu_30" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><h3 aria-hidden="true" style="display: none;" id="editH238" class="SFPTWO_TAGEDIT explicit_edit" contenteditable="false">... en profileer jezelf als professional</h3><div class="setting-2" id="text" style="display: none;"><a id="editid" style="background: url(&quot;/images/save_btn.png&quot;) repeat scroll 0% 0% transparent;" title="Edit" class="edit classdelme disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div></div>
                </div>
                
                <div class="clearfix"></div>
                <div class="mas-cont col-lg-12">
                <div class="ms-partialview-template" id="partial-view-1">
            <!-- masterslider -->
            <div class="master-slider ms-skin-default" id="masterslider">
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                    <div class="ms-info">
                       
                    </div>  
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/img/2.png" alt="lorem ipsum dolor sit">    
                      <div class="ms-info">
                        
                    </div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/img/3.png" alt="lorem ipsum dolor sit">   
                     <div class="ms-info"></div>
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/img/4.png" alt="lorem ipsum dolor sit">   
                      <div class="ms-info"> </div>  
                </div>
                
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/img/1.png" alt="lorem ipsum dolor sit"> 
                        <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/img/2.png" alt="lorem ipsum dolor sit">   
                       <div class="ms-info"></div> 
                </div>
                <div class="ms-slide">
                    <img src="img/blank.gif" data-src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/img/3.png" alt="lorem ipsum dolor sit"> 
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
                	<a class="disabled" style="cursor: pointer;" id="getprf" onclick="facebookconnect();"><span class="explicit_edit" contenteditable="false">Gebruik mijn</span></a><a href="http://test.scampaigns.com/Frontend/editnew/696546ef70e02e369-roelpro/roelpro#" title="General setting app" class="open3"> </a><a class="disabled" style="cursor: pointer;" id="getprf" onclick="facebookconnect();"><strong class="explicit_edit" contenteditable="false">PROFIELFOTO</strong></a>
                     </p>
                     <form class="upload_fbbt" enctype="multipart/form-data" method="post" id="target" action="run.php">
                    
                     <input value="0" id="takeimgname" name="takeimg" type="hidden">
                     <input id="getvalue" name="getvalue" type="hidden">
                     <input id="getfb" name="getfb" type="hidden">
                     <input class="inputdisabled" name="fileToUpload" id="fileToUpload" value="Upload je eigen FOTO" onchange="showimagepreview(this)" type="file">
                    
                	<p class="explicit_edit" contenteditable="false"><a class="disabled" style="cursor:pointor;"><span class="explicit_edit" contenteditable="false">Upload jgnnnfgngfnnffnnfnffffnfnfnnffnff&nbsp; fffff dbdb d ddd dvd ddvd dd d vddddddd dd eigen</span><strong class="explicit_edit" contenteditable="false">gn</strong></a>
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
          
             <!--SFPScript <script src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/js/jquery.easing.min.js"></SFPScript-->
               <script src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/js/jquery.alerts.js"></script>
               
		<!--SFPScript src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/js/mas.min.js"></SFPScript-->
	<!--SFPScript script src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/js/mas-part.dev.js"></SFPScript-->
        <script src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/js/plugins.js"></script>
       <!--SFPScript src="//test.scampaigns.com/user_template/696546ef70e02e369-roelpro/js/main.js"></SFPScript-->

    
    
     
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
</SFPScript-->