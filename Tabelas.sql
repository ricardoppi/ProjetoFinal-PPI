CREATE TABLE curso(
	numero		integer primary key,
	nome		varchar(150) not null,
	sigla		char(3) not null
);

CREATE TABLE disciplina(
	codigo		integer primary key,
	nome		varchar(80) not null,
	ch		integer not null
);

CREATE TABLE aluno(
	matricula	char(15) primary key,
	nome		varchar(80) not null,
	sexo		char(1) not null,
	dtnasc		date not null,
	cidade		varchar(40) not null,
	uf		char(2) not null
);

CREATE TABLE usuario(
	login		varchar(20) primary key,
	senha		varchar(50) not null,
	nome		varchar(80) not null,
	categoria	char(1) not null
);

CREATE TABLE projeto (
	numero		serial primary key,
	ano		integer not null,
	semestre	integer not null,
	modulo		char(3) not null,
	dt_inicio	date not null,
	dt_termino	date not null,
	tema		varchar(100) not null,
	descricao	varchar(8000) not null,
	num_curso	integer references curso (numero)
);

CREATE TABLE composto (
	num_proj	integer references projeto (numero),
	cod_disc	integer references disciplina (codigo),
	desc_atividade	varchar(2000)
);	

CREATE TABLE grupo (
	id		integer primary key,
	nome		varchar(60) not null,
	num_proj	integer references projeto (numero)
);

CREATE TABLE participa (
	matricula	char(15) references aluno (matricula),
	id_grupo	integer references grupo (id),
	nota		numeric(3,1)
);



		



