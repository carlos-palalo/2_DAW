DROP DATABASE IF  EXISTS biblioteca;
CREATE DATABASE IF NOT EXISTS biblioteca;
USE biblioteca;
CREATE TABLE libros (
  id int  NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre varchar(50)  NOT NULL,
  autor varchar(50)  NOT NULL,
  anio_edicion varchar(50)  NOT NULL
) ENGINE=InnoDB  CHARACTER SET utf8MB4   AUTO_INCREMENT=1;
INSERT INTO libros VALUES(1,"La ciudad del vapor","Carlos Ruiz Zafón",2020),
(2,"Aquitania","Eva Garcia",2020),
(3,"Terra Alta","Javier Cercas",2019);

CREATE TABLE usuarios_login(
usuario varchar(30) PRIMARY KEY,
pass    varchar(128)
);
/*guardo la clabe utilizando el algoitmo sha512*/
INSERT INTO usuarios_login VALUE 
('juan', '673d4b1d7deabe33d0037d3a39927ec3d56397a45f5eb9ac0512c75808c293f0d022e04adc5555cd3644d18cf79e9e9ebaea7e3a8e96744b0c49312a7f8af398'),
('ana', '40c41475561375aa28d4d035445525f0e8f6bfaba1fdb4bc0c30dec2de112d7c7df168bdced38b4d87326b4c3f226c2ba1a09f4384451b0bc5f9c108c1c1df32'),
('profesor', '57392757fae3944bf7ca33e2f48e1af1409889791a9f9a698afb045b720ee3e85484adedc6cd2eb5d7231a465f0f324530dbbca9b75eba19192bbd77adfd5f3c'));




