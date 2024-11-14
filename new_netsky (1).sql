-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 09:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_netsky`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_management`
--

CREATE TABLE `ads_management` (
  `id` int(11) NOT NULL,
  `ad_title` varchar(255) DEFAULT NULL,
  `ad_key` varchar(255) DEFAULT NULL,
  `ad_size` varchar(255) DEFAULT NULL,
  `ad_code` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ads_management`
--

INSERT INTO `ads_management` (`id`, `ad_title`, `ad_key`, `ad_size`, `ad_code`, `status`) VALUES
(1, 'Home Top', 'home_ad_top', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(2, 'Home Bottom', 'home_ad_bottom', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(3, 'Movie List Top', 'movie_list_ad_top', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(4, 'Movie List Bottom', 'movie_list_ad_bottom', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(5, 'Movie Single Top', 'movie_single_ad_top', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(6, 'Movie Single Bottom', 'movie_single_ad_bottom', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(7, 'Movie Single Sidebar', 'movie_single_ad_sidebar', '350x250', '<a href=\"#\"><img src=\"https://via.placeholder.com/350x250.png\" alt=\"add_banner\"></a>', 1),
(8, 'Shows List Top', 'shows_list_ad_top', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(9, 'Shows List Bottom', 'shows_list_ad_bottom', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(10, 'Shows Single', 'shows_single_ad', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(11, 'Episode Single Top', 'episode_single_ad_top', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(12, 'Episode Single Bottom', 'episode_single_ad_bottom', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(13, 'Episode Single Sidebar', 'episode_single_ad_sidebar', '350x250', '<a href=\"#\"><img src=\"https://via.placeholder.com/350x250.png\" alt=\"add_banner\"></a>', 1),
(14, 'Language Top', 'language_ad_top', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(15, 'Language Bottom', 'language_ad_bottom', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(16, 'Genres Top', 'genres_ad_top', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(17, 'Genres Bottom', 'genres_ad_bottom', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(18, 'Sports Video Top', 'sports_video_ad_top', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(19, 'Sports Video Bottom', 'sports_video_ad_bottom', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(20, 'Sports Single Top', 'sports_single_ad_top', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 0),
(21, 'Sports Single Bottom', 'sports_single_ad_bottom', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 0),
(22, 'Sports Single Sidebar', 'sports_single_ad_sidebar', '350x250', '<a href=\"#\"><img src=\"https://via.placeholder.com/350x250.png\" alt=\"add_banner\"></a>', 0),
(23, 'Live TV List Top', 'livetv_list_ad_top', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(24, 'Live TV List Bottom', 'livetv_list_ad_bottom', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(25, 'Live TV Single Top', 'livetv_single_ad_top', '728x90', '<a href=\"#\"><img src=\"https://via.placeholder.com/728x90.png\" alt=\"add_banner\"></a>', 1),
(26, 'Live TV Single Bottom', 'livetv_single_ad_bottom', '728x90', NULL, 1),
(27, 'Live TV Single Sidebar', 'livetv_single_ad_sidebar', '350x250', '<a href=\"#\"><img src=\"https://via.placeholder.com/350x250.png\" alt=\"add_banner\"></a>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `channels_list`
--

CREATE TABLE `channels_list` (
  `id` int(11) NOT NULL,
  `channel_cat_id` int(11) NOT NULL,
  `channel_access` varchar(255) NOT NULL DEFAULT 'Paid',
  `channel_name` varchar(255) NOT NULL,
  `channel_slug` varchar(255) NOT NULL,
  `channel_description` text DEFAULT NULL,
  `channel_thumb` varchar(255) NOT NULL,
  `channel_url_type` varchar(255) NOT NULL,
  `channel_url` varchar(500) NOT NULL,
  `channel_url2` varchar(500) DEFAULT NULL,
  `channel_url3` varchar(500) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(500) DEFAULT NULL,
  `seo_keyword` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `channels_list`
--

INSERT INTO `channels_list` (`id`, `channel_cat_id`, `channel_access`, `channel_name`, `channel_slug`, `channel_description`, `channel_thumb`, `channel_url_type`, `channel_url`, `channel_url2`, `channel_url3`, `seo_title`, `seo_description`, `seo_keyword`, `status`) VALUES
(1, 1, 'Paid', 'CBC TV', 'cbc-tv', '<p>&nbsp;Bull TV</p>', '2.jpg', 'hls', 'https://stream-akamai.castr.com/5b9352dbda7b8c769937e459/live_2361c920455111ea85db6911fe397b9e/index.fmp4.m3u8', NULL, NULL, '', '', '', 1),
(2, 4, 'Free', 'Netsky TV', 'netsky-tv', '', '1.jpg', 'hls', 'https://live-k2301-kbp.1plus1.video/sport/smil:sport.smil/playlist.m3u8', NULL, NULL, '', '', '', 0),
(3, 4, 'Paid', 'Netsky TV', 'netsky-tv', '', '5.jpg', 'hls', 'https://shls-fight-sports-ak.akamaized.net/out/v1/ee7e6475b12e484bbfa5c31461ad4306/index.m3u8', NULL, NULL, '', '', '', 0),
(4, 4, 'Paid', 'Coming Soon', 'coming-soon', '<p><strong>Download the Netsky TV App Today!&nbsp;(on Play Store)</strong></p>\r\n<p>Get ready to experience the ultimate entertainment hub with Netsky TV. Whether you\\\'re a die-hard football fan or a movie enthusiast, Netsky TV has everything you need!</p>\r\n<p><strong>All Live Football Channels:</strong>&nbsp;Catch every thrilling moment of the Champions League, La Liga, Premier League, and Serie A live on Netsky TV. Never miss a match with real-time streaming of all your favorite teams and leagues.</p>\r\n<p><strong>Movies, Coming Soon:</strong>&nbsp;Stay tuned for the latest blockbuster movies, coming soon to Netsky TV. From action-packed adventures to heartwarming dramas, there\\\'s something for everyone.</p>\r\n<p>Download the Netsky TV App now and elevate your entertainment experience. Your favorite games and movies are just a tap away!</p>\r\n<p>&nbsp;</p>', '4.jpg', 'hls', 'https://shls-fight-sports-ak.akamaized.net/out/v1/ee7e6475b12e484bbfa5c31461ad4306/index.m3u8', NULL, NULL, '', '', '', 1),
(5, 4, 'Paid', 'Coming Soon', 'coming-soon', '<p><strong>Download the Netsky TV App Today!&nbsp;(on Play Store)</strong></p>\r\n<p>Get ready to experience the ultimate entertainment hub with Netsky TV. Whether you\\\'re a die-hard football fan or a movie enthusiast, Netsky TV has everything you need!</p>\r\n<p><strong>All Live Football Channels:</strong>&nbsp;Catch every thrilling moment of the Champions League, La Liga, Premier League, and Serie A live on Netsky TV. Never miss a match with real-time streaming of all your favorite teams and leagues.</p>\r\n<p><strong>Movies, Coming Soon:</strong>&nbsp;Stay tuned for the latest blockbuster movies, coming soon to Netsky TV. From action-packed adventures to heartwarming dramas, there\\\'s something for everyone.</p>\r\n<p>Download the Netsky TV App now and elevate your entertainment experience. Your favorite games and movies are just a tap away!</p>\r\n<p>&nbsp;</p>', 'ESPN FC.jpg', 'hls', 'https://shls-fight-sports-ak.akamaized.net/out/v1/ee7e6475b12e484bbfa5c31461ad4306/index.m3u8', NULL, NULL, '', '', '', 1),
(6, 4, 'Paid', 'Coming Soon', 'coming-soon', '<p><strong>Download the Netsky TV App Today!&nbsp;(on Play Store)</strong></p>\r\n<p>Get ready to experience the ultimate entertainment hub with Netsky TV. Whether you\\\'re a die-hard football fan or a movie enthusiast, Netsky TV has everything you need!</p>\r\n<p><strong>All Live Football Channels:</strong>&nbsp;Catch every thrilling moment of the Champions League, La Liga, Premier League, and Serie A live on Netsky TV. Never miss a match with real-time streaming of all your favorite teams and leagues.</p>\r\n<p><strong>Movies, Coming Soon:</strong>&nbsp;Stay tuned for the latest blockbuster movies, coming soon to Netsky TV. From action-packed adventures to heartwarming dramas, there\\\'s something for everyone.</p>\r\n<p>Download the Netsky TV App now and elevate your entertainment experience. Your favorite games and movies are just a tap away!</p>\r\n<p>&nbsp;</p>', '2 (1).jpg', 'hls', 'https://cdn.klowdtv.net/803B48A/n1.klowdtv.net/live1/cine_720p/playlist.m3u8', NULL, NULL, '', '', '', 1),
(7, 4, 'Paid', 'Netsky TV', 'netsky-tv', '<p><strong>Download the Netsky TV App Today!&nbsp;(on Play Store)</strong></p>\r\n<p>Get ready to experience the ultimate entertainment hub with Netsky TV. Whether you\\\'re a die-hard football fan or a movie enthusiast, Netsky TV has everything you need!</p>\r\n<p><strong>All Live Football Channels:</strong>&nbsp;Catch every thrilling moment of the Champions League, La Liga, Premier League, and Serie A live on Netsky TV. Never miss a match with real-time streaming of all your favorite teams and leagues.</p>\r\n<p><strong>Movies, Coming Soon:</strong>&nbsp;Stay tuned for the latest blockbuster movies, coming soon to Netsky TV. From action-packed adventures to heartwarming dramas, there\\\'s something for everyone.</p>\r\n<p>Download the Netsky TV App now and elevate your entertainment experience. Your favorite games and movies are just a tap away!</p>\r\n<p>&nbsp;</p>', '5 (1).jpg', 'hls', 'https://shls-fight-sports-ak.akamaized.net/out/v1/ee7e6475b12e484bbfa5c31461ad4306/index.m3u8', NULL, NULL, '', '', '', 1),
(8, 4, 'Paid', 'Coming Soon', 'coming-soon', '<p><strong>Download the Netsky TV App Today!&nbsp;(on Play Store)</strong></p>\r\n<p>Get ready to experience the ultimate entertainment hub with Netsky TV. Whether you\\\'re a die-hard football fan or a movie enthusiast, Netsky TV has everything you need!</p>\r\n<p><strong>All Live Football Channels:</strong>&nbsp;Catch every thrilling moment of the Champions League, La Liga, Premier League, and Serie A live on Netsky TV. Never miss a match with real-time streaming of all your favorite teams and leagues.</p>\r\n<p><strong>Movies, Coming Soon:</strong>&nbsp;Stay tuned for the latest blockbuster movies, coming soon to Netsky TV. From action-packed adventures to heartwarming dramas, there\\\'s something for everyone.</p>\r\n<p>Download the Netsky TV App now and elevate your entertainment experience. Your favorite games and movies are just a tap away!</p>\r\n<p>&nbsp;</p>', '3 (1).jpg', 'hls', 'https://shls-fight-sports-ak.akamaized.net/out/v1/ee7e6475b12e484bbfa5c31461ad4306/index.m3u8', NULL, NULL, '', '', '', 1),
(10, 4, 'Paid', 'Coming Soon', 'coming-soon', '<p><strong>Download the Netsky TV App Today!&nbsp;(on Play Store)</strong></p>\r\n<p>Get ready to experience the ultimate entertainment hub with Netsky TV. Whether you\\\'re a die-hard football fan or a movie enthusiast, Netsky TV has everything you need!</p>\r\n<p><strong>All Live Football Channels:</strong>&nbsp;Catch every thrilling moment of the Champions League, La Liga, Premier League, and Serie A live on Netsky TV. Never miss a match with real-time streaming of all your favorite teams and leagues.</p>\r\n<p><strong>Movies, Coming Soon:</strong>&nbsp;Stay tuned for the latest blockbuster movies, coming soon to Netsky TV. From action-packed adventures to heartwarming dramas, there\\\'s something for everyone.</p>\r\n<p>Download the Netsky TV App now and elevate your entertainment experience. Your favorite games and movies are just a tap away!</p>\r\n<p>&nbsp;</p>', '1.jpg', 'hls', 'https://shls-fight-sports-ak.akamaized.net/out/v1/ee7e6475b12e484bbfa5c31461ad4306/index.m3u8', NULL, NULL, '', '', '', 1),
(11, 4, 'Free', 'Coming Soon', 'coming-soon', '<p><strong>Download the Netsky TV App Today!&nbsp;(on Play Store)</strong></p>\r\n<p>Get ready to experience the ultimate entertainment hub with Netsky TV. Whether you\\\'re a die-hard football fan or a movie enthusiast, Netsky TV has everything you need!</p>\r\n<p><strong>All Live Football Channels:</strong>&nbsp;Catch every thrilling moment of the Champions League, La Liga, Premier League, and Serie A live on Netsky TV. Never miss a match with real-time streaming of all your favorite teams and leagues.</p>\r\n<p><strong>Movies, Coming Soon:</strong>&nbsp;Stay tuned for the latest blockbuster movies, coming soon to Netsky TV. From action-packed adventures to heartwarming dramas, there\\\'s something for everyone.</p>\r\n<p>Download the Netsky TV App now and elevate your entertainment experience. Your favorite games and movies are just a tap away!</p>\r\n<p>&nbsp;</p>', '3.jpg', 'hls', 'https://shls-fight-sports-ak.akamaized.net/out/v1/ee7e6475b12e484bbfa5c31461ad4306/index.m3u8', NULL, NULL, '', '', '', 1),
(13, 4, 'Free', 'Coming Soon', 'coming-soon', '<p><strong>Download the Netsky TV App Today!&nbsp;(on Play Store)</strong></p>\r\n<p>Get ready to experience the ultimate entertainment hub with Netsky TV. Whether you\\\'re a die-hard football fan or a movie enthusiast, Netsky TV has everything you need!</p>\r\n<p><strong>All Live Football Channels:</strong>&nbsp;Catch every thrilling moment of the Champions League, La Liga, Premier League, and Serie A live on Netsky TV. Never miss a match with real-time streaming of all your favorite teams and leagues.</p>\r\n<p><strong>Movies, Coming Soon:</strong>&nbsp;Stay tuned for the latest blockbuster movies, coming soon to Netsky TV. From action-packed adventures to heartwarming dramas, there\\\'s something for everyone.</p>\r\n<p>Download the Netsky TV App now and elevate your entertainment experience. Your favorite games and movies are just a tap away!</p>\r\n<p>&nbsp;</p>', '5.jpg', 'hls', 'https://cdn.klowdtv.net/803B48A/n1.klowdtv.net/live1/cine_720p/playlist.m3u8', NULL, NULL, '', '', '', 1),
(14, 4, 'Free', 'Coming Soon', 'coming-soon', '<p>&nbsp;</p>\r\n<p><strong>Download the Netsky TV App Today!&nbsp;(on Play Store)</strong></p>\r\n<p>Get ready to experience the ultimate entertainment hub with Netsky TV. Whether you\\\'re a die-hard football fan or a movie enthusiast, Netsky TV has everything you need!</p>\r\n<p><strong>All Live Football Channels:</strong>&nbsp;Catch every thrilling moment of the Champions League, La Liga, Premier League, and Serie A live on Netsky TV. Never miss a match with real-time streaming of all your favorite teams and leagues.</p>\r\n<p><strong>Movies, Coming Soon:</strong>&nbsp;Stay tuned for the latest blockbuster movies, coming soon to Netsky TV. From action-packed adventures to heartwarming dramas, there\\\'s something for everyone.</p>\r\n<p>Download the Netsky TV App now and elevate your entertainment experience. Your favorite games and movies are just a tap away!</p>\r\n<p>&nbsp;</p>', '2.jpg', 'hls', 'http://cf.xto8k.me/live/3a46df1f02b0/fffa7ad78d/7236.m3u8', NULL, NULL, '', '', '', 1),
(15, 4, 'Free', 'Coming Soon', 'coming-soon', '<p><strong>Download the Netsky TV App Today!&nbsp;(on Play Store)</strong></p>\r\n<p>Get ready to experience the ultimate entertainment hub with Netsky TV. Whether you\\\'re a die-hard football fan or a movie enthusiast, Netsky TV has everything you need!</p>\r\n<p><strong>All Live Football Channels:</strong>&nbsp;Catch every thrilling moment of the Champions League, La Liga, Premier League, and Serie A live on Netsky TV. Never miss a match with real-time streaming of all your favorite teams and leagues.</p>\r\n<p><strong>Movies, Coming Soon:</strong>&nbsp;Stay tuned for the latest blockbuster movies, coming soon to Netsky TV. From action-packed adventures to heartwarming dramas, there\\\'s something for everyone.</p>\r\n<p>Download the Netsky TV App now and elevate your entertainment experience. Your favorite games and movies are just a tap away!</p>\r\n<p>&nbsp;</p>', '4 (1).jpg', 'hls', 'https://cdn.klowdtv.net/803B48A/n1.klowdtv.net/live1/cine_720p/playlist.m3u8', NULL, NULL, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `channel_category`
--

CREATE TABLE `channel_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `channel_category`
--

INSERT INTO `channel_category` (`id`, `category_name`, `category_slug`, `status`) VALUES
(1, 'Entertainment', 'entertainment', 0),
(2, 'News', 'news', 0),
(3, 'Music', 'music', 0),
(4, 'Sports', 'sports', 1),
(5, 'Lifestyle', 'lifestyle', 0);

-- --------------------------------------------------------

--
-- Table structure for table `channel_manages`
--

CREATE TABLE `channel_manages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_supports`
--

CREATE TABLE `contact_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_access` varchar(255) NOT NULL DEFAULT 'Paid',
  `episode_series_id` int(11) NOT NULL,
  `episode_season_id` int(11) NOT NULL,
  `video_title` text NOT NULL,
  `release_date` int(11) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `video_description` text DEFAULT NULL,
  `video_slug` varchar(200) DEFAULT NULL,
  `video_image` varchar(200) DEFAULT NULL,
  `video_type` varchar(255) DEFAULT NULL,
  `video_quality` int(11) DEFAULT NULL,
  `video_url` longtext DEFAULT NULL,
  `video_url_480` longtext DEFAULT NULL,
  `video_url_720` longtext DEFAULT NULL,
  `video_url_1080` longtext DEFAULT NULL,
  `download_enable` int(11) DEFAULT NULL,
  `download_url` varchar(500) DEFAULT NULL,
  `subtitle_on_off` int(11) DEFAULT NULL,
  `subtitle_language1` varchar(255) DEFAULT NULL,
  `subtitle_url1` varchar(500) DEFAULT NULL,
  `subtitle_language2` varchar(255) DEFAULT NULL,
  `subtitle_url2` varchar(255) DEFAULT NULL,
  `subtitle_language3` varchar(255) DEFAULT NULL,
  `subtitle_url3` varchar(255) DEFAULT NULL,
  `imdb_id` varchar(255) DEFAULT NULL,
  `imdb_rating` varchar(255) DEFAULT NULL,
  `imdb_votes` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(500) DEFAULT NULL,
  `seo_keyword` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `video_access`, `episode_series_id`, `episode_season_id`, `video_title`, `release_date`, `duration`, `video_description`, `video_slug`, `video_image`, `video_type`, `video_quality`, `video_url`, `video_url_480`, `video_url_720`, `video_url_1080`, `download_enable`, `download_url`, `subtitle_on_off`, `subtitle_language1`, `subtitle_url1`, `subtitle_language2`, `subtitle_url2`, `subtitle_language3`, `subtitle_url3`, `imdb_id`, `imdb_rating`, `imdb_votes`, `seo_title`, `seo_description`, `seo_keyword`, `status`, `created_at`, `updated_at`) VALUES
(36, 'Paid', 2, 2, 'American Pie Presents - Girls Rules 2020', 1609401600, '1h 35m 31s', '<p><span class=\\\"style-scope yt-formatted-string\\\" dir=\\\"auto\\\"> &bull; </span><span class=\\\"style-scope yt-formatted-string\\\" dir=\\\"auto\\\">And the demise of John Gotti continues. With a sneak peek into what to expect from season 5. </span></p>\r\n<p>&nbsp;</p>\r\n<p><span class=\\\"style-scope yt-formatted-string\\\" dir=\\\"auto\\\">Join the \\\"Associates and Soldiers\\\" on my Webite for AD FREE, EARLY, &amp; exclusive content: <a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" dir=\\\"auto\\\" spellcheck=\\\"false\\\" href=\\\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbWNwQ2hTT3RQMXRIQXdWX1oxZzkxRVZVMHpHd3xBQ3Jtc0trdzQ4Zjh5NEdpeXZVWGJFSmFrU3hIaG9oRGUyRzZLMGRjNlZ3Um5JTWNvamZrWkJldzlZdDdLU3d2VFU1QThOdXNXNGxIWl8zcHFnNnJmakhXSVFCOGJqb0tud2JBZ1FlZk1EN3BOMXhiZ0M0WXdzcw&amp;q=https%3A%2F%2Fsammythebull.com%2Fjoin-the-gravano-family%2F&amp;v=a_SSJ3tlQk0\\\" target=\\\"_blank\\\" rel=\\\"nofollow\\\">https://sammythebull.com/join-the-gra...</a> </span></p>\r\n<p><span class=\\\"style-scope yt-formatted-string\\\" dir=\\\"auto\\\"><span class=\\\"style-scope yt-formatted-string\\\" dir=\\\"auto\\\">Sammy \\\"The Bull\\\" Merchandise: </span><a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" dir=\\\"auto\\\" spellcheck=\\\"false\\\" href=\\\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbjlsM3dTZWdhOHU1MXZVNFVrRGdtUnBFYnhtUXxBQ3Jtc0ttNGtUT2c1Y0FJb0sybTVuZFJ6cXFWNXNaWG8zZXp5ZkNxQmtIcm1pbDJ6VVVFanZXS1VhS2d2ZUhuNWd1c1Z2TzhzX05HLXI1LXNQNjZRTW5EX2ttU2hfbHQycDh6clRjb1FYaWVqVjBaZURocWhlNA&amp;q=https%3A%2F%2Fsammythebull.com%2Fshop%2F&amp;v=a_SSJ3tlQk0\\\" target=\\\"_blank\\\" rel=\\\"nofollow\\\">https://sammythebull.com/shop/</a> </span></p>\r\n<p><span class=\\\"style-scope yt-formatted-string\\\" dir=\\\"auto\\\"><span class=\\\"style-scope yt-formatted-string\\\" dir=\\\"auto\\\">Follow Sammy on Facebook: </span><a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" dir=\\\"auto\\\" spellcheck=\\\"false\\\" href=\\\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbnpSLUYwank3aFVGa0JIVU1mTUdLWmk3RHItZ3xBQ3Jtc0tsbE9ZSDlhbU1yblBJUlZESlBkNlZQWVJpRHdBRVVFUzZ3blF5SGpXSm5nbjJmUmRqQkxuUjFKVVFFcUs4Nm5zd0cydHJfOVNBdU0yVjRBY1ppZDZUd083YzRsVHl6X2s1MUlubkZuR2UyREZvUWZmZw&amp;q=https%3A%2F%2Fwww.facebook.com%2Fsalvatore.gravano.thebull&amp;v=a_SSJ3tlQk0\\\" target=\\\"_blank\\\" rel=\\\"nofollow\\\">https://www.facebook.com/salvatore.gr...</a></span></p>\r\n<p><span class=\\\"style-scope yt-formatted-string\\\" dir=\\\"auto\\\"><span class=\\\"style-scope yt-formatted-string\\\" dir=\\\"auto\\\"> Follow Sammy on Instagram: </span><a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" dir=\\\"auto\\\" spellcheck=\\\"false\\\" href=\\\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbXp4YkNuT0ZtbS15WHU0UTRtWEpsS245blR0d3xBQ3Jtc0ttMVZWamZ3a2R2QUxoQzY0bmpvbzJkUG5pb0UwZmd3TU1rTDJ2WGpDeGpPaVhGOFFqSmNNWUtVTEpoNHczM20wU1JsWWx3VjBVVzE5Z0t1NzBWTjNXSzJLNDdQY0lKMlNmdGZNcGxZcW1xaWhWVjNSOA&amp;q=http%3A%2F%2Finstagram.com%2Fofficialsammythebull&amp;v=a_SSJ3tlQk0\\\" target=\\\"_blank\\\" rel=\\\"nofollow\\\">http://instagram.com/officialsammythe...</a></span></p>\r\n<p><span class=\\\"style-scope yt-formatted-string\\\" dir=\\\"auto\\\"><span class=\\\"style-scope yt-formatted-string\\\" dir=\\\"auto\\\"> Follow Sammy on Twitter: </span><a class=\\\"yt-simple-endpoint style-scope yt-formatted-string\\\" dir=\\\"auto\\\" spellcheck=\\\"false\\\" href=\\\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbU8xUTdYU0YyalF6QU1kdFpEWmJSMG51LUk2Z3xBQ3Jtc0trWkdkaUd2T3BxcFlWR1dNM0x1Y1BHMDYta0ZSdTFjTHFXbzA2VDM1QnlEdlpoTFRUbDJlMnE0ZGUzNzU5Z3RDSms5WWxkVVJ3STF1cWV6WTl3amFzZVNOU21Wa21YTnNqa09QZWR6NXo1WHRENUVhQQ&amp;q=https%3A%2F%2Ftwitter.com%2FGravanoTheBull&amp;v=a_SSJ3tlQk0\\\" target=\\\"_blank\\\" rel=\\\"nofollow\\\">https://twitter.com/GravanoTheBull</a></span></p>', 'american-pie-presents-girls-rules-2020', 'American Pie Presents bIWaeYsMTxxKX5qOfz.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/american-pie-comedy/o/American%20Pie%20Presents%20-%20Girls%20Rules%202020%20-%201080p%20HD%20(English)%2FAmerican%20Pie%20Presents%20Girls%20Rules%202020%20-%201080p%20WEBRip%5BYTS.MX%5D.mp4?alt=media&token=0f1e8668-1567-4dc4-ad0e-65557167d376', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-08-04 16:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'asdf', 'sa sad f', 1, '2024-11-01 17:56:32', '2024-11-01 17:56:32'),
(3, 'dSZ', 'sd', 1, '2024-11-02 21:28:12', '2024-11-02 21:28:12'),
(4, 'gf', 'gf', 1, '2024-11-02 21:28:16', '2024-11-02 21:28:16'),
(5, 'hg', 'gf', 1, '2024-11-02 21:28:19', '2024-11-02 21:28:19'),
(6, 'jhg', 'gfhgf', 1, '2024-11-02 21:28:23', '2024-11-02 21:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `genre_name` varchar(255) DEFAULT NULL,
  `genre_slug` varchar(255) NOT NULL,
  `genres_image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre_name`, `genre_slug`, `genres_image`, `status`) VALUES
