create table if not EXISTS tbl_admin
(
PK_ID int PRIMARY key AUTO_INCREMENT,
FullName varchar(50),
Email varchar(50) unique,
Password varchar(50),
Picture varchar(200)
);


create table if not EXISTS tbl_employer
(
PK_ID int PRIMARY key AUTO_INCREMENT,
FullName varchar(50),
Email varchar(50) unique,
Password varchar(50),
Mobile varchar(50),
Address varchar(200),
TypeOfCompany varchar(50),
Picture varchar(200)
);


create table if not EXISTS tbl_worker
(
PK_ID int PRIMARY KEY AUTO_INCREMENT,
FullName varchar(50),
Email varchar(50) unique,
Password varchar(50),
FatherName varchar(50),
Cnic varchar(50),
FatherCnic varchar(50),
Gender varchar(50),
Address varchar(200),
Mobile varchar(50),
Whatsapp varchar(50),
EmergencyContact varchar(50),
Reference varchar(50),
CnicFrontPicture varchar(200),
CnicBackPicture varchar(200),
Picture varchar(200),
Status boolean default 0,
);

create table if not EXISTS tbl_skills
(
PK_ID int PRIMARY key AUTO_INCREMENT,
SkillName varchar(50),
SkillOptions varchar(200)
);

create table if not EXISTS tbl_worker_skils
(
PK_ID int PRIMARY key AUTO_INCREMENT,
WorkerID int,
constraint WorkerID foreign key(WorkerID) references tbl_worker(PK_ID),
);
