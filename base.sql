
 CREATE TABLE nombre_log1 (
     nombre VARCHAR(100),
     PRIMARY KEY (nombre)
 );
 CREATE TABLE nombre_log2 (
     nombre VARCHAR(100),
     PRIMARY KEY (nombre)
 );
 CREATE TABLE nombre_log3 (
     nombre VARCHAR(100),
     PRIMARY KEY (nombre)
 );
CREATE TABLE API_1 ( 
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
 FOREIGN KEY (log_origen) REFERENCES nombre_log1(nombre)
 );
CREATE TABLE API_2 ( 
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
 FOREIGN KEY (log_origen) REFERENCES nombre_log2(nombre)
 
   );
CREATE TABLE API_3 ( 
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
 FOREIGN KEY (log_origen) REFERENCES nombre_log3(nombre)
 
   );