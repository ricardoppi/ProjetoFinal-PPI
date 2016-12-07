<?php
		require_once('conexao.php');
	if($con){
		$sql = "SELECT * FROM participa WHERE matricula = '" . $_GET['matAluno'] . "' and id_grupo = " . $_GET['idGrupo'];
		$res = pg_query($con, $sql);
		$qtd = pg_num_rows($res);
		if($qtd > 0){
			$sql = 'SELECT * FROM aluno';
			$res = pg_query($con, $sql);
			$linha = pg_fetch_array($res);
			echo " A Nota " . $_GET['numNota'] . " do aluno " . $linha[1] . " ja esta cadastrado(a) no sistema </p>";
		}else {
			$res = '0';
			$quantidade = 'SELECT count(id_grupo) qtd FROM participa WHERE id_grupo = ' . $_GET['idGrupo'];
			$res = pg_query($con, $quantidade);
			$dados = pg_fetch_array($res);
			if($dados['qtd'] < 4){
				$sql = "INSERT INTO participa VALUES " . "(" . "'" . $_GET['matAluno'] . "','" 
													. $_GET['idGrupo'] . "','" 
													. $_GET['numNota'] . "')";									
				$res = pg_query($con, $sql);
				$qtd = pg_affected_rows($res);
				header ("location: lancar_Notas.php");
			}else{
				echo ' Este Grupo ja atingiu o limite de alunos cadastrados, favor cadastre em outro grupo';
			}	
			
		}
	}else{
		echo "Falha da Conexao";
	}
pg_close($con);	
?>