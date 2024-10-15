create database meuBone;

use meuBone;

-- usuario para ambas as jornadas
create table Usuario(
	codigo int not null auto_increment primary key, 
	nome varchar (100) not null,
    telefone varchar(100) not null,
    email varchar(50) not null,
    login varchar (100) not null,
    senha varchar(100) not  null,
    tipo varchar(20) not null
   )Engine=InnoDB;
   
-- Só criar duas tabelas caso os dados de pessoa Assistida seja diferente da de pessoa Acompanhante
 create table Assistida(
	codigo int not null auto_increment primary key, 
	nome varchar (100) not null,
    sobrenome varchar(100) not null,
    telefone varchar(100) not null,
    email varchar(50) not null,
    codAcompanhante int (20) not null
	)Engine=InnoDB;

 create table Acompanhante(  
	codigo int not null auto_increment primary key, 
	nome varchar (100) not null,
    sobrenome varchar(100) not null,
    telefone varchar(100) not null,
    email varchar(50) not null,
    login varchar (100) not null,
    senha varchar(100) not  null
)Engine=InnoDB;


alter table Assistida add constraint aacompanhante foreign key(codAcompanhante)
references Acompanhante(codigo);

drop database meuBone;
