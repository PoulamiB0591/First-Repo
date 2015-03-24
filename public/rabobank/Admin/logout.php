
<?php 
session_start();

unset($_SESSION['ID']);
session_destroy();

echo '<script>window.location.href="login.php"</script>';

?>