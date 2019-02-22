-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `annual_incomes`;
CREATE TABLE `annual_incomes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `annual_incomes` (`id`, `name`, `value`) VALUES
(1,	'Under 1 Lakh',	1),
(2,	'1 Lakh to 2.5 lakhs',	2),
(3,	'2.5 lakhs to 5 lakhs',	3),
(4,	'5 lakhs to 10 lakhs',	4),
(5,	'above 10 lakhs',	5);

DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_type` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `display` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `areas` (`id`, `area_type`, `value`, `display`) VALUES
(1,	'Rural',	'1',	1),
(2,	'Urban',	'2',	1),
(3,	'Rural and Urban',	'3',	0);

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `boards_of_directors`;
CREATE TABLE `boards_of_directors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `board_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `castes`;
CREATE TABLE `castes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `castes` (`id`, `name`, `value`) VALUES
(1,	'General',	1),
(2,	'OBC',	2),
(3,	'SC',	3),
(4,	'ST',	4),
(9,	'PHD',	5),
(10,	'Ex-Serviceman',	6),
(11,	'Minority',	7),
(12,	'Hill Border Area',	8);

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `categories` (`id`, `category`, `value`) VALUES
(1,	'नवीनतम योजना',	1),
(2,	'ऋण और प्रक्रिया संबंधित',	2),
(3,	'निविदा',	3),
(4,	'व्यवसाय और प्रशिक्षण\r\n',	4),
(5,	' अन्य',	5);

DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) NOT NULL,
  `name_hi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `districts` (`id`, `name_en`, `name_hi`) VALUES
