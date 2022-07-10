<?php

	# Primeiros passos no PostgreSQL

	/*Para fazer edições "query", é preciso abrir o "query editor" e lá inserir os nossos códigos SQL.*/

	//Comentários, em PostgreSQL, são antecedidos por (sem aspas) "--".

	//"SELECT" é um comando de seleção; ele nos permite selecionar tabelas entre outras coisas;

	//Se pode usar SELECT destas maneiras (sem aspas): 1) "SELECT coluna1, coluna2 FROM tabela";

	//P. S.: "FROM" indica a base da seleção.

	//2) "SELECT * FROM tabela". - Esse comando (à esquerda) seleciona todos os itens da tabela especificada.

	//Para rodar um comando específico, basta selecioná-lo e apertar no "botão de play" do PostgreSQL.

	//"ORDER BY" é um comando de ordenação; ele nos permite ordenar/organizar os dados selecionados em uma ordem específica.

	//Como usar "ORDER BY": primeiro, selecionamos os dados (com "SELECT"); depois aplicamos o "ORDER BY".

	//Exemplo: SELECT * FROM tabela \n ORDER BY unit_price ASC.

	/*

		SELECT * FROM tabela
		ORDER BY unit_price, employee_name ASC, last_name ASC;

	*/

	//P. S.: \n === quebra de linha - escrever na próxima linha.

	//"ASC" ordena os dados em ordem crescente; "DESC" ordena os dados em ordem decrescente.

	//Caso nada seja escrito após "ORDER BY", os dados, automaticamente, serão ordenados em order crescente.

	//"WHERE" é um comando de filtro; ele nos permite filtrar os dados selecionados.

	//Como usar "WHERE" (desconsiderar as aspas): "SELECT * FROM tabela \n WHERE country = 'Brazil';".

	//Filtro de dados múltiplos:

	/*

		SELECT * FROM tabela
		WHERE city IN ('São Paulo', 'Rio de Janeiro', 'Alagoas');

	*/

	//P. S.: Ao se escrever (entre aspas) um valor a ser procurado, é preciso se digitar uma "string" idêntica à buscada;
	//P. S.: Caso contrário, os dados buscados não serão localizados.

?>
