# SELECT BASICO para obtener todos los datos/registros de la tabla #

SELECT * FROM users;

SELECT email, name FROM users;






# OPERADORES ARITMETICOS #

/* para hacer una operacion siempre debe estar entre () */

/* con as podemos darle un nombre a su columna para que aparezca identificada */

SELECT email, (3+2) as "OPERACION" FROM users;


/* si queremos ordenar las filas que tenemos podemos usar ORDER BY y por la caracteristica a ordenar */

SELECT id, email FROM users ORDER BY id;













# FUNCIONES MATEMATICAS #

/* 
- abs saca el valor absoluto de un numero 
- ceil nos ayuda a redondear para arriba
-floor  nos ayuda a redondear para abajo

hay mas funciones que se pueden buscar en la documentacion

*/

SELECT abs(7) AS "OPERACION" FROM users;








# FUNCIONES PARA TEXTOS #

/* 

- UPPER saca los textos en mayuscula
- LOWER saca los textos en minuscula
- CONCAT sirve para concatenar
- LENGTH nos da la cantidad de caracteres
- TRIM limpia los espacios de los textos
 */

/* estructura de uso */
SELECT UPPER(name) FROM  users;





# FUNCIONES PARA FECHAS #

/* 

CURDATE() muestra la fecha actual

DATEDIFF() Muestra los dias de diferencia que hay

DAYNAME() Muestra el nombre del dia

DAYOFMONTH muestra el mes en formato numerico

DAYOFWEEK()

DAYOFYEAR()

SECOND()
MINUTE()
HOUR()
DAY()
MONTH()
YEAR()

FULLTIME() saca la hora actual

SYSDATE() saca la hora del sistema operativo

DATE_FORMAT(fecha, "%d-%m-%y") podemos modificar la fecha a el formato que queramos

 */


SELECT email, date CURDATE() AS "Fecha Actual" FROM users;

SELECT email, DATEDIFF(date CURDATE()) AS "Fecha Actual" FROM users;

SELECT email, DAYNAME(date CURDATE()) AS "Fecha Actual" FROM users;







# FUNCIONES GENERALES #


/* 

ISNULL() comprueba si alguno de los datos son nulos
devuelve true o false

STRCMP() comprueba si son iguales los datos

USER() saca el usuario a nivel de sgbd

DISTINCT hace que solo muestre uno generalizando en caso de haber otros iguales


IFNULL(name, "este campo esta vacio") si esta vacio lo auto completa con lo que nosotros le indiquemos como texto


 */
