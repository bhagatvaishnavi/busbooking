
create database register;
use register;

CREATE TABLE IF NOT EXISTS `admin` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL
 PRIMARY KEY (`id`)
);

use register;
insert into admin(username,password) values("admin","admin");

use register;
CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);
    
use register;
create table cusinfo(

    cname varchar(20),
    startP varchar(30),
    desP varchar(30),
    no int,
    mob_no varchar(20),
    cus_id int,
    type varchar(20),
    id_no INT,
    bdate date,
    payment varchar(20));

    use register;

     create table businfo(
    id_no INT PRIMARY key,
    name varchar(20),
    startP varchar(30),
    desP varchar(30),
    price varchar(20),
    btime varchar(20),
    type varchar(20),
    seat int,
    bdate date);