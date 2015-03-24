

//new added

 

 $(document).on("mouseover", ".SFPTWO_EDITFORM .sortable-list li.dottedLi", function(e) {
  $(this).find("div.setting-2").show(); 
   $(this).find("div.ullidrag").show(); 
     $(this).find("div.setedit").show();
      $(this).find("div.seteditopt").show();
       $(this).find("div.seteditdrop").show();
      
     
});

$(document).on("mouseleave", ".SFPTWO_EDITFORM .sortable-list li.dottedLi", function(e) {
   $(this).find("div.setting-2").hide();
   $(this).find("div.ullidrag").hide();
    $(this).find("div.setedit").hide(); 
    $(this).find("div.seteditopt").hide();
     $(this).find("div.seteditdrop").hide();
});

	       
	
	                 


   setTimeout(function(){
   
     if( $('#sfpoptForm').length )         // use this if you are using id to check
   {
    
     //alert("ff");
    var sfpoptForm= $('#sfpoptForm').val();
     $('.SFPTWO_EDITFORM').attr('action',sfpoptForm);
     
    }
   
      var setme = '<div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext" style="display:none;"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input type="hidden" value="0" id="imgCount" /></div>';
    
     if( $('#SFPLEBELFORM').length )         // use this if you are using id to check
   {
    
    var SFPLEBELFORM= $('#SFPLEBELFORM').val();
     $('.SFPTWO_EDITFORM .sortable-list li.dottedLi .diveditme .opt').addClass(SFPLEBELFORM);
      $('.SFPTWO_EDITFORM .sortable-list li.dottedLi .labeledit .opt').addClass(SFPLEBELFORM);
     
    }
    if( $('#SFPTEXTFORM').length )         // use this if you are using id to check
   {
    
    var SFPTEXTFORM= $('#SFPTEXTFORM').val();
     $('.SFPTWO_EDITFORM .sortable-list li.dottedLi input[type=text]').addClass(SFPTEXTFORM);
     
    }
    
    if( $('#SFPSUBMITFORM').length )         // use this if you are using id to check
   {
    var SFPSUBMITFORM= $('#SFPSUBMITFORM').val();
     $('.SFPTWO_EDITFORM .sortable-list li.dottedLi input[type=submit]').addClass(SFPSUBMITFORM);
     
    }
     if( $('#SFPEMAILFORM').length )         // use this if you are using id to check
   {
    var SFPEMAILFORM= $('#SFPEMAILFORM').val();
     $('.SFPTWO_EDITFORM .sortable-list li.dottedLi input[type=email]').addClass(SFPEMAILFORM);
     
    }
    
    
    if( $('#SFPTEXTAREAFORM').length )         // use this if you are using id to check
   {
    var SFPTEXTAREAFORM = $('#SFPTEXTAREAFORM').val();
     $('.SFPTWO_EDITFORM .sortable-list li.dottedLi textarea').addClass(SFPTEXTAREAFORM);
     
    }
    
     if( $('#SFPPARAGRAPHFORM').length )         // use this if you are using id to check
   {
    var SFPPARAGRAPHFORM= $('#SFPPARAGRAPHFORM').val();
     $('.SFPTWO_EDITFORM .sortable-list li.dottedLi .paradrag div .opt').addClass(SFPPARAGRAPHFORM);
     
    }
    
     if( $('#SFPMULTILINEFORM').length )         // use this if you are using id to check
   { 
    var SFPMULTILINEFORM= $('#SFPMULTILINEFORM').val();
     $('.SFPTWO_EDITFORM .sortable-list li.dottedLi .multilineme .opt').addClass(SFPMULTILINEFORM);
     
    }


    if( $('#SFPSINGLELINEFORM').length )         // use this if you are using id to check
   { 
    var SFPSINGLELINEFORM= $('#SFPSINGLELINEFORM').val();
     $('.SFPTWO_EDITFORM .sortable-list li.dottedLi .singledrag .opt').addClass(SFPSINGLELINEFORM);
     
    }

    
       if( $('#SFPDROPDOWNFORM').length )         // use this if you are using id to check
   { 
    var SFPDROPDOWNFORM= $('#SFPDROPDOWNFORM').val();
     $('.SFPTWO_EDITFORM .sortable-list li.dottedLi .dropdowndrag .select').addClass(SFPDROPDOWNFORM);
     
    }
    /////////////////////////////////////////////////////
      if( $('.SFPEXTENDACTION').length  )         // use this if you are using id to check
   {
    var SFPEXTENDACTION= $('.SFPEXTENDACTION').val();     
    $('.SFPTWO_EDITFORM').attr('action',SFPEXTENDACTION); 
    $('.SFPEXTENDACTION').remove();          
   }
     if( $('.SFPEXTENDINPUTFIELD').length  )         // use this if you are using id to check
   {
     //alert("dd");
       var html = [];
          var SFPEXTENDINPUTFIELD= $('.SFPEXTENDINPUTFIELD').val();                
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
          var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENDINPUTFIELD+'</font></p>';
        
          
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tag = "tags_"+jk; 
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tags = "tags_"+jk; 
           $('.SFPEXTENDINPUTFIELD').after('<li class="dottedLi SFPTWO_TEXTEDIT"><div id="labeledit" class="labeledit textdrag">'+el+'</div><input type="text" name="" id="txtbox_'+random+'" class="SFPTEXT '+SFPTEXTFORM+'">'+setme+'</li>');
         $('.SFPEXTENDINPUTFIELD').remove(); 
    }
    
    
    
     if( $('.SFPEXTENDTEXTAREAFIELD').length  )         // use this if you are using id to check
   {
     //alert("dd");
       var html = [];
          var SFPEXTENDTEXTAREAFIELD= $('.SFPEXTENDTEXTAREAFIELD').val();                
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
          var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENDINPUTFIELD+'</font></p>';
        
          
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tag = "tags_"+jk; 
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tags = "tags_"+jk; 
           $('.SFPEXTENDTEXTAREAFIELD').after('<li class="dottedLi SFPTWO_TEXTEDIT '+tag+'"><div id="labeledit" class="labeledit textareadrag">'+el+'</div><textarea class="SFPAREA '+SFPTEXTAREAFORM+'" style="height:100px;width:304px;" id="txtarea_'+random+'" rows="" cols="" name=""></textarea>'+setme+'</li>');
         $('.SFPEXTENDTEXTAREAFIELD').remove(); 
    }
    
    
    
    if( $('#SFPEXTENDEMAIL').length )         // use this if you are using id to check
   {
    
    var SFPEXTENDEMAIL= $('#SFPEXTENDEMAIL').val();
     var html = [];
                 
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
          var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENDEMAIL+'</font></p>';
        
          
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tag = "tags_"+jk; 
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tags = "tags_"+jk; 
    $('#SFPEXTENDEMAIL').after('<li class="dottedLi SFPTWO_TEXTEDIT"><div id="labeledit" class="labeledit emaildrag">'+el+'</div><input  type="email" name="" id="email_'+random+'" required="required" class="SFPEMAIL '+SFPEMAILFORM+'">'+setme+'</li>');
    $('#SFPEXTENDEMAIL').remove();   
    }
    
    if( $('#SFPEXTENDSUBMITBUTTON').length )         // use this if you are using id to check
   {
    var SFPEXTENDSUBMITBUTTON= $('#SFPEXTENDSUBMITBUTTON').val();
      var html = [];
                 
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
          var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENDSUBMITBUTTON+'</font></p>';
        
         
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tag = "tags_"+jk; 
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tags = "tags_"+jk; 
           $('#SFPEXTENDSUBMITBUTTON').after('<li class="dottedLi SFPTWO_TEXTEDIT"><div id="getbtnme" class="submitdrag"><input class="inputdisabled '+SFPSUBMITFORM+'" type="submit" name="submit" value="'+SFPEXTENDSUBMITBUTTON+'"></div>'+setme+'</li>');
    $('#SFPEXTENDSUBMITBUTTON').remove();
    }
     if( $('#SFPEXTENDPARAGRAPH').length )         // use this if you are using id to check
   {
    var SFPEXTENDPARAGRAPH= $('#SFPEXTENDPARAGRAPH').val();
    SFPEXTENDPARAGRAPH=SFPEXTENDPARAGRAPH.split(',');
        var html = [];
                 
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
          var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENDPARAGRAPH[0]+'</font></p>';
        
         
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tag = "tags_"+jk; 
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tags = "tags_"+jk; 
       $('#SFPEXTENDPARAGRAPH').after('<li class="dottedLi SFPTWO_TEXTEDIT"><div id="diveditme" class="labeledit paradrag">'+el+'<div><p id="editmetext" name="" class="opt explicit_edit '+SFPPARAGRAPHFORM+'" contenteditable="true" style="border: 1px solid #eee; min-height: 30px; padding: 10px;"><font   class="SFPCOLOR">'+SFPEXTENDSUBMITBUTTON[1]+'</font></p></div></div>'+setme+'</li>');
        $('#SFPEXTENDPARAGRAPH').remove();
    }
    
    
    if( $('#SFEXTENDSINGLELINE').length )         // use this if you are using id to check
   {
    var SFEXTENDSINGLELINE= $('#SFEXTENDSINGLELINE').val();
      var html = [];
                 
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
          var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPSINGLELINEFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFEXTENDSINGLELINE+'</font></p>';
        
         
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tag = "tags_"+jk; 
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tags = "tags_"+jk; 
        $('#SFEXTENDSINGLELINE').after('<li class="dottedLi SFPTWO_TEXTEDIT"><div id="labeledit" class="labeledit singledrag">'+el+'</div>'+setme+'</li>');
        $('#SFEXTENDSINGLELINE').remove();
    }
    
     if( $('#SFEXTENDMULTILINE').length )         // use this if you are using id to check
   {
    var SFEXTENDMULTILINE= $('#SFEXTENDMULTILINE').val();
      SFEXTENDMULTILINE=SFEXTENDMULTILINE.split(',');
        var html = [];
                 
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
          var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFEXTENDMULTILINE[0]+'</font></p>';
        
         
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tag = "tags_"+jk; 
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tags = "tags_"+jk; 
    $('#SFEXTENDMULTILINE').after('<li class="dottedLi SFPTWO_TEXTEDIT"><div id="labeledit" class="labeledit multilinedrag">'+el+'</div><div class="checksboxes p_scents multilineme" id="checksboxes_'+random+'"><div id="multiclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><p style="border: 1px solid #eee; padding: 10px; min-height: 30px; text-decoration: underline;" class="opt explicit_edit  '+SFPMULTILINEFORM+'" id="1" contenteditable="true"><font   class="SFPCOLOR">'+SFEXTENDMULTILINE[1]+'</font></p> </div><div class="jui-checkbox-row"></div></div><p id="mepp" class="meline"></p></div>'+setme+'</li>');
     $('#SFEXTENDMULTILINE').remove();
    }
    
     if( $('#SFPEXTENDCHECKBOX').length )         // use this if you are using id to check
   { 
    var SFPEXTENDCHECKBOX= $('#SFPEXTENDCHECKBOX').val();
    SFPEXTENDCHECKBOX=SFPEXTENDCHECKBOX.split(',');
    var SFPEXTENDCHECKBOX2 = SFPEXTENDCHECKBOX[1].split('-');
    var SFPEXTENDCHECKBOX3= SFPEXTENDCHECKBOX2.length;
    var SFPEXTENDCHECKBOX4 = '';
     var html = [];
                 
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
          var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENDCHECKBOX[0]+'</font></p>';
        
         
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tag = "tags_"+jk; 
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tags = "tags_"+jk; 
    for(var i=0;i<SFPEXTENDCHECKBOX3;i++)
    {
        var j=i+1;
        SFPEXTENDCHECKBOX4 = SFPEXTENDCHECKBOX4+'<div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><span class="checkboxWrapper"><input type="checkbox" value="'+j+'"  name="checkBox[]" > </span> <p class="opt explicit_edit" id="'+j+'"  style="display:inline-block;" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENDCHECKBOX2[i]+'</font></p> </div>'
    }
    
  $('#SFPEXTENDCHECKBOX').after('<li class="dottedLi SFPTWO_TEXTEDIT"><div id="labeledit" class="labeledit addmechk checkboxdrag">'+el+'</div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_'+random+'"><div id="chkclone"  name="checkBox">'+SFPEXTENDCHECKBOX4+'</div><p id="mepp" class="pchkadd"></p><div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)">cc</a></div> </div>'+setme+'</li>');
      $('#SFPEXTENDCHECKBOX').remove();
    }

    
       if( $('#SFPEXTENDRADIOBUTTON').length )         // use this if you are using id to check
   { 
      var SFPEXTENDRADIOBUTTON= $('#SFPEXTENDRADIOBUTTON').val();
    SFPEXTENDRADIOBUTTON=SFPEXTENDRADIOBUTTON.split(',');
    var SFPEXTENDRADIOBUTTON2 = SFPEXTENDRADIOBUTTON[1].split('-');
    var SFPEXTENDRADIOBUTTON3= SFPEXTENDRADIOBUTTON2.length;
    var SFPEXTENDRADIOBUTTON4 = '';
     var html = [];
                 
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
          var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENDRADIOBUTTON[0]+'</font></p>';
        
         
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tag = "tags_"+jk; 
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tags = "tags_"+jk; 
    for(var i=0;i<SFPEXTENDRADIOBUTTON3;i++)
    {
        var j=i+1;
        SFPEXTENDRADIOBUTTON4 = SFPEXTENDRADIOBUTTON3+'<div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><span class="checkboxWrapper"><input type="radio" value="'+j+'" name="name" > </span> <p class="opt explicit_edit" id="'+j+'"  style="display:inline-block;" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENDRADIOBUTTON4[i]+'</font></p> </div>'
       
    }
    
    $('#SFPEXTENDRADIOBUTTON').after('<li class="dottedLi SFPTWO_TEXTEDIT"><div id="labeledit" class="labeledit radioboxdrag">'+el+'</div><div class="checksboxes p_scents selectboxaddnow" id="checksboxes_'+random+'"><div id="radioclone" name="radioName">'+SFPEXTENDRADIOBUTTON4+'</div><p id="mepp" class="pselectadd"></p><div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)">cc</a></div> </div>'+setme+'</li>');  
     $('#SFPEXTENDRADIOBUTTON').remove();
    }
    
     if( $('#SFPEXTENDROPDOWN').length )         // use this if you are using id to check
   { 
    var SFPEXTENDROPDOWN= $('#SFPEXTENDROPDOWN').val();
     SFPEXTENDROPDOWN=SFPEXTENDROPDOWN.split(',');
    var SFPEXTENDROPDOWN2 = SFPEXTENDROPDOWN[1].split('-');
    var SFPEXTENDROPDOWN3= SFPEXTENDROPDOWN2.length;
    var SFPEXTENDROPDOWN4 = '';
     var html = [];
                 
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
          var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENDROPDOWN[0]+'</font></p>';
        
         
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tag = "tags_"+jk; 
          var del = $("#undoredochkdel").val();
          var jk = parseInt(del) + parseInt(1);
          var tags = "tags_"+jk; 
    for(var i=0;i<SFPEXTENDROPDOWN3;i++)
    {
        var j=i+1;
        SFPEXTENDROPDOWN4 = SFPEXTENDROPDOWN3+'<option value="'+j+'">'+SFPEXTENDROPDOWN4[i]+'</option>'
    }
    
     $('#SFPEXTENDROPDOWN').after('<li style="min-height:109px" class="dottedLi SFPTWO_TEXTEDIT">'+el+'<div  class="dropdowndrag"><select class="select  '+SFPDROPDOWNFORM+'" id="hours'+random+'" style="font-family: times new roman;font-size: 15px; height: 30px;margin-bottom: 10px;width: 120px;">'+'<option value="0">Select</option>'+SFPEXTENDROPDOWN4+'</select><div class="seteditdrop" onclick="selectboxclick(this)"><a title="edit" class="editnow" href="javascript:void(0)">cc</a></div> </div>'+setme+'</li>');  
    $('#SFPEXTENDROPDOWN').remove();
    }
    
    
     if( $('#SFPEXTENDATEPICKER').length )         // use this if you are using id to check
   { 
    var SFPEXTENDATEPICKER= $('#SFPEXTENDATEPICKER').val();
     var html = [];
                 
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
       var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
                 var tags = "tags_"+jk; 
           //    $("#undoredochkdel").val(jk);
                 var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENDATEPICKER+'</font></p>';
           $('#SFPEXTENDATEPICKER').after('<li class="dottedLi SFPTWO_TEXTEDIT"><div id="labeledit" class="labeledit datedrag">'+el+'</div><input type="text" name="" id="datepicker1" onclick="datepick(1)">'+setme+'</li>');
          $('#SFPEXTENDATEPICKER').remove();   
     
    }
    
    
     if( $('#SFPEXTENTIMEPICKER').length )         // use this if you are using id to check
   { 
    var SFPEXTENTIMEPICKER= $('#SFPEXTENTIMEPICKER').val();
     var html = [];
                 
            var minNumbesr = 0000; // The minimum number you want
            var maxNumbesr = 1000; // The maximum number you want
           var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
           var i = $("#undoredochk").val(); 
           var j = parseInt(i) + parseInt(1);
           var tag = "tag_"+j;
               var del = $("#undoredochkdel").val();
               var jk = parseInt(del) + parseInt(1);
                  var tags = "tags_"+jk; 
             //  $("#undoredochkdel").val(jk); 
                 var el = '<p id="pid_'+randomss+'" class="opt explicit_edit SFPTWO_TAGEDIT '+SFPLEBELFORM+'" contenteditable="true"><font   class="SFPCOLOR">'+SFPEXTENTIMEPICKER+'</font></p>';
           $('#SFPEXTENTIMEPICKER').after('<li class="dottedLi SFPTWO_TEXTEDIT"><div id="labeledit" class="labeledit timedrag">'+el+'</div><input type="text" name="timepicker" id="timepicker1" onclick="timepick(1)">'+setme+'</li>');
         $('#SFPEXTENTIMEPICKER').remove();   
    }
    

      $(document).on("mouseover", ".explicit_edit", function(e) {
     
       //$(".explicit_edit").css('text-align',''); 
        
            $(".explicit_edit").removeClass('justifyme');
        
      
        $(this).addClass("justifyme");
      
     
});
    
    $(document).on("mouseover", ".SFPCOLOR", function(e) {
     // $(".SFPCOLOR").css('text-align',''); 
            $(".SFPCOLOR").removeClass('justifyme');
            
        
        $(this).addClass("justifyme");
        
      
     
});


     }, 6000);
    
     /**
 *     setTimeout(function(){
 *         $('ul.sortable-list').find('.external-form').each(function(){
 *                 alert($(this).val());
 *                  }); 
 *         }, 7000);
 */
