USE advanceweb_project2;

/************
CREATE TABLES
************/

CREATE TABLE users
(
id INT UNIQUE NOT NULL PRIMARY KEY AUTO_INCREMENT,
username 	VARCHAR(50) 	UNIQUE NOT NULL,
email 		VARCHAR(100) 	UNIQUE NOT NULL,
password 	VARCHAR(50) 	NOT NULL,
type 		VARCHAR(10) 	NOT NULL
);

CREATE TABLE incidents
(
id INT UNIQUE NOT NULL PRIMARY KEY AUTO_INCREMENT,
title 		VARCHAR(100) 	NOT NULL,
description	VARCHAR(10000) 	NOT NULL,
resolution 	VARCHAR(10000),
submittedDate 	TIMESTAMP	NOT NULL	DEFAULT CURRENT_TIMESTAMP,
priority	INT		NOT NULL	DEFAULT 1,
submittedByID 	INT,
FOREIGN KEY (submittedByID) REFERENCES users(id)
);

CREATE TABLE incidentEvents
(
id INT UNIQUE NOT NULL PRIMARY KEY AUTO_INCREMENT,
incidentID	INT		NOT NULL,
eventDate 	TIMESTAMP	NOT NULL	DEFAULT CURRENT_TIMESTAMP,
status 		VARCHAR(40) 	NOT NULL 	DEFAULT 'NEW',
comment		VARCHAR(10000),
changedByID	INT,
FOREIGN KEY (incidentID) REFERENCES incidents(id),
FOREIGN KEY (changedByID) REFERENCES users(id)	
);

CREATE TABLE userTypes
(
	type VARCHAR(50) UNIQUE NOT NULL PRIMARY KEY
);

/****************
INSERT STATEMENTS
****************/

INSERT INTO users
(username, email, password, type) VALUES ('admin', 'admin@admin.com', 'demo1234', 'Admin');

INSERT INTO users
(username, email, password, type) VALUES ('user', 'user@user.com', '12345678', 'User');

INSERT INTO incidents
(title, description, submittedByID) VALUES ('test', 'this thing isn\'t working', 1);

INSERT INTO incidentEvents
(incidentID, changedByID) VALUES (1, 1);

INSERT INTO incidentEvents
(incidentID, status, comment, changedByID) VALUES (1, 'Assigned', 'Changed the status to assigned', 1);

INSERT INTO userTypes 
(type) VALUES ('Admin');

INSERT INTO userTypes
(type) VALUES ('User');


/**********
DROP TABLES
**********/
/*
DROP TABLE users;
DROP TABLE incidents;
DROP TABLE incidentEvents;
*/
