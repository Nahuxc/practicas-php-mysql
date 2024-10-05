/* 

mostrar todos los vendedores del grupo numero 2
ordenados por salario de mayor a menor

 */


SELECT name, group_id, salary FROM sellers WHERE group_id = 2 ORDER BY salary DESC;