(1, 'Drama', 'drama', 'gh4cZbhZxyTbgxQPxD0dOudNPTn.jpg', 1),
(2, 'Action', 'action', 'ninja assassin bXQLnGa7R.jpg', 1),
(3, 'Comedy', 'comedy', 'American Pie Presents bIWaeYsMTxxKX5qOfz.jpg', 1),
(5, 'Thriller', 'thriller', 'Blood and Bone hqN3GlGt0fQtcY2OhkZq.jpg', 1),
(8, 'Romance', 'romance', 'Titanic (1997) 234567.jpg', 1),
(9, 'Adventure', 'adventure', 'keIxh0wPr2Ymj0Btjh4gW7JJ89e (1).jpg', 1),
(11, 'Fantasy', 'fantasy', 'Now iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg', 1),
(12, 'Crime', 'crime', NULL, 0),
(13, 'Kids', 'kids', 'Super Mario Bros (2023)VvA6mA2B5ggV6.jpg', 0),
(14, 'Sci-Fi', 'sci-fi', 'kwB7d51AIcyzPOBOHLCEZJkmPhQ.jpg', 1),
(15, 'Horror', 'horror', 'Prey (2022) 545red.jpg', 1),
(16, 'All Movies', 'all-movies', '2 Fast 2 Furious (2003)ertytre.jpg', 1),
(17, 'What\\\'s New', 'whats-new', 'Joy Ride .jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_section`
--

CREATE TABLE `home_section` (
  `id` int(11) NOT NULL,
  `section1_latest_movie` varchar(500) DEFAULT NULL,
  `section_live_now` varchar(500) DEFAULT NULL,
  `section2_latest_series` varchar(500) DEFAULT NULL,
  `section3_popular_movie` varchar(500) DEFAULT NULL,
  `section3_popular_series` varchar(500) DEFAULT NULL,
  `section3_tranding_movie` varchar(500) DEFAULT NULL,
  `section3_title` varchar(500) DEFAULT NULL,
  `section3_type` varchar(255) NOT NULL,
  `section3_lang` int(11) DEFAULT NULL,
  `section4_title` varchar(255) DEFAULT NULL,
  `section4_type` varchar(255) NOT NULL,
  `section4_lang` int(11) DEFAULT NULL,
  `section5_title` varchar(255) DEFAULT NULL,
  `section5_type` varchar(255) NOT NULL,
  `section5_lang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `home_section`
--

INSERT INTO `home_section` (`id`, `section1_latest_movie`, `section_live_now`, `section2_latest_series`, `section3_popular_movie`, `section3_popular_series`, `section3_tranding_movie`, `section3_title`, `section3_type`, `section3_lang`, `section4_title`, `section4_type`, `section4_lang`, `section5_title`, `section5_type`, `section5_lang`) VALUES
(1, '16,10,9,7,5,3', '15,13,10,1', '3,2', '19,15,14,11,9,6', '4,3', '72,2', 'Popular Series', 'Series', 2, 'Menu Placeholder 1', 'Movie', NULL, 'Menu Placeholder 2', 'Movie', 2);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `language_name` varchar(60) NOT NULL,
  `language_slug` varchar(255) NOT NULL,
  `language_image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language_name`, `language_slug`, `language_image`, `status`) VALUES
(2, 'English', 'english', 'eng_cat.png', 1),
(3, 'hebrew', 'hebrew', NULL, 1),
(4, 'Spanish', 'spanish', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `live_broadcast_manages`
--

CREATE TABLE `live_broadcast_manages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rtmp_server` varchar(255) DEFAULT NULL,
  `stream_key` varchar(255) DEFAULT NULL,
  `stream_url` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `live_broadcast_manages`
--

INSERT INTO `live_broadcast_manages` (`id`, `user_id`, `title`, `description`, `image`, `rtmp_server`, `stream_key`, `stream_url`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'sad', 'sad', 'upload/source/1730706707_images (3).jpeg', '194.233.65.161:1935/show', 'mialive', 'http://194.233.65.161:8080/hls/mialive.m3u8', 1, '2024-11-03 16:34:20', '2024-11-03 23:51:47'),
(4, 1, 'omor', 'omor vai', 'upload/source/1730794197_images (1).jpeg', '62.146.170.115:1935/show', 'omor', 'http://62.146.170.115:8080/hls/omor.m3u8', 1, '2024-11-04 03:57:28', '2024-11-05 00:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_11_01_225811_create_faqs_table', 1),
(4, '2024_11_02_000204_create_contact_supports_table', 2),
(5, '2024_11_02_001050_create_user_feed_backs_table', 3),
(6, '2024_11_02_030018_create_recent_watches_table', 4),
(7, '2024_11_02_221750_create_youtube_tiktok_manages_table', 5),
(9, '2024_11_03_211234_create_live_broadcast_manages_table', 6),
(10, '2024_11_05_214244_create_user_broadcasts_table', 7),
(11, '2024_11_05_215107_create_user_broadcast_comments_table', 8),
(12, '2024_11_07_015459_create_upcoming_movie_series_table', 9),
(13, '2024_11_12_203644_create_channel_manages_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `movie_series_favorites`
--

CREATE TABLE `movie_series_favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `movie_videos_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_favorite` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_series_favorites`
--

INSERT INTO `movie_series_favorites` (`id`, `user_id`, `movie_videos_id`, `is_favorite`, `created_at`, `updated_at`) VALUES
(1, 472, 4, 1, '2024-11-01 20:33:00', '2024-11-01 20:33:00'),
(2, 472, 3, 0, '2024-11-01 20:34:22', '2024-11-01 20:34:35'),
(3, 472, 2, 1, '2024-11-01 20:35:37', '2024-11-01 20:35:37'),
(4, 473, NULL, 1, '2024-11-05 21:03:40', '2024-11-05 21:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `movie_videos`
--

CREATE TABLE `movie_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_access` varchar(255) NOT NULL DEFAULT 'Paid',
  `movie_lang_id` int(11) NOT NULL,
  `movie_genre_id` text NOT NULL,
  `video_title` text NOT NULL,
  `release_date` int(11) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `video_description` text DEFAULT NULL,
  `video_slug` varchar(200) DEFAULT NULL,
  `video_image_thumb` varchar(255) DEFAULT NULL,
  `video_image` varchar(200) DEFAULT NULL,
  `video_type` varchar(255) DEFAULT NULL,
  `video_quality` int(11) DEFAULT NULL,
  `video_url` longtext DEFAULT NULL,
  `video_url_480` varchar(255) DEFAULT NULL,
  `video_url_720` varchar(255) DEFAULT NULL,
  `video_url_1080` varchar(255) DEFAULT NULL,
  `download_enable` int(11) DEFAULT NULL,
  `download_url` varchar(500) DEFAULT NULL,
  `subtitle_on_off` int(11) DEFAULT NULL,
  `subtitle_language1` varchar(255) DEFAULT NULL,
  `subtitle_url1` varchar(500) DEFAULT NULL,
  `subtitle_language2` varchar(255) DEFAULT NULL,
  `subtitle_url2` varchar(255) DEFAULT NULL,
  `subtitle_language3` varchar(255) DEFAULT NULL,
  `subtitle_url3` varchar(255) DEFAULT NULL,
  `imdb_id` varchar(255) DEFAULT NULL,
  `imdb_rating` varchar(255) DEFAULT NULL,
  `imdb_votes` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(500) DEFAULT NULL,
  `seo_keyword` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_videos`
--

INSERT INTO `movie_videos` (`id`, `video_access`, `movie_lang_id`, `movie_genre_id`, `video_title`, `release_date`, `duration`, `video_description`, `video_slug`, `video_image_thumb`, `video_image`, `video_type`, `video_quality`, `video_url`, `video_url_480`, `video_url_720`, `video_url_1080`, `download_enable`, `download_url`, `subtitle_on_off`, `subtitle_language1`, `subtitle_url1`, `subtitle_language2`, `subtitle_url2`, `subtitle_language3`, `subtitle_url3`, `imdb_id`, `imdb_rating`, `imdb_votes`, `seo_title`, `seo_description`, `seo_keyword`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Free', 2, '2,9,14,16', 'Black Widow', 1690959600, '2h 13m 46s', '<h2 class=\\\"11\\\">Black Widow&nbsp;<span class=\\\"tag release_date\\\">(2021)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Natasha Romanoff, also known as Black Widow, confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises. Pursued by a force that will stop at nothing to bring her down, Natasha must deal with her history as a spy and the broken relationships left in her wake long before she became an Avenger.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Scarlett Johansson, Florence Pugh, Rachel Weisz, David Harbour, Olga Kurylenko</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Adventure, Sci-Fi</p>', 'black-widow', 'kwB7d51AIcyzPOBOHLCEZJkmPhQ.jpg', 'keIxh0wPr2Ymj0Btjh4gW7JJ89e (1).jpg', 'URL', 1, 'https://firebasestorage.googleapis.com/v0/b/latest-movies-2023/o/Black%20Widow%202021%201080p%20%20English%20Audio%2FBlack%20Widow%202021%201080p%20BluRay%20x264.AAC5.1-%5BYTS.MX%5D.mp4?alt=media&token=904449cd-d296-4547-ac91-09419d6ce615', 'Marvels Spidey and his Amazing Friends S1 Full Episodes! - 90 Minute Compilation - @disneyjunior_4.mp4', 'Marvels Spidey and his Amazing Friends S1 Full Episodes! - 90 Minute Compilation - @disneyjunior_3.mp4', 'Marvels Spidey and his Amazing Friends S1 Full Episodes! - 90 Minute Compilation - @disneyjunior_2.mp4', 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:47:48'),
(3, 'Free', 4, '2,14,16', 'The One', 1004688000, '1h 27m 25s', '<h2 class=\\\"7\\\"><span class=\\\"tag release_date\\\">Jet Li - The One (2001)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">A sheriff\\\'s deputy fights an alternate-universe version of himself who grows stronger with each alternate self he kills.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Sci-Fi Movies,&nbsp;Martial arts Movies</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Jet Li, Jason Statham, Carla Gugino, Delroy Lindo</p>', 'the-one', 'The One kEPpUPALo.jpg', 'The One hrWirt0Rk17uE.jpg', 'URL', 0, 'https://cdn.muse.ai/u/e8qSVEF/858dd709d13bd9345c3b23831f51d1b4385aa5f517b12a911d9b65e31f8ea9ea/videos/video.mp4', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:42:13'),
(5, 'Free', 2, '2,16,14,5', 'Ninja Assassin', 1254207600, '1h 38m 41s', '<h2 class=\\\"14\\\">Ninja Assassin&nbsp;<span class=\\\"tag release_date\\\">(2009)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Ninja Assassin follows Raizo, one of the deadliest assassins in the world. Taken from the streets as a child, he was transformed into a trained killer by the Ozunu Clan, a secret society whose very existence is considered a myth. But haunted by the merciless execution of his friend by the Clan, Raizo breaks free from them and vanishes. Now he waits, preparing to exact his revenge.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Thriller, Sci-Fi Movies,&nbsp;Martial arts Movies</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Rain, Naomie Harris, Sung Kang, Randall Duk Kim, Rick Yune</p>', 'ninja-assassin', 'ninja assassin bXQLnGa7R.jpg', '54B1mcdhZ0fbZKSKj1Gh7OeePu9.jpg', 'URL', 0, 'https://c069.short.gy/Ninja/asssesin', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 06:11:42'),
(6, 'Paid', 4, '2,14,5,16', 'The Matrix', 1658300400, '2h 16m 17s', '<h2 class=\\\"10\\\"><span class=\\\"tag release_date\\\">The Matrix (1999)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Set in the 22nd century, The Matrix tells the story of a computer hacker who joins a group of underground insurgents fighting the vast and powerful computers who now rule the earth.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Science Fiction</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss,&nbsp;Hugo Weaving</p>', 'the-matrix', 'the matrix wO6ZOHFeiu6MF5u.jpg', 'The Matrix f89U3ADr1oiB1s9GkdPOEpXUk5H.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/the-matrix/o/The%20Matrix%20(1999)%201080p%20HD%20(SPANISH-ENGLISH)%2FThe%20Matrix%20(1999)%201080p%20Dual-Latino-Cinenetskytv.Link.mp4?alt=media&token=200f806f-89ef-46dc-8ea7-fee08baa12ef&_gl=1*cf90*_ga*NTU1ODYzODIuMTY5ODIwMjQyNQ..*_ga_CW55HF8NVT*MTY5ODIwMjQyNC4xLjEuMTY5ODIwMzg4My41MS4wLjA.', NULL, NULL, NULL, 0, NULL, 1, 'English', NULL, NULL, NULL, 'Spanish', NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:07:15'),
(7, 'Paid', 4, '2,11,9,16', 'Mortal Kombat', 1619161200, '1h 50m', '<h2 class=\\\"13\\\">Mortal Kombat&nbsp;<span class=\\\"tag release_date\\\">(2021)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Washed-up MMA fighter Cole Young, unaware of his heritage and hunted by Emperor Shang Tsung\\\'s best warrior, Sub-Zero, seeks out and trains with Earth\\\'s greatest champions as he prepares to stand against the enemies of Outworld in a high-stakes battle for the universe.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Fantasy, Adventure</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Mike Foenander, Matilda Kimber, Chin Han, Elissa Cadwell, Mehcad Brooks&nbsp;</p>', 'mortal-kombat', 'mortal kombat ijvC2.jpg', 'mortal kombat 9yBVqNruk6Ykrwc32qrK2TIE5xw.jpg', 'URL', 1, 'https://firebasestorage.googleapis.com/v0/b/mortal-kombat/o/Mortal%20Kombat%20(2021)%201080p%20HD%20(Spanish-English)%2FMortal%20Kombat%20(2021)%201080P%20Dual-Lat-Cinenetskytv.Link.mp4?alt=media&token=28afbcb5-e6b4-4b04-a994-abe5bfb607b6', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, 'Spanish', NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:06:32'),
(9, 'Paid', 4, '2,16,1,14', 'Ip Man 4', 1576828800, '1h 45m 14s', '<h2 class=\\\"20\\\">Ip Man 4 The Finale&nbsp;<span class=\\\"tag release_date\\\">(2019)</span></h2>\r\n<p>Following the death of his wife, Ip Man travels to San Francisco to ease tensions between the local kung fu masters and his star student, Bruce Lee, while searching for a better future for his son.</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Drama, History</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Language:&nbsp;</strong></span>Spanish</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span> Donnie Yen, Vanness Wu, Scott Adkins, Danny Chan Kwok-Kwan, Wu Yue</p>', 'ip-man-4', 'Ip-man The Finale n9qXBIuo.jpg', 'Ip-man The Finale soZ72rY0h.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/ip-man-movies/o/Ip%20Man%20-%20El%20Final%20(Spanish)%2FIp%20man%204%20The%20Finale%202019%201080p%20dual%20lat%20cinecalidad.is.mp4?alt=media&token=641284e1-4094-437e-a071-37431a39b345', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:04:26'),
(10, 'Free', 2, '3,11,8,16', 'Girls\\\' Rules', 1601967600, '1h 35m 25s', '<h2 class=\\\"39\\\">American Pie Presents: Girls\\\' Rules&nbsp;<span class=\\\"tag release_date\\\">(2020)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">It\\\'s Senior year at East Great Falls. Annie, Kayla, Michelle, and Stephanie decide to harness their girl power and band together to get what they want their last year of high school.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span><strong>&nbsp;</strong>Madison Pettis, Lizze Broadway, Darren Barnet, Piper Curda, Natasha Behnam</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Comedy</p>\r\n<p>&nbsp;</p>', 'girls-rules', 'American Pie Presents bIWaeYsMTxxKX5qOfz (1).jpg', 'American Pie Presents m5LcCczbCexioZze.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/american-pie-comedy/o/American%20Pie%20Presents%20-%20Girls%20Rules%202020%20-%201080p%20HD%20(English)%2FAmerican%20Pie%20Presents%20Girls%20Rules%202020%20-%201080p%20WEBRip%5BYTS.MX%5D.mp4?alt=media&token=0f1e8668-1567-4dc4-ad0e-65557167d376', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'American Pie Presents', 'American Pie Presents: Girls\\\' Rules (2020)', 'American Pie Presents: Girls\\\' Rules (2020)', 1, NULL, '2023-10-25 04:03:11'),
(11, 'Free', 2, '2,16,5', 'Ong-Bak', 1066374000, '1h 45m 6s', '<h2 class=\\\"7\\\"><span class=\\\"tag release_date\\\">Ong-Bak - The Thai Warrior (2003)&nbsp;</span></h2>\r\n<p><span class=\\\"tag release_date\\\">When the head of a statue sacred to a village is stolen, a young martial artist goes to the big city and finds himself taking on the underworld to retrieve it.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Thriller, Crime</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Tony Jaa, Petchtai Wongkamlao, Pumwaree Yodkamol, Suchao Pongwilai, Chumphorn Thepphithak</p>\r\n<p>&nbsp;</p>', 'ong-bak', 'Ong Bak- Muay Thai Warrior 678.jpg', 'Ong Bak- Muay Thai zB2HKvboAHRN0.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/the-best-action-movies/o/Ong-Bak%20The%20Thai%20Warrior%20(2003)%201080p%20HD%20BluRay%20(English)%2FOng-Bak%20The%20Thai%20Warrior%202003.1080p.BluRay.x264.AAC5.1-%5BYTS.MX%5D.mp4?alt=media&token=c47c3de8-1778-4cdb-83ff-c9fe10532959', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:02:38'),
(12, 'Free', 2, '9,1,11,8,16', 'Meet Joe Black', 910857600, '3h 33s', '<h2 class=\\\"14\\\">Meet Joe Black&nbsp;<span class=\\\"tag release_date\\\">(1998)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">When the grim reaper comes to collect the soul of mega mogul Bill Parrish, he arrives with a proposition: Host him for a \\\"vacation\\\" among the living in trade for a few more days of existence. Parrish agrees, and using the pseudonym Joe Black, Death begins taking part in Parrish\\\'s daily agenda and falls in love with the man\\\'s daughter.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Fantasy, Drama, Romance</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Brad Pitt, Anthony Hopkins, Claire Forlani, Jake Weber, Marcia Gay Harden</p>', 'meet-joe-black', 'Meet Joe Black mL5Anak61.jpg', 'Meet Joe Black VegAtwwnuzvogJ.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/drama-romance-fantasy/o/Meet%20Joe%20Black%20(1998)%201080p%20HD%20English%2FMeet%20Joe%20Black%201998%201080p%20BrRip.x264.YIFY.mp4?alt=media&token=291865c3-9a96-421a-974f-f5db920107cb', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:01:32'),
(13, 'Free', 2, '15,14,16', 'Scream', 1642147200, '1h 54m 18s', '<h2 class=\\\"6\\\">Scream&nbsp;<span class=\\\"tag release_date\\\">(2022)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Twenty-five years after a streak of brutal murders shocked the quiet town of Woodsboro, a new killer has donned the Ghostface mask and begins targeting a group of teenagers to resurrect secrets from the town&rsquo;s deadly past.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Thriller, Horror, Mystery</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Mikey Madison, Jenna Ortega, Neve Campbell, Melissa Barrera, Mason Gooding</p>', 'scream', 'Scream (2022) Perfil wQ2IBJ5w.jpg', 'Scream (2022) RIB7XnFz5ZC.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/movies-horror/o/Scream%20(2022)%201080p%20HD%20BluRay%20(English)%2FScream.2022.1080p.BluRay.x264.AAC5.1-%5BYTS.MX%5D.mp4?alt=media&token=52f9b68a-eb8f-4726-8a9f-56ce63d9e4db', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:48:44'),
(14, 'Free', 2, '3,1,11,16', 'We Are The Night', 1289462400, '1h 39m 43s', '<h2 class=\\\"16\\\">We Are The Night&nbsp;<span class=\\\"tag release_date\\\">(2010)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">One night, 18 year old Lena is bitten by Louise, leader of a female vampire trio that are as deadly as they are beautiful. Her newfound vampiric lifestyle is a blessing and a curse at the same time. At first, she enjoys the limitless freedom, the luxury, the parties.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Fantasy, Drama, Horror, Romance</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Karoline Herfurth, Nina Hoss, Jennifer Ulrich, Anna Fischer, Max Riemelt</p>', 'we-are-the-night', 'We Are The Night MaxqI.jpg', 'We Are The Night jUrgOa.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/series-and-comedy/o/We%20Are%20The%20Night%20(2010)%201080p%20HD%20BluRay%20(Original%20Audio)%2FWe.Are.The.Night.2010.1080p.BluRay.x264.AAC5.1-%5BYTS.MX%5D.mp4?alt=media&token=8bd7af7a-bb62-46d0-8adf-eed921ca9cd8', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, '', '', '', 1, NULL, '2023-10-25 04:00:37'),
(15, 'Free', 2, '9,13,8,14,16', 'Home Alone', 658742400, '1h 42m 54s', '<h2 class=\\\"10\\\">Home Alone&nbsp;<span class=\\\"tag release_date\\\">(1990)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Eight-year-old Kevin McCallister makes the most of the situation after his family unwittingly leaves him behind when they go on Christmas vacation.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Macaulay Culkin, Joe Pesci, Daniel Stern, Catherine O\\\'Hara, John Heard</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Comedy, Family</p>', 'home-alone', 'Home Alone (1990) 678.jpg', 'Home Alone (1990)28345.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:00:01'),
(16, 'Paid', 2, '2,1,14,16', 'The Bourne Identity', 1024038000, '1h 58m 27s', '<h2 class=\\\"19\\\">The Bourne Identity&nbsp;<span class=\\\"tag release_date\\\">(2002)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Wounded to the brink of death and suffering from amnesia, Jason Bourne is rescued at sea by a fisherman. With nothing to go on but a Swiss bank account number, he starts to reconstruct his life, but finds that many people he encounters want him dead.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Matt Damon, Franka Potente, Chris Cooper, Clive Owen</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Directed by:</strong></span>&nbsp;Robert Ludlum</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Drama,&nbsp;Mystery</p>', 'the-bourne-identity', 'The Bourne Identity (2002) Profile.jpg', 'The Bourne Identity (2002) 432.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/action-drama-movies/o/The%20Bourne%20Identity%20(2002)%202160p%204K%20BluRay%20(English)%2FThe%20Bourne%20Identity.2002.2160p.4K.BluRay.x265.10bit.AAC5.1-%5BYTS.MX%5D.mkv?alt=media&token=585a7cff-b377-49a1-9ca2-b90fc5dc7916', NULL, NULL, NULL, 0, NULL, 1, 'English', NULL, NULL, NULL, 'Spanish', NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:59:20'),
(17, 'Paid', 2, '2', 'Netsky TV', -57600, NULL, '<h2 class=\\\"19\\\">The Bourne Identity&nbsp;<span class=\\\"tag release_date\\\">(2002)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Wounded to the brink of death and suffering from amnesia, Jason Bourne is rescued at sea by a fisherman. With nothing to go on but a Swiss bank account number, he starts to reconstruct his life, but finds that many people he encounters want him dead.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Doug&nbsp;</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Directed by:</strong></span>&nbsp;Robert</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Doug&nbsp;</p>', 'netsky-tv', '1 (1).jpg', '1 (1).jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 1, NULL, NULL, NULL, NULL, 'Spanish', 'https://drive.google.com/file/d/1d-7K3hewT7yzDUWfhM8X9OclxyGSm9SD/view?usp=drive_link', NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-12 18:44:27'),
(19, 'Free', 2, '2,1,16', 'The Scorpion King', 1019199600, '1h 31m 22s', '<h2 class=\\\"17\\\">The Scorpion King&nbsp;<span class=\\\"tag release_date\\\">(2002)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">In ancient Egypt, peasant Mathayus is hired to exact revenge on the powerful Memnon and the sorceress Cassandra, who are ready to overtake Balthazar\\\'s village. Amid betrayals, thieves, abductions and more, Mathayus strives to bring justice to his complicated world.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Dwayne Johnson, Kelly Hu, Steven Brand, Michael Clarke Duncan</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Adventure, Fantasy</p>', 'the-scorpion-king', 'The Scorpion King 4Nt5GzBDeTLZIIpm.jpg', 'The Scorpion King UGWMXCtnZx4.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/the-rock-movies/o/The%20Rock%20-%20The%20Scorpion%20King%20(2002)%201080p%20HD%20BluRay%20(English)%2FThe%20Scorpion%20King%202002%201080p%20BluRay.x264.AAC5.1-%5BYTS.MX%5D.mp4?alt=media&token=094f643f-2c2f-49f6-818b-8799ee7d4344', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:58:17'),
(22, 'Paid', 4, '2,14,5,16', 'The Fate of the Furious', 1492153200, '2h 15m 57s', '<h2 class=\\\"23\\\">The Fate of the Furious 8&nbsp;<span class=\\\"tag release_date\\\">(2017)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">When a mysterious woman seduces Dom into the world of crime and a betrayal of those closest to him, the crew face trials that will test them as never before.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Vin Diesel, Jason Statham, Dwayne Johnson, Michelle Rodriguez, Tyrese Gibson</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Crime, Thriller</span></p>\r\n<p>&nbsp;</p>', 'the-fate-of-the-furious', 'The Fate of the Furious (2017) 1234.jpg', 'The Fate of the Furious (2017) 56789.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/fast-and-furious-movies/o/The%20Fate%20of%20the%20Furious%208%20(2017)%201080p%20HD%20BluRay%20(English)%2FRa%CC%81pidos%20y%20Furiosos%208%20(2017)%201080p%20HD%20BluRay%20(Spanish%20-%20English%20Audio)%2FRa%CC%81pidos%20y%20Furiosos%208%20(2017).1080p.dual-lat.cinecalidad.cat.mp4?alt=media&token=4bc5a53b-d0d1-4022-abc2-cda17c27ce51&_gl=1*h6ikus*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjAwNTc3LjU4LjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:39:18'),
(23, 'Free', 2, '9,16,13', 'The Karate Kid', 1276153200, '2h 12m 34s', '<h2 class=\\\"14\\\">The Karate Kid&nbsp;<span class=\\\"tag release_date\\\">(2010)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Twelve-year-old Dre Parker could have been the most popular kid in Detroit, but his mother\\\'s latest career move has landed him in China. Dre immediately falls for his classmate Mei Ying but the cultural differences make such a friendship impossible.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Jaden Smith, Jackie Chan, Taraji P. Henson, Wenwen Han, Yu Rongguang</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Adventure, Drama, Family</span></p>\r\n<p>&nbsp;</p>', 'the-karate-kid', 'The Karate Kid TZIA18tV.jpg', 'The Karate Kid (2010) 678234ty.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/movies-for-kids/o/The%20Karate%20Kid%20-%201080p%20HD%202010%20(English)%2FThe.Karate.Kid.2010.1080p.BrRip.x264.YIFY.mp4?alt=media&token=e70191ea-33ff-4e96-9868-2590a0c3e44a', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:57:23'),
(24, 'Free', 2, '2,1,5,16', 'Blood and Bone', 1252998000, '1h 33m 26s', '<h2 class=\\\"14\\\">Blood and Bone&nbsp;<span class=\\\"tag release_date\\\">(2009)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">In Los Angeles, an ex-con takes the underground fighting world by storm in his quest to fulfill a promise to a dead friend.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Michael Jai White, Julian Sands, Eamonn Walker, Michelle Belegrin, Dante Basco, Gina Carano</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Drama, Thriller</span></p>', 'blood-and-bone', 'Blood and Bone hqN3GlGt0fQtcY2OhkZq (1).jpg', 'Blood and Bone (2009) 56789.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/best-action-films/o/Blood%20and%20Bone%20(2009)%201080p%20HD%20BluRay%20(English)%2FBlood%20And%20Bone%202009%201080p%20BluRay-RARBG.mp4?alt=media&token=a9752bf9-2003-4176-963b-c2e632bced04&_gl=1*dkvi4f*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjAwMzUyLjQ3LjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:37:30'),
(25, 'Paid', 2, '2,14,5', 'Terminator 2', 678524400, NULL, '<h2 class=\\\"26\\\"><span class=\\\"tag release_date\\\">Terminator 2 - Judgment Day (1991)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Nearly 10 years have passed since Sarah Connor was targeted for termination by a cyborg from the future. Now her son, John, the future leader of the resistance, is the target for a newer, more deadly terminator. Once again, the resistance has managed to send a protector back to attempt to save John and his mother Sarah.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Arnold Schwarzenegger, Linda Hamilton, Edward Furlong</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Thriller, Sci-Fi Movies</span></p>\r\n<p>&nbsp;</p>', 'terminator-2', 'The Terminator 2 Judgment Day RhfjjurTqb.jpg', 'The Terminator 2 Judgment Day  gc44Hr9CCUDvaj.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-12 20:02:15'),
(26, 'Free', 2, '2,1,5', 'The Protector', 1123743600, '1h 50m 33s', '<h2 class=\\\"13\\\"><span class=\\\"tag release_date\\\">The Protector (2005)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">In Bangkok, the young Kham was raised by his father in the jungle with elephants as members of their family. When his old elephant and the baby Kern are stolen by criminals, Kham finds that the animals were sent to Sidney.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Tony Jaa, Petchtai Wongkamlao, Bongkoj Khongmalai</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Drama, Thriller,&nbsp;Martial arts Movie</span></p>', 'the-protector', 'The Protector (2005) Perfil jpej.jpg', 'The Protector (2005) bhv.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/martial-arts-movies/o/The%20Protector%20(2005)%201080p%20HD%20BluRay%20(English)%2FThe%20Protector%202005%201080p%20BluRay.x264-%5BYTS.AM%5D.mp4?alt=media&token=86765d9f-f690-4079-8296-0aca17d7cfe2', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-08-12 20:24:02'),
(27, 'Free', 4, '2,12', 'Parker', 1359100800, NULL, '<h2 class=\\\"6\\\">Parker&nbsp;<span class=\\\"tag release_date\\\">(2013)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">A thief with a unique code of professional ethics is double-crossed by his crew and left for dead. Assuming a new disguise and forming an unlikely alliance with a woman on the inside, he looks to hijack the score of the crew\\\'s latest heist.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Jason Statham, Jennifer Lopez, Nick Nolte</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Crime</span></p>', 'parker', 'Parker (2013) Profile.jpg', 'Parker (2013) 23sz.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-12 20:04:50'),
(28, 'Paid', 4, '2,9,5,16', '2 Fast 2 Furious', 1054796400, '2h 15m 57s', '<h2 class=\\\"16\\\">2 Fast 2 Furious&nbsp;<span class=\\\"tag release_date\\\">(2003)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">It\\\'s a major double-cross when former police officer Brian O\\\'Conner teams up with his ex-con buddy Roman Pearce to transport a shipment of \\\"dirty\\\" money for shady Miami-based import-export dealer Carter Verone. But the guys are actually working with undercover agent Monica Fuentes to bring Verone down.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Paul Walker, Tyrese Gibson, Eva Mendes, Cole Hauser</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Adventure, Thriller</span></p>', '2-fast-2-furious', '2 Fast 2 Furious (2003) Profile.jpg', '2 Fast 2 Furious (2003) rty.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/fast-and-furious-movies/o/2%20Fast%202%20Furious%20(2003)%201080p%20HD%20(Spanish%20-%20English%20Audio)%2FRa%CC%81pidos%20y%20Furiosos%202%20(2003).1080p.dual-lat.cinecalidad.cat.mp4?alt=media&token=79146db4-6b6a-402d-bae6-5fbe56976cf3&_gl=1*1txkobw*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5NTk2MDMzOS4xMjkuMS4xNjk1OTYyMDk3LjQuMC4w', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:55:33'),
(29, 'Free', 2, '13', 'Cocomelon', -57600, NULL, '<p>JJ and his pals sing and dance their way through fun adventures as they learn about letters, numbers, and more.</p>', 'cocomelon', 'Cocomelon (2020) 2345543.jpg', 'Cocomelon (2020)1234.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/cocomelo-kids/o/CoComelon%20Nursery%20Rhymes%20-%20Wheels%20on%20the%20Bus%20(English)%2FCoComelon%20Nursery%20Rhymes%20-%20Wheels%20on%20the%20Bus%20.mp4?alt=media&token=5778f1b9-566f-4e21-b69a-e79501986c06', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-13 18:39:32'),
(30, 'Paid', 4, '13', 'The Boss Baby', 1670313600, '1h 46m', '<h2 class=\\\"30\\\">The Boss Baby: Christmas Bonus&nbsp;<span class=\\\"tag release_date\\\">(2022)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Christmas Eve takes a twisty turn when the Boss Baby accidentally swaps places with one of Santa\\\'s elves and gets stranded at the North Pole.</span></p>', 'the-boss-baby', 'The Boss Baby- Christmas Bonus (2022) Profile.jpg', 'The Boss Baby- Christmas Bonus (2022) 345tyt.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/netsky-tv-kids/o/The%20Boss%20Baby%20-%20Christmas%20Bonus%202022%201080p%20(Spanish)%2FThe%20Boss%20Baby%20Christmas%20Bonus%202022%201080p.dual-lat.cinenetskytv.run.mp4?alt=media&token=4b1a871e-2f5a-4319-9b42-f47c7add3562', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-08-14 03:10:15'),
(31, 'Paid', 4, '13,16', 'Spider-Man', -57600, NULL, '<h2 class=\\\"35\\\">Spider-Man - Across the Spider-Verse&nbsp;<span class=\\\"tag release_date\\\">(2023)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">After reuniting with Gwen Stacy, Brooklyn&rsquo;s full-time, friendly neighborhood Spider-Man is catapulted across the Multiverse, where he encounters the Spider Society, a team of Spider-People charged with protecting the Multiverse&rsquo;s very existence.</span></p>', 'spider-man', 'Spider-Man- Across the Spider-Verse (2023) Profile.jpg', 'Spider-Man- Across the Spider-Verse (2023) 345.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/netsky-tv-kids/o/Spider-Man%20-%20Across%20The%20Spider-Verse%20(2023)%201080p%20(Spanish-English)%2FSpider-Man%20%20Across%20The%20Spider-Verse%20(2023)%201080p.dual-lat.cinenetskytv.com.mx.mp4?alt=media&token=4949ed56-40ea-4e41-be0b-2c078bda5005', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-10-25 03:53:50'),
(33, 'Paid', 4, '2,9,14', 'Black Adam', 1666335600, '2h 4m', '<h2 class=\\\"10\\\">Black Adam&nbsp;<span class=\\\"tag release_date\\\">(2022)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods&mdash;and imprisoned just as quickly&mdash;Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Dwayne Johnson, Sarah Shahi, Bodhi Sabongui</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Adventure, Sci-Fi Movie</span></p>', 'black-adam', 'Black Adam 2022 NkG83vxsAJiGzfSsa.jpg', 'Black Adam (2022) tyu.jpg', 'URL', 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-14 00:27:17'),
(34, 'Paid', 2, '2,15,5', 'Underworld', 1452067200, '1h 31m', '<h2 class=\\\"22\\\"><span class=\\\"tag release_date\\\">Underworld - Blood Wars(2016)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Vampire death dealer Selene fends off brutal attacks from both the Lycan clan and the Vampire faction that betrayed her. With her only allies, David and his father Thomas, she must stop the eternal war between Lycans and Vampires, even if it means she has to make the ultimate sacrifice.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Kate Beckinsale, Theo James, Lara Pulver</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Horror, Action,&nbsp;Thriller</p>', 'underworld', 'Underworld Blood Wars 4kMyjyQbnLQQn.jpg', 'Underworld- Blood Wars (2016) 1234.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-17 00:34:06'),
(35, 'Free', 4, '2,9,14', 'Hulk', 1056092400, '2h 18m', '<h2 class=\\\"4\\\">Hulk&nbsp;<span class=\\\"tag release_date\\\">(2003)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Bruce Banner, a genetics researcher with a tragic past, suffers massive radiation exposure in his laboratory that causes him to transform into a raging green monster when he gets angry.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Eric Bana, Jennifer Connelly, Josh Lucas</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Sci-Fi, Adventure, Action</span></p>', 'hulk', 'Hulk (2003) Profile.jpg', 'Hulk (2003)234.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-14 00:43:11'),
(36, 'Free', 2, '2,1,5', 'Double Impact', 681807600, '1h 50m', '<h2 class=\\\"13\\\">Double Impact&nbsp;<span class=\\\"tag release_date\\\">(1991)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Jean Claude Van Damme plays a dual role as Alex and Chad, twins separated at the death of their parents. Chad is raised by a family retainer in Paris, Alex becomes a petty crook in Hong Kong. Seeing a picture of Alex, Chad rejoins him and convinces him that his rival in Hong Kong is also the man who killed their parents.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Jean-Claude Van Damme, Alonna Shaw, Bolo Yeung, Geoffrey Lewis</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Drama,&nbsp;Thriller</span></p>', 'double-impact', 'Double Impact NSmw.jpg', 'Double Impact Xmy8oGIKbS.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/jean-claude-van-damme/o/Double%20Impact%20(1991)%201080p%20HD%20BluRay%20(English)%2FDouble%20Impact%201991%201080p%20BluRay.x264-%5BYTS.AM%5D.mp4?alt=media&token=8f665b85-4a5f-4aa3-b794-4a30e751ea6c&_gl=1*18nyvmb*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjAyOTQ1LjYwLjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:03:12'),
(37, 'Paid', 2, '2,15,5,16', 'Blade II', 1016784000, '1h 57m', '<h2 class=\\\"8\\\">Blade II&nbsp;<span class=\\\"tag release_date\\\">(2002)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">A rare mutation has occurred within the vampire community - The Reaper. A vampire so consumed with an insatiable bloodlust that they prey on vampires as well as humans, transforming victims who are unlucky enough to survive into Reapers themselves.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Wesley Snipes, Kris Kristofferson, Leonor Varela</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Horror, Action, Thriller</span></p>', 'blade-ii', 'Blade II nEnlGV9iLu9k.jpg', 'Blade II (2002) 12345.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/movies-horror/o/Blade%20II%20(2002)1080p%20HD%20BluRay%20(English)%2FBlade%20II%202002%201080p%20BluRay.x264.AAC5.1-%5BYTS.MX%5D.mp4?alt=media&token=2b5eb0c7-54e7-4a59-a761-66b32085577e&_gl=1*1y6193j*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5NTk2MDMzOS4xMjkuMS4xNjk1OTYwNzM4LjM1LjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:52:40'),
(38, 'Paid', 4, '2,3,11', 'Thor', 1657177200, '1h 59m', '<h2 class=\\\"22\\\">Thor - Love &amp; Thunder&nbsp;<span class=\\\"tag release_date\\\">(2022)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">After his retirement is interrupted by Gorr the God Butcher, a galactic killer who seeks the extinction of the gods, Thor Odinson enlists the help of King Valkyrie, Korg, and ex-girlfriend Jane Foster, who now wields Mjolnir as the Mighty Thor. Together they embark upon a harrowing cosmic adventure to uncover the mystery of the God Butcher&rsquo;s vengeance and stop him before it&rsquo;s too late.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Chris Hemsworth, Natalie Portman, Christian Bale, Jaimie Alexander</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Fantasy, Comedy</span></p>', 'thor', 'Thor- Love and Thunder (2022) 234321.jpg', 'Thor- Love and Thunder (2022) 56789.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-14 01:27:51'),
(39, 'Free', 2, '2,1', 'Undisputed III', 1474527600, '1h 27m', '<h2 class=\\\"20\\\">Boyka - Undisputed IV&nbsp;<span class=\\\"tag release_date\\\">(2016)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">In the fourth installment of the fighting franchise, Boyka is shooting for the big leagues when an accidental death in the ring makes him question everything he stands for. When he finds out the wife of the man he accidentally killed is in trouble, Boyka offers to fight in a series of impossible battles to free her from a life of servitude.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Scott Adkins, Teodora Duhovnikova</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Drama</span></p>', 'undisputed-iii', 'Boyka Undisputed IV (2016) 6789.jpg', 'Boyka Undisputed IV (2016)i-0.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-16 04:55:20'),
(40, 'Free', 2, '2,14,5', 'The Matrix', 1052982000, '2h 18m', '<h2 class=\\\"19\\\">The Matrix Reloaded&nbsp;<span class=\\\"tag release_date\\\">(2003)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Six months after the events depicted in The Matrix, Neo has proved to be a good omen for the free humans, as more and more humans are being freed from the Matrix and brought to Zion, the one and only stronghold of the Resistance.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Hugo Weaving</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Thriller, Sci-Fi Movie</span></p>\r\n<p>&nbsp;</p>', 'the-matrix', 'R R the matrix vWrqKBzwDxDodHYXEmOE6J.jpg', 'R the matrix S6erGg4QePmMKbB1E7 (1).jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-14 02:49:58'),
(41, 'Paid', 4, '3,1,8', 'Beautiful Disaster', 1681282800, '1h 36m', '<h2 class=\\\"18\\\">Beautiful Disaster&nbsp;<span class=\\\"tag release_date\\\">(2023)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Bad-boy Travis is exactly what college freshman Abby needs and wants to avoid. He spends his nights fighting in underground boxing matches, and his days as the ultimate college campus charmer.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Dylan Sprouse, Virginia Gardner, Austin North, Libe Barer</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Romance, Drama, Comedy</span></p>\r\n<p>&nbsp;</p>', 'beautiful-disaster', 'Beautiful Disaster (2023).jpg', 'Beautiful Disaster (2023)w45.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-14 02:47:41'),
(42, 'Free', 4, '2,1,14,5,16', 'Elysium', 1376031600, '1h 49m 32s', '<h2 class=\\\"7\\\">Elysium&nbsp;<span class=\\\"tag release_date\\\">(2013)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">In the year 2159, two classes of people exist: the very wealthy who live on a pristine man-made space station called Elysium, and the rest, who live on an overpopulated, ruined Earth. Secretary Rhodes, a hard line government ofﬁcial, will stop at nothing to enforce anti-immigration laws and preserve the luxurious lifestyle of the citizens of Elysium.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Matt Damon, Jodie Foster, Sharlto Copley, Alice Braga&nbsp;</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Drama, Thriller, Sci-Fi Movie</span></p>\r\n<p>&nbsp;</p>', 'elysium', 'Elysium (2013) 987678.jpg', 'Elysium (2013)98789.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/movies-drama-action/o/Elysium%20(2013)%201080p%20HD%20(Spanish%20Only)%2FElysium%202013%20webdl-latino-e-ingles-subt.mp4?alt=media&token=50b24c29-9a66-4851-89c5-09857161e6e1', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:53:01'),
(43, 'Free', 2, '9,1,11', 'Spider-Man', 1020409200, '2h 1m', '<h2 class=\\\"10\\\">Spider-Man&nbsp;<span class=\\\"tag release_date\\\">(2002)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">After being bitten by a genetically altered spider at Oscorp, nerdy but endearing high school student Peter Parker is endowed with amazing powers to become the superhero known as Spider-Man.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Tobey Maguire, Kirsten Dunst, Willem Dafoe, James Franco</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Adventure, Fantasy, Drama</span></p>', 'spider-man', 'Spider-Man (2002) 231.jpg', 'Spider-Man (2002) 344.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-14 06:27:23'),
(44, 'Paid', 4, '2,16,14,5', 'Underworld', 1063954800, '2h 13m 37s', '<h2 class=\\\"10\\\">Underworld&nbsp;<span class=\\\"tag release_date\\\">(2003)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Vampires and werewolves have waged a nocturnal war against each other for centuries. But all bets are off when a female vampire warrior named Selene, who\\\'s famous for her strength and werewolf-hunting prowess, becomes smitten with a peace-loving male werewolf, Michael, who wants to end the war.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Kate Beckinsale, Scott Speedman, Michael Sheen</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Thriller, Fci-Fi Movie</span></p>', 'underworld', 'Underworld (2003) Perfil 73.jpg', 'Underworld (2003) 3456.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/the-underworld-movies/o/Underworld%20(2003)%201080p%20HD%20BluRay%20(English)%2FUnderworld%20(2003)%201080p%20HD%20(Spanish-English)%2FUnderworld%202003%201080p.unrated-netskytv.dual-lat.mp4?alt=media&token=63bf3e11-83d3-4254-a6f0-0ab0a135dc6b&_gl=1*yfhvcm*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5NTk2MDMzOS4xMjkuMS4xNjk1OTYyNjY0LjI1LjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:10:16'),
(45, 'Paid', 2, '2,9,1', 'Hobbs & Shaw', 1564729200, '2h 17m', '<h2 class=\\\"45\\\"><span class=\\\"tag release_date\\\">Fast &amp; Furious Presents: Hobbs &amp; Shaw(2019)</span></h2>\r\n<div class=\\\"overview\\\" dir=\\\"auto\\\">\r\n<p>Ever since US Diplomatic Security Service Agent Hobbs and lawless outcast Shaw first faced off, they just have traded smack talk and body blows. But when cyber-genetically enhanced anarchist Brixton\\\'s ruthless actions threaten the future of humanity, they join forces to defeat him.</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;&nbsp;Dwayne Johnson, Jason Statham, Vanessa Kirby, Eiza Gonz&aacute;lez</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Adventure,&nbsp;Drama</span></p>\r\n</div>', 'hobbs-shaw', 'z12345trewq.jpg', 'zz3rtewertgfd.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-14 06:52:01'),
(46, 'Free', 2, '9,3,13,16', 'Home Alone 2', 722160000, '2h 1s', '<h2 class=\\\"30\\\">Home Alone 2 - Lost in New York&nbsp;<span class=\\\"tag release_date\\\">(1992)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Instead of flying to Florida with his folks, Kevin ends up alone in New York, where he gets a hotel room with his dad\\\'s credit card&mdash;despite problems from a clerk and meddling bellboy. But when Kevin runs into his old nemeses, the Wet Bandits, he\\\'s determined to foil their plans to rob a toy store on Christmas Eve.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Macaulay Culkin, Joe Pesci, Daniel Stern</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Adventure,&nbsp;Family,&nbsp;Comedy</span></p>', 'home-alone-2', 'Home Alone 2- Lost in New York 8767h.jpg', 'Home Alone 2- Lost in New York (1992) 322.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%202%20-%20Lost%20in%20New%20York%20(1992)%201080p%20HD%20BluRay%20(English)%2FHome%20Alone%202%20Lost%20in%20New%20York%201992%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=bd5700dd-194f-4bb1-a998-fe696fdb410e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:10:58'),
(47, 'Paid', 4, '2,12,14', 'John Wick', 1679641200, '2h 50m', '<h2 class=\\\"20\\\"><span class=\\\"tag release_date\\\">John Wick - Chapter 4&nbsp;(2023)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">With the price on his head ever increasing, John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Keanu Reeves, Donnie Yen, Laurence Fishburne</p>\r\n<p>&nbsp;<span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Thriller, Crime</span></p>', 'john-wick', 'John Wick- Chapter 4 a44KkhX5Z27cXwmL1.jpg', 'John Wick- Chapter 4 (2023)234re.jpg', 'URL', 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-15 05:15:23');
INSERT INTO `movie_videos` (`id`, `video_access`, `movie_lang_id`, `movie_genre_id`, `video_title`, `release_date`, `duration`, `video_description`, `video_slug`, `video_image_thumb`, `video_image`, `video_type`, `video_quality`, `video_url`, `video_url_480`, `video_url_720`, `video_url_1080`, `download_enable`, `download_url`, `subtitle_on_off`, `subtitle_language1`, `subtitle_url1`, `subtitle_language2`, `subtitle_url2`, `subtitle_language3`, `subtitle_url3`, `imdb_id`, `imdb_rating`, `imdb_votes`, `seo_title`, `seo_description`, `seo_keyword`, `status`, `created_at`, `updated_at`) VALUES
(48, 'Paid', 4, '2,15,14', 'Underworld Awakening', 1326960000, '1h 28m', '<h2 class=\\\"21\\\">Underworld Awakening&nbsp;<span class=\\\"tag release_date\\\">(2012)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Having escaped years of imprisonment, vampire warrioress Selene finds herself in a changed world where humans have discovered the existence of both Vampire and Lycan clans and are conducting an all-out war to eradicate both immortal species.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;&nbsp;Kate Beckinsale, Theo James, India Eisley</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Horror, Fci-fi Movie</span></p>', 'underworld-awakening', 'Underworld - Awakening zEaliJV60Stf.jpg', 'Underworld - Awakening PVt9ibP9riy.jpg', 'HLS', 0, 'https://ok.ru/videoembed/6166312716808?autoplay=1', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-16 04:35:12'),
(49, 'Free', 2, '2,1,5,16', 'War', 1187938800, '1h 43m', '<h2 class=\\\"3\\\"><span class=\\\"tag release_date\\\">War (2007)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">FBI agent Jack Crawford is out for revenge when his partner is killed and all clues point to the mysterious assassin Rogue. But when Rogue turns up years later to take care of some unfinished business, he triggers a violent clash of rival gangs. Will the truth come out before it\\\'s too late?</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Jet Li, Jason Statham, Devon Aoki, Sung Kang</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Thriller, Drama</span></p>\r\n<p>&nbsp;</p>', 'war', 'War (2007)Ol6D5t6JUGIwdoo.jpg', 'War (2007)- 23445.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/movies-drama-action/o/War%202007%20-%201080p%20HD%20BluRay%20(English)%2FWar.2007.1080p.BluRay.x264.YIFY.mp4?alt=media&token=06dd8457-79d2-4394-8c78-3da0eef4c243&_gl=1*mypqax*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjAzMDc4LjE1LjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:11:34'),
(50, 'Paid', 2, '2,11,15,16', 'Teen Wolf', 1674028800, '2h 20m', '<h2 class=\\\"20\\\">Teen Wolf - The Movie&nbsp;<span class=\\\"tag release_date\\\">(2023)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">The wolves are howling once again, as a terrifying ancient evil emerges in Beacon Hills. Scott McCall, no longer a teenager yet still an Alpha, must gather new allies and reunite trusted friends to fight back against this powerful and deadly enemy.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Tyler Posey Crystal Reed, Holland Roden</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Fantasy, TV Movie</span></p>', 'teen-wolf', 'Teen Wolf- The Movie (2023) Proflie.jpg', 'Teen Wolf- The Movie (2023) 89.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/series-and-comedy/o/Teen%20Wolf%20The%20Movie%20(2023)%201080p%20HD%20(Spanish-English)%2FTeen%20Wolf%20The%20Movie%202023%201080p.dual%20cinenetskytv.mp4?alt=media&token=536f8025-f4bc-4e4f-bf7a-8eec74ed01b9&_gl=1*fzbvfi*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjAyMTE5LjYwLjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:12:00'),
(51, 'Free', 4, '3,1', 'Not Another Teen Movie', 1007712000, '1h 29m', '<h2 class=\\\"22\\\">Not Another Teen Movie&nbsp;<span class=\\\"tag release_date\\\">(2001)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">On a bet, a gridiron hero at John Hughes High School sets out to turn a bespectacled plain Jane into a beautiful and popular prom queen in this outrageous send-up of the teen movies of the 1980s and \\\'90s.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Chyler Leigh, Chris Evans, Jaime Pressly, Mia Kirshner</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Comedy, Drama</span></p>', 'not-another-teen-movie', 'Not Another Teen Movie (2001) Profile.jpg', 'Not Another Teen Movie 789d.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-16 03:35:42'),
(52, 'Free', 4, '2,12,1,5', 'Need for Speed', 1394780400, '2h 12m', '<h2 class=\\\"14\\\">Need for Speed&nbsp;<span class=\\\"tag release_date\\\">(2014)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">The film revolves around a local street racer who partners with a rich and arrogant business associate, only to find himself framed by his colleague and sent to prison. After he gets out, he joins a New York-to-Los Angeles race to get revenge.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Aaron Paul, Dominic Cooper, Imogen Poots, Dakota Johnson&nbsp;</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Crime, Drama, Thriller</span></p>', 'need-for-speed', 'Need for Speed (2014) Prolife.jpg', 'Need for Speed (2014) 2345.jpg', 'URL', 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-17 01:55:29'),
(53, 'Paid', 4, '2,9,14,16,17', 'The Flash', 1686898800, '2h 24m', '<h2 class=\\\"9\\\">The Flash&nbsp;<span class=\\\"tag release_date\\\">(2023)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">When his attempt to save his family inadvertently alters the future, Barry Allen becomes trapped in a reality in which General Zod has returned and there are no Super Heroes to turn to. In order to save the world that he is in and return to the future that he knows, Barry\\\'s only hope is to race for his life. But will making the ultimate sacrifice be enough to reset the universe.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Ezra Miller, Sasha Calle, Antje Traue</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Adventure, Sci-Fi Movie</span></p>', 'the-flash', 'The Flash ArZ6OOOKsXcv0Bm.jpg', 'The Flash (2023)23456res.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/latest-movies-2023/o/The%20Flash%20-%201080p%20HD%202023%20(English)%2FThe%20Flash%20(2023)%201080p%20HD%20English%20dual-lat.cinecalidad.com.mx.mp4?alt=media&token=7a0acce6-c16d-44c7-9d34-82293102b566&_gl=1*1blfz14*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjAyNTY1LjE0LjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:12:41'),
(54, 'Free', 4, '1,11,8', 'Titanic', 882518400, '3h 14m', '<h2 class=\\\"7\\\">Titanic&nbsp;<span class=\\\"tag release_date\\\">(1997)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">101-year-old Rose DeWitt Bukater tells the story of her life aboard the Titanic, 84 years later. A young Rose boards the ship with her mother and fianc&eacute;. Meanwhile, Jack Dawson and Fabrizio De Rossi win third-class tickets aboard the ship.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Leonardo DiCaprio, Kate Winslet, Billy Zane</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Drama,&nbsp;Fantasy, Romance</span></p>', 'titanic', 'Titanic (1997) 45678.jpg', 'Titanic (1997) 234567.jpg', 'Local', 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-16 05:09:44'),
(55, 'Free', 4, '2,3,12,5,16', 'Red Notice', 1636095600, '1h 58m', '<h2 class=\\\"10\\\">Red Notice&nbsp;<span class=\\\"tag release_date\\\">(2021)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">An Interpol-issued Red Notice is a global alert to hunt and capture the world\\\'s most wanted. But when a daring heist brings together the FBI\\\'s top profiler and two rival criminals, there\\\'s no telling what will happen.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Dwayne Johnson, Gal Gadot, Ryan Reynolds</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Comedy, Crime, Thriller</span></p>', 'red-notice', 'Red Notice (2021) Profile.jpg', 'Red Notice (2021) 3456.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/series-and-comedy/o/Red%20Notice%20(2021)1080p%20HD%20(Spanish-English)%2FRed%20Notice%20(2021)1080p%20dual-lat.cinenetskytv.link.mp4?alt=media&token=9b45053e-2db9-443a-bc72-3d4379c44939&_gl=1*oate73*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjAyMjIxLjI1LjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:13:23'),
(56, 'Free', 2, '2,11,5', 'Underworld Evolution', 1137744000, '1h 46m', '<h2 class=\\\"21\\\"><span class=\\\"tag release_date\\\">Underworld Evolution (2006)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">As the war between the vampires and the Lycans rages on, Selene, a former member of the Death Dealers (an elite vampire special forces unit that hunts werewolves), and Michael, the werewolf hybrid, work together in an effort to unlock the secrets of their respective bloodlines.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Kate Beckinsale, Scott Speedman, Tony Curran</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Fantasy, Thriller</span></p>', 'underworld-evolution', 'Underworld- Evolution CzAumcZeBoAxqm0nY2H8.jpg', 'Underworld- Evolution kIZzOU6ZSbcyejTK0c5BBeF3YfD.jpg', 'Local', 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-17 00:35:21'),
(57, 'Free', 2, '16,15,5', 'Wrong Turn 3', 1256022000, '1h 32m', '<h2 class=\\\"27\\\">Wrong Turn 3: Left for Dead&nbsp;<span class=\\\"tag release_date\\\">(2009)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">A group of people find themselves trapped in the backwoods of West Virginia, fighting for their lives against a group of vicious and horribly disfigured inbred cannibals.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Tom Frederic, Janet Montgomery, Louise Cliffe</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Horror, Thriller</span></p>', 'wrong-turn-3', 'Wrong Turn 3- Left for Dead 77s.jpg', 'Wrong Turn 3- Left for Dead (2009) 3432.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/movies-horror/o/Wrong%20Turn%203%3A%20Left%20for%20Dead%20(2009)%201080p%20HD%20BluRay%20(%20English%2FWrong%20Turn%203%20Left%20For.Dead.UNRATED.2009.1080p.BRrip.x264.YIFY.mp4?alt=media&token=3fb28fa7-6f9b-4662-bc23-813fc1df98ed&_gl=1*16j8sin*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5NTk2MDMzOS4xMjkuMS4xNjk1OTYyMjg1LjQxLjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:14:20'),
(58, 'Paid', 4, '2,9,3,5', 'Operation Fortune', 1677830400, '1h 54m', '<h2 class=\\\"33\\\">Operation Fortune - Ruse De Guerre&nbsp;<span class=\\\"tag release_date\\\">(2023)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Special agent Orson Fortune and his team of operatives recruit one of Hollywood\\\'s biggest movie stars to help them on an undercover mission when the sale of a deadly new weapons technology threatens to disrupt the world order.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Jason Statham, Aubrey Plaza</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Comedy, Adventure, Thriller</span></p>', 'operation-fortune', 'Operation Fortune- Ruse de Guerre yuiiu.jpg', 'Operation Fortune- Ruse de Guerre (2023) 1.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/comedy-and-drama/o/Home%20Alone%20(1990)%201080p%20HD%20BluRay%20English%2FHome%20Alone%201990%201080p%20BluRay.x264.YIFY.mp4?alt=media&token=5d7adab6-6a4f-4eaf-824e-76f954e46d0e', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-16 06:03:23'),
(59, 'Free', 4, '2,11,15', 'Blade Trinity', 1102492800, '2h 3m', '<h2 class=\\\"14\\\"><span class=\\\"tag release_date\\\">Blade - Trinity (2004)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">For years, Blade has fought against the vampires in the cover of the night. But now, after falling into the crosshairs of the FBI, he is forced out into the daylight, where he is driven to join forces with a clan of human vampire hunters he never knew existed.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Wesley Snipes, Jessica Biel, Ryan Reynolds</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Horror, Fantasy</span></p>', 'blade-trinity', 'Blade Trinity  Perfil 4CFTPidTy.jpg', 'Blade- Trinity (2004) 12345.jpg', 'URL', 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-16 23:25:22'),
(60, 'Paid', 2, '3', 'Joy Ride', 1688713200, '1h 35m', '<h2 class=\\\"8\\\">Joy Ride&nbsp;<span class=\\\"tag release_date\\\">(2023)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">When Audrey\\\'s business trip to Asia goes sideways, she enlists the aid of Lolo, her irreverent childhood best friend who also happens to be a hot mess; Kat, her college friend turned Chinese soap star; and Deadeye, Lolo\\\'s eccentric cousin.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Ashley Park, Sherry Cola, Stephanie Hsu</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Comedy</span></p>', 'joy-ride', 'Joy Ride .jpg', 'Joy-Ridee23456r (2023) 23456.jpg', 'URL', 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-17 00:21:33'),
(61, 'Free', 4, '9,3,13', 'Sonic The Hedgehog 2', 1649401200, '2h 3m', '<h2 class=\\\"20\\\"><span class=\\\"tag release_date\\\">Sonic The Hedgehog 2 (2022)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">After settling in Green Hills, Sonic is eager to prove he has what it takes to be a true hero. His test comes when Dr. Robotnik returns, this time with a new partner, Knuckles, in search for an emerald that has the power to destroy civilizations.</span></p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Adventure, Family, Comedy</span></p>\r\n<p>&nbsp;</p>', 'sonic-the-hedgehog-2', 'Sonic the Hedgehog 2 (2022) Profile.jpg', 'Sonic the Hedgehog 2 (2022) 23456.jpg', 'URL', 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-17 00:21:22'),
(62, 'Free', 4, '2,9,11', 'The Mummy Returns', 988959600, '2h 10m', '<h2 class=\\\"17\\\"><span class=\\\"tag release_date\\\">The Mummy Returns (2001)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Rick and Evelyn O&rsquo;Connell, along with their 8-year-old son Alex, discover the key to the legendary Scorpion King&rsquo;s might: the fabled Bracelet of Anubis. Unfortunately, a newly resurrected Imhotep has designs on the bracelet as well, and isn&rsquo;t above kidnapping its new bearer, Alex, to gain control of Anubis&rsquo;s otherworldly army.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Brendan Fraser, Rachel Weisz, Dwayne Johnson, Arnold Vosloo</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Adventure, Fantasy</span></p>\r\n<p>&nbsp;</p>', 'the-mummy-returns', 'The Mummy Returns (2001) 56789.jpg', 'The Mummy Returns (2001) 23ese4.jpg', 'URL', 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-17 06:21:59'),
(63, 'Free', 4, '2,9,5,16', 'No Time to Die (2021)', 1633676400, '2h 43m', '<h2 class=\\\"14\\\">No Time to Die&nbsp;<span class=\\\"tag release_date\\\">(2021)</span></h2>\r\n<p>James Bond has left active service. His peace is short-lived when Felix Leiter, an old friend from the CIA, turns up asking for help, leading Bond onto the trail of a mysterious villain armed with dangerous new technology.</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Daniel Craig, L&eacute;a Seydoux, Rami Malek</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Adventure, Thriller</span></p>', 'no-time-to-die-2021', 'No Time to Die (2021) Profile.jpg', 'No Time to Die (2021) werg.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/movies-drama-action/o/No%20Time%20To%20Die%20(2021)%201080p%20HD%20(SPANISH-ENGLISH)%2FNo%20Time%20To%20Die%202021%201080p%20dual-latino-cinenetskytv.link1.mp4?alt=media&token=6d1fe894-e1a9-4a90-b063-4d2b2f49755b&_gl=1*343273*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjA0MTc0LjUyLjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:51:46'),
(64, 'Paid', 4, '2,9,16,5,17', 'Mission Impossible', 1689145200, '2h 35m', '<h2 class=\\\"45\\\">Mission Impossible - Dead Reckoning Part One&nbsp;<span class=\\\"tag release_date\\\">(2023)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Ethan Hunt and his IMF team embark on their most dangerous mission yet: To track down a terrifying new weapon that threatens all of humanity before it falls into the wrong hands.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Tom Cruise, Hayley Atwell, Ving Rhames</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Adventure, Thriller</span></p>', 'mission-impossible', 'Mission- Impossible - Dead Reckoning Part One56.jpg', 'Mission- Impossible - Dead Reckoning Part One 52wa.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/latest-movies-2023/o/Mission%20Impossible%20-%20Dead%20Reckoning%20Part%20One%20(2023)%201080p%20HD%20(English)%2FMission%20Impossible%20Dead%20Reckoning%20Part%20One%202023.V2.1080p.HDTS.x264.Dual.YG.mkv?alt=media&token=7b86b04d-16a3-481b-8016-919f3baaee27&_gl=1*1pxgtgt*_ga*NTU1ODYzODIuMTY5ODIwMjQyNQ..*_ga_CW55HF8NVT*MTY5ODIwMjQyNC4xLjEuMTY5ODIwMjQ2NC4yMC4wLjA.', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:17:49'),
(65, 'Free', 4, '16,1,15', 'Jack and Jill', 1631862000, '1h 27m', '<h2 class=\\\"13\\\">Jack and Jill&nbsp;<span class=\\\"tag release_date\\\">(2021)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">A horror retelling of the nursery rhyme Jack and Jill. A group of friends grieving a recent loss meet up with one another only to discover they are being hunted by Jack and Jill.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Sarah T. Cohen, Beatrice Fletcher, Clint Gordon, Jo Barker</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Horror, Drama</span></p>', 'jack-and-jill', 'Jack and Jill (2021) Profile.jpg', 'Jack and Jill (2021) 2345.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/movies-horror/o/Jack%20and%20Jill%20(2021)%201080p%20HD%20(SPANISH-ENGLISH)%2FJack%20and%20Jill%20(2021)%201080p%20dual-lat.cinenetskytv.lol.mp4?alt=media&token=027360ae-bcc3-4568-bb10-f5ebe5ea79f2&_gl=1*1gplxi2*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjAyNjU3LjQ3LjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:17:11'),
(66, 'Paid', 4, '2,14,5', 'Prey', 1659423600, '1h 40m', '<h2 class=\\\"4\\\">Prey&nbsp;<span class=\\\"tag release_date\\\">(2022)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Naru, a skilled warrior of the Comanche Nation, fights to protect her tribe against one of the first highly-evolved Predators to land on Earth.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Amber Midthunder, Dakota Beavers, Michelle Thrush</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Thriller,&nbsp;Sci-Fi Movie</span></p>', 'prey', 'Prey (2022) 545red.jpg', 'Prey (2022) 23456.jpg', 'URL', 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-18 06:58:47'),
(67, 'Free', 4, '2,9,11,16', 'Pirates Of The Caribbean', 1057734000, '2h 23m', '<h2 class=\\\"54\\\">Pirates of the Caribbean - The Curse Of The Black Pearl&nbsp;<span class=\\\"tag release_date\\\">(2003)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Jack Sparrow, a freewheeling 18th-century pirate, quarrels with a rival pirate bent on pillaging Port Royal. When the governor\\\'s daughter is kidnapped, Sparrow decides to help the girl\\\'s love save her.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Johnny Depp, Keira Knightley,&nbsp; &nbsp;Orlando Bloom</p>\r\n<p>&nbsp;</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Adventure, Fantasy</span></p>', 'pirates-of-the-caribbean', 'Pirates of the Caribbean- The Curse of the Black Pearl (2003) Profile.jpg', 'Pirates of the Caribbean- The Curse of the Black Pearl (2003)23456.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/movies-drama-action/o/Pirates%20Of%20The%20Caribbean%20-%20The%20Curse%20of%20The%20Black%20Pearl%20(2003)%201080p%20HD%20(SPANISH-ENGLISH)%2FPirates%20Of%20the%20Caribbean%20-%20The%20Curse%20of%20the%20Black%20Pearl%20(2003%20)1080p.dual-lat.cinenetskytv.lol.mp4?alt=media&token=656c1270-cf84-4ec7-8fea-31e8ea6f2697&_gl=1*1iqihxm*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjA0MDU5LjE2LjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:37:13'),
(68, 'Paid', 4, '2,16,5,17', 'Heart of Stone', 1691564400, '2h 5m 26s', '<h2 class=\\\"14\\\">Heart of Stone&nbsp;<span class=\\\"tag release_date\\\">(2023)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">An intelligence operative for a shadowy global peacekeeping agency races to stop a hacker from stealing its most valuable &mdash; and dangerous &mdash; weapon.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Gal Gadot, Jamie Dornan, Alia Bhatt</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Thriller</span></p>', 'heart-of-stone', 'Heart of Stone (2023) 23456.jpg', 'Heart of Stone (2023) 234rews.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/latest-movies-2023/o/Heart%20Of%20%20Stone%20(2023)%201080p%20HD%20(Spanish-English)%2FHeart%20of%20%20Stone%20(2023)%201080p.dual-lat.cinenetskytv.com.mx.mp4?alt=media&token=64626841-63fd-4ade-aef0-755492756175&_gl=1*1yjz2ma*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjAwNzY0LjEuMC4w', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 04:15:56'),
(69, 'Free', 4, '2,9,1,8', 'The Twilight Saga', 25254000, '2h 4m', '<h2 class=\\\"26\\\">The Twilight Saga - Eclipse&nbsp;<span class=\\\"tag release_date\\\">(2010)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">As a string of mysterious killings grips Seattle, Bella, whose high school graduation is fast approaching, is forced to choose between her love for vampire Edward and her friendship with werewolf Jacob.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Kristen Stewart, Robert Pattinson, Taylor Lautner</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action, Adventure, Drama, Romance</span></p>', 'the-twilight-saga', 'The Twilight Saga- Eclipse (2010) Profile.jpg', 'The Twilight Saga- Eclipse (2010) 234rew.jpg', 'URL', 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-08-19 06:00:17'),
(70, 'Free', 4, '2,1,14,16', 'Insight', 1615536000, '1h 20m', '<h2 class=\\\"7\\\"><span class=\\\"tag release_date\\\">Insight (2021)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">Jian, a martial artist who possesses clairvoyance, investigates the death of his brother with the help of LA Detective Abby. Together, they seek justice while fighting against a high-tech criminal.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:&nbsp;</strong></span>Ken Zheng, Livi Zheng</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Sci-Fi, Drama</span></p>', 'insight', 'Insight (2021) 234t.jpg', 'Insight (2021) 12345res.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/movies-drama-action/o/Insight%20(2021)%201080p%20HD%20(SPANISH-ENGLISH)%2FInsight%202021%201080P-Netskytv-Latino.mp4?alt=media&token=e45efa53-44f0-412c-b545-7fb7569d4304', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:36:25'),
(71, 'Free', 4, '2,15,5', 'Shark Bait', 1652425200, '1h 27m', '<h2 class=\\\"10\\\"><span class=\\\"tag release_date\\\">Shark Bait (2022)</span></h2>\r\n<p>A group of friends enjoying a weekend steal a couple of jetskis racing them out to sea, ending up in a horrific head-on collision. They struggle to find a way home with a badly injured friend while from the waters below predators lurk.</p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Holly Earl, Jack Trueman, Catherine Hannay</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Horror, Thriller</span></p>', 'shark-bait', 'Shark Bait (2022) Profile.jpg', 'Shark Bait (2022) 2345.jpg', 'Local', 0, 'dabogi.mp4', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 0, NULL, '2023-09-09 17:13:34'),
(72, 'Free', 4, '2,9,14,16', 'Iron Man 2 (2010)', 1273215600, '2h 4m', '<h2 class=\\\"10\\\">Iron Man 2&nbsp;<span class=\\\"tag release_date\\\">(2010)</span></h2>\r\n<p><span class=\\\"tag release_date\\\">With the world now aware of his identity as Iron Man, Tony Stark must contend with both his declining health and a vengeful mad man with ties to his father\\\'s legacy.</span></p>\r\n<p><span style=\\\"color: #ff0000;\\\"><strong>Casts:</strong></span>&nbsp;Robert Downey Jr, Gwyneth Paltrow, Scarlett Johansson</p>\r\n<p><span class=\\\"tag release_date\\\"><span style=\\\"color: #ff0000;\\\"><strong>Genres:&nbsp;</strong></span>Action,&nbsp;Adventure, Sci-Fi Movie</span></p>', 'iron-man-2-2010', 'Iron Man 2 (2010) Profile.jpg', 'Iron Man 2 (2010) 23456.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/adventure-fantasy-movies/o/Iron%20Man%202%20(2010)%201080p%20HD%20(SPANISH-ENGLISH)%2FIron%20man%202%20(2010)%201080p-dual-latino.mp4?alt=media&token=99fd721a-fa72-47f2-b278-2ea071416566&_gl=1*1dbu523*_ga*MzI1MjI2OTAwLjE2ODk3NDMxMDE.*_ga_CW55HF8NVT*MTY5ODE5OTkyMi4xMzIuMS4xNjk4MjAwMTQyLjU4LjAuMA..', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-10-25 03:36:42'),
(73, 'Free', 2, '16', 'Undispute Redemption 3', -57600, NULL, '', 'undispute-redemption-3', 'Shark Bait (2022) 2345.jpg', NULL, 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/best-action-films/o/Undisputed%20III%20-%20Redemption%20(2010)%20Boyka%201080p%20HD%20(Spanish-English)%2FUndispute%20Redemption%203%202010.1080P.Dual-Latino-Cinenetskytv.Lat.mp4?alt=media&token=2be549ba-2cf9-434e-a6bc-f7e37e2c17bc', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2024-08-07 21:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `music_id` int(11) NOT NULL,
  `music_title` varchar(255) NOT NULL,
  `music_url` varchar(255) NOT NULL,
  `audio_type` varchar(255) DEFAULT 'Local',
  `music_thumbnail_url` varchar(255) DEFAULT NULL,
  `music_genre` varchar(255) DEFAULT NULL,
  `music_artist` varchar(255) DEFAULT NULL,
  `music_release_date` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`music_id`, `music_title`, `music_url`, `audio_type`, `music_thumbnail_url`, `music_genre`, `music_artist`, `music_release_date`, `created_at`, `updated_at`) VALUES
(29, 'Why We Lose', 'upload/source/Cartoon - Why We Lose (feat- Coleman Trapp) [NCS Release] (128 kbps).mp3', 'Local', NULL, 'POP', 'NCS', 1528786800, '2023-09-13 01:10:48', '2023-09-13 01:10:48'),
(30, 'Never Have I Felt This', 'upload/source/Koven - Never Have I Felt This [NCS Release] (128 kbps).mp3', 'Local', NULL, 'POP', 'Koven', 1591254000, '2023-09-13 01:11:18', '2023-09-13 01:11:18'),
(31, 'Warriyo - Mortals', 'upload/source/Warriyo - Mortals (feat- Laura Brehm) [NCS Release] (128 kbps).mp3', 'Local', NULL, 'POP', 'Laura Brehm', 1694502000, '2023-09-13 01:11:48', '2023-09-13 01:11:48'),
(32, 'Where We Started', 'upload/source/MlyYZnfxtvQKItS4yMKoBjPPaBghpcgkOwNIQOp1.mp3', 'Local', NULL, 'POP', 'NCS', NULL, '2023-09-13 01:15:23', '2023-09-13 01:15:23'),
(33, 'For Future Bass', 'upload/source/for-future-bass-159125.mp3', 'Local', 'Joy-Ridee23456r (2023) 23456.jpg', 'POP', 'NCS', 1694588400, '2023-09-13 14:31:17', '2023-09-14 12:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `o_t_p_s`
--

CREATE TABLE `o_t_p_s` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `otp_expiry` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `o_t_p_s`
--

INSERT INTO `o_t_p_s` (`id`, `user_id`, `otp`, `otp_expiry`) VALUES
(53, 429, '382327', '1694270489'),
(54, 429, '222665', '1694271621'),
(55, 429, '902317', '1694271673'),
(56, 429, '320710', '1694272214'),
(57, 429, '814170', '1694272257'),
(58, 429, '450514', '1694272450'),
(59, 429, '775450', '1694272493'),
(60, 429, '183482', '1694272545'),
(61, 429, '488515', '1694272756'),
(62, 429, '373865', '1694272838'),
(63, 429, '608142', '1694272964'),
(64, 429, '611590', '1694273398'),
(65, 429, '100750', '1694273571'),
(66, 429, '562712', '1694273612'),
(67, 429, '135964', '1694273789'),
(68, 429, '396788', '1694275232'),
(69, 429, '427785', '1694275315'),
(70, 429, '113891', '1694275363'),
(72, 429, '230979', '1694275561'),
(73, 429, '620203', '1694275975'),
(74, 421, '693739', '1694276145'),
(75, 429, '558745', '1694276735'),
(77, 421, '162726', '1694277501'),
(78, 429, '649919', '1694277507'),
(79, 421, '918075', '1694279041'),
(80, 421, '397428', '1694279305'),
(81, 421, '399248', '1694279387'),
(82, 421, '783226', '1694282971'),
(83, 421, '785793', '1694323188'),
(84, 421, '421486', '1694323516'),
(85, 421, '927151', '1694323521'),
(92, 423, '250097', '1704090731'),
(94, 441, '103626', '1710442996'),
(98, 472, '1234', '1730378983'),
(99, 472, '1234', '1730379025'),
(100, 472, '1234', '1730379073'),
(101, 472, '1234', '1730379080');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(500) NOT NULL,
  `page_slug` varchar(500) NOT NULL,
  `page_content` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_slug`, `page_content`, `status`) VALUES
(1, 'About Us', 'about-us', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \\\"de Finibus Bonorum et Malorum\\\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \\\"Lorem ipsum dolor sit amet..\\\", comes from a line in section 1.10.32.</p>', 1),
(2, 'Terms Of Use', 'terms-of-use', '<p><strong>Use of this site is provided by Demos subject to the following Terms and Conditions:</strong><br />1. Your use constitutes acceptance of these Terms and Conditions as at the date of your first use of the site.<br />2. Demos reserves the rights to change these Terms and Conditions at any time by posting changes online. Your continued use of this site after changes are posted constitutes your acceptance of this agreement as modified.<br />3. You agree to use this site only for lawful purposes, and in a manner which does not infringe the rights, or restrict, or inhibit the use and enjoyment of the site by any third party.<br />4. This site and the information, names, images, pictures, logos regarding or relating to Demos are provided &ldquo;as is&rdquo; without any representation or endorsement made and without warranty of any kind whether express or implied. In no event will Demos be liable for any damages including, without limitation, indirect or consequential damages, or any damages whatsoever arising from the use or in connection with such use or loss of use of the site, whether in contract or in negligence.<br />5. Demos does not warrant that the functions contained in the material contained in this site will be uninterrupted or error free, that defects will be corrected, or that this site or the server that makes it available are free of viruses or bugs or represents the full functionality, accuracy and reliability of the materials.<br />6. Copyright restrictions: please refer to our Creative Commons license terms governing the use of material on this site.<br />7. Demos takes no responsibility for the content of external Internet Sites.<br />8. Any communication or material that you transmit to, or post on, any public area of the site including any data, questions, comments, suggestions, or the like, is, and will be treated as, non-confidential and non-proprietary information.<br />9. If there is any conflict between these Terms and Conditions and rules and/or specific terms of use appearing on this site relating to specific material then the latter shall prevail.<br />10. These terms and conditions shall be governed and construed in accordance with the laws of England and Wales. Any disputes shall be subject to the exclusive jurisdiction of the Courts of England and Wales.<br />11. If these Terms and Conditions are not accepted in full, the use of this site must be terminated immediately.</p>', 1),
(3, 'Privacy Policy', 'privacy-policy', '<h1><strong>Privacy Policy</strong></h1>\r\n<p>This privacy policy applies to the Netsky TV app (hereby referred to as \\\"Application\\\") for mobile devices that was created by Netsky TV, Inc. (hereby referred to as \\\"Service Provider\\\") as an Ad Supported service. This service is intended for use \\\"AS IS\\\".</p>\r\n<h1><br /><strong>Information Collection and Use</strong></h1>\r\n<p>The Application collects information when you download and use it. This information may include information such as</p>\r\n<ul>\r\n<li>Your device\\\'s Internet Protocol address (e.g. IP address)</li>\r\n<li>The pages of the Application that you visit, the time and date of your visit, the time spent on those pages</li>\r\n<li>The time spent on the Application</li>\r\n<li>The operating system you use on your mobile device</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h1>&nbsp;</h1>\r\n<p>The Application does not gather precise information about the location of your mobile device.</p>\r\n<h1>&nbsp;</h1>\r\n<p>The Service Provider may use the information you provided to contact you from time to time to provide you with important information, required notices and marketing promotions.</p>\r\n<h1>&nbsp;</h1>\r\n<p>For a better experience, while using the Application, the Service Provider may require you to provide us with certain personally identifiable information, including but not limited to Male. The information that the Service Provider request will be retained by them and used as described in this privacy policy.</p>\r\n<h1><br /><strong>Third Party Access</strong></h1>\r\n<p>Only aggregated, anonymized data is periodically transmitted to external services to aid the Service Provider in improving the Application and their service. The Service Provider may share your information with third parties in the ways that are described in this privacy statement.</p>\r\n<div><br />\r\n<p>Please note that the Application utilizes third-party services that have their own Privacy Policy about handling data. Below are the links to the Privacy Policy of the third-party service providers used by the Application:</p>\r\n<ul>\r\n<li><a href=\\\"https://www.google.com/policies/privacy/\\\" target=\\\"_blank\\\" rel=\\\"noopener noreferrer\\\">Google Play Services</a></li>\r\n<li><a href=\\\"https://support.google.com/admob/answer/6128543?hl=en\\\" target=\\\"_blank\\\" rel=\\\"noopener noreferrer\\\">AdMob</a></li>\r\n</ul>\r\n</div>\r\n<h1>&nbsp;</h1>\r\n<p>The Service Provider may disclose User Provided and Automatically Collected Information:</p>\r\n<ul>\r\n<li>as required by law, such as to comply with a subpoena, or similar legal process;</li>\r\n<li>when they believe in good faith that disclosure is necessary to protect their rights, protect your safety or the safety of others, investigate fraud, or respond to a government request;</li>\r\n<li>with their trusted services providers who work on their behalf, do not have an independent use of the information we disclose to them, and have agreed to adhere to the rules set forth in this privacy statement.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h1><br /><strong>Opt-Out Rights</strong></h1>\r\n<p>You can stop all collection of information by the Application easily by uninstalling it. You may use the standard uninstall processes as may be available as part of your mobile device or via the mobile application marketplace or network.</p>\r\n<h1><br /><strong>Data Retention Policy</strong></h1>\r\n<p>The Service Provider will retain User Provided data for as long as you use the Application and for a reasonable time thereafter. If you\\\'d like them to delete User Provided Data that you have provided via the Application, please contact them at info@netskytv.us and they will respond in a reasonable time.</p>\r\n<h1><br /><strong>Children</strong></h1>\r\n<p>The Service Provider does not use the Application to knowingly solicit data from or market to children under the age of 13.</p>\r\n<div><br />\r\n<p>The Application does not address anyone under the age of 13. The Service Provider does not knowingly collect personally identifiable information from children under 13 years of age. In the case the Service Provider discover that a child under 13 has provided personal information, the Service Provider will immediately delete this from their servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact the Service Provider (info@netskytv.us) so that they will be able to take the necessary actions.</p>\r\n</div>\r\n<h1><br /><strong>Security</strong></h1>\r\n<p>The Service Provider is concerned about safeguarding the confidentiality of your information. The Service Provider provides physical, electronic, and procedural safeguards to protect information the Service Provider processes and maintains.</p>\r\n<h1><br /><strong>Changes</strong></h1>\r\n<p>This Privacy Policy may be updated from time to time for any reason. The Service Provider will notify you of any changes to the Privacy Policy by updating this page with the new Privacy Policy. You are advised to consult this Privacy Policy regularly for any changes, as continued use is deemed approval of all changes.</p>\r\n<h1>&nbsp;</h1>\r\n<p>This privacy policy is effective as of 2024-08-01</p>\r\n<h1><br /><strong>Your Consent</strong></h1>\r\n<p>By using the Application, you are consenting to the processing of your information as set forth in this Privacy Policy now and as amended by us.</p>\r\n<h1><br /><strong>Contact Us</strong></h1>\r\n<p>If you have any questions regarding privacy while using the Application, or have questions about the practices, please contact the Service Provider via email at info@netskytv.us.</p>', 1),
(4, 'FAQ', 'faq', '<p>Coming Soon</p>', 1),
(5, 'Contact Us', 'contact-us', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(2, 'tonmoy@gmail.com', '$2y$10$osIHkIafA/B5i1uwO0CRmeZEHBH6FEc7e1.QKFN7kPTlaPuq3GCnK', '2023-08-23 08:25:09'),
(14, 'user@gmail.com', '$2y$10$7iISHEpDE3fXi4nZnWKxPO0dnrpx3B0LDVZBjlvu3ExqVJRWxZ91S', '2023-08-23 12:19:35'),
(23, 'tchowdhury501@gmail.com', '$2y$10$y38NzUdnaQZsFOihXPNdQ.bE1xRI4/7hwleRK2STKyEiowPTa8A72', '2023-08-24 06:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `recently_watched`
--

CREATE TABLE `recently_watched` (
  `id` int(11) NOT NULL,
  `video_type` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `recently_watched`
--

INSERT INTO `recently_watched` (`id`, `video_type`, `user_id`, `video_id`) VALUES
(2, 'LiveTV', 7, 1),
(8, 'Movies', 7, 2),
(10, 'Shows', 8, 2),
(11, 'Episodes', 8, 1),
(12, 'LiveTV', 8, 1),
(13, 'Shows', 8, 2),
(14, 'Shows', 7, 2),
(16, 'Shows', 7, 2),
(17, 'Shows', 7, 2),
(18, 'Shows', 7, 2),
(19, 'Shows', 7, 2),
(20, 'Episodes', 7, 1),
(21, 'Shows', 7, 2),
(22, 'Shows', 7, 2),
(23, 'Shows', 7, 2),
(25, 'Shows', 6, 2),
(26, 'Shows', 6, 2),
(27, 'Shows', 6, 3),
(28, 'Shows', 6, 3),
(29, 'Shows', 6, 3),
(31, 'Shows', 6, 7),
(32, 'Episodes', 6, 4),
(33, 'Episodes', 6, 5),
(34, 'Episodes', 6, 6),
(35, 'Episodes', 6, 7),
(36, 'Shows', 6, 7),
(37, 'Shows', 6, 7),
(38, 'Shows', 6, 7),
(39, 'Shows', 6, 7),
(40, 'Shows', 6, 2),
(41, 'Shows', 6, 2),
(43, 'Shows', 6, 7),
(45, 'Shows', 6, 7),
(46, 'Episodes', 1, 5),
(47, 'Shows', 6, 7),
(48, 'Shows', 6, 7),
(49, 'Shows', 6, 7),
(50, 'Shows', 6, 7),
(51, 'Shows', 6, 7),
(52, 'Shows', 6, 7),
(53, 'Shows', 6, 7),
(54, 'Shows', 6, 7),
(55, 'Shows', 6, 7),
(56, 'Shows', 6, 7),
(57, 'Shows', 6, 7),
(58, 'Shows', 6, 7),
(59, 'Shows', 6, 7),
(60, 'Shows', 6, 7),
(61, 'Shows', 6, 7),
(62, 'Shows', 6, 7),
(63, 'Shows', 6, 7),
(64, 'Episodes', 1, 6),
(65, 'Sports', 1, 1),
(66, 'Movies', 11, 2),
(67, 'Shows', 6, 7),
(68, 'Shows', 6, 7),
(69, 'Shows', 6, 7),
(70, 'Shows', 6, 7),
(71, 'Episodes', 1, 13),
(72, 'Episodes', 1, 9),
(73, 'Shows', 6, 13),
(74, 'Shows', 6, 13),
(75, 'Shows', 6, 13),
(76, 'Movies', 1, 2),
(77, 'Episodes', 1, 14),
(78, 'LiveTV', 6, 1),
(80, 'Shows', 8, 2),
(82, 'Shows', 8, 2),
(83, 'Shows', 8, 2),
(84, 'Shows', 8, 2),
(85, 'Shows', 8, 2),
(86, 'Shows', 8, 2),
(87, 'Shows', 8, 2),
(88, 'Shows', 8, 13),
(89, 'Movies', 8, 2),
(90, 'Movies', 13, 2),
(91, 'Shows', 13, 13),
(93, 'Shows', 14, 2),
(94, 'Shows', 14, 13),
(95, 'Shows', 6, 13),
(96, 'Shows', 6, 13),
(97, 'Shows', 6, 13),
(99, 'Shows', 8, 2),
(100, 'Shows', 8, 2),
(101, 'Movies', 14, 2),
(102, 'Sports', 7, 1),
(103, 'Episodes', 1, 1),
(105, 'Episodes', 13, 1),
(106, 'Movies', 7, 3),
(107, 'Movies', 1, 3),
(108, 'LiveTV', 1, 1),
(109, 'Episodes', 11, 1),
(110, 'Movies', 11, 3),
(111, 'LiveTV', 11, 1),
(112, 'Movies', 37, 3),
(113, 'Episodes', 39, 1),
(114, 'LiveTV', 39, 1),
(115, 'Movies', 39, 3),
(116, 'Movies', 37, 2),
(117, 'Episodes', 37, 1),
(118, 'Movies', 41, 3),
(119, 'Movies', 41, 2),
(120, 'Movies', 42, 2),
(121, 'Episodes', 42, 1),
(122, 'Episodes', 41, 1),
(123, 'Movies', 43, 3),
(124, 'Episodes', 43, 1),
(125, 'Episodes', 44, 1),
(126, 'Episodes', 47, 1),
(127, 'Shows', 55, 1),
(128, 'Shows', 55, 13),
(129, 'Episodes', 52, 31),
(130, 'LiveTV', 53, 1),
(131, 'Episodes', 53, 1),
(132, 'Episodes', 57, 1),
(133, 'Episodes', 54, 1),
(134, 'Movies', 53, 2),
(135, 'Episodes', 58, 1),
(136, 'Episodes', 62, 1),
(137, 'Movies', 50, 3),
(138, 'Episodes', 69, 1),
(139, 'LiveTV', 64, 1),
(140, 'Sports', 58, 1),
(141, 'Episodes', 46, 26),
(142, 'Episodes', 46, 24),
(143, 'Movies', 64, 2),
(144, 'Movies', 73, 2),
(145, 'Movies', 52, 2),
(146, 'Episodes', 75, 1),
(147, 'Movies', 50, 2),
(148, 'Movies', 71, 2),
(149, 'Movies', 71, 3),
(150, 'Episodes', 56, 1),
(151, 'Episodes', 68, 1),
(152, 'Movies', 83, 2),
(153, 'Movies', 56, 2),
(154, 'Movies', 62, 3),
(155, 'Movies', 86, 2),
(156, 'Movies', 83, 3),
(157, 'Episodes', 83, 1),
(158, 'LiveTV', 83, 1),
(159, 'Movies', 87, 2),
(160, 'Episodes', 84, 1),
(161, 'Episodes', 92, 1),
(162, 'Movies', 93, 2),
(163, 'Episodes', 77, 1),
(164, 'Movies', 84, 2),
(165, 'LiveTV', 84, 1),
(166, 'Episodes', 51, 1),
(167, 'Movies', 104, 2),
(168, 'Movies', 75, 2),
(169, 'LiveTV', 96, 1),
(170, 'Episodes', 96, 1),
(171, 'Episodes', 110, 1),
(172, 'Episodes', 115, 1),
(173, 'Episodes', 121, 1),
(174, 'Episodes', 120, 1),
(175, 'Movies', 113, 2),
(176, 'Episodes', 80, 1),
(177, 'Episodes', 97, 1),
(178, 'Episodes', 128, 1),
(179, 'Sports', 129, 1),
(180, 'Movies', 130, 2),
(181, 'Episodes', 123, 1),
(182, 'Movies', 125, 2),
(183, 'Movies', 122, 2),
(184, 'Movies', 122, 3),
(185, 'Movies', 135, 2),
(186, 'Episodes', 113, 15),
(187, 'Episodes', 113, 18),
(188, 'Episodes', 116, 1),
(189, 'Movies', 117, 2),
(190, 'Movies', 51, 2),
(191, 'Movies', 51, 3),
(192, 'Episodes', 51, 29),
(193, 'Episodes', 51, 30),
(194, 'Episodes', 51, 12),
(195, 'Episodes', 139, 1),
(196, 'LiveTV', 122, 1),
(197, 'LiveTV', 125, 1),
(198, 'Movies', 136, 2),
(199, 'Episodes', 144, 1),
(200, 'Episodes', 116, 4),
(201, 'Movies', 142, 2),
(202, 'Movies', 114, 2),
(203, 'Movies', 117, 3),
(204, 'Movies', 77, 2),
(205, 'Movies', 77, 3),
(206, 'Episodes', 117, 16),
(207, 'Episodes', 117, 15),
(208, 'Episodes', 117, 14),
(209, 'Movies', 146, 2),
(210, 'Movies', 120, 2),
(211, 'Movies', 135, 3),
(212, 'Movies', 148, 2),
(213, 'LiveTV', 120, 1),
(214, 'Movies', 72, 2),
(215, 'Movies', 144, 2),
(216, 'Episodes', 66, 1),
(217, 'LiveTV', 144, 1),
(218, 'Movies', 139, 2),
(219, 'Movies', 66, 2),
(220, 'Movies', 139, 3),
(221, 'Movies', 149, 2),
(222, 'Episodes', 136, 1),
(223, 'Movies', 136, 3),
(224, 'Episodes', 120, 28),
(225, 'Movies', 146, 3),
(226, 'Movies', 152, 2),
(227, 'Movies', 142, 3),
(228, 'Movies', 47, 2),
(229, 'Movies', 47, 3),
(230, 'LiveTV', 47, 1),
(231, 'Movies', 72, 3),
(232, 'Movies', 59, 2),
(233, 'Movies', 156, 2),
(234, 'Movies', 156, 3),
(235, 'Movies', 157, 2),
(236, 'Episodes', 153, 1),
(237, 'LiveTV', 66, 1),
(238, 'Movies', 59, 3),
(239, 'Episodes', 101, 1),
(240, 'Episodes', 156, 1),
(241, 'Movies', 160, 2),
(242, 'Movies', 121, 3),
(243, 'Movies', 121, 2),
(244, 'Episodes', 160, 32),
(245, 'Movies', 162, 2),
(246, 'Episodes', 99, 1),
(247, 'Movies', 162, 3),
(248, 'Episodes', 162, 1),
(249, 'Movies', 163, 2),
(250, 'Movies', 165, 2),
(251, 'LiveTV', 165, 1),
(252, 'Episodes', 164, 1),
(253, 'Movies', 128, 3),
(254, 'Episodes', 100, 1),
(255, 'Episodes', 171, 1),
(256, 'Movies', 157, 3),
(257, 'Movies', 99, 2),
(258, 'Movies', 155, 2),
(259, 'Movies', 176, 2),
(260, 'Movies', 175, 2),
(261, 'Episodes', 102, 1),
(262, 'Movies', 148, 3),
(263, 'Movies', 99, 3),
(264, 'Episodes', 179, 1),
(265, 'Movies', 102, 2),
(266, 'Movies', 102, 3),
(267, 'Movies', 184, 2),
(268, 'Episodes', 181, 1),
(269, 'Movies', 172, 2),
(270, 'Shows', 184, 1),
(271, 'Shows', 184, 1),
(272, 'Shows', 184, 1),
(273, 'Episodes', 184, 1),
(274, 'Shows', 184, 1),
(275, 'Shows', 184, 1),
(276, 'Movies', 185, 2),
(277, 'Movies', 176, 3),
(278, 'LiveTV', 176, 1),
(279, 'Shows', 184, 1),
(280, 'Shows', 184, 1),
(281, 'Movies', 187, 2),
(282, 'Episodes', 186, 1),
(283, 'Movies', 175, 3),
(284, 'LiveTV', 175, 1),
(285, 'Episodes', 175, 36),
(286, 'Episodes', 191, 1),
(287, 'Movies', 171, 2),
(288, 'Movies', 185, 3),
(289, 'LiveTV', 185, 1),
(290, 'Movies', 187, 3),
(291, 'Movies', 186, 3),
(292, 'LiveTV', 187, 1),
(293, 'Episodes', 186, 34),
(294, 'Movies', 184, 3),
(295, 'Movies', 198, 2),
(296, 'Movies', 194, 3),
(297, 'Movies', 194, 2),
(298, 'LiveTV', 194, 1),
(299, 'Episodes', 194, 1),
(300, 'Episodes', 200, 1),
(301, 'Movies', 103, 2),
(302, 'Movies', 204, 2),
(303, 'Movies', 205, 2),
(304, 'Movies', 205, 3),
(305, 'Episodes', 98, 1),
(306, 'Movies', 112, 2),
(307, 'Movies', 112, 3),
(308, 'Episodes', 206, 1),
(309, 'Movies', 211, 2),
(310, 'Movies', 212, 2),
(311, 'Movies', 54, 2),
(312, 'LiveTV', 210, 1),
(313, 'Episodes', 210, 1),
(314, 'Movies', 81, 2),
(315, 'Episodes', 74, 1),
(316, 'Movies', 190, 2),
(317, 'Movies', 223, 2),
(318, 'Movies', 74, 2),
(319, 'Episodes', 221, 1),
(320, 'Movies', 223, 3),
(321, 'Episodes', 225, 1),
(322, 'Movies', 224, 2),
(323, 'Movies', 221, 2),
(324, 'Movies', 221, 3),
(325, 'Episodes', 221, 16),
(326, 'Movies', 227, 2),
(327, 'Movies', 169, 2),
(328, 'Episodes', 229, 1),
(329, 'Episodes', 61, 1),
(330, 'Episodes', 225, 4),
(331, 'Episodes', 234, 1),
(332, 'Movies', 169, 3),
(333, 'Episodes', 169, 1),
(334, 'Movies', 224, 3),
(335, 'Movies', 74, 3),
(336, 'Episodes', 238, 1),
(337, 'Episodes', 74, 16),
(338, 'Episodes', 240, 1),
(339, 'Movies', 242, 2),
(340, 'Movies', 238, 2),
(341, 'Movies', 238, 3),
(342, 'Episodes', 240, 22),
(343, 'LiveTV', 128, 1),
(344, 'Movies', 247, 2),
(345, 'Episodes', 250, 1),
(347, 'Movies', 250, 2),
(348, 'Episodes', 254, 1),
(349, 'Movies', 251, 2),
(350, 'Movies', 70, 2),
(351, 'Movies', 70, 3),
(352, 'Movies', 247, 3),
(353, 'LiveTV', 247, 1),
(355, 'Episodes', 255, 1),
(356, 'Movies', 244, 2),
(357, 'Movies', 256, 2),
(358, 'Movies', 209, 2),
(359, 'Episodes', 70, 4),
(361, 'Movies', 259, 2),
(366, 'Movies', 244, 3),
(367, 'Episodes', 95, 1),
(368, 'Episodes', 244, 1),
(377, 'Episodes', 249, 15),
(378, 'Episodes', 249, 17),
(379, 'Episodes', 249, 18),
(380, 'Episodes', 249, 19),
(381, 'Movies', 249, 2),
(382, 'Movies', 259, 3),
(383, 'LiveTV', 259, 1),
(384, 'Movies', 263, 2),
(385, 'Movies', 264, 2),
(386, 'Episodes', 242, 1),
(387, 'Episodes', 249, 4),
(388, 'Movies', 262, 2),
(389, 'Movies', 46, 2),
(390, 'Episodes', 262, 1),
(391, 'Movies', 46, 3),
(392, 'LiveTV', 254, 1),
(393, 'Movies', 275, 2),
(394, 'Shows', 6, 1),
(395, 'Episodes', 6, 1),
(396, 'Movies', 6, 2),
(397, 'Movies', 276, 2),
(398, 'Movies', 278, 2),
(399, 'Episodes', 277, 1),
(400, 'Movies', 172, 3),
(401, 'Episodes', 172, 1),
(402, 'Movies', 276, 3),
(403, 'LiveTV', 276, 1),
(404, 'Episodes', 276, 36),
(405, 'Movies', 274, 2),
(406, 'Movies', 281, 2),
(407, 'Episodes', 284, 1),
(408, 'Movies', 281, 3),
(409, 'Movies', 285, 2),
(410, 'Movies', 287, 2),
(411, 'Movies', 286, 2),
(412, 'Movies', 188, 2),
(413, 'Movies', 286, 3),
(414, 'LiveTV', 286, 1),
(415, 'LiveTV', 287, 1),
(417, 'Episodes', 290, 1),
(421, 'Sports', 270, 1),
(422, 'Episodes', 258, 1),
(423, 'LiveTV', 293, 1),
(424, 'LiveTV', 258, 1),
(425, 'Movies', 293, 2),
(426, 'Episodes', 295, 1),
(427, 'Episodes', 293, 13),
(428, 'Episodes', 293, 36),
(429, 'Episodes', 295, 4),
(430, 'Movies', 298, 2),
(431, 'Movies', 298, 3),
(432, 'LiveTV', 298, 1),
(433, 'Movies', 300, 2),
(434, 'Movies', 301, 2),
(435, 'Episodes', 300, 1),
(436, 'Movies', 293, 3),
(437, 'Movies', 258, 2),
(438, 'Movies', 69, 2),
(439, 'Movies', 303, 3),
(440, 'Movies', 303, 2),
(441, 'Episodes', 306, 1),
(442, 'Movies', 219, 2),
(443, 'Episodes', 219, 7),
(444, 'Episodes', 219, 22),
(445, 'Episodes', 219, 13),
(446, 'Episodes', 219, 32),
(447, 'Movies', 309, 3),
(448, 'Movies', 309, 2),
(449, 'Movies', 123, 2),
(450, 'Movies', 79, 2),
(451, 'Movies', 310, 3),
(452, 'Movies', 310, 2),
(453, 'LiveTV', 216, 1),
(454, 'Movies', 311, 2),
(455, 'Movies', 301, 3),
(456, 'Movies', 311, 3),
(457, 'Episodes', 45, 1),
(458, 'Episodes', 311, 1),
(459, 'LiveTV', 311, 1),
(460, 'Episodes', 248, 1),
(461, 'Movies', 248, 2),
(462, 'Movies', 248, 3),
(463, 'Episodes', 248, 22),
(464, 'Movies', 315, 2),
(465, 'Episodes', 249, 14),
(466, 'Episodes', 140, 1),
(468, 'Movies', 317, 3),
(469, 'Movies', 317, 2),
(473, 'Movies', 140, 2),
(475, 'Episodes', 318, 1),
(489, 'Movies', 319, 2),
(492, 'Episodes', 323, 1),
(493, 'Movies', 251, 3),
(494, 'Movies', 296, 2),
(495, 'Movies', 278, 3),
(497, 'Episodes', 289, 15),
(498, 'Episodes', 289, 14),
(499, 'Episodes', 289, 16),
(500, 'Movies', 326, 2),
(501, 'Movies', 326, 3),
(502, 'Episodes', 326, 1),
(503, 'Movies', 329, 3),
(504, 'Movies', 329, 2),
(505, 'LiveTV', 329, 1),
(506, 'Episodes', 329, 1),
(507, 'Episodes', 289, 22),
(508, 'LiveTV', 289, 1),
(509, 'Episodes', 289, 4),
(510, 'Episodes', 289, 13),
(511, 'Episodes', 289, 5),
(512, 'Episodes', 289, 18),
(513, 'Episodes', 289, 17),
(514, 'Movies', 321, 2),
(515, 'Episodes', 329, 29),
(516, 'Episodes', 329, 30),
(517, 'Movies', 331, 2),
(518, 'Episodes', 307, 1),
(519, 'Sports', 307, 1),
(520, 'Movies', 307, 3),
(521, 'Episodes', 316, 22),
(522, 'Episodes', 316, 1),
(523, 'Episodes', 316, 12),
(524, 'LiveTV', 334, 1),
(525, 'Movies', 334, 2),
(526, 'Sports', 334, 1),
(527, 'Movies', 316, 2),
(528, 'Episodes', 316, 13),
(529, 'LiveTV', 315, 1),
(530, 'Movies', 315, 3),
(531, 'LiveTV', 316, 1),
(532, 'Episodes', 316, 5),
(533, 'Movies', 277, 2),
(534, 'Movies', 277, 3),
(535, 'Movies', 342, 2),
(536, 'Episodes', 226, 1),
(537, 'Movies', 342, 3),
(538, 'Movies', 119, 2),
(539, 'Movies', 186, 2),
(540, 'Movies', 350, 2),
(541, 'Movies', 350, 3),
(542, 'Movies', 351, 2),
(543, 'Movies', 118, 2),
(544, 'Episodes', 350, 1),
(545, 'Movies', 201, 2),
(546, 'Episodes', 201, 1),
(547, 'Episodes', 360, 1),
(548, 'LiveTV', 44, 1),
(549, 'Movies', 44, 2),
(550, 'Episodes', 357, 1),
(551, 'Episodes', 360, 22),
(552, 'Episodes', 362, 1),
(553, 'Episodes', 362, 15),
(554, 'Episodes', 362, 14),
(555, 'Movies', 362, 2),
(556, 'Movies', 365, 2),
(557, 'Movies', 357, 3),
(558, 'Episodes', 316, 14),
(559, 'Episodes', 316, 4),
(560, 'Movies', 367, 3),
(561, 'Movies', 367, 2),
(562, 'LiveTV', 367, 1),
(563, 'Sports', 367, 1),
(564, 'Movies', 368, 2),
(565, 'Episodes', 365, 1),
(566, 'Episodes', 368, 1),
(567, 'Movies', 368, 3),
(568, 'Episodes', 370, 1),
(569, 'Episodes', 368, 36),
(570, 'Movies', 372, 2),
(571, 'Episodes', 370, 14),
(572, 'Movies', 370, 2),
(573, 'Movies', 370, 3),
(574, 'LiveTV', 370, 1),
(575, 'Episodes', 370, 36),
(576, 'Movies', 373, 2),
(577, 'Movies', 373, 3),
(578, 'Movies', 376, 2),
(579, 'Episodes', 249, 1),
(580, 'Episodes', 377, 1),
(581, 'LiveTV', 377, 1),
(582, 'Episodes', 249, 16),
(583, 'Movies', 378, 2),
(584, 'Movies', 381, 2),
(585, 'Sports', 316, 1),
(586, 'Episodes', 315, 1),
(587, 'Movies', 384, 2),
(588, 'Movies', 385, 2),
(589, 'Movies', 384, 3),
(590, 'Movies', 357, 2),
(591, 'LiveTV', 357, 1),
(592, 'Movies', 389, 2),
(593, 'Episodes', 127, 1),
(594, 'Movies', 191, 2),
(595, 'Movies', 191, 3),
(596, 'Movies', 324, 2),
(597, 'Shows', 184, 13),
(598, 'Shows', 184, 36),
(599, 'Shows', 184, 36),
(600, 'Shows', 184, 13),
(601, 'Episodes', 251, 1),
(602, 'Episodes', 225, 36),
(603, 'Episodes', 124, 1),
(604, 'Episodes', 166, 1),
(605, 'Episodes', 321, 29),
(606, 'Shows', 186, 1),
(607, 'Shows', 186, 13),
(608, 'Episodes', 264, 1),
(609, 'Episodes', 225, 5),
(610, 'Episodes', 225, 6),
(611, 'Movies', 229, 2),
(612, 'Shows', 390, 13),
(613, 'Shows', 390, 13),
(614, 'Shows', 390, 13),
(615, 'Movies', 390, 3),
(616, 'Movies', 390, 2),
(617, 'Movies', 39, 2),
(618, 'Shows', 184, 13),
(619, 'Shows', 184, 36),
(620, 'Shows', 184, 36),
(621, 'Shows', 184, 13),
(622, 'Episodes', 264, 36),
(623, 'Movies', 249, 3),
(624, 'LiveTV', 384, 1),
(625, 'Movies', 44, 3),
(626, 'Episodes', 205, 1),
(627, 'Sports', 84, 1),
(628, 'Movies', 395, 2),
(629, 'LiveTV', 395, 1),
(630, 'Episodes', 104, 1),
(631, 'LiveTV', 70, 1),
(632, 'LiveTV', 136, 1),
(633, 'Episodes', 225, 19),
(634, 'Episodes', 225, 21),
(635, 'Episodes', 225, 22),
(636, 'Episodes', 389, 1),
(637, 'Episodes', 225, 7),
(638, 'Episodes', 225, 9),
(639, 'Shows', 184, 13),
(640, 'Shows', 184, 13),
(641, 'Shows', 184, 13),
(642, 'Shows', 184, 13),
(643, 'Shows', 184, 13),
(644, 'Movies', 56, 3),
(645, 'Shows', 184, 1),
(646, 'Shows', 184, 1),
(647, 'Shows', 184, 1),
(648, 'Shows', 184, 1),
(649, 'Shows', 184, 1),
(650, 'Shows', 184, 1),
(651, 'Shows', 184, 1),
(652, 'Shows', 184, 1),
(653, 'Shows', 184, 1),
(654, 'Shows', 184, 1),
(655, 'Shows', 184, 1),
(656, 'Shows', 184, 1),
(657, 'Shows', 184, 1),
(658, 'Shows', 184, 1),
(659, 'Shows', 184, 1),
(660, 'Shows', 184, 1),
(661, 'Shows', 184, 1),
(662, 'Shows', 8, 1),
(663, 'Shows', 8, 1),
(664, 'Shows', 8, 13),
(665, 'Shows', 84, 1),
(666, 'Shows', 84, 1),
(667, 'Shows', 84, 1),
(668, 'Shows', 84, 1),
(669, 'Shows', 84, 1),
(670, 'Movies', 84, 3),
(671, 'Shows', 84, 1),
(672, 'Movies', 92, 2),
(673, 'Movies', 8, 3),
(674, 'Movies', 396, 2),
(675, 'Movies', 396, 3),
(676, 'Episodes', 396, 1),
(677, 'LiveTV', 396, 1),
(678, 'Shows', 8, 1),
(679, 'Shows', 8, 13),
(680, 'Shows', 186, 1),
(681, 'Shows', 186, 13),
(682, 'Shows', 186, 1),
(683, 'Shows', 186, 1),
(684, 'Shows', 186, 1),
(685, 'Shows', 186, 13),
(686, 'Movies', 58, 2),
(687, 'Movies', 400, 2),
(688, 'LiveTV', 400, 1),
(689, 'Movies', 400, 3),
(690, 'Shows', 400, 13),
(691, 'Shows', 400, 13),
(692, 'Episodes', 400, 4),
(693, 'Shows', 400, 13),
(694, 'Shows', 400, 13),
(695, 'Shows', 400, 13),
(696, 'Shows', 400, 13),
(697, 'Shows', 400, 22),
(698, 'Shows', 400, 22),
(699, 'Movies', 402, 2),
(700, 'LiveTV', 402, 1),
(701, 'Movies', 409, 3),
(703, 'Sports', 409, 1),
(704, 'Movies', 409, 2),
(705, 'Episodes', 409, 1),
(706, 'Movies', 410, 3),
(707, 'Movies', 410, 2),
(708, 'Movies', 411, 3),
(709, 'Shows', 411, 13),
(710, 'Shows', 411, 13),
(711, 'Shows', 411, 13),
(712, 'Shows', 411, 22),
(713, 'Shows', 411, 22),
(714, 'Shows', 411, 13),
(715, 'Shows', 411, 36),
(716, 'Shows', 411, 36),
(717, 'Shows', 411, 13),
(718, 'Shows', 411, 13),
(719, 'Shows', 411, 13),
(720, 'Shows', 411, 22),
(721, 'Shows', 411, 22),
(722, 'Shows', 411, 1),
(723, 'Movies', 411, 2),
(724, 'Shows', 411, 13),
(725, 'Shows', 411, 13),
(726, 'Shows', 411, 13),
(727, 'Shows', 411, 13),
(728, 'Shows', 411, 13),
(729, 'Shows', 411, 13),
(730, 'Shows', 411, 13),
(731, 'Shows', 411, 13),
(732, 'Episodes', 411, 5),
(733, 'Shows', 411, 1),
(734, 'Episodes', 411, 1),
(735, 'Shows', 411, 13),
(736, 'Episodes', 411, 6),
(737, 'Shows', 411, 1),
(738, 'Shows', 411, 1),
(739, 'Shows', 411, 13),
(740, 'Episodes', 411, 4),
(741, 'Shows', 411, 1),
(742, 'Shows', 411, 1),
(743, 'Shows', 411, 1),
(744, 'Shows', 411, 1),
(745, 'Shows', 411, 1),
(746, 'Shows', 411, 1),
(747, 'Shows', 411, 1),
(748, 'Shows', 411, 1),
(749, 'LiveTV', 411, 1),
(750, 'Shows', 411, 13),
(751, 'Shows', 411, 1),
(752, 'Shows', 411, 13),
(753, 'Shows', 411, 1),
(754, 'Shows', 411, 13),
(755, 'Shows', 411, 13),
(756, 'Shows', 411, 13),
(757, 'Shows', 411, 13),
(758, 'Shows', 411, 13),
(759, 'Shows', 411, 13),
(760, 'Shows', 411, 13),
(761, 'Shows', 411, 13),
(762, 'Shows', 411, 13),
(763, 'Sports', 411, 1),
(764, 'Shows', 411, 13),
(765, 'Shows', 411, 1),
(766, 'Shows', 411, 13),
(767, 'Shows', 411, 1),
(768, 'Shows', 411, 1),
(769, 'Shows', 411, 1),
(770, 'Shows', 411, 1),
(771, 'Shows', 411, 13),
(772, 'Shows', 411, 1),
(773, 'Shows', 411, 1),
(774, 'Shows', 411, 1),
(775, 'Shows', 411, 1),
(776, 'Shows', 411, 1),
(777, 'Shows', 411, 1),
(778, 'Shows', 411, 1),
(779, 'Shows', 411, 1),
(780, 'Shows', 411, 1),
(781, 'Shows', 411, 1),
(782, 'Shows', 411, 1),
(783, 'Shows', 411, 13),
(784, 'Shows', 411, 1),
(785, 'Shows', 411, 13),
(786, 'Shows', 411, 1),
(787, 'Shows', 411, 13),
(788, 'Shows', 411, 13),
(789, 'Shows', 411, 1),
(790, 'Shows', 411, 13),
(791, 'Shows', 411, 1),
(792, 'Shows', 411, 1),
(793, 'Shows', 411, 13),
(794, 'Shows', 411, 1),
(795, 'Shows', 411, 13),
(796, 'Shows', 411, 1),
(797, 'Shows', 411, 13),
(798, 'Shows', 411, 1),
(799, 'Shows', 411, 13),
(800, 'Shows', 411, 13),
(801, 'Shows', 411, 1),
(802, 'Shows', 411, 1),
(803, 'Shows', 411, 1),
(804, 'Shows', 411, 1),
(805, 'Shows', 411, 1),
(806, 'Shows', 411, 1),
(807, 'Shows', 411, 1),
(808, 'Shows', 411, 1),
(809, 'Shows', 411, 1),
(810, 'Shows', 411, 1),
(811, 'Shows', 411, 1),
(812, 'Shows', 411, 1),
(813, 'Shows', 411, 1),
(814, 'Shows', 411, 1),
(815, 'Shows', 411, 1),
(816, 'Shows', 411, 1),
(817, 'Shows', 411, 1),
(818, 'Shows', 411, 13),
(819, 'Shows', 411, 13),
(820, 'Shows', 411, 1),
(821, 'Shows', 411, 13),
(822, 'Shows', 411, 1),
(823, 'Shows', 411, 13),
(824, 'Shows', 411, 1),
(825, 'Shows', 411, 1),
(826, 'Shows', 411, 13),
(827, 'Shows', 411, 13),
(828, 'Shows', 411, 13),
(829, 'Shows', 411, 13),
(830, 'Shows', 411, 13),
(831, 'Shows', 411, 13),
(832, 'Shows', 411, 13),
(833, 'Shows', 411, 13),
(834, 'Shows', 411, 13),
(835, 'Shows', 411, 13),
(836, 'Shows', 411, 13),
(837, 'Shows', 411, 13),
(838, 'Shows', 411, 13),
(839, 'Shows', 411, 13),
(840, 'Shows', 411, 13),
(841, 'Shows', 411, 13),
(842, 'Shows', 411, 13),
(843, 'Shows', 411, 13),
(844, 'Shows', 411, 13),
(845, 'Shows', 411, 13),
(846, 'Shows', 411, 13),
(847, 'Shows', 411, 13),
(848, 'Shows', 411, 13),
(849, 'Shows', 411, 13),
(850, 'Shows', 411, 13),
(851, 'Shows', 411, 1),
(852, 'Shows', 411, 1),
(853, 'Shows', 411, 1),
(854, 'Shows', 411, 1),
(855, 'Shows', 411, 13),
(856, 'Shows', 411, 13),
(857, 'Shows', 411, 13),
(858, 'Shows', 411, 13),
(859, 'Shows', 411, 13),
(860, 'Shows', 411, 1),
(861, 'Shows', 411, 13),
(862, 'Shows', 411, 1),
(863, 'Shows', 411, 1),
(864, 'Shows', 411, 13),
(865, 'Shows', 411, 1),
(866, 'Shows', 411, 13),
(867, 'Episodes', 411, 7),
(868, 'Movies', 12, 2),
(869, 'Shows', 411, 13),
(870, 'Shows', 411, 13),
(871, 'Shows', 411, 1),
(872, 'Shows', 411, 1),
(873, 'Shows', 411, 1),
(874, 'Shows', 411, 1),
(875, 'Shows', 411, 1),
(876, 'Shows', 411, 1),
(877, 'Shows', 411, 1),
(878, 'Shows', 411, 1),
(879, 'Shows', 411, 1),
(880, 'Shows', 411, 1),
(881, 'Shows', 411, 1),
(882, 'Shows', 411, 1),
(883, 'Shows', 411, 1),
(884, 'Shows', 411, 1),
(885, 'Shows', 411, 1),
(886, 'Shows', 411, 1),
(887, 'Shows', 411, 1),
(888, 'Movies', 409, 5),
(889, 'Shows', 409, 13),
(890, 'Shows', 409, 13),
(891, 'Movies', 415, 5),
(892, 'Shows', 409, 1),
(893, 'Shows', 409, 13),
(894, 'Movies', 415, 3),
(895, 'Shows', 409, 1),
(896, 'Shows', 409, 13),
(897, 'Shows', 409, 13),
(898, 'Episodes', 409, 10),
(899, 'Shows', 409, 1),
(900, 'Movies', 409, 6),
(901, 'Shows', 409, 1),
(902, 'Shows', 409, 1),
(903, 'Shows', 409, 13),
(904, 'Episodes', 409, 4),
(905, 'Episodes', 409, 5),
(906, 'Shows', 409, 1),
(907, 'Shows', 409, 1),
(908, 'LiveTV', 409, 1),
(909, 'Movies', 409, 7),
(910, 'Shows', 415, 1),
(911, 'Sports', 409, 2),
(912, 'Shows', 409, 13),
(913, 'Shows', 409, 13),
(914, 'Shows', 415, 13),
(915, 'LiveTV', 415, 1),
(916, 'Shows', 415, 13),
(917, 'Shows', 415, 13),
(918, 'Episodes', 415, 4),
(919, 'Shows', 415, 13),
(920, 'Shows', 409, 1),
(922, 'Shows', 409, 13),
(923, 'Movies', 415, 7),
(924, 'Shows', 415, 36),
(925, 'Shows', 415, 36),
(926, 'Shows', 415, 36),
(927, 'Shows', 415, 36),
(928, 'Shows', 415, 36),
(929, 'Shows', 415, 36),
(930, 'Shows', 415, 36),
(931, 'Shows', 415, 36),
(932, 'Shows', 415, 36),
(933, 'Shows', 415, 36),
(934, 'Shows', 415, 36),
(935, 'Shows', 415, 36),
(936, 'Shows', 415, 36),
(937, 'Shows', 415, 36),
(938, 'Shows', 415, 36),
(939, 'Shows', 415, 36),
(940, 'Shows', 415, 36),
(941, 'Shows', 415, 36),
(942, 'Shows', 415, 36),
(943, 'Episodes', 415, 36),
(944, 'Movies', 409, 9),
(945, 'Shows', 415, 36),
(946, 'Shows', 415, 36),
(947, 'Shows', 415, 36),
(948, 'Shows', 409, 36),
(949, 'Shows', 409, 36),
(950, 'Shows', 409, 36),
(951, 'Episodes', 409, 36),
(952, 'Movies', 409, 10),
(953, 'Movies', 409, 11),
(954, 'Movies', 409, 12),
(955, 'Movies', 409, 13),
(956, 'Movies', 409, 14),
(957, 'Movies', 409, 15),
(958, 'Movies', 409, 16),
(959, 'Movies', 415, 15),
(960, 'Movies', 415, 11),
(961, 'Movies', 415, 10),
(962, 'Shows', 409, 36),
(963, 'Shows', 409, 36),
(964, 'LiveTV', 409, 2),
(965, 'Shows', 409, 36),
(966, 'Movies', 409, 17),
(967, 'Sports', 409, 3),
(969, 'Shows', 409, 36),
(970, 'Shows', 409, 36),
(971, 'Shows', 409, 36),
(972, 'Shows', 409, 36),
(973, 'Shows', 409, 36),
(974, 'Movies', 409, 19),
(977, 'Shows', 409, 36),
(978, 'Shows', 409, 36),
(979, 'Shows', 409, 36),
(980, 'Shows', 409, 36),
(981, 'Shows', 409, 36),
(982, 'Shows', 409, 36),
(983, 'Shows', 409, 36),
(984, 'Shows', 409, 36),
(985, 'Shows', 409, 36),
(986, 'Shows', 409, 36),
(987, 'Shows', 415, 36),
(988, 'Shows', 409, 36),
(989, 'Shows', 415, 36),
(990, 'Movies', 415, 19),
(991, 'Shows', 409, 36),
(992, 'Shows', 409, 36),
(993, 'LiveTV', 409, 6),
(994, 'LiveTV', 409, 3),
(995, 'LiveTV', 409, 7),
(996, 'LiveTV', 409, 11),
(997, 'LiveTV', 409, 15),
(998, 'LiveTV', 409, 14),
(999, 'LiveTV', 409, 5),
(1000, 'Shows', 409, 36),
(1001, 'Shows', 409, 36),
(1002, 'Shows', 409, 36),
(1003, 'Shows', 409, 36),
(1004, 'Shows', 409, 36),
(1005, 'Shows', 409, 36),
(1006, 'LiveTV', 409, 10),
(1007, 'LiveTV', 409, 13),
(1008, 'LiveTV', 409, 8),
(1009, 'LiveTV', 409, 4),
(1010, 'Movies', 409, 22),
(1011, 'Movies', 409, 23),
(1012, 'Movies', 409, 24),
(1013, 'Movies', 409, 25),
(1014, 'Movies', 409, 26),
(1015, 'Movies', 409, 27),
(1016, 'Movies', 409, 28),
(1017, 'Movies', 409, 29),
(1018, 'Movies', 409, 30),
(1019, 'Movies', 409, 31),
(1021, 'Shows', 409, 36),
(1022, 'Shows', 409, 36),
(1023, 'Movies', 409, 33),
(1024, 'Movies', 409, 34),
(1025, 'Movies', 409, 35),
(1026, 'Movies', 409, 36),
(1027, 'Movies', 409, 37),
(1028, 'Movies', 409, 38),
(1029, 'Movies', 409, 39),
(1030, 'Movies', 409, 40),
(1031, 'Movies', 409, 41),
(1032, 'Movies', 409, 42),
(1033, 'Movies', 409, 43),
(1034, 'Movies', 409, 44),
(1035, 'Movies', 409, 45),
(1036, 'Movies', 409, 46),
(1037, 'Movies', 409, 47),
(1038, 'Movies', 409, 48),
(1039, 'Movies', 409, 49),
(1040, 'Shows', 415, 36),
(1041, 'Shows', 415, 36),
(1042, 'Shows', 415, 36),
(1043, 'Shows', 415, 36),
(1044, 'Shows', 415, 36),
(1045, 'Shows', 415, 36),
(1046, 'Shows', 415, 36),
(1047, 'Shows', 415, 36),
(1048, 'Shows', 415, 36),
(1049, 'Shows', 415, 36),
(1050, 'Shows', 415, 36),
(1051, 'Shows', 415, 36),
(1052, 'Shows', 415, 36),
(1053, 'Shows', 415, 36),
(1054, 'Shows', 415, 36),
(1055, 'Shows', 415, 36),
(1056, 'Shows', 415, 36),
(1057, 'Shows', 415, 36),
(1058, 'Shows', 415, 36),
(1059, 'Shows', 415, 36),
(1060, 'Movies', 409, 51),
(1061, 'Movies', 409, 52),
(1062, 'Movies', 409, 53),
(1063, 'Movies', 409, 54),
(1064, 'Movies', 409, 56),
(1065, 'Movies', 409, 57),
(1066, 'Movies', 409, 58),
(1067, 'LiveTV', 415, 14),
(1068, 'LiveTV', 415, 15),
(1069, 'LiveTV', 415, 13),
(1070, 'LiveTV', 415, 10),
(1071, 'LiveTV', 415, 3),
(1072, 'LiveTV', 415, 5),
(1073, 'LiveTV', 415, 4),
(1074, 'Shows', 415, 36),
(1075, 'Shows', 409, 36),
(1076, 'Shows', 409, 36),
(1077, 'Shows', 409, 36),
(1078, 'Shows', 409, 36),
(1079, 'Shows', 409, 36),
(1080, 'Movies', 409, 59),
(1081, 'Movies', 409, 60),
(1082, 'Movies', 409, 61),
(1083, 'Movies', 409, 62),
(1084, 'Movies', 409, 63),
(1085, 'Movies', 409, 64),
(1086, 'Movies', 409, 65),
(1087, 'Movies', 415, 16),
(1088, 'Shows', 415, 36),
(1089, 'Movies', 409, 67),
(1090, 'Movies', 409, 68),
(1091, 'Movies', 409, 69),
(1092, 'Movies', 409, 70),
(1093, 'Movies', 415, 6),
(1094, 'Movies', 409, 71),
(1095, 'Movies', 409, 72),
(1096, 'Movies', 415, 70),
(1097, 'Movies', 415, 30),
(1098, 'Movies', 415, 42),
(1099, 'Shows', 415, 36),
(1100, 'Shows', 409, 36),
(1101, 'Shows', 415, 36),
(1102, 'Shows', 415, 36),
(1103, 'Shows', 415, 36),
(1104, 'Shows', 415, 36),
(1105, 'Shows', 415, 36),
(1106, 'Shows', 415, 36),
(1107, 'LiveTV', 415, 6),
(1108, 'Shows', 415, 36),
(1109, 'Movies', 415, 31),
(1110, 'Movies', 415, 9),
(1111, 'Shows', 415, 36),
(1112, 'Shows', 415, 36),
(1113, 'Shows', 415, 36),
(1114, 'Shows', 415, 36),
(1115, 'LiveTV', 421, 15),
(1124, 'Movies', 425, 46),
(1125, 'Shows', 409, 36),
(1126, 'Shows', 409, 36),
(1133, 'Movies', 426, 6),
(1134, 'Movies', 426, 2),
(1135, 'Movies', 426, 7),
(1136, 'Movies', 426, 10),
(1137, 'LiveTV', 426, 1),
(1138, 'LiveTV', 426, 15),
(1139, 'Movies', 415, 71),
(1140, 'Movies', 415, 69),
(1141, 'Movies', 415, 55),
(1142, 'Movies', 415, 46),
(1143, 'Movies', 415, 26),
(1144, 'Movies', 427, 16),
(1145, 'Movies', 428, 10),
(1146, 'Movies', 428, 6),
(1147, 'Movies', 428, 9),
(1148, 'Movies', 426, 3),
(1149, 'Movies', 426, 19),
(1150, 'Movies', 426, 16),
(1151, 'Movies', 426, 30),
(1152, 'Movies', 428, 16),
(1158, 'Movies', 422, 42),
(1160, 'Movies', 415, 72),
(1161, 'Movies', 415, 57),
(1163, 'Movies', 422, 16),
(1164, 'Movies', 422, 9),
(1165, 'Movies', 422, 10),
(1166, 'Movies', 419, 7),
(1167, 'LiveTV', 422, 11),
(1168, 'Movies', 432, 16),
(1169, 'Shows', 422, 36),
(1170, 'Movies', 422, 26),
(1176, 'LiveTV', 430, 10),
(1177, 'LiveTV', 430, 8),
(1178, 'LiveTV', 430, 6),
(1179, 'Movies', 430, 42),
(1180, 'Shows', 430, 36),
(1181, 'Episodes', 430, 36),
(1182, 'Movies', 430, 70),
(1183, 'Movies', 430, 14),
(1184, 'Movies', 430, 16),
(1185, 'LiveTV', 430, 15),
(1186, 'Shows', 430, 36),
(1187, 'Shows', 430, 36),
(1188, 'Movies', 430, 10),
(1189, 'Shows', 430, 36),
(1190, 'Movies', 430, 46),
(1191, 'Movies', 430, 48),
(1192, 'LiveTV', 430, 5),
(1193, 'LiveTV', 430, 14),
(1194, 'Movies', 430, 3),
(1195, 'Shows', 430, 36),
(1196, 'Shows', 430, 36),
(1197, 'Shows', 430, 36),
(1198, 'Shows', 430, 36),
(1199, 'Shows', 430, 36),
(1200, 'Shows', 430, 36),
(1201, 'Shows', 430, 36),
(1202, 'Shows', 430, 36),
(1203, 'Shows', 430, 36),
(1204, 'Shows', 430, 36),
(1210, 'Movies', 434, 2),
(1211, 'Shows', 430, 36),
(1215, 'Movies', 423, 44),
(1216, 'LiveTV', 423, 5),
(1217, 'LiveTV', 423, 6),
(1218, 'LiveTV', 423, 15),
(1219, 'Movies', 430, 6),
(1220, 'Movies', 423, 16),
(1221, 'Movies', 423, 7),
(1222, 'Shows', 415, 36),
(1223, 'LiveTV', 415, 11),
(1224, 'LiveTV', 423, 11),
(1225, 'Movies', 415, 37),
(1226, 'Movies', 415, 23),
(1227, 'LiveTV', 423, 2),
(1228, 'Shows', 428, 36),
(1229, 'Movies', 428, 7),
(1230, 'Movies', 428, 44),
(1231, 'Movies', 428, 57),
(1232, 'Movies', 435, 70),
(1233, 'LiveTV', 435, 15),
(1234, 'LiveTV', 418, 14),
(1235, 'LiveTV', 418, 6),
(1236, 'Movies', 423, 68),
(1237, 'Movies', 409, 50),
(1238, 'Movies', 409, 55),
(1239, 'Movies', 423, 12),
(1240, 'Shows', 423, 36),
(1241, 'Movies', 423, 37),
(1242, 'Movies', 423, 5),
(1243, 'Movies', 423, 50),
(1244, 'Movies', 423, 55),
(1245, 'LiveTV', 428, 15),
(1246, 'Shows', 436, 36),
(1247, 'Sports', 409, 4),
(1248, 'Movies', 423, 10),
(1249, 'Movies', 423, 70),
(1250, 'Movies', 409, 73),
(1251, 'Movies', 422, 73),
(1252, 'Movies', 423, 6),
(1253, 'Movies', 423, 30),
(1254, 'Movies', 438, 2),
(1255, 'LiveTV', 415, 8),
(1256, 'Movies', 415, 65),
(1257, 'Movies', 415, 67),
(1258, 'Movies', 415, 68),
(1259, 'Movies', 439, 2),
(1260, 'Movies', 440, 67),
(1261, 'Movies', 415, 73),
(1262, 'Movies', 415, 49),
(1263, 'Movies', 415, 50),
(1264, 'LiveTV', 423, 3),
(1265, 'LiveTV', 423, 14),
(1266, 'LiveTV', 423, 13),
(1267, 'LiveTV', 423, 4),
(1268, 'Movies', 446, 10),
(1269, 'LiveTV', 448, 15),
(1270, 'Movies', 449, 6),
(1271, 'Shows', 449, 36),
(1272, 'Shows', 449, 36),
(1273, 'Movies', 449, 2),
(1274, 'Shows', 449, 36),
(1275, 'Shows', 449, 36),
(1276, 'Shows', 449, 36),
(1277, 'Shows', 449, 36),
(1278, 'Shows', 449, 36),
(1279, 'Shows', 449, 36),
(1280, 'Shows', 449, 36),
(1281, 'Shows', 449, 36),
(1282, 'Shows', 449, 36),
(1283, 'Shows', 449, 36),
(1284, 'Shows', 449, 36),
(1285, 'Shows', 449, 36),
(1286, 'Shows', 449, 36),
(1287, 'Shows', 449, 36),
(1288, 'Movies', 449, 16),
(1289, 'Shows', 449, 36),
(1290, 'Shows', 449, 36),
(1291, 'Shows', 449, 36),
(1292, 'Shows', 449, 36),
(1293, 'Shows', 449, 36),
(1294, 'Shows', 449, 36),
(1295, 'LiveTV', 449, 15),
(1296, 'Movies', 449, 73),
(1297, 'Shows', 449, 36),
(1298, 'Shows', 449, 36),
(1299, 'Shows', 449, 36),
(1300, 'Shows', 415, 36),
(1301, 'Shows', 415, 36),
(1302, 'Shows', 415, 36),
(1303, 'Shows', 415, 36),
(1304, 'Shows', 415, 36),
(1305, 'Shows', 415, 36),
(1306, 'Shows', 415, 36),
(1307, 'Shows', 415, 36),
(1308, 'Shows', 415, 36),
(1309, 'Shows', 415, 36),
(1310, 'Shows', 415, 36),
(1311, 'Shows', 415, 36),
(1312, 'Shows', 415, 36),
(1313, 'Shows', 415, 36),
(1314, 'Shows', 415, 36),
(1315, 'Shows', 415, 36),
(1316, 'Shows', 415, 36),
(1317, 'Shows', 415, 36),
(1318, 'Shows', 415, 36),
(1319, 'Shows', 415, 36),
(1320, 'Shows', 415, 36),
(1321, 'Shows', 415, 36),
(1322, 'Shows', 415, 36),
(1323, 'Shows', 415, 36),
(1324, 'Shows', 449, 36),
(1325, 'Shows', 415, 36),
(1326, 'Shows', 415, 36),
(1327, 'Shows', 415, 36),
(1328, 'Shows', 415, 36),
(1329, 'Shows', 415, 36),
(1330, 'Shows', 415, 36),
(1331, 'Shows', 415, 36),
(1332, 'Shows', 415, 36),
(1333, 'Shows', 415, 36),
(1334, 'Shows', 415, 36),
(1335, 'Shows', 415, 36),
(1336, 'Shows', 415, 36),
(1337, 'Shows', 415, 36),
(1338, 'Shows', 415, 36),
(1339, 'Shows', 415, 36),
(1340, 'Shows', 415, 36),
(1341, 'Shows', 415, 36),
(1342, 'Shows', 415, 36),
(1343, 'Shows', 415, 36),
(1344, 'Shows', 415, 36),
(1345, 'Shows', 415, 36),
(1346, 'Shows', 415, 36),
(1347, 'Shows', 415, 36),
(1348, 'Shows', 415, 36),
(1349, 'Shows', 415, 36),
(1350, 'Shows', 458, 36),
(1351, 'Shows', 458, 36),
(1352, 'Shows', 458, 36),
(1353, 'LiveTV', 415, 7),
(1354, 'Movies', 461, 9),
(1355, 'Movies', 462, 16),
(1356, 'Movies', 462, 6),
(1357, 'Movies', 463, 9),
(1358, 'Movies', 463, 70),
(1359, 'Movies', 463, 3),
(1360, 'LiveTV', 464, 15),
(1361, 'LiveTV', 464, 11),
(1362, 'LiveTV', 465, 11),
(1363, 'Movies', 465, 6),
(1364, 'Movies', 465, 64),
(1365, 'Movies', 465, 55),
(1366, 'Movies', 468, 16),
(1367, 'LiveTV', 468, 14),
(1368, 'Shows', 468, 36),
(1369, 'Movies', 468, 46),
(1370, 'Movies', 468, 36),
(1371, 'LiveTV', 468, 10),
(1372, 'Movies', 468, 9),
(1373, 'Movies', 468, 64),
(1374, 'Movies', 469, 50),
(1375, 'Movies', 469, 49),
(1376, 'Movies', 470, 53),
(1377, 'Movies', 470, 50),
(1378, 'Movies', 473, 46),
(1379, 'Movies', 473, 3),
(1380, 'Movies', 473, 19),
(1381, 'Movies', 473, 10),
(1382, 'Movies', 473, 16),
(1383, 'Movies', 473, 15);

-- --------------------------------------------------------

--
-- Table structure for table `recent_watches`
--

CREATE TABLE `recent_watches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `movie_videos_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_watches`
--

INSERT INTO `recent_watches` (`id`, `user_id`, `movie_videos_id`, `created_at`, `updated_at`) VALUES
(1, 472, 3, '2024-11-01 21:19:49', '2024-11-01 21:19:49'),
(2, 472, 3, '2024-11-01 21:19:54', '2024-11-01 21:19:54'),
(3, 472, 2, '2024-11-01 21:21:43', '2024-11-01 21:21:43'),
(4, 472, 6, '2024-11-01 21:21:48', '2024-11-01 21:21:48'),
(5, 473, 3, '2024-11-03 23:38:11', '2024-11-03 23:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `reels`
--

CREATE TABLE `reels` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_img` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `like_count` int(11) NOT NULL DEFAULT 0,
  `comment_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reels`
--

INSERT INTO `reels` (`id`, `title`, `username`, `user_img`, `video_url`, `status`, `like_count`, `comment_count`, `created_at`, `updated_at`) VALUES
(1, 'Fighting for the last slice of ham at Christmas dinner', 'Fighting', 'http://example.com/demo.jpg', 'https://cdn.muse.ai/u/e8qSVEF/372ac11385c5ccaca29b18e5384b145c55a25187f9c7166e57fb22326b4606f3/videos/video.mp4', '1', 5, 31, NULL, '2024-08-14 09:11:40'),
(2, 'Cooking demo', 'test2', 'test', 'https://assets.mixkit.co/videos/preview/mixkit-taking-photos-from-different-angles-of-a-model-34421-large.mp4', '0', 3, 11, NULL, '2024-08-14 09:11:40'),
(5, 'test', 'tonmoy', 'test.jpg', 'https://assets.mixkit.co/videos/preview/mixkit-young-mother-with-her-little-daughter-decorating-a-christmas-tree-39745-large.mp4', '0', 2, 7, '2023-09-15 07:22:41', '2024-08-14 09:11:40'),
(6, 'Harlem Globetrotters', 'NBA', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/7f2a98eead99e0a49ceee9a7f44f5d2561a0df742ef529e33fd47e530ef80e8c/videos/video.mp4', '1', 3, 4, '2023-09-22 05:42:16', '2024-08-14 09:11:40'),
(8, 'Niña millonaria le tendió una trampa a su madrastra interesada quiere quedarse con la herencia que le dejó su padre junto con su amante', 'TV Show', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/32822ab93bf40141a49210d8a4a8f59191ac409af927d32c2c186f76a9b08066/videos/video.mp4', '1', 3, 0, '2023-09-22 05:55:05', '2024-08-14 09:11:40'),
(10, 'That\\\'s my SISTER', 'That\\\'s my SISTER', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/07da7fccd5a93c9f438fadd958b84bc6c2cd0d332234e571321fe2856c37b4ee/videos/video.mp4', '1', 2, 0, '2023-09-22 06:08:38', '2023-10-25 04:50:21'),
(11, 'Toy Story Andy Catches Woody', 'Toy Story Andy Catches Woody', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/bec4a1336524a687a127077e1e01c5ad338523ecbf88345978dd1ce9b8892448/videos/video.mp4', '1', 1, 0, '2023-09-24 18:51:09', '2023-10-25 04:50:21'),
(12, 'Jade it\\\'s just a regular day here at Hollywood Arts', 'Jade', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/ec27054b30df11badb08a0ddbe3c3f2fd6de740666bd68cdaa035350ab9d63c8/videos/video.mp4', '1', 2, 0, '2023-09-24 18:55:58', '2024-08-29 23:05:00'),
(13, 'Don\\\'t Let the Ball Touch the Ground!', 'Don\\\'t Let the Ball Touch the Ground', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/5115fecfc76b4bdfa1fc4fc5a05b09a9b7a6bb85722a582f12f2894326897641/videos/video.mp4', '1', 1, 0, '2023-09-24 19:20:08', '2024-02-24 15:57:19'),
(14, 'France Vs Argentina Penalties #shorts #france #argentina', 'France Vs Argentina', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/8bab6a935dc73b11492d5733b10f10197a9de6f19ff59ccb7627c32661ff5606/videos/video.mp4', '1', 1, 1, '2023-09-24 19:22:25', '2023-10-25 04:50:21'),
(15, 'despite all the people fighting him, no one can beat Jet Li! #shorts', 'No one can beat Jet Li', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/9588a90fce6b06247ecb83175b830b91c17556d9e61f537d9dca59b28604249e/videos/video.mp4', '1', 2, 4, '2023-09-24 20:02:45', '2024-08-12 05:04:02'),
(16, 'What This Hoarder Has In Her Basement Is SHOCKING #Shorts PD TV', 'What This Hoarder', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/94f2cd15fd49511fb8bea4b6ac352a455bba99d07bfb31b60a5e94327bd24fc9/videos/video.mp4', '1', 0, 0, '2023-09-27 01:13:36', '2023-10-25 04:50:21'),
(17, 'And on Wednesdays they wear pink #twilight', 'Twilight', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/049481c31580e19cf997e78a0f131057f8c4d4b2abd3a9431c38d3e2a233668e/videos/video.mp4', '1', 2, 0, '2023-09-27 03:08:35', '2023-10-25 04:50:21'),
(18, 'EL MEJOR PLAN DEL MUNDO @YoungSwagOn @sagcy894', 'YoungSwagOn', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/f162a2674761c72d70bff6b43f33af5874603bed1d455bffe5d736550c51afeb/videos/video.mp4', '1', 1, 0, '2023-09-27 03:10:13', '2023-10-25 04:50:21'),
(19, 'Raizo vs Ninja squad. Fight scene. Ninja Assassin 2009', 'Ninja Assassin', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/e53e42b36bebafdb8bf50f68734d9e3a462f4c6fa2671cb956fd8c6e17207bcb/videos/video.mp4', '1', 2, 2, '2023-09-27 03:12:14', '2024-08-15 12:46:49'),
(20, 'Pirates of the Caribbean Dead Men Tell No Tales☠️ Jack Sparrow 😂 #shorts #viralvideo', 'Pirates of the Caribbean', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/017c424f50a4dfdf77140e577cfb816cdfd500a88e52b01731bbec6ea3651fcc/videos/video.mp4', '1', 1, 0, '2023-09-27 04:46:46', '2023-10-25 04:50:31'),
(21, 'Creed 3 trailer', 'Creed 3', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/9a4a5528950a0c95357f3e4fafa61f4072070fcc0da63e1d5d783b36ea15d775/videos/video-1080p.mp4', '1', 1, 0, '2023-09-27 04:50:29', '2023-10-25 04:50:31'),
(22, 'Manipula a su hijo por celos', 'TV Show', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/9acd7f7a0ded751174b45b74152beaba2b3b8e84f3514d19b3db9127453bd20b/videos/video.mp4', '1', 0, 0, '2023-09-27 04:52:34', '2023-10-25 04:50:31'),
(23, 'Barbie Margot Robbie, Ryan Gosling', 'Barbie', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/f9a6eae2921680b0ee88f60d8ff5c53f69b0667c3bb37eb1b3905906990d0b72/videos/video.mp4', '1', 1, 0, '2023-09-27 04:57:52', '2023-10-25 04:50:31'),
(24, 'Asi se mide la honestidad 🙌', 'TV Show', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/6b794747435e4fa5a3b2179b76d6d80d986699a6daede73aaa20b26c7954166a/videos/video.mp4', '1', 1, 0, '2023-09-27 05:58:21', '2024-08-11 12:38:32'),
(25, 'DOMINIC TORETTO DRIFT TAPE ‘9 IN MY HAND’', 'Dominic Toretto', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/5a8e133f85553259f4152a52d9a6a7f70bbf736dfa828238bb2d91343c4e4063/videos/video.mp4', '1', 1, 0, '2023-09-28 03:58:13', '2023-10-25 04:50:31'),
(26, 'The Beast Brock Lesanr are calling Nigerian Giant Omos to sing the Contract WWE Wrestlemania 39', 'Brock Lesanr', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/ef3ce8221c802ec6e628b1ebc26f95de6e4e7a8e407db80d2d3d24e623fb3ade/videos/video.mp4', '1', 1, 0, '2023-09-28 04:01:02', '2024-08-12 05:04:43'),
(27, 'FAST X Super Bowl Trailer (2023)', 'Fast X', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/5873b7777f889b3f902efa259d38f6092f4b4f1018e113ccf64e34a9b93fedd7/videos/video.mp4', '1', 1, 0, '2023-09-28 04:02:32', '2024-08-29 23:04:52'),
(28, 'Brock Lesnar brutally attacks Cody Rhodes - WWE RAW 7 17 2023', 'Brock Lesnar brutally attacks Cody Rhodes', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/31aedd50aa0c4d0fa60e213c981dc927d2bc113c94d440f431d6dc29f398815c/videos/video.mp4', '1', 1, 0, '2023-09-29 01:37:40', '2023-10-25 04:50:31'),
(29, 'Bathroom Fight Scene Reacher #reacher #alanritchson #amazon #youtubeshorts #fyp #shorts', 'Bathroom Fight Scene', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/22bf5fe854e7a5e17ba5967cf45428f52d647063d9b5d4e190c297f4b09f4cb5/videos/video.mp4', '1', 0, 0, '2023-09-29 01:38:58', '2023-10-25 04:50:41'),
(30, 'The Art Of Defending', 'The Art Of Defending', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/af32f6b06d8c6500a2bfb0d92e7e9e635477bfc46049315e68568ef5cf893826/videos/video.mp4', '1', 1, 0, '2023-09-29 01:39:54', '2024-08-11 12:21:08'),
(31, 'Beluga Whale Flirting & Squirting', 'Beluga Whale Flirting & Squirting', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/13e05c669fe622bced311e12f411f7293c46e6ddd0985f155a3b92e0451eb6ba/videos/video.mp4', '1', 0, 0, '2023-09-29 01:41:11', '2023-10-25 04:50:41'),
(32, 'Peter Parker vs Flash - Basketball 🏀 - The Amazing Spider-Man', 'Peter Parker vs Flash - Basketball', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/e510e5059377d90a5af4c3b1e333dbd63807edf56fbb4d283bd309405fdeb4732/videos/video.mp4', '1', 0, 0, '2023-09-29 01:42:49', '2023-10-25 04:50:41'),
(33, 'INFINITE Clip - Nora Tries To Kill Bathurst (2021)', 'INFINITE Clip', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/c15308d62577c631a03fa7945490a1fff91190b68efb06e450aed11865dfcd0f/videos/video.mp4', '1', 1, 0, '2023-09-29 02:03:20', '2024-08-08 08:33:53'),
(34, 'Deepika Padukone kicking some serious ASS in Pathaan #Shorts #Pathaan', 'Deepika Padukone', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/b983dadfddd91fb1e4cb108d321dd8375b4d3f39d4cad0f2906df83b10554887/videos/video.mp4', '1', 0, 0, '2023-09-29 02:04:57', '2023-10-25 04:50:41'),
(35, 'kissing in the elevator #shorts', 'Kissing In The Elevator', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/f759ed4acc47479f86f66b40dfa06aede63a17702ea8fc00e51dc431c1a5352f/videos/video.mp4', '1', 0, 0, '2023-09-29 02:06:12', '2023-10-25 04:50:41'),
(36, 'Okay by Jade West (Elizabeth Gillies) 🎤 Victorious #Shorts', 'Elizabeth Gillies', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/69e4f10da1afb5ab2ca3dbf4eae7bda45f77aef44c2cef58209eb5038312adc9/videos/video.mp4', '1', 0, 0, '2023-09-29 02:07:51', '2023-10-25 04:50:41'),
(37, 'So they didn\\\'t catch up with the motorcycle racer', 'So they didn\\\'t catch up with the motorcycle racer', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/b39886a17c38f58ee89be0e63e7369d26ab7028b261657cc4516f1c19de77683/videos/video.mp4', '1', 1, 0, '2023-09-29 02:09:03', '2023-10-25 04:50:41'),
(38, 'Jason Statham vs Max Ryan in the prison cafeteria Death Race (2008)', 'Jason Statham', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/6b486194f1474307ff13320e41df56321cf561548b588381e1ee117220c165cb/videos/video.mp4', '1', 0, 0, '2023-09-29 02:11:37', '2023-10-25 04:50:41'),
(39, 'Real Madrid vs Barcelona', 'Real Madrid', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/1a2d6c6f037335df821f77c5b6f34ef4e10b577180c262a8580a47a9126b2577/videos/video.mp4', '1', 0, 0, '2023-09-29 02:14:46', '2023-10-25 04:50:47'),
(40, 'Hide Away - Official Cover from School of Rock 🎵 Nickelodeon #Shorts', 'Nickelodeon', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/e90d8c7d0a4e79d4c246237bfd4777d37f23982fa1401cd67eb4c2ec06b1d412/videos/video.mp4', '1', 1, 0, '2023-09-29 02:16:05', '2024-11-02 19:28:54'),
(41, 'The Witcher Sickest sword sequence in recent filmography 😱 #shorts', 'Movie Clip', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/3b042d2745ca304f10d72e80f2b928e4e482e9e8178262a0b0dafbacc6281bdc/videos/video.mp4', '1', 0, 0, '2023-09-29 02:19:28', '2024-11-02 19:28:54'),
(42, 'It\\\'s the real life one punch man, Jason Bourne! #shorts', 'Jason Bourne', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/6f772a95740bfcda6db03b1475cfee77ed731c85b0785d0c5b44fbda2bcce51c/videos/video.mp4', '1', 1, 0, '2023-09-29 02:20:43', '2024-11-02 19:28:54'),
(43, 'Blind Veteran Exposed Casino Scammers (Blind fury)', 'Blind Fury', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/298e5d0d4469b1116b8675bbbd77159dc8c26d78ac7c22e3e26a020182f156fd/videos/video.mp4', '1', 0, 0, '2023-09-29 02:27:33', '2024-11-02 19:28:54'),
(44, 'El equipo flash descubre el verdadero nombre de Zoom', 'Netsky TV', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/418dce4b3ce172397e96019e95c3c3713f1ef1155cf7bcdacd7e15a98ab24e72/videos/video.mp4', '1', 0, 0, '2023-09-29 02:28:42', '2024-11-02 19:28:54'),
(45, 'BLACK MARKET BRAWL - An Action Short Film', 'Action Film', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/41548312edc67bd2b80da630bb316952afb9c1a2c7ba6f0fb9acdd5e147b0b12/videos/video.mp4', '1', 0, 0, '2023-09-29 02:31:17', '2024-11-02 19:28:54'),
(46, 'Once Upon a Time... in Hollywood (2019 #movie #films #tv #bradpitt #quentintarantino #leodicaprio', 'TV Show', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/9748c6096b37e5ea96d0f775dfbe1580d50227b7587a94b085a05b9b5cdd25e6/videos/video.mp4', '1', 0, 0, '2023-09-29 02:34:38', '2024-11-02 19:28:54'),
(47, 'icarly It\\\'s been 13 years since Carly and Freddie kiss for the first time!', 'Icarly', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/578dd9f75271df908b3131f0517f6ba756cd38342080e9d3c1da98d53abd8eab/videos/video.mp4', '1', 0, 0, '2023-09-29 02:35:45', '2024-11-02 19:28:54'),
(48, 'The Super Mario Bros Movie Official Trailer', 'Movie Official Trailer', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/de9db34e08afb8771896d458c682b4ba9d0af245d1b626389f2fde34d3d138fb/videos/video.mp4', '1', 0, 0, '2023-09-29 02:37:45', '2024-11-02 19:28:54'),
(49, 'Police makes the most shocking discovery Chicago P.D.', 'Movie Clip', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/c1a0df43748626d3e1c9d58da1dffe26e12b97c7d6817656701b353e8c9620cc/videos/video.mp4', '1', 0, 7, '2023-09-29 02:39:02', '2024-11-02 19:28:54'),
(50, 'Black Adam is freakin\\\' badass #Shorts #BlackAdam', 'Black Adam', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/1024a5d46edc529932b68ed4cb6175885989079136b1d61a348b26f3b8223bad/videos/video.mp4', '1', 0, 0, '2023-09-29 02:40:45', '2024-11-02 16:16:29'),
(51, 'Fast and Furious 7', 'Netsky TV', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/208f54cdcf25c9de4387676aff7e8ba04fb66500286a1e942c5784ca1b172303/videos/video-1080p.mp4', '1', 0, 0, '2023-09-29 02:41:52', '2024-11-02 16:16:29'),
(52, 'king kong DESTROYS a dinosaur #shorts', 'King Kong', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/0b002dcf68f10635f520e51bec3fff61463cdc967712013c4a66edf452f1b92d/videos/video.mp4', '1', 0, 0, '2023-10-01 05:11:22', '2024-11-02 16:16:29'),
(53, 'GTA 5 SPIDER-MAN FIGHTS CRIME #shorts Part 3', 'GTA 5 SPIDER-MAN', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/45f74fe04301fadeeaaa33e04e1d8961498c98d0dbb27abb1ab58567f77be60a/videos/video-1080p.mp4', '1', 0, 0, '2023-10-01 05:13:13', '2024-11-02 16:16:29'),
(54, 'Poole with a spider-man reaction', 'NBA', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/836b5be4e012f819f32302b0bca2326e36dbb7a27da6df50fe7b3a2c2a0f3806/videos/video.mp4', '1', 0, 0, '2023-10-02 05:24:57', '2024-11-02 16:16:29'),
(55, 'No Hard Feelings', 'TV Show', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/7e114e1d4f1f91d68220df6475f9cdc2f4340a80f04fa9bb29f8fffc013e9682/videos/video.mp4', '1', 0, 0, '2023-10-12 00:22:47', '2024-11-02 16:16:29'),
(56, 'Rea preparó el escape perfecto por una triste razón', 'TV Show', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/449d97d68a58060839ad52eff3494a6bdc9f56108e941f0758690de67df3dcd5/videos/video.mp4', '1', 0, 0, '2023-10-12 03:13:48', '2024-11-02 16:16:29'),
(57, 'Prestaba dinero con esta intención, pero la vida le dio una lección.', 'Netsky TV', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://cdn.muse.ai/u/e8qSVEF/5399cbde404e7da7b91c02fbd630e6021d2c72172e6b62d07db5b373264198212/videos/video.mp4', '1', 1, 0, '2023-10-12 03:15:31', '2024-11-02 16:16:29'),
(58, 'Quería más al conserje que a su propio marido', 'TV Show', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://shorturl.at/vzEX8', '1', 0, 0, '2023-10-25 04:48:00', '2024-11-02 16:16:29'),
(59, 'Quería más a su hermana que a su esposa', 'TV Show', 'https://netskytv.us/admin_assets/images/users/avatar-9.jpg', 'https://linktw.in/WZpaLL', '1', 0, 0, '2023-10-25 05:53:40', '2024-11-02 16:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `reels_comments`
--

CREATE TABLE `reels_comments` (
  `id` int(11) NOT NULL,
  `reel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reels_comments`
--

INSERT INTO `reels_comments` (`id`, `reel_id`, `user_id`, `comment`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 419, 'test2', 0, '1', NULL, NULL),
(5, 1, 409, 'test reply', 3, '1', '2023-09-15 19:08:49', '2023-09-15 19:08:49'),
(10, 5, 415, 'test api comment', 0, '1', '2023-09-17 19:23:23', '2023-09-17 19:23:23'),
(12, 5, 415, 'test', 0, '1', '2023-09-18 07:52:02', '2023-09-18 07:52:02'),
(13, 1, 415, 'test', 0, '1', '2023-09-18 07:52:46', '2023-09-18 07:52:46'),
(14, 1, 415, 'newtest', 0, '1', '2023-09-18 09:33:34', '2023-09-18 09:33:34'),
(15, 1, 415, 'update', 0, '1', '2023-09-18 09:40:18', '2023-09-18 09:40:18'),
(16, 1, 415, 'hhhhh', 0, '1', '2023-09-18 09:44:04', '2023-09-18 09:44:04'),
(17, 1, 415, 'Nice', 0, '1', '2023-09-18 10:02:44', '2023-09-18 10:02:44'),
(18, 2, 415, 'hello', 0, '1', '2023-09-18 10:06:05', '2023-09-18 10:06:05'),
(19, 1, 415, 'video', 0, '1', '2023-09-18 10:32:11', '2023-09-18 10:32:11'),
(20, 1, 415, 'hhh', 0, '1', '2023-09-18 10:38:28', '2023-09-18 10:38:28'),
(21, 2, 415, 'new comments', 0, '1', '2023-09-18 10:51:45', '2023-09-18 10:51:45'),
(22, 1, 415, 'SFF daffy hdtv cnh gaff Chil jhffbbggg unfinished', 0, '1', '2023-09-18 11:36:34', '2023-09-18 11:36:34'),
(23, 5, 415, 'test', 0, '1', '2023-09-18 13:00:01', '2023-09-18 13:00:01'),
(25, 5, 415, 'test reply 5', 32, '1', '2023-09-18 16:07:01', '2023-09-18 16:07:01'),
(26, 1, 415, 'hhhhgggg', 0, '1', '2023-09-18 20:12:42', '2023-09-18 20:12:42'),
(27, 1, 415, 'new', 0, '1', '2023-09-19 09:31:29', '2023-09-19 09:31:29'),
(28, 2, 415, 'new comments', 0, '1', '2023-09-19 09:36:09', '2023-09-19 09:36:09'),
(29, 2, 415, 'jams', 0, '1', '2023-09-19 09:36:25', '2023-09-19 09:36:25'),
(30, 2, 415, 'kkjhh', 0, '1', '2023-09-19 09:38:28', '2023-09-19 09:38:28'),
(31, 1, 415, 'amar company', 0, '1', '2023-09-19 10:01:13', '2023-09-19 10:01:13'),
(32, 2, 415, 'great', 0, '1', '2023-09-19 10:08:53', '2023-09-19 10:08:53'),
(33, 1, 415, 'length check', 0, '1', '2023-09-19 10:19:36', '2023-09-19 10:19:36'),
(34, 1, 415, 'ghhhhh', 0, '1', '2023-09-19 10:32:49', '2023-09-19 10:32:49'),
(35, 5, 415, 'nice position', 0, '1', '2023-09-19 12:02:33', '2023-09-19 12:02:33'),
(36, 1, 415, 'hhhhhhhh', 0, '1', '2023-09-19 16:25:57', '2023-09-19 16:25:57'),
(37, 1, 415, 'new data show', 0, '1', '2023-09-19 16:31:42', '2023-09-19 16:31:42'),
(38, 1, 415, 'new data show', 0, '1', '2023-09-19 16:31:43', '2023-09-19 16:31:43'),
(39, 1, 415, 'cm', 0, '1', '2023-09-19 16:51:24', '2023-09-19 16:51:24'),
(40, 1, 415, 'Fayez', 0, '1', '2023-09-19 16:51:34', '2023-09-19 16:51:34'),
(41, 1, 415, 'gggg', 0, '1', '2023-09-19 16:56:35', '2023-09-19 16:56:35'),
(42, 2, 415, 'Mostafigur', 0, '1', '2023-09-19 17:19:24', '2023-09-19 17:19:24'),
(43, 1, 415, 'fahim', 0, '1', '2023-09-20 06:42:20', '2023-09-20 06:42:20'),
(44, 1, 415, 'New', 0, '1', '2023-09-20 06:44:49', '2023-09-20 06:44:49'),
(45, 1, 419, 'test reply', 42, '1', '2023-09-20 09:07:38', '2023-09-20 09:07:38'),
(46, 1, 415, 'coment Test', 3, '1', '2023-09-20 10:32:55', '2023-09-20 10:32:55'),
(47, 5, 415, 'বাংলাদেশ', 0, '1', '2023-09-20 12:21:34', '2023-09-20 12:21:34'),
(48, 1, 415, 'new comments', 0, '1', '2023-09-20 18:27:57', '2023-09-20 18:27:57'),
(49, 1, 431, 'hey', 0, '1', '2023-09-21 06:51:35', '2023-09-21 06:51:35'),
(50, 2, 430, 'fahim comments', 0, '1', '2023-09-21 06:54:10', '2023-09-21 06:54:10'),
(51, 2, 432, 'looking great', 0, '1', '2023-09-21 07:56:16', '2023-09-21 07:56:16'),
(52, 1, 430, 'next', 0, '1', '2023-09-21 10:23:51', '2023-09-21 10:23:51'),
(53, 2, 430, 'next-door', 0, '1', '2023-09-21 10:24:11', '2023-09-21 10:24:11'),
(54, 5, 430, 'he\'s', 0, '1', '2023-09-21 10:25:11', '2023-09-21 10:25:11'),
(55, 2, 430, 'error', 0, '1', '2023-09-23 06:11:44', '2023-09-23 06:11:44'),
(56, 1, 419, 'test reply', 6, '1', '2023-09-24 15:21:28', '2023-09-24 15:21:28'),
(57, 6, 423, 'Great', 0, '1', '2023-09-24 19:15:05', '2023-09-24 19:15:05'),
(58, 1, 430, 'আমার দেশের মানুষ', 0, '1', '2023-09-25 06:41:02', '2023-09-25 06:41:02'),
(59, 1, 433, 'Test', 0, '1', '2023-09-25 07:10:48', '2023-09-25 07:10:48'),
(60, 14, 430, 'love', 0, '1', '2023-09-26 07:48:21', '2023-09-26 07:48:21'),
(61, 6, 430, 'test flight korte hobe je koto taka pay korte pari', 0, '1', '2023-09-26 11:32:52', '2023-09-26 11:32:52'),
(62, 6, 430, 'gangs jabs hkj jms jms ndbs bondman banyans bibbs bab bbs hangs babs jms banns bdb hsh shesh bdb dsb ndbs banshee', 0, '1', '2023-09-26 11:35:29', '2023-09-26 11:35:29'),
(63, 6, 430, 'yes', 0, '1', '2023-09-26 11:35:40', '2023-09-26 11:35:40'),
(64, 15, 415, 'user@gmail.com', 0, '1', '2024-03-29 02:54:30', '2024-03-29 02:54:30'),
(65, 49, 415, 'user@gmail.com', 0, '1', '2024-07-07 19:16:54', '2024-07-07 19:16:54'),
(66, 49, 415, 'user@gmail.com', 0, '1', '2024-07-07 19:17:09', '2024-07-07 19:17:09'),
(67, 49, 415, 'user@gmail.com', 0, '1', '2024-07-07 19:17:25', '2024-07-07 19:17:25'),
(68, 49, 415, 'user@gmail.com', 0, '1', '2024-07-07 19:17:41', '2024-07-07 19:17:41'),
(69, 49, 415, 'user@gmail.com', 0, '1', '2024-07-07 19:17:57', '2024-07-07 19:17:57'),
(70, 49, 415, 'user@gmail.com', 0, '1', '2024-07-07 19:18:10', '2024-07-07 19:18:10'),
(71, 49, 415, 'user@gmail.com', 0, '1', '2024-07-07 19:18:24', '2024-07-07 19:18:24'),
(72, 15, 449, 'ggg', 0, '1', '2024-08-08 08:33:04', '2024-08-08 08:33:04'),
(73, 15, 449, 'ggg', 0, '1', '2024-08-08 08:33:05', '2024-08-08 08:33:05'),
(74, 15, 449, 'hh', 0, '1', '2024-08-12 05:04:02', '2024-08-12 05:04:02'),
(75, 19, 449, 'hh', 0, '1', '2024-08-15 12:46:11', '2024-08-15 12:46:11'),
(76, 19, 449, 'ghhbb', 0, '1', '2024-08-15 12:46:25', '2024-08-15 12:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `reels_likes`
--

CREATE TABLE `reels_likes` (
  `id` int(11) NOT NULL,
  `reel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reels_likes`
--

INSERT INTO `reels_likes` (`id`, `reel_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 419, NULL, NULL),
(3, 2, 419, NULL, NULL),
(60, 1, 431, '2023-09-21 06:51:21', '2023-09-21 06:51:21'),
(61, 2, 415, '2023-09-21 07:45:33', '2023-09-21 07:45:33'),
(62, 1, 430, '2023-09-21 07:49:49', '2023-09-21 07:49:49'),
(65, 5, 432, '2023-09-21 07:55:35', '2023-09-21 07:55:35'),
(66, 1, 415, '2023-09-21 09:13:45', '2023-09-21 09:13:45'),
(67, 5, 415, '2023-09-21 09:47:18', '2023-09-21 09:47:18'),
(73, 8, 423, '2023-09-24 18:52:29', '2023-09-24 18:52:29'),
(74, 6, 423, '2023-09-24 19:02:14', '2023-09-24 19:02:14'),
(76, 8, 430, '2023-09-25 04:41:32', '2023-09-25 04:41:32'),
(77, 6, 430, '2023-09-25 04:43:00', '2023-09-25 04:43:00'),
(79, 2, 430, '2023-09-25 05:38:12', '2023-09-25 05:38:12'),
(86, 8, 426, '2023-09-27 01:30:10', '2023-09-27 01:30:10'),
(87, 14, 423, '2023-09-27 03:46:27', '2023-09-27 03:46:27'),
(88, 1, 423, '2023-09-27 03:46:33', '2023-09-27 03:46:33'),
(92, 6, 426, '2023-09-27 06:18:29', '2023-09-27 06:18:29'),
(94, 17, 426, '2023-09-27 06:18:46', '2023-09-27 06:18:46'),
(95, 11, 423, '2023-09-27 16:42:16', '2023-09-27 16:42:16'),
(96, 12, 423, '2023-09-27 16:42:37', '2023-09-27 16:42:37'),
(98, 15, 423, '2023-09-27 16:42:49', '2023-09-27 16:42:49'),
(101, 10, 423, '2023-09-27 19:33:12', '2023-09-27 19:33:12'),
(103, 17, 423, '2023-09-27 19:35:32', '2023-09-27 19:35:32'),
(104, 23, 423, '2023-09-27 19:36:17', '2023-09-27 19:36:17'),
(105, 19, 423, '2023-09-28 06:26:13', '2023-09-28 06:26:13'),
(106, 25, 423, '2023-09-28 16:44:40', '2023-09-28 16:44:40'),
(107, 18, 430, '2023-09-28 18:53:42', '2023-09-28 18:53:42'),
(108, 10, 430, '2023-09-28 19:06:45', '2023-09-28 19:06:45'),
(109, 21, 423, '2023-09-28 19:50:03', '2023-09-28 19:50:03'),
(110, 20, 423, '2023-09-28 19:51:44', '2023-09-28 19:51:44'),
(111, 28, 423, '2023-09-29 01:45:51', '2023-09-29 01:45:51'),
(112, 42, 423, '2023-09-29 02:46:33', '2023-09-29 02:46:33'),
(113, 37, 423, '2023-09-30 17:31:06', '2023-09-30 17:31:06'),
(115, 13, 415, '2024-02-24 15:57:19', '2024-02-24 15:57:19'),
(118, 15, 449, '2024-08-08 08:32:55', '2024-08-08 08:32:55'),
(123, 33, 449, '2024-08-08 08:33:53', '2024-08-08 08:33:53'),
(124, 30, 449, '2024-08-11 12:21:08', '2024-08-11 12:21:08'),
(128, 24, 449, '2024-08-11 12:38:32', '2024-08-11 12:38:32'),
(129, 26, 449, '2024-08-12 05:04:43', '2024-08-12 05:04:43'),
(132, 19, 449, '2024-08-15 12:46:49', '2024-08-15 12:46:49'),
(133, 57, 409, '2024-08-16 20:15:26', '2024-08-16 20:15:26'),
(134, 40, 409, '2024-08-29 23:04:46', '2024-08-29 23:04:46'),
(135, 27, 409, '2024-08-29 23:04:52', '2024-08-29 23:04:52'),
(136, 12, 409, '2024-08-29 23:05:00', '2024-08-29 23:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `id` int(11) NOT NULL,
  `series_id` int(11) NOT NULL,
  `season_name` varchar(500) NOT NULL,
  `season_slug` varchar(255) NOT NULL,
  `season_poster` varchar(500) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(500) DEFAULT NULL,
  `seo_keyword` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`id`, `series_id`, `season_name`, `season_slug`, `season_poster`, `seo_title`, `seo_description`, `seo_keyword`, `status`) VALUES
(2, 3, 'Spider Man', 'spider-man', 'Spider-Man (2002)74.jpg', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `series_lang_id` int(11) NOT NULL,
  `series_genres` text NOT NULL,
  `series_name` varchar(500) NOT NULL,
  `series_slug` varchar(255) NOT NULL,
  `series_info` text NOT NULL,
  `series_poster` varchar(500) NOT NULL,
  `imdb_id` varchar(255) DEFAULT NULL,
  `imdb_rating` varchar(255) DEFAULT NULL,
  `imdb_votes` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(500) DEFAULT NULL,
  `seo_keyword` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `series_lang_id`, `series_genres`, `series_name`, `series_slug`, `series_info`, `series_poster`, `imdb_id`, `imdb_rating`, `imdb_votes`, `seo_title`, `seo_description`, `seo_keyword`, `status`) VALUES
(1, 2, '2,9,3', 'The Salvatore', 'the-salvatore', 'Bull TV', 'zzJSBD9HUbtSF3CqPJ.jpg', NULL, NULL, NULL, '', '', '', 1),
(2, 2, '3,5', 'Our Thing Podcast 2023', 'our-thing-podcast-2023', '', 'znFxkpJ2h1uthpvCRK6vta.jpg', NULL, NULL, NULL, '', '', '', 1),
(3, 2, '3,12,2', 'Double Impact 2023', 'double-impact-2023', '', 'zzzEay1gZPVt9ibP9riy.jpg', NULL, NULL, NULL, '', '', '', 1),
(4, 2, '12,3,8', 'Black Widow', 'black-widow', '', 'zXOCbZzvmDa6PCh5dcIPOB51Qc.jpg', NULL, NULL, NULL, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `time_zone` varchar(255) NOT NULL DEFAULT 'UTC',
  `default_language` varchar(255) NOT NULL DEFAULT 'en',
  `styling` varchar(255) NOT NULL DEFAULT 'light',
  `site_name` varchar(255) NOT NULL,
  `site_email` varchar(255) NOT NULL,
  `site_logo` varchar(255) NOT NULL,
  `site_favicon` varchar(255) NOT NULL,
  `site_description` text DEFAULT NULL,
  `site_keywords` text DEFAULT NULL,
  `site_header_code` text DEFAULT NULL,
  `site_footer_code` text DEFAULT NULL,
  `site_copyright` text NOT NULL,
  `currency_code` varchar(255) NOT NULL,
  `paypal_payment_on_off` int(11) NOT NULL DEFAULT 1,
  `paypal_mode` varchar(255) NOT NULL DEFAULT 'sandbox',
  `paypal_client_id` varchar(500) DEFAULT NULL,
  `paypal_secret` varchar(500) DEFAULT NULL,
  `stripe_payment_on_off` int(11) NOT NULL DEFAULT 1,
  `stripe_secret_key` varchar(500) DEFAULT NULL,
  `stripe_publishable_key` varchar(255) DEFAULT NULL,
  `razorpay_payment_on_off` int(11) NOT NULL DEFAULT 0,
  `razorpay_key` varchar(500) DEFAULT NULL,
  `razorpay_secret` varchar(500) DEFAULT NULL,
  `paystack_payment_on_off` int(11) NOT NULL DEFAULT 0,
  `paystack_secret_key` varchar(255) DEFAULT NULL,
  `paystack_public_key` varchar(255) DEFAULT NULL,
  `footer_fb_link` varchar(500) DEFAULT NULL,
  `footer_twitter_link` varchar(500) DEFAULT NULL,
  `footer_instagram_link` varchar(500) DEFAULT NULL,
  `footer_google_play_link` varchar(500) DEFAULT NULL,
  `footer_apple_store_link` varchar(500) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(255) DEFAULT NULL,
  `smtp_email` varchar(255) DEFAULT NULL,
  `smtp_password` varchar(255) DEFAULT NULL,
  `smtp_encryption` varchar(255) DEFAULT NULL,
  `gdpr_cookie_title` varchar(500) DEFAULT NULL,
  `gdpr_cookie_text` text DEFAULT NULL,
  `gdpr_cookie_url` varchar(255) DEFAULT NULL,
  `omdb_api_key` varchar(255) DEFAULT NULL,
  `external_css_js` varchar(255) DEFAULT 'local',
  `google_login` varchar(255) NOT NULL DEFAULT 'false',
  `facebook_login` varchar(255) NOT NULL DEFAULT 'false',
  `google_client_id` varchar(255) DEFAULT NULL,
  `google_client_secret` varchar(255) DEFAULT NULL,
  `google_redirect` text DEFAULT NULL,
  `facebook_app_id` varchar(255) DEFAULT NULL,
  `facebook_client_secret` varchar(255) DEFAULT NULL,
  `facebook_redirect` text DEFAULT NULL,
  `maintenance mode` varchar(255) DEFAULT NULL,
  `envato_buyer_name` varchar(255) DEFAULT NULL,
  `envato_purchase_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `time_zone`, `default_language`, `styling`, `site_name`, `site_email`, `site_logo`, `site_favicon`, `site_description`, `site_keywords`, `site_header_code`, `site_footer_code`, `site_copyright`, `currency_code`, `paypal_payment_on_off`, `paypal_mode`, `paypal_client_id`, `paypal_secret`, `stripe_payment_on_off`, `stripe_secret_key`, `stripe_publishable_key`, `razorpay_payment_on_off`, `razorpay_key`, `razorpay_secret`, `paystack_payment_on_off`, `paystack_secret_key`, `paystack_public_key`, `footer_fb_link`, `footer_twitter_link`, `footer_instagram_link`, `footer_google_play_link`, `footer_apple_store_link`, `smtp_host`, `smtp_port`, `smtp_email`, `smtp_password`, `smtp_encryption`, `gdpr_cookie_title`, `gdpr_cookie_text`, `gdpr_cookie_url`, `omdb_api_key`, `external_css_js`, `google_login`, `facebook_login`, `google_client_id`, `google_client_secret`, `google_redirect`, `facebook_app_id`, `facebook_client_secret`, `facebook_redirect`, `maintenance mode`, `envato_buyer_name`, `envato_purchase_code`) VALUES
(1, 'America/Los_Angeles', 'en', 'dark', 'NETSKY TV - Watch TV Shows, Movies  Online', 'netskytv@netskytv.us', 'netsky tv LOGO.png', 'Netsky TV-ai.jpg', 'NETSKY TV', 'Video Streaming,Streaming Website,Streaming App,Live TV, Movies, TV Shows', '', '', 'Copyright © NETSKY TV 2023. All Rights Reserved.', 'USD', 0, 'sandbox', 'AaE09kKBdjI04I1SygGmlbDl0HGXVdVYUz4S3601TBcNl2X5skyQYXMGFGSH4pjL5sAaVGyHm1ycEPRZ', 'EH19x_5MysagR8pxG_pyhpjXlqC-dCdB5S1WPHpZt2CVYLem2eraLqLSvenudMly8Q0ukb8YGrb2osht', 1, 'sk_test_T7MwH1WDLl5S2J1IEIrK0Axc00BYBVMlvw', 'pk_test_kPf6XNtB7zHlsDTLMdwRNIKL00wTXG6kSL', 0, NULL, NULL, 0, NULL, NULL, 'https://www.facebook.com/NETSKY', 'https://twitter.com/NETSKY', 'https://www.instagram.com/NETSKY', 'https://play.google.com/store/apps/details?id=com.netskytv.app&pcampaignid=web_share', '#', 'smtp.sendgrid.net', '587', 'apikey', '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', 'TLS', 'This website is using cookies', 'We use them to give you the best experience. If you continue using our website, we\\\'ll assume that you are happy to receive all cookies on this website.', '#', '', 'CDN', '0', '0', NULL, NULL, 'https://netskytv.us/auth/google/callback', NULL, NULL, 'https://netskytv.us/auth/facebook/callback', '', 'sdgsad', 'sdgfae');

-- --------------------------------------------------------

--
-- Table structure for table `settings_android_app`
--

CREATE TABLE `settings_android_app` (
  `id` int(11) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_logo` varchar(255) DEFAULT NULL,
  `app_version` varchar(255) DEFAULT NULL,
  `app_company` varchar(255) DEFAULT NULL,
  `app_email` varchar(255) DEFAULT NULL,
  `app_website` varchar(255) DEFAULT NULL,
  `app_contact` varchar(255) DEFAULT NULL,
  `app_about` text DEFAULT NULL,
  `app_privacy` text DEFAULT NULL,
  `onesignal_app_id` varchar(255) DEFAULT NULL,
  `onesignal_rest_key` varchar(255) DEFAULT NULL,
  `publisher_id` varchar(500) DEFAULT NULL,
  `interstital_ad` varchar(500) DEFAULT NULL,
  `interstital_ad_id` varchar(500) DEFAULT NULL,
  `interstital_ad_click` varchar(500) DEFAULT NULL,
  `banner_ad` varchar(500) DEFAULT NULL,
  `banner_ad_id` varchar(500) DEFAULT NULL,
  `banner_ad_type` varchar(255) NOT NULL DEFAULT 'Admob',
  `interstitial_ad_type` varchar(255) NOT NULL DEFAULT 'Admob',
  `fb_banner_id` varchar(500) DEFAULT NULL,
  `fb_interstitial_id` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `settings_android_app`
--

INSERT INTO `settings_android_app` (`id`, `app_name`, `app_logo`, `app_version`, `app_company`, `app_email`, `app_website`, `app_contact`, `app_about`, `app_privacy`, `onesignal_app_id`, `onesignal_rest_key`, `publisher_id`, `interstital_ad`, `interstital_ad_id`, `interstital_ad_click`, `banner_ad`, `banner_ad_id`, `banner_ad_type`, `interstitial_ad_type`, `fb_banner_id`, `fb_interstitial_id`) VALUES
(1, 'Netsky TV', 'WhatsApp_Image_2023-08-23_at_16-23-43-removebg-preview.png', '1.0.0', 'NETSKY TV', 'info@netskytv.us', 'https://play.google.com/store/apps/details?id=', 'NETSKY TV', '<p>Watch your favorite TV channels Live in your mobile phone with this application on your device. that support almost all format.The application is specially optimized to be extremely easy to configure and detailed documentation is provided.</p>', '<p><strong>We are committed to protecting your privacy</strong></p>\r\n<p>We collect the minimum amount of information about you that is commensurate with providing you with a satisfactory service. This policy indicates the type of processes that may result in data being collected about you. Your use of this website gives us the right to collect that information.&nbsp;</p>\r\n<p><strong>Information Collected</strong></p>\r\n<p>We may collect any or all of the information that you give us depending on the type of transaction you enter into, including your name, address, telephone number, and email address, together with data about your use of the website. Other information that may be needed from time to time to process a request may also be collected as indicated on the website.</p>\r\n<p><strong>Information Use</strong></p>\r\n<p>We use the information collected primarily to process the task for which you visited the website. Data collected in the UK is held in accordance with the Data Protection Act. All reasonable precautions are taken to prevent unauthorised access to this information. This safeguard may require you to provide additional forms of identity should you wish to obtain information about your account details.</p>\r\n<p><strong>Cookies</strong></p>\r\n<p>Your Internet browser has the in-built facility for storing small files - \\\"cookies\\\" - that hold information which allows a website to recognise your account. Our website takes advantage of this facility to enhance your experience. You have the ability to prevent your computer from accepting cookies but, if you do, certain functionality on the website may be impaired.</p>\r\n<p><strong>Disclosing Information</strong></p>\r\n<p>We do not disclose any personal information obtained about you from this website to third parties unless you permit us to do so by ticking the relevant boxes in registration or competition forms. We may also use the information to keep in contact with you and inform you of developments associated with us. You will be given the opportunity to remove yourself from any mailing list or similar device. If at any time in the future we should wish to disclose information collected on this website to any third party, it would only be with your knowledge and consent.&nbsp;</p>\r\n<p>We may from time to time provide information of a general nature to third parties - for example, the number of individuals visiting our website or completing a registration form, but we will not use any information that could identify those individuals.&nbsp;</p>\r\n<p>In addition Dummy may work with third parties for the purpose of delivering targeted behavioural advertising to the Dummy website. Through the use of cookies, anonymous information about your use of our websites and other websites will be used to provide more relevant adverts about goods and services of interest to you. For more information on online behavioural advertising and about how to turn this feature off, please visit youronlinechoices.com/opt-out.</p>\r\n<p><strong>Changes to this Policy</strong></p>\r\n<p>Any changes to our Privacy Policy will be placed here and will supersede this version of our policy. We will take reasonable steps to draw your attention to any changes in our policy. However, to be on the safe side, we suggest that you read this document each time you use the website to ensure that it still meets with your approval.</p>\r\n<p><strong>Contacting Us</strong></p>\r\n<p>If you have any questions about our Privacy Policy, or if you want to know what information we have collected about you, please email us at hd@dummy.com. You can also correct any factual errors in that information or require us to remove your details form any list under our control.</p>', NULL, NULL, NULL, 'false', NULL, '2', 'false', NULL, 'Admob', 'Admob', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings_player`
--

CREATE TABLE `settings_player` (
  `id` int(11) NOT NULL,
  `player_style` varchar(255) DEFAULT NULL,
  `player_watermark` varchar(255) DEFAULT NULL,
  `player_logo` varchar(255) DEFAULT NULL,
  `player_logo_position` varchar(255) DEFAULT NULL,
  `player_url` varchar(255) DEFAULT NULL,
  `autoplay` varchar(255) NOT NULL DEFAULT 'false',
  `theater_mode` varchar(255) NOT NULL DEFAULT 'ON',
  `pip_mode` varchar(255) NOT NULL DEFAULT 'ON',
  `rewind_forward` varchar(255) NOT NULL DEFAULT 'ON',
  `player_ad_on_off` varchar(255) NOT NULL DEFAULT 'OFF',
  `ad_offset` varchar(255) DEFAULT NULL,
  `ad_skip` varchar(255) DEFAULT NULL,
  `ad_web_url` varchar(255) DEFAULT NULL,
  `ad_video_type` varchar(255) NOT NULL DEFAULT 'Local',
  `ad_video_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `settings_player`
--

INSERT INTO `settings_player` (`id`, `player_style`, `player_watermark`, `player_logo`, `player_logo_position`, `player_url`, `autoplay`, `theater_mode`, `pip_mode`, `rewind_forward`, `player_ad_on_off`, `ad_offset`, `ad_skip`, `ad_web_url`, `ad_video_type`, `ad_video_url`) VALUES
(1, 'videojs_style4', 'OFF', 'Netsky TV-ai.jpg', 'RT', '#', 'true', 'ON', 'ON', 'ON', 'OFF', '5', '5', 'https://www.youtube.com', 'Local', 'https://netskytv.us/upload/source/#');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_title` varchar(500) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_type` varchar(255) DEFAULT NULL,
  `slider_post_id` int(11) DEFAULT NULL,
  `slider_url` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `slider_image`, `slider_type`, `slider_post_id`, `slider_url`, `status`) VALUES
(2, 'Our Thing Podcast', 'nrJZlruHH03ugsQJCpJxeygX2wg.jpg', 'Movies', NULL, NULL, 0),
(3, 'The Salvatore', 'zQ8AxTPiCiS5nnwXpwTBPBHSaa5.jpg', 'Shows', 1, NULL, 0),
(4, 'The Salvatore 2', 'keIxh0wPr2Ymj0Btjh4gW7JJ89e.jpg', 'Movies', 2, NULL, 1),
(5, 'The Matrix', 'R the matrix S6erGg4QePmMKbB1E7.jpg', 'Movies', 6, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sports_category`
--

CREATE TABLE `sports_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sports_category`
--

INSERT INTO `sports_category` (`id`, `category_name`, `category_slug`, `status`) VALUES
(15, 'Soccer', 'soccer', 1),
(16, 'All Sports', 'all-sports', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sports_videos`
--

CREATE TABLE `sports_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_access` varchar(255) NOT NULL DEFAULT 'Paid',
  `sports_cat_id` int(11) NOT NULL,
  `video_title` text NOT NULL,
  `date` int(11) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `video_description` text DEFAULT NULL,
  `video_slug` varchar(200) DEFAULT NULL,
  `video_image` varchar(200) DEFAULT NULL,
  `video_type` varchar(255) DEFAULT NULL,
  `video_quality` int(11) DEFAULT NULL,
  `video_url` longtext DEFAULT NULL,
  `video_url_480` longtext DEFAULT NULL,
  `video_url_720` longtext DEFAULT NULL,
  `video_url_1080` longtext DEFAULT NULL,
  `download_enable` int(11) DEFAULT NULL,
  `download_url` varchar(500) DEFAULT NULL,
  `subtitle_on_off` int(11) DEFAULT NULL,
  `subtitle_language1` varchar(255) DEFAULT NULL,
  `subtitle_url1` varchar(500) DEFAULT NULL,
  `subtitle_language2` varchar(255) DEFAULT NULL,
  `subtitle_url2` varchar(255) DEFAULT NULL,
  `subtitle_language3` varchar(255) DEFAULT NULL,
  `subtitle_url3` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(500) DEFAULT NULL,
  `seo_keyword` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports_videos`
--

INSERT INTO `sports_videos` (`id`, `video_access`, `sports_cat_id`, `video_title`, `date`, `duration`, `video_description`, `video_slug`, `video_image`, `video_type`, `video_quality`, `video_url`, `video_url_480`, `video_url_720`, `video_url_1080`, `download_enable`, `download_url`, `subtitle_on_off`, `subtitle_language1`, `subtitle_url1`, `subtitle_language2`, `subtitle_url2`, `subtitle_language3`, `subtitle_url3`, `seo_title`, `seo_description`, `seo_keyword`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Free', 15, 'Real Madrid VS Barcelona', 1646985600, NULL, '<p>Real Madrid VS Barcelona</p>', 'real-madrid-vs-barcelona', 'nrJZlruHH03ugsQJCpJxeygX2wg.jpg', 'URL', 1, 'https://firebasestorage.googleapis.com/v0/b/la-liga-highlights/o/real%20Madrid%20Vs%20real%20Sosiedad%2Frsomad.mp4?alt=media&token=b5fbfe24-4b59-4755-a03b-e20b096732fa', NULL, NULL, NULL, 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-08-16 01:30:24'),
(2, 'Paid', 15, 'Barcelona vs Real Madrid 3-0 Hіghlіghts', 1690700400, NULL, '<h2 class=\\\"6\\\"><span class=\\\"tag release_date\\\">Real Madrid vs Barcelona (2023)</span></h2>\r\n<p>Watch Now&nbsp;&nbsp;<span style=\\\"color: #000000;\\\"><strong><span style=\\\"background-color: #ff0000;\\\">&nbsp;<span style=\\\"color: #ffffff;\\\"><a style=\\\"color: #ffffff; background-color: #ff0000;\\\" title=\\\"SPANISH\\\" href=\\\"../../../movies/manchester-city/21\\\">SPANISH</a></span></span>&nbsp;</strong>&nbsp;</span>&nbsp;&nbsp;<span style=\\\"color: #ffffff; background-color: #ff0000;\\\"><strong><a style=\\\"color: #ffffff; background-color: #ff0000;\\\" title=\\\"ENGLISH\\\" href=\\\"../../../live-tv/netsky-tv/2\\\">ENGLISH</a></strong></span></p>\r\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: -58px; top: -13.2656px;\\\">&nbsp;</div>', 'barcelona-vs-real-madrid-3-0-highlights', 'nrJZlruHH03ugsQJCpJxeygX2wg.jpg', 'HLS', 0, 'https://cdn.klowdtv.net/803B48A/n1.klowdtv.net/live1/cine_720p/playlist.m3u8', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'Real Madrid vs Barcelona', '', 'Barcelona vs Real Madrid\r\nreal madrid', 1, NULL, '2023-08-08 23:55:29'),
(3, 'Paid', 15, 'Barcelona vs Real Madrid 3-0 Hіghlіghts You', -57600, '10m 07s', '', 'barcelona-vs-real-madrid-3-0-highlights-you', 'z7ueidfef.jpg', 'URL', 0, 'https://firebasestorage.googleapis.com/v0/b/la-liga-highlights/o/Real%20Madrid%20vs%20Barcelona%2FReal%20Madrid%20vs%20Barcelona.mp4?alt=media&token=cb3da9f7-2b7a-4855-b3a0-df3ee555175c', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-08-08 23:55:11'),
(4, 'Free', 15, 'Netsky Tv', -57600, NULL, '', 'netsky-tv', '1 (1).jpg', 'URL', 1, 'https://riverside.fm/studio/tv-show-fEDTK?t=67291e8a7c9d8c30e0df', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 1, NULL, '2023-11-04 22:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plan`
--

CREATE TABLE `subscription_plan` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `plan_days` int(11) NOT NULL,
  `plan_duration` varchar(255) NOT NULL,
  `plan_duration_type` varchar(255) NOT NULL,
  `plan_price` decimal(11,2) NOT NULL,
  `finalprice` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subscription_plan`
--

INSERT INTO `subscription_plan` (`id`, `plan_name`, `plan_days`, `plan_duration`, `plan_duration_type`, `plan_price`, `finalprice`, `status`) VALUES
(2, 'Premium Plan', 30, '1', '30', 9.99, NULL, 0),
(4, 'Yearly / Premium', 365, '1', '365', 99.99, '42.4', 1),
(5, 'Free Plan', 30, '1', '30', 0.00, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `gateway` varchar(255) NOT NULL,
  `payment_amount` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `email`, `plan_id`, `gateway`, `payment_amount`, `payment_id`, `date`) VALUES
(247, 415, 'user@gmail.com', 4, 'Free', '0.00', '00000000000', 1690742920),
(248, 409, 'tonmoy@gmail.com', 4, 'Free', '0.00', '00000000000', 1690750468),
(249, 409, 'tonmoy@gmail.com', 4, 'Free', '0.00', '00000000000', 1690750485),
(250, 409, 'tonmoy@gmail.com', 4, 'Free', '0.00', '00000000000', 1690774470),
(251, 409, 'tonmoy@gmail.com', 4, 'Free', '0.00', '00000000000', 1690775790),
(252, 415, 'user@gmail.com', 4, 'NA', '0.00', '-', 1690785276),
(253, 415, 'user@gmail.com', 4, 'NA', '0.00', '-', 1690785289),
(254, 409, 'tonmoy@gmail.com', 5, 'Free', '0.00', '00000000000', 1690837785),
(255, 409, 'tonmoy@gmail.com', 5, 'Free', '0.00', '00000000000', 1690837990),
(256, 409, 'tonmoy@gmail.com', 5, 'Free', '0.00', '00000000000', 1691047828),
(257, 409, 'tonmoy@gmail.com', 5, 'Free', '0.00', '00000000000', 1691192582),
(258, 409, 'tonmoy@gmail.com', 5, 'Free', '0.00', '00000000000', 1691617777),
(259, 409, 'tonmoy@gmail.com', 5, 'Free', '0.00', '00000000000', 1691635157),
(260, 423, 'Brandonhernandezww85@gmail.com', 5, 'NA', '0.00', '-', 1692855882),
(261, 423, 'Brandonhernandezww85@gmail.com', 5, 'Free', '0.00', '00000000000', 1692856434),
(262, 409, 'tonmoy@gmail.com', 5, 'Free', '0.00', '00000000000', 1692856740),
(263, 409, 'tonmoy@gmail.com', 5, 'Free', '0.00', '00000000000', 1692857369),
(264, 426, 'lianicole397@gmail.com', 5, 'Free', '0.00', '00000000000', 1692941911),
(265, 426, 'lianicole397@gmail.com', 5, 'NA', '0.00', '-', 1693158327),
(266, 426, 'lianicole397@gmail.com', 5, 'NA', '0.00', '-', 1693158483),
(267, 426, 'lianicole397@gmail.com', 5, 'NA', '0.00', '-', 1693158490),
(268, 415, 'user@gmail.com', 5, 'NA', '0.00', '-', 1693326038),
(269, 427, 'testing@gmail.com', 5, 'NA', '0.00', '-', 1693415828),
(270, 426, 'lianicole397@gmail.com', 5, 'NA', '0.00', '-', 1693529725),
(271, 426, 'lianicole397@gmail.com', 5, 'NA', '0.00', '-', 1693529828),
(272, 426, 'lianicole397@gmail.com', 5, 'Free', '0.00', '00000000000', 1693531499),
(273, 426, 'lianicole397@gmail.com', 5, 'Free', '0.00', '00000000000', 1693545684),
(274, 423, 'Brandonhernandezww85@gmail.com', 5, 'NA', '0.00', '-', 1693721685),
(275, 423, 'Brandonhernandezww85@gmail.com', 5, 'NA', '0.00', '-', 1693721728),
(276, 423, 'Brandonhernandezww85@gmail.com', 5, 'NA', '0.00', '-', 1693721733),
(277, 423, 'Brandonhernandezww85@gmail.com', 5, 'Free', '0.00', '00000000000', 1693721955),
(278, 422, 'brayanhernandezw85@gmail.com', 5, 'NA', '0.00', '-', 1693887476),
(279, 415, 'user@gmail.com', 2, 'Stripe', '9.99', 'ch_3NnEJXH1QrUSbk1k0o10ewfL', 1693978207),
(280, 429, 'noharahman0@gmail.com', 2, 'Stripe', '9.99', 'ch_3NncGXH1QrUSbk1k1Sb2mIG0', 1694070277),
(281, 423, 'Brandonhernandezww85@gmail.com', 5, 'Free', '0.00', '00000000000', 1694728349),
(282, 426, 'lianicole397@gmail.com', 5, 'Free', '0.00', '00000000000', 1694747544),
(283, 422, 'brayanhernandezw85@gmail.com', 5, 'Free', '0.00', '00000000000', 1694747779),
(284, 423, 'Brandonhernandezww85@gmail.com', 5, 'Free', '0.00', '00000000000', 1694845078),
(285, 422, 'brayanhernandezw85@gmail.com', 5, 'Free', '0.00', '00000000000', 1695362386),
(286, 430, 'tjfahim1997@gmail.com', 5, 'Free', '0.00', '00000000000', 1695397703),
(287, 430, 'tjfahim1997@gmail.com', 4, 'Stripe', '99.99', 'pi_3NtBbLH1QrUSbk1k0zcsXxOX', 1695397896),
(288, 415, 'user@gmail.com', 5, 'NA', '0.00', '-', 1695533069),
(289, 415, 'user@gmail.com', 5, 'NA', '0.00', '-', 1695534221),
(290, 415, 'user@gmail.com', 5, 'NA', '0.00', '-', 1695534231),
(291, 415, 'user@gmail.com', 2, 'Stripe', '9.99', 'ch_3O429kH1QrUSbk1k0gLRHZQz', 1697983049),
(292, 418, 'expertitbdofficial@gmail.com', 5, 'Free', '0.00', '00000000000', 1698068023),
(293, 415, 'user@gmail.com', 5, 'Free', '0.00', '00000000000', 1698322218),
(294, 423, 'Brandonhernandezww85@gmail.com', 5, 'Free', '0.00', '00000000000', 1698374521),
(295, 423, 'Brandonhernandezww85@gmail.com', 5, 'Free', '0.00', '00000000000', 1700887196),
(296, 423, 'Brandonhernandezww85@gmail.com', 5, 'Free', '0.00', '00000000000', 1700887313),
(297, 422, 'brayanhernandezw85@gmail.com', 5, 'NA', '0.00', '-', 1704090342),
(298, 422, 'brayanhernandezw85@gmail.com', 5, 'NA', '0.00', '-', 1704091489),
(299, 423, 'Brandonhernandezww85@gmail.com', 5, 'Free', '0.00', '00000000000', 1708061804),
(300, 418, 'expertitbdofficial@gmail.com', 2, 'Stripe', '9.99', 'ch_3PLjKsH1QrUSbk1k0si4PmOM', 1716976943),
(301, 418, 'expertitbdofficial@gmail.com', 4, 'Stripe', '99.99', 'ch_3PLjPgA7QhK0ytwe1rMQ8bwU', 1716977241),
(302, 423, 'Brandonhernandezww85@gmail.com', 5, 'Free', '0.00', '00000000000', 1722018953),
(303, 415, 'user@gmail.com', 5, 'Free', '0.00', '00000000000', 1723562661),
(304, 468, 'ddrtraditionnelle@gmail.com', 5, 'Free', '0.00', '00000000000', 1727659354),
(305, 469, 'chloeoneill20061@gmail.com', 5, 'Free', '0.00', '00000000000', 1729092455);

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_movie_series`
--

CREATE TABLE `upcoming_movie_series` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'upcoming',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upcoming_movie_series`
--

INSERT INTO `upcoming_movie_series` (`id`, `title`, `image`, `description`, `release_date`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'upcoming_movies_series_images/ulmDlpmIRJ4eKNgaPuuKE80sO1jW8ZiyFbfAfnLQ.png', 'afsasddf', '2024-11-30', 'movie', 'upcoming', '2024-11-06 20:09:15', '2024-11-06 20:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usertype` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'User',
  `login_status` int(11) NOT NULL DEFAULT 0,
  `google_id` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `user_address` varchar(500) DEFAULT NULL,
  `user_image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `plan_id` int(11) DEFAULT 0,
  `start_date` int(11) DEFAULT NULL,
  `exp_date` int(11) DEFAULT NULL,
  `paypal_payment_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `stripe_payment_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `razorpay_payment_id` varchar(255) DEFAULT NULL,
  `paystack_payment_id` varchar(255) DEFAULT NULL,
  `plan_amount` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `session_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `login_status`, `google_id`, `facebook_id`, `name`, `username`, `email`, `password`, `phone`, `user_address`, `user_image`, `status`, `plan_id`, `start_date`, `exp_date`, `paypal_payment_id`, `stripe_payment_id`, `razorpay_payment_id`, `paystack_payment_id`, `plan_amount`, `confirmation_code`, `remember_token`, `session_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 0, NULL, NULL, 'Junior Cepeda', NULL, 'admin@admin.com', '$2y$10$h.l4R1XNxIbBN7rVBe3crObeiFF7VWbyh5jvX.dzETHfZCOf6AnDq', '7862089600', NULL, 'expert-it-solution-47a6fa1245a898563c39ecb343e7d159-b.jpg', 1, 2, 0, 2592000, NULL, NULL, NULL, NULL, '0.00', NULL, '8ixQQTGwKc1UvkWKfzchLsXDwWJpOBKZbXhnvguGlBDY4gOcVrXL3rpohgbe', 'iXL5Efee1FhfiXQzxPTe2PzEfFqU3seM3b6TzvU7', '2020-03-12 14:16:45', '2024-10-31 12:49:52'),
(26, 'Admin', 0, NULL, NULL, 'Master admin', NULL, 'Sharifmollah.cse@gmail.com', '$2y$10$hNDA51qi0JdFWZAZVU9qVu/.4cM3MfTGQCf2vlOZYEjLMi59RUXiW', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2022-07-09 21:17:50', '2024-07-27 08:13:49'),
(409, 'Admin', 0, NULL, NULL, 'tonmoy', NULL, 'tonmoy@gmail.com', '$2y$10$DS2fvajMoeAxpaTSy3XWtOlt3FxMFAndPeDh3BJbTgyqZgq576RrO', '3237408450', NULL, NULL, 1, 2, 1692774000, 1695366000, '00000000000', NULL, NULL, NULL, '0.00', NULL, NULL, NULL, '2023-07-20 18:31:42', '2024-07-27 08:20:20'),
(418, 'User', 0, NULL, NULL, 'Md Saiful Islam', NULL, 'expertitbdofficial@gmail.com', '$2y$10$yPGXC3g1JjPQjdEObixUWeLwYGMEw6rYNZl9pmARv6NMamAJWJ8Z.', NULL, NULL, NULL, 1, 4, 1716966000, 1751094000, '00000000000', 'ch_3PLjPgA7QhK0ytwe1rMQ8bwU', NULL, NULL, '99.99', NULL, NULL, NULL, '2023-08-01 20:16:26', '2024-05-29 10:07:21'),
(415, 'User', 0, NULL, NULL, 'User', NULL, 'user@gmail.com', '$2y$10$wBvr41iMn3U9hQhjZX69l.7hdkAAejL2QL683NtZEMIzjQqjtiOM.', NULL, NULL, NULL, 1, 5, 1723532400, 1726124400, '00000000000', 'ch_3O429kH1QrUSbk1k0gLRHZQz', NULL, NULL, '0.00', NULL, NULL, NULL, '2023-07-30 18:36:12', '2024-08-13 15:24:21'),
(419, 'User', 0, NULL, NULL, 'fayej', NULL, 'tvtest@gmail.com', '$2y$10$aZUKbtZs.nzrUxewYQCgGOXlC1Zzt2hcKRH7YPMRMQ8rj7NporInG', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-08-19 09:43:59', '2023-08-19 09:43:59'),
(420, 'User', 0, NULL, NULL, 'TCZ', NULL, 'tchowdhury501@gmail.com', '$2y$10$NztxqLZlfkPvCNc3EcpgzebOZNuHa69nGrNSatUAIpH66KIOsj60O', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-08-23 08:25:57', '2023-08-23 10:26:44'),
(421, 'User', 0, NULL, NULL, 'fayej', NULL, 'mdalfayej017fa@gmail.com', '$2y$10$2Boe5JC8RRq7uDg9irnbj.SJ.8FIRyhcOVfn/Mvw8g1G.LLrp3/PS', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-08-23 09:45:10', '2023-09-10 06:13:58'),
(422, 'User', 0, NULL, NULL, 'Brandon', NULL, 'brayanhernandezw85@gmail.com', '$2y$10$rMc6PFXpsF12HCNmL26vx.D4SReMLiI9DmgpWsOz.Pf3Cqo9AAz26', NULL, NULL, NULL, 1, 5, 1704009600, 1706601600, '00000000000', NULL, NULL, NULL, '0.00', NULL, NULL, NULL, '2023-08-24 05:41:13', '2024-01-01 05:25:42'),
(423, 'User', 0, NULL, NULL, 'Brandon', NULL, 'Brandonhernandezww85@gmail.com', '$2y$10$QR/JwddfMusXZLAzSjaPq.7H5TVy/MX9jrLIbvn5KzZaAbHoQtoSy', NULL, NULL, NULL, 1, 5, 1721977200, 1724569200, '00000000000', NULL, NULL, NULL, '0.00', NULL, NULL, NULL, '2023-08-24 05:41:55', '2024-08-07 19:26:01'),
(424, 'User', 0, NULL, NULL, 'fahim', NULL, 'pyfahin@gmail.com', '$2y$10$0yChTNwXZkg3MaySY.NzbOY6Z.pISvZO.t2CUJoLwZmpko991K3Je', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-08-24 05:42:07', '2023-08-24 05:42:07'),
(425, 'User', 0, NULL, NULL, 'fahim', NULL, 'pyfahim@gmail.com', '$2y$10$rjEdAFotlIFo/PNPBeGZ3.QdUpONNJWzqmnLBnIXlkSTqH3clOK0i', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-08-24 05:46:03', '2023-08-24 05:53:19'),
(426, 'User', 0, NULL, NULL, 'Lia Nicole', NULL, 'lianicole397@gmail.com', '$2y$10$qvcICD6S71EUUK9NiRXwlOpPgIHKX.e0jof.qk0gcyxBPcAMpll8a', NULL, 'tonmoy@gmail.com', NULL, 1, 5, 1694674800, 1697266800, '00000000000', NULL, NULL, NULL, '0.00', NULL, NULL, NULL, '2023-08-25 05:35:55', '2023-09-15 03:12:24'),
(427, 'User', 0, NULL, NULL, 'testing', NULL, 'testing@gmail.com', '$2y$10$5su5kvfmy9hGrk8uiPDSxObcuZg2htkYeQt9qJYckEhJpX0zc/3BS', NULL, NULL, NULL, 1, 5, 1693378800, 1695970800, NULL, NULL, NULL, NULL, '0.00', NULL, NULL, NULL, '2023-08-30 17:15:31', '2023-08-30 17:17:08'),
(428, 'User', 0, NULL, NULL, 'fayej', NULL, 'fa@gmail.com', '$2y$10$bC08sfidmq5Cc8vCEtUylOLSA7tE4YD53/TZmnqUrX0sPZlvX0wUu', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-08-31 06:12:19', '2023-08-31 06:12:19'),
(429, 'User', 0, NULL, NULL, 'testz', NULL, 'noharahman0@gmail.com', '$2y$10$w32vZ3091oQ.TThZUDgdXu5Bu8ME1OFBhcRcEwLOZl4wEK3m3o7qG', NULL, NULL, NULL, 1, 2, 1694070000, 1696662000, NULL, 'ch_3NncGXH1QrUSbk1k1Sb2mIG0', NULL, NULL, '9.99', NULL, NULL, NULL, '2023-09-07 07:04:02', '2023-09-09 16:25:43'),
(430, 'User', 0, NULL, NULL, 'fahim', NULL, 'tjfahim1997@gmail.com', '$2y$10$DucgvbUMYcON6n5f94HmBuN4yE1u52Jeez4nmWX.YS9pj/p6mEA5C', NULL, NULL, NULL, 1, 4, 1695366000, 1726902000, '00000000000', 'pi_3NtBbLH1QrUSbk1k0zcsXxOX', NULL, NULL, '99.99', NULL, NULL, NULL, '2023-09-21 06:39:21', '2023-09-22 15:51:36'),
(431, 'User', 0, NULL, NULL, 'mostafij', NULL, 'fuadmostafij6@gmail.com', '$2y$10$iaelslqGwhu7QWxkD4Kf9uYl65f2NysjWtXY6ebWnTi14.LHSmgrS', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-09-21 06:50:40', '2023-09-21 06:50:40'),
(432, 'User', 0, NULL, NULL, 'test apk', NULL, 'apktest@gmail.com', '$2y$10$DQ1.BQkib3JXl.pHlQ5wu.z0ut2Uz.HCptIOI2Hu2LQA68v2pZDVi', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-09-21 07:50:52', '2023-09-21 07:50:52'),
(433, 'User', 0, NULL, NULL, 'sojib', NULL, 'sojib@gmail.com', '$2y$10$2JOlIbQtUiA4QL/jsZugKuCtSAMwaRlydnNvaCTmHIDsgNtCJFJVa', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-09-24 06:57:28', '2023-09-24 06:57:28'),
(434, 'User', 0, NULL, NULL, 'shumon', NULL, 'adryanmehedi6@gmail.com', '$2y$10$1SyFVx410cIr4lLZqg/G4.T37OR4GOvB/99NUV.AXDyVcVog97qE.', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-09-27 17:02:07', '2023-09-27 17:02:07'),
(435, 'User', 0, NULL, NULL, 'Rejve Hassan', NULL, 'rejveee@gmail.com', '$2y$10$YdcXZIBrKKidQsRM6Czoe.JzAZMLS6ejr/rzzcfhv.uVsNyiKxrTW', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-10-23 13:30:11', '2023-10-23 13:30:11'),
(436, 'User', 0, NULL, NULL, 'carlos', NULL, 'carlos@gmail.com', '$2y$10$q8uP6YjrtZNGjEAEJi24u.JpSe4.Yy3quB2VISDOBhaa5InRSfAjm', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-10-29 03:50:01', '2023-10-29 03:50:01'),
(437, 'User', 0, NULL, NULL, 'apache35480', NULL, 'apache35480@laposte.net', '$2y$10$LK6kMeJXtngOti9vZwPjseB8fJom5.zXtjp8EDXhVMtIq55rR5/EK', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2023-12-31 14:43:19', '2023-12-31 14:43:19'),
(438, 'User', 0, NULL, NULL, 'khaled', NULL, 'khaled9407@gmail.com', '$2y$10$Cym3eSEmsBICYn80mHTa..eRQP62d229.k.m5GSpZQ2iqOoLOumZW', NULL, NULL, 'khaled-ec51bd33b703188a534c9d22b014a9db-b.jpg', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-02-10 19:12:53', '2024-11-06 20:39:24'),
(439, 'User', 0, NULL, NULL, 'fayej', NULL, 'f@gmail.com', '$2y$10$AmN8TRczjTDH5NYQKIsWqewzqS/6NYu.JgElGJ.FFp027wvguJ5IS', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-03-06 05:43:27', '2024-03-06 05:43:27'),
(440, 'User', 0, NULL, NULL, 'Hariom Awasthi', NULL, 'awasthihariom316@gmail.com', '$2y$10$z5lkDH7Nx4J9L.08X2kAcekiZCWBEFKYvOl917trXD8aLVov91kpi', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-03-09 10:03:07', '2024-03-09 10:03:07'),
(441, 'User', 0, NULL, NULL, 'joao', NULL, 'joaobicalho022007@gmail.com', '$2y$10$nV8Qw/D6D1GO4Ac0fiVEG.fBpJIQTHcmSBmA.NmJa42J.Utg0Wei6', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-03-14 18:52:45', '2024-03-14 18:56:32'),
(442, 'User', 0, NULL, NULL, 'Christina larkin', NULL, 'christinalarkin6@gmail.com', '$2y$10$dUASkAsbzXs3Y20DjDq7eels1Oh8FlWBIx7OzA.Gu2.2ioqY9m2t6', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-04-09 10:12:12', '2024-04-09 10:12:12'),
(443, 'User', 0, NULL, NULL, 'Ben', NULL, 'nguyenphuocben.bnp@gmail.com', '$2y$10$8peTGEXpGuXHyzHSo9DeG.QzMVEtfaaejgcVOaG50c5UcOwpJnhqW', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-04-22 12:34:45', '2024-04-22 12:34:45'),
(444, 'User', 0, NULL, NULL, 'Harry Torres', NULL, 'harrytorres786@gmail.com', '$2y$10$csKJ2rIEQALgc8/6K.NLLOvAHAqJWqhZbv.T.3A/UzKGNY/4nDwIS', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-04-30 13:11:35', '2024-04-30 13:11:35'),
(445, 'User', 0, NULL, NULL, 'Elijah bell', NULL, 'elijahbell883@gmail.com', '$2y$10$eecr2jrzWMYracuQsF0SuuYzxNSlvxpTGfUyoqc0i.AGU9OhxiM8e', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-05-10 00:57:16', '2024-05-10 00:57:16'),
(446, 'User', 0, NULL, NULL, 'Claudia i Nuria', NULL, 'claudiainuria2021@gmail.com', '$2y$10$AS2S/a6rKMnrFh6Xd6F2JOwivoo5FYGNkRA8VdBENpClL3xf4JoEm', '644864649', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-06-20 19:13:25', '2024-06-20 19:14:20'),
(447, 'User', 0, NULL, NULL, 'Daniele Carvalho', NULL, 'dcc050820@gmail.com', '$2y$10$U39kaP2EE11iQPiZhFA9r..iksdcMcVI0wpcs6XCCqyRWEiYOdwZ2', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-06-30 22:04:08', '2024-06-30 22:04:08'),
(448, 'User', 0, NULL, NULL, 'Seyfeddine TRIKI', NULL, 'trikiseyf87@gmail.com', '$2y$10$k9LX8tiCPNmHCklwnv9..OQsRF6OMhgrJBAyEOWBhsiaIb6.5ruaS', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-07-12 02:36:15', '2024-07-12 02:36:15'),
(449, 'User', 0, NULL, NULL, 'omor', NULL, 'omorfarukqqq@gmail.com', '$2y$10$8vGWeglX2/qGZNGTiXWdt.vnz1WJQC2pN6PrNGWuefmMGy9mNf0Qa', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-08-05 04:17:41', '2024-08-05 04:17:41'),
(450, 'User', 0, NULL, NULL, 'zuyequ', NULL, 'ajdhde', '$2y$10$Jb.cn.0J7ed/7PcongUS.u9fXyxGbgWxfPVL0Gl5E3LFQ.rhzf0ua', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-08-13 17:31:37', '2024-08-13 17:31:37'),
(451, 'User', 0, NULL, NULL, 'drxgts', NULL, 'boxubz', '$2y$10$wPmvdooHgKaHgGnEaqXJ/OPPnwg2c6542mTur8EUi2xlwUpcVUwFS', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-08-13 17:35:43', '2024-08-13 17:35:43'),
(456, 'User', 0, NULL, NULL, 'xrtgwe', NULL, 'zspisa', '$2y$10$gtrAVPWiKlCm73aEHBNcSueqUdwvnB5xZXnQ8s9.erCiyVKHdq.mC', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-08-14 22:07:45', '2024-08-14 22:07:45'),
(454, 'User', 0, NULL, NULL, 'a@a.cm', NULL, 'a@a.cm', 'a@a.cm', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL),
(455, 'User', 0, NULL, NULL, 'a@a.cm', NULL, 'a@a.cm', 'a@a.cm', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL),
(457, 'User', 0, NULL, NULL, 'stephen', NULL, 'stephendugan49@gmail.com', '$2y$10$evmz4TGCIncG0/bKv/fBCuoOpppSx4TCd/m7dI03wRpjAQlXKuxAm', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-08-19 02:32:36', '2024-08-19 02:32:36'),
(458, 'User', 0, NULL, NULL, 'omor', NULL, 'test@gmail.com', '$2y$10$KhUM3GH2bF6x7zdJfl.up.VoyzpAaqN96bjny8RXSQN.472JtNB1S', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-08-24 09:50:01', '2024-08-24 09:50:01'),
(459, 'User', 0, NULL, NULL, 'Bob', NULL, 'mxbob109@gmail.com', '$2y$10$/YairLIkhAMbdyk/T5Ux4uxY2zmeho0jdWFSnDu.8TeASB0B3PkE.', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-08-27 16:16:09', '2024-09-24 23:28:07'),
(460, 'User', 0, NULL, NULL, 'yuri', NULL, 'yuri456236@gmail.com', '$2y$10$9A9AjsHKVfth/D/nG4mlc.4xjeg0B55l/IM4hR1ygUz6kq3/jrZS.', '13992029892', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-08-29 23:35:23', '2024-08-29 23:36:41'),
(461, 'User', 0, NULL, NULL, 'taju', NULL, 'tajuabdella123@gmail.com', '$2y$10$djhQcycxLDu17.us7Egl4Op.NRNQGr0TaACvU4I37gn3I2vrL05OG', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-08-31 14:41:33', '2024-08-31 14:41:33'),
(462, 'User', 0, NULL, NULL, 'happy', NULL, 'adhin.hyd@gmail.com', '$2y$10$IxV2jVteLySjvb42ML7S9eAXCnOZBmNI4oiLGyZWmuos1c2BKclLm', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-09-04 06:32:44', '2024-09-04 06:32:44'),
(463, 'User', 0, NULL, NULL, 'john', NULL, 'afsark.blr@gmail.com', '$2y$10$hB0iq4UP7WkQvQOkwJvYwOZ/zbwwSfXqDYel.Ctq7pH82k/A.edhu', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-09-04 08:55:31', '2024-09-04 08:55:31'),
(464, 'User', 0, NULL, NULL, 'Madeline  leoncini', NULL, 'leonciniMadeline@gmail.com', '$2y$10$XUB.1fQP/9w/DHfVLb2p9eB5NSr5mOSIbeFgu/rsnRYRJxOB5/aNe', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-09-09 22:32:20', '2024-09-09 22:32:20'),
(465, 'User', 0, NULL, NULL, 'Lungu Alexandru', NULL, 'lungualexandru793@gmail.com', '$2y$10$qNbtu.QmABVTkhwBEtBhie5a89C2TcTdANTa7yVaLyU2b/68bWKrK', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-09-24 08:06:09', '2024-09-24 08:06:09'),
(466, 'User', 0, NULL, NULL, 'Gina', NULL, 'ginaaremo7@gmail.com', '$2y$10$dvPhjPHS2nBTXeqDmv.koOJpg6O2rQRa/e7Y4pyP9Wr1OH20yq8du', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-09-24 16:12:19', '2024-09-24 16:12:19'),
(467, 'User', 0, NULL, NULL, 'bob', NULL, 'bob225513@gmail.com', '$2y$10$9bQMcZs5B6Ru8.ywfNPNUu0BsdZ5exd7wLdAokzSB1cN2LvU1yxVa', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-09-26 19:20:05', '2024-09-26 19:20:05'),
(468, 'User', 0, NULL, NULL, 'jabbi kadu', NULL, 'ddrtraditionnelle@gmail.com', '$2y$10$zpE7yzSi4PI7fK7w1ZS71OKUWUn11EenLl3wQaA1NjQsUvBnRVThy', NULL, NULL, NULL, 1, 5, 1727593200, 1730185200, '00000000000', NULL, NULL, NULL, '0.00', NULL, NULL, NULL, '2024-09-30 01:19:58', '2024-09-30 01:22:34'),
(469, 'User', 0, NULL, NULL, 'chloeoneill', NULL, 'chloeoneill20061@gmail.com', '$2y$10$rSsXgzXVcrdrpEiI9hRwiOreLl3ixN6y.d7Wwr12Yb9Eoi.mse2zi', NULL, NULL, NULL, 1, 5, 1729062000, 1731657600, '00000000000', NULL, NULL, NULL, '0.00', NULL, NULL, NULL, '2024-10-16 15:26:37', '2024-10-16 15:27:35'),
(470, 'User', 0, NULL, NULL, 'Brent', NULL, 'piercebrent257@gmail.com', '$2y$10$KJYULMno3EaWCOv4.MkTvuqELjG9oEM7ZZ0ltq80N7U6XgYNGP81e', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-10-18 21:58:59', '2024-10-18 21:58:59'),
(471, 'User', 0, NULL, NULL, 't', NULL, 't@t.com', '$2y$10$oa/8nivWb3HBv/yQ0tYhb.p66sVRs6vuIsyav56wrV2k9O.MNNCAe', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-10-30 22:58:33', '2024-10-30 22:58:33'),
(472, 'User', 0, NULL, NULL, 't', NULL, 't@t2.com', '$2y$10$7Qvdtd3.6UklPf4HbAO49uKziF1vcdhQexwoNop21uhSffZHSbkni', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-10-30 22:59:00', '2024-10-30 23:45:14'),
(473, 'User', 0, NULL, NULL, 'Md omar Faruk dfd', 'omarfaruk', 'mohammadomar01312@gmail.com', '$2y$10$CY2P/lkRoEH4/W21VlHvyufvTJ3Ls1.5m4nI24dL6Ajd1L/8c1lQ6', '123124214124', 'mohammadomar01312@gmail.com', NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, '2024-11-03 23:35:47', '2024-11-04 01:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_broadcasts`
--

CREATE TABLE `user_broadcasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `rtmp_server` varchar(255) NOT NULL,
  `rtmp_server_url` varchar(255) NOT NULL,
  `live_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_broadcasts`
--

INSERT INTO `user_broadcasts` (`id`, `user_id`, `title`, `description`, `image`, `status`, `key`, `rtmp_server`, `rtmp_server_url`, `live_link`, `created_at`, `updated_at`) VALUES
(1, 472, 'zdfg', 'description', NULL, 'active', 'DFLn4GJ84YDf', 'http://194.233.65.161:1935', 'http://194.233.65.161:8080/hls/DFLn4GJ84YDf.m3u8', 'rtmp://http://194.233.65.161:1935/DFLn4GJ84YDf', '2024-11-05 16:53:06', '2024-11-05 16:53:06'),
(2, 472, 'zdfg', 'description', NULL, 'active', 'MG1osx37iUGq', 'http://194.233.65.161:1935', 'http://194.233.65.161:8080/hls/MG1osx37iUGq.m3u8', 'rtmp://194.233.65.161/MG1osx37iUGq', '2024-11-05 16:53:54', '2024-11-05 16:53:54'),
(3, 472, 'zdfg', 'description', NULL, 'active', 'Ah0Qs5K1nYPX', 'http://194.233.65.161:1935/new', 'http://194.233.65.161:8080/hls/Ah0Qs5K1nYPX.m3u8', 'rtmp://194.233.65.161/Ah0Qs5K1nYPX', '2024-11-05 16:59:32', '2024-11-05 16:59:32'),
(4, 472, 'zdfg', 'description', NULL, 'active', 'kPEH8XYgCRBE', 'http://194.233.65.161:1935/new', 'http://194.233.65.161:8080/hls/kPEH8XYgCRBE.m3u8', 'rtmp://194.233.65.161:1935/new/kPEH8XYgCRBE', '2024-11-05 17:01:46', '2024-11-05 17:01:46'),
(5, 472, 'zdfg', 'description', NULL, 'active', '9CmC71VAIh5I', 'http://194.233.65.161:1935/new', 'http://194.233.65.161:8080/hls/9CmC71VAIh5I.m3u8', 'rtmp://194.233.65.161:1935/new/9CmC71VAIh5I', '2024-11-05 17:10:18', '2024-11-05 17:10:18'),
(6, 438, 'asdf', 'asf', NULL, 'active', 'kWPem8vVguKe', 'http://194.233.65.161:1935/new', 'http://194.233.65.161:8080/hls/kWPem8vVguKe.m3u8', 'rtmp://194.233.65.161:1935/new/kWPem8vVguKe', '2024-11-06 15:38:25', '2024-11-06 15:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_broadcast_comments`
--

CREATE TABLE `user_broadcast_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_broadcast_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_broadcast_comments`
--

INSERT INTO `user_broadcast_comments` (`id`, `user_broadcast_id`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 438, 'dfsg', 'approved', '2024-11-06 15:28:08', '2024-11-06 15:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_feed_backs`
--

CREATE TABLE `user_feed_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating_number` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `youtube_tiktok_manages`
--

CREATE TABLE `youtube_tiktok_manages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `youtube_tiktok_manages`
--

INSERT INTO `youtube_tiktok_manages` (`id`, `title`, `description`, `image`, `type`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sadfsad', 'sdfsad', 'upload/source/1730794479_images (3).jpeg', 'TikTok', 'https://cdn.klowdtv.net/803B48A/n1.klowdtv.net/live1/cine_720p/playlist.m3u8', 1, '2024-11-02 19:37:15', '2024-11-05 00:14:39'),
(3, 'sadf', 'fgds', 'upload/source/1730794440_1-intro-photo-final.jpg', 'YouTube', 'https://cdn.klowdtv.net/803B48A/n1.klowdtv.net/live1/cine_720p/playlist.m3u8', 1, '2024-11-02 19:38:47', '2024-11-05 00:14:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_management`
--
ALTER TABLE `ads_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `channels_list`
--
ALTER TABLE `channels_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `channel_category`
--
ALTER TABLE `channel_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `channel_manages`
--
ALTER TABLE `channel_manages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_supports`
--
ALTER TABLE `contact_supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_status_date` (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section`
--
ALTER TABLE `home_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_broadcast_manages`
--
ALTER TABLE `live_broadcast_manages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_series_favorites`
--
ALTER TABLE `movie_series_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_videos`
--
ALTER TABLE `movie_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_status_date` (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`music_id`);

--
-- Indexes for table `o_t_p_s`
--
ALTER TABLE `o_t_p_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `recently_watched`
--
ALTER TABLE `recently_watched`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_watches`
--
ALTER TABLE `recent_watches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recent_watches_movie_videos_id_foreign` (`movie_videos_id`);

--
-- Indexes for table `reels`
--
ALTER TABLE `reels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reels_comments`
--
ALTER TABLE `reels_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reels_likes`
--
ALTER TABLE `reels_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_android_app`
--
ALTER TABLE `settings_android_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_player`
--
ALTER TABLE `settings_player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports_category`
--
ALTER TABLE `sports_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports_videos`
--
ALTER TABLE `sports_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_status_date` (`id`);

--
-- Indexes for table `subscription_plan`
--
ALTER TABLE `subscription_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_movie_series`
--
ALTER TABLE `upcoming_movie_series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_broadcasts`
--
ALTER TABLE `user_broadcasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_broadcast_comments`
--
ALTER TABLE `user_broadcast_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_feed_backs`
--
ALTER TABLE `user_feed_backs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube_tiktok_manages`
--
ALTER TABLE `youtube_tiktok_manages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads_management`
--
ALTER TABLE `ads_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `channels_list`
--
ALTER TABLE `channels_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `channel_category`
--
ALTER TABLE `channel_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `channel_manages`
--
ALTER TABLE `channel_manages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_supports`
--
ALTER TABLE `contact_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `home_section`
--
ALTER TABLE `home_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `live_broadcast_manages`
--
ALTER TABLE `live_broadcast_manages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `movie_series_favorites`
--
ALTER TABLE `movie_series_favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movie_videos`
--
ALTER TABLE `movie_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `o_t_p_s`
--
ALTER TABLE `o_t_p_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `recently_watched`
--
ALTER TABLE `recently_watched`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1384;

--
-- AUTO_INCREMENT for table `recent_watches`
--
ALTER TABLE `recent_watches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reels`
--
ALTER TABLE `reels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `reels_comments`
--
ALTER TABLE `reels_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `reels_likes`
--
ALTER TABLE `reels_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings_android_app`
--
ALTER TABLE `settings_android_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings_player`
--
ALTER TABLE `settings_player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sports_category`
--
ALTER TABLE `sports_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sports_videos`
--
ALTER TABLE `sports_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscription_plan`
--
ALTER TABLE `subscription_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `upcoming_movie_series`
--
ALTER TABLE `upcoming_movie_series`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=474;

--
-- AUTO_INCREMENT for table `user_broadcasts`
--
ALTER TABLE `user_broadcasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_broadcast_comments`
--
ALTER TABLE `user_broadcast_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_feed_backs`
--
ALTER TABLE `user_feed_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `youtube_tiktok_manages`
--
ALTER TABLE `youtube_tiktok_manages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recent_watches`
--
ALTER TABLE `recent_watches`
  ADD CONSTRAINT `recent_watches_movie_videos_id_foreign` FOREIGN KEY (`movie_videos_id`) REFERENCES `movie_videos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
