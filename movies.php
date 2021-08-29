<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MOVINY</title>
	<style type="text/css">
		@import url("style.css");
		#centertb tr .style table tr #titlemain table {
			text-align: center;
		}
	</style>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	<script src="jquery-3.1.1.min.js"></script>
	<script src="jscustom2.js"></script>
</head>
<body>
	<?php include_once 'header.php'; ?>

	<table width="800" border="1" align="center" cellpadding="40" id="centertb" >
		<tr align="center" valign="middle"> <th width="700" nowrap="nowrap" class="style" scope="col" border="0"><table width="700" border="0" align="center" cellpadding="5">
			<tr>
				<th height="20" id="titlemain" align="center" nowrap scope="col"><h3>Filmes</h3>
					<table width="500" border="0" align="center">
						<tr>
						  <td width="258"><form name="form" method="post" action="searchword.php">
						    <label for="searchword"></label>
						    <select name="searchword" id="searchword">
						      <option value="bestnowatched">Melhores não Assistidos</option>
						      <option value="bestimdb">Melhores por IMDb</option>
						      <option value="bestuser">Melhores por Você</option>
					        </select>
					      </form>                            					  </tr>
								</table>
							</th>
						</tr>
						<tr>
						</tr>
						<tr >
							<th id="result" height="20" width="650" nowrap scope="col" align="center">

							</th>
						</tr>
					</table>
				</th></tr></table>
			</body>
			</html>