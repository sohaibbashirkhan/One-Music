-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 04:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `one-music`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `email`, `password`) VALUES
(2, 'SohaibKhan', 'SohaibKhan@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latestmusic`
--

CREATE TABLE `latestmusic` (
  `id` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `album name` varchar(500) NOT NULL,
  `album cover` varchar(255) NOT NULL,
  `audiofile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latestmusic`
--

INSERT INTO `latestmusic` (`id`, `image`, `name`, `genre`, `year`, `artist`, `language`, `album name`, `album cover`, `audiofile`) VALUES
(3, 'amanat ali.jpg', 'Gham Hai Ya Khushi ', 'Pop', '2022', 'Amanat Ali', '', 'Gham hai yaa khushi hai tou', 'amanat ali.jpg', 'amanat ali Gham Hai Ya Khushi  Amanat Ali  New Melodious Romantic Song  Sufiscore.mp3'),
(9, 'ali zafar.jpg', 'Rock Star Ali Zafar Coke Studio Season 8', 'Rock', '2015', 'Ali Zafar', 'Urdu', 'Coke Studio  Season 8', 'ali zafar.jpg', 'ali zafar Coke Studio Season 8 Rockstar Ali Zafar.mp3'),
(15, 'atif aslam.jpg', 'Kadi te hans Atif Aslam ft Velo Sound Station', 'Pop', '2020', 'Atif Aslam ', 'Punjabi', 'Velo Sound Station', 'atif aslam.jpg', 'Y2Mate.is - Atif Aslam  Kadi Te Hans  VELO Sound Station 2020-EdfdZSYIIz0-160k-1655796579044.mp3'),
(19, 'al.jpg', 'Tu Jaanay Na - Ali Zafar ', 'Pop', '2011', 'Ali Zafar', 'Urdu/Hindi', 'Jhoom', 'al.jpg', 'Y2Mate.is - Tu Jaanay Na  - Ali Zafar - Jhoom (2011) Tu Jaane Na - Full Song-etBnJl7a_VY-160k-1658708410243.mp3'),
(22, 'camilla.jpg', 'Havana Camila Cabello ft Young Thug', 'Pop', '2018', 'Camila Cabello ft Young Thug', 'English', 'Camila', 'camilla.jpg', 'Camila Cabello  Havana Mix Lyrics ft Young Thug.mp3'),
(24, 'chainsmokers.jpg', 'All we Know The Chain Smokers', 'Pop', '2016', 'The Chain Smokers', 'English', 'Collage', 'chainsmokers.jpg', 'The Chainsmokers - All We Know (Audio) ft. Phoebe Ryan.mp3'),
(28, 'arcade.jpg', 'Arcade-Duncan Lawrence', 'Pop', '2020', 'Arcade', 'English', 'Small town Boy', 'arcade.jpg', 'Duncan Laurence  Arcade Lyrics ft FLETCHER  Lukas Graham Maroon 5 Tom Odell Mix.mp3'),
(29, 'ed sheeren.jpg', 'Bad Habits -Ed Sheeren', 'Pop', '2021', 'Ed Sheeren', 'English', '=', 'ed sheeren.jpg', 'Ed Sheeran  Bad Habits Lyrics    Mix.mp3'),
(30, 'ellie goulding.jpg', 'Love Me Like You do-Ellie Goulding', 'Pop', '2015', 'Ellie Goulding', 'English', 'Fifty Shades Of Grey', 'ellie goulding.jpg', 'Ellie Goulding  Love Me Like You Do Lyrics.mp3'),
(31, 'halsey.jpg', 'Without Me -Halsey', 'Pop', '2016', 'Halsey', 'English', 'Without Me', 'halsey.jpg', 'Halsey  Without Me Lyrics  Calum ScottLewis CapaldiTrevor Daniel.mp3'),
(32, 'justin.jpg', 'Intentions -Justin bieber ft Quavo', 'Pop', '2020', 'Justin bieber', 'English', 'Changes', 'justin.jpg', 'Justin Bieber  Intentions Official Video Short Version ft Quavo_320kbps.mp3'),
(33, 'alecbenji.jpg', 'Let Me Down Slowly', 'Pop', '2018', 'Alec Benjamin', 'English', 'Let Me down Slowly', 'alecbenji.jpg', 'Let Me Down Slowly  Alec Benjamin Lyrics  Justin Bieber BoyWithUke Blackbear Ed Sheeran.mp3'),
(34, 'lewis.jpg', 'Before You Go-Lewis Capaldi', 'Pop', '2019', 'Lewis Capaldi', 'English', 'Before You Go', 'lewis.jpg', 'Lewis capaldi  Before You Go Lyrics John Legend Alec Benjamin Lewis capaldiMix.mp3'),
(35, 'maroon5.jpg', 'Memories-Maroon 5', 'Pop', '2021', 'Maroon 5', 'English', 'Memories', 'maroon5.jpg', 'MEMORIES Maroon 5 Lyrics.mp3'),
(36, 'sia.jpg', 'Unstoppable-Sia', 'Pop', '2016', 'Sia', 'English', 'This is Acting', 'sia.jpg', 'Sia  Unstoppable Lyrics Passenger Jaymes Young Ed Sheeran Mix.mp3'),
(37, 'shawn.jpg', 'Treat You Better-Shawn Mendes', 'Pop', '2016', 'Shawn ', '', '', 'shawn.jpg', 'Shawn Mendes  Treat You Better  Mix Lyrics Justin Bieber Charlie Puth.mp3'),
(38, 'ed sheeren.jpg', 'Perfect-Ed Sheeren', 'Pop', '2017', 'Ed Sheeren', 'English', 'Divide', 'ed sheeren.jpg', 'Perfect  Ed Sheeran Lyrics.mp3'),
(39, 'olivia.jpg', 'Traitor-Olivia Rodrigo', 'Indie Pop', '2021', 'Olivia Rodrigo', 'English', 'Sour', 'olivia.jpg', 'Olivia Rodrigo  traitor Lyrics One Direction John Legend Alec BenjaminMix.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `latestvideo`
--

CREATE TABLE `latestvideo` (
  `id` int(100) NOT NULL,
  `Cover` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Video` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latestvideo`
--

INSERT INTO `latestvideo` (`id`, `Cover`, `Title`, `Video`) VALUES
(1, 'adele hello.jpg', 'Hello-Adele-2015mp4', '2015 Adele - Hello.mp4'),
(3, 'beliver imagine dragons.jpg', 'Believer-Imagine Dragons Official Music Video', '2018 Imagine Dragons - Believer (Official Music Video).mp4'),
(4, 'jvke golden hour.jpg', 'JVKE - 2022golden hour (official music video)', 'JVKE - 2022golden hour (official music video).mp4'),
(5, 'gremlinkodak black.jpg', 'Kodak Black - Super Gremlin [Official Music Video].mp4', '2021Kodak Black - Super Gremlin [Official Music Video].mp4'),
(6, 'The weekend call my name.jpg', 'The Weeknd - Call Out My Name (Official Video)', '2019 The Weeknd - Call Out My Name (Official Video).mp4'),
(7, 'calm down.jpg', 'Rema, Selena Gomez - Calm Down (Official Music Video)', '2022Rema, Selena Gomez - Calm Down (Official Music Video).mp4'),
(8, 'dusk till dawn.jpg', 'ZAYN - Dusk Till Dawn (Official Video) ft. Sia', '2018 ZAYN - Dusk Till Dawn (Official Video) ft. Sia.mp4'),
(9, 'enemyimagine dragons.jpg', 'Imagine Dragons x J.I.D - Enemy (from the series Arcane League of Legends)', '2022Imagine Dragons x J.I.D - Enemy (from the series Arcane League of Legends).mp4'),
(10, 'delicate taylor swift.jpg', 'Delicate-Taylor swift', 'videoplayback (1).mp4'),
(11, 'haaray abdul hannan.jpg', 'Haaray-Abdul Hannan Prod By Shahmeer raza Khan (Official Music Video).mp4', 'Abdul Hannan - Haaray - Prod by Shahmeer Raza Khan (Official Music Video).mp4'),
(12, 'abdulhannan iraaday.jpg', 'Iraaday-Abdul Hannan-Rovalio(Official Music video).mp4', 'Abdul Hannan _ Rovalio - Iraaday (Official Music Video).mp4'),
(13, 'jhoomalizafar.jpg', 'Jhoom-Alizafar-Official Video.mp4', 'Ali Zafar - Jhoom - Official Video.mp4'),
(14, 'anuvjain gul.jpg', 'Gul-Anuv Jain.mp4', 'Anuv Jain - GUL (Studio).mp4'),
(15, 'dardasimazhar.jpg', 'Dard-Asim Azhar Official Video.mp4', 'Asim Azhar - Dard (Official Video) Durefishan Saleem - Kunaal Vermaa (1).mp4'),
(16, 'kanayaari.jpg', 'Coke Studio - Season 14 - Kana Yaari - Kaifi Khalil x Eva B x Abdul Wahab Bugti', 'Coke Studio - Season 14 - Kana Yaari - Kaifi Khalil x Eva B x Abdul Wahab Bugti.mp4'),
(17, 'pasoori.jpg', 'Coke Studio - Season 14 - Pasoori - Ali Sethi x Shae Gill', 'Coke Studio - Season 14 - Pasoori - Ali Sethi x Shae Gill.mp4'),
(18, 'afreen afreen cokestudio.jpg', 'Coke Studio Season 9- Afreen Afreen- Rahat Fateh Ali Khan _ Momina Mustehsan', 'Coke Studio Season 9- Afreen Afreen- Rahat Fateh Ali Khan _ Momina Mustehsan.mp4'),
(19, 'iraadaydanish roomi.jpg', 'Danish Roomi - Iraaday ft. JANI prod. by superdupersultan - (Official Audio)', 'Danish Roomi - Iraaday ft. JANI prod. by superdupersultan - (Official Audio).mp4'),
(20, 'sunnykhandurranihaasil.jpg', 'Haasil - Sunny Khan Durrani - Urdu Rap', 'Haasil - Sunny Khan Durrani - Urdu Rap.mp4'),
(21, 'aarzuhasanraheem.jpg', 'Hasan Raheem - Aarzu  - Prod by UMAIR - Arham Ikram', 'Hasan Raheem - Aarzu  - Prod by UMAIR - Arham Ikram.mp4'),
(22, 'aisaykaisayhasanraheem.jpg', 'Hasan Raheem - Aisay Kaisay ft Abdullah Kasumbi', 'Hasan Raheem - Aisay Kaisay ft Abdullah Kasumbi.mp4'),
(23, 'humraahasimazhar.jpg', 'Humraah (Official Music Video) - Asim Azhar - Malang - Disha Patani, Aditya Roy Kapur', 'Humraah (Official Music Video) - Asim Azhar - Malang - Disha Patani, Aditya Roy Kapur.mp4'),
(24, 'kunfayakun.jpg', 'Kun Faya Kun Full Video Song Rockstar - Ranbir Kapoor - A.R. Rahman, Javed Ali, Mohit Chauhan', 'Kun Faya Kun Full Video Song Rockstar - Ranbir Kapoor - A.R. Rahman, Javed Ali, Mohit Chauhan.mp4'),
(25, 'lajawab.jpg', 'LAJAWAB - TAIMOUR BAIG - Prod. Dizzla D Beats (Official Lyrical Video)', 'LAJAWAB - TAIMOUR BAIG - Prod. Dizzla D Beats (Official Lyrical Video).mp4'),
(26, 'bikhra rovalio abdulhannan.jpg', 'Rovalio _ Abdul Hannan - Bikhra (Official Music Video)', 'Rovalio _ Abdul Hannan - Bikhra (Official Music Video).mp4'),
(27, 'sajnacover.jpg', 'Sajna l Lyrics Song Soulful Voice Of l Yashal Shahid l Unplugged Sweet Poison', 'Sajna l Lyrics Song Soulful Voice Of l Yashal Shahid l Unplugged Sweet Poison.mp4'),
(28, 'why youngstunners.jpg', 'WHY - Young Stunners - Talha Anjum - Talhah Yunus - Prod. by Jokhay (Official Audio)', 'WHY - Young Stunners - Talha Anjum - Talhah Yunus - Prod. by Jokhay (Official Audio).mp4'),
(29, 'asimyaad.jpg', 'YAAD - Asim Azhar - Talha Anjum - Talhah Yunus (Official Music Video)', 'YAAD - Asim Azhar - Talha Anjum - Talhah Yunus (Official Music Video).mp4');

-- --------------------------------------------------------

--
-- Table structure for table `registeruser`
--

CREATE TABLE `registeruser` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeruser`
--

INSERT INTO `registeruser` (`id`, `name`, `email`, `phone`, `password`) VALUES
(3, 'XDevGenius@gmail.com', 'XDevGenius@gmail.com', '7627460174', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latestmusic`
--
ALTER TABLE `latestmusic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latestvideo`
--
ALTER TABLE `latestvideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeruser`
--
ALTER TABLE `registeruser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `latestmusic`
--
ALTER TABLE `latestmusic`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `latestvideo`
--
ALTER TABLE `latestvideo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `registeruser`
--
ALTER TABLE `registeruser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
