create database repaso_mvc;
use repaso_mvc;

create table usuario (
id_usuario int (4) not null auto_increment,
nombre varchar (100) not null,
apellidos varchar (100) not null,
primary key (id_usuario)
);

insert into usuario values(0,'jorge','garcia'),
(0,'luis','gabo'),
(0,'angela','mosqueda'),
(0,'karen','montoya');

create table nota (
id_nota int (4) not null auto_increment,
nombre varchar (50) not null,
calificacion varchar (23) not null,
primary key (id_nota)
);

insert into nota values(0,'matematicas','89'),
(0,'español tio','78'),
(0,'fisica','90'),
(0,'perro intenso','40');