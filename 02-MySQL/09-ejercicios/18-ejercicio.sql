/* 

obtener los vendedores con 2 o mas clientes

 */


SELECT * FROM sellers WHERE id
IN(SELECT seller_id FROM clients GROUP BY seller_id HAVING COUNT(id) >= 2 );