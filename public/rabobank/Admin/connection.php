<?php

$db_handle=mysql_connect("localhost","phpmyadmin","Testing1@");

$db_found = mysql_select_db("sfp_staging",$db_handle);

?>