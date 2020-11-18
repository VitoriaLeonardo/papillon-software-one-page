CREATE DATABASE db_php;

USE db_php;

drop database db_php;


create table funcionario(
	idFuncionario int auto_increment,
	login varchar (20) not null,
	senha varchar (20) not null,
	nomeFuncionario varchar (50),
	cargo varchar(10) not null,
    unique (login),
    PRIMARY KEY (idFuncionario)
);

insert into funcionario values(default, 'papillon', '123', 'Papillon', 'Teste');
select*from funcionario;

SELECT *FROM funcionario;

INSERT INTO funcionario VALUES (null, 'func69', 'senhanadasujestiva', 'Samuel Felix', 'comum');


create table cliente(
	idCliente int auto_increment,
	nomeCliente varchar(50) NOT NULL,
	responsavelCliente varchar(50) NOT NULL,
	cnpjCliente varchar (18) not null,
	telefoneCliente varchar (30),
	emailCliente varchar (40),
    primary key (idCliente)
);

INSERT INTO cliente VALUES (null, 'Levi Cláudio Luiz Teixeira','Yan Gabriel', '86.071.373/0001-79' , '(81)3620-2386','levi@gmail.com');


create table enderecoCliente (
	id_enderecoCli int auto_increment,
	cep varchar(15),
	rua varchar(30),
	numero varchar(10),
	bairro varchar(20),
	cidade varchar(50),
	uf char(2),
    idCliente int,
    primary key (id_enderecoCli),
    foreign key (idCliente) references cliente(idCliente)
);

INSERT INTO enderecoCliente VALUE (null,"05767-340","Rua Domingos de Góes","315","Jardim Catanduva","São Paulo","SP",1);


create table agenda (
	nomeCliente varchar(50) NOT NULL,
	dataInicio datetime,
	dataTermino datetime,
	descricaoProjeto varchar(500),
	comentarioCliente varchar(500)
);

INSERT INTO agenda VALUES ('Levi Cláudio Luiz Teixeira', '2020-02-05', '2020-07-28', 'Criar um Site que o socio entre com login, possa cadastrar seus serviços,produtos, cadastrar seus clientes e contratos , cadastrar atividade dos consultor(socio), consultar clientes e atividades que tem no dia, o aplicativo pode ter o mapas da empresa ou do cliente para facilitar uma busca, um botão de ligação direta para os consultores sem ter que ficar procurando em seus contatos , botão de sair ou logoff e o banco de dados será no MySQL.', 'Em andamento');

SELECT *FROM agenda;

create table servicos (
	idServico int auto_increment,
	nomeServico varchar(50),
	tipoServico varchar(30),
	precoServico float,
	descricaoServico varchar(500),
    primary key (idServico)
);

create table contato(
	idContato int auto_increment,
    emailContato varchar(50),
    assuntoContato varchar(20),
    mensagemContato varchar(500),
    telefoneContato varchar(15),
    primary key(idContato)
);

insert into contato values(default, 'teste@email.com', 'Teste', 'Teste Assunto', '1111111111');
select *from contato;

INSERT INTO servicos VALUES (null, 'Site empresarial Papillon', 'Criação de site', 5000, 'Criar um site que o socio entre com login, possa cadastrar seus serviços,produtos, cadastrar seus clientes e contratos , cadastrar atividade dos consultor(socio), consultar clientes e atividades que tem no dia, o aplicativo pode ter o mapas da empresa ou do cliente para facilitar uma busca, um botão de ligação direta para os consultores sem ter que ficar procurando em seus contatos, botão de sair ou logoff e o banco de dados será no MySQL.');

SELECT *FROM servicos;
   
CREATE USER 'papillon'@'localhost' IDENTIFIED WITH mysql_native_password BY '123';
 GRANT ALL PRIVILEGES ON db_php.* TO 'papillon'@'localhost' WITH GRANT OPTION;
        