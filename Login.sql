create database bdhamburgueza;
use bdhamburgueza;

create table tblogin
(id_usuario int not null,
cveusuar varchar(45) not null,
cvecontras varchar(45) not null,
constraint pkid_usuario primary key(id_usuario)
)engine=innodb;

INSERT  tblogin (id_usuario,cveusuar,cvecontras) VALUES (3,'miguel','2222');


