/*

Listar todos los encargos realizados con la marca del coche
y el nombre del cliente

 */


SELECT c.mark, cl.name FROM orders o
INNER JOIN cars c ON c.id = o.car_id
INNER JOIN clients cl ON cl.id = o.client_id;