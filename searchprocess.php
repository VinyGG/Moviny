<?php

include_once('dbconnection.php');

$word = $_POST['searchword'];

$sql = "SELECT * FROM `movie` WHERE (`mov_title` LIKE '%{$word}%' OR `mov_original_title` LIKE '%{$word}%')";

$query = mysqli_query($mysqli, $sql);

$rows = mysqli_num_rows($query);





/*

$sql = $mysqli->prepare("SELECT mov_id, mov_title, mov_original_title, mov_year, mov_url_poster FROM movie WHERE (mov_title LIKE '%$word%' OR mov_original_title LIKE '%$word%')");

$sql->execute();

$sql->bind_result($id, $title, $original_title ,$year, $urlposter);

*/

?>

<!DOCTYPE html>

<html>

<head>

	<style type="text/css">

		@import url("style.css");

	</style>

</head>

<table>

	<td>

		<?php

		if ($rows > 0) {

			echo "<td align='center' style='color:#990000'>" . $rows . " filme(s) encontrado(s)</h5></td>";

			while ($date = mysqli_fetch_assoc($query)) {

				$id = $date['mov_id'];

				$title = $date['mov_title'];

				$original_title = $date['mov_original_title'];

				$year = $date['mov_year'];

				$urlposter = $date['mov_url_poster'];

				$imdbrating = $date['mov_imdb_rating'];

				echo '<tr>

				<td><a href="detailsmovie.php?id=' . $id . '"><img src="' . $urlposter . '" alt="HTML5 Ico" width="34" height="50"></a></td>

				<td style="padding: 5px 5px 5px 5px;" align="center"><h3><a style="text-decoration:none; color: #004444" href="detailsmovie.php?id=' . $id . '">' . utf8_encode($title) . ' [' . utf8_encode($original_title) . '] (' . $year . ')</a></h3></td>

				<td style="padding: 5px 5px 5px 5px;" align="center"><h3>' . $imdbrating . '</h3></td>

			</tr>';

		}

		

	} else {

		echo "nada encontrado...";

	}

	?>

</td>

</table>

</html>

