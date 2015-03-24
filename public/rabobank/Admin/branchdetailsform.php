<?php 
include 'header.php';
include 'connection.php';
	
?>
<div class="container clearfix">
	<div class="panel">
    	<?php include 'navigation.php'; ?>        
    </div>
	<div class="main_content">
    <input type="button" value="ADD New Branch Details" onClick="window.location.href='branchdetails.php'" />
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="gtable">
            <thead>
            <tr>
                    <th>Branch Name</th>
                    <th>Address line one</th>                    
                    <th >Address line two</th>
                    <th>Services</th>                     
                    <th >Edit</th>
                    <th >Delete</th>
            </tr>               
            </thead>
            
            <?php

	$sql = mysql_query("select * from Rabo_BranchDetails");
    while ($result = mysql_fetch_row($sql,MYSQL_ASSOC))
    { 
        
       
   $options = "";
   if($result['GA'] == 1)
   {
    $options = "GA";
   }
   if($result['SB'] == 1)
   {
    if($options == "")
    {
        $options = 'SB';
    }
    else
    {
        $options = $options.',SB';
    }
   }
   if($result['SA'] == 1)
   {
    if($options == "")
    {
        $options = 'SA';
    }
    else
    {
        $options = $options.',SA';
    }
   }
   if($result['MA'] == 1)
   {
    if($options == "")
    {
        $options = 'MA';
    }
    else
    {
        $options = $options.',MA';
    }
   }
   if($result['RV'] == 1)
   {
    if($options == "")
    {
        $options = 'RV';
    }
    else
    {
        $options = $options.',RV';
    }
   }
        ?>
       
 <tr>
   <td align="center"><?php echo $result['branch_name']?> </td> 
   <td align="center"><?php echo $result['address']?></td>   
   <td align="center"><?php echo $result['address1']?></td>
   <td align="center"><?php echo $options; ?></td> 
   <td align="center"><a href="edit_Branchdetails.php?id=<?=$result['Branch_id']?>">Edit</a></td>
   <td align="center"><a href="Delete_branchdetails.php?id=<?=$result['Branch_id']?>" onclick="return confirm('Are you sure you want to do delete this Record from your permanent records? All data will be lost.');"> Delete </a></td>
   </tr>
    

     <?php } ?>
          
    
        </table>


    </div><!-- end of main_content -->
</div><!-- end of container -->

<?php
include 'footer.php';
        ?>