<?php
include_once('dbconnection.php');
require_once 'getimdb.php';
$mysqli->query("SET NAMES utf8");

ini_set( 'display_errors', true );
error_reporting( E_ALL );

function mysql_escape_mimic($inp) { 
	if(is_array($inp)) 
		return array_map(__METHOD__, $inp); 
	if(!empty($inp) && is_string($inp)) { 
		return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
	}
	return $inp; 
}

$idimdb = $_POST['idimdb'];
//$dupidimdb = "SELECT * FROM `movie` WHERE `mov_id_imdb` = '$idimdb'";
$dupquery = mysqli_query($mysqli, "SELECT * FROM `movie` WHERE `mov_id_imdb` = '$idimdb'");
$duprows = mysqli_num_rows($dupquery);
$date = mysqli_fetch_assoc($dupquery);
$dupidimdb = $date['mov_id_imdb'];
$duptitle = $date['mov_title'];
$duporiginaltitle = $date['mov_original_title'];
$dupyear = $date['mov_year'];
if ($duprows == 0) {

	$myrating = $_POST['my_rating'];
	$watched = $_POST['watched2'];
	$netflix = $_POST['netflix2'];

	$url = getURL($idimdb);
	$title2 = getTitle($idimdb);
	$original_title2 = getOrigTitle($idimdb);
	$url_poster = getUrlPoster($idimdb);
	$year = getYear($idimdb);
	$category = getCategory($idimdb);
	$director2 = getDirector($idimdb);
	$starring12 = getStarring1($idimdb);
	$starring22 = getStarring2($idimdb);
	$sinopsys2 = getSinopsys($idimdb);
	$imdb_rating = getRating($idimdb);

	$title = mysql_escape_mimic($title2);
	$original_title = mysql_escape_mimic($original_title2);
	$director = mysql_escape_mimic($director2);
	$starring1 = mysql_escape_mimic($starring12);
	$starring2 = mysql_escape_mimic($starring22);
	$sinopsys = mysql_escape_mimic($sinopsys2);

	$msg_form = "INSERT INTO movie(mov_id_imdb, mov_url_imdb, mov_title, mov_original_title, mov_url_poster, mov_year, mov_category, mov_director, mov_starring1, mov_starring2, mov_sinopsys, mov_my_rating, mov_imdb_rating, mov_netflix, mov_watched, mov_registered) VALUES('$idimdb', '$url', '$title', '$original_title', '$url_poster', '$year', '$category', '$director', '$starring1', '$starring2', '$sinopsys', '$myrating', '$imdb_rating', '$netflix', '$watched', NOW())";

	$conn_msg_form = $mysqli->query($msg_form) or die (mysql_error());

	$query = $mysqli->query("SELECT mov_id FROM movie WHERE mov_id_imdb = '$idimdb'");
	$data = $query->fetch_array();
	$id = utf8_encode($data['mov_id']);
	$sucess = 'Filme <font color="red">' . $title2 . '</font> Adicionado com Sucesso, clique no título abaixo para visualizar a ficha técnica completa.
	<br /><h2><a href="detailsmovie.php?id=' . $id . '">' . $title2 . ' [' . $original_title2 . '] ' . ' (' . $year . ')';
} else {
	$duperror = 'ID <font color="red">' . $dupidimdb . '</font> Pertencente ao título <font color="red">' . $duptitle . ' [' . $duporiginaltitle . '] ' . ' (' . $dupyear . ')</font>' . ', Já está registrado, tente novamente com outra IMDb ID.<br /><a href="javascript:window.history.go(-1)">Voltar</a>';
}

?>
<?php
include_once('dbconnection.php');
ini_set( 'display_errors', true );
error_reporting( E_ALL );
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MOVINY</title>
	<style type="text/css">
		@import url("style.css");
	</style>
	<script>
		$(document).ready(function(){
			$('#my_rating').mask('00.0');
		});

		function formatar(mascara, documento){
			var i = documento.value.length;
			var saida = mascara.substring(0,1);
			var texto = mascara.substring(i)
			
			if (texto.substring(0,1) != saida){
				documento.value += texto.substring(0,1);
			}
			
		}
	</script>	
</head>
<body>
	<center><?php include_once 'header.php'; ?><p><table width="811" align="center" cellpadding="50" id="centertb" >

		<tr> <th width="701" align="center" valign="middle" nowrap="nowrap" class="style" id="centertb" scope="col" border="0"><form method="POST" action="saveform.php">
			<table width="700" border="0" cellpadding="2">
				<tbody>
					<tr>
						<td width="223" colspan="4" align="center">
							<?php if ($duprows == 0) {
								echo $sucess; 
							}
							else {
								echo $duperror;
							}
							?>

						</a><h2></td>
					</tr>
				</tbody>
			</table>
		</form>
	</table>
</center>
</body>
</html>