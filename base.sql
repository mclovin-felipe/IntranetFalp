
 CREATE TABLE nombre_API_3210 (
     nombre VARCHAR(100),
     PRIMARY KEY (nombre)
 );
 CREATE TABLE nombre_API_3200 (
     nombre VARCHAR(100),
     PRIMARY KEY (nombre)
 );
 CREATE TABLE nombre_API_3500 (
     nombre VARCHAR(100),
     PRIMARY KEY (nombre)
 );
CREATE TABLE API_3210 ( 
    id BIGINT NOT NULL AUTO_INCREMENT,
    log_origen VARCHAR(100),
    fecha datetime,
    metodo varchar(8),
    enlace varchar(1000),
    estado int,
    tiempo_respuesta float,
    IP_cliente varchar(100),
       largo_peticion int,
 PRIMARY KEY (id),
 FOREIGN KEY (log_origen) REFERENCES nombre_API_3210(nombre)
 );
CREATE TABLE API_3200 ( 
    id BIGINT NOT NULL AUTO_INCREMENT,
    log_origen VARCHAR(100),
    fecha datetime,
    metodo varchar(8),
    enlace varchar(1000),
    estado int,
    tiempo_respuesta float,
    IP_cliente varchar(100),
       largo_peticion int,
 PRIMARY KEY (id),
 FOREIGN KEY (log_origen) REFERENCES nombre_API_3200(nombre)
 
   );
CREATE TABLE API_3500 ( 
    id BIGINT NOT NULL AUTO_INCREMENT,
    log_origen VARCHAR(100),
    fecha datetime,
    metodo varchar(8),
    enlace varchar(1000),
    estado int,
    tiempo_respuesta float,
    IP_cliente varchar(100),
       largo_peticion int,
 PRIMARY KEY (id),
 FOREIGN KEY (log_origen) REFERENCES nombre_API_3500(nombre)
 
   );
