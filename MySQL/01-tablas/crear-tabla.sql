/* 

/// COMANDOS PARA USAR EN EL CMD (anotacion) ///

show databases

create table

show tables

desc "nombre de la tabla"




//// tipos de datos ///////

- int(n° de caracteres) ENTERO (MAXIMO 255)

- integer(n° de caracteres) ENTERO (MAXIMO 4294967295)

- varchar (n° de caracteres) STRING / ALFANUMERICO (MAXIMO DE CARACTERES 255)

- char (n° de caracteres) STRING / ALFANUMERICO (MAXIMO DE CARACTERES 255)

- float (n° de cifras, numero de decimales) DECIMAL/ coma flotante

- date, time, timestamp

//// STRING MAS GRANDES ////

- TEXT 65535 CARACTERES A GUARDAR


- MEDIUMTEXT  16 MILLONES DE CARACTERES


- LONGTEXT 4 MILLONES DE CARACTERES


//// ENTEROS MAS GRANDES ////

- MEDIUMINT

- BIGINT


 */


/* CREAR TABLA en sql */

 CREATE TABLE usuarios(
    /* indicamos los campos que va a tener la tabla */
    id          INT(11),
    name        VARCHAR(100),
    surname     VARCHAR(255),
    email       VARCHAR(100),
    password    VARCHAR(255)


    /* indicando el tipo de dato y su maxima cantidad de caracteres estariamos creando una tabla con sus respectiva propiedades */

 )