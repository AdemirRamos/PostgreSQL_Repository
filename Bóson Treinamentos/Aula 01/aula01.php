<?php

	# PostgreSQL / Postgres

	/*

		* SGBD que começou como projeto Ingres na Universidade de Berkeley, por Michael Stonebraker. - A primeira versão foi lançada em 1997.

	*/

	// Escrito em Linguagem C, é livre e de código aberto.

	//Disponível em todas as plataformas UNIX, além de Windows, OS X, e outros sistemas.

	//Possui todos os requesitos de um banco de dados transacional e totalmente compatível com as propriedades ACID (Atomicidade; Consistência, Isolamento, Durabilidade).

	//Suporta "Views", "Views Materializadas", Procedimentos Armazenados, Triggers e ooutros tipos de objeto comuns a bancos de dados relacionais.

	// Desenvolvido e mantido pelo PostgreSQL Global Development Group, composto por muitas empresas e contas individuais.

	//Características do PostgreSQL:

	//Compatível com ACID;
	//Banco Transacional (uses WAL/REDO);
	//Suporta Particionamento;
	//Possui Controle de Concorrência Multiversão (MVCC);
	//Busca de texto completa;
	//Indexação com vários tipos de algoritmos ("B-Tree", "GiST", et cetera);
	//Permite operações de manutenção em modo online;
	//Operações geospaciais (PostGIS);
	//Possui linguagem procedural.

	//Conectividade com o PostgreSQL:

	//A conexão ao PostgreSQL é feita via redes TCP/IP padrão. Possui um protocolo de transmissão de nome "libpq", que também é o nome da biblioteca cliente que o implementa;

	//Uma vez estabelecida a conexão, nos comunicamos com o PostgreSQL enviando comandos;

	//Sua linguagem combina declarações em conformidade com o padrão SQL:2008 e comando de mantenção específicos;

	//O SGBDR serve uma instância a partir de uma única port TCP/IP.

	//Terminologia do PostgreSQL:

	//O PostgreSQL foi projetado em um ambiente universitário. Por conta disso, seus objetos são definidos em termos acadêmicos, e baseados em álgebra relacional.

	//Alguns dos termos comuns em bancos de dados são mostrados em sua versão do glossário a seguir.

	//Nome de Objetos comuns de Banco de Dados:

	//Termo indústria: Tabela | Termo PostgreSQL: Relação
	//Termo indústria: Linha | Termo PostgreSQL: Tupla
	//Termo indústria: Coluna | Termo PostgreSQL: Atributo
	//Termo indústria: Bloco de Dados | Termo PostgreSQL: Página (quando o bloco está no disco)
	//Termo indústria: Página | Termo PostgreSQL: Buffer (quando o bloco está na memória)

	//Quem usa o PostgreSQL?:

	//Muitas aplicações e websites usam o PostgreSQL, como:

	//Reddit
	//Sony Online Games
	//Skype
	//Instagram
	//Disqus
	//Yandex Mail
	//Trip Advisor
	//ISS
	//BASF

?>
