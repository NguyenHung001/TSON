create database TSONproject;
use TSONproject;
create table cart
(
	id varchar(5) primary key,
    pd_name varchar(25) not null,
    pd_price varchar(20) not null,
	quantity varchar(10) not null,
    image varchar(50) not null
);
select * from cart;
truncate cart;