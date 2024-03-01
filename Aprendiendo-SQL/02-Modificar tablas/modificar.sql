-- Renombrar una tabla

ALTER TABLE usuarios RENAME TO usuarios_renom;

show tables;

-- Cambiar el nombre de una columna 
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

-- Modificar columna sin modificar nombre:
ALTER TABLE usuarios_renom MODIFY apellido char(40) not null;

describe usuarios_renom;

-- añadir COLUMNA:
ALTER TABLE usuarios_renom ADD website varchar (100) null;

--Añadir restriccion a columna:
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

INSERT INTO `usuarios_renom` (`id`, `nombre`, `apellido`, `email`, `password`, `website`)
VALUES (NULL, 'Paco', 'Perez', 'pacoperez@ejemlo.com', '12345', 'www.notengo.com');

--Borrar una COLUMNA
ALTER TABLE usuarios_renom DROP website;
