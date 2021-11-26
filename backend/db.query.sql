-- Admin  Table

CREATE TABLE admin (
    adminId int(3) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    adminName varchar(128) NOT NULL,
    adminEmail varchar(128) NOT NULL,
    adminPwd varchar(128) NOT NULL
);