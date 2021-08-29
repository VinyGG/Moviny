<?php

//if ($_POST['moviefilter'] == 'nowatched'){
	$sql = "SELECT * FROM `movie` WHERE `mov_watched` LIKE '0'";
	$query = mysqli_query($mysqli, $sql);
	$rows = mysqli_num_rows($query);

	if ($rows > 0) {
		while ($date = mysqli_fetch_assoc($query)) {
			$id = $date['mov_id'];
			$title = $date['mov_title'];
			$original_title = $date['mov_original_title'];
			$year = $date['mov_year'];
			$urlposter = $date['mov_url_poster'];
			echo  
			'<tr>
			<td><a href="detailsmovie.php?id=' . $id . '"><img src="' . $urlposter . '" alt="HTML5 Ico" width="34" height="50"></a></td>
			<td style="padding: 5px 5px 5px 5px;" align="center"><h3><a style="text-decoration:none; color: #004444" href="detailsmovie.php?id=' . $id . '">' . utf8_encode($title) . ' [' . utf8_encode($original_title) . ']</a></h3></td>
			<td style="padding: 5px 5px 5px 5px;" align="center"><h3>' . $year . '</h3></td>
		</tr>';
	} 

} else { 
	echo "nada encontrado...";
}
//}
?>