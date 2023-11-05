CREATE TABLE cursodesarrolloweb.usuarios
(
    Identificador INT(255) NOT NULL AUTO_INCREMENT , 
     nombredeusuario VARCHAR(255) NOT NULL , 
     contrasena VARCHAR(255) NOT NULL , 
     nombre VARCHAR(255) NOT NULL , 
     apellidos VARCHAR(255) NOT NULL , 
     PRIMARY KEY (`Identificador`)
) ENGINE = InnoDB COMMENT = 'En esta tabla guardaremos los usuarios';