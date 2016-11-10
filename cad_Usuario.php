<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
		<form class="formCadUsuario" method="GET" action="cadUsuario.php" onsubmit="return confirmaExclusao()">
			<div class="row" >
				<div class="form-group col-md-4">
					<h2 class="form-signin-heading">Cadastro de Usu&aacute;rio</h2>
					<label for="txtLogin" class="sr-only">Login</label>
					<input type="text" name="txtLogin" class="form-control" placeholder="LOGIN" required >
				</div>
			</div>		
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="inputPassword" class="sr-only">Senha</label>
					<input type="password"  name="senha"  class="form-control" placeholder="SENHA" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="txtNome" class="sr-only">Nome</label>
					<input type="text"  name="txtNome"  class="form-control" placeholder="NOME" required>
				</div>
			</div>
	
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="txtCategoria">Categoria</label>
					<select name="txtCategoria">	
						<option value="C">Coordenador </option>
						<option value="G">Gerente de Projeto Integrador </option>
						<option value="P">Professor </option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="rdSituacao">Situa&ccedil;&atilde;o</label>
					<input type="radio" name="rdSituacao" value="1" /> Ativo
					<input type="radio" name="rdSituacao" value="2" /> Inativo
				</div>
			</div>
			
	<div class="row">
		<div class="form-group col-md-6">
			<button class="btn btn-lg btn-primary" type="submit">Gravar </button>
			<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='listarUsuario.php' ">Listar Usuarios</button>								
		</div>
	</div>				
		</form>
    </div>
</div>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
