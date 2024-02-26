CREATE TABLE comments (
	id int NOT NULL AUTO_INCREMENT,
	imie varchar(255) NOT NULL,
	nazwisko varchar(255) NOT NULL,
	komentarz varchar(255) NOT NULL,
	ocena int NOT NULL,
	data DATETIME NOT NULL,
	PRIMARY KEY (id)
);