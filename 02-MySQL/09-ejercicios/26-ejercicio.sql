/* 

visualizar los nombres de los clientes y la cantidad de encargos realizados
incluyendo los que no hayan realizado encargos

 */

INSERT INTO clients VALUES(null, 5, "Tienda organica inc", "flores", 0 , curdate())

 SELECT cl.name, COUNT(o.quantity) as "ENCARGOS" FROM clients cl
 LEFT JOIN orders o ON cl.id = o.client_id
 GROUP BY cl.name;