<!--PHP
session_start();
    /*PHP DBCONNECT PHP*/
    PHP-->
<?php


//Get the base-64 string from data


$waterMarkImage = $_POST['SfpDefault'];
//echo $waterMarkImage;exit;
//$waterMarkImage = str_replace("//","http://",$waterMarkImage);
$firstName =  $_POST['fbFname'];
$lastName = $_POST['fbLname'];

define('WATERMARK_OVERLAY_IMAGE', $waterMarkImage);
define('WATERMARK_OVERLAY_OPACITY', 100);
define('WATERMARK_OUTPUT_QUALITY', 100);
define('UPLOADED_IMAGE_DESTINATION', 'upload/');
define('PROCESSED_IMAGE_DESTINATION', 'watermark/');


$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
$unencodedData=base64_decode($filteredData);
$imgs='img'.rand().'.png';
file_put_contents(UPLOADED_IMAGE_DESTINATION .$imgs, $unencodedData);

$uploaded_file_path = UPLOADED_IMAGE_DESTINATION . $imgs;
$processed_file_path = PROCESSED_IMAGE_DESTINATION . preg_replace('/\\.[^\\.]+$/', '.jpg', $imgs);
//$result = create_watermark($uploaded_file_path, $processed_file_path);

$targetPath = $uploaded_file_path;
$DestinationFile = WATERMARK_OVERLAY_IMAGE;
$newcopy = $processed_file_path;

$result=watermark_image($targetPath, $DestinationFile, $newcopy);


$date = date('Y-m-d H:i:s');
$sfp = new SmartfanPage();
$data =array(

		array(
				array('field'=>'imagePath',
						'value'=>$uploaded_file_path),
				array('field'=>'date',
						'value'=>$date),
				array('field'=>'watermarkImage',
						'value'=>$processed_file_path),
				array('field'=>'fbName',
						'value'=>$firstName." ".$lastName	)
		)
);


 

$datainsert =  array(
		'appId' => 'lNWyBR8YOcde4H9',
		'table' => 'PhotoHMContest',
		'field' => $data

);


$insert = $sfp->insert_table($datainsert);
$lastId = mysql_insert_id();
$_SESSION['lastId']=$lastId;
header("Location: bedakant.php");





function watermark_image($target_file_passed, $wtrmrk_file_passed, $newcopy)
{
	$target = $target_file_passed;
	$wtrmrk_file = $wtrmrk_file_passed;
	$explodedFile = getImageType($wtrmrk_file_passed);
	$explodedTargetFile = getImageType($target);
	/************Checking the type Water mark**************/
	if($explodedFile=='png')
	{
		$watermark = imagecreatefrompng($wtrmrk_file);
	}
	if($explodedFile=='jpeg' || $explodedFile[1]=='jpg')
	{
		$watermark = imagecreatefromjpeg($wtrmrk_file);
	}

	if($explodedFile=='gif')
	{
		$watermark = imagecreatefromgif($wtrmrk_file);
	}
	/***************************************************/
	imagealphablending($watermark, false);
	imagesavealpha($watermark, true);
	/***************Checking the type of target file****************/
	if($explodedTargetFile=='png')
	{
		$img = imagecreatefrompng($target);
	}
	if($explodedTargetFile=='jpeg' || $explodedTargetFile[1]=='jpg')
	{
		$img = imagecreatefromjpeg($target);
	}
	if($explodedTargetFile=='gif')
	{
		$img = imagecreatefromgif($target);
	}
	/***************************************************************/
	$img_w = imagesx($img);
	$img_h = imagesy($img);
	$wtrmrk_w = imagesx($watermark);
	$wtrmrk_h = imagesy($watermark);
	$dst_x = $img_w - $wtrmrk_w; // For centering the watermark on any image
	$dst_y = $img_h - $wtrmrk_h; // For centering the watermark on any image
	imagecopy($img, $watermark, $dst_x, $dst_y, 0, 0, $wtrmrk_w, $wtrmrk_h);
	/***************Checking the type of target file****************/
	if($explodedTargetFile=='png')
		
	{
		imagepng($img, $newcopy);
	}
	if($explodedTargetFile=='jpeg' || $explodedTargetFile=='jpg')
	{
		imagejpeg($img, $newcopy, 100);
	}
	if($explodedTargetFile=='gif')
	{
		imagegif($img, $newcopy, 100);
	}
	/****************************************************************/
	imagedestroy($img);
	imagedestroy($watermark);
}




function getImageType($image_name){
	return end(explode('.',$image_name));
}





?>

