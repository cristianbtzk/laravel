--  Auto-generated SQL script #202212181254
INSERT INTO laravel.roles (id,description)
	VALUES (1,'Admin');
INSERT INTO laravel.roles (id,description)
	VALUES (2,'Cliente');
INSERT INTO laravel.roles (id,description)
	VALUES (3,'Prestador');

--  Auto-generated SQL script #202212181256
INSERT INTO laravel.categories (id,title,description)
	VALUES (1,'Jardinagem','Serviços em jardins');
INSERT INTO laravel.categories (id,title,description)
	VALUES (2,'Mecânica','Reparos em automóveis');
INSERT INTO laravel.categories (id,title,description)
	VALUES (3,'Encanamento','Reparos em canos');

--  Auto-generated SQL script #202212181257
INSERT INTO laravel.states (id,name,abbreviation)
	VALUES (1,'São Paulo','SP');
INSERT INTO laravel.states (id,name,abbreviation)
	VALUES (2,'Santa Catarina','SC');
  
  --  Auto-generated SQL script #202212182137
INSERT INTO laravel.service_statuses (id,description)
	VALUES (1,'Aberto');
INSERT INTO laravel.service_statuses (id,description)
	VALUES (2,'Em andamento');
INSERT INTO laravel.service_statuses (id,description)
	VALUES (3,'Finalizado');
