(function($){
	$(function(){
	
		var baseUrl = window.location.origin;
		
		/****************** SELECTION OF PAYMENT OPTION ******************/
		$(".span_radio").click(function(){
			$(".span_radio").removeClass("r_on").children("input[type='radio']").attr("checked", false);
			$(this).addClass("r_on").children("input[type='radio']").attr("checked", true);
			
			/*if($(this).attr('id') == 'idealRadio')
			{
				$("#idealDiv").show();
				$("#visaDiv").hide();
				$("#mastercardDiv").hide();
			}
			else if($(this).attr('id') == 'visaRadio')
			{
				$("#idealDiv").hide();
				$("#visaDiv").show();
				$("#mastercardDiv").hide();
			}
			else
			{
				$("#idealDiv").hide();
				$("#visaDiv").hide();
				$("#mastercardDiv").show();
			}*/
		});
	});
})(jQuery)

function saveShippingDetails()
{
	var tempName = location.href.split("/"); 
	var baseUrl = window.location.origin;
	var bankVal = $("#bankList").val();
	
	var companyName = $("#cName").val();
	var firstName   = $("#fName").val();
	var lastName    = $("#lName").val();
	var email       = $("#email").val();
	var phone       = $("#phone").val();
	var address     = $("#addr").val();
	var zipcode     = $("#zCode").val();
	var price       = $("#tempPrice").text(); 
	
	
	//alert(validateEmail(email));
	
	if(bankVal == 'Default input')
	{
		alert("Please select any bank to proceed");
	}
	else
	{
		if(companyName == '')
		{
			alert("Please provide company name");
			return false;
		}
		if(firstName == '')
		{
			alert("Please provide first name");
			return false;
		}
		if(lastName == '')
		{
			alert("Please provide last name");
			return false;
		}
		if(email == '')
		{
			alert("Please provide email");
			return false;
		}
		
		if (!validateEmail(email)) 
		{
			alert("This is not a valid email address");
			return false;
		}
		
		if(phone == '')
		{
			alert("Please provide phone");
			return false;
		}
		if(address == '')
		{
			alert("Please provide address");
			return false;
		}
		if(zipcode == '')
		{
			alert("Please provide zipcode");
			return false;
		}
		
		$.ajax({
			type : "POST",
			url  : baseUrl+"/Shipping/ideal",
			data : {bankVal : bankVal, companyName : companyName, firstName : firstName, lastName : lastName, email : email, phone : phone, address : address, zipcode : zipcode, price : price, tempName : tempName[5]},
			success : function(response)
			{
				if(response.trim() == 1)
				{
					window.location.href = baseUrl+"/Shipping/payment/"+tempName[5]+"/"+bankVal;
				}
			}
		});
		
	}
	
}

function goBack()
{
	window.history.go(-1);
}

/*************************** email adress validation ************************/
function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}    


function onlyNos(e, t) {
	try {
		if (window.event) {
			var charCode = window.event.keyCode;
		}
		else if (e) {
			var charCode = e.which;
		}
		else { return true; }
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
		return true;
	}
	catch (err) {
		alert(err.Description);
	}
}


