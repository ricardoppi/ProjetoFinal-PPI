<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	function confirmaExclusao (matricula){
		var menssagem = window.confirm('Deseja realmente excluir este Aluno?');
		if(menssagem == false){
			return false;
		}else{
			window.location="deletaAluno.php?matricula="+matricula;
		}
	}
</script>
<?php
matricula();
	function matricula () {
		require_once('conexao.php');
		if($con){
			$sql = "SELECT * FROM aluno ORDER BY matricula";
			$resultado = pg_query($con, $sql);
			echo "<table border='4' >" ;
				echo "<tr>";
				echo "<td align='center'> Matricula </td>";
				echo "<td align='center'> Nome </td>";
				echo "<td align='center'> Data de Nascimento </td>";
				echo "<td align='center'> Cidade </td>";
				echo "<td align='center'> Sexo </td>";
				echo "<td align='center'> UF </td>";
				echo "<td align='center'> Ação </td>";
			while($dados = pg_fetch_row($resultado)){
				echo "<tr>";
				echo "<td align='center' >" . $dados[0] . "</td>";
				echo "<td align='center' >" . $dados[1] . "</td>";
				echo "<td align='center' >" . $dados[2] . "</td>";
				echo "<td align='center' >" . $dados[3] . "</td>";
				echo "<td align='center' >" . $dados[4] . "</td>";
				echo "<td align='center' >" . $dados[5] . "</td>";				
				echo "<td align='center' >"; 
					echo '<a href="alteraAluno.php?matricula=' . $dados[0] . '"><span class="glyphicon glyphicon-pencil"></span></a>';
					echo '<span class="glyphicon glyphicon-remove" onclick="confirmaExclusao(\''.$dados[0].'\')"></span></a>';
				echo "</td>";				
				
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
		<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='cad_Aluno.php' ">Voltar </button>
		</p>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>		
	</body>
</html>
