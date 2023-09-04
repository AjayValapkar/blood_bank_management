CREATE TABLE camps(id INT NOT NULL AUTO_INCREMENT,camp_name varchar(100) NOT NULL,camp_date DATE NOT NULL,camp_venue varchar(200) NOT NULL,camp_description varchar(500) NOT NULL,PRIMARY KEY(id));




-- For request blood
CREATE TABLE request_blood(full_name varchar(100) NOT NULL,email varchar(100) NOT NULL,phone int NOT NULL,Adhar bigint NOT NULL,Issue_date date NOT NULL,D_address varchar(300) NOT NULL,Birth_date date NOT NULL,B_group varchar(10) NOT NULL,PRIMARY KEY(Adhar));

-- For successfull donation create tabls
CREATE TABLE success(full_name varchar(100) NOT NULL,email varchar(100) NOT NULL,phone int NOT NULL,Adhar bigint NOT NULL,Issue_date date NOT NULL,D_address varchar(300) NOT NULL,Birth_date date NOT NULL,B_group varchar(10) NOT NULL,gender varchar(20) NOT NULL PRIMARY KEY(Adhar));


-- iserting valu in request from blood
INSERT INTO success VALUES("Manadar Vasant Chande","manadr@gmail.com",)