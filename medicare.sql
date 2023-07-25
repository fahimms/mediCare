-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2023 at 11:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `apass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `aname`, `apass`) VALUES
(1, 'admin', '1234'),
(2, 'sumit', '123'),
(3, 'sajia', '123');

-- --------------------------------------------------------

--
-- Table structure for table `head_of_admin`
--

CREATE TABLE `head_of_admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `head_of_admin`
--

INSERT INTO `head_of_admin` (`id`, `name`, `pass`) VALUES
(1, 'sumit', '123'),
(2, 'sajia', '123');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `mimg` varchar(100) NOT NULL,
  `mwork` varchar(500) NOT NULL,
  `mdiscription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `mname`, `mimg`, `mwork`, `mdiscription`) VALUES
(1, 'Napa 500 mg', 'napa 500 mg.jpg', 'pain and fever', 'Fever, common cold, influenza, headache, toothache, earache, body ache, myalgia, neuralgia, dysmenorrhoea, sprains, colic pain, back pain, post-operative pain, postpartum discomfort, inflammatory pain, and post-vaccination pain in children are among the conditions for which paracetamol is prescribed. It\'s also used to treat rheumatic and osteoarthritic pain, as well as joint stiffness.'),
(2, 'Sergel 20', 'sergel 20.jpg', 'Heartburn, acid reflux and problems in your food', 'Sergel 20 is a medication that lowers the amount of acid produced in the stomach. It is used to treat heartburn, acid reflux, and food pipe issues. It is also employed in the prevention and treatment of stomach ulcers. You should take Sergel 20 as directed by your doctor.'),
(9, 'Propranol 10', '1572760329_propranol.png', 'anxiety and relieve tremors', 'Propranol 10 belongs to a group of medicines called beta-blockers. It helps to decrease anxiety and relieve tremors. It is also used to help prevent migraine, heart-related chest pain (angina), and bleeding in the stomach caused by high blood pressure in the liver (portal hypertension). Propranol 10 may also be used to treat high blood pressure and some types of abnormal heartbeat (arrhythmia). The dose will depend on what you are being treated for and how you respond to the medicine. You should'),
(10, 'Indever 40mg', '165930571162e6feef4d568.jpg', 'It reduces anxiety and relieves tremors', 'Indever 40 belongs to a class of drugs known as beta-blockers. It reduces anxiety and relieves tremors. It is also used to treat migraines, heart-related chest pain (angina), and stomach bleeding caused by high blood pressure in the liver (portal hypertension). Indever 40 may also be used to treat high blood pressure and irregular heartbeats (arrhythmia). The dose will be determined by the condition being treated and how you respond to the medication. Always take it exactly as prescribed by your'),
(11, 'Comet 500mg', '3139F298-F203-41C3-A3FC-9D22C362E0F6.jpg', 'It works by increasing peripheral glucose uptake and utilization', 'Comet 500mg is a medication that belongs to the biguanide class and is primarily used to treat type 2 diabetes. It works by increasing peripheral glucose uptake and utilization, lowering hepatic glucose production, and decreasing intestinal glucose absorption. It is available in both quick release and extended-release tablets.'),
(12, 'Adlock 40mg', 'm3PoJyFci0Z5WA7c1kxmolV05mQhYuiXB64xtT6F.webp', ' treat migraines', 'Adlock 40mg Tablet is used to treat anxiety and tremors. It is also used to treat migraines, heart-related chest discomfort (angina), and gastrointestinal bleeding caused by excessive blood pressure in the liver. (portal hypertension).\r\n\r\nAdlock 40mg Tablet is also used to treat excessive blood pressure and some forms of irregular heartbeats. (arrhythmia). The dose will be determined by the condition being treated and how you respond to the medication. Always take it exactly as suggested by your'),
(13, ' Aleze 10mg', 'hn8eSCKrod9LCIdzhThzDkLfCRAqYTaPJT3n65V5.jpg', 'allergic rhinitis', 'It is indicated for the treatment of seasonal & perennial allergic rhinitis and also in allergic skin manifestations.'),
(14, 'Don-A 10mg', 'jNMdksEc66tZLisD0Fhepij5dESxW0w2URmr9s3R.jpg', 'treat nausea, vomiting, and indigestion', 'A prescription drug called Don A 10 is used to treat nausea, vomiting, and indigestion. It enhances food movement in the stomach, which helps with digestion, and blocks the brain chemical that causes nausea or vomiting. Don A 10 is taken in the prescribed dose and time frame before meals.'),
(15, 'Motigut 10mg', '2022-11-10-636cda82b8e05.jpg', 'nausea and vomiting caused', 'Domperidone is a medication used to treat nausea and vomiting caused by various conditions, including gastroesophageal reflux disease (GERD), gastroparesis, and chemotherapy. It works by blocking dopamine receptors in the brain and gastrointestinal tract, which can help increase the movement of food through the stomach and intestines.'),
(16, 'Gluzit 80mg', 'lDFg0orbvampsvOee2UyzJ67Y6ynSURJGyLaGgts.jpg', 'diabetes', 'Film-coated tablet: The usual initial dose is 40 to 80 mg daily. The dose can be increased up to 320 mg daily in divided doses when needed. The drug should be taken before meal. For children, Gliclazide is not used because it is contraindicated in juvenile-onset diabetes.'),
(17, 'Omidon 10mg', 'omidon-101-1631606264785.webp', 'treat indigestion, nausea, and vomiting', 'Omidon 10 is a prescription medicine used to treat indigestion, nausea, and vomiting. It works by blocking the substance in the brain that causes these symptoms and improving digestion. Take it before meals in the prescribed dose and duration, and let your doctor know about any other medications you are taking. Common side effects include headache, dry mouth, and stomach pain. Avoid driving and alcohol consumption while taking this medicine.'),
(18, 'Bisocor 2.5mg', 'VoxiuniPrT9FQvNv0QO17XGvaC3T1fI1W9XLSQ5T.jpeg', 'Treatment of essential hypertension', 'Bisoprolol is indicated for the treatment of stable chronic heart failure with reduced systolic left ventricular function in addition to ACE inhibitors diuretics and optionally cardiac glycosides. Treatment of chronic, stable angina pectoris. Treatment of essential hypertension.'),
(19, 'Norium 10mg', 'Aloxnbx3mbdX0nNN3v70SzNc1JIhKF5u49P0637P.jpg', 'Flunarizine is used to stop migraines', 'Flunarizine is used to stop migraines, whether they are common or classic (with aura). (without aura).\r\nTreatment for symptoms of vestibular vertigo (due to a diagnosed functional disorder of the vestibular system).\r\nOne kind of peripheral vascular disease is called peripheral vascular disease (PVD). (PVD)\r\nSuffering from motion sickness\r\nRefractory epilepsy cannot be treated with conventional antiepileptic drugs.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `unumber` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uimg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `upass`, `unumber`, `uemail`, `uimg`) VALUES
(1, 'Fahim Muntasir Sumit', '123', '01777004794', 'sumit@gmail.com', 'sumit.jpg'),
(2, 'Sajia Sultana Reya', '123', '01700000000', 'sajia@gmail.com', 'photo_2023-05-19 00.03.38.jpeg'),
(14, 'Sajib', '123', '01928284280', 'sajib@gmail.com', '346060776_800548837934434_6566194635201255382_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `head_of_admin`
--
ALTER TABLE `head_of_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`,`mimg`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`uimg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `head_of_admin`
--
ALTER TABLE `head_of_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