$(document).ready(function() {
	
	$('.navbar').find('.form-group').insertAfter('a.toolbar_text');
	
	  $(".popupus").addClass('dHide');       
      $(".slide_popup1").addClass('dHide');       
      $("div.popup").addClass('dHide');       
      $("ul.ulshow").addClass('dHide');       
      $("div.slide_popup").addClass('dHide');       
      $('.restore1').addClass('dHide');       
      $("div.user_list").addClass('dHide');       
      $("div.popupusbackground").addClass('dHide');            
     
    
     //NEW ADDED
     
          $(document).on("mouseover", ".explicit_edit", function(e) {
     
      
          // $(".explicit_edit").css('text-align',''); 
            $(".explicit_edit").removeClass('justifyme');
        
      
        $(this).addClass("justifyme");
      
     
});
    
    $(document).on("mouseover", ".SFPCOLOR", function(e) {
    
           //  $(".SFPCOLOR").css('text-align','');       
            $(".SFPCOLOR").removeClass('justifyme');
            
        
        $(this).addClass("justifyme");
        
      
     
});
    $('.SFPTWO_EDITFORM .sortable-list li.dottedLi').hover(
                 
           
             function () {
              // alert('dd');
               $(this).find("div.setting-2").show(); 
                $(this).find("div.ullidrag").show(); 
             }, 
             function () {
             $(this).find("div.setting-2").hide();
              $(this).find("div.ullidrag").hide();
             }
             
           );
    
     //$('.SFPTWO_EDITFORM .sortable-list li#div.setting-2').hide();
    
      /************************************************** Aritra *************************************************/ 
    
      var i =1;
        setTimeout(function(){
      $(".wrapper").find('.SFPTWO_TAGEDIT').each(function(){
        var tag = "tag_"+i;
        $(this).addClass(tag);
          $(this).addClass('tagdelete');
        $("#undoredochk").val(i);
        i++;
        
      });  
  
      var k =1;
      $(".wrapper").find('.SFPTWO_TEXTEDIT').each(function(){
        var tag = "tags_"+k;
        $(this).addClass(tag);
          $(this).addClass('texttagdelete');
         $("#undoredochkdel").val(k);
        k++;
      });   
  
      var s =1;
      $(".wrapper").find('.SFPTWO_IMAGEEDIT').each(function(){
        var tag = "tagsimg_"+s;
        $(this).addClass("nownsfpimgdel");
        $(this).addClass(tag);
        s++;
      });
    }, 6050);

  /*  $(".wrapper").find('.SFPTWO_TAGEDIT').live("click",function(e) {
         var l = 1;
       $("div#buffer > ul >li").each(function(){
         l++;
       });
     var j = l; 
     
        if ($(this).attr("contentEditable") == "true") {
         var htm = $(this).attr('class').split('tag_');
        var html = $(".tag_"+htm[1]).html();
        
        var newhtml = "<li class='undo_"+j+++"'><p id='cls'>tag_"+htm[1]+"</p><div id='txt'>"+html+"</div></li>"; 
        $("div#buffer > ul").append(newhtml);
           alert(j);             
         $("#undoredobuffer").val(j);
         $("#redo").val(j);
            }
            
            
           
            });*/
       
   /************************************************** Aritra *************************************************/  
    $(document).on( "dragstop", function( event, ui ) { $('#imgdragable').hide();} );
    
        // Loader image show during loading    
            setTimeout(function(){     
        
            $('.wholepage').css('display','block');  
            $('body').css('overflow-y','hidden');
            $('.loadpage').css('display','none'); 
            $( ".imgedivdrg" ).mousedown(); 
            $('.dragSFPfirst').draggable({ disabled: true });
            $('.dragSFPfirst').draggable({ disabled: true });
		    $('.dragSFPfirst').removeClass('ui-draggable-disabled'); 
		    $('.dragSFPfirst').removeClass('ui-state-disabled'); 
               //$( ".nowdrag" ).trigger('click'); 
		    
          }, 1000);
          
          
           function rgb2hex(rgb){
             rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
             return (rgb && rgb.length === 4) ? "#" +
              ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
              ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
              ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : '';
            }

            // Loader image hide  after dom ready      
            setTimeout(function(){     
        
             $('.wholepage').css('display','none'); 
              $('body').css('overflow-y','');
           // $('.wholepage').css('position','fixed');   
          }, 6000);
          
          
         // page display  after dom ready          
        setTimeout(function(){
            
            $('.loadpage').css('display','block');
            $('.navbar').find('.form-group').insertAfter('a.toolbar_text');
              var getdDefaultdiv = $('.wrapper .SFPTWO_BACKGROUND').css('background-image');
              var getdDefaultdivcolr = $('.wrapper .SFPTWO_BACKGROUND').css('background-color');
           //   var getdDefaultdivcolr2 = $('.wrapper .SFPTWO_BACKGROUND').css('background'); 
              converthex = rgb2hex(getdDefaultdivcolr);
             // alert(converthex);
       // alert(getdDefaultdiv);
         if(getdDefaultdiv != 'none'){
        getdDefaultdiv = getdDefaultdiv.split('url');

    
        //getdDefaultdivnext = getdDefaultdiv[1].split("'");
        getdDefaultdivnext2 = getdDefaultdiv[1].split('"');
        if(getdDefaultdivnext2[1] == null){
              getdDefaultdivme2 = getdDefaultdiv[1].split('(');
              getdDefaultdivme3 = getdDefaultdivme2[1].split(')');
              //alert(getdDefaultdivme3[0]);
              
             $('.defaultdiv ul').append('<li><p style="color:black;">Default Background Image</p><strong><a class="imgdfltimg" href="'+getdDefaultdivme3[0]+'" title="Loading image"><img style="height:60px; width:60px;" alt="libraimages" src="'+getdDefaultdivme3[0]+'"></a></strong></li>');
        }
        else{
          $('.defaultdiv ul').append('<li><p style="color:black;">Default Background Image</p><strong><a class="imgdfltimg" href="'+getdDefaultdivnext2[1]+'" title="Loading image"><img style="height:60px; width:60px;" alt="libraimages" src="'+getdDefaultdivnext2[1]+'"></a></strong></li>');   
        }
        // alert(getdDefaultdivnext2[1]);
        
       }
      //  $('.defaultdiv ul').append('<li><p style="color:black;">Default Background Color</p><strong><a class="imgdfltcolor"style="cursor:pointer" title="Loading image">   <div id="getdaultcolrdiv" style="height:60px; width:60px;"></div></a></strong></li>');
        
       //   $('.defaultdiv ul').append('<li><strong><a class="imgdfltcolor2"style="cursor:pointer" title="Loading image">   <div id="getdaultcolrdiv2" style="height:60px; width:60px;"></div></a></strong></li>');
      
      //  $('#getdaultcolrdiv').css('background-color',converthex);
     //   $('#getdaultcolrdiv2').css('background',converthex);
        
                          
          $('#trigme').trigger('mousedown');
         
              var offset = $(".SFPTWO_EDITFORM ul").offset();
            var posY = offset.top - $(window).scrollTop();
            var posX = offset.left - $(window).scrollLeft(); 
            $('#ultop').val(posY);
            $('#ulleft').val(posX);  
            
            // $('.justifyme').css('text-align','check');
             // $('.justifyme').children().find('font').css('text-align','check');          
          }, 7000);
          
          //Left menu content hide show depending on template    
         // alert($('.ulshow li').length);
         if ( $('.ulshow li').length < 3 ) {
           
              $('div.left_panel ul li.pages').remove();
            
            }
          
           setTimeout(function(){   
           var geteditable = $('.wrapper').find('form.SFPTWO_EDITFORM').length;
           
           if(geteditable == 0)
           {
             
                $('a.open4').parent().remove();
             
          
           }
           }, 1000);
    
    
    
                
      $(".defaultdiv .imgdfltcolor").live("click",function() {
        var getdfltdivcolor = $(this).find('#getdaultcolrdiv').css('background-color');
         $('.wrapper .SFPTWO_BACKGROUND').css('background-color',getdfltdivcolor);
    });
    
     /**
 *  $(".defaultdiv .imgdfltcolor2").live("click",function() {
 *         var getdfltdivcolor = $(this).find('#getdaultcolrdiv2').css('background');
 *          $('.wrapper .SFPTWO_BACKGROUND').css('background',getdfltdivcolor2);
 *     });
 */
    
     $(".defaultdiv .imgdfltimg").live("click",function() {
        var getdfltdivcolor = $(this).find('img').attr("src");
       // alert(getdfltdivcolor);
           $('.wrapper .SFPTWO_BACKGROUND').css({backgroundImage: "url("+getdfltdivcolor+")"});
           $('.wrapper .SFPTWO_BACKGROUND').css('background-position','left top');
            $('.wrapper .SFPTWO_BACKGROUND').css('background-repeat','repeat');
       return false;
    });
        //autosave functionlity start
         $('#check').click(function() { 
            
             var status = document.getElementById("check").checked; //get checked value
             $('#autochk').val(status);
          });   
         
         
         
         
        
            setTimeout(function(){     
                 $('.SFPTWO_TEXTEDIT').hover(
                 
           
             function () {
             //   alert('dd');
               $(this).find("div.setting-2").show(); 
                $(this).find("div.ullidrag").show(); 
             }, 
             function () {
             $(this).find("div.setting-2").hide();
              $(this).find("div.ullidrag").hide();
             }
             
           );
           $(".overlay").hide();
    
          }, 3000);
       
       
         $(".idicon").live('click',function(){
        	  $(".popupus").hide();  
              $("div.popup").hide();
              $("div.popupusbackground").hide();        
              $("div.slide_popup").hide();
              if($("div.user_list").css('display')=='block'){
              	$("div.user").trigger('click');
              }
             
        //alert('f');    
         $('.ulshow').toggle();
            
       }); 
      
       
      
        
              $('.SFPTWO_EDITFORM').attr('id','editable');
          setInterval(function(){
            $('#savepr').hide();
             var getautovalue = $('#autochk').val();
             if(getautovalue == 'true')
             {
                  $('div.setting-2 a').removeClass('SFPdisabled'); 
                  //$('.urlset').removeClass('disabled'); 
                  $('div.setedit a').removeClass('SFPdisabled'); 
                  $('div.seteditopt a').removeClass('SFPdisabled');  
                  $('div.seteditdrop a').removeClass('SFPdisabled'); 
                  $('.imgedivdrg').removeClass('SFPdisabled');
                  $('.closethisdrag').removeClass('SFPdisabled');
                  $('.explicit_edit').attr('contenteditable','false');
                  var wrappercontent = $('.wrapper').html();
                   var urlchk = $(location).attr('href'); 
                   urlchk = urlchk.split("/"); 
                   var filename = $('#filename').val();
                   var base_url = window.location.origin;
                   $(".wrapper .SFPTWO_TEXTEDIT").each(function (){
                    if($(this).children('div.setting-2').length > 1)
                    {
                        $(this).children('div.setting-2').not(':first').remove();
                       
                      
                    }
                    
                           if($(this).children('div.setedit').length > 1)
                    {
                        
                        $('div.setedit').not(':first').remove();
                      
                    
                      
                    }
                    
                      if($(this).children('div.seteditopt').length > 1)
                    {
                      
                      
                       $('div.seteditopt').not(':first').remove(); 
                    
                      
                    }
                    
                      if($(this).children('div.seteditdrop').length > 1)
                    {
                        
                      $('div.seteditdrop').not(':first').remove(); 
                      
                    }
                       
                   });
                  
                       $(".wrapper .SFPTWO_IMAGEEDIT").each(function (){
                    if($(this).children('div.setting-2').length > 1)
                    {
                        $(this).children('div.setting-2').not(':first').remove();
                      
                    }
                       
                   });
                  
                     $(".SFPTWO_EDITFORM .sortable-list li").each(function (){
                    if($(this).children('div.setting-2').length > 1)
                    {
                        $(this).children('div.setting-2').not(':first').remove();
                      
                    }
                    
                           if($(this).children('div.setedit').length > 1)
                    {
                        
                        $('div.setedit').not(':first').remove();
                      
                    
                      
                    }
                    
                      if($(this).children('div.seteditopt').length > 1)
                    {
                      
                      
                       $('div.seteditopt').not(':first').remove(); 
                    
                      
                    }
                    
                      if($(this).children('div.seteditdrop').length > 1)
                    {
                        
                      $('div.seteditdrop').not(':first').remove(); 
                      
                    }
                   
                      
                       
                   });
                    $(".SFPTWO_EDITFORM").each(function (){
                    if($(this).children('#imgdragable').length > 1)
                    {
                        $(this).children('#imgdragable').not(':first').remove();
                      
                    }
                    
                     });
                   urlchk = urlchk[5];
                   
                   
                                 
              /*************************************  Added by Aritra ******************************************/
                var randHtml = $('.wrapper').find('form.SFPTWO_EDITFORM').html();
                 var formNames = ""; 
               if(randHtml == null)
               {
                    var randName = "form";
                    formNames = "demoform";
               }
               else
               {
                    var randName =$('.wrapper').find('form.SFPTWO_EDITFORM').attr('name');
                    
                    $('.wrapper').find('form.SFPTWO_EDITFORM > ul > li.dottedLi').each(function(){
                      
                    var htm = $(this).find('input[type=text]').html();
                    var htm1 = $(this).find('input[type=checkbox]').html();
                    var htm2 = $(this).find('textarea').html();
                    var htm3 = $(this).find('input[type=radio]').html();
                    var htm4 = $(this).find('select').html();
                    
                    if(htm == "")
                    {
                      var textBoxName = $(this).find('input[type=text]').attr('name');
                      formNames +=  textBoxName+"|--|";
                    }
                    
                   
                    if(htm1 == "")
                    {
                      $(this).find('input[type=checkbox]').each(function(){
                        var chkName = $(this).attr('name');
                        formNames += chkName+"|--|";
                      });
                        
                    }
                    
                    if(htm3 == "")
                    {
                      $(this).find('input[type=radio]').each(function(){
                        var radioName = $(this).attr('name');
                        formNames += radioName+"|--|";
                      });  
                    }
                    
                     if(htm2 == "")
                    {
                      var textAreaName = $(this).find('textarea').attr('name');
                      formNames +=  textAreaName+"|--|";
                    }
                    
                    if(htm4 != null)
                    {
                      var selectboxName = $(this).find('select').attr('name');
                      formNames +=  selectboxName+"|--|";
                    }
                    
                    
                        
                    });
                    
               }
               /*************************************  Added by Aritra ******************************************/
               
            
                   $.ajax({
                        type:'POST',
                        data:{wrappercontent:wrappercontent,urlchk:urlchk,filename:filename,formName:randName,formNames:formNames},
                        url:base_url+"/Frontend/savepage1",
                        success:function(data){
                             
                            $('.explicit_edit').attr('contenteditable','true');
                            var dt = new Date();
                          var time = dt.getHours() + ":" + dt.getMinutes();
                          //$('#savepr').show();
                          $('#saveprlast').show();
                            // $('#savepr').html('Saved');
                             $('#saveprlast').html('Last Saved on '+time);
                             setInterval(function(){
                                $('#savepr').hide();
                               }, 2000); 
                           // alert('Your Page Is Saved');
                        }
                    });
                   }  
                   else{
                   $(".save_btn").show();
                   // $('#savepr').hide();
                  
                   
                   }    
          }, 60000);
                 setInterval(function(){
                  var getautovalue1 = $('#autochk').val();
             if(getautovalue1 == 'false')
             {
                 $(".save_btn").show();
    		 }
                 }, 1000);
                 
                 
                 
                     setTimeout(function(){
                    
    			    var animate = setInterval(function() {
    			      var get= $('#autochk').val();
                      
         	 		 
                     
    			    }, time);
                  }, 3000);  
    			
    //autosave functionlity end         

 //setting div  append with Form's header text'
//$(".wrapper .SFPTWO_EDITFORM ul").find("li").append('<div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div>');
    
         $('#check').trigger('click'); 
          $('#check').attr('checked',true);      
         $('#autochk').val('true');
           $(".save_btn").hide();
         $('#check').click(function() { 
            $(".save_btn").hide();
             var status = document.getElementById("check").checked;
            // alert(status);
             $('#autochk').val(status);
          });   
        
   //Save Page on save Button click    
  $('body').on('click', '.save_btn', function(event) {
      //  $('div.setting-2').remove();
      //  $('div.ullidrag').remove();
        //$(".ui-resizable-handle").remove();
        
         $('.explicit_edit').removeAttr('contenteditable');
    var resd =  $("#hidder").val();
    var templates = $("#hiddens").val();
   
   
  /*  $('.wrapper input[type="file"]').removeClass('inputdisabled');
    $('.wrapper input[type="submit"]').removeClass('inputdisabled');
    $('.wrapper input[type="button"]').removeClass('inputdisabled');
    $('.wrapper button').removeClass('inputdisabled');
    $('.wrapper .inputdisabled').removeAttr('disabled');
    $('.wrapper a').removeClass('disabled'); 
    $('.wrapper input[type="file"]').removeAttr('disabled');
    $('.wrapper input[type="submit"]').removeAttr('disabled');
    $('.wrapper input[type="button"]').removeAttr('disabled');*/
     $('div.setting-2').remove();
      $('div.setedit').remove();
      $('div.seteditopt').remove(); 
      $('div.seteditdrop').remove(); 
    $('div.ullidrag').remove();
    $('.explicit_edit').attr('contenteditable',false); 
    
    $(".ui-resizable-handle").remove();
        
    $('.explicit_edit').removeAttr('contenteditable');
    
    
    $(".wrapper .SFPTWO_TAGEDIT").removeClass("explicit_edit");
    $(".wrapper .SFPTWO_TEXTEDIT").removeClass("explicit_edit");
    
    $('.wrapper input[type="file"]').removeClass('inputdisabled');
    $('.wrapper input[type="submit"]').removeClass('inputdisabled');
    $('.wrapper input[type="button"]').removeClass('inputdisabled');
    //$('.urlset').removeClass('disabled'); 
    $('.wrapper button').removeClass('inputdisabled');
    $('.wrapper .inputdisabled').removeAttr('SFPdisabled');
    $('.wrapper a').removeClass('SFPdisabled'); 
    $('.wrapper input[type="file"]').removeAttr('SFPdisabled');
    $('.wrapper input[type="submit"]').removeAttr('SFPdisabled');
    $('.wrapper input[type="button"]').removeAttr('SFPdisabled');
    $('.imgedivdrg').removeClass('SFPdisabled');
    $('.closethisdrag').removeClass('SFPdisabled');
    
    var wrappercontent = $('.wrapper').html();
    
          /*************************************  Added by Aritra ******************************************/
                var randHtml = $('.wrapper').find('form.SFPTWO_EDITFORM').html();
                 var formNames = ""; 
               if(randHtml == null)
               {
                    var randName = "form";
                    formNames = "demoform";
               }
               else
               {
                    var randName =$('.wrapper').find('form.SFPTWO_EDITFORM').attr('name');
                    
                    $('.wrapper').find('form.SFPTWO_EDITFORM > ul > li.dottedLi').each(function(){
                      
                    var htm = $(this).find('input[type=text]').html();
                    var htm1 = $(this).find('input[type=checkbox]').html();
                    var htm2 = $(this).find('textarea').html();
                    var htm3 = $(this).find('input[type=radio]').html();
                    var htm4 = $(this).find('select').html();
                    
                    if(htm == "")
                    {
                      var textBoxName = $(this).find('input[type=text]').attr('name');
                      formNames +=  textBoxName+"|--|";
                    }
                    
                   
                    if(htm1 == "")
                    {
                      $(this).find('input[type=checkbox]').each(function(){
                        var chkName = $(this).attr('name');
                        formNames += chkName+"|--|";
                      });
                        
                    }
                    
                    if(htm3 == "")
                    {
                      $(this).find('input[type=radio]').each(function(){
                        var radioName = $(this).attr('name');
                        formNames += radioName+"|--|";
                      });  
                    }
                    
                     if(htm2 == "")
                    {
                      var textAreaName = $(this).find('textarea').attr('name');
                      formNames +=  textAreaName+"|--|";
                    }
                    
                    if(htm4 != null)
                    {
                      var selectboxName = $(this).find('select').attr('name');
                      formNames +=  selectboxName+"|--|";
                    }
                    
                    
                        
                    });
                    
               }
               /*************************************  Added by Aritra ******************************************/
               
     var urlchk = $(location).attr('href'); 
     urlchk = urlchk.split("/"); 
     urlchk = urlchk[5]; 
     var d = new Date();
     var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
     var base_url = window.location.origin;
     $('#saveautosave').val(time);
      var filename = $('#filename').val();
            
               $.ajax({
                    type:'POST',
                    data:{wrappercontent:wrappercontent,urlchk:urlchk,filename:filename,formName:randName,formName:formNames},
                    url:base_url+"/Frontend/savepage",
                    success:function(data){
                      
                  $('#saveautosave').val(time);		
              //  alert('Your Template is saved');
            //  $(".wrapper .SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /></div>");

            //$(".wrapper .SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a></div>");
            
           // $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
            
           // $(".wrapper .SFPTWO_EDITFORM ul").find("li").append('<div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div>');
          //  $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".selectboxaddnow").append('<div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
          //  $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".chkboxaddnow").append('<div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
          //  $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".dropdowndrag").append('<div class="seteditdrop"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
            
            $(".wrapper .SFPTWO_TAGEDIT").addClass("explicit_edit");
            
            $('.explicit_edit').attr('contenteditable','true'); 
            $('.wrapper input[type="file"]').addClass('inputdisabled');
            $('.wrapper input[type="submit"]').addClass('inputdisabled');
            $('.wrapper input[type="button"]').addClass('inputdisabled');
            $('.wrapper button').addClass('inputdisabled');
            $('.wrapper a').addClass('SFPdisabled');
             $('div.setting-2 a').removeClass('SFPdisabled');  
             $('div.setedit a').removeClass('SFPdisabled'); 
             $('div.seteditopt a').removeClass('SFPdisabled');  
             $('div.seteditdrop a').removeClass('SFPdisabled'); 
            $('.wrapper .SFPTWO_EDITFORM a').removeClass('SFPdisabled');
            $('.imgedivdrg').removeClass('SFPdisabled');
            $('.closethisdrag').removeClass('SFPdisabled');
           // $('.urlset').removeClass('disabled'); 
             //  window.location.reload(); 
           $('.saveTemplate').css('display','block');  
            setTimeout($('.saveTemplate').css('display','none'), 5000);  
                    }
                });
   var new_name = document.getElementById('nameCam').value;
     var dates = $("#datepicker").val();	
     var times = $("#datetimepicker1").val();
      if(new_name == "Photocontest")
    {
        alert("please provide new template name");
        return false;
    }
    

        var uri = document.URL;
         var res1 = uri.split("/");
          $.ajax({
            type:'POST',
            data:{},
            url: base_url+'/Ajaxcall/deleteall/'+res1[5],
            success:function(data){
              $(".overlay").hide();
            }
            });
  }); 
  //Save Page on save Button click
    $('body').on('click', '.save_hgdfggfdgdfgfdsygfyfdsy', function(event) {
        
    
      //  $('div.setting-2').remove();
       // $('div.ullidrag').remove();
       // $('.explicit_edit').removeClass('explicit_edit');
        var resd =  $("#hidder").val();
        var templates = $("#hiddens").val();
      
      /*  $('.wrapper input[type="file"]').removeClass('inputdisabled');
        $('.wrapper input[type="submit"]').removeClass('inputdisabled');
        $('.wrapper input[type="button"]').removeClass('inputdisabled');
        $('.wrapper button').removeClass('inputdisabled');
        $('.wrapper .inputdisabled').removeAttr('disabled');
        $('.wrapper a').removeClass('disabled'); 
        $('.wrapper input[type="file"]').removeAttr('disabled');
        $('.wrapper input[type="submit"]').removeAttr('disabled');
        $('.wrapper input[type="button"]').removeAttr('disabled');*/
         $('div.setting-2').remove();
    $('div.ullidrag').remove();
    $('div.setedit').remove();
    $('div.seteditopt').remove(); 
    $('div.seteditdrop').remove(); 
    $('.explicit_edit').attr('contenteditable',false); 
    
    $(".ui-resizable-handle").remove();
        
    $('.explicit_edit').removeAttr('contenteditable');
    
    
    $(".wrapper .SFPTWO_TAGEDIT").removeClass("explicit_edit");
    $(".wrapper .SFPTWO_TEXTEDIT").removeClass("explicit_edit");
    
    $('.wrapper input[type="file"]').removeClass('inputdisabled');
    $('.wrapper input[type="submit"]').removeClass('inputdisabled');
    $('.wrapper input[type="button"]').removeClass('inputdisabled');
    $('.wrapper button').removeClass('inputdisabled');
    $('.wrapper .inputdisabled').removeAttr('SFPdisabled');
    $('.wrapper a').removeClass('SFPdisabled'); 
    $('.wrapper input[type="file"]').removeAttr('SFPdisabled');
    $('.wrapper input[type="submit"]').removeAttr('SFPdisabled');
    $('.wrapper input[type="button"]').removeAttr('SFPdisabled');
    $('.imgedivdrg').removeClass('SFPdisabled');
    $('.closethisdrag').removeClass('SFPdisabled');
   // $('.urlset').removeClass('disabled'); 
        
         var urlchk = $(location).attr('href'); 
         urlchk = urlchk.split("/"); 
         urlchk = urlchk[5]; 
         var d = new Date();
         var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
         $('#saveautosave').val(time);
         
         var new_name = document.getElementById('newName').value;
         
        // alert(new_name);
         
         var cNo = document.getElementById('cNo').value;
         var dates = $("#datepicker").val();	
         var times = $("#datetimepicker1").val();
         var base_url = window.location.origin;
        if(new_name == "Photocontest")
        {
            alert("please provide new template name");
            return false;
        }
        $.ajax({
                type:'POST',
                data:{urlchk:urlchk,newname:new_name,dates:dates,times:times,template_name : templates,campaignnumber : cNo},
                url:base_url+"/Frontend/savepage3",
                success:function(data){
                
                      $('#saveautosave').val(time);	
                  if($('.textme').length == 0)
                  {	     
               	      $(".wrapper .SFPTWO_IMAGEEDIT").before('<div class="textme" style="display:inline;"></div>');
	                  $(".wrapper .SFPTWO_TEXTEDIT").before('<div class="textme" style="display:inline;"></div>');
                  }
                  else
                  {
                	  var geetme = 0;
                  }	  
               $(".wrapper .SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");

            $(".wrapper .SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a></div>");
              $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".selectboxaddnow").append('<div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
            $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".chkboxaddnow").append('<div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
            $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".dropdowndrag").append('<div class="seteditdrop"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
             if($(".wrapper .SFPTWO_TEXTEDIT").find('a').hasClass('sfpDynamic'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
             
             
             if($(".wrapper .SFPTWO_IMAGEEDIT").find('a').hasClass('sfpDynamic'))
             {  
          	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
       		    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').find('.setting-2').remove();
       			    setTimeout(function(){
                     $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");

                  },1000);
       		
       	    }
         
         
             if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicLike'))
   		  { 
   		      //alert("hh");
       	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
   		    $(".sfpfbDynamicLike").find('.setting-2').remove();
   			    setTimeout(function(){
                  $(".sfpfbDynamicLike").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

               },1000);
   		
   		 }
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicShare'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicShare").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicShare").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweet'))
		  { 
		      //alert("hh");
   	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweet").find('.setting-2').remove();
			    setTimeout(function(){
              $(".sfpfbDynamicTweet").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

           },1000);
		
		 }
         
       
        
        if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweetBird'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweetBird").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpfbDynamicTweetBird").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
        
      
        if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicLinkedin'))
		  { 
		      //alert("hh");
	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicLinkedin").find('.setting-2').remove();
			    setTimeout(function(){
           $(".sfpDynamicLinkedin").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

        },1000);
		
		 }
           
           
              if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicPinterest'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicPinterest").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicPinterest").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicMail'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicMail").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicMail").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 } 
            $(".wrapper .nowdrag").parent().find('.setting-2').remove();
            $(".wrapper #dragfirst").parent().find('.setting-2').remove();
           // $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
            
            $(".wrapper .SFPTWO_EDITFORM ul").find("li").append('<div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext"><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div>');
            
            $(".wrapper .SFPTWO_TAGEDIT").addClass("explicit_edit");
            
            $('.explicit_edit').attr('contenteditable','true'); 
            $('.wrapper input[type="file"]').addClass('inputdisabled');
            $('.wrapper input[type="submit"]').addClass('inputdisabled');
            $('.wrapper input[type="button"]').addClass('inputdisabled');
            $('.wrapper button').addClass('inputdisabled');
            $('.wrapper a').addClass('SFPdisabled');
             $('div.setting-2 a').removeClass('SFPdisabled');  
                  $('div.setedit a').removeClass('SFPdisabled'); 
                  $('div.seteditopt a').removeClass('SFPdisabled');  
                  $('div.seteditdrop a').removeClass('SFPdisabled'); 
            $('.wrapper .SFPTWO_EDITFORM a').removeClass('SFPdisabled');
            $('.imgedivdrg').removeClass('SFPdisabled');
            $('.closethisdrag').removeClass('SFPdisabled');
            //$('.urlset').removeClass('disabled'); 
            	  $('div.setting-2').hide();
            //alert('Your Page Is Saved');
                //window.location.reload(); 
                }
            });
            var uri = document.URL;
             var res1 = uri.split("/");
              $.ajax({
                type:'POST',
                data:{},
                url: base_url+'/Ajaxcall/deleteall/'+res1[5],
                success:function(data){
                    
                 $(".overlay").hide();
                }
                });
        
       });

        //Undo redo Function
       var base_url = window.location.origin;
        var uri = document.URL;
                
        var res = uri.split("/");
        //alert(res[1]);
      
        var res1 = uri.split("/");
        var res2 = res[4].split("/");
        var newurl = res2[4];
        setTimeout('appendall("'+newurl+'")', 1000);
            $.ajax({
                type:'POST',
                data:{},
                url: base_url+'/Ajaxcall/deleteall/'+res1[5],
                success:function(data){
      
                      $(".overlay").hide();
        
                }
                });



        $('body').on('click', '#mselect', function(event) {
            $(".dropdown dt a").on('click', function () {
              $(".dropdown dd ul").slideToggle('fast');
          });
    
          $(".dropdown dd ul li a").on('click', function () {
              $(".dropdown dd ul").hide();
          });
    
          function getSelectedValue(id) {
               return $("#" + id).find("dt a span.value").html();
          }
    
          $(document).bind('click', function (e) {
              var $clicked = $(e.target);
              if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
          });

    
          $('.mutliSelect input[type="checkbox"]').on('click', function () {
            
              var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
                  title = $(this).val() + ",";
            
              if ($(this).is(':checked')) {
                  var html = '<span title="' + title + '">' + title + '</span>';
                  $('.multiSel').append(html);
                  $(".hida").hide();
              } 
              else {
                  $('span[title="' + title + '"]').remove();
                  var ret = $(".hida");
                  $('.dropdown dt a').append(ret);
                  
              }
          });
          
          
       
        });  
        

    


  //Desktop ,Tab and Mobile View
        
        $('.desktop').click(function(){
    	$('.wrapper').addClass('wrapper1');
        $('.desktop').addClass('desk-all-opa');
        $('.tabsme').removeClass('desk-all-opa');
        $('.mobile').removeClass('desk-all-opa');
        $('.wrapper').removeClass('wrapper_tab');
         $('.wrapper').removeClass('wrapper_mobile');
        return false;
      });
      
      $('.tabsme').click(function(){
    	$('.wrapper').removeClass('wrapper1');
        $('.tabsme').addClass('desk-all-opa');
          $('.desktop').removeClass('desk-all-opa');
        
        $('.mobile').removeClass('desk-all-opa');
        $('.wrapper').removeClass('wrapper_mobile');
        $('.wrapper').addClass('wrapper_tab');
        
        return false;
      });
      
      
      $('.mobile').click(function(){
    	$('.wrapper').removeClass('wrapper1');
        $('.mobile').addClass('desk-all-opa');
          $('.desktop').removeClass('desk-all-opa');
          $('.tabsme').removeClass('desk-all-opa');
        $('.wrapper').removeClass('wrapper_tab');
        $('.wrapper').addClass('wrapper_mobile');
        return false;
      });
      
  //Previous and next Button in Form for sorting
  
      $('body').on('click', '.sortable-list .ui-draggable .dottedLi div.prevnext a.prev', function(e) {
       // alert($(this).parent().parent().html());
        e.preventDefault();
        var html = $(this).parent().parent().parent().html();
        console.log(html);
        html = '<li id="idme">'+html+'</li>';
        //alert(html);
        var htm = $(this).parent().parent().parent().prev().html()
        //console.log($(this).parent().prev().html());
        $(this).parent().parent().parent().prev().before(html);
        if(htm != null){
             $(this).parent().parent().parent().remove();
              $('li#idme').remove();
        }
       
    });


    $('body').on('click', '.sortable-list li div.prevnext a.prev', function(e) {
       // alert($(this).parent().parent().html());
        e.preventDefault();
        var html = $(this).parent().parent().html();
        html = '<li>'+html+'</li>';
        //alert(html);
        var htm = $(this).parent().parent().prev().html()
        //console.log($(this).parent().prev().html());
        $(this).parent().parent().prev().before(html);
        if(htm != null){
             $(this).parent().parent().remove();
        }
       
    });

    
    $('body').on('click', '.sortable-list li div.prevnext a.next', function(e) {
        e.preventDefault();
        var html =  $(this).parent().parent().parent().html();
        html = '<li id="idme">'+html+'</li>';
       // alert(html);
        var htm =$(this).parent().parent().parent().next().html()
      //  console.log($(this).parent().next().html());
        $(this).parent().parent().parent().next().after(html);
         if(htm != null){
             $(this).parent().parent().parent().remove();
               $('li#idme').remove();
        }
    });

  $("#data_restore").niceScroll({cursorcolor:"#000"});

    $('body').on('click', '.sortable-list li  div.prevnext a.next', function(e) {
        e.preventDefault();
        var html = $(this).parent().parent().html();
        html = '<li>'+html+'</li>';
       // alert(html);
        var htm = $(this).parent().parent().next().html()
      //  console.log($(this).parent().next().html());
        $(this).parent().parent().next().after(html);
         if(htm != null){
             $(this).parent().parent().remove();
        }
    });



