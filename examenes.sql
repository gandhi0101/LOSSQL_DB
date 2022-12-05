-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 05-12-2022 a las 03:52:24
-- Versión del servidor: 5.7.34
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcertificaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes`
--

CREATE TABLE `examenes` (
  `materia` varchar(20) NOT NULL,
  `pregunta` varchar(150) NOT NULL,
  `respuestaC` varchar(50) NOT NULL,
  `respuesta1` varchar(50) NOT NULL,
  `respuesta2` varchar(50) NOT NULL,
  `respuesta3` varchar(50) NOT NULL,
  `folio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `examenes`
--

INSERT INTO `examenes` (`materia`, `pregunta`, `respuestaC`, `respuesta1`, `respuesta2`, `respuesta3`, `folio`) VALUES
('php', '¿En qué lugar se ejecuta el código PHP?', 'Servidor.', 'Cliente.', 'Terminal.', 'Consola.', 1),
('php', '¿Cuáles de estas son marcas para la inserción del código PHP en las páginas HTML?', '< ? y ? >', '< php >< /php >', '<# y #>', 'ninguna de las anteriores.', 2),
('php', '¿En qué atributo de un formulario especificamos la página a la que se van a enviar los datos del mismo?', 'action.', 'file.', 'name.', 'description.', 3),
('php', '¿Cuál de estas instrucciones está correctamente escrita en PHP?', 'if (a==0) echo “hola mundo”;', 'if (a=0) print a', 'if (a==0) { echo ok }', 'if (a==0): print a;', 4),
('c++', 'En el proceso de Compilar, pueden aparecer 2 tipos de errores:', 'Errores de compilación y ejecución.', 'Errores de entrada y salida.', 'Errores de entrada y ejecución.', 'Errores de compilación y salida.', 5),
('c++', 'La sentencia cin >> var1, se utiliza para ingresar un valor a una variable desde teclado...', 'Si.', 'No.', 'Tal vez.', 'No siempre.', 6),
('c++', 'La sentencia Escribir en Pseudocódigo equivale a cout<< en el lenguaje C++', 'Si.', 'No.', 'Tal vez.', 'No siempre.', 7),
('c++', 'La definición de una variable se realiza de la siguiente manera:', 'int variable1 = 25;', 'const int variable1 = 25;', ' include variable1;', 'int variable1;', 8),
('javascript', '¿Qué es JavaScript ?', 'Lenguaje de scripting.', 'Lenguaje de consola.', 'Lenguaje de hackeo.', 'Lenguaje de navegador. ', 9),
('javascript', 'Diferencia entre (==) y (===)', '(===) analiza también el tipo de dato.', '(==) analiza también el tipo de dato.', '(===) es lo mismo que el (!=)', '(==) no sirve.', 10),
('javascript', '¿Cómo crear una Promise?', 'promise (resolve, reject)', 'promise ()', 'promise (reject, resolve)', 'promise(null)', 11),
('javascript', '¿Qué es el Strict Mode en JS?', ' forma de elegir una variante restringida.', 'forma de casarte con una función.', 'forma de hacer nodos.', 'forma de hacer modos estrictos.', 12),
('python', '¿Cómo se interpreta python?', 'Lenguaje interpretado.', 'Lenguaje compilado.', 'Lenguaje de hackeo.', 'Lenguaje de maquina.', 13),
('python', '¿Qué tipo de lenguaje es python?', 'Propósito generalizado.', 'Solo scripting.', 'Solo texto.', 'Solo base de datos.', 14),
('python', 'sintaxis de una variable:', 'a=1', 'int a = 1', 'int a = 1;', 'const a : 1', 15),
('python', 'sintaxis de una función:', 'def ejemplo():', 'function ejemplo(){ }', 'int ejemplo() { }', 'ejemplo() { }', 16);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `examenes`
--
ALTER TABLE `examenes`
  ADD PRIMARY KEY (`folio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `examenes`
--
ALTER TABLE `examenes`
  MODIFY `folio` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
