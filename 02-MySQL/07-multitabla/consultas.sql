/* 

CONSULTAS MULTITABLA:

- SON CONSULTAS QUE SIRVEN PARA CONSUTLAR VARIAS TABLAS EN UNA SOLA SENTENCIA

 */

# MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORIA #

SELECT i.id, i.title, u.name AS "AUTOR", c.name AS "CATEGORIA"
FROM inputs i, users u, category c
WHERE i.user_id = u.id AND i.category_id = c.id; /* hacemos una comparacion para que no se duplique la consulta y solo busque con lo requerido en este caso que coincida inputs con el dato user_id y category_id */

/* ESTA CONSULTA SIGNIFICA

-SACAME LA COLUMNA DESDE INPUTS EL ID TITLE Y TAMBIEN DESDE USUARIOS EL NOMBRE Y DE CATEGORIA EL NOMBRE.

-LUEGO LE INDICAMOS DESDE QUE TABLAS SACA LOS DATOS.

-CUANDO SE CUMPLA QUE EL ID DEL USUARIO DE LA ENTRADA SEA IGUAL AL ID DEL USUARIO Y LO MISMO CON LA CATEGORIA

- DE ESTA FORMA NOS MUESTRA EL RESULTADO SI SE CUMPLEN LAS CONDICIONES

///////////////////

podemos ponerle un alias para abreviar en este caso

inputs; i
users; u
category; c

con esta forma podemos sacar un dato en especifico de cada tabla

*/

/* ejemplos del uso */


# mostrar el nombre de las categorias y al lado cuantas entradas tienen #

SELECT c.name, COUNT(i.id) c FROM category c, inputs i WHERE i.category_id = c.id GROUP BY i.category_id;


# MOSTRAR EL MAIL DE LOS USUARIOS Y AL LADO CUANTAS ENTRADAS TIENEN #

SELECT u.email, COUNT(i.id) AS "CANTIDAD DE ENTRADAS" FROM users u, inputs i WHERE i.user_id = u.id GROUP BY i.user_id;


SELECT u.email, COUNT(i.id) AS "CANTIDAD DE ENTRADAS" FROM users u
INNER JOIN inputs i ON i.user_id = u.id GROUP BY i.user_id;



# LEFT JOIN #

/* left join sirve para ver los valores de los campos y los que esten null o 0 tambien */
SELECT u.email, COUNT(i.id) AS "CANTIDAD DE ENTRADAS" FROM users u
LEFT JOIN inputs i ON i.user_id = u.id GROUP BY i.user_id;



# RIGHT JOIN #

SELECT u.email, COUNT(i.id) AS "CANTIDAD DE ENTRADAS" FROM users u
RIGHT JOIN inputs i ON i.user_id = u.id GROUP BY i.user_id;

/*

- lo malo de estas tipos de consultas es que tiene que recorrer todas las tablas para poder hacerlo mas optimo usamos el innerJoin

 */


# INNER JOIN #

SELECT i.id, i.title, u.name AS "AUTOR", c.name AS "categoria"
FROM inputs i
INNER JOIN users u ON i.user_id = u.id
INNER JOIN category c ON i.category_id = c.id; /* une unicamente las filas que cumplan con la condicion */

