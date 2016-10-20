<?php
 
 
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
                    echo '<li>';
                        echo '<a href="pagina_inicial.html">In&iacute;cio</a>';
                    echo '</li>';
                    echo '<li>';
                        echo '<a href="cadUsuario.html">Cadastrar Usu&aacute;rio</a>';
                    echo '</li>';
                    echo '<li>';
                        echo '<a href="cadDisciplina.html">Cadastrar Disciplina</a>';
                    echo '</li>';
                    echo '<li>';
                        echo '<a href="cadAluno.html">Cadastrar Aluno</a>';
                    echo '</li>';
                    echo '<li>';
                        echo '<a href="cadCurso.html">Cadastrar Curso</a>';
                    echo '</li>';
                echo '</ul>';
				echo '<ul class="nav navbar-nav navbar-right">';
					echo '<li>';
						echo '<a href="index.html">Entrar</a>';
					echo '</li>';
					echo '<li>';
						echo '<a href="logout.php">Sair</a>';
					echo '</li>';
				echo '</ul>';
            echo '</div>';
        echo '</div>';
    echo '</nav>';
?>	