/* 

listar los encargos con el nombre del coche
el nombre del cliente y el nombre de la ciudad
pero unicamente cuando sean monte grande

 */


 SELECT o.id, c.model, cl.name, cl.city FROM orders o
 INNER JOIN cars c ON c.id = o.car_id
 INNER JOIN clients cl ON cl.id = o.client_id
 WHERE cl.city = "Monte grande";