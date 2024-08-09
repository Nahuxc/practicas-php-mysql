/* 

- Modificar la comision de los vendedores y dividirla a la mitad cuando ganan mas de usd 3000

 */
SELECT commission, name FROM sellers WHERE salary >= 3000;

UPDATE sellers SET commission = (commission / 2) WHERE salary >= 3000;