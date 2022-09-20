create database bd_rafael;

use bd_rafael;

create table Usuario
(
	codigo_usuario int auto_increment primary key not null,
    nome_usuario varchar(25) not null,
    login_usuario varchar(25) unique not null,
    senha_usuario varchar(255) not null,
	imagem_usuario longblob not null,
    cadastro_usuario timestamp not null,
    obs_usuario varchar(255) null,
    status_usuario varchar(10) not null
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

insert into Categoria
(
nome_categoria,
localArmaz_categoria,
descricao_categoria,
obs_categoria,
status_categoria
)
values 
('teste','localteste','desc teste','obs teste','Ativo'),
('Pizza','localpizza','desc pizza','obs pizza','Ativo'),
('Bebida','localbebida','desc bebida','obs bebida','Ativo'),
('Promocoes','localpromocao','desc promocao','obs promocao','Ativo');

create table Produto
(
	codigo_produto int auto_increment primary key not null,
    nome_produto varchar(25) not null,
	cadastro_produto timestamp not null,
    imagem_produto longblob not null,
    descricao_produto varchar(200) not null,
    qtd_produto int not null,
    valor_produto int not null,
    codigo_categoria int not null,
    obs_produto varchar(255) null,
    status_produto varchar(10) not null,
    constraint FK_codigo_categoria_produto foreign key (codigo_categoria) references categoria (codigo_categoria)
);

select * from Produto;

insert into Produto
(
    nome_produto, 

    imagem_produto,
    descricao_produto,
    qtd_produto,
    valor_produto,
    codigo_categoria,
    obs_produto, 
    status_produto
)
values 
('teste','gdgsgsetseg','desc teste',10,25,1,'obs teste','Ativo'),
('frango e catupiry','fafafawf','desc frango',5,50,2,'obs frango','Ativo');

