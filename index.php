<?php
include("dbconnection.php");

$mysqli->query("SET NAMES utf8");
$sql = $mysqli->prepare("SELECT mov_id, mov_title, mov_original_title, mov_year FROM movie ORDER BY mov_id DESC");
$sql->execute();
$sql->bind_result($id, $title, $original_title ,$year);

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MOVINY</title>
	<style type="text/css">
		@import url("style.css");
	</style>	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	<script src="jquery-3.1.1.min.js"></script>
	<script src="jscustom.js"></script>
</head>
<body>
	<?php include_once 'header.php'; ?>
	<table width="800" border="1" align="center" cellpadding="40" id="centertb" >
		<tr align="center" valign="middle"> <th width="700" nowrap="nowrap" class="style" scope="col" border="0"><table width="700" border="0" align="center" cellpadding="5">
			<tr>
				<th height="20" id="titlemain" align="center" nowrap scope="col"><h3>Buscar Filme</h3></th>
			</tr>
			<tr>
				<th height="20" nowrap scope="col" align="center">
					<form action="searchprocess.php" method="POST">
						<img src="imgs/icon_search.png" alt="" width="20" height="20" align="center">
						<input type="text" autocomplete="off" name='searchword' id='searchword' size="80" placeholder="Buscar pelo nome do filme...">			
					</form>
				</th>
			</tr>
			<tr >
				<th id="result" height="20" width="650" nowrap scope="col" align="center">
				</th>
			</tr>
		</table>
	</th></tr></table>
</body>
</html>
