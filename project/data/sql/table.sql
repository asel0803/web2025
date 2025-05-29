USE blog;
CREATE TABLE post (
    post_id INT UNSIGNED AUTO_INCREMENT,
    user_id INT UNSIGNED,
    count_like INT UNSIGNED,
    content MEDIUMTEXT,
    posted_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    images TEXT,
    PRIMARY KEY (post_id)
);

CREATE TABLE user (
    user_id INT UNSIGNED AUTO_INCREMENT,
    first_name VARCHAR(200),
    last_name VARCHAR(200),
    profile_image VARCHAR(200),
    about VARCHAR(200),
    PRIMARY KEY (user_id)
);

CREATE TABLE post (
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    content TEXT NOT NULL,
    count_like INT DEFAULT 0,
    images VARCHAR(255),
    posted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);

SHOW DATABASE blog;