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
    salary          INT(20, 2) not null,
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