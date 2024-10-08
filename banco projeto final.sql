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