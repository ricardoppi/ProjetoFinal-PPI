<?php
		require_once('conexao.php');
	if($con){
		$sql = "SELECT * FROM composto WHERE num_proj = '" . $_GET['numProj'] . "'";
		$res = pg_query($con, $sql);
		$qtd = pg_num_rows($res);
		if($qtd > 0){
			$sql = 'SELECT * FROM projeto';
			$res = pg_query($con, $sql);
			$linha = pg_fetch_array($res);
			echo " O Projeto " . $linha[0] . " ja esta cadastrado(a) no sistema </p>";
		}else {
				$sql = "INSERT INTO composto VALUES " . "(" . "'" . $_GET['numProj'] . "','" 
													. $_GET['codDisciplina'] . "','" 
													. $_GET['txtDescricao'] . "')";									
				$res = pg_query($con, $sql);
				$qtd = pg_affected_rows($res);
				header ("location: tabela_Composto.php");	
			
		}
	}else{
		echo "Falha da Conexao";
	}
pg_close($con);	
?>
