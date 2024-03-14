CREATE TABLE users (
   id INT(11) NOT NULL AUTO_INCREMENT,
   username VARCHAR(255) NOT NULL,
   pwd VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL,
   created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
   PRIMARY KEY (id)
);