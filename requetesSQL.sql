CREATE TABLE Groupes (
	groupe_id INT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(64) NOT NULL
);

CREATE TABLE Categories (
	cat_id INT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(64) NOT NULL
);

CREATE TABLE MyUsers (
	myuser_id VARCHAR(32) PRIMARY KEY NOT NULL,
    pass_word VARCHAR(32) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    first_name VARCHAR(64) NOT NULL,
    groupe INT NOT NULL,
	is_admin BOOLEAN NOT NULL,
    FOREIGN KEY(groupe) REFERENCES Groupes(groupe_id)
);

CREATE TABLE Products (
  	prod_id INT PRIMARY KEY NOT NULL,
    description VARCHAR(256),
    price INT NOT NULL,
    categorie INT NOT NULL,
    stock_qt INT NOT NULL,
    FOREIGN KEY(categorie) REFERENCES Categories(cat_id)
);

CREATE TABLE Panniers (
  	pan_id INT PRIMARY KEY AUTO_INCREMENT,
    date_bought DATE NOT NULL,
    bought BOOLEAN NOT NULL,
    owner VARCHAR(32) NOT NULL,
    FOREIGN KEY(owner) REFERENCES MyUsers(myuser_id)
);

CREATE TABLE Panier_Product (
	pan_id INT,
    prod_id INT,
    FOREIGN KEY(pan_id) REFERENCES Panniers(pan_id),
    FOREIGN KEY(prod_id) REFERENCES Products(prod_id)
);

ALTER TABLE products
ADD COLUMN path varchar(256);

ALTER TABLE panier_product
ADD COLUMN qt INT NOT NULL;