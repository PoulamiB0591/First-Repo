
$(document).ready(function() {
        
        var base_url = window.location.origin;
        var getmultipagevalue = localStorage.getItem('getwrapperhtml');
        alert(getmultipagevalue);
        if(getmultipagevalue != null){
            
        $(".wrapper").html(getmultipagevalue);
        
        }

          $('.SFPTWO_EDITFORM').attr('id','editable');
      
			if(!Modernizr.meter){
				alert('Sorry your brower does not support HTML5 progress bar');
			} else {
			 
				var progressbar = $('#progressbar'),
					max = progressbar.attr('max'),
					time = (4000/max)*5,
			        value = progressbar.val();
             
			    var loading = function() {
			    var getautovalue = $('#autochk').val();
                        if(getautovalue == 'true')
                        {  
			        value += 1;
			        addValue = progressbar.val(value);
			        
			        $('.progress-value').html(value + '%');
                    
                    
                    if(value > 50 ){
                        $('#savepr').html('<img src="/images/299.GIF"/>');
                        $('.demo-wrapper').show();
                        $('#savepr').show();
                      $('.progress-value').show();
                      $('#progressbar').show();
                    }
			        if (value == max) {
			      
			        var d = new Date();
                    var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
                    
 			         $('#saveautosave').val(time);			         
			         $('.progress-value').hide();
			         $('#progressbar').hide();
			          $('#savepr').show();
                     
			          $('#savepr').html('<font style="color:#52B292"><b>Saved</b></font>');
                      
                           var wrappercontent = $('.wrapper').html();
                           var urlchk = $(location).attr('href'); 
                           urlchk = urlchk.split("/"); 
                           //alert(urlchk[5]);
                           urlchk = urlchk[5]; 
                           $.ajax({
                                type:'POST',
                                data:{wrappercontent:wrappercontent,urlchk:urlchk},
                                url:base_url+"/Frontend/savepage",
                                success:function(data){
                                    $('#saveautosave').val(time);		
                                    $('#images9').hide();
                                     $('.progress-value').hide();
                                     $('.demo-wrapper').hide();
                                    $('#progressbar').hide();
                                   // alert('Your Page Is Saved');
                                }
                            });
                        
                        value=0;
                       
			            clearInterval(animate);	
                       		           
			        }
                   }
			    };
               setTimeout(function(){
                
			    var animate = setInterval(function() {
			      var get= $('#autochk').val();
                  
     	 		  loading();
                 
			    }, time);
              }, 300);  
			};
             
});

 
$(document).ready(function() {
    

     var base_url = window.location.origin;
     $('#check').click(function() { 
         var status = document.getElementById("check").checked;
         $('#autochk').val(status);
      });   
    
       
       
  
    $('body').on('click', '.save_hgdfggfdgdfgfdsygfyfdsy', function(event) {
    $('div.setting-2').remove();
     $('div.setting-2').remove();
    $('.wrapper input[type="file"]').removeClass('inputdisabled');
    $('.wrapper input[type="submit"]').removeClass('inputdisabled');
    $('.wrapper input[type="button"]').removeClass('inputdisabled');
    $('.wrapper button').removeClass('inputdisabled');
    $('.wrapper .inputdisabled').removeAttr('disabled');
    $('.wrapper a').removeClass('disabled'); 
    $('.wrapper input[type="file"]').removeAttr('disabled');
    $('.wrapper input[type="submit"]').removeAttr('disabled');
    $('.wrapper input[type="button"]').removeAttr('disabled');
    
    var wrappercontent = $('.wrapper').html();
     var urlchk = $(location).attr('href'); 
     urlchk = urlchk.split("/"); 
     urlchk = urlchk[5]; 
     var d = new Date();
     var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
     $('#saveautosave').val(time);
     
     	
    $.ajax({
            type:'POST',
            data:{wrappercontent:wrappercontent,urlchk:urlchk},
            url:base_url+"/Frontend/savepage",
            success:function(data){
                  $('#saveautosave').val(time);		
                alert('Your Page Is Saved');
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
    
            }
            });
    
   });


    

     
    //CKEDITOR.disableAutoInline = true;
    var base_url = window.location.origin;
    var uri = document.URL;

    var res = uri.split("edit1/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res2[0];
    
    setTimeout('appendall("'+newurl+'")', 1000);
        $.ajax({
            type:'POST',
            data:{},
            url: base_url+'/Ajaxcall/deleteall/'+res1[5],
            success:function(data){
  
          
    
            }
            });
});

$(document).ready(function() {
    
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
    

    
    $('body').on('click', '#captcha', function(event) {
     
   
    var n1 = Math.round(Math.random() * 10 + 1);
    var n2 = Math.round(Math.random() * 10 + 1);
    $(".qes").val(n1 + " + " + n2);
    $(".btncaptcha").click(function() {
        if (eval($(".qes").val()) == $(".ans").val()) {
            alert("Ok! You are human!");
        } else {
            alert("Hey you are not human");
        }
    });
    }); 
    
  
});
//end default functionality

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
    $(function(){
      
          
         el = '<p>Label</p>';
          var setme = ' <div class="setting-2 prevnext" style="display:none;"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a class="prev" href="#">Previous</a>&nbsp;<a class="next" href="#">After</a></div>';
     
     $("#textbox").draggable({
         revert: "valid"
    });
  
  
   $("#label").draggable({
         revert: "valid"
    });
    
     $("#checkbox").draggable({
         revert: "valid"
    });
    
     $("#radio").draggable({
         revert: "valid"
    });
    
    $("#email").draggable({
         revert: "valid"
    });
  
    $("#captcha").draggable({
         revert: "valid"
    });
    
      $("#date").draggable({
         revert: "valid"
    });
    
      $("#time").draggable({
         revert: "valid"
    });
    
    $("#textarea").draggable({
         revert: "valid"
    });
    
    $("#single").draggable({
         revert: "valid"
    });
    
    $("#submit").draggable({
         revert: "valid"
    });
    
     $("#mselect").draggable({
         revert: "valid"
    });
    
     $("#paragraph").draggable({
         revert: "valid"
    });
    $('.wrapper').droppable({
        drop: function(event, ui) { 
            
        }
     
       });
   
       $('body').droppable({
    drop: function(event, ui) { 
        
        
    }
 
   });
   var times = 1;
   var counts =1;
      $("form.SFPTWO_EDITFORM ul.sortable-list").droppable({
        drop: function(event, ui) {
            
           if($("#textbox").hasClass("ui-draggable-dragging")) {
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
          $(this).append('<li class="dottedLi">'+el+'<input type="text" name="" id="txtbox_'+random+'"><a class="liClose">X</a>'+setme+'</li>');
          }
          else if($("#label").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<label></label>'+setme+'</li>');
          }
          
          else if($("#checkbox").hasClass("ui-draggable-dragging")){
             var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber); 
              $(this).append('<li class="dottedLi">'+el+'<div class="checksboxes" id="checksboxes_'+random+'"><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="1"> </span> <p>option</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="2"></span> <p>option</p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="3"></span><p>option</p></div></div>'+setme+'</li>');
          }
          
          else if($("#email").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<input type="email" name="" id="email_'+random+'">'+setme+'</li>');
          }
          
          
          else if($("#textarea").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<textarea rows="" cols="" name="" id="txt_'+random+'"></textarea>'+setme+'</li>');
          }
          
          else if($("#single").hasClass("ui-draggable-dragging")){
            
            var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            
              $(this).append('<li class="dottedLi">'+el+'<select id="hours'+random+'" style="font-family: times new roman;font-size: 20px; height: 30px;margin-bottom: 10px;width: 120px;">'+'<option value="0">Select</option>'+'<option value="textbox">option1</option>'+'<option value="password">option2</option>'+'</select><input type="button" id="'+random+'" value="edit" onclick="editme(this)" /><div id="show'+random+'" style="display: none;"></div>'+setme+'</li>');
          }
          
          else if($("#paragraph").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<input type="text" name=""><textarea rows="" cols="" name=""></textarea>'+setme+'</li>');
          }
          
           else if($("#time").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<input type="text" name="timepicker" id="timepicker'+times+'" onclick="timepick('+times+')">'+setme+'</li>');
              times += 1;
               
                 //$(this).timepicker(
//                    {
//                   showOn: 'focus',
//            	addSliderAccess: true,
//            	sliderAccessArgs: { touchonly: false }
//              }).focus();
         
          }
          
          else if($("#date").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<input type="text" name="" id="datepicker'+counts+'" onclick="datepick('+counts+')">'+set+'</li>');
              counts += 1;
        
                   //$(this).datepicker({
//
//                       showOn: 'focus',
//                    
//                        yearRange: "1900:+85",
//                    
//                        changeMonth: true,
//                    
//                        changeYear: true
//                    }).focus();
          }
          
          
          else if($("#radio").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<div class="checksboxes" id="checksboxes"><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="radio" name="name" value="1"> </span> <p>option</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input name="name" type="radio" value="2"></span> <p>option</p> </div></div>'+setme+'</li>');
          }


       else if($("#textarea").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<textarea rows="" cols="" name=""></textarea>'+setme+'</li>');
          }
          
       else if($("#submit").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<input type="submit" name="">'+setme+'</li>');
          }
          
          else if($("#captcha").hasClass("ui-draggable-dragging")){
      
              $(this).append('<li class="dottedLi">'+el+'<br/>How much is: <input type="text" class="qesd"/><br/>Answer:<input type="text" class="ansd"/><br/><input type="button" class="btncaptchad" value="Go!"/>'+setme+'</li>');
            var n1 = Math.round(Math.random() * 10 + 1);
    var n2 = Math.round(Math.random() * 10 + 1);
    $(".qesd").val(n1 + " + " + n2);
    $(".btncaptchad").click(function() {
        if (eval($(".qesd").val()) == $(".ansd").val()) {
            alert("Ok! You are human!");
        } else {
            alert("Hey you are not human");
        }
    });
          }
          
           else if($("#single").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<select style="font-family: times new roman;font-size: 20px; height: 30px;margin-bottom: 10px;width: 120px;">'+'<option value="0">Select</option>'+'<option value="textbox">option1</option>'+'<option value="password">option2</option>'+'</select>'+setme+'</li>');
          }
          
           else if($("#mselect").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<dl class="dropdown"> <dt><a style="cursor:pointer;"><span class="hida">Select</span> <p class="multiSel"></p>  </a></dt> <dd> <div class="mutliSelect"><ul><div class="checksboxes" id="checksboxes"><div class="jui-checkbox-row"><span class="checkboxWrapper"><li><input type="checkbox" value="Apple" />Apple</li></span><div class="checksboxes" id="checksboxes"><div class="jui-checkbox-row"><span class="checkboxWrapper"><li><input type="checkbox" value="Blackberry" />Blackberry</li></span></div></div> </ul></div></dd></dl>'+setme+'</li>');
          
          
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
              
          }
          else if($("#date").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<input type="text" name="" id="datepicker"></li>');
          }
          
           else if($("#time").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<input type="text" name="timepicker" id="timepicker"></li>');
          }
          
           else if($("#submit").hasClass("ui-draggable-dragging")){
              $(this).append('<li class="dottedLi">'+el+'<input type="submit" name=""></li>');
          }
        }
    });    
       
  
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
		//	$("div.popup").fadeIn(300);
		//	$("body").append("<div class='mask'></div>");
			return false
		});
        //Baishakhi-end
		$("div.popup > a").live('click',function(){
			$("div.popup, div.mask").fadeOut(300, function() {
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
    $("#ImageUploadForm").live('click', function(){
        $("div.popup .allPopup").slideUp(100);
        $("div.popup .pop_img3").slideDown(300);  
       	return false; 
    });
    
    $("#ImageUploadFormNext1").live('click', function(){
        document.getElementById("image_upload1").reset();
        $("div.popup2").fadeOut(300);
        $("div.popup").fadeIn(300);
        $("div.popup .allPopup").hide();
        $("div.popup .pop_img3").slideDown(300);  
       	return false; 
    });
    
    $("#showUserImageLibrary").live('click', function(){
        $("div.popup").fadeOut(300);
        $("div.popup2").fadeIn(300);
        $('.scroll-pane').jScrollPane();
    });
    
    $("a.close3, div.mask3").click(function(){
    	$("div.popup3, div.mask3").fadeOut(300, function() {
    	$("div.mask3").remove()
    });
    	return false
    });
// popup js block end    
    $(".SFPTWO_IMAGEEDIT a.delete").live("click",function(){
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
            data:{html:htm},
            url:  base_url+'/Ajaxcall/save/'+res[5],
            success:function(data){
                
                $("#hiddens").val(data);
                  $.ajax({
            type:'POST',
            data:{random:rand},
            url: base_url+'/Ajaxcall/trash/'+res[5],
            success:function(data){
                 var datas = data.split("|-|");
                  var cont = datas.length;
                 $(".restore").find("#empty").hide();
                   $(".restore").find("#full").show();
                  var item = parseInt(cont) - parseInt(1);
                 $("#full").attr("title","Restore("+item+") items"); 
                     
            }
            }); 
            }
            });
        $(this).parent().parent().find("#upload").hide();
       
    });
    var mn = 0;
        $("a#full").live("click",function(){
        if(mn==0){
				$("div#data_restore").animate({"left":"74px"},300);
				mn++;
			}else{
				$("div#data_restore").animate({"left":"-174px"},300);
				mn--;
			}
         var base_url = window.location.origin; 
        var uri = document.URL;
         var res = uri.split("/");
               $.ajax({
            type:'POST',
            data:{},
            url: base_url+'/Ajaxcall/restore/'+res[5],
            success:function(data){
                var res = data.split("|-|");
                 
 var img = res.length;
 var txt = "<ul>";
 var img_html = "";
  text_html = "";
 if(img != "")
 {
   for(var i=1; i<img;i++){
var r = res[i].search("randtxt");

   if(r>=0)
   {
    img_html += "<li><a href='javascript:void(0)' id='imghtml' rel='"+res[i]+"'>text section_"+i+"</a></li>";   
   }
   else
   {
    text_html += "<li><a href='javascript:void(0)' id='imghtml' rel='"+res[i]+"'>image section_"+i+"</a></li>"; 
   }
    
   }

 }
var text = txt+img_html + text_html;
text += "</ul>";
 $(".restore1").html(text);
 $(".restore1").show();
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
                 $(".restore").find("#empty").show(); 
                 $(".restore").find("#full").hide();
                }
                }
                });
    });
    $(".SFPTWO_TEXTEDIT a.delete").live("click",function(){
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
                 $(".restore").find("#empty").hide();
                   $(".restore").find("#full").show();
                  var item = parseInt(cont) - parseInt(1);
                 $("#full").attr("title","Restore("+item+") items"); 
                       
            }
            }); 
            }
            }); 
    });  
    
    
     $(".SFPTWO_EDITFORM a.delete").live("click",function(){
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
                 $(".restore").find("#empty").hide();
                   $(".restore").find("#full").show();
                  var item = parseInt(cont) - parseInt(1);
                 $("#full").attr("title","Restore("+item+") items"); 
                       
            }
            }); 
            }
            }); 
    });  
    $(".pop_img2 div.gallery ul li strong a").live('click',function(e){
        var containHeight = $("#editable").height();
        var containWidth =  $("#editable").width();
        var imgCountHold = $("#editable div.setting-2 input#imgCount").val();
        
        if(imgCountHold != '0')
        {
            $('#editable #draggable'+(imgCountHold-1)).draggable({ disabled: true });
            $('#editable #resizable'+(imgCountHold-1)).resizable({ disabled: true });
        }
        $("#editable div.setting-2 input#imgCount").val(parseInt(imgCountHold) + 1);
        var hold = $(this).attr('href');
        $("#editable").append('<img id="uploadLoading" src="/images/712.GIF" style="display: block; position: absolute; top: 50%; left: 50%; margin-left: -33px; margin-top: -33px;z-index: 999999999;">');
        $("div.popup2 > a").trigger('click');
        
        var img = new Image();
        img.onload = function()
        {
            
            var height = img.height;
            var width = img.width;
            if(imgCountHold == 0)
            {
                $("#editable #images1").remove();
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
    });
    
    $(".SFPTWO_IMAGEEDIT a.edit").live("click",function(){
        $(this).parents('div.SFPTWO_IMAGEEDIT').resizable({aspectRatio: false, handles: 's'});
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
           
        $("div.popup").fadeIn(300);
        $("body").append("<div class='mask'></div>");
        $('.SFPTWO_IMAGEEDIT').attr('id','');
        $('#upload').remove();
        var url = $("#hid").val();
        var uri_new = base_url+"/Frontend/submit/"+url;
        //$(".what_is_this").fadeIn(500); 
        $("#editable").attr("id","");    
        $(this).parent().parent().attr('id','editable');
        $('.layeredImage').draggable();
        var height = $(this).parent().parent().height();
        var width = $(this).parent().parent().width();
        $("#upload").append('<input type="hidden" value="'+height+'" id="htget"/>');
        $("#upload").append('<input type="hidden" value="'+width+'" id="wdget"/>');
        
        return false; 
   });
    
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
                response = JSON.parse(result); 
                hold = parseInt(hold) + 1;  
                holdClass = 'styled'+hold;             
                $(".pop_img2 div.scroll-pane ul").prepend('<li><strong><a href="'+response['originalPath']+'" title="Loading image"><img alt="libraimages" src="'+response['thubnailPath']+'"><img src="/popImg/active_img.png" style="position: absolute; margin: 0 0 0 -25px"></a></strong><form name="upload" method="post" action="/"><select class="styled '+holdClass+'" name="select"><option value="select" selected="selected">Select</option><option>Preview</option><option val="'+response['lastInsertId']+'">Delete</option></select></form></li>');
                $('select.'+holdClass).customSelect();
                $("#showUserImageLibrary").trigger('click');
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
         
           // alert('me');
            
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
           // $('.mce-container').next().css('display','block');
           // $(this).parent().parent().attr('class','activethis');
            $(this).parent().parent().find('#mceu_13').remove();
         //$(this).parent().parent().find('input').remove();
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
        
        
         // alert('not me');
          $(this).css('background','url("/images/edit_icon2.png")');
         $(this).attr('id','saveid'); 
         tinymce.execCommand('mceToggleEditor',false,findme);  
         var getcontent = tinyMCE.activeEditor.getContent({format : 'raw'});
        $(findme).html(getcontent);
         $(this).parent().parent().find('.mce-container').remove();
        
        // $(this).parent().parent().find('p').css('display','block');
        //alert(str);
          var ptagidfind= $(this).parent().parent().find('.SFPTWO_TAGEDIT').attr('id');
           ptagidfindhtml = $('#'+ptagidfind).html(); 
            
                 
           $(this).parent().parent().find('.SFPTWO_TAGEDIT').attr('id','');
         
            $(this).parent().parent().prepend(ptagidfindhtml);  
       // $(this).parent().parent().find('ul li').removeClass('dottedLi');
          $(".SFPTWO_TEXTEDIT").attr('id','editable');
         
       }
       
      $(this).parent().parent().find('.SFPTWO_TAGEDIT').prev('p').remove();
         
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
    
    $(document).on("click","#ups",function(e){
        
        //alert(CKEDITOR.instances.textdyn.document.getBody().getHtml());
        //return false;
        
        $(this).parent().prev().show();
        e.preventDefault();
       // var newtext=$('.nicEdit-main').html();
        $("#edittext").remove();
        $('.editor').html(CKEDITOR.instances.textdyn.document.getBody().getHtml());
        $('.editor').show();
    
    });

    $("div.option a.save").live('click',function(){
        var base_url = window.location.origin;
        $(".setting-2").remove();
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
        $("#ups").trigger('click');
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
    
      $(document).ready(function() {
    
    $('body').on('click', '.undo_btn_hughhuygughuignghuhhuh45656656', function(event) {
      var uri = document.URL;
      var res = uri.split("/"); 
      var base_url = window.location.origin;
    $.ajax({
            type:'POST',
            data:{},
            url: base_url+'/Ajaxcall/undotruncate/'+res[5],
            success:function(data){ 
           
                $(".restore1").hide();
                if(data.trim() == "0")
                {
                $(".restore").find("#empty").show();
                $(".restore").find("#full").hide();
                $(".restore1").remove();  
                }
               
            }
            });
         
             $.ajax({
            type:'POST',
            data:{},
            url: base_url+'/Ajaxcall/undocheckempty/'+res[5],
            success:function(data){
              
            if(data.trim() == "0")
            {
                
                 $("#hiddens2").val("1");
          
            return false;
            }
            else
            {
                $("#hiddens2").val("1");
                        var htm = $(".wrapper").html();
       
       
          $.ajax({
            type:'POST',
            data:{html:htm},
            url: base_url+'/Ajaxcall/undosave1/'+res[5],
            success:function(data){
             if(data == "")
             {
               
                $('.undo_btn_hughhuygughuignghuhhuh45656656').attr('disabled', true);
            return false;
                
             }
              $("#hiddens").val(data);
              
                $.ajax({
            type:'POST',
            data:{results:data},
            url: base_url+'/Ajaxcall/undosave/'+res[5],
            success:function(data){
               
             $("#hiddens1").val("1");
             $("#redo").val("1");
            $(".wrapper").html(data);
            $('.layeredImage').draggable();
            
            }
            });
    
            }
            }); 
            }
           }
            });
            
             
            
   
         

    });
    
    });
 
    $(".redo_btn_hughhuygughuignghuhhuh45656656").live('click',function(){
        var base_url = window.location.origin;
         var uri = document.URL;
         var res = uri.split("/");
          var nums =  $("#redo").val(); 
          
         if(nums == "0")
         {
            $('.redo_btn_hughhuygughuignghuhhuh45656656').attr('disabled', true);
            return false;
           
         }
         else
         {
            $("#redo").val("1");
         }
     // $.ajax({
//            type:'POST',
//            data:{},
//            url: base_url+'/Ajaxcall/checkempty/'+res[5],
//            success:function(data){
//              alert(data);
//             if(data == "0")
//             {
//                $("#hiddens1").val("0"); 
//             }
//             else
//             {
//                
//                $("#hiddens1").val("1"); 
//             }
//            }
//            });
       
         
          var num =  $("#hiddens1").val(); 
         
         if(num == "0")
         {
            $('.redo_btn_hughhuygughuignghuhhuh45656656').attr('disabled', true);
            exit;
           
         }
          $.ajax({
            type:'POST',
            data:{},
            url: base_url+'/Ajaxcall/redosave/'+res[5],
            success:function(data){
            $(".wrapper").html("");
            $(".wrapper").html(data);
            $('.layeredImage').draggable();
            }
            });
            
          
            
        });
        
        $("#editable .checksboxes").live('click',function(){
        $('.checksboxes p').each(function () {
            $(this).prepend(($(this).find('span').html()));
            $(this).find('span').remove();
        });
        $('p').removeClass('changeable');
        $("#checksboxes").find('p').removeClass('dotted');
        $("#checksboxes a.deleteCheckbox").remove();
        $("#readdCheckbox").remove();
        $(this).removeClass('checksboxes');
        $("#checksboxes").addClass('checksboxes');        
        $("#checksboxes").attr("id","");
        $(this).attr('id',"checksboxes");
        $(this).find('a').remove();
        $(this).find('p').addClass('dotted');
        $(this).find('p').addClass('changeable');
        $(this).find('p').html('<span>'+$(this).find('p').html()+'</span>');
        $(this).find('p').append('<a href="javascript:void(0)" class="deleteCheckbox">x</a>');
        $(this).append('<a id="readdCheckbox" href="javascript:void(0)" onclick="addCheckbox()" >add field</a>');    
    });
    

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
        $("#ups").trigger('click');
        var text = $(this).html();
        $('.editor').removeClass('editor');
        $(this).addClass('editor');
        $('.editor').hide();
        
        $(this).parent().prepend('<div style="display: block;" id="edittext"><textarea id="textdyn" style="width:100%">'+text+'</textarea><input type="button" class="css3button" value="update" id="ups" /></div>');
    var area = new nicEditor({buttonList : ['fontFamily','fontSize','left','center','right','justify','bold','italic','underline']}).panelInstance('textdyn');
        
    });
    
    $('li a.liClose').live('click',function(){
       $(this).parent().slideUp();
       $(this).parent().remove(); 
       $(".SFPTWO_EDITFORM").attr('id','editable');
    });
    
});



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
    alert("gd");
    $(".SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /></div>");
    $(".SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a></div>");
    $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
   
