/* 

- sacar a todos los vendedores cuya fecha de alta sea posterior 6 de agosto de 2024

 */

UPDATE sellers SET date_up = "2024-02-14" WHERE id=5;
 SELECT name, date_up FROM sellers;

 SELECT name, date_up FROM sellers WHERE date_up >= "2024-08-06";
