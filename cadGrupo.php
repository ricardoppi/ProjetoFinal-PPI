<?php
		require_once('conexao.php');
	if($con){
		$sql = "SELECT * FROM grupo WHERE id = '" . $_GET['numID'] . "'";
		$res = pg_query($con, $sql);
		$qtd = pg_num_rows($res);
		if($qtd > 0){
			echo " O curso " . $_GET['txtNome'] . " ja esta cadastrado(a) no sistema </p>";
		}else {
			$sql = "INSERT INTO grupo VALUES " . "(" . "'" . $_GET['numID'] . "','" 
												. $_GET['txtNome'] . "','" 
												. $_GET['num_Proj'] . "')";
												
			$res = pg_query($con, $sql);
			$qtd = pg_affected_rows($res);
			header ("location: cad_Grupo.php");
		}
	}else{
		echo "Falha da Conexao";
	}
pg_close($con);	
?>
