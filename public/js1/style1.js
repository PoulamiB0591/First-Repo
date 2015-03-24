$(document).ready(function() {
    //CKEDITOR.disableAutoInline = true;
    var uri = document.URL;
    var res = uri.split("edit1/");
    var res2 = res[1].split("/");
    var newurl = res2[0];
   // setTimeout('appendall("'+newurl+'")', 1000);

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
    $('select.styled').customSelect();
    $('.scroll-pane').jScrollPane();
// setup popup js
// popup js block
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
    $(".imgedit a.delete").live("click",function(){
        $(this).parent().parent().find("#upload").hide();
        $(this).parent().parent().remove();
    });
    
    $(".tool-tip a.delete").live("click",function(){
        $(this).parent().parent().remove();
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
            $('#editable #resizable'+imgCountHold).resizable({aspectRatio: false, handles: 'ne, se, sw, nw, n, s, w, e'});
            $("#editable").height(containHeight);
            $("#editable").width(containWidth);
            
        }
        img.src = hold;
        
        
        e.preventDefault();
        e.stopPropagation();
    });
    
    $(".imgedit a.edit").live("click",function(){
        var base_url = window.location.origin;
        $("div.popup").fadeIn(300);
        $("body").append("<div class='mask'></div>");
        $('.imgedit').attr('id','');
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
    
    $(".tool-tip a.edit").live("click",function(){
        $("#editable").attr('id','');
        $(this).parent().parent().attr('id','editable');
        
        
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
    var base_url = window.location.origin;
    var containHeight = $("#editable").height();
    var containWidth =  $("#editable").width();
    var imgplaceid = $("#editable").children('img').attr('id');
    var imgsrc     = $("#editable").children('img').attr('src');
    
    reader = new FileReader();
    reader.readAsDataURL(file);
    xhr = new XMLHttpRequest();
    var url = $("#hid").val();
    var uri_new = base_url+"/Frontend/dragdropupload/"+url;
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
    $(".imgedit").append("<div class='setting-2'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /><input type='hidden' value='0' id='imgCount' /></div>");
    $(".textedit").parent().append("<div class='setting-2' id='text'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a></div>");
    $(".editform").append("<div class='setting-2'><a title='Edit' class='edit' href='javascript:void(0)'></a><a title='setup' class='setup' href='javascript:void(0)'></a><a title='delete' class='delete' href='javascript:void(0)'></a><input type='hidden' value='"+newurl+"' id='hid' /></div>");
    //$('form.editform .sortable-list').sortable();
}

function addCheckbox()
    {
        $("#readdCheckbox").remove();
        $("#editable #checksboxes").append('<div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="1"> </span><p class="dotted changeable"><span>option</span><a class="deleteCheckbox" href="javascript:void(0)">x</a></p></div><a id="readdCheckbox" href="javascript:void(0)" onclick="addCheckbox()" >add field</a>');
    }
function chechTypeAndAdd(value)
{
    AddContainer = "";
    el = '<p id="editH2" contenteditable="true">Label</p>';
    switch(value){
        case 'textbox':
            AddContainer = '<li class="dottedLi">'+el+'<input type="text" name=""><a class="liClose">X</a></li>';
            break;
        case 'password':
            AddContainer = '<li class="dottedLi">'+el+'<input type="password" name=""><a class="liClose">X</a></li>';
            break;
        case 'checkbox':
            AddContainer = '<li class="dottedLi">'+el+'<div class="checksboxes" id="checksboxes"><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="1"> </span> <p>option</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input type="checkbox" value="2"></span> <p>option</p> </div><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="checkbox" value="3"></span><p>option</p></div></div><a class="liClose">X</a></li>';
            break;
        case 'radio':
            AddContainer = '<li class="dottedLi">'+el+'<div class="checksboxes" id="checksboxes"><div class="jui-checkbox-row"><span class="checkboxWrapper"><input type="radio" name="name" value="1"> </span> <p>option</p> </div><div class="jui-checkbox-row"> <span class="checkboxWrapper"><input name="name" type="radio" value="2"></span> <p>option</p> </div></div><a class="liClose">X</a></li>';
            break;
        case 'textarea':
            AddContainer = '<li class="dottedLi">'+el+'<textarea rows="" cols="" name=""></textarea><a class="liClose">X</a></li>';
            break;
            
        default :
            AddContainer = "";
    }
    
    $("#editable ul").append(AddContainer);
    //CKEDITOR.inlineAll();
    //el1 = CKEDITOR.dom.element.createFromHtml(el);
    
    //CKEDITOR.inline( el1, {
//        toolbarGroups: [
//            { name: 'basicstyles' }
//        ]
//    } );    
}

var selectContainer = '<div id="selectContainer" style="width: 100%; text-align: end;"><label>Add your form element : - </label>'+
                        '<select onchange="chechTypeAndAdd(this.value)" style="font-family: times new roman;font-size: 20px; height: 30px;margin-bottom: 10px;width: 120px;">'+
                        '<option value="0">Select</option>'+
                        '<option value="textbox">textbox</option>'+
                        '<option value="password">password</option>'+
                        '<option value="checkbox">checkbox</option>'+
                        '<option value="radio">radio</option>'+
                        '<option value="submit">Submit</option>'+
                        '<option value="textarea">textarea</option>'+
                        '</select></div>';