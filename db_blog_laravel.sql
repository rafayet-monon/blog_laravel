-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 01:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2017_04_18_114535_create_tbl_admin_table', 1),
(9, '2017_04_18_125900_create_tbl_category_table', 1),
(10, '2017_04_19_064629_create_tbl_blog_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`) VALUES
(1, 'ACE', 'rafayet.monon@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hit_count` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `category_id`, `blog_title`, `blog_short_description`, `blog_long_description`, `publication_status`, `blog_image`, `created_at`, `updated_at`, `hit_count`) VALUES
(1, 3, 'PhalconPHP: A Solution for High-load RESTful APIs', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Suppose you need to create a high-load project based on a PHP MVC framework. You would probably use caching wherever possible. Maybe you would build the project in a single file, or maybe even write your own MVC framework with minimal functionality, or rewrite some parts of another framework. While, yes, this works, it’s a little bit tricky, isn’t it? Fortunately, there is one more solution that makes most of these manipulations unnecessary (save for the cache, perhaps), and this solution is called the PhalconPHP framework.</span></font>', '<div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">PhalconPHP is an MVC framework for PHP written in C and supplied as a compiled PHP extension. This is what makes it one of the fastest frameworks available (to be completely honest the fastest one is Yaf, but it is a micro framework and has much, much more limited functionality than Phalcon). PhalconPHP doesn’t need any long operations with PHP files and it doesn’t need to be interpreted at every request—it’s loaded into RAM once when your web server is started and consumes very few resources.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">MVC frameworks have been considered best practice in web development for a long time—by now it is a sort of a professional standard, so most web developers are familiar with at least one MVC framework for PHP: Symfony, Yii, Laravel, CodeIgniter, Zend Framework, etc. They each have their own advantages and disadvantages, but what do they all have in common? All of them are written in PHP and consist of many included PHP files with a huge amount of logic that has to be run by the interpreter on every request, every single time your code runs. While this makes for great transparency, we pay with performance. Large amounts of code and lots of included files cost a great deal of memory and time, especially in PHP (since it’s interpreted, not compiled). Yes, the situation has become much better in PHP 7, but there is still lots to be improved, and PhalconPHP brings those improvements to the table.</span></font></div>', 1, 'blog_image/QZ4s5X15czN88lVRn6L6.png', NULL, NULL, 6),
(2, 1, 'Make Your CSS Dynamic with CSS Custom Properties', '<font color=\"#303030\" face=\"Proxima Nova, Arial, sans-serif\"><span style=\"font-size: 18px; background-color: rgb(255, 255, 255);\">If you have been writing CSS for a while, you must have at some point in time felt the need for variables. CSS custom properties are somewhat like CSS’s own implementation of variables. However, when used properly, they can be so much more than just variables.</span></font>', '<div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">One of the main advantages of using CSS pre/postprocessors are is that they allow for values to be stored in a keyword and have them scoped to a certain selector if necessary.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">After long being requested by developers, a draft for an interpretation of native variables for CSS was written. These are formally referred to as CSS custom properties, but are also sometimes referred to as CSS variables.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The current specification for native CSS custom properties covers all the same behaviors as pre/postprocessor variables. This enables you to store color codes, sizes with all of the known units, or just integers if needed (e.g., when a you need to use the same divisor or multiplier).</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The syntax for CSS custom properties is a bit weird compared to other languages, but it makes a whole lot of sense if you compare their syntax with other features in the same CSS ecosystem</span></font></div>', 1, 'blog_image/6gFivtF4wTfeb04TAzGP.png', NULL, NULL, 2),
(3, 2, 'How to Internationalize Your AngularJS App', '<div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Internationalizing your app can make software development a painful experience, especially if you don’t start doing it from the very beginning or you take a willy-nilly approach toward it.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Modern apps, where the front-end and the back-end are distinctly separate from one another, can be even trickier to deal with when it comes to internationalization. Suddenly you no longer have access to the plethora of time-tested tools that once helped with internationalizing your traditional server-side page generated web apps.</span></font></div>', '<div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">To allow the client to change the language and locale on the fly based on user preferences, you will need to make a number of key design decisions:</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">How do you design your app to be language and locale-agnostic from the start?</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">How do you structure i18n and l10n data?</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">How do you deliver this data efficiently to clients?</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">How do you abstract away as much of the low-level implementation details to simplify the developer workflow?</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Answering these questions as early as possible can help avoid hindrances in the development process down the line. Each of these challenges will be addressed in this article; some through robust AngularJS libraries, others through certain strategies and approaches.</span></font></div>', 1, 'blog_image/tv41BkqHYwgZNQOSwGTs.jpg', NULL, NULL, 5),
(4, 1, 'A Guide to Security Best Practices for Remote Teams', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Whenever I tell my friends that I work remotely for a client I’ve never met, they ask me: is it secure for you to work remotely? My answer is a resounding “Yes… but, it depends on how well you create your remote worker security policy.”</span></font>', '<div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">There is no such thing as perfect security, but “being secure” means you’ve taken reasonable measures to enforce information security.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Specifically, when you say “my work environment is secure,” you mean to say that you’ve taken reasonable measures to protect the data, code, or other confidential information in your care, and ensured its integrity. You’ve also taken steps to make sure that your privileges to access sensitive information systems will not be used by yourself, or an unauthorized individual, in a manner that is detrimental to the goals of the organization that owns this information, and these systems.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Remote teams do have a far larger attack surface than centralized teams. Unlike a centralized team where you can physically lock down confidential information behind firewalls and company workstations, as a remote worker, you are encouraged or even required, to bring your own device (BYOD). What’s more, since most of your communications happen online, you’re far more susceptible to social engineering and identity theft. However, with the right set of policies in place, you can certainly minimize the risk of a breach.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">There is no silver bullet for security. Often, there’s a tradeoff between shades of security and convenience, and it’s up to you to determine how far you want to take your security practices but remember, your team is only as secure as its weakest member. Let’s take a look at some common security attacks, defense strategies, and finally discuss a sample remote security worker policy.</span></font></div>', 1, 'blog_image/DO5Q87qABAxZqL25J18o.jpg', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Front End', 'All about front end', 1, NULL, NULL),
(2, 'JavaScript', '<span style=\"font-size: 13.3333px;\">All about JavaScript</span>', 1, NULL, NULL),
(3, 'PHP', '<span style=\"font-size: 13.3333px;\">All about PHP</span>', 1, NULL, NULL),
(4, 'Cyber Security', '<span style=\"font-size: 13.3333px;\">All about Security</span>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md. Rafayet Alam', 'rafayet.monon@gmail.com', '$2y$10$V7a.hBPmvNxGrCLsArQbkOWrjshNlnfs5oMAEp555mLhV6wXViD1e', 'zihWbppCWtYFZ9j2f9O2FU2cJugFDrH1pgkOj2mtHhtW8qEPBfYpkMmTtDLg', '2017-04-21 04:06:22', '2017-04-21 04:06:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
