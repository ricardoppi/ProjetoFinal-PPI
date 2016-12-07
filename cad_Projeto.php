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
		<form class="formCadUsuario" method="GET" action="cadProjeto.php" >
			<div class="row" >
				<div class="form-group col-md-4">
					<h2 class="form-signin-heading">Cadastro do Projeto Integrador</h2>
					<label for="numNumero" class="sr-only">Numero</label>
					<input type="numeric" name="numNumero" class="form-control" placeholder="NUMERO" required >
				</div>
			</div>		
			<div class="row">
				<div class="form-group col-md-2">					
					<label for="numAno" class="sr-only">Ano</label>
					<input type="numeric"  name="numAno"  class="form-control" placeholder="ANO" required>
				</div>
				<div class="form-group col-md-2">					
					<label for="txtSemestre" class="sr-only">Semestre</label>
					<input type="text"  name="txtSemestre"  class="form-control" placeholder="SEMESTRE" required>
				</div>				
			</div>
			<div class="row">
				<div class="form-group col-md-2">					
					<label for="dtInicio" class="sr-only">Data In&iacute;cio</label>
					<input type="date"  name="dtInicio"  class="form-control" placeholder="DATA INICIO" required>
				</div>
				<div class="form-group col-md-2">					
					<label for="dtTermino" class="sr-only">Data T&eacute;rmino</label>
					<input type="date"  name="dtTermino"  class="form-control" placeholder="DATA TERMINO" required>
				</div>				
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="txtTema" class="sr-only">Tema</label>
					<input type="text"  name="txtTema"  class="form-control" placeholder="TEMA" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
				<label for="txtDescricao" >Descri&ccedil;&atilde;o</label>
					<textarea rows="4" cows="2" name="txtDescricao" class="form-control" placeholder="DESCRICAO"> </textarea>
					
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="txtModulo" class="sr-only">M&oacute;dulo</label>
					<input type="text"  name="txtModulo"  class="form-control" placeholder="MODULO" required>
				</div>
			</div>	
			<div class="row">
				<div class="form-group col-md-4">	
				<label for="txtModulo" >Curso</label>
				<?php
					$sql = 'SELECT * FROM curso';
					$res = pg_query($con, $sql);					
					echo '<select name="Num_Curso" class="form-control">';
					while($linha = pg_fetch_array($res)){
						echo '<option value="'.$linha[0].'">'.$linha[1].'</option>';
								
						
					}
					echo '</select>	';					
				?>
				</div>	
			</div>	
		<div class="row">
			<div class="form-group col-md-6">
				<button class="btn btn-lg btn-primary" type="submit">Gravar </button>								
				<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='listarProjeto.php' ">Listar Projetos</button>
			</div>
		</div>		
		</form>
    
</div>
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	

</body>

</html>
