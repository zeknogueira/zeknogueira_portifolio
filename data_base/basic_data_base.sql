create database zek_portifolio;
use zek_portifolio;
create table users(
user_id int primary key auto_increment,
user_name varchar(200),
user_email varchar(200)
);
insert into users (user_name, user_email) values
('Zek', 'melo@melo.com');

select * from users;
drop database zek_portifolio;