<?php
include("dbconnection.php");



if ($_POST['searchword'] == 'bestnowatched') {
	$sql = "SELECT * FROM `movie` WHERE `mov_watched` LIKE '0'";
	$query = mysqli_query($mysqli, $sql);
	$rows = mysqli_num_rows($query);

	if ($rows > 0) {
		echo "<td align='center' style='color:#990000'>" . $rows . " filme(s) encontrado(s)</h5></td>";
		while ($date = mysqli_fetch_assoc($query)) {
			$id = $date['mov_id'];
			$title = $date['mov_title'];
			$original_title = $date['mov_original_title'];
			$year = $date['mov_year'];
			$urlposter = $date['mov_url_poster'];
			$imdbrating = $date['mov_imdb_rating'];
			echo  
			'<tr>
			<td><a href="detailsmovie.php?id=' . $id . '"><img src="' . $urlposter . '" alt="HTML5 Ico" width="34" height="50"></a></td>
			<td style="padding: 5px 5px 5px 5px;" align="center"><h3>' . $imdbrating . '</h3></td>
			<td style="padding: 5px 5px 5px 5px;" align="center"><h3><a style="text-decoration:none; color: #004444" href="detailsmovie.php?id=' . $id . '">' . utf8_encode($title) . ' [' . utf8_encode($original_title) . ']</a></h3></td>
			<td style="padding: 5px 5px 5px 5px;" align="center"><h3>' . $year . '</h3></td>
		</tr>';
	} 

} else { 
	echo "nada encontrado...";
}
} else if ($_POST['searchword'] == 'bestimdb') {
	$sql = "SELECT * FROM `movie` WHERE `mov_imdb_rating` ORDER BY `mov_imdb_rating` DESC";
	$query = mysqli_query($mysqli, $sql);
	$rows = mysqli_num_rows($query);

	if ($rows > 0) {
		echo $rows . " filme(s) encontado(s)";
		while ($date = mysqli_fetch_assoc($query)) {
			$id = $date['mov_id'];
			$title = $date['mov_title'];
			$original_title = $date['mov_original_title'];
			$year = $date['mov_year'];
			$urlposter = $date['mov_url_poster'];
			$imdbrating = $date['mov_imdb_rating'];
			echo  
			'<tr>
			<td><a href="detailsmovie.php?id=' . $id . '"><img src="' . $urlposter . '" alt="HTML5 Ico" width="34" height="50"></a></td>
			<td style="padding: 5px 5px 5px 5px;" align="center"><h3><a style="text-decoration:none; color: #004444" href="detailsmovie.php?id=' . $id . '">' . utf8_encode($title) . ' [' . utf8_encode($original_title) . '] (' . $year . ')</a></h3></td>
			<td style="padding: 5px 5px 5px 5px;" align="center"><h3>' . $imdbrating . '</h3></td>
		</tr>';
	}

} else { 
	echo "nada encontrado...";
}
} else if ($_POST['searchword'] == 'bestuser') {
	$sql = "SELECT * FROM `movie` WHERE `mov_watched` = '1' ORDER BY `mov_my_rating` DESC";
	$query = mysqli_query($mysqli, $sql);
	$rows = mysqli_num_rows($query);

	if ($rows > 0) {
		echo $rows . " filme(s) encontado(s)";
		while ($date = mysqli_fetch_assoc($query)) {
			$id = $date['mov_id'];
			$title = $date['mov_title'];
			$original_title = $date['mov_original_title'];
			$year = $date['mov_year'];
			$urlposter = $date['mov_url_poster'];
			$imdbrating = $date['mov_imdb_rating'];
			$myrating = $date['mov_my_rating'];
			echo  
			'<tr>
			<td><a href="detailsmovie.php?id=' . $id . '"><img src="' . $urlposter . '" alt="HTML5 Ico" width="34" height="50"></a></td>
			<td style="padding: 5px 5px 5px 5px;" align="center"><h3><a style="text-decoration:none; color: #004444" href="detailsmovie.php?id=' . $id . '">' . utf8_encode($title) . ' [' . utf8_encode($original_title) . '] (' . $year . ')</a></h3></td>
			<td style="padding: 5px 5px 5px 5px;" align="center"><h3>' . $myrating . '</h3></td>
		</tr>';
	} 

} else { 
	echo "nada encontrado...";
}
}
?>