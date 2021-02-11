drop database if exists db;
create database db;
use db;
create table users(
id int NOT NULL AUTO_INCREMENT primary key,
first_name varchar(50) NOT NULL,
last_name varchar(50) NOT NUll);
insert into users(first_name,last_name) value
('Juan','Perez Gutierrez'),
('Ana','Tarradillos Lopez'),
('Gabriel','Perez Alonso'),
('Ruben','Diaz Silvan'),
('Lydia','Castrejon Del Olmo'),
('Alba','Trigueros Tejada');
