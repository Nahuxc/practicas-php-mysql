# MODIFICAR FILAS / ACTUALIZAR DATOS  #

/* UPDATE */


UPDATE users SET date = "2017-03-09" WHERE id = 3; /* si ejecutamos esto se cambian absolutamene todas las fechas */

/*

-un consejo seria siempre antes de poner un update hay que ponerle un WHERE para que solo actualize el dato requerido

- en el caso de usar el WHERE e indicar que dato queremos que se actualize solo se modificara ese, sin afectar al resto


*/


