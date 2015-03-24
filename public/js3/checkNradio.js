(function($){
	$(function(){
	   
       
       var base_url = window.location.origin;
       
       
		var d = document;
            var safari = (navigator.userAgent.toLowerCase().indexOf() != -1) ? true : false;
            var gebtn = function(parEl,child) { return parEl.getElementsByTagName(child); };
            onload = function() {
                
                var body = gebtn(d,'body')[0];
                body.className = body.className && body.className != '' ? body.className + ' has-js' : 'has-js';
                
                if (!d.getElementById || !d.createTextNode) return;
                var ls = gebtn(d,'label');
                for (var i = 0; i < ls.length; i++) {
                    var l = ls[i];
                    if (l.className.indexOf('label_') == -1) continue;
                    var inp = gebtn(l,'input')[0];
                    if (l.className == 'label_check') {
                        l.className = (safari && inp.checked == true || inp.checked) ? 'label_check c_on' : 'label_check c_off';
                        l.onclick = check_it;
                    };
                    if (l.className == 'label_radio') {
                        l.className = (safari && inp.checked == true || inp.checked) ? 'label_radio r_on' : 'label_radio r_off';
                        l.onclick = turn_radio;
                    };
                    
                };
            };
            var check_it = function() {
                var inp = gebtn(this,'input')[0];
                if (this.className == 'label_check c_off' || (!safari && inp.checked)) {
                    this.className = 'label_check c_on';
                    if (safari) inp.click();
                }
                else {
                    this.className = 'label_check c_off';
                    if (safari) inp.click();
                };
            };
            var turn_radio = function() {
                var inp = gebtn(this,'input')[0];
                if (this.className == 'label_radio r_off' || inp.checked) {
                    var ls = gebtn(this.parentNode,'label');
                    for (var i = 0; i < ls.length; i++) {
                        var l = ls[i];
                        if (l.className.indexOf('label_radio') == -1)  continue;
                        l.className = 'label_radio r_off';
                    };
                    this.className = 'label_radio r_on';
                    if (safari) inp.click();
                } else {
                    this.className = 'label_radio r_off';
                    if (safari) inp.click();
                };
            };
            
            
            
    $("#web").click(function(){
        if($(this).children("input[type='checkbox']").is(":checked")){
            
            $(this).children("input[type='checkbox']").attr("checked", false);
        	$(this).removeClass("c_on");
            
            $("#webPart").hide();
        }else{
        	$(this).children("input[type='checkbox']").attr("checked", true);
        	$(this).addClass("c_on");
            
            $("#webPart").show();
            
            //$("#webUrl0").hide();
            
           var tempName = location.href.split("/"); 
           var encoded = "";
       	   var i;
           for (i=0; i<tempName[5].length;i++) {
               var a = tempName[5].charCodeAt(i);
               var b = a ^ 123;    // bitwise XOR with any number, e.g. 123
               encoded = encoded+String.fromCharCode(b);
           }	
           $.ajax({
               type : "POST",
               url : base_url+"/frontend/savencontinue",
               data : {'tName' : encoded},
               success : function(data)
               {
                var hold = data.split("||");
                    var jsObject = JSON.parse(hold[1]);
                    
                    if(jsObject != null)
                    {
                       for(i=0;i<jsObject.length;i++)
                       {
                            if(jsObject[i].new_template_name != "")
                            {
                                
                                $("#web").attr('class','span_check c_on');
                                $("#web").children('input').attr('checked', true);
                                
                                $("#webPart").show();
                                $("#nameCam").text(jsObject[i].new_template_name);
                            }
                       }  
                    }
               }
        });
            
            
        };
    });
    
    $("#facebook").click(function(){
        if($(this).children("input[type='checkbox']").is(":checked")){
            $(this).children("input[type='checkbox']").attr("checked", false);
        	$(this).removeClass("c_on");
            $("#noConn").hide();
            $("#connBtn").hide();
            $("#fbPages").hide();
         }else{
        	 $("#facebook").attr('class','span_check c_on');
             $("#facebook").children('input').attr('checked', true);
                   
             FB.init({
                appId      : '507520019301583',
                cookie     : true,  // enable cookies to allow the server to access 
                // the session
                xfbml      : true,  // parse social plugins on this page
                version    : 'v2.0' // use version 2.0
            });      
                  
            FB.getLoginStatus(function(response) {
                 console.log(response);
                 if (response.status === 'connected') {
                	 
                	 $("#noConn").hide();
                     $("#connBtn").hide();
                	 
                 FB.api('/me/accounts', function(responsePages) {
                	 //alert(JSON.stringify(responsePages));
                     console.log(responsePages);
                     $("#myItem option").remove(); 
                     
                     page1 = '<option value="SELECT YOUR PAGE">SELECT YOUR PAGE</option>';
                     $("#myItem").append(page1);
                     for(var i=0;i<responsePages.data.length;i++)
                     {
                         pages = '<option value="'+responsePages.data[i].id+'|--||--|'+responsePages.data[i].access_token+'">'+responsePages.data[i].name+'</option>';
                         $("#myItem").append(pages);
                     }
                     
                     $("#fbPages").show();  
                 });
               } else if (response.status === 'not_authorized') {
                 alert("not authorized");
               } else {
            	   $("#noConn").show();
                   $("#connBtn").show();
               }
              },{perms: 'manage_pages'});
         };
    });
    });
})(jQuery)