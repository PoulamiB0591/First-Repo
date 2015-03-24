
<?php
include 'connection.php';

if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from Rabo_giftdetails where id ='$id'");
if($query1)
{
	echo "<script>window.location.href='list_gift.php'</script>";
}
}
?>
