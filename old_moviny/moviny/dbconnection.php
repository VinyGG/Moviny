<?php

$server   = "moviny.mysql.uhserver.com";
$user     = "viny";
$password = "the6Br0ck00,";
$db       = "moviny";

$mysqli = new mysqli($server, $user, $password, $db);
if(mysqli_connect_errno()){
	echo mysqli_connect_error();
}
?>