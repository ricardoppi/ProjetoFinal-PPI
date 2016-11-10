<?php
session_start();
echo '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">';
    echo '<div class="container">';
        echo '<div class="navbar-header">';
        echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">';
                echo '<span class="sr-only"></span>';
                echo '<span class="icon-bar"></span>';
                echo '<span class="icon-bar"></span>';
                echo '<span class="icon-bar"></span>';
            echo '</button>';
        echo '</div>';
        echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
			echo '<ul class="nav navbar-nav">';
			if(isset($_SESSION['categoria'])){
				if($_SESSION['categoria'] == 'C'){
					echo '<li>';
						echo '<a href="index.php">In&iacute;cio</a>';						
					echo '</li>';		
					echo '<li>';
						echo '<a href="cad_Usuario.php">Cadastrar Usu&aacute;rio</a>';
					echo '</li>';
					echo '<li>';
						echo '<a href="cad_Disciplina.php">Cadastrar Disciplina</a>';
					echo '</li>';
					echo '<li>';
						echo '<a href="cad_Curso.php">Cadastrar Curso</a>';
					echo '</li>';
					echo '<ul class="nav navbar-nav navbar-right">';
						echo '<li>';
							echo '<a href="logout.php">Sair</a>';
						echo '</li>';
					echo '</ul>';		
				}
				if($_SESSION['categoria'] == 'P'){
					echo '<li>';
						echo '<a href="index.php">In&iacute;cio</a>';						
					echo '</li>';
					echo '<li>';
						echo '<a href="cad_Aluno.php">Cadastrar Aluno</a>';
					echo '</li>';
					echo '<ul class="nav navbar-nav navbar-right">';
						echo '<li>';
							echo '<a href="logout.php">Sair</a>';
						echo '</li>';
					echo '</ul>';
				}
				if($_SESSION['categoria'] == 'G'){
					echo '<li>';
						echo '<a href="index.php">In&iacute;cio</a>';						
					echo '</li>';					
					echo '<ul class="nav navbar-nav navbar-right">';
						echo '<li>';
							echo '<a href="logout.php">Sair</a>';
						echo '</li>';
					echo '</ul>';
				}				
			}else{
				echo '<li>';
					echo '<a href="index.php">In&iacute;cio</a>';						
				echo '</li>';
				echo '<ul class="nav navbar-nav navbar-right">';
					echo '<li>';
						echo '<a href="login.html">Entrar</a>';
					echo '</li>';
				echo '</ul>';
			}
			echo '</ul>';
		echo '</div>';		
    echo '</div>';
echo '</nav>';
?>	