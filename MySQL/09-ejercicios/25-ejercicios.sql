/* sacar los vendedores que tienen jefe y sacar el nombre del jefe */


SELECT s1.name as "vendedor", s2.name as "jefe"  FROM sellers s1
INNER JOIN sellers s2 ON s1.boss = s2.id;