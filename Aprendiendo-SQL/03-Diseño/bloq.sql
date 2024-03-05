CREATE TABLE usuarios (
    id INT(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    fecha DATE NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (email)
)ENGINE= InnoDb;

CREATE TABLE categorias (
    id INT(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100),
    PRIMARY KEY (id)
);

CREATE TABLE entradas (
    id INT(255) AUTO_INCREMENT NOT NULL,
    usuario_id INT(255) NOT NULL,
    categoria_id INT(255) NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    descripcion MEDIUMTEXT,
    fecha DATE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (categoria_id) REFERENCES categorias(id) 
);

