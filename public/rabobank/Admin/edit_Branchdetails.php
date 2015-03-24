<?php
include 'connection.php';
include 'header.php';
?>
<head>

</head>
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['sub']))
{
            $Name=$_POST['name'];
            $Address=$_POST['myaddress'];  
            $Address1=$_POST['myaddress1']; 
            $phone=$_POST['phone'];          
            $day1=$_POST['days1'];
            $time1=$_POST['time1'];
            $day2=$_POST['days2'];
            $time2=$_POST['time2'];
            $day3=$_POST['days3'];
            $time3=$_POST['time3']; 
            if($_POST['service1'] == 1)                   
			     $service1=$_POST['service1'];
            else
                 $service1=0;
                 
            if($_POST['service2'] == 1)                   
			     $service2=$_POST['service2'];
            else
                 $service2=0;
                 
            if($_POST['service3'] == 1)                   
			     $service3=$_POST['service3'];
            else
                 $service3=0;
                 
            if($_POST['service4'] == 1)                   
			     $service4=$_POST['service4'];
            else
                 $service4=0;
                 
            if($_POST['service5'] == 1)                   
			     $service5=$_POST['service5'];
            else
                 $service5=0; 
                 
 if($Name!="" && $Address!="" && $day1!="" && $time1!="") {  
$query3=mysql_query("update Rabo_BranchDetails set branch_name='$Name',address='$Address',address1='$Address1',phone_No='$phone',Day1='$day1',Time1='$time1',Day2='$day2',Time2='$time2',Day3='$day3',Time3='$time3',GA='$service1',SB='$service2',SA='$service3',MA='$service4',RV='$service5' where Branch_id='$id'");
if($query3)
{
echo "<script>window.location.href='branchdetailsform.php'</script>";
}
}
else{
    echo "<script>
           alert('Please Fill all the details before you submit')</script>";
               
}
}
$query1=mysql_query("select * from Rabo_BranchDetails where Branch_id='$id'");
$query2=mysql_fetch_array($query1);
?>
  
<div class="container clearfix">
	<div class="panel">
    	<?php include 'navigation.php'; ?>        
        
    </div><!-- end of panel -->
    
<div class="main_content">    
<center><h2> Edir Branch Details Form</h2></center>
<form action="" method="post" name="form1">
             <strong>Name:</strong><input type="text" name="name" id="name" value="<?php echo $query2['branch_name'];?>" /><br/> 
              <strong>Address:</strong><br/>              
			 <strong>Address:</strong> <input type="text" name="myaddress" id="myaddress" value="<?php echo $query2['address'];?>"/><br/>
             <strong>Address1:</strong> <input type="text" name="myaddress1" id="myaddress1" value="<?php echo $query2['address1'];?>"/><br/>
              <strong>Phone No.:</strong> <input type="text" name="phone" id="phone" value="<?php echo $query2['phone_No'];?>"/><br/>              
           
            <strong>Timimg Details:</strong>  <br />   
                <input type="text" name="days1" value="<?php echo $query2['Day1'];?>" id="days1"/> <input type="text" name="time1" value="<?php echo $query2['Time1'];?>" id="time1"/><br />
                <input type="text" name="days2" value="<?php echo $query2['Day2'];?>" id="days2"/> <input type="text" name="time2" value="<?php echo $query2['Time2'];?>" id="time2"/><br />
                <input type="text" name="days3" value="<?php echo $query2['Day3'];?>" id="days3"/> <input type="text" name="time3" value="<?php echo $query2['Time3'];?>" id="time3"/><br />  
           
           <strong>Add Services:</strong> <br />                     
                <input type="checkbox" name="service1" <?php if($query2['GA'] == 1){ ?> checked="checked" <?php } ?> id="service1" value="1"/>Geldautomaat(GA) <br />
                <input type="checkbox" name="service2" <?php if($query2['SB'] == 1){ ?> checked="checked" <?php } ?> id="service2" value="1"/>Sealbagautomaat(SB) <br />
                <input type="checkbox" name="service3" <?php if($query2['SA'] == 1){ ?> checked="checked" <?php } ?> id="service3" value="1"/>Stortautomaat(SA) <br />
                <input type="checkbox" name="service4" <?php if($query2['MA'] == 1){ ?> checked="checked" <?php } ?> id="service4" value="1"/>Muntrolautomaat(MA) <br />   
                <input type="checkbox" name="service5" <?php if($query2['RV'] == 1){ ?> checked="checked" <?php } ?> id="service5" value="1"/>Rabobankvestiging <br />                      
            <input type="submit" value="Submit" name="sub"  />                           
               
    
</form>

    </div><!-- end of main_content -->
    <?php } ?>
</div><!-- end of container -->

<?php 
include 'footer.php';
?>