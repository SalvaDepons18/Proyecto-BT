create database bitme;

use bitme;

create table usuario(
    ci int(8) primary key, 
    nombre varchar(100) NOT NULL,
    apellido varchar(100) NOT NULL,
    contra varchar(32) NOT NULL,  
    tipo ENUM('administrador','administrativo', 'analista', 'DT', 'juez', 'scouting') NOT NULL,
    estado boolean NOT NULL
);

create table institucion(
    id int(3) AUTO_INCREMENT primary key,
    nombre varchar(100) NOT NULL
);

create table equipo(
    id int(3) AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    id_deporte int(3) NOT NULL,
    foreign key(id_deporte) references deporte(id),
    ci_dt int(8) NOT NULL,
    id_institucion int(3),
    foreign key(id_institucion) references institucion(id)
);

create table deporte(
    id int(3) AUTO_INCREMENT primary key,
    nombre varchar(100)
);

create table deportistas(
    ci int(8) primary key,
    nombre varchar(100) NOT NULL,
    apellido varchar(100) NOT NULL,
    edad int(3) NOT NULL,
    fecha_ficha_medica date NOT NULL,
    numero_camiseta int(2) NOT NULL,
    id_institucion int(3),
    foreign key(id_institucion) references institucion(id),
    estado boolean NOT NULL
);

create table tiene(
    id_equipo int(3),
    foreign key(id_equipo) references equipo(id),
    ci_deportistas int(8),
    foreign key(ci_deportistas) references deportistas(ci),
    PRIMARY KEY( `id_equipo`, `ci_deportistas`)  
);

create table partido(
    id int(3) AUTO_INCREMENT primary key,
    fecha date NOT NULL,
    lugar varchar(100) NOT NULL,    
    id_equipo1 int(3),
    foreign key(id_equipo1) references equipo(id),
    id_equipo2 int(3),
    foreign key(id_equipo1) references equipo(id),
    puntuacion1 int(10),
    puntuacion2 int(10),
    id_deporte int(3) NOT NULL,
    foreign key(id_deporte) references deporte(id)
);

create table sancion(
    id int(3) auto_increment primary key,
    ci_sancionado int(8),
    foreign key(ci_sancionado) references deportistas(ci),
    tipo ENUM('drogas','alcohol', 'carnet vencido') NOT NULL,
    fecha date NOT NULL
);

create table incidencias(
    id int(3) AUTO_INCREMENT primary key,
    ci_deportista int(8),
    foreign key(ci_deportista) references deportistas(ci), 
    id_partido int(3),
    foreign key(id_partido) references partido(id), 
    goles int(10),  
    expulsiones ENUM('1', '0') NOT NULL,
    faltas_rojas int(10) NOT NULL,
    faltas_amarillas int(10) NOT NULL,
    id_deporte int(3) NOT NULL,
    foreign key(id_deporte) references deporte(id)
);
 
create table torneo(
     id int(3) AUTO_INCREMENT primary key,
     nombre varchar(100) NOT NULL,
     fecha_inicio date NOT NULL,
     fecha_fin date NOT NULL,
     id_deporte int(3) NOT NULL,
    foreign key(id_deporte) references deporte(id)
);

create table torneo_tiene(
    id_torneo int(3),
    foreign key(id_torneo) references torneo(id),
    id_equipo int(3),
    foreign key(id_equipo) references equipo(id),
    PRIMARY KEY( `id_torneo`, `id_equipo`)
);

use bitme;

INSERT INTO `usuario` (`ci`, `nombre`, `apellido`, `contra`, `tipo`, `estado`)
VALUES ('11111111', 'Admin', 'BitMe', '202cb962ac59075b964b07152d234b70', 'administrador', '1'),
('22222222', 'DT', 'BitMe', '202cb962ac59075b964b07152d234b70', 'DT', '1'),
('33333333', 'Juez', 'BitMe', '202cb962ac59075b964b07152d234b70', 'juez', '1'),
('44444444', 'Analista', 'BitMe', '202cb962ac59075b964b07152d234b70', 'analista', '1'),
('55555555', 'Scouting', 'BitMe', '202cb962ac59075b964b07152d234b70', 'scouting', '1'),
('66666666', 'Administrativo', 'BitMe', '202cb962ac59075b964b07152d234b70', 'administrativo', '1');


