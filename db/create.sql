CREATE TABLE articles
(
	articleid int NOT NULL,
	author varchar(50) NOT NULL,
	ainfo varchar(255),
	email varchar(30) NOT NULL,
	privat varchar(1) NOT NULL,
	imgurl varchar(255),
	article text NOT NULL,
	PRIMARY KEY (articleid) 
)