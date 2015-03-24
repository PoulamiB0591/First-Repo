<?php 
@session_start();
include 'connection.php';
if(!isset($_SESSION['ID']))
    echo '<script>window.location.href="login.php"</script>';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<title>Rabobank Interactieve Map</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="js/modernizr.custom.56578.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!--<script type="text/javascript">window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>-->
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="js/Placeholders.min.js"></script>
<script type="text/javascript" src="js/jquery.collapse.js"></script>
<script type="text/javascript" src="js/bootstrap-paginator.js"></script>
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
</head>


<?php
$url=$_SERVER["REQUEST_URI"];
$a = explode('/',$url);
$page = end($a);

?> 

<body>
<div class="top">
    <div class="container">
    	<a href="index.html" title="Delgence Technologies" class="logo"><img src="images/logo1.png" height="50" width="50" alt="" /></a><!-- end of logo -->
        <div class="info">
        	<p><span>Welcome,</span><a  href="#member_info" class="popup_window" title="Administrator">Administrator</a></p>            
            <div class="login_popup" id="member_info">
                <a href="#" class="close">close</a><!-- end of close -->
                <ul>
                    <li><a href="logout.php" title="Logout">Logout</a></li>
                </ul>
            </div><!-- end of login_popup -->
        </div><!-- end of info -->
    </div><!-- end of container -->
</div><!-- end of top -->
<div class="navigation">
    <div class="container">
    	<ul class="main_menu">
        	<li><a href="branchdetailsform.php" title="Branch" <?php if($page == 'branchdetailsform.php'){ ?> class="active" <?php } ?>>Branchs</a></li>
        	<li><a href="list_gift.php" title="Gifts" <?php if($page == 'list_gift.php'){ ?> class="active" <?php } ?>>Gifts</a></li>
            <li><a href="users.php" title="users" <?php if($page == 'users.php'){ ?> class="active" <?php } ?>>Users</a></li>
        	
        </ul><!-- end of main_menu -->
    </div><!-- end of container -->
</div><!-- end of navigation -->