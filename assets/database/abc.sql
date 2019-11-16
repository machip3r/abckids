create database abc;

	use abc;

create table usuario(
	id_usuario int not null auto_increment,
	usuario varchar(30) not null,
	contrasena varchar(100) not null,
	nombre varchar(50) not null,
	fecha_nacimiento date not null,
	constraint PKUsuario primary key (id_usuario)
);