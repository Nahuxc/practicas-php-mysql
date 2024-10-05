/* 

visualizar los apellidos de los vendedores,
su fecha y su numero de grupo
ordenado por fecha descendente, mostrar los 4 ultimos

 */


SELECT surname, date_up, id FROM sellers ORDER BY date_up DESC LIMIT 4;