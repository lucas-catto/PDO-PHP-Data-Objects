
CREATE DATABASE IF NOT EXISTS PDO;
USE PDO;

CREATE TABLE User(
	Id          INT PRIMARY KEY AUTO_INCREMENT,
    Name        VARCHAR(80) NOT NULL,
    PhoneNumber VARCHAR(14) NOT NULL,
    Email       VARCHAR(65) NOT NULL
);

INSERT INTO User VALUES
-- id / Name / PhoneNumber / Email / - Everything here is only for tests, the data isn't real.
(null, "João Silva",        "11 98765-4321", "joao.silva@email.com"),
(null, "Maria Souza",       "21 99876-5432", "maria.souza@email.com"),
(null, "Pedro Santos",      "31 98765-4321", "pedro.santos@email.com"),
(null, "Ana Oliveira",      "41 99876-5432", "ana.oliveira@email.com"),
(null, "Lucas Pereira",     "51 98765-4321", "lucas.pereira@email.com"),
(null, "Carla Almeida",     "61 99876-5432", "carla.almeida@email.com"),
(null, "André Ferreira",    "71 98765-4321", "andre.ferreira@email.com"),
(null, "Laura Costa",       "81 99876-5432", "laura.costa@email.com"),
(null, "Marcelo Rodrigues", "91 98765-4321", "marcelo.rodrigues@email.com"),
(null, "Camila Lima",       "01 99876-5432", "camila.lima@email.com");

SELECT * FROM User;