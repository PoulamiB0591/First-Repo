(function($){
    
    alert("dfhfdh");
    
    $('body').on('click', '.color_btn', function(event) {	
	$("#btntextcolor").val('buttoncolor');
	      
	 });
    $('body').on('click', '.color_text', function(event) {
    
  		  $("#btntextcolor").val('textcolor');
    		      
	  	   });
    
    $('body').on('click', '.color_button', function(event) {	
   	     $("#btntextcolor").val('button');
        	      
  	       });
    $('body').on('click', '.color-textt', function(event) {
    
		        $("#btntextcolor").val('text');
        		      
	  	       });
             
             
    $('body').on('click', '.color_btns', function(event) {
            alert("got it!!");        
       	 $("#btntextcolor").val('buttons');
      });
      
      $('body').on('click', '.color_texts', function(event) {	
   	     $("#btntextcolor").val('texts');
      });    
        
        $('body').on('click', '.color_btn', function(event)
     {
    	 $(".color-picker-wrapper").fadeIn();
     });
     $('body').on('click','.color_text', function(event)
    {
    	 $(".color-picker-wrapper").fadeIn();
    });
     $('body').on('click', '.color_button', function(event)
     {
    	 $(".color-picker-wrapper").fadeIn();
     });
     $('body').on('click', '.color-textt', function(event)
     {
    	$(".color-picker-wrapper").fadeIn();
     });
     $('body').on('click', '.color_btns', function(event)
     {
    	$(".color-picker-wrapper").fadeIn();
     });
     $('body').on('click', '.color_texts', function(event)
     {
      $(".color-picker-wrapper").fadeIn();
     });
 
     $(document).on("mouseleave", ".color-picker-wrapper", function(e) 
     {
    	 if($('.fillform-form').css('display') == 'block') 
    	 {
    		$(".color-picker-wrapper").fadeIn(); 
    	 }
    	 else if($('.pdfUpload').css('display') == 'block') 
    	 {
    		 $(".color-picker-wrapper").fadeIn();
    	 }
    	
    	 else
    		 {
    	 
    		 $(".color-picker-wrapper").fadeOut();
    		 }
    	
     });
//written by anima 5th march
		 $('#buttontnColor').on('paste input propertychange', function (event) 
		 {
					var element = this;
					var color = $(element).val();
					var keycode = (event.keyCode ? event.keyCode : event.which);
					var charLength = color.length;
					if(charLength==0 && keycode==0)
					{
					return false;
					}
					var firstChar=color.charAt(0);
					if(firstChar!='#')
					{
						alert('First Character must be #');
						 $('#buttontnColor').val("");
						return false;
					}
					if(color.length >= 8)
					{
						alert('maximum six characters');
						return false;
					}
					//$(".color_btn").backgroundColor="'"+color+"'";
					$(".color_btn").css('background-color',color);
					$(".wrapper").find("#editable #SendButton").css('background-color',color);
		 }); 
		 $('#textColour').on('paste input propertychange', function (event) 
		{
					var element = this;
					var color = $(element).val();
					var keycode = (event.keyCode ? event.keyCode : event.which);
					var charLength = color.length;
					if(charLength==0 && keycode==0)
					{
					return false;
					}
					var firstChar=color.charAt(0);
					if(firstChar!='#')
					{
						alert('First Character must be #');
						$('#textColour').val("");
						return false;
					}
					if(color.length >= 8)
					{
						alert('maximum six characters');
						return false;
					}
					$(".color_text").css('background-color',color);
					$(".wrapper").find("#editable #SendButton").css('color',color);
		});
		$('#btnColor').on('paste input propertychange', function (event) 
		{
					var element = this;
					var color = $(element).val();
					var keycode = (event.keyCode ? event.keyCode : event.which);
					var charLength = color.length;
					if(charLength==0 && keycode==0)
					{
					return false;
					}
					var firstChar=color.charAt(0);
					if(firstChar!='#')
					{
						alert('First Character must be #');
						$('#btnColor').val("");
						return false;
					}
					if(color.length >= 8)
					{
						alert('maximum six characters');
						return false;
					}
					$(".color_button").css('background-color',color);
					$('#countdown').find('div.first-count').each(function(){
						$(this).find('p:first').css('background-color',color);
					});
		});
		$('#textColor').on('paste input propertychange', function (event) 
		{
					var element = this;
					var color = $(element).val();
					var keycode = (event.keyCode ? event.keyCode : event.which);
					var charLength = color.length;
					if(charLength==0 && keycode==0)
					{
					return false;
					}
					var firstChar=color.charAt(0);
					if(firstChar!='#')
					{
						alert('First Character must be #');
						$('#textColor').val("");
						return false;
					}
					if(color.length >= 8)
					{
						alert('maximum six characters');
						return false;
					}
					$(".color-textt").css('background-color',color);
					$('#countdown').find('div.first-count').each(function(){
						$(this).find('p:first').css('color',color);
					});
		});
		$('#btnColors').on('paste input propertychange', function (event) 
		{
					var element = this;
					var color = $(element).val();
					var keycode = (event.keyCode ? event.keyCode : event.which);
					var charLength = color.length;
					if(charLength==0 && keycode==0)
					{
					return false;
					}
					var firstChar=color.charAt(0);
					if(firstChar!='#')
					{
						alert('First Character must be #');
						$('#btnColors').val("");
						return false;
					}
					if(color.length >= 8)
					{
						alert('maximum six characters');
						return false;
					}
					$(".color_btns").css('background-color',color);
					$('#countdown').find('div.first-count').each(function(){
						$(this).find('p').last().css('background-color',color);
  					});
		});
		$('#textColors').on('paste input propertychange', function (event) 
		{
				var element = this;
				var color = $(element).val();
				var keycode = (event.keyCode ? event.keyCode : event.which);
				var charLength = color.length;
				if(charLength==0 && keycode==0)
				{
				return false;
				}
				var firstChar=color.charAt(0);
				if(firstChar!='#')
				{
					alert('First Character must be #');
					$('#textColors').val("");
					return false;
				}
				if(color.length >= 8)
				{
					alert('maximum six characters');
					return false;
				}
				$(".color_texts").css('background-color',color);
				$('#countdown').find('div.first-count').each(function(){
					$(this).find('p').last().css('color',color);
					});
		});
 
});    
  
         function rgb2hex(rgb){
    	 rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
    	 return (rgb && rgb.length === 4) ? "#" +
    	  ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
    	  ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
    	  ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : '';
    	}    