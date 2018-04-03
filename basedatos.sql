CREATE TABLE habitacion
(
  id                    INT        NOT NULL,
  piso                  VARCHAR(2) NOT NULL,
  tipo_habitacion_id_fk INT        NOT NULL,
  estado                INT        NULL,
  PRIMARY KEY (id, tipo_habitacion_id_fk)
)
  ENGINE = InnoDB;

CREATE INDEX fk_habitacion_tipo_habitacion_idx
  ON habitacion (tipo_habitacion_id_fk);

CREATE TABLE huesped
(
  id_huesped           VARCHAR(45)  NOT NULL
    PRIMARY KEY,
  nombre               VARCHAR(45)  NOT NULL,
  direccion            VARCHAR(45)  NOT NULL,
  direccion_particular VARCHAR(255) NULL,
  nacionalidad         VARCHAR(45)  NOT NULL,
  telefono             VARCHAR(45)  NULL,
  correo_electronico   VARCHAR(255) NULL,
  procedencia          VARCHAR(255) NULL,
  destino              VARCHAR(45)  NULL,
  empresa_trabajo      VARCHAR(45)  NULL
)
  ENGINE = InnoDB;

CREATE TABLE pisos
(
  id          VARCHAR(1)  NOT NULL
    PRIMARY KEY,
  nombre      VARCHAR(45) NOT NULL,
  descripcion VARCHAR(45) NOT NULL
)
  ENGINE = InnoDB;

CREATE TABLE reservacion
(
  id_reservacion   INT AUTO_INCREMENT,
  fecha_entrada    DATE        NOT NULL,
  fecha_salida     DATE        NOT NULL,
  numero_personas  INT         NOT NULL,
  id_huesped_fk    VARCHAR(45) NOT NULL,
  id_habitacion_fk INT         NOT NULL,
  PRIMARY KEY (id_reservacion, id_huesped_fk, id_habitacion_fk),
  CONSTRAINT fk_habitacion_has_huesped_huesped1
  FOREIGN KEY (id_huesped_fk) REFERENCES huesped (id_huesped),
  CONSTRAINT fk_habitacion_has_huesped_habitacion1
  FOREIGN KEY (id_habitacion_fk) REFERENCES habitacion (id)
)
  ENGINE = InnoDB;

CREATE INDEX fk_habitacion_has_huesped_huesped1_idx
  ON reservacion (id_huesped_fk);

CREATE INDEX fk_habitacion_has_huesped_habitacion1_idx
  ON reservacion (id_habitacion_fk);

CREATE TABLE tipo_habitacion
(
  id_tipo_habitacion INT AUTO_INCREMENT
    PRIMARY KEY,
  precio             DOUBLE       NOT NULL,
  descripcion        VARCHAR(255) NULL
)
  ENGINE = InnoDB;

ALTER TABLE habitacion
  ADD CONSTRAINT fk_habitacion_tipo_habitacion
FOREIGN KEY (tipo_habitacion_id_fk) REFERENCES tipo_habitacion (id_tipo_habitacion);

CREATE TABLE usuario
(
  id           VARCHAR(13) NOT NULL
    PRIMARY KEY,
  nombre       VARCHAR(45) NOT NULL,
  apellido     VARCHAR(45) NOT NULL,
  tipo_usuario INT         NOT NULL,
  telefono     VARCHAR(45) NULL,
  password     VARCHAR(45) NOT NULL
)
  ENGINE = InnoDB;


