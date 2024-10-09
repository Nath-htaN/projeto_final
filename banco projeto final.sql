create database migsupermarket; /*criação do BD*/
use migsupermarket;
/*criação das tabelas*/
create table usuario(
codigo int not null auto_increment,
nome varchar(45),
email varchar(45),
senha varchar(11),
telefone int(11),
tipo varchar(45),
primary key(codigo)
);
create table categoria(
codigo int not null auto_increment,
nome varchar(45),
primary key(codigo)
);
create table produto(
codigo int not null auto_increment,
nome varchar(45),
preco float,
descricao varchar(300),
primary key(codigo)
);
/*chaves estrangeiras*/
alter table produto add column categoria int;
alter table produto add foreign key(categoria) references categoria(codigo);
describe produto;
insert into usuario(nome, email, senha, telefone, tipo) values('Luany de Freitas', 'luany@gmail.com', '!@Luany1', '315858742', 'Cliente');
insert into usuario(nome, email, senha, telefone, tipo) values('Nathan Costa', 'nathan@gmail.com', '!@Nathan2usuario', '315656782', 'Funcionário');
select * from usuario;
insert into categoria(nome) values('Limpeza');
insert into categoria(nome) values('Hortifruti');
insert into categoria(nome) values('Padaria');
insert into categoria(nome) values('Açougue');
select*from categoria;
