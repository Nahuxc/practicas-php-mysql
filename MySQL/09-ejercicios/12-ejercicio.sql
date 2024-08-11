/* 

sacar la media de sueldos entre todos los vendedores por grupo


 */


/* 

ROUND(salary, 2) REDONDEA, dato y cantidad de decimal

CEIL() ELIMINA LOS DECIMALES

 */


 SELECT CEIL(AVG(salary)) as "media de sueldos", s.group_id, g.name, g.city FROM sellers s INNER JOIN groups g ON g.id = s.group_id
 GROUP BY group_id;