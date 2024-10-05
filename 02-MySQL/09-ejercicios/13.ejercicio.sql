/* 


visualizar las unidades totales vendidas de cada coche a cada cliente
mostrando el nombre del producto, y el numero de cliente
y la suma de unidades


 */


/* selecionamos con los alias "c" tabla cars, "cl" tabla clients, "o" tabla orders  */
SELECT c.model as "Coche", cl.name as "cliente", SUM(o.quantity) as "unidades totales vendidas" FROM orders o

/* conseguimos los datos referenciados desde la tabla cars y comparamos la condicion para que devuelva el auto que coincida con el id de la tabla orders */
INNER JOIN cars c ON  c.id = o.car_id
/* conseguimos los datos referenciados desde la tabla clients y comparamos la condicion para que devuelva el auto que coincida con el id de la tabla orders */
INNER JOIN clients cl ON cl.id = o.client_id

/* unimos del grupos desde la tabla orders con alias "o" con los autos y clientes id */
GROUP BY o.car_id, o.client_id;


/*

OUTPUT;

+--------+-----------------+-----------------+
| autos  | Cliente         | unidades        |
+--------+-----------------+-----------------+
| Clio   | Coop Auditor    |               2 |
| Civic  | Shopping Center |               1 |
| Ranger | Maria           |               1 |
| Ranger | Bar Monsto      |               1 |
+--------+-----------------+-----------------+

 */