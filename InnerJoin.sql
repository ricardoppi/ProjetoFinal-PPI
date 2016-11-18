select * from participa;
select * from aluno;

SELECT * FROM participa WHERE matricula = '1';

select * from grupo;
select * from projeto;
select * from composto;
select * from disciplina;

select * from curso;

select count(id_grupo) from participa;

delete from participa where matricula = '5';

SELECT aluno.nome, curso.nome
		FROM aluno 
			inner join participa on aluno.matricula = participa.matricula
			inner join grupo on grupo.id = participa.id_grupo
			inner join projeto on grupo.num_proj = projeto.numero
			inner join curso on projeto.num_curso = curso.numero;


