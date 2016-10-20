<?php
	require_once('conexao.php');
	if(isset($_GET['txtLogin']) && isset($_GET['senha'])){
		if($con){
			$sql = "SELECT * FROM usuario where login = '" . $_GET['txtLogin'] . "'" . "AND senha = '" . md5($_GET['senha']) . "'";
			$resultado = pg_query($con, $sql);
			if(pg_num_rows($resultado) == 1){
				$dados = pg_fetch_array($resultado);
				header ("location: pagina_inicial.html");
			}else{
				header ("location: index.html");
			}	
		}else{
			echo "CONEXAO INCORRETA";
		}
	}else{
		echo "Login e senha incorretos, tente novamente!";
		
	}	
pg_close($con);	

?>