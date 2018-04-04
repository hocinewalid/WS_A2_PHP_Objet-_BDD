CREATE TABLE utilisateurs (
    ID int NOT NULL AUTO_INCREMENT,
    pseudo varchar (15) NOT NULL,
    motDePasse varchar(10),
    StatusAdmin BOOLEAN DEFAULT 0,
    PRIMARY KEY (ID)
);