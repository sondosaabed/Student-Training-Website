create database training;
use training;
CREATE TABLE Usr(
				 username varchar(255) DEFAULT NULL ,
			     UNIQUE (username),
				 passwd varchar(255) DEFAULT NULL ,
                 SHA1(passwd),
                 display_name varchar(255) DEFAULT NULL,
                 last_hit varchar(255) DEFAULT NULL,
                 user_type varchar(255) DEFAULT NULL,
				 user_ID int NOT NULL AUTO_INCREMENT,
				 PRIMARY KEY (user_ID) 
				); 
 CREATE TABLE City(
				 city_name varchar(255) DEFAULT NULL,
				 country varchar(255) DEFAULT NULL,
                 city_ID int NOT NULL AUTO_INCREMENT,
				 PRIMARY KEY (city_ID)
             ); 
CREATE TABLE Student(
				 student_name varchar(255) DEFAULT NULL,
				 student_ID int NOT NULL AUTO_INCREMENT,
				 city_ID int,
				 foreign key(city_ID) references City(city_ID),
				 email varchar(255) DEFAULT NULL,
                 telephone int(9),
                 university varchar(255) DEFAULT NULL,
				 major varchar(255) DEFAULT NULL,
				 projects varchar(400) DEFAULT NULL,
				 intrests varchar(400) DEFAULT NULL,
				 photo_path varchar(255) DEFAULT NULL,
				 user_ID int,
			     foreign key(user_ID) references Usr(user_ID),
                 UNIQUE (email),
				 UNIQUE (telephone),
                 PRIMARY KEY (student_ID)
             ); 
 CREATE TABLE Company(
				 company_name varchar(255) DEFAULT NULL,
				 company_ID int NOT NULL AUTO_INCREMENT,
				 PRIMARY KEY (company_ID),
                 city_ID int,
				 foreign key(city_ID) references City(city_ID),
				 email varchar(255) DEFAULT NULL,
				 telephone int(9),
				 positions_count int,
				 positions_details varchar(400) DEFAULT NULL,
				 logo_path varchar(255) DEFAULT NULL,
                 user_ID int,
			     foreign key(user_ID) references Usr(user_ID),
				 UNIQUE (email),
				 UNIQUE (telephone),
                 PRIMARY KEY (company_ID)
             ); 
 CREATE TABLE Students_applications(
				 id int NOT NULL AUTO_INCREMENT,
                 student_ID int,
				 foreign key(student_ID) references Student(city_ID),
				 company_ID int,
				 foreign key(company_ID) references Company(company_ID),
                 PRIMARY KEY (id)
             ); 