<?php
include_once('dbconnection.php');
ini_set( 'display_errors', true );
error_reporting( E_ALL );
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Adicionar Filme - MOVINY</title>
	<style type="text/css">
    @import url("style.css");
  </style>
  <script>
  function enable(){ 
			if(document.getElementById('my_rating').disabled ==  true){ 
				document.getElementById('my_rating').disabled = !this.checked; 
				document.getElementById('my_rating2').disabled = !this.checked; 
			} 
			else{ 
				document.getElementById('my_rating').disabled = !this.checked; 
				document.getElementById('my_rating2').disabled = !this.checked; 
			} 
		}
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
  <?php include_once 'header.php'; ?>
  <table width="800" border="1" align="center" cellpadding="40" id="centertb" >
    <tr>
      <th width="701" align="center" valign="middle" nowrap="nowrap" class="style" id="centertb" scope="col" border="0"><form name="addmovie" method="POST" action="saveform.php">
        <table width="700" border="0" cellpadding="2">
          <tbody>
            <tr>
              <td colspan="4"><center>
                <h2>Adicionar Filme</h2>
              </center></td>
            </tr>
            <tr>
              <td colspan="2" align="right" >ID IMDb:</td>
              <td colspan="2" align="left" ><input type="text" name="idimdb" maxlength="9" size="4" placeholder="tt1234567" required></td>
            </tr>
            <tr>
              <td width="215" align="center" ></td>
              <td width="122" align="center" ><img src="imgs/icon_watched.png"  width="30" height="15" alt="watched_icon">
                <input type="hidden" name="watched2" id="watched2" value="0">
                <input type="checkbox" name="watched2" id="watched2" value="1" onclick="document.getElementById('my_rating').disabled = this.checked;document.getElementById('my_rating2').disabled = !this.checked"></td>
                <td width="122" align="center" ><img src="imgs/icon_netflix.png" width="15" height="15" alt="netflix_icon">
                  <input type="hidden" name="netflix2" id="netflix2" value="0">
                  <input type="checkbox" name="netflix2" id="netflix2" value="1"></td>
                  <td width="223" align="center" ></td>
                </tr>
                <tr>
                  <td colspan="2" align="right" >Minha Avaliação:</td>
                  <td colspan="2" ><input type="hidden" id="my_rating" name="my_rating" maxlength="4" size="1" placeholder="8.5" data-mask="#0.#" data-mask-selectonfocus="true" value="0"><input type="text" id="my_rating2" name="my_rating" maxlength="4" size="1" placeholder="8.5" data-mask="#0.#" data-mask-selectonfocus="true" disabled></td>
                </tr>
                <tr>
                  <td colspan="4" align="center"><input type="submit" value="Enviar" name="enviar"></td>
                </tr>
              </tbody>
            </table>
          </form>
        </table>
      </center>
    </body>
    </html>