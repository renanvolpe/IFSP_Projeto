show databases;
drop database clinicamedica;

create database clinicamedica;

alter table pessoa
drop email;

use clinicamedica;

SET FOREIGN_KEY_CHECKS=1;
show tables;
select * from agenda;
ALTER TABLE pessoa DROP COLUMN email;

