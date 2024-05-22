/* MODIFICADORES PARA LAS TABLAS EN SQL */


# RENOMBRAR UNA TABLA #

ALTER TABLE usuarios RENAME TO usuarios_renom;

# CAMBIAR EL NOMBRE DE UNA COLUMNA #


/* indicamos el nombre de la tabla, luego seleccionamos la columna y luego declaramos el nombre a cambiar */
ALTER TABLE usuarios_renom CHANGE surname apellido VARCHAR(100) NULL;


# MODIFICAR COLUMNA SIN CAMBIAR NOMBRE #

ALTER TABLE usuarios_renom MODIFY surname char(50) not null;



# AÑADIR COLUMNA #

ALTER TABLE usuarios_renom ADD website VARCHAR(100) null;


# AÑADIR RESTRICCION A COLUMNA #

ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email); /* el unique indica que no se repitan los emails en este caso, siempre va a ser unico */


# BORRAR UNA COLUMNA #