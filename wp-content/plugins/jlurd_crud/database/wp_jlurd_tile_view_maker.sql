-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2025 at 01:12 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 8.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnu-admin_main_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_jlurd_tile_view_maker`
--

CREATE TABLE `wp_jlurd_tile_view_maker` (
  `tileview_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(220) DEFAULT NULL,
  `position` varchar(220) DEFAULT NULL,
  `bionote_link` int(220) DEFAULT NULL,
  `tile_column_number` int(11) DEFAULT NULL,
  `featured_photo` varchar(220) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `modified_by_user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp_jlurd_tile_view_maker`
--

INSERT INTO `wp_jlurd_tile_view_maker` (`tileview_id`, `category_id`, `name`, `position`, `bionote_link`, `tile_column_number`, `featured_photo`, `created_date`, `modified_date`, `created_by_user_id`, `modified_by_user_id`) VALUES
(13, 4, 'DANIEL A. ARIASO SR., PhD, MEcon, CESO II ', 'SUC President III', 0, 12, 'https://cnu.edu.ph/wp-content/uploads/2024/02/DR-ARIASO-PIC.jpg', '2025-04-26 13:08:39', '2025-04-28 05:35:57', 22, 22),
(14, 4, 'DR. ALLAN ROY B. ELNAR', 'Vice-President for Administration, Finance and External Affairs', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/ELNAR.png', '2025-04-26 13:09:30', '2025-04-27 15:49:46', 22, 22),
(15, 4, 'DR. JOSEPH ELVIR C. TUBILAN', 'Vice President for Academic Affairs &amp; Internationalization (VP-AAI)', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/TUBILAN.png', '2025-04-26 13:10:48', '2025-04-27 15:50:02', 22, 22),
(16, 4, 'DR. CRISTINA B. CORCINO', 'Officer-in-Charge, Vice-President for Research, Publication, Innovation, Commercialization and Extension<br />\r\n<br />\r\nDirector, Research Institute', 28997, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/C-CORCINO.png', '2025-04-26 13:11:32', '2025-04-28 02:57:15', 22, 22),
(17, 4, 'DR. VENUS M. CORTES', 'OIC - Vice President for Special Needs, Early Childhood, Internationalization and Lifelong Learning<br />\r\n<br />\r\nOIC Director, Program on Awards and Incentives for Service Excellence (PRAISE)', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/CORTES.png', '2025-04-26 13:12:05', '2025-04-28 02:15:49', 22, 22),
(18, 4, 'DR. FLORDELYNN E. ESCARDA', 'Chief Administrative Officer-Administration', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/ADMIN-COUNCIL-01-66.png', '2025-04-26 13:18:24', '0000-00-00 00:00:00', 22, 0),
(19, 4, 'DR. EVELYN G. TRADIO', 'Chief Administrative Officer-Finance', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2020/09/TRADIO-scaled.jpg', '2025-04-26 13:18:48', '0000-00-00 00:00:00', 22, 0),
(20, 4, 'DR. CARLOU JOHN LETIGIO', 'OIC / Interim Campus Director - CNU - Central Cebu City<br />\r\n<br />\r\nOIC - Director, Disaster Risk Reduction and Public Continuity', 30148, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/LETIGIO-CARLOU-JOHN.png', '2025-04-26 13:19:22', '2025-04-28 03:02:49', 22, 22),
(21, 4, 'DR. JESON A. BUSTAMANTE', 'Officer-in-Charge, Planning, Foresight and Future&rsquo;s Thinking Unit<br />\r\n<br />\r\nOIC-Director, Research and Development, and Publications', 30178, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/BUSTAMANTE.png', '2025-04-26 13:19:52', '2025-04-28 04:23:24', 22, 22),
(22, 4, 'DR. GRACE N. MALAGA', 'OIC - Campus Director, CNU Medellin Campus', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/MALAGA.png', '2025-04-26 13:20:56', '2025-04-27 15:51:41', 22, 22),
(23, 4, 'DR. LITO L. DIONES', 'OIC Interim Campus Director &ndash; Poro Campus<br />\r\n<br />\r\nDirector, Culture and Sports Development', 30218, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/DIONES-LITO-1.jpg', '2025-04-26 13:21:34', '2025-04-28 04:31:52', 22, 22),
(24, 4, 'DR. ROBERTO B. CORCINO', 'Director, Quality Assurance Unit<br />\r\n<br />\r\nCampus Director, Main Campus<br />\r\n<br />\r\nDean, College of Computing, Artificial Intelligences and Sciences<br />\r\n<br />\r\nPetty Cash Custodian', 28977, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/R-CORCINO.png', '2025-04-26 13:22:30', '2025-05-02 01:50:29', 22, 22),
(25, 4, 'DR. ALEX Y. TIEMPO', 'Campus Director, Alegria Campus', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/TIEMPO.png', '2025-04-26 13:23:14', '0000-00-00 00:00:00', 22, 0),
(26, 4, 'DR. LAURENCE L. GARCIA', 'Dean, College of Nursing and Allied Health Sciences', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2020/03/5x7-casual-y.jpg', '2025-04-26 13:23:55', '0000-00-00 00:00:00', 22, 0),
(27, 4, 'DR. MA. SOCORRO G. MANALOTO', 'Dean, CNU-VSMMC College of Medicine<br />\r\n<br />\r\nOfficer-in-Charge, Anti-Sexual Harassment Office (ASHO)', 34597, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/ADMIN-COUNCIL-01-67.png', '2025-04-26 13:24:15', '2025-04-28 05:21:49', 22, 22),
(28, 4, 'DR. REYNALDO B. INOCIAN', 'Dean, College of Culture, Arts and Sports<br />\r\n<br />\r\nDirector, National Competition Policy Office', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/INOCIAN-1.jpg', '2025-04-26 13:24:37', '0000-00-00 00:00:00', 22, 0),
(29, 4, 'ATTY. LURY ED MARIE V. YRAY', 'Director, Legal Unit', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/YRAY.png', '2025-04-26 13:24:58', '0000-00-00 00:00:00', 22, 0),
(30, 4, 'DR. MARCHEE T. PICARDAL', 'OIC Dean, Balamban Campus', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/08/PICARDAL.jpg', '2025-04-26 13:28:08', '0000-00-00 00:00:00', 22, 0),
(31, 4, 'DR. MESHEL B. BALIJON, RGC, RPm', 'OIC Director, Balamban Campus<br />\r\n<br />\r\nOIC Dean, CPGSS<br />\r\n<br />\r\nHead, Testing, Admission, Guidance and Counseling (TAGCS)', 30134, 3, 'https://cnu.edu.ph/wp-content/uploads/2020/09/BALIJON.jpg', '2025-04-26 13:28:36', '2025-04-28 04:32:43', 22, 22),
(32, 4, 'DR. MARIAE KHRISNA ARREZA', '(OIC) - Dean of the College of Tourism, Hospitality and Hotel Management', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/ARREZA.png', '2025-04-26 13:29:15', '0000-00-00 00:00:00', 22, 0),
(33, 4, 'DR. TIZZA MARIE M. NAVARRO', 'OIC - Dean, College of Special needs, Early Childhood, and Lifelong Learning<br />\r\n<br />\r\nDean, CNU Alegria Campus', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/03/NAVARRO-TIZZA-MARIE-768x1075-1.jpg', '2025-04-26 13:36:21', '0000-00-00 00:00:00', 22, 0),
(34, 4, 'DR. JAY P. PICARDAL', 'Director, Research Institute for Tropical Biology and Pharmacological Biotechnology (RITBPB)<br />\r\n<br />\r\nVice-Chairperson, PRAISE Committee', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/PICARDAL.png', '2025-04-26 13:37:46', '0000-00-00 00:00:00', 22, 0),
(35, 4, 'DR. MONIQUE E. CORDOVA', 'OIC-Director, Institute in for Research in Innovative Instructional Delivery (IRIID)', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/10/CORDOVA.png', '2025-04-26 13:38:26', '0000-00-00 00:00:00', 22, 0),
(36, 4, 'DR. LOVELYN G. TIPON', 'Director, Research Institute for Aging and Health (RIAH)', 33817, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/TIPON-LOVELYN-G.png', '2025-04-26 13:40:28', '2025-04-28 04:32:09', 22, 22),
(37, 4, 'DR. LELANI C. DAPAT', 'Director, Information and FM Station Unit<br />\n<br />\nOIC - Dean, College of Teacher Education<br />\n<br />\nManaging Editor of the Journal of Higher Education', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/10/DAPAT-LELANI-C.png', '2025-04-26 13:40:56', '0000-00-00 00:00:00', 22, 0),
(38, 4, 'DR. MARIA NANCY Q. CADOSALES', 'Officer-in-Charge, External Affairs and Partnerships<br />\r\n<br />\r\nDirector, Gender And Development (GAD) Center', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/CADOSALES.png', '2025-04-26 13:41:22', '0000-00-00 00:00:00', 22, 0),
(39, 4, 'DR. MARY JHOANNE T. DE LA CRUZ', 'Records Officer III, Records Office', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/DE-LA-CRUZ.png', '2025-04-26 13:43:03', '0000-00-00 00:00:00', 22, 0),
(40, 4, 'MR. DEOFEL P. BALIJON', 'OIC Director, Information and Communications Technology Center<br />\r\n<br />\r\nHead, Property and Supply Management Unit<br />\r\n<br />\r\nInformation Technology Officer I<br />\r\n<br />\r\nOIC - Director, National Service Trai', 30159, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/sirdeofel.jpg', '2025-04-26 13:43:50', '2025-04-28 05:18:51', 22, 22),
(41, 4, 'MR. OMAR B. ROMA', 'Data Protection Officer<br />\r\n<br />\r\nOfficer-in-Charge (OIC) Director for Information and Communications Technology Unit (ICTU)', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/OMAR-ROMA.png', '2025-04-26 13:44:44', '0000-00-00 00:00:00', 22, 0),
(42, 4, 'ATTY. SHANNINE C. FORTUNA', 'Director, Project Management Unit', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/05/ATTY-SHANNINE-C-FORTUNA-143.png', '2025-04-26 13:45:08', '0000-00-00 00:00:00', 22, 0),
(43, 4, ' MR. JASON P. SABEQUIL', 'University Registrar', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/SABEQUIL.png', '2025-04-26 13:45:33', '0000-00-00 00:00:00', 22, 0),
(44, 4, 'DR. GEROME L. LASALA', 'Director, Cebu Heritage Museum', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/LASALA.png', '2025-04-26 13:45:54', '2025-04-26 14:22:03', 22, 22),
(45, 4, 'MS. FRANCHESKA VONNE GALI', 'OIC Supervisor, Learning Resource Center - Library Services', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/11/istockphoto-517998264-612x612-copy.jpg', '2025-04-26 13:46:29', '0000-00-00 00:00:00', 22, 0),
(46, 4, 'DR. JANET A. MANANAY', 'Project Director, Capacity Building Program in Science and Mathematics Education (CBPSME)<br />\r\n<br />\r\nOfficer-in-Charge, Internationalization and Tertiary <br />\r\n<br />\r\nEducation Equivalency and Accreditation Progra', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/10/MANANAY-JANET-A.png', '2025-04-26 13:47:23', '0000-00-00 00:00:00', 22, 0),
(47, 4, 'DR. LAARNE PONTILLAS', 'OIC Director, Income Generating Projects (IGP)<br />\r\n<br />\r\nOIC - Chief Administrative Officer For Administrative Services', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/09/pontillas-w-logo.jpg', '2025-04-26 13:48:07', '0000-00-00 00:00:00', 22, 0),
(48, 4, 'MR. GILBERT C. CARREDO', 'OIC, Human Resource Management Unit<br />\r\n<br />\r\nHead, Alumni Relations and Affairs Office<br />\r\n<br />\r\nSupply Officer III', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/02/b8dcefa0-d148-4350-92c0-e238d473fb63.jpg', '2025-04-26 13:48:32', '0000-00-00 00:00:00', 22, 0),
(49, 4, 'MR. JAKE JOSHUA C. GARCES', 'Director, Education for Sustainable Development (ESD)', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/GARCES-JAKE-JOSHUA.jpg', '2025-04-26 13:48:53', '0000-00-00 00:00:00', 22, 0),
(50, 4, 'DR. CLARISSA C. GABATO', 'Head, Dental Services', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/02/GABATO.png', '2025-04-26 13:50:00', '0000-00-00 00:00:00', 22, 0),
(51, 4, 'DR. MARNIE M. SALVE', 'Head, Medical Services', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/02/SALVE.png', '2025-04-26 13:50:20', '0000-00-00 00:00:00', 22, 0),
(52, 4, 'MS. MARJORIE B. STA. TERESA', 'Director, Extension Services | Auxiliary Services', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/10/MARJORIE-B-STA-TERESA.jpg', '2025-04-26 13:50:40', '0000-00-00 00:00:00', 22, 0),
(53, 4, 'DR. REMEDIOS C. BACUS', 'OIC Director, Center for Education Policy and Curriculum Development Hub (EPCDH)<br />\r\n<br />\r\nDirector, Curriculum Development and Enhancement', 30212, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/10/BACUS-REMEDIOS-C.png', '2025-04-26 13:51:09', '2025-04-28 04:33:14', 22, 22),
(54, 4, 'ATTY. ROCHE E. OCAMPO, cpa', 'Supervising Administrative Officer-Finance | Head, Accounting Unit', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/10/Atty-Ocampo.jpeg', '2025-04-26 13:57:04', '0000-00-00 00:00:00', 22, 0),
(55, 4, 'MRS. CHARLOTTE B. ROSALES', 'Head, Budget Unit', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2019/10/Untitled-7.jpg', '2025-04-26 13:57:48', '0000-00-00 00:00:00', 22, 0),
(56, 4, 'MR. ANTHONY V. ROBANTE', 'Head, Cashiering Unit', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/robante-no-bg.png', '2025-04-26 13:58:25', '0000-00-00 00:00:00', 22, 0),
(57, 4, 'DR. BLANCA A. ALEJANDRO', 'Supervisor, ILS', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/03/ALEJANDRO-BLANCA-768x1075-1.jpg', '2025-04-26 13:59:01', '0000-00-00 00:00:00', 22, 0),
(58, 4, 'MR. ROMUALDO GENERALAO', 'OIC Head, General Services Unit<br />\r\n<br />\r\nOIC Director, Internal Audit Unit', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/GENERALAO.png', '2025-04-26 13:59:38', '0000-00-00 00:00:00', 22, 0),
(59, 4, 'DR. LITA. A BACALLA', 'Direktor, Sentro ng Wika at Kultura<br />\r\n<br />\r\nOfficer-in-charge (OIC) Director of the Translation Center', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/BACALLA.jpg', '2025-04-26 14:00:29', '0000-00-00 00:00:00', 22, 0),
(60, 4, 'DR. JOLLIBEE A. AHARUL', 'OIC Board and University Secretary V<br />\r\n<br />\r\nDirector, Student Affairs and Development Office', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/AHARUL-JOLLIBEE.png', '2025-04-26 14:01:10', '0000-00-00 00:00:00', 22, 0),
(61, 4, 'DR. GENARA B. PACAÑA', 'Director of the Open and Distance Learning (ODL)<br />\r\n<br />\r\nOfficer-in-Charge, Tech/Voc National/Certification (NC Training) and Assessment Center', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/08/PACANA.jpg', '2025-04-26 14:02:35', '0000-00-00 00:00:00', 22, 0),
(62, 4, 'DR. FELEEH ENANOZA', 'Supervisor, Teaching Internship', 30203, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/ENANOZA-FELEEH-L.png', '2025-04-26 14:03:04', '2025-04-28 04:22:57', 22, 22),
(63, 4, ' MS. MARY FLOR VILLARUEL', 'OIC Assistant Supervisor for Student Internship Program in the External / Regular / Extension Campuses<br />\r\n<br />\r\nAssistant Supervisor for Student Internship Program<br />\r\n<br />\r\nFocal Person for Sports, Athletics,', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/VILLARUEL-MARY-FLOR-I.png', '2025-04-26 14:03:38', '0000-00-00 00:00:00', 22, 0),
(64, 4, 'MS. DARLENE A. YAP', 'OIC - Director For Artistics And Chorale Office', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/yap.jpg', '2025-04-26 14:04:11', '0000-00-00 00:00:00', 22, 0),
(65, 4, 'MS. DARA-HILL B. MEDILLO', 'Artistic Director/Adviser, Dance Troupe', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/MEDILLO.jpg', '2025-04-26 14:04:34', '0000-00-00 00:00:00', 22, 0),
(66, 4, 'DR. JAY JUMAR R. BACUNAWA', 'OIC - Interim Campus Director Of CNU - Catmon Campus', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2025/04/Bacunawa-Jay-210x300-removebg-preview.png', '2025-04-26 14:05:01', '0000-00-00 00:00:00', 22, 0),
(67, 4, 'ENGR. JAIRA MARIE E. SOLIVA', 'Executive Assistant III<br />\r\n<br />\r\nOIC - Supervising Administrative Officer For Administration<br />\r\n<br />\r\nOIC - Supervisor Of The Metro Manila Liaison And Coordination Office', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/11/istockphoto-517998264-612x612-copy.jpg', '2025-04-26 14:05:47', '0000-00-00 00:00:00', 22, 0),
(68, 4, 'MR. JOSE ALFREDO D. BIEN', 'OIC - Administrative Officer V - Procurement Unit', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/11/istockphoto-517998264-612x612-copy.jpg', '2025-04-26 14:07:03', '0000-00-00 00:00:00', 22, 0),
(69, 4, 'DR. ROSARIO B. FANTONIAL', 'Dean - Catmon Campus', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/FANTONIAL-ROSARIO-R.png', '2025-04-26 14:07:32', '0000-00-00 00:00:00', 22, 0),
(70, 4, 'DR. ERIC A. REMOROZA', 'Campus Director - Argao Campus', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/REMOROZA-ERIC.jpg', '2025-04-26 14:07:55', '0000-00-00 00:00:00', 22, 0),
(71, 4, 'DR. IRENEO C. ABAD', 'Dean, Argao Campus', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/10/ABAD-IRENEO-C.png', '2025-04-26 14:08:14', '0000-00-00 00:00:00', 22, 0),
(72, 4, 'DR. ANA FARA C. NELMIDA', 'Director, Research Institute for Language Studies', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/NELMIDA-Ana-Fara.png', '2025-04-26 14:09:15', '0000-00-00 00:00:00', 22, 0),
(73, 4, ' DR. ROWENA C. LARGO', 'Director, Research Institute for Filipino Studies', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/LARGO.jpg', '2025-04-26 14:09:32', '0000-00-00 00:00:00', 22, 0),
(74, 4, ' DR. MA. ROSITA HERNANI', 'Director, Research Institute for Performing Arts and Creative Works', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/MA-HERNANI.jpg', '2025-04-26 14:09:56', '0000-00-00 00:00:00', 22, 0),
(75, 4, 'DR. CORAZON PREJOLES', 'Director, Research Institute for Media Education and Development Institute for Advancement', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/PREJOLES-CORAZON.png', '2025-04-26 14:10:16', '0000-00-00 00:00:00', 22, 0),
(76, 4, ' MR. JAMES LOUIES B. UN', 'Director, Research Institute for Human Development Studies', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/UN-James-Louies.png', '2025-04-26 14:10:41', '0000-00-00 00:00:00', 22, 0),
(77, 4, ' MR. ELVIN E. RUIZ', 'Director, Research Institute for Culture and Heritage', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/RUIZ.jpg', '2025-04-26 14:11:33', '0000-00-00 00:00:00', 22, 0),
(78, 4, 'MS. JEANIE H. RAFOLS', 'Administrative Officer V - Quality Assurance Unit', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2025/04/user2.jpg', '2025-04-26 14:12:51', '0000-00-00 00:00:00', 22, 0),
(79, 4, ' ARC. JODL-JOB S. DABON', 'Planning Officer III - Planning, Foresight and Futures Thinking Unit', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/11/istockphoto-517998264-612x612-copy.jpg', '2025-04-26 14:14:37', '0000-00-00 00:00:00', 22, 0),
(80, 4, 'MS. PORTIA T. RUBEN', 'Head, Library Services', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/08/PORTIA_RUBEN.png', '2025-04-26 14:14:56', '0000-00-00 00:00:00', 22, 0),
(81, 4, ' DR. JULIUS C. DANO', 'President, FAI', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2025/04/DANO.jpg', '2025-04-26 14:15:46', '2025-04-26 14:19:14', 22, 22),
(82, 4, 'MS. NOMEL ALYSSA ANDAN', 'Head, Licensure Examinations for Teachers&#039; Review and Graduate Tracer Study (LETR-GTS) of CNU-Balamban Campus', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2025/04/user2.jpg', '2025-04-26 14:19:44', '0000-00-00 00:00:00', 22, 0),
(83, 4, 'DR. JOJE MAR P. SANCHEZ', 'OIC-Director of Innovation, Intellectual Property and Commercialization (IIPC)<br />\r\n<br />\r\nGeneral Manager, Innovation and Technology Support Office (ITSO)', 30074, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/03/SANCHEZ-768x1075-1.jpg', '2025-04-26 14:20:13', '2025-04-28 04:24:12', 22, 22),
(84, 4, 'DR. CHRYSLER M. CABUSA', 'Dean, CNU Medellin', 30170, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/CABUSA.png', '2025-04-26 14:20:38', '2025-04-28 03:06:01', 22, 22),
(85, 5, 'DANIEL A. ARIASO SR., PHD, MECON, CESO II', 'University President<br />\r\n<br />\r\nChairperson', 0, 12, 'https://cnu.edu.ph/wp-content/uploads/2024/02/DR-ARIASO-PIC.jpg', '2025-04-29 01:26:39', '2025-04-29 08:39:13', 22, 22),
(86, 6, 'Dr. Cristina B. Corcino', 'Dean, CCAIS<br />\r\nResearch Chair/RICMP Director', 28997, 12, 'https://cnu.edu.ph/wp-content/uploads/2024/03/C-CORCINO.png', '2025-04-29 03:45:37', '2025-04-29 03:52:52', 22, 22),
(87, 6, 'Dr. Edward M. Kiunisala', 'Chair, Mathematics Department', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/KIUNISALA-EDWARD.jpg', '2025-04-29 03:48:12', '0000-00-00 00:00:00', 22, 0),
(88, 6, 'Mr. Karl Patrick S. Casas', 'Chair, Chemistry-Physics Deparment', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/CASAS-KARL-PATRICK.png', '2025-04-29 03:48:47', '0000-00-00 00:00:00', 22, 0),
(89, 6, 'Ms. Mylene P. Sadagnot', 'Chair, Biology Department', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/07/mylnn-sadagnot.jpg', '2025-04-29 03:49:30', '0000-00-00 00:00:00', 22, 0),
(90, 6, 'Dexter S. Ontoy', 'Chair, Department of Biology', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2025/04/3a59f57a-f4ee-4e59-8ef6-2fa1dfe9b462.jpg', '2025-04-29 03:50:29', '2025-04-29 07:28:39', 22, 22),
(91, 6, 'Ms. Jeneveb T. Malusay', 'Extension Chair', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/MALUSAY-JENEVEB-T.png', '2025-04-29 03:51:11', '0000-00-00 00:00:00', 22, 0),
(92, 6, 'Ms. Erced E. Urbano', 'Quality Assurance CCAIS', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/URBANO-Erced.png', '2025-04-29 03:51:44', '0000-00-00 00:00:00', 22, 0),
(93, 6, 'Mr. Seagal Asjali', 'GAD Focal Person', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/ASJALI-SEAGAL.png', '2025-04-29 03:52:12', '0000-00-00 00:00:00', 22, 0),
(94, 5, 'DR. ALLAN ROY B. ELNAR', 'Vice President for Administration, Finance and External Affairs (VPAFEA)<br />\r\n<br />\r\nAlternate Chair', 0, 12, 'https://cnu.edu.ph/wp-content/uploads/2024/03/ELNAR.png', '2025-04-29 08:11:31', '0000-00-00 00:00:00', 22, 0),
(95, 5, 'DR. CRISTINA B. CORCINO', 'Vice President for Research, Publication, Innovation, Commercialization and Extension (VPRPICE)<br />\r\n<br />\r\nVice Chair', 28997, 4, 'https://cnu.edu.ph/wp-content/uploads/2024/03/C-CORCINO.png', '2025-04-29 08:35:47', '2025-04-29 08:38:24', 22, 22),
(96, 5, 'DR. JOSEPH ELVIR C. TUBILAN', 'Vice President for Academic Affairs (VPAA)<br />\r\n<br />\r\nVice Chair', 0, 4, 'https://cnu.edu.ph/wp-content/uploads/2024/03/TUBILAN.png', '2025-04-29 08:36:29', '2025-04-29 08:38:40', 22, 22),
(97, 5, 'DR. VENUS M. CORTES', 'Vice President for Special Needs, Early Childhood Education, Internationalization and Lifelong Learning<br />\r\n<br />\r\nVice Chair', 0, 4, 'https://cnu.edu.ph/wp-content/uploads/2024/03/CORTES.png', '2025-04-29 08:37:29', '2025-04-29 08:42:56', 22, 22),
(98, 5, 'DR. JOSEPH SOL T. GALLEON', 'Dean, College of Teacher Education<br />\r\n<br />\r\nMember', 30195, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/GALLEON.jpeg', '2025-04-29 08:40:05', '2025-04-29 08:43:15', 22, 22),
(99, 5, 'MS. FRANCHESKA VONNE S. GALI', 'Head, Learning Resource Center/Library Services<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2025/04/user2.jpg', '2025-04-29 08:40:39', '2025-04-29 08:43:29', 22, 22),
(100, 5, 'DR. MESHEL B. BALIJON', 'Head, Testing, Admission, Guidance &amp; Counseling Services<br />\r\n<br />\r\nMember', 30134, 3, 'https://cnu.edu.ph/wp-content/uploads/2020/09/BALIJON.jpg', '2025-04-29 08:41:25', '2025-04-29 08:43:42', 22, 22),
(101, 5, 'MRS. MARY JHOANNE T. DE LA CRUZ', 'Head, Records Unit<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/DE-LA-CRUZ.png', '2025-04-29 08:44:15', '2025-04-29 08:45:01', 22, 22),
(102, 5, 'DR. FLORDELYNN E. ESCARDA', 'Head, Procurement Unit<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2023/09/ADMIN-COUNCIL-01-66.png', '2025-04-29 08:45:27', '0000-00-00 00:00:00', 22, 0),
(103, 5, 'MR. ANTHONY V. ROBANTE', 'Head, Cash Unit', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/robante-no-bg.png', '2025-04-29 08:45:46', '0000-00-00 00:00:00', 22, 0),
(104, 5, 'MR. ROMUALDO B. GENERALAO', 'Head, General Service Unit<br />\r\nHead, National Greening Program<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/GENERALAO.png', '2025-04-29 08:46:21', '0000-00-00 00:00:00', 22, 0),
(105, 5, 'MR. DEOFEL P. BALIJON', 'Head, Property, Supply and Management Unit<br />\r\n<br />\r\nMember', 30159, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/sirdeofel.jpg', '2025-04-29 08:46:52', '0000-00-00 00:00:00', 22, 0),
(106, 5, 'DR. MARNIE M. SALVE', 'Head, Medical Services<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/02/SALVE.png', '2025-04-29 08:47:26', '2025-04-29 08:47:41', 22, 22),
(107, 5, 'DR. CLARISSA C. GABATO', 'Head, Dental Services<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/02/GABATO.png', '2025-04-29 08:48:07', '0000-00-00 00:00:00', 22, 0),
(108, 5, 'MR. JAKE JOSHUA C. GARCES', 'Head, Educational Sustainable Development<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2022/04/GARCES-JAKE-JOSHUA.jpg', '2025-04-29 08:48:33', '0000-00-00 00:00:00', 22, 0),
(109, 5, 'DR. ALLAN ROY B. ELNAR', 'Chair, LUDIP &amp; PIP/TRIP<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2024/03/ELNAR.png', '2025-04-29 08:58:46', '0000-00-00 00:00:00', 22, 0),
(110, 5, 'MR. JULIUS C. DAÑO', 'President, Federation of Faculty Associations, Inc.<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2025/04/DANO.jpg', '2025-04-29 08:59:00', '2025-04-29 08:59:41', 22, 22),
(111, 5, 'MS. ELLA NICOLE S. MATA', 'President, Federation of Student Councils<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2025/04/user2.jpg', '2025-04-29 09:00:02', '2025-04-29 09:01:06', 22, 22),
(112, 5, 'ENGR. JAIRA MARIE E. SOLIVA', 'Executive Assistant Ill, Office of the University President<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2025/04/user2.jpg', '2025-04-29 09:00:22', '0000-00-00 00:00:00', 22, 0),
(113, 5, 'MS. ANN CLAY DEAN B. PADILLO', 'Staff of the Quality Assurance Unit<br />\r\n<br />\r\nMember', 0, 3, 'https://cnu.edu.ph/wp-content/uploads/2025/04/user2.jpg', '2025-04-29 09:00:38', '2025-04-29 09:01:11', 22, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_jlurd_tile_view_maker`
--
ALTER TABLE `wp_jlurd_tile_view_maker`
  ADD PRIMARY KEY (`tileview_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_jlurd_tile_view_maker`
--
ALTER TABLE `wp_jlurd_tile_view_maker`
  MODIFY `tileview_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
