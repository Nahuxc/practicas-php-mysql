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


 /* ejemplos */

# 1. mostrar nombre y apellidos de todos los usuarios registrados en 2024 #

SELECT name, surname FROM users WHERE YEAR(date) = 2019 ;


# 2 mostrar nombre y apellidos de todos los usuarios no registrados en 2024 #


SELECT name, surname FROM users WHERE YEAR(date) != 2019 OR ISNULL(date) ;