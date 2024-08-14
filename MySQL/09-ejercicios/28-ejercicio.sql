/* 

crear una vista llamada vendedores A que incluira todos los vendedores del grupo que se llame "mecanicos sandy"

 */


CREATE VIEW vendedores_A AS
SELECT * FROM sellers WHERE group_id IN
(SELECT id FROM groups WHERE name = "mecanicos sandy");