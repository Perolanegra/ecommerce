create table if not exists Pedido (
id int(11) auto_increment not null primary key unique,
id_usuario int(11) not null,
nome_usuario varchar(55) not null,
observacao varchar(255),
data_cadastro timestamp not null default now() not null,
data_confirmado timestamp,
data_cancelado timestamp,
data_finalizado timestamp
);

create table if not exists Endereco (
id int(11) auto_increment not null primary key unique,
id_usuario int(11) not null,
logradouro varchar(255) not null,
cidade varchar(75) default 'Salvador',
CEP varchar(8),
UF char(2),
bairro varchar(150),
complemento varchar(250),
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

create table if not exists Usuario (
id int(11) auto_increment not null primary key unique,
id_nivel int(11) not null,
nome varchar(200) not null,
CPF varchar(11) not null unique,
telefone varchar(14) not null unique,
email varchar(150) unique,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

create table if not exists Categoria_Produto (
id int(11) auto_increment not null primary key unique,
nome varchar(50) not null,
descricao varchar(150) not null,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

create table if not exists Produto (
id int(11) auto_increment not null primary key unique,
id_categoria int(11) not null,
valor float(5,2) not null,
nome varchar(100) not null,
foto varchar(75),
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

create table if not exists Venda (
id int(11) auto_increment not null primary key unique,
id_produto int(11) not null,
id_pedido int(11) not null,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

create table if not exists Credencial (
id int(11) auto_increment not null primary key unique,
id_usuario int(11) not null,
CPF_login varchar(11) not null unique,
senha varchar(250) unique,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

create table if not exists Nivel (
id int(11) auto_increment not null primary key unique,
nivel varchar(50) not null unique,
descricao varchar(150) not null,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

create table if not exists Voucher (
id int(11) auto_increment not null primary key unique,
id_usuario int(11) not null,
cupom int(11) not null,
percentual_desconto int(3) not null,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);


create table if not exists Preco_Produto (
id int(11) auto_increment not null primary key unique,
id_produto int(11) not null,
valor_pequeno float(2,2) not null,
valor_medio float(2,2) not null,
valor_grande float(2,2) not null,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);
