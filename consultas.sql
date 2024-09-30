1- Lista el nombre de todos los productos que hay en la tabla producto.
SELECT * from productos;

2- Lista los nombres y los precios de todos los productos de la tabla producto.
SELECT nombre,precio from productos;

3- Lista todas las columnas de la tabla producto.
SHOW COLUMNS FROM productos;

4- Lista el nombre de los productos, el precio en euros y el precio en dólares estadounidenses (USD).
SELECT nombre, precio AS precio_euros, (precio * 1.10) AS precio_usd FROM productos;

5- Lista el nombre de los productos, el precio en euros y el precio en dólares estadounidenses (USD). Utiliza los siguientes alias para las columnas: nombre de producto, euros, dólares.
SELECT nombre AS 'nombre de producto', precio AS euros, (precio * 1.10) AS dólares FROM productos;

6- Lista los nombres y los precios de todos los productos de la tabla producto, convirtiendo los nombres a mayúscula.
SELECT UPPER(productos.nombre), UPPER(fabricantes.nombre) from productos, fabricantes where fabricantes.id = productos.id_fabricante;

7- Lista los nombres y los precios de todos los productos de la tabla producto, convirtiendo los nombres a minúscula.
SELECT LOWER(productos.nombre), LOWER(fabricantes.nombre) from productos;

8- Lista el nombre de todos los fabricantes en una columna, y en otra columna obtenga en mayúsculas los dos primeros caracteres del nombre del fabricante.
SELECT  nombre,  UPPER(LEFT(nombre, 2))FROM fabricantes;

9- Lista los nombres y los precios de todos los productos de la tabla producto, redondeando el valor del precio.
select nombre, round(precio) from productos;

10- Lista los nombres y los precios de todos los productos de la tabla producto, truncando el valor del precio para mostrarlo sin ninguna cifra decimal.
select nombre, TRUNCATE(precio,0) from productos;