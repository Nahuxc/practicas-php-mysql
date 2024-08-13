/* 

obtener listado de clientes (numero de cliente y el nombre)
mostrar tambien el numero de vendedor y su nombre tambien

 */

SELECT c.id, c.name, s.id, s.name FROM clients c
INNER JOIN sellers s ON s.id = c.seller_id
GROUP BY c.seller_id;


SELECT c.id, c.name, s.id, s.name FROM clients c, sellers s WHERE c.seller_id = s.id;