(1,	'Agra',	'à¤†à¤—à¤°à¤¾'),
(2,	'Aligarh',	'à¤…à¤²à¥€à¤—à¤¢'),
(3,	'Allahabad',	'à¤–à¥ˆà¤°'),
(4,	'Ambedkar Nagar',	'à¤ªà¥à¤°à¤¯à¤¾à¤—à¤°à¤¾à¤œ'),
(5,	'Amethi (Chatrapati Sahuji Mahraj Nagar)',	'à¤…à¤®à¥à¤¬à¥‡à¤¡à¤•à¤°à¤¨à¤—à¤°'),
(6,	'Amroha (J.P. Nagar)',	'à¤”à¤°à¥ˆà¤¯à¤¾'),
(7,	'Auraiya',	'à¤†à¤œà¤®à¤—à¤¢'),
(8,	'Azamgarh',	'à¤¬à¤¾à¤—à¤ªà¤¤'),
(9,	'Baghpat',	'à¤¬à¤¹à¤°à¤¾à¤‡à¤š'),
(10,	'Bahraich',	'à¤¬à¤²à¤¿à¤¯à¤¾'),
(11,	'Ballia',	'à¤¬à¤²à¤°à¤¾à¤®à¤ªà¥à¤°'),
(12,	'Balrampur',	'à¤¬à¤¾à¤à¤¦à¤¾'),
(13,	'Banda',	'à¤¬à¤¾à¤°à¤¾à¤¬à¤‚à¤•à¥€'),
(14,	'Barabanki',	'à¤¬à¤°à¥‡à¤²à¥€'),
(15,	'Bareilly',	'à¤¬à¤¸à¥à¤¤à¥€'),
(16,	'Basti',	'à¤¬à¤¿à¤œà¤¨à¥Œà¤°'),
(17,	'Bhadohi',	'à¤¬à¤¦à¤¾à¤¯à¥‚à¤'),
(18,	'Bijnor',	'à¤¬à¥à¤²à¤‚à¤¦à¤¶à¤¹à¤°'),
(19,	'Budaun',	'à¤šà¤‚à¤¦à¥Œà¤²à¥€'),
(20,	'Bulandshahr',	'à¤šà¤¿à¤¤à¥à¤°à¤•à¥‚à¤Ÿ'),
(21,	'Chandauli',	'à¤¦à¥‡à¤µà¤°à¤¿à¤¯à¤¾'),
(22,	'Chitrakoot',	'à¤à¤Ÿà¤¾'),
(23,	'Deoria',	'à¤‡à¤Ÿà¤¾à¤µà¤¾'),
(24,	'Etah',	'à¤…à¤¯à¥‹à¤§à¥à¤¯à¤¾'),
(25,	'Etawah',	'à¤«à¤¼à¤°à¥à¤°à¥‚à¤–à¤¼à¤¾à¤¬à¤¾à¤¦'),
(26,	'Faizabad',	'à¤«à¤¤à¥‡à¤¹à¤ªà¥à¤°'),
(27,	'Farrukhabad',	'à¤«à¤¼à¤¿à¤°à¥‹à¤œà¤¾à¤¬à¤¾à¤¦'),
(28,	'Fatehpur',	'à¤—à¥Œà¤¤à¤®à¤¬à¥à¤¦à¥à¤§ à¤¨à¤—à¤°'),
(29,	'Firozabad',	'à¤—à¤¾à¤œà¤¿à¤¯à¤¾à¤¬à¤¾à¤¦'),
(30,	'Gautam Buddha Nagar',	'à¤—à¤¼à¤¾à¤œà¤¼à¥€à¤ªà¥à¤°'),
(31,	'Ghaziabad',	'à¤—à¥‹à¤‚à¤¡à¤¾'),
(32,	'Ghazipur',	'à¤—à¥‹à¤°à¤–à¤ªà¥à¤°'),
(33,	'Gonda',	'à¤¹à¤®à¥€à¤°à¤ªà¥à¤°'),
(34,	'Gorakhpur',	'à¤¹à¤°à¤¦à¥‹à¤ˆ'),
(35,	'Hamirpur',	'à¤¹à¤¾à¤¥à¤°à¤¸'),
(36,	'Hapur (Panchsheel Nagar)',	'à¤œà¤²à¥Œà¤¨'),
(37,	'Hardoi',	'à¤œà¥Œà¤¨à¤ªà¥à¤°'),
(38,	'Hathras',	'à¤à¤¾à¤à¤¸à¥€'),
(39,	'Jalaun',	'à¤œà¥à¤¯à¥‹à¤¤à¤¿à¤¬à¤¾ à¤«à¥à¤²à¥‡ à¤¨à¤—à¤°'),
(40,	'Jaunpur',	'à¤•à¤¨à¥à¤¨à¥Œà¤œ'),
(41,	'Jhansi',	'à¤•à¤¾à¤¨à¤ªà¥à¤° à¤¦à¥‡à¤¹à¤¾à¤¤'),
(42,	'Kannauj',	'à¤•à¤¾à¤¨à¤ªà¥à¤° à¤¨à¤—à¤°'),
(43,	'Kanpur Dehat',	'à¤•à¥Œà¤¶à¤¾à¤®à¥à¤¬à¥€'),
(44,	'Kanpur Nagar',	'à¤•à¥à¤¶à¥€à¤¨à¤—à¤° (à¤ªà¤¡à¤¼à¤°à¥Œà¤¨à¤¾)'),
(45,	'Kanshiram Nagar (Kasganj)',	'à¤²à¤–à¥€à¤®à¤ªà¥à¤°-à¤–à¤¿à¤°à¥€'),
(46,	'Kaushambi',	'à¤²à¤²à¤¿à¤¤à¤ªà¥à¤°'),
(47,	'Kushinagar (Padrauna)',	'à¤²à¤–à¤¨à¤Š'),
(48,	'Lakhimpur - Kheri',	'à¤®à¤¹à¤¾à¤°à¤¾à¤œà¤—à¤‚à¤œ'),
(49,	'Lalitpur',	'à¤®à¤¹à¥‹à¤¬à¤¾'),
(50,	'Lucknow',	'à¤®à¥ˆà¤¨à¤ªà¥à¤°à¥€'),
(51,	'Maharajganj',	'à¤®à¤¥à¥à¤°à¤¾'),
(52,	'Mahoba',	'à¤®à¤Š'),
(53,	'Mainpuri',	'à¤®à¥‡à¤°à¤ '),
(54,	'Mathura',	'à¤®à¤¿à¤°à¥à¤œà¤¼à¤¾à¤ªà¥à¤°'),
(55,	'Mau',	'à¤®à¥à¤°à¤¾à¤¦à¤¾à¤¬à¤¾à¤¦'),
(56,	'Meerut',	'à¤®à¥à¤œà¤«à¥à¤«à¤°à¤¨à¤—à¤°'),
(57,	'Mirzapur',	'à¤ªà¥€à¤²à¥€à¤­à¥€à¤¤'),
(58,	'Moradabad',	'à¤ªà¥à¤°à¤¤à¤¾à¤ªà¤—à¤¢'),
(59,	'Muzaffarnagar',	'à¤°à¤¾à¤¯à¤¬à¤°à¥‡à¤²à¥€'),
(60,	'Pilibhit',	'à¤°à¤¾à¤®à¤ªà¥à¤°'),
(61,	'Pratapgarh',	'à¤¸à¤¹à¤¾à¤°à¤¨à¤ªà¥à¤°'),
(62,	'RaeBareli',	'à¤¸à¤‚à¤¤ à¤•à¤¬à¥€à¤°à¤¨à¤—à¤°'),
(63,	'Rampur',	'à¤¸à¤‚à¤¤ à¤°à¤µà¤¿à¤¦à¤¾à¤¸ à¤¨à¤—à¤°'),
(64,	'Saharanpur',	'à¤¶à¤¾à¤¹à¤œà¤¹à¤¾à¤à¤ªà¥à¤°'),
(65,	'Sambhal (Bhim Nagar)',	'à¤¶à¥à¤°à¤¾à¤µà¤¸à¥à¤¤à¥€'),
(66,	'Sant Kabir Nagar',	'à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤°à¥à¤¥à¤¨à¤—à¤°'),
(67,	'Shahjahanpur',	'à¤¸à¥€à¤¤à¤¾à¤ªà¥à¤°'),
(68,	'Shamali (Prabuddh Nagar)',	'à¤¸à¥‹à¤¨à¤­à¤¦à¥à¤°'),
(69,	'Shravasti',	'à¤¸à¥à¤²à¥à¤¤à¤¾à¤¨à¤ªà¥à¤°'),
(70,	'Siddharth Nagar',	'à¤‰à¤¨à¥à¤¨à¤¾à¤µ'),
(71,	'Sitapur',	'à¤µà¤¾à¤°à¤¾à¤£à¤¸à¥€'),
(72,	'Sonbhadra',	''),
(73,	'Sultanpur',	''),
(74,	'Unnao',	''),
(75,	'Varanasi',	'');

