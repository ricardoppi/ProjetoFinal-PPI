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
		<form class="formCadUsuario" method="GET" action="relatorio_listar_Aluno.php">
			<div class="row" >
				<div class="form-group col-md-4">
					<h2 class="form-signin-heading">Listar Aluno</h2>
					<label for="codigo" >Nome do Aluno</label>
					<?php
						$sql = 'SELECT * FROM aluno';
						$res = pg_query($con, $sql);					
						echo '<select name="nome_aluno" class="form-control">';
						while($linha = pg_fetch_array($res)){
							echo '<option value="'.$linha[1].'">'.$linha[1].'</option>';
									
							
						}
						echo '</select>	';					
					?>				
				</div>
			</div>				
	<div class="row">
		<div class="form-group col-md-6">
			<button class="btn btn-lg btn-primary" type="submit">Listar </button>
		</div>
	</div>				
		</form>
	</div>
</div>	

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
