create database informesGAC
use informesGAC

create table usuario (
	codigo_usu int auto_increment not null,
    nombre_usu varchar(200) not null,
    correo_usu varchar(200) not null,
    pass_usu varchar(200) not null,
    
    primary key(codigo_usu)
)

create table cargo(
	codigo_carg int not null auto_increment,
    nombre_carg varchar(50),
    
    primary key(codigo_carg)
)

create table nom_bd (
	nombre varchar(50) not null,
    
    primary key(nombre)
)

select * from nom_bd  where nombre = 'informesGAC'

select nombre_usu from usuario where correo_usu='ricardomelida92@gmail.com' and pass_usu = '000000'

alter table usuario add pass_usu varchar(200) not null;

insert into usuario(nombre_usu, correo_usu, pass_usu) values('Admin', 'ricardomelida92@gmail.com', '000000'); 

select * from usuario where correo_usu='ricardomelida92@gmail.com' and pass_usu='000000'

