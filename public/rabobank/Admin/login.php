<?php   
session_start();
if(isset($_SESSION['ID']))
    echo '<script>window.location.href="index.php"</script>';

include 'connection.php';
if(isset($_POST['submit']))
{
    //print_r($_POST);
    $sql = 'SELECT * FROM `Rabo_admin` WHERE 
           `userName` = "'.$_POST['username'].'" AND
            `password` = "'.$_POST['password'].'"';
    $result = mysql_query($sql);
    
    $row = @mysql_num_rows($result);
    if($row == 1)
    {
        $rowResult = mysql_fetch_assoc($result);
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['ID'] = $rowResult['id'];
        //header('Location:index.php');
        echo '<script>window.location.href="index.php"</script>';
    }
    
}
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

<body>
<a href="#" title="Delgence Technologies" class="logo"><img src="images/logo111.png" alt="" /></a><!-- end of logo -->
<div class="login">
	<h2>Login to administration</h2>
    <div>
        <form method="post" name="login" action="">
            <ul>
                <li><input type="text" name="username" placeholder="Username" required="" /></li>
                <li><input type="password" name="password" placeholder="Password" required="" /></li>
                <li><input type="submit" name="submit" value="Log in" /><label class="label_check"><input id="checkbox-01" value="1" type="checkbox" /> Remember me</label></li>
            </ul>
        </form>
    </div>
</div><!-- end of login -->
<div class="footer">
	<div class="container">
		<p><a href="#" title="Delgence Technologies">Rabobank Interactieve Map</a></p>
    </div><!-- end of container -->
</div><!-- end of footer -->
<script type="text/javascript">
	var temp_path = "";
	var mod_path = "";
</script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>