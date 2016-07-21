-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 05:43 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eatmesugar`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `description`, `price`, `img_path`, `id`) VALUES
('Rosemarried With Children', 'Children aren''t the only cause of gray hair. Halt premature aging of the skin with our Rosemarried with Children sugar scrub. Rosemary promotes healthy, moisturized skin and supports healthy collagen levels. It protects from free-radical damage which compromises the support structure in your skin, leading to wrinkles, sagging and uneven skin tone.', 12.95, 'img/rosemary.jpg', 1),
('Orange is the New Vanillla', 'This vigorous scrub is just what the doctor ordered. An orange, vanilla swirl of goodness that will leave you softer than you have ever imagined. This aromatic scrub is zesty, citrusy and a great way to start your morning.', 10.95, 'img/orange.jpg', 2),
('Lavenduh! I want some Basil!', 'Bye Bye blackheads, acne, and pimples. Hello blemish free, glowing skin. The combo of these two powerhouse herbs can help treat acne, aid in eczema treatment, and detoxify skin. After a long day at work, declare ''Lavenduh! I want some Basil!''and hop into a warm bath with this extraordinary sugar scrub. Lavender is excellent for treating tired muscles, especially the feet.', 13.95, 'img/lavender.jpg', 3),
('Oh Wise Sage (with Blackberries)', 'It derives its scientific name from the Latin word ''salvere'' which means ''to be saved.'' Oh Wise Sage combines exfoliating sugar and sage into a real power house of a cleanser. The antioxidants in blackberries and sage reverse the signs of aging such as wrinkles, fine lines, and age spots.', 12.95, 'img/sage.jpg', 4),
('Lemon is the Balm', 'What makes Lemon balm a wonderful addition in skin care products? It’s ability to penetrate into the skin and protect against UV-radiation and sun damage. Added bonuses: Lemon balm is also calming and anti-inflammatory. Don''t let daily stress show on your skin, scrub up with Lemon is the Balm. ', 10.95, 'img/lemon.jpg', 5),
('It''s Grrrapefruit', 'Truly the ''fruit of paradise'', grapefruit is rich in Vitamins C and A. It''s antioxidant effects protect the skin from environmental hazards and it also stimulates the production of skin collagen that brings smoothness and elasticity to the skin. Try It''s Grrrapefruit to give your skin softness and renew damaged skin.', 10.95, 'img/grapefruit.jpg', 6),
('Choco-lotta Mint', 'It''s chocolatey. It''s minty. It''s Choco-lotta Mint! Chock full of rich, decacadent dark chocolate and fresh, zingy mint, this sugar scrub is sure to please, not only your senses but your skin too. Just try not to eat it.', 10.95, 'img/chocolate.jpg', 7),
('The Almond Scrub', 'The humble almond has powerful antioxidant and moisturising properties.\r\n     It contains a combination of two essential fatty acids, which help to create healthy, supple skin. Defy age with The Almond Scrub.', 11.95, 'img/almond.jpg', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
