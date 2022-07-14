<?php

	/*

		Aula 17 - "LIMIT" e "OFFSET" - Limitar Resultados de Consultas

		"LIMIT" e "OFFSET" permitem obter uma parte especificada das linhas retornadas por uma consulta SQL.

		Sintaxe:

		SELECT coluna (s)
		FROM tabela (s)
		[ORDER BY coluna (s)]
		[LIMIT (contagem | ALL)] -> contagem == quantidade de linhas a exibir no resultado. / ALL == mostrar todas as linhas.
		[OFFSET deslocamento] -> deslocamento: indica a partir de qual ponto será feita a contagem do limite.

		P. S.: Usar "nada" ou "ALL" dá na mesma.
		P. S.: Usar o valor 0 é o mesmo que não usar deslocamento.

		SELECT * FROM produtos
		ORDER BY price
		LIMIT 4; -- Indica o limite (de linhas) para a exibição do resultado.

		-- Visualizando o 3ª, 4ª e 5ª produtos mais caros:

		SELECT * FROM produtos
		ORDER BY price DESC
		LIMIT 4 OFFSET 2;

		-- "OFFSET" indica o deslocamento (de onde a filtragem começará).
		-- P. S.: "OFFSET" também pode ir na linha de baixo.

		-- Exibindo todos os produtos porém a partir do terceiro produto ("LIMIT" removido):

		SELECT * FROM produtos
		ORDER BY price DESC
		OFFSET 2;

		-- Caso o "ORDER BY" seja removido, ao se fazer uma consulta, a ordem de inserção dos registros será usada para definir a exibição.

	*/

?>
