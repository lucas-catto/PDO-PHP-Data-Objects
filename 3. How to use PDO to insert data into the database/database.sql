
CREATE DATABASE IF NOT EXISTS PDO;
USE PDO;

CREATE TABLE Register(
	Id          INT PRIMARY KEY AUTO_INCREMENT,
    Name        VARCHAR(80) NOT NULL,
    PhoneNumber VARCHAR(14) NOT NULL,
    Email       VARCHAR(65) NOT NULL
);

SELECT * FROM Register;