-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 04:45 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `monthBday` varchar(255) NOT NULL,
  `dayBday` varchar(255) NOT NULL,
  `yearBday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `firstName`, `lastName`, `emailAddress`, `monthBday`, `dayBday`, `yearBday`) VALUES
(1, 'james', 'e10adc3949ba59abbe56e057f20f883e', 'james', 'james', 'james', 'January', '1', '1990'),
(80, 'sammy', '4385695633f8c6c8ab52592092cecf04', 'sammy', 'sammy', 'sammy', 'January', '1', '1990');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productID`, `categoryID`, `productName`, `productPrice`) VALUES
(1, 1, 'MIB International', '5'),
(2, 1, 'Once Upon a Time in Hollywood', '5'),
(3, 1, 'Bad Boys for Life', '5');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`categoryID`, `categoryName`) VALUES
(1, 'Movies'),
(2, 'TV Shows');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `productPrice` decimal(10,0) NOT NULL,
  `movieCategory` varchar(100) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `href` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productName`, `stock`, `productPrice`, `movieCategory`, `url`, `href`) VALUES
(1, 2, 'Madam Secretary', 4, '5', 'trending', 'http://localhost/RentMe-main/images/madam.jpg', 'Home_videos/madamsec.html'),
(2, 1, 'Argo', 4, '5', '', 'http://localhost/RentMe-main/images/argo.jpg', ''),
(3, 1, 'A Star is Born', 4, '5', '', 'http://localhost/RentMe-main/images/astar.jpg', ''),
(4, 1, 'Snowden', 4, '5', 'top10', 'http://localhost/RentMe-main/images/snowden.jpg', 'Home_videos/snowden.html'),
(5, 1, 'Escape Room', 4, '5', 'newreleases', 'images/escaperoom.jpg', 'Home_videos/escaperoom.html'),
(6, 1, '1917', 4, '5', 'newreleases', 'images/1917.jpg', 'Home_videos/1917.html'),
(7, 1, 'Frozen 2', 4, '5', 'newreleases', 'images/frozen2.jpg', 'Home_videos/frozen2.html'),
(8, 2, 'Criminal Minds', 4, '5', 'top10', 'http://localhost/RentMe-main/images/criminalminds.jpg', 'Home_videos/criminalminds.html'),
(9, 1, 'Jumanji', 4, '5', 'newreleases', 'images/jumanji.jpg', 'Home_videos/jumanji2.html'),
(10, 1, 'Easy A', 4, '5', 'top10', 'http://localhost/RentMe-main/images/easyA.jpg', 'Home_videos/easyA.html'),
(11, 2, 'The Office', 4, '5', 'trending', 'http://localhost/RentMe-main/images/office.jpg', 'Home_videos/office.html'),
(12, 2, 'Dickinson', 4, '5', 'trending', 'http://localhost/RentMe-main/images/dickinson.jpg', 'Home_videos/dickinson.html'),
(13, 2, 'The Good Place', 4, '5', 'trending', 'http://localhost/RentMe-main/images/googplace.jpg', 'Home_videos/goodplace.html'),
(14, 1, 'Game of Thrones', 4, '5', 'trending', 'http://localhost/RentMe-main/images/got.jpg', 'Home_videos/got.html'),
(15, 1, 'Lilo and Stitch', 4, '5', 'childrenmovies', 'http://localhost/RentMe-main/images/lilo.jpg', 'Home_videos/lilo&stitch.html'),
(16, 1, 'Mile 22', 4, '5', '', 'http://localhost/RentMe-main/images/mile22.jpg', ''),
(17, 1, 'La La Land', 4, '5', '', 'http://localhost/RentMe-main/images/lala.jpg', ''),
(18, 2, 'The Morning Show', 4, '5', 'trending', 'http://localhost/RentMe-main/images/morning.jpg', 'Home_videos/morningshow.html'),
(19, 1, 'Holidate', 4, '5', 'top10', 'http://localhost/RentMe-main/images/holidate.jpg', 'Home_videos/holidate.html'),
(20, 2, 'Lucifer', 4, '5', 'trending', 'http://localhost/RentMe-main/images/lucifer.jpg', 'Home_videos/lucifer.html'),
(21, 1, 'Serenity', 4, '5', 'newreleases', 'images/serenity.jpg', 'Home_videos/serenity.html'),
(22, 1, 'The Devil Wears Prada', 4, '5', '', 'http://localhost/RentMe-main/images/devilwears.jpg', ''),
(23, 1, 'Rocketman', 4, '5', 'newreleases', 'images/rocketman.jpg', 'Home_videos/rocketman.html'),
(24, 2, 'The Great British Baking Show', 4, '5', 'top10', 'http://localhost/RentMe-main/images/british.jpg', 'Home_videos/greatbaking.html'),
(25, 1, 'Murder Mystery', 4, '5', 'romcom', 'http://localhost/RentMe-main/images/murdermystery.jpg', 'Home_videos/mudermystery.html'),
(26, 1, 'Harry Potter', 4, '5', '', 'http://localhost/RentMe-main/images/harry.jpg', ''),
(27, 2, 'Rick and Morty', 4, '5', 'top10', 'http://localhost/RentMe-main/images/rickandmorty.jpg', 'Home_videos/rick&morty.html'),
(28, 1, 'Booksmart', 4, '5', 'top10', 'http://localhost/RentMe-main/images/booksmart.jpg', 'Home_videos/booksmart.html'),
(29, 2, 'Spiderman Far From Home', 4, '5', 'newreleases', 'images/spider.jpg', 'Home_videos/spidermanfar.html'),
(30, 2, 'Stranger Things', 4, '5', 'trending', 'http://localhost/RentMe-main/images/strangerthings.jpg', 'Home_videos/strangerthings.html'),
(33, 2, 'This Is Us', 4, '5', 'trending', 'http://localhost/RentMe-main/images/thisisus.jpg', 'Home_videos/thisisus.html'),
(34, 1, 'Trolls World Tour', 4, '5', 'top10', 'http://localhost/RentMe-main/images/trolls.jpeg', 'Home_videos/trollsWorld.html'),
(35, 2, 'The Vampire Diaries', 4, '5', 'trending', 'http://localhost/RentMe-main/images/vampire.jpg', 'Home_videos/vampirediaries.html'),
(36, 1, '12 Strong', 4, '5', 'action', 'http://localhost/RentMe-main/Movies/images/12strong.jpg', 'movie_videos/12strong.html'),
(37, 1, '13th', 4, '5', 'documentary', 'http://localhost/RentMe-main/Movies/images/13th.jpg', 'movie_videos/13th.html'),
(38, 1, 'Adrift', 4, '5', 'action', 'http://localhost/RentMe-main/Movies/images/adrift.jpg', 'movie_videos/adrift.html'),
(39, 1, 'Apollo Missions to the Moon', 4, '5', 'documentary', 'http://localhost/RentMe-main/Movies/images/apollo.jpg', 'movie_videos/apollomoon.html'),
(40, 1, 'Crazy Rich Asians', 4, '5', 'romcom', 'http://localhost/RentMe-main/Movies/images/asian.jpg', 'movie_videos/crazyrrich.html'),
(41, 1, 'Back to the Future', 4, '5', 'acclaimed', 'http://localhost/RentMe-main/Movies/images/backtofuture.jpg', 'movie_videos/backtothefuture.html'),
(42, 1, 'A Bad Moms Christmas', 4, '5', 'holiday', 'http://localhost/RentMe-main/Movies/images/badmoms.jpg', 'movie_videos/badmomschrristmas.html'),
(43, 1, 'Batman The Killing Joke', 4, '5', '', 'http://localhost/RentMe-main/Movies/images/batmanjoke.jpg', ''),
(44, 1, 'Bethany Hamilton Unstoppable', 4, '5', 'documentary', 'http://localhost/RentMe-main/Movies/images/beth.jpg', 'movie_videos/unstoppable.html'),
(45, 1, 'The Bounty Hunter', 4, '5', 'action', 'http://localhost/RentMe-main/Movies/images/bountyhunter.jpg', 'movie_videos/bountyhunt.html'),
(46, 1, 'A Charlie Brown Christmas', 4, '5', 'holiday', 'http://localhost/RentMe-main/Movies/images/charlie.jpg', 'movie_videos/charliebrownxmas.html'),
(47, 1, 'Charlies Angels', 4, '5', 'action', 'http://localhost/RentMe-main/Movies/images/charliesang.jpg', 'movie_videos/charlies.html'),
(48, 1, 'The Cheetah Girls 2', 4, '5', 'childrenmovies', 'http://localhost/RentMe-main/Movies/images/cheetah.jpg', 'movie_videos/cheetahgirls2.html'),
(49, 1, 'Clueless', 4, '5', 'romcom', 'http://localhost/RentMe-main/Movies/images/clueless.jpg', 'movie_videos/clueless.html'),
(50, 1, 'The Croods 2', 4, '5', 'acclaimed', 'http://localhost/RentMe-main/Movies/images/croods2.jpg', 'movie_videos/croods2.html'),
(51, 1, 'Deadpool', 4, '5', 'action', 'http://localhost/RentMe-main/Movies/images/deadpool.jpg', 'movie_videos/deadpool.html'),
(52, 1, 'Elf', 4, '5', 'holiday', 'http://localhost/RentMe-main/Movies/images/elf.jpg', 'movie_videos/elf.html'),
(53, 1, 'Foreigner', 4, '5', '', 'http://localhost/RentMe-main/Movies/images/foreigner.jpg', ''),
(54, 1, 'Free Solo', 4, '5', 'documentary', 'http://localhost/RentMe-main/Movies/images/freesolo.jpg', 'movie_videos/freesolo.html'),
(55, 1, 'Frozen', 4, '5', 'childrenmovies', 'http://localhost/RentMe-main/Movies/images/beth.jpg', 'movie_videos/frozen.html'),
(56, 1, 'Game Night', 4, '5', 'romcom', 'http://localhost/RentMe-main/Movies/images/gamenight.jpg', 'movie_videos/gamenight.html'),
(57, 1, 'Gemini Man', 4, '5', 'action', 'http://localhost/RentMe-main/Movies/images/gemeni.jpg', 'movie_videos/gemeni.html'),
(58, 1, 'Goosebumps', 4, '5', 'holiday', 'http://localhost/RentMe-main/Movies/images/goose.jpg', 'movie_videos/goosebumps.html'),
(59, 1, 'Grease', 4, '5', 'romcom', 'http://localhost/RentMe-main/Movies/images/grease.jpg', 'movie_videos/grease.html'),
(61, 1, 'Halloween', 4, '5', 'holiday', 'http://localhost/RentMe-main/Movies/images/haloween.jpg', 'movie_videos/halloween.html'),
(62, 1, 'Home Alone', 4, '5', 'holiday', 'http://localhost/RentMe-main/Movies/images/homealone.jpg', 'movie_videos/homealone.html'),
(63, 1, 'Instant Family', 4, '5', 'romcom', 'http://localhost/RentMe-main/Movies/images/instantfamily.jpg', 'movie_videos/instantfam.html'),
(64, 1, 'Jonas Brothers Chasing Happiness', 4, '5', 'documentary', 'http://localhost/RentMe-main/Movies/images/jonas.jpg', 'movie_videos/jonasbro.html'),
(65, 1, 'Indiana Jones', 4, '5', 'action', 'http://localhost/RentMe-main/Movies/images/jones.jpg', 'movie_videos/lastcrusade.html'),
(66, 1, 'Knock Down the House', 4, '5', 'acclaimed', 'http://localhost/RentMe-main/Movies/images/knockthehouse.jpg', 'movie_videos/knockthehouse.html'),
(67, 1, 'The Little Prince', 4, '5', 'childrenmovies', 'http://localhost/RentMe-main/Movies/images/lilprince.jpg', 'movie_videos/littleprince.html'),
(68, 1, 'The Little Mermaid', 4, '5', 'childrenmovies', 'http://localhost/RentMe-main/Movies/images/littlemermaid.jpg', 'movie_videos/littlemermaid.html'),
(69, 1, 'Love, Simon', 4, '5', 'romcom', 'http://localhost/RentMe-main/Movies/images/lovesimon.jpg', 'movie_videos/lovesimon.html'),
(70, 1, 'Mary Poppins Returns', 4, '5', 'acclaimed', 'http://localhost/RentMe-main/Movies/images/marrypoppins.jpg', 'movie_videos/marypoppins.html'),
(71, 1, 'Mean Girls', 4, '5', 'romcom', 'http://localhost/RentMe-main/Movies/images/meangirls.jpg', 'movie_videos/meangirls.html'),
(72, 1, 'Mother\'s Day', 4, '5', 'holiday', 'http://localhost/RentMe-main/Movies/images/mothersday.jpg', 'movie_videos/mothersday.html'),
(73, 1, 'Saving Mr. Banks', 4, '5', 'acclaimed', 'http://localhost/RentMe-main/Movies/images/mrbanks.jpg', 'movie_videos/savingbanks.html'),
(74, 1, 'Dolphin Reef', 4, '5', 'documentary', 'http://localhost/RentMe-main/Movies/images/nature.jpg', 'movie_videos/dolphinreeef.html'),
(75, 1, 'New Year\'s Eve', 4, '5', 'holiday', 'http://localhost/RentMe-main/Movies/images/newyearsr.jpg', 'movie_videos/newyears.html'),
(76, 1, 'Olympus Has Fallen', 4, '5', 'action', 'http://localhost/RentMe-main/Movies/images/Olympus-Has-Fallen.jpg', 'movie_videos/olympus.html'),
(77, 1, 'Patriots Day', 4, '5', 'action', 'http://localhost/RentMe-main/Movies/images/patriotsday.jpg', 'movie_videos/patriotday.html'),
(78, 1, 'The Perks of Being a Wallflower', 4, '5', 'acclaimed', 'http://localhost/RentMe-main/Movies/images/perksofbeing.jpg', 'movie_videos/wallflower.html'),
(79, 1, 'Peter Pan', 4, '5', 'childrenmovies', 'http://localhost/RentMe-main/Movies/images/peterpan.jpg', 'movie_videos/peterpan.html'),
(80, 1, 'The Pixar Story', 4, '5', 'documentary', 'http://localhost/RentMe-main/Movies/images/pixarr.jpg', 'movie_videos/pixarstory.html'),
(81, 1, 'Pocahontas', 4, '5', 'childrenmovies', 'http://localhost/RentMe-main/Movies/images/pocahontas.jpg', 'movie_videos/pocahontas.html'),
(82, 1, 'The Polar Express', 4, '5', 'holiday', 'http://localhost/RentMe-main/Movies/images/polarexpress.jpg', 'movie_videos/polarexpress.html'),
(83, 1, 'RGB', 4, '5', 'documentary', 'http://localhost/RentMe-main/Movies/images/rgb.jpg', 'movie_videos/rbg.html'),
(84, 1, 'Christopher Robin', 4, '5', 'childrenmovies', 'http://localhost/RentMe-main/Movies/images/robin.jpg', 'movie_videos/christopherrobin.html'),
(85, 1, 'The Sound of Music', 4, '5', 'childrenmovies', 'http://localhost/RentMe-main/Movies/images/soundofmusic.jpg', 'movie_videos/som.html'),
(86, 1, 'The Space Between Us', 4, '5', 'action', 'http://localhost/RentMe-main/Movies/images/spacebetween.jpg', 'movie_videos/spacebetweenus.html'),
(87, 1, 'Stand and Deliver', 4, '5', 'acclaimed', 'http://localhost/RentMe-main/Movies/images/standanddeliver.jpg', 'movie_videos/standanddeliver.html'),
(88, 1, 'Miss Americana', 4, '5', 'documentary', 'http://localhost/RentMe-main/Movies/images/taylor.jpg', 'movie_videos/missamerica.html'),
(89, 1, 'This Means War', 4, '5', 'romcom', 'http://localhost/RentMe-main/Movies/images/thismeanswarr.jpg', 'movie_videos/thismeanswar.html'),
(90, 1, 'To All The Boys I\'ve Loved Before', 4, '5', 'romcom', 'http://localhost/RentMe-main/Movies/images/toalltheboys.jpg', 'movie_videos/toalltheboys.html'),
(91, 1, 'Toy Story', 4, '5', 'childrenmovies', 'http://localhost/RentMe-main/Movies/images/toystory.jpg', 'movie_videos/toystory.html'),
(92, 1, 'Up', 4, '5', 'childrenmovies', 'http://localhost/RentMe-main/Movies/images/up.jpg', 'movie_videos/up.html'),
(93, 1, 'Valentine\'s Day', 4, '5', 'holiday', 'http://localhost/RentMe-main/Movies/images/vday.jpg', 'movie_videos/vday.html'),
(94, 1, 'Yesterday', 4, '5', 'romcom', 'http://localhost/RentMe-main/Movies/images/yesterday.jpg', 'movie_videos/yesterday.html'),
(95, 2, '13 Reasons Why', 4, '5', 'drama', 'http://localhost/RentMe-main/TV_Shows/Images/13reasons.jpg', 'tv_videos/13reasons.html'),
(96, 2, 'America\'s Got Talent', 4, '5', 'casual', 'http://localhost/RentMe-main/TV_Shows/Images/agt.jpg', 'tv_videos/agt.html'),
(97, 2, 'America\'s Next Top Model', 4, '5', 'casual', 'http://localhost/RentMe-main/TV_Shows/Images/antm.jpg', 'tv_videos/antm.html'),
(98, 2, 'Holiday Baking Championship', 4, '5', '', 'http://localhost/RentMe-main/TV_Shows/Images/baking.jpg', ''),
(99, 2, 'Blacklist', 4, '5', 'trendingTV', 'http://localhost/RentMe-main/TV_Shows/Images/blacklist.jpg', 'tv_videos/blacklist.html'),
(100, 2, 'Bodyguard', 4, '5', '', 'http://localhost/RentMe-main/TV_Shows/Images/bodyguard.jpg', ''),
(101, 2, 'Big Time Rush', 4, '5', 'children', 'http://localhost/RentMe-main/TV_Shows/Images/btr.jpg', 'tv_videos/btr.html'),
(102, 2, 'House of Cards', 4, '5', 'war', 'http://localhost/RentMe-main/TV_Shows/Images/cards.png', 'tv_videos/hoc.html'),
(103, 2, 'Colony', 4, '5', 'war', 'http://localhost/RentMe-main/TV_Shows/Images/colony.jpg', 'tv_videos/colony.html'),
(104, 2, 'The Crown', 4, '5', 'war', 'http://localhost/RentMe-main/TV_Shows/Images/crown.jpg', 'tv_videos/crown.html'),
(105, 2, 'Dead to Me', 4, '5', 'drama', 'http://localhost/RentMe-main/TV_Shows/Images/deadtome.jpg', 'tv_videos/deadtome.html'),
(106, 2, 'Designated Survivor', 4, '5', 'trendingTV', 'http://localhost/RentMe-main/TV_Shows/Images/designated.jpg', 'tv_videos/dsurvivor.html'),
(107, 2, 'Dexter', 4, '5', '', 'http://localhost/RentMe-main/TV_Shows/Images/dexter.jpg', ''),
(108, 2, 'Disenchantment', 4, '5', 'fantasy', 'http://localhost/RentMe-main/TV_Shows/Images/disenchantment.jpg', 'tv_videos/disenchance.html'),
(109, 2, 'Down to Earth', 4, '5', 'casual', 'http://localhost/RentMe-main/TV_Shows/Images/downtoearth.jpg', 'tv_videos/downtoearth.html'),
(110, 2, 'Drunk History', 4, '5', 'casual', 'http://localhost/RentMe-main/TV_Shows/Images/drunk.jpg', 'tv_videos/drunkh.html'),
(111, 2, 'Dynasty', 4, '5', 'drama', 'http://localhost/RentMe-main/TV_Shows/Images/dynasty.jpg', 'tv_videos/dynasty.html'),
(112, 2, 'The Flash', 4, '5', 'trendingTV', 'http://localhost/RentMe-main/TV_Shows/Images/flash.jpg', 'tv_videos/flash.html'),
(113, 2, 'Friday Night Lights', 4, '5', 'trendingTV', 'http://localhost/RentMe-main/TV_Shows/Images/friday.jpeg', 'tv_videos/fridaylights.html'),
(114, 2, 'Futurama', 4, '5', 'casual', 'http://localhost/RentMe-main/TV_Shows/Images/futurama.jpg', 'tv_videos/futurama.html'),
(115, 2, 'Good Girls', 4, '5', 'drama', 'http://localhost/RentMe-main/TV_Shows/Images/gg.jpg', 'tv_videos/goodgirls.html'),
(116, 2, 'Grey\'s Anatomy', 4, '5', 'trendingTV', 'http://localhost/RentMe-main/TV_Shows/Images/greys.jpg', 'tv_videos/greysanat.html'),
(117, 2, 'Hannah Montana', 4, '5', 'trendingTV', 'http://localhost/RentMe-main/TV_Shows/Images/hannah.jpg', 'tv_videos/hannah.html'),
(118, 2, 'Haven', 4, '5', 'fantasy', 'http://localhost/RentMe-main/TV_Shows/Images/haven.jpg', 'tv_videos/haven.html'),
(119, 2, 'Hitler\'s Circle of Evil', 4, '5', 'war', 'http://localhost/RentMe-main/TV_Shows/Images/hitler.jpg', 'tv_videos/hitlerr.html'),
(120, 2, 'Homeland', 4, '5', 'war', 'http://localhost/RentMe-main/TV_Shows/Images/homeland.jpeg', 'tv_videos/homeland.html'),
(121, 2, 'Dream Home Makeover', 4, '5', 'casual', 'http://localhost/RentMe-main/TV_Shows/Images/homemake.jpg', 'tv_videos/dreamhome.html'),
(122, 2, 'High School Musical The Musical The Series', 4, '5', 'children', 'http://localhost/RentMe-main/TV_Shows/Images/hsm.jpeg', 'tv_videos/hsm.html'),
(123, 2, 'iCarly', 4, '5', 'children', 'http://localhost/RentMe-main/TV_Shows/Images/iCarly.jpg', 'tv_videos/icarly.html'),
(124, 2, 'Insatiable', 4, '5', 'drama', 'http://localhost/RentMe-main/TV_Shows/Images/insatiable.jpg', 'tv_videos/insatiable.html'),
(128, 2, 'Jericho', 4, '5', 'fantasy', 'http://localhost/RentMe-main/TV_Shows/Images/jerico.jpg', 'tv_videos/jericho.html'),
(129, 2, 'Jimmy Neutron', 4, '5', 'children', 'http://localhost/RentMe-main/TV_Shows/Images/jimmyN.jpg', 'tv_videos/jimmyneutron.html'),
(130, 2, 'Law and Order', 4, '5', 'war', 'http://localhost/RentMe-main/TV_Shows/Images/lawandorder.jpg', 'tv_videos/law&order.html'),
(131, 2, 'Little Einstein', 4, '5', 'children', 'http://localhost/RentMe-main/TV_Shows/Images/littleeinstein.jpg', 'tv_videos/lileinsteing.html'),
(132, 2, 'Locke and Key', 4, '5', 'fantasy', 'http://localhost/RentMe-main/TV_Shows/Images/lockeandkey.png', 'tv_videos/lockkey.html'),
(133, 2, 'The Magicians', 4, '5', 'fantasy', 'http://localhost/RentMe-main/TV_Shows/Images/magicians.jpeg', 'tv_videos/magician.html'),
(134, 2, 'Mars', 4, '5', 'casual', 'http://localhost/RentMe-main/TV_Shows/Images/marrs.jpg', 'tv_videos/marrs.html'),
(136, 2, 'The Originals', 4, '5', 'drama', 'http://localhost/RentMe-main/TV_Shows/Images/originals.jpg', 'tv_videos/originals.html'),
(137, 2, 'Pretty Little Liars', 4, '5', 'trendingTV', 'http://localhost/RentMe-main/TV_Shows/Images/Pll.jpg', 'tv_videos/pll.html'),
(138, 2, 'Quantico', 4, '5', 'war', 'http://localhost/RentMe-main/TV_Shows/Images/quantico.jpg', 'tv_videos/quantico.html'),
(139, 2, 'The Ranch', 4, '5', 'drama', 'http://localhost/RentMe-main/TV_Shows/Images/ranch.jpg', 'tv_videos/theranch.html'),
(140, 2, 'That\'s So Raven', 4, '5', 'children', 'http://localhost/RentMe-main/TV_Shows/Images/raven.jpg', 'tv_videos/soraven.html'),
(141, 1, 'Reign', 4, '5', 'drama', 'http://localhost/RentMe-main/TV_Shows/Images/reign.jpg', 'tv_videos/reign.html'),
(142, 2, 'Free Rein', 4, '5', '', 'http://localhost/RentMe-main/TV_Shows/Images/rein.jpg', ''),
(143, 2, 'Roswell', 4, '5', 'fantasy', 'http://localhost/RentMe-main/TV_Shows/Images/roswell.jpg', 'tv_videos/roswell.html'),
(144, 2, 'Sabrina', 4, '5', 'fantasy', 'http://localhost/RentMe-main/TV_Shows/Images/sabrina.jpg', 'tv_videos/sabrina.html'),
(145, 2, 'sense8', 4, '5', 'fantasy', 'http://localhost/RentMe-main/TV_Shows/Images/sense8.jpg', 'tv_videos/sense8.html'),
(146, 2, 'Shameless', 4, '5', 'drama', 'http://localhost/RentMe-main/TV_Shows/Images/shameless.jpg', 'tv_videos/shameless.html'),
(147, 2, 'Single Parents', 4, '5', 'casual', 'http://localhost/RentMe-main/TV_Shows/Images/singlep.jpg', 'tv_videos/singleparents.html'),
(148, 2, 'The Society', 4, '5', 'drama', 'http://localhost/RentMe-main/TV_Shows/Images/society.jpg', 'tv_videos/society.html'),
(149, 2, 'Spongebob Squarepants', 4, '5', 'children', 'http://localhost/RentMe-main/TV_Shows/Images/spongebob.jpg', 'tv_videos/spongebob.html'),
(150, 2, 'Superstore', 4, '5', 'casual', 'http://localhost/RentMe-main/TV_Shows/Images/superstore.jpg', 'tv_videos/superstore.html'),
(151, 2, 'The Twilight Zone', 4, '5', 'fantasy', 'http://localhost/RentMe-main/TV_Shows/Images/twilight.jpg', 'tv_videos/twilight.html'),
(152, 2, 'Warrior Nun', 4, '5', 'fantasy', 'http://localhost/RentMe-main/TV_Shows/Images/warrior.jpg', 'tv_videos/warriornun.html'),
(153, 2, 'The West Wing', 4, '5', 'war', 'http://localhost/RentMe-main/TV_Shows/Images/westwing.jpg', 'tv_videos/westwing.html'),
(154, 2, 'Wizards of Waverly Place', 4, '5', 'children', 'http://localhost/RentMe-main/TV_Shows/Images/wizards.jpg', 'tv_videos/wizards.html'),
(155, 2, 'Younger', 4, '5', 'casual', 'http://localhost/RentMe-main/TV_Shows/Images/younger.jpg', 'tv_videos/youngerr.html'),
(156, 2, 'Young and Hungry', 4, '5', 'children', 'http://localhost/RentMe-main/TV_Shows/Images/younghung.jpg', 'tv_videos/younhung.html'),
(157, 2, 'Zoey101', 4, '5', 'children', 'http://localhost/RentMe-main/TV_Shows/Images/zoey101.jpg', 'tv_videos/zoey.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
