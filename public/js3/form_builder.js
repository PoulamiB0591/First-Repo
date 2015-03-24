
    $(function() 
    {
        
          $('.SFPTWO_EDITFORM .sortable-list').sortable({cancel: ':.explicit_edit'});
        
         $( ".SFPTWO_EDITFORM .sortable-list li" ).mousedown(function() {
    
         //alert("mousedown");
  
    
    
   
        $( "#lisingle" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
    
        drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
               // $('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
                  
        });
        
        
         $( "#liparagraph" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
    
        drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
                //$('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
                  
        });
        $( "#lilabel" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
            
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
                //$('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
        $( "#limultiline" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
               // $('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
         $( "#litextbox" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
               // $('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
         $( "#licheckbox" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
               // $('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
        $( "#liradio" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
               // $('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
        $( "#lidropdown" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
               // $('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
        $( "#limsdropdown" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
                //$('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
        $( "#lidate" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
                //$('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
        
        $( "#litime" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
                //$('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
        
        $( "#liemail" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
                //$('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
        
         $( "#licaptcha" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
                //$('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
        
          $( "#lisubmit" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
               // $('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });
        
         $( "#litextarea" ).draggable({
            
            connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
            helper: "clone",
            revert: "invalid",
              drag: function(event, ui){
                var offset = ui.helper.offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#imgdragable').css('position','absolute');
               // $('#imgdragable').css('left',xPos);
                $('#imgdragable').css('top',yPos);
                  $('#imgdrag').hide(); 
                 $('#imgdragable').show(); 
            }
        });                
        $( ".SFPTWO_EDITFORM .sortable-list" ).sortable({
            revert: true,
     
            sort: function(event, ui) {
                 var xPos = (ui.helper.position().left);
                 var yPos =  (ui.helper.position().top);
                 
                    
                   $('#imgdrag').css('position','relative');
                  //$('#imgdrag').css('left',xPos);
                    $('#imgdrag').css('top',yPos);
                     $('#imgdrag').show(); 
                     if($('.ui-sortable-helper').find('#diveditme').length)
                     { 
                                        
                       //  $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                       // $('.form-container ul li').css('border','none');                    
                      
                        
                        
                     }
                     
                     
                       if($('.ui-sortable-helper').find('.singledrag').length)
                     { 
                       
                         $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="singleline" id="singleline"><span>Single textline</span><img src="/formbuild/singletextline_icon.png" alt="" /></a>')
                          $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }
                     
                      if($('.ui-sortable-helper').find('.multilinedrag').length)
                     { 
                        $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('	<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="multiline" id="multiline"><span>Multi textline</span><img src="/formbuild/multitextline_icon.png" alt="" /></a>')
                         $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }  
                     
                     
                  if($('.ui-sortable-helper').find('.paradrag').length)
                     { 
                        $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a  style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="paragraph" id="paragraph"><span>Parapraph</span><img src="/formbuild/paragraph_icon.png" alt="" /></a>')
                         $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }  
                     
                if($('.ui-sortable-helper').find('.textdrag').length)
                     { 
                        $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="textbox" id="textbox"><span>Input field</span><img src="/formbuild/inputfield_icon.png" alt="" /></a>')
                         $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }                     
                    if($('.ui-sortable-helper').find('.textareadrag').length)
                     { 
                        $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="textarea" id="textarea"><span>Text message</span><img src="/formbuild/textfield_icon.png" alt="" /></a>')
                         $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }      
                     
            if($('.ui-sortable-helper').find('.checkboxdrag').length)
                     { 
                       
                        $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="checkbox" id="checkbox"><span>Checkbox</span><img src="/formbuild/checkbox_icon.png" alt="" /></a>')
                         $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }  
                     
                  if($('.ui-sortable-helper').find('.radioboxdrag').length)
                     { 
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="radio" id="radio"><span>Radio buttons</span><img src="/formbuild/radiobuttons_icon.png" alt="" /></a>')
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }       
                    
                 if($('.ui-sortable-helper').find('.dropdowndrag').length)
                     { 
                       
                       
                                        
                         $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="single" id="single"><span>Dropdown</span><img src="/formbuild/dropdown_icon.png" alt="" /></a>')
                         $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }  
                     
             
                     
          if($('.ui-sortable-helper').find('.multidropdowndrag').length)
                     { 
                       
                                        
                         $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a href="#"><span>MS dropdown</span><img src="/formbuild/msdropdown_icon.png" alt="" /></a>')
                          $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }  
                     
            if($('.ui-sortable-helper').find('.datedrag').length)
                     { 
                       
                                        
                         $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="date" id="date"><span>Date picker</span><img src="/formbuild/datepicker_icon.png" alt="" /></a>')
                         $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }   
                     
                      if($('.ui-sortable-helper').find('.timedrag').length)
                     { 
                       
                                        
                         $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="time" id="time"><span>Timefield</span><img src="/formbuild/timefield_icon.png" alt="" /></a>')
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }    
                     
                     if($('.ui-sortable-helper').find('.emaildrag').length)
                     { 
                       
                                        
                         $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="email" id="email"><span>Email</span><img src="/formbuild/email_icon.png" alt="" /></a>')
                          $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }       
                     
                     
                      if($('.ui-sortable-helper').find('.captchadrag').length)
                     { 
                       
                                        
                         $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="captcha" id="captcha"><span>Captcha</span><img src="/formbuild/captcha_icon.png" alt="" /></a>')
                         $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }       
                     
                     if($('.ui-sortable-helper').find('.submitdrag').length)
                       { 
                       
                                        
                         $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="submit" id="submit"><span>Submit button</span><img src="/formbuild/submitbutton_icon.png" alt="" /></a>')
                         $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }   
                     
                     
                     if($('.ui-sortable-helper').find('.dropdrag').length)
                       { 
                       
                                        
                         $('#lilabelme').css('position','relative');
                        $('#lilabelme').css('top',yPos);
                        $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="submit" id="submit"><span>Submit button</span><img src="/formbuild/dropdown_icon.png" alt="" /></a>')
                          $('#lilabelme').css('top',yPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').css('left',xPos);
                        $('#lilabelme').show();
                      
                        
                        
                     }                                        
                  },
                  
                    stop: function(event, ui) {
                       // alert("ff");
                         $('#imgdragable').hide();
                
                     $('#imgdrag').hide(); 
                      $('#lilabelme').hide();
                     //  $('.form-container ul li').css('border','1px solid #fff;');
                  },
     
            receive: function(event, ui) {
                
                
                    if($("li").hasClass("ui-draggable")){
           
                        
                  var setme = '<div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div>';
                       
                        var html = [];
                        
                         var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
                   var j = parseInt(i) + parseInt(1);
                   var tag = "tag_"+j;
                   var SFPLEBELFORM = '';
              if( $('#SFPLEBELFORM').length )         // use this if you are using id to check
            {
    
                var SFPLEBELFORM= $('#SFPLEBELFORM').val(); 
            }
            else
            {
                SFPLEBELFORM = "notfound";
            }
           
                  
              
               if($(this).find('.ui-draggable').find('#email').length){
                el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT  '+SFPLEBELFORM+' '+tag+' tagdelete" contenteditable="true"><font class="SFPCOLOR">Email</font></p>';
               }
               else{
                  el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT  '+SFPLEBELFORM+' '+tag+' tagdelete" contenteditable="true"><font class="SFPCOLOR">Label</font></p>';
               }
   
        $("#undoredochk").val(j);
        if($(this).find('.ui-draggable').find('#label').length)
        {
             var del = $("#undoredochkdel").val();
                   var SFPLEBELFORM = '';
              if( $('#SFPLEBELFORM').length )         // use this if you are using id to check
            {
    
                var SFPLEBELFORM= $('#SFPLEBELFORM').val(); 
            }
            else
            {
                SFPLEBELFORM = "notfound";
            }
           
                  
            // alert('f');
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
            html.push('<li class="dottedLi SFPTWO_TEXTEDIT getunrelabel"><div id="diveditme" class="labeledit">'+el+'</div>'+setme+'</li>');
              $('#imgdragable').hide();
              
            $(this).find('#label').replaceWith(html.join(''));
             //console.log($(this).data().sortable.currentItem); 
            ($(this).data(). sortable.currentItem.find('#diveditme').trigger('click')) ;
                            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
       
            $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
         setTimeout(function(){    
          $('.getunrelabel').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           }); 
           }, 50);
            setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("getunrelabel");
            }, 70);
        }
        
            else if($(this).find('.ui-draggable').find('#paragraph').length)
        {
             
           var SFPPARAGRAPHFORM = '';
              if( $('#SFPPARAGRAPHFORM').length )         // use this if you are using id to check
            {
    
                 var SFPPARAGRAPHFORM= $('#SFPPARAGRAPHFORM').val();
            }
            else
            {
                SFPPARAGRAPHFORM = "notfound";
            }
           
    
           
             var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
               html.push('<li style="min-height:85px;" class="dottedLi SFPTWO_TEXTEDIT clickgetunresingleline"><div id="labeledit" class="labeledit singledrag">'+el+'</div>'+setme+'</li>');
               
            $('#imgdragable').hide();
              
            $(this).find('#paragraph').replaceWith(html.join(''));
             //console.log($(this).data().sortable.currentItem); 
            ($(this).data(). sortable.currentItem.find('#diveditme').trigger('click')) ;
                            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
             $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
           setTimeout(function(){  
               $('.clickgetunresingleline').each(function(){
             var del = $("#undoredochkdel").val();
             var jk = parseInt(del) + parseInt(1);
                 var tag = "tags_"+jk;  
                 $("#undoredochkdel").val(jk);
                 $(this).addClass(tag);
                 $(this).addClass('texttagdelete');
             });
             }, 50);
              setTimeout(function(){    
              $(".SFPTWO_TEXTEDIT").removeClass("clickgetunresingleline");
              }, 70);
        }
        else if($(this).find('.ui-draggable').find('#singleline').length)
        {
             var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
            
            html.push('<li style="min-height:85px;" class="dottedLi SFPTWO_TEXTEDIT getunresingle"><div id="labeledit" class="labeledit singledrag">'+el+'</div>'+setme+'</li>');
            $('#imgdragable').hide(); 
            $(this).find('#singleline').replaceWith(html.join(''));
            ($(this).data(). sortable.currentItem.find('#labeledit').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
       
                $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
       
        setTimeout(function(){    
         $('.getunresingle').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
           }, 50); 
           setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("getunresingle");
            }, 70);
        }
        
          else if($(this).find('.ui-draggable').find('#multiline').length)
        {
             var del = $("#undoredochkdel").val();
               var SFPMULTILINEFORM = '';
              if( $('#SFPMULTILINEFORM').length )         // use this if you are using id to check
            {
    
                 var SFPMULTILINEFORM= $('#SFPMULTILINEFORM').val();
            }
            else
            {
                SFPMULTILINEFORM = "notfound";
            }
           
            
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
            html.push('<li class="dottedLi SFPTWO_TEXTEDIT getunremulti"><div id="labeledit" class="labeledit multilinedrag">'+el+'</div><div class="checksboxes p_scents multilineme" id="checksboxes_'+random+'"><div id="multiclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><p style="border: 1px solid #eee; padding: 10px; min-height: 30px; text-decoration: underline;" class="opt explicit_edit '+SFPMULTILINEFORM+'" id="1" contenteditable="true"><font   class="SFPCOLOR">Text1</font></p> </div><div class="jui-checkbox-row"></div></div><p id="mepp" class="meline"></p></div>'+setme+'</li>');
                $('#imgdragable').hide(); 
            $(this).find('#multiline').replaceWith(html.join(''));
               ($(this).data(). sortable.currentItem.find('.multilineme').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
       
          //$('.slide_popup1').hide(effect, options, duration);
             $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
            setTimeout(function(){   
            $('.getunremulti').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
         }, 50);
         setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("getunremulti");
            }, 70);
        }         
        
         else if($(this).find('.ui-draggable').find('#textbox').length)
        {
            
             var SFPTEXTFORM = '';
              if( $('#SFPTEXTFORM').length )         // use this if you are using id to check
            {
    
                 var SFPTEXTFORM= $('#SFPTEXTFORM').val();
            }
            else
            {
                SFPTEXTFORM = "notfound";
            }
           
             var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
              var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
            html.push('<li class="dottedLi SFPTWO_TEXTEDIT getunretext"><div id="labeledit" class="labeledit textdrag">'+el+'</div><input type="text" name="" id="txtbox_'+random+'" class="SFPTEXT '+SFPTEXTFORM+'"/>'+setme+'</li>');
            $("#undoredochkdel").val(jk);
             $('#imgdragable').hide(); 
            $(this).find('#textbox').replaceWith(html.join(''));
               ($(this).data(). sortable.currentItem.find('#labeledit').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
           $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
            
             setTimeout(function(){  
             $('.getunretext').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
          }, 50); 
            setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("getunretext");
            }, 70);
        }
        
          else if($(this).find('.ui-draggable').find('#textarea').length)
        {
            //alert("ff");
              var SFPTEXTAREAFORM = '';
              if( $('#SFPTEXTAREAFORM').length )         // use this if you are using id to check
            {
    
                 SFPTEXTAREAFORM = $('#SFPTEXTAREAFORM').val();
            }
            else
            {
                SFPTEXTAREAFORM = "notfound";
            }
             var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
              var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
            html.push('<li class="dottedLi SFPTWO_TEXTEDIT getunretextarea"><div id="labeledit" class="labeledit textareadrag">'+el+'</div><textarea class="SFPAREA '+SFPTEXTAREAFORM+'" style="height:100px;width:304px;" id="txtarea_'+random+'" rows="" cols="" name=""></textarea>'+setme+'</li>');
            $("#undoredochkdel").val(jk);
             $('#imgdragable').hide(); 
            $(this).find('#textarea').replaceWith(html.join(''));
               ($(this).data(). sortable.currentItem.find('#labeledit').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
           $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
             $(this).removeClass('undefined');
             
              setTimeout(function(){    
                   $('.getunretextarea').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
          }, 50); 
           setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("getunretextarea");
            }, 70);
        }
                        
        
           
          else if($(this).find('.ui-draggable').find('#checkbox').length)
        {
            var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
            html.push('<li class="dottedLi SFPTWO_TEXTEDIT getunrelab"><div id="labeledit" class="labeledit addmechk checkboxdrag">'+el+'</div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_'+random+'"><div id="chkclone" name="checkBox"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><span class="checkboxWrapper" style="float: left;margin-right: 5px;"><input class="SFPTWO_TAGEDIT getunre" type="checkbox" id="1" value="option1" name="checkBox[]" > </span> <p class="opt explicit_edit SFPTWO_TAGEDIT getunre" id="1"  style="display:inline-block;" contenteditable="true"><font   class="SFPCOLOR">option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper" style="float: left;margin-right: 5px;"><input id="2" type="checkbox" value="option2" name="checkBox[]" class="SFPTWO_TAGEDIT getunre"></span> <p class="opt explicit_edit SFPTWO_TAGEDIT getunre"  style="display:inline-block;" id="2" contenteditable="true"><font   class="SFPCOLOR">option2</font></p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper" style="float: left;margin-right: 5px;"><input type="checkbox" id="3" value="option3" name="checkBox[]" class="SFPTWO_TAGEDIT getunre"></span><p class="opt explicit_edit SFPTWO_TAGEDIT getunre"  style="display:inline-block;" id="3" contenteditable="true"><font   class="SFPCOLOR">option3</font></p></div></div><p id="mepp" class="pchkadd"></p><div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)">cc</a></div> </div>'+setme+'</li>');
            $('#imgdragable').hide(); 
            $(this).find('#checkbox').replaceWith(html.join(''));
               ($(this).data(). sortable.currentItem.find('.chkboxaddnow').find('.setedit').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
         $('.slide_popup1').hide(effect, options, duration);
             $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
           setTimeout(function(){ 
            $('.getunrelab').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
            }, 50); 
            setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("getunrelab");
            }, 70); 
            
           setTimeout(function(){                      
           $('.getunre').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(2);
               var tag = "tag_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('tagdelete');
           });
             }, 50);
             setTimeout(function(){    
            $(".SFPTWO_TAGEDIT").removeClass("getunre");
            }, 70); 
           }   
        
        else if($(this).find('.ui-draggable').find('#radio').length)
        {
           var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(2);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
            html.push('<li class="dottedLi SFPTWO_TEXTEDIT getunreradio"><div id="labeledit" class="labeledit radioboxdrag">'+el+'</div><div class="checksboxes p_scents selectboxaddnow" id="checksboxes_'+random+'"><div id="radioclone" name="radioName"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><span class="checkboxWrapper"><input type="radio" id="1" value="option1" name="name" class="SFPTWO_TAGEDIT getunreopt" > </span> <p class="opt explicit_edit SFPTWO_TAGEDIT getunreopt" id="1"  style="display:inline-block;" contenteditable="true"><font   class="SFPCOLOR">option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input id="2" type="radio" value="option2" name="name" class=" SFPTWO_TAGEDIT getunreopt" ></span> <p class="opt explicit_edit SFPTWO_TAGEDIT getunreopt" id="2"  style="display:inline-block;" contenteditable="true"><font   class="SFPCOLOR">option2</font></p> </div></div><p id="mepp" class="pselectadd"></p><div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)">cc</a></div> </div>'+setme+'</li>');
            $('#imgdragable').hide(); 
            $(this).find('#radio').replaceWith(html.join('')); 
            ($(this).data(). sortable.currentItem.find('.selectboxaddnow').find('.seteditopt').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
       
        $('.slide_popup1').hide(effect, options, duration);
            $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
            setTimeout(function(){    
                $('.getunreradio').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
               
           });
           }, 50);  
              setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("getunreradio");
            }, 70);  
            
            setTimeout(function(){
             $('.getunreopt').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tag_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('tagdelete');
           });
           
           }, 50);
           
             setTimeout(function(){    
            $(".SFPTWO_TAGEDIT").removeClass("getunreopt");
            }, 70);
        } 
        
        else if($(this).find('.ui-draggable').find('#captcha').length)
        { 
            var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
            var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk); 
            html.push('<li class="dottedLi SFPTWO_TEXTEDIT '+tag+'" rel="capchas"><div id="labeledit" class="labeledit captchadrag">'+el+'</div><div id="divcaptcha"><br/><p id="1">How much is:</p> <input type="text" class="qes"/><br/><p id="2">Answer:</p><input type="text" class="ans"/></div><br/><input type="button" class="btncaptcha" value="Go!"/>'+setme+'</li>');
            $('#imgdragable').hide(); 
            $(this).find('#captcha').replaceWith(html.join(''));
            ($(this).data(). sortable.currentItem.find('.divcaptcha').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
       
        $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
        }  
        
          else if($(this).find('.ui-draggable').find('#time').length)
        {
            var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk); 
            html.push('<li class="dottedLi SFPTWO_TEXTEDIT getunretime"><div id="labeledit" class="labeledit timedrag">'+el+'</div><input type="text" name="timepicker" id="timepicker'+time+'" onclick="timepick('+time+')">'+setme+'</li>');
            $('#imgdragable').hide(); 
            $(this).find('#time').replaceWith(html.join(''));
             ($(this).data(). sortable.currentItem.find('#labeledit').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
       
            $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
            
             setTimeout(function(){  
              $('.getunretime').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
           }, 50); 
              setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("getunretime");
            }, 70);
           
        }      
        
             else if($(this).find('.ui-draggable').find('#single').length)
        {
             var SFPDROPDOWNFORM = '';
              if( $('#SFPDROPDOWNFORM').length )         // use this if you are using id to check
            {
    
                var SFPDROPDOWNFORM= $('#SFPDROPDOWNFORM').val();
            }
            else
            {
                SFPDROPDOWNFORM = "notfound";
            }
            
           var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
            html.push('<li style="min-height:109px" class="dottedLi SFPTWO_TEXTEDIT getunredrop">'+el+'<div  class="dropdowndrag"><select class="select '+SFPDROPDOWNFORM+'" id="hours'+random+'" style="font-family: times new roman;font-size: 15px; height: 30px;margin-bottom: 10px;width: 120px;">'+'<option value="0">Select</option>'+'<option id="1" value="option1">option1</option>'+'<option id="2" value="option2">option2</option>'+'</select><div class="seteditdrop" onclick="selectboxclick(this)"><a title="edit" class="editnow" href="javascript:void(0)">cc</a></div> </div>'+setme+'</li>');
            $('#imgdragable').hide(); 
             $(this).find('#single').replaceWith(html.join(''));
              ($(this).data(). sortable.currentItem.find('.dropdowndrag').find('.seteditdrop').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
         $('.slide_popup1').hide(effect, options, duration);
             $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide();
           
           setTimeout(function(){  
                $('.getunredrop').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });   
            }, 50); 
            setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("getunredrop");
            }, 70); 
           } 
          else if($(this).find('.ui-draggable').find('#date').length)
        {
           var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
            html.push('<li class="dottedLi SFPTWO_TEXTEDIT getunredate"><div id="labeledit" class="labeledit datedrag">'+el+'</div><input type="text" name="" id="datepicker'+count+'" onclick="datepick('+count+')">'+setme+'</li>');
             $('#imgdragable').hide(); 
            $(this).find('#date').replaceWith(html.join(''));
            ($(this).data(). sortable.currentItem.find('#labeledit').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
           $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
            setTimeout(function(){
                $('.getunredate').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });     
           
             }, 50); 
           setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("getunredate");
            }, 70); 
        }  
        
         else if($(this).find('.ui-draggable').find('#email').length)
        {
            var del = $("#undoredochkdel").val();
              var SFPEMAILFORM = '';
              if( $('#SFPEMAILFORM').length )         // use this if you are using id to check
            {
    
                 var SFPEMAILFORM= $('#SFPEMAILFORM').val();
            }
            else
            {
                SFPEMAILFORM = "notfound";
            }
          
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
            html.push('<li class="dottedLi SFPTWO_TEXTEDIT getunreemail"><div id="labeledit" class="labeledit emaildrag">'+el+'</div><input required type="email" name="" id="email_'+random+'" class="SFPEMAIL '+SFPEMAILFORM+'">'+setme+'</li>');
             
             $('#imgdragable').hide(); 
            $(this).find('#email').replaceWith(html.join(''));
            ($(this).data(). sortable.currentItem.find('#labeledit').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
       
               $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
            setTimeout(function(){
                 $('.getunreemail').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           }); 
            }, 50);
           setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("getunreemail");
            }, 70);
           
             
        }     
        
           else if($(this).find('.ui-draggable').find('#submit').length)
        {
            var del = $("#undoredochkdel").val();
             var SFPSUBMITFORM = '';
              if( $('#SFPSUBMITFORM').length )         // use this if you are using id to check
            {
    
               var SFPSUBMITFORM= $('#SFPSUBMITFORM').val();
            }
            else
            {
                SFPSUBMITFORM = "notfound";
            }
            
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
            html.push('<br/><br/><li class="dottedLi SFPTWO_TEXTEDIT getunresubmit"><div id="getbtnme" class="submitdrag"><input class="inputdisabled '+SFPSUBMITFORM+'" type="submit" name="submit" value="Submit"></div>'+setme+'</li>');
             $('#imgdragable').hide(); 
            $(this).find('#submit').replaceWith(html.join(''));
             ($(this).data(). sortable.currentItem.find('#getbtnme').trigger('click')) ;
            var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
       
            $('.slide_popup1').hide(effect, options, duration);
                $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
           setTimeout(function(){   
                 $('.getunresubmit').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });   
            }, 50);
           setTimeout(function(){   
              $(".SFPTWO_TEXTEDIT").removeClass("getunresubmit");
            }, 70);
        }   
              
        $('.sfpLicnt').val('+1');
                    }
                
              
            }
        });
    
   });
        //Dynamic html add on drag
  
