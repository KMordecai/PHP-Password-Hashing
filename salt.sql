create database salt;

use salt;

create table user (
user varchar(25) not null,
password varchar(255) not null,
unique(user)
);
