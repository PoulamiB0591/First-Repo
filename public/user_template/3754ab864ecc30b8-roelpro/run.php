
<html>
<head>
<link rel="stylesheet" href="//test.scampaigns.com/user_template/3754ab864ecc30b8-roelpro/css/main.css" />
<link rel="stylesheet" href="//test.scampaigns.com/user_template/3754ab864ecc30b8-roelpro/css/jquery.alerts.css">
 <!--SFPScript type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></SFPScript-->
  <!--SFPScript src="//test.scampaigns.com/user_template/3754ab864ecc30b8-roelpro/js/jquery.alerts.js"></SFPScript-->
 <!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/3754ab864ecc30b8-roelpro/js/html2canvas.js"></SFPScript-->
<!--SFPScript type="text/javascript" src="//test.scampaigns.com/user_template/3754ab864ecc30b8-roelpro/js/jquery.plugin.html2canvas.js"></SFPScript-->

        <!--SFPScript type="text/javascript">
      $(document).ready(function() {
            var uploadimg = $('#uploadimgtext').val();
            
          //$('.img-cont').css('background',"url('"+takeimgname+"') no-repeat"); 
          
         localStorage.setItem('imgupload',uploadimg);
         var takeimgname = localStorage.getItem('takeimgname');
            var imgupload = localStorage.getItem('imgupload');
            var lijfspreuk = localStorage.getItem('lijfspreuk');
        	//$('#target').css('visibility','hidden');
           // $('#target').fadeTo( 1000, 0 );
            //$("#target").animate({ opacity: 0 })
        $('#back-img').attr('src',takeimgname);
        //alert(takeimgname);
        var takeimgnamesplit = takeimgname.split('/');
        gettakeimgsp = takeimgnamesplit[6];
         localStorage.setItem('gettakeimgsp',gettakeimgsp);
        if(gettakeimgsp == '3.png' || gettakeimgsp == '4.png'){
           
            $('.textbellow').remove();
        }
        
         if(gettakeimgsp == '1.png' || gettakeimgsp == '2.png'){
          
              $('.textup').remove();
        }
          $('#front-img').attr('src',imgupload);
         // $('.info').html(lijfspreuk);
        
          //alert(uploadimg);
         //
   
       // 
       var width = $('.width').val();
        width = parseInt(width);
        var height = $('.height').val();
        height = parseInt(height);
           // alert(width);
        if( width < 400 || height < 400){
            jAlert("Image size must be 400 or more.");
            window.history.back();
           }
        	$('#target').html2canvas({
			onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
				$('#img_val').val(canvas.toDataURL("image/png"));
                //Submit the form manually
			   $('form#myForm').submit();
               //window.location="//smartfanpage.com/screenshot/save.php";
			}
		});
        
        if($("#img_val").length)
          var val="";
          else{
            jAlert("Image is not well percept.Please upload another photo. ");
              window.history.back();
          
          }
        
         });
         
            
         
</SFPScript-->

<!--PHP
ini_set('memory_limit', '-1');
//ini_set( 'display_errors', 1 );
//error_reporting( E_ALL ^ E_NOTICE );
include "FaceDetect.php";
include "ImageManipulator.php";
class FaceModify extends svay\FaceDetector {
 
  public function Rotate() {
    $canvas = imagecreatetrueSFP_BOOTor($this->face['w'], $this->face['w']);
    imagecopy($canvas, $this->canvas, 0, 0, $this->face['x'], 
              $this->face['x'], $this->face['w'], $this->face['w']);
    $canvas = imagerotate($canvas, 180, 0);
    $this->_outImage($canvas);
  }
 
  public function toGrayScale() {
    $canvas = imagecreatetrueSFP_BOOTor($this->face['w'], $this->face['w']);
    imagecopy($canvas, $this->canvas, 0, 0, $this->face['x'], 
              $this->face['x'], $this->face['w'], $this->face['w']);
    imagefilter ($canvas, IMG_FILTER_COLORIZE, 174, 192, 227);
    $this->_outImage($canvas);
  }
 
