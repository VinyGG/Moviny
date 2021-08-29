<!DOCTYPE html>
<html>
<head>
	<script> 
		function enable(){ 
			if(document.addmovie.watched.checked == true){ 
				document.addmovie.my_rating.disabled = true; 
				document.addmovie.my_rating.disabled = false; 
			} 
			else{ 
				document.addmovie.my_rating.disabled = false; 
				document.addmovie.my_rating2.disabled = true; 
			} 
		} 
	</script> 
</head>
<body>
	<form name="formulario"> 
		<input type="checkbox" name="box" onclick="enable()" /> 
		<input type="text" name="nombre" /> 
		<input type="text" name="campo2" disabled /> 
	</form> 
	<form name="addmovie" action="sf.php" method="POST">


		<input type="hidden" name="watched" id="watched" value="0">

		<input type="checkbox" name="watched" id="watched" onclick="document.getElementById('my_rating').disabled = this.checked; document.getElementById('my_rating2').disabled = !this.checked" value="1">

		<input type="text" name="my_rating" id="my_rating" class="a" maxlength="4" size="1" placeholder="8.5" value="0" enable>

		<input type="text" name="my_rating" id="my_rating2" class="b" maxlength="4" size="1" placeholder="8.5" disabled>

		<input type="submit" name="button" id="button" value="enviar">
	</form>

</body>
</html>