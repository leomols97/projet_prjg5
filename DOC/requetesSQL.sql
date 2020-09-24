CREATE TABLE Admins (
	adm_id VARCHAR(32) PRIMARY KEY NOT NULL,
    pass_word VARCHAR(32) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    first_name VARCHAR(64) NOT NULL
);

CREATE TABLE Students (
	stu_id VARCHAR(32) PRIMARY KEY NOT NULL,
    pass_word VARCHAR(32) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    first_name VARCHAR(64) NOT NULL
);

CREATE TABLE Products (
  	prod_id INT PRIMARY KEY NOT NULL,
    description VARCHAR(256),
    price INT NOT NULL,
    stock_qt INT NOT NULL
);

CREATE TABLE Panniers (
  	pan_id INT PRIMARY KEY AUTO_INCREMENT,
    date_bought DATE NOT NULL,
    bought BOOLEAN NOT NULL,
    owner VARCHAR(32) NOT NULL,
    FOREIGN KEY(owner) REFERENCES Students(stu_id)
);

CREATE TABLE Panier_Product (
	pan_id INT,
    prod_id INT,
    FOREIGN KEY(pan_id) REFERENCES Panniers(pan_id),
    FOREIGN KEY(prod_id) REFERENCES Products(prod_id)
);

ALTER TABLE products
ADD COLUMN path varchar(256);