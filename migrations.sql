
CREATE DATABASE blog;

USE blog;
CREATE TABLE posts(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
content VARCHAR(5200) NOT NULL
);

INSERT INTO posts
(content)
VALUES 
("Lieldienas nāk"),
("Otrais bloga ieraksts");
SELECT * FROM posts;

CREATE TABLE categories (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(25)
);

INSERT INTO categories (category_name) VALUES
('Svētki'),
('Mūzika'),
('Sports');

SELECT * FROM categories;
