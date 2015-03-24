<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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
        
<div class="tool-tip"><h2 class="textedit" contenteditable="true">Fill in your details and win! </h2></div>
<div class="form-container jui-checkboxes-container" id="checkboxesInit2">
{{SFPFORM}}ACTION-[(complete.php)]
</div>
</div>

</body>

</html>
