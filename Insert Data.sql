use c465training;
INSERT INTO `c465training`.`City` (`city_name`, `country`, `city_ID`) 
VALUES ('Ramallah', 'Palestine', NULL);

INSERT INTO `c465training`.`City` (`city_name`, `country`, `city_ID`) 
VALUES ('Al-Bireh', 'Palestine', NULL);

INSERT INTO `c465training`.`City` (`city_name`, `country`, `city_ID`) 
VALUES ('Nablus', 'Palestine', NULL);

INSERT INTO `c465training`.`City` (`city_name`, `country`, `city_ID`) 
VALUES ('Tulkarm', 'Palestine', NULL);

INSERT INTO `c465training`.`City` (`city_name`, `country`, `city_ID`) 
VALUES ('Jerusalem', 'Palestine', NULL);

INSERT INTO `c465training`.`user` (`username`, `user_id`, `passwd`, `display_name`, `last_hit`, `user_type`)
 VALUES ('sondosaabed', NULL, SHA1('sondos123'), 'Sondos Ahmad Aabed', NULL, 'student');
 
INSERT INTO `c465training`.`user` (`username`, `user_id`, `passwd`, `display_name`, `last_hit`, `user_type`) 
VALUES ('emankh', NULL, SHA1('eman123'), 'Eman Mofeed Khalaf', NULL, 'student');

INSERT INTO `c465training`.`user` (`username`, `user_id`, `passwd`, `display_name`, `last_hit`, `user_type`) 
VALUES ('jawwal', '3', SHA1('jawwal123'), 'Jawwal.ps', NULL, 'company');

INSERT INTO `c465training`.`user` (`username`, `user_id`, `passwd`, `display_name`, `last_hit`, `user_type`) 
VALUES ('iconnect', '4', SHA1('ic123'), 'iconnect.ps', NULL, 'company');

INSERT INTO `c465training`.`user` (`username`, `user_id`, `passwd`, `display_name`, `last_hit`, `user_type`) 
VALUES ('Ooredo', '5', SHA1('ooredo123'), 'Oreedo.ps', NULL, 'company');

INSERT INTO `c465training`.`user` (`username`, `user_id`, `passwd`, `display_name`, `last_hit`, `user_type`) 
VALUES ('ApiaTech', '6', SHA1('apial123'), 'Apiatech.ps', NULL, 'company');

INSERT INTO `c465training`.`user` (`username`, `user_id`, `passwd`, `display_name`, `last_hit`, `user_type`)
 VALUES ('suadhus', '7', SHA1('suad123'), 'Suad Sead Hussein', NULL, 'student');
 
INSERT INTO `c465training`.`user` (`username`, `user_id`, `passwd`, `display_name`, `last_hit`, `user_type`) 
VALUES ('mahfat', '8', SHA1('mah123'), 'Mahmoud Fayez Fatafta', NULL, 'student');

INSERT INTO `c465training`.`user` (`username`, `user_id`, `passwd`, `display_name`, `last_hit`, `user_type`)
 VALUES ('abedadas', '9', SHA1('abed123'), 'Abed Abu Adas', NULL, 'student');
 
INSERT INTO `c465training`.`Student` (`student_name`, `student_ID`, `city_id`, `email`, `telephone`, `university`, `major`, `projects`, `intrests`, `photo_path`, `user_ID`) 
VALUES ('Sondos Ahmad Aabed', NULL, '2', 'sondosahmedabed@gmail.com', '595969666', 'Birzeit University', 'Computer Science', '1- Project WebSite
2- Project Software
3- Project Linux', '1- Art
2- AI games
3- Security', 'images/students/F1.png', '1');

INSERT INTO `c465training`.`Student` (`student_name`, `student_ID`, `city_id`, `email`, `telephone`, `university`, `major`, `projects`, `intrests`, `photo_path`, `user_ID`) 
VALUES ('Suad Sead Hussein', '2', '3', 'suad@gmail.com', '596979555', 'Al-Quds Open University', 'Political Science', 'Project 1: Research about youth in Palestine
Project 2: Research about Oslo agreement', '1- Analysis of war
2- Deplomacy', 'images/students/F1.png', '7');

INSERT INTO `c465training`.`Student` (`student_name`, `student_ID`, `city_id`, `email`, `telephone`, `university`, `major`, `projects`, `intrests`, `photo_path`, `user_ID`) 
VALUES ('Mahmoud Fayez Fatafta', '3', NULL, 'mah_fat_2@gmail.com', '597969554', 'Plestine Polytechnic University', 'Computer Science', 'Project 1: Dijkstra algortithm map
Project 2: XO game minmax', '1- Ethical Hacking
2- 3d printing', 'images/students/M1.png', '8');

INSERT INTO `c465training`.`Student` (`student_name`, `student_ID`, `city_id`, `email`, `telephone`, `university`, `major`, `projects`, `intrests`, `photo_path`, `user_ID`) 
VALUES ('Abed Abu Adas', '4', '5', 'abed_adas@gmail.com', '594979234', 'Birzeit University', 'Litrature and Art', '1- Analisis of Hussein Barghoiti Novel
2- About the blue light research', '1- Phylosophy
2- Music', 'images/students/M2.png', '9');

INSERT INTO `c465training`.`Company` (`company_name`, `company_ID`, `city_ID`, `email`, `telephone`, `positions_count`, `positions_details`, `logo_path`, `user_ID`) 
VALUES ('Jawwal', NULL, '1', 'jawwal@info.ps', '598989888', '45', 'Interns at website development
Interns at call center
Interns at client service', 'images/companies/Jawwal.jpg', '3');

INSERT INTO `c465training`.`Company` (`company_name`, `company_ID`, `city_ID`, `email`, `telephone`, `positions_count`, `positions_details`, `logo_path`, `user_ID`) 
VALUES ('Oreedo.ps', '2', '1', 'ooredoo@info.ps', '598949332', '26', 'Interns at call center
Interns at website development
Interns at Neteorking', 'images/companies/Ooredo.jpg', '5');

INSERT INTO `c465training`.`Company` (`company_name`, `company_ID`, `city_ID`, `email`, `telephone`, `positions_count`, `positions_details`, `logo_path`, `user_ID`) 
VALUES (' ApiaTech', '3', '2', 'apiaTech@gmail.com', '597949392', '15', 'Interns for website development
Interns for client service
Interns for bussiness', 'images/companies/apiatech.png', '6');