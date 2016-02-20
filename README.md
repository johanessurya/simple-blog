# Simple Blog
Sebuah blog sederhana yang dibuat menggunakan PHP dan MySQL tanpa library apapun untuk mengajarkan konsep sederhana tentang PHP dan MySQL.

Untuk menjalankannya kamu perlu melakukan import SQL dibawah ini:
```
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `articles` (`id`, `title`, `description`) VALUES
(1, 'title 1', 'description 1'),
(2, 'title 2', 'description 2'),
(3, 'title 3', 'description 3'),
(4, 'title 4', 'description 4'),
(5, 'title 5', 'description 5');

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `id_article` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_article`);

ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;

ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`);
```

Untuk membaca tutorial lengkap dapat langsung ke http://www.johanessurya.com/membuat-blog-sederhana-dengan-php-index/
