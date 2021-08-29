<?php
include_once('dbconnection.php');

ini_set( 'display_errors', true );
error_reporting( E_ALL );

$id = $_GET['id'];
$query = $mysqli->query("SELECT * FROM movie WHERE mov_id = $id");
$data = $query->fetch_array();
//$query = mysql_query($query);
//$data = mysql_fetch_array($query);
$id = utf8_encode($data['mov_id']);
$idimdb = utf8_encode($data['mov_id_imdb']);
$urlimdb = utf8_encode($data['mov_url_imdb']);
$title = utf8_encode($data['mov_title']);
$original_title = utf8_encode($data['mov_original_title']);
$url_poster = utf8_encode($data['mov_url_poster']);
$year = utf8_encode($data['mov_year']);
$category = utf8_encode($data['mov_category']);
$director = utf8_encode($data['mov_director']);
$starring1 = utf8_encode($data['mov_starring1']);
$starring2 = utf8_encode($data['mov_starring2']);
$sinopsys = utf8_encode($data['mov_sinopsys']);
$my_rating = utf8_encode($data['mov_my_rating']);
$imdb_rating = utf8_encode($data['mov_imdb_rating']);
$netflix = utf8_encode($data['mov_netflix']);
$watched = utf8_encode($data['mov_watched']);
$registered = utf8_encode($data['mov_registered']);

function delMovie() {
	$delquery = $mysqli->query("DELETE FROM movie WHERE mov_id = '$id'");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title . " [" . $original_title . "] (" . $year .")"?> - MOVINY</title>
	<style type="text/css">
		@import url("style.css");
	</style>	
</head>
<body>
	<?php include_once 'header.php'; ?>
	<table width="800" border="1" align="center" cellpadding="40" id="centertb" ><tr> <th width="701" align="center" valign="middle" nowrap="nowrap" class="style" id="centertb" scope="col" border="0"><p>&nbsp;</p></th>
			</tr>
		</table>
	</center>
</body>
</html>