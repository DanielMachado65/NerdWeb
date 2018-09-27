create database crudnerdweb;
use crudnerdweb;

create table usuario(
  idusuario int primary key,
  nome varchar(30),
  email varchar(30) unique,
  index (email)
);

select * from usuario;
