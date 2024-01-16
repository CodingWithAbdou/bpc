-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bpc
CREATE DATABASE IF NOT EXISTS `bpc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bpc`;

-- Dumping structure for table bpc.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.categories: ~3 rows (approximately)
DELETE FROM `categories`;
INSERT INTO `categories` (`id`, `order_by`, `created_at`, `updated_at`) VALUES
	(1, 1, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(2, 2, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(3, 3, '2023-11-20 10:15:58', '2023-11-20 10:15:58');

-- Dumping structure for table bpc.category_translations
CREATE TABLE IF NOT EXISTS `category_translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  KEY `category_translations_locale_index` (`locale`),
  CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.category_translations: ~4 rows (approximately)
DELETE FROM `category_translations`;
INSERT INTO `category_translations` (`id`, `category_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 1, 'ar', 'تصنيف الاول', NULL, NULL, NULL),
	(2, 1, 'en', 'Multivitamins & Minerals', NULL, NULL, NULL),
	(3, 2, 'en', 'Supplements', NULL, NULL, NULL),
	(4, 3, 'en', 'Skin / Topical Care', NULL, NULL, NULL);

-- Dumping structure for table bpc.certificates
CREATE TABLE IF NOT EXISTS `certificates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.certificates: ~3 rows (approximately)
DELETE FROM `certificates`;
INSERT INTO `certificates` (`id`, `icone`, `order_by`, `created_at`, `updated_at`) VALUES
	(1, 'storage/img/certificates/certificate-1.webp', 1, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(2, 'storage/img/certificates/certificate-2.svg', 2, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(3, 'storage/img/certificates/certificate-3.svg', 3, '2023-11-20 10:15:58', '2023-11-20 10:15:58');

-- Dumping structure for table bpc.certificate_translations
CREATE TABLE IF NOT EXISTS `certificate_translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `certificate_id` bigint unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `certificate_translations_certificate_id_locale_unique` (`certificate_id`,`locale`),
  KEY `certificate_translations_locale_index` (`locale`),
  CONSTRAINT `certificate_translations_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.certificate_translations: ~3 rows (approximately)
DELETE FROM `certificate_translations`;
INSERT INTO `certificate_translations` (`id`, `certificate_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 1, 'en', 'ISO 9001', 'BPC company obtained the ISO certificate in quality management.', NULL, NULL),
	(2, 2, 'en', 'ISO 14001', 'BPC has obtained Environmental Management Certification.', NULL, NULL),
	(3, 3, 'en', 'GMP', 'BPC has obtained the Palestinian GMP certificate.', NULL, NULL);

