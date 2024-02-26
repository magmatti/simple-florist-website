CREATE TABLE products (
    id int NOT NULL AUTO_INCREMENT,
    nazwa varchar(255) NOT NULL,
    ilosc int NOT NULL,
    cena decimal(10, 2) NOT NULL,
    PRIMARY KEY (id)
);