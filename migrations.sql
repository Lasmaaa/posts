CREATE DATABASE blog;

USE blog;
CREATE TABLE posts(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
content VARCHAR(5200) NOT NULL,
category_id INT
);

INSERT INTO posts
(content, category_id)
VALUES 
("Lieldienas nāk", 1),
("Otrais bloga ieraksts", 2);
SELECT * FROM posts;

CREATE TABLE categories (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(25)
);

INSERT INTO categories 
(category_name, category_id) 
VALUES
('Svētki', 0),
('Mūzika', 1),
('Sports');

SELECT * FROM categories;

SELECT posts.*, categories.category_name FROM posts
LEFT JOIN categories
ON posts.category_id = categories.id
WHERE posts.id = 1;





CREATE TABLE comments(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	autors VARCHAR(255) NOT NULL,
	datums DATETIME,
	coment VARCHAR(5200) NOT NULL, 
	comment_id INT,
	FOREIGN KEY (comment_id) REFERENCES posts(id) ON DELETE CASCADE
);











CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT NOT NULL,
    author VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE
);