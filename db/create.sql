CREATE TABLE articles
(
	articleid int NOT NULL AUTO_INCREMENT, 
	author varchar(50) NOT NULL,
	ainfo varchar(255),
	email varchar(30) NOT NULL,
	privat varchar(1) NOT NULL DEFAULT "0",
	imgurl varchar(255),
	title varchar(50),
	article text NOT NULL,
	publicatedate date NOT NULL,
	visitings int DEFAULT 0,
	PRIMARY KEY (articleid) 
);