CREATE DATABASE IF NOT EXISTS inventario;
USE inventario;

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    precio DECIMAL(10,2)
);

INSERT INTO productos (nombre, precio) VALUES 
    ('Portátil DAW', 450.00), 
    ('Ratón Docker', 15.50);