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
	<table width="800" border="1" align="center" cellpadding="40" id="centertb" ><tr> <th width="701" align="center" valign="middle" nowrap="nowrap" class="style" id="centertb" scope="col" border="0"><p><?php echo $title . " [" . $original_title . "] (" . $year .")"?></p>
			<table width="700" border="0" align="center" cellpadding="2" >
				<tr>
					<th width="213" height="268" rowspan="9" nowrap scope="col" align="right"><img style="border:3px solid black" src="<?php echo $url_poster?>" alt="movie_poster" width="182" height="268" longdesc="movie_poster"></th>
					<td align="right" style="color: #000000; text-align: right;">Diretor: </td>
					<td style="color: #000000"><?php echo $director?></td>
				</tr>
				<tr>
					<td width="173" align="right" style="color: #000000; text-align: right;">Categoria:</td>
					<td width="300" style="color: #000000"><?php echo $category?></td>
				</tr>
				<tr>
					<td align="right" style="color: #000000; text-align: right;">Estrelando:</td>
					<td style="color: #000000"><?php echo $starring1 . " e " . $starring2?></td>
				</tr>
				<tr>
				  <td align="right" style="color: #000000; text-align: right;">ID IMDb:</td>
				  <td style="color: #000000"><a href="<?php echo $urlimdb ?>" target="_blank"><?php echo $idimdb?></td>
			  </tr>
				<tr>
					<td align="right" style="color: #000000; text-align: right;">Avaliação IMDb:</td>
					<td style="color: #000000"><?php echo $imdb_rating?></td>
				</tr>
				<tr>
					<td align="right" style="color: #000000; text-align: right;">Minha Avaliação:</td>
					<td style="color: #000000"><?php if ($my_rating == 0) { echo "<font color='red'>Filme ainda não assistido.</font>";} else echo $my_rating;?></td>
				</tr>
				<tr>
					<td align="right" style="color: #000000; text-align: right;">Adicionado:</td>
					<td style="color: #000000"><?php echo date('d/m/Y à\s H:m', strtotime($registered))?></td>
				</tr>
				<tr>
					<td height="24" colspan="2" align="right" style="color: #000000; text-align: right;"><p><img src="imgs/icon_watched.png" width="30" height="15"> <img src="<?php if($watched==1 || $watched==true) { echo "imgs/icon_true.png"; } else { echo  "imgs/icon_false.png"; }?>" width="14" height="15" alt="icon_true">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imgs/icon_netflix.png" width="15" height="15" alt="netflix_icon"> <img src="<?php if($netflix==1 || $netflix==true) { echo "imgs/icon_true.png"; } else { echo  "imgs/icon_false.png"; }?>" width="14" height="15" alt="icon_flase"></p></td>
					</tr>
					<tr>
						<td colspan="2" align="center" style=" text-indent: 50px; color: #000000"><?php echo $sinopsys?></td>
					</tr>
				</table></th>
			</tr>
		</table>
	</center>
</body>
</html>