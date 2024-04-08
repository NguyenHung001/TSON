create database TSONproject;
use TSONproject;
create table customer_orders
(
	id varchar(5) primary key,
    fullname varchar(25) not null,
    phonenumber varchar(20) not null,
	adress varchar(10) not null,
    pay enum("on","off"),
    products varchar(300) not null
);
select * from customer_orders;
truncate customer_orders;