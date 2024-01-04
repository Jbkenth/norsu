-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: fdb1032.awardspace.net
-- Generation Time: Jan 04, 2024 at 10:07 AM
-- Server version: 8.0.32
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4402028_cliniconnect`
--
CREATE DATABASE IF NOT EXISTS `4402028_cliniconnect` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4402028_cliniconnect`;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int NOT NULL,
  `from_id` int NOT NULL,
  `to_id` int NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES
(52, 35, 42, 'Hi', 1, '2023-12-01 03:22:44'),
(53, 46, 47, 'Hi ken', 1, '2023-12-01 03:42:41'),
(54, 47, 46, 'Yes admin ', 1, '2023-12-01 03:42:49'),
(55, 46, 47, 'Hi again ken', 1, '2023-12-01 03:45:31'),
(56, 47, 46, 'Yes? Admin', 1, '2023-12-01 03:45:49'),
(57, 49, 48, 'Hi', 1, '2023-12-01 04:16:00'),
(58, 51, 48, 'Test', 1, '2023-12-06 00:46:39'),
(59, 48, 51, 'reply', 1, '2023-12-06 00:48:28'),
(60, 52, 48, 'Hello, Good afternoon, I would to ask a medicine ky sakit akong heart, gi bulagan kos akong uyab...\n', 1, '2024-01-04 07:35:42'),
(61, 48, 52, '...... ', 1, '2024-01-04 07:37:31'),
(62, 48, 52, 'gwapo ka sir', 1, '2024-01-04 07:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int NOT NULL,
  `user_1` int NOT NULL,
  `user_2` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`conversation_id`, `user_1`, `user_2`) VALUES
