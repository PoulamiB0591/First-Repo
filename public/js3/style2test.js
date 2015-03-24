

/* document.addEventListener("DOMContentLoaded", function () {
alert('hhh');
    var x = document.querySelector.bind(document);
    var text = x(".wrapper");
    var startValue = text.innerHTML;
    var blocked = false;
    var undo = x(".undo");
    var redo = x(".redo");
 
   var dirty = x(".dirty");
    var stack = new Undo.Stack();
    var newValue = "";

    var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;

    var observer = new MutationObserver(function (mutations) {      
      if(blocked){
        blocked = false;
        return;
      }
      newValue = text.innerHTML;
      stack.execute(new EditCommand(text, startValue, newValue));
      startValue = newValue;       
    });

    observer.observe(text, {
        attributes: true,
        childList: true,
        characterData: true,
        characterDataOldValue: true,
        subtree: true
    });

    var EditCommand = Undo.Command.extend({
        constructor: function (html, oldValue, newValue) {
            this.html = html;
            this.oldValue = oldValue;
            this.newValue = newValue;
        },
        execute: function () {},
        undo: function () {
            blocked = true;
            this.html.innerHTML = this.oldValue;
        },

        redo: function () {
            blocked = true;
            this.html.innerHTML = this.newValue;
        }
    });


    function stackUI() {
        redo.disabled = !stack.canRedo();
        undo.disabled = !stack.canUndo();
        dirty.style.display = stack.dirty() ? 'inline-block' : 'none';

    }
    stackUI();

    undo.addEventListener("click", function () {
        stack.undo();
    });

    redo.addEventListener("click", function () {
      
        stack.redo();
    });


    stack.changed = function () {
        stackUI();
    };
}); */




    
$(document).ready(function() {
    
   $(".overlay").show();   //Loader show
    /**

 *         var getmultipagevalue = localStorage.getItem('getwrapperhtml');
 *         //alert(getmultipagevalue);
 *         if(getmultipagevalue != null){
 *             
 *         $(".wrapper").html(getmultipagevalue);
 *         
 *         }
 */
    
     $('#check').click(function() { //autosave checkbox click
        
         var status = document.getElementById("check").checked; //get checked value
         $('#autochk').val(status);
      });   
    
        setTimeout(function(){     
             $('.SFPTWO_TEXTEDIT').hover(
       
         function () {
            
           $(this).find("div.setting-2").show(); 
         }, 
         function () {
         $(this).find("div.setting-2").hide();
         }
     );
     $(".overlay").hide();

   }, 3000);
   
   
     $(".idicon").live('click',function(){
    //alert('f');    
     $('.ulshow').toggle();
        
   }); 
  
   
   //  setInterval(function(){ window.location.reload(); }, 180000);
    
          $('.SFPTWO_EDITFORM').attr('id','editable');
      setInterval(function(){
        $('#savepr').hide();
         var getautovalue = $('#autochk').val();
         if(getautovalue == 'true')
         {
      
              $('.explicit_edit').attr('contenteditable','false');
              var wrappercontent = $('.wrapper').html();
               var urlchk = $(location).attr('href'); 
               urlchk = urlchk.split("/"); 
               var filename = $('#filename').val();
               //alert(urlchk[5]);
               urlchk = urlchk[5]; 
               $.ajax({
                    type:'POST',
                    data:{wrappercontent:wrappercontent,urlchk:urlchk,filename:filename},
                    url:"http://test.scampaigns.com/Frontend/savepage1",
                    success:function(data){
                        $('.explicit_edit').attr('contenteditable','true');
                        var dt = new Date();
                      var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
                      $('#savepr').show();
                      $('#saveprlast').show();
                         $('#savepr').html('Saved');
                         $('#saveprlast').html('Last Saved on'+time);
                         setInterval(function(){
                            $('#savepr').hide();
                           }, 2000); 
                       // alert('Your Page Is Saved');
                    }
                });
               }  
               else{
               $(".save_btn").show();
                $('#savepr').hide();
               
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
			
             
});

 
$(document).ready(function() {
    
$(".wrapper .SFPTWO_EDITFORM ul").find("li").append('<div class="setting-2 prevnext"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a class="prev" href="#">Previous</a>&nbsp;<a class="next" href="#">After</a></div>');
    
     $('#check').click(function() { 
        $(".save_btn").hide();
         var status = document.getElementById("check").checked;
         $('#autochk').val(status);
      });   
    
       
 
  
    $('body').on('click', '.save_hgdfggfdgdfgfdsygfyfdsy', function(event) {
        
    
    $('div.setting-2').remove();
    $('.explicit_edit').removeClass('explicit_edit');
    var resd =  $("#hidder").val();
    var templates = $("#hiddens").val();
  
    $('.wrapper input[type="file"]').removeClass('inputdisabled');
    $('.wrapper input[type="submit"]').removeClass('inputdisabled');
    $('.wrapper input[type="button"]').removeClass('inputdisabled');
    $('.wrapper button').removeClass('inputdisabled');
    $('.wrapper .inputdisabled').removeAttr('disabled');
    $('.wrapper a').removeClass('disabled'); 
    $('.wrapper input[type="file"]').removeAttr('disabled');
    $('.wrapper input[type="submit"]').removeAttr('disabled');
    $('.wrapper input[type="button"]').removeAttr('disabled');
    
 
     var urlchk = $(location).attr('href'); 
     urlchk = urlchk.split("/"); 
     urlchk = urlchk[5]; 
     var d = new Date();
     var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
     $('#saveautosave').val(time);
     
     var new_name = $("#photocontest").val();
     var dates = $("#datepicker").val();	
     var times = $("#datetimepicker1").val();
    if(new_name == "Photocontest")
    {
        alert("please provide new template name");
        return false;
    }
    $.ajax({
            type:'POST',
            data:{urlchk:urlchk,newname:new_name,dates:dates,times:times,template_name : templates},
            url:"http://test.scampaigns.com/Frontend/savepage3",
            success:function(data){
            
                  $('#saveautosave').val(time);		
                alert('Your Page Is Saved');
            window.location.reload(); 
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



    /*$('body').on('click', 'a#tabPub', function(event) {
    var value = $("#ghider").val();
     $(".overlay").show();      
    $('div.setting-2').remove();
    $('.explicit_edit').attr('contenteditable','false');
    var resd =  $("#hidder").val();
    var templates = $("#hiddens").val();
  
    $('.wrapper input[type="file"]').removeClass('inputdisabled');
    $('.wrapper input[type="submit"]').removeClass('inputdisabled');
    $('.wrapper input[type="button"]').removeClass('inputdisabled');
    $('.wrapper button').removeClass('inputdisabled');
    $('.wrapper .inputdisabled').removeAttr('disabled');
    $('.wrapper a').removeClass('disabled'); 
    $('.wrapper input[type="file"]').removeAttr('disabled');
    $('.wrapper input[type="submit"]').removeAttr('disabled');
    $('.wrapper input[type="button"]').removeAttr('disabled');
    
 
     var urlchk = $(location).attr('href'); 
     urlchk = urlchk.split("/"); 
     urlchk = urlchk[5]; 
     var d = new Date();
     var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
     $('#saveautosave').val(time);
    var campaignnumber = Math.round(Math.random() * 100 + 1);
     var campaignnumber1 = Math.round(Math.random() * 1000 + 1);
     
     var quotes = new Array("demo_name1", "demo_name2", "demo_name3", "demo_name4"),
     randno = quotes[Math.floor( Math.random() * quotes.length )];
     
     var new_name = randno;//$("#photocontest").val();
     var campaign = campaignnumber+campaignnumber1;
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
          
    $.ajax({
            type:'POST',
            data:{urlchk:urlchk,newname:new_name,dates:dates,times:times,template_name : templates,campaignnumber:campaign},
            url:"http://test.scampaigns.com/Frontend/savepage3",
            success:function(data){
            
                  $('#saveautosave').val(time);		
               // alert('Your Page Is Saved');
                       setTimeout(function(){     
                       window.open('https://test.scampaigns.com/mobileview/index.php?'+new_name+"="+campaign,"_blank");
                        window.location.reload();
                         $(".overlay").hide();
                      }, 3000);
              
            }
        });
       // return false;

    });*/
    
/*   $('body').on('click', '.save_btn', function(event) {
        $('div.setting-2').remove();
        $(".ui-resizable-handle").remove();
        
         $('.explicit_edit').removeAttr('contenteditable');
    var resd =  $("#hidder").val();
    var templates = $("#hiddens").val();
   
   
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
      var filename = $('#filename').val();
            
               $.ajax({
                    type:'POST',
                    data:{wrappercontent:wrappercontent,urlchk:urlchk,filename:filename},
                    url:"http://test.scampaigns.com/Frontend/savepage",
                    success:function(data){
                      
                  $('#saveautosave').val(time);		
              //  alert('Your Template is saved');
               window.location.reload(); 
                       // alert('Your Page Is Saved');
                    }
                });
     /*var new_name = $("#photocontest").val();
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

     
    //CKEDITOR.disableAutoInline = true;
    var base_url = window.location.origin;
    var uri = document.URL;

    var res = uri.split("edit2/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res2[0];
    setTimeout('appendall("'+newurl+'")', 1000);
        $.ajax({
            type:'POST',
            data:{},
            url: base_url+'/Ajaxcall/deleteall/'+res1[5],
            success:function(data){
  
                  $(".overlay").hide();
    
            }
            });*/
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

/**
 * $('body').on('click', '#addScnt', function(event) { 
 *       var scntDiv = $(this).parent().parent();
 *       //  var i = $('.chkboxaddnow').find('.jui-checkbox-row').length + 1;
 *       
 *           // $('.pchkadd').prev().append('<div class="jui-checkbox-row"><span class="checkboxWrapper" id="p_scnt_' + i +'" name="p_scnt_' + i +'"><input type="checkbox" value="2" name="name" ></span><p class="opt" id="' + i +'" name="' + i +'">option' + i +'</p><a href="#" id="remScnt">Remove</a></div>'); 
 * //                //$('<p><label for="p_scnts"><input type="text" id="p_scnt" size="20" name="p_scnt_' + i +'" value="" placeholder="Input Value" /></label> <a href="#" id="remScnt">Remove</a></p>').appendTo(scntDiv);
 * //                i++;
 *                 return false;
 *         });
 *         
 */
        
      /**
 *   $('body').on('click', '#addScntme', function(event) { 
 *       var scntDiv = $(this).parent().parent();
 *       
 *         var i = $('.selectboxaddnow').find('.jui-checkbox-row').length + 1;
 *        
 *            $('.pselectadd').prev().append('<div class="jui-checkbox-row"><span class="checkboxWrapper" id="p_scnt_' + i +'" name="p_scnt_' + i +'"><input type="radio" value="2" name="name" ></span><p class="opt" id="' + i +'" name="' + i +'">option' + i +'</p><a href="#" id="remScntme">Remove</a></div>'); 
 *                 //$('<p><label for="p_scnts"><input type="text" id="p_scnt" size="20" name="p_scnt_' + i +'" value="" placeholder="Input Value" /></label> <a href="#" id="remScnt">Remove</a></p>').appendTo(scntDiv);
 *                 i++;
 *                 return false;
 *         });
 */
        
        
        
       /**
 *    $('body').on('click', '#addScntmemulti', function(event) { 
 *       var scntDiv = $(this).parent().parent();
 *       alert(scntDiv);
 *         var i = $('.multilineme').find('.jui-checkbox-row').length + 1;
 *        
 *            $('.meline').prev().append('<div class="jui-checkbox-row"><p class="opt" id="' + i +'">Text' + i +'</p> <a href="#" id="remScntmemulti">Remove</a></div>'); 
 *                 //$('<p><label for="p_scnts"><input type="text" id="p_scnt" size="20" name="p_scnt_' + i +'" value="" placeholder="Input Value" /></label> <a href="#" id="remScnt">Remove</a></p>').appendTo(scntDiv);
 *                 i++;
 *                 return false;
 *         });
 *         
 */
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
$(function() {

    
     $( "#lisingle" ).draggable({
        
        connectToSortable: ".SFPTWO_EDITFORM .sortable-list",
        helper: "clone",
        revert: "invalid",

    drag: function(event, ui){
            var offset = ui.helper.offset();
            var xPos = offset.left;
            var yPos = offset.top;
            $('#imgdragable').css('position','absolute');
            $('#imgdragable').css('left',xPos);
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
            $('#imgdragable').css('left',xPos);
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
                    $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="singleline" id="singleline"><span>Single textline</span><img src="https://test.scampaigns.com/formbuild/singletextline_icon.png" alt="" /></a>')
                      $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }
                 
                  if($('.ui-sortable-helper').find('.multilinedrag').length)
                 { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('	<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="multiline" id="multiline"><span>Multi textline</span><img src="https://test.scampaigns.com/formbuild/multitextline_icon.png" alt="" /></a>')
                     $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }  
                 
                 
              if($('.ui-sortable-helper').find('.paradrag').length)
                 { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a  style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="paragraph" id="paragraph"><span>Parapraph</span><img src="https://test.scampaigns.com/formbuild/paragraph_icon.png" alt="" /></a>')
                     $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }  
                 
            if($('.ui-sortable-helper').find('.textdrag').length)
                 { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="textbox" id="textbox"><span>Input field</span><img src="https://test.scampaigns.com/formbuild/inputfield_icon.png" alt="" /></a>')
                     $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }                     
                 
                 
        if($('.ui-sortable-helper').find('.checkboxdrag').length)
                 { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="checkbox" id="checkbox"><span>Checkbox</span><img src="https://test.scampaigns.com/formbuild/checkbox_icon.png" alt="" /></a>')
                     $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }  
                 
              if($('.ui-sortable-helper').find('.radioboxdrag').length)
                 { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="radio" id="radio"><span>Radio buttons</span><img src="https://test.scampaigns.com/formbuild/radiobuttons_icon.png" alt="" /></a>')
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }       
                
             if($('.ui-sortable-helper').find('.dropdowndrag').length)
                 { 
                   
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="single" id="single"><span>Dropdown</span><img src="https://test.scampaigns.com/formbuild/dropdown_icon.png" alt="" /></a>')
                     $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }  
                 
         
                 
      if($('.ui-sortable-helper').find('.multidropdowndrag').length)
                 { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a href="#"><span>MS dropdown</span><img src="https://test.scampaigns.com/formbuild/msdropdown_icon.png" alt="" /></a>')
                      $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }  
                 
        if($('.ui-sortable-helper').find('.datedrag').length)
                 { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="date" id="date"><span>Date picker</span><img src="https://test.scampaigns.com/formbuild/datepicker_icon.png" alt="" /></a>')
                     $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }   
                 
                  if($('.ui-sortable-helper').find('.timedrag').length)
                 { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="time" id="time"><span>Timefield</span><img src="https://test.scampaigns.com/formbuild/timefield_icon.png" alt="" /></a>')
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }    
                 
                 if($('.ui-sortable-helper').find('.emaildrag').length)
                 { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="email" id="email"><span>Email</span><img src="https://test.scampaigns.com/formbuild/email_icon.png" alt="" /></a>')
                      $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }       
                 
                 
                  if($('.ui-sortable-helper').find('.captchadrag').length)
                 { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="captcha" id="captcha"><span>Captcha</span><img src="https://test.scampaigns.com/formbuild/captcha_icon.png" alt="" /></a>')
                     $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }       
                 
                 if($('.ui-sortable-helper').find('.submitdrag').length)
                   { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="submit" id="submit"><span>Submit button</span><img src="https://test.scampaigns.com/formbuild/submitbutton_icon.png" alt="" /></a>')
                     $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }   
                 
                 
                 if($('.ui-sortable-helper').find('.dropdrag').length)
                   { 
                   
                                    
                     $('#lilabelme').css('position','relative');
                    $('#lilabelme').css('top',yPos);
                    $('#lilabelme').html('<a style="cursor: pointer;" onclick="chechTypeAndAdd(this.rel)" rel="submit" id="submit"><span>Submit button</span><img src="https://test.scampaigns.com/formbuild/dropdown_icon.png" alt="" /></a>')
                      $('#lilabelme').css('top',yPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').css('left',xPos);
                    $('#lilabelme').show();
                  
                    
                    
                 }                                        
              },
              
                stop: function(event, ui) {
            
                 $('#imgdrag').hide(); 
                  $('#lilabelme').hide();
                 //  $('.form-container ul li').css('border','1px solid #fff;');
              },
 
        receive: function(event, ui) {
            
            
                if($("li").hasClass("ui-draggable")){
       
        
              var setme = '<div class="setting-2 prevnext"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a class="prev" href="#">Previous</a>&nbsp;<a class="next" href="#">After</a></div>';
                   
                    var html = [];
                    
                     var minNumbesr = 0000; // The minimum number you want
        var maxNumbesr = 1000; // The maximum number you want
       var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
       var random = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
    el = '<p id="pid_'+randomss+'" class="opt">Label</p>';
    if($(this).find('.ui-draggable').find('#label').length)
    {
        html.push('<li class="dottedLi"><div id="diveditme" class="labeledit">'+el+'<div><textarea id="editmetext" name=""/></div></div>'+setme+'</li>');
          $('#imgdragable').hide();
          
        $(this).find('#label').replaceWith(html.join(''));
         //console.log($(this).data().sortable.currentItem); 
        ($(this).data(). sortable.currentItem.find('#diveditme').trigger('click')) ;
                        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
      //  $('.slide_popup1').toggle(effect, options, duration);
     //   $('.slide_popup2').toggle(effect, options, duration);     
    }
    
        else if($(this).find('.ui-draggable').find('#paragraph').length)
    {
        html.push('<li class="dottedLi"><div id="diveditme" class="labeledit">'+el+'<div><textarea id="editmetext" name=""/></div></div>'+setme+'</li>');
          $('#imgdragable').hide();
          
        $(this).find('#paragraph').replaceWith(html.join(''));
         //console.log($(this).data().sortable.currentItem); 
        ($(this).data(). sortable.currentItem.find('#diveditme').trigger('click')) ;
                        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
        //$('.slide_popup1').toggle(effect, options, duration);
       // $('.slide_popup2').toggle(effect, options, duration);     
    }
    else if($(this).find('.ui-draggable').find('#singleline').length)
    {
        
        html.push('<li class="dottedLi"><div id="labeledit" class="labeledit singledrag">'+el+'</div>'+setme+'</li>');
         $('#imgdragable').hide(); 
        $(this).find('#singleline').replaceWith(html.join(''));
        ($(this).data(). sortable.currentItem.find('#labeledit').trigger('click')) ;
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
       // $('.slide_popup1').toggle(effect, options, duration);
       // $('.slide_popup2').toggle(effect, options, duration); 
        
    }
    
      else if($(this).find('.ui-draggable').find('#multiline').length)
    {
        
        html.push('<li class="dottedLi"><div id="labeledit" class="labeledit multilinedrag">'+el+'</div><div class="checksboxes p_scents multilineme" id="checksboxes_'+random+'"><div id="multiclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><p class="opt" id="1">Text1</p> </div><div class="jui-checkbox-row"> <p class="opt" id="2">Text2</p> </div></div><p id="mepp" class="meline"></p></div>'+setme+'</li>');
            $('#imgdragable').hide(); 
        $(this).find('#multiline').replaceWith(html.join(''));
           ($(this).data(). sortable.currentItem.find('.multilineme').trigger('click')) ;
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
       // $('.slide_popup1').toggle(effect, options, duration);
       // $('.slide_popup2').toggle(effect, options, duration); 
        
    }
    
     else if($(this).find('.ui-draggable').find('#textbox').length)
    {
        
        html.push('<li class="dottedLi"><div id="labeledit" class="labeledit textdrag">'+el+'</div><input type="text" name="" id="txtbox_'+random+'">'+setme+'</li>');
         $('#imgdragable').hide(); 
        $(this).find('#textbox').replaceWith(html.join(''));
           ($(this).data(). sortable.currentItem.find('#labeledit').trigger('click')) ;
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
       // $('.slide_popup1').toggle(effect, options, duration);
      //  $('.slide_popup2').toggle(effect, options, duration); 
        
    }
       
       
      else if($(this).find('.ui-draggable').find('#checkbox').length)
    {
         
        html.push('<li class="dottedLi"><div id="labeledit" class="labeledit addmechk checkboxdrag">'+el+'</div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_'+random+'"><div id="chkclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><span class="checkboxWrapper"><input type="checkbox" value="1" name="name" > </span> <p class="opt" id="1">option1</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="2" name="name" ></span> <p class="opt" id="2">option2</p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="3" name="name" ></span><p class="opt" id="3">option3</p></div></div><p id="mepp" class="pchkadd"></p></div>'+setme+'</li>');
        $('#imgdragable').hide(); 
        $(this).find('#checkbox').replaceWith(html.join(''));
           ($(this).data(). sortable.currentItem.find('.chkboxaddnow').trigger('click')) ;
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
        //$('.slide_popup1').toggle(effect, options, duration);
       // $('.slide_popup2').toggle(effect, options, duration); 
    }   
    
    else if($(this).find('.ui-draggable').find('#radio').length)
    {
       
        html.push('<li class="dottedLi"><div id="labeledit" class="labeledit radioboxdrag">'+el+'</div><div class="checksboxes p_scents selectboxaddnow" id="checksboxes_'+random+'"><div id="radioclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><span class="checkboxWrapper"><input type="radio" value="1" name="name" > </span> <p class="opt" id="1">option1</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="radio" value="2" name="name" ></span> <p class="opt" id="2">option2</p> </div></div><p id="mepp" class="pselectadd"></p></div>'+setme+'</li>');
        $('#imgdragable').hide(); 
        $(this).find('#radio').replaceWith(html.join(''));
        ($(this).data(). sortable.currentItem.find('.selectboxaddnow').trigger('click')) ;
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
       // $('.slide_popup1').toggle(effect, options, duration);
      //  $('.slide_popup2').toggle(effect, options, duration); 
    } 
    
    else if($(this).find('.ui-draggable').find('#captcha').length)
    {
         
        html.push('<li class="dottedLi" rel="capchas"><div id="labeledit" class="labeledit captchadrag">'+el+'</div><div id="divcaptcha"><br/><p id="1">How much is:</p> <input type="text" class="qes"/><br/><p id="2">Answer:</p><input type="text" class="ans"/></div><br/><input type="button" class="btncaptcha" value="Go!"/>'+setme+'</li>');
        $('#imgdragable').hide(); 
        $(this).find('#captcha').replaceWith(html.join(''));
        ($(this).data(). sortable.currentItem.find('.divcaptcha').trigger('click')) ;
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
        //$('.slide_popup1').toggle(effect, options, duration);
       // $('.slide_popup2').toggle(effect, options, duration); 
    }  
    
      else if($(this).find('.ui-draggable').find('#time').length)
    {
         
        html.push('<li class="dottedLi"><div id="labeledit" class="labeledit timedrag">'+el+'</div><input type="text" name="timepicker" id="timepicker'+time+'" onclick="timepick('+time+')">'+setme+'</li>');
        $('#imgdragable').hide(); 
        $(this).find('#time').replaceWith(html.join(''));
         ($(this).data(). sortable.currentItem.find('#labeledit').trigger('click')) ;
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
      //  $('.slide_popup1').toggle(effect, options, duration);
       // $('.slide_popup2').toggle(effect, options, duration); 
        
    }      
    
         else if($(this).find('.ui-draggable').find('#single').length)
    {
        
       
        html.push('<li class="dottedLi ui-draggable">'+el+'<div onclick="selectboxclick(this)" class="dropdowndrag"><select class="select" id="hours'+random+'" style="font-family: times new roman;font-size: 20px; height: 30px;margin-bottom: 10px;width: 120px;">'+'<option value="0">Select</option>'+'<option id="1" value="option1">option1</option>'+'<option id="2" value="option2">option2</option>'+'</select></div>'+setme+'</li>');
        $('#imgdragable').hide(); 
         $(this).find('#single').replaceWith(html.join(''));
          ($(this).data(). sortable.currentItem.find('.dropdowndrag').trigger('click')) ;
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
        //$('.slide_popup1').toggle(effect, options, duration);
       // $('.slide_popup2').toggle(effect, options, duration); 
       } 
      else if($(this).find('.ui-draggable').find('#date').length)
    {
       
        html.push('<li class="dottedLi"><div id="labeledit" class="labeledit datedrag">'+el+'</div><input type="text" name="" id="datepicker'+count+'" onclick="datepick('+count+')">'+setme+'</li>');
         $('#imgdragable').hide(); 
        $(this).find('#date').replaceWith(html.join(''));
        ($(this).data(). sortable.currentItem.find('#labeledit').trigger('click')) ;
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
        //$('.slide_popup1').toggle(effect, options, duration);
        //$('.slide_popup2').toggle(effect, options, duration); 
    }  
    
     else if($(this).find('.ui-draggable').find('#email').length)
    {
        
        html.push('<li class="dottedLi"><div id="labeledit" class="labeledit emaildrag">'+el+'</div><input type="email" name="" id="email_'+random+'">'+setme+'</li>');
         $('#imgdragable').hide(); 
        $(this).find('#email').replaceWith(html.join(''));
        ($(this).data(). sortable.currentItem.find('#labeledit').trigger('click')) ;
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
       // $('.slide_popup1').toggle(effect, options, duration);
       // $('.slide_popup2').toggle(effect, options, duration); 
    }     
    
       else if($(this).find('.ui-draggable').find('#submit').length)
    {
        
        html.push('<li class="dottedLi"><div id="getbtnme" class="submitdrag"><input class="inputdisabled" type="submit" name="" value="submit"></div>'+setme+'</li>');
         $('#imgdragable').hide(); 
        $(this).find('#submit').replaceWith(html.join(''));
         ($(this).data(). sortable.currentItem.find('#getbtnme').trigger('click')) ;
        var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
      //  $('.slide_popup1').toggle(effect, options, duration);
      //  $('.slide_popup2').toggle(effect, options, duration); 
        
    }   
                
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
	//	$("div.popup > a").live('click',function(){
//		  
//			$("div.popup, div.mask").fadeOut(300, function() {
//			$("div.mask").remove()
//		});
//			return false;
//		}); 
        
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
        $("div.popup .popupus").hide();
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
                
                 //$(".restore").find("#empty").hide();
                 //$(".restore").find("#full").show();
                  var item = parseInt(cont) - parseInt(1);
                 $("a#full").attr("title","Restore("+item+") items"); 
                     
            }
            }); 
            }
            });
        $(this).parent().parent().find("#upload").hide();
       
    });
   
 
        $("a#full").live("click",function(){
            
    
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
                 //$(".restore").find("#empty").show(); 
                 $('a#full').attr('title','Trash');
                 $("a#full").show();
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
                 //$(".restore").find("#empty").hide();
                   //$(".restore").find("#full").show();
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
                 //$(".restore").find("#empty").hide();
                  // $(".restore").find("#full").show();
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
        $(".popupus").hide();
        $(".pop_img2").hide();
        $(".mask").hide();
        $("#editable").append('<img id="uploadLoading" src="http://test.scampaigns.com/images/712.GIF" style="display: block; position: absolute; top: 50%; left: 50%; margin-left: -33px; margin-top: -33px;z-index: 999999999;">');
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
        //$(".SFPTWO_IMAGEEDIT").resizable({ disabled: true });
//        $(this).parents('div.SFPTWO_IMAGEEDIT').resizable({ disabled: false });
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
       	$("div.popup, div.popupus").fadeIn(300);
        $('.SFPTWO_IMAGEEDIT').attr('id','');
        $('#upload').remove();
        var url = $("#hid").val();
        var uri_new = "http://test.scampaigns.com/Frontend/submit/"+url;
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
               // alert(result);
                
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
        var res = $(this).val();
        if(res.trim() == 'select')
            return false;
        if(res.trim() != 'Preview')
        {
            $(this).parents('li').remove();
              $.ajax({
                type:'POST',
                data:{},
                url:"http://test.scampaigns.com/Frontend/delete/"+res,
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
    
/**
 *     $(document).on("click","#ups",function(e){
 *         
 *         //alert(CKEDITOR.instances.textdyn.document.getBody().getHtml());
 *         //return false;
 *         
 *         $(this).parent().prev().show();
 *         e.preventDefault();
 *        // var newtext=$('.nicEdit-main').html();
 *         $("#edittext").remove();
 *         $('.editor').html(CKEDITOR.instances.textdyn.document.getBody().getHtml());
 *         $('.editor').show();
 *     
 *     });
 */

    $("div.option a.save").live('click',function(){
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
       // $("#ups").trigger('click');
        $("a.savechecklabel").trigger('click');
        var uri = 'http://test.scampaigns.com/Frontend/savetemplate';
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
        
        $(".overlay").show();
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
               // $(".restore").find("#full").hide();
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
          $(".overlay").hide();
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
             $('#savepr').hide();
            $(".overlay").hide();
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
             $("p#savepr").remove();
             $("p#saveprlast").remove();
             $("p#showmsg").remove();
            $(".wrapper").html(data);
              
            $('.layeredImage').draggable();
            
             $("p").fadeIn(500);
             
            }
            });
    $(".overlay").hide();
            }
            }); 
            }
           }
            });
            
             
            
   
         

    }); 
    
    });
 
    $(".redo_btn_hughhuygughuignghuhhuh45656656").live('click',function(){
        $(".overlay").show();
        var base_url = window.location.origin;
         var uri = document.URL;
         var res = uri.split("/");
          var nums =  $("#redo").val(); 
          
         if(nums == "0")
         {
            $('.redo_btn_hughhuygughuignghuhhuh45656656').attr('disabled', true);
            $(".overlay").hide();
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
            $(".overlay").hide();
            return false;
           
         }
          $.ajax({
            type:'POST',
            data:{},
            url: base_url+'/Ajaxcall/redosave/'+res[5],
            success:function(data){
            $(".wrapper").html("");
            $(".wrapper").html(data);
            $('.layeredImage').draggable();
          $("p").css("visibility","visible");
            
            }
            });
            
          $(".overlay").hide();
            
        });
        

        
       /* $("#editable .checksboxes").live('click',function(){
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
    });*/
    
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
    
    $('body').on('click',".chkboxaddnow", function(event) {
         $("#tab_4_new").html("");
          $("#tab_5_new").html("");
          $("#tab_6_new").html("");
          $("#tab_7_new").html("");
        $(".checksboxes").removeClass('editmyopt');
        $(this).addClass('editmyopt');
        var res = $(this).find('.jui-checkbox-row').length;
        $('div').removeClass('adding');
         $(this).addClass("adding");
        //alert(res);
        var htm ="";
        var htms = "<ul id='ultab'>";        
        $("#hiddens").val(res);
        $(this).find(".opt").each(function(){
           var i= $(this).attr('id');
           //alert(i); 
           var hm = $(this).html();
          // alert(hm);
        
          htm = htm+"<li><label id='"+i+"'>Put Your Text:</label><textarea class='me' type='text' id='"+i+"'>"+hm+"</textarea><a href='javascript:void(0)' onclick='removenews(this,"+i+")'><img class='minus' src='http://test.scampaigns.com/img/minus.png'/></a></li>";  
          // $(".abcd").htmlarea(); 
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
        $('.slide_popup1').toggle(effect, options, duration);
        $('.slide_popup2').toggle(effect, options, duration);

        });
        
   $('body').on('focus',".#tab_3_new #ultab li textarea", function(event) {      
 
     var id = $(this).attr('id');
     $('#tab_3_new #ultab li textarea').removeClass('txtEditor');
      $('#tab_3_new #ultab li textarea').css('display','block');
      $('.Editor-container').remove();
       //console.log($(this).parent().html());   
     $(this).addClass('txtEditor');   
     var gettextarea =  $(this).val();       
        setTimeout(function(){ 
            
                $(".txtEditor").Editor();     
               	($(".row-fluid").find('#contentarea').html(gettextarea));   

   }, 50);
  
 // alert(id);
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
           var hm = $(this).html();
        //   alert(hm);  
            
          htm = htm+"<li><label id='"+i+"'>Put Your Text:</label><input type='text' value='"+hm+"' id='"+i+"' /><a href='javascript:void(0)' onclick='removemulti(this,"+i+")'><img class='minus' src='http://test.scampaigns.com/img/minus.png'/></a></li>";  
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
        $('.slide_popup1').toggle(effect, options, duration);
        $('.slide_popup2').toggle(effect, options, duration);
        });
        
        
            $('body').on('click',".selectboxaddnow", function(event) {
         $("#tab_4_new").html("");
          $("#tab_5_new").html("");
          $("#tab_6_new").html("");
          $("#tab_7_new").html("");
        $(".checksboxes").removeClass('editmyopt');
        $(this).addClass('editmyopt');
        var res = $(this).find('.jui-checkbox-row').length;
       $(this).addClass('editmyopt');
        var res = $(this).find('.jui-checkbox-row').length;
        $('div').removeClass('addingselect');
         $(this).addClass("addingselect");
        //alert(res);
        var htm ="";
        var htms = "<ul id='ultab'>";        
        $("#hiddens").val(res);
       $(this).find(".opt").each(function(){
           var i= $(this).attr('id');
           //alert(i);
           var hm = $(this).html();
        //   alert(hm);   var hm = $(this).find('.jui-checkbox-row').find(".opt#"+i).html();
           
            
          htm = htm+"<li><label id='"+i+"'>Put Your Text:</label><input type='text' value='"+hm+"' id='"+i+"' /><a href='javascript:void(0)' onclick='removeselect(this,"+i+")'><img class='minus'src='http://test.scampaigns.com/img/minus.png'/></a></li>";  
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
        $('.slide_popup1').toggle(effect, options, duration);
        $('.slide_popup2').toggle(effect, options, duration);

        });
        
        $("#tab_3_new").find("#contentarea").live("keyup",function(){
           
            var num = $(this).html();
            //alert(num);
           var ids = $(this).parent().prev().attr('id');   
          // alert(ids); 
       $(".editmyopt").find(".opt#"+ids).html(num);
      
            
        });
        
          $("#tab_3_new").find(".row-fluid").live("click",function(){
            
           
            var num = $(this).find("#contentarea").html();
            //alert(num);
           var ids = $(this).prev().attr('id');   
          //   alert(ids); 
       $(".editmyopt").find(".opt#"+ids).html(num);
      
            
        });
        
         $("#tab_4_new").find("input[type=text]").live("keyup",function(){
           
            var num = $(this).val();
           var ids = $(this).attr('id');    
       $(".editmyoptme").find("p").html(num);
      
            
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
        
        $('body').on('click',"#diveditme", function(event) {
           $("#tab_3_new").html("");
            $("#tab_5_new").html("");
            $("#tab_6_new").html("");
        $(".labeledit").removeClass('editmyoptme');
        $(this).addClass('editmyoptme');
        var htm = "";        
       
            var hm = $(this).find("p").html();
           
              var res = $(this).find('p').length;
         for(var i=1;i<=res;i++)
        {
            var hm = $(this).find("p").html();
           
            
          htm = htm+"<li><label>Put Your Text:</label><input type='text' value='"+hm+"' id='"+i+"' /></li>";  
        }
       
           $("#tab_4_new").html(htm);
           $("#editforme1").hide(); 
           $("#editforme3").hide(); 
            $("#editforme4").hide(); 

           $("#editforme2").trigger('click');
                   var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
       $("#tab_3_new").hide();
          $("#tab_5_new").hide();
          $("#tab_6_new").hide();
          $("#tab_7_new").hide();
        $('.slide_popup1').toggle(effect, options, duration);
        $('.slide_popup2').toggle(effect, options, duration);
        });
        
        
          $('body').on('click',"#labeledit", function(event) {
            
           $("#tab_3_new").html("");
            $("#tab_5_new").html("");
             $("#tab_4_new").html("");
              $("#tab_6_new").html("");
        $(".labeledit").removeClass('editlabelme');
        $(this).addClass('editlabelme');
        var htm = "";        
       
            var hm = $(this).find("p").html();
           
              var res = $(this).find('p').length;
         for(var i=1;i<=res;i++)
        {
            var hm = $(this).find("p").html();
           
            
          htm = htm+"<li><label>Put Your Text:</label><input type='text' value='"+hm+"' id='"+i+"' /></li>";  
        }
       
           $("#tab_7_new").html(htm);
           $("#editforme1").hide(); 
           $("#editforme3").hide(); 
           $("#editforme2").hide();
            $("#editforme4").hide();
          

           $("#editforme5").trigger('click');
                     var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
         $("#tab_4_new").hide();
          $("#tab_5_new").hide();
          $("#tab_6_new").hide();
          $("#tab_3_new").hide();
        $('.slide_popup1').toggle(effect, options, duration);
        $('.slide_popup2').toggle(effect, options, duration);
        });
        
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
           
            
          htm = htm+"<li><label>Put Your Text:</label><input type='text' value='"+hm+"' id='"+i+"' /></li>";  
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
        $('.slide_popup1').toggle(effect, options, duration);
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
           
            
          htm = htm+"<li><label>Put Button's Action:</label><input type='text' value='' id='href' /></li><li><label>Put Your Text:</label><input type='text' value='"+hm+"' id='id' /></li>";  
        }
       
           $("#tab_5_new").html(htm);
           $("#editforme1").hide(); 
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
        $('.slide_popup1').toggle(effect, options, duration);
        $('.slide_popup2').toggle(effect, options, duration);
        });
          
 /*function selectboxclick() {
    alert("event");
    
    var res = "";
    var ids = $(event).find('select').attr('id');
    $("#"+ids+" option").each(function()
{
    res = res + $(this).val() + "/";
});

    var result = res.split("/");
    var resultcount = result.length;
    var html ="";
    for(var i =1;i<resultcount;i++)
    {
        var html = html+"<li><input type='text' value='"+result[i]+"' /></li>";
    }
    alert(html);
     $("#tab_3_new").html(html);
    $("#editformel").trigger('click');
    }
       function editme(element){
        
        alert(element);
        $("#editformel").trigger('click'); 


        });*/
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
        //alert(lastfieldsid);
         var counts = parseInt(lastfieldsid) + parseInt(1);
         
         $(event).parent().find("ul#ultab").append('<li><label>Put Your Text:</label><input type="text" id="'+counts+'" value="option'+counts+'"><a href="javascript:void(0)" onclick="removenews(this,'+counts+')"><img class="minus" src="http://test.scampaigns.com/img/minus.png"/></a></li>');
      $(".adding").find('#chkclone').append('<div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" name="name" value="'+counts+'"></span><p id="'+counts+'" class="opt">option'+counts+'</p></div>');
      
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
     
      $(event).parent().find("ul#ultab").append('<li><label>Put Your Text:</label><input type="text" id="'+i+'" value="option'+i+'"><a href="javascript:void(0)" onclick="removeselect(this,'+i+')"><img class="minus" src="http://test.scampaigns.com/img/minus.png"/></a></li>');
      $(".addingselect").find('#radioclone').append('<div class="jui-checkbox-row"><span class="checkboxWrapper" id="p_scnt_' + i +'" name="p_scnt_' + i +'"><input type="radio" value="2" name="name" ></span><p class="opt" id="' + i +'" name="' + i +'">option' + i +'</p></div>');
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
     
      $(event).parent().find("ul#ultab").append('<li><label>Put Your Text:</label><input type="text" id="'+i+'" value="Text'+i+'"><a href="javascript:void(0)" onclick="removemulti(this,'+i+')"><img class="minus" src="http://test.scampaigns.com/img/minus.png"/></a></li>');
      $(".addingmulti").find('#multiclone').append('<div class="jui-checkbox-row"><p class="opt" id="' + i +'">Text' + i +'</p></div>');
       
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
      var getlength=  $(event).find('.select > option').length;
      $('div').removeClass('adddrop').length;
      $(event).addClass('adddrop').length;
        var res = "";
    var ids = $(event).find('select').attr('id');
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
   
        $('.slide_popup1').toggle(effect, options, duration);
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
    $(".SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /></div>");
//    $(".SFPTWO_TAGEDIT").attr('contenteditable','true');
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
    
    var setme = ' <div class="setting-2 prevnext"><a title="Edit" class="edit" href="javascript:void(0)"></a><a title="delete" class="delete" href="javascript:void(0)"></a><input type="hidden" id="hid" /><input type="hidden" value="0" id="imgCount" /><a class="prev" href="#">Previous</a>&nbsp;<a class="next" href="#">After</a></div>';
    
    AddContainer = "";
       var minNumbesr = 0000; // The minimum number you want
        var maxNumbesr = 1000; // The maximum number you want
       var randomss = Math.floor(Math.random() * (maxNumbesr + 1) + minNumbesr);  
    el = '<p id="pid_'+randomss+'" class="opt">Label</p>';
    switch(value){
        case 'label':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        AddContainer = '<li class="dottedLi ui-draggable"><div id="labeledit" class="labeledit">'+el+'<div><textarea id="editmetext" name=""></textarea></div></div>'+setme+'</li>';
    
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
      
       

            break;
        case 'email':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        AddContainer = '<li class="dottedLi ui-draggable"><div id="labeledit" class="labeledit emaildrag">'+el+'</div><input type="email" name="" id="email_'+random+'">'+setme+'</li>';
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
            break;            
        case 'textbox':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi ui-draggable"><div id="labeledit" class="labeledit textdrag">'+el+'</div><input type="text" name="" id="txtbox_'+random+'">'+setme+'</li>';
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
            break;
        case 'password':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi ui-draggable">'+el+'<input type="password" name="" id="pass_'+random+'">'+setme+'</li>';
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
            break;
        case 'checkbox':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi ui-draggable"><div id="labeledit" class="labeledit addmechk checkboxdrag">'+el+'</div><div class="checksboxes p_scents chkboxaddnow" id="checksboxes_'+random+'"><div id="chkclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><span class="checkboxWrapper"><input type="checkbox" value="1" name="name" > </span> <p class="opt" id="1">option1</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="2" name="name" ></span> <p class="opt" id="2">option2</p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="3" name="name" ></span><p class="opt" id="3">option3</p></div></div><p id="mepp" class="pchkadd"></p></div>'+setme+'</li>';
  setTimeout(function(){     
       ($('ul.sortable-list').children('li').last().find('.chkboxaddnow').trigger('click'));
      var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
       // $('.slide_popup1').toggle(effect, options, duration);
       // $('.slide_popup2').toggle(effect, options, duration);
         }, 50);
        
            break;
        case 'radio':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi ui-draggable"><div id="labeledit" class="labeledit radioboxdrag">'+el+'</div><div class="checksboxes p_scents selectboxaddnow" id="checksboxes_'+random+'"><div id="radioclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><span class="checkboxWrapper"><input type="radio" value="1" name="name" > </span> <p class="opt" id="1">option1</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="radio" value="2" name="name" ></span> <p class="opt" id="2">option2</p> </div></div><p id="mepp" class="pselectadd"></p></div>'+setme+'</li>';
  setTimeout(function(){     
       ($('ul.sortable-list').children('li').last().find('.selectboxaddnow').trigger('click'));
      var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
        //$('.slide_popup1').toggle(effect, options, duration);
        //$('.slide_popup2').toggle(effect, options, duration);
         }, 50);
        
            break;
        case 'textarea':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi ui-draggable">'+el+'<textarea id="txt_'+random+'" rows="" cols="" name=""></textarea>'+setme+'</li>';
               var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
       // $('.slide_popup1').toggle(effect, options, duration);
      //  $('.slide_popup2').toggle(effect, options, duration);
        
            break;
       case 'captcha':
        $("#hide").val(capcha);
        var res = $("#hide").val();
       if($('#captcha').attr('rel')=='captcha')
       {
        
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi ui-draggable" rel="capchas"><div id="labeledit" class="labeledit paradrag">'+el+'</div><div id="divcaptcha"><br/><p id="1">How much is:</p> <input type="text" class="qes"/><br/><p id="2">Answer:</p><input type="text" class="ans"/></div><br/><input type="button" class="btncaptcha" value="Go!"/>'+setme+'</li>';
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
        
            break;     
      case 'single':
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi ui-draggable">'+el+'<div onclick="selectboxclick(this)" class="dropdowndrag"><select class="select" id="hours'+random+'" style="font-family: times new roman;font-size: 20px; height: 30px;margin-bottom: 10px;width: 120px;">'+'<option value="0">Select</option>'+'<option id="1" value="option1">option1</option>'+'<option id="2" value="option2">option2</option>'+'</select></div>'+setme+'</li>';
    setTimeout(function(){    
  ($('ul.sortable-list').children('li').last().find('.dropdowndrag').trigger('click'));
      var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
      // $('.slide_popup1').toggle(effect, options, duration);
        //$('.slide_popup2').toggle(effect, options, duration);
         }, 50);
        
            break;  
       case 'mselect':
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
            AddContainer = '<li class="dottedLi ui-draggable">'+el+'<dl class="dropdown"> <dt><a style="cursor:pointer;"><span class="hida">Select</span> <p class="multiSel"></p>  </a></dt> <dd> <div class="mutliSelect"><ul><li><input type="checkbox" value="Apple" />Apple</li><li><input type="checkbox" value="Blackberry" />Blackberry</li> </ul></div></dd></dl>'+setme+'</li>';
               var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };

    // Set the duration (default: 400 milliseconds)
    var duration = 700;
   
       // $('.slide_popup1').toggle(effect, options, duration);
       // $('.slide_popup2').toggle(effect, options, duration);
        
            break;           
         case 'date':     
        AddContainer = '<li class="dottedLi ui-draggable"><div id="labeledit" class="labeledit datedrag">'+el+'</div><input type="text" name="" id="datepicker'+count+'" onclick="datepick('+count+')">'+setme+'</li>';
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
        
            break;
       case 'time':
        AddContainer = '<li class="dottedLi ui-draggable"><div id="labeledit" class="labeledit timedrag">'+el+'</div><input type="text" name="timepicker" id="timepicker'+time+'" onclick="timepick('+time+')">'+setme+'</li>';
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
            break;   
            
       case 'paragraph':
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        AddContainer = '<li class="dottedLi ui-draggable" rel="capchas"><div id="labeledit" class="labeledit captchadrag">'+el+'</div><div id="divcaptcha"><br/><p id="1">How much is:</p> <input type="text" class="qes"/><br/><p id="2">Answer:</p><input type="text" class="ans"/></div><br/><input type="button" class="btncaptcha" value="Go!"/>'+setme+'</li>';
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
        
          //$( "#datepicker" ).datepicker();
        
            break;   
        case 'multiline':
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        AddContainer = '<li class="dottedLi ui-draggable"><div id="labeledit" class="labeledit multilinedrag">'+el+'</div><div class="checksboxes p_scents multilineme" id="checksboxes_'+random+'"><div id="multiclone"><div for="p_scnts" class="jui-checkbox-row" id="jui-checkbox-row'+random+'"><p class="opt" id="1">Text1</p> </div><div class="jui-checkbox-row"> <p class="opt" id="2">Text2</p> </div></div><p id="mepp" class="meline"></p></div>'+setme+'</li>';
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
        
            break;  
            
      case 'singleline':
        var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        AddContainer = '<li class="dottedLi ui-draggable"><div id="labeledit" class="labeledit singledrag">'+el+'</div>'+setme+'</li>';
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
        
            break;                     
        case 'submit':
         var minNumber = 0000; // The minimum number you want
        var maxNumber = 1000; // The maximum number you want
       var random = Math.floor(Math.random() * (maxNumber + 1) + minNumber);  
        AddContainer = '<li class="dottedLi ui-draggable"><div id="getbtnme"><input class="inputdisabled" type="submit" name="" value="submit"></div>'+setme+'</li>';
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
function requestUrlWithAjax(url)
{
     $(".overlay").show();
       $('.explicit_edit').attr('contenteditable','false');
       urls = url.split("/"); 
      var wrappercontent = $('.wrapper').html();
     var urlchk = $(location).attr('href'); 
     urlchk = urlchk.split("/"); 
  
   //  alert (urlchk);       
     urlchk = urlchk[5];  
      var filename = $('#filename').val(); 
            
     //alert(urlchk);
    $.ajax({
            type:'POST',
            data:{wrappercontent:wrappercontent,urlchk:urlchk,filename:filename},
            url:"http://test.scampaigns.com/Frontend/savepage1",
            success:function(data){
              $('#filename').val(urls[5]);
             
   // alert(url);
    var xmlhttp;
   //alert(url);
    //1. create the xmlhttp object
 
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
         $(".overlay").hide();
          $('.explicit_edit').attr('contenteditable','true');                  
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          $(".overlay").hide();
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
            setTimeout(function(){ var base_url = window.location.origin;
    var uri = document.URL;

    var res = uri.split("edit2/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res2[0];
          $(".SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /></div>");
    //$(".SFPTWO_TAGEDIT").attr('contenteditable','true');
    $(".SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a></div>");
    $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>"); $(".overlay").hide();}, 6000);
     $('.explicit_edit').attr('contenteditable','true'); 
    
    $('.wrapper input[type="file"]').addClass('inputdisabled');
$('.wrapper input[type="submit"]').addClass('inputdisabled');
$('.wrapper input[type="button"]').addClass('inputdisabled');
$('.wrapper button').addClass('inputdisabled');
//$('.wrapper .inputdisabled').attr('disabled', 'disabled');
$('.wrapper a').addClass('disabled');
$('.SFPTWO_EDITFORM a').removeClass('disabled');
  $('.enteroff').keydown(function(event){
                if(event.keyCode == 13) {
                 event.preventDefault();
                 return false;
                    }
                    });
                    var getfirstlength = '';
                      $('.autosize').one('keyup',function(){
                          getfirstlength += $(this).find('a').css("fontSize");
                          //alert(getfirstlength);
                      });
                      $('.autosize').keyup(function(){
   
                           var getcurrentlength = ($(this).text().length);
                            
                           var prev = ($(this).attr('rel'));
                           var newprev = 0;
                           
                           var gtsize = $(this).find('.autosizethis').css("fontSize");
                            
                            if(prev==getcurrentlength){
                                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
                                
                               // alert($(this).attr('rel'));
                                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
                             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                                // alert(gtsize);
                            }
                            
                           else if(gtsize < getfirstlength)
                            {
                               
                                
                                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));
                              //  $(this).next().css('font-size',parseInt(gtsize)+parseInt(1));
                            }
                            
                        });
                                    }
            else
            {
             
                     $('.wrapper').html(remhtmlform);
                     setTimeout(function(){ var base_url = window.location.origin;
    var uri = document.URL;

    var res = uri.split("edit2/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res2[0];
              $(".SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /></div>");
             // $(".SFPTWO_TAGEDIT").attr('contenteditable','true');
        $(".SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a></div>");
        $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");  $(".overlay").hide();}, 6000);
        $('.explicit_edit').attr('contenteditable','true'); 
       $('.wrapper input[type="file"]').addClass('inputdisabled');
        $('.wrapper input[type="submit"]').addClass('inputdisabled');
        $('.wrapper input[type="button"]').addClass('inputdisabled');
        $('.wrapper button').addClass('inputdisabled');
//        $('.wrapper .inputdisabled').attr('disabled', 'disabled');
        $('.wrapper a').addClass('disabled');
        $('.SFPTWO_EDITFORM a').removeClass('disabled');
       
           $('.enteroff').keydown(function(event){
                if(event.keyCode == 13) {
                 event.preventDefault();
                 return false;
                    }
                    });        
                
                var getfirstlength = '';
                      $('.autosize').one('keyup',function(){
                          getfirstlength += $(this).find('a').css("fontSize");
                          //alert(getfirstlength);
                      });
                $('.autosize').keyup(function(){
   
                   var getcurrentlength = ($(this).text().length);
                    
                   var prev = ($(this).attr('rel'));
                   var newprev = 0;
                   
                   var gtsize = $(this).find('.autosizethis').css("fontSize");
                    
                    if(prev==getcurrentlength){
                        ($(this).attr('rel',parseInt(prev)+parseInt(1)));
                        
                       // alert($(this).attr('rel'));
                        $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
                     //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                        // alert(gtsize);
                    }
                    
                   else if(gtsize < getfirstlength)
                    {
                       
                        
                        $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));
                      //  $(this).next().css('font-size',parseInt(gtsize)+parseInt(1));
                    }
                    
                });
                 
               
            }
               
                //alert(remhtmlform);
            }
            else{
                //alert('remhtmlform');
                
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
           setTimeout(function(){var base_url = window.location.origin;
    var uri = document.URL;

    var res = uri.split("edit2/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res2[0];
          $(".SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /></div>");
         // $(".SFPTWO_TAGEDIT").attr('contenteditable','true');
    $(".SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a></div>");
    $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>"); $(".overlay").hide();}, 6000);
     $('.explicit_edit').attr('contenteditable','true'); 
    $('.wrapper input[type="file"]').addClass('inputdisabled');
    $('.wrapper input[type="submit"]').addClass('inputdisabled');
    $('.wrapper input[type="button"]').addClass('inputdisabled');
    $('.wrapper button').addClass('inputdisabled');
//    $('.wrapper .inputdisabled').attr('disabled', 'disabled');
    $('.wrapper a').addClass('disabled');
    $('.SFPTWO_EDITFORM a').removeClass('disabled');
      $('.enteroff').keydown(function(event){
                if(event.keyCode == 13) {
                 event.preventDefault();
                 return false;
                    }
                    });
                    var getfirstlength = '';
                      $('.autosize').one('keyup',function(){
                          getfirstlength += $(this).find('a').css("fontSize");
                          //alert(getfirstlength);
                      });
                      $('.autosize').keyup(function(){
                           
                           var getcurrentlength = ($(this).text().length);
                            
                           var prev = ($(this).attr('rel'));
                           var newprev = 0;
                           
                           var gtsize = $(this).find('.autosizethis').css("fontSize");
                            
                            if(prev==getcurrentlength){
                                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
                                
                               // alert($(this).attr('rel'));
                                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
                             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                                // alert(gtsize);
                            }
                            
                            else if(gtsize < getfirstlength)
                            {
                               
                                
                                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));
                              //  $(this).next().css('font-size',parseInt(gtsize)+parseInt(1));
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

    var res = uri.split("edit2/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res2[0];
          $(".SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /></div>");
         // $(".SFPTWO_TAGEDIT").attr('contenteditable','true');
        $(".SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a></div>");
        $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>"); $(".overlay").hide();}, 6000);        
         $('.explicit_edit').attr('contenteditable','true'); 
         
        $('.wrapper input[type="file"]').addClass('inputdisabled');
        $('.wrapper input[type="submit"]').addClass('inputdisabled');
        $('.wrapper input[type="button"]').addClass('inputdisabled');
       $('.wrapper button').addClass('inputdisabled');
//       $('.wrapper .inputdisabled').attr('disabled', 'disabled');
       $('.wrapper a').addClass('disabled');
       $('.SFPTWO_EDITFORM a').removeClass('disabled');          
                  // location.reload();
                 $('.enteroff').keydown(function(event){
                if(event.keyCode == 13) {
                 event.preventDefault();
                 return false;
                    }
                    });
                    var getfirstlength = '';
                      $('.autosize').one('keyup',function(){
                          getfirstlength += $(this).find('a').css("fontSize");
                          //alert(getfirstlength);
                      });
                      $('.autosize').keyup(function(){
   
                           var getcurrentlength = ($(this).text().length);
                            
                           var prev = ($(this).attr('rel'));
                           var newprev = 0;
                           
                           var gtsize = $(this).find('.autosizethis').css("fontSize");
                            
                            if(prev==getcurrentlength){
                                ($(this).attr('rel',parseInt(prev)+parseInt(1)));
                                
                               // alert($(this).attr('rel'));
                                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
                             //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
                                // alert(gtsize);
                            }
                            
                            else if(gtsize < getfirstlength)
                            {
                               
                                
                                $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));
                              //  $(this).next().css('font-size',parseInt(gtsize)+parseInt(1));
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
     $(".overlay").hide();
         
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




$(".SFPTWO_IMAGEEDIT").live('mouseover',function(){
  $(this).find("div.setting-2").show();
});
$(".SFPTWO_IMAGEEDIT").live('mouseout',function(){
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
$('.wrapper a').addClass('disabled');
$('.SFPTWO_EDITFORM a').removeClass('disabled');

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
   $('.autosize').keyup(function(){
   
   var getcurrentlength = ($(this).text().length);
    
   var prev = ($(this).attr('rel'));
   var newprev = 0;
   
   var gtsize = $(this).find('.autosizethis').css("fontSize");
    
    if(prev<getcurrentlength){
        ($(this).attr('rel',parseInt(prev)+parseInt(1)));
        
       // alert($(this).attr('rel'));
        $(this).find('.autosizethis').css('font-size',parseInt(gtsize)-parseInt(1));
     //  $(this).next().css('font-size',parseInt(gtsize)-parseInt(1));
        // alert(gtsize);
    }
    
    else if(gtsize <= getfirstlength)
    {
       
        
        $(this).find('.autosizethis').css('font-size',parseInt(gtsize)+parseInt(1));
      //  $(this).next().css('font-size',parseInt(gtsize)+parseInt(1));
    }
    
});
});

  
  

 $('#bt_maultipage').live( "click", function() { 
    alert('fgfd');
      var base_url = window.location.origin;
    var uri = document.URL;

    var res = uri.split("edit2/");
    var res1 = uri.split("/");
    var res2 = res[1].split("/");
    var newurl = res2[0];
          $(".SFPTWO_IMAGEEDIT").append("<div class='setting-2' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /></div>");
    $(".SFPTWO_TAGEDIT").parent().append("<div class='setting-2' id='text' style='display:none'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a></div>");
    $(".SFPTWO_EDITFORM").append("<div class='setting-2' style='display:none'><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
      }); 
      
