<?php
$path = pathinfo( $_SERVER['REQUEST_URI'] );
$folder = explode( '/',$path["dirname"] );
$imgurl = "http://".$_SERVER["SERVER_NAME"]."/user_template/".$folder[count($folder) -1];


?>