<?php
	require_once('conexao.php');
	if($con){
		$sql = "SELECT * FROM projeto WHERE numero = '" . $_GET['numNumero'] . "'";
		$res = pg_query($con, $sql);
		$qtd = pg_num_rows($res);
		if($qtd > 0){
			echo " O Projeto " . $_GET['txtTema'] . " ja esta cadastrado(a) no sistema </p>";
		}else {
			$sql = "INSERT INTO projeto VALUES " . "(" . $_GET['numNumero'] . "," 
													. $_GET['numAno'] . "," 
													. $_GET['txtSemestre'] . ",'"
													. $_GET['txtModulo'] . "','"
													. $_GET['dtInicio'] . "','"
													. $_GET['dtTermino'] . "','"
													. $_GET['txtTema'] . "','"
													. $_GET['txtDescricao'] . "',"
													. $_GET['Num_Curso'] . ")";																						 
			$res = pg_query($con, $sql);
			$qtd = pg_affected_rows($res);
			header ("location: cad_Projeto.php");
		}
	}else{
		echo "Falha da Conexao";
	}
pg_close($con);	
?>
