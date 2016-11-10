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
?> 
<div id="main" class="container-fluid" >   
   <div class="container">
		<form class="formCadUsuario" method="GET" action="cadCurso.php" onsubmit="return confirmaExclusao()">
			<div class="row" >
				<div class="form-group col-md-4">
					<h2 class="form-signin-heading">Cadastrar Curso</h2>
					<label for="numNumero" class="sr-only">Numero</label>
					<input type="numeric" name="numNumero" class="form-control" placeholder="NUMERO" required >
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
					<label for="txtSigla" class="sr-only">Sigla</label>
					<input type="text"  name="txtSigla"  class="form-control" placeholder="SIGLA" required>
				</div>
			</div>
			
	<div class="row">
		<div class="form-group col-md-6">
			<button class="btn btn-lg btn-primary" type="submit">Gravar </button>
			<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='listarCurso.php' ">Listar Cursos</button>								
		</div>
	</div>				
		</form>
	</div>
</div>	

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