//Show setting div on mouse hover

    $(".SFPTWO_IMAGEEDIT").live('mouseover',function(){
      $(this).find("div.setting-2").show();
    });
    $(".SFPTWO_IMAGEEDIT").live('mouseout',function(){
      $(this).find("div.setting-2").hide();
    });
    
    $(".SFPTWO_TIMER").live('mouseover',function(){
        $(this).find("div.setting-2").show();
      });
      $(".SFPTWO_TIMER").live('mouseout',function(){
        $(this).find("div.setting-2").hide();
      });
    
    $(".SFPTWO_TEXTEDIT").live('mouseover',function(){
      $(this).find("div.setting-2").show();
    });
    $(".SFPTWO_TEXTEDIT").live('mouseout',function(){
      $(this).find("div.setting-2").hide();
    });
    
    $('.wrapper input[type="file"]').addClass('inputdisabled');
    $('.wrapper input[type="submit"]').addClass('inputdisabled');
    $('.wrapper input[type="button"]').addClass('inputdisabled');
    $('.wrapper button').addClass('inputdisabled');
    //$('.wrapper .inputdisabled').attr('disabled', 'disabled');
     $('.wrapper a').addClass('SFPdisabled');
     $('div.setting-2 a').removeClass('SFPdisabled');  
     $('div.setedit a').removeClass('SFPdisabled'); 
     $('div.seteditopt a').removeClass('SFPdisabled');  
     $('div.seteditdrop a').removeClass('SFPdisabled'); 
$('.SFPTWO_EDITFORM a').removeClass('SFPdisabled');
$('.imgedivdrg').removeClass('SFPdisabled');
$('.closethisdrag').removeClass('SFPdisabled');
//$('.urlset').removeClass('disabled'); 

       $('.enteroff').keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });

/**
 *   $(".idicon").live('click',function(){
 *     //alert('ff');
 *     $('.ulshow').toggle();
 *             
 *    });
 */
 
 
 //Autometic Size based on length of the character
   $('.explicit_edit').attr('contenteditable','true'); 
     var getfirstlength = '' ;
          $('.autosize').one('keyup',function(){
              getfirstlength += $(this).find('a').css("fontSize");
              //alert(getfirstlength);
          });
     var getfirstlength = '';
          $('.autosize').one('keyup',function(){
              getfirstlength += $(this).find('a').css("fontSize");
              //alert(getfirstlength);
          });
          
          
        
         $('.autosize').keyup(function(e){
           
           var getcurrentlength = ($(this).text().length);
            
           var prev = ($(this).attr('rel'));
           var newprev = 0;
           
           var gtsize = $(this).find('.autosizethis').css("fontSize");
            
            if(prev<getcurrentlength){
                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
                //alert("text");
               // alert($(this).attr('rel'));
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                // alert(gtsize);
            }
           
        
               
            else if( e.keyCode == 46)
            {
                
              e.stopPropagation();
            }
            
            else if(e.keyCode != 8){
                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
              //  alert("now");
               // alert($(this).attr('rel'));
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                // alert(gtsize);
            }
          
        
        });
        
        
            
         $('.autosize').keydown(function(e){
             var getcurrentlength = ($(this).text().length);
            
           var prev = ($(this).attr('rel'));
           var newprev = 0;
           
           var gtsize = $(this).find('.autosizethis').css("fontSize");
           
          if(e.keyCode == 8)
            {
                
            
               //  alert("backspace");
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));  
            }
               
            else if( e.keyCode == 46)
            {
                
              e.stopPropagation();
            }
          
          
        
        });
});


$(function() {
    

    
    
    var xz=0;
		$("a.form_btn_jhuyhguh8ujgijuhuihuhf65858").click(function(){
			if(xz==0){
				$("div.left_side_bar_one_jidghuygyudghuy7fsea7dfh8dfhfdah8dfa4847").animate({"left":"74px"},300);
				xz++;
			}else{
				$("div.left_side_bar_one_jidghuygyudghuy7fsea7dfh8dfhfdah8dfa4847").animate({"left":"-174px"},300);
				xz--;
			}
			return false;
		});
    
    

    var hold = 1;
    var counHold = 1;
    //$('select.styled').customSelect();
    //$('.scroll-pane').jScrollPane();
// setup popup js
// popup js block
//Baishakhi-start
$(function() {

    
 
  
   var xz=0;
		$("a.setup").live('click',function(){
		 $("#editable").attr('id','');
          $('.SFPTWO_EDITFORM').attr('id','editable');
         
		  
            if(xz==0){
				$("div.left_side_bar_one_jidghuygyudghuy7fsea7dfh8dfhfdah8dfa4847").animate({"left":"74px"},300);
				xz++;
			}else{
				$("div.left_side_bar_one_jidghuygyudghuy7fsea7dfh8dfhfdah8dfa4847").animate({"left":"-174px"},300);
				xz--;
			}
		
			return false
		});
 
        $("div.pop_img2background > a").live('click',function(){
			$("div.pop_img2background, div.mask").fadeOut(300, function() {
			$("div.mask").remove()
		});
			return false;
		});
		
        $("div.popup2 > a").live('click',function(){
			$("div.popup2, div.mask").fadeOut(300, function() {
			$("div.mask").remove()
		});
			return false;
		});
        
	});
    
    //Image Related JS
    $("#ImageUploadForm").live('click', function(){
        
        $("div.popup .allPopup").slideUp(100);
        $("div.popup .pop_img3").slideDown(300);  
       	return false; 
    });
    
    
    $("#ImageUploadFormNext1").live('click', function(){
      
        document.getElementById("image_upload1").reset();
        $("div.popup2").fadeOut(300);
        $("div.popup").fadeIn(300);
        $("div.popup .popupus").hide();
        $("div.popup .pop_img3").slideDown(300);  
       	return false; 
    });
    
    $("#showUserImageLibrary").live('click', function(){
      
        $("div.popup").fadeOut(300);
        $("div.popup2").fadeIn(300);
        $('.scroll-pane').jScrollPane();
      
            setTimeout(function(){     
    
        $('.megallery li').find('span.customSelect:not(:last)').remove();
      }, 1000);
         
    }); 
    
      $("#showUserImageLibraryback").live('click', function(){
		  $("#image_div").hide();   
          $("#defaultdiv").hide();
	   $("#tabupload").hide();
	    $(".pickshell").hide();     
		   $("body").append("<div class='mask'></div>");
        $("div.popup").fadeOut(300);
		 $("div.popup2").fadeIn(300);
        $("div.pop_img2background").fadeIn(300);
        $('.scroll-pane').jScrollPane();
      $('select.styled').customSelect();
	  
          setTimeout(function(){     
    
        $('.megalleryback li').find('span.customSelect:not(:last)').remove();
      }, 1000);
         
    }); 
    
    $("a.close3, div.mask3").click(function(){
    	$("div.popup3, div.mask3").fadeOut(300, function() {
    	$("div.mask3").remove()
    });
    	return false
    });
    
  
// popup js block end    
    $(".SFPTWO_IMAGEEDIT a.delete").live("click",function(){
        
        /**** Added by Aritra ****/ 
    	if($(this).parent().parent().hasClass('nownsfpimgdel'))
        {
           var htm = $(this).parent().parent().attr('class').split('nownsfpimgdel');
           var getnextClass = htm[1].split('imgEdit');
           var getrandClass = getnextClass[0].split('rand');
           //console.log(getrandClass);
           var gettrim = getrandClass[0].trim();
           var html = $("."+gettrim).html();
        //console.log(html);
        var l = 1;
       $("div#buffer > ul >li").each(function(){
         l++;
       });
      var js =l;
     
        var newhtml = "<li class='undo_"+l+"'><p id='cls'>"+gettrim+"</p><p id='cross'>cross</p><div id='txt'>"+html+"</div></li>"; 
         //alert(newhtml);
        $("div#buffer > ul").append(newhtml);
       
        js++;                
         $("#undoredobuffer").val(js);
        $("#redo").val(js);
        
        /**** Added by Aritra ****/ 
        
        
        var base_url = window.location.origin; 
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber); 
        var rand = "rand_"+random;
       
         $(this).parent().parent().addClass(rand);
         var htm = $(".wrapper").html(); 
         $("."+rand).hide();
        var uri = document.URL;
         var res = uri.split("/");

                  $.ajax({
            type:'POST',
            data:{random:rand},
            url: base_url+'/Ajaxcall/trash/'+res[5],
            success:function(data){
                 var datas = data.split("|-|");
                  var cont = datas.length;
                
                
                  var item = parseInt(cont) - parseInt(1);
                 $("a#full").attr("title","Restore("+item+") items"); 
                     
            }
            }); 
          
        $(this).parent().parent().find("#upload").hide();
        } 
    });
   
 
        $("a#full").live("click",function(){
            
        	 $(".popupus").hide();  
             $(".slide_popup1").hide();  
             $("div.popup").hide();
             $("div.popupusbackground").hide();   
             $("ul.ulshow").hide();
             $("div.slide_popup").hide();
             if($("div.user_list").css('display')=='block'){
             	$("div.user").trigger('click');
             }
            
    $("#trash_img").show();
         var base_url = window.location.origin; 
        var uri = document.URL;
         var res = uri.split("/");
               $.ajax({
            type:'POST',
            data:{},
            url: base_url+'/Ajaxcall/restore/'+res[5],
            success:function(data){
                var res = data.split("|-|");
                  $("#trash_img").hide();
 var img = res.length;
 
 var img_html = "";
  text_html = "";
 if(img != "")
 {
   for(var i=1; i<img;i++){
var r = res[i].search("randtxt");

   if(r>=0)
   {
    img_html += "<li><a href='javascript:void(0)' id='imghtml' rel='"+res[i]+"'>text section_"+i+" <span class='icon-reply'></span></a></li>";   
   }
   else
   {
    text_html += "<li><a href='javascript:void(0)' id='imghtml' rel='"+res[i]+"'>image section_"+i+" <span class='icon-reply'></span></a></li>"; 
   }
    
   }

 }
var text = img_html + text_html;

 $(".restore1").html(text);
      var effect = 'slide';
    
        // Set the options for the effect type chosenswitch
        var options = { direction: 'right' };
    
        // Set the duration (default: 400 milliseconds)
        var duration = 700;
 //$(".restore1").show();
           
        if($(".restore1").css('display') !='none')
	    {
        	$('.restore1').css('display','none');
	    }
        else
        {
        	$('.restore1').css('display','block');
        }
 
                }
                }); 
                return false;
        });
        
    
    $("#imghtml").live("click",function(){
         var base_url = window.location.origin; 
        var uri = document.URL;
         var res1 = uri.split("/");
        var res = $(this).attr("rel");
        $("."+res).show();
        $(this).remove();
            
          $.ajax({
            type:'POST',
            data:{res:res},
            url: base_url+'/Ajaxcall/removeTrash/'+res1[5],
            success:function(data){
                $(".restore1").hide();
                if(data == "0")
                {
                 $("#img_hid").val("");   
                 //$(".restore").find("#empty").show(); 
                 $('a#full').attr('title','Trash');
                 $("a#full").show();
                }
                }
                });
    });
    
    //Edittable text Remove
    
    // $('body').find('.SFPTWO_TEXTEDIT').on('click', 'a.delete', function(event) {
    $(".SFPTWO_TEXTEDIT a.delete").live("click",function(){
    	
    	if($(this).parents('form.SFPTWO_EDITFORM').length)
    		{
    		 $('.sfpLicnt').val('-1');
    		}
        
        /**** Added by Aritra ****/ 
            var html = $(this).parent().parent().attr('class').split('texttagdelete');
             var htm = html[0].split('tags_');
            //var htm = $('#undoredochkdel').val();
        var html = $(".tags_"+htm[1]).html();
        
        var l = 1;
       $("div#buffer > ul >li").each(function(){
         l++;
       });
      var js =l;
     
        var newhtml = "<li class='undo_"+l+"'><p id='cls'>tags_"+htm[1]+"</p><p id='cross'>cross</p><div id='txt'>"+html+"</div></li>"; 
         //alert(newhtml);
        $("div#buffer > ul").append(newhtml);
       
        js++;                
         $("#undoredobuffer").val(js);
        $("#redo").val(js);
        
        /**** Added by Aritra ****/ 
        
         var base_url = window.location.origin; 
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber); 
        var rand = "randtxt_"+random;
       
         $(this).parent().parent().addClass(rand); 
        
         var htm = $(".wrapper").html(); 
         $("."+rand).hide();
        var uri = document.URL;
         var res = uri.split("/");
             $.ajax({
            type:'POST',
            data:{random:rand},
            url: base_url+'/Ajaxcall/trash/'+res[5],
            success:function(data){
                 var datas = data.split("|-|");
                  var cont = datas.length;
                  var item = parseInt(cont) - parseInt(1);
                 $("#full").attr("title","Restore("+item+") items"); 
                       
            }
            }); 
           
    });  
         
   
    
    
  
     
      
    /* $(".SFPTWO_EDITFORM a.delete").live("click",function(){
   var hides =  $("#hide").val();
    $('#captcha').attr('rel','captcha');
   if(hides > 1)
   {
    $("#hide").val("1");
   }
   if($(this).parent().parent().attr('rel')=='capchas') 
        {
            $(this).parent().parent().remove();
            return false;
        }
               var base_url = window.location.origin; 
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber); 
        var rand = "randtxt_"+random;
         $(this).parent().parent().addClass(rand); 
      
         var htm = $(".wrapper").html(); 
         $("."+rand).hide();
        var uri = document.URL;
         var res = uri.split("/");
          $.ajax({
            type:'POST',
            data:{html:htm},
            url: base_url+'/Ajaxcall/save/'+res[5],
            success:function(data){
                $("#hiddens").val(data);
        
             $.ajax({
            type:'POST',
            data:{random:rand},
            url: base_url+'/Ajaxcall/trash/'+res[5],
            success:function(data){
                 var datas = data.split("|-|");
                  var cont = datas.length;
                 //$(".restore").find("#empty").hide();
                  // $(".restore").find("#full").show();
                  var item = parseInt(cont) - parseInt(1);
                 $("#full").attr("title","Restore("+item+") items"); 
                       
            }
            }); 
            }
            }); 
    }); */
    //Get choose image from Library
