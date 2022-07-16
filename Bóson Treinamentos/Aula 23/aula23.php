<?php

	/*

		Aula 23 - "Aliases" Com a Cláusula AS

		Criar "Alias" Com AS:

		Podemos dar um nome diferente a uma coluna ou tabela ao realizar uma consulta suando um "Alias".

		Sintaxe:

		SELECT coluna (s) AS alias_coluna (s), coluna2 AS alias_coluna2 (e assim por diante)
		FROM tabela (s) AS alias_tabela;

		SELECT nome_produto AS "Nome dos Produtos"
		FROM produtos
		WHERE quantidade_estoque > 5;

		SELECT nome_cliente AS "Nome dos Clientes", sobrenome_cliente AS "Sobrenome dos Clientes"
		FROM clientes AS "Clients";

		SELECT código_produtos AS "Códigos dos Pedidos", quantidade_adquirida AS "Quantidade Adquirida"
		FROM pedidos AS "Orders"
		ORDER BY "Quantidade Adquirida" DESC;

		-- Mudando o nome de tabelas:

		ALTER TABLE código_produtos RENAME TO código_pedidos;

		-- Mudando o nome de colunas de uma tabela:

		ALTER TABLE pedidos RENAME código_produtos TO código_pedidos;
		ALTER TABLE clientes RENAME sobrenome TO sobrenome_cliente;

		-- É possível suprimir a cláusula "AS" ao se renomear uma tabela/coluna para um consulta:
		-- Exemplo: SELECT nome_coluna "Novo Nome da Coluna" FROM Coluna;

	*/

?>
