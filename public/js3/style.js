//default functionality
function appendall(newurl)
{      
    $(".imgedit").append("<div class='setting-2'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
    $(".textedit").parent().append("<div class='setting-2' id='text'><a title='Edit' id='texteditable' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a></div>");
    $(".editform").append("<div class='setting-2'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
}


$(document).ready(function() {
    var uri = document.URL;
    var res = uri.split("edit/"); 
    var res2 = res[1].split("/");
    var newurl = res2[0];
    setTimeout('appendall("'+newurl+'")', 1000);
});

//end default functionality

$(".imgedit a.delete").live("click",function(){
    $(this).parent().parent().find("#upload").hide();
    $(this).parent().parent().remove();
});

$(".tool-tip a.delete").live("click",function(){
   // $(this).parent().parent().find(".edittext").hide();
   // $(this).parent().parent().find(".textedit").show();
    $(this).parent().parent().remove();
});  

$(".imgedit a.edit").live("click",function(){

    var base_url = window.location.origin;
    $('.imgedit').attr('id','');
    $('#upload').remove();
    var url = $("#hid").val();  
    var uri_new = base_url+"/Frontend/submit/"+url;
    //$(".what_is_this").fadeIn(500); 
    $("#editable").attr("id","");    
    $(this).parent().parent().attr('id','editable');
    $(this).parent().parent().append('<div style="display: block;" id="upload" ><form style="width: 76px; overflow: hidden;height: 50px; left: 50%; margin-left: -81px; margin-top: -25px; overflow: hidden;position: absolute;top: 50%;width: 162px;" id="image_upload1" enctype="multipart/form-data" action="'+uri_new+'" method="post"><input type="file" style="display: block; height: 39px; opacity: 0; position: absolute; width: 162px;" id="images1" name="images1"><img src="'+base_url+'/images/upload.png" /></form></div>');
    var height = $(this).parent().parent().height();
    var width = $(this).parent().parent().width();
    $("#upload").append('<input type="hidden" value="'+height+'" id="htget"/>');
    $("#upload").append('<input type="hidden" value="'+width+'" id="wdget"/>');
   // var uri = document.URL;
//    var res = uri.split("edit/");
//    var res2 = res[1].split("/");
//    var newurl = res2[0];
//    var settings = {
//    	url: "http://test.scampaigns.com/Frontend/dragdropupload/"+newurl,
//    	method: "POST",
//    	allowedTypes:"jpg,png,gif,doc,pdf,zip",
//   	    fileName: "myfile",
//   	    multiple: true,
//    	onSuccess:function(files,data,xhr)
//    	{
//    	}
//    }    
//    $("#upload").uploadFile(settings);
    return false; 
});


$("#images1").live("change",function() {
    var containHeight = $("#editable").height();
    var containWidth =  $("#editable").width();
    $("#image_upload1").ajaxSubmit({
        data : {filename:'images1'},
        success: function(response) {
            // alert(response);
            $("#images1").css("display","block");
            var imgplaceid = $("#editable").children('img').attr('id');
            var imgsrc     = $("#editable").children('img').attr('src');
            $('#editable #images1').draggable();
            $("#editable").height(containHeight);
            $("#editable").width(containWidth);
            $("#upload").hide();
            htmledit(imgplaceid,response,imgsrc);	
        },
    });
});






function htmledit(imgid,imgpath,imgsrc)
{
    $('#editable #'+imgid).attr("src","")
    $('#editable  #'+imgid).attr("src",imgpath);
}


$(".tool-tip a.edit").live("click",function(){
     
    $("#editable").attr('id','');
        $(this).parent().parent().attr('id','editable');
        $(this).parent().hide();
        $('.textedit').removeClass('editor');
        $('.textedit').show();
        var text = $(this).parent().parent().find('.textedit').html();
        $('#edittext').remove();
        $(this).parent().parent().find('.textedit').addClass('editor');
        $('.editor').hide();
        
        $(this).parent().parent().append('<div style="display: block;" id="edittext"><textarea id="textdyn" style="width:100%">'+text+'</textarea><input type="button" class="css3button" value="update" id="ups" /></div>');
        //var area = new nicEditor({buttonList : ['fontFamily','fontSize','left','center','right','justify','bold','italic','underline']}).panelInstance('textdyn'); 
        CKEDITOR.inline('textdyn');
        CKEDITOR.inlineAll();
        return false; 
});

function Alert()
    {
        alert($("#cke_edittext").html());
        alert($("#cke_edittext").css('display'));
        $("#cke_edittext").css('display','block');
        alert($("#cke_edittext").css('display'));
      // $("#edittext p").trigger('click'); 
    }


$(document).on("click","#ups",function(e){
    $(this).parent().prev().show();
    e.preventDefault();
    
    alert($("#edittext p").html());
    
    var newtext=$("#edittext p").html();
    
    $("#edittext").remove();
    $('.editor').html(newtext);
    $('.editor').show();

});

$(function() {

    $("div.option a.save").live('click',function(){
        $(".setting-2").remove();
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
        var base_url = window.location.origin;
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
    
    $("#editable label").live('click',function(){
        $("#ups").trigger('click');
        var text = $(this).html();
        $('.editor').removeClass('editor');
        $(this).addClass('editor');
        $('.editor').hide();
        
        $(this).parent().prepend('<div style="display: block;" id="edittext"><textarea id="textdyn" style="width:100%">'+text+'</textarea><input type="button" class="css3button" value="update" id="ups" /></div>');
    var area = new nicEditor({buttonList : ['fontFamily','fontSize','left','center','right','justify','bold','italic','underline']}).panelInstance('textdyn');
        
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
    $("#editable #checksboxes").live('click',function(){
        $("#checksboxes").attr("id","");
        $(this).find('a').remove();
        $(this).find('p').addClass('dotted');
        $(this).find('p').addClass('changeable');
        $(this).find('p').html('<span>'+$(this).find('p').html()+'</span>');
        $(this).find('p').append('<a href="javascript:void(0)" class="deleteCheckbox">x</a>');
        $(this).append('<a id="readdCheckbox" href="javascript:void(0)" onclick="addCheckbox()" >add field</a>');    
    });
    
    
    $(".editform a.edit").live('click',function(){
        $("#editable").attr('id','');
        $(this).parent().parent().attr('id','editable');
        $(this).parent().parent().find('ul li label').addClass('dotted');
        $("#checksboxes").addClass('dotted');
        //$(this).parent().parent().find('div.jui-checkbox-row').css('border','1px dashed #000');
//        $(this).parent().parent().find('div.jui-checkbox-row').append('<a href="javascript:void(0)" class="deleteCheckbox">x</a>');
    })



});








function addCheckbox()
    {
        $("#readdCheckbox").remove();
        $("#editable .checksboxes").append('<div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="1"> </span><p class="dotted changeable"><span>option</span><a class="deleteCheckbox" href="javascript:void(0)">x</a></p></div><a id="readdCheckbox" href="javascript:void(0)" onclick="addCheckbox()" >add field</a>');
    }

function uploadready(){
    
   

}