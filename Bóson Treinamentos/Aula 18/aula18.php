<?php

	/*

		Aula 18 - Operadores de Comparação Em Consultas SQL

		Operadores de Comparação: permitem coparar dois valores e retornar um valor "booleano" (dependendo do resultado da comparação).

		Operadores de Comparação:

		* < menor que
		* > maior que
		* <= menor ou igual a
		* >= maior ou igual a
		* = igual a
		* <> ou != diferente de (não igual a)

		SELECT nome_produto, price
		FROM produtos
		WHERE price > 12;

		SELECT nome_produto, quantidade_estoque
		FROM produtos
		WHERE quantidade_estoque <= 20;

		-- Usando o operador (lógico) "AND" (que nos permite empilhar testes lógicos):

		SELECT nome_produto, quantidade_estoque
		FROM produtos
		WHERE quantidade_estoque <= 20 AND quantidade_estoque >= 10;

		-- Excluindo algo da filtragem:

		SELECT nome_produto, quantidade_estoque
		FROM produtos
		WHERE nome_produto != 'Refrigerante' AND nome_produto <> 'Refigerante';

		-- O operador "BETWEEN" serve para verificar e retornar valores dentro de um intervalo.

	*/

?>
