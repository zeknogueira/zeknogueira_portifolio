create database zek_portifolio;
use zek_portifolio;
create table users(
user_id int primary key auto_increment,
user_name varchar(200),
user_email varchar(200),
user_password int
);
insert into users (user_name, user_email, user_password) values
('Zek', 'zek@test.com', 1234);

select * from users;
SELECT * FROM users WHERE user_email = 'zek@test.com' AND user_password = '1234';