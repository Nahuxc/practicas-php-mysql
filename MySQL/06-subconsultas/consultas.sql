# SUBCONSULTAS #

/*
-SON CONSULTAS QUE SE EJECUTAN DENTRO DE OTRAS.

-TAMBIEN CONSISTE EN UTILIZAR LOS RESULTADOS DE LA SUBCONSULTA PARA OPERAR EN LA CONSULTA PRINCIPAL.

-ESTO VAMOS A PODER UTILIZARLO GRACIAS A LAS CLAVES FORANEAS / CLAVES AJENAS.
 */

SELECT * FROM users;

/* 


- IN significa que cuando hagamos una subconsulta exista dentro o alla multiples resultados 

en este caso para hacer la subconsulta lo primero que hacemos es adentrarnos en la tabla usuarios obteniendo todos sus valores

luego con el where lo vamos a identificar en este caso por id ya que es donde tenemos la clave foranea de user_id

hacemos un IN () y dentro del parentesis seleccionamos todos aquellos que tengan la clave foranea en este caso user_id desde la tabla de inputs

*/


# sacar usuarios con inputs #

SELECT * FROM users WHERE id IN (SELECT user_id FROM inputs);


/* 

nos devuelve solos los usuarios que tienen datos asociados a la tabla de inputs

OUTPUT:

+----+-------+---------+-----------------------+----------+------------+
| id | name  | surname | email                 | password | date       |
+----+-------+---------+-----------------------+----------+------------+
|  1 | Jorge | Gomez   | example@gmail.com     | 124568   | 2024-05-28 |
|  2 | julio | padilla | julipadi234@gmail.com | 15453    | 2014-03-09 |
+----+-------+---------+-----------------------+----------+------------+

 */



# sacar usuarios sin inputs #

 /* si queremos sacar los que no tienen entradas se utiliza el operador NOT IN */

 SELECT * FROM users WHERE id NOT IN (SELECT user_id FROM inputs);

 /* 
 
 output:

 +----+---------+---------+-----------------------+----------+------------+
| id | name    | surname | email                 | password | date       |
+----+---------+---------+-----------------------+----------+------------+
|  3 | gimenez | escobar | marte34deca@gmail.com | 1545353  | 2017-07-09 |
|  4 | martin  | lopez   | martinlopez@gmail.com | 2034     | 2020-06-02 |
|  6 | ian     | lomada  | ianlomada@gmail.com   | 6964     | 2019-06-02 |
+----+---------+---------+-----------------------+----------+------------+

  */



# sacar los usuarios que tengan alguna entrada que en su titulo hable de fifa #

SELECT name, surname FROM users WHERE id
IN (SELECT user_id FROM inputs WHERE title LIKE "%fifa%");



/* ejercicios */

# SACAR TODAS LAS ENTRADAS DE LA CATEGORIA ACCION UTILIZANDO SU NOMBRE # 


# MOSTRAR LAS CATEGORIAS CON MAS DE 3 ENTRADAS #


# MOSTRAR LOS USUARIOS QUE CREARON UNA ENTRADA UN MARTES #


# MOSTRAR EL NOMBRE DEL USUARIO QUE TENGA MAS ENTRADAS #


# MOSTRAR LAS CATEGORIAS SIN ENTRADAS #
