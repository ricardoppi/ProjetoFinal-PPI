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
require_once('menu.php');
require_once('conexao.php');
?> 
<div id="main" class="container-fluid" >   
   <div class="container">
		<form class="formCadUsuario" method="GET" action="lancarNotas.php" >
			<div class="row" >
				<div class="form-group col-md-4">
					<h2 class="form-signin-heading">Lan&ccedil;ar Notas</h2>
					<label for="numID" >Aluno</label>
					<?php
						$sql = 'SELECT * FROM aluno';
						$res = pg_query($con, $sql);					
						echo '<select name="matAluno" class="form-control">';
						while($linha = pg_fetch_array($res)){
							echo '<option value="'.$linha[0].'">'.$linha[1].'</option>';
						}
						echo '</select>	';
					?>	
				</div>
			</div>
			<div class="row" >
				<div class="form-group col-md-4">
					<label for="txtNome" >Grupo</label>
					<?php
						$sql = 'SELECT * FROM grupo';
						$res = pg_query($con, $sql);					
						echo '<select name="idGrupo" class="form-control">';
						while($linha = pg_fetch_array($res)){
							echo '<option value="'.$linha[0].'">'.$linha[1].'</option>';
						}
						echo '</select>	';
					?>	
				</div>
			</div>			
			<div class="row">
				<div class="form-group col-md-4">	
					<label for="numNota">Nota do Aluno</label>
					<input type="numeric"  name="numNota"  class="form-control" placeholder="Nota do Aluno" required>				
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
