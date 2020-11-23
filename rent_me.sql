-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2020 at 12:34 AM
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
(80, 'sammy', '4385695633f8c6c8ab52592092cecf04', 'sammy', 'sammy', 'sammy', 'January', '1', '1990'),
(82, 'tiffany', '210dc1fd8cb4e4e43cb4961b28fac275', 'tiffany', 'nguyen', 'tiffany@aol.com', 'October', '22', '1997');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` decimal(10,0) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `href` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productID`, `categoryID`, `productName`, `productPrice`, `url`, `href`) VALUES

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
(1, 2, 'Madam Secretary', 4, '5', 'trending', 'images/madam.jpg', 'Home_videos/madamsec.php'),
(2, 1, 'Argo', 4, '5', '', 'images/argo.jpg', ''),
(3, 1, 'A Star is Born', 4, '5', '', 'images/astar.jpg', ''),
(4, 1, 'Snowden', 4, '5', 'top10', 'images/snowden.jpg', 'Home_videos/snowden.php'),
(5, 1, 'Escape Room', 4, '5', 'newreleases', 'images/escaperoom.jpg', 'Home_videos/escaperoom.php'),
(6, 1, '1917', 4, '5', 'newreleases', 'images/1917.jpg', 'Home_videos/1917.php'),
(7, 1, 'Frozen 2', 4, '5', 'newreleases', 'images/frozen2.jpg', 'Home_videos/frozen2.php'),
(8, 2, 'Criminal Minds', 4, '5', 'top10', 'images/criminalminds.jpg', 'Home_videos/criminalminds.php'),
(9, 1, 'Jumanji', 4, '5', 'newreleases', 'images/jumanji.jpg', 'Home_videos/jumanji2.php'),
(10, 1, 'Easy A', 4, '5', 'top10', 'images/easyA.jpg', 'Home_videos/easyA.php'),
(11, 2, 'The Office', 4, '5', 'trending', 'images/office.jpg', 'Home_videos/office.php'),
(12, 2, 'Dickinson', 4, '5', 'trending', 'images/dickinson.jpg', 'Home_videos/dickinson.php'),
(13, 2, 'The Good Place', 4, '5', 'trending', 'images/googplace.jpg', 'Home_videos/goodplace.php'),
(14, 1, 'Game of Thrones', 4, '5', 'trending', 'images/got.jpg', 'Home_videos/got.php'),
(15, 1, 'Lilo and Stitch', 4, '5', 'childrenmovies', 'images/lilo.jpg', 'Home_videos/lilo&stitch.php'),
(16, 1, 'Mile 22', 4, '5', '', 'images/mile22.jpg', ''),
(17, 1, 'La La Land', 4, '5', '', 'images/lala.jpg', ''),
(18, 2, 'The Morning Show', 4, '5', 'trending', 'images/morning.jpg', 'Home_videos/morningshow.php'),
(19, 1, 'Holidate', 4, '5', 'top10', 'images/holidate.jpg', 'Home_videos/holidate.php'),
(20, 2, 'Lucifer', 4, '5', 'trending', 'images/lucifer.jpg', 'Home_videos/lucifer.php'),
(21, 1, 'Serenity', 4, '5', 'newreleases', 'images/serenity.jpg', 'Home_videos/serenity.php'),
(22, 1, 'The Devil Wears Prada', 4, '5', '', 'images/devilwears.jpg', ''),
(23, 1, 'Rocketman', 4, '5', 'newreleases', 'images/rocketman.jpg', 'Home_videos/rocketman.php'),
(24, 2, 'The Great British Baking Show', 4, '5', 'top10', 'images/british.jpg', 'Home_videos/greatbaking.php'),
(25, 1, 'Murder Mystery', 4, '5', 'romcom', 'images/murdermystery.jpg', 'Home_videos/mudermystery.php'),
(26, 1, 'Harry Potter', 4, '5', '', 'images/harry.jpg', ''),
(27, 2, 'Rick and Morty', 4, '5', 'top10', 'images/rickandmorty.jpg', 'Home_videos/rick&morty.php'),
(28, 1, 'Booksmart', 4, '5', 'top10', 'images/booksmart.jpg', 'Home_videos/booksmart.php'),
(29, 2, 'Spiderman Far From Home', 4, '5', 'newreleases', 'images/spider.jpg', 'Home_videos/spidermanfar.php'),
(30, 2, 'Stranger Things', 4, '5', 'trending', 'images/strangerthings.jpg', 'Home_videos/strangerthings.php'),
(33, 2, 'This Is Us', 4, '5', 'trending', 'images/thisisus.jpg', 'Home_videos/thisisus.php'),
(34, 1, 'Trolls World Tour', 4, '5', 'top10', 'images/trolls.jpeg', 'Home_videos/trollsWorld.php'),
(35, 2, 'The Vampire Diaries', 4, '5', 'trending', 'images/vampire.jpg', 'Home_videos/vampirediaries.php'),
(36, 1, '12 Strong', 4, '5', 'action', 'images/12strong.jpg', 'movie_videos/12strong.php'),
(37, 1, '13th', 4, '5', 'documentary', 'images/13th.jpg', 'movie_videos/13th.php'),
(38, 1, 'Adrift', 4, '5', 'action', 'images/adrift.jpg', 'movie_videos/adrift.php'),
(39, 1, 'Apollo Missions to the Moon', 4, '5', 'documentary', 'images/apollo.jpg', 'movie_videos/apollomoon.php'),
(40, 1, 'Crazy Rich Asians', 4, '5', 'romcom', 'images/asian.jpg', 'movie_videos/crazyrrich.php'),
(41, 1, 'Back to the Future', 4, '5', 'acclaimed', 'images/backtofuture.jpg', 'movie_videos/backtothefuture.php'),
(42, 1, 'A Bad Moms Christmas', 4, '5', 'holiday', 'images/badmoms.jpg', 'movie_videos/badmomschrristmas.php'),
(43, 1, 'Batman The Killing Joke', 4, '5', '', 'images/batmanjoke.jpg', ''),
(44, 1, 'Bethany Hamilton Unstoppable', 4, '5', 'documentary', 'images/beth.jpg', 'movie_videos/unstoppable.php'),
(45, 1, 'The Bounty Hunter', 4, '5', 'action', 'images/bountyhunter.jpg', 'movie_videos/bountyhunt.php'),
(46, 1, 'A Charlie Brown Christmas', 4, '5', 'holiday', 'images/charlie.jpg', 'movie_videos/charliebrownxmas.php'),
(47, 1, 'Charlies Angels', 4, '5', 'action', 'images/charliesang.jpg', 'movie_videos/charlies.php'),
(48, 1, 'The Cheetah Girls 2', 4, '5', 'childrenmovies', 'images/cheetah.jpg', 'movie_videos/cheetahgirls2.php'),
(49, 1, 'Clueless', 4, '5', 'romcom', 'images/clueless.jpg', 'movie_videos/clueless.php'),
(50, 1, 'The Croods 2', 4, '5', 'acclaimed', 'images/croods2.jpg', 'movie_videos/croods2.php'),
(51, 1, 'Deadpool', 4, '5', 'action', 'images/deadpool.jpg', 'movie_videos/deadpool.php'),
(52, 1, 'Elf', 4, '5', 'holiday', 'images/elf.jpg', 'movie_videos/elf.php'),
(53, 1, 'Foreigner', 4, '5', '', 'images/foreigner.jpg', ''),
(54, 1, 'Free Solo', 4, '5', 'documentary', 'images/freesolo.jpg', 'movie_videos/freesolo.php'),
(55, 1, 'Frozen', 4, '5', 'childrenmovies', 'images/beth.jpg', 'movie_videos/frozen.php'),
(56, 1, 'Game Night', 4, '5', 'romcom', 'images/gamenight.jpg', 'movie_videos/gamenight.php'),
(57, 1, 'Gemini Man', 4, '5', 'action', 'images/gemeni.jpg', 'movie_videos/gemeni.php'),
(58, 1, 'Goosebumps', 4, '5', 'holiday', 'images/goose.jpg', 'movie_videos/goosebumps.php'),
(59, 1, 'Grease', 4, '5', 'romcom', 'images/grease.jpg', 'movie_videos/grease.php'),
(61, 1, 'Halloween', 4, '5', 'holiday', 'images/haloween.jpg', 'movie_videos/halloween.php'),
(62, 1, 'Home Alone', 4, '5', 'holiday', 'images/homealone.jpg', 'movie_videos/homealone.php'),
(63, 1, 'Instant Family', 4, '5', 'romcom', 'images/instantfamily.jpg', 'movie_videos/instantfam.php'),
(64, 1, 'Jonas Brothers Chasing Happiness', 4, '5', 'documentary', 'images/jonas.jpg', 'movie_videos/jonasbro.php'),
(65, 1, 'Indiana Jones', 4, '5', 'action', 'images/jones.jpg', 'movie_videos/lastcrusade.php'),
(66, 1, 'Knock Down the House', 4, '5', 'acclaimed', 'images/knockthehouse.jpg', 'movie_videos/knockthehouse.php'),
(67, 1, 'The Little Prince', 4, '5', 'childrenmovies', 'images/lilprince.jpg', 'movie_videos/littleprince.php'),
(68, 1, 'The Little Mermaid', 4, '5', 'childrenmovies', 'images/littlemermaid.jpg', 'movie_videos/littlemermaid.php'),
(69, 1, 'Love, Simon', 4, '5', 'romcom', 'images/lovesimon.jpg', 'movie_videos/lovesimon.php'),
(70, 1, 'Mary Poppins Returns', 4, '5', 'acclaimed', 'images/marrypoppins.jpg', 'movie_videos/marypoppins.php'),
(71, 1, 'Mean Girls', 4, '5', 'romcom', 'images/meangirls.jpg', 'movie_videos/meangirls.php'),
(72, 1, 'Mother\'s Day', 4, '5', 'holiday', 'images/mothersday.jpg', 'movie_videos/mothersday.php'),
(73, 1, 'Saving Mr. Banks', 4, '5', 'acclaimed', 'images/mrbanks.jpg', 'movie_videos/savingbanks.php'),
(74, 1, 'Dolphin Reef', 4, '5', 'documentary', 'images/nature.jpg', 'movie_videos/dolphinreeef.php'),
(75, 1, 'New Year\'s Eve', 4, '5', 'holiday', 'images/newyearsr.jpg', 'movie_videos/newyears.php'),
(76, 1, 'Olympus Has Fallen', 4, '5', 'action', 'images/Olympus-Has-Fallen.jpg', 'movie_videos/olympus.php'),
(77, 1, 'Patriots Day', 4, '5', 'action', 'images/patriotsday.jpg', 'movie_videos/patriotday.php'),
(78, 1, 'The Perks of Being a Wallflower', 4, '5', 'acclaimed', 'images/perksofbeing.jpg', 'movie_videos/wallflower.php'),
(79, 1, 'Peter Pan', 4, '5', 'childrenmovies', 'images/peterpan.jpg', 'movie_videos/peterpan.php'),
(80, 1, 'The Pixar Story', 4, '5', 'documentary', 'images/pixarr.jpg', 'movie_videos/pixarstory.php'),
(81, 1, 'Pocahontas', 4, '5', 'childrenmovies', 'images/pocahontas.jpg', 'movie_videos/pocahontas.php'),
(82, 1, 'The Polar Express', 4, '5', 'holiday', 'images/polarexpress.jpg', 'movie_videos/polarexpress.php'),
(83, 1, 'RBG', 4, '5', 'documentary', 'images/rbg.jpg', 'movie_videos/rbg.php'),
(84, 1, 'Christopher Robin', 4, '5', 'childrenmovies', 'images/robin.jpg', 'movie_videos/christopherrobin.php'),
(85, 1, 'The Sound of Music', 4, '5', 'childrenmovies', 'images/soundofmusic.jpg', 'movie_videos/som.php'),
(86, 1, 'The Space Between Us', 4, '5', 'action', 'images/spacebetween.jpg', 'movie_videos/spacebetweenus.php'),
(87, 1, 'Stand and Deliver', 4, '5', 'acclaimed', 'images/standanddeliver.jpg', 'movie_videos/standanddeliver.php'),
(88, 1, 'Miss Americana', 4, '5', 'documentary', 'images/taylor.jpg', 'movie_videos/missamerica.php'),
(89, 1, 'This Means War', 4, '5', 'romcom', 'images/thismeanswarr.jpg', 'movie_videos/thismeanswar.php'),
(90, 1, 'To All The Boys I\'ve Loved Before', 4, '5', 'romcom', 'images/toalltheboys.jpg', 'movie_videos/toalltheboys.php'),
(91, 1, 'Toy Story', 4, '5', 'childrenmovies', 'images/toystory.jpg', 'movie_videos/toystory.php'),
(92, 1, 'Up', 4, '5', 'childrenmovies', 'images/up.jpg', 'movie_videos/up.php'),
(93, 1, 'Valentine\'s Day', 4, '5', 'holiday', 'images/vday.jpg', 'movie_videos/vday.php'),
(94, 1, 'Yesterday', 4, '5', 'romcom', 'images/yesterday.jpg', 'movie_videos/yesterday.php'),
(95, 2, '13 Reasons Why', 4, '5', 'drama', 'images/13reasons.jpg', 'tv_videos/13reasons.php'),
(96, 2, 'America\'s Got Talent', 4, '5', 'casual', 'images/agt.jpg', 'tv_videos/agt.php'),
(97, 2, 'America\'s Next Top Model', 4, '5', 'casual', 'images/antm.jpg', 'tv_videos/antm.php'),
(98, 2, 'Holiday Baking Championship', 4, '5', '', 'images/baking.jpg', ''),
(99, 2, 'Blacklist', 4, '5', 'trendingTV', 'images/blacklist.jpg', 'tv_videos/blacklist.php'),
(100, 2, 'Bodyguard', 4, '5', '', 'images/bodyguard.jpg', ''),
(101, 2, 'Big Time Rush', 4, '5', 'children', 'images/btr.jpg', 'tv_videos/btr.php'),
(102, 2, 'House of Cards', 4, '5', 'war', 'images/cards.png', 'tv_videos/hoc.php'),
(103, 2, 'Colony', 4, '5', 'war', 'images/colony.jpg', 'tv_videos/colony.php'),
(104, 2, 'The Crown', 4, '5', 'war', 'images/crown.jpg', 'tv_videos/crown.php'),
(105, 2, 'Dead to Me', 4, '5', 'drama', 'images/deadtome.jpg', 'tv_videos/deadtome.php'),
(106, 2, 'Designated Survivor', 4, '5', 'trendingTV', 'images/designated.jpg', 'tv_videos/dsurvivor.php'),
(107, 2, 'Dexter', 4, '5', '', 'images/dexter.jpg', ''),
(108, 2, 'Disenchantment', 4, '5', 'fantasy', 'images/disenchantment.jpg', 'tv_videos/disenchance.php'),
(109, 2, 'Down to Earth', 4, '5', 'casual', 'images/downtoearth.jpg', 'tv_videos/downtoearth.php'),
(110, 2, 'Drunk History', 4, '5', 'casual', 'images/drunk.jpg', 'tv_videos/drunkh.php'),
(111, 2, 'Dynasty', 4, '5', 'drama', 'images/dynasty.jpg', 'tv_videos/dynasty.php'),
(112, 2, 'The Flash', 4, '5', 'trendingTV', 'images/flash.jpg', 'tv_videos/flash.php'),
(113, 2, 'Friday Night Lights', 4, '5', 'trendingTV', 'images/friday.jpeg', 'tv_videos/fridaylights.php'),
(114, 2, 'Futurama', 4, '5', 'casual', 'images/futurama.jpg', 'tv_videos/futurama.php'),
(115, 2, 'Good Girls', 4, '5', 'drama', 'images/gg.jpg', 'tv_videos/goodgirls.php'),
(116, 2, 'Grey\'s Anatomy', 4, '5', 'trendingTV', 'images/greys.jpg', 'tv_videos/greysanat.php'),
(117, 2, 'Hannah Montana', 4, '5', 'trendingTV', 'images/hannah.jpg', 'tv_videos/hannah.php'),
(118, 2, 'Haven', 4, '5', 'fantasy', 'images/haven.jpg', 'tv_videos/haven.php'),
(119, 2, 'Hitler\'s Circle of Evil', 4, '5', 'war', 'images/hitler.jpg', 'tv_videos/hitlerr.php'),
(120, 2, 'Homeland', 4, '5', 'war', 'images/homeland.jpeg', 'tv_videos/homeland.php'),
(121, 2, 'Dream Home Makeover', 4, '5', 'casual', 'images/homemake.jpg', 'tv_videos/dreamhome.php'),
(122, 2, 'High School Musical The Musical The Series', 4, '5', 'children', 'images/hsm.jpeg', 'tv_videos/hsm.php'),
(123, 2, 'iCarly', 4, '5', 'children', 'images/iCarly.jpg', 'tv_videos/icarly.php'),
(124, 2, 'Insatiable', 4, '5', 'drama', 'images/insatiable.jpg', 'tv_videos/insatiable.php'),
(128, 2, 'Jericho', 4, '5', 'fantasy', 'images/jerico.jpg', 'tv_videos/jericho.php'),
(129, 2, 'Jimmy Neutron', 4, '5', 'children', 'images/jimmyN.jpg', 'tv_videos/jimmyneutron.php'),
(130, 2, 'Law and Order', 4, '5', 'war', 'images/lawandorder.jpg', 'tv_videos/law&order.php'),
(131, 2, 'Little Einstein', 4, '5', 'children', 'images/littleeinstein.jpg', 'tv_videos/lileinsteing.php'),
(132, 2, 'Locke and Key', 4, '5', 'fantasy', 'images/lockeandkey.png', 'tv_videos/lockkey.php'),
(133, 2, 'The Magicians', 4, '5', 'fantasy', 'images/magicians.jpeg', 'tv_videos/magician.php'),
(134, 2, 'Mars', 4, '5', 'casual', 'images/marrs.jpg', 'tv_videos/marrs.php'),
(136, 2, 'The Originals', 4, '5', 'drama', 'images/TheOG.jpg', 'tv_videos/originals.php'),
(137, 2, 'Pretty Little Liars', 4, '5', 'trendingTV', 'images/Pll.jpg', 'tv_videos/pll.php'),
(138, 2, 'Quantico', 4, '5', 'war', 'images/quantico.jpg', 'tv_videos/quantico.php'),
(139, 2, 'The Ranch', 4, '5', 'drama', 'images/ranch.jpg', 'tv_videos/theranch.php'),
(140, 2, 'That\'s So Raven', 4, '5', 'children', 'images/raven.jpg', 'tv_videos/soraven.php'),
(141, 1, 'Reign', 4, '5', 'drama', 'images/reign.jpg', 'tv_videos/reign.php'),
(142, 2, 'Free Rein', 4, '5', '', 'images/rein.jpg', ''),
(143, 2, 'Roswell', 4, '5', 'fantasy', 'images/roswell.jpg', 'tv_videos/roswell.php'),
(144, 2, 'Sabrina', 4, '5', 'fantasy', 'images/sabrina.jpg', 'tv_videos/sabrina.php'),
(145, 2, 'sense8', 4, '5', 'fantasy', 'images/sense8.jpg', 'tv_videos/sense8.php'),
(146, 2, 'Shameless', 4, '5', 'drama', 'images/shameless.jpg', 'tv_videos/shameless.php'),
(147, 2, 'Single Parents', 4, '5', 'casual', 'images/singlep.jpg', 'tv_videos/singleparents.php'),
(148, 2, 'The Society', 4, '5', 'drama', 'images/society.jpg', 'tv_videos/society.php'),
(149, 2, 'Spongebob Squarepants', 4, '5', 'children', 'images/spongebob.jpg', 'tv_videos/spongebob.php'),
(150, 2, 'Superstore', 4, '5', 'casual', 'images/superstore.jpg', 'tv_videos/superstore.php'),
(151, 2, 'The Twilight Zone', 4, '5', 'fantasy', 'images/twilight.jpg', 'tv_videos/twilight.php'),
(152, 2, 'Warrior Nun', 4, '5', 'fantasy', 'images/warrior.jpg', 'tv_videos/warriornun.php'),
(153, 2, 'The West Wing', 4, '5', 'war', 'images/westwing.jpg', 'tv_videos/westwing.php'),
(154, 2, 'Wizards of Waverly Place', 4, '5', 'children', 'images/wizards.png', 'tv_videos/wizards.php'),
(155, 2, 'Younger', 4, '5', 'casual', 'images/younger.jpg', 'tv_videos/youngerr.php'),
(156, 2, 'Young and Hungry', 4, '5', 'children', 'images/younghung.jpg', 'tv_videos/younhung.php'),
(157, 2, 'Zoey101', 4, '5', 'children', 'images/zoey101.jpg', 'tv_videos/zoey.php');

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`productID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