-- Dumping structure for table bpc.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table bpc.languages
CREATE TABLE IF NOT EXISTS `languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.languages: ~2 rows (approximately)
DELETE FROM `languages`;
INSERT INTO `languages` (`id`, `name`, `fullname`) VALUES
	(1, 'ar', 'Arabic'),
	(2, 'en', 'English');

-- Dumping structure for table bpc.members
CREATE TABLE IF NOT EXISTS `members` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` int NOT NULL,
  `order_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.members: ~0 rows (approximately)
DELETE FROM `members`;

-- Dumping structure for table bpc.member_translations
CREATE TABLE IF NOT EXISTS `member_translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `member_translations_member_id_locale_unique` (`member_id`,`locale`),
  KEY `member_translations_locale_index` (`locale`),
  CONSTRAINT `member_translations_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.member_translations: ~0 rows (approximately)
DELETE FROM `member_translations`;

-- Dumping structure for table bpc.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.migrations: ~0 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_11_12_190410_create_pages_table', 1),
	(6, '2023_11_12_190423_create_page_translations_table', 1),
	(7, '2023_11_12_191138_create_sliders_table', 1),
	(8, '2023_11_12_191153_create_slider_translations_table', 1),
	(9, '2023_11_12_192115_create_members_table', 1),
	(10, '2023_11_12_192140_create_member_translations_table', 1),
	(11, '2023_11_14_073944_create_categories_table', 1),
	(12, '2023_11_14_073950_create_product_types_table', 1),
	(13, '2023_11_14_073957_create_products_table', 1),
	(14, '2023_11_14_085657_create_productivities_table', 1),
	(15, '2023_11_14_095223_create_news_table', 1),
	(16, '2023_11_15_090011_create_product_images_table', 1),
	(17, '2023_11_15_103229_create_certificates_table', 1),
	(18, '2023_11_15_151614_create_project_models_table', 1),
	(19, '2023_11_16_104533_create_settings_table', 1),
	(20, '2023_11_16_131423_create_languages_table', 1),
	(21, '2023_11_20_152338_create_news_table', 2);

-- Dumping structure for table bpc.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `page_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.pages: ~12 rows (approximately)
DELETE FROM `pages`;
INSERT INTO `pages` (`id`, `page_key`, `section_key`, `image_one`, `image_two`, `info`, `order_by`, `created_at`, `updated_at`) VALUES
	(1, 'home', 'sliders', '', NULL, NULL, 1, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(2, 'home', 'experience', 'uploads/Page/984441700492396.jpg', 'storage/img/home/services-02.webp', NULL, 2, '2023-11-20 10:15:58', '2023-11-20 13:59:56'),
	(3, 'home', 'products', NULL, NULL, NULL, 3, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(4, 'home', 'productivity', NULL, NULL, NULL, 4, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(5, 'about', 'profile', 'uploads/Page/819981700489687.jpg', 'storage/img/about/about-2.webp', NULL, 1, '2023-11-20 10:15:58', '2023-11-20 13:14:47'),
	(6, 'about', 'vision', 'storage/img/about/about-3.webp', NULL, NULL, 3, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(7, 'about', 'history', 'storage/img/about/about-4.webp', 'uploads/Page/160131700489410.jpg', NULL, 4, '2023-11-20 10:15:58', '2023-11-20 13:10:10'),
	(8, 'other', 'privacy', NULL, NULL, NULL, NULL, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(9, 'other', 'terms', NULL, NULL, NULL, NULL, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(10, 'other', 'social_responsibility', NULL, NULL, NULL, NULL, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(11, 'other', 'environment', 'storage/img/about/about-4.webp', NULL, NULL, NULL, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(12, 'other', 'community', 'storage/img/about/about-4.webp', NULL, NULL, NULL, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(13, 'about', 'second_profile', 'uploads/Page/767651700489215.jpg', NULL, NULL, 2, '2023-11-20 10:15:58', '2023-11-20 13:06:55'),
	(14, 'home', 'news', NULL, NULL, NULL, 5, '2023-11-20 15:01:01', NULL);

-- Dumping structure for table bpc.page_translations
CREATE TABLE IF NOT EXISTS `page_translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `list` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`),
  KEY `page_translations_locale_index` (`locale`),
  CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.page_translations: ~13 rows (approximately)
DELETE FROM `page_translations`;
INSERT INTO `page_translations` (`id`, `page_id`, `locale`, `title`, `subtitle`, `description`, `list`) VALUES
	(1, 1, 'en', 'slider', NULL, NULL, NULL),
	(2, 2, 'en', '50 Years of Experience in The Pharmaceutical Industry', 'experience', 'Birzeit Pharmaceutical Company is a leading Palestinian company in the field of pharmaceutical manufacturing. The company produces approximately 300 preparations distributed on ten production lines covering various therapeutic fields. The company targets all types of customers in the local Palestinian market, including the Ministry of Health and local and international health care organizations and programs', NULL),
	(3, 2, 'ar', '50 سنة خبرة', 'experience', '<p>السينما أحدث الفنون جميعا ، فعمرها يكاد لا يتجاوز السبعين عاما في حين أن الأدب من أقدم الفنون ، إن لم يكن أقدمها جميعا ، فلدينا نصوص أدبية يزيد عمرها على الأربعين قرنا ، فضلا عن المحاولات الشفاهية التي سبقتها ولم تصل إلينا . لذلك كانت للأدب تقاليده الفنية الراسخة ، ومقاييسه الجمالية المصطلح عليها ، في حين أن السينما ما زالت تفتقر إلى مثل هذه التقاليد والمقاييس .ولعل غلبة العنصر الصناعي على السينما وما يترتب عليه من قيم تجارية سوقية هو السبب الرئيسي لتخلفها الفني والفكري ، ونفور عدد غير قليل من كبار الأدباء والمفكرين عنها ، فالمنتج الذي يملك وسائل الإنتاج السينمائي ويقوم بتمويله ، لا يستهدف عادة غير الربح ، ومن ثم يضع في اعتباره أولا وقبل كل شيء متطلبات السوق ، ورغبات الجماهير الضخمة ومستوى فهمها ، الذي اصطلح على أنه لا يزيد على مستوى صبي مراهق في الرابعة عشرة من عمره !</p>', NULL),
	(4, 3, 'en', 'Our Products', NULL, '<p>BPC manufactures and markets generic products in almost all therapeutic fields including a variety of dosage forms, the company manufactures. We continuously focus on maintaining the highest standards of quality, to ensure that our products deliver the maximum benefit to patients, our commitment to quality is the key factor to our success.</p>', NULL),
	(5, 3, 'ar', 'منتجاتنا', NULL, 'السينما أحدث الفنون جميعا ، فعمرها يكاد لا يتجاوز السبعين عاما في حين أن الأدب من أقدم الفنون ، إن لم يكن أقدمها جميعا ، فلدينا نصوص أدبية يزيد عمرها على الأربعين قرنا ، فضلا عن المحاولات الشفاهية التي سبقتها ولم تصل إلينا . لذلك كانت للأدب تقاليده الفنية الراسخة ، ومقاييسه الجمالية المصطلح عليها ، في حين أن السينما ما زالت تفتقر إلى مثل هذه التقاليد والمقاييس .ولعل غلبة العنصر الصناعي على السينما وما يترتب عليه من قيم تجارية سوقية هو السبب الرئيسي لتخلفها الفني والفكري ، ونفور عدد غير قليل من كبار الأدباء والمفكرين عنها ، فالمنتج اللى مستوى صبي مراهق في الرابعة عشرة من عمره !', NULL),
	(6, 4, 'en', 'Our professional team works to increase productivity on the market', NULL, NULL, NULL),
	(7, 5, 'en', 'Company', 'Profile', '<p>Birzeit Pharmaceutical Company is a leading Palestinian company in the field of pharmaceutical manufacturing. The company produces approximately 300 preparations distributed on ten production lines covering various therapeutic fields. The company targets all types of clients in the local Palestinian market, including the Ministry of Health, local and international healthcare organizations and programs, in addition to consumers (through pharmacies and doctors).</p>', NULL),
	(8, 6, 'en', 'Company ', 'Vision & Mission', 'The vision of Birzeit Pharma is to be the leading locally and regionally in providing pharmaceutical products for a better life. The values are trust, professionalism, efficiency, effectiveness, belonging, and cooperation. We have always been keen to be innovative in the targeted markets through providing high-quality products coping with the ongoing progress the world is witnessing, through hiring a distinguished and a qualified staff, to fulfil our responsibilities towards our employees, our community and our society. We are committed to maintain a clean environment for our society and people.', NULL),
	(9, 7, 'en', 'Company', 'History', '<p>Birzeit Pharmaceuticals Company was established in 1974 in Birzeit, which is 10 km from Ramallah, as a private joint stock company with an investment of 150,000 US dollars in total capital. In 1979, Birzeit Pharmaceutical Company became a public joint stock company with a capital of US$0.5 million. In 1992, the company merged with the Palestine Pharmaceutical Manufacturing Company, which is the third largest pharmaceutical company in Palestine at the time. It also established the MEDIX skincare company, which represents a number of international companies such as Maybelline, Vichy, and Andola. Birzeit Pharmaceuticals Company obtained the ISO 9001 certificate in 2001. In 2000, the company purchased 73% of the shares of the Eastern Chemical Company and obtained the remaining 27% of them in 2004, and in the same year, it obtained the ISO 14001 certificate. In 2005, Birzeit Company owned 51% of Petrofam Company in Algeria, where Birzeit Company exports semi-finished products to it, which Petropharm packages and sells in the Algerian market. Also in 2005, Birzeit Pharmaceutical Company became listed on the Palestine Stock Exchange. The continuous investment in quality led Birzeit Pharmaceuticals to obtain GMP certification according to the standards of the World Health Organization in 2008. In 2010, Birzeit Pharmaceuticals doubled its export market share, which was reflected in its revenues 2010. Birzeit Pharmaceuticals Company is constantly re-evaluating its business with the aim of being the most distinguished company in the pharmaceutical industry in Palestine, being able to provide people with the needs that ensure their health.</p>', NULL),
	(10, 8, 'en', 'Privacy Policy', NULL, '<h4>Welcome to the Privacy Policy for Birzeit Pharmaceutical Company’s website at bpc.ps. This Privacy Policy explains how we collect, use, and protect the personal information that you provide to us when you use our website.</h4>\n            <ol><li>Information we collect: We collect personal information that you voluntarily provide to us when you use our website, such as your name, email address, phone number, and any other information that you choose to provide.</li><li>Use of information: We use your personal information to provide you with the products and services that you request, to communicate with you about our products and services, and to improve our website and customer service.</li><li>Sharing of information: We do not sell or rent your personal information to third parties. We may share your personal information with our affiliates, service providers, or business partners to the extent necessary to provide you with the products and services that you request.</li><li>Cookies and tracking technologies: We may use cookies, web beacons, and other tracking technologies to collect information about your use of our website, such as your IP address, browser type, and operating system. This information helps us to improve our website and to provide you with a better user experience.</li><li>Data security: We take reasonable measures to protect your personal information from unauthorized access, use, or disclosure. However, no data transmission over the internet can be guaranteed to be completely secure, so we cannot guarantee the security of your information.</li><li>Children’s privacy: Our website is not directed to children under the age of 13, and we do not knowingly collect personal information from children under the age of 13. If you are under the age of 13, please do not provide us with any personal information.</li><li>Changes to Privacy Policy: We reserve the right to update or modify this Privacy Policy at any time without prior notice. Your continued use of our website following any changes to this Privacy Policy constitutes your acceptance of those changes.</li><li>Contact us: If you have any questions or concerns about this Privacy Policy or our website, please contact us at <strong>info@bpc.ps</strong> or by calling our office at <strong>+970-2-2987573.</strong></li></ol>\n            <p>Thank you for visiting our website.</p>', NULL),
	(11, 9, 'en', 'Terms and Condition', NULL, '<h4>Welcome to the Terms and Conditions for Birzeit Pharmaceutical Company’s website at bpc.ps. By accessing and using our website, you agree to be bound by the following terms and conditions:</h4>\n            <ol><li>Ownership of content: All content on the website, including but not limited to text, graphics, logos, images, and software, is the property of Birzeit Pharmaceutical Company and is protected by copyright laws.</li><li>Use of website: You may use our website for personal, non-commercial purposes only. You may not copy, modify, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, transfer or sell any information or content obtained from the website without our prior written consent.</li><li>Accuracy of information: We strive to ensure that all information on our website is accurate, but we cannot guarantee the accuracy, completeness, or timeliness of the information. We reserve the right to update or modify the information on our website at any time without prior notice.</li><li>Product information: Any information or content provided on our website about our products is for informational purposes only and should not be used as a substitute for professional medical advice or treatment. Please consult your healthcare provider before using any of our products.</li><li>Links to third-party websites: Our website may contain links to third-party websites that are not under our control. We are not responsible for the content or availability of these websites and we do not endorse any products or services offered on them.</li><li>Limitation of liability: Birzeit Pharmaceutical Company shall not be liable for any damages, including but not limited to direct, indirect, incidental, consequential, or punitive damages, arising out of or in connection with the use or inability to use our website or the information or content provided on our website.</li><li>Indemnification: You agree to indemnify and hold Birzeit Pharmaceutical Company and its affiliates, officers, agents, employees, and licensors harmless from any claim or demand, including reasonable attorneys’ fees, made by any third party due to or arising out of your use of our website or your violation of these terms and conditions.</li><li>Governing law: These terms and conditions shall be governed by and construed in accordance with the laws of the State of Palestine, without giving effect to any principles of conflicts of law.</li><li>Jurisdiction: Any legal action arising out of or in connection with these terms and conditions or the use of our website shall be brought in the courts of the State of Palestine.</li><li>Changes to terms and conditions: We reserve the right to update or modify these terms and conditions at any time without prior notice. Your continued use of our website following any changes to these terms and conditions constitutes your acceptance of those changes.</li><li>Contact us: If you have any questions or concerns about these terms and conditions or our website, please contact us at <strong>info@bpc.ps</strong> or by calling our office at <strong>+970-2-2987573.</strong></li></ol>\n            <p>Thank you for visiting our website.</p>', NULL),
	(12, 10, 'en', 'Social Responsibility', NULL, '<p>BPC considers its commitment to its social responsibility a core priority. The company focuses on sustainable investments in several important fields such as environment, education, health, social & cultural development, athletic development, and most importantly BPC’s internal community and its employees.</p> ', NULL),
	(13, 11, 'en', 'Our Environment', NULL, 'Since 2004, BPC has invested in eliminating the environmental damage associated with pharmaceutical manufacturing. The Company’s first environment-friendly building was completed in 2012, whereby solar energy had been utilized as an alternative to fuel. BPC aims to replicate this environment-friendly example in its other facilities and is still investing in applying new green energy resources.', NULL),
	(14, 1, 'ar', 'السلايدر', NULL, NULL, NULL),
	(15, 4, 'ar', 'فريقنا المحترف', NULL, NULL, NULL),
	(16, 13, 'en', 'Second Profile', NULL, '<p>Birzeit Pharmaceutical Company is a leading Palestinian company in the field of pharmaceutical manufacturing. The company produces approximately 300 preparations distributed on ten production lines covering various therapeutic fields. The company targets all types of clients in the local Palestinian market, including the Ministry of Health, local and international healthcare organizations and programs, in addition to consumers (through pharmacies and doctors).</p>', NULL),
	(17, 13, 'ar', 'البروفايل الثاني', NULL, '<h3>&nbsp;</h3>\r\n<p>ومن هنا كان نفور معظم منتجي السينما على كل ما يتصل بالثقافة والفن الأصيل ، وحرصهم على حشد أفلامهم بكل أنواع التسليات والمثيرات ، على نحو ما نرى في أفلام رعاة البقر ، والمغامرات البوليسية ، واللقطات الخليعة ، التي ترضي فضول الجماهير العريضة في كل أنحاء العالم ، وتحرك غرائزها ولا تتطلب منها جهدا فكريا من أي نوع ، بل على العكس تخدرها وتقتل فيها&nbsp; عادة التفكير الحر الأصيل ، وتلهيها عن مشاكل حياتها الواقعية ، مما نلمسه آثاره المدمرة في حياة كثير من الشعوب ، والمتخلفة منها بصفة أخص ، وبين الشباب بصورة أوضح&nbsp;</p>', NULL),
	(18, 5, 'ar', 'الشركة', NULL, NULL, NULL),
	(19, 14, 'ar', 'الاخبار', NULL, NULL, NULL);

-- Dumping structure for table bpc.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table bpc.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table bpc.productivities
CREATE TABLE IF NOT EXISTS `productivities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.productivities: ~4 rows (approximately)
DELETE FROM `productivities`;
INSERT INTO `productivities` (`id`, `icone`, `order_by`, `created_at`, `updated_at`) VALUES
	(1, 'storage/img/productivities/count.svg', 1, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(2, 'storage/img/productivities/count.svg', 2, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(3, 'storage/img/productivities/count.svg', 3, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(4, 'storage/img/productivities/count.svg', 4, '2023-11-20 10:15:58', '2023-11-20 10:15:58');

-- Dumping structure for table bpc.productivity_translations
CREATE TABLE IF NOT EXISTS `productivity_translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `productivity_id` bigint unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `productivity_translations_productivity_id_locale_unique` (`productivity_id`,`locale`),
  KEY `productivity_translations_locale_index` (`locale`),
  CONSTRAINT `productivity_translations_productivity_id_foreign` FOREIGN KEY (`productivity_id`) REFERENCES `productivities` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.productivity_translations: ~5 rows (approximately)
DELETE FROM `productivity_translations`;
INSERT INTO `productivity_translations` (`id`, `productivity_id`, `locale`, `name`, `value`, `created_at`, `updated_at`) VALUES
	(1, 1, 'en', 'Established', '1974', NULL, NULL),
	(2, 2, 'en', 'Countries', '4', NULL, NULL),
	(3, 3, 'en', 'Workers', '370', NULL, NULL),
	(4, 4, 'en', 'Sites', '6', NULL, NULL),
	(5, 3, 'ar', 'العمال', 'ارقام بالعربية ', NULL, NULL);

-- Dumping structure for table bpc.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `product_type_id` bigint unsigned DEFAULT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_explore_one_lg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_explore_two_lg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_explore_three_lg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_explore_one_sm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_explore_two_sm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_explore_three_sm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_product_type_id_foreign` (`product_type_id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.products: ~5 rows (approximately)
DELETE FROM `products`;
INSERT INTO `products` (`id`, `product_type_id`, `category_id`, `image`, `image_explore_one_lg`, `image_explore_two_lg`, `image_explore_three_lg`, `image_explore_one_sm`, `image_explore_two_sm`, `image_explore_three_sm`, `file`, `order_by`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'storage/img/product/1.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, 'path/', 1, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(2, 2, 1, 'storage/img/product/2.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, 'path/', 1, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(3, 3, 2, 'storage/img/product/3.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, 'path/', 1, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(4, 1, 2, 'storage/img/product/4.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, 'path/', 1, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(5, 1, 2, 'storage/img/product/4.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, 'path/', 1, '2023-11-20 10:15:58', '2023-11-20 10:15:58');

-- Dumping structure for table bpc.product_images
CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned DEFAULT NULL,
  `image_sm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_lg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`),
  CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.product_images: ~5 rows (approximately)
DELETE FROM `product_images`;
INSERT INTO `product_images` (`id`, `product_id`, `image_sm`, `image_lg`, `order_by`, `created_at`, `updated_at`) VALUES
	(1, 1, 'storage/img/product/explore_sm_1.jpeg', 'storage/img/product/explore_lg_1.jpeg', 1, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(2, 1, 'storage/img/product/explore_sm_2.jpeg', 'storage/img/product/explore_lg_2.jpeg', 2, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(3, 1, 'storage/img/product/explore_sm_3.jpeg', 'storage/img/product/explore_lg_3.jpeg', 3, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(4, 2, 'storage/img/product/explore_sm_3.jpeg', 'storage/img/product/explore_lg_3.jpeg', 3, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(5, 2, 'storage/img/product/explore_sm_3.jpeg', 'storage/img/product/explore_lg_3.jpeg', 3, '2023-11-20 10:15:58', '2023-11-20 10:15:58');

-- Dumping structure for table bpc.product_translations
CREATE TABLE IF NOT EXISTS `product_translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `use` text COLLATE utf8mb4_unicode_ci,
  `how_to_use` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  KEY `product_translations_locale_index` (`locale`),
  CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.product_translations: ~5 rows (approximately)
DELETE FROM `product_translations`;
INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `use`, `how_to_use`, `name`, `created_at`, `updated_at`) VALUES
	(1, 1, 'en', 'Decomb is indicated for use in corticosteroid responsive dermatoses complicated or threatened by secondary monilial and/or bacterial infections, such as:\n\n                • Atopic dermatitis\n                • Seborrheic dermatitis\n                • Lichen simplex chronicus\n                • Psoriasis (particularly of the face and body folds)\n                • Allergic contact dermatitis\n\n                Decomb cream permits use in moist intertrigenous areas.\n                ', 'The cream should be applied 2-3 times daily, with or without occlusive dressing.', 'Abecedin', NULL, NULL),
	(2, 2, 'en', '\n            Decomb is indicated for use in corticosteroid responsive dermatoses complicated or threatened by secondary monilial and/or bacterial infections, such as:<br><br>\n            <br>\n            • Atopic dermatitis<br>\n            <br>\n            • Seborrheic dermatitis<br>\n            <br>\n            • Lichen simplex chronicus<br>\n            <br>\n            • Psoriasis (particularly of the face and body folds)<br>\n            <br>\n            • Allergic contact dermatitis<br><br>\n            <br>\n\n            Decomb cream permits use in moist intertrigenous areas', 'The cream should be applied 2-3 times daily, with or without occlusive dressing.', 'Fergole', NULL, NULL),
	(3, 3, 'en', '\n            Decomb is indicated for use in corticosteroid responsive dermatoses complicated or threatened by secondary monilial and/or bacterial infections, such as:<br><br>\n            <br>\n            • Atopic dermatitis<br>\n            <br>\n            • Seborrheic dermatitis<br>\n            <br>\n            • Lichen simplex chronicus<br>\n            <br>\n            • Psoriasis (particularly of the face and body folds)<br>\n            <br>\n            • Allergic contact dermatitis<br><br>\n            <br>\n\n            Decomb cream permits use in moist intertrigenous areas', 'The cream should be applied 2-3 times daily, with or without occlusive dressing.', 'Decomb Cream', NULL, NULL),
	(4, 4, 'en', '\n            Decomb is indicated for use in corticosteroid responsive dermatoses complicated or threatened by secondary monilial and/or bacterial infections, such as:<br><br>\n            <br>\n            • Atopic dermatitis<br>\n            <br>\n            • Seborrheic dermatitis<br>\n            <br>\n            • Lichen simplex chronicus<br>\n            <br>\n            • Psoriasis (particularly of the face and body folds)<br>\n            <br>\n            • Allergic contact dermatitis<br><br>\n            <br>\n\n            Decomb cream permits use in moist intertrigenous areas', 'The cream should be applied 2-3 times daily, with or without occlusive dressing.', 'Dilax Tab', NULL, NULL),
	(5, 5, 'en', '\n            Decomb is indicated for use in corticosteroid responsive dermatoses complicated or threatened by secondary monilial and/or bacterial infections, such as:<br><br>\n            <br>\n            • Atopic dermatitis<br>\n            <br>\n            • Seborrheic dermatitis<br>\n            <br>\n            • Lichen simplex chronicus<br>\n            <br>\n            • Psoriasis (particularly of the face and body folds)<br>\n            <br>\n            • Allergic contact dermatitis<br><br>\n            <br>\n\n            Decomb cream permits use in moist intertrigenous areas', 'The cream should be applied 2-3 times daily, with or without occlusive dressing.', 'Dilax Tab', NULL, NULL);

-- Dumping structure for table bpc.product_types
CREATE TABLE IF NOT EXISTS `product_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.product_types: ~3 rows (approximately)
DELETE FROM `product_types`;
INSERT INTO `product_types` (`id`, `icone`, `title`, `order_by`, `created_at`, `updated_at`) VALUES
	(1, 'storage/img/product_type/Asset-1-1.svg', 'therapeutic', 2, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(2, 'storage/img/product_type/Asset-2-1.svg', 'otc', 1, '2023-11-20 10:15:58', '2023-11-20 10:15:58'),
	(3, 'storage/img/product_type/Asset-3.svg', 'brand', 3, '2023-11-20 10:15:58', '2023-11-20 10:15:58');

-- Dumping structure for table bpc.product_type_translations
CREATE TABLE IF NOT EXISTS `product_type_translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `product_type_id` bigint unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_type_translations_product_type_id_locale_unique` (`product_type_id`,`locale`),
  KEY `product_type_translations_locale_index` (`locale`),
  CONSTRAINT `product_type_translations_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.product_type_translations: ~4 rows (approximately)
DELETE FROM `product_type_translations`;
INSERT INTO `product_type_translations` (`id`, `product_type_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 1, 'en', 'Products By Therapeutic', NULL, NULL, NULL),
	(2, 2, 'en', 'OTC Products', NULL, NULL, NULL),
	(3, 3, 'en', 'Products By Brand', NULL, NULL, NULL),
	(4, 1, 'ar', 'المنتجات العلاجية', NULL, NULL, NULL);

-- Dumping structure for table bpc.project_models
CREATE TABLE IF NOT EXISTS `project_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint NOT NULL,
  `route_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_menu` tinyint NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_by` int NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multi_language` tinyint NOT NULL DEFAULT '0' COMMENT '0 dont have seconde lang and 1 it hava',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.project_models: ~8 rows (approximately)
DELETE FROM `project_models`;
INSERT INTO `project_models` (`id`, `parent_id`, `route_key`, `title_ar`, `title_en`, `is_menu`, `icon`, `order_by`, `model`, `model_name`, `multi_language`, `created_at`, `updated_at`) VALUES
	(1, 3, 'users', 'المستخدمين', 'Users', 1, 'fas fa-users', 1, NULL, NULL, 0, NULL, NULL),
	(2, 3, 'settings', 'الإعدادات', 'settings', 1, 'fas fa-cogs', 3, NULL, NULL, 0, NULL, NULL),
	(3, 0, NULL, 'النظام', 'System', 1, 'fas fa-users-cog', 1, NULL, NULL, 0, NULL, NULL),
	(4, 0, NULL, 'الصفحات', 'Pages', 1, 'fas fa-file-alt', 2, NULL, NULL, 0, NULL, NULL),
	(5, 4, 'pageHome', 'أقسام الرئيسية', 'Home Sections', 1, 'fas fa-file-alt', 1, 'Page', '\\App\\Models\\Page', 1, NULL, NULL),
	(6, 4, 'pageAbout', 'أقسام من نحن', 'About us Sections', 1, 'fas fa-file-alt', 2, 'Page', '\\App\\Models\\Page', 1, NULL, NULL),
	(7, 4, 'pageOther', 'صفحات أخرى', 'Other Pages', 0, 'fas fa-file-alt', 3, 'Page', '\\App\\Models\\Page', 0, NULL, NULL),
	(8, 1, 'sliders', 'السلايدر', 'Slider', 0, 'fas fa-file-alt', 3, 'Slider', '\\App\\Models\\Slider', 1, NULL, NULL);

-- Dumping structure for table bpc.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.roles: ~0 rows (approximately)
DELETE FROM `roles`;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'Admin', '2023-11-20 10:15:57', '2023-11-20 10:15:57');

-- Dumping structure for table bpc.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 input, 2 image , 3 textarea, 4 manual',
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 basic, 2 contact info, 3 social media, 4 other, 5 services',
  `order_by` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.settings: ~2 rows (approximately)
DELETE FROM `settings`;
INSERT INTO `settings` (`id`, `setting_key`, `setting_value`, `title_ar`, `title_en`, `type_id`, `category`, `order_by`, `created_at`, `updated_at`) VALUES
	(1, 'website_name_ar', 'بيبسي', 'اسم الموقع', 'Website name', '1', '1', 1, NULL, NULL),
	(2, 'website_name_en', 'bpc', 'اسم الموقع', 'Website name', '1', '1', 1, NULL, NULL);

-- Dumping structure for table bpc.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` int DEFAULT NULL,
  `file_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_one_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_two_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.sliders: ~2 rows (approximately)
DELETE FROM `sliders`;
INSERT INTO `sliders` (`id`, `image`, `order_by`, `file_one`, `file_two`, `file_one_name`, `file_two_name`, `info`, `created_at`, `updated_at`) VALUES
	(1, 'uploads/Slider/492461700489865.jpg', 1, 'uploads/Slider/433321700483217.pdf', 'uploads/Slider/640181700490304.pdf', 'Solution TD2 Logique Mathématique-1.pdf', 'خطة_المتابعة_المستوى الثاني.pdf', NULL, '2023-11-20 10:15:57', '2023-11-20 13:25:04'),
	(2, 'uploads/Slider/586231700492342.jpg', 1, 'path/file', 'path/file', 'file_one_name', 'file_two_name', NULL, '2023-11-20 10:15:57', '2023-11-20 13:59:02');

-- Dumping structure for table bpc.slider_translations
CREATE TABLE IF NOT EXISTS `slider_translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `slider_id` int unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slider_translations_slider_id_locale_unique` (`slider_id`,`locale`),
  KEY `slider_translations_locale_index` (`locale`),
  CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.slider_translations: ~4 rows (approximately)
DELETE FROM `slider_translations`;
INSERT INTO `slider_translations` (`id`, `slider_id`, `locale`, `title`, `description`) VALUES
	(1, 1, 'en', '<p>BPC<br>For A Better Life</p>', '<p>Birzeit Pharmaceutical Company is a Palestinian leading company thriving to provide all pharmaceutical products for a better life locally, and regionally.</p>'),
	(2, 2, 'en', 'BPC<br>For A Better Life', 'Birzeit Pharmaceutical Company is a Palestinian leading company thriving to provide all pharmaceutical products for a better life locally, and regionally.2'),
	(3, 1, 'ar', '<p>BPC<br><br></p>', '<p>Birzeit Pharmaceutical Company is a Palestinian leading company thriving to provide all pharmaceutical products for a better life locally, and regionally.</p>'),
	(4, 2, 'ar', '<p>BPC<br>For A Better Li</p>', '<p>Birzeit Pharmaceutical Company is a Palestinian leading company thriving to provide all pharmaceutical products for a better life locally, and regionally.2</p>');

-- Dumping structure for table bpc.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bpc.users: ~0 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 'admin', 'admin@admin.com', NULL, 'uploads/User/241171699870858.jpg', '$2y$12$K5LYnBnDjU4y8I5LVJUZpOffC2aNgLCbTq23tFjuHSS5c3t1c8K.q', NULL, '2023-11-20 10:15:58', '2023-11-20 10:15:58');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
