$(function(){
	
	var baseUrl = window.location.origin;
	var url = location.href.split("/");
    var encoded = "";
	   var i;
    for (i=0; i<url[5].length;i++) {
        var a = url[5].charCodeAt(i);
        var b = a ^ 123;    // bitwise XOR with any number, e.g. 123
        encoded = encoded+String.fromCharCode(b);
    }	
    
	$.ajax({
        type : "POST",
        url : baseUrl+"/frontend/savencontinue",
        data : {'tName' : encoded},
        success : function(data)
        {
             var hold = data.split("||");
             var jsObject = JSON.parse(hold[2]);
             //alert(jsObject.length +" &&&&&&&&& "+jsObject[0].webUrl);
             for(i=0;i<jsObject.length;i++)
             {
                 //alert(campaign);
                 if(jsObject[i].webUrl)
                 {
                     $("#webLView").show();
                     $("#webLinkView").attr('href',jsObject[i].webUrl);
                     $("#webLinkView").text(jsObject[i].webUrl);
                 }
                 
                 if(jsObject[i].fbUrl)
                 {
                     $("#fbLView").show();
                     $("#fbLinkView").attr('href',jsObject[i].fbUrl);
                     $("#fbLinkView").text(jsObject[i].fbUrl);
                 }  
                 
            }
        }
     });
	
	
});