  public function resizeFace($width, $height) {
    $canvas = imagecreatetrueSFP_BOOTor($width, $width);
    imagecopyresized($canvas, $this->canvas, 0, 0, $this->face['x'], 
                     $this->face['y'], $width, $height, 
                     $this->face['w'], $this->face['w']);
    imagefilter ($canvas, IMG_FILTER_GRAYSCALE);
    imagefilter ($canvas, IMG_FILTER_COLORIZE, 0, 0, 175);
    $this->_outImage($canvas);
  }
 
  private function _outImage($canvas) {
    header('Content-type: image/jpeg');
    imagejpeg($canvas);
  }
}

$detector = new FaceModify('detection.dat');

if ($_FILES['fileToUpload']['error'] > 0) {
     echo "dfs";
    echo "Error: " . $_FILES['fileToUpload']['error'] . "<br />";
} else {
    // array of valid extensions
    $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
    // get extension of the uploaded file
    $fileExtension = strrchr($_FILES['fileToUpload']['name'], ".");
    // check if file Extension is on the list of allowed ones
    if (in_array($fileExtension, $validExtensions)) {
        // we are renaming the file so we can upload files with the same name
        // we simply put current timestamp in fron of the file name
        $time=time().'_' ;
        $newName = $time. $_FILES['fileToUpload']['name'];
        $destination =  'SFPUPLOAD/upload/'.$newName;
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $destination)) {
            //echo 'File ' .$newName. ' succesfully copied';
//            echo "File name: " . $_FILES['fileToUpload']['name'] . "<br />";
//    echo "File type: " . $_FILES['fileToUpload']['type'] . "<br />";
//    echo "File size: " . ($_FILES['fileToUpload']['size'] / 1024) . " Kb<br />";
//    echo "Temp path: " . $_FILES['fileToUpload']['tmp_name'];
$filename='upload/'.$time.$_FILES['fileToUpload']['name'] ;

 //$currentUrl = $_SERVER["SERVER_NAME"]; 
//$filename=$currentUrl.'/new/'.$filename;
$hold = $detector->faceDetect($filename);
$new_image_name = $filename;

$manipulator = new ImageManipulator($new_image_name);
        $x1 = $hold['x']; // 200 / 2
      $y1 = $hold['y']; // 130 / 2
       $x2 = $hold['x'] + $hold['w'] ; // 200 / 2
       $y2 = $hold['y'] + $hold['w']; // 130 / 2
      
     $height = $manipulator->getHeight();
    $width = $manipulator->getWidth();
    //echo $width."*".$height;
    $newImage = $manipulator->crop($x1, $y1, $x2, $y2);
        // saving file to uploads folder
        
        $manipulator->save($new_image_name);   
//print_r($hold);
//exit;
//$detector->doDetectGreedyBigToSmall();

//$detector->toJpeg();

//
        }
        

    } else {
        echo 'You must upload an image...';
    }
  
}

PHP--> 


</head>
<body style="position: inherit;">
 <div class="overlay_div" style="opacity: 0.40;">
        <img class="loading_img" src="//test.scampaigns.com/user_template/3754ab864ecc30b8-roelpro/712.GIF" />
  </div>
  <input type="hidden" class="width" value="<!--PHP echo $width;PHP-->"/>
  <input type="hidden" class="height" value="<!--PHP echo $height;PHP-->"/>
<form method="POST" enctype="multipart/form-data"  action="spreuk.php"id="myForm">
	<input type="hidden" name="img_val" id="img_val" value="" />
</form>

<div style="opacity: 0;">
 <div class="img-cont clearfix" id="target">
                <div class="front-img-cont textup"><img id="front-img" src=""/></div>
                <div class="front-img-cont textbellow"><img id="front-img" src=""/></div>
                <div class="back-img-cont">
                <img  id="back-img" src="SFP_Redirect/SFP_Link/<!--PHP echo $new_image_name;PHP--> 
"/></div>
                </div> </div>

<input type="hidden" id="uploadimgtext" value="SFP_Redirect/SFP_Link/<!--PHP echo $new_image_name;PHP--> 
"/>
</body>
</html>
