<?php
  $str = file_get_contents('php://input');
print_r($str);
  echo $filename = md5(time().uniqid()).".jpg";
  file_put_contents("uploads/".$filename,$str);
?>