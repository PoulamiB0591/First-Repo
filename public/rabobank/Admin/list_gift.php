
<?php
include 'connection.php';
include 'header.php';
?>
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
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="gtable">
            <thead>
            <tr>
                    <th >Gift Name</th>
                    <th >Details</th>
                    <th >Gift Icon</th>  
                   <th>Edit Gifts</th>                   
                   <th >Delete Gifts</th> 
            </tr>               
            </thead>
            
            <?php

	$sql = mysql_query("select * from Rabo_giftdetails");
    while ($result = mysql_fetch_row($sql,MYSQL_ASSOC))
    { ?>
       
    <tr>
   <td align="center"><?=$result['giftname']?> </td> 
   <td align="center"><textarea readonly="true" rows="2" cols="40"><?=$result['details']?></textarea></td>
   <td align="center"><img src="<?php echo $result['icon']; ?>" style="height: 50px; height: 50px;"/></td>   
   <td align="center"><a href="edit_giftdetails.php?id=<?=$result['id']?>">Edit</a></td>
   <td align="center"><a href="delete_giftdetails.php?id=<?=$result['id']?>" onclick="return confirm('Are you sure you want to do delete this Record from your permanent records? All data will be lost.');"> Delete </a></td>
   </tr>
    

     <?php } ?>
          
    
        </table>
    </div><!-- end of main_content -->
</div>

<?php 
include 'footer.php';
?>