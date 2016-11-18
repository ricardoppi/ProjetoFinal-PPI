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
		<form class="formCadUsuario" method="GET" action="tabelaComposto.php" >
			<div class="row" >
				<div class="form-group col-md-4">
					<h2 class="form-signin-heading">Definic&atilde;o do Projeto e suas disciplinas</h2>
					<label for="numID" >Numero do Projeto</label>
					<?php
						$sql = 'SELECT projeto.numero, curso.nome FROM projeto 
										inner join curso on projeto.num_curso = curso.numero;';
						$res = pg_query($con, $sql);					
						echo '<select name="numProj" class="form-control">';
						while($linha = pg_fetch_array($res)){
							echo '<option value="'.$linha[0].'">'.$linha[0].' - '.$linha[1].'</option>';
						}
						echo '</select>	';
					?>	
				</div>
			</div>
			<div class="row" >
				<div class="form-group col-md-4">
					<label for="txtNome" >Codigo da Disciplina</label>
					<?php
						$sql = 'SELECT * FROM disciplina';
						$res = pg_query($con, $sql);					
						echo '<select name="codDisciplina" class="form-control">';
						while($linha = pg_fetch_array($res)){
							echo '<option value="'.$linha[0].'">' .$linha[0]. ' - ' .$linha[1]. '</option>';
						}
						echo '</select>	';
					?>	
				</div>
			</div>			
			<div class="row">
				<div class="form-group col-md-4">	
					<label for="txtDescricao">Descri&ccedil;&atilde;o</label>
					<textarea rows="4" cows="2" name="txtDescricao" class="form-control" placeholder="DESCRICAO"> </textarea>				
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