/*    $(".pop_img2 div.gallery ul li strong a").live('click',function(e){
       
        var containHeight = $("#editable").height();
        var containWidth =  $("#editable").width();
        var imgCountHold = $("#editable div.setting-2 input#imgCount").val();
        var base_url = window.location.origin;
        if(imgCountHold != '0')
        {
            $('#editable #draggable'+(imgCountHold-1)).draggable({ disabled: true });
            $('#editable #resizable'+(imgCountHold-1)).resizable({ disabled: true });
        }
        $("#editable div.setting-2 input#imgCount").val(parseInt(imgCountHold) + 1);
        var hold = $(this).attr('href');
        $(".popupus").hide();
        $(".pop_img2").hide();
        $(".mask").hide();
        $("#editable").append('<img id="uploadLoading" src="/images/712.GIF" style="display: block; position: absolute; top: 50%; left: 50%; margin-left: -33px; margin-top: -33px;z-index: 999999999;">');
        $("div.popup2 > a").trigger('click');
       	$('select.styled').customSelect();
        var img = new Image();
        img.onload = function()
        {
          //  var heightnew = $(this).parent()
            var height = img.height;
            var width = img.width;
            if(imgCountHold == 0)
            {
                $("#editable img").remove();
                $('#editable').prepend('<div id="draggable'+imgCountHold+'" style="z-index:'+imgCountHold+'; position:absolute;"><div><div id="resizable'+imgCountHold+'" style="z-index:'+imgCountHold+'; height:'+height+'px; width:'+width+'px;"><img class="layeredImage" id="images'+imgCountHold+'" src="" style="height:100%; width:100%; z-index:'+imgCountHold+';" /></div></div>');
            }
            else
            {
                $('#editable').prepend('<div id="draggable'+imgCountHold+'" style="z-index:'+imgCountHold+'; position:absolute;"><div><div id="resizable'+imgCountHold+'" style="z-index:'+imgCountHold+'; height:'+height+'px; width:'+width+'px;"><img class="layeredImage" id="images'+imgCountHold+'" src="" style="height:100%; width:100%; z-index:'+imgCountHold+';" /></div></div>');    
            }
            var imgplaceid = 'images'+imgCountHold;
            var imgsrc     = $("#editable").children('img').attr('src');
           
            
            htmledit(imgplaceid,hold,imgsrc);
            $('#editable #draggable'+imgCountHold).draggable();
            $('#editable #resizable'+imgCountHold).resizable({aspectRatio: true, handles: 'ne, se, sw, nw'});
            $("#editable").height(containHeight);
            $("#editable").width(containWidth);
            
        }
        img.src = hold;
        
        
        e.preventDefault();
        e.stopPropagation();
    }); */
    
   $(".pop_img2 div.gallery ul li strong a").live('click',function(e){
       
        var containHeight = $("#editable img").height();
        var containWidth =  $("#editable img").width();
        
        
        var hold = $(this).attr('href');
        //alert(hold);
        $(".popupus").hide();
        $(".pop_img2").hide();
        $(".mask").hide();
        $("div.popup2 > a").trigger('click');
        $('select.styled').customSelect();
        var img = new Image();
        var generalH = containHeight;
        var generalW = containWidth;
        //$("#editable").css('width',containWidth);
//        $("#editable").css('height',containHeight);
        //$("#editable").css('overflow','hidden');
        if($("#editable div#wrapimgdiv").length == 0) 
        { 
            $("#editable img").wrap("<div id='wrapimgdiv'></div>");
            //$("#editable div#wrapimgdiv").css('overflow','hidden'); // 8th move
            $("#editable div#wrapimgdiv img")
            .attr('src',hold)
            .load(function() {
                w = this.width;
                h = this.height;
                if(h < containHeight)
                    generalH = h;
                                    
                
                  
                $("#editable div#wrapimgdiv").css('width',w);
                $("#editable div#wrapimgdiv").css('height','auto');
                //$("#editable div#wrapimgdiv").css('height',generalH);
                
            });
            $("#editable div#wrapimgdiv img").css('width','100%');
            //$("#editable div#wrapimgdiv").css('float',$("#editable div#wrapimgdiv img").css('float'));
            if(typeof $("#editable div#wrapimgdiv img").attr('class') === "undefined"){
                var addingClass="";
            }
            else{
                var addingClass= $("#editable div#wrapimgdiv img").attr('class');
            }
            $("#editable div#wrapimgdiv").addClass(addingClass); 
            $("#editable div#wrapimgdiv img").attr('class',"");
        }
        else
        {   
            $("#editable div#wrapimgdiv img").attr('src',hold);
        }
        //$('#editable div#wrapimgdiv').kinetic(); //8th move    
        e.preventDefault();
        e.stopPropagation();
    });
    
    
    
      $(".pop_img2background div.galleryback ul li strong a").live('click',function(e){
       
        var containHeight = $("#editable img").height();
        var containWidth =  $("#editable img").width();
        
        var hold = $(this).attr('href');
        $(".popupusbackground").hide();
        $(".pop_img2background").hide();
        $(".mask").hide();
		 $("div.pop_img2background > a").trigger('click');
        $('select.styled').customSelect();
        var img = new Image();
        var generalH = containHeight;
        var generalW = containWidth;
          //alert(hold);
           $('.wrapper .SFPTWO_BACKGROUND').css({backgroundImage: "url("+hold+")"});
            $('.wrapper .SFPTWO_BACKGROUND').css('background-position','left top');
            $('.wrapper .SFPTWO_BACKGROUND').css('background-repeat','repeat');
         
        return false;
        //$('#editable div#wrapimgdiv').kinetic(); //8th move    
        e.preventDefault();
        e.stopPropagation();
    });
    
    
    
          $("#image_div ul li strong a").live('click',function(e){
       
        var containHeight = $("#editable img").height();
        var containWidth =  $("#editable img").width();
        
        var hold = $(this).attr('href');
       // $(".popupusbackground").hide(); 
       // $(".pop_img2background").hide();
        $(".mask").hide();
        $('select.styled').customSelect();
        var img = new Image();
        var generalH = containHeight;
        var generalW = containWidth;
        //  alert(hold);
       
           $('.wrapper .SFPTWO_BACKGROUND').css({backgroundImage: "url("+hold+")"});
            $('.wrapper .SFPTWO_BACKGROUND').css('background-position','left top');
            $('.wrapper .SFPTWO_BACKGROUND').css('background-repeat','repeat');
         
        return false;
        //$('#editable div#wrapimgdiv').kinetic(); //8th move    
        e.preventDefault();
        e.stopPropagation();
    });
    
    
    $(".SFPTWO_IMAGEEDIT a.edit").live("click",function(){
         
          $("div.popupusbackground").css('display','none');    
        
        $("#editable img#uploadLoading").hide();
        $('.popupus ul.tabs').find('a#uploadtab7').trigger('click');
        
        var l = 1;
       $("div#buffer > ul >li").each(function(){
         l++;
       });
        var j = l;
  
    $(this).parent().parent().addClass("imgEdit"+j);
        var clss = "imgEdit"+j;
        var html = $(this).parent().parent().html();
        
        var newhtml = "<li class='undo_"+j+++"'><p id='cls'>"+clss+"</p><div id='txt'>"+html+"</div></li>"; 
        $("div#buffer > ul").append(newhtml);
                      
         $("#undoredobuffer").val(j);
         $("#redo").val(j);
         
         
        //$(this).parents('div.SFPTWO_IMAGEEDIT').resizable({aspectRatio: false, handles: 's'});
        var htm = $(".wrapper").html();
        var base_url = window.location.origin;
        var uri = document.URL;
         var res = uri.split("/");
       	$("div.popup, div.popupus").fadeIn(300);
        $('.SFPTWO_IMAGEEDIT').attr('id','');
        $('#upload').remove();
        var url = $("#hid").val();
        //alert(url);
        var uri_new = base_url+"/Frontend/submit/"+url;
        //$(".what_is_this").fadeIn(500); 
        $("#editable").attr("id","");    
        $(this).parent().parent().attr('id','editable');
        $('.layeredImage').draggable();
        var height = $(this).parent().parent().height();
        var width = $(this).parent().parent().width();
        $("#upload").append('<input type="hidden" value="'+height+'" id="htget"/>');
        $("#upload").append('<input type="hidden" value="'+width+'" id="wdget"/>');
       $('.megallery li').find('span.customSelect:not(:last)').remove();
      
       
        return false; 
   });
    
    
     $(".background_bt").live("click",function(){
    	 
		   var effect = 'slide';

      // Set the options for the effect type chosen
       var options = { direction: 'right' };

       // Set the duration (default: 400 milliseconds)
       var duration = 700;
        $(".popupus").hide();  
        $(".slide_popup1").hide();  
        $("div.popup").hide();
        $("ul.ulshow").hide();
        $("div.slide_popup").hide();
        $('.restore1').hide();
        if($("div.user_list").css('display')=='block'){
        	$("div.user").trigger('click');
        }
       
        $("div.popup, div.popupusbackground").toggle(effect, options, duration);              
       
   });
   
     $(".tabup").live("click",function(){
          $(this).parent().addClass('active');
          $(".tabpattern").parent().removeClass('active');
          $(".tabcolor").parent().removeClass('active');
          $(".tabdflt").parent().removeClass('active');
       $(".pickshell").hide();   
        $("#image_div").hide();    
		$("div.pop_img2background").hide();
        $("#defaultdiv").hide();
        $("#tabupload").show();                 
      
   }); 
   
    $(".tabdflt").live("click",function(){
          $(this).parent().addClass('active');
          $(".tabpattern").parent().removeClass('active');
          $(".tabcolor").parent().removeClass('active');
          $(".tabup").parent().removeClass('active');
       $(".pickshell").hide();   
        $("#image_div").hide();    
		$("div.pop_img2background").hide();
          $("#tabupload").hide();            
        $("#defaultdiv").show();                 
      
   }); 
   
        $(".tabpattern").live("click",function(){
            
            $(this).parent().addClass('active');
              $(".tabdflt").parent().removeClass('active');
          $(".tabcolor").parent().removeClass('active');
          $(".tabup").parent().removeClass('active');
       $("#tabupload").hide();  
        $(".pickshell").hide();   
		$("div.pop_img2background").hide();
        $("#defaultdiv").hide();
        $("#image_div").show();                 
      
   }); 
   
     $(".tabcolor").live("click",function(){
          $(this).parent().addClass('active');
           $(".tabdflt").parent().removeClass('active');
          $(".tabpattern").parent().removeClass('active');
          $(".tabup").parent().removeClass('active');
       $("#image_div").hide();   
	   $("#tabupload").hide();  
	   $("div.pop_img2background").hide();
       $("#defaultdiv").hide();
        $(".pickshell").show();                 
      
   }); 
    //Image on Library
    $("#images1").live("change",function() {
        $("#showImagePath").val($("#images1").val());
        $("#editable img#uploadImg").hide();
        $("#editable img#uploadLoading").show();
        hold1 = parseInt(hold) + 1;
        $('#editable #imgCount').val(hold1);    
        var containHeight = $("#editable").height();
        var containWidth =  $("#editable").width();
        $("#image_upload1").ajaxSubmit({
            data : {filename:'images1'},
            success: function(result) {
             //alert(result);
                 $('.activeitimg').remove();
                response = JSON.parse(result); 
                hold = parseInt(hold) + 1;  
                holdClass = 'styled'+hold;             
                $(".pop_img2 div.scroll-pane ul").prepend('<li><strong><a class="imgeditme" href="'+response['originalPath']+'" title="Loading image"><img alt="libraimages" src="'+response['thubnailPath']+'"><img class="activeitimg" src="/popImg/active_img.png" style="position: absolute; margin: 0 0 0 -25px"></a></strong><form name="upload" method="post" action="/"><select class="styled '+holdClass+'" name="select"><option value="select" selected="selected">Select</option><option>Preview</option><option val="'+response['lastInsertId']+'">Delete</option></select></form></li>');
                $('select.'+holdClass).customSelect();
                $("#showUserImageLibrary").trigger('click');
                $('.megallery li').find('span.customSelect:not(:last)').remove();
                
            },
        });
    });
    

    $("#images1background").live("change",function() {
          hold1 = parseInt(hold) + 1;
        
        $("#image_background").ajaxSubmit({
            data : {filename:'images1background'},
            success: function(result) {
            //alert(result);
               $('.activeitimg').remove();
                response = JSON.parse(result); 
                hold = parseInt(hold) + 1;  
                holdClass = 'styled'+hold;             
                $(".pop_img2background div.scroll-pane ul").prepend('<li><strong><a href="'+response['originalPath']+'" title="Loading image"><img alt="libraimages" src="'+response['thubnailPath']+'"><img class="activeitimg" src="/popImg/active_img.png" style="position: absolute; margin: 0 0 0 -25px"></a></strong><form name="upload" method="post" action="/"><select class="styled '+holdClass+'" name="select"><option value="select" selected="selected">Select</option><option>Preview</option><option val="'+response['lastInsertId']+'">Delete</option></select></form></li>');
                $('select.'+holdClass).customSelect();
                $("#showUserImageLibraryback").trigger('click');
                $('.megalleryback li').find('span.customSelect:not(:last)').remove();
                
            },
        });
    });
    
 
 $('.SFPTWO_TEXTEDIT a.edit').live('click',function(){
    
     
          var str = '';
        var  ptagfind = '';
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        str += random;
    
        
       
        if($(this).attr('id')!='editid'){
            
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
         
           
            
                if($('div').hasClass('mce-container')){
                    
                     ptagfind += $('.mce-container').next().attr('id');
                   var getcontents = tinyMCE.activeEditor.getContent({format : 'raw'});
                   
                }
                 
            
            $('.mce-container').next().css('display','block');
            $('.classdelme').attr('id','saveid');
            $('.classdelme').css('background','url("/images/edit_icon2.png")');
            $('.mce-container').remove();
             var pchk = $('#'+ptagfind).html();
             $('#'+ptagfind).html(getcontents);
         
            $(this).parent().parent().find('#mceu_13').remove();
        
         $(this).css('background','url("/images/save_btn.png');
         $(this).attr('id','editid'); 
        $(this).attr('id','editid'); 
        $(this).addClass('classdelme'); 
         $(this).parent().parent().find('.SFPTWO_TAGEDIT').attr('id','editH2'+str);
         findme = $(this).parent().parent().find('.SFPTWO_TAGEDIT').attr('id');
         
        tinymce.execCommand('mceToggleEditor',false,findme); 
        //alert(str); 
       $(".SFPTWO_TEXTEDIT").attr('id','editable');
       }
      
       else{
        
        
         
          $(this).css('background','url("/images/edit_icon2.png")');
         $(this).attr('id','saveid'); 
         tinymce.execCommand('mceToggleEditor',false,findme);  
         var getcontent = tinyMCE.activeEditor.getContent({format : 'raw'});
        $(findme).html(getcontent);
         $(this).parent().parent().find('.mce-container').remove();
        
    
          var ptagidfind= $(this).parent().parent().find('.SFPTWO_TAGEDIT').attr('id');
           ptagidfindhtml = $('#'+ptagidfind).html(); 
            
                 
           $(this).parent().parent().find('.SFPTWO_TAGEDIT').attr('id','');
         
            $(this).parent().parent().prepend(ptagidfindhtml);  
    
          $(".SFPTWO_TEXTEDIT").attr('id','editable');
         
       }
       
      $(this).parent().parent().find('.SFPTWO_TAGEDIT').prev('p').remove();
         
    });   
     //Preview image
    $("select.styled").live('change',function(){
      var base_url = window.location.origin;
        var res = $(this).val();
        if(res.trim() == 'select')
            return false;
        if(res.trim() != 'Preview')
        {
            $(this).parents('li').remove();
              $.ajax({
                type:'POST',
                data:{},
                url:base_url+"/Frontend/delete/"+res,
                success:function(data){}
            });
        }
        else
        {
            var imgPath = $(this).parents('li').find('strong a').attr('href');
            $(".popup3 div.big_img img").attr('src','');
            $(".popup3 div.big_img img").attr('src',imgPath);
            $("div.popup3").fadeIn(300);
            $("body").append("<div class='mask3'></div>");
            return false
        }
        
    });
    

    $("select.styled").live('change',function(){
      var base_url = window.location.origin;
        var res = $(this).val();
        if(res.trim() == 'select')
            return false;
        if(res.trim() != 'Preview')
        {
            $(this).parents('li').remove();
              $.ajax({
                type:'POST',
                data:{},
                url:base_url+"/Frontend/delete/"+res,
                success:function(data){}
            });
        }
        else
        {
            var imgPath = $(this).parents('li').find('strong a').attr('href');
            $(".popup3 div.big_img img").attr('src','');
            $(".popup3 div.big_img img").attr('src',imgPath);
            $("div.popup3").fadeIn(300);
            $("body").append("<div class='mask3'></div>");
            return false
        }
        
    });


       //template saved
    $("div.option a.save").live('click',function(){
         var base_url = window.location.origin;
        $(".setting-2").remove();
        $('.setedit').remove();
        $('.seteditopt').remove();
        $('.seteditdrop').remove();
        $(".liClose").remove();
        $('li').removeClass('dottedLi');
//        $("#selectContainer").remove();
        $(".dotted").removeClass('dotted');
        $(".checksboxes").attr('id','checksboxes');
        $(".deleteCheckbox").remove();
        $("#readdCheckbox").remove();
        var arr = $(".checksboxes p");
        for(i = 0; i<arr.length; i++)
        {
            var Holdhtml = $(arr[i]).find('span').html();
            $(arr[i]).find('span').remove();
            $(arr[i]).html(Holdhtml)
        }
       // $("#ups").trigger('click');
        $("a.savechecklabel").trigger('click');
        var uri = base_url+'/Frontend/savetemplate';
        var html = $(".wrapper").html();
        $.ajax({
            type:'POST',
            data:{html:html,tempName:document.URL},
            url: uri,
            success:function(data){
                alert('Template Saved');
                window.location.reload(); 
            }
        });
    });

//for edit part

    $("a.deleteCheckbox").live('click',function(){
        $(this).parent().parent().remove();    
    });
    
    $("#editable").find('p.changeable').live('click',function(){
        $("a.savechecklabel").trigger('click');
        $(".now").removeClass('now');
        $(this).removeClass('changeable');
        $(this).addClass('now');
        var checklable = $(this).find('span').html();
        $(this).find('span').html("");
        $(this).prepend('<input type="text" value="'+checklable+'" style="border:1px solid #000" /><a href="javascript:void(0)" class="savechecklabel">save</a>');
        
    });
    $('a.savechecklabel').live('click',function(){
       var labelText = $(this).prev().val();
       $(this).prev().remove();
       $(this).parent().find('span').html(labelText);
       $(this).parent().addClass('changeable');
       $(this).remove(); 
       
    });
    
    //Undo Redo
      
    $('body').on('click', '.undo_btn_hughhuygughuignghuhhuh45656656', function(event) {
       
    	 $(".popupus").hide();  
         $(".slide_popup1").hide();  
         $("div.popup").hide();
         $("ul.ulshow").hide();
         $("div.slide_popup").hide();
         $('.restore1').hide();
         if($("div.user_list").css('display')=='block'){
         	$("div.user").trigger('click');
         }
        
         $("div.popup, div.popupusbackground").hide();   
        
     var undoredobuffer = $("#undoredobuffer").val();
     
        undoredobuffer = parseInt(undoredobuffer)- parseInt(1) ;
        
        if(undoredobuffer <= 0)
        {
            return false;
        }
        var j = undoredobuffer;
        
            $("div#buffer > ul > li").each(function(){
               
               if($(this).hasClass('undo_'+j))
               {
                var undocls = $(this).find('p#cls').text();
               var res = $('.wrapper').find("."+undocls).html();
               if($(this).find('p#cross').text() == "cross")
              {
                var nhtml = "<li class='redo_"+j+"'><p id='cls1'>"+undocls+"</p><p id='cross'>cross</p><div id='txt1'>"+res+"</div></li>";
              }
              else
              {
               var nhtml = "<li class='redo_"+j+"'><p id='cls1'>"+undocls+"</p><div id='txt1'>"+res+"</div></li>"; 
              }
                 
               $("div#buffer1 > ul").append(nhtml);
               if(undocls.match(/tagsimg/g))
               {
                 $("."+undocls).show();
                 return false;
               }
                if(undocls.match(/imagesEditable/g))
               {
                 $("."+undocls).hide();
             
                 return false;
               }
              
                var html = $(this).find('div#txt').html();
                
                
                $('.'+undocls).html(html);

                if($('.'+undocls).hide())
                {
                $('.'+undocls).show();
                }
                 //undoredobuffer = parseInt(undoredobuffer) - parseInt(1);
               
                
               }
            });
            
          $("#undoredobuffer").val(j);    

    }); 
    $(".redo_btn_hughhuygughuignghuhhuh45656656").live('click',function(){

    	

   	 $(".popupus").hide();  
        $(".slide_popup1").hide();  
        $("div.popup").hide();
        $("ul.ulshow").hide();
        $("div.slide_popup").hide();
        $('.restore1').hide();
        if($("div.user_list").css('display')=='block'){
        	$("div.user").trigger('click');
        }
       
        $("div.popup, div.popupusbackground").hide();   
       
        var undoredobuffer = $("#undoredobuffer").val();
     var redobuffer = $("#redo").val();
     
       if(undoredobuffer >= redobuffer)
        {
           // alert("hjh");
            $("div#buffer1").html('<ul></ul>');
            return false;
        }
       
       
        var j = undoredobuffer;
        
            $("div#buffer1 > ul > li").each(function(){
               
               if($(this).hasClass('redo_'+j))
               {
                var undocls = $(this).find('p#cls1').text();
              
                var html = $(this).find('div#txt1').html();
                //alert(undocls);
                //alert(html);
                if($(this).find('p#cross').text() == "cross")
                {
              if(undocls.match(/imagesEditable/g))
               {
                 $("."+undocls).show();
                
               }
               else
               {
                  $('.'+undocls).hide();  
                  }
                }
                else
                {
                  $('.'+undocls).html(html);  
                }
                
                
                
               }
            });
      j++;
      $("#undoredobuffer").val(j);
            
        });
        
       
       //$('body').find('.wrapper').on('click', '.SFPTWO_TAGEDIT', function(event) {
      /* $(".wrapper").find('.SFPTWO_TAGEDIT').click(function(e) {
        alert("hello");
         var l = 1;
       $("div#buffer > ul >li").each(function(){
         l++;
       });
     var j = l; 
     
        if ($(this).attr("contentEditable") == "true") {
         var htm = $(this).attr('class').split('tag_');
        var html = $(".tag_"+htm[1]).html();
        
        var newhtml = "<li class='undo_"+j+++"'><p id='cls'>tag_"+htm[1]+"</p><div id='txt'>"+html+"</div></li>"; 
        $("div#buffer > ul").append(newhtml);
           alert(j);             
         $("#undoredobuffer").val(j);
         $("#redo").val(j);
            }
            
            
           
            });  */
    
      $('body').find('.wrapper').on('click', '.SFPTWO_TAGEDIT', function(event) {
        
         var l = 1;
       $("div#buffer > ul >li").each(function(){
         l++;
       });
     var j = l; 
     
        if ($(this).attr("contentEditable") == "true") {
            var html = $(this).attr('class').split('tagdelete');
            var htm =html[0].split('tag_');
         
        var html = $(".tag_"+htm[1]).html();
       //alert(htm[1])
        var newhtml = "<li class='undo_"+j+++"'><p id='cls'>tag_"+htm[1]+"</p><div id='txt'>"+html+"</div></li>"; 
        $("div#buffer > ul").append(newhtml);
                       
         $("#undoredobuffer").val(j);
         $("#redo").val(j);
        
            }
            
            
           
            }); 
            
            
                                                
    /*----------------------------------------------------Aritra work start----------------------------------------------*/
     $('body').on('click',".done", function(event) {
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
    $('#tab1new').trigger('click');
        $('.slide_popup1').toggle(effect, options, duration);
        $('.slide_popup2').toggle(effect, options, duration);
        
        });
    
    
          

 /*----------------------------------------------------Aritra work End----------------------------------------------*/   

    $(".SFPTWO_EDITFORM a.edit").live('click',function(){
    
       
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
         $(".SFPTWO_EDITFORM").attr('id','editable');
         var str = '';
        var  ptagfind = '';
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        str += random;
    
        
       
        if($(this).attr('id')!='editformid'){
           // alert('me');
            
                if($('div').hasClass('mce-container')){
                    
                     ptagfind += $('.mce-container').next().attr('id');
                   var getcontents = tinyMCE.activeEditor.getContent({format : 'raw'});
                   
                }
                 
            
            $('.mce-container').next().css('display','block');
            $('.classdel').attr('id','saveformid');
            $('.classdel').css('background','url("/images/edit_icon2.png")');
            $('.mce-container').remove();
             var pchk = $('#'+ptagfind).html();
             $('#'+ptagfind).html(getcontents);
           // $('.mce-container').next().css('display','block');
           // $(this).parent().parent().attr('class','activethis');
            $(this).parent().parent().find('#mceu_13').remove();
         //$(this).parent().parent().find('input').remove();
         $(this).css('background','url("/images/save_btn.png');
         $(this).attr('id','editformid'); 
        $(this).attr('id','editformid'); 
        $(this).addClass('classdel'); 
         $(this).parent().parent().find('p').attr('id','editH2'+str);
         findme = $(this).parent().parent().find('p').attr('id');
         
        tinymce.execCommand('mceToggleEditor',false,findme); 
        //alert(str); 
       $(".SFPTWO_EDITFORM").attr('id','editable');
       }
      
       else{
        
        
         // alert('not me');
          $(this).css('background','url("/images/edit_icon2.png")');
         $(this).attr('id','saveformid'); 
         tinymce.execCommand('mceToggleEditor',false,findme);  
         var getcontent = tinyMCE.activeEditor.getContent({format : 'raw'});
        $(findme).html(getcontent);
         $(this).parent().parent().find('.mce-container').remove();
        
        // $(this).parent().parent().find('p').css('display','block');
        //alert(str);
          var ptagidfind= $(this).parent().parent().find('p').attr('id');
           ptagidfindhtml = $('#'+ptagidfind).html(); 
            
                 
           $(this).parent().parent().find('p').attr('id','');
          $(this).parent().parent().find('p').remove();
            $(this).parent().parent().prepend(ptagidfindhtml);  
       // $(this).parent().parent().find('ul li').removeClass('dottedLi');
          $(".SFPTWO_EDITFORM").attr('id','editable');
          
       }
       
        
        
              
                
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
      // $('form.editform .sortable-list').sortable('disable');
        //$("#editable").attr('id','');
        //$(this).parent().hide();
        $(this).parent().parent().attr('id','editable');
//        $(this).parent().parent().prepend(selectContainer);
        $(this).parent().parent().find('ul li').addClass('dottedLi');
        var liItems = $(this).parent().parent().find('ul li');
        liItems.each(function(idx, li) {
             $(li).append('<a class="liClose">X</a>');
        });
        //$("#checksboxes").addClass('dotted');
        //$(this).parent().parent().find('div.jui-checkbox-row').css('border','1px dashed #000');
//        $(this).parent().parent().find('div.jui-checkbox-row').append('<a href="javascript:void(0)" class="deleteCheckbox">x</a>');
    })
    
    $("#editable ul li label").live('click',function(){
       // $("#ups").trigger('click');
        var text = $(this).html();
        $('.editor').removeClass('editor');
        $(this).addClass('editor');
        $('.editor').hide();
        
      //  $(this).parent().prepend('<div style="display: block;" id="edittext"><textarea id="textdyn" style="width:100%">'+text+'</textarea><input type="button" class="css3button" value="update" id="ups" /></div>');
    var area = new nicEditor({buttonList : ['fontFamily','fontSize','left','center','right','justify','bold','italic','underline']}).panelInstance('textdyn');
        
    });
    
    $('li a.liClose').live('click',function(){
       $(this).parent().slideUp();
       $(this).parent().remove(); 
       $(".SFPTWO_EDITFORM").attr('id','editable');
    });
    
});

