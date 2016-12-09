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
		<form class="formCadUsuario" method="GET" action="cadGrupo.php" >
			<div class="row" >
				<div class="form-group col-md-4">
					<h2 class="form-signin-heading">Cadastrar Grupo</h2>
					<label for="numID" class="sr-only">ID</label>
					<input type="numeric" name="numID" class="form-control" placeholder="ID" required >
				</div>
			</div>
			<div class="row" >
				<div class="form-group col-md-4">
					<label for="txtNome" class="sr-only">Nome</label>
					<input type="text" name="txtNome" class="form-control" placeholder="NOME" required >
				</div>
			</div>			
			<div class="row">
				<div class="form-group col-md-4">	
				<label for="txtModulo" >Projeto</label>				
				<?php
					$sql = 'SELECT modulo,ano,semestre, projeto.numero, num_curso, curso.nome
								FROM projeto
								     inner join curso on curso.numero = projeto.num_curso
								';
					$res = pg_query($con, $sql);
					echo '<select name="num_Proj" class="form-control">';
					while($linha = pg_fetch_array($res)){
						echo '<option value="' .$linha['numero']. '">'.$linha['nome'].' Modulo: '.$linha['modulo'].' Semestre: '.$linha['semestre'].' Ano: '.$linha['ano'].' </option>';
								
						
					}
					echo '</select>	';					
				?>
				</div>
			</div>
			
	<div class="row">
		<div class="form-group col-md-6">
			<button class="btn btn-lg btn-primary" type="submit">Gravar </button>
			<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='listarGrupo.php' ">Listar Grupo</button>								
		</div>
	</div>				
		</form>
	</div>
</div>	

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
