/* 

    listar todos los vendedores y para cada vendedor mostrar su nombre y apellido y el numero de dias que llevan en el concesionario.


 */

SELECT name, surname, DATEDIFF(CURDATE(), date_up) AS "dias trabajados" FROM sellers;