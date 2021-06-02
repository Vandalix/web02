create database crud_db;

use crud_db;

CREATE TABLE `users`(
    `id` int (11) not null auto_increment,
    `name` varchar (100),
    `email` varchar (100),
    `mobile` varchar (15),
    primary key (`id`)
);