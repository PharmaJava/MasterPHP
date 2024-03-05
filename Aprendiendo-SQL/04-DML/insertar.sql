-- Insertar nuevos registros
INSERT INTO usuarios VALUES(
    null, 'Victor', 'Apellidos', 'victor@victor.com','1234','2019-05-01' );

SELECT * FROM usuarios;    

INSERT INTO usuarios VALUES(
    null, 'Antonio', 'Martinez', 'antonio@victor.com','1234','2019-07-01' );

INSERT INTO usuarios VALUES(
null, 'Paco', 'Lopez', 'paco@victor.com','1234','2019-08-01' );

-- Insertar Filas solo con ciertas columnas:
INSERT INTO usuarios (email, password) VALUES ('admin@admin.com', 'admin');