//image Library popup close
 function imageclose()
 {
        
        $(".pop_img2").hide();
        $(".popupus").show();
        $(".mask").hide();
      
        setTimeout(function(){     
        
            $('.SFPTWO_IMAGEEDIT').find('.setting-2 a').removeClass('SFPdisabled');
            $('.SFPTWO_TEXTEDIT').find('.setting-2').find('a.edit').remove();
            $('.SFPTWO_TAGEDIT').find('.setting-2').find('a.edit').remove();
            $('.SFPTWO_TEXTEDIT').find('.setting-2 a').removeClass('SFPdisabled');
            $('.SFPTWO_TAGEDIT').find('.setting-2 a').removeClass('SFPdisabled');
            $('.imgedivdrg').removeClass('SFPdisabled');
            $('.closethisdrag').removeClass('SFPdisabled');
            //$('.urlset').removeClass('disabled'); 
          }, 50);
          
       
 }
  
  function closebackgroundmain()
 {
        
        $(".popupusbackground").hide();
        
      
        setTimeout(function(){     
        
            $('.SFPTWO_IMAGEEDIT').find('.setting-2 a').removeClass('SFPdisabled');
            $('.SFPTWO_TEXTEDIT').find('.setting-2').find('a.edit').remove();
            $('.SFPTWO_TAGEDIT').find('.setting-2').find('a.edit').remove();
            $('.SFPTWO_TEXTEDIT').find('.setting-2 a').removeClass('SFPdisabled');
            $('.SFPTWO_TAGEDIT').find('.setting-2 a').removeClass('SFPdisabled');
            $('.imgedivdrg').removeClass('SFPdisabled');
            $('.closethisdrag').removeClass('SFPdisabled');
            //$('.urlset').removeClass('disabled'); 
          }, 50);
          
       
 }
  
  
  function imageclosebackground()
 {
        
        $(".pop_img2background").hide();
        $(".popupusbackground").show();
        $(".mask").hide();
      
        setTimeout(function(){     
        
            $('.SFPTWO_IMAGEEDIT').find('.setting-2 a').removeClass('SFPdisabled');
            $('.SFPTWO_TEXTEDIT').find('.setting-2').find('a.edit').remove();
            $('.SFPTWO_TAGEDIT').find('.setting-2').find('a.edit').remove();
            $('.SFPTWO_TEXTEDIT').find('.setting-2 a').removeClass('SFPdisabled');
            $('.SFPTWO_TAGEDIT').find('.setting-2 a').removeClass('SFPdisabled');
            $('.imgedivdrg').removeClass('SFPdisabled');
            $('.closethisdrag').removeClass('SFPdisabled');
            //$('.urlset').removeClass('disabled'); 
          }, 50);
          
       
 }
  
  
  
 function popupimgclose()
 {
    $("div.popupimg").hide();
    var getselectfirst =($(".styled option:first").val());
   $(".styled").val(getselectfirst);
   $(".styled option:first").attr('selected','selected'); 
   $(".customSelect").text(getselectfirst); 
 }

function defaults(e)
{
    e.stopPropagation();  
    e.preventDefault();  
}
function dragenter(e) { defaults(e); }
function dragover(e) { defaults(e); }
function dragleave(e) { defaults(e); } 
function drop(e)
{
    defaults(e);
    var dt = e.dataTransfer;  
    var files = dt.files;
    handleFiles(files,e);   
}
handleFiles = function (files,e){
    var imageType = /image.*/;  
    var file = files[0];
    console.log(file);
    if (!file.type.match(imageType)) 
    {  
		  alert("File \""+file.name+"\" is not a valid image file, Are you trying to screw me :( :( ");
		  return false;	
	}
    else
    {
        $("#showImagePath").val(file.name);
    }
    uploadFile(file); 
    
}
uploadFile = function(file){
    $("#editable img#uploadImg").hide();
    $("#editable img#uploadLoading").show();
    var hold = $('#editable #imgCount').val();
    hold1 = parseInt(hold) + 1;
    $('#editable #imgCount').val(hold1);  
	//alert("uploading "+file.name);
    var containHeight = $("#editable").height();
    var containWidth =  $("#editable").width();
    var imgplaceid = $("#editable").children('img').attr('id');
    var imgsrc     = $("#editable").children('img').attr('src');
    
    reader = new FileReader();
    reader.readAsDataURL(file);
    xhr = new XMLHttpRequest();
    var url = $("#hid").val();

	xhr.open("post", uri_new, true);
    
    xhr.onreadystatechange = function (oEvent) {  
	  if (xhr.readyState === 4) {  
		if (xhr.status === 200) {
            var img = new Image();
            response = JSON.parse(xhr.responseText);
            hold = parseInt(hold) + 1;  
            holdClass = 'styled'+hold;             
            $(".pop_img2 div.scroll-pane ul").prepend('<li><strong><a href="'+response['originalPath']+'" title="Loading image"><img alt="libraimages" src="'+response['thubnailPath']+'"><img src="/popImg/active_img.png" style="position: absolute; margin: 0 0 0 -25px"></a></strong><form name="upload" method="post" action="/"><select class="styled '+holdClass+'" name="select"><option value="select" selected="selected">Select</option><option>Preview</option><option value="'+response['lastInsertId']+'">Delete</option></select></form></li>');
            $('select.'+holdClass).customSelect();
            $("#showUserImageLibrary").trigger('click');
        } else {  
            alert("Error"+ xhr.statusText);  
		}  
	  }  
	};
    
    // Set headers
	xhr.setRequestHeader("Content-Type", "multipart/form-data");
	xhr.setRequestHeader("X-File-Name", file.fileName);
	xhr.setRequestHeader("X-File-Size", file.fileSize);
	xhr.setRequestHeader("X-File-Type", file.type);

	// Send the file (doh)
	xhr.send(file);
}

function htmledit(imgid,imgpath,imgsrc)
{
    $('#editable #'+imgid).attr("src","");
    $('#editable  #'+imgid).attr("src",imgpath).load(function() { $("#editable img#uploadLoading").remove(); });
}
    
    
//default functionality
function appendall(newurl) 
{    
	//$(".wrapper .SFPTWO_TEXTEDIT").find('.btn_set').remove();  
	 if($('.textme').length == 0)
     {	 
		
   	 
	$(".wrapper .SFPTWO_IMAGEEDIT").before('<div class="textme" style="display:inline;"></div>');
	$(".wrapper .SFPTWO_TEXTEDIT").before('<div class="textme" style="display:inline;"></div>');
     }
	 else
	{
		 var geetme = 0;
	}	 
   $(".wrapper .SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");
//    $(".SFPTWO_TAGEDIT").attr('contenteditable','true');
    $(".wrapper .SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a></div>");
    
    $(".wrapper .SFPTWO_TIMER").append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a title='Timer' class='timer' href='javascript:void(0)'></a></div>");
    
      if($(".wrapper .SFPTWO_TEXTEDIT").find('a').hasClass('sfpDynamic'))
       {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
	    }
         
      
      if($(".wrapper .SFPTWO_IMAGEEDIT").find('a').hasClass('sfpDynamic'))
      {  
   	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').find('.setting-2').remove();
			    setTimeout(function(){
              $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");

           },1000);
		
	    }
        
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicLike'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicLike").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicLike").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicGoogle'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicGoogle").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicGoogle").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 } 
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicShare'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicShare").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicShare").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweet'))
		  { 
		      //alert("hh");
   	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweet").find('.setting-2').remove();
			    setTimeout(function(){
              $(".sfpfbDynamicTweet").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

           },1000);
		
		 }
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweetBird'))
		  { 
		      //alert("hh");
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweetBird").find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpfbDynamicTweetBird").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

          },1000);
		
		 }
         
       
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicLinkedin'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicLinkedin").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicLinkedin").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
            if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicPinterest'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicPinterest").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicPinterest").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicMail'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicMail").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicMail").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
       $(".wrapper .SFPTWO_EDITFORM ul").find("li").append('<div id="ullidrag" class="ullidrag" style="display:none; cursor:move;"><img src="/img/1416497040_cursor_drag_arrow_2.png"/></div><div class="setting-2 prevnext" style="display:none;"><a title="delete" class="delete" href="javascript:void(0)"></a><a title="Spacing" class="spacing" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div>');
    //$(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
        $(".wrapper .SFPTWO_TAGEDIT").addClass("explicit_edit");
        
        $(".wrapper .nowdrag").parent().find('.setting-2').remove();
       
//$('form.editform .sortable-list').sortable();
          if($(".wrapper .SFPTWO_TEXTEDIT").find('a').hasClass('sfpDynamic'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").find('a').hasClass('sfpDynamic'))
          {  
       	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
    		    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').find('.setting-2').remove();
    			    setTimeout(function(){
                  $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");

               },1000);
    		
    	    }
         
          
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicGoogle'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicGoogle").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicGoogle").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
        
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweet'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweet").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicTweet").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
          
     
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweetBird'))
		  { 
		      //alert("hh");
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweetBird").find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpfbDynamicTweetBird").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

          },1000);
		
		 }
         
       
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicLinkedin'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicLinkedin").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicLinkedin").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
         
           if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicPinterest'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicPinterest").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicPinterest").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicMail'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicMail").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicMail").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
		//$(".setting-2").find('.btn_set').remove();
			//$(".ullidrag").find('.btn_set').remove();
}

function addCheckbox()
    {
        $("#readdCheckbox").remove();
        $("#editable #checksboxes").append('<div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="1"> </span><p class="dotted changeable"><span>option</span><a class="deleteCheckbox" href="javascript:void(0)">x</a></p></div><a id="readdCheckbox" href="javascript:void(0)" onclick="addCheckbox()" >add field</a>');
    }
     var count = 1;
     var time = 1;
     var capcha = 1; 
     



  
  $(window).scroll(function () {
   set = $(document).scrollTop()+"px";
   $('.left_nav_jhuddgdgdfgdsafghugfxhughug456656437').animate({top:set},{duration:1000,queue:false});
  });
  
   
  
  
  /*function lgot(){
      FB.init({ 
       appId:'502186369918571', cookie:true, 
       status:true, xfbml:true 
   });
   FB.getLoginStatus(function(response) {
        if (response && response.status === 'connected') {
            FB.logout(function(response) {
                document.location.reload();
            });
        }
    });
   
  }*/
  
  
  //Get page from Folder
function requestUrlWithAjax(url)
{
    
    $('.spacediv').css('display','none');
    
    //$("div.slide_popup").hide();
    //$("div.slide_popup_indexus").hide();
    $("div#buffer").html('<ul></ul>');
    $("div#buffer1").html('<ul></ul>');
     $(".overlay").show();
       $('.explicit_edit').attr('contenteditable','false');
       urls = url.split("/"); 
      var wrappercontent = $('.wrapper').html();
     var urlchk = $(location).attr('href'); 
     urlchk = urlchk.split("/"); 
       
   //  alert (urlchk);       
     urlchk = urlchk[5];  
      var filename = $('#filename').val(); 
      var base_url = window.location.origin;      
     //alert(urlchk);
      $('.wrapper div.setting-2').remove();
      $('.setedit').remove();
      $('.seteditopt').remove();
     $('.seteditdrop').remove();
    $('.wrapper div.ullidrag').remove();
    $('.wrapper .explicit_edit').attr('contenteditable',false); 
    
    $(".wrapper .ui-resizable-handle").remove();
        
    $('.wrapper .explicit_edit').removeAttr('contenteditable');
    
    
    $(".wrapper .SFPTWO_TAGEDIT").removeClass("explicit_edit");
    $(".wrapper .SFPTWO_TEXTEDIT").removeClass("explicit_edit");
    
    $('.wrapper input[type="file"]').removeClass('inputdisabled');
    $('.wrapper input[type="submit"]').removeClass('inputdisabled');
    $('.wrapper input[type="button"]').removeClass('inputdisabled');
    $('.wrapper button').removeClass('inputdisabled');
    $('.wrapper .inputdisabled').removeAttr('SFPdisabled');
    $('.wrapper a').removeClass('SFPdisabled'); 
    $('.wrapper input[type="file"]').removeAttr('SFPdisabled');
    $('.wrapper input[type="submit"]').removeAttr('SFPdisabled');
    $('.wrapper input[type="button"]').removeAttr('SFPdisabled');
    $('.imgedivdrg').removeClass('SFPdisabled');
    $('.closethisdrag').removeClass('SFPdisabled');
    $('.slide_popup').hide();
    //$('.urlset').removeClass('disabled'); 
    $.ajax({
            type:'POST',
            data:{wrappercontent:wrappercontent,urlchk:urlchk,filename:filename},
            url:base_url+"/Frontend/savepage1",
            success:function(data){
              $('#filename').val(urls[5]);
             
   // alert(url);
    var xmlhttp;
   //alert(url);
    //1. create the xmlhttp object
 
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        // $(".overlay").hide();
          $('.explicit_edit').attr('contenteditable','true');                  
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
         // $(".overlay").hide();
           $('.explicit_edit').attr('contenteditable','true');                              
    }
 
    //2. assign the handler for the onchange event of the object
    xmlhttp.onreadystatechange=function()
    {
        
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            //var found = xmlhttp.responseText.search("</body");
//            alert(found);
            // we arrive here when we have successfully retrieved  the url we asked for
            //1. Set the response text to the text area's value
            
            //alert(xmlhttp.responseText);
                var gethtml = xmlhttp.responseText;
            var xmlgethtmlform = gethtml.indexOf("{{htmlform}}"); 
            if(xmlgethtmlform != -1)
            {
                var statform = '<form action="" class="SFPTWO_EDITFORM" style="margin-top:25px;"><ul class="sortable-list"><li><p >Email address</p><input name="" type="text" /><div class="setting-2"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a title="Spacing" class="spacing" href="javascript:void(0)"></a></div></li><li><p>What kind of campaign are you Looking for?</p2><div class="checksboxes" style="float:left; width:70%;"><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="1" /> </span><p>option</p></div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="2" /> </span><p>option</p></div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="3" /></span><p>option</p></div></div><div class="setting-2"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div> </li><li><p  >Your message</p><textarea name="" cols="" rows=""></textarea><div class="setting-2"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div> </li><li><input name="" type="submit" value="Send"><div class="setting-2"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a title="Spacing" class="spacing" href="javascript:void(0)">spacing</a></div></li></ul></form>';
                var remhtmlform = gethtml.replace('{{htmlform}}', statform);
                var d = new Date();
            var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
            //console.log(time);
            //alert(time);
            var inputtime = $('#saveautosave').val();
            //alert(inputtime)
            if(time == inputtime)
            {
             
              
            $('.wrapper').html(remhtmlform);
            setTimeout(function(){ var base_url = window.location.origin;
    var uri = document.URL;

    var res = uri.split("/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res[5];
    
    
    var i =1;
      $(".wrapper").find('.SFPTWO_TAGEDIT').each(function(){
        var tag = "tag_"+i;
        $(this).addClass(tag);
        $("#undoredochk").val(i);
        $(this).addClass('tagdelete');
        i++;
        
      });  
  
      var k =1;
      $(".wrapper").find('.SFPTWO_TEXTEDIT').each(function(){
        var tag = "tags_"+k;
        $(this).addClass(tag);
         $("#undoredochkdel").val(k);
         $(this).addClass('texttagdelete');
         k++;
      });   
  
      var s =1;
      $(".wrapper").find('.SFPTWO_IMAGEEDIT').each(function(){
        var tag = "tagsimg_"+s;
        $(this).addClass("nownsfpimgdel");
        $(this).addClass(tag);
        s++;
      });
      
      if($('.textme').length == 0)
      {	 
 		
         $(".wrapper .SFPTWO_IMAGEEDIT").before('<div class="textme" style="display:inline;"></div>');
	     $(".wrapper .SFPTWO_TEXTEDIT").before('<div class="textme" style="display:inline;"></div>');
      } 
      else
    {
    	  var geetme = 0;
     }
	     $(".wrapper .SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a></div>");
    //$(".SFPTWO_TAGEDIT").attr('contenteditable','true');
    $(".wrapper .SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'>spacing</a></div>");
   // $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>"); 
   // $(".overlay").hide();
   
      $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".selectboxaddnow").append('<div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
    $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".chkboxaddnow").append('<div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
      $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".dropdowndrag").append('<div class="seteditdrop"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
     if($(".wrapper .SFPTWO_TEXTEDIT").find('a').hasClass('sfpDynamic'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
     
     if($(".wrapper .SFPTWO_IMAGEEDIT").find('a').hasClass('sfpDynamic'))
     {  
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");

          },1000);
		
	    }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicLike'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicLike").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicLike").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicShare'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicShare").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicShare").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }  
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweet'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweet").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicTweet").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
    
          
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweetBird'))
		  { 
		      //alert("hh");
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweetBird").find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpfbDynamicTweetBird").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

          },1000);
		
		 }
         
       
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicLinkedin'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicLinkedin").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicLinkedin").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
            if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicPinterest'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicPinterest").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicPinterest").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicMail'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicMail").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicMail").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
       $('div.setting-2 a').removeClass('SFPdisabled');  
       $('div.setedit a').removeClass('SFPdisabled'); 
      $('div.seteditopt a').removeClass('SFPdisabled');  
       $('div.seteditdrop a').removeClass('SFPdisabled');
       //$('.urlset').removeClass('disabled'); 
    }, 6000);
     $('.explicit_edit').attr('contenteditable','true'); 
    
    $('.wrapper input[type="file"]').addClass('inputdisabled');
$('.wrapper input[type="submit"]').addClass('inputdisabled');
$('.wrapper input[type="button"]').addClass('inputdisabled');
$('.wrapper button').addClass('inputdisabled');
//$('.wrapper .inputdisabled').attr('disabled', 'disabled');
$('.wrapper a').addClass('SFPdisabled');
 $('div.setting-2 a').removeClass('SFPdisabled');  
 $('div.setedit a').removeClass('SFPdisabled'); 
 $('div.seteditopt a').removeClass('SFPdisabled');  
$('div.seteditdrop a').removeClass('SFPdisabled'); 
$('.SFPTWO_EDITFORM a').removeClass('SFPdisabled');
$('.imgedivdrg').removeClass('SFPdisabled');
$('.closethisdrag').removeClass('SFPdisabled');
//$('.urlset').removeClass('disabled'); 
  $('.enteroff').keydown(function(event){
                if(event.keyCode == 13) {
                 event.preventDefault();
                 return false;
                    }
                    });
                     var getfirstlength = '' ;
          $('.autosize').one('keyup',function(){
              getfirstlength += $(this).find('a').css("fontSize");
              //alert(getfirstlength);
          });
     var getfirstlength = '';
          $('.autosize').one('keyup',function(){
              getfirstlength += $(this).find('a').css("fontSize");
              //alert(getfirstlength);
          });
          
           $('.autosize').keyup(function(e){
           
           var getcurrentlength = ($(this).text().length);
          //  alert("ff");
           var prev = ($(this).attr('rel'));
           var newprev = 0;
           
           var gtsize = $(this).find('.autosizethis').css("fontSize");
            
            if(prev<getcurrentlength){
                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
                //alert("text");
               // alert($(this).attr('rel'));
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                // alert(gtsize);
            }
           
            else if(e.keyCode == 8)
            {
                
            
               //  alert("backspace");
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));  
            }
               
            else if( e.keyCode == 46)
            {
                
              e.stopPropagation();
            }
            
            else if(e.keyCode != 8){
                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
              //  alert("now");
               // alert($(this).attr('rel'));
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                // alert(gtsize);
            }
          
        
        });
                 $('.autosize').keydown(function(e){
             var getcurrentlength = ($(this).text().length);
            
           var prev = ($(this).attr('rel'));
           var newprev = 0;
           
           var gtsize = $(this).find('.autosizethis').css("fontSize");
           
          if(e.keyCode == 8)
            {
                
            
               //  alert("backspace");
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));  
            }
               
            else if( e.keyCode == 46)
            {
                
              e.stopPropagation();
            }
          
          
        
        });        
                         
            }
            else
            {
               
                     $('.wrapper').html(remhtmlform);
                     setTimeout(function(){ var base_url = window.location.origin;
    var uri = document.URL;

    var res = uri.split("/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res[5];
    var i =1;
      $(".wrapper").find('.SFPTWO_TAGEDIT').each(function(){
        var tag = "tag_"+i;
        $(this).addClass(tag);
        $("#undoredochk").val(i);
        $(this).addClass('tagdelete');
        i++;
        
      });  
  
      var k =1;
      $(".wrapper").find('.SFPTWO_TEXTEDIT').each(function(){
        var tag = "tags_"+k;
        $(this).addClass(tag);
         $("#undoredochkdel").val(k);
         $(this).addClass('texttagdelete');
         k++;
      });   
  
      var s =1;
      $(".wrapper").find('.SFPTWO_IMAGEEDIT').each(function(){
        var tag = "tagsimg_"+s;
        $(this).addClass("nownsfpimgdel");
        $(this).addClass(tag);
        s++;
      });
         if($('.textme').length == 0)
         {	 
 		
                $(".wrapper .SFPTWO_IMAGEEDIT").before('<div class="textme" style="display:inline;"></div>');
              $(".wrapper .SFPTWO_TEXTEDIT").before('<div class="textme" style="display:inline;"></div>');
         } 
         
         else
         {
        	 var geetme = 0;
         }
              $(".wrapper .SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a></div>");
             // $(".SFPTWO_TAGEDIT").attr('contenteditable','true');
        $(".wrapper .SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a></div>");
      //  $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>"); 
        // $(".overlay").hide();
          $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".selectboxaddnow").append('<div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
    $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".chkboxaddnow").append('<div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
      $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".dropdowndrag").append('<div class="seteditdrop"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
       if($(".wrapper .SFPTWO_TEXTEDIT").find('a').hasClass('sfpDynamic'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
       
       if($(".wrapper .SFPTWO_IMAGEEDIT").find('a').hasClass('sfpDynamic'))
       {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
 		    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').find('.setting-2').remove();
 			    setTimeout(function(){
               $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");

            },1000);
 		
 	    }
         
       if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicLike'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicLike").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpfbDynamicLike").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicGoogle'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicGoogle").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicGoogle").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicShare'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicShare").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicShare").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }  
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweet'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweet").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicTweet").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
          
   
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweetBird'))
		  { 
		      //alert("hh");
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweetBird").find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpfbDynamicTweetBird").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

          },1000);
		
		 }
         
       
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicLinkedin'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicLinkedin").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicLinkedin").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
            if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicPinterest'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicPinterest").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicPinterest").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicMail'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicMail").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicMail").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
       $('div.setting-2 a').removeClass('SFPdisabled');  
       $('div.setedit a').removeClass('SFPdisabled'); 
      $('div.seteditopt a').removeClass('SFPdisabled');  
       $('div.seteditdrop a').removeClass('SFPdisabled'); 
        }, 6000);
        $('.explicit_edit').attr('contenteditable','true'); 
       $('.wrapper input[type="file"]').addClass('inputdisabled');
        $('.wrapper input[type="submit"]').addClass('inputdisabled');
        $('.wrapper input[type="button"]').addClass('inputdisabled');
        $('.wrapper button').addClass('inputdisabled');
