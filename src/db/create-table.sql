
-- Drop table first.
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS shoplist;


-- Create a table in database.
CREATE TABLE users (
	userId INT NOT NULL PRIMARY KEY ,
	email VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	user VARCHAR(50) NOT NULL
);
CREATE TABLE shoplist (
	shopId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	price double NOT NULL,
	num int NOT NULL,
    userId int,
	FOREIGN KEY (userId) REFERENCES users(userId)

);

INSERT INTO users (userId ,email, password, user) VALUES(1,'songminghan@lemmon.com', 'eatlemon', 'songminghan');
INSERT INTO users (userId ,email, password, user) VALUES(2,'snoopy@peanuts.com', 'woofwoof', 'Snoopy');
INSERT INTO users (userId ,email, password, user) VALUES(3,'charliebrown@peanuts.com', 'goodgrief', 'Charlie Brown');
INSERT INTO users (userId ,email, password, user) VALUES(4,'lucy@peanuts.com', 'secret', 'Lucy van Pelt');
INSERT INTO users (userId ,email, password, user) VALUES(5,'zip@lemmon.com', 'eatlemon', 'zipzoo');
INSERT INTO users (userId ,email, password, user) VALUES(6,'dog@lemmon.com', 'eatlemon', 'mydog');
INSERT INTO users (userId ,email, password, user) VALUES(7,'cat@lemmon.com', 'eatlemon', 'mycat');
INSERT INTO users (userId ,email, password, user) VALUES(8,'apple@lemmon.com', 'eatlemon', 'apple');


INSERT INTO shoplist (name, price, num,userId) VALUES('apple', '3.8', 1,1);
INSERT INTO shoplist (name, price, num,userId) VALUES('peach', '2.0', 1,2);
INSERT INTO shoplist (name, price, num,userId) VALUES('lemon', '1.2', 1,3);
INSERT INTO shoplist (name, price, num,userId) VALUES('banana', '0.99', 6,4);
INSERT INTO shoplist (name, price, num,userId) VALUES('apple', '3.8', 1,5);
INSERT INTO shoplist (name, price, num,userId) VALUES('orange', '9.4', 1,6);
INSERT INTO shoplist (name, price, num,userId) VALUES('Strawberry', '18.3', 13,7);
INSERT INTO shoplist (name, price, num,userId) VALUES('Blueberry', '9.8', 99,8);


SHOW TABLES;

DESCRIBE users;
describe shoplist;