INSERT INTO `institucion` (`id`, `nombre`)
VALUES ('1', 'Arnold Gesell'),
('2', 'Scuola'),
('3', 'Gabriela Mistral'),
('4', 'Santa Elena'),
('5', 'Kennedy');

INSERT INTO `equipo` (`id`, `nombre`, `id_deporte`, `ci_dt`, `id_institucion`)
VALUES ('1', 'Gesell', '1', '22222222', '1'),
('2', 'Scuola', '3', '22222222', '2'),
('3', 'Gabriela', '2', '22222222', '3'),
('4', 'Santa', '4', '22222222', '4'),
('5', 'Kennedy', '1', '22222222', '5');

INSERT INTO `deporte` (`id`, `nombre`)
VALUES ('1', 'futbol'),
('2', 'basquetbol'),
('3', 'handbol'),
('4', 'hockey'),
('5', 'tenis');

INSERT INTO `deportistas` (`ci`, `nombre`, `apellido`, `edad`, `fecha_ficha_medica`, `numero_camiseta`, `id_institucion`, `estado`)
VALUES ('10101010', 'Prueba1', 'uno', '16', '2023-12-06', '25', '2', '1'),
('20202020', 'Prueba2', 'dos', '18', '2023-11-07-', '1', '1', '1'),
('30303030', 'Prueba3', 'tres', '17', '2023-05-20', '4', '3', '1'),
('40404040', 'Prueba4', 'cuatro', '20', '2023-01-06', '12', '3', '1'),
('50505050', 'Prueba5', 'cinco', '15', '2022-10-02', '9', '5', '1');

INSERT INTO `tiene` (`id_equipo`, `ci_deportistas`)
VALUES ('2', '10101010'),
('1', '20202020'),
('3', '30303030'),
('3', '40404040'),
('5', '50505050');

INSERT INTO `partido` (`id`, `fecha`, `lugar`, `id_equipo1`, `id_equipo2`, `puntuacion1`, `puntuacion2`, `id_deporte`)
VALUES ('1', '2023-01-12', 'Arnold Gesell', '1', '3', '0', '0', '1'),
('2', '2022-05-09', 'Gabriela Mistral', '2', '5', '3', '2', '3'),
('3', '2022-09-30', 'Kennedy', '1', '2', '4', '3', '3'),
('4', '2023-01-15', 'Arnold Gesell', '4', '5', '0', '0', '2'),
('5', '2022-12-24', 'Kennedy', '4', '3', '1', '1', '4');

INSERT INTO `sancion` (`id`, `ci_sancionado`, `tipo`, `fecha`)
VALUES ('1', '10101010', 'drogas', '2022-10-04'),
('2', '10101010', 'carnet vencido', '2022-09-05'),
('3', '20202020', 'drogas', '2022-04-17'),
('4', '40404040', 'alcohol', '2022-06-23'),
('5', '50505050', 'alcohol', '2022-09-10');

INSERT INTO `torneo` (`id`, `nombre`, `fecha_inicio`, `fecha_fin`, `id_deporte`)
VALUES ('1', 'Malvin Futbol', '2022-02-10', '2022-12-10', '1'),
('2', 'Malvin Handbol', '2022-01-02', '2023-01-02', '3'),
('3', 'Malvin Basquetbol', '2022-10-01', '2023-05-28', '2'),
('4', 'Buceo Hockey Torneo', '2022-12-28', '2023-02-28', '4'),
('5', 'Buceo Fut', '2022-12-13', '2023-10-13', '1');

INSERT INTO `torneo_tiene` (`id_torneo`, `id_equipo`)
VALUES ('1', '1'),
('2', '2'),
('3', '3'),
('4', '4'),
('5', '5');

INSERT INTO `incidencias` (`id`, `ci_deportista`, `id_partido`, `goles`, `expulsiones`, `faltas_rojas`, `faltas_amarillas`, `id_deporte`)
VALUES ('1','10101010', '1', '11', '1', '1', '2', '1'),
('2', '20202020', '2', '22', '1', '0', '1', '2'),
('3', '30303030', '3', '33', '0', '0', '0', '0'),
('4', '40404040', '4', '44', '1', '0', '0', '1'),
('5', '50505050', '5', '55', '0', '1', '1', '1');