DROP TABLE IF EXISTS `educational_qualifications`;
CREATE TABLE `educational_qualifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `educational_qualifications` (`id`, `name`, `value`) VALUES
(1,	'Under 8th',	1),
(2,	'8th Pass',	2),
(3,	'10th Pass',	3),
(4,	'12th Pass',	4),
(5,	'Graduate',	5),
(6,	'Post Graduate',	6),
(7,	'PHD ',	7);

DROP TABLE IF EXISTS `eligibility_criterias`;
CREATE TABLE `eligibility_criterias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scheme_id` int(11) NOT NULL,
  `criteria_name` varchar(255) NOT NULL,
  `criteria_value` int(50) NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_hi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `show_value_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `show_value_hi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `eligibility_criterias` (`id`, `scheme_id`, `criteria_name`, `criteria_value`, `name_en`, `name_hi`, `show_value_en`, `show_value_hi`) VALUES
(1,	3,	'age',	50,	'Age',	'आयु',	'18-50',	'१८-५०'),
(2,	3,	'area',	2,	'Area',	'क्षेत्र',	'Urban (Village)',	'शहरी'),
(3,	3,	'edu_qualification',	4,	'Educational Qualification',	'शैक्षिक योग्यता',	'10+2 Pass',	'१०+२ उत्तीर्ण '),
(4,	3,	'pvtTraining_type',	1,	'Private Training Type',	'निजी प्रशिक्षण प्रकार',	'Industrial Training Institute/Polytechnic(Preferred)',	'औद्योगिक प्रशिक्षण संस्थान/पॉलिटेक्निक(पसंदीदा)'),
(5,	3,	'govTraining_type',	3,	'Government Training Type',	'सरकारी प्रशिक्षण प्रकार',	'Any other Govt. scheme, TRYSEM',	'कोई भी सरकारी योजना/ TRYSEM '),
(6,	3,	'employment_registration',	1,	'Employment Exchange Registration Required',	'रोजगार विनिमय पंजीकरण आवश्यक',	'Yes',	'हां'),
(7,	3,	'industry',	1,	'Industry',	'उद्योग',	'Any village industry',	'कोई भी गाँव उद्योग'),
(8,	3,	'loan_requirement',	1,	'Loan Limit',	'ऋण सीमा',	'10 Lakhs',	'१० लाख'),
(9,	5,	'age',	50,	'Age',	'आयु',	'18-50',	'१८-५०'),
(10,	5,	'area',	3,	'Area',	'क्षेत्र',	'Rural and Urban',	'ग्रामीण और शहरी'),
(11,	5,	'edu_qualification',	3,	'Educational Qualification',	'शैक्षिक योग्यता',	'10th for loan more than 15 lac, NA for below 15 lac',	'10 लाख से अधिक ऋण के लिए 10th \r\nउत्तीर्ण, 15 लाख से नीचे के लिए NA'),
(12,	5,	'govTraining_type',	0,	'Government Training Type',	'सरकारी प्रशिक्षण प्रकार',	'No',	'नहीं'),
(13,	5,	'pvtTraining_type',	0,	'Private Training Type',	'निजी प्रशिक्षण प्रकार',	'No',	'नहीं'),
(14,	5,	'industry',	0,	'Industry',	'उद्योग',	'Any',	'कोई भी'),
(15,	5,	'loan_requirement',	4,	'Loan Limit',	'ऋण सीमा',	'25 Lakhs',	'२५ लाख'),
(16,	5,	'employment_registration',	0,	'Employment Exchange Registration Required',	'रोजगार विनिमय पंजीकरण आवश्यक',	'No',	'नहीं');

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `faq_question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faq_answer` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `faqs` (`id`, `category_id`, `faq_question`, `faq_answer`, `created_at`, `updated_at`) VALUES
(9,	1,	'प्रश्न 1 : ऋण सहायता सुविधा किसको?',	'उ०प्र० खादी तथा ग्रामोद्योग द्वारा दी जाने वाली सहायता सुविधा हेतु निम्न पात्र है:-\r\n\r\nपंजीकृत ग्रामोद्योगी सहकारी समितियाँ।\r\nपंजीकृत स्वयं सेवी संस्थाएं।\r\nव्यक्तिगत उद्यमियों के साथ-साथ शिक्षित बेरोजगार नवयुवकों, महिलाओं, अनुसूचित जाति व जनजाति के सदस्य एवं परम्परागत कारीगर।',	'2019-02-12 21:14:23',	'2019-02-12 21:51:58'),
(16,	1,	'प्रश्न 2 : सहायता किन ग्रामीण उद्योगों हेतु दी जाती है?',	'उत्तर : खादी ग्रामोद्योग को 7 समूहों में बांटा गया है, जिसके अन्तर्गत निम्नलिखित उद्योग आते है:-\r\n\r\n1. खनिज आधारित उघोग:-\r\n\r\nकुटीर कुम्हारी उद्योग।\r\nचूना पत्थर,चूना सीपी और अन्य चूना उत्पाद उद्योग।\r\nमन्दिरों एवं भवनों के लिए पत्थर कटाई, पिसाई,नक्काशी तथा खुदाई।\r\nपत्थर से बनी हुई उपयोगी वस्तुएं।\r\nप्लेट और स्लेट पेंसिल निर्माण।\r\n\r\n2. वनाधारित उद्योग:-\r\n\r\nहाथ कागज उद्योग।\r\nकत्था निर्माण।\r\nगोंद और रेजिन निर्माण।\r\nलाख निर्माण।\r\nकुटीर दियासलाई उद्योग, पटाखे और अगरबत्ती निर्माण।\r\n\r\n3. कृषि आधारित और खाद्य उद्योग:-\r\n\r\nअनाज दाल, मसाला, चटपटे मसाले आदि का प्रशोधन, पैकिंग और विपणन।\r\nताड़ गुड़ निर्माण और अन्य ताड़ उत्पाद उद्योग।\r\nगन्ना गुड़ और खाण्डसारी निर्माण।\r\nमधुमक्खी पालन।\r\nअचार सहित फल और सब्जी का प्रशोधन, परिरक्षण एवं डिब्बाबन्दी।\r\n\r\n4. बहुलक और रसायन आधारित उद्योग:-\r\n\r\nशवच्छेदन, चर्मशोधन तथा खाल व त्वचा से सम्बन्धित अन्य सहायक उद्योग एवं कुटीर चर्म उद्योग।\r\nकुटीर साबुन उद्योग।\r\nरबड़ वस्तुओं का निर्माण(डिप्ड लेटेक्स उत्पाद)।\r\nरैक्सीन/पी० वी० सी० के बने उत्पाद।\r\nहाथी दाँत समेत सींग और हड्डी उत्पाद।\r\n\r\n5. इंजीनियरिंग और गैर परम्परागत ऊर्जा:-\r\n\r\nबढ़ईगीरी।\r\nलोहारी।\r\nअल्युमिनियम के घरेलू बर्तनों का उत्पादन।\r\nगोबर और अन्य उपशिष्ट उत्पाद जैसे मृत पशु के मांस और मल आदि से खाद और मीथेन(गोबर) गैस का उत्पादन और उपयोग।\r\nकागज, क्लिप, सेफ्टी पिन, स्टोव पिन आदि का निर्माण।\r\n\r\n6. इंजीनियरिंग और गैर परम्परागत ऊर्जा:-\r\n\r\nपॉली वस्त्र यानी ऐसे वस्त्र जो भारत में मानव निर्मित रेशे की रूई-रेशम या ऊन के साथ या इसमें से किसी दो या सभी को मिलाकर हाथ से काता गया तथा हथकरघे पर बुना गया हो या भारत में बना ऐसा वस्त्र जो हाथ कते मानव निर्मित रेशा के धागों का सूती, रेशमी या ऊनी धागे या इसमें से किसी दो धागे या सभी धागों से मिलाकर हथकरघे पर बुना गया हो।\r\nलाक वस्त्र का निर्माण।\r\nहोजरी।\r\nसिलाई और सिली सिलाई पोशाक तैयार करना।\r\nहाथ से मछली मारने वाले नायलॉन/सूती जाल तैयार करना।',	'2019-02-15 17:33:52',	'2019-02-15 17:33:52');

DROP TABLE IF EXISTS `gov_trainings`;
CREATE TABLE `gov_trainings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  `display` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `gov_trainings` (`id`, `name`, `value`, `display`) VALUES
(1,	'Any other Govt. scheme',	1,	1),
(2,	'TRYSEM ',	2,	1),
(3,	'Any Gov Scheme and TRYSEM',	3,	0),
(4,	'N/A',	0,	0);

