<?php
session_start();
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="index.php">In&iacute;cio</a></li>
<?php
	if(isset($_SESSION['categoria'])){
		if($_SESSION['categoria'] == 'C' ){
?>				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar <span class="caret"></span></a>
					<ul class="dropdown-menu">								
						<li><a href="cad_Usuario.php">Usu&aacute;rio</a></li>
						<li><a href="cad_Disciplina.php">Disciplina</a></li>
						<li><a href="cad_Curso.php">Curso</a></li>
						<li><a href="cad_Aluno.php">Aluno</a></li>
						<li><a href="cad_Grupo.php">Grupo</a></li>
						<li><a href="cad_Projeto.php">Projeto</a></li>	
					</ul>
				</li>
					<li><a href="tabela_Composto.php">Descri&ccedil;&atilde;o das Atividades</a></li>						
					<li><a href="lancar_Notas.php">Lan&ccedil;ar Nota</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relat&oacute;rios <span class="caret"></span></a>
					<ul class="dropdown-menu">								
						<li><a href="emitirRelatorio1.php">Relat&oacute;rio1</a></li>	
						<li><a href="emitirProjeto.php">Relat&oacute;rio Projeto</a></li>
						<li><a href="relatoriolistarGrupo.php">Relat&oacute;rio Grupo</a></li>
						<li><a href="relatoriolistarAluno.php">Relat&oacute;rio Aluno</a></li>
					</ul>
				</li>					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="logout.php">Sair</a></li>
					</ul>
<?php					
				}				
				if($_SESSION['categoria' ] == 'G'){		
?>		
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar <span class="caret"></span></a>
					<ul class="dropdown-menu">	
						<li><a href="cad_Aluno.php">Aluno</a></li>
						<li><a href="cad_Grupo.php">Grupo</a></li>
						<li><a href="cad_Projeto.php">Projeto</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listar <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="listarCurso.php">Curso</a></li>
						<li><a href="listarDisciplina.php">Disciplina</a></li>
						<li><a href="listarUsuario.php">Usuario</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relat&oacute;rios <span class="caret"></span></a>
					<ul class="dropdown-menu">								
						<li><a href="emitirRelatorio1.php">Relat&oacute;rio1</a></li>
						<li><a href="emitirProjeto.php">Relat&oacute;rio Projeto</a></li>
						<li><a href="relatoriolistarGrupo.php">Relat&oacute;rio Grupo</a></li>
					</ul>
				</li>				
					<li><a href="tabela_Composto.php">Descri&ccedil;&atilde;o das Atividades</a></li>											
					<ul class="nav navbar-nav navbar-right">
						<li><a href="logout.php">Sair</a></li>
					</ul>							
<?php		
					}	
				if($_SESSION['categoria'] == 'P'){
?>					
					<li><a href="lancar_Notas.php">Lan&ccedil;ar Nota</a></li>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="logout.php">Sair</a></li>
					</ul>
<?php					
				}			
			}else{
?>					
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.html">Entrar</a></li>
				</ul>
<?php				
			}
?>				
		</ul>
		</div>	
    </div>
</nav>
