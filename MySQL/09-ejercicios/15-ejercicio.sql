/* 

obtener un listado de clientes atendidos por el vendedor "manuel"


 */

/* consulta multitabla */
SELECT cl.seller_id, cl.name as "CLIENTE ATENDIDO", s.name AS "VENDEDOR" FROM clients cl
INNER JOIN sellers s ON s.id = cl.seller_id
WHERE cl.seller_id = 2;

/* subconsulta */

SELECT * FROM clients WHERE seller_id IN
(SELECT id FROM sellers WHERE name= "manuel");