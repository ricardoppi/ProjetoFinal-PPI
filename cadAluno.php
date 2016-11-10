<?php
	require_once('conexao.php');
	if($con){
		$sql = "SELECT * FROM aluno WHERE matricula = '" . $_GET['txtMatricula'] . "'";
		$res = pg_query($con, $sql);
		$qtd = pg_num_rows($res);
		if($qtd > 0){
			echo " O(A) aluno(a) " . $_GET['txtNome'] . " ja esta cadastrado(a) no sistema </p>";
		}else {
			$sql = "INSERT INTO aluno VALUES " . "(" . "'" . $_GET['txtMatricula'] . "','" 
												. $_GET['txtNome'] . "','" 
												. $_GET['rdSexo'] . "','" 
												. $_GET['data'] . "','" 
												. $_GET['txtCidade'] . "','" 
												. $_GET['UF'] . "'" . ")";
			$res = pg_query($con, $sql);
			$qtd = pg_affected_rows($res);
			header ("location: cad_Aluno.php");
			
		}
	}else{
		echo "Falha da Conexao";
	}
pg_close($con);	
?>
