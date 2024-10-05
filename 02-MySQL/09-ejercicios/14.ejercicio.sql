/* 

Mostrar los clientes que mas pedidos han hecho y mostrar cuantos hicieron

 */


SELECT * FROM clients;

SELECT * FROM orders;


SELECT cl.name, quantity FROM orders o
INNER JOIN clients cl ON cl.id = o.client_id
GROUP BY o.client_id ORDER BY quantity DESC LIMIT 2;