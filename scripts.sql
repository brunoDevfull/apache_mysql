-- criando o banco de dados
create database filmesdb;

-- seleciona o banco de dados
use filmesdb;

-- criando a tabela filme
create table filme (
	id int auto_increment primary key,
	titulo varchar(255) not null,
	ano int not null,
	-- tipo de dado para texto gigantes
	-- nem todo db vai ter esse tipo
	descricao text
);

select  * from filme;
select  count(*) from filme;
