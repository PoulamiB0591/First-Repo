(function($){
	$(function(){
		
		$(".label_radio1").click(function(){
			$(".label_radio1").removeClass("r_on1").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on1").children("input[type='radio']").attr("checked", true);
		});
		
		
		
		
		$("a.button_btn3").click(function(){
			$("div.popup").fadeIn(300);
			$("body").append("<div class='mask'></div>");
			return false;
		});
		
		$("a.close_btn").click(function(){
			$("div.popup, div.mask").fadeOut(300, function(){
				$("div.mask").remove();
			});
			return false;
		});
		
		
		
		
		
		
		
		
		
	});
})(jQuery);