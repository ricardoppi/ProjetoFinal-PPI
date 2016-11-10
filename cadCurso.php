<?php
		require_once('conexao.php');
	if($con){
		$sql = "SELECT * FROM curso WHERE numero = '" . $_GET['numNumero'] . "'";
		$res = pg_query($con, $sql);
		$qtd = pg_num_rows($res);
		if($qtd > 0){
			echo " O curso " . $_GET['txtNome'] . " ja esta cadastrado(a) no sistema </p>";
		}else {
			$sql = "INSERT INTO curso VALUES " . "(" . "'" . $_GET['numNumero'] . "','" . $_GET['txtNome'] . "','" . $_GET['txtSigla'] . "')";
			$res = pg_query($con, $sql);
			$qtd = pg_affected_rows($res);
			header ("location: cad_Curso.php");
		}
	}else{
		echo "Falha da Conexao";
	}
pg_close($con);	
?>
