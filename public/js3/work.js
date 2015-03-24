(function($){
    $(function(){
           
           
           $(".sv_indx").click(function(){
            
            $("div.loadpage ul.ulshow").css('display','none');
            var filename = $("#filename").val().split('.php');
            var newpagename = filename[0];
            
            if(newpagename == "index") {
                
                $("div.slide_popup").css('display','none');
            }
            
            else {
                
            //$("div.slide_popup").css('display','block');
            $("div.slide_popup_indexus").hide();
             // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;

  if($("div.popup").show())
  {
    $("div.popup").hide();
  }

  $("div.slide_popup").toggle(effect, options, duration);
  //return false
               
                }
            
                 var base_url = window.location.origin;
      //alert(base_url);
      var uri = document.URL;
      //alert(uri);
      var uripart = uri.split("editnew/");
      //alert(uripart);
      var data = uripart[1].split("/");
      //alert(uripart);
      var foldername = data[0];
      //alert(foldername);
      //alert(pagename);
            
            $.ajax({
            type: 'post',
            data: {foldername : foldername,newpagename : newpagename},
            url: base_url+'/app/addsettings',
            success: function (data) {
                
                //alert(data);
                var answer = data.split('||=||'); 
                var answer2 = answer[0];
                var answers = answer2.split('@');
                var pagename = answer[1];                                                       
                 if( pagename == "indexus5" ) {
                    
                    //alert("In If!!");
                    $("#tab_4 > div#set1").css('display','none');
                    $("#tab_4 > div#set2").css('display','block');
                    $("#tab_4 > div#set2 ol").html("");
                    i=0;
                    var ansItems =  $(".radios span");
                    ansItems.each(function(idx, li) {
                    var product = $(li);
                    i = parseInt(i) + 1;
                    $("#tab_4 > div#set2 ol").append('<li class="clearfix"><span><i>'+i+'</i><input type="text" value="'+product.html()+'" id="val'+i+'" name="indexusapp"></span><span><input id="valsss'+i+'" type="text" name="" value="'+$("#v"+i).val()+'"></span></li>'); 
                    
                    //$("#data"+i).val(product.html()); 
                        
                });
                    
                 }
                 else if(pagename != "indexus5") {
                    
                    $("#tab_4 > div#set2").css('display','none');
                    $("#tab_4 > div#set1").css('display','block');
                    $("#tab_4 > div#set1 > div.clearfix > ol > li").remove();
                    
                    i=0;
                    var ansItems =  $(".radios span");
                    ansItems.each(function(idx, li) {
                    var product = $(li);
                    i = parseInt(i) + 1;
                    var temp = i; 
                    $("#tab_4 > div#set1 > div.clearfix > ol").append("<li class='clearfix'><span><i>"+temp+"</i><input type='text' id='answer"+temp+"' class='canswer"+temp+"' value='"+product.html()+"' name='' /></span><span><input type='text' id='val"+temp+"' class='cval"+temp+"' value='"+$("#v"+i).val()+"' name='' /></span></li>");
                        
                });
                    
                 }  
                 else {
                    $(".slide_popup").css('display','none');
                 }
                 
                
                 }
                });
            });
           
           $(".add").click(function(){
               //alert("kajhkj");
               var count1 = $('.wrapper').find('.radios').find('input:radio').length;
               count1 = parseInt(count1) + 1;
               $(".wrapper fieldset.radios").append('<label class="label_radio"><input type="radio" name="indexusapp" value="5"><span id="s'+count1+'">Ik wil zelf beleggen</span></label>')
                var count = $('.wrapper').find('.radios').find('input:radio').length;
              
                 $("#tab_4 div#set2 ol").append("<li class='clearfix'><span><i>"+count+"</i><input type='text' id='val"+count+"' class='canswer"+count+"' name='' /></span><span><input type='text' id='val"+count+"' class='cval"+count+"' value='' name='' /></span></li>");  
                 $("#extrapageoption").append('<input type="hidden" value="3" id="v'+count+'">');                                 
                 
               
           });
           
    	});
})(jQuery);


//////////////////////////////////////////

function saveValues() {
    
    //var count = $(".canswer").length;
    //var count = $('div.set').children('div.clearfix > ol').find('input:text').length;
    //alert(count);
    var count = $('.wrapper').find('.radios').find('input:radio').length;
    //alert(count);
    if($("#5identifire").hasClass("indexusidentifier")){
        for(i=0;i<count;i++) {
            var temp = parseInt(i)+1;
            $("#s"+temp).html($("#val"+temp).val());
            $("#v"+temp).val($("#valsss"+temp).val());
        }
        
    } else {
        for(i=0;i<count;i++) {
            var temp = parseInt(i)+1;
            $("#v"+temp).val($("#val"+temp).val());
            if($("#R1").hasClass("label_radio1"))
            {
                $("#es"+temp).html($("#answer"+temp).val());
            }
            if($("#jaarindexus2").hasClass("jaar"))
            {
                $("#es"+temp).html($("#answer"+temp).val());
            }
            $("#s"+temp).html($("#answer"+temp).val());
            
        }
    }
}
//setInterval('saveValues()',100);