//        $('.wrapper .inputdisabled').attr('disabled', 'disabled');
        $('.wrapper a').addClass('SFPdisabled');
         $('div.setting-2 a').removeClass('SFPdisabled');  
         $('div.setedit a').removeClass('SFPdisabled'); 
         $('div.seteditopt a').removeClass('SFPdisabled');  
         $('div.seteditdrop a').removeClass('SFPdisabled'); 
        $('.SFPTWO_EDITFORM a').removeClass('SFPdisabled');
        $('.imgedivdrg').removeClass('SFPdisabled');
        $('.closethisdrag').removeClass('SFPdisabled');
        //$('.urlset').removeClass('disabled'); 
           $('.enteroff').keydown(function(event){
                if(event.keyCode == 13) {
                 event.preventDefault();
                 return false;
                    }
                    });        
                
                        var getfirstlength = '' ;
          $('.autosize').one('keyup',function(){
                       
              getfirstlength += $(this).find('a').css("fontSize");
              //alert(getfirstlength);
          });
     var getfirstlength = '';
          $('.autosize').one('keyup',function(){
              getfirstlength += $(this).find('a').css("fontSize");
              //alert(getfirstlength);
          });
          
           $('.autosize').keyup(function(e){
           
           var getcurrentlength = ($(this).text().length);
            
           var prev = ($(this).attr('rel'));
           var newprev = 0;
           
           var gtsize = $(this).find('.autosizethis').css("fontSize");
            
            if(prev<getcurrentlength){
                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
                //alert("text");
               // alert($(this).attr('rel'));
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                // alert(gtsize);
            }
           
            else if(e.keyCode == 8)
            {
                
            
               //  alert("backspace");
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));  
            }
               
            else if( e.keyCode == 46)
            {
                
              e.stopPropagation();
            }
            
            else if(e.keyCode != 8){
                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
              //  alert("now");
               // alert($(this).attr('rel'));
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                // alert(gtsize);
            }
          
        
        });
                $('.autosize').keydown(function(e){
             var getcurrentlength = ($(this).text().length);
            
           var prev = ($(this).attr('rel'));
           var newprev = 0;
           
           var gtsize = $(this).find('.autosizethis').css("fontSize");
           
          if(e.keyCode == 8)
            {
                
            
               //  alert("backspace");
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));  
            }
               
            else if( e.keyCode == 46)
            {
                
              e.stopPropagation();
            }
          
          
        
        });
               
            }
               
                //alert(remhtmlform);
            }
            else{
                
                var d = new Date();
            var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
            //console.log(time);
            //alert(time);
            var inputtime = $('#saveautosave').val();
            //alert(inputtime)
            if(time == inputtime){
             var getwrapperhtml = xmlhttp.responseText; 
               
             localStorage.setItem('getwrapperhtml',getwrapperhtml);
            $('.wrapper').html(getwrapperhtml);
           setTimeout(function(){var base_url = window.location.origin;
    var uri = document.URL;

    var res = uri.split("/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res[5];
    
    var i =1;
      $(".wrapper").find('.SFPTWO_TAGEDIT').each(function(){
        var tag = "tag_"+i;
        $(this).addClass(tag);
        $("#undoredochk").val(i);
        $(this).addClass('tagdelete');
        i++;
        
      });  
  
      var k =1;
      $(".wrapper").find('.SFPTWO_TEXTEDIT').each(function(){
        var tag = "tags_"+k;
        $(this).addClass(tag);
         $("#undoredochkdel").val(k);
         $(this).addClass('texttagdelete');
         k++;
      });   
  
      var s =1;
      $(".wrapper").find('.SFPTWO_IMAGEEDIT').each(function(){
        var tag = "tagsimg_"+s;
        $(this).addClass("nownsfpimgdel");
        $(this).addClass(tag);
        s++;
      });
      if($('.textme').length == 0)
      {	 
 		
             $(".wrapper .SFPTWO_IMAGEEDIT").before('<div class="textme" style="display:inline;"></div>');
	         $(".wrapper .SFPTWO_TEXTEDIT").before('<div class="textme" style="display:inline;"></div>');
      }
      
      else
      {
    	  var getelse = 0;
      }
    $(".wrapper .SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a></div>");
         // $(".SFPTWO_TAGEDIT").attr('contenteditable','true');
    $(".wrapper .SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a></div>");
    //$(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>"); 
    //$(".overlay").hide();
     if($(".wrapper .SFPTWO_TEXTEDIT").find('a').hasClass('sfpDynamic'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
         
     if($(".wrapper .SFPTWO_IMAGEEDIT").find('a').hasClass('sfpDynamic'))
     {  
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");

          },1000);
		
	    }
     
     if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicLike'))
	  { 
	      //alert("hh");
	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
	    $(".sfpfbDynamicLike").find('.setting-2').remove();
		    setTimeout(function(){
          $(".sfpfbDynamicLike").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

       },1000);
	
	 }
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicGoogle'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicGoogle").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicGoogle").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicShare'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicShare").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicShare").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweet'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweet").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicTweet").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
          
          
        
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweetBird'))
		  { 
		      //alert("hh");
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweetBird").find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpfbDynamicTweetBird").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

          },1000);
		
		 }
         
       
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicLinkedin'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicLinkedin").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicLinkedin").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
         
            if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicPinterest'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicPinterest").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicPinterest").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicMail'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicMail").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicMail").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
      $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".selectboxaddnow").append('<div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
    $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".chkboxaddnow").append('<div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
      $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".dropdowndrag").append('<div class="seteditdrop"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
      
    }, 6000);
     $('.explicit_edit').attr('contenteditable','true'); 
    $('.wrapper input[type="file"]').addClass('inputdisabled');
    $('.wrapper input[type="submit"]').addClass('inputdisabled');
    $('.wrapper input[type="button"]').addClass('inputdisabled');
    $('.wrapper button').addClass('inputdisabled');
//    $('.wrapper .inputdisabled').attr('disabled', 'disabled');
    $('.wrapper a').addClass('SFPdisabled');
    $('.SFPTWO_EDITFORM a').removeClass('SFPdisabled');
     $('div.setting-2 a').removeClass('SFPdisabled');  
     $('div.setedit a').removeClass('SFPdisabled'); 
     $('div.seteditopt a').removeClass('SFPdisabled');  
     $('div.seteditdrop a').removeClass('SFPdisabled'); 
     $('.imgedivdrg').removeClass('SFPdisabled');
     $('.closethisdrag').removeClass('SFPdisabled');
     //$('.urlset').removeClass('disabled'); 
      $('.enteroff').keydown(function(event){
                if(event.keyCode == 13) {
                 event.preventDefault();
                 return false;
                    }
                    });
                  var getfirstlength = '' ;
            
                                              
          $('.autosize').one('keyup',function(){
                      
              getfirstlength += $(this).find('a').css("fontSize");
              //alert(getfirstlength);
          });
     var getfirstlength = '';
          $('.autosize').one('keyup',function(){
              getfirstlength += $(this).find('a').css("fontSize");
              //alert(getfirstlength);
          });
          
           $('.autosize').keyup(function(e){
           
           var getcurrentlength = ($(this).text().length);
            
           var prev = ($(this).attr('rel'));
           var newprev = 0;
           
           var gtsize = $(this).find('.autosizethis').css("fontSize");
            
            if(prev<getcurrentlength){
                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
                //alert("text");
               // alert($(this).attr('rel'));
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                // alert(gtsize);
            }
           
            else if(e.keyCode == 8)
            {
                
            
               //  alert("backspace");
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));  
            }
               
            else if( e.keyCode == 46)
            {
                
              e.stopPropagation();
            }
            
            else if(e.keyCode != 8){
                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
              //  alert("now");
               // alert($(this).attr('rel'));
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                // alert(gtsize);
            }
          
        
        });
                $('.autosize').keydown(function(e){
             var getcurrentlength = ($(this).text().length);
            
           var prev = ($(this).attr('rel'));
           var newprev = 0;
           
           var gtsize = $(this).find('.autosizethis').css("fontSize");
           
          if(e.keyCode == 8)
            {
                
            
               //  alert("backspace");
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));  
            }
               
            else if( e.keyCode == 46)
            {
                
              e.stopPropagation();
            }
          
          
        
        });
            //alert(remhtmlform)
            
            appendall('newurl');
            $(".SFPTWO_TEXTEDIT").live('mouseover',function(){
              
              $(this).find("div.setting-2").show();
            });
            $(".SFPTWO_TEXTEDIT").live('mouseout',function(){
            //    alert('out');
              $(this).find("div.setting-2").hide();
              
            });            
          // location.reload();
            }
            else{
            
                var getwrapperhtml = xmlhttp.responseText;
                localStorage.setItem('getwrapperhtml',getwrapperhtml);
                
        
                   $('.wrapper').html(xmlhttp.responseText);
                    setTimeout(function(){var base_url = window.location.origin;
    var uri = document.URL;

    var res = uri.split("/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res[5];
    
    var i =1;
      $(".wrapper").find('.SFPTWO_TAGEDIT').each(function(){
        var tag = "tag_"+i;
        $(this).addClass(tag);
        $("#undoredochk").val(i);
        $(this).addClass('tagdelete');
        i++;
        
      });  
  
      var k =1;
      $(".wrapper").find('.SFPTWO_TEXTEDIT').each(function(){
        var tag = "tags_"+k;
        $(this).addClass(tag);
         $("#undoredochkdel").val(k);
         $(this).addClass('texttagdelete');
         k++;
      });   
  
      var s =1;
      $(".wrapper").find('.SFPTWO_IMAGEEDIT').each(function(){
        var tag = "tagsimg_"+s;
        $(this).addClass("nownsfpimgdel");
        $(this).addClass(tag);
        s++;
      });
      if($('.textme').length == 0)
      {	 
      $(".wrapper .SFPTWO_IMAGEEDIT").before('<div class="textme" style="display:inline;"></div>');
	  $(".wrapper .SFPTWO_TEXTEDIT").before('<div class="textme" style="display:inline;"></div>');
      }
      else
      {
    	  geetme = 0;
      }	  
          $(".wrapper .SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a></div>");
         // $(".SFPTWO_TAGEDIT").attr('contenteditable','true');
        $(".wrapper .SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a></div>");
        //$(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>"); 
       // $(".overlay").hide();
        $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".selectboxaddnow").append('<div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
    $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".chkboxaddnow").append('<div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
      $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".dropdowndrag").append('<div class="seteditdrop"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
      
        }, 6000); 
        
         if($(".wrapper .SFPTWO_TEXTEDIT").find('a').hasClass('sfpDynamic'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").find('a').hasClass('sfpDynamic'))
         {  
      	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
   		    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').find('.setting-2').remove();
   			    setTimeout(function(){
                 $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");

              },1000);
   		
   	    }
         
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicLike'))
		  { 
		      //alert("hh");
   	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicLike").find('.setting-2').remove();
			    setTimeout(function(){
              $(".sfpfbDynamicLike").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

           },1000);
		
		 }
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicGoogle'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicGoogle").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicGoogle").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicShare'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicShare").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicShare").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweet'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweet").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicTweet").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
          
        
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweetBird'))
		  { 
		      //alert("hh");
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweetBird").find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpfbDynamicTweetBird").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

          },1000);
		
		 }
         
       
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicLinkedin'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicLinkedin").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicLinkedin").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
            if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicPinterest'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicPinterest").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicPinterest").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicMail'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicMail").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicMail").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
         $('.explicit_edit').attr('contenteditable','true'); 
         
        $('.wrapper input[type="file"]').addClass('inputdisabled');
        $('.wrapper input[type="submit"]').addClass('inputdisabled');
        $('.wrapper input[type="button"]').addClass('inputdisabled');
       $('.wrapper button').addClass('inputdisabled');
//       $('.wrapper .inputdisabled').attr('disabled', 'disabled');
       $('.wrapper a').addClass('SFPdisabled');
        $('div.setting-2 a').removeClass('SFPdisabled');  
        $('div.setedit a').removeClass('SFPdisabled'); 
        $('div.seteditopt a').removeClass('SFPdisabled');  
         $('div.seteditdrop a').removeClass('SFPdisabled'); 
       $('.SFPTWO_EDITFORM a').removeClass('SFPdisabled');    
       $('.imgedivdrg').removeClass('SFPdisabled');
       $('.closethisdrag').removeClass('SFPdisabled');
      // $('.urlset').removeClass('disabled'); 
                  // location.reload();
                 $('.enteroff').keydown(function(event){
                if(event.keyCode == 13) {
                 event.preventDefault();
                 return false;
                    }
                    });
                    var getfirstlength = '' ;
          $('.autosize').one('keyup',function(){
                
              getfirstlength += $(this).find('a').css("fontSize");
              //alert(getfirstlength);
          });
     var getfirstlength = '';
          $('.autosize').one('keyup',function(){
              getfirstlength += $(this).find('a').css("fontSize");
              //alert(getfirstlength);
          });
          
           $('.autosize').keyup(function(e){
           
           var getcurrentlength = ($(this).text().length);
            
           var prev = ($(this).attr('rel'));
           var newprev = 0;
           
           var gtsize = $(this).find('.autosizethis').css("fontSize");
            
            if(prev<getcurrentlength){
                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
                //alert("text");
               // alert($(this).attr('rel'));
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                // alert(gtsize);
            }
           
            else if(e.keyCode == 8)
            {
                
            
               //  alert("backspace");
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));  
            }
               
            else if( e.keyCode == 46)
            {
                
              e.stopPropagation();
            }
            
            else if(e.keyCode != 8){
                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
              //  alert("now");
               // alert($(this).attr('rel'));
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                // alert(gtsize);
            }
          
        
        });
                 $('.autosize').keydown(function(e){
             var getcurrentlength = ($(this).text().length);
            
           var prev = ($(this).attr('rel'));
           var newprev = 0;
           
           var gtsize = $(this).find('.autosizethis').css("fontSize");
           
          if(e.keyCode == 8)
            {
                
            
               //  alert("backspace");
                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));  
            }
               
            else if( e.keyCode == 46)
            {
                
              e.stopPropagation();
            }
          
          
        
        });   
       
            }
            }

            
            //2. copy the name of the file retrieved directly above the text-area
            //document.getElementById('editingFilename').innerHTML = url;
            
            
             //$('#textvalurl').val(url);
            //3. set the filename to the hidden input - see line 199
//          document.getElementById('frmFileName').value = url;

 
            //4. scroll the document down to editingFilename - just above the text-area
           // var xPos, yPos, tgtElem;
           // tgtElem = document.getElementById('editingFilename');
           // xPos = 0;
           // yPos = tgtElem.offsetTop;
           // window.scrollTo(xPos, yPos);
        }
    }
   
    //3. specify a GET request for the indicated filename,
    //   set asynchronous to true (dont wait for the send method to complete before continuing)
    xmlhttp.open("GET",url,true);
 
    //4. make the request
    xmlhttp.send();
              setTimeout(function(){
             $(".overlay").hide();
               $('.overlay_div').css('display','none'); 
            },8000);
         
            }
        });  
        
      
            
    
             
 
}
 
 
 function requestUrlWithAjaxPreview(url)
{
    //alert(url);
    var xmlhttp;
 
    //1. create the xmlhttp object
 
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
 
    //2. assign the handler for the onchange event of the object
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            // we arrive here when we have successfully retrieved  the url we asked for
            //1. Set the response text to the text area's value
            //document.getElementById('ajaxResultTarget').html =  url;
             var NWin = window.open((url), '', 'height=400,width=500');
         if (window.focus) 
        {
        NWin.focus();
        }
        return false;
            //2. copy the name of the file retrieved directly above the text-area
         //var iFrame = $('#ajaxResultTarget');
        // iFrame.load(xmlhttp.responseText);
            
            
            // $('#textvalurl').val(url);
            //3. set the filename to the hidden input - see line 199
//          document.getElementById('frmFileName').value = url;

 
            //4. scroll the document down to editingFilename - just above the text-area
           // var xPos, yPos, tgtElem;
          //  tgtElem = document.getElementById('editingFilename');
          //  xPos = 0;
          //  yPos = tgtElem.offsetTop;
          //  window.scrollTo(xPos, yPos);
        }
    }
 
    //3. specify a GET request for the indicated filename,
    //   set asynchronous to true (dont wait for the send method to complete before continuing)
    xmlhttp.open("GET",url,true);
 
    //4. make the request
    xmlhttp.send();
}
 
  function goBack() {
    window.history.back()
}

/*var hook = true;
      window.onbeforeunload = function() {
      
        if (hook) {
          return "";
        }
      }
      function unhook() {
        hook=false;
      }*/
function editme(elem)
{
    
   var sid = $(elem).attr('id');
   alert(sid);
   $("#"+sid).trigger('click'); 
   /*var new_id = "hours"+sid;
    var x = document.getElementById(new_id);
    
   var txt = "<div class='hello"+sid+"'><input type='button' id='addition' value='+' onclick='add("+sid+")' /></div>";
    var txt = txt + "Add options: ";
    var i;
    for (i = 0; i < x.length; i++) {
        txt = txt + "<br/>"+"<li id='drops"+sid+"_"+i+"'><input type='text' value='"+x.options[i].text+"' id='drop"+sid+"_"+i+"' readonly><input type='button' value='-' onclick='removelist("+i+","+sid+")'/></li>";
    } 
    
   $("#show"+sid).html(txt);
   $("#show"+sid).show(); */
}

function edit(sid)
{
   var rid = "hours"+sid; 
   var x = document.getElementById(rid);
    
   var txt = "<input type='button' id='addition"+sid+"' value='+' onclick='add("+sid+")' /><div class='hello"+sid+"'></div>";
    var txt = txt + "Add options: ";
    var i;
    for (i = 0; i < x.length; i++) {
        txt = txt + "<br/>"+"<li id='drops"+sid+"_"+i+"'><input type='text' value='"+x.options[i].text+"' id='drop"+sid+"_"+i+"' readonly><input type='button' value='-' onclick='removelist("+i+","+sid+")'/></li>";
    } 
    
   $("#show"+sid).html(txt);
   $("#show"+sid).show(); 
}




 $('#bt_maultipage').live( "click", function() { 
    //alert('fgfd');
      var base_url = window.location.origin;
    var uri = document.URL;

    var res = uri.split("edit2/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res2[0];
    
    if($('.textme').length == 0)
    {	 
            $(".wrapper .SFPTWO_IMAGEEDIT").before('<div class="textme" style="display:inline;"></div>');
	        $(".wrapper .SFPTWO_TEXTEDIT").before('<div class="textme" style="display:inline;"></div>');
    }
    
    else
    {
    	var geetme = 0;
    }	
          $(".wrapper .SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a></div>");
    $(".wrapper .SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a></div>");
    //$(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
     if($(".wrapper .SFPTWO_TEXTEDIT").find('a').hasClass('sfpDynamic'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpDynamic").parents('.SFPTWO_TEXTEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
     
     if($(".wrapper .SFPTWO_IMAGEEDIT").find('a').hasClass('sfpDynamic'))
     {  
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpDynamic").parents('.SFPTWO_IMAGEEDIT').append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><a title='imgcaption' class='imgcaption' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><a class='urlset' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /></div>");

          },1000);
		
	    }
         
         
     if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicLike'))
	  { 
	      //alert("hh");
	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
	    $(".sfpfbDynamicLike").find('.setting-2').remove();
		    setTimeout(function(){
          $(".sfpfbDynamicLike").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

       },1000);
	
	 }
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicGoogle'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicGoogle").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicGoogle").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
          
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicShare'))
		  {  
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicShare").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicShare").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweet'))
		  { 
		      //alert("hh");
    	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweet").find('.setting-2').remove();
			    setTimeout(function(){
               $(".sfpfbDynamicTweet").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

            },1000);
		
		 }
          
       
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpfbDynamicTweetBird'))
		  { 
		      //alert("hh");
  	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpfbDynamicTweetBird").find('.setting-2').remove();
			    setTimeout(function(){
             $(".sfpfbDynamicTweetBird").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

          },1000);
		
		 }
         
       
         if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicLinkedin'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicLinkedin").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicLinkedin").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
            if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicPinterest'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicPinterest").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicPinterest").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
         
          if($(".wrapper .SFPTWO_IMAGEEDIT").hasClass('sfpDynamicMail'))
		  { 
		      //alert("hh");
 	  // $(".wrapper .SFPTWO_TEXTEDIT").find('a').after('<span class="btn_set"><a class="urlset" href="javascript:void(0)"></a></span>');
		    $(".sfpDynamicMail").find('.setting-2').remove();
			    setTimeout(function(){
            $(".sfpDynamicMail").append("<div class='setting-2' style='display:none'><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><a title='Spacing' class='spacing' href='javascript:void(0)'></a><input type='hidden' value='0' id='imgCount' /><a class='urlset' href='javascript:void(0)'></a></div>");

         },1000);
		
		 }
    
     $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".selectboxaddnow").append('<div class="seteditopt"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
    $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".chkboxaddnow").append('<div class="setedit"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
      $(".wrapper .SFPTWO_EDITFORM ul").find("li").find(".dropdowndrag").append('<div class="seteditdrop"><a title="edit" class="editnow" href="javascript:void(0)"></a></div> ');
      
      }); 
