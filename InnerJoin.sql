select * from participa;
select * from aluno;

SELECT * FROM participa WHERE matricula = '1';

select * from grupo;
select * from projeto;
select * from composto;
select * from disciplina;

select * from participa;

select count(id_grupo) from participa;

delete from composto where cod_disc = '2';

SELECT aluno.nome, curso.nome, grupo.id
		FROM aluno 
			inner join participa on aluno.matricula = participa.matricula
			inner join grupo on grupo.id = participa.id_grupo
			inner join projeto on grupo.num_proj = projeto.numero
			inner join curso on projeto.num_curso = curso.numero;

SELECT aluno.matricula, aluno.nome, participa.nota, curso.nome
		FROM aluno
			inner join participa on aluno.matricula = participa.matricula
			inner join grupo on grupo.id = participa.id_grupo
			inner join projeto on grupo.num_proj = projeto.numero
			inner join curso on projeto.num_curso = curso.numero
			WHERE curso.nome = 'Gestão da Tecnologia da Informação' and projeto.ano = '2015' and projeto.semestre = '2' ORDER BY aluno.nome;

select count(ano) from projeto where ano = '2016';

select * from grupo;
select * from projeto;
select * from curso;
select * from disciplina;



SELECT projeto.numero, projeto.ano, projeto.semestre, projeto.modulo, disciplina.nome, composto.desc_atividade,
					projeto.dt_inicio, projeto.dt_termino, projeto.tema, projeto.descricao, curso.nome
								FROM projeto 
								inner join curso on projeto.num_curso = curso.numero
								inner join composto on composto.num_proj = projeto.numero
								inner join disciplina on projeto.num_curso = curso.numero
								WHERE projeto.modulo = 'III';