//$('form.editform .sortable-list').sortable();
  
}

function addCheckbox()
    {
        $("#readdCheckbox").remove();
        $("#editable #checksboxes").append('<div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="1"> </span><p class="dotted changeable"><span>option</span><a class="deleteCheckbox" href="javascript:void(0)">x</a></p></div><a id="readdCheckbox" href="javascript:void(0)" onclick="addCheckbox()" >add field</a>');
    }
     var count = 1;
     var time = 1;
     var capcha = 1; 
function chechTypeAndAdd(value)
{
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
  
    var set = ' <div class="setting-2 prevnext"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a class="prev" href="#">Previous</a>&nbsp;<a class="next" href="#">After</a></div>';
    
    AddContainer = "";
    el = '<p>Label</p>';
    switch(value){
        case 'label':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        AddContainer = '<li class="dottedLi">'+el+'<label></label>'+set+'</li>';
            break;
        case 'email':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        AddContainer = '<li class="dottedLi">'+el+'<input type="email" name="" id="email_'+random+'">'+set+'</li>';
            break;            
        case 'textbox':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi">'+el+'<input type="text" name="" id="txtbox_'+random+'">'+set+'</li>';
            break;
        case 'password':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi">'+el+'<input type="password" name="" id="pass_'+random+'">'+set+'</li>';
            break;
        case 'checkbox':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi">'+el+'<div class="checksboxes" id="checksboxes_'+random+'"><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="1" name="name" > </span> <p>option</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="2" name="name" ></span> <p>option</p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="3" name="name" ></span><p>option</p></div></div>'+set+'</li>';
            break;
        case 'radio':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi">'+el+'<div class="checksboxes" id="checksboxes_'+random+'"><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="radio" name="name" value="1"> </span> <p>option</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input name="name"  type="radio" value="2"></span> <p>option</p> </div></div>'+set+'</li>';
            break;
        case 'textarea':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi">'+el+'<textarea id="txt_'+random+'" rows="" cols="" name=""></textarea>'+set+'</li>';
            break;
       case 'captcha':
        $("#hide").val(capcha);
        var res = $("#hide").val();
       if($('#captcha').attr('rel')=='captcha')
       {
        
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi" rel="capchas">'+el+'<br/>How much is: <input type="text" class="qes"/><br/>Answer:<input type="text" class="ans"/><br/><input type="button" class="btncaptcha" value="Go!"/>'+set+'</li>';
            $('#captcha').attr('rel','');
        }
        capcha += 1;
        $("#hide").val(capcha);
            break;     
      case 'single':
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi">'+el+'<select id="hours'+random+'" style="font-family: times new roman;font-size: 20px; height: 30px;margin-bottom: 10px;width: 120px;">'+'<option value="0">Select</option>'+'<option value="textbox">option1</option>'+'<option value="password">option2</option>'+'</select><input type="button" id="'+random+'" value="edit" onclick="editme(this)" /><div id="show'+random+'" style="display: none;"></div>'+set+'</li>';
            break;  
       case 'mselect':
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi">'+el+'<dl class="dropdown"> <dt><a style="cursor:pointer;"><span class="hida">Select</span> <p class="multiSel"></p>  </a></dt> <dd> <div class="mutliSelect"><ul><li><input type="checkbox" value="Apple" />Apple</li><li><input type="checkbox" value="Blackberry" />Blackberry</li> </ul></div></dd></dl>'+set+'</li>';
            break;           
         case 'date':     
        AddContainer = '<li class="dottedLi">'+el+'<input type="text" name="" id="datepicker'+count+'" onclick="datepick('+count+')">'+set+'</li>';
          //$( "#datepicker" ).datepicker();
        count += 1; 
            break;
       case 'time':
        AddContainer = '<li class="dottedLi">'+el+'<input type="text" name="timepicker" id="timepicker'+time+'" onclick="timepick('+time+')">'+set+'</li>';
          //$( "#datepicker" ).datepicker();
        time += 1;
            break;   
            
       case 'paragraph':
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        AddContainer = '<li class="dottedLi">'+el+'<h1 class="dottedLi">Text</h1><textarea id="paragraph'+random+'" rows="" cols="" name=""></textarea>'+set+'</li>';
          //$( "#datepicker" ).datepicker();
        
            break;            
        case 'submit':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        AddContainer = '<li class="dottedLi">'+el+'<input type="submit" name="">'+set+'</li>';
            break;  
        default :
            AddContainer = "";
    }
  //  $( "#datepicker" ).datepicker();
     $('#datepicker').bind('load', function() {
    $(this).datepicker();
});

    $("#editable ul").append(AddContainer);
    //CKEDITOR.inlineAll();
    //el1 = CKEDITOR.dom.element.createFromHtml(el);
    
    //CKEDITOR.inline( el1, {
//        toolbarGroups: [
//            { name: 'basicstyles' }
//        ]
//    } );    
}

