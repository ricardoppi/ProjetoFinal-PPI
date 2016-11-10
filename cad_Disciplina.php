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
		<form class="formCadUsuario" method="GET" action="cadDisciplina.php" onsubmit="return confirmaExclusao()">
			<div class="row" >
				<div class="form-group col-md-4">
					<h2 class="form-signin-heading">Cadastrar Disciplina</h2>
					<label for="codigo" class="sr-only">C&oacute;digo</label>
					<input type="numeric" name="codigo" class="form-control" placeholder="CODIGO" required >
				</div>
			</div>		
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="txtNome" class="sr-only">Nome</label>
					<input type="text"  name="txtNome"  class="form-control" placeholder="NOME DA DISCIPLINA" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="numCH">Carga hor&aacute;ria</label>
					<input type="numeric"  name="numCH"  class="form-control" placeholder="CARGA HORARIA" required>

				</div>
			</div>
			
	<div class="row">
		<div class="form-group col-md-6">
			<button class="btn btn-lg btn-primary" type="submit">Gravar </button>
			<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='listarDisciplina.php' ">Listar Disciplinas </button>								
		</div>
	</div>				
		</form>
	</div>
</div>	

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
