create table usuario(
    email VARCHAR(255),
    nombre VARCHAR(100),
    apellidos VARCHAR(200),
    constraint pk_usuario primary key (email)
);
create table propiedad_perfil(
    id int auto_increment primary key,
    nombre varchar(100),
    valor varchar(300),
    email_usuario varchar(255) references usuario(email)
);