/*var selectContainer = '<div id="selectContainer" style="width: 100%; text-align: end;"><label>Add your form element : - </label>'+
                        '<select onchange="chechTypeAndAdd(this.value)" style="font-family: times new roman;font-size: 20px; height: 30px;margin-bottom: 10px;width: 120px;">'+
                        '<option value="0">Select</option>'+
                        '<option value="textbox">textbox</option>'+
                        '<option value="password">password</option>'+
                        '<option value="checkbox">checkbox</option>'+
                        '<option value="radio">radio</option>'+
                        '<option value="submit">Submit</option>'+
                        '<option value="textarea">textarea</option>'+
                        '</select></div>';*/
                        
                        

  
  
  $(window).scroll(function () {
   set = $(document).scrollTop()+"px";
   $('.left_nav_jhuddgdgdfgdsafghugfxhughug456656437').animate({top:set},{duration:1000,queue:false});
  });
  
   
  
  
  
function requestUrlWithAjax(url)
{
   // alert(url);
    var xmlhttp;
   alert(url);
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
            //var found = xmlhttp.responseText.search("</body");
//            alert(found);
            // we arrive here when we have successfully retrieved  the url we asked for
            //1. Set the response text to the text area's value
            
            //alert(xmlhttp.responseText);
                var gethtml = xmlhttp.responseText;
            var xmlgethtmlform = gethtml.indexOf("{{htmlform}}"); 
            if(xmlgethtmlform != -1)
            {
                var statform = '<form action="" class="SFPTWO_EDITFORM" style="margin-top:25px;"><ul class="sortable-list"><li><p >EmaiL address</p><input name="" type="text" /><div class="setting-2"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div></li><li><p>What kind of campaign are you Looking for?</p2><div class="checksboxes" style="float:left; width:70%;"><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="1" /> </span><p>option</p></div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="2" /> </span><p>option</p></div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="3" /></span><p>option</p></div></div><div class="setting-2"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div> </li><li><p  >Your message</p><textarea name="" cols="" rows=""></textarea><div class="setting-2"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div> </li><li><input name="" type="submit" value="Send"><div class="setting-2"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /></div></li></ul></form>';
                var remhtmlform = gethtml.replace('{{htmlform}}', statform);
                var d = new Date();
            var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
            //console.log(time);
            //alert(time);
            var inputtime = $('#saveautosave').val();
            //alert(inputtime)
            if(time == inputtime)
            {
            //alert(remhtmlform);
            $('.wrapper').html(remhtmlform);
            }
            else
            {
              var r = confirm("This page is asking you to confirm that you want to leave - data you have entered may not be saved");
               if (r == true) 
               {
                     $('.wrapper').html(remhtmlform);
                } 
                
               
            }
               
                //alert(remhtmlform);
            }
            else{
               // alert('remhtmlform');
                
                var d = new Date();
            var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
            //console.log(time);
            //alert(time);
            var inputtime = $('#saveautosave').val();
            //alert(inputtime)
            if(time == inputtime){
             var getwrapperhtml = remhtmlform; 
             localStorage.setItem('getwrapperhtml',getwrapperhtml);
            $('.wrapper').html(remhtmlform);
            appendall('newurl');
            $(".SFPTWO_TEXTEDIT").live('mouseover',function(){
               alert('over');
              $(this).find("div.setting-2").show();
            });
            $(".SFPTWO_TEXTEDIT").live('mouseout',function(){
            //    alert('out');
              $(this).find("div.setting-2").hide();
            });            
           // location.reload();
            }
            else{
               var r = confirm("This page is asking you to confirm that you want to leave - data you have entered may not be saved");
               if (r == true) 
               {
                var getwrapperhtml = xmlhttp.responseText;
                localStorage.setItem('getwrapperhtml',getwrapperhtml);
                    $('.wrapper').html(xmlhttp.responseText);
                    
                   // location.reload();
                } 
                
               
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
   var new_id = "hours"+sid;
    var x = document.getElementById(new_id);
    
   var txt = "<div class='hello"+sid+"'><input type='button' id='addition' value='+' onclick='add("+sid+")' /></div>";
    var txt = txt + "Add options: ";
    var i;
    for (i = 0; i < x.length; i++) {
        txt = txt + "<br/>"+"<li id='drops"+sid+"_"+i+"'><input type='text' value='"+x.options[i].text+"' id='drop"+sid+"_"+i+"' readonly><input type='button' value='-' onclick='removelist("+i+","+sid+")'/></li>";
    } 
    
   $("#show"+sid).html(txt);
   $("#show"+sid).show(); 
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
       showOn: 'focus',
	addSliderAccess: true,
	sliderAccessArgs: { touchonly: false }
  }).focus();
}); 
}


