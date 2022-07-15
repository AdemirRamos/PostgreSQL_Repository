<?php

	/*

		Aula 20 - Cláusula "UPDATE" - Atualizar Dados Inseridos Na Tabela.

		Sintaxe:

		UPDATE tabela (s)
		SET coluna (s) = novo_valor
		WHERE coluna (s) = valor_índice

		SELECT *
		FROM produtos
		ORDER BY nome_produto;

		UPDATE produtos
		SET nome_produto = 'Refrigerante'
		WHERE código_produtos = 8;

		UPDATE produtos
		SET price = 3.95
		WHERE nome_produto = 'Sabonete';

		UPDATE produtos
		SET quantidade_estoque = quantidade_estoque - 4
		WHERE price > 15.00;

		-- Sem a cláusula "WHERE", todos os dados vão ser alterados:

		-- Aumentando o preço de todos os produtos em 10%:

		UPDATE produtos
		SET price = price * 1.10;

	*/

?>
