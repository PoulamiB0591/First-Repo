<?php
include 'header.php';
?>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
    var ck_name = /^[A-Za-z0-9 ]{2,100}$/;
    var ck_phone=/^\d{10}$/;       
    
function Chkname()
    {  
    var name=$('#name').val();      
    if (!ck_name.test(name)|| name=="" ) {      
    alert("please enter valid Name('It should not contain any special charachter')");
    return false;  
    }   
    } 

</script>    
</head>
<div class="container clearfix">
	<div class="panel">
    	<?php include 'navigation.php'; ?>        
        
    </div><!-- end of panel -->
	<div class="main_content">
    
<center><h2>Branch Details Form</h2></center>
<form action="rebo_insert.php" method="post" name="form1" >
             <strong>Name:</strong><input type="text" name="name" id="name" /><br/> 
              <strong>Address:</strong><br/>              
			 <strong>Address:</strong> <input type="text" name="myaddress" id="myaddress"/><br/>
             <strong>Address1:</strong> <input type="text" name="myaddress1" id="myaddress1"/><br/>
             <strong>Phone No.:</strong> <input type="text" name="phone" id="phone"/><br/>
            <strong>Timimg Details:</strong>  <br />   
                <input type="text" name="days1" value="" id="days1"/> <input type="text" name="time1" value="" id="time1"/><br />
                <input type="text" name="days2" value="" id="days2"/> <input type="text" name="time2" value="" id="time2"/><br />
                <input type="text" name="days3" value="" id="days3"/> <input type="text" name="time3" value="" id="time3"/><br />
           <strong>Add Services:</strong> <br />   
                <input type="checkbox" name="service1" id="service1" value="1"/>Geldautomaat(GA) <br />
                <input type="checkbox" name="service2" id="service2" value="1"/>Sealbagautomaat(SB) <br />
                <input type="checkbox" name="service3" id="service3" value="1"/>Stortautomaat(SA) <br />
                <input type="checkbox" name="service4" id="service4" value="1"/>Muntrolautomaat(MA) <br />  
                <input type="checkbox" name="service5" id="service5" value="1"/>Rabobankvestiging <br />                           
            <input type="submit" value="Submit" name="sub"  />                           
            <input type="reset" />      
    
</form>

    </div><!-- end of main_content -->
</div><!-- end of container -->
<?php 
include 'footer.php';
?>