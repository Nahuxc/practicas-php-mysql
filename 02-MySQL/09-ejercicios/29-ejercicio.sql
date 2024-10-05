/* 

mostrar los datos del vendedor con mas antiguedad en el concesionario

 */


SELECT * FROM sellers ORDER BY date_up ASC LIMIT 1;

# obtener los coches con mas unidades vendidas #

SELECT * FROM cars WHERE id IN
(SELECT car_id FROM orders WHERE quantity IN
(SELECT MAX(quantity) FROM orders));