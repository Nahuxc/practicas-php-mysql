/* USOS DE WHERE */

/* lo que hacemos es que seleccionamos la lista de usuarios y mientras se cumpla la condicion se ejecuta y nos devuelve todos los valores que esten relacionados */

SELECT * FROM users WHERE email = "example@gmail.com";


/* operadores de comparacion

= IGUAL
!= DISTINTO
< MENOR QUE
> MAYOR QUE
<= MENOR O IGUAL
>= MAYOR O IGUAL
between A and B  ENTRE
En               in
is null          ES NULO
is not null      NO ES NULO
like             COMO
not like         no es como

 */

/* operadores logicos 

O    OR
Y    AND
NO   NOT

*/

/* 

COMODINES PARA OPERADORES;

cualquier cantidad de caracteres:     %
un caracter desconocido:              _


 */



 /* ejemplos / ejercicios */

# 1. mostrar nombre y apellidos de todos los usuarios registrados en 2024 #

SELECT name, surname FROM users WHERE YEAR(date) = 2019 ;


# 2 mostrar nombre y apellidos de todos los usuarios no registrados en 2024 #


SELECT name, surname FROM users WHERE YEAR(date) != 2019 OR ISNULL(date) ;

# 3. MOSTRAR EL EMAIL Y EL USUARIO CUYO APELLIDO TENGA LA LETRA A y su contraseña sea 15453

SELECT email FROM users WHERE surname LIKE "%a%" AND password = 15453;


#4. sacar todos los todos los registros de la tabla usuarios cuyo año sea par


SELECT * FROM users WHERE (YEAR(date)%2 = 0);



#5. sacar todos los registros de la tabla usuarios cuyo nombre tenga mas de 5 letras y que se hayan registrado antes de 2020 y mostrar el nombre en mayusculas


SELECT UPPER(name) AS "name", surname FROM users WHERE (LENGTH(name) >= 5) AND (YEAR(date) <= 2020);



# LIMIT / ORDER BY

/* con el ORDER BY podemos indicar como queremos que nos muestre el orden de las tablas dependiendo de lo que busquemos */

SELECT *  FROM users ORDER BY id DESC; /* el DESC sirve para hacerlo al reves */


/* limit, limita la cantidad de registros a mostrar, podemos indicarle solo un numero o indicarle de que numero hasta que numero queremos que ejecute y muestre la tabla */

SELECT * FROM users LIMIT 0, 2;