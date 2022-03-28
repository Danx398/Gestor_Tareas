CREATE TABLE `tareas`.`t_usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(245) NOT NULL,
  `password` VARCHAR(245) NOT NULL,
  `nombre` VARCHAR(245) NOT NULL,
  `apellido_paterno` VARCHAR(245) NOT NULL,
  `apellido_materno` VARCHAR(245) NOT NULL,
  PRIMARY KEY (`id_usuario`));

  #registro de muestra
  INSERT INTO `tareas`.`t_usuarios` (`usuario`, `password`, `nombre`, `apellido_paterno`, `apellido_materno`) VALUES ('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Daniel', 'Blancas', 'Aguilar');

  CREATE TABLE `tareas`.`new_table` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre_tarea` VARCHAR(245) NOT NULL,
  `fecha_inicio` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_fin` DATE NOT NULL,
  `hora_inicio` TIME NOT NULL,
  `hora_fin` TIME NOT NULL,
  `comentario` TEXT(150) NOT NULL,
  PRIMARY KEY (`id`));