//    $('.SFPTWO_EDITFORM .sortable-list li').each ( function(){
//      $(this)[0].click = function() {
//          this.focus();
//          // alert("fdf");
//            
//      };
//     
//  });
// 


 
   $('body').on('click', '.explicit_edit', function() {
    $(this).attr('contenteditable','true');
    //alert("hhg");
      $(".SFPTWO_EDITFORM .sortable-list").removeClass('ui-draggable');
      $(".SFPTWO_EDITFORM .sortable-list").removeClass('ui-sortable');
       $(".SFPTWO_EDITFORM .sortable-list li").removeClass('ui-draggable');  
        $(this).parent().parent().parent().trigger('click');  
      });      
    
    
    
        
        $('body').on('click',".setedit", function(event) {
          
             $("#tab_4_new").html("");
              $("#tab_5_new").html("");
              $("#tab_6_new").html("");
              $("#tab_7_new").html("");
            $(".checksboxes").removeClass('editmyopt');
            $(this).parent().addClass('editmyopt');
            var res = $(this).parent().find('.jui-checkbox-row').length;
            $('div').removeClass('adding');
             $(this).parent().addClass("adding");
            //alert(res);
            var htm ="";
            var htms = "<ul id='ultab'>";        
            $("#hiddens").val(res);
            $(this).parent().find(".opt").each(function(){
               var i= $(this).attr('id');
               //alert(i);
               var hm = $(this).text();
              // alert(hm);
            
              htm = htm+"<li><input type='text' value='"+hm+"' id='"+i+"' /><a href='javascript:void(0)' onclick='removenews(this,"+i+")'><img class='minus' src='http://test.scampaigns.com/img/minus.png'/></a></li>";  
             // alert(htm);
    
            });
        
                        
            //htm = htm+"<div id='newadd'>Add new</div>";
            $("#ultab").addClass("addingtab");
            $("#tab_3_new").html(htms+htm+'</ul><a href="javascript:void(0)" id="addScnt" onclick="addnews(this,'+res+')">Add</a>');
            $("#editforme2").hide(); 
            $("#editforme3").hide(); 
            $("#editforme4").hide(); 
            
            $("#editformel").trigger('click'); 
                   var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
               $("#tab_4_new").hide();
              $("#tab_5_new").hide();
              $("#tab_6_new").hide();
              $("#tab_7_new").hide();
           $('.slide_popup1').hide(effect, options, duration);
            $('.slide_popup2').toggle(effect, options, duration);
    
            });
            
            
     
           
          
        
        
             $('body').on('click',"#tab1new", function(event) {
               
                $("#tab_4_new").hide();
              $("#tab_5_new").hide();
              $("#tab_6_new").hide();
              $("#tab_7_new").hide();
              $("#tab_3_new").hide();
                
                });
                 $('body').on('click',"#tab2new", function(event) {
               
                $("#tab_4_new").hide();
              $("#tab_5_new").hide();
              $("#tab_6_new").hide();
              $("#tab_7_new").hide();
              $("#tab_3_new").hide();
                
                });
                $('body').on('click',".multilineme", function(event) {
                 /*
             $("#tab_4_new").html("");
              $("#tab_5_new").html("");
              $("#tab_6_new").html("");
              $("#tab_7_new").html("");
            $(".checksboxes").removeClass('editmyopt');
            $(this).addClass('editmyopt');
            var res = $(this).find('.jui-checkbox-row').length;
         $(this).addClass('editmyopt');
            var res = $(this).find('.jui-checkbox-row').length;
            $('div').removeClass('addingmulti');
             $(this).addClass("addingmulti");
            //alert(res);
            var htm ="";
            var htms = "<ul id='ultab'>";        
            $("#hiddens").val(res);
            $(this).find(".opt").each(function(){
               var i= $(this).attr('id');
               //alert(i);
               var hm = $(this).text();
            //   alert(hm);  
                
              htm = htm+"<li><label>Put Your Text:</label><input type='text' value='"+hm+"' id='"+i+"' /><a href='javascript:void(0)' onclick='removemulti(this,"+i+")'><img class='minus' src='http://test.scampaigns.com/img/minus.png'/></a></li>";  
            });
            //htm = htm+"<div id='newadd'>Add new</div>";
            $("#ultab").addClass("addingtab");
            $("#tab_3_new").html(htms+htm+'</ul><a href="javascript:void(0)" id="addScntmemulti" onclick="addmulti(this,'+res+')">Add</a>');
            $("#editforme2").hide(); 
            $("#editforme3").hide(); 
            $("#editforme4").hide(); 
            
            $("#editformel").trigger('click'); 
    
               var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
              $("#tab_4_new").hide();
              $("#tab_5_new").hide();
              $("#tab_6_new").hide();
              $("#tab_7_new").hide();
           // $('.slide_popup1').toggle(effect, options, duration);
            $('.slide_popup2').toggle(effect, options, duration);
               */});
            
            
                $('body').on('click',".seteditopt", function(event) {
             $("#tab_4_new").html("");
              $("#tab_5_new").html("");
              $("#tab_6_new").html("");
              $("#tab_7_new").html("");
            $(".checksboxes").removeClass('editmyopt');
            $(this).parent().addClass('editmyopt');
            var res = $(this).parent().find('.jui-checkbox-row').length;
           $(this).parent().addClass('editmyopt');
            var res = $(this).parent().find('.jui-checkbox-row').length;
            $('div').removeClass('addingselect');
             $(this).parent().addClass("addingselect");
            //alert(res);
            var htm ="";
            var htms = "<ul id='ultab'>";        
            $("#hiddens").val(res);
           $(this).parent().find(".opt").each(function(){
               var i= $(this).attr('id');
               //alert(i);
               var hm = $(this).text();
            //   alert(hm);   var hm = $(this).find('.jui-checkbox-row').find(".opt#"+i).html();
               
                
              htm = htm+"<li><input type='text' value='"+hm+"' id='"+i+"' /><a href='javascript:void(0)' onclick='removeselect(this,"+i+")'><img class='minus'src='http://test.scampaigns.com/img/minus.png'/></a></li>";  
            });
            //htm = htm+"<div id='newadd'>Add new</div>";
            $("#ultab").addClass("addingtab");
            $("#tab_3_new").html(htms+htm+'</ul><a href="javascript:void(0)" id="addScntme" onclick="addselect(this,'+res+')">Add</a>');
            $("#editforme2").hide(); 
            $("#editforme3").hide(); 
            $("#editforme4").hide(); 
            
            $("#editformel").trigger('click'); 
               var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
             $("#tab_4_new").hide();
              $("#tab_5_new").hide();
              $("#tab_6_new").hide();
              $("#tab_7_new").hide();
           // $('.slide_popup1').toggle(effect, options, duration);
            $('.slide_popup2').toggle(effect, options, duration);
    
            });
            
            $("#tab_3_new").find("input[type=text]").live("keyup",function(){
               
                var num = $(this).val();
               var ids = $(this).attr('id');    
           $(".editmyopt").find(".opt#"+ids).html(num);
           if($(".editmyopt").find(".checkboxWrapper").find("input[type=checkbox]#"+ids).length)
           {
            $(".editmyopt").find(".checkboxWrapper").find("input[type=checkbox]#"+ids).val(num);
             var valme= $(".editmyopt").find(".checkboxWrapper").find("input[type=checkbox]#"+ids).val();
           }
           else if($(".editmyopt").find(".checkboxWrapper").find("input[type=radio]#"+ids).length)
           {
            $(".editmyopt").find(".checkboxWrapper").find("input[type=radio]#"+ids).val(num);
           //var valme= $(".editmyopt").find(".checkboxWrapper").find("input[type=radio]#"+ids).val();
            //alert(valme);
           }
           
           // alert(valme);
         //  alert(num);
          
                
            });
            
             $("#tab_4_new").find("input[type=text]").live("keyup",function(){
               
                var num = $(this).val();
               var ids = $(this).attr('id');    
           $(".editmyoptme").find("p").html(num);
          //  $(".editmyoptme").find(".checkboxWrapper").find("input[type=radio]#"+ids).val(num);
          //  var valme= $(".editmyoptme").find(".checkboxWrapper").find("input[type=radio]#"+ids).val();
           // alert("valme");
          
                
            });
            
               $("#tab_5_new").find("#id").live("keyup",function(){
               
                var num = $(this).val();
               var ids = $(this).attr('id');    
           $(".editmybtn").find("input[type=submit]").val(num);
          
                
            });
            
               $("#tab_5_new").find("#href").live("keyup",function(){
               
                var num = $(this).val();
               var ids = $(this).attr('id');    
           $(".editmybtn").find("input[type=submit]").attr('href',num);
          
                
            });
            
              $("#tab_6_new").find("input[type=text]").live("keyup",function(){
               
                var num = $(this).val();
               var ids = $(this).attr('id');    
           $(".editcaptcha").find("p#"+ids).html(num);
          
                
            });
             $("#tab_7_new").find("input[type=text]").live("keyup",function(){
               
                var num = $(this).val();
               var ids = $(this).attr('id');    
           $(".editlabelme").find("p").html(num);
          
                
            });
            
