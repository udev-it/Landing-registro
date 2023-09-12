-- Base de datos: `evento-registro`
-- Borrar si existe DROP DATABASE IF EXISTS evento_registro;
CREATE DATABASE IF NOT EXISTS evento_registro;

-- Usar la base de datos
USE evento_registro;

-- Estructura de tabla

CREATE TABLE `evento` (
    `id` int(11),
    `nombre` varchar(200) NOT NULL,
    `email` varchar(200) NOT NULL,
    `telefono` int(10) NOT NULL,
    `municipio` varchar(200) NOT NULL,
    `fecha` DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Volcado de tabla `evento`
INSERT INTO `evento` (`nombre`, `email`, `telefono`, `municipio`) VALUES
('Héctor Manuel', 'chiang@gmail.com', '9711234567', 'azcapotzalco');

-- Indices de la tabla evento
ALTER TABLE `evento`
    ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de la tabla evento
ALTER TABLE `evento`
    MODIFY `id` int(11) AUTO_INCREMENT;
