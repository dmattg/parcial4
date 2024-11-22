CREATE DATABASE librarybd;

USE librarybd;

CREATE TABLE author (
    ID_AUTHOR BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
    FULL_NAME VARCHAR(255),
    DATE_OF_BIRTH DATE,
    DATE_OF_DEATH DATE
);

CREATE TABLE genre (
    ID_GENRE BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
    NAME VARCHAR(255)
);

CREATE TABLE book (
    ID_BOOK BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
    TITLE VARCHAR(255),
    DESCRIPTION VARCHAR(255),
    YEAR_PUBLICATION YEAR(4),
    ID_AUTHOR BIGINT(20),
    ID_GENRE BIGINT(20),
    FOREIGN KEY (ID_AUTHOR) REFERENCES author(ID_AUTHOR),
    FOREIGN KEY (ID_GENRE) REFERENCES genre(ID_GENRE)
);

CREATE TABLE stock (
    ID_STOCK BIGINT(20) PRIMARY KEY AUTO_INCREMENT,
    ID_BOOK BIGINT(20),
    TOTAL_STOCK INT(11),
    NOTES VARCHAR(255),
    LAST_INVENTORY DATE,
    FOREIGN KEY (ID_BOOK) REFERENCES book(ID_BOOK)
);

INSERT INTO author (FULL_NAME, DATE_OF_BIRTH, DATE_OF_DEATH) VALUES
('Gabriel García Márquez', '1927-03-06', '2014-04-17'),
('Mario Vargas Llosa', '1936-03-28', NULL),
('Jorge Luis Borges', '1899-08-24', '1986-06-14'),
('Isabel Allende', '1942-08-02', NULL),
('Carlos Fuentes', '1928-11-11', '2012-05-15'),
('Octavio Paz', '1914-03-31', '1998-04-19'),
('Juan Rulfo', '1917-05-16', '1986-01-07');

INSERT INTO genre (NAME) VALUES
('Ficción'),
('Poesía'),
('Ensayo'),
('Drama'),
('Ciencia ficción'),
('Literatura infantil'),
('Historia');

INSERT INTO book (TITLE, DESCRIPTION, YEAR_PUBLICATION, ID_AUTHOR, ID_GENRE) VALUES
('Cien años de soledad', 'Una novela de realismo mágico', 1967, 1, 1),
('La ciudad y los perros', 'Novela sobre la vida en un colegio militar', 1963, 2, 3),
('El Aleph', 'Una colección de relatos cortos', 1949, 3, 2),
('La casa de los espíritus', 'Una novela sobre lo sobrenatural en Chile', 1982, 4, 1),
('Terra Nostra', 'Una novela histórica y filosófica', 1975, 5, 3),
('El laberinto de la soledad', 'Ensayo sobre la identidad mexicana', 1950, 6, 3),
('Pedro Páramo', 'Una novela sobre la muerte y la memoria', 1955, 7, 1);

INSERT INTO stock (ID_BOOK, TOTAL_STOCK, NOTES, LAST_INVENTORY) VALUES
(1, 10, 'Ejemplar en buen estado', '2024-10-01'),
(2, 15, 'Hay varias ediciones', '2024-11-01'),
(3, 8, 'Edición limitada', '2024-09-15'),
(4, 20, 'Nuevo lanzamiento', '2024-10-20'),
(5, 5, 'Pocas copias disponibles', '2024-11-05'),
(6, 12, 'Reimpresión reciente', '2024-10-10'),
(7, 6, 'Con marca de agua', '2024-11-10');