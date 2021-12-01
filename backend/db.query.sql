-- Admin  Table

CREATE TABLE admin (
    adminId int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    adminName varchar(128) NOT NULL,
    adminEmail varchar(128) NOT NULL,
    adminPwd varchar(128) NOT NULL
);

-- Register  Table

CREATE TABLE Register (
    studentId int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    studentName varchar(128) NOT NULL,
    studentPostName varchar(128) NOT NULL,
    studentlastName varchar(128) NOT NULL,
    matricule int NOT NULL,
    faculty varchar(128) NOT NULL,
    promotion varchar(128) NOT NULL
);


-- Traquet  Table

CREATE TABLE traque (
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    matricule int NOT NULL,
    dateandTime DATETIME NOT NULL,
    duration varchar(128) NOT NULL,
    motif varchar(28) NOT NULL
);