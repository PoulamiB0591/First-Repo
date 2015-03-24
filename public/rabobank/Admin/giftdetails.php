<?php
include 'header.php';
?>
<div class="container clearfix">
	<div class="panel">
    	<div class="search">
        	<form method="post" name="search" action="">
            	<label>Search:</label>
            	<input type="text" name="search" placeholder="Enter your keyword" required="" />
                <input type="submit" name="submit" value="go" />
            </form>
        </div><!-- end of search -->        
        <div id="accordion">
            <h3 class="open"><img src="images/menu_icon.png" alt="" />Side Menu</h3>
            <div>
                <div class="text">
                	<ul>
                    	<li><a href="#">Menu Item 1</a></li>
                    	<li><a href="#">Menu Item 2</a></li>
                    	<li><a href="#">Menu Item 3</a></li>
                    	<li>
                        	<a href="#">Menu Item 4</a>
                            <ul>
                            	<li><a href="#">Menu Item 4 by 1</a></li>
                            	<li><a href="#">Menu Item 4 by 2</a></li>
                            	<li><a href="#">Menu Item 4 by 3</a></li>
                            	<li><a href="#">Menu Item 4 by 4</a></li>
                            </ul>
                        </li>
                    	<li><a href="#">Menu Item 5</a></li>
                    	<li><a href="#">Menu Item 6</a></li>
                    	<li><a href="#">Menu Item 7</a></li>
                    	<li><a href="#">Menu Item 8</a></li>
                    	<li><a href="#">Menu Item 9</a></li>
                    	<li><a href="#">Menu Item 10</a></li>
                    </ul>
                </div><!-- end of text -->
            </div>
            <h3><img src="images/menu_icon.png" alt="" />Information</h3>
            <div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div><!-- end of text -->
            </div>
            <h3><img src="images/menu_icon.png" alt="" />Setting</h3>
            <div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div><!-- end of text -->
            </div>
        </div><!-- end of accordion -->
    </div><!-- end of panel -->
	<div class="main_content">
    <body>
<center><h2><p align="center" style="color:rgb(100,255,255)">Gift Details Form</p></h2>

<form name="Giftdetails" enctype="multipart/form-data">
<table align="center">
     <tr>
       <th><label for="name">Name:</label></th>
       <td><input type="text" name="giftname" id="giftname" placeholder="Enter Gift name" /></td>
     </tr>
     
     <tr>
		<th>Details:</th>
		<td><textarea name="details" id="details"></textarea></td>
     </tr>
     
     <tr>
        <th>Picture:</th>
        <td><input type="file" name="icon" class="nicefile" id="nicefile" />
        <div class="after-image-upload" style="display: none;"><img src="" alt="" id="devimage"/></div>
        <div><span style="display:none" class="icon-check"></span><span class="icon-cancel" id="image" style="display: none;"></span></div>
    
     </tr>


</table>

<input type='button' name="save" value='SAVE' onclick="saveGiftdetails()" />

</form>


</center></body>
    </div><!-- end of main_content -->
</div>
<?php 
include 'footer.php';
?>