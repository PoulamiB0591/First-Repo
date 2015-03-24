<!--SFPPAGE-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Three</title>
        <link rel="shortcut icon" type="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/image/x-icon" href="img/favicon.ico">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/css/normalize.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/css/reset.css">
        <link type="text/css" rel="stylesheet" href="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/css/main.css">
        <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/js/vendor/modernizr-2.6.2.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript">
        
        function validation() {
            
            var val = '';
                val = $('input[checked=checked]').val();
                
                //alert($('label.r_on').prev('span').text());
                
                var qs = $("#question").text();
                //var value = $('label[class=r_on]').previous().text();
                var value = $('label.r_on').prev('span').text();
                 if(val == 3) {
                        //alert("work now");
                        $.ajax({
            type:"POST",
            data:{val:val,qs:qs,value:value},
            url:"database.php",
            success:function(data){    
               if(data == "1")
                {
                window.location.href = "indexus4.php";
                }
                //alert(data);
            }
        });  
        
                    }
                    else {
                        alert("Please Select a radio button!!");
                    }
            }
        </SFPScript-->
    
    
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--<p>Hello world! This is HTML5 Boilerplate.</p>-->
        
        
        
        
        <div class="main_wrap">
        
        
        
        <section class="main_step4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <header>
                            <a style="cursor: pointer;" title="Indexus" class="logo disabled"><div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/img/logo.png" alt=""><div class="setting-2" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div><div class="setting-2" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div></a>
                            <p class="info">Bel: 020 - 697 20 66<br>Mail: <a class="disabled" href="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/mailto:contact@indexus.nl">contact@indexus.nl</a></p>
                        </header>
                        <div class="main_content">
                            <div id="editable" class="SFPTWO_TEXTEDIT"><h2 class="heading" id="question">Met hoeveel geld<br><span>&nbsp;&nbsp; gaat u beleggen?</span></h2></div>
                            <a class="button_btn disabled" style="cursor: pointer;" title="Volgende stap" onclick="validation();">Volgende stap</a>
                            <a class="vorige_stap disabled" style="cursor: pointer;" title="Vorige stap">Vorige stap</a>
                            <ul class="invest">
                            	<li class="col-lg-2">
                                	<div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/img/bar1.png" alt="" class="img-responsive"><div class="setting-2" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div><div class="setting-2" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                    <div id="editable" class="SFPTWO_TEXTEDIT"><span class="SFPTWO_TAGEDIT explicit_edit" contenteditable="false">€50.000</span><div class="setting-2" id="text" style="display: none;"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div></div>
                                    <label class="label_radio"><input name="radio" id="rd" value="3" type="radio"></label>
                                </li>
                            	<li class="col-lg-2">
                                	<div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/img/bar2.png" alt="" class="img-responsive"><div class="setting-2" style="display: none;"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div><div class="setting-2" style="display: none;"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                    <div style="display: none;" id="editable" class="SFPTWO_TEXTEDIT randtxt_871"><div style="visibility: hidden; border-width: 1px;" id="mceu_13" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application"><div id="mceu_13-body" class="mce-container-body mce-stack-layout"><div style="border-width: 0px 0px 1px;" id="mceu_14" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar"><div id="mceu_14-body" class="mce-container-body mce-flow-layout"><div aria-haspopup="true" role="menuitem" id="mceu_15" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_15"><button class="inputdisabled" id="mceu_15-open" role="presentation" type="button" tabindex="-1"><span>File</span> <i class="mce-caret"></i></button></div><div aria-haspopup="true" role="menuitem" id="mceu_16" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_16"><button class="inputdisabled" id="mceu_16-open" role="presentation" type="button" tabindex="-1"><span>Edit</span> <i class="mce-caret"></i></button></div><div aria-haspopup="true" role="menuitem" id="mceu_17" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_17"><button class="inputdisabled" id="mceu_17-open" role="presentation" type="button" tabindex="-1"><span>View</span> <i class="mce-caret"></i></button></div><div aria-haspopup="true" role="menuitem" id="mceu_18" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_18"><button class="inputdisabled" id="mceu_18-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_19" class="mce-toolbar-grp mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group"><div id="mceu_19-body" class="mce-container-body mce-stack-layout"><div id="mceu_20" class="mce-container mce-toolbar mce-first mce-last mce-stack-layout-item" role="toolbar"><div id="mceu_20-body" class="mce-container-body mce-flow-layout"><div role="group" id="mceu_21" class="mce-container mce-first mce-flow-layout-item mce-btn-group"><div id="mceu_21-body"><div aria-disabled="true" aria-label="Undo" role="button" id="mceu_0" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" aria-labelledby="mceu_0"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div aria-disabled="true" aria-label="Redo" role="button" id="mceu_1" class="mce-widget mce-btn mce-last mce-disabled" tabindex="-1" aria-labelledby="mceu_1"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div></div></div><div role="group" id="mceu_22" class="mce-container mce-flow-layout-item mce-btn-group"><div id="mceu_22-body"><div aria-expanded="false" aria-haspopup="true" role="button" id="mceu_2" class="mce-widget mce-btn mce-menubtn mce-first mce-last" tabindex="-1" aria-labelledby="mceu_2"><button class="inputdisabled" id="mceu_2-open" role="presentation" type="button" tabindex="-1"><span>Formats</span> <i class="mce-caret"></i></button></div></div></div><div role="group" id="mceu_23" class="mce-container mce-flow-layout-item mce-btn-group"><div id="mceu_23-body"><div aria-label="Bold" role="button" id="mceu_3" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_3"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div aria-label="Italic" role="button" id="mceu_4" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_4"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div role="group" id="mceu_24" class="mce-container mce-flow-layout-item mce-btn-group"><div id="mceu_24-body"><div aria-label="Align left" role="button" id="mceu_5" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_5"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div aria-label="Align center" role="button" id="mceu_6" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_6"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div aria-label="Align right" role="button" id="mceu_7" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_7"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div aria-label="Justify" role="button" id="mceu_8" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_8"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div></div></div><div role="group" id="mceu_25" class="mce-container mce-flow-layout-item mce-btn-group"><div id="mceu_25-body"><div aria-label="Bullet list" role="button" id="mceu_9" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_9"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div><div aria-label="Numbered list" role="button" id="mceu_10" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_10"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div><div aria-label="Decrease indent" role="button" id="mceu_11" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_11"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div aria-label="Increase indent" role="button" id="mceu_12" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_12"><button class="inputdisabled" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div></div></div><div role="group" id="mceu_26" class="mce-container mce-last mce-flow-layout-item mce-btn-group"><div id="mceu_26-body"></div></div></div></div></div></div><div style="border-width: 1px 0px 0px;" id="mceu_27" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group"><iframe style="width: 100%; height: 100px; display: block;" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" allowtransparency="true" id="editH2633_ifr" frameborder="0"></iframe></div><div style="border-width: 1px 0px 0px;" id="mceu_28" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group"><div id="mceu_28-body" class="mce-container-body mce-flow-layout"><div id="mceu_29" class="mce-path mce-first mce-flow-layout-item"><div role="button" class="mce-path-item mce-last" data-index="0" tabindex="-1" id="mceu_29-0" aria-level="0">p</div></div><div id="mceu_30" class="mce-last mce-flow-layout-item mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><span aria-hidden="true" style="display: none;" id="editH2633" class="SFPTWO_TAGEDIT explicit_edit" contenteditable="false">€100.000</span><div class="setting-2" id="text" style="display: none;"><a id="editid" style="background: url(&quot;/images/save_btn.png&quot;) repeat scroll 0% 0% transparent;" title="Edit" class="edit classdelme disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div></div>
                                    <label class="label_radio"><input name="radio" id="rd" value="3" type="radio"></label>
                                </li>
                            	<li class="col-lg-2">
                                	<div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/img/bar3.png" alt="" class="img-responsive"><div class="setting-2" style="display: none;"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div><div class="setting-2" style="display: none;"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                    <div id="editable" class="SFPTWO_TEXTEDIT"><span class="SFPTWO_TAGEDIT explicit_edit" contenteditable="false">€250.000</span><div class="setting-2" id="text" style="display: none;"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div></div>
                                    <label class="label_radio"><input name="radio" id="rd" value="3" type="radio"></label>
                                </li>
                            	<li class="col-lg-2">
                                	<div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/img/bar4.png" alt="" class="img-responsive"><div class="setting-2" style="display: none;"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div><div class="setting-2" style="display: none;"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                    <div id="editable" class="SFPTWO_TEXTEDIT"><span class="SFPTWO_TAGEDIT explicit_edit" contenteditable="false">€500.000</span><div class="setting-2" id="text" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div></div>
                                    <label class="label_radio"><input name="radio" id="rd" value="3" type="radio"></label>
                                </li>
                            	<li class="col-lg-2">
                                	<div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/img/bar5.png" alt="" class="img-responsive"><div class="setting-2" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div><div class="setting-2" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                    <div id="editable" class="SFPTWO_TEXTEDIT"><span class="SFPTWO_TAGEDIT explicit_edit" contenteditable="false">€1.000.000</span><div class="setting-2" id="text" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div></div>
                                    <label class="label_radio"><input name="radio" id="rd" value="3" type="radio"></label>
                                </li>
                            	<li class="col-lg-2">
                                	<div class="SFPTWO_IMAGEEDIT"><img src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/img/icon5.png" alt="" class="img-responsive"><div class="setting-2" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div><div class="setting-2" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a><input value="685547599d01fd5815-indexus" id="hid" type="hidden"><input value="0" id="imgCount" type="hidden"></div></div>
                                    <div id="editable" class="SFPTWO_TEXTEDIT"><span class="SFPTWO_TAGEDIT explicit_edit" contenteditable="false">€2.500.000</span><div class="setting-2" id="text" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div><div class="setting-2" id="text" style="display:none"><a title="Edit" class="edit disabled" href="javascript:void(0)"></a><a title="delete" class="delete disabled" href="javascript:void(0)"></a></div></div>
                                    <label class="label_radio"><input name="radio" id="rd" value="3" type="radio"></label>
                                </li><input id="val" name="hiddeninputname" value="" type="hidden">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
		</section>
        <footer class="inside_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    	<ul>
                        	<li><a class="disabled">1</a></li>
                        	<li><a class="disabled">2</a></li>
                        	<li><a class="active disabled">3</a></li>
                        	<li><a class="disabled">4</a></li>
                        	<li><a class="disabled">5</a></li>
                            <li><a class="disabled">6</a></li>
                        </ul>
                    	<a href="http://www.indexus.nl/" target="_blank" class="web_link disabled">www.indexus.nl</a>
                        <p>De Indexus belleggers check is een gratis mobiele app. Indexus is gespecialiseerd in vermogensbeheer en beleggingsadvies.</p>
                    </div>
                </div>
            </div>
		</footer>
        
        
        
        
        
        </div><!-- end of main_wrap -->
        

        <!--SFPScript type="text/javascript">window.jQuery || document.write('<script src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/js/vendor/jquery-1.10.2.min.js"><\/script>')</SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/js/bootstrap.min.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/js/plugins.js"></SFPScript-->
        <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/685547599d01fd5815-indexus/js/main.js"></SFPScript-->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->