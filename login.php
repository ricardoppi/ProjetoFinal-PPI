<?php
	session_start();
	require_once('conexao.php');
	if(isset($_GET['txtLogin']) && isset($_GET['senha'])){
		if($con){
			$sql = "SELECT * FROM usuario where login = '" . $_GET['txtLogin'] . "'" . "AND senha = '" . md5($_GET['senha']) . "'";
			$resultado = pg_query($con, $sql);
			if(pg_num_rows($resultado) == 1){
				$dados = pg_fetch_array($resultado);
				$_SESSION['login'] = $_GET['txtLogin'];
				$_SESSION['categoria'] = $dados['categoria'];
				header ("location: index.php");
			}else{
				header ("location: login.html");
			}	
		}else{
			echo "CONEXAO INCORRETA";
		}
	}	
pg_close($con);	

?>