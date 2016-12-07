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
			$sql= "SELECT * FROM projeto WHERE numero= '" . $_GET['numero'] . "'";
			$res = pg_query($con, $sql);
			$dados = pg_fetch_row($res);
		}	
		if(isset($_GET['alterar'])){
			$sql = "UPDATE numero SET ano = '" . $_GET['numAno'] . "'"
										. ", semestre = '" . $_GET['numSemestre'] . "'"
										. ", dt_inicio = '" . $_GET['dtInicio'] . "'"
										. ", dt_termino = " . $_GET['dtTermino']
										. ", tema = " . $_GET['txtTema']
										. ", descricao = " . $_GET['txtDescricao']
										. ", modulo = " . $_GET['numModulo']
										. ", num_curso = " . $_GET['Num_Curso']
									
									. " WHERE login='".$_GET['numero']."'" ;
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
					<h2 class="form-signin-heading">Alterar Projeto</h2>
					<label >Numero</label>
					<input type="hidden"  name="numero" value="<?=$_GET['numero']?>">
					<?=$dados[0];?>
				</div>
			</div>		
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Ano</label>
					<input type="numeric"  name="numAno"  class="form-control" placeholder="ANO" value=" <?=$dados[1]?>" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Semestre</label>
					<input type="numeric"  name="numSemestre"  class="form-control" placeholder="SEMESTRE" value="<?=$dados[2]?>" required>
				</div>
			</div>
	
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Data de Inicio</label>
					<input type="date"  name="dtInicio"  class="form-control" placeholder="DATA INICIO" value="<?=$dados[3]?>" required>	
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Data Termino</label>
					<input type="date"  name="dtTermino"  class="form-control" placeholder="DATA TERMINO" value="<?=$dados[4]?>" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Tema</label>
					<input type="text"  name="txtTema"  class="form-control" placeholder="TEMA" value="<?=$dados[4]?>" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Descricao</label>
					<textarea rows="4" cows="2" name="txtDescricao" class="form-control" placeholder="DESCRICAO" value="<?=$dados[5]?>"> </textarea>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Modulo</label>
					<input type="numeric"  name="numModulo"  class="form-control" placeholder="NOME" value="<?=$dados[4]?>" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">					
					<label>Curso</label>
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
		<button class="btn btn-lg btn-primary" name="alterar" type="submit">Alterar </button>
		<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='cad_Projeto.php' ">Voltar </button>
		</p>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

		