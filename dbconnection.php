<?php

$server   = "remotemysql.com";
$user     = "igBLIhrhvP";
$password = "2QoCnjHmJz";
$db       = "igBLIhrhvP";

$mysqli = new mysqli($server, $user, $password, $db);
if(mysqli_connect_errno()){
	echo mysqli_connect_error();
}
?>