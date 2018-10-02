Create database Memeteca;
use Memeteca;

Create table imagen (id_imagen int primary key, enlace text, id_categoria int, puntuacion int);
CREATE TABLE categoria (id_categoria int primary key, desc_categoria varchar(50));
CREATE TABLE galeria (id_galeria int primary key, id_usuario int, nombre varchar(50));
CREATE TABLE usuario (id_usuario int primary key,nombre_usuario varchar(50) unique, correo varchar (50) unique,
 pass varchar (16), nombre_real varchar(50), ap_p varchar(50), ap_m varchar(50), edad int, id_sexo int);
CREATE TABLE sexo (id_sexo int primary key, genero varchar(50));
CREATE TABLE asigna_galeria (id_asigna int primary key, id_imagen int, id_galeria int);