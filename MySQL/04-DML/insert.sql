# INSERTAR NUEVOS REGISTROS #

# insert into sirve para insertar datos dentro de mi tabla,que le vamos a pasar por un VALUE() en el cual hay que integrarles los datos a guardar dependiendo, la cantidad y los campos que tengamos para completar #


/* esto hace que saque todos los registros de la tabla users */
SELECT * FROM users;


/* de esta manera insertamos usuarios */
INSERT INTO users VALUES(null, "Jorge", "Gomez", "example@gmail.com", "124568", "2024-05-28");
INSERT INTO users VALUES(null, "julio", "padilla", "julipadi234@gmail.com", "15453", "2024-06-02");



# INSERTAR FILAS SOLO CON CIERTAS COLUMNAS en especifico #

INSERT INTO users(email, password) VALUE("examplenew@gmail.com", "admin121548");

/* para que esto funcione deberiamos modificar nuestras tablas porque sino no va a funcionar, indicandole a la columna de preferencia que sea solo null */



# SELECT BASICO para obtener todos los datos/registros de la tabla #

SELECT * FROM users;

SELECT email, name FROM users;



# OPERADORES ARITMETICOS #

/* para hacer una operacion siempre debe estar entre () */

/* con as podemos darle un nombre a su columna para que aparezca identificada */

SELECT email, (3+2) as "OPERACION" FROM users;


/* si queremos ordenar las filas que tenemos podemos usar ORDER BY y por la caracteristica a ordenar */

SELECT id, email FROM users ORDER BY id;
