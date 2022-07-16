<?php

	/*

		Aula 24 - Consultas Em Duas Ou Mais Tabelas Com "INNER JOIN"

		JOINS:

		Cláusulas JOIN (junções) são usadas para combinar dados provenientes de duas ou mais tabelas em um único conjunto de resultados, baseado em condições de "join" especificadas.

		JOINS - Categorias:

		* INNER JOIN: Retorna linhas quando houver pelo menos uma correspondência em ambas as tabelas.

		* OUTER JOIN: Retorna linhas mesmo quando não houver pelo menos uma correspondência em uma das tabelas (ou ambas). O "OUTER JOIN" divide-se em "LEFT JOIN", "RIGHT JOIN" e "CROSS JOIN".
		
		CLÁUSULA ON:

		* A cláusula "ON" determina a condição de "join", que indica como as tabelas devem ser comparadas.

		* No geral, a comparação ocorre por meio de um relacionamento entre chave primária na primeira tabela e chave estrangeira na segunda tabela.

		Condição de Join:

		Uma condição de join nomeia uma coluna em cada tabela envolvido no join e indica como as colunas devem ser comparadas.

		No geral, usamos o operador = para obter linhas com colunas correspondentes. É como usar o relacionamento de PK ("Primary Key") de uma tabela com FK ("FOREIGNER KEY") de outra tabela.

		Nomes de Coluna Qualificados:

		Nome de coluna qualificado: nome da coluna precedido pelo nome da tabela à qual pertence, separados por um ponto.
		Usamos nomes de colnas qualificados para identificar a qual tabela cada campo envolvido pertence.
		Isso evita erros de ambiguidade caso uma coluna tenha o mesmo nome em duas tabelas diferentes.

		Exemplo: "ON pedidos.código_produto=produtos.código_produto".

		INNER JOIN Sintaxe:

		SELECT colunas
		FROM tabela1 -> Recomenda-se que essa seja a tabela com a chave estrangeira e as demais tabelas as de chave primária.
			[INNER] JOIN tabela2
			ON tabela1.coluna=tabela2.coluna

			[INNER] JOIN tabelaN
			ON tabela1.coluna=tabelaN.coluna

		[WHERE condições de filtragem]

		P. S.: O uso da palavra "INNER" é facultativo (a depender de qual sistema SQL está sendo usado).
		P. S.: Mais informações no "print" da pasta "Imagens".

		SELECT * FROM pedidos;
		ALTER TABLE produtos RENAME código_produtos TO código_produto;
		ALTER TABLE pedidos RENAME código_pedidos TO código_pedido;

		-- Usando "INNER JOIN":

		SELECT pedidos.código_produto, produtos.nome_produto, pedidos.quantidade_adquirida
		FROM pedidos
		INNER JOIN produtos
		ON pedidos.código_produto=produtos.código_produto;

		-- Usando "Alias" e "WHERE":

		SELECT PE.código_pedido, PR.nome_produto, PE.quantidade_adquirida
		FROM pedidos PE

		--Também é possível, quando o "alias" não for composto, dispensar o uso de aspas - podem ocorrer erros.

		INNER JOIN produtos PR
		ON PE.código_produto=PR.código_produto
		WHERE PE.código_pedido = 1;

		-- Mesclando três tabelas:

		SELECT PE.código_produto, CL.nome_cliente, PR.nome_produto, PE.quantidade_adquirida
		FROM pedidos PE
		INNER JOIN produtos PR
		ON PE.código_produto=PR.código_produto
		INNER JOIN clientes CL
		ON PE.código_cliente=CL.código_cliente
		WHERE PE.código_pedido = 1;

		SELECT * FROM clientes;

		SELECT PE.código_produto, CL.nome_cliente, PR.nome_produto
		FROM pedidos PE
		INNER JOIN produtos PR
		ON PE.código_produto=PR.código_produto
		INNER JOIN clientes CL
		ON PE.código_cliente=CL.código_cliente
		WHERE CL.código_cliente = 2;

	*/

?>
