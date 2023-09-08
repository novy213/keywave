create table user (id int primary key auto_increment NOT NULL, name varchar(60), last_name varchar(60), email varchar(50), password BLOB);
create table admin (id int primary key auto_increment NOT NULL, email varchar(50), password BLOB);
create table reset_password (id int primary key auto_increment NOT NULL, email varchar(50), code varchar(50));
create table create_offer (id int primary key auto_increment NOT NULL,user_id int NOT NULL, tradelink varchar(255) NOT NULL, profile_link varchar(255) NOT NULL, confirmed ENUM('false', 'true'));
ALTER TABLE create_offer ADD CONSTRAINT create_offer_userId FOREIGN KEY (user_id) REFERENCES user (id);
