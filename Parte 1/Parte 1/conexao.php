
<?php

$str = "host=localhost dbname=projetointegrador port=5432 user=senac password=senac123";
$con = pg_connect($str);
	if($con){
		echo "Conexao estabelecida";
	} else {
		echo "Erro de Conexao";
	}

?>	