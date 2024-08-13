/*

Seleccionar el grupo en el que trabaja
el vendedor con mayor salario y mostrar
el nombre del grupo

  */


SELECT * FROM groups WHERE id IN
(SELECT group_id FROM sellers WHERE salary = (
    SELECT max(salary) FROM sellers
));