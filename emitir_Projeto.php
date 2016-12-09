<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<h2>Lista de todos os Projeto</h2>
<?php
session_start();
relatorio1();
	function relatorio1 () {
		require_once('conexao.php');
		if($con){
			$sql = "SELECT projeto.numero, projeto.modulo, projeto.semestre, projeto.ano, projeto.dt_inicio, projeto.dt_termino, 
						projeto.tema, projeto.descricao, curso.nome
								FROM projeto 
								inner join curso on projeto.num_curso = curso.numero
								WHERE  projeto.semestre = '" . $_GET['semestre'] . "' 
									and projeto.ano = '" . $_GET['num_Ano'] .  "'";
						
			$resultado = pg_query($con, $sql);
			echo "<table border='4' >" ;		
					echo "<tr>";
						echo "<td align='center'> Numero </td>";
						echo "<td align='center'> Modulo </td>";	
						echo "<td align='center'> Semestre </td>";
						echo "<td align='center'> Ano </td>";
						echo "<td align='center'> Data Inicio </td>";
						echo "<td align='center'> Data Termino </td>";
						echo "<td align='center'> Tema </td>";
					echo "</tr>";
			while($dados = pg_fetch_row($resultado)){
					echo"<tr>";
					echo "<td align='center' >" . $dados[0] . "</td>";
					echo "<td align='center' >" . $dados[1] . "</td>";
					echo "<td align='center' >" . $dados[2] . "</td>";
					echo "<td align='center' >" . $dados[3] . "</td>";
					echo "<td align='center' >" . $dados[4] . "</td>";
					echo "<td align='center' >" . $dados[5] . "</td>";
					echo "<td align='center' >" . $dados[6] . "</td>";
					echo"</tr>";
					

					$sqlComp = "SELECT c.desc_atividade, d.codigo, d.nome 
									FROM disciplina d
										 inner join composto c on c.cod_disc = d.codigo 
										 WHERE c.num_proj= " . $dados[0];
					$rsDisc=pg_query($con,$sqlComp);
					echo "<table border='4' >" ;		
					echo "<tr>";
						echo "<td align='center'> Nome Disciplina </td>";
						echo "<td align='center'> Descrição da Disciplina </td>";	
					echo "</tr>";	
					echo "<tr align='center' >" . $dados[7] . "</tr>";
					while($rowDiscp = pg_fetch_array($rsDisc)){
							echo "<tr>";
								echo "<td align='center' >" . $rowDiscp['nome'] . "</td>";
								echo "<td align='center' >" . $rowDiscp['desc_atividade'] . "</td>";
							echo "</tr>";	
					}
					echo "</table>";	
			}
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
