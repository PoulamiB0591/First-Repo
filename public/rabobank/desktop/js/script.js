$(document).ready(function () {
	$('#menu-toggle').click(function(){
		if($('#menu').hasClass('open')){
			$('#menu').removeClass('open');
			$('#menu-toggle').removeClass('open');
			//$('p.close-p').show();
			//$('p.open-p').hide();
            $(".servicekantoren-wrap").show();
            $(".map-container").animate({
		       left: "0"
		    }, { duration: 300, queue: false });
            $(".map-list").animate({
		       left: "53px"
		    }, { duration: 300, queue: false });
		}else{
			$('#menu').addClass('open');
			$('#menu-toggle').addClass('open');
			//$('p.open-p').show();
			//$('p.close-p').hide();
            $(".servicekantoren-wrap").hide();
            $(".map-container").animate({
		       left: "160px"
		    }, { duration: 300, queue: false });
            $(".map-list").animate({
		       left: "266px"
		    }, { duration: 300, queue: false });
		}
	});
	
	  $("a.gift-bel").click(function(){
    $("#bestellen-col").toggle();
  });

});