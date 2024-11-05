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
-- exibindo toda a tabela
select  * from filme;

-- conta a quantidade den registros
select  count(*) from filme;

-- Instrução para retornar um unico registro por id
select * from filme where id = 5;

-- Instrução para retornar apenas nome e ano de todos
select titulo, ano from filme;

-- Instrução para atualizar um registro por id/ 
update filme set titulo = "Maquina Mortifera" where id = 5;

-- Instrução para excliuir um registro por id
delete from filme WHERE id = 5;

-- Criando a tabela Usuario
create table usuario (
	id int auto_increment primary key,
	nome varchar(100) not null
);

-- Criando a tabela favorito
create table favorito (
	usuario_id int,
	filme_id int
);