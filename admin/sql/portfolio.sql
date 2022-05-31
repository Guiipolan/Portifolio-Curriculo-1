show databases;
create database portfolio;

use portfolio; 

#criar  uma tabela de cursos
drop table cursos; 
create table cursos (
	id_curso int unsigned not null auto_increment primary key,
    nome varchar(50) not null,
    carga_horaria int(3) unsigned not null,
    instituicao varchar(30) not null
    
);


select * from cursos;

insert into cursos (nome, carga_horaria, instituicao) values ('Lógica de programacao ', 20, 'Targert Trust');
insert into cursos (nome, carga_horaria, instituicao) values ('HTML, CSS e JS', 40, 'Targert Trust');
insert into cursos (nome, carga_horaria, instituicao) values ('Introducao ao SQL', 20, 'Targert Trust');





