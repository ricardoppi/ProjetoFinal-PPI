<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projeto Final</title>
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/logo-nav.css" rel="stylesheet">
	<link href="css/center.css" rel="stylesheet">

</head>

<body>
<?php
require_once('conexao.php');
require_once('menu.php');
?> 
<div id="main" class="container-fluid" >   
   <div class="container">
		<form class="formCadUsuario" method="GET" action="emitir_Relatorio1.php" onsubmit="return confirmaExclusao()">
			<div class="row" >
				<div class="form-group col-md-4">
					<h2 class="form-signin-heading">Relat&oacute;rio 1</h2>
					<label for="codigo" >Curso</label>
					<?php
						$sql = 'SELECT * FROM curso';
						$res = pg_query($con, $sql);					
						echo '<select name="Num_Curso" class="form-control">';
						while($linha = pg_fetch_array($res)){
							echo '<option value="'.$linha[1].'">'.$linha[1].'</option>';
									
							
						}
						echo '</select>	';					
					?>				
				</div>
			</div>		
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="num_Ano" >Ano</label>
					<input type="numeric"  name="num_Ano"  class="form-control" placeholder="ANO" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="semestre">Semestre</label>
					<select name="semestre" class="form-control">	
						<option value="1">1° Semestre </option>
						<option value="2">2° Semestre</option>
					</select>
				</div>
			</div>
			
	<div class="row">
		<div class="form-group col-md-6">
			<button class="btn btn-lg btn-primary" type="submit">Gravar </button>
		</div>
	</div>				
		</form>
	</div>
</div>	

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
