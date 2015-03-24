<?php
include 'connection.php';

//$time=time();
$giftname=$_POST["giftname"];
$giftdetails=$_POST["details"];
$iconname=$_FILES['icon']['name'];
$tempname=$_FILES['icon']['tmp_name'];
$a=$_SERVER['DOCUMENT_ROOT'];
$rpath=$path='http://scampaigns.com/sfpApp/Rabobank/Admin/images/'.$iconname;
$path=$_SERVER['DOCUMENT_ROOT'].'/sfpApp/'.'Rabobank/'.'Admin/'.'images/'.$iconname;
move_uploaded_file($tempname,$path);
if($giftname != '' && $giftdetails != '' && $iconname != '' ) {
if ($db_found) {
$SQL = "INSERT INTO  Rabo_giftdetails (giftname, details, icon) VALUES ('$giftname', '$giftdetails', '$rpath')";
$result = mysql_query($SQL);
echo "<script>window.location.href='list_gift.php'</script>";
mysql_close($db_handle);
}
else {
echo "Database NOT Found";
mysql_close($db_handle);

}
   }
   else {
    echo "<script>alert('please fill the details before you submit!!!')</script>";
    echo "<script>window.location.href='giftdetailsform.php'</script>";
   }
?>
