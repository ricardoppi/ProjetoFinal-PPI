<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php

require_once('conexao.php');
	$dados = NULL;
	if($con){
		if(isset($_GET['numero'])){
			$sql= "SELECT * FROM curso WHERE numero = '" . $_GET['numero'] . "'";
			$res = pg_query($con, $sql);
			$dados = pg_fetch_row($res);
		}	
		if(isset($_GET['alterar'])){
			$sql = "UPDATE curso SET nome = '" . $_GET['txtNome'] . "'"
										. ", sigla = '" . $_GET['txtSigla'] . "'"

									. " WHERE numero ='".$_GET['numero']."'" ;
			pg_query($con, $sql);
		}
	}else{
		echo "Falha da Conexao";
	}
	
pg_close($con);
?>

<html>
	<body>
<div id="main" class="container-fluid" > 
    <div class="container">
		<form class="formCadUsuario">
			<div class="row" >
				<div class="form-group col-md-4">
					<h2 class="form-signin-heading">Alterar Curso</h2>
					<label class="sr-only">Numero</label>
					<input type="hidden"  name="numero" value="<?=$_GET['numero']?>">
					<?=$dados[0];?>
				</div>
			</div>		
			<div class="row">
				<div class="form-group col-md-4">					
					<label >Nome</label>
					<input type="text"  name="txtNome"  class="form-control" placeholder="NOME" value="<?=$dados[1]?>" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Sigla</label>
					<input type="text"  name="txtSigla"  class="form-control" placeholder="NOME" value="<?=$dados[2]?>" required>
				</div>
			</div>
	
			
		<button class="btn btn-lg btn-primary" name="alterar" type="submit">Alterar </button>
		<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='cad_Curso.php' ">Voltar </button>
		</p>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

		