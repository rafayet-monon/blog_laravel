-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 01:19 PM
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
(10, '2017_04_19_064629_create_tbl_blog_table', 1),
(11, '2017_04_22_061031_create_tbl_comments_table', 2),
(12, '2017_04_22_125218_add_user_id_column_to_tbl_blog_table', 3);

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
  `blog_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hit_count` tinyint(4) DEFAULT '0',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `category_id`, `blog_title`, `blog_short_description`, `blog_long_description`, `publication_status`, `blog_image`, `created_at`, `updated_at`, `hit_count`, `id`) VALUES
(5, 5, 'Samsung Galaxy S8 review: the future of smartphones', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Following the Note 7 debacle, Samsung really needs a home run to keep its lead in the smartphone market. Is the almost all-screen Galaxy S8 it?</span></font>', '<div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">It seems so. The Galaxy S8 is arguably the best improvement in smartphone design in years and the biggest step forward to the holy grail of an all-screen phone.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The S8 has curved screens like last year’s model, but now the top and bottom bezels of the phone are much smaller, measuring 9mm from the very top of the device and just over 7mm from the bottom, giving it a screen-to-body ratio of 83%.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The long and narrow 5.8in QHD+ “infinity” screen provides the big-screen experience in a body practically the same width as, and only a little taller than, Apple’s 4.7in iPhone 7. The S8’s body is narrow at just 68.1mm wide, which is 9.8mm narrower than the 77.9mm wide iPhone 7 Plus, 7.6mm narrower than the 75.7mm Google Pixel XL and 4.5mm narrower than last year’s 72.6mm S7 Edge, and therefore a lot more manageable to use than the competition.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Samsung is the market leader in screen technology, and the S8 has the company’s best smartphone display to date. It’s simply beautiful, with rich colours, inky blacks, excellent viewing angles and a surprisingly large brightness range. It is bright enough to see in direct sunlight but will also go very dim to make viewing the screen at night much less dazzling.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Out of the box the display is set to the equivalent of full HD resolution, despite the fact that the screen is capable of displaying resolutions up to QHD+. Users can opt for QHD+, FHD+ or even a 720p equivalent (in theory the higher the resolution the shorter the battery life but the crisper the display).</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The S8 is Samsung’s most tactile phone to date. The glass back, curved edges and polished metal sides feel great. Samsung’s usual home, back and overview capacitive buttons are gone, instead replaced with software navigation keys. The place on the screen where the home button is displayed is pressure sensitive, acting both as a software button and a hardware button in one.</span></font></div><div style=\"font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;\"><br></div>', 1, 'blog_image/WMhevmgyuSPgBRms88pR.jpg', NULL, NULL, 13, 0),
(6, 7, 'Tesla recalls 53,000 Model S and Model X electric cars over brake issue', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Fault within parking brake gearing could affect battery-driven vehicles made between February and October 2016.</span></font>', '<div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Tesla is voluntarily recalling 53,000 of its Model S and Model X electric cars after a fault was found with one of the braking systems used in both vehicles.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The recall affects cars sold worldwide, built from February and October 2016. The fault can cause the parking brake to lock up and prevent the vehicles from moving. Tesla says while it wants to inspect them all, less than 5% of the recalled cars may be affected.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The Elon Musk-led electric car manufacturer apologised for the issue, which it blamed on a small gear provided by a third-party supplier. A Tesla spokesperson said in a statement: “There have been no reports of the parking brake system failing to hold a parked vehicle or failing to stop a vehicle in an emergency as a result of this condition, and this part has no impact on the car’s regular braking systems.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">“We do not believe this issue could ever lead to a safety concern for our customers, and we have not seen a single accident or injury relating to it.”</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Tesla owners affected by the issue will be notified by their cars that the parking brake needs service. The electric car manufacturer, which has sold more than 200,000 vehicles, said it would contact owners by mail. The repair should take less than 45 minutes per vehicle and enough replacement parts for all affected vehicles are expected to be available by October.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The electric vehicle manufacturer produced 83,922 vehicles in 2016, with sales expanding with the popularity of its sedan and SUV models.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Recalls within the car market are common, and Tesla is no stranger to the practice. In April 2016, Tesla recalled 2,700 Model X cars in the US due to a faulty locking hinge in the third-row seats, having begun deliveries of the luxury SUV in September 2015. The company was forced to recall its entire Model S fleet, numbering 90,000 vehicles, in November 2015 owing to a faulty seatbelt.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">In March, Mercedes was forced to recall around 1m vehicles worldwide, including 75,000 in the UK, over a fire risk with some starter components in cars made between 2015 and 2017.</span></font></div>', 1, 'blog_image/PTo9KUNBJbZCX0X5vwv0.jpg', NULL, NULL, 9, 0),
(7, 1, 'After 20 years Full Throttle remains a narrative video game masterpiece.', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">In examining how gallant, restrained masculinity could function as an action-adventure ideal, the LucasArts game was way ahead of its time.</span></font>', '<div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The fact that developer Double Fine Productions has chosen to remaster the classic 1995 point-and-click adventure Full Throttle isn’t in itself remarkable. The LucasArts titles of the mid-1990s are widely loved and celebrated, and we have already seen updates of stablemates Grim Fandango and Day of the Tentacle.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">What is remarkable is that the strength of the narrative design, silly gags and beautiful vistas hasn’t diminished at all. Holding a PS4 controller in front of the new version, it’s obvious that the 20-year-old game is 10 times more ambitious than most commercially-made video games today. Not in the action of the game, in which your biker man Ben merely solves increasingly obscure puzzles involving the collection and application of objects to scenery (most memorably illustrated in the classic command “Slam face on bar”). No. What makes its legacy is something much more interesting than how many puzzles the game has, or how difficult they are to solve.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The game’s designer, Tim Schafer, said that during Full Throttle development at LucasArts he worked down the corridor from his friend Hal Barwood, who was working on the Indiana Jones games (Barwood’s Indiana Jones and the Fate of Atlantis is also an excellent adventure). Schafer must also have been breathing in the creative fumes from sister company LucasFilm, situated not too far away. Full Throttle is, after all, the rough-and-tumble action matinee equivalent of Raiders Of The Lost Ark in terms of its pulp demeanour, scrapes and gags – though the game drops the stentorian Williams audio for the raging chords of The Gone Jackals, the local hard rock band that provided the soundtrack. Unlike the Indiana Jones games, Full Throttle had no backstory gifted from a major movie series – and yet it is as humanistic a saga as Spielberg could ever tell. Most games can’t even combine themes of sci-fi and horror well, never mind put Yojimbo, The Road Warrior, and Kurt Vonnegut together in a story where the bad guy is played by Mark Hamill.</span></font></div>', 1, 'blog_image/XDDJX09PDqL0csPxwZDl.png', NULL, NULL, 5, 0),
(8, 4, 'Teenage hackers motivated by morality not money, study finds', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Young people attack computer networks to impress friends and challenge political system, crime research shows</span></font>', '<div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Teenage hackers are motivated by idealism and impressing their mates rather than money, according to a study by the National Crime Agency.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The law enforcement organisation interviewed teenagers and children as young as 12 who had been arrested or cautioned for computer-based crimes.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">It found that those interviewed, who had an average age of 17, were unlikely to be involved in theft, fraud or harassment. Instead they saw hacking as a “moral crusade”, said Paul Hoare, senior manager at the NCA’s cybercrime unit, who led the research.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Others were motivated by a desire to tackle technical problems and prove themselves to friends, the report found.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Speaking to BBC Radio 4’s Today programme, Hoare said: “They don’t understand the implications on business, government websites and individuals.”</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Young hackers could profit from their skills if they avoided cybercrime, he said. “A lot of the skill sets these people have are hugely marketable. The world has a lack of cybersecurity and there are lucrative careers to be had, but [they] are much harder to come by if you already have a criminal conviction.”</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The report said: “Conquering the challenge, proving oneself to the group and intellectual satisfaction are more important motivations than financial gain.”</span></font></div><div style=\"font-family: Arial, Verdana; font-size: 10pt; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal;\"><br></div>', 1, 'blog_image/uMfDc3x0nrR4z71qh2m1.jpg', NULL, NULL, 1, 0),
(9, 6, 'Facebook has 60 people working on how to read your mind', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Social network says it’s assembled a team to build technology that allows you to ‘think’ commands at your smartphone. But what if you think that’s scary?</span></font>', '<div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">developer conference. Photograph: Stephen Lam/Reuters</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">&nbsp;View more sharing options</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Shares</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">3,288</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Olivia Solon in San Francisco</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Wednesday 19 April 2017 23.05 BST Last modified on Thursday 20 April 2017 22.00 BST</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Decrying how addictive and attention-sapping smartphones have become was an unexpected way for an executive at Facebook, a company that profits off your attention, to open a talk. But that’s exactly how Regina Dugan, the head of Facebook’s innovation skunkworks Building 8, started her presentation at the company’s developer conference F8 on Wednesday.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Smartphones have been a powerful force in the world but they have had some “unintended consequences” she said.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">“[The smartphone] has cost us something. It has allowed us to connect with people far away from us too often at the expense of people sitting right next to us,” she said. “We know intuitively and from experience that we’d all be better off if we looked up a little more often.”</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Angrily telling people to put down the “addictive drug that is your smartphone” and honor the conversation in front of them is the “wrong narrative”, she said. “It’s a false choice. This device is important.”</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">So what is the answer to this very modern affliction? Mindfulness apps? Yoga? A digital detox?</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Nope. According to Facebook it’s developing technology to read your brainwaves so that you don’t have to look down at your phone to type emails, you can just think them.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Facebook has assembled a team of 60 people, including machine learning and neural prosthetics experts, to enable such a system. Facebook is currently hiring a brain-computer interface engineer and a neural imaging engineer. Its goal? To create a system capable of typing one hundred words per minute – five times faster than you can type on a smartphone – straight from your brain.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">“It sounds impossible but it’s closer than you may realize.”</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">She highlighted the example of a woman with ALS who had a pea-sized implant that could pick up on signals in her brain to allow her to type eight words per minute using the power of thought.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Facebook will have to develop a system that doesn’t require surgery to implant electrodes.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">“That simply won’t scale,” said Dugan.</span></font></div>', 1, 'blog_image/ZHUQ3yGGbwmzd9f7xp1N.jpg', NULL, NULL, 0, 0),
(18, 4, 'How long will I be able to avoid the cloud?', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Brian likes to have everything on his own Windows PC and doesn’t want to share anything with others. Can he avoid using the cloud?</span></font>', '<div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">How long will I be able to continue avoiding the cloud? I mean things like Microsoft accounts (my computers all use Windows 10), Facebook, Google and so on. I like everything to be stored on my computer and I don’t need to “share” stuff with others, but I have a feeling that Microsoft and others want everyone to sign up. BJG</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">It’s almost impossible to avoid the cloud now, because of the movement of commercial and government services to the web, the multiplication of computing devices and the rapid growth in smartphones. These different trends reinforce one another.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">There’s nothing new about moving services online: the first online shopping service appeared in 1984. Billions of websites, email services and applications are now cloud-based. Many of them run from giant cloud server farms such as Amazon’s AWS (Amazon Web Services), Microsoft Azure and the Google Cloud Platform.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Many of the things people used to do offline are now done via cloud services. Streaming music, video and TV services are gradually replacing DVD players, standalone hi-fis and MP3 players. Some of us still prefer CDs and Blu-ray BDs for their quality and reliability, but we’d all miss BBC iPlayer, Netflix and Amazon Prime.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">You’re not obliged to use social networks, and there are alternatives to Google/Microsoft such as DuckDuckGo, ProtonMail and Zoho Workplace. But taken literally, “avoiding the cloud” would mean avoiding all of those as well.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Speciation</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Computers used to be so expensive that only governments and large corporations could afford them. Since the 1970s, however, microprocessors have made computer power cheaper and cheaper. This led to a sort of Cambrian explosion of digital devices.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Advertisement</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">The desktop PC, which democratised personal computing, was a multi-purpose device. People used the same PC for word processing and accounting etc, doing email, playing music and games, and much more. Today, people often have half a dozen devices for different purposes. These can include desktop and laptop PCs, smartphones and tablets, television set-top boxes, media servers and games consoles.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">To those we can add even more devices such as smart TV sets and digital radios, home security systems, electricity meters and thermostats, doorbells, fitness bands and interactive assistants such as Amazon’s Echo and Google Home. People who hype the Internet of Things see few limits to the expansion of the smart gadget market. The idea of a computerised toothbrush, kettle or toaster does not sound as silly as it did 20 years ago.</span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\"><br></span></font></div><div><font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Given that people have, or will have, a plethora of intelligent devices, they will certainly need a way to monitor and control them, receive error messages, and synchronise data between them. You’re not going to do that without the cloud.</span></font></div>', 1, 'blog_image/A3ixuMAlmMJoDlpJoVxd.jpg', NULL, NULL, 0, 2),
(19, 7, 'Science fiction sheds light on robot debate', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Robots would have ‘basic commands capable of overruling experience’, writes Jeremy Cushing.</span></font>', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Reading Laurie Penny’s article about AI will not pose many surprises for readers of classic science fiction (Opinion, 20 April). She suggests that we may have to “build robots with a capacity for moral judgment”, which presumably would entail their having basic commands capable of overruling experience (experience of language being what so rapidly turns ’bots racist and sexist). Isaac Asimov long ago turned this idea into a series of books about his three laws of robotics. She also points to the role of language in forming preconceptions, citing our rigid system of pronouns. Poul Anderson, also long ago, proposed a whole new system, with “e” as the third-person pronoun, “uz” as its possessive, and the lovely word “marry” as a noun denoting a partner of whatever gender (“uz marry”). I wonder why we haven’t yet succeeded in imitating him.</span></font>', 0, 'blog_image/QINQOfDq0VSJ8g1tOkrM.jpg', NULL, NULL, 0, 2),
(20, 5, 'The human cost of smartphone minerals', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">I notice your review of the Huawei P10 smartphone (theguardian.com, 20 April) makes no reference to the manufacturer’s policy concerning sourcing the materials used in production.</span></font>', '<p style=\"margin: 0px 0px 1rem; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Guardian Text Egyptian Web&quot;, Georgia, serif; font-size: medium; background-color: rgb(255, 255, 255);\">I notice your&nbsp;<a href=\"https://www.theguardian.com/technology/2017/apr/20/huawei-p10-review-camera-fingerprint-sensor\" title=\"\" data-link-name=\"in body link\" class=\"u-underline\" style=\"background: transparent; touch-action: manipulation; color: rgb(0, 86, 137); cursor: pointer; border-bottom: 0.0625rem solid rgb(220, 220, 220); transition: border-color 0.15s ease-out; text-decoration-line: none !important;\">review of the Huawei P10 smartphone</a>&nbsp;(theguardian.com, 20&nbsp;April) makes no reference to the manufacturer’s policy concerning sourcing the materials used in production. I’m sure your product reviewers are all very aware that minerals such as gold, which are used in mobile phone production, can come from mines that use slaves. Furthermore, the mercury and cyanide used in gold extraction have a devastating environmental and human impact.</p><p style=\"margin: 0px 0px 1rem; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Guardian Text Egyptian Web&quot;, Georgia, serif; font-size: medium; background-color: rgb(255, 255, 255);\">Despite the fact that it is not, as yet, the norm in technology reviews in the press, I strongly encourage you to take the lead and highlight in your reviews whether or not producers ensure that no slave labour is used in any part of their supply chain. Reference to the environmental cost of production and post-use product recycling policy would&nbsp;also be welcome.</p><p style=\"margin: 0px 0px 1rem; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Guardian Text Egyptian Web&quot;, Georgia, serif; font-size: medium; background-color: rgb(255, 255, 255);\">By including this information as standard in your reviews you would be taking a valuable positive step in reducing demand for products that contribute to slavery, and so causing producers to abandon unethical supply practices.&nbsp;<br><strong>Jonathan Shave</strong><br><em>Bolzano, Italy</em></p>', 1, 'blog_image/xr4eGW1tXCynFHdX0Umg.jpg', NULL, NULL, 0, 1);

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
(4, 'Cyber Security', '<span style=\"font-size: 13.3333px;\">All about Security</span>', 1, NULL, NULL),
(5, 'Android', 'All about android.', 1, NULL, NULL),
(6, 'Social Media', 'All about social media', 1, NULL, NULL),
(7, 'New Techs', 'Newest tech newses.', 1, NULL, NULL),
(8, 'Games', 'All about games.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `id` tinyint(4) NOT NULL,
  `blog_id` tinyint(4) NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comment_id`, `id`, `blog_id`, `comments`, `publication_status`, `created_at`, `updated_at`) VALUES
(6, 3, 5, 'Wow.. Really excited to use this.', 1, NULL, NULL),
(7, 2, 7, 'I need this bike. :D', 1, NULL, NULL),
(8, 1, 6, 'I forgive elon musk this time, Give my car back soon.', 1, NULL, NULL);

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
(1, 'Md. Rafayet Alam', 'rafayet.monon@gmail.com', '$2y$10$V7a.hBPmvNxGrCLsArQbkOWrjshNlnfs5oMAEp555mLhV6wXViD1e', 'h6BGIEUs4rPgYb5E6sy38Mdz3ykMobhXanm3XEagrtZht8Z74BnKOxs29mKm', '2017-04-21 04:06:22', '2017-04-21 04:06:22'),
(2, 'Md. Golam Rashed', 'rashed@gmail.com', '$2y$10$IZ7RxmrFdGAHvCV80ljVGeuDSXgxrtOHH31e9VenuZR0ghRmBJoi6', 'G8rTFdlsJ9Ytab20GrkqSVtsqKft487JbXN2trjE63vMaOPKBd2CoOuTWYvl', '2017-04-22 04:18:46', '2017-04-22 04:18:46'),
(3, 'Md. Ibrahim', 'ibrahim@gmail.com', '$2y$10$YImjlGgum4K1EL6TmR5b.eDdNRabcoorSTt.iNEoCcO/4FT/9xw/e', '4tSfwGsmfhzryWX2vbzJOOZDT2N3LTen3zw2djq6XXOerdAcM3vM5ePOgPSO', '2017-04-22 04:19:19', '2017-04-22 04:19:19');

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
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`comment_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
