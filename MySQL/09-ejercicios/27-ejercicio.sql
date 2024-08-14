/* 

mostrar todos los vendedores y el numero de clientes.
se deben mostrar tengan o no clientes

 */

 SELECT s.name, COUNT(cl.seller_id) as "CANTIDAD DE CLIENTES" FROM sellers s
 LEFT JOIN clients cl ON cl.seller_id = s.id
GROUP BY s.name;