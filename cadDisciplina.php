<?php
		require_once('conexao.php');
		if($con){
			$sql = "SELECT * FROM disciplina WHERE codigo = " . $_GET['codigo'] ;
			$res = pg_query($con, $sql);
			$qtd = pg_num_rows($res);
			if($qtd > 0){
				echo " A disciplina " . $_GET['txtNome'] . " ja esta cadastrado(a) no sistema </p>";
			}else {
				$sql = "INSERT INTO disciplina VALUES " . "(" . $_GET['codigo'] . ",'" . $_GET['txtNome'] . "'," . $_GET['numCH'] . ")";
				$res = pg_query($con, $sql);
				$qtd = pg_affected_rows($res);
				header ("location: cad_Disciplina.php");
			}
		}else{
			echo "Falha da Conexao";
		}
pg_close($con);	
?>
