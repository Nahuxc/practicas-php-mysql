/* 

VISTAS:

- LAS PODEMOS DEFINIR COMO UNA CONSULTA ALMACENADA EN LA BASE DE DATOS QUE SE UTILZIA COMO UNA TABLA VIRTUAL.
NO ALMACENA DATOS SINO QUE UTILIZA ASOCIACIONES Y LOS DATOS DE LAS TABLAS ORIGINALES, DE FORMA QUE SIEMPRE SE MATIENE ACTUALIZADA.

 */



CREATE VIEW entradas_con_nombres AS
SELECT i.id, i.title, u.name AS "AUTOR", c.name AS "categoria"
FROM inputs i
INNER JOIN users u ON i.user_id = u.id
INNER JOIN category c ON i.category_id = c.id;

/* para mostrar las vistas, se genera como una tabla pero es solo una vista */
SELECT * FROM entradas_con_nombres;

/* esto nos sirve solo si vamos a hacer consultas reiterativas */


/* si queremos borrar la vista porque no vamos a usarla mas usamos la siguiente linea */

DROP VIEW entradas_con_nombres;