DROP TABLE IF EXISTS `industries`;
CREATE TABLE `industries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `industries` (`id`, `name`, `value`) VALUES
(1,	'village',	1),
(2,	'any other',	2);

DROP TABLE IF EXISTS `kryptonit3_counter_page`;
CREATE TABLE `kryptonit3_counter_page` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kryptonit3_counter_page_page_unique` (`page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `kryptonit3_counter_page` (`id`, `page`) VALUES
(1,	'c332fd30-f7cd-58e9-be54-2940bcfc42fe');

DROP TABLE IF EXISTS `kryptonit3_counter_page_visitor`;
CREATE TABLE `kryptonit3_counter_page_visitor` (
  `page_id` bigint(20) unsigned NOT NULL,
  `visitor_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `kryptonit3_counter_page_visitor_page_id_index` (`page_id`),
  KEY `kryptonit3_counter_page_visitor_visitor_id_index` (`visitor_id`),
  CONSTRAINT `kryptonit3_counter_page_visitor_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `kryptonit3_counter_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `kryptonit3_counter_page_visitor_visitor_id_foreign` FOREIGN KEY (`visitor_id`) REFERENCES `kryptonit3_counter_visitor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `kryptonit3_counter_page_visitor` (`page_id`, `visitor_id`, `created_at`) VALUES
(1,	1,	'2019-02-21 16:05:51');

DROP TABLE IF EXISTS `kryptonit3_counter_visitor`;
CREATE TABLE `kryptonit3_counter_visitor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `visitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kryptonit3_counter_visitor_visitor_unique` (`visitor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `kryptonit3_counter_visitor` (`id`, `visitor`) VALUES
(1,	'536d12f5ad73932a94dabac72c7b1146522937618569cd6be81f958c4070d307');

DROP TABLE IF EXISTS `legal_statuses`;
CREATE TABLE `legal_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  `display` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `legal_statuses` (`id`, `name`, `value`, `display`) VALUES
(1,	'Individual',	1,	1),
(2,	'Co-Operative Society',	2,	1),
(3,	'Regd. Institution',	3,	1),
(4,	'SHG\'s',	4,	1),
(5,	'Trust',	5,	1);

DROP TABLE IF EXISTS `loan_limits`;
CREATE TABLE `loan_limits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `loan_limits` (`id`, `name`, `value`) VALUES
(1,	'Under 10 Lakhs',	1),
(2,	'10 lakhs - 15 lakhs',	2),
(3,	'15 lakhs -20 lakhs',	3),
(4,	'20 lakhs to 25 lakhs',	4);

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8,	'2014_10_12_000000_create_users_table',	1),
(9,	'2014_10_12_100000_create_password_resets_table',	1),
(10,	'2015_06_21_181359_create_kryptonit3_counter_page_table',	1),
(11,	'2015_06_21_193003_create_kryptonit3_counter_visitor_table',	1),
(12,	'2015_06_21_193059_create_kryptonit3_counter_page_visitor_table',	1),
(13,	'2018_05_16_070045_create__board_table',	1),
(14,	'2018_05_16_075558_create__sponsor_table',	1);

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `contents` longtext CHARACTER SET utf8,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0=Inactive,1=Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `pages` (`id`, `title`, `slug`, `keyword`, `description`, `contents`, `status`, `created_at`, `updated_at`) VALUES
(1,	'About Us',	'about-us',	'About Us',	'About Us',	'<!-- Navbar End-->\r\n<div class=\"container-fluid\">\r\n<div class=\"innerpage-header text-center\">\r\n<div class=\"container\">\r\n<h1>About Us</h1>\r\n\r\n<h3><a href=\"#\">Home</a> &gt; About Us</h3>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"container margin-top-45 margin-bottom-45\">\r\n<div class=\"col-md-6\">\r\n<h1 class=\"text-30\">Pesticide Applicators Professional Association (PAPA)</h1>\r\n\r\n<p class=\"margin-top-25\">PAPA is a non-profit, public benefit corporation which is dedicated to providing Continuing Education for the implementation of safe and effective pest control techniques throughout California.</p>\r\n\r\n<p>Decisions within PAPA are made by a Board of Directors, and Directors stand for election every three years. The Board is responsible to all members of PAPA. The day-to-day activities of PAPA are administered by an Executive Director selected by the Board of Directors.</p>\r\n</div>\r\n\r\n<div class=\"col-md-6\"><img class=\"img-responsive\" src=\"/frontend/images/pesticide-farming.jpg\" /></div>\r\n</div>\r\n\r\n<div class=\"container-fluid padding-top-30 padding-bottom-30\" style=\"background-color: #f4f4f4;\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<h1 class=\"text-30\">PAPA&rsquo;s Primary Functions</h1>\r\n\r\n<ul class=\"list-leaf-style\">\r\n	<li>To sponsor statewide educational programs in cooperation with the University of California, municipal agencies, and industry training in safety, rules, and regulations, current technology, and field-tested research for pest management professionals.</li>\r\n	<li>To provide the means for the recording and yearly accounting of Continuing Education hours.</li>\r\n	<li>To publish a quarterly newsletter to inform members of association activities and pest management issues affecting the industry.</li>\r\n	<li>To represent the concerns of members to industry and federal, state, and local agencies.</li>\r\n	<li>To maintain media contacts throughout the state to keep the public aware of the concern of all pest management professionals for environmental safety.</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<h1 class=\"text-30\">Member Benefits</h1>\r\n\r\n<ul class=\"list-leaf-style\">\r\n	<li>Tracking of your continuing education (CE) hours to make it simple for you to submit your renewal with DPR.</li>\r\n	<li>An official report of your CE hours automatically mailed to you in the fall of your renewal year.</li>\r\n	<li>Quarterly editions of our newsletter, Applicators News, packed with the latest industry issues, information, seminars, reports, rules, and regulations.</li>\r\n	<li>Discounts on our statewide seminars with training in every area of interest and importance to the professional pesticide applicator.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>',	1,	'2017-11-23 07:23:23',	'2018-08-09 15:46:48'),
(9,	'Home Page',	'homepage',	'home page',	'home page',	'The Pesticide Applicators Professional Association is a California non-profit, public benefit corporation which is dedicated to providing Continuing Education and to the implementation of safe and effective pest control techniques.',	1,	'2018-07-31 13:28:14',	'2018-07-31 13:28:14');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `private_trainings`;
CREATE TABLE `private_trainings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  `display` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `private_trainings` (`id`, `name`, `value`, `display`) VALUES
(1,	'Industrial Training Institute/Ploytechnic(Preferred)',	1,	1),
(2,	'Others',	2,	1),
(3,	'N/A',	0,	0);

DROP TABLE IF EXISTS `queries`;
CREATE TABLE `queries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `query_feedback_type_id` int(11) NOT NULL,
  `remark` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `queries` (`id`, `name`, `email_id`, `mobile_no`, `query_feedback_type_id`, `remark`, `created_at`, `updated_at`) VALUES
(1,	'Aman Verma',	'aman.Verma123@gmail.com',	'9807123321',	1,	'In India, Khadi refers to handwoven cloth. Weavers prefer the yarn produced by Mills because it is more robust and of consistent quality. Swadeshi movement of boycotting English products during the first two decades of the twentieth Century was popularised by Mahatma Gandhi and Indian mill owners backed Nationalist politicians who called for a boycott of foreign cloth. Gandhi argued that the mill owners would deny handloom weavers an opportunity to buy yarn because they would prefer to create a monopoly for their own cloth.[5] However, handspun yarn was of poor quality and too costly. Thus Mahatma Gandhi started spinning himself and encouraging others to do so. He made it obligatory for all members of the Indian National Congress to spin cotton themselves and to pay their dues in yarn. He further made the chakri (spinning wheel) the symbol of the Nationalist movement. Initially the Indian flag was supposed to have a chakri, not the Ashoka Chakra at its centre. Mahatma Gandhi collected large sums of money to create a grass-roots organisation to encourage handloom weaving. This was called \'khaddar\' or \'Khadi\' movement\r\n\r\nIn India, Khadi refers to handwoven cloth. Weavers prefer the yarn produced by Mills because it is more robust and of consistent quality. Swadeshi movement of boycotting English products during the first two decades of the twentieth Century was popularised by Mahatma Gandhi and Indian mill owners backed Nationalist politicians who called for a boycott of foreign cloth. Gandhi argued that the mill owners would deny handloom weavers an opportunity to buy yarn because they would prefer to create a monopoly for their own cloth.[5] However, handspun yarn was of poor quality and too costly. Thus Mahatma Gandhi started spinning himself and encouraging others to do so. He made it obligatory for all members of the Indian National Congress to spin cotton themselves and to pay their dues in yarn. He further made the chakri (spinning wheel) the symbol of the Nationalist movement. Initially the Indian flag was supposed to have a chakri, not the Ashoka Chakra at its centre. Mahatma Gandhi collected large sums of money to create a grass-roots organisation to encourage handloom weaving. This was called \'khaddar\' or \'Khadi\' movement\r\n\r\nIn India, Khadi refers to handwoven cloth. Weavers prefer the yarn produced by Mills because it is more robust and of consistent quality. Swadeshi movement of boycotting English products during the first two decades of the twentieth Century was popularised by Mahatma Gandhi and Indian mill owners backed Nationalist politicians who called for a boycott of foreign cloth. Gandhi argued that the mill owners would deny handloom weavers an opportunity to buy yarn because they would prefer to create a monopoly for their own cloth.[5] However, handspun yarn was of poor quality and too costly. Thus Mahatma Gandhi started spinning himself and encouraging others to do so. He made it obligatory for all members of the Indian National Congress to spin cotton themselves and to pay their dues in yarn. He further made the chakri (spinning wheel) the symbol of the Nationalist movement. Initially the Indian flag was supposed to have a chakri, not the Ashoka Chakra at its centre. Mahatma Gandhi collected large sums of money to create a grass-roots organisation to encourage handloom weaving. This was called \'khaddar\' or \'Khadi\' movement',	'2019-02-16 15:48:21',	'2019-02-16 15:48:21'),
(2,	'Deepak Saxena',	'deepakatk23@gmail.com',	'8970123456',	1,	'remark2',	'2019-02-16 15:48:21',	'2019-02-16 15:48:21'),
(9,	'alok verma',	'alok456@gmail.com',	'9088123321',	2,	'here goes description',	'2019-02-16 15:48:21',	'2019-02-16 15:48:21'),
(10,	'Hardik J3ain',	'jain.hardik23@gmail.com',	'8908890098',	2,	'remark3',	'2019-02-16 15:48:21',	'2019-02-16 15:48:21'),
(14,	'abhishek',	'abhi@gmail.com',	'9807123456',	2,	'sdfffsfsfsfsfff',	'2019-02-17 15:07:31',	'2019-02-17 15:07:31'),
(15,	'abhishek',	'abhi@gmail.com',	'9807123456',	2,	'sdfffsfsfsfsfff',	'2019-02-17 15:07:58',	'2019-02-17 15:07:58'),
(17,	'abhishek',	'abhi@gmail.com',	'9807123456',	2,	'sdfffsfsfsfsfff',	'2019-02-17 15:08:27',	'2019-02-17 15:08:27'),
(22,	'kamal',	'kamal@gmail.com',	'8970123421',	2,	'regrtrtrtrtrtrt',	'2019-02-18 07:21:07',	'2019-02-18 07:21:07'),
(25,	'Vishal Srivastava',	'kamal@gmail.com',	'8970123421',	1,	'hjhhjhjhj',	'2019-02-21 06:57:24',	'2019-02-21 06:57:24'),
(27,	'Vishal Srivastava',	'kamal@gmail.com',	'8970123421',	1,	'hjhhjhjhj',	'2019-02-21 07:04:14',	'2019-02-21 07:04:14'),
(28,	'Vishal Srivastava',	'kamal@gmail.com',	'8970123421',	1,	'hjhhjhjhj',	'2019-02-21 07:04:31',	'2019-02-21 07:04:31'),
(29,	'Vishal Srivastava',	'vishal.249173@gmail.com',	'8970123421',	1,	'Hello',	'2019-02-21 08:13:15',	'2019-02-21 08:13:15');

DROP TABLE IF EXISTS `query_feedback_types`;
CREATE TABLE `query_feedback_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `query_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `query_feedback_types` (`id`, `query_type`) VALUES
(1,	'Khadi Development Scheme'),
(2,	'Others');

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'Full access to create, edit, and update companies, and orders.',	'2017-11-21 02:56:02',	'2017-11-21 02:56:02');

DROP TABLE IF EXISTS `schemes`;
CREATE TABLE `schemes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scheme_name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shceme_description_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) DEFAULT 'default.jpg',
  `value` int(11) NOT NULL,
  `array_key` varchar(255) NOT NULL,
  `array_score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `schemes` (`id`, `scheme_name_en`, `shceme_description_en`, `image`, `value`, `array_key`, `array_score`) VALUES
(1,	'खादी एवं ग्रामोद्योगी योजनाएं',	'<p><strong>\"खादी\"</strong>  का अर्थ है कपास, रेशम या ऊन के हाथ कते सूत अथवा इनमें से दो या सभी प्रकार के सूतों के मिश्रण से भारत में हथकरघे पर बुना गया कोई भी वस्त्र।</p>\r\n        \r\n        <p><strong>\"ग्रामोद्योग\"</strong> का अर्थ है, ऐसा कोई भी उद्योग जो ग्रामीण क्षेत्रों में स्थित हो तथा जो विद्युत के उपयोग या बिना उपयोग के कोई माल तैयार करता हो या कोई सेवा प्रदान करता हो तथा जिसमें स्थायी पूँजी निवेश (संयंत्र तथा मशीनरी एवं भूमि भवन में) प्रति कारीगर या कर्मी पचास हजार रूपये से अधिक न हो। इस हेतु परिभाषित \"ग्रामीण क्षेत्र में\" समस्त राजस्व ग्राम तथा 20 हजार तक की आवादी वाले कस्बे सम्मिलित है।</p>',	'default.jpg',	1,	'S1',	0),
(2,	'मॉडल परियोजनाएं',	'',	'default.jpg',	2,	'S2',	0),
(3,	'मुख्यमंत्री ग्रामोद्योग रोजगार योजना',	'<p>\r\n            उ०प्र० खादी तथा ग्रामोद्योग बोर्ड की व्यक्तिगत उद्यमियों को बैंकों से वित्त पोषण\r\n            उपलब्ध कराने की ʺमुख्य मंत्री ग्रामोद्योग रोजगार योजनाʺ</p>\r\n        <h4 class=\"text-blue\">\r\n            <strong>1. उद्देश्य</strong>\r\n        </h4>\r\n        <p>\r\n            ग्रामीण क्षेत्रों में बढ़ती बेरोजगारी का समाधान करने, ग्रामीण शिक्षितों का शहरों\r\n            की ओर पलायन को हतोत्साहित करने तथा अधिक से अधिक रोजगार का अवसर गॉव में ही उपलब्ध\r\n            कराने के ध्येय से प्रदेश के ग्रामीण क्षेत्रों के व्यक्तिगत उद्यमियों को रू० 10.00\r\n            लाख तक की वित्तीय सहायता बैंकों के माध्यम से प्रदान की जाती है। योजना के अन्तर्गत\r\n            सामान्य वर्ग के लाभार्थियों हेतु 4 प्रतिशत से अधिक, ब्याज की धनराशि ब्याज उपादान\r\n            के रूप में उपलब्ध करायी जाती है। <strong>आरक्षित वर्ग के लाभार्थियों (अनुसूचित जाति,\r\n                अनु जनजाति, पिछड़ा वर्ग, अल्पसंख्यक, विकलांग, महिलायें एवं भूतपूर्व सैनिक) को जिला\r\n                योजना के अन्तर्गत ब्याज की पूर्ण धनराशि ब्याज उपादान के रूप में उपलब्ध करायी जाती\r\n                है। </strong>व्यवसायिक बैंको तथा ग्रामीण बैंकों द्वारा उनके सेवा क्षेत्र के\r\n            अन्तर्गत सम्बन्धित गॉंव या ग्रामीण क्षेत्र स्थित हों, नियमानुसार ऋण उपलब्ध कराया\r\n            जाता है। जनपदों में जिलाधिकारी के सीधे नियंत्रण में खादी तथा ग्रामोद्योग विभाग द्वारा\r\n            क्रियान्वित की जायेगी।</p>\r\n        <h4 class=\"text-blue\">\r\n            <strong>2. योजना की अवधि</strong>\r\n        </h4>\r\n        <p>\r\n            यह योजना इस अधिसूचना के जारी होने की तिथि से 5 वर्षों तक लागू रहेगी।</p>\r\n        <h4 class=\"text-blue\">\r\n            <strong>3. कार्यक्षेत्र</strong>\r\n        </h4>\r\n        <p>\r\n            उ0प्र0 पंचायतराज अधिनियम के उपबन्धों के अधीन समय-समय पर शासन द्वारा ग्रामीण क्षेत्र\r\n            परिभाषित तथा अखिल भारतीय खादी ग्रामोद्योग आयोग/रिजर्व बैंक ऑफ इण्डिया द्वारा समय-समय\r\n            पर परिभाषित ग्रामीण क्षेत्र।</p>\r\n        <h4 class=\"text-blue\">\r\n            <strong>4. पात्र उद्यमी</strong>\r\n        </h4>\r\n        <p>\r\n            इस योजना के अन्तर्गत मुख्य रूप से निम्नलिखित वरीयता क्रम में उद्यमियों को लाभान्वित\r\n            किया जायेगा।</p>\r\n',	'default.jpg',	3,	'S3',	0),
(4,	'प्रधानमंत्री रोजगार सृजन कार्यक्रम',	' प्रधानमंत्री रोजगार सृजन कार्यक्रम योजना पूर्णतया भारत सरकार द्वारा प्रायोजित एक\r\n            महत्वपूर्ण स्वरोजगार की योजना है, जिसका संचालन प्रदेश में तीन एजेन्सियों क्रमशः\r\n            जिला उद्योग केन्द्र, खादी और ग्रामोद्योग आयोग, एवं उ0प्र0 खादी तथा ग्रामोद्योग बोर्ड\r\n            द्वारा किया जाता है। भारत सरकार द्वारा उक्त योजना के क्रियान्वयन हेतु राष्ट्रीय\r\n            स्तर पर खादी और ग्रामोद्योग आयोग, (के0वी0आई0सी0) को नोडल एजेन्सी के रूप में नामित\r\n            किया गया है। भारत सरकार द्वारा उक्त योजना के क्रियान्वयन में उपरोक्त तीनों एजेन्सियों\r\n            के मध्य में 40ः 30ः 30ः प्रतिशत का अनुपात निश्चित किया गया है। तद्नुसार ही तीनों\r\n            एजेन्सियों को बजट एवं लक्ष्य का आवंटन प्राप्त होता है योजना का विवरण निम्नवत है।\r\n',	'default.jpg',	4,	'S4',	0),
(5,	'पं0 दीनदयाल ग्रामोद्योग रोजगार योजना',	'1. योजना का उद्देश्य\r\n        </h4>\r\n        <p>\r\n            ग्रामीण क्षेत्रों में बढ़ती बेरोजगारी का समाधान करने, ग्रामीण शिक्षितों का शहरों\r\n            की ओर पलायन को हतोत्साहित करने तथा अधिक से अधिक रोजगार का अवसर गॉंव में ही उपलब्ध\r\n            कराने के ध्येय से प्रदेश के ग्रामीण क्षेत्रों के <strong>व्यक्तिगत उद्यमियों को रु 25.00\r\n                लाख तक </strong>परियोजना लागत का उद्यम की वित्तीय सहायता बैंकों के माध्यम से\r\n            दिलाया जाना है। इस योजना के अन्तर्गत सभी वर्गों के लाभार्थियों को बैंक द्वारा प्रदत्त\r\n            पूंजीगत ऋण (भवन/वर्कशेड एवं मशीनरी व उपकरण मद) पर 50 प्रतिशत अनुदान दिया जायेगा।\r\n            (अनुदान की अधिकतम सीमा रु0 5.00 लाख होगी।)</p>\r\n',	'default.jpg',	5,	'S5',	0),
(6,	'प्रशिक्षण योजना',	'<p>\r\n            उ0प्र0 के सभी जनपदों में कौशल सुधार प्रशिक्षण योजना/उद्यमिता विकास प्रशिक्षण व सशुल्क\r\n            प्रशिक्षण भी कराये जाते है उक्त प्रशिक्षण कार्यक्रमों का आयोजन शासन द्वारा स्वीकृत/\r\n            प्राविधानित धनराशि से कार्ययोजना के अनुरूप शासनादेश के अनुसार प्राप्त धनराशि निम्नानुसार\r\n            संचालित 10 मण्डलीय ग्रामोद्योग प्रशिक्षण केन्द्रों के माध्यम से प्रदेश के समस्त\r\n            जनपदो मेंकौशल सुधार प्रशिक्षण कार्यक्रमों का संचालन कराया जाता है -</p>\r\n',	'default.jpg',	6,	'S6',	0);

DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE `sponsors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `licensenum` varchar(11) DEFAULT NULL,
  `license_type` varchar(20) DEFAULT NULL,
  `cpnum` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `phone_type` varchar(20) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `q1answer` varchar(50) DEFAULT NULL,
  `q2answer` varchar(50) DEFAULT NULL,
  `q3answer` varchar(50) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role_id` tinyint(2) NOT NULL,
  `email_verified` tinyint(1) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `is_profile_deleted` tinyint(1) DEFAULT '0' COMMENT '1=>profile deleted',
  `profile_deleted_date` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `comm_email` varchar(50) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(4) DEFAULT NULL,
  `zipcode` varchar(6) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `company_name` varchar(20) DEFAULT NULL,
  `credit_status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `cpnum` (`cpnum`),
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `licensenum`, `license_type`, `cpnum`, `email`, `fname`, `lname`, `phone`, `phone_type`, `balance`, `password`, `q1answer`, `q2answer`, `q3answer`, `dateCreated`, `remember_token`, `created_at`, `updated_at`, `role_id`, `email_verified`, `added_by`, `status`, `is_profile_deleted`, `profile_deleted_date`, `last_login`, `token`, `comm_email`, `street_address`, `city`, `state`, `zipcode`, `country`, `company_name`, `credit_status`) VALUES
(13605,	NULL,	NULL,	NULL,	'info@user.com',	'TACT',	'Admin',	NULL,	NULL,	NULL,	'$2y$10$2LAfpFDv2xlBAoTRtyhyUecQh4sy4JKOZZ1DCnsvEu5ocCp5xNLCS',	NULL,	NULL,	NULL,	'2019-02-18 09:45:19',	'baok9NfScEIrZBWrmLtONYKNm2LA7Sj2kX0TNICdMRFHGyXPHQe034YjLV5Q',	'2018-10-23 07:08:37',	'2018-10-23 07:08:37',	1,	NULL,	NULL,	1,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1);

