$(function(){
	
	$('body').on('click', '#datepicker_timer', function(event) 
	{
		$(this).datepicker({dateFormat: "dd/mm/yy" , minDate: 0}).val();
	});

	/****** set timepicker *******/
	$('body').on('click', '#timepicker', function(event) 
	{
		$(this).timepicker(
		{
			'step': '30',
			'minTime': '00:00',
			'maxTime': '23:59',
			'timeFormat': 'H:i',
		}).focus();
	});
	
	$(".SFPTWO_TIMER a.timer").live('click', function(){

		// Set the effect type
		var effect = 'slide';

		// Set the options for the effect type chosen
		var options = { direction: 'right' };

		// Set the duration (default: 400 milliseconds)
		var duration = 700;

		if($("div.slide_popup").show())
		{
			$("div.slide_popup").hide();
		}
		if($("div.slide_popup1").show())
		{
			$("div.slide_popup1").hide();
		}

		if($("div.slide_popup2").show())
		{
			$("div.slide_popup2").hide();
		}

		if($("div.popupusbackground").show())
		{
			$("div.popupusbackground").hide();
		}

		if($("div.slide_popupurl").show())
		{
			$("div.slide_popupurl").hide();
		}

		if($("div.slide_fbshare").show())
		{
			$("div.slide_fbshare").hide();
		}

		if($("div.slide_tweet_share").show())
		{
			$("div.slide_tweet_share").hide();
		}
		
		if($("div.slide_fblike").show())
		{
			$("div.slide_fblike").hide();
		}

		$("div.popup").animate({"right":0},300);
		$("div.popup1").animate({"right":0},300);
		$("div.popup2").animate({"right":0},300);
		$("div.slide_timer").toggle(effect, options, duration);   
	});
	
	/*********** save timer countdown *****/  
	$('body').on('click', '.timer_set', function(event) 
	{
		var base_url = window.location.origin;
		var main_url = window.location.href;
		var newFolderName = main_url.split('/');
		   //alert("fdhfgh");
		var base_url = window.location.origin; 
		var selectedDate = $("#datepicker_timer").val();
		var selectedTime = $("#timepicker").val();
		var dateSet = selectedDate.split("/");
	
		// alert(dateSet+ " && "+ selectedTime);
        //alert(selectedDate);
		var setDate = dateSet[0]+" "+GetMonthName(dateSet[1])+" "+dateSet[2]+" "+selectedTime+":00";
		date = new Date(setDate);
		
		var currDate = new Date();
		//alert(currDate);
		
		//alert(date+ " %%%% "+ currDate);
		
		if(date <= currDate)
		{
			alert("You have selected a past date. Please select correct Date");
			return false;
		}
		
		$.ajax({
		   type : "POST",
		   url : base_url+"/Frontend/savetimer",
		   data : {time : setDate, tempName : newFolderName[5]},
		   success : function(data)
		   {
			   //alert(data);
			   if(data)
			   {
				   /*if(calcNewYearReset)
				   {
					   clearInterval(calcNewYearReset);
				   }
				   
				   calcNewYearReset = setInterval(function(){*/
			            date_future = new Date(setDate);
			            date_now = new Date();

			            seconds = Math.floor((date_future - (date_now))/1000);
			            minutes = Math.floor(seconds/60);
			            hours = Math.floor(minutes/60);
			            days = Math.floor(hours/24);
			            
			            hours = hours-(days*24);
			            minutes = minutes-(days*24*60)-(hours*60);
			            seconds = seconds-(days*24*60*60)-(hours*60*60)-(minutes*60);
			            
			            $(".wrapper .SFPTWO_TIMER span.days").text(days);
			            $(".wrapper .SFPTWO_TIMER span.hours").text(hours);
			            $(".wrapper .SFPTWO_TIMER span.minutes").text(minutes);
			            $(".wrapper .SFPTWO_TIMER span.seconds").text(seconds);
			           
			        //},1000);
			   }
		   } 
		});
	});
});

function GetMonthName(monthNumber) {
	var months = ['January', 'February', 'March', 'April', 'May', 'June',
	              'July', 'August', 'September', 'October', 'November', 'December'];
	return months[monthNumber-1];
} 