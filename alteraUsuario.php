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
		if(isset($_GET['login'])){
			$sql= "SELECT * FROM usuario WHERE login= '" . $_GET['login'] . "'";
			$res = pg_query($con, $sql);
			$dados = pg_fetch_row($res);
		}	
		if(isset($_GET['alterar'])){
			$sql = "UPDATE usuario SET senha = '" . md5($_GET['senha']) . "'"
										. ", nome = '" . $_GET['txtNome'] . "'"
										. ", categoria = '" . $_GET['txtCategoria'] . "'"
										. ", situacao = " . $_GET['rdSituacao']
									
									. " WHERE login='".$_GET['txtLogin']."'" ;
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
					<h2 class="form-signin-heading">Alterar Usuario</h2>
					<label class="sr-only">Login</label>
					<input type="hidden"  name="txtLogin" value="<?=$_GET['login']?>">
					<?=$dados[0];?>
				</div>
			</div>		
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Senha</label>
					<input type="password"  name="senha"  class="form-control" placeholder="SENHA" value="" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Nome</label>
					<input type="text"  name="txtNome"  class="form-control" placeholder="NOME" value="<?=$dados[2]?>" required>
				</div>
			</div>
	
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Categoria</label>
					<select name="txtCategoria">	
						<option value="C" <?=$dados[3]=="C" ? "selected" : ""; ?> >Coordenador </option>
						<option value="G" <?=$dados[3]=="G" ? "selected" : ""; ?> >Gerente de Projeto Integrador </option>
						<option value="P" <?=$dados[3]=="P" ? "selected" : ""; ?> >Professor </option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Situa&ccedil;&atilde;o</label>
					<input type="radio" name="rdSituacao" value="1" <?=$dados[4]==1 ? "checked" : ""; ?> /> Ativo
					<input type="radio" name="rdSituacao" value="2" <?=$dados[4]==2 ? "checked" : ""; ?> /> Inativo
				</div>
			</div>
		<button class="btn btn-lg btn-primary" name="alterar" type="submit">Alterar </button>
		<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='cad_Usuario.php' ">Voltar </button>
		</p>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

		