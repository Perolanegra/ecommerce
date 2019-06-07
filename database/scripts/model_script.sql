create table if not exists pedido (
id int(11) auto_increment not null primary key,
id_usuario int(11) not null,
nome_usuario varchar(55) not null,
observacao varchar(255),
data_cadastro timestamp not null default now(),
data_confirmado timestamp,
data_cancelado timestamp,
data_finalizado timestamp
);

DROP TABLE IF EXISTS `migrations`;

create table if not exists endereco (
id int(11) auto_increment not null primary key,
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

create table if not exists categoria_produto (
id int(11) auto_increment not null primary key,
nome varchar(50) not null,
descricao varchar(150) not null,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

create table if not exists produto (
id int(11) auto_increment not null primary key,
id_categoria int(11) not null,
nome varchar(100) not null,
descricao varchar(500) not null,
foto varchar(75),
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

create table if not exists venda (
id int(11) auto_increment not null primary key,
id_produto int(11) not null,
id_pedido int(11) not null,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

create table if not exists nivel (
id int(11) auto_increment not null primary key,
nivel varchar(50) not null unique,
descricao varchar(150) not null,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

create table if not exists voucher (
id int(11) auto_increment not null primary key,
id_usuario int(11) not null,
cupom int(11) not null,
percentual_desconto int(3) not null,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);


create table if not exists preco_produto (
id int(11) auto_increment not null primary key,
id_produto int(11) not null,
valor_pequeno float(50,2) not null,
valor_medio float(50,2) not null,
valor_grande float(50,2) not null,
data_cadastro timestamp default now() not null,
data_atualizado timestamp,
data_deletado timestamp
);

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
);

CREATE TABLE `usuario` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_nivel` int(11) NOT NULL DEFAULT '3',
  `nome` varchar(255) NOT NULL,
  `CPF` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT '2019-05-31 04:57:35',
  `data_atualizado` timestamp NULL DEFAULT NULL,
  `data_deletado` timestamp NULL DEFAULT NULL,
  `data_email_verificado` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario_id_unique` (`id`),
  UNIQUE KEY `usuario_id_nivel_unique` (`id_nivel`),
  UNIQUE KEY `usuario_email_unique` (`email`),
  UNIQUE KEY `usuario_cpf_unique` (`CPF`),
  UNIQUE KEY `usuario_telefone_unique` (`telefone`)
);