DROP TABLE IF EXISTS `user_eligibility_criterias`;
CREATE TABLE `user_eligibility_criterias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cast` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `annual_income` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `educational_qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employee_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `training_certificate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `adhaar_card` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `training_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loan_fund_request` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `user_eligibility_criterias` (`id`, `name`, `age`, `gender`, `district`, `area`, `cast`, `annual_income`, `educational_qualification`, `employee_status`, `training_certificate`, `adhaar_card`, `training_type`, `loan_fund_request`, `industry`, `created_at`, `updated_at`) VALUES
(1,	'Vishal Srivastava',	'3',	'male',	'1',	'1',	'1',	'1',	'',	'y',	'y',	'y',	'1',	'1',	'2',	'2019-02-13 22:46:49',	'2019-02-13 22:46:49'),
(2,	'Mahesh Srivastava',	'2',	'male',	'1',	'2',	'1',	'3',	'',	'y',	'y',	'y',	'1',	'1',	'2',	'2019-02-13 22:50:36',	'2019-02-13 22:50:36'),
(3,	'Mahesh Srivastava',	'1',	'male',	'1',	'1',	'1',	'1',	'',	'y',	'y',	'y',	'1',	'1',	'1',	'2019-02-13 22:51:16',	'2019-02-13 22:51:16');

-- 2019-02-22 05:00:43
