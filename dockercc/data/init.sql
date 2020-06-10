use my_db;

CREATE TABLE users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	age INT(3)
);

INSERT INTO users (firstname, lastname, email, age) VALUES
('Pablo', 'Perez', 'user1@mail.com', 30),
('Sara', 'Suarez', 'user2@mail.com', 40),
('Federico', 'Fernadez', 'user3@mail.com', 50),
('Carlos', 'Calvo', 'user4@mail.com', 60);
