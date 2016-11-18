<?php
session_start();
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">

<?php
			if(isset($_SESSION['categoria'])){
				if($_SESSION['categoria'] == 'C' ){
?>					
					<li>
						<a href="index.php">In&iacute;cio</a>					
					</li>
					<li>
						<a href="cad_Usuario.php">Cadastrar Usu&aacute;rio</a>
					</li>
					
					<li>
						<a href="cad_Disciplina.php">Cadastrar Disciplina</a>
					</li>
					<li>
						<a href="cad_Curso.php">Cadastrar Curso</a>
					</li>
					<li>
						<a href="cad_Aluno.php">Cadastrar Aluno</a>
					</li>
					<li>
						<a href="cad_Grupo.php">Cadastrar Grupo</a>
					</li>
					<li>
						<a href="cad_Projeto.php">Cadastrar Projeto</a>
					</li>	
					<li>
						<a href="tabela_Composto.php">Descri&ccedil;&atilde;o das Atividades</a>
					</li>						
					<li>
						<a href="lancar_Notas.php">Lan&ccedil;ar Nota</a>
					</li>					
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="logout.php">Sair</a>
						</li>
					</ul>
<?php					
				}				
				if($_SESSION['categoria' ] == 'G'){		
?>				
					<li>
						<a href="index.php">In&iacute;cio</a>					
					</li>
					<li>
						<a href="listarCurso.php">Listar Curso</a>
					</li>
					<li>
						<a href="listarDisciplina.php">Listar Disciplina</a>
					</li>
					<li>
						<a href="listarUsuario.php">Listar Usuario</a>
					</li>
					<li>
						<a href="cad_Aluno.php">Cadastrar Aluno</a>
					</li>
					<li>
						<a href="cad_Grupo.php">Cadastrar Grupo</a>
					</li>
					<li>
						<a href="tabela_Composto.php">Descri&ccedil;&atilde;o das Atividades</a>
					</li>					
					<li>
						<a href="cad_Projeto.php">Cadastrar Projeto</a>
					</li>						
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="logout.php">Sair</a>
						</li>
					</ul>							
<?php		
					}	
				if($_SESSION['categoria'] == 'P'){
?>					
					<li>
						<a href="index.php">In&iacute;cio</a>
					</li>
					<li>
						<a href="lancar_Notas.php">Lan&ccedil;ar Nota</a>
					</li>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="logout.php">Sair</a>
						</li>
					</ul>
<?php					
				}			
			}else{
?>					
				<li>
					<a href="index.php">In&iacute;cio</a>					
				</li>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="login.html">Entrar</a>
					</li>
				</ul>
<?php				
			}
?>				
		</ul>
		</div>	
    </div>
</nav>
