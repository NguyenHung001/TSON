create database TSONproject;
use TSONproject;
create table customers
(
	id varchar(5) primary key,
    last_name varchar(25) not null,
    first_name varchar(20) not null,
    user_name varchar(50) not null,
    pass_word varchar(50) not null,
    email varchar(30),
    phonenumber varchar(15) not null
);
select * from customers;
truncate customers;