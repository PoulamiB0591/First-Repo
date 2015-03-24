<?php
include 'connection.php';

$sql = mysql_query("SELECT * FROM `Rabo_BranchDetails`");
//$result = mysql_fetch_row($sql,MYSQL_ASSOC);
$index = 0;
while($row = mysql_fetch_assoc($sql)) 
{
     $Array[$index] = $row;
     //echo $Array[$index]['branch_name'];echo "<BR />";
     $index++;
     //echo $Array[$index]['branch_name'];echo "<BR />";
     

}
//echo $Array[2]['branch_name'];echo "<BR />";
//print_r($Array);

//exit;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Rabobank Interactieve Map</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/styles.css"></link>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
    <script src="../Admin/pan/test/libs/jquery.js"></script>
    <script src="../Admin/pan/dist/jquery.panzoom.js"></script>
    <script src="../Admin/pan/test/libs/jquery.mousewheel.js"></script>
    <script type="text/javascript">
    $(function(){
        $(".commonclass").click(function(){
            $(".popup-container").hide();
            $(this).find('div.popup-container').toggle();
        });
        $(".mothermap").click(function(){
            $(".popup-container").hide(); 
        });
    });
    function callfilter(pinclass)
    {
        $(".popup-container").hide();
        $(".filter").parent().hide();
        $("."+pinclass).parent().show();
        
    }
    </script>

</head>
<body>
<div id="fb-root"></div>
<script src="https://connect.facebook.net/en_US/sdk.js"></script>
<script>
FB.init
({
    appId  : '304054359785288',
    status : true,
    cookie : true,        
    oauth: true, 
    frictionlessRequests: true,
    version    : 'v2.2'
});

window.fbAsyncInit = function() 
{
    FB.Canvas.setSize();
     FB.Canvas.setAutoGrow();
}
function sizeChangeCallback() 
{
    FB.Canvas.setSize();
}
</script>
	<div id="menu-toggle">
		<img src="img/nav-btn.png" alt="">
	</div>
    
    <div class="color-grid">
   
    </div>

	<nav id="menu">
		
			<header>
				<h1>Legenda</h1>
			</header>
			
				<ul>
					<li><a onclick="callfilter('RV')" ><span><img src="img/icon-1.png" alt=""></span><p>Rabobankvestiging</p></a></li>
					<li style="display: none;"><a onclick="callfilter('GA')" ><div class="short-name">GA</div><p>Geldautomaat</p></a></li>
					<li style="display: none;"><a onclick="callfilter('SB')" ><div class="short-name" style="background:#b92c92">SB</div><p>Sealbagautomaat</p></a></li>
					<li style="display: none;"><a onclick="callfilter('SA')" ><div class="short-name" style="background:#f6892e">SA</div><p>Stortautomaat</p></a></li>
					<li style="display: none;"><a onclick="callfilter('MA')" ><div class="short-name" style="background:#ed0973">MA</div><p>Muntrolautomaat</p></a></li>
				</ul>
              
                
               
              		 <div class="nav-foot-infos">
                
<strong>Algemeen postadres</strong>
<p>Postbus <br>
            5384 ZG Heesch
            </p>
<strong>Algemene telefoonnummers</strong>
<p>Particulieren</p>
<h5>0412 - 45 77 77</h5>
<p>Bedrijven</p>
<h5>0412 - 45 78 00</h5>
</div>                 
                <div class="servicekantoren-wrap">
            <h2>Servicekantoren en adviescentra</h2>
            <p class="open-p" style="display:none">Alle praktische info over 
Rabobank Oss Bernheze' 
neerzetten</p>
 <p class="close-p" >Alle praktische info over Rabobank Oss Bernheze </p>

            </div>
		
	</nav>

	<div class="main-container clearfix">
    <div class="map-container">
   <section id="focal">
   <div class="panzoom">
   <img src="img/map.jpg" class="mothermap" alt="" border="0" />
 
     
    
