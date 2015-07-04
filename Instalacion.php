<?php


//***** CREAR TABLA USUARIOS *****
//conexion
 $conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');

//peticion
$consulta ="CREATE TABLE Usuarios(
usuario Char(40) Not Null,
contrasena Char(40) Not Null,
nombre Char(40),
apellidouno Char(40),
apellidodos Char(40),
titulo Char(120),
descripcion Char(1500),
foto Char(40),
webpersonal Char(80),
email Char(80),
permisos Int,

);

";
//ejecutar
$resultado= $conexion ->exec($consulta);
 
//cerrar
$conexion = Null;

//***** iNSERTAR CONTENIDO DE PRUEBA TABLA USUARIOS *****
//conexion
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');

//peticion
$consulta=" INSERT INTO Usuarios VALUES('liliana','liliana','liliana','bustos','Gutierrez','Creativo Multimedia','Descripcion','lilianaFoto','http://www.liliana.com','juanalili5@gmail.com',1);


";

//ejecutar
$resultado= $conexion ->exec($consulta);
 
//cerrar
$conexion = Null;

//*****  CREAR TABLA CONFIG USUARIOS *****
//conexion
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');

//peticion

$consulta ="CREATE TABLE ConfigUsuarios(
usuario Char(40) Not Null,
piel Char(40),
respuestas Char(40)

);

";
//ejecutar
$resultado= $conexion ->exec($consulta);

//cerrar
$conexion = Null;

//***** INSERTAR CONT... DE PRUEBA TABLA CONFIG USUARIOS *****
//conexion
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');
//peticion
$consulta=" INSERT INTO ConfigUsuarios VALUES('liliana','default','si');


";

//ejecutar
$resultado= $conexion ->exec($consulta);

//cerrar
$conexion = Null;

//***** CREAR TABLA POSTS *****

//conexion
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');

//peticion
$consulta ="CREATE TABLE Posts(
utc Int Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(80),
titulo Char(120),
subtitulo Char(1200),
icono Char(80),
texto Char(4000),
imagen Char(200),
video Char(200),
Sonido Char(200)

);

";

//ejecutar
$resultado= $conexion ->exec($consulta);

//cerrar
$conexion = Null;

//***** iNSERTAR CONT... DE PRUEBA EN LA TABLA POST*****

//conexion
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');

//peticion
$consulta=" INSERT INTO Post VALUES(000000,2015,07,03,22,23,40,'liliana','Mi Historia','Mi pagina Editada','Icono Flores','Muy bonito ..no!!','Imagen','Mi video Favorito','Musica');


";


//ejecutar
$resultado= $conexion ->exec($consulta);

//cerrar
$conexion = Null;

//***** CREAR TABLA LOGS *****

//conexion
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');

//peticion
$consulta ="CREATE TABLE Logs(
utc Int Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char(80),
navegador Char(300),
usuario Char(80),
operacion Char(80),
);

";

//ejecutar
$resultado= $conexion ->exec($consulta);

//cerrar
$conexion = Null;

//***** INSERTAR CONT... DE PRUEBA TABLA LOGS*****
//conexion
$conexion = new PDO('sqlite:favoritos.db') or die('ha sido imposible establecer la conexion');

//peticion
$consulta=" INSERT INTO Logs VALUES(000000,2015,07,03,22,23,40,'192.168.200.30','Chrome','liliana','Crear');


";


//ejecutar
$resultado= $conexion ->exec($consulta);

//cerrar
$conexion = Null;



?>