//strt...........
	$(document).ready(function() {
	   
	   
		$('#content-editor').freshereditor({toolbar_selector: "#toolbar", excludes: ['removeFormat','insertheading4','strikethrough','insertimage','insertorderedlist','insertunorderedlist','insertparagraph','insertheading1','insertheading2','insertheading3','blockquote','superscript','code','subscript','backcolor']});
		$("#content-editor").freshereditor("edit", true);
		
	
		$('div.btn-toolbar div.btn-group:nth-child(5)').remove();
		$('div.btn-toolbar div.btn-group:empty').remove();
        
         // $('div.btn-toolbar div.btn-group:nth-child(4)').remove();        
     
       // $('div.btn-toolbar div.btn-group:nth-child(6)').remove();
		 /*  $('div.btn-toolbar div.btn-group:nth-child(6)').remove();
		   $('div.btn-toolbar div.btn-group:nth-child(7)').remove();
        $('div.btn-toolbar div.btn-group:nth-child(8)').remove();
       $('div.btn-toolbar div.btn-group:nth-child(8)').removeClass('btn-group');         
       $('div.btn-toolbar div.btn-group:nth-child(10)').remove();
       $('div.btn-toolbar div.btn-group:nth-child(10)').removeClass('btn-group'); 
       $('div.btn-toolbar div.btn-group:nth-child(9)').remove();
       $('div.btn-toolbar div.btn-group:nth-child(9)').removeClass('btn-group');   
       $('div.btn-toolbar div.btn-group:last').remove(); */
      
  
	

function getSelected() {
            if (window.getSelection) {
                return window.getSelection();
            }
            else if (document.getSelection) {
                return document.getSelection();
            }
            else {
                var selection = document.selection && document.selection.createRange();
                if (selection.text) {
                    return selection.text;
                }
              
                return false;
            }
            return false;
        };
        
     $('body').on('mouseup', '.wrapper', function(e) {

             
                var text = getSelected();
               
                if(text) {
                  //  alert("selected");
                    $('.navbar').css('display','block');
                    //console.log(text);
                }
                
                else if(text.empty){
                    console.log("text");
                }
                else{
                    console.log("Nothing selected?");
                    $('.navbar').css('display','none');
                      // $(".SFPTWO_EDITFORM .sortable-list").sortable('enable');
                }
            });
            
            
            $('body').on('click', '.wrapper', function(e) {
                
                var response = $(this).find(".explicit_edit").attr('contenteditable');
                 var get = "0";
                 var text = getSelected();
                 if( response == "true"){
                          //alert(response);
                       $('.navbar').css('display','block');
                }
                if($("#setting2").val() == "1"){
                     $('.navbar').css('display','none');
                       // $(".SFPTWO_EDITFORM .sortable-list").sortable('enable');
                }
                    $("#setting2").val("");  
                  
               
             });
 
            $('body').on('click', '.imgcaption', function(e) {
            	
            	var $this = $(this).parent().parent();
        		//console.log($this.html());
        		var offset = $this.offset();
        		var width = $this.width();

        		var height = $this.height();
        		var centerX = offset.left + width / 2;
        		var centerY = offset.top + height / 2;


            	var margin =  $(this).parent().parent().find('img').css('margin');
            	var margintop =  $(this).parent().parent().find('img').css('margin-top');
            	var marginleft =  $(this).parent().parent().find('img').css('margin-left');
            	var marginright =  $(this).parent().parent().find('img').css('margin-right');
            	var marginbottom =  $(this).parent().parent().find('img').css('margin-bottom');
            	var padding = $(this).parent().parent().find('img').css('padding');
            	var height = $(this).parent().parent().find('img').height();
            	var width = $(this).parent().parent().find('img').width(); 
            	//alert($(this).parent().parent().find('img').style());
            
            	
              $(this).parent().parent().find('img:first').after('<div id="dragfirst" class="SFPTWO_TEXTEDIT getdragit" style="position:absolute; padding:'+padding+';  margin-bottom:'+marginbottom+';  margin:'+margin+';  margin-top:'+margintop+'; margin-left:'+marginleft+'; margin-right:'+marginright+'; z-index:999;"><div id="nowdrag" class="explicit_edit nowdrag SFPTWO_TAGEDIT" contenteditable="true">Text</div><div><a class="imgedivdrg"></a><a class="closethisdrag deleteme"></a></div></div>');
               
          	var height1= $(this).parent().parent().find('#dragfirst:first').height();
    		var width2 = $(this).parent().parent().find('#dragfirst:first').width();
    		var top = height/2 - height1/2;
    		var left = width/2 - width2/2 ;
    		$(this).parent().parent().find('#dragfirst:first').css({top: top , left: left }) 

              
              setTimeout(function(){  
                  $('.getdragit').each(function(){
                var del = $("#undoredochkdel").val();
                var jk = parseInt(del) + parseInt(1);
                var tag = "tags_"+jk; 
                
                var i = $("#undoredochk").val(); 
                var j = parseInt(i) + parseInt(1);
               
                
                var tgy = "tag_"+j;
                $("#undoredochk").val(j);
                $("#undoredochkdel").val(jk);
                $(this).find('.nowdrag').addClass(tgy);
                $(this).find('.nowdrag').addClass('tagdelete');
                $(this).addClass(tag);
                $(this).addClass('texttagdelete');
                
                });
                }, 50);
                 setTimeout(function(){    
                 $(".SFPTWO_TEXTEDIT").removeClass("getdragit");
                 }, 70);
                 
              
              $( ".imgedivdrg" ).mousedown(); 
            $('.dragSFPfirst').draggable({ disabled: true });
            $('.dragSFPfirst').draggable({ disabled: true });
		    $('.dragSFPfirst').removeClass('ui-draggable-disabled'); 
		    $('.dragSFPfirst').removeClass('ui-state-disabled'); 
             }); 
           
            $('body').on('click', '.imgedivdrg', function(e) {
            	
            }); 
         $('body').on('click', '.setting-2', function() {
               $("#setting2").val("1");  
             });       
    //end....................................................................
   // $('.explicit_edit').clickOff(function() {
//         
//        $("#navId").val("0"); 
//  
//          $('.navbar').css('display','none');  
//             //$(".SFPTWO_EDITFORM .sortable-list").sortable('enable');
//     
//          var res =  $("#navId").val("0"); 
//   
//}); 
//
         //start................................................
$(document).click(function(e){
    
	 $('.form-group').find('label').hide();
     
 if($(e.target).is(".explicit_edit") || $(e.target).closest(".explicit_edit").length || $(e.target).is(".navbar") || $(e.target).closest(".navbar").length)
  {  
	 $('.form-group').hide();
     $('.minicolors').css('display','none');
	  $('.minicolors-panel').hide();
   $('.navbar').css('display','block'); 
   
  //console.log("inside content area");
  }
else 
{	
	
//alert("you clicked out side content area");
$('.SFPTWO_IMAGEEDIT').find('.setting-2 a').removeClass('SFPdisabled');
 $('.imgedivdrg').removeClass('SFPdisabled');
 $('.closethisdrag').removeClass('SFPdisabled');
$("#navId").val("0");
$('.navbar').css('display','none'); 
}
});
  $('body').on('click', '.explicit_edit', function() {
	  
		  $('.form-group').hide();
		   $('.minicolors').css('display','none');
		  $('.minicolors-panel').hide();
   
            $("#editable").attr("id","");
            $('.bydelete').removeClass('editme');
           $(this).addClass('editme');
           $(this).addClass('bydelete');
            $(".SFPTWO_EDITFORM .sortable-list").removeClass('ui-sortable');
            $(".SFPTWO_EDITFORM .sortable-list").removeClass('ui-draggable');
           $("#navId").val("1"); 
            setTimeout(function(){     
           
            $('.navbar').css('display','block');
            
          }, 50);           
            
        
	    return false;
	});
$('body').on('click', '.navbar', function() {
            
            $(".SFPTWO_EDITFORM .sortable-list").removeClass('ui-sortable');
            $(".SFPTWO_EDITFORM .sortable-list").removeClass('ui-draggable');
           $("#navId").val("1"); 
           //$('.urlset').removeClass('disabled'); 
            setTimeout(function(){     
            
            $(this).css('display','block');
          }, 1000);           
            
        
	    return false;
	});


$(".navbar").click(function(){
  $("#nav-show").val("1");  
}); 
//end 2..................................

$('body').on('change', '.styled', function() {
  
  if($(this).val()=='Preview') 
  {
 
    var imgget = $(this).parent().parent().find('strong').find('a').attr('href');
   
  
    $('div.popupimg').css({'display':'block'});
    $('div.popupimg img').attr('src',imgget);
    $('div.popupimg img').css('height','385px');
  }
  });
  
  
 $('body').on('click', '.linkedin', function() { 
   var link = $("li#webLView a#webLinkView").attr('href');
  //var res =  $.trim(link);
 var res = "https://test.scampaigns.com/Apps/jjh/487?t=0";
   var articleUrl = encodeURIComponent(res);
       var articleTitle = encodeURIComponent('Social');
       var articleSummary = encodeURIComponent('Blog');
       var articleSource = encodeURIComponent('Medium');
       var gotolinkedIn = 'http://www.linkedin.com/shareArticle?mini=true'+
           '&url='+articleUrl+
           '&title='+articleTitle+
           '&summary='+articleSummary+
           '&source='+articleSource;
       window.open(gotolinkedIn, "LinkedIn", "width=660,height=600,scrollbars=yes;resizable=no");        
  return false;
 
});
	}); 
    
    //strt..................................................
     $.fn.clickOff = function(callback, selfDestroy) {
    var clicked = false;
    var parent = this;
    var destroy = selfDestroy || true;
    
    parent.click(function() {
        clicked = true;
    });
    
    $(document).click(function(event) { 
        if (!clicked) {
            callback(parent, event);
        }
        if (destroy) {
            //parent.clickOff = function() {};
            //parent.off("click");
            //$(document).off("click");
            //parent.off("clickOff");
        };
        clicked = false;
    });
}; 

//end...............

 $( document).on( "dragstop", function( event, ui ) {$('#imgdragable').hide();} );
 
 $(document).click(function(e) {
		//alert(e.target.nodeName);
	    if(e.target.nodeName == 'BODY')
	    {
	    	$( "div.dHide" ).fadeOut(300);
	    	 if($("div.user_list").css('display')=='block'){
	         	$("div.user").trigger('click');
	         }
	    }
	  });

 $(function() 
{
	 $('#dragfirst').draggable(
	  {
			        drag: function(){
			            var offset = $(this).offset();
			            var xPos = offset.left;
			            var yPos = offset.top;
			          
	 }
  });
});
 $(document).ready(function() {
	  
	  $( ".spacediv" ).draggable();
	  
	 

	  $('body').append('<input type="hidden" value="" class="forSFPstandleft"/>');
	  $('body').append('<input type="hidden" value="" class="forSFPstandtop"/>');
	 $('body').append('<input type="hidden" value="" class="forSFPstandchecking"/>');		
	 $('body').append('<input type="hidden" value="" class="forSFPstandleaving"/>');	
	 $('body').append('<input type="hidden" value="" class="forSFPstandup"/>');	
	 $('body').append('<a class="forSFPancher"></a>');	
	
	 $(document.body).on("mouseenter", ".imgedivdrg", function (e){
		 $( ".imgedivdrg" ).mousedown();
	 });
	 
	 $(document.body).on("mousedown", ".imgedivdrg", function (e) {
		 $(e.target).parents('.SFPTWO_IMAGEEDIT').css('overflow','visible');
		 $('.SFPTWO_IMAGEEDIT').removeClass('textimgSFPdrag');
		 $(e.target).parent().parent().parent().addClass('textimgSFPdrag');
		 
		 $(e.target).parent().parent().addClass('dragSFPfirst');
		 
		
		 $('.dragSFPfirst').draggable({ disabled: false });
	   $('.dragSFPfirst').draggable(
     		  {
     			 revert: "invalid",
                 refreshPositions: true,
                 drag: function (event, ui) {
                     ui.helper.addClass("draggable");
                 },
                 stop: function (event, ui) {
                     ui.helper.removeClass("draggable");
                    
                 } 
     	  });
	   
	   $(".textimgSFPdrag").droppable({
           drop: function (event, ui) {
             
               ui.draggable.addClass("dropped");
              
           }
       });
	  });  
	 
     $(document.body).on("mousedown", ".nowdrag", function (e) {
        $('.SFPTWO_IMAGEEDIT').sortable({cancel: ':.dragSFPfirst'});
		  $('.SFPTWO_IMAGEEDIT').draggable({cancel: ':.dragSFPfirst'});
		  $('.dragSFPfirst').draggable({ disabled: true });
		  $('.dragSFPfirst').removeClass('ui-draggable-disabled'); 
		  $('.dragSFPfirst').removeClass('ui-state-disabled'); 
		//  $(e.target).parents('.SFPTWO_IMAGEEDIT').css('overflow','hidden');
      });
        
	 $(document.body).on("mouseleave", ".imgedivdrg", function (e) {
		  $('.SFPTWO_IMAGEEDIT').sortable({cancel: ':.dragSFPfirst'});
		  $('.SFPTWO_IMAGEEDIT').draggable({cancel: ':.dragSFPfirst'});
		  $('.dragSFPfirst').draggable({ disabled: true });
		  $('.dragSFPfirst').removeClass('ui-draggable-disabled'); 
		  $('.dragSFPfirst').removeClass('ui-state-disabled'); 
	//	  $(e.target).parents('.SFPTWO_IMAGEEDIT').css('overflow','hidden');
	  }); 
     
	 /* var $dragging = null;

	  $(document.body).on("mousemove", function(e) {
	        if ($dragging) {
	            $dragging.offset({
	                top: e.pageY,
	                left: e.pageX
	            }); 
	        }
	        
	        
	       var offset =$(e.target).parent().parent().parent().offset();
            var get = $(e.target).parent().parent().parent();
            ofsetleft = $(e.target).parent().parent().parent().offset();
            oosettop = $(e.target).parent().parent().parent().offset();
            ofsetl = $(e.target).parent().parent().offset();
            oosett = $(e.target).parent().parent().offset();
	        offset.right = $(window).width() - (offset.left + $(e.target).parent().parent().parent().outerWidth(true));
	        offset.bottom = $(window).height() - (offset.top + $(e.target).parent().parent().parent().outerHeight(true));
	     
	        //or $(this).offset(); if you really just want the current element's offset
	        var relX = e.pageX - ofsetleft.left;
	        var relY = e.pageY - oosettop.top;
	        var relsX = e.pageX - ofsetl.left;
	        var relsY = e.pageY - oosett.top;
	        console.log(relX+"---"+relsX);
	        if(relX == relsX)
	        	{
	        	$dragging == null;
	        	}
	       	
	    });*/
	  
	 /*   
	  $(document.body).on("mousedown", ".imgedivdrg", function (e) {
		  
		 $('.imgedivdrg').removeClass('SFPDragoverImage');
		  $(e.target).addClass("SFPDragoverImage");
		  var left = $(e.target).parent().parent().css('left');
		  var top = $(e.target).parent().parent().css('top');  
	      $('.forSFPstandleft').val(left);
	      $('.forSFPstandtop').val(top);
	      $('.forSFPstandchecking').val('down');
	      $(e.target).parents('.SFPTWO_IMAGEEDIT').css('overflow','visible');
		  $dragging = $(e.target).parent().parent();
	        
	        
	        $(".SFPTWO_IMAGEEDIT").bind('mouseout',function(){
	        	 flag = false;
	        	 console.log('out');
	        	
	        });
	        
	        var offset =$(e.target).parent().parent().parent().offset();
            var get = $(e.target).parent().parent().parent();
            ofsetleft = $(e.target).parent().parent().parent().offset();
            oosettop = $(e.target).parent().parent().parent().offset();
            ofsetl = $(e.target).parent().parent().offset();
            oosett = $(e.target).parent().parent().offset();
	        offset.right = $(window).width() - (offset.left + $(e.target).parent().parent().parent().outerWidth(true));
	        offset.bottom = $(window).height() - (offset.top + $(e.target).parent().parent().parent().outerHeight(true));
	     
	        //or $(this).offset(); if you really just want the current element's offset
	        var relX = e.pageX - ofsetleft.left;
	        var relY = e.pageY - oosettop.top;
	        var relsX = e.pageX - ofsetl.left;
	        var relsY = e.pageY - oosett.top;
	        console.log(relX+"---"+relsX);
	        if(relX == relsX)
	        	{
	        	$dragging == null;
	        	}
	       	
	       
	  });*/
	/*  $(document.body).on("mouseenter", ".SFPTWO_IMAGEEDIT", function (e){
		  
			 
		  var down = $('.forSFPstandchecking').val();  
		  // console.log('out');
		  if(down == 'down')
		   {
		  
		   $('.forSFPstandleaving').val('leaving');
		  } 
		  $dragging = null;
	  });
	 */
	 /* 
	  $(document).mouseleave(function(e){
		  console.log('out');
		    
	  });		 
	  
		  $(document.body).on("mouseleave", ".SFPTWO_IMAGEEDIT", function (e){
		  
			
			
					
			  $('.forSFPstandleaving').val('leave'); 
			  var out ='out';
			  var down = $('.forSFPstandchecking').val();  
			  var up = $('.forSFPstandup').val();  
			   if(down == 'down')
			   {
				   
					   $('.forSFPstandup').val('');
				   $('.forSFPstandleaving').val('leavedown');
				   var leaving =  $('.forSFPstandleaving').val(); 
				   
				   if(leaving == 'leavedown')
				   {
					 
				 //  console.log('down');
				   var leftSFP =  $('.forSFPstandleft').val();
				   var topSFP =   $('.forSFPstandtop').val(); 
				    
				   $('.SFPDragoverImage').parent().parent().css('left',leftSFP);
				   $('.SFPDragoverImage').parent().parent().css('top',topSFP);
				   
				   $(e.target).parents('.SFPTWO_IMAGEEDIT').css('overflow','hidden');
				   $('.forSFPstandchecking').val('');  
			   }
				   
				   
				   
			  	   
			 }		   
			   $dragging = null;
			
		  })
		
	    
	
	
	    $(document.body).on("mouseup", function (e) {
	        $dragging = null;
	       
	        $('.forSFPstandleaving').val(''); 
	        $('.forSFPancher').trigger('click');
	       
	    }); 
	    
	    */
	
	});
 
 
 
 $(".SFPTWO_TEXTEDIT a.deleteme").live("click",function(){
	 
		if($(this).parents('form.SFPTWO_EDITFORM').length)
		{
		 $('.sfpLicnt').val('-1');
		}
     
     /**** Added by Aritra ****/ 
         var html = $(this).parent().parent().attr('class').split('texttagdelete');
          var htm = html[0].split('tags_');
         //var htm = $('#undoredochkdel').val();
     var html = $(".tags_"+htm[1]).html();
     
     var l = 1;
    $("div#buffer > ul >li").each(function(){
      l++;
    });
   var js =l;
  
     var newhtml = "<li class='undo_"+l+"'><p id='cls'>tags_"+htm[1]+"</p><p id='cross'>cross</p><div id='txt'>"+html+"</div></li>"; 
      //alert(newhtml);
     $("div#buffer > ul").append(newhtml);
    
     js++;                
      $("#undoredobuffer").val(js);
     $("#redo").val(js);
     
     /**** Added by Aritra ****/ 
     
      var base_url = window.location.origin; 
      var minNumber = 0000; // The minimum number you want
     var maxNumber = 1000; // The maximum number you want
    var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber); 
     var rand = "randtxt_"+random;
    
      $(this).parent().parent().addClass(rand); 
     
      var htm = $(".wrapper").html(); 
      $("."+rand).hide();
     var uri = document.URL;
      var res = uri.split("/");
          $.ajax({
         type:'POST',
         data:{random:rand},
         url: base_url+'/Ajaxcall/trash/'+res[5],
         success:function(data){
              var datas = data.split("|-|");
               var cont = datas.length;
               var item = parseInt(cont) - parseInt(1);
              $("#full").attr("title","Restore("+item+") items"); 
                    
         }
         }); 
        
 });  
      

 /////spacing//////////
 $(".cls_space").live("click",function(e){
	$(".spacediv").css('display','none');
	});
          
 $(".spacing").live("click",function(e){
	 $('.SFPTWO_TEXTEDIT').removeClass('spaceedit');
	 $('.SFPTWO_IMAGEEDIT').removeClass('spaceedit');
	 $(this).parent().parent().addClass("spaceedit");
	 //var getleft =  $(this).offset.left;
	 // var gettop =  $(this).offset.left;
	 
	   // $(".spacediv") .css({top:gettop,left:getleft})
       var getleft = (e.pageX)- parseInt(417);
		 $('.spacediv').css( 'position', 'absolute' );
   
    $('.spacediv').css( 'top', e.pageY );
    $('.spacediv').css( 'left', '573px' );
  $(".spacediv").css("display",'block');
	});
        
 setTimeout(function(){
	 //alert("fsf");

	    var iValue = 50;
	    var iValue = 50;
	    $(".lblVertical").val(iValue);
	    $(".sliderVer").slider({
	        min: 0,
	        max: 200,
	        orientation: "vertical",
	        value: iValue,
	        slide: function(event, ui) {
	            $(".lblVertical").val(ui.value);
	            $('.spaceedit').prev().css("display",'inline-block' ); 
	            $('.spaceedit').prev().css("height",ui.value ); 
	            var valueme= ui.value;
	            if(valueme == 0)
	            {
	               $('.spaceedit').prev().css("display",'inline' ); 
	            	
	            }
	            else
	            {
	            	var gt = 0;
	            }	
	        }
	    });
	
 }, 6000);
 
 $(document).ready(function(){
 		$( ".lblVertical" ).keyup(function() {
           if ($(this).val() >= 0 && $(this).val() <= 200) {
                         $('.spaceedit').prev().css("height",$(this).val() + 'px'); 
                    }
});  

});
 
 // anchor click url change
 $(".SFPTWO_IMAGEEDIT a.urlset").live('click', function(){
	 
	   $('a.urlset').removeClass('btnlnkme');
       $(this).addClass('btnlnkme');
	 
	 var textUrl = $(this).parents('.SFPTWO_IMAGEEDIT').find('.sfpDynamic').text();
	 var linkUrl = $(this).parents('.SFPTWO_IMAGEEDIT').find('.sfpDynamic').attr('href');
	 if( $(this).parents('.SFPTWO_IMAGEEDIT').find('.sfpDynamic').length)
	{	 
	 if (linkUrl.indexOf('https://') > -1) {
	 var splitLinkUrl = linkUrl.split('https://');
	 $("div.slide_popupurl").find('.texturl').val(textUrl);
	 $("div.slide_popupurl").find('.linkurl').val(splitLinkUrl[1]);
	 }
	 else if(linkUrl.indexOf('http://') > -1) {
	 var splitLinkUrl = linkUrl.split('http://');
	 $("div.slide_popupurl").find('.texturl').val(textUrl);
	 $("div.slide_popupurl").find('.linkurl').val(splitLinkUrl[1]);
	 }
	 
	 else{
		 $("div.slide_popupurl").find('.texturl').val(textUrl);
		 $("div.slide_popupurl").find('.linkurl').val(linkUrl);
	 }
	
	}
     // Set the effect type
	    var effect = 'slide';

	    // Set the options for the effect type chosen
	    var options = { direction: 'right' };

	    // Set the duration (default: 400 milliseconds)
	    var duration = 700;
	
     if($("div.slide_popup").show())
  {
    $("div.slide_popup").hide();
  }
  if($("div.slide_popup1").show())
  {
    $("div.slide_popup1").hide();
  }
  
  if($("div.slide_popup2").show())
  {
    $("div.slide_popup2").hide();
  }
  
  if($("div.popupusbackground").show())
  {
    $("div.popupusbackground").hide();
  }
  
  $("div.popup").animate({"right":0},300);
  $("div.popup1").animate({"right":0},300);
   $("div.popup2").animate({"right":0},300);
   $("div.slide_popupurl").toggle(effect, options, duration);
  return false
 });

 
 $(".SFPTWO_TEXTEDIT a.urlset").live('click', function(){
	 
	   $('a.urlset').removeClass('btnlnkme');
     $(this).addClass('btnlnkme');
	 
	 var textUrl = $(this).parents('.SFPTWO_TEXTEDIT').find('.sfpDynamic').text();
	 var linkUrl = $(this).parents('.SFPTWO_TEXTEDIT').find('.sfpDynamic').attr('href');
	 if (linkUrl.indexOf('https://') > -1) {
	 var splitLinkUrl = linkUrl.split('https://');
	 $("div.slide_popupurl").find('.texturl').val(textUrl);
	 $("div.slide_popupurl").find('.linkurl').val(splitLinkUrl[1]);
	 }
	 else if(linkUrl.indexOf('http://') > -1) {
	 var splitLinkUrl = linkUrl.split('http://');
	 $("div.slide_popupurl").find('.texturl').val(textUrl);
	 $("div.slide_popupurl").find('.linkurl').val(splitLinkUrl[1]);
	 }
	 
	 else{
		 $("div.slide_popupurl").find('.texturl').val(textUrl);
		 $("div.slide_popupurl").find('.linkurl').val(linkUrl);
	 }
	
	 
   // Set the effect type
	    var effect = 'slide';

	    // Set the options for the effect type chosen
	    var options = { direction: 'right' };

	    // Set the duration (default: 400 milliseconds)
	    var duration = 700;
	
   if($("div.slide_popup").show())
{
  $("div.slide_popup").hide();
}
if($("div.slide_popup1").show())
{
  $("div.slide_popup1").hide();
}

if($("div.slide_popup2").show())
{
  $("div.slide_popup2").hide();
}

if($("div.popupusbackground").show())
{
  $("div.popupusbackground").hide();
}

$("div.popup").animate({"right":0},300);
$("div.popup1").animate({"right":0},300);
 $("div.popup2").animate({"right":0},300);
 $("div.slide_popupurl").toggle(effect, options, duration);
return false
});

 

 $(function() 
 {
 $(".texturl").live("keyup",function(){
     
     var num = $(this).val();
     $(".btnlnkme").parent().parent().find('.sfpDynamic').html(num);
  

 }); 
 
 $(".linkurl").live("keyup",function(){
     
    
  

 }); 
     
 
 $('body').on('click',".doneurl", function(event) {
	 
	 var num = $(".linkurl").val();
	 var uri = $(".sfpselectaccess").val();
	  $(".btnlnkme").parent().parent().find('.sfpDynamic').attr('href',uri+num);
	 
	   $(".btnlnkme").parent().parent().find('.sfpDynamic').attr('target', '_blank'); 
     var effect = 'slide';

 // Set the options for the effect type chosen
 var options = { direction: 'right' };

 // Set the duration (default: 400 milliseconds)
 var duration = 700;

     if($("div.slide_popup").show())
     {
       $("div.slide_popup").hide();
     }
     if($("div.slide_popup1").show())
     {
       $("div.slide_popup1").hide();
     }
     
     if($("div.popupusbackground").show())
     {
       $("div.popupusbackground").hide();
     }
     
     $('div.slide_popupurl').toggle(effect, options, duration);
     });
 
 });
  
 //fblike
