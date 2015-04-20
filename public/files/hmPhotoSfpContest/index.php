<!--SFPPAGE-->
<!--PHP
session_unset();
    /*PHP DBCONNECT PHP*/
    PHP-->
<?php $returns['imagePath']="";?>
<!--PHP

$sfp = new SmartfanPage();
$select = 'id,imagePath,date,watermarkImage,fbName';


$dataselect =  array(
		'appId' => 'lNWyBR8YOcde4H9',
		'table' => 'PhotoHMContest',
		'field'=>$select,
		

);
$results =  $sfp->select_all($dataselect);
$countAll =  $sfp->count_all($dataselect);



PHP-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>H &amp; M</title>
		<meta name="description" content="Learn how to resize images using JavaScript and the HTML5 Canvas element using controls, commonly seen in photo editing applications." />
		<meta name="keywords" content="canvas, javascript, HTML5, resizing, images" />
		<meta name="author" content="Codrops" />
<!--SFPhide <link rel="shortcut icon" type="image/x-icon" href="SFPURLLINK/images/favicon.ico"> SFPhide-->

<link type="text/css" rel="stylesheet" href="SFPURLLINK/css/style.css" />
<!--SFPScript  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></SFPScript-->
<!--SFPScript type="text/javascript" src="SFPURLLINK/js/jquery.bxslider.js"></SFPScript-->

<!--SFPScript type="text/javascript">
$(function(){
		$('.bxslider').bxSlider();
	});
</SFPScript-->
<!--SFPScript type="text/javascript">
	$(function(){
		
		$("div.sfpphotoClick").click(function(){
			window.location.href = "spreuk.php";
		});
		
	});
</SFPScript-->


<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
</head>


<body>
<!--SFPhide <div id="fb-root"></div> SFPhide-->
 <!--SFPScript>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=781449978532230";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</SFPScript-->
    <div class="container SFPTWO_BACKGROUND">
    
    	<div class="top_section">
        <div class="SFPTWO_IMAGEEDIT logo"><a href="" title="H &amp; M"><img src="SFPURLLINK/images/logo.png" alt="" /></a></div><!-- end of logo -->
        <div class="SFPTWO_IMAGEEDIT top_banner"><img src="SFPURLLINK/images/top_banner.jpg" alt="" /></div><!-- end of top_banner -->
        </div>
        <div class="contest">
        
        <div class="text SFPTWO_TEXTEDIT">
        	<div class="SFPTWO_TAGEDIT explicit_edit">
            	<p>Doe mee met onze<br />fashion foto wedstrijd en win een<br />waardebon ter waardevan 100,-</p>
                <p class="hmSpanIndex">Vertelt jou foto een verhaal?  Wij zijn op zoek naar je spannendste<br />en meest mysterieuse foto waarop je dit verhaal meemaakt.<br />Tip! creativiteit wordt beloond.</span>
            </div>
            </div><!-- end of text -->
        
             
        	<div class="join">
            	 
        		<div class="click">
                <div class="SFPTWO_TEXTEDIT">
                <div class="SFPTWO_TAGEDIT explicit_edit">
                	<p>Doe mee!</p>
                    <span>Upload<br />je eigen<br />foto</span>
                    </div>
                     </div>
                    <div class="sfpphotoClick SFPTWO_IMAGEEDIT"><img src="SFPURLLINK/images/join_arrow.png" alt="" /></div>
                     
                </div><!-- end of click -->
                
            </div><!-- end of join --> 
            
            
                     
        </div><!-- end of contest -->
        <div class="banner">
        	<ul class="bxslider">
            	<!--PHP if($countAll!=0){  while($returns = mysql_fetch_assoc($results)){ PHP-->
            	<li>
            	<?php echo "Image is:".$returns['imagePath'];?>
                    <img src="<?php if($returns['imagePath'] == ""){ echo "SFPURLLINK/images/slider.jpg";}else{ echo "SFP_Link/".$returns['imagePath'];}?>" alt="" />
                    <div class="photo">
                    <div class="facebookSFPName">
                    <div class="SFPTWO_TEXTEDIT">
                        <div class="SFPTWO_TAGEDIT explicit_edit">Foto door: <!--PHP echo $returns['fbName'];  PHP--></div></div></div>
                        <div class="facebookSFPlike">
                        <div class="SFPTWO_TEXTEDIT" >
                            <span class="SFPTWO_TAGEDIT explicit_edit">Vind je deze foto leuk?</span></div>                      <!--SFPhide  <div class="FacebookLike"><div class="fb-like" data-href="<?php if($returns['watermarkImage']==""){echo "";}else{ echo "SFP_Link/". $returns['watermarkImage'];}?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></div> SFPhide-->

                           

                            </div>
                            

                    </div><!-- end of photo -->
                </li>
            	<!--PHP  } } else { echo '<li>';
            	echo '<img src="SFPURLLINK/images/slider.jpg" alt="" />';
                 echo   '<div class="photo">';
                   echo '<div class="facebookSFPName">';
                    echo '<div class="SFPTWO_TEXTEDIT">';
                      echo  '<div class="SFPTWO_TAGEDIT explicit_edit">Foto door: </div></div></div><div class="facebookSFPlike"><div class="SFPTWO_TEXTEDIT" ><span class="SFPTWO_TAGEDIT explicit_edit">Vind je deze foto leuk?</span></div><div><img src="SFPURLLINK/images/like.png" alt="" /></div></div> </div></li>';
            	}PHP-->
            </ul>
        </div><!-- end of banner -->
    <div class="footer">
        <div class="SFPTWO_TEXTEDIT">
        <div class="SFPTWO_TAGEDIT explicit_edit">
        	<p>Deze actie loopt van mei 2014 tot en met september 2014. Wij verloten in deze periode elke maand<br />een waardebon van 100,- tussen de meest creatieve inzendingen. H&amp;M bepaalt naar eigen maatstaven deze<br />creativiteit en over de uitslag kan niet worden gecorrespondeerd. Deelnemers ontvangen uiterlijk op de eerste<br />van de nieuwe maand per email bericht.</p>
            <span>Powered by</span></div></div>
            <div class="SFPTWO_IMAGEEDIT"><a href="#"><img src="SFPURLLINK/images/footer_logo.png" alt="" /></a></div>
        </div>
    </div><!-- end of container -->
</body>
</html>
