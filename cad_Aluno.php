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
		<form class="formCadUsuario" method="GET" action="cadAluno.php">
			<div class="row" >
				<div class="form-group col-md-4">
					<h2 class="form-signin-heading">Digite os dados do Aluno a ser cadastrado</h2>
					<label for="txtMatricula" class="sr-only">Matricula</label>
					<input type="text" name="txtMatricula" class="form-control" placeholder="MATRICULA" required >
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
					<label for="data" class="sr-only">Data de Nascimento</label>
					<input type="date"  name="data"  class="form-control" placeholder="Data de Nascimento" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="txtCidade" class="sr-only">Cidade</label>
					<input type="text"  name="txtCidade"  class="form-control" placeholder="Cidade" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label for="rdSexo">Sexo</label>
					<input type="radio" name="rdSexo" value="M" /> Masculino
					<input type="radio" name="rdSexo" value="F" /> Feminino
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="UF">UF</label>				
					<select name="UF">	
						<option value="AC">AC </option>
						<option value="AP">AP </option>
						<option value="AM">AM </option>
						<option value="BA">BA </option>
						<option value="CE">CE </option>
						<option value="DF">DF </option>
						<option value="ES">ES </option>
						<option value="GO">GO </option>
						<option value="MA">MA </option>
						<option value="MT">MT </option>
						<option value="MS">MS </option>
						<option value="MG">MG </option>
						<option value="PA">PA </option>
						<option value="PB">PB </option>
						<option value="PR">PR </option>
						<option value="PE">PE </option>
						<option value="PI">PI </option>
						<option value="RJ">RJ </option>
						<option value="RN">RN </option>
						<option value="RS">RS </option>
						<option value="RO">RO </option>
						<option value="RR">RR </option>
						<option value="SC">SC </option>
						<option value="SP">SP </option>
						<option value="SE">SE </option>
						<option value="TO">TO </option>
					</select>
				</div>
			</div>
			
	<div class="row">
		<div class="form-group col-md-6">
			<button class="btn btn-lg btn-primary" type="submit">Gravar </button>
			<button class="btn btn-lg btn-default" name="listar" type="button" value="L" onclick="window.location.href='listarAluno.php' ">Listar Alunos</button>								
		</div>
	</div>				
		</form>	
	</div>
</div>	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
