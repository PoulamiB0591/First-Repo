<!--SFPPAGE-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>B2B Webinar Signup Desk</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
   <link rel="stylesheet" href="/editcss/jquery-ui.css"/>
<link rel="stylesheet" href="/editcss/jquery.datetimepicker.css"/>
<link rel="stylesheet" href="/editcss/jquery.timepicker.css"/>
  <link rel="stylesheet" href="SFPURLLINK/css/style.css"/>

  <!--SFPScript  src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></SFPScript-->
  <!--SFPScript>
    WebFont.load({
      google: {
        families: ['Open Sans', 'Raleway']
      }
    });
  </SFPScript-->
  <!--SFPhide  
  <style>
  .SFPTWO_EDITFORM li {
  margin-bottom: 26px;
}
.jui-checkbox-row {
  height: auto;
  overflow: hidden;
} 
  </style>
  SFPhide-->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="main_section SFPTWO_BACKGROUND">
<div class="header">
  <div class="container">
   	<div class="SFPTWO_IMAGEEDIT">
    <img src="SFPURLLINK/images/6sr76z-logo.png" class="company-logo"/></div>
  </div>
</div>
<div class="main">
  <div class="container">

    <div class="inner-container">

      <div class="row main-heading">
        <div class="col-md-12 tool-tip">
        <div class="SFPTWO_TEXTEDIT">        
          <h4 class="textedit SFPTWO_TAGEDIT edit explicit_edit"> Free Webinar | May 8th, 10am PST / 1 pm EST</h4></div>
         <div class="SFPTWO_TEXTEDIT">
          <h1 class="textedit SFPTWO_TAGEDIT edit explicit_edit">10 Surprising Conversion Strategies</h1></div>
        </div>
      </div>

      <div class="row main-center">
        <div class="col-sm-6 col-md-4 col-sm-offset-1 tool-tip">
          <div class="SFPTWO_TEXTEDIT">
          <h5 class="text-em SFPTWO_TAGEDIT edit explicit_edit">Seats are Limited</h5></div>
          <div class="SFPTWO_TEXTEDIT">
          <h3 class="textedit SFPTWO_TAGEDIT edit explicit_edit">Register Today</h3></div>
             <div style="overflow: hidden; width: 100%;">
                 
               <[form]><(action)->""/>
              <[INPUTFIELD(label)->"First Name *"/>
              <[EMAIL(label)]->"Email *"/>  
             <[SUBMITBUTTON(value)]->"Save My Spot"/>
               <[SINGLETEXTLINE(label)]->"Tell them you're not going to spam them and point them to your <a href='#'>privacy policy</a>"/>
             </[form]>
                <[textbox(class)]->"form-control"/>
                <[submit(class)]->"btn btn-lg btn-primary btn-block"/>
                <[email(class)]->"form-control"/>
                <[paragraph(class)]->"form-control"/>
                <[singleline(class)]->"note"/>
                <[multiline(class)]->"form-control"/>
                <[textarea(class)]->"form-control"/>
                <[dropdown(class)]->"form-control"/>
               <!-- <[dropdown-option(class)]->"getme"/>-->
                <[label(class)]->"getme"/>
                
                </div>
        </div>
      </div>

      <div class="row main-bottom">
        <div class="col-md-12 tool-tip">
        <div class="SFPTWO_TEXTEDIT">        
          <h3 class="textedit SFPTWO_TAGEDIT edit explicit_edit">Accreditations, Awards or Whatever Creds</h3>
         </div>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
              <div class="row">
                <div class="col-sm-4">
                <div class="SFPTWO_IMAGEEDIT">
                  <img src="SFPURLLINK/images/1u1mdnh-bbb.png"/>
                  </div>
                </div>
                <div class="col-sm-4">
                <div class="SFPTWO_IMAGEEDIT">
                  <img src="SFPURLLINK/images/1s97s6s-bizrate.png"/>
                  </div>
                </div>
                <div class="col-sm-4">
                <div class=" SFPTWO_IMAGEEDIT">
                  <img src="SFPURLLINK/images/1kbjx83-truste.png"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  
  </div>

</div>
<div class="footer">
 <div class="container">
    <div class="SFPTWO_TEXTEDIT SFPTWO_TAGEDIT edit explicit_edit"><p>&copy;2014 Your Company, Inc.</p></div>
    </div>
 
</div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <!--SFPScript  src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></SFPScript-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
 <!--SFPScript  src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></SFPScript-->
<!--SFPScript type="text/javascript"  src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></!--SFPScript> 
<!--SFPScript type="text/javascript" src="/js3/jquery.datetimepicker.js"></!--SFPScript> 
<!--SFPScript type="text/javascript"  src="/js/jquery.timepicker.js"></!--SFPScript> 
<!--SFPScript>

$(".jui-checkbox-row p.SFPTWO_TAGEDIT").live( "click", function(){
    $(this).parent().find('input[type="checkbox"]').trigger('click');
});

$(".jui-checkbox-row p.SFPTWO_TAGEDIT").live( "click", function(){
    $(this).parent().find('input[type="radio"]').trigger('click');
});

function datepick(num)
{
  $('body').on('click', '#datepicker'+num, function(event) {
    
    $(this).datepicker({

       showOn: 'focus',

        yearRange: "1900:+85",

        changeMonth: true,

        changeYear: true
    }).focus();

});  
}


function timepick(num)
{
    $('body').on('click', '#timepicker'+num, function(event) {
     $(this).timepicker(
        {
        'step': '30',
			'minTime': '00:00',
			'maxTime': '23:59',
			'timeFormat': 'H:i',
  }).focus();
}); 
}   
</!--SFPScript> 
</body>
</html>