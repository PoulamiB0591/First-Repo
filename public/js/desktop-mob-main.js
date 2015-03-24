
	$(function(){
	   
       
       
      /* 	$('.con_slider').cycle({ 
		fx:     'scrollHorz',
		prev:   '#prev',
		next:   '#next',
		timeout: 0
	});*/
       
	   
        $('.wrap-browser').addClass('infront').removeClass('behind');
        $('.wrap-mobile').addClass('behind').removeClass('infront');
	   
      $(".wrap-mobile").mouseenter(function(){
        if($(this).hasClass('behind'))
        {
            $('.wrap-browser').animate({'left':'-20'},200);
            $('.wrap-mobile').animate({'right':'-50'},200);
        }
      });
      
      $(".wrap-mobile").mouseleave(function(){
        if($(this).hasClass('behind'))
        {
            $('.wrap-browser').animate({'left':'0'},200);
            $('.wrap-mobile').animate({'right':'0'},200);
        }
      });
      
      
      $(".wrap-browser").mouseenter(function(){
         if($(this).hasClass('behind'))
        {
            $('.wrap-browser').animate({'left':'-20'},200);
            $('.wrap-mobile').animate({'right':'-50'},200);
        }
      });
      
      $(".wrap-browser").mouseleave(function(){
        if($(this).hasClass('behind'))
        {
            $('.wrap-browser').animate({'left':'0'},200);
            $('.wrap-mobile').animate({'right':'0'},200);
        }
      });
      
      
      $(".wrap-mobile").click(function(){
        if($('.wrap-mobile').hasClass('behind'))
        {
            $('.wrap-mobile').animate({'right':'0', 'z-index':'999','opacity':'1'},200);
            $('.wrap-mobile').attr('class','wrap-mobile infront');
            $('.wrap-browser').animate({'left':'0','z-index':'200','opacity':'0.7'},200);
            $('.wrap-browser').attr('class','wrap-browser behind');
        }
      });
      
      
      
      $(".wrap-browser").click(function(){
        if($('.wrap-browser').hasClass('behind'))
        {
            $('.wrap-browser').animate({'left':'0', 'z-index':'999','opacity':'1'},200);
            $('.wrap-browser').attr('class','wrap-browser infront');
            $('.wrap-mobile').animate({'right':'0','z-index':'200','opacity':'0.7'},200);
            $('.wrap-mobile').attr('class','wrap-mobile behind');
        }
      });
        
	
	
	var window_height = function(){
			$(".con_slider, .wrap-previews, .wrap-text").height($(window).height());
			
		};
		
		window_height();
		
		$(window).resize(function(){
			window_height();
		})
	
		
		
		
		
		

});

