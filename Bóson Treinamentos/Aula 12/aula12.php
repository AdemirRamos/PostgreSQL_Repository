<?php

	/*

		Aula 12 - Como Criar Tabelas Com "CREATE TABLE"

		Criando tabelas:

			CREATE TABLE nome da tabela (
				nome da coluna tipo de dado constraints (restrições),
				nome da coluna tipo de dado constraints (restrições),
				nome da coluna tipo de dado constraints (restrições)
			);
		
		P. S.: Vírgulas separam as diferentes colunas criadas.

		"INT" indica um dado do tipo "número inteiro".

		Exemplo:

			CREATE TABLE clientes (
				código_cliente INT PRIMARY KEY,
				nome_cliente VARCHAR(20) NOT NULL,
				sobrenome VARCHAR(40) NOT NULL
			);

		P. S.: PRIMARY KEY: indica uma chave primária; NOT NULL: indica preenchimento obrigatório do campo em questão.
		P. S.: F5 é um atalho (do pgAdmin 4) para executar códigos SQL.

		Já o comando "refresh" atualiza o seu alvo.

		A "constraint" (restrição) "TEXT" permite que se digite tanto texto quanto se quiser.

		A "constraint" (restrição) "NULL" permite que um campo seja deixado vazio.

		A "constraint" (restrição) "NUMERIC" permite a inserção de valores monetários.

		A "constraint" (restrição) "CHECK()" nos permite executar uma verificação: CHECK(price > 0) -> preço deve ser maior do que 0.
		
		A "constraint" (restrição) "SMALLINT" permite somente números pequenos.
		
		A "constraint" (restrição) "DEFAULT" nos permite estabelecer um valor padrão: DEFAULT 0.

		Exemplo:

			CREATE TABLE produtos (
				código_produtos INT PRIMARY KEY,
				nome_produto VARCHAR(20) NOT NULL,
				description TEXT NULL,
				price NUMERIC CHECK(price > 0) NOT NULL,
				quantidade_estoque SMALLINT DEFAULT 0
			);
		
		A "constraint" (restrição) "SERIAL" gera números (inteiros e sequenciais) automaticamente.

		Exemplo (mais comentários no código):

			CREATE TABLE pedidos (
				código_produtos SERIAL PRIMARY KEY,
				
				-- Criando conexões entre tabelas (através de chaves estrangeiras):
				-- Descrição do código abaixo: REFERENCES: referencia outra tabela (aqui vai a referência de coluna).
				-- A nova coluna criada (que se relacionará com outra de outra tabela) deve ter o mesmo tipo de dado e restrição:
				
				código_cliente INT NOT NULL REFERENCES clientes(código_cliente),
				código_produto INT NOT NULL, --Também se pode criar uma chave estrangeira no final do código.
				quantidade_adquirida SMALLINT NOT NULL,
				
				-- Criação de uma chave estrangeira para "código_produto":
				-- Descrição do código abaixo: chave estrangeira; tabela que recebe a chave estrangeira; tabela e coluna referenciadas.
				
				FOREIGN KEY (código_produto) REFERENCES produtos(código_produtos)
			);
			
	*/

?>
