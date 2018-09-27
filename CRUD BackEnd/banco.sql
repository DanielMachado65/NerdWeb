create database crudnerdweb;
use crudnerdweb;

drop table usuario;
create table usuario(
  idusuario int primary key auto_increment,
  nome varchar(30),
  email varchar(30) unique,
  index (email)
);

insert into usuario(nome, email) values ("teste", "teste1@gmail.com");
insert into usuario(nome, email) values ("teste", "teste2@gmail.com");
insert into usuario(nome, email) values ("teste", "teste3@gmail.com");
insert into usuario(nome, email) values ("teste", "teste4@gmail.com");
insert into usuario(nome, email) values ("teste", "teste5@gmail.com");
insert into usuario(nome, email) values ("teste", "teste6@gmail.com");
insert into usuario(nome, email) values ("teste", "teste8@gmail.com");
insert into usuario(nome, email) values ("teste", "teste7@gmail.com");
insert into usuario(nome, email) values ("teste", "teste9@gmail.com");
insert into usuario(nome, email) values ("teste", "teste10@gmail.com");
insert into usuario(nome, email) values ("teste", "teste11@gmail.com");
insert into usuario(nome, email) values ("teste", "teste22@gmail.com");
insert into usuario(nome, email) values ("teste", "teste33@gmail.com");
insert into usuario(nome, email) values ("teste", "teste44@gmail.com");
insert into usuario(nome, email) values ("teste", "teste55@gmail.com");
insert into usuario(nome, email) values ("teste", "teste66@gmail.com");
insert into usuario(nome, email) values ("teste", "teste87@gmail.com");
insert into usuario(nome, email) values ("teste", "teste78@gmail.com");
insert into usuario(nome, email) values ("teste", "teste99@gmail.com");
insert into usuario(nome, email) values ("teste", "teste110@gmail.com");


select * from usuario;

SELECT * FROM usuario;

SELECT * FROM usuario limit 0, 10;

select * from usuario limit 0, 10;
