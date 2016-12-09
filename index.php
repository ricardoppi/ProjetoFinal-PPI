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
<div class="container">
	<h2 class="form-signin-heading">Lista de Alunos e seus grupos</h2>
		<?php
			echo "<div class='container'>";
			require_once('menu.php');

			grupo();
				function grupo () {
					require_once('conexao.php');
					if($con){
						$sql = "SELECT aluno.nome, curso.nome, grupo.id, participa.nota,aluno.matricula, curso.sigla
														FROM aluno 
															inner join participa on aluno.matricula = participa.matricula
															inner join grupo on grupo.id = participa.id_grupo
															inner join projeto on grupo.num_proj = projeto.numero
															inner join curso on projeto.num_curso = curso.numero;";
						$resultado = pg_query($con, $sql);
						echo "<table border='4' >" ;
							echo "<tr>";
							echo "<td align='center'><strong> Nome do Aluno </strong></td>";
							echo "<td align='center'><strong> Nome do Curso </strong></td>";
							echo "<td align='center'><strong> Nota </strong></td>";
							echo "<td align='center'><strong> Link do site </strong></td>";
							echo "</tr>";
						while($dados = pg_fetch_row($resultado)){
							echo "<tr>";
							echo "<td align='center' >" . $dados[0] . "</td>";
							echo "<td align='center' >" . $dados[1] . "</td>";
							echo "<td align='center' >" . $dados[3] . "</td>";
							echo "<td align='center' ><a target='blank' href='http://" .trim(strtolower($dados[5])). ".projetointegrador.com.br/~".$dados[4]."'>link</a></td>";
							echo "</tr>";

						}
						echo "</table>";
					}
				pg_close($con);
				}
			echo "</div>";	
		?> 
		
</div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
