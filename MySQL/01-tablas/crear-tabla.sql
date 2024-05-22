/* 

/// COMANDOS PARA USAR EN EL CMD (anotacion basica) ///

show databases

create table

show tables

desc "nombre de la tabla para ver sus propiedades"


drop "nombre de la tabla para eliminar"



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
    id          INT(11) auto_increment not null,
    name        VARCHAR(100) not null,
    surname     VARCHAR(255),
    email       VARCHAR(100) not null,
    password    VARCHAR(255) not null
    CONSTRAINT pk_usuarios PRIMARY KEY(id)

   /* restricciones de integridad

    - not null, significa que el campo nunca puede ser nulo

    - Null, podemos indicar que el valor si puede ser nulo.

    - default "hola que tal", esto hace que por defecto el campo seleccionado tenga ese valor.

    - auto_increment esto indica que el campo va a ser auto incrementable que solo va a poder ser usado para las claves primarias.

   - CONSTRAINT pk_usuarios PRIMARY KEY(id) esto le va a dar una clave primaria de identificador, lo cual luego nos va ayudar para identificarlos.

    */


    /* indicando el tipo de dato y su maxima cantidad de caracteres estariamos creando una tabla con sus respectiva propiedades */

 )


 /* tabla para usar sin los comentarios dentro */

/*  CREATE TABLE usuarios(
    id          INT(11) auto_increment not null,
    name        VARCHAR(100) not null,
    surname     VARCHAR(255),
    email       VARCHAR(100) not null,
    password    VARCHAR(255) not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id) 
) */