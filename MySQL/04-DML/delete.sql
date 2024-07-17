# BORRAR REGISTROS #

DELETE FROM users; 
/*

*importante*

en caso de utilizar el delete sin el where podemos provocar que elimine todos los datos de la tabla


*/

/* si usamos el WHERE podemos indicar para que solo elimine el registro que le indiquemos que coincida con la condicion dada */
DELETE FROM users WHERE email = "ianlomada@gmail.com";
