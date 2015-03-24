<?php
include 'header.php';
?>
<div class="container clearfix">
	<div class="panel">
    	<?php include 'navigation.php'; ?>        
        
    </div><!-- end of panel -->
	<div class="main_content">
    <?php 
    $id=$_GET['id'];
	$sql1 = mysql_query("select * from Rabo_giftregisterdetails where giftid='$id'");
    $result = mysql_fetch_row($sql1,MYSQL_ASSOC);
    $gift=$result['giftname'];    
      ?>    
    <h2><?php echo $gift; ?> </h2>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="gtable">
            <thead>
            <tr>
                    <th >User Name </th>
                    <!--<th >Address </th> -->                  
                    <th >Contact No. </th>
                    <th >Email-ID </th>
            </tr>               
            </thead>
            <?php
    //$id=$_GET['id'];
	$sql = mysql_query("select * from Rabo_giftregisterdetails where giftid='$id'");
    while ($result = mysql_fetch_row($sql,MYSQL_ASSOC))
    { 
      
        ?>
 <tr>
    <td align="center"><?php echo $result['name']; ?> </td>
   <!-- <td align="center"><?php echo $result['address']?> </td> -->
    <td align="center"><?php echo $result['phoneno']?> </td> 
    <td align="center"><?php echo $result['emailid']?> </td>       
   
  
   </tr>
    

     <?php } ?>
          
    
     </table>	    
    </div><!-- end of main_content -->
</div><!-- end of container -->
<?php 
include 'footer.php';
?>