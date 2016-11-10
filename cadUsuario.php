<?php
		require_once('conexao.php');
	if($con){
		$sql = "SELECT * FROM usuario WHERE login = '" . $_GET['txtLogin'] . "'";
		echo $sql;
		$res = pg_query($con, $sql);
		$qtd = pg_num_rows($res);
		if($qtd > 0){
			echo " O(A) usuario(a) " . $_GET['txtNome'] . " ja esta cadastrado(a) no sistema </p>";
		}else {
			$sql = "INSERT INTO usuario VALUES " . "(" . "'" . $_GET['txtLogin'] . "','" 
													. md5($_GET['senha']) . "','" 
													. $_GET['txtNome'] . "','" 
													. $_GET['txtCategoria'] . "','" 
													. $_GET['rdSituacao'] . "')";
			$res = pg_query($con, $sql);
			$qtd = pg_affected_rows($res);
			header ("location: cad_Usuario.php");
		}
	}else{
		echo "Falha da Conexao";
	}
pg_close($con);	
?>
