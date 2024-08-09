/* 


visualizar el nombre y los apellidos de los vendedores en una misma columna,
su fecha de registro y el dia de las semana en la que se registraron.


 */


 SELECT CONCAT(name, " " , surname) as "Vendedores", date_up as "Fecha", DAYNAME(date_up) as "dia registrado"  FROM sellers;