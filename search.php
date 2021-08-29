<?php  
 // $connect = mysqli_connect("localhost", "root", "", "testing"); 
include_once('dbconnection.php'); 
if(isset($_POST["query"])){
  $word = $_POST["query"];
  $output = '';  
//  $query = "SELECT * FROM tbl_country WHERE country_name LIKE '%".$_POST["query"]."%'";
  $query = "SELECT `mov_title` FROM `movie` WHERE (`mov_title` LIKE '%{$word}%' OR `mov_original_title` LIKE '%{$word}%')";
  $result = mysqli_query($mysqli, $query);  
  $output = '<ul class="list-unstyled">';  
  if(mysqli_num_rows($result) > 0)  
  {  
   while($row = mysqli_fetch_array($result))  
   {  
    $output .= '<li>'.$row["mov_title"].'</li>';  
  }  
}  
else  
{  
 $output .= '<li>Filme não encontrado...</li>';  
}  
$output .= '</ul>';  
echo $output;  
}  
?>