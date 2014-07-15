$(document).ready(function() {
    
    var uri = document.URL;
    var res = uri.split("edit1/");
    var res2 = res[1].split("/");
    var newurl = res2[0];
    setTimeout('appendall("'+newurl+'")', 1000);

});


//end default functionality

$(function() {
// setup popup js

    $(function(){
		$("a.setup").live('click',function(){
			$("div.popup").fadeIn(300);
			$("body").append("<div class='mask'></div>");
			return false
		});
		$("div.popup > a").live('click',function(){
			$("div.popup, div.mask").fadeOut(300, function() {
			$("div.mask").remove()
		});
			return false
		});
	});
    
    
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
    
        $('.imgedit').attr('id','');
        $('#upload').remove();
        var url = $("#hid").val();
        var uri_new = "http://test.scampaigns.com/Frontend/submit/"+url;
        //$(".what_is_this").fadeIn(500); 
        $("#editable").attr("id","");    
        $(this).parent().parent().attr('id','editable');
        $(this).parent().parent().append('<div style="display: block;" id="upload" ondragover="dragover(event)" ondragenter="dragenter(event)" ondragleave="dragleave(event)" ondrop="drop(event)" ><form style="width: 76px; overflow: hidden;height: 50px; left: 50%; margin-left: -81px; margin-top: -25px; overflow: hidden;position: absolute;top: 50%;width: 162px;" id="image_upload1" enctype="multipart/form-data" action="'+uri_new+'" method="post"><input type="file" style="display: block; height: 39px; opacity: 0; position: absolute; width: 162px;" id="images1" name="images1"><img src="http://test.scampaigns.com/images/upload.png" /></form></div>');
        var height = $(this).parent().parent().height();
        var width = $(this).parent().parent().width();
        $("#upload").append('<input type="hidden" value="'+height+'" id="htget"/>');
        $("#upload").append('<input type="hidden" value="'+width+'" id="wdget"/>');
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
        var area = new nicEditor({buttonList : ['fontFamily','fontSize','left','center','right','justify','bold','italic','underline']}).panelInstance('textdyn'); 
        
        return false; 
        
        
    });   
    
    $(document).on("click","#ups",function(e){
        
        $(this).parent().prev().show();
        e.preventDefault();
        var newtext=$('.nicEdit-main').html();
        $("#edittext").remove();
        $('.editor').html(newtext);
        $('.editor').show();
    
    });

    $("div.option a.save").live('click',function(){
        $(".setting-2").remove();
        $(".liClose").remove();
        $('li').removeClass('dottedLi');
        $("#selectContainer").remove();
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
    

    $(".editform a.edit").live('click',function(){
        $("#editable").attr('id','');
        $(this).parent().hide();
        $(this).parent().parent().attr('id','editable');
        $(this).parent().parent().prepend(selectContainer);
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
    if (!file.type.match(imageType)) 
    {  
		  alert("File \""+file.name+"\" is not a valid image file, Are you trying to screw me :( :( ");
		  return false;	
	}
    uploadFile(file); 
    
}
uploadFile = function(file){
	//alert("uploading "+file.name);
    var containHeight = $("#editable").height();
    var containWidth =  $("#editable").width();
    var imgplaceid = $("#editable").children('img').attr('id');
    var imgsrc     = $("#editable").children('img').attr('src');
    
    reader = new FileReader();
    reader.readAsDataURL(file);
    xhr = new XMLHttpRequest();
    var url = $("#hid").val();
    var uri_new = "http://test.scampaigns.com/Frontend/dragdropupload/"+url;
	xhr.open("post", uri_new, true);
    
    xhr.onreadystatechange = function (oEvent) {  
	  if (xhr.readyState === 4) {  
		if (xhr.status === 200) {  
            $('#editable #images1').draggable();
            $("#editable").height(containHeight);
            $("#editable").width(containWidth);
            $("#upload").hide();
            htmledit(imgplaceid,xhr.responseText,imgsrc); 
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
    $('#editable #'+imgid).attr("src","")
    $('#editable  #'+imgid).attr("src",imgpath);
}
    
    
//default functionality
function appendall(newurl)
{      
    $(".imgedit").append("<div class='setting-2'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
    $(".textedit").parent().append("<div class='setting-2' id='text'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a></div>");
    $(".editform").append("<div class='setting-2'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
   // $('form.editform .sortable-list').sortable();
}

function addCheckbox()
    {
        $("#readdCheckbox").remove();
        $("#editable #checksboxes").append('<div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="1"> </span><p class="dotted changeable"><span>option</span><a class="deleteCheckbox" href="javascript:void(0)">x</a></p></div><a id="readdCheckbox" href="javascript:void(0)" onclick="addCheckbox()" >add field</a>');
    }
function chechTypeAndAdd(value)
{
    AddContainer = "";
    switch(value){
        case 'textbox':
            AddContainer = '<li class="dottedLi"><label for="">Label</label><input type="text" name=""><a class="liClose">X</a></li>';
            break;
        case 'password':
            AddContainer = '<li class="dottedLi"><label for="">Label</label><input type="password" name=""><a class="liClose">X</a></li>';
            break;
        case 'checkbox':
            AddContainer = '<li class="dottedLi"><label for="">Label </label><div class="checksboxes" id="checksboxes"><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="1"> </span> <p>option</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="2"></span> <p>option</p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="3"></span><p>option</p></div></div><a class="liClose">X</a></li>';
            break;
        case 'radio':
            AddContainer = '<li class="dottedLi"><label for="">Label </label><div class="checksboxes" id="checksboxes"><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="radio" name="name" value="1"> </span> <p>option</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input name="name" type="radio" value="2"></span> <p>option</p> </div></div><a class="liClose">X</a></li>';
            break;
        case 'textarea':
            AddContainer = '<li class="dottedLi"><label for="">Label</label><textarea rows="" cols="" name=""></textarea><a class="liClose">X</a></li>';
            break;
            
        default :
            AddContainer = "";
    }
    $("#editable ul").append(AddContainer);
}

var selectContainer = '<div id="selectContainer" style="width: 100%; text-align: end;">'+
                        '<select onchange="chechTypeAndAdd(this.value)">'+
                        '<option value="0">Select</option>'+
                        '<option value="textbox">textbox</option>'+
                        '<option value="password">password</option>'+
                        '<option value="checkbox">checkbox</option>'+
                        '<option value="radio">radio</option>'+
                        '<option value="submit">Submit</option>'+
                        '<option value="textarea">textarea</option>'+
                        '</select></div>';