<div class="gift-coontainer-col commonclass">
   <?php 
   $firstclass = "";
   if($Array[5]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[5]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[5]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[5]['MA'] == 1)
   {
         $firstclass .=" MA";
   } 
   if($Array[5]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
    ?>
   <a class="<?php echo $firstclass ?> filter"> <img src="img/tabo-map-pointer.png" alt=""></a>
   <div class="popup-container clearfix <?php echo $firstclass; ?>" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col"><?php echo $Array[5]['branch_name']; ?></div>
                <div class="right-col">
                <?php if($Array[5]['GA'] == 1){ ?>
                <a class="short-name"  >GA</a>
                <?php }?>
                <?php if($Array[5]['SB'] == 1){ ?>
                <a style="background:#b92c92" class="short-name" >SB</a>
                <?php }?>
                <?php if($Array[5]['SA'] == 1){ ?>
                <a style="background:#f6892e" class="short-name" >SA</a>
                <?php }?>
                <?php if($Array[5]['MA'] == 1){ ?>
                <a style="background:#ed0973" class="short-name" >MA</a>
                <?php }?>
                </div>
                </li>
            	<li class="clearfix"><?php echo $Array[5]['address']; ?></li>
            	<li class="clearfix"><?php echo $Array[5]['address1']; ?></li>
                
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[5]['Day1']; ?></span>
               <span class="right-col-2"><?php echo $Array[5]['Time1']; ?></span> 
                </li>
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[5]['Day2']; ?></span>
                <span class="right-col-2"><?php echo $Array[5]['Time2']; ?></span> 
                </li>
            	<li class="clearfix">
                <a href="tel:<?php echo $Array[5]['phone_No']; ?>" style="cursor: pointer;" class="bel"> <img alt="" src="img/icon-4.png"><p>Bel</p></a>
                <a  style="display: none;" class="gift-bel"> <img alt="" src="img/icon-5.png"><p>Ik wil deze prijs winnen!</p></a>
               
                </li>
                
                
            </ul>
            </div>
    </div>
   
</div>
<div class="gift-coontainer-col-2 commonclass">
   <?php 
   $firstclass = "";
   if($Array[6]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[6]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[6]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[6]['MA'] == 1)
   {
         $firstclass .=" MA";
   } 
   if($Array[6]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
    ?>
   <a class="<?php echo $firstclass ?> filter"><img src="img/tabo-map-pointer.png" alt="" /></a>
   <div class="popup-container clearfix" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col"><?php echo $Array[6]['branch_name']; ?></div>
                <div class="right-col">
                <?php if($Array[6]['GA'] == 1){ ?>
                <a class="short-name"  >GA</a>
                <?php }?>
                <?php if($Array[6]['SB'] == 1){ ?>
                <a style="background:#b92c92" class="short-name" >SB</a>
                <?php }?>
                <?php if($Array[6]['SA'] == 1){ ?>
                <a style="background:#f6892e" class="short-name" >SA</a>
                <?php }?>
                <?php if($Array[6]['MA'] == 1){ ?>
                <a style="background:#ed0973" class="short-name" >MA</a>
                <?php }?>
                </div>
                </li>
            	<li class="clearfix"><?php echo $Array[6]['address']; ?></li>
            	<li class="clearfix"><?php echo $Array[6]['address1']; ?></li>
                
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[6]['Day1']; ?></span>
               <span class="right-col-2"><?php echo $Array[6]['Time1']; ?></span> 
                </li>
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[6]['Day2']; ?></span>
                <span class="right-col-2"><?php echo $Array[6]['Time2']; ?></span> 
                </li>
            	<li class="clearfix">
                <a href="tel:<?php echo $Array[6]['phone_No']; ?>" style="cursor: pointer;" class="bel"> <img alt="" src="img/icon-4.png"><p>Bel</p></a>
                <a  style="display: none;" class="gift-bel"> <img alt="" src="img/icon-5.png"><p>Ik wil deze prijs winnen!</p></a>
               
                </li>
                
                
            </ul>
            </div>
    </div>
</div>
<div class="gift-coontainer-col-3 commonclass">
  <?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
  <a class="<?php echo $firstclass; ?> filter"><img src="img/tabo-map-pointer.png" alt="" /></a>
  <div class="popup-container clearfix " style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col"><?php echo $Array[1]['branch_name']; ?></div>
                <div class="right-col">
                <?php if($Array[1]['GA'] == 1){ ?>
                <a class="short-name"  >GA</a>
                <?php }?>
                <?php if($Array[1]['SB'] == 1){ ?>
                <a style="background:#b92c92" class="short-name" >SB</a>
                <?php }?>
                <?php if($Array[1]['SA'] == 1){ ?>
                <a style="background:#f6892e" class="short-name" >SA</a>
                <?php }?>
                <?php if($Array[1]['MA'] == 1){ ?>
                <a style="background:#ed0973" class="short-name" >MA</a>
                <?php }?>
                </div>
                </li>
            	<li class="clearfix"><?php echo $Array[1]['address']; ?></li>
            	<li class="clearfix"><?php echo $Array[1]['address1']; ?></li>
                
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[1]['Day1']; ?></span>
               <span class="right-col-2"><?php echo $Array[1]['Time1']; ?></span> 
                </li>
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[1]['Day2']; ?></span>
                <span class="right-col-2"><?php echo $Array[1]['Time2']; ?></span> 
                </li>
            	<li class="clearfix">
                <a href="tel:<?php echo $Array[1]['phone_No']; ?>" style="cursor: pointer;" class="bel"> <img alt="" src="img/icon-4.png"><p>Bel</p></a>
                <a  style="display: none;" class="gift-bel"> <img alt="" src="img/icon-5.png"><p>Ik wil deze prijs winnen!</p></a>
               
                </li>
                
                
            </ul>
            </div>
    </div>
</div>

<div class="gift-coontainer-col-4 commonclass">
<?php 
   $firstclass = "";
   if($Array[4]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[4]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[4]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[4]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[4]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
<a class="<?php echo $firstclass; ?> filter"><img src="img/tabo-map-pointer.png" alt="" /></a>

  <div class="popup-container clearfix" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col"><?php echo $Array[4]['branch_name']; ?></div>
                <div class="right-col">
                <?php if($Array[4]['GA'] == 1){ ?>
                <a class="short-name"  >GA</a>
                <?php }?>
                <?php if($Array[4]['SB'] == 1){ ?>
                <a style="background:#b92c92" class="short-name" >SB</a>
                <?php }?>
                <?php if($Array[4]['SA'] == 1){ ?>
                <a style="background:#f6892e" class="short-name" >SA</a>
                <?php }?>
                <?php if($Array[4]['MA'] == 1){ ?>
                <a style="background:#ed0973" class="short-name" >MA</a>
                <?php }?>
                </div>
                </li>
            	<li class="clearfix"><?php echo $Array[4]['address']; ?></li>
            	<li class="clearfix"><?php echo $Array[4]['address1']; ?></li>
                
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[4]['Day1']; ?></span>
               <span class="right-col-2"><?php echo $Array[4]['Time1']; ?></span> 
                </li>
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[4]['Day2']; ?></span>
                <span class="right-col-2"><?php echo $Array[4]['Time2']; ?></span> 
                </li>
            	<li class="clearfix">
                <a href="tel:<?php echo $Array[4]['phone_No']; ?>" style="cursor: pointer;" class="bel"> <img alt="" src="img/icon-4.png"><p>Bel</p></a>
                <a  style="display: none;" class="gift-bel"> <img alt="" src="img/icon-5.png"><p>Ik wil deze prijs winnen!</p></a>
               
                </li>
                
                
            </ul>
            </div>
    </div>
</div>

<div class="gift-coontainer-col-5 commonclass">
<?php 
   $firstclass = "";
   if($Array[0]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[0]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[0]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[0]['MA'] == 1)
   {
         $firstclass .=" MA";
   } 
   if($Array[0]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
  <a class="<?php echo $firstclass; ?> filter"><img src="img/tabo-map-pointer.png" alt=""></a>
   <div class="popup-container clearfix" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col"><?php echo $Array[0]['branch_name']; ?></div>
                <div class="right-col">
                <?php if($Array[0]['GA'] == 1){ ?>
                <a class="short-name"  >GA</a>
                <?php }?>
                <?php if($Array[0]['SB'] == 1){ ?>
                <a style="background:#b92c92" class="short-name" >SB</a>
                <?php }?>
                <?php if($Array[0]['SA'] == 1){ ?>
                <a style="background:#f6892e" class="short-name" >SA</a>
                <?php }?>
                <?php if($Array[0]['MA'] == 1){ ?>
                <a style="background:#ed0973" class="short-name" >MA</a>
                <?php }?>
                </div>
                </li>
            	<li class="clearfix"><?php echo $Array[0]['address']; ?></li>
            	<li class="clearfix"><?php echo $Array[0]['address1']; ?></li>
                
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[0]['Day1']; ?></span>
               <span class="right-col-2"><?php echo $Array[0]['Time1']; ?></span> 
                </li>
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[0]['Day2']; ?></span>
                <span class="right-col-2"><?php echo $Array[0]['Time2']; ?></span> 
                </li>
            	<li class="clearfix">
                <a href="tel:<?php echo $Array[0]['phone_No']; ?>" style="cursor: pointer;" class="bel"> <img alt="" src="img/icon-4.png"><p>Bel</p></a>
                <a  style="display: none;" class="gift-bel"> <img alt="" src="img/icon-5.png"><p>Ik wil deze prijs winnen!</p></a>
               
                </li>
                
                
            </ul>
            </div>
    </div>
</div>
<div class="gift-coontainer-col-6 commonclass">
 <?php 
   $firstclass = "";
   if($Array[3]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[3]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[3]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[3]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[3]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
 <a class="<?php echo $firstclass; ?> filter"><img src="img/tabo-map-pointer.png" alt=""></a>
  <div class="popup-container clearfix" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col"><?php echo $Array[3]['branch_name']; ?></div>
                <div class="right-col">
                <?php if($Array[3]['GA'] == 1){ ?>
                <a class="short-name"  >GA</a>
                <?php }?>
                <?php if($Array[3]['SB'] == 1){ ?>
                <a style="background:#b92c92" class="short-name" >SB</a>
                <?php }?>
                <?php if($Array[3]['SA'] == 1){ ?>
                <a style="background:#f6892e" class="short-name" >SA</a>
                <?php }?>
                <?php if($Array[3]['MA'] == 1){ ?>
                <a style="background:#ed0973" class="short-name" >MA</a>
                <?php }?>
                </div>
                </li>
            	<li class="clearfix"><?php echo $Array[3]['address']; ?></li>
            	<li class="clearfix"><?php echo $Array[3]['address1']; ?></li>
                
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[3]['Day1']; ?></span>
               <span class="right-col-2"><?php echo $Array[3]['Time1']; ?></span> 
                </li>
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[3]['Day2']; ?></span>
                <span class="right-col-2"><?php echo $Array[3]['Time2']; ?></span> 
                </li>
            	<li class="clearfix">
                <a href="tel:<?php echo $Array[3]['phone_No']; ?>" style="cursor: pointer;" class="bel"> <img alt="" src="img/icon-4.png"><p>Bel</p></a>
                <a  style="display: none;" class="gift-bel"> <img alt="" src="img/icon-5.png"><p>Ik wil deze prijs winnen!</p></a>
               
                </li>
                
                
            </ul>
            </div>
    </div>
</div>
<div class="gift-coontainer-col-7 commonclass">
  <?php 
   $firstclass = "";
   if($Array[7]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[7]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[7]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[7]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[7]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
  <a class="<?php echo $firstclass; ?> filter"> <img src="img/tabo-map-pointer.png" alt=""></a>
  <div class="popup-container clearfix" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col"><?php echo $Array[7]['branch_name']; ?></div>
                <div class="right-col">
                <?php if($Array[7]['GA'] == 1){ ?>
                <a class="short-name"  >GA</a>
                <?php }?>
                <?php if($Array[7]['SB'] == 1){ ?>
                <a style="background:#b92c92" class="short-name" >SB</a>
                <?php }?>
                <?php if($Array[7]['SA'] == 1){ ?>
                <a style="background:#f6892e" class="short-name" >SA</a>
                <?php }?>
                <?php if($Array[7]['MA'] == 1){ ?>
                <a style="background:#ed0973" class="short-name" >MA</a>
                <?php }?>
                </div>
                </li>
            	<li class="clearfix"><?php echo $Array[7]['address']; ?></li>
            	<li class="clearfix"><?php echo $Array[7]['address1']; ?></li>
                
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[7]['Day1']; ?></span>
               <span class="right-col-2"><?php echo $Array[7]['Time1']; ?></span> 
                </li>
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[7]['Day2']; ?></span>
                <span class="right-col-2"><?php echo $Array[7]['Time2']; ?></span> 
                </li>
            	<li class="clearfix">
                <a href="tel:<?php echo $Array[7]['phone_No']; ?>" style="cursor: pointer;" class="bel"> <img alt="" src="img/icon-4.png"><p>Bel</p></a>
                <a  style="display: none;" class="gift-bel"> <img alt="" src="img/icon-5.png"><p>Ik wil deze prijs winnen!</p></a>
               
                </li>
                
                
            </ul>
            </div>
    </div>
</div>

<div class="gift-coontainer-col-8 commonclass">
  <?php 
   $firstclass = "";
   if($Array[2]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[2]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[2]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[2]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[2]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
  <a class="<?php echo $firstclass; ?> filter"> <img src="img/tabo-map-pointer.png" alt=""></a>
  <div class="popup-container clearfix" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col"><?php echo $Array[7]['branch_name']; ?></div>
                <div class="right-col">
                <?php if($Array[2]['GA'] == 1){ ?>
                <a class="short-name"  >GA</a>
                <?php }?>
                <?php if($Array[2]['SB'] == 1){ ?>
                <a style="background:#b92c92" class="short-name" >SB</a>
                <?php }?>
                <?php if($Array[2]['SA'] == 1){ ?>
                <a style="background:#f6892e" class="short-name" >SA</a>
                <?php }?>
                <?php if($Array[2]['MA'] == 1){ ?>
                <a style="background:#ed0973" class="short-name" >MA</a>
                <?php }?>
                </div>
                </li>
            	<li class="clearfix"><?php echo $Array[2]['address']; ?></li>
            	<li class="clearfix"><?php echo $Array[2]['address1']; ?></li>
                
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[2]['Day1']; ?></span>
               <span class="right-col-2"><?php echo $Array[2]['Time1']; ?></span> 
                </li>
            	<li class="clearfix"><span class="left-col-2"><?php echo $Array[2]['Day2']; ?></span>
                <span class="right-col-2"><?php echo $Array[2]['Time2']; ?></span> 
                </li>
            	<li class="clearfix">
                <a href="tel:<?php echo $Array[2]['phone_No']; ?>" style="cursor: pointer;" class="bel"> <img alt="" src="img/icon-4.png"><p>Bel</p></a>
                <a  style="display: none;" class="gift-bel"> <img alt="" src="img/icon-5.png"><p>Ik wil deze prijs winnen!</p></a>
               
                </li>
                
                
            </ul>
            </div>
    </div>
</div>


<div class="image-map-ticker-container commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA SB <?php //echo $firstclass; ?> filter"><img src="img/add-tik-1.jpg" alt="" /></a>

<div class="popup-container clearfix map-ticker-popup-left" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col" style="display: none;">
                <?php if($Array[7]['GA'] == 1){ ?>
                <a class="short-name"  >GA</a>
                <?php }?>
                <?php if($Array[7]['SB'] == 1){ ?>
                <a style="background:#b92c92" class="short-name" >SB</a>
                <?php }?>
                <?php if($Array[7]['SA'] == 1){ ?>
                <a style="background:#f6892e" class="short-name" >SA</a>
                <?php }?>
                <?php if($Array[7]['MA'] == 1){ ?>
                <a style="background:#ed0973" class="short-name" >MA</a>
                <?php }?>
                </div>
                <div class="right-col">
                    <a class="short-name"  >GA</a>
                    <a style="background:#b92c92" class="short-name" >SB</a>
                </div>
                </li>
            	<li class="clearfix">Mgr. Zwijsenstraat 1</li>
            	<li class="clearfix">5371 BS Ravenstein</li>
                 
            </ul>
            </div>
    </div>

</div>



<div class="image-map-ticker-container-2 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA <?php //echo $firstclass; ?> filter"><img src="img/add-tik-2.jpg" alt="" /></a>

<div class="popup-container clearfix map-ticker-popup-left" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;"> Heesch</div>
                <div class="right-col" style="display: none;">
                <?php if($Array[7]['GA'] == 1){ ?>
                <a class="short-name"  >GA</a>
                <?php }?>
                <?php if($Array[7]['SB'] == 1){ ?>
                <a style="background:#b92c92" class="short-name" >SB</a>
                <?php }?>
                <?php if($Array[7]['SA'] == 1){ ?>
                <a style="background:#f6892e" class="short-name" >SA</a>
                <?php }?>
                <?php if($Array[7]['MA'] == 1){ ?>
                <a style="background:#ed0973" class="short-name" >MA</a>
                <?php }?>
                </div>
                <div class="right-col">
                <a class="short-name"  >GA</a>
                </div>
                </li>
            	<li class="clearfix">Rogstraat 12a</li>
            	<li class="clearfix">5373 AT Herpen</li>
                
            </ul>
            </div>
    </div>
</div>



<div class="image-map-ticker-container-3 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA SB <?php //echo $firstclass; ?> filter"><img src="img/add-tik-3.jpg" alt="" /></a>

<div class="popup-container clearfix map-ticker-popup" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                
                <a class="short-name"  >GA</a>
                <a style="background:#b92c92" class="short-name" >SB</a>
                </div>
                </li>
            	<li class="clearfix">Sportstraat 3</li>
            	<li class="clearfix">5351 BZ Berghem</li>
                
            </ul>
            </div>
    </div>
</div>


<div class="image-map-ticker-container-4 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA <?php //echo $firstclass; ?> filter"><img src="img/add-tik-4.jpg" alt=""></a>

<div class="popup-container clearfix map-ticker-popup extra-4" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                <a class="short-name"  >GA</a>
                </div>
                </li>
            	<li class="clearfix">Oude Molenstraat 47-49</li>
            	<li class="clearfix">5342 GB Oss</li>
                
            	
                
                
            </ul>
            </div>
    </div>
</div>

<div class="image-map-ticker-container-5 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA <?php //echo $firstclass; ?> filter"><img src="img/add-tik-5.jpg" alt=""></a>

<div class="popup-container clearfix map-ticker-popup" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                
                <a class="short-name"  >GA</a>
                
                </div>
                </li>
            	<li class="clearfix">Wolfskooi 57</li>
            	<li class="clearfix">5345 MH Oss</li>
                
            	
                
                
            </ul>
            </div>
    </div>
</div>
<div class="image-map-ticker-container-6 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA <?php //echo $firstclass; ?> filter"><img src="img/add-tik-6.jpg" alt=""></a>

<div class="popup-container clearfix map-ticker-popup" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                    <a class="short-name"  >GA</a>
                </div>
                </li>
            	<li class="clearfix">Sterrebos 30</li>
            	<li class="clearfix">5344 AM Oss</li>
                
            	
                
                
            </ul>
            </div>
    </div>
</div>
<div class="image-map-ticker-container-7 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA SB <?php // echo $firstclass; ?> filter"><img src="img/add-tik-7.jpg" alt=""></a>

<div class="popup-container clearfix map-ticker-popup" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                
                <a class="short-name"  >GA</a>
                <a style="background:#b92c92" class="short-name" >SB</a>
                </div>
                </li>
            	<li class="clearfix">Dorpsplein 1</li>
            	<li class="clearfix">5386 CL Geffen</li>
                
            	
                
                
            </ul>
            </div>
    </div>
</div>    
    
<div class="image-map-ticker-container-8 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
<a  class="map-ticker-1 GA <?php //echo $firstclass; ?> filter"><img src="img/add-tik-8.jpg" alt=""></a>

<div class="popup-container clearfix map-ticker-popup" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                
                <a class="short-name"  >GA</a>
                
                </div>
                </li>
            	<li class="clearfix">Weerscheut 71</li>
            	<li class="clearfix">5381 GT Vinkel</li>
                
            	
                
                
            </ul>
            </div>
    </div>
</div>  



<div class="image-map-ticker-container-9 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA <?php //echo $firstclass; ?> filter"><img src="img/add-tik-9.jpg" alt=""></a>

<div class="popup-container clearfix map-ticker-popup" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                
                <a class="short-name"  >GA</a>
                </div>
                </li>
            	<li class="clearfix"> Schaapsdijk 27</li>
            	<li class="clearfix">5472 PD Loosbroek</li>
                
            	
                
                
            </ul>
            </div>
    </div>
</div>   

<div class="image-map-ticker-container-10 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA SB <?php // echo $firstclass; ?> filter"><img src="img/add-tik-10.jpg" alt=""></a>

<div class="popup-container clearfix map-ticker-popup" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                
                <a class="short-name"  >GA</a>
                <a style="background:#b92c92" class="short-name" >SB</a>
                </div>
                </li>
            	<li class="clearfix">Parkstraat 6</li>
            	<li class="clearfix">5388 HS Nistelrode</li>
                
            	
                
                
            </ul>
            </div>
    </div>
</div> 
 <div class="image-map-ticker-container-11 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA<?php // echo $firstclass; ?> filter"><img src="img/add-tik-11.jpg" alt=""></a>

<div class="popup-container clearfix map-ticker-popup" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                
                <a class="short-name"  >GA</a>
                
                </div>
                </li>
                	<li class="clearfix">Provincialeweg 20</li>
                	<li class="clearfix">5503 HG Veldhoven</li>
             </ul>
            </div>
    </div>
</div> 

<div class="image-map-ticker-container-12 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA SB <?php // echo $firstclass; ?> filter"><img src="img/add-tik-12.jpg" alt=""></a>

<div class="popup-container clearfix map-ticker-popup" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                
                <a class="short-name"  >GA</a>
                <a style="background:#b92c92" class="short-name" >SB</a>
                </div>

                </li>
                	<li class="clearfix">Molenstraat 5</li>
                	<li class="clearfix">5397 EK Lith/li>
             </ul>
            </div>
    </div>
</div>

<div class="image-map-ticker-container-13 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA <?php // echo $firstclass; ?> filter"><img src="img/add-tik-13.jpg" alt=""></a>

<div class="popup-container clearfix map-ticker-popup" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                
                <a class="short-name"  >GA</a>
                
                </div>

                </li>
                	<li class="clearfix">Schoolstraat 14</li>
                	<li class="clearfix">5476 KK Vorstenbosch</li>
             </ul>
            </div>
    </div>
</div>

<div class="image-map-ticker-container-14 commonclass">
<?php 
   $firstclass = "";
   if($Array[1]['GA'] == 1)
   { 
        $firstclass = "GA";
   }
   if($Array[1]['SB'] == 1)
   {
         $firstclass .=" SB";
   }
   if($Array[1]['SA'] == 1)
   {
         $firstclass .=" SA";
   }
   if($Array[1]['MA'] == 1)
   {
         $firstclass .=" MA";
   }
   if($Array[1]['RV'] == 1)
   {
         $firstclass .=" RV";
   } 
   ?>
   
<a  class="map-ticker-1 GA <?php // echo $firstclass; ?> filter"><img src="img/add-tik-14.jpg" alt="" /></a>

<div class="popup-container clearfix map-ticker-popup-left" style="display: none;">
    <div class="service-infos-col clearfix">
            <ul>
            	<li class="clearfix">
                <div class="left-col" style="display: none;">Heesch</div>
                <div class="right-col">
                
                <a class="short-name"  >GA</a>
                
                </div>


                </li>
                	<li class="clearfix">Nieuw Heijtmorgen 20e</li>
                	<li class="clearfix">5375 AK Reek</li>
             </ul>
            </div>
    </div>
</div>
 
    <section class="clearfix" id="bestellen-col" style="display:none">
           <div class="bestellen-wrap-1">
            <h2>Bestellen</h2>
            </div>
            
<div class="bestellen-form-container">
<h4>Bestel uw kadootje nu direct</h4>
<figure><img alt="" src="img/img-1.jpg"></figure>
<ul>
<li class="clearfix"><label for="naam">Naam<sup>*</sup> </label>
<input type="text" name="naam">
</li>
<li class="clearfix"><label for="Adres">Adres<sup>*</sup> </label>
<input type="text" name="Adres">
</li>

<li class="clearfix"><label for="Telefoonnummer">Telefoonnummer<sup>*</sup> </label>
<input type="text" name="Telefoonnummer">
</li>

<li class="clearfix"><label for="Emailadres">Emailadres<sup>*</sup> </label>
<input type="text" name="Emailadres">
</li>

<li class="clearfix"><button  class="bekijk-bt"><img src="img/icon-2.png" alt=""><span>Verzenden</span></button>
</li>
</ul>
</div>
				
			</section>
    
    

  </div> 
<script>
        (function() {
          var $section = $('#focal');
          var $panzoom = $section.find('.panzoom').panzoom();
          $panzoom.parent().on('mousewheel.focal', function( e ) {
            e.preventDefault();
            var delta = e.delta || e.originalEvent.wheelDelta;
            var zoomOut = delta ? delta < 0 : e.originalEvent.deltaY > 0;
            $panzoom.panzoom('zoom', zoomOut, {
              increment: 0.1,
              animate: false,
              focal: e
            });
          });
        })();
      </script>
    </section> 
    <div class="map-list">
<img src="img/legenda.jpg" alt="" border="0" usemap="#Map"/>
<map name="Map">
 
  <area shape="poly" coords="198,42,307,46,310,57,302,64,291,60,271,59,253,61,232,61,213,61,196,61,185,64,171,67,162,65,153,57,154,48,166,38,168,30,170,24,178,28,178,34,177,33" >
  <area shape="poly" coords="203,78,278,80,291,80,294,91,210,93,176,100,162,98,156,84,160,71,178,70" >
  
  <area shape="poly" coords="205,112,280,114,293,114,296,125,212,127,178,134,164,132,158,118,162,105,180,104" >
  
  <area shape="poly" coords="203,146,278,148,291,148,294,159,210,161,176,168,162,166,156,152,160,139,178,138" >
  <area shape="poly" coords="207,179,282,181,295,181,298,192,214,194,180,201,166,199,160,185,164,172,182,171" >
</map>
   </div> 
    </div>
    </div>
    
</body>
</html>