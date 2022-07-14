<?php

	/*

		Aula 16 - Ordenar Resultados de Consultas Com "ORDER BY"

		INSERT INTO produtos (código_produtos, nome_produto, description, price, quantidade_estoque)
		VALUES
		(6, 'Detergente', 'Detergente líquido de 500ml.', 1.89, 22),
		(7, 'Leite Integral', 'Leite integral - caixa de 1 litro.', 4.60, 14),
		(8, 'Refigerante', 'Garrafa de Refrigerante de 600ml.', 3.70, 14),
		(9, 'Refrigerante', 'Garrafa de refrigerante de 1 litro.', 6.89, 16),
		(10, 'Refrigerante', 'Lata de refrigerante de 350ml.', 2.99, 45),
		(11, 'Margarina', 'Pote de margarina de 500 gramas', 3.20, 8);

		SELECT * FROM produtos
		ORDER BY nome_produto;

		SELECT * FROM produtos
		ORDER BY quantidade_estoque DESC;

		SELECT nome_produto, price FROM produtos
		ORDER BY nome_produto;

		-- Ordenando produtos com os mesmos nomes (porém não com os mesmo preços e/ou quantidades):

		SELECT nome_produto, price FROM produtos
		ORDER BY nome_produto, price;

		-- Definindo a posição de tabelas com valores "null":

		SELECT nome_produto, description FROM produtos
		ORDER BY description NULLS FIRST;

		-- "FIRST": faz com que os "nulls" apareçam no topo; LAST: faz com que os "nulls" apareçam no final.

		SELECT nome_produto, price FROM produtos
		WHERE price >= 10
		ORDER BY price;

	*/

?>
