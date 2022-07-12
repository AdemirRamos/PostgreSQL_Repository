<?php

	/*
	
		Aula 13 - Inserindo Registros Em Tabelas Com "INSERT INTO"

		-- O comando "INSERT INTO" nos permite inserir dados em uma tabela;
		-- Exemplo: INSERTO INTO nome da tabela (campas da tabela);
		-- Já o comando "VALUES" nos permite inserir os dados que serão passados para a tabela.
		-- P. S.: Os dados devem vir na mesma ordem de disposição das colunas.
		-- P. S.: Caso se deseje inserir dados em todas as colunas, basta abrir parênteses e adicionar os dados;
		-- P. S.: Nesse caso, não seria necessário especificar a tabela-destino. 

		INSERT INTO clientes (código_cliente, nome_cliente, sobrenome)
		VALUES (1, 'Ademir', 'Ramos');

		-- P. S.: Os nomes devem ir entre aspas (simples).

		SELECT código_cliente, nome_cliente, sobrenome FROM clientes
		ORDER BY código_cliente, nome_cliente, sobrenome ASC;

		-- Inserindo novos clientes:
		-- P. S.: Os números de "ID" não devem se repetir.

		INSERT INTO clientes (código_cliente, nome_cliente, sobrenome)
		VALUES (2, 'Carlos', 'Fernando');

		INSERT INTO clientes (código_cliente, nome_cliente, sobrenome)
		VALUES (3, 'Bruno', 'Gonçalves');

		-- Cadastrando produtos:

		INSERT INTO produtos (código_produtos, nome_produto, description, price, quantidade_estoque)

		-- Inserindo vários produtos de uma só vez:

		VALUES
		(1, 'Álcool Em Gel', 'Garrafa de álcool em gel de 1L.', 12.90, 20 ),
		(2, 'Luvas de Látex', 'Caixa de luvas de látex com 100 unidades.', 32.50, 25),
		(3, 'Pasta de Dentes', 'Tubo de pasta de dentes de 90gm.', 3.60, 12),
		(4, 'Sabonete', 'Sabonete antibacteriano.', 3.50, 5),
		(5, 'Enxaguante Bucal', 'Antisséptico bucal de 500ml.', 17.00, 28);

		-- Conferindo todos os itens adicionados:

		SELECT * FROM produtos;

		-- P. S.: A primeira tabela deveria se chamar "códigos_pedidos".
		-- P. S.: A primeira tabela, por ser do tipo "SERIAL", não demanda preenchimento - pois esse é automático.
		-- P. S.: No meu caso, eu fiz algo de errado e a primeira tabela não está se preenchendo sozinha.

		INSERT INTO pedidos (código_produtos, código_cliente, código_produto, quantidade_adquirida)
		VALUES
		(1, 2, 3, 5),
		(2, 3, 2, 6),
		(3, 3, 4, 7);

		SELECT * FROM pedidos;		

	*/

?>
