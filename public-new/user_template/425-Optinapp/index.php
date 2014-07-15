<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<?php 
       include('../include.php');?>
<link rel="stylesheet" href="<?php echo $imgurl; ?>/css/style.css">
<!--<link rel="stylesheet" href="http://localhost/zf_new/public/css/styles.css"/>
<link rel="stylesheet" href="http://localhost/zf_new/public/css/textarea.css"/>---->

<link rel="stylesheet" type="text/css" media="all" href="<?php echo $imgurl; ?>/css/jui.checkboxes.css"/>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->
</head>

<body>
<div class="details-n-winn-wrapper">
<div class="imgedit"><img id="images1" src="<?php echo $imgurl; ?>/img/top-img.jpg" alt=""/></div> 
<div class="imgedit"><img id="images1" src="<?php echo $imgurl; ?>/img/top-img.jpg" alt=""/></div>         
        
<div class="tool-tip"><h2 class="textedit">Fill in your details and win! </h2></div>
<div class="form-container jui-checkboxes-container" id="checkboxesInit2">
<form action="" class="editform">
<ul>
	<li><label for="">EmaiL address</label><input name="" type="text"></li>
	<li><label for="">What kind of campaign are you Looking for? </label>
    <div id="checksboxes" class="checksboxes">
    <div class="jui-checkbox-row"> 
        <span class="checkboxWrapper">
            <input type="checkbox" value="1" />
        </span>
    <p>option</p>
    </div>
    <div class="jui-checkbox-row"> 
        <span class="checkboxWrapper">
            <input type="checkbox" value="2" />
        </span>
    <p>option</p>
    </div>
    <div class="jui-checkbox-row"> 
        <span class="checkboxWrapper">
            <input type="checkbox" value="3" />
        </span>
    <p>option</p>
    </div>
    </div>
    </li>
	<li><label for="">Your message</label><textarea name="" cols="" rows=""></textarea> </li>
	<li><input name="" type="submit" value="Send"></li>
</ul>
</form>
</div>
</div>

</body>

</html>
