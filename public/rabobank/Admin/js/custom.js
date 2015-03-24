$(function(){
	
	
	
	
	
	
	var options = {
				currentPage: 3,
				totalPages: 20
			}
        $('.pagination').bootstrapPaginator(options);
		
	
	
	
	
	
	
	
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
            if (safari) inp.click();
        } else {
            this.className = 'label_radio r_off';
            if (safari) inp.click();
        };
    };
	
	
	
	
	$('a.popup_window').click(function() {
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');
		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
	  $('#mask , .login_popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
	
	
	
	
	
	
	$("#accordion").collapse({
	  accordion: true,
	  open: function() {
		this.addClass("open");
		this.css({ height: this.children().outerHeight() });
	  },
	  close: function() {
		this.css({ height: "0px" });
		this.removeClass("open");
	  }
	});
	
	
	
	
	
	
	
	
	
	
	$(".checkall").change(function(){
		$chkbox = $(this).parent().parent().parent().parent().find("input[type='checkbox']");
		if($(this).is(":checked")){
			$chkbox.each(function(){
				$(this).attr("checked", true);
			});
		}else{
			$chkbox.each(function(){
				$(this).attr("checked", false);
			});
		};
	});
	
	
	
		
	
	
	
		$( ".datepicker" ).datepicker();
		
		
		
		
		
		
		
		
	$(".text a + ul").slideUp();
	
	$(".text a").click(function(){
		if($(this).next().is(":hidden")){
			$(".text a + ul").slideUp();
			$(".text a").removeClass("active");
			$(this).addClass("active").next().slideDown();
		}else{
			$(this).removeClass("active").next().slideUp();
		};
	//	return false;
	});
		
		
		
		
		
		
	
	
	
});
	