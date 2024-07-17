# CONSULTAS DE AGRUPAMIENTO #
/* nos permite agrupar filas */


SELECT title FROM inputs;

/* 

output:

+----------------------+
| title                |
+----------------------+
| Hora de Aventura PS2 |
| Pacify STEAM         |
| Outlast STEAM        |
| Fifa 23 PS4          |
+----------------------+



 */


/* GROUP BY nos permite agrupar una fila en una columna */

SELECT title, category_id FROM inputs GROUP BY category_id;


/* 

output:

+----------------------+-------------+
| title                | category_id |
+----------------------+-------------+
| Hora de Aventura PS2 |           1 |
| Fifa 23 PS4          |           3 |
| Pacify STEAM         |           5 |
+----------------------+-------------+

 */



 SELECT COUNT(title) AS "Numero de entradas", category_id FROM inputs GROUP BY category_id;

/* COUNT nos permite sacar cuantas entradas en una categoria tengo */


/* 
OUTPUT:
+--------------------+-------------+
| Numero de entradas | category_id |
+--------------------+-------------+
|                  1 |           1 |
|                  1 |           3 |
|                  2 |           5 |
+--------------------+-------------+


-nota: No se puede usar WHERE en una consulta de agrupamiento


 */




 # CONSULTA DE AGRUPAMIENTO CON CONDICION #

/* si queremos hacer condiciones podemos usar el HAVING que nos permitira darle una condicion a la ejecucion de busqueda */

  SELECT COUNT(title) AS "Numero de entradas", category_id FROM inputs GROUP BY category_id HAVING COUNT(title) >= 4;



/*

FUNCIONES PARA AGRUPAMIENTO

  AVG           saca la media
  COUNT         permite contar el numero de elementos
  MAX           nos permite sacar el valor maximo del grupo
  MIN           nos permite sacar el valor minimo del grupo
  SUM           Sumar todo el contenido del grupo

*/


# SACAR MEDIA #

SELECT AVG(id) AS "media de entradas" FROM inputs;

/* OUTPUT:

+-------------------+
| media de entradas |
+-------------------+
|            2.5000 |
+-------------------+

 */


# MAX O MIN#

SELECT MAX(id) AS "Maximo ID", title FROM inputs;
SELECT MIN(id) AS "Minimo ID", title FROM inputs;

/* 
OUTPUT:
+-----------+----------------------+
| Maximo ID | title                |
+-----------+----------------------+
|         4 | Hora de Aventura PS2 |
+-----------+----------------------+

+-----------+----------------------+
| Minimo ID | title                |
+-----------+----------------------+
|         1 | Hora de Aventura PS2 |
+-----------+----------------------+

 */


 # SUM #

 SELECT SUM(id) AS "SUMA de ID", title FROM inputs;

 /* 
 OUTPUT:

 +------------+----------------------+
| SUMA de ID | title                |
+------------+----------------------+
|         10 | Hora de Aventura PS2 |
+------------+----------------------+
 
  */