/**
 *             $('body').on('click',"#diveditme", function(event) {
 *                $("#tab_3_new").html("");
 *                 $("#tab_5_new").html("");
 *                 $("#tab_6_new").html("");
 *             $(".labeledit").removeClass('editmyoptme');
 *             $(this).addClass('editmyoptme');
 *             var htm = "";        
 *            
 *                 var hm = $(this).find("p").html();
 *                
 *                   var res = $(this).find('p').length;
 *              for(var i=1;i<=res;i++)
 *             {
 *                 var hm = $(this).find("p").html();
 *                
 *                 
 *               htm = htm+"<li><label>Put Your Text:</label><input type='text' value='"+hm+"' id='"+i+"' /></li>";  
 *             }
 *            
 *                $("#tab_4_new").html(htm);
 *                $("#editforme1").hide(); 
 *                $("#editforme3").hide(); 
 *                 $("#editforme4").hide(); 
 *     
 *                $("#editforme2").trigger('click');
 *                        var effect = 'slide';
 *     
 *         // Set the options for the effect type chosen
 *         var options = { direction: 'right' };
 *     
 *         // Set the duration (default: 400 milliseconds)
 *         var duration = 700;
 *            $("#tab_3_new").hide();
 *               $("#tab_5_new").hide();
 *               $("#tab_6_new").hide();
 *               $("#tab_7_new").hide();
 *             $('.slide_popup1').toggle(effect, options, duration);
 *             $('.slide_popup2').toggle(effect, options, duration);
 *             });
 */
            
            
              
            
                  $('body').on('click',"#divcaptcha", function(event) {
               $("#tab_3_new").html("");
                $("#tab_5_new").html("");
                 $("#tab_4_new").html("");
            $("#diveditme").removeClass('editcaptcha');
            $(this).addClass('editcaptcha');
            var htm = "";        
           
                var hm = $(this).find("p").html();
               
                  var res = $(this).find('p').length;
             for(var i=1;i<=res;i++)
            {
                var hm = $(this).find("p#"+i).html();
               
                
              htm = htm+"<li><input type='text' value='"+hm+"' id='"+i+"' /></li>";  
            }
           
               $("#tab_6_new").html(htm);
               $("#editforme1").hide(); 
               $("#editforme3").hide(); 
               $("#editforme2").hide();
              
    
               $("#editforme4").trigger('click');
                         var effect = 'slide';
    
        // Set the options for the effect type chosen
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
           $("#tab_4_new").hide();
              $("#tab_5_new").hide();
              $("#tab_3_new").hide();
              $("#tab_7_new").hide();
            //$('.slide_popup1').toggle(effect, options, duration);
            $('.slide_popup2').toggle(effect, options, duration);
            });
            
     $('body').on('click',"#getbtnme", function(event) {
               $("#tab_3_new").html("");
                $("#tab_4_new").html("");
                $("#tab_6_new").html("");
            $("#getbtnme").removeClass('editmybtn');
            $(this).addClass('editmybtn');
            var htm = "";        
           
                var hm = $(this).find("input[type=submit]").val();
               
                  var res = $(this).find('input[type=submit]').length;
             for(var i=1;i<=res;i++)
            {
                var hm = $(this).find("input[type=submit]").val();
               
                //<li><label>Put Button's Action:</label><input type='text' value='' id='href' /></li> //need to be added
              htm = htm+"<ul><li><label>Button Text:</label><input type='text' value='"+hm+"' id='id' /></li></ul>";  
            }
           
               $("#tab_5_new").html(htm);
               $("#editforme1<br />").hide(); 
               $("#editforme2").hide();
                $("#editforme4").hide(); 
     
               $("#editforme3").trigger('click');
               var effect = 'slide';
    
        // Set the options for the effect type chosenswitch
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
             $("#tab_4_new").hide();
              $("#tab_3_new").hide();
              $("#tab_6_new").hide();
              $("#tab_7_new").hide();
           // $('.slide_popup1').toggle(effect, options, duration);
             $('.slide_popup1').hide(effect, options, duration);
            $('.slide_popup2').toggle(effect, options, duration);
            });
              
              
     
        
           }); 
       
       
