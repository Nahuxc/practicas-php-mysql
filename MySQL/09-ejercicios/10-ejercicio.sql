/* 

visualizar todos los cargos y el numero de vendedores que hay en cada cargo


 */

 SELECT position, COUNT(id) FROM sellers GROUP BY position;



