$(function(){
	
var slider = new MasterSlider();
    slider.setup('masterslider' , {
        width:366,
        height:366,
        space:10,
        loop:true,
        view:'prtialwave'
    });
     
    slider.control('arrows');  
    slider.control('slideinfo',{insertTo:"#partial-view-1" , autohide:false});
    slider.control('circletimer' , {color:"#FFFFFF" , stroke:9});



});

 function showimagepreview(input) {
if (input.files && input.files[0]) {
var filerdr = new FileReader();
filerdr.onload = function(e) {
$('#divimg').css('display','block');
$('#imgprvw').css('display','block');
$('#imgprvw').attr('src', e.target.result);
}
filerdr.readAsDataURL(input.files[0]);
}
}