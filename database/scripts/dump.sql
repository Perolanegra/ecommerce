insert into credencial values (null, 01, 85779517584, 123);

select * from categoria_produto;
select * from preco_produto;
select * from Voucher;
select * from Produto;
select * from preco_produto;

insert into categoria_produto values(null, 'fitness', 'A combinação de sabor e sadio', now(), null, null);
insert into categoria_produto values(null, 'Especiais', 'Quer mais acompanhamento? Então toma!', now(), null, null);
insert into categoria_produto values(null, 'Tradicionais', 'Variedade de cuscuz e molhos', now(), null, null);

#select * from produto;
#1 - fitness/ 2- especial/ 3- tradicional

insert into Produto values(null, 1, 'Cuscuz Atum', 'Contém flocos de milho, molho ao mar e atum.', 'atum.jpg', now(), null, null);
insert into preco_produto values (null, 4, 6.00, 12.00, 24.00, now(), null, null);

insert into Produto values(null, 3, 'Cuscuz da Casa', 'Contém flocos de milho, molho nordestino, carne do sol e calabresa.', 'casa.jpg', now(), null, null);
insert into preco_produto values (null, 5, 8.00, 16.00, 32.00, now(), null, null);

insert into Produto values(null, 3, 'Cuscuz Calabresa', 'Contém flocos de milho, molho nordestino e calabresa.', 'calabresa.jpg', now(), null, null);
insert into preco_produto values (null, 6, 5.00, 10.00, 20.00, now(), null, null);

insert into Produto values(null, 2, 'Cuscuz Camarão', 'Contém flocos de milho, molho marítimo e camarão.', 'camarao.jpg', now(), null, null);
insert into preco_produto values (null, 7, 13.00, 25.00, 50.00, now(), null, null);

insert into Produto values(null, 2, 'Cuscuz Especial', 'Contém flocos de milho, molho marítimo, camarão, siri catado e polvo.', 'especial.jpg', now(), null, null);
insert into preco_produto values (null, 8, 10.00, 20.00, 40.00, now(), null, null);

insert into Produto values(null, 3, 'Cuscuz de Frango', 'Contém flocos de milho, molho caipira, frango desfiado, bacon e azeitona.', 'frango.jpg', now(), null, null);
insert into preco_produto values (null, 9, 7.00, 14.00, 28.00, now(), null, null);

insert into Produto values(null, 3, 'Cuscuz Lombo Defumado', 'Contém flocos de milho, molho de ervas e lombo defumado.', 'lombo.jpg', now(), null, null);
insert into preco_produto values (null, 2, 8.00, 16.00, 32.00, now(), null, null);

insert into Produto values(null, 2, 'Cuscuz Sertanejo', 'Contém flocos de milho, molho nordestino, carne seca, queijo coalho e banana da terra.', 'sertanejo.jpg', now(), null, null);
insert into preco_produto values (null, 3, 8.00, 16.00, 32.00, now(), null, null);

insert into Produto values(null, 3, 'Cuscuz Tradicional', 'Contém flocos de milho, molho nordestino, sardinha, atum e calabresa.', 'tradicional.jpg', now(), null, null);
insert into preco_produto values (null, 1, 7.00, 14.00, 28.00, now(), null, null);

insert into Produto values(null, 3, 'Cuscuz Sardinha', 'Contém flocos de milho, molho marítimo e sardinha.', 'sardinha.jpg', now(), null, null);
insert into preco_produto values (null, 10, 6.00, 12.00, 24.00, now(), null, null);

insert into Produto values(null, 2, 'Cuscuz Siri Catado', 'Contém flocos de milho, molho de tomate e siri catado.', 'siricatado.jpg', now(), null, null);
insert into preco_produto values (null, 11, 13.00, 25.00, 50.00, now(), null, null);

insert into Produto values(null, 2, 'Cuscuz Polvo', 'Contém flocos de milho, molho de tomate e polvo.', 'polvo.jpg', now(), null, null);
insert into preco_produto values (null, 12, 13.00, 25.00, 50.00, now(), null, null);

insert into Produto values(null, 1, 'Cuscuz Vegetariano', 'Contém flocos de milho, molho natural mediterrâneo, tomate seco, shimeji e banana da terra.', 'vegetariano.jpg', now(), null, null);
insert into preco_produto values (null, 13, 9.00, 18.00, 35.00, now(), null, null);

insert into Produto values(null, 1, 'Cuscuz Natural do Sertão', 'Contém flocos de milho, molho natural, antepasto de beringela, couve flor, castanha de cajú e ricota.', 'naturaldosertao.jpg', now(), null, null);
insert into preco_produto values (null, 14, 9.00, 18.00, 35.00, now(), null, null);

insert into Produto values(null, 2, 'Cuscuz Shimeji', 'Contém flocos de milho, molho mediterrâneo, Shimeji e ricota.', 'shimeji.jpg', now(), null, null);
insert into preco_produto values (null, 15, 13.00, 25.00, 50.00, now(), null, null);

insert into Produto values(null, 3, 'Cuscuz Tropical', 'Contém flocos de milho e calda com pedaços de abacaxi.', 'tropical.jpg', now(), null, null);
insert into preco_produto values (null, 16, 8.00, 16.00, 32.00, now(), null, null);

insert into Produto values(null, 3, 'Cuscuz Lampião e Maria Bonita', 'Contém flocos de milho, goiabada, queijo coalho, leite condensado e creme de leite.', 'lampiao.jpg', now(), null, null);
insert into preco_produto values (null, 17, 9.00, 18.00, 35.00, now(), null, null);

insert into Produto values(null, 3, 'Cuscuz Árabe', 'Contém flocos de milho, carne moída, passa, damasco e molho oriental.', 'arabe.jpg', now(), null, null);
insert into preco_produto values (null, 18, 8.00, 16.00, 32.00, now(), null, null);

insert into Produto values(null, 3, 'Cuscuz Brasileiro', 'Contém flocos de milho, chocolate meio amargo, banana da terra frita e calda de leite condensado com leite.', 'brasileiro.jpg', now(), null, null);
insert into preco_produto values (null, 19, 10.00, 20.00, 40.00, now(), null, null);

insert into Produto values(null, 1, 'Cuscuz Fitness', 'Contém flocos de milho, flocos de aveia, molho de tomate, ricota, atum e banana da terra.', 'fitness.jpg', now(), null, null);
insert into preco_produto values (null, 20, 8.00, 16.00, 32.00, now(), null, null);

insert into nivel values(null, 1, 'Administrador', now(), null, null);
insert into nivel values(null, 2, 'Proprietario', now(), null, null);
insert into nivel values(null, 3, 'Cliente', now(), null, null);