(11, 18, 17),
(12, 17, 22),
(13, 24, 25),
(14, 35, 42),
(15, 46, 47),
(16, 49, 48),
(17, 51, 48),
(18, 52, 48);

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dossage` varchar(50) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `nstock` varchar(250) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`id`, `name`, `dossage`, `availability`, `stock`, `nstock`, `description`) VALUES
('1', 'Amoxicillin', '500mg', 'Not Available', '247', 'pieces capsule', 'Antibuotics used to treat many different types of infection caused by bacteria, such as tonsillitis,bronchitis,pneumonia and infections of the ear,nose,throat,skin or urinary tract.'),
('2', 'Azithromycin', '500mg', 'Available', '78', 'pieces tablet', 'Antibiotic is used to treat many different types of infections caused by bacteria, such as respiratory infections, skin infections, ear infections, eye infections and sexually transmitted diseases.'),
('3', 'Mefenamic Acid', '500mg', 'Available', '603', 'pieces capsule', 'Relief of mild to moderate pain eg, headache, dental pain, sprain, tendinitis, low back pain, dysmenorrhea, traumatic pain, postpartum pain and post-op pain.'),
('4', 'Multivitamins + Iron', '500mg', 'Available', '25', 'pieces tablet', 'Treatment and prevention of vitamins and mineral deficiencies. Help strengthen immunity and has nutrients that help in the production of energy.'),
('5', 'Paracetamol ', '500mg tablet', 'Available', '1201', 'pieces tablet', 'Relief of minor aches and pains, fever, headache, backache, menstrual cramps, muscular aches, minor arthritis, pain, tootache and pain asscociated with common cold  and flu.'),
('6', 'Ibuprofen liquid gel', '400mg', 'Available', '430', 'pieces capsule', 'Pain reliever; For short-term symptomatic relief of backache, rheumatic and muscular pain, sprains, strains, and sports injuries.'),
('7', 'Dexamethasone', '3mg', 'Not Available', '0', '', 'Treat various conditions, including inflammatory disorders, allergic reactions, certain skin conditions, asthma, rheumatic problems, certain cancers, and as a part of some chemotherapy regimens.'),
('8', 'Hyoscine n-butylbromide ', '10mg', 'Available', '198', 'pieces tablet', 'Is a medication used to relieve symptoms of gastrointestinal issues such as abdominal cramps, irritable bowel syndrome, and other conditions involving gastrointestinal spasms. It works by relaxing the smooth muscles in the stomach and intestines, which can help reduce cramping and discomfort.'),
('9', 'Hyoscine n-butylbromide + paracetamol', '10mg/500mg', 'Available', '246', 'pieces tablet', 'Relief from pain of stranger abdominal cramps including menstrual cramps and urinary tract spasm.'),
('10', 'Paracetamol propyphenazone caffeine ', '250mg/150mg/50mg', 'Available', '753', 'pieces tablet', 'Relief of pain eg, mild to servere headache, toothache, menstrual discomfort, post-op, and rheumatic pain, pain and fever associated with colds and flu.'),
('11', 'Ascorbic acid + zinc, tablet', '500mg/10mg', 'Available', '80', 'pieces capsule', 'Prevention and treatment of vitamin C deficiency. Supporting a healthy immune system.'),
('12', 'Losartan Potassium ', '50mg', 'Available', '42', 'pieces tablet', 'Treat high blood pressure.'),
('13', 'Paracetamol phenylpropanolamine HCI chlorphenamine maleate', '10mg/2mg/500mg', 'Available', '753', 'pieces capsule', 'Is a medicine to relieve flu symptoms such as fever, headache, nasal congestion and sneezing.'),
('14', 'Carbocisteine', '500mg', 'Available', '750', 'pieces capsule', 'For cough; A mucolytic works by thinning and loosening up thick mucus or phlegm(\"plema\") making it easier to expel and clear out of the airways.'),
('15', 'Aluminum hydroxide, magnesium hydroxide, simeticone', '178mg/233mg/30mg', 'Available', '45', 'pieces chewable tablet', 'For relief of stomach pain due to hyperacidity.'),
('16', 'Hexetidine 0.1% solution oral Antiseptic', '30ml', 'Available', '15', 'pieces bottle', 'Help alleviate symptoms associated with sore throat, mouth ulcers, gingivitis, and other oral infections'),
('17', 'Ferrous sulfate +  folic acid = vitamin b complex', '325mg/65mg', 'Available', '25', 'pieces tablet', 'Iron supplement; often used to treat or prevent iron-deficiency anemia. '),
('18', 'Vitex negundo L. Lagundi leaf', '600mg', 'Available', '250', 'pieces capsule', 'Relief of cough due to common cold, flu and mild to moderate bronchitis'),
('19', 'Hydrocortison Oitment', '10g', 'Not Available', '0', '', 'Used to relieve itching, redness, swelling, and discomfort caused by various skin conditions such as eczema, dermatitis, insect bites, allergic reactions, and minor irritations.'),
('20', 'Mometasone Furoate Oitment', '5g', 'Not Available', '0', '', 'Treat various inflammatory skin conditions. It works by reducing swelling, itching, and redness associated with conditions like eczema, psoriasis, dermatitis, and other allergic reactions.'),
('21', 'Ketoconazole cream', '5g', 'Available', '2', 'pieces tube', 'Treat skin condition, itching, and flaking on the scalp and face.'),
('22', 'Silver sulfadiazine Antibacterial', '25g', 'Available', '3', 'pieces tube', 'Antibacterial medication used to prevent and treat infections in severe burns. '),
('23', 'Silver sulfadiazine burnsils', '25g', 'Not Available', '0', '', 'Antibacterial agent used for treating burns. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `adminname` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `adminpassword` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `idnumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_seen` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `adminname`, `adminpassword`, `name`, `idnumber`, `last_seen`) VALUES
(48, 'Norsu-G Clinic Admin', 'norsu', '', '', '2024-01-04 07:40:19'),
(49, '', '', 'April Justine R. Bustamante ', '420130763', '2023-12-01 04:16:13'),
(51, '', '', 'Annalisa Fundador ', '420130160', '2023-12-06 02:13:52'),
(52, '', '', 'Michell Bonote', '420127525', '2024-01-04 07:41:07'),
(53, '', '', 'John Kenneth Oaña Balutan ', '2021-0459', '2024-01-04 05:11:40'),
(54, '', '', 'Cantila Maycel Gargoles', '420130149', '2024-01-04 04:02:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