$( document ).ready(function() {
    
        
    $('#desktop').click(function(){
	$('.wrapper').addClass('wrapper1');
    $('.wrapper').removeClass('wrapper_tab');
     $('.wrapper').removeClass('wrapper_mobile');
    return false;
  });
  
  $('#tab').click(function(){
	$('.wrapper').removeClass('wrapper1');
    $('.wrapper').removeClass('wrapper_mobile');
    $('.wrapper').addClass('wrapper_tab');
    return false;
  });
  
  
  $('#mobile').click(function(){
	$('.wrapper').removeClass('wrapper1');
    $('.wrapper').removeClass('wrapper_tab');
    $('.wrapper').addClass('wrapper_mobile');
    return false;
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




//$("#data_restore").niceScroll({cursorcolor:"#000"});

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

$(".SFPTWO_IMAGEEDIT").live('mouseover',function(){
  $(this).find("div.setting-2").show();
});
$(".SFPTWO_IMAGEEDIT").live('mouseout',function(){
  $(this).find("div.setting-2").hide();
});

$(".SFPTWO_TEXTEDIT").live('mouseover',function(){
//   alert('over');
  $(this).find("div.setting-2").show();
});
$(".SFPTWO_TEXTEDIT").live('mouseout',function(){
//    alert('out');
  $(this).find("div.setting-2").hide();
});

$('.wrapper input[type="file"]').addClass('inputdisabled');
$('.wrapper input[type="submit"]').addClass('inputdisabled');
$('.wrapper input[type="button"]').addClass('inputdisabled');
$('.wrapper button').addClass('inputdisabled');
$('.wrapper .inputdisabled').attr('disabled', 'disabled');
$('.wrapper a').addClass('disabled');
$('.SFPTWO_EDITFORM a').removeClass('disabled');
});

