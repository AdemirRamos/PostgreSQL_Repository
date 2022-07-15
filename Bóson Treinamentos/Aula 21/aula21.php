<?php

	/*

		Aula 20 - Apagar Registros De Uma Tabela No PostgreSQL Com "DELETE FROM" e "TRUNCATE TABLE"

		Sintaxe ("DELETE FROM"):

		DELETE FROM: é usado para deletar registros específicos de uma tabela.

		Exemplo:

		DELETE FROM nome_tabela -> caso executado assim (sem "WHERE"), esse comando excluirá a tabela por inteiro.
		WHERE condições

		P. S.: Os dados serão deletados um a um (no caso de "DELETE FROM" sem "WHERE").

		Sintaxe ("TRUNCATE TABLE"):

		TRUNCATE TABLE: exclui todos os dados de uma tabela de uma só vez (sem deletar a tabela no processo).
		
		Exemplo:

		TRUNCATE TABLE nome_tabela.

		INSERT INTO produtos (código_produtos, nome_produto, description, price, quantidade_estoque)
		VALUES
		(12, 'Sabão Em Pó', 'Caixa de sabão em pó de 1/2 kg.', 12.50, 5),
		(13, 'Biscoito', 'Pacote de biscoito integral de 110g.', 3.45, 16),
		(14, 'Manteiga', 'Pote de manteiga de 250g.', 8.70, 5);

		SELECT * FROM produtos;

		DELETE FROM produtos
		WHERE código_produtos = 12;

		DELETE FROM produtos
		WHERE nome_produto = 'Manteiga';

		DELETE FROM produtos
		WHERE quantidade_estoque <= 5;

		SELECT * FROM pedidos;

		TRUNCATE TABLE pedidos;

		INSERT INTO pedidos (código_cliente, código_produto, quantidade_adquirida)
		VALUES
		(1, 7, 3),
		(2, 4, 3),
		(3, 5, 2);

	*/

?>
