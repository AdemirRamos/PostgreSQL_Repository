<?php

	/*

		//Aula 22 - 10 Exemplos de Funções de Agregação No PostgreSQL

		As funções de agregação do PostgreSQL:

		São usadas para computar um valor único a partir de um conjunto de valores de entrada.

		Funções Básicas de Agregação:

		1) COUNT: faz contagem de itens;
		2) MAX: encontra o valor máximo;
		3) MIN: encontra o valor mínimo;
		4) AVG: encontra o valor médio;
		5) SUM: retorna o somatório dos valores apresentados.
		
		-- Fazendo uma contagem do número de linhas de uma tabela do banco de dados:

		SELECT COUNT(*) FROM clientes;

		-- Personalizando o retorno com "AS":

		SELECT COUNT(*) AS "Quantidade de Clientes" FROM clientes;

		-- Especificando a coluna a ser alvo da busca:

		SELECT COUNT (nome_cliente) FROM clientes;

		-- P. S.: Quando o nome da coluna é específicado (entre parênteses), será retornado o número de itens daquela coluna.
		-- P. S.: Valores nulos serão ignorados.

		SELECT COUNT(nome_produto) FROM produtos;
		SELECT nome_produto FROM produtos;

		-- Usando argumentos modificadores:

		SELECT COUNT(DISTINCT nome_produto) FROM produtos;

		-- Com "DISTINCT", produtos com o mesmo nome não serão contados.

		-- Combinando "COUNT" com filtros:
		-- E verificando quantos produtos têm um valor superior a R$10.00:

		SELECT COUNT(*) FROM produtos
		WHERE price >= 10.00;

		-- Usando "MAX" para retornar o item com o maior valor em uma tabela específica:

		SELECT MAX(price) FROM produtos;

		-- "MIN" faz o inverso de "MAX":

		SELECT MIN(price) FROM produtos;

		-- Somando valores através de "SUM" (neste caso, todos os valores da coluna "price"):

		SELECT SUM(price) FROM produtos;

		-- Usando "AVG" para se obter a média dos valores de uma determinada coluna:

		SELECT AVG(price) FROM produtos;

		-- Aredondando o valor da média (com "ROUND" - o número dois [2] indica duas casas decimais):

		SELECT ROUND(AVG(price), 2) FROM produtos;

		-- Calculando a média de preços (arredondada) para um produto específico:

		SELECT ROUND(AVG(price), 2) FROM produtos
		WHERE nome_produto = 'Refrigerante';

		Anotações Extras:

		Fatal Error when opening pgadmin4: https://community.progress.com/s/article/fatal-error-when-opening-pgadmin4

	*/

?>
