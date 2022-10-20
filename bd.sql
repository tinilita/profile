CREATE TABLE user
(
    ID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
    phone INT,
    mail VARCHAR(20),
    pass VARCHAR(20),
    PRIMARY KEY (ID)
);
DROP TABLE user;
INSERT INTO `user` (name, phone, mail, pass) VALUE -- тест
    ('name', 1, 'mail', 'pass'),
    ('name', 2, 'test', 'test');
