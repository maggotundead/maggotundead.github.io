DROP TABLE IF EXISTS `category`;
-- SET character_set_client = utf8;

CREATE TABLE `category` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`category` varchar(255) DEFAULT NULL,
`http_category` varchar(255) DEFAULT NULL,
`description` text,
`image` varchar(500) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8;

INSERT INTO `category` VALUES
(1, 'Ноутбуки', 'notebooks', 'Описание категории ноутбуки', 'notebooks.jpg'),
(2, 'Телефоны', 'phones', 'Описание категории телефоны', 'phones.jpg' );

-- DROP TABLE IF EXISTS `goods`;

CREATE TABLE `goods` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(255) DEFAULT NULL,
`description` text,
`cost` double DEFAULT NULL,
`image` varchar(500) DEFAULT NULL,
`category` varchar(5) DEFAULT NULL,
PRIMARY KEY (`id`)
);

REPLACE INTO `goods` VALUES
(1, 'Ноутбук1', 'Описание товара ноутбук 1', 29333 ,'notebook1.jpg', 1),
(2, 'Телефон1', 'Описание товара телефон 1', 764, 'phone1.jpg', 2),
(3, 'Ноутбук2', 'Описание товара ноутбук 2', 12999 ,'notebook2.jpg', 1),
(4, 'Телефон2', 'Описание товара телефон 2', 31000, 'phone2.jpg', 2),
(5, 'Ноутбук3', 'Описание товара ноутбук 3', 7999 ,'notebook3.jpg', 1),
(6, 'Телефон3', 'Описание товара телефон 3', 7999, 'phone3.jpg', 2),
(7, 'Ноутбук4', 'Описание товара ноутбук 4', 21400 ,'notebook4.jpg', 1),
(8, 'Телефон4', 'Описание товара телефон 4', 1999, 'phone4.jpg', 2),
(9, 'Ноутбук5', 'Описание товара ноутбук 5', 14100 ,'notebook5.jpg', 1),
(10, 'Телефон5', 'Описание товара телефон 5', 2300, 'phone5.jpg', 2),
(11, 'Ноутбук6', 'Описание товара ноутбук 6', 59999 ,'notebook6.jpg', 1),
(12, 'Телефон6', 'Описание товара телефон 6', 9999, 'phone6.jpg', 2),
(13, 'Ноутбук7', 'Описание товара ноутбук 7', 19999 ,'notebook7.jpg', 1),
(14, 'Телефон7', 'Описание товара телефон 7', 5000, 'phone7.jpg', 2);

-- CREATE USER 'user'@'localhost' IDENTIFIED BY '12345678';

-- DROP TABLE IF EXISTS `category`;
-- -- SET character_set_client = utf8;

-- CREATE TABLE `category` (
-- `id` int(11) NOT NULL AUTO_INCREMENT,
-- `category` varchar(255) DEFAULT NULL,
-- `http_category` varchar(255) DEFAULT NULL,
-- `description` text,
-- `image` varchar(500) DEFAULT NULL,
-- PRIMARY KEY (`id`)
-- ) ENGINE = InnoDB CHARSET=utf8;

-- INSERT INTO `category` VALUES
-- (1, 'Ноутбуки', 'notebooks', 'Описание категории ноутбуки', 'notebooks.jpg'),
-- (2, 'Телефоны', 'phones', 'Описание категории телефоны', 'phones.jpg' );


-- DROP TABLE IF EXISTS `goods`;

-- CREATE TABLE `goods` (
-- `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
-- `name` varchar(255) DEFAULT NULL,
-- `description` text,
-- `cost` double DEFAULT NULL,
-- `image` varchar(500) DEFAULT NULL,
-- `category` varchar(255) DEFAULT NULL,
-- PRIMARY KEY (`id`)
-- );

-- REPLACE INTO `goods` VALUES
-- (1, 'Ноутбук1', 'Описание товара ноутбук 1', 29333 ,'notebook1.jpg', 'notebooks'),
-- (2, 'Телефон1', 'Описание товара телефон 1', 764, 'phone1.jpg', 'phones'),
-- (3, 'Ноутбук2', 'Описание товара ноутбук 2', 12999 ,'notebook2.jpg', 'notebooks'),
-- (4, 'Телефон2', 'Описание товара телефон 2', 31000, 'phone2.jpg', 'phones'),
-- (5, 'Ноутбук3', 'Описание товара ноутбук 3', 7999 ,'notebook3.jpg', 'notebooks'),
-- (6, 'Телефон3', 'Описание товара телефон 3', 7999, 'phone3.jpg', 'phones'),
-- (7, 'Ноутбук4', 'Описание товара ноутбук 4', 21400 ,'notebook4.jpg', 'notebooks'),
-- (8, 'Телефон4', 'Описание товара телефон 4', 1999, 'phone4.jpg', 'phones'),
-- (9, 'Ноутбук5', 'Описание товара ноутбук 5', 14100 ,'notebook5.jpg', 'notebooks'),
-- (10, 'Телефон5', 'Описание товара телефон 5', 2300, 'phone5.jpg', 'phones'),
-- (11, 'Ноутбук6', 'Описание товара ноутбук 6', 59999 ,'notebook6.jpg', 'notebooks'),
-- (12, 'Телефон6', 'Описание товара телефон 6', 9999, 'phone6.jpg', 'phones'),
-- (13, 'Ноутбук7', 'Описание товара ноутбук 7', 19999 ,'notebook7.jpg', 'notebooks'),
-- (14, 'Телефон7', 'Описание товара телефон 7', 5000, 'phone7.jpg', 'phones');








