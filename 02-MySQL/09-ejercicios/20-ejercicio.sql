/* 

Obtener los nombres y ciudades de los clientes
con encargos y que la cantidad del encargo sea mayor a 2 unidades

 */


SELECT c.name, c.city, o.quantity FROM orders o
INNER JOIN clients c ON c.id = o.client_id
GROUP BY o.client_id HAVING o.quantity >= 2;



SELECT name, city FROM clients WHERE id IN
(SELECT client_id FROM orders WHERE quantity >=2);