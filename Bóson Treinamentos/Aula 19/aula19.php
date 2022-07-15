<?php

	/*

		Aula 19 - Operador "BETWEEN" e Intervalos Em Consultas SQL

		"BETWEEN" é um operador de comparação.

		Esse operador permite a visualização (nos resultados das consultas) filtros de intervalos de dados.

		Sintaxe:

		SELECT ...
		FROM ...
		WHERE colune (s) (NOT) BETWEEN valor1 AND valor2

		"NOT BETWEEN" serve para buscar dados fora de um intervalo específico.

		SELECT * FROM produtos;

		SELECT nome_produto, price
		FROM produtos
		WHERE price BETWEEN 10.00 AND 20.00;

		-- Também é possível usar o operador lógico "OR":

		SELECT nome_produto, price
		FROM produtos
		WHERE price BETWEEN 3.50 AND 5.00 OR price BETWEEN 10.00 AND 20.00;

		SELECT nome_produto, price, quantidade_estoque
		FROM produtos
		WHERE price BETWEEN 2.00 AND 6.00 AND quantidade_estoque < 10;

		SELECT nome_produto, price, quantidade_estoque
		FROM produtos
		WHERE price NOT BETWEEN 5.00 AND 12.00;

	*/

?>
