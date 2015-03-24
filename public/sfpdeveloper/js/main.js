
//CKEDITOR.disableAutoInline = true;
$(function(){
	
	$('#back-to-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	
	});
	
	

        //TAB
  $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
	
	
	//TAB-new
  $(".tabs-menu-new a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content-new").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
	
	//TAB-new2
  $(".tabs-menu-new2 a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content-new2").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
	
	//============ for redio button start  ===============					

    var d = document;
    var safari = (navigator.userAgent.toLowerCase().indexOf('safari') != -1) ? true : false;
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
        } else {
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
            
            $("#validate").text("");
            if (safari) inp.click();
        } else {
            this.className = 'label_radio r_off';
            if (safari) inp.click();
        };
    };

	//============ for redio button end  ===============	
	
	
				$(".nicefile").niceFileInput({
				  'width'         : '488', //width of button - minimum 150
				  'height'		  : '52',  //height of text
				  'btnText'       : 'Browse', //text of the button     
				  'btnWidth'	  : '100' ,  // width of button
				  'margin'        : '14',	// gap between textbox and button - minimum 14 		  
				});
				
		$(".nicefile2").niceFileInput({
				  'width'         : '550', //width of button - minimum 150
				  'height'		  : '52',  //height of text
				  'btnText'       : 'Browse', //text of the button     
				  'btnWidth'	  : '100' ,  // width of button
				  'margin'        : '14',	// gap between textbox and button - minimum 14 		  
				});		
				
		//TABLE SORTER////////////////
		
		//	======== menu dropdown start =========	
		var ele = $(".drop_nav");
			var all_divs = ele.find("div");
			var all_anchor = ele.children(".drop_nav li:nth-child(7)").children("a");
			all_divs.slideUp();
			
			all_anchor.click(function(){
				if($(this).next().is(":hidden")){
					all_divs.slideUp();
					all_anchor.removeClass("active");
					$(this).addClass("active").next().slideDown();
				}else{
					$(this).removeClass("active").next().slideUp();
				};
				return false;
			});
			
//	======== menu dropdown end =========

	$('.jqte-test').jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.jqte-test').jqte({"status" : jqteStatus})
	});	
    
    $(".element").click(function(){
        $("#validate").text('');
    })	;	
	
});

