USE blog;

CREATE TABLE post (
    id INT UNSIGNED AUTO_INCREMENT,
    user_id INT,
    content MEDIUMTEXT,
    posted_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    likes INT,
    PRIMARY KEY (id)
);

CREATE TABLE user (
    id INT UNSIGNED AUTO_INCREMENT,
    name VARCHAR(200),
    surname VARCHAR(200),
    PRIMARY KEY (id)
);