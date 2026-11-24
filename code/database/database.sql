-- Base de donnees du TP 6
DROP DATABASE IF EXISTS tp_php;
CREATE DATABASE tp_php;
USE tp_php;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2),
    quantity INT
);

INSERT INTO products (name, price, quantity) VALUES
('Clavier mecanique', 349.00, 12),
('Souris sans fil', 129.50, 25),
('Ecran 24 pouces', 1299.00, 7),
('Casque Bluetooth', 299.00, 18),
('Cle USB 64 Go', 89.90, 40),
('Disque SSD 1 To', 899.00, 9),
('Webcam HD', 249.00, 15),
('Enceinte portable', 199.00, 22);
