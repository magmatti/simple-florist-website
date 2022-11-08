CREATE TABLE komentarze2 (
	id int NOT NULL AUTO_INCREMENT,
	imie varchar(255) NOT NULL,
	nazwisko varchar(255),
	komentarz varchar(255),
	ocena int,
	data DATETIME,
	PRIMARY KEY (id)
);