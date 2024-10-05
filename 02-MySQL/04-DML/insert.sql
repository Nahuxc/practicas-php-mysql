# INSERTAR NUEVOS REGISTROS #

# insert into sirve para insertar datos dentro de mi tabla,que le vamos a pasar por un VALUE() en el cual hay que integrarles los datos a guardar dependiendo, la cantidad y los campos que tengamos para completar #


/* esto hace que saque todos los registros de la tabla users */
SELECT * FROM users;


/* de esta manera insertamos usuarios */
INSERT INTO users VALUES(null, "Jorge", "Gomez", "example@gmail.com", "124568", "2024-05-28");
INSERT INTO users VALUES(null, "martin", "lopez", "martinlopez@gmail.com", "2034", "2020-06-02");
INSERT INTO users VALUES(null, "ian", "lomada", "ianlomada@gmail.com", "6964", "2019-06-02");









# INSERTAR FILAS SOLO CON CIERTAS COLUMNAS en especifico #

INSERT INTO users(email, password) VALUE("examplenew@gmail.com", "admin121548");

/* para que esto funcione deberiamos modificar nuestras tablas porque sino no va a funcionar, indicandole a la columna de preferencia que sea solo null */










