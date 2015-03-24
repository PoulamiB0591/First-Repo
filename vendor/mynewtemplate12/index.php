<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css">
<!--<link rel="stylesheet" href="http://localhost/zf_new/public/css/styles.css"/>
<link rel="stylesheet" href="http://localhost/zf_new/public/css/textarea.css"/>---->

<link rel="stylesheet" type="text/css" media="all" href="css/jui.checkboxes.css"/>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script src = "http://js.nicedit.com/nicEdit-latest.js"></script>--->
 <?php 
       include('include.php');?>

<!---<script type="text/javascript" src="http://localhost/zf_new/public/js/jquery.form.js"></script>
<script type="text/javascript" src="http://localhost/zf_new/public/js/style.js"></script>---->
</head>

<body>
<div class="details-n-winn-wrapper">
<div class="imgedit"><img id="images1" src="img/top-img.jpg" alt=""/></div> 
         
        
<div class="tool-tip"><h2 class="textedit">Fill in your details and win! </h2></div>
<div class="form-container jui-checkboxes-container" id="checkboxesInit2">
<form action="">
<ul>
	<li><label for="">EmaiL address</label><input name="" type="text"></li>
	<li><label for="">What kind of campaign are you Looking for? </label>
    <div class="jui-checkbox-row"> <span class="jui-checkbox" tabindex="0"></span>
    <label>option</label>
  </div>
  <div class="jui-checkbox-row"> <span class="jui-checkbox" tabindex="0"></span>
    <label>option</label>
  </div>
  <div class="jui-checkbox-row"> <span class="jui-checkbox" tabindex="0"></span>
    <label>option</label>
  </div>
    </li>
	<li><label for="">Your message</label><textarea name="" cols="" rows=""></textarea> </li>
	<li><input name="" type="submit" value="Send"></li>
</ul>
</form>
</div>
</div>

<script src="js/jquery.jui.checkboxes.js"></script> 
<script type="text/javascript">
           $("#checkboxesInit2").juicheckboxes();
        </script>
</body>

</html>
