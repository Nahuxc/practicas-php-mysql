/* 

listar los clientes que hicieron un cargo del coche Clio

 */

/* primera forma */
SELECT cl.name, c.model FROM orders o

INNER JOIN cars c ON c.id = o.car_id

INNER JOIN clients cl ON cl.id = o.client_id

WHERE car_id IN
(SELECT id FROM cars c WHERE model LIKE "Clio%");


/* segunda forma */

SELECT * FROM clients WHERE id

IN(SELECT client_id FROM orders WHERE car_id

   IN(SELECT id FROM cars WHERE model LIKE "clio%"));