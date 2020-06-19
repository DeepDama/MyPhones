

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;



INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(10, 'Vivo V15', 'vivo03', 33000.00, 'product-images/12.jpg'),
(11, 'Oppo FindX', 'Oppo01', 41000.00, 'product-images/13.jpg'),
(12, 'Reno 2series', 'Oppo02', 39000.00, 'product-images/14.jpg');

