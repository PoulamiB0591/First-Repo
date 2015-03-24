(function($){
	$(function(){
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
            
            $("#webUrl0").hide();
            
           var tempName = location.href.split("/"); 
           $.ajax({
               type : "POST",
               url : "http://test.scampaigns.com/frontend/savencontinue",
               data : {'tName' : tempName[5]},
               success : function(data)
               {
                    var jsObject = JSON.parse(data);
               
                    
                   for(i=0;i<jsObject.length;i++)
                   {
                        if(jsObject[i].webUrl != null)
                        {
                            //alert(campaign);
                            $("#web").attr('class','span_check c_on');
                            $("#web").children('input').attr('checked', true);
                            
                            $("#webPart").show();
                            
                            $("#fieldLabel").find('span#webUrl0').show();
                            $("#webUrl0").attr('class','span_radio r_on');
                            $("#webUrl0").text(jsObject[i].webUrl);
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
            $("#fbPages").hide();
         }else{
            
             $("#facebook").attr('class','span_check c_on');
             $("#facebook").children('input').attr('checked', true);
                        
            $.ajax({
                type:'POST',
                data:{},
                url: 'http://test.scampaigns.com/Ajaxcall/chklogin',
                success:function(data){
                   if(data == "")
                   {
                        $("#noConn").show();
                        $("#connBtn").show();
                   } 
                   else
                   {
                         $("#noConn").hide();
                         $("#connBtn").hide();
                         
                         FB.login(function(response) {
                            FB.api('/me/accounts', function(responsePages) {
                                
                                $("#myItem option").remove(); 
                                
                                page1 = '<option value="SELECT YOUR PAGE">SELECT YOUR PAGE</option>';
                                $("#myItem").append(page1);
                                for(var i=0;i<responsePages.data.length;i++)
                                {
                                    pages = '<option value="'+responsePages.data[i].id+'|--||--|'+responsePages.data[i].access_token+'">'+responsePages.data[i].name+'</option>';
                                    $("#myItem").append(pages);
                                }
                            });
                         });
                         
                        
                         $("#fbPages").show();
                   }
                }
            });
        	
            
        };
    });
    
    /*$(".span_radio").click(function(){
        alert("safsfa");
				$(".span_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
				$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);
			});*/
            
     var z = 0;
    $(".label_radio_new").live('click',function(e){
        if(z == 0){
            var abc = $(this).parent();
            $(abc).find('label').removeClass('r_on'); 
            $(this).removeClass('r_off');
            $(this).addClass('r_on');
            
            z++;
        }
        else
        {
            z = 0;
        }
    });      
    
	});
})(jQuery)