# INSERTS PARA CATEGORIAS #

INSERT INTO category VALUES(NULL, "Aventura");
INSERT INTO category VALUES(NULL, "rol");
INSERT INTO category VALUES(NULL, "Deportes");
INSERT INTO category VALUES(NULL, "Accion");
INSERT INTO category VALUES(NULL, "Terror");

/* 
los valores ingresados corresponden a las siguientes tablas

+-------+--------------+------+-----+---------+----------------+
| Field | Type         | Null | Key | Default | Extra          |
+-------+--------------+------+-----+---------+----------------+
| id    | int(255)     | NO   | PRI | NULL    | auto_increment |
| name  | varchar(100) | NO   |     | NULL    |                |
+-------+--------------+------+-----+---------+----------------+



 */



# INSERTS PARA ENTRADAS #

/* los valores ingresados corresponden a las siguientes tablas


| Field       | Type         | Null | Key | Default | Extra          |
+-------------+--------------+------+-----+---------+----------------+
| id          | int(255)     | NO   | PRI | NULL    | auto_increment |
| user_id     | int(255)     | NO   | MUL | NULL    |                |
| category_id | int(255)     | NO   | MUL | NULL    |                |
| title       | varchar(255) | NO   |     | NULL    |                |
| description | mediumtext   | YES  |     | NULL    |                |
| date        | date         | NO   |     | NULL    |                |
+-------------+--------------+------+-----+---------+----------------+

la parte de user_id nos sirve para seleccionar el usuario que va a ser el autor de la primer entrada, luego cuando hagamos un select de la tabla de entradas me permitiria hacer una subconsulta o consulta multitabla para que las relaciones se puedan usar, en este caso poniendo al user_id = 1 =  Jorge y category_id = 2 = aventura

*/

# USER 1 #
INSERT INTO inputs VALUES(NULL, 1, 1, "Hora de Aventura PS2", "Review de Hora de aventura PS2, juego antiguo muy jugado por la comunidad", CURDATE());

INSERT INTO inputs VALUES(NULL, 1, 5, "Pacify STEAM", "Pacify, una niña que quedo sola en la casa y murio a causa de cosas sobre naturales", CURDATE());


# USER 2 #

INSERT INTO inputs VALUES(NULL, 2, 5, "Outlast STEAM", "Outlast, un manicomio enbrujado y lleno de cientificos. un investigador es enviado a hacer su trabajo", CURDATE());

INSERT INTO inputs VALUES(NULL, 2, 3, "Fifa 23 PS4", "Fifa 23, Futbol y partidos con amigos disponibles para toda la comunidad", CURDATE());