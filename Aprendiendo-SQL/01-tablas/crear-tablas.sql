CREATE TABLE usuarios (
    id          INT(11) AUTO_INCREMENT NOT NULL,
    nombre      VARCHAR(100) NOT NULL,
    apellidos   VARCHAR(255) NOT NULL,
    email       VARCHAR(100) NOT NULL,
    password    VARCHAR(255),
    PRIMARY KEY (id)
);


drop table usuarios;

