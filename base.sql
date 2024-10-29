CREATE DATABASE solar;


CREATETABLE contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOTNULL,
    apellido VARCHAR(255) NOTNULL,
    email VARCHAR(255) NOTNULL,
    numero_contacto VARCHAR(20),
    ubicacion VARCHAR(255),
    comentarios TEXT,
    fecha TIMESTAMPDEFAULTCURRENT_TIMESTAMP
);
