create database Livros;

use Livros;

CREATE TABLE Livro (
Cod_Livro int not null primary key auto_increment,
Nome_Livro varchar(50) not null,
Ano int,
Quant_Pag int not null,
Edicao varchar(10) not null,
Descricao varchar(500) not null,
Idioma varchar(15) not null,
Preço decimal not null
)engine=innodb;


select * from Livro;
truncate table Livro;
