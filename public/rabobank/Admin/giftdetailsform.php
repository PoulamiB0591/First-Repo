<?php include 'header.php'; ?>
<head><title>GiftDetails Form</title>
<style type="text/css">                                       
</style>

</head>
<div class="container clearfix">
	<div class="panel">
    	<?php include 'navigation.php'; ?>        
        
    </div><!-- end of panel -->
	<div class="main_content">
 <input type="button" value="ADD New Gifts" onClick="window.location.href='giftdetailsform.php'" />   
<body onload="document.giftdetails.giftname.focus();">
<center><h2><p align="center" style="color:rgb(100,255,255)">Gift Details Form</p></h2>

<form name="giftdetails" method="post" action="database.php"  enctype="multipart/form-data">
<table align="center">
     <tr>
       <th><label for="name">Name:</label></th>
       <td><input type="text" name="giftname" id="giftname" placeholder="Enter Gift name" /></td>
     </tr>
     
     <tr>
		<th>Details:</th>
		<td><textarea name="details" id="details"></textarea></td>
     </tr>
     
     <tr>
        <th>Picture:</th>
        <td><input type="file" name="icon" class="nicefile" id="nicefile" />
        <div class="after-image-upload" style="display: none;"><img src="" alt="" id="devimage"/></div>
        <div><span style="display:none" class="icon-check"></span><span class="icon-cancel" id="image" style="display: none;"></span></div>
        <p>Please choose an image with 78x78 diemensions </p>
     </tr>


</table>

<input type='submit' name="submit" value='SAVE' />

</form>


</center>

    </div><!-- end of main_content -->
</div>

<?php 
include 'footer.php';
?>