//Dynamic html add on click
function chechTypeAndAdd(value)
        {
	  $('.sfpLicnt').val('+1');
               
                   var htm = $(".wrapper").html();
                    var base_url = window.location.origin;
                    var uri = document.URL;
                     var res = uri.split("/");
                      $.ajax({
                        type:'POST',
                        data:{html:htm},
                        url: base_url+'/Ajaxcall/save/'+res[5],
                        success:function(data){
                            $("#hiddens").val(data);
                            
                        }
                        });
                        
            
                var set = '<div id="ullidrag" class="ullidrag" style="display:none cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div>';
                
                var setme = '<div id="ullidrag" class="ullidrag" style="display:none cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div>';
                
                AddContainer = "";
                   var minNumbesr = 0000; // The minimum number you want
                    var maxNumbesr = 1000; // The maximum number you want
                   var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr); 
                   var i = $("#undoredochk").val(); 
                   var j = parseInt(i) + parseInt(1);
                   var tag = "tag_"+j;
            
                   if(value == 'email') {   
                       var SFPLEBELFORM= $('#SFPLEBELFORM').val(); 
                           el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+' '+tag+' tagdelete" contenteditable="true"><font   class="SFPCOLOR">Email</font></p>';
                          }
                          else{
                                var SFPLEBELFORM= $('#SFPLEBELFORM').val(); 
                           el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+' '+tag+' tagdelete" contenteditable="true"><font   class="SFPCOLOR">Label</font></p>';
                          }
              
 
        $("#undoredochk").val(j);
        
        
        
                switch(value){
                    case 'label':
                    
                    var SFPLEBELFORM = '';
              if( $('#SFPLEBELFORM').length )         // use this if you are using id to check
            {
    
                var SFPLEBELFORM= $('#SFPLEBELFORM').val();
            }
            else
            {
                SFPLEBELFORM = "notfound";
            }
            
                    
                     var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                     var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber); 
                    //var del = $("#undoredochkdel").val(); 
                   //var jk = parseInt(del) + parseInt(1);
                  // var tag = "tag_"+jk; 
                  
             
                    AddContainer = '<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT clickgetunrelabel '+SFPLEBELFORM+'"><div id="labeledit"  class="labeledit">'+el+'</div>'+setme+'</li>';
                     //$("#undoredochkdel").val(jk);
                
                    setTimeout(function(){     
                   ($('ul.sortable-list').children('li').last().find('#labeledit').trigger('click'));
                     $('explicit_edit').attr('contenteditable','true');                 
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                   // $('.slide_popup1').toggle(effect, options, duration);
                   // $('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                  
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
            
            setTimeout(function(){  
                $('.clickgetunrelabel').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
           }, 50);
             setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunrelabel");
            }, 70);

            
                        break;
                    case 'email':
                    
                  //  alert("abcd");
                     var SFPEMAILFORM = '';
              if( $('#SFPEMAILFORM').length )         // use this if you are using id to check
            {
    
                   var SFPEMAILFORM= $('#SFPEMAILFORM').val();
            }
            else
            {
                SFPEMAILFORM = "notfound";
            }
                   
                     var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                     var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                    AddContainer = '<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT clickgetunreemail"><div id="labeledit"  class="labeledit emaildrag">'+el+'</div><input required type="email" name="" id="email_'+random+'"  class="SFPEMAIL '+SFPEMAILFORM+'">'+setme+'</li>';
                    setTimeout(function(){     
                   ($('ul.sortable-list').children('li').last().find('#labeledit').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                   // $('.slide_popup1').toggle(effect, options, duration);
                   // $('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                     
                             
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
            setTimeout(function(){    
               $('.clickgetunreemail').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
               }, 50);
           setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunreemail");
            }, 70);

                        break;            
                    case 'textbox':
                    
                  var SFPTEXTFORM = '';
              if( $('#SFPTEXTFORM').length )         // use this if you are using id to check
            {
    
                   var SFPTEXTFORM= $('#SFPTEXTFORM').val();
            }
            else
            {
                SFPTEXTFORM = "notfound";
            }
                   
                     
                     var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                     var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                        AddContainer = '<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT clickgetunretextbox"><div id="labeledit" class="labeledit textdrag">'+el+'</div><input type="text" name="" id="txtbox_'+random+'" class="SFPTEXT '+SFPTEXTFORM+'"/>'+setme+'</li>';
                        
                        
                    setTimeout(function(){     
                   ($('ul.sortable-list').children('li').last().find('#labeledit').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                   // $('.slide_popup1').toggle(effect, options, duration);
                   // $('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                     
                             
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
            setTimeout(function(){
            $('.clickgetunretextbox').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
           }, 50); 
                  setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunretextbox");
            }, 70);
                        break;
                    case 'password':
                    
                     var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                     var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                        AddContainer = '<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT '+tag+'">'+el+'<input type="password" name="" id="pass_'+random+'">'+setme+'</li>';
                 setTimeout(function(){     
                   ($('ul.sortable-list').children('li').last().find('#labeledit').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                  //  $('.slide_popup1').toggle(effect, options, duration);
                  //  $('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                     
                             
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
                        break;
                    case 'checkbox':
                    
                     var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                     var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                        AddContainer = '<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT clickgetunrechk"><div id="labeledit" class="labeledit addmechk checkboxdrag">'+el+'</div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_'+random+'"><div id="chkclone" name="checkBox"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><span class="checkboxWrapper" style="float: left;margin-right: 5px;"><input type="checkbox" value="1" name="checkBox[]" id="1" class=" SFPTWO_TAGEDIT clickgetunreoptchk"> </span> <p class="opt explicit_edit SFPTWO_TAGEDIT clickgetunreoptchk" id="1" contenteditable="true"  style="display:inline-block;"><font   class="SFPCOLOR">option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper" style="float: left;margin-right: 5px;"><input id="2" type="checkbox" value="2" name="checkBox[]" class="SFPTWO_TAGEDIT clickgetunreoptchk"></span> <p class="opt explicit_edit SFPTWO_TAGEDIT clickgetunreoptchk"  style="display:inline-block;" id="2" contenteditable="true"><font   class="SFPCOLOR">option2</font></p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper" style="float: left;margin-right: 5px;"><input id="3" type="checkbox" value="3" name="checkBox[]" class="SFPTWO_TAGEDIT clickgetunreoptchk"></span><p class="opt explicit_edit SFPTWO_TAGEDIT clickgetunreoptchk"  style="display:inline-block;" id="3" contenteditable="true"><font   class="SFPCOLOR">option3</font></p></div></div><p id="mepp" class="pchkadd"></p><div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)">cc</a></div></div>'+setme+'</li>';
              setTimeout(function(){     
                   ($('ul.sortable-list').children('li').last().find('.chkboxaddnow').find('.setedit').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                   // $('.slide_popup1').toggle(effect, options, duration);
                   // $('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                            
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
           
            setTimeout(function(){
              $('.clickgetunrechk').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
             
           });
           }, 50);
             setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunrechk");
            }, 70);
            
            setTimeout(function(){
             $('.clickgetunreoptchk').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tag_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
                 $(this).addClass('tagdelete');
           });
           
           }, 50);
           
            setTimeout(function(){    
            $(".SFPTWO_TAGEDIT").removeClass("clickgetunreoptchk");
            }, 70);
                        break;
                    case 'radio':
                    
                     var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                     var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                   
                   
                        AddContainer = '<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT clickgetunreradio"><div id="labeledit" class="labeledit radioboxdrag">'+el+'</div><div class="checksboxes p_scents selectboxaddnow" id="checksboxes_'+random+'"><div id="radioclone" name="radioName"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><span class="checkboxWrapper"><input id="1" type="radio" value="option1" name="name" class=" SFPTWO_TAGEDIT clickgetunreopt"> </span> <p class="opt explicit_edit SFPTWO_TAGEDIT clickgetunreopt"  style="display:inline-block;" id="1" contenteditable="true"><font   class="SFPCOLOR">option1</font></p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="radio" value="option2" id="2" name="name" class="SFPTWO_TAGEDIT clickgetunreopt" ></span> <p class="opt explicit_edit SFPTWO_TAGEDIT clickgetunreopt" id="2" contenteditable="true"  style="display:inline-block;"><font   class="SFPCOLOR">option2</font></p> </div></div><p id="mepp" class="pselectadd"></p><div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)">cc</a></div></div>'+setme+'</li>';
              setTimeout(function(){     
                   ($('ul.sortable-list').children('li').last().find('.selectboxaddnow').find('.seteditopt').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                    //$('.slide_popup1').toggle(effect, options, duration);
                    //$('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                            
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
           setTimeout(function(){  
               $('.clickgetunreradio').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
          }, 50); 
          
           setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunreradio");
            }, 70);
            
            
            setTimeout(function(){
             $('.clickgetunreopt').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tag_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('tagdelete');
           });
           
           }, 50);
           
             setTimeout(function(){    
            $(".SFPTWO_TAGEDIT").removeClass("clickgetunreopt");
            }, 70);
            
                        break;
                    case 'textarea':
                    
                      var SFPTEXTAREAFORM = '';
              if( $('#SFPTEXTAREAFORM').length )         // use this if you are using id to check
            {
    
                    var SFPTEXTAREAFORM= $('#SFPTEXTAREAFORM').val();
            }
            else
            {
                SFPTEXTAREAFORM = "notfound";
            }
           
                var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                     var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                        AddContainer = '<li class="dottedLi draggable SFPTWO_TEXTEDIT clickgetunretextarea"><div id="labeledit" class="labeledit textareadrag">'+el+'</div><textarea class="'+SFPTEXTAREAFORM+'" style="height:100px;width:304px;" id="txt_'+random+'" rows="" cols="" name=""></textarea>'+setme+'</li>';
                           var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                   // $('.slide_popup1').toggle(effect, options, duration);
                  //  $('.slide_popup2').toggle(effect, options, duration);
                            
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
            setTimeout(function(){         
            $('.clickgetunretextarea').each(function(){
                //alert($(this).html());
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
              $(this).addClass('texttagdelete');
           });
           }, 50);
           
            setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunretextarea");
            }, 70);

            
                        break;
                   case 'captcha':
                   
                    var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                    $("#hide").val(capcha);
                    var res = $("#hide").val();
                   if($('#captcha').attr('rel')=='captcha')
                   {
                    
                    var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                        AddContainer = '<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT" rel="capchas"><div id="labeledit" class="labeledit paradrag">'+el+'</div><div id="divcaptcha"><br/><p id="1">How much is:</p> <input type="text" class="qes"/><br/><p id="2">Answer:</p><input type="text" class="ans"/></div><br/><input type="button" class="btncaptcha" value="Go!"/>'+setme+'</li>';
                        $('#captcha').attr('rel','');
                    }
                    capcha += 1;
                    $("#hide").val(capcha);
                      setTimeout(function(){     
                   ($('ul.sortable-list').children('li').last().find('#divcaptcha').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                    //$('.slide_popup1').toggle(effect, options, duration);
                   // $('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                            
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
            
          
                        break;     
                  case 'single':
                  
                          var SFPDROPDOWNFORM = '';
              if( $('#SFPDROPDOWNFORM').length )         // use this if you are using id to check
            {
    
                 var SFPDROPDOWNFORM= $('#SFPDROPDOWNFORM').val();
            }
            else
            {
                SFPDROPDOWNFORM = "notfound";
            }
           
                   
                   var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                    var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                        AddContainer = '<li style="min-height:109px" class="dottedLi ui-draggable SFPTWO_TEXTEDIT clickgetunredrop">'+el+'<div class="dropdowndrag"><select  class="select '+SFPDROPDOWNFORM+'" id="hours'+random+'" style="font-family: times new roman;font-size: 15px; height: 30px;margin-bottom: 10px;width: 120px;">'+'<option value="0">Select</option>'+'<option id="1" value="option1">option1</option>'+'<option id="2" value="option2">option2</option>'+'</select><div class="seteditdrop" onclick="selectboxclick(this)"><a title="edit" class="editnow" href="javascript:void(0)">cc</a></div> </div>'+setme+'</li>';
                setTimeout(function(){    
              ($('ul.sortable-list').children('li').last().find('.dropdowndrag').find('.seteditdrop').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                  // $('.slide_popup1').toggle(effect, options, duration);
                    //$('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                            
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           setTimeout(function(){    
             $('.clickgetunredrop').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
          }, 50); 
           setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunredrop");
            }, 70);
                        break;  
                   case 'mselect':
                   
                    var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                    var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                        AddContainer = '<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT '+tag+'">'+el+'<dl class="dropdown"> <dt><a style="cursor:pointer;"><span class="hida">Select</span> <p class="multiSel"></p>  </a></dt> <dd> <div class="mutliSelect"><ul><li><input type="checkbox" value="Apple" />Apple</li><li><input type="checkbox" value="Blackberry" />Blackberry</li> </ul></div></dd></dl>'+setme+'</li>';
                           var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                   // $('.slide_popup1').toggle(effect, options, duration);
                   // $('.slide_popup2').toggle(effect, options, duration);
                            
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
                        break;           
                     case 'date':  
                     
                      var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;    
                    AddContainer = '<li class="dottedLi SFPTWO_TEXTEDIT clickgetunredate"><div id="labeledit" class="labeledit datedrag">'+el+'</div><input type="text" name="" id="datepicker'+count+'" onclick="datepick('+count+')">'+setme+'</li>';
                      //$( "#datepicker" ).datepicker();
                    count += 1; 
                        setTimeout(function(){    
                      ($('ul.sortable-list').children('li').last().find('#labeledit').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                    //$('.slide_popup1').toggle(effect, options, duration);
                   // $('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                            
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
           setTimeout(function(){    
            $('.clickgetunredate').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
           }, 50);
             setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunredate");
            }, 70);
                
                        break;
                   case 'time':
                   
                    var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                    AddContainer = '<li class="dottedLi ui-draggable SFPTWO_TEXTEDIT clickgetunretime"><div id="labeledit" class="labeledit timedrag">'+el+'</div><input type="text" name="timepicker" id="timepicker'+time+'" onclick="timepick('+time+')">'+setme+'</li>';
                      //$( "#datepicker" ).datepicker();
                    time += 1;
                      setTimeout(function(){    
                      ($('ul.sortable-list').children('li').last().find('#labeledit').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                  //  $('.slide_popup1').toggle(effect, options, duration);
                   // $('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                             
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
           setTimeout(function(){ 
             $('.clickgetunretime').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
          }, 50); 
            setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunretime");
            }, 70);
                
                        break;   
                        
                   case 'paragraph':
                   
                	   var del = $("#undoredochkdel").val();
                       var jk = parseInt(del) + parseInt(1);
                       var tag = "tags_"+jk; 
                            var minNumber = 0000; // The minimum number you want
                            var maxNumber = 1000; // The maximum number you want
                           var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                            AddContainer = '<li style="min-height:85px;" class="dottedLi ui-draggable SFPTWO_TEXTEDIT clickgetunresingleline"><div id="labeledit" class="labeledit singledrag">'+el+'</div>'+setme+'</li>';
                               setTimeout(function(){    
                              ($('ul.sortable-list').children('li').last().find('#labeledit').trigger('click'));
                          var effect = 'slide';
                    
                        // Set the options for the effect type chosen
                        var options = { direction: 'right' };
                    
                        // Set the duration (default: 400 milliseconds)
                        var duration = 700;
                       
                           // $('.slide_popup1').toggle(effect, options, duration);
                           // $('.slide_popup2').toggle(effect, options, duration);
                             }, 50);
                                    
                      $('div.setting-2').hide();
                    $('div.ullidrag').hide();
                    $('div.setedit').hide();
                    $('div.seteditopt').hide(); 
                   $('div.seteditdrop').hide(); 
                   setTimeout(function(){  
                     $('.clickgetunresingleline').each(function(){
                   var del = $("#undoredochkdel").val();
                   var jk = parseInt(del) + parseInt(1);
                       var tag = "tags_"+jk;  
                       $("#undoredochkdel").val(jk);
                       $(this).addClass(tag);
                       $(this).addClass('texttagdelete');
                   });
                   }, 50);
                    setTimeout(function(){    
                    $(".SFPTWO_TEXTEDIT").removeClass("clickgetunresingleline");
                    }, 70);
                        break;   
                    case 'multiline':
                    
                    
                 var SFPMULTILINEFORM = '';
              if( $('#SFPMULTILINEFORM').length )         // use this if you are using id to check
            {
    
               var SFPMULTILINEFORM = $('#SFPMULTILINEFORM').val();
            }
            else
            {
                SFPMULTILINEFORM = "notfound";
            }
           
                   
                     var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                    var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                    AddContainer = '<li class="dottedLi SFPTWO_TEXTEDIT clickgetunremultiline"><div id="labeledit" class="labeledit multilinedrag">'+el+'</div><div class="checksboxes p_scents multilineme" id="checksboxes_'+random+'"><div id="multiclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><p style="border: 1px solid #eee; padding: 10px; min-height: 30px; text-decoration: underline;" class="opt explicit_edit '+SFPMULTILINEFORM+'" id="1" contenteditable="true"><font   class="SFPCOLOR">Text1</font></p> </div><div class="jui-checkbox-row"></div></div><p id="mepp" class="meline"></p></div>'+setme+'</li>';
                      setTimeout(function(){    
                      ($('ul.sortable-list').children('li').last().find('.multilineme').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                   // $('.slide_popup1').toggle(effect, options, duration);
                  //  $('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                      //$( "#datepicker" ).datepicker();
                            
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
            setTimeout(function(){  
            $('.clickgetunremultiline').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
            }, 50);
             setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunremultiline");
            }, 70);
                        break;  
                        
                  case 'singleline':
                  
                   var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                    var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                    AddContainer = '<li style="min-height:85px;" class="dottedLi ui-draggable SFPTWO_TEXTEDIT     clickgetunresingleline"><div id="labeledit" class="labeledit singledrag">'+el+'</div>'+setme+'</li>';
                       setTimeout(function(){    
                      ($('ul.sortable-list').children('li').last().find('#labeledit').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                   // $('.slide_popup1').toggle(effect, options, duration);
                   // $('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                            
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           setTimeout(function(){  
             $('.clickgetunresingleline').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
           }, 50);
            setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunresingleline");
            }, 70);
                        break;                     
                    case 'submit':
                    
                    
                    
                    
                          var SFPSUBMITFORM = '';
              if( $('#SFPSUBMITFORM').length )         // use this if you are using id to check
            {
    
              var SFPSUBMITFORM= $('#SFPSUBMITFORM').val();
            }
            else
            {
                SFPSUBMITFORM = "notfound";
            }
           
                     
                     var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk; 
                     var minNumber = 0000; // The minimum number you want
                    var maxNumber = 1000; // The maximum number you want
                   var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
                    AddContainer = '<br/><br/><li class="dottedLi ui-draggable SFPTWO_TEXTEDIT clickgetunresubmit"><div id="getbtnme" class="submitdrag"><input class="inputdisabled SFPsubmit '+SFPSUBMITFORM+'" type="submit" name="submit" value="Submit"></div>'+setme+'</li>';
                       setTimeout(function(){    
                      ($('ul.sortable-list').children('li').last().find('#getbtnme').trigger('click'));
                  var effect = 'slide';
            
                // Set the options for the effect type chosen
                var options = { direction: 'right' };
            
                // Set the duration (default: 400 milliseconds)
                var duration = 700;
               
                  //  $('.slide_popup1').toggle(effect, options, duration);
                 //   $('.slide_popup2').toggle(effect, options, duration);
                     }, 50);
                             
              $('div.setting-2').hide();
            $('div.ullidrag').hide();
            $('div.setedit').hide();
            $('div.seteditopt').hide(); 
           $('div.seteditdrop').hide(); 
           
              setTimeout(function(){   
            $('.clickgetunresubmit').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tags_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
               $(this).addClass('texttagdelete');
           });
          }, 50); 
           setTimeout(function(){    
            $(".SFPTWO_TEXTEDIT").removeClass("clickgetunresubmit");
            }, 70);
                      
                        break;  
                    default :
                        AddContainer = "";
                }
              //  $( "#datepicker" ).datepicker();
                 $('#datepicker').bind('load', function() {
                $(this).datepicker();
            });
            
                $(".SFPTWO_EDITFORM ul").append(AddContainer);
                //CKEDITOR.inlineAll();
                //el1 = CKEDITOR.dom.element.createFromHtml(el);
                
                //CKEDITOR.inline( el1, {
            //        toolbarGroups: [
            //            { name: 'basicstyles' }
            //        ]
            //    } );    
        }
 

function removeselects(event,i)
{
    var ids = $("#selecthide").val();
      var click =0;
         $("#"+ids+" option").each(function()
            {
                
              if(click == i)
              {
                $(this).remove();
              }  
              click++;  
            });
            
           $(event).parent().remove(); 
}

  function addnews(event,res)
       {
      var count = $(event).parent().find("ul#ultab li").length + 1;
      var countme = $('ul#ultab li input').last().attr('id');
      //alert(countme);
       var get = $(event).parent().find("ul#ultab li").find('input').is("#"+countme);
      // console.log(get);
      
     if(get == true)
     {
        
        var lastfieldsid = $('ul#ultab li input').last().attr('id');
       // alert(lastfieldsid);
         var counts = parseInt(lastfieldsid) + parseInt(1);
         //alert(counts);
         $(event).parent().find("ul#ultab").append('<li><input type="text" id="'+counts+'" value="option'+counts+'"><a href="javascript:void(0)" onclick="removenews(this,'+counts+')"><img class="minus" src="http://test.scampaigns.com/img/minus.png"/></a></li>');
      $(".adding").find('#chkclone').append('<div class="jui-checkbox-row"><span class="checkboxWrapper" style="float: left;margin-right: 5px;"><input type="checkbox" id="'+counts+'" name="checkBox[]" class="SFPTWO_TAGEDIT getunre" value="option'+counts+'"></span><p id="'+counts+'" class="opt explicit_edit SFPTWO_TAGEDIT getunre"  style="display:inline-block;" contenteditable="true"><font   class="SFPCOLOR">option'+counts+'</font></p></div>');
      
      
       setTimeout(function(){                      
           $('.getunre').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(2);
               var tag = "tag_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
                $(this).addClass('tagdelete');
           });
             }, 50);
             setTimeout(function(){    
            $(".SFPTWO_TAGEDIT").removeClass("getunre");
            }, 70); 
       }
      
      
  
       }
     
       
     function addselect(event,res)
       {
       var i = $(event).parent().find("ul#ultab li").length + 1;
        var countme = $('ul#ultab li input').last().attr('id');
          var get = $(event).parent().find("ul#ultab li").find('input').is("#"+countme);
      //alert(countme);
        if(get == true)
     {
        var lastfieldsid = $('ul#ultab li input').last().attr('id');
        //alert(lastfieldsid);
         i = parseInt(lastfieldsid) + parseInt(1);
     
      $(event).parent().find("ul#ultab").append('<li><input type="text" id="'+i+'" value="option'+i+'"><a href="javascript:void(0)" onclick="removeselect(this,'+i+')"><img class="minus" src="http://test.scampaigns.com/img/minus.png"/></a></li>');
      $(".addingselect").find('#radioclone').append('<div class="jui-checkbox-row"><span class="checkboxWrapper" id="p_scnt_' + i +'" name="p_scnt_' + i +'"><input id="' + i +'" class="SFPTWO_TAGEDIT getunreopt" type="radio" value="option' + i +'"  name="name" ></span><p class="opt explicit_edit SFPTWO_TAGEDIT getunreopt"  style="display:inline-block;"id="' + i +'" name="' + i +'" contenteditable="true"><font   class="SFPCOLOR">option' + i +'</font></p></div>');
     
     setTimeout(function(){
             $('.getunreopt').each(function(){
           var del = $("#undoredochkdel").val();
           var jk = parseInt(del) + parseInt(1);
               var tag = "tag_"+jk;  
               $("#undoredochkdel").val(jk);
               $(this).addClass(tag);
                $(this).addClass('tagdelete');
           });
           
           }, 50);
           
             setTimeout(function(){    
            $(".SFPTWO_TAGEDIT").removeClass("getunreopt");
            }, 70);
     
     
      }
       
  
       }
       
            function addmulti(event,res)
       {
       var i = $(event).parent().find("ul#ultab li").length + 1;
          var countme = $('ul#ultab li input').last().attr('id');
          var get = $(event).parent().find("ul#ultab li").find('input').is("#"+countme);
      //alert(countme);
        if(get == true)
     {
        var lastfieldsid = $('ul#ultab li input').last().attr('id');
        //alert(lastfieldsid);
         i = parseInt(lastfieldsid) + parseInt(1);
     
      $(event).parent().find("ul#ultab").append('<li><input type="text" id="'+i+'" value="Text'+i+'"><a href="javascript:void(0)" onclick="removemulti(this,'+i+')"><img class="minus" src="http://test.scampaigns.com/img/minus.png"/></a></li>');
      $(".addingmulti").find('#multiclone').append('<div class="jui-checkbox-row"><p class="opt explicit_edit" id="' + i +'" contenteditable="true"><font   class="SFPCOLOR">Text' + i +'</font></p></div>');
       
     }
       }
       
       function removenews(event,count)
       {
        
       $(event).parent().remove();
         var res = $(".adding").find('#chkclone').find('div').length;
         $(".adding").find('p#'+count).parent().remove();  
         
       }
       
       
        function removeselect(event,count)
       {
        
        
       $(event).parent().remove();
         var res = $(".adding").find('#radioclone').find('div').length;
         $(".addingselect").find('p#'+count).parent().remove();  
         
       }
       
        function removemulti(event,count)
       {
        
       $(event).parent().remove();
         var res = $(".adding").find('#chkclone').find('div').length;
         $(".addingmulti").find('p#'+count).parent().remove();  
         
       }
 function addselectbox(event,res)
   {
      var i = $(event).parent().find("ul#ultab li").length + 1;
    
          var countme = $('ul#ultab li input').last().attr('id');
          var get = $(event).parent().find("ul#ultab li").find('input').is("#"+countme);
        
      //alert(countme);
        if(get == true)
     {
        var lastfieldsid = $('ul#ultab li input').last().attr('id');
        //alert(lastfieldsid);
         i = parseInt(lastfieldsid) + parseInt(1);
     
      $(event).parent().find("ul#ultab").append('<li><input type="text" id="'+i+'" value=Option'+i+'><a href="javascript:void(0)" onclick="removeselects(this,'+i+')"><img class="minus" src="http://test.scampaigns.com/img/minus.png"/></a></li>');
      $(".adddrop").find('.select').append('<option value=Option'+i+'>Option'+i+'</option>');
       
     }
   }

function removeselectp(event,i)
{
    var ids = $("#selecthide").val();
      var click =0;
         $("#"+ids+" option").each(function()
            {
                
              if(click == i)
              {
                $(this).remove();
              }  
              click++;  
            });
            
           $(event).parent().remove(); 
}
 function selectboxclick(event) {
      var getlength=  $(event).parent().find('.select > option').length;
      $('div').removeClass('adddrop').length;
      $(event).parent().addClass('adddrop').length;
        var res = "";
    var ids = $(event).parent().find('select').attr('id');
    var htms = "<ul id='ultab'>";     
    $("#"+ids+" option").each(function()
{
    res = res + $(this).val() + "/";
});

    var result = res.split("/");
    var resultcount = result.length;
    var html ="";
    for(var i =1;i<resultcount-1;i++)
    {
        if(i>1)
        {
         var html = html+"<li><input id='"+i+"checks' type='text' value='"+result[i]+"' onkeyup='edittext(this,"+i+")' /><a href='javascript:void(0)' onclick='removeselects(this,"+i+")'><img class='minus' src='http://test.scampaigns.com/img/minus.png'/></a></li>";   
        }
        else
        {
           var html = html+"<li><input id='"+i+"checks' type='text' value='"+result[i]+"' onkeyup='edittext(this,"+i+")' /><a href='javascript:void(0)' onclick='removeselects(this,"+i+")'><img class='minus' src='http://test.scampaigns.com/img/minus.png'/></a></li>";   
        }
        
        
    }
    var htmls = "<input type='hidden' value='"+ids+"' id='selecthide' />";
  var html = html + htmls;
     $("#tab_3_new").html(htms+html+'</ul><a href="javascript:void(0)" id="addScnt" onclick="addselectbox(this,'+getlength+')">Add</a>');
    $("#editformel").trigger('click');
    
  var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
       // $('.slide_popup1').toggle(effect, options, duration);
        $('.slide_popup1').hide(effect, options, duration);
       $('.slide_popup2').toggle(effect, options, duration);
}
    
    function edittext(e,i)
    {
  
       var res = $(e).val();
       
      var ids = $("#selecthide").val();
      
      var click =0;
         $("#"+ids+" option").each(function()
            {
                
              if(click == i)
              {
                $(this).val(res);
                $(this).text(res);
              }  
              click++;  
            });
      
      
    }
    
 function removelist(num,sid)
{
    //alert(sid);
    
  var x = document.getElementById("hours"+sid); 

 // var i;
  //  for (i = 0; i < x.length; i++) {
//       
//        if(x.options[i].text == x.options[num].text)
//        {
         
           $("select#hours"+sid+" option[value='"+x.options[num].value+"']").remove(); 
           var y = document.getElementById("drops"+sid+"_"+num); 
        
           y.remove();
           edit(sid);
           return false;
        //}
       // }
}

function add(nid)
{
   
    $("#addition"+nid).hide();
    var res = "<li id='down'><input type='text' value='' id='drs"+nid+"' /><input type='button' value='Add' onclick='addlist("+nid+")'/></li>";
    $(".hello"+nid).append(res);
   
}

function addlist(newid)
{
   
    $(".hello"+newid).hide();
    $("#addition"+newid).show();
    var insert1 = $("#drs"+newid).val();
      var elOptNew = document.createElement('option');
  elOptNew.text = insert1;
  elOptNew.value = insert1;
  var elSel = document.getElementById('hours'+newid);

 
    elSel.add(elOptNew); // standards compliant; doesn't work in IE
  
  $("#addition").show();
  

    
}



function datepick(num)
{
  $('body').on('click', '#datepicker'+num, function(event) {
    
    $(this).datepicker({

       showOn: 'focus',

        yearRange: "1900:+85",

        changeMonth: true,

        changeYear: true
    }).focus();

});  
}


function timepick(num)
{
    $('body').on('click', '#timepicker'+num, function(event) {
     $(this).timepicker(
        {
            'step': '30',
			'minTime': '00:00',
			'maxTime': '23:59',
			'timeFormat': 'H:i',
  }).focus();
}); 
}   
   
   
   
   
   
$(document).ready(function() { 
    
        $('body').on('click', '#remScnt', function(event) { 
     
        var scntDiv = $(this).parent();
      alert(scntDiv);
        var i = $(scntDiv).size() + 1;
       
                
                        $(this).parent().remove();
                       
               
        });
    
     $('body').on('click', '#remScntmemulti', function(event) { 
     
        var scntDiv = $(this).parent();
      alert(scntDiv);
        var i = $(scntDiv).size() + 1;
       
                
                        $(this).parent().remove();
                       
               
        });
    
         
      $('body').on('click', '#remScntme', function(event) { 
     
        var scntDiv = $(this).parent();
      alert(scntDiv);
        var i = $(scntDiv).size() + 1;
       
                
                        $(this).parent().remove();
                       
               
        });
        
         $('body').on('click', '#checkbox', function(event) { 
      
                return false;
        });
        
  });    
     $(document).on('keyup', '.opt[contenteditable="true"]', function(e) {
        if( $(this).prev().find('input[type=checkbox]').length){
            $(this).prev().find('input[type=checkbox]').val($(this).text()); 
        }
        else if( $(this).prev().find('input[type=radio]').length){
            $(this).prev().find('input[type=radio]').val($(this).text()); 
        }
       
   //var getoptValue = ($(this).text());
}); 

