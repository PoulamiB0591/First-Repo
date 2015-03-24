<?php 
include 'connection.php';

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
                 
            if($Name!="" && $Address!="" && $day1!="" && $time1!=""  ) {        
			$sql="INSERT INTO `Rabo_BranchDetails` (`branch_name` ,`address`,`address1` ,`phone_No`,`Day1` ,`Time1`,`Day2`,`Time2`,`Day3`,`Time3`,`GA`,`SB`,`SA`,`MA`,`RV`)
			VALUES ('".$Name."','".$Address."','".$Address1."','".$phone."','".$day1."','".$time1."','".$day2."','".$time2."','".$day3."','".$time3."','".$service1."','".$service2."','".$service3."','".$service4."','".$service5."')";
			$db=mysql_query($sql);
			if($db){
			 
			echo "<script>window.location.href='branchdetailsform.php'</script>";
			}
			}
            else{
               
                echo "<script>
                alert('Please Fill all the details before you submit')</script>";
                 echo "<script>window.location.href='branchdetails.php'</script>";
            }
            }
			
		else{
				echo "Data not entered";
		}
        
	
?>