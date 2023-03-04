create database bd_rafael;

use bd_rafael;

create table Cargo
(
	codigo_cargo int auto_increment primary key not null,
    nome_cargo varchar(25) not null unique,
    local_cargo varchar(255) not null,
    descricao_cargo varchar(200) not null,
    obs_cargo varchar(255) null,
    status_cargo varchar(10) not null
);

select * FROM Cargo;

create table Usuario
(
	codigo_usuario int auto_increment primary key not null,
    nome_usuario varchar(25) not null,
    login_usuario varchar(25) unique not null,
    senha_usuario varchar(255) not null,
	imagem_usuario longblob null,
    nome_cargo varchar(25) not null,
    cadastro_usuario timestamp not null,
    obs_usuario varchar(255) null,
    status_usuario varchar(10) not null,
    constraint FK_nome_cargo_usuario foreign key (nome_cargo) references Cargo (nome_cargo)
);

select * from Usuario;

create table Venda
(
	codigo_venda int auto_increment primary key not null,
    cadastro_venda timestamp not null,
    qtdTotal_venda int not null,
    valorTotal_venda decimal(10,2),
	status_venda varchar(10) not null,
    codigo_usuario int not null,
    constraint FK_codigo_usuario_venda foreign key (codigo_usuario) references Usuario (codigo_usuario)
);

select * from Venda;

create table Categoria
(
	codigo_categoria int auto_increment primary key not null,
    nome_categoria varchar(25) not null,
    localArmaz_categoria varchar(255) not null,
    descricao_categoria varchar(200) not null,
    obs_categoria varchar(255) null,
    status_categoria varchar(10) not null
);

select * FROM Categoria;

create table Produto
(
	codigo_produto int auto_increment primary key not null,
    nome_produto varchar(25) not null,
	cadastro_produto timestamp not null,
    imagem_produto blob not null,
    descricao_produto varchar(200) not null,
    qtd_produto int not null,
    valor_produto int not null,
    codigo_categoria int not null,
    obs_produto varchar(255) null,
    status_produto varchar(10) not null,
    constraint FK_codigo_categoria_produto foreign key (codigo_categoria) references Categoria (codigo_categoria)
);

select * from Produto;

create table Item
(
	codigo_item int auto_increment primary key not null,
	qtdProd_item int not null,
    valorProd_item decimal(10,2),
    codigo_produto int not null,
    codigo_venda int not null,
	constraint FK_codigo_produto_item foreign key (codigo_produto) references Produto (codigo_produto),
    constraint FK_codigo_venda_item foreign key (codigo_venda) references Venda (codigo_venda)
);

select * FROM Item;

insert into Categoria
(
nome_categoria,
login_categoria,
senha_categoria,
obs_categoria,
status_categoria
)
values 
('Administrador','admin','123','','Ativo'),
('Selena','selena','123','','Ativo'),
('Fernando','fernado','123','','Ativo'),
('Debora','debh','123','','Ativo'),
('Janaine','jana','123','','Ativo');