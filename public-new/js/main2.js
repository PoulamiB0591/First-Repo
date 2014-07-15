(function($){
	$(function(){

		
        setTimeout(function callhtml (){
            //alert('test');
//            alert($(".imgedit").html());
        
        $("#editingFilename").contents().find("head").append(scriptTag);

        
        
		var xz=0;
			
			$(".button").click(function(){
				if(xz==0){
					$(".big_logo, .logout, .rate, .questions, .menu, .copyright, .nav span").fadeOut(100);
					$(this).parent().css({"width":"60px"});
					$(".nav li a img").css({"float":"none", "padding":"11px 0"});
					$(".nav li a").css({"padding":"0"});
					$(".small_logo, .download").fadeIn(100).css({"display":"block"});
					$(".button").css({"margin":"20px 20px 20px 0"});
					$(".nav li div a img").css({"display":"none"});
					$("form.search input[type='text']").css({"width":"0", "background-position":"center center"});
					xz++;
				}else{
					$(".big_logo, .logout, .rate, .questions, .menu, .copyright, .nav span").fadeIn(100);
					$(this).parent().css({"width":"220px", "height":"auto"});
					$(".small_logo, .download").fadeOut(100);
					$(".nav li a img").css({"float":"left", "padding":"11px 10px 0 0"});
					$(".nav li a").css({"padding":"0 0 0 10px"});
					$(".nav li div a img").css({"display":"block", "float":"right", "padding":"0"});
					$("form.search input[type='text']").css({"width":"145px", "background-position":"8px 8px"});
					xz--;
				}
				return false;
			});
			
					
			
			$('.slider').bxSlider({
				slideWidth: 220,
				minSlides: 1,
				maxSlides: 4,
				moveSlides: 1,
				slideMargin: 20
			});
			
			
			$('.panel').css({'height':($(document).height())+'px'});
				$(window).resize(function(){
				$('.panel').css({'height':($(document).height())+'px'});
			});
			
			
			$(".delete").click(function(){
				$(this).parent().parent().remove();
				return false;
			});
			
			
			
			$("a.open").click(function(){
				$("div.popup").fadeIn(300);
				$("body").append("<div class='mask'></div>");
				return false
			});
			$("a.close, div.mask").click(function(){
				$("div.popup, div.mask").fadeOut(300, function() {
				$("div.mask").remove()
			});
				return false
			});
			
			
			
			
			$("a.open2").click(function(){
				$("div.popup2").fadeIn(300);
				$("body").append("<div class='mask2'></div>");
				$('.scroll-pane').jScrollPane();
				$('select.styled').customSelect();
				return false
			});
			$("a.close2, div.mask2").click(function(){
				$("div.popup2, div.mask2").fadeOut(300, function() {
				$("div.mask2").remove()
			});
				return false
			});
			
			
			
			var xz=0;
			
			$("a.settings_button").click(function(){
				if(xz==0){
					$("div.publish_settings").fadeIn(300);
					$(this).addClass("uparrow");
					xz++;
				}else{
					$("div.publish_settings").fadeOut(300);
					$(this).removeClass("uparrow");
					xz--;
				}
				return false;
			});
			
			
			
			
			var ab=0;
			
			$("a.down").click(function(){
				if(ab==0){
					$("div.date_time").slideToggle(300);
					$(this).addClass("close_arrow");
					ab++;
				}else{
					$("div.date_time").slideUp(300);
					$(this).removeClass("close_arrow");
					ab--;
				}
				return false;
			});
			
			
			
			
			
			$(".tab_content").hide(); //Hide all content
				$("ul.tabs li:first").addClass("active").show(); //Activate first tab
				$(".tab_content:first").show(); //Show first tab content
				//On Click Event
				$("ul.tabs li").click(function() {
				$("ul.tabs li").removeClass("active"); //Remove any "active" class
				$(this).addClass("active"); //Add "active" class to selected tab
				$(".tab_content").hide(); //Hide all tab content
				var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
				$(activeTab).fadeIn(); //Fade in the active content
				return false;
			});
			
			
			
			
			
			var ele = $("#nav");
			var all_divs = ele.find("div");
			var all_anchor = ele.children("li").children("a");
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
			
			
			$( ".datepicker" ).datepicker();
			
			
			
			
			$('#datetimepicker1').datetimepicker({
				datepicker:false,
				format:'H:i',
				step:5
			});
			
			
			
			
			
			var yz=0;
			
			$(".slide_button").click(function(){
				if(yz==0){
					$(this).parent().animate({"right":0},300);
					$(".slide_button").addClass("slide_icon");
					yz++;
				}else{
					$(this).parent().animate({"right":"-300px"},300);
					$(".slide_button").removeClass("slide_icon");
					yz--;
				}
				return false;
			});
			
			
			
			
			
			$('ul.slide_banner').cycle({ 
				fx:     'scrollVert', 
				prev:   '#prev2', 
				next:   '#next2', 
				timeout: 0 
			});
			
			
			
			
		
	});
})(jQuery)