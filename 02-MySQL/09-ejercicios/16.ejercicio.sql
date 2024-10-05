/* 

obtener un listado con los encargos realizados por el cliente
"coop auditor"

 */

/* subconsultas */

SELECT o.id as "numero de encargo", cl.name as "cliente", c.model as "modelo", o.quantity as "cantidad", o.date FROM orders o
INNER JOIN clients cl ON cl.id = o.client_id
INNER JOIN cars c ON c.id = o.car_id
WHERE client_id IN
(SELECT id FROM clients cl WHERE name= "coop auditor");


/* multitabla */

SELECT o.id, cl.name, c.model, o.quantity, o.date FROM orders o
INNER JOIN cars c ON c.id = o.car_id
INNER JOIN clients cl ON cl.id = o.client_id
GROUP BY o.client_id HAVING name= "coop auditor";