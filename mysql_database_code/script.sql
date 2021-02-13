-- user_table
CREATE TABLE `user_table` (
 `user_id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(255) NOT NULL,
 `password` binary(60) NOT NULL,
 `privilege` int(11) NOT NULL,
 `birthday` date NOT NULL,
 PRIMARY KEY (`user_id`),
 UNIQUE KEY `username_unique` (`username`),
 UNIQUE KEY `email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8




-- posts_table
CREATE TABLE `posts_table` (
 `post_id` int(11) NOT NULL AUTO_INCREMENT,
 `user` int(11) NOT NULL,
 `post_title` varchar(150) NOT NULL,
 `post_content` text NOT NULL,
 `image_url` text NOT NULL,
 `date_posted` datetime NOT NULL,
 PRIMARY KEY (`post_id`),
 KEY `user` (`user`),
 CONSTRAINT `posts_table_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8

