/* obtener una lista de los nombres de los clients
con el importe de sus encargos acumulados */

SELECT cl.name, SUM(c.price * o.quantity) as "IMPORTE" FROM orders o
INNER JOIN clients cl ON cl.id = o.client_id
INNER JOIN cars c ON c.id = o.car_id
GROUP BY cl.name;