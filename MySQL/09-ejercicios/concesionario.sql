/*

1. DISEÑAR Y CREAR LA BASE DE DATOS DE UN CONCESIONARIO.

# ya cree la base de datos del concesionario  #

*/

# 2. crear las tablas de la base de datos #


/* tabla de autos */
CREATE TABLE cars (
    id     INT(11) auto_increment not null,
    model  VARCHAR(100) not null,
    mark  VARCHAR(20),
    price  INT(20) not null,
    stock  INT(255) not null,
    year   INT(20) not null,

    CONSTRAINT pk_cars PRIMARY KEY(id)

)ENGINE=InnoDB;


/* tabla de grupos */
CREATE TABLE groups (

id   INT(10) auto_increment not null,
name    VARCHAR(255) not null,
city    VARCHAR(255) not null,

CONSTRAINT pk_groups PRIMARY KEY(id)

)ENGINE=InnoDB;

/* tabla de vendedores */

CREATE TABLE sellers(
    id              INT(10) auto_increment not null,
    group_id        INT(10) NOT NULL,
    boss            INT(10),
    name            VARCHAR(100) not null,
    surname         VARCHAR(150) not null,
    position        VARCHAR(50) not null,
    date_up         date,
    salary          FLOAT(20, 2) not null,
    commission      FLOAT(10, 2),

    CONSTRAINT pk_sellers PRIMARY KEY(id),
    CONSTRAINT fk_seller_group FOREIGN KEY(group_id) REFERENCES groups(id),
    CONSTRAINT fk_seller_boss FOREIGN KEY(boss) REFERENCES sellers(id)

)ENGINE=InnoDB;


/* tabla de clientes */

CREATE TABLE clients(
    id              INT(10) auto_increment not null,
    seller_id       INT(10) not null,
    name            VARCHAR(150) not null,
    city            VARCHAR(100),
    bills           FLOAT(50, 2),
    date            DATE,

    CONSTRAINT pk_clients PRIMARY KEY(id),
    CONSTRAINT fk_client_seller FOREIGN KEY(seller_id) REFERENCES sellers(id)

)ENGINE=InnoDB;

/* tabla de encargos */

CREATE TABLE orders(
    id          INT(10) auto_increment not null,
    client_id       INT(10) not null,
    car_id          INT(10) not null,
    quantity        INT(100) not null,
    date            DATE,

    CONSTRAINT pk_orders PRIMARY KEY(id),
    CONSTRAINT fk_orders_client FOREIGN KEY(client_id) REFERENCES clients(id),
    CONSTRAINT fk_orders_car FOREIGN KEY(car_id) REFERENCES cars(id)

)ENGINE=InnoDB;


# RELLENAR LA BASE DE DATOS #

#coches

INSERT INTO cars VALUES(NULL, "Oroch", "Renault", 27800, 14, 2024);
INSERT INTO cars VALUES(NULL, "Etios", "Toyota", 11000, 5, 2015);
INSERT INTO cars VALUES(NULL, "Clio", "Renault", 7400, 31, 2010);
INSERT INTO cars VALUES(NULL, "Civic", "Honda", 18800, 8, 2017);
INSERT INTO cars VALUES(NULL, "Clio 1.2", "Renault", 8800, 19, 2014);
INSERT INTO cars VALUES(NULL, "Ranger", "Ford", 51000, 10, 2024);


#GRUPOS

INSERT INTO groups VALUES(null, "Vendedores COMERS", "Palermo");
INSERT INTO groups VALUES(null, "Mecanicos Sandy", "Sandy");
INSERT INTO groups VALUES(null, "Rolls Motors", "Montegrande");
INSERT INTO groups VALUES(null, "Emprendimiento Vendedores", "Lanus");
INSERT INTO groups VALUES(null, "Vendedores CZX", "Wilde");
INSERT INTO groups VALUES(null, "Premium Cars", "Lanus");
INSERT INTO groups VALUES(null, "Vendedores de autos", "Montegrande");
INSERT INTO groups VALUES(null, "Autos Model", "Parque Patricios");


#vendedores

INSERT INTO sellers VALUES(null, 2 , null, "Federico", "Gonzales", "Vendedor", CURDATE(), 2800.00 , 40.00 );
INSERT INTO sellers VALUES(null, 2 , 1, "Manuel", "Ramirez", "Repositor de Tienda", CURDATE(), 1500.00 , 500.00 );
INSERT INTO sellers VALUES(null, 1 , null, "Luciano", "Martinez", "Mecanico Jefe", CURDATE(), 3000.00 , 250.00 );
INSERT INTO sellers VALUES(null, 1 , 3, "Luciano", "Martinez", "Mecanico Asistente", CURDATE(), 1200.00 , 250.00 );
INSERT INTO sellers VALUES(null, 3 , null, "Eric", "Gimenez", "Vendedor Avanzado", CURDATE(), 5000.00 , 1000.00 );
INSERT INTO sellers VALUES(null, 5 , null, "Antonio", "Altamirano", "Ayudante de taller", CURDATE(), 2500.00 , 100.00 );
INSERT INTO sellers VALUES(null, 5 , null, "Antonio", "Altamirano", "Ayudante de taller", CURDATE(), 2500.00 , 100.00 );
INSERT INTO sellers VALUES(null, 7 , null, "Jorge", "Carrasco", "Detailer de taller", CURDATE(), 1300.00 , 150.00 );
INSERT INTO sellers VALUES(null, 7 , 7, "Joaquin", "Peña", "Ayudante Detailer", CURDATE(), 800.00 , 180.00 );

#clientes

INSERT INTO clients VALUES(null, 5, "Maria", "Rivadavia", 51000, curdate());
INSERT INTO clients VALUES(null, 2, "Coop Auditor", "Villa crespo", 14800, curdate());
INSERT INTO clients VALUES(null, 3, "Shopping Center", "Palermo", 18800 , curdate());

INSERT INTO clients VALUES(null, 8, "Bar Monsto", "Sandy", 51000 , curdate());

INSERT INTO clients VALUES(null, 2, "CamingCop", "Monte grande", 58380, curdate());
INSERT INTO clients VALUES(null, 6, "optionality", "Villa bayester", 9240, curdate());
#encargos
INSERT INTO orders VALUES(null, 1, 6, 1, curdate());
INSERT INTO orders VALUES(null, 2, 3, 2, curdate());
INSERT INTO orders VALUES(null, 3, 4, 1, curdate());
INSERT INTO orders VALUES(null, 4, 6, 1, curdate());
INSERT INTO orders VALUES(null, 5, 1, 2, curdate());
INSERT INTO orders VALUES(null, 6, 5, 1, curdate());


DELETE FROM orders;