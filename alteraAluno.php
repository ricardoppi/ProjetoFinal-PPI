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
		if(isset($_GET['matricula'])){
			$sql= "SELECT * FROM aluno WHERE matricula= '" . $_GET['matricula'] . "'";
			$res = pg_query($con, $sql);
			$dados = pg_fetch_row($res);
		}	
		if(isset($_GET['alterar'])){
			$sql = "UPDATE aluno SET nome = '" . $_GET['txtNome'] . "'"
										. ", sexo = '" . $_GET['rdSexo'] . "'"
										. ", dtnasc = '" . $_GET['data'] . "'"
										. ", cidade = '" . $_GET['txtCidade'] . "'"
										. ", uf = '" . $_GET['UF'] . "'"
									
									. " WHERE matricula ='" . $_GET['txtMatricula'] . "'";
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
					<h2 class="form-signin-heading">Alterar Aluno</h2>
					<label class="sr-only">Matricula</label>
					<input type="hidden"  name="txtMatricula" value="<?=$_GET['matricula']?>">
					<?=$dados[0];?>
				</div>
			</div>					
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Nome</label>
					<input type="text"  name="txtNome"  class="form-control" placeholder="NOME" value="<?=$dados[1]?>" required>
				</div>
			</div>		
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Data de Nascimento</label>
					<input type="date"  name="data"  class="form-control" placeholder="Data de Nascimento" value="<?=$dados[3]?>" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Cidade</label>
					<input type="text"  name="txtCidade"  class="form-control" placeholder="Cidade" value="<?=$dados[4]?>" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Sexo</label>
						<input type="radio" name="rdSexo" value="M" <?=$dados[2]=="M" ? "checked" : ""; ?> /> Masculino
						<input type="radio" name="rdSexo" value="F" <?=$dados[2]=="F" ? "checked" : ""; ?> /> Feminino
				</div>
			</div>				
			<div class="row">
				<div class="form-group col-md-4">					
					<label>UF</label>				
					<select name="UF">	
						<option value="AC" <?=$dados[5]=="AC" ? "selected" : ""; ?> >AC </option>
						<option value="AP" <?=$dados[5]=="AP" ? "selected" : ""; ?> >AP </option>
						<option value="AM" <?=$dados[5]=="AM" ? "selected" : ""; ?> >AM </option>
						<option value="BA" <?=$dados[5]=="BA" ? "selected" : ""; ?> >BA </option>
						<option value="CE" <?=$dados[5]=="CE" ? "selected" : ""; ?> >CE </option>
						<option value="DF" <?=$dados[5]=="DF" ? "selected" : ""; ?> >DF </option>
						<option value="ES" <?=$dados[5]=="ES" ? "selected" : ""; ?> >ES </option>
						<option value="GO" <?=$dados[5]=="GO" ? "selected" : ""; ?> >GO </option>
						<option value="MA" <?=$dados[5]=="MA" ? "selected" : ""; ?> >MA </option>
						<option value="MT" <?=$dados[5]=="MT" ? "selected" : ""; ?> >MT </option>
						<option value="MS" <?=$dados[5]=="MS" ? "selected" : ""; ?> >MS </option>
						<option value="MG" <?=$dados[5]=="MG" ? "selected" : ""; ?> >MG </option>
						<option value="PA" <?=$dados[5]=="PA" ? "selected" : ""; ?> >PA </option>
						<option value="PB" <?=$dados[5]=="PB" ? "selected" : ""; ?> >PB </option>
						<option value="PR" <?=$dados[5]=="PR" ? "selected" : ""; ?> >PR </option>
						<option value="PE" <?=$dados[5]=="PE" ? "selected" : ""; ?> >PE </option>
						<option value="PI" <?=$dados[5]=="PI" ? "selected" : ""; ?> >PI </option>
						<option value="RJ" <?=$dados[5]=="RJ" ? "selected" : ""; ?> >RJ </option>
						<option value="RN" <?=$dados[5]=="RN" ? "selected" : ""; ?> >RN </option>
						<option value="RS" <?=$dados[5]=="RS" ? "selected" : ""; ?> >RS </option>
						<option value="RO" <?=$dados[5]=="RO" ? "selected" : ""; ?> >RO </option>
						<option value="RR" <?=$dados[5]=="RR" ? "selected" : ""; ?> >RR </option>
						<option value="SC" <?=$dados[5]=="SC" ? "selected" : ""; ?> >SC </option>
						<option value="SP" <?=$dados[5]=="SP" ? "selected" : ""; ?> >SP </option>
						<option value="SE" <?=$dados[5]=="SE" ? "selected" : ""; ?> >SE </option>
						<option value="TO" <?=$dados[5]=="TO" ? "selected" : ""; ?> >TO </option>
					</select>
				</div>
			</div>
		<button class="btn btn-lg btn-primary" name="alterar" type="submit">Alterar </button>
		<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='cad_Aluno.php' ">Voltar </button>
		</p>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

		