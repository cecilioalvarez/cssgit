CREATE TABLE `Clientes` (
	`dni` varchar(10) NOT NULL,
	`nombre` varchar(20) NOT NULL,
	`apellidos` varchar(30) NOT NULL,
	PRIMARY KEY (`dni`)
);

CREATE TABLE `Peliculas` (
	`isbn` varchar(10) NOT NULL AUTO_INCREMENT,
	`titulo` varchar(25) NOT NULL,
	`director` varchar(25) NOT NULL,
	`duracion` INT NOT NULL,
	PRIMARY KEY (`isbn`)
);

CREATE TABLE `Alquileres` (
	`numero` INT NOT NULL AUTO_INCREMENT,
	`fecha` DATETIME NOT NULL,
	`peliculas_isbn` varchar(10) NOT NULL,
	`clientes_dni` varchar(10) NOT NULL,
	PRIMARY KEY (`numero`)
);

ALTER TABLE `Alquileres` ADD CONSTRAINT `Alquileres_fk0` FOREIGN KEY (`peliculas_isbn`) REFERENCES `Peliculas`(`isbn`);

ALTER TABLE `Alquileres` ADD CONSTRAINT `Alquileres_fk1` FOREIGN KEY (`clientes_dni`) REFERENCES `Clientes`(`dni`);



