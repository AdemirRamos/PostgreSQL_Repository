<?php

	/*

		Aula 10 - Criar e Excluir Bancos de Dados Com psql e pgAdmin

		Criando um banco de dados:

			CREATE DATABASE banco_teste

			WITH

			OWNER = proprietário

			ENCONDING = "UTF8"

			LC_COLlATE = "pt_BR.UTF-8" || LC_CTYPE = "pt_BR.UTF-8"

			TABLESPACE = pg_default

			CONNECTION LIMIT = -1; -> Especifica o limite de conexões simultâneas ao banco de dados. "-1" indica conexões ilimitadas.
	
		P. S.: || === ou.
		P. S.: Sempre termine a declaração de códigos SQL com ponto e vírgula (;).

		"datname" retorna todos os bancos de dados criados: SELECT datname FROM nome do banco de dados || pg_database.

		P. S.: "database" é um catálogo do PostgreSQL.

	*/

?>
