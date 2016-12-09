<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<h2>Lista de Grupo</h2>
<?php
session_start();
relatorio1();
	function relatorio1 () {
		require_once('conexao.php');
		if($con){
			$sql = "select curso.nome, grupo.nome, aluno.nome
											FROM aluno 
												inner join participa on aluno.matricula = participa.matricula
												inner join grupo on grupo.id = participa.id_grupo
												inner join projeto on grupo.num_proj = projeto.numero
												inner join curso on projeto.num_curso = curso.numero
			WHERE curso.nome = '" . $_GET['Num_Curso'] . "' and projeto.ano = '" 
									. $_GET['num_Ano'] .  "' and projeto.semestre = '" 
									. $_GET['semestre'] . "'";
			$resultado = pg_query($con, $sql);
			echo "<table border='4' >" ;
				echo "<tr>";
					echo "<td align='center'> Nome do Curso </td>";
					echo "<td align='center'> Nome do Grupo </td>";
					echo "<td align='center'> Nota do Aluno </td>";	
				echo "</tr>";
			while($dados = pg_fetch_row($resultado)){
				echo "<tr>";
					echo "<td align='center' >" . $dados[0] . "</td>";
					echo "<td align='center' >" . $dados[1] . "</td>";
					echo "<td align='center' >" . $dados[2] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	pg_close($con);
	}
?>

<html>
	<body>
		</p>
		</p>
		<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='index.php' ">Voltar </button>
		</p>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>		
	</body>
</html>
