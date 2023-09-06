create table user (id int primary key auto_increment NOT NULL, name varchar(60), last_name varchar(60), email varchar(50), password BLOB);
create table admin (id int primary key auto_increment NOT NULL, email varchar(50), password BLOB);
create table reset_password (id int primary key auto_increment NOT NULL, email varchar(50), code varchar(50));
