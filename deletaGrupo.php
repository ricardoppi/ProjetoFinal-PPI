<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<?php

require_once('conexao.php');
	if($con){
	$sql = "DELETE FROM grupo WHERE id = '" . $_GET['id'] . "'";
		$res = pg_query($con, $sql);
		echo "<br>O Grupo foi deletado com sucesso. ";
	}else{
		echo "Falha da Conexao";
	}
	
pg_close($con);
?>

<html>
	<body>
		</p>
		</p>
		<button class="btn btn-lg btn-default" type="button" onclick="window.location.href='cad_Grupo.php' ">Voltar </button>
		</p>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

		