$(".sfpfbDynamicLike a.urlset").live('click', function(){
    
    $('.sfpfbDynamicLike').removeClass('sfplikeme');
       $(this).parents('.sfpfbDynamicLike').addClass('sfplikeme');
    
    // Set the effect type
    var effect = 'slide';
    
    // Set the options for the effect type chosen
    var options = { direction: 'right' };
    
    // Set the duration (default: 400 milliseconds)
    var duration = 700;
    
    if($("div.slide_popup").show())
    {
    $("div.slide_popup").hide();
    }
    if($("div.slide_popup1").show())
    {
    $("div.slide_popup1").hide();
    }
    
    if($("div.slide_popup2").show())
    {
    $("div.slide_popup2").hide();
    }
    
    if($("div.popupusbackground").show())
    {
    $("div.popupusbackground").hide();
    }
    
     if($("div.slide_popupurl").show())
    {
    $("div.slide_popupurl").hide();
    }
     
     if($("div.slide_fbshare").show())
     {
    	 $("div.slide_fbshare").hide();
     }
     
     if($("div.slide_tweet_share").show())
     {
    	 $("div.slide_tweet_share").hide();
     }
    
    $("div.popup").animate({"right":0},300);
    $("div.popup1").animate({"right":0},300);
    $("div.popup2").animate({"right":0},300);
    $("div.slide_fblike").toggle(effect, options, duration);   
});

/********************** added by Poulami ************************/
$(".sfpfbDynamicTweet a.urlset").live('click', function(){
    
    $('.sfpfbDynamicTweet').removeClass('sfplikeme');
       $(this).parents('.sfpfbDynamicTweet').addClass('sfplikeme');
    
    // Set the effect type
    var effect = 'slide';
    
    // Set the options for the effect type chosen
    var options = { direction: 'right' };
    
    // Set the duration (default: 400 milliseconds)
    var duration = 700;
    
    if($("div.slide_popup").show())
    {
    $("div.slide_popup").hide();
    }
    if($("div.slide_popup1").show())
    {
    $("div.slide_popup1").hide();
    }
    
    if($("div.slide_popup2").show())
    {
    $("div.slide_popup2").hide();
    }
    
    if($("div.popupusbackground").show())
    {
    $("div.popupusbackground").hide();
    }
    
     if($("div.slide_popupurl").show())
    {
    $("div.slide_popupurl").hide();
    }
     
     if($("div.slide_fblike").show())
     {
    	 $("div.slide_fblike").hide();
     }
     
     if($("div.slide_fbshare").show())
     {
    	 $("div.slide_fbshare").hide();
     }
    
    $("div.popup").animate({"right":0},300);
    $("div.popup1").animate({"right":0},300);
    $("div.popup2").animate({"right":0},300);
    $("div.slide_tweet_share").toggle(effect, options, duration);   
});


$(".sfpfbDynamicTweetBird a.urlset").live('click', function(){
    
    $('.sfpfbDynamicTweetBird').removeClass('sfpTweetBird');
       $(this).parents('.sfpfbDynamicTweetBird').addClass('sfpTweetBird');
    
    // Set the effect type
    var effect = 'slide';
    
    // Set the options for the effect type chosen
    var options = { direction: 'right' };
    
    // Set the duration (default: 400 milliseconds)
    var duration = 700;
    
    if($("div.slide_popup").show())
    {
    $("div.slide_popup").hide();
    }
    if($("div.slide_popup1").show())
    {
    $("div.slide_popup1").hide();
    }
    
    if($("div.slide_popup2").show())
    {
    $("div.slide_popup2").hide();
    }
    
    if($("div.popupusbackground").show())
    {
    $("div.popupusbackground").hide();
    }
    
     if($("div.slide_popupurl").show())
    {
    $("div.slide_popupurl").hide();
    }
     
     if($("div.slide_fblike").show())
     {
    	 $("div.slide_fblike").hide();
     }
     
     if($("div.slide_fbshare").show())
     {
    	 $("div.slide_fbshare").hide();
     }
     
     if($("div.slide_tweet_share").show())
     {
    	 $("div.slide_tweet_share").hide();
     }
    
    $("div.popup").animate({"right":0},300);
    $("div.popup1").animate({"right":0},300);
    $("div.popup2").animate({"right":0},300);
    $("div.slide_tweet_bird").toggle(effect, options, duration);   
});



 $(function() 
 {
$(".linkfblike").live("keyup",function(){
     
     var num = $(this).val();
 

 }); 
 
$('body').on('click',".forSFPancher", function(event) {
	setTimeout(function(){
		
	 $('.forSFPstandchecking').val(''); 
	},450);
	 
});
$('body').on('click',".btnlike", function(event) {
    
	 var uri = $(".sfpselectaccessfb").val();
	 var num = $(this).val();
	   $(".sfplikeme").find('.fb-like').attr('data-href',uri+num);
	   
     var effect = 'slide';

 // Set the options for the effect type chosen
 var options = { direction: 'right' };

 // Set the duration (default: 400 milliseconds)
 var duration = 700;

     if($("div.slide_popup").show())
     {
       $("div.slide_popup").hide();
     }
     if($("div.slide_popup1").show())
     {
       $("div.slide_popup1").hide();
     }
     
     if($("div.popupusbackground").show())
     {
       $("div.popupusbackground").hide();
     }
      if($("div.slide_popupurl").show())
     {
       $("div.slide_popupurl").hide();
     }
     
     $('div.slide_fblike').toggle(effect, options, duration);
     });
   });  
   
   
   
   
   
   //fbshare
$(".sfpfbDynamicShare a.urlset").live('click', function(){
    
    $('.sfpfbDynamicShare').removeClass('sfpshareme');
       $(this).parents('.sfpfbDynamicShare').addClass('sfpshareme');
    
    // Set the effect type
    var effect = 'slide';
    
    // Set the options for the effect type chosen
    var options = { direction: 'right' };
    
    // Set the duration (default: 400 milliseconds)
    var duration = 700;
    
    if($("div.slide_popup").show())
    {
    $("div.slide_popup").hide();
    }
    if($("div.slide_popup1").show())
    {
    $("div.slide_popup1").hide();
    }
    
    if($("div.slide_popup2").show())
    {
    $("div.slide_popup2").hide();
    }
    
    if($("div.popupusbackground").show())
    {
    $("div.popupusbackground").hide();
    }
    
     if($("div.slide_popupurl").show())
    {
    $("div.slide_popupurl").hide();
    }
    
    
     if($("div.slide_fblike").show())
    {
    $("div.slide_fblike").hide();
    }
     
     if($("div.slide_tweet_share").show())
     {
    	 $("div.slide_tweet_share").hide();
     }
    $("div.popup").animate({"right":0},300);
    $("div.popup1").animate({"right":0},300);
    $("div.popup2").animate({"right":0},300);
    
    var pic =          $('.sfpshareme').find(".sfpfbpic").val();
    var name =         $('.sfpshareme').find(".sfpfbname").val();
    var caption =      $('.sfpshareme').find(".sfpfbcaption").val();
    var description =  $('.sfpshareme').find(".sfpfbdescription").val();
    var redrct =       $('.sfpshareme').find(".sfpfbredrct").val();
    var link =         $('.sfpshareme').find(".sfpfblink").val();
    $(".picshare").val(pic);
    $(".nameshare").val(name);
    $(".captionshare").val(caption);
    $(".descriptionshare").val(description);
    $(".redirect_urishare").val(redrct);
    $(".linkshare").val(link);
    $("div.slide_fbshare").toggle(effect, options, duration);   
});

$(".sfpfbDynamicGoogle a.urlset").live('click', function(){
    
    $('.sfpfbDynamicGoogle').removeClass('sfpshareme');
       $(this).parents('.sfpfbDynamicGoogle').addClass('sfpshareme');
    
    // Set the effect type
    var effect = 'slide';
    
    // Set the options for the effect type chosen
    var options = { direction: 'right' };
    
    // Set the duration (default: 400 milliseconds)
    var duration = 700;
    
    if($("div.slide_popup").show())
    {
    $("div.slide_popup").hide();
    }
    if($("div.slide_popup1").show())
    {
    $("div.slide_popup1").hide();
    }
    
    if($("div.slide_popup2").show())
    {
    $("div.slide_popup2").hide();
    }
    
    if($("div.popupusbackground").show())
    {
    $("div.popupusbackground").hide();
    }
    
     if($("div.slide_popupurl").show())
    {
    $("div.slide_popupurl").hide();
    }
    
    
     if($("div.slide_fblike").show())
    {
    $("div.slide_fblike").hide();
    }
     
     if($("div.slide_tweet_share").show())
     {
    	 $("div.slide_tweet_share").hide();
     }
    
    $("div.popup").animate({"right":0},300);
    $("div.popup1").animate({"right":0},300);
    $("div.popup2").animate({"right":0},300);
    $("div.slide_google_share").toggle(effect, options, duration);   
});


 $(function() 
 {
$(".picshare").live("keyup",function(){
     
     var num = $(this).val();
    $('.sfpshareme').find(".sfpfbpic").val(num);

 }); 
 
 $(".nameshare").live("keyup",function(){
     
     var num = $(this).val();
     $('.sfpshareme').find(".sfpfbname").val(num);

 }); 
 
  $(".captionshare").live("keyup",function(){
     
     var num = $(this).val();
     $('.sfpshareme').find(".sfpfbcaption").val(num);

 }); 
 
 
  $(".descriptionshare").live("keyup",function(){
     
     var num = $(this).val();
     $('.sfpshareme').find(".sfpfbdescription").val(num);

 }); 
 
 
 $(".redirect_urishare").live("keyup",function(){
     
     var num = $(this).val();
     $('.sfpshareme').find(".sfpfbredrct").val(num);

 }); 
 
 
  $(".linkshare").live("keyup",function(){
     
     var num = $(this).val();
   //  $('.sfpshareme').find(".sfpfblink").val(num);

 }); 
 
$('body').on('click',".btnshare", function(event) {
	
    var num = $(".linkshare").val();
    var uri = $(".sfpselectaccessshare").val();
    $('.sfpshareme').find(".sfpfblink").val(uri+num);
    
     var effect = 'slide';

 // Set the options for the effect type chosen
 var options = { direction: 'right' };

 // Set the duration (default: 400 milliseconds)
 var duration = 700;

     if($("div.slide_popup").show())
     {
       $("div.slide_popup").hide();
     }
     if($("div.slide_popup1").show())
     {
       $("div.slide_popup1").hide();
     }
     
     if($("div.popupusbackground").show())
     {
       $("div.popupusbackground").hide();
     }
      if($("div.slide_popupurl").show())
     {
       $("div.slide_popupurl").hide();
     }
     
     if($("div.slide_fblike").show())
     {
       $("div.slide_fblike").hide();
     }
     $('div.slide_fbshare').toggle(effect, options, duration);
     });
   });  
 
 
 //linkedin
 $(".sfpDynamicLinkedin a.urlset").live('click', function(){
	    
	    $('.sfpDynamicLinkedin').removeClass('sfpsharelinkedinme');
	       $(this).parents('.sfpDynamicLinkedin').addClass('sfpsharelinkedinme');
	    
	    // Set the effect type
	    var effect = 'slide';
	    
	    // Set the options for the effect type chosen
	    var options = { direction: 'right' };
	    
	    // Set the duration (default: 400 milliseconds)
	    var duration = 700;
	    
	    if($("div.slide_popup").show())
	    {
	    $("div.slide_popup").hide();
	    }
	    if($("div.slide_popup1").show())
	    {
	    $("div.slide_popup1").hide();
	    }
	    
	    if($("div.slide_popup2").show())
	    {
	    $("div.slide_popup2").hide();
	    }
	    
	    if($("div.popupusbackground").show())
	    {
	    $("div.popupusbackground").hide();
	    }
	    
	     if($("div.slide_popupurl").show())
	    {
	    $("div.slide_popupurl").hide();
	    }
	    
	    
	     if($("div.slide_fblike").show())
	    {
	    $("div.slide_fblike").hide();
	    }
	     
	     if($("div.slide_tweet_share").show())
	     {
	    	 $("div.slide_tweet_share").hide();
	     }
	     
	     if($("div.slide_fbSimple_Share").show())
		 {
		  $("div.slide_fbSimple_Share").hide();
		 }
		    
	     if($("div.slide_linkedin").show())
	     {
	    	 $("div.slide_linkedin").hide();
	     }
     
	     
	    $("div.popup").animate({"right":0},300);
	    $("div.popup1").animate({"right":0},300);
	    $("div.popup2").animate({"right":0},300);
	    
	    var url =   $('.sfpsharelinkedinme').find(".SfpLinkedInUrl").val();
	    var title = $('.sfpsharelinkedinme').find(".SfpLinkedInTitle").val();
	    var summary = $('.sfpsharelinkedinme').find(".SfpLinkedInSummary").val();
	    var source =  $('.sfpsharelinkedinme').find(".SfpLinkedInSource").val();
	    $(".linkedinUrl").val(url);
	    $(".linkedinTitle").val(title);
	    $(".linkedinSummary").val(summary);
	    $(".linkedinSource").val(source);
	   
	    $("div.slide_linkedin_share").toggle(effect, options, duration);   
	});
 
 
 
 
 $(".btnlinkedin").live( "click", function() {
	
		
		$(".sfpsharelinkedinme").attr('onclick',"linkedinDyn()");
		
		
	});
 
 
 $(".btn_linkedin_share").live( "click", function() {
		
		var u = $(".tweetUrlBird").val();
		var t = $(".tweetTextBird").val();
		
		$(".sfpfbDynamicTweetBird a").attr('onclick',"twt_bird_click('"+u+"','"+t+"')");
		
		
	});
 
 
 
 $(function() 
		 {
		$(".linkedinUrl").live("keyup",function(){
		     
		     var num = $(this).val();
		   // $('.sfpsharelinkedinme').find(".SfpLinkedInUrl").val(num);

		 }); 
		 
		 $(".linkedinTitle").live("keyup",function(){
		     
		     var num = $(this).val();
		     $('.sfpsharelinkedinme').find(".SfpLinkedInTitle").val(num);

		 }); 
		 
		  $(".linkedinSummary").live("keyup",function(){
		     
		     var num = $(this).val();
		     $('.sfpsharelinkedinme').find(".SfpLinkedInSummary").val(num);

		 }); 
		 
		 
		  $(".linkedinSource").live("keyup",function(){
		     
		     var num = $(this).val();
		     $('.sfpsharelinkedinme').find(".SfpLinkedInSource").val(num);

		 }); 
		
		  
		$('body').on('click',".btn_linkedin_share", function(event) 
		
		{
		 var num = $(".linkedinUrl").val();
		var uri =  $(".sfpselectaccesslnkedshare").val();
	     $('.sfpsharelinkedinme').find(".SfpLinkedInUrl").val(uri+num);

		     var effect = 'slide';

		     // Set the options for the effect type chosen
		     var options = { direction: 'right' };

		     // Set the duration (default: 400 milliseconds)
		     var duration = 700;

			$(".sfpsharelinkedinme a").attr('onclick',"linkedinDyn()");
			
			   $("div.slide_linkedin_share").toggle(effect, options, duration);   
		     });
		   });  
	
 
 
 
//Pinterest
 $(".sfpDynamicPinterest a.urlset").live('click', function(){
	    
	    $('.sfpDynamicPinterest').removeClass('sfpsharelpinterestme');
	       $(this).parents('.sfpDynamicPinterest').addClass('sfpsharelpinterestme');
	    
	    // Set the effect type
	    var effect = 'slide';
	    
	    // Set the options for the effect type chosen
	    var options = { direction: 'right' };
	    
	    // Set the duration (default: 400 milliseconds)
	    var duration = 700;
	    
	    if($("div.slide_popup").show())
	    {
	    $("div.slide_popup").hide();
	    }
	    if($("div.slide_popup1").show())
	    {
	    $("div.slide_popup1").hide();
	    }
	    
	    if($("div.slide_popup2").show())
	    {
	    $("div.slide_popup2").hide();
	    }
	    
	    if($("div.popupusbackground").show())
	    {
	    $("div.popupusbackground").hide();
	    }
	    
	     if($("div.slide_popupurl").show())
	    {
	    $("div.slide_popupurl").hide();
	    }
	    
	    
	     if($("div.slide_fblike").show())
	    {
	    $("div.slide_fblike").hide();
	    }
	     
	     if($("div.slide_tweet_share").show())
	     {
	    	 $("div.slide_tweet_share").hide();
	     }
	     
	     if($("div.slide_fbSimple_Share").show())
		 {
		  $("div.slide_fbSimple_Share").hide();
		 }
		    
	     if($("div.slide_linkedin").show())
	     {
	    	 $("div.slide_linkedin").hide();
	     }
	     
	     
	     if($("div.slide_linkedin_share").show())
	     {
	    	 $("div.slide_linkedin_share").hide();
	     }
     
	     
	    $("div.popup").animate({"right":0},300);
	    $("div.popup1").animate({"right":0},300);
	    $("div.popup2").animate({"right":0},300);
	    
	    var url =   $('.sfpsharelpinterestme').find(".sfppinterestImage").val();
	    var desc = $('.sfpsharelpinterestme').find(".sfppinterestdesImage").val();
	    
	    $(".pinterestimagetext").val(url);
	    $(".pinterestdesc").val(title);
	  
	    $("div.slide_fbSimple_Share").toggle(effect, options, duration);   
	});

 
 $(function() 
		 {
		$(".pinterestimagetext").live("keyup",function(){
		     
		     var num = $(this).val();
		   // $('.sfpsharelpinterestme').find(".sfppinterestImage").val(num);

		 }); 
		 
		 $(".pinterestdesc").live("keyup",function(){
		     
		     var num = $(this).val();
		     $('.sfpsharelpinterestme').find(".sfppinterestdesImage").val(num);

		 }); 
		 
		
		$('body').on('click',".btnfbSimple_Share", function(event) 
		 {
			var uri =  $(".sfpselectaccesslnkedshare").val();   
			   var num = $(".pinterestimagetext").val();
			    $('.sfpsharelpinterestme').find(".sfppinterestImage").val(uri+num);
		     var effect = 'slide';

		     // Set the options for the effect type chosen
		     var options = { direction: 'right' };

		     // Set the duration (default: 400 milliseconds)
		     var duration = 700;

			$(".sfpsharelpinterestme a").attr('onclick',"pinitDyn()");
			   $("div.slide_fbSimple_Share").toggle(effect, options, duration);   
		     });
		   });  
 
 
 //mailto
 
 
 
 $(".sfpDynamicMailTo a.urlset").live('click', function(){
	    
	    $('.sfpDynamicMailTo').removeClass('sfpsharelmailme');
	       $(this).parents('.sfpDynamicMailTo').addClass('sfpsharelmailme');
	    
	    // Set the effect type
	    var effect = 'slide';
	    
	    // Set the options for the effect type chosen
	    var options = { direction: 'right' };
	    
	    // Set the duration (default: 400 milliseconds)
	    var duration = 700;
	    
	    if($("div.slide_popup").show())
	    {
	    $("div.slide_popup").hide();
	    }
	    if($("div.slide_popup1").show())
	    {
	    $("div.slide_popup1").hide();
	    }
	    
	    if($("div.slide_popup2").show())
	    {
	    $("div.slide_popup2").hide();
	    }
	    
	    if($("div.popupusbackground").show())
	    {
	    $("div.popupusbackground").hide();
	    }
	    
	     if($("div.slide_popupurl").show())
	    {
	    $("div.slide_popupurl").hide();
	    }
	    
	    
	     if($("div.slide_fblike").show())
	    {
	    $("div.slide_fblike").hide();
	    }
	     
	     if($("div.slide_tweet_share").show())
	     {
	    	 $("div.slide_tweet_share").hide();
	     }
	     
	     if($("div.slide_fbSimple_Share").show())
		 {
		  $("div.slide_fbSimple_Share").hide();
		 }
		    
	     if($("div.slide_linkedin").show())
	     {
	    	 $("div.slide_linkedin").hide();
	     }
	     
	     
	     if($("div.slide_linkedin_share").show())
	     {
	    	 $("div.slide_linkedin_share").hide();
	     }
	     
	     
	     if($("div.slide_fbSimple_Share").show())
	     {
	    	 $("div.slide_fbSimple_Share").hide();
	     }
  
	     
	    $("div.popup").animate({"right":0},300);
	    $("div.popup1").animate({"right":0},300);
	    $("div.popup2").animate({"right":0},300);
	    
	    var url =   $('.sfpsharelmailme').find(".sfpdynmail").val();
	  
	    $(".mail").val(url);
	  
	  
	    $("div.slide_linkedin").toggle(effect, options, duration);   
	});


$(function() 
		 {
		$(".mail").live("keyup",function(){
		     
		     var num = $(this).val();
		    $('.sfpsharelmailme').find(".sfpdynmail").val(num);

		 }); 
		 
		
		$('body').on('click',".btnlinkedin", function(event) 
		 {
		     var effect = 'slide';

		     // Set the options for the effect type chosen
		     var options = { direction: 'right' };

		     // Set the duration (default: 400 milliseconds)
		     var duration = 700;

			$(".sfpsharelmailme a").attr('onclick',"SFPsendmail()");
			   $("div.slide_linkedin").toggle(effect, options, duration);   
		     });
		   });  