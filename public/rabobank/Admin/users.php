<?php
include 'header.php';
?>
<div class="container clearfix">
	<div class="panel">
    	<?php include 'navigation.php'; ?>        
        
    </div><!-- end of panel -->
	<div class="main_content">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="gtable">
            <thead>
            <tr>
                    <th >Gift Icon </th>
                    <th >Gift Name </th>                   
                    <th >Action </th>
            </tr>               
            </thead>
            <?php

	$sql = mysql_query("select * from Rabo_giftdetails");
    while ($result = mysql_fetch_row($sql,MYSQL_ASSOC))
    { 
      
        ?>
 <tr>
     <td align="center"><img src="<?php echo $result['icon']; ?>" style="height: 70; height: 70px;"/></td>
    <td align="center"><?php echo $result['giftname']?> </td>       
   <td align="center"><a href="userrecorshow.php?id=<?=$result['id']?>">View User Details</a></td>
  
   </tr>
    

     <?php } ?>
          
    
     </table>	
    </div><!-- end of main_content -->
</div><!-- end of container -->
<?php 
include 'footer.php';
?>