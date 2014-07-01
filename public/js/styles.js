$(document).ready(function() {
     $(".imgedit").append("<div class='setting-2'><a title='Edit' class='edit' href='#'>edit</a><a title='delete' class='delete' href='#'>edit</a></div>");
     $(".textedit").parent().append("<div class='setting-2' id='text'><a title='Edit' class='edit' href='#'></a><a title='delete' class='delete' href='#'></a></div>");
    // 
//     $(".edit").click(function(){
//        alert("hi");
//		$(".what_is_this").fadeIn(500); 
//        $(".imgedit").attr('id','editable');
//        $("#upload").css('display','block');
//		return false; 
//		});
    });
    
    
     $(".imgedit a.edit").live("click",function(){
        $('.imgedit').attr('id','');
        $('#upload').remove();
        
		//$(".what_is_this").fadeIn(500); 
        $(this).parent().parent().attr('id','editable');
        $(this).parent().parent().append('<div style="display: block;" id="upload"><form style="width: 76px; overflow: hidden;" id="image_upload1" enctype="multipart/form-data" action="http://localhost/zf_new/public/Frontend/submit" method="post"><input type="file" style="display: block;" id="images1" name="images1"></form></div>');
        var height = $(this).parent().parent().height();
         var width = $(this).parent().parent().width();
       $("#upload").append('<input type="hidden" value="'+height+'" id="htget"/>');
       $("#upload").append('<input type="hidden" value="'+width+'" id="wdget"/>');
		return false; 
		});
    
    
    
    
    
  /*  $(".imgedit").append("<div class='setting-2'><a title='Edit' class='edit' href='#'>edit</a><a title='delete' class='delete' href='#'>edit</a></div>");
    
  //  $(".txtedit").append("<div class='setting-2'><a title='Edit' class='edit' href='#'>edit</a><a title='delete' class='delete' href='#'>edit</a></div>");
    
    
    	$(".edit").click(function(){
		$(".what_is_this").fadeIn(500); 
        $(".imgedit").attr('id','editable');
        $("#upload").css('display','block');
		return false; 
		});
		
		$(".delete").click(function(){
	$(".what_is_this").fadeOut(500);
    return false;
});

});

//$(".edit").click(function(){
//        var res = $(".txtedit").text();
//        alert(res);
//        $(".txtedit").html("");
//        $(".txtedit").html("<textarea id='ediable'>"+res+"</textarea><input type='button' value='update' onclick='edits()' />");
//        });
//
//});
//
//function edits()
//{
//   var res = $("#ediable").val();
//   alert(res);
//
//}

  */
  
            
            //By clicking on button submit condition makes validate on empty message 
           //unless field message will be not empty  , the programm make send data to
           //controller via ajax
            $("#images1").live("change",function() {
             $("#image_upload1").ajaxSubmit({
            data : {filename:'images1'},
            success: function(response) {
                $("#images1").css("display","none");
               var imgplaceid = $("#editable").children('img').attr('id');
                var imgsrc     = $("#editable").children('img').attr('src');
                
               htmledit(imgplaceid,response,imgsrc);	
                
                	
            },
        });

                      
            });
        
        
        
        
        

    function htmledit(imgid,imgpath,imgsrc)
{
    $('#'+imgid).attr("src","");
        
    $('#'+imgid).attr("src",imgpath);
    $("#"+imgid).closest("div").attr("id","");
    var high =  $("#htget").val();
   
    var widh =   $("#wdget").val();
    //$(".imgedit").removeClass('dyn_hight');
    $("#"+imgid).height(high);
    $("#"+imgid).width(widh);
    $.ajax({
                type:'POST',
                data:{imgid:imgid,imgpath:imgpath,imgsrc:imgsrc,high:high,widh:widh},
                url: 'http://localhost/zf_new/public/Frontend/ajaxedit',
                success:function(data)
                {
                    alert(data); 
                }
            });
}


 $(".tool-tip a.edit").live("click",function(){
    
     $('.textedit').removeClass('editor');
      $('.textedit').show();
        //$(this).parent().attr('id','');
    // $(this).parent().parent().find('.textedit').attr('id','editable');
        var text = $(this).parent().parent().find('.textedit').html();
        $('#edittext').remove();
        $(this).parent().parent().find('.textedit').addClass('editor');
        $('.editor').hide();
        //$('.textedit').text("");
       // $('#edittext').remove();
       // $(this).attr('id','editable1');
      //  $(this).parent().parent().attr('id','editable1');
     //   $(this).parent().parent().html("");
        
        $(this).parent().parent().append('<div style="display: block;" id="edittext"><textarea id="textdyn">'+text+'</textarea><input type="button" value="update" id="ups" /></div>');
       var area = new nicEditor({buttonList : ['fontFamily','fontSize','left','center','right','justify','bold','italic','underline']}).panelInstance('textdyn'); 
   
		return false; 
		});
        
        
    
 $(document).on("click","#ups",function(e){    
     e.preventDefault();
     var newtext=$('.nicEdit-main').html();
    
      $("#edittext").remove();
      $('.editor').html(newtext);
      $('.editor').show();
   
  
      // console.log(element);
       // $.ajax({
//                  type:'POST',
//                  data:{newtext:newtext,oldtext:oldtext},
//                  url: 'http:localhost/zf_new/public/Frontend/ajaxtextedit',
//                  success:function(data)
//                 {
//                      alert(data);
//                      
//                    
//                  }
//             });
     
 });
 
 $(function() {
//        $("body").on('click', '#ups', function() {
//            var val = $("#editingFilename").contents().find("html").html();
//         // $(this).parent().append("<div>Some more boring text.</div>");
//          // var htmlEl = document.body.parentNode;
// //var inner = htmlEl.innerHTML;
//  alert(val);
//    //console.log(inner);
//        });

$("div.option a.save").live('click',function(){
       alert('tesr');    });



 });

