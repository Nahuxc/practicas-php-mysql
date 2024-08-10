/* 

MOSTRAR EL NOMBRE Y SALARIO DE LOS VENDEDORES CON CARGO DE VENDEDOR

 */


 SELECT name, salary, position FROM sellers WHERE position = "vendedor" OR position = "vendedor Avanzado";