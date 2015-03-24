
<?php
include 'connection.php';
include 'header.php';
?>
<head><title>GiftDetails Form</title>
<style type="text/css">                                       
</style>

</head>
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
           // $$time=time();
            $giftname=$_POST["giftname"];
            $giftdetails=$_POST["details"];
            $iconname=$_FILES['icon']['name'];
            $tempname=$_FILES['icon']['tmp_name'];
            $a=$_SERVER['DOCUMENT_ROOT'];
            $rpath=$path='http://scampaigns.com/sfpApp/Rabobank/Admin/images/'.$iconname;
            $path=$_SERVER['DOCUMENT_ROOT'].'/sfpApp/'.'Rabobank/'.'Admin/'.'images/'.$iconname;
            if(move_uploaded_file($tempname,$path)){
            
$query3=mysql_query("update Rabo_giftdetails set giftname='$giftname', details='$giftdetails',icon='$rpath' where id='$id'");
if($query3)
{
echo "<script>window.location.href='list_gift.php'</script>";
}
}
else
{
$query1=mysql_query("select * from Rabo_giftdetails where id='$id'");
$query2=mysql_fetch_array($query1);
$prpath=$query2['icon'];
$query4=mysql_query("update Rabo_giftdetails set giftname='$giftname', details='$giftdetails',icon='$prpath' where id='$id'");
echo "<script>window.location.href='list_gift.php'</script>";   
}
}
$query1=mysql_query("select * from Rabo_giftdetails where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<div class="container clearfix">
	<div class="panel">
    	<?php include 'navigation.php'; ?>        
        
    </div><!-- end of panel -->
	<div class="main_content">
    
<body onload="document.giftdetails.giftname.focus();">
<center><h2><p align="center" style="color:rgb(100,255,255)">Gift Details Form</p></h2>

<form name="giftdetails" method="post" action=""  enctype="multipart/form-data">
<table align="center">
     <tr>
       <th><label for="name">Name:</label></th>
       <td><input type="text" name="giftname" id="giftname" placeholder="Enter Gift name" value="<?php echo $query2['giftname'];?>"/></td>
     </tr>
     
     <tr>
		<th>Details:</th>
		<td><textarea name="details" id="details" rows="4" cols="20"><?php echo $query2['details'];?></textarea></td>
     </tr>
     
     <tr>
        <th>Picture:</th>
        <td><input type="file" name="icon" class="nicefile" id="nicefile" />
        <div class="after-image-upload" style="display: none;"><img src="" alt="" id="devimage"/></div>
        <img src="<?php echo $query2['icon']; ?>" style="height: 70; height: 70px; inline-box-align: last;"/>
        <div><span style="display:none" class="icon-check"></span><span class="icon-cancel" id="image" style="display: none;"></span></div>
        <p>Please choose an image with 78x78 diemensions </p>
     </tr>


</table>

<input type='submit' name="submit" value='SAVE' />

</form>


</center>

    </div><!-- end of main_content -->
    <? } ?>
</div>

<?php 
include 'footer.php';
?>