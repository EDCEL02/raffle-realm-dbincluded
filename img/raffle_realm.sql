-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 06:12 AM
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
-- Database: `raffle_realm`
--

-- --------------------------------------------------------

--
-- Table structure for table `raffle_cart`
--

CREATE TABLE `raffle_cart` (
  `CartID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `TicketCarted` int(11) DEFAULT NULL,
  `IsOnDraw` tinyint(1) DEFAULT NULL,
  `IsPurchased` tinyint(1) DEFAULT NULL,
  `IsRemoved` tinyint(1) DEFAULT NULL,
  `IsWon` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `raffle_cart`
--

INSERT INTO `raffle_cart` (`CartID`, `UserID`, `ProductID`, `TicketCarted`, `IsOnDraw`, `IsPurchased`, `IsRemoved`, `IsWon`) VALUES
(1, 4, 6, 10, 0, 1, 0, 1),
(2, 4, 3, 995, 0, 1, 0, 1),
(3, 1, 6, 986, 0, 1, 0, 1),
(4, 4, 6, 5, 0, 1, 0, 1),
(5, 1, 3, 5, 0, 1, 0, 1),
(6, 1, 3, 995, 0, 1, 0, 1),
(7, 2, 3, 995, 0, 1, 0, 1),
(8, 2, 2, 5, 0, 1, 0, 0),
(9, 1, 2, 153, 0, 1, 0, 1),
(10, 1, 1, 4, 0, 1, 0, 1),
(11, 1, 6, 10, 0, 1, 0, 0),
(12, 1, 3, 5, 0, 1, 0, 1),
(13, 1, 1, 996, 0, 1, 0, 1),
(14, 1, 3, 5, 1, 0, 1, 0),
(15, 2, 2, 150, 1, 1, 0, NULL),
(16, 2, 1, 1450, 1, 1, 0, NULL),
(17, 2, 6, 122, 0, 1, 0, NULL),
(18, 2, 6, 980, 0, 1, 0, NULL),
(19, 2, 2, 0, 1, 0, 1, 0),
(20, 2, 2, 6, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `raffle_products`
--

CREATE TABLE `raffle_products` (
  `ProductID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `DrawType` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `PricePerTicket` decimal(10,2) DEFAULT NULL,
  `TicketPurchased` int(11) DEFAULT NULL,
  `TicketThreshold` int(11) DEFAULT NULL,
  `TotalWinners` int(11) DEFAULT NULL,
  `IsRaffled` tinyint(1) DEFAULT NULL,
  `PDThumbnail` varchar(255) DEFAULT NULL,
  `PDImg1` varchar(255) DEFAULT NULL,
  `PDImg2` varchar(255) DEFAULT NULL,
  `PDImg3` varchar(255) DEFAULT NULL,
  `PDImg4` varchar(255) DEFAULT NULL,
  `PDImg5` varchar(255) DEFAULT NULL,
  `PDImg6` varchar(255) DEFAULT NULL,
  `ProductDescription` text DEFAULT NULL,
  `ProductSpecification` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `raffle_products`
--

INSERT INTO `raffle_products` (`ProductID`, `UserID`, `ProductName`, `DrawType`, `Category`, `Stock`, `PricePerTicket`, `TicketPurchased`, `TicketThreshold`, `TotalWinners`, `IsRaffled`, `PDThumbnail`, `PDImg1`, `PDImg2`, `PDImg3`, `PDImg4`, `PDImg5`, `PDImg6`, `ProductDescription`, `ProductSpecification`) VALUES
(1, 4, 'IPhone 14 Pro Max', 'normal_draw', 'Mobile', 99, 50.00, 1450, 1500, 2, 1, '../uploads/products/P1/pd-1.jfif', '../uploads/products/P1/pd-1.jfif', '../uploads/products/P1/pd-2.jfif', '../uploads/products/P1/pd-3.jfif', '../uploads/products/P1/pd-4.jfif', '../uploads/products/P1/pd-5.jfif', '../uploads/products/P1/pd-6.jfif', 'Elevate your mobile experience with the iPhone 14 Pro Max. This flagship device redefines the boundaries of smartphone technology, offering a perfect blend of style and performance.\r\n\r\nKey Features:\r\n\r\nProRAW Photography: Capture stunning photos and videos with professional-grade quality.\r\nA15 Bionic Chip: Experience blazing-fast performance and seamless multitasking.\r\nImmersive Display: Enjoy a vibrant 6.7-inch Super Retina XDR display with ProMotion technology.\r\n5G Connectivity: Stay connected with lightning-fast 5G speeds.\r\niOS 16: Benefit from Apple\'s latest operating system with enhanced privacy features.\r\nAll-Day Battery Life: Keep going all day with intelligent battery management.\r\nFace ID: Secure your device and data with advanced facial recognition.\r\nDurable Design: Built to last with Ceramic Shield and water/dust resistance.\r\nStorage Options: Choose from a range of storage capacities to fit your needs.\r\nMagSafe Compatibility: Easily enhance your device with MagSafe accessories.\r\n\r\nElevate your mobile experience with the iPhone 14 Pro Max – where innovation meets elegance. Whether you\'re a photography enthusiast, a power user, or someone who appreciates the finer things in life, this device has something extraordinary to offer. Discover the future of mobile technology today.', 'Display: 6.7-inch Super Retina XDR display with ProMotion technology\r\n\r\nProcessor: A15 Bionic chip with Neural Engine\r\n\r\nOperating System: iOS 16\r\n\r\nStorage Options: Available in 128GB, 256GB, 512GB, and 1TB\r\n\r\nCamera System:\r\n\r\nMain Camera: Triple 12MP system (Ultra Wide, Wide, Telephoto)\r\nProRAW Photography support\r\nNight mode, Deep Fusion, Smart HDR 4\r\nFront Camera: 12MP TrueDepth camera with Night mode, Deep Fusion, and 4K Dolby Vision HDR recording\r\n\r\n5G Connectivity: Yes\r\n\r\nBiometric Authentication: Face ID facial recognition\r\n\r\nBattery Life: All-day battery life with fast charging and wireless charging support\r\n\r\nWater and Dust Resistance: Rated IP68 (maximum depth of 6 meters up to 30 minutes)\r\n\r\nMaterials: Ceramic Shield front cover, Surgical-grade stainless steel frame\r\n\r\nMagSafe Compatibility: Yes\r\n\r\nDimensions:\r\n\r\nHeight: X inches (XX mm)\r\nWidth: X inches (XX mm)\r\nDepth: X inches (XX mm)\r\nWeight: X ounces (XX grams)'),
(2, 4, 'Redmi Note 12', 'normal_draw', 'Mobile', 7, 50.00, 150, 158, 3, 1, '../uploads/products/P2/01.jfif', '../uploads/products/P2/01.jfif', '../uploads/products/P2/02.jfif', '../uploads/products/P2/03.jfif', '../uploads/products/P2/04.jfif', '../uploads/products/P2/05.jfif', '../uploads/products/P2/06.jfif', 'Redmi Note 12\n\n\n\n✔ Legit\n\n✔ 100% Original\n\n✔ Brand New Sealed\n\n✔ Global Version\n\n\n\nRAM & Storage: 4GB+128GB /6GB+128GB/ 8GB+128GB (Supports Expandable Storage up to 1TB)\n\n\n\n*Manila Stock\n\n\n\nOperating Sytem (OS): MIUI 14 based on Android 13\n\nProcessor: Qualcomm Snapdragon 685, Octa-core Processor\n\nBattery: 5000mAh (Typ) Supports 33W Fast Charging\n\nDisplay Size: 6.67” AMOLED 120Hz DotDisplay\n\nRear Camera: 50MP Triple Rear Camera\n\nFront Camera: 13MP Front Camera\n\nSIM Card Type: Dual SIM (Nano-SIM) Dual Standby\n\nSensors: Accelerometer, Proximity, Ambien Light, E-Compass, IR Blaster, Gyroscope\n\nColor Available: Onyx Gray, Ice Blue, Mint Green\n\n\n\nWhat’s in the box\n\nRedmi Note 12 / Adapter / USB Type-C Cable / SIM Eject Tool / Protective Case / Quick Start Guide / Warranty Card', 'Category\nShopee\nMobiles & Gadgets\nMobiles\nXiaomi\nBrand\nXiaomi\nWarranty Type\nSupplier Warranty\nWarranty Duration\n12 Months\nNumber of SIM Card Slots\n2\nNumber of Primary Cameras\n>3\nMobile Phone Features\nExpandable Memory, Fingerprint Sensor, GPS, Touchscreen, Wifi\nPhone Type\nSmart Phone\nSupported Operating System\nAndroid\nMobile Cable Type\nType C\nProcessor Type\nQualcomm Snapdragon 685\nPhone Model\nRedmi Note 12\nCondition\nBrand New\nBattery Capacity\n5000mAh\nScreen Size\n6.67inches\nStock\n5\nShips From\nMalate, Metro Manila'),
(3, 5, 'AXGG Tsukishima', 'normal_draw', 'Shirts', 4, 10.00, 0, 1000, 6, 1, '../uploads/products/P3/01.jfif', '../uploads/products/P3/01.jfif', '../uploads/products/P3/02.jfif', '../uploads/products/P3/03.jfif', '../uploads/products/P3/04.jfif', '../uploads/products/P3/05.jfif', '../uploads/products/P3/06.jfif', '✔️ A perfect merch for gamers and anime lovers to express their passion\n✔️ AXGG collection is inspired by the playful spirit found in anime and video games while still fitting into any lifestyle.\n✔️ Activewear is one of the most functional garments, but it is also important to have a means of expressing your personality.\n✔️ It\'s 100% high-quality premium polyester fabric, so you can wear it with confidence knowing that it will keep you dry and comfortable in any situation.\n✔️ This T-shirt also comes with an absorption technology designed specifically to wick sweat away from your body and keep you comfortable throughout your next adventure!\n✔️ Using Ultra-High Quality EPSON Printing System ensures that the color of shirts will never fade away\n✔️ Our range of size are available from kids size to 3XL. We have the larger sizes for collectors who like to display their favorite characters proudly!\n✔️ You deserve the best and we promise to do everything we can to bring you high quality Anime Merchandise. If you are not satisfied with your orders or have any issues, please contact us and we will work with you to ensure that you are satisfied!', 'Category\nShopee\nMen\'s Apparel\nTops\nDress & Casual Shirt\nBrand\nAXGG\nNeckline\nRound Neck\nPattern\nPrint\nSleeve Length\nShort Sleeves\nPlus Size\nNo\nMaterial\nPolyester\nStock\n139988\nShips From\nBacoor, Cavite'),
(4, 4, 'IPhone 15 Pro Max', 'normal_draw', 'Mobile', 100, 50.00, 0, 2000, 0, 1, '../uploads/products/P4/01.jfif', '../uploads/products/P4/01.jfif', '../uploads/products/P4/02.jfif', '../uploads/products/P4/03.jfif', '../uploads/products/P4/04.jfif', '../uploads/products/P4/05.jfif', '../uploads/products/P4/06.jfif', 'iPhone 15 Pro Max. Forged in titanium and featuring the groundbreaking A17 Pro chip, a customizable Action button, and the most powerful iPhone camera system ever.\r\n\r\n\r\n\r\nKey Feature Bullets\r\n\r\n· FORGED IN TITANIUM — iPhone 15 Pro Max has a strong and light aerospace-grade titanium design with a textured matte-glass back. It also features a Ceramic Shield front that’s tougher than any smartphone glass. And it’s splash, water, and dust resistant.¹\r\n\r\n\r\n\r\n· ADVANCED DISPLAY — The 6.7″ Super Retina XDR display² with ProMotion ramps up refresh rates to 120Hz when you need\r\n\r\nexceptional graphics performance. Dynamic Island bubbles up alerts and Live Activities. Plus, with Always-On display, your Lock Screen stays glanceable, so you don’t have to tap it to stay in the know.\r\n\r\n\r\n\r\n· GAME-CHANGING A17 PRO CHIP — A Pro-class GPU makes mobile games feel so immersive, with rich environments and realistic characters. A17 Pro is also incredibly efficient and helps to deliver amazing all-day battery life.³\r\n\r\n\r\n\r\n· POWERFUL PRO CAMERA SYSTEM — Get incredible framing flexibility with seven pro lenses. Capture super-high-resolution photos with more color and detail using the 48MP Main camera. And take sharper close-ups from farther away with the 5x Telephoto camera on iPhone 15 Pro Max.\r\n\r\n\r\n\r\n· CUSTOMIZABLE ACTION BUTTON — Action button is a fast track to your favorite feature. Just set the one you want, like Silent mode, Camera, Voice Memo, Shortcut, and more. Then press and hold to launch the action.\r\n\r\n\r\n\r\n· PRO CONNECTIVITY — The new USB-C connector lets you charge your Mac or iPad with the same cable you use to charge iPhone 15 Pro Max. With USB 3, you get a huge leap in data transfer speeds.⁴ And you can download files up to 2x faster using Wi-Fi 6E.⁵\r\n\r\n\r\n\r\n· VITAL SAFETY FEATURES — With Crash Detection, iPhone can detect a severe car crash and call for help if you can’t.⁶\r\n\r\n\r\n\r\n· DESIGNED TO MAKE A DIFFERENCE — iPhone comes with privacy protections that help keep you in control of your data. It’s made from more recycled materials to minimize environmental impact. And it has built-in features that make iPhone more accessible to all.\r\n\r\n\r\n\r\n· COMES WITH APPLECARE WARRANTY — Every iPhone comes with a one-year limited warranty and up to 90 days of complimentary technical support.\r\n\r\n\r\n\r\nModel Number: A3106\r\n\r\nDual SIM (Two active eSIMs or nano-SIM and eSIM)\r\n\r\n\r\n\r\nLegal\r\n\r\n¹iPhone 15, iPhone 15 Plus, iPhone 15 Pro, and iPhone 15 Pro Max are splash, water, and dust resistant and were tested under controlled laboratory conditions with a rating of IP68 under IEC standard 60529 (maximum depth of 6 meters up to 30 minutes). Splash, water, and dust resistance are not permanent conditions. Resistance might decrease as a result of normal wear. Do not attempt to charge a wet iPhone; refer to the user guide for cleaning and\r\n\r\ndrying instructions. Liquid damage not covered under warranty.\r\n\r\n²The display has rounded corners. When measured as a standard rectangle, the screen is 6.12 inches (iPhone 15 Pro, iPhone 15) or 6.69 inches (iPhone 15 Pro Max, iPhone 15 Plus) diagonally. Actual viewable area is less.\r\n\r\n³Battery life varies by use and configuration; see apple.com/batteries for more information.\r\n\r\n⁴USB 3 cable with 10 Gbps speeds required for up to 20x faster transfers on iPhone 15 Pro models.\r\n\r\n⁵Wi-Fi 6E available in countries and regions where supported.\r\n\r\n⁶iPhone 15 and iPhone 15 Pro can detect a severe car crash and call for help. Requires a cellular connection or Wi-Fi calling.\r\n\r\n\r\n\r\nWhat\'s in the Box\r\n\r\n1 x iPhone 15 Pro Max\r\n\r\n1 x USB-C Charge Cable', 'Category\r\nShopee\r\nMobiles & Gadgets\r\nMobiles\r\nApple\r\nBrand\r\nApple\r\nWarranty Type\r\nSupplier Warranty\r\nWarranty Duration\r\n12 Months\r\nCondition\r\nNew\r\nStock\r\n43\r\nShips From\r\nCalamba City, Laguna'),
(5, 4, 'Xiaomi Pad 6', 'normal_draw', 'Accessories', 100, 10.00, 14, 2000, 1, 0, '../uploads/products/P5/01.jfif', '../uploads/products/P5/01.jfif', '../uploads/products/P5/02.jfif', '../uploads/products/P5/03.jfif', '../uploads/products/P5/04.jfif', '../uploads/products/P5/05.jfif', '../uploads/products/P5/06.jfif', 'XIAOMI PAD 6\r\n\r\n\r\n\r\n✔ Legit\r\n\r\n✔ 100% Original\r\n\r\n✔ Brand New Sealed\r\n\r\n✔ Global Version\r\n\r\n\r\n\r\nRAM & Storage: 4GB+128GB /6GB+128GB/ 8GB+128GB (Supports Expandable Storage up to 1TB)\r\n\r\n\r\n\r\n*Manila Stock\r\n\r\n\r\n\r\nOperating Sytem (OS): MIUI 14 based on Android 13\r\n\r\nProcessor: Qualcomm Snapdragon 685, Octa-core Processor\r\n\r\nBattery: 5000mAh (Typ) Supports 33W Fast Charging\r\n\r\nDisplay Size: 6.67” AMOLED 120Hz DotDisplay\r\n\r\nRear Camera: 50MP Triple Rear Camera\r\n\r\nFront Camera: 13MP Front Camera\r\n\r\nSIM Card Type: Dual SIM (Nano-SIM) Dual Standby\r\n\r\nSensors: Accelerometer, Proximity, Ambien Light, E-Compass, IR Blaster, Gyroscope\r\n\r\nColor Available: Onyx Gray, Ice Blue, Mint Green\r\n\r\n\r\n\r\nWhat’s in the box\r\n\r\nRedmi Note 12 / Adapter / USB Type-C Cable / SIM Eject Tool / Protective Case / Quick Start Guide / Warranty CardRedmi Note 12\r\n\r\n\r\n\r\n✔ Legit\r\n\r\n✔ 100% Original\r\n\r\n✔ Brand New Sealed\r\n\r\n✔ Global Version\r\n\r\n\r\n\r\nRAM & Storage: 4GB+128GB /6GB+128GB/ 8GB+128GB (Supports Expandable Storage up to 1TB)\r\n\r\n\r\n\r\n*Manila Stock\r\n\r\n\r\n\r\nOperating Sytem (OS): MIUI 14 based on Android 13\r\n\r\nProcessor: Qualcomm Snapdragon 685, Octa-core Processor\r\n\r\nBattery: 5000mAh (Typ) Supports 33W Fast Charging\r\n\r\nDisplay Size: 6.67” AMOLED 120Hz DotDisplay\r\n\r\nRear Camera: 50MP Triple Rear Camera\r\n\r\nFront Camera: 13MP Front Camera\r\n\r\nSIM Card Type: Dual SIM (Nano-SIM) Dual Standby\r\n\r\nSensors: Accelerometer, Proximity, Ambien Light, E-Compass, IR Blaster, Gyroscope\r\n\r\nColor Available: Onyx Gray, Ice Blue, Mint Green\r\n\r\n\r\n\r\nWhat’s in the box\r\n\r\nRedmi Note 12 / Adapter / USB Type-C Cable / SIM Eject Tool / Protective Case / Quick Start Guide / Warranty Card', 'Category\r\nShopee\r\nMobiles & Gadgets\r\nMobiles\r\nXiaomi\r\nBrand\r\nXiaomi\r\nWarranty Type\r\nSupplier Warranty\r\nWarranty Duration\r\n12 Months\r\nNumber of SIM Card Slots\r\n2\r\nNumber of Primary Cameras\r\n>3\r\nMobile Phone Features\r\nExpandable Memory, Fingerprint Sensor, GPS, Touchscreen, Wifi\r\nPhone Type\r\nSmart Phone\r\nSupported Operating System\r\nAndroid\r\nMobile Cable Type\r\nType C\r\nProcessor Type\r\nQualcomm Snapdragon 685\r\nPhone Model\r\nRedmi Note 12\r\nCondition\r\nBrand New\r\nBattery Capacity\r\n5000mAh\r\nScreen Size\r\n6.67inches\r\nStock\r\n5\r\nShips From\r\nMalate, Metro Manila'),
(6, 5, 'AXGG Ushijima', 'normal_draw', 'Shirts', 8, 10.25, 0, 1000, 2, 1, '../uploads/products/P6/01.jfif', '../uploads/products/P6/01.jfif', '../uploads/products/P6/02.jfif', '../uploads/products/P6/03.jfif', '../uploads/products/P6/04.jfif', '../uploads/products/P6/05.jfif', '../uploads/products/P6/06.jfif', '✔️ A perfect merch for gamers and anime lovers to express their passion\r\n✔️ AXGG collection is inspired by the playful spirit found in anime and video games while still fitting into any lifestyle.\r\n✔️ Activewear is one of the most functional garments, but it is also important to have a means of expressing your personality.\r\n✔️ It\'s 100% high-quality premium polyester fabric, so you can wear it with confidence knowing that it will keep you dry and comfortable in any situation.\r\n✔️ This T-shirt also comes with an absorption technology designed specifically to wick sweat away from your body and keep you comfortable throughout your next adventure!\r\n✔️ Using Ultra-High Quality EPSON Printing System ensures that the color of shirts will never fade away\r\n✔️ Our range of size are available from kids size to 3XL. We have the larger sizes for collectors who like to display their favorite characters proudly!\r\n✔️ You deserve the best and we promise to do everything we can to bring you high quality Anime Merchandise. If you are not satisfied with your orders or have any issues, please contact us and we will work with you to ensure that you are satisfied!', 'Category\r\nShopee\r\nMen\'s Apparel\r\nTops\r\nDress & Casual Shirt\r\nBrand\r\nAXGG\r\nNeckline\r\nRound Neck\r\nPattern\r\nPrint\r\nSleeve Length\r\nShort Sleeves\r\nPlus Size\r\nNo\r\nMaterial\r\nPolyester\r\nStock\r\n489983\r\nShips From\r\nBacoor, Cavite'),
(7, 6, 'RP Size Stretched Panty', 'normal_draw', 'Accessories', 100, 5.00, 0, 50, 0, 0, '../uploads/products/P7/01.jfif', '../uploads/products/P7/01.jfif', '../uploads/products/P7/02.jfif', '../uploads/products/P7/03.jfif', '../uploads/products/P7/04.jfif', '../uploads/products/P7/05.jfif', '../uploads/products/P7/06.jfif', 'FYI: Items are not thick because it\'s made of pure cotton material.. but comfy to wear and breathable, best for everyday use.\n🩲Recomended for handwash and use gentle laundry detergent. \n\nCotton Mid Waist Panty\n\n✔GOOD QUALITY\n✔ON HAND ALL ITEMS\n✔DIRECT SUPPLIER\n✔LOWEST PRICE WITH HIGH QUALITY PRODUCT\n✔EVERYDAY SHIPPING\n\n✔All item is properly checked before Ship out for a hasstle free transaction (whenever you found a damage or any problem with your purchase, kindly send us a message directly so we can resolve it to avoid sending bad comment/reviews because this doesn\'t help resolve the issue) 😊\n\n🔴 📏Size CHART (waistline)   (HIPS)\n             Small              23 - 24\"       31-32\"\n             Medium         25 - 26\"       33-34\"\n             Large              27 - 28\"       35-36\'\n             XL                   29 - 30\"        37-38\"\n             2XL                 31 - 32\"        39-40\"\n\n🔴 high quality cotton texture, stretchable\n\nCheck Customers reviews first before placing order, to avoid too much expectation', 'Category\r\nShopee\r\nWomen\'s Apparel\r\nLingerie & Nightwear\r\nPanty\r\nWaist Height\r\nMid Waist\r\nPattern\r\nPlain\r\nMaterial\r\nCotton\r\nPack Type\r\nSingle\r\nPlus Size\r\nNo\r\nPetite\r\nNo\r\nPanties Style\r\nBikini\r\nPanties Type\r\nOthers\r\nCountry of Origin\r\nphilippines\r\nSeason\r\nAll Season\r\nStock\r\n124\r\nShips From\r\nRodriguez, Rizal'),
(8, 4, 'Iphone 15', 'normal_draw', 'Mobile', 0, 50.00, 0, 2000, 1, 0, '../uploads/products/P8/01.jfif', '../uploads/products/P8/01.jfif', '../uploads/products/P8/02.jfif', '../uploads/products/P8/03.jfif', '../uploads/products/P8/04.jfif', '../uploads/products/P8/05.jfif', '../uploads/products/P8/06.jfif', 'asdfasfsdafsadf', 'asdfafsadfsadfafasf'),
(9, 5, 'AXGG Bokuto', 'normal_draw', 'Shirts', 100, 20.00, 0, 500, 0, 1, '../uploads/products/P9/01.jfif', '../uploads/products/P9/01.jfif', '../uploads/products/P9/02.jfif', '../uploads/products/P9/03.jfif', '../uploads/products/P9/04.jfif', '../uploads/products/P9/05.jfif', '../uploads/products/P9/06.jfif', '✔️ A perfect merch for gamers and anime lovers to express their passion\r\n✔️ AXGG collection is inspired by the playful spirit found in anime and video games while still fitting into any lifestyle.\r\n✔️ Activewear is one of the most functional garments, but it is also important to have a means of expressing your personality.\r\n✔️ It\'s 100% high-quality premium polyester fabric, so you can wear it with confidence knowing that it will keep you dry and comfortable in any situation.\r\n✔️ This T-shirt also comes with an absorption technology designed specifically to wick sweat away from your body and keep you comfortable throughout your next adventure!\r\n✔️ Using Ultra-High Quality EPSON Printing System ensures that the color of shirts will never fade away\r\n✔️ Our range of size are available from kids size to 3XL. We have the larger sizes for collectors who like to display their favorite characters proudly!\r\n✔️ You deserve the best and we promise to do everything we can to bring you high quality Anime Merchandise. If you are not satisfied with your orders or have any issues, please contact us and we will work with you to ensure that you are satisfied!', 'Category\r\nShopee\r\nMen\'s Apparel\r\nTops\r\nDress & Casual Shirt\r\nBrand\r\nAXGG\r\nNeckline\r\nRound Neck\r\nPattern\r\nPrint\r\nSleeve Length\r\nShort Sleeves\r\nPlus Size\r\nNo\r\nMaterial\r\nPolyester\r\nStock\r\n139988\r\nShips From\r\nBacoor, Cavite'),
(10, 5, 'AXGG Oikawa', 'normal_draw', 'Shirts', 100, 15.00, 0, 70, 0, 1, '../uploads/products/P10/01.jfif', '../uploads/products/P10/01.jfif', '../uploads/products/P10/02.jfif', '../uploads/products/P10/03.jfif', '../uploads/products/P10/04.jfif', '../uploads/products/P10/05.jfif', '../uploads/products/P10/06.jfif', '✔️ A perfect merch for gamers and anime lovers to express their passion\r\n✔️ AXGG collection is inspired by the playful spirit found in anime and video games while still fitting into any lifestyle.\r\n✔️ Activewear is one of the most functional garments, but it is also important to have a means of expressing your personality.\r\n✔️ It\'s 100% high-quality premium polyester fabric, so you can wear it with confidence knowing that it will keep you dry and comfortable in any situation.\r\n✔️ This T-shirt also comes with an absorption technology designed specifically to wick sweat away from your body and keep you comfortable throughout your next adventure!\r\n✔️ Using Ultra-High Quality EPSON Printing System ensures that the color of shirts will never fade away\r\n✔️ Our range of size are available from kids size to 3XL. We have the larger sizes for collectors who like to display their favorite characters proudly!\r\n✔️ You deserve the best and we promise to do everything we can to bring you high quality Anime Merchandise. If you are not satisfied with your orders or have any issues, please contact us and we will work with you to ensure that you are satisfied!', 'Category\r\nShopee\r\nMen\'s Apparel\r\nTops\r\nDress & Casual Shirt\r\nBrand\r\nAXGG\r\nNeckline\r\nRound Neck\r\nPattern\r\nPrint\r\nSleeve Length\r\nShort Sleeves\r\nPlus Size\r\nNo\r\nMaterial\r\nPolyester\r\nStock\r\n139988\r\nShips From\r\nBacoor, Cavite'),
(11, 5, 'AXGG MSBY Hinata', 'normal_draw', 'Shirts', 2000, 5.00, 0, 200, 0, 1, '../uploads/products/P11/01.jfif', '../uploads/products/P11/01.jfif', '../uploads/products/P11/02.jfif', '../uploads/products/P11/03.jfif', '../uploads/products/P11/04.jfif', '../uploads/products/P11/05.jfif', '../uploads/products/P11/06.jfif', '✔️ A perfect merch for gamers and anime lovers to express their passion\r\n✔️ AXGG collection is inspired by the playful spirit found in anime and video games while still fitting into any lifestyle.\r\n✔️ Activewear is one of the most functional garments, but it is also important to have a means of expressing your personality.\r\n✔️ It\'s 100% high-quality premium polyester fabric, so you can wear it with confidence knowing that it will keep you dry and comfortable in any situation.\r\n✔️ This T-shirt also comes with an absorption technology designed specifically to wick sweat away from your body and keep you comfortable throughout your next adventure!\r\n✔️ Using Ultra-High Quality EPSON Printing System ensures that the color of shirts will never fade away\r\n✔️ Our range of size are available from kids size to 3XL. We have the larger sizes for collectors who like to display their favorite characters proudly!\r\n✔️ You deserve the best and we promise to do everything we can to bring you high quality Anime Merchandise. If you are not satisfied with your orders or have any issues, please contact us and we will work with you to ensure that you are satisfied!', 'Category\r\nShopee\r\nMen\'s Apparel\r\nTops\r\nDress & Casual Shirt\r\nBrand\r\nAXGG\r\nNeckline\r\nRound Neck\r\nPattern\r\nPrint\r\nSleeve Length\r\nShort Sleeves\r\nPlus Size\r\nNo\r\nMaterial\r\nPolyester\r\nStock\r\n139988\r\nShips From\r\nBacoor, Cavite'),
(12, 5, 'AXGG Nagi', 'normal_draw', 'Shirts', 1000, 1.00, 0, 998, 0, 1, '../uploads/products/P12/01.jfif', '../uploads/products/P12/01.jfif', '../uploads/products/P12/02.jfif', '../uploads/products/P12/03.jfif', '../uploads/products/P12/04.jfif', '../uploads/products/P12/05.jfif', '../uploads/products/P12/06.jfif', '✔️ A perfect merch for gamers and anime lovers to express their passion\r\n✔️ AXGG collection is inspired by the playful spirit found in anime and video games while still fitting into any lifestyle.\r\n✔️ Activewear is one of the most functional garments, but it is also important to have a means of expressing your personality.\r\n✔️ It\'s 100% high-quality premium polyester fabric, so you can wear it with confidence knowing that it will keep you dry and comfortable in any situation.\r\n✔️ This T-shirt also comes with an absorption technology designed specifically to wick sweat away from your body and keep you comfortable throughout your next adventure!\r\n✔️ Using Ultra-High Quality EPSON Printing System ensures that the color of shirts will never fade away\r\n✔️ Our range of size are available from kids size to 3XL. We have the larger sizes for collectors who like to display their favorite characters proudly!\r\n✔️ You deserve the best and we promise to do everything we can to bring you high quality Anime Merchandise. If you are not satisfied with your orders or have any issues, please contact us and we will work with you to ensure that you are satisfied!', 'Category\r\nShopee\r\nMen\'s Apparel\r\nTops\r\nDress & Casual Shirt\r\nBrand\r\nAXGG\r\nNeckline\r\nRound Neck\r\nPattern\r\nPrint\r\nSleeve Length\r\nShort Sleeves\r\nPlus Size\r\nNo\r\nMaterial\r\nPolyester\r\nStock\r\n139988\r\nShips From\r\nBacoor, Cavite'),
(13, 4, 'Xiaomi Pad 6', 'normal_draw', 'Mobile', 100, 10.00, 0, 2000, 0, 1, '../uploads/products/P13/01.jfif', '../uploads/products/P13/01.jfif', '../uploads/products/P13/02.jfif', '../uploads/products/P13/03.jfif', '../uploads/products/P13/04.jfif', '../uploads/products/P13/05.jfif', '../uploads/products/P13/06.jfif', 'Redmi Note 12\r\n\r\n\r\n\r\n✔ Legit\r\n\r\n✔ 100% Original\r\n\r\n✔ Brand New Sealed\r\n\r\n✔ Global Version\r\n\r\n\r\n\r\nRAM & Storage: 4GB+128GB /6GB+128GB/ 8GB+128GB (Supports Expandable Storage up to 1TB)\r\n\r\n\r\n\r\n*Manila Stock\r\n\r\n\r\n\r\nOperating Sytem (OS): MIUI 14 based on Android 13\r\n\r\nProcessor: Qualcomm Snapdragon 685, Octa-core Processor\r\n\r\nBattery: 5000mAh (Typ) Supports 33W Fast Charging\r\n\r\nDisplay Size: 6.67” AMOLED 120Hz DotDisplay\r\n\r\nRear Camera: 50MP Triple Rear Camera\r\n\r\nFront Camera: 13MP Front Camera\r\n\r\nSIM Card Type: Dual SIM (Nano-SIM) Dual Standby\r\n\r\nSensors: Accelerometer, Proximity, Ambien Light, E-Compass, IR Blaster, Gyroscope\r\n\r\nColor Available: Onyx Gray, Ice Blue, Mint Green\r\n\r\n\r\n\r\nWhat’s in the box\r\n\r\nRedmi Note 12 / Adapter / USB Type-C Cable / SIM Eject Tool / Protective Case / Quick Start Guide / Warranty CardRedmi Note 12\r\n\r\n\r\n\r\n✔ Legit\r\n\r\n✔ 100% Original\r\n\r\n✔ Brand New Sealed\r\n\r\n✔ Global Version\r\n\r\n\r\n\r\nRAM & Storage: 4GB+128GB /6GB+128GB/ 8GB+128GB (Supports Expandable Storage up to 1TB)\r\n\r\n\r\n\r\n*Manila Stock\r\n\r\n\r\n\r\nOperating Sytem (OS): MIUI 14 based on Android 13\r\n\r\nProcessor: Qualcomm Snapdragon 685, Octa-core Processor\r\n\r\nBattery: 5000mAh (Typ) Supports 33W Fast Charging\r\n\r\nDisplay Size: 6.67” AMOLED 120Hz DotDisplay\r\n\r\nRear Camera: 50MP Triple Rear Camera\r\n\r\nFront Camera: 13MP Front Camera\r\n\r\nSIM Card Type: Dual SIM (Nano-SIM) Dual Standby\r\n\r\nSensors: Accelerometer, Proximity, Ambien Light, E-Compass, IR Blaster, Gyroscope\r\n\r\nColor Available: Onyx Gray, Ice Blue, Mint Green\r\n\r\n\r\n\r\nWhat’s in the box\r\n\r\nRedmi Note 12 / Adapter / USB Type-C Cable / SIM Eject Tool / Protective Case / Quick Start Guide / Warranty Card', 'Category\r\nShopee\r\nMobiles & Gadgets\r\nMobiles\r\nXiaomi\r\nBrand\r\nXiaomi\r\nWarranty Type\r\nSupplier Warranty\r\nWarranty Duration\r\n12 Months\r\nNumber of SIM Card Slots\r\n2\r\nNumber of Primary Cameras\r\n>3\r\nMobile Phone Features\r\nExpandable Memory, Fingerprint Sensor, GPS, Touchscreen, Wifi\r\nPhone Type\r\nSmart Phone\r\nSupported Operating System\r\nAndroid\r\nMobile Cable Type\r\nType C\r\nProcessor Type\r\nQualcomm Snapdragon 685\r\nPhone Model\r\nRedmi Note 12\r\nCondition\r\nBrand New\r\nBattery Capacity\r\n5000mAh\r\nScreen Size\r\n6.67inches\r\nStock\r\n5\r\nShips From\r\nMalate, Metro Manila'),
(14, 4, 'REALME C51', 'normal_draw', 'Mobile', 100, 5.00, 0, 1000, 0, 1, '../uploads/products/P14/01.jfif', '../uploads/products/P14/01.jfif', '../uploads/products/P14/02.jfif', '../uploads/products/P14/03.jfif', '../uploads/products/P14/04.jfif', '../uploads/products/P14/05.jfif', '../uploads/products/P14/06.jfif', 'REALME C51\r\n\r\n\r\n✔ Legit\r\n\r\n✔ 100% Original\r\n\r\n✔ Brand New Sealed\r\n\r\n✔ Global Version\r\n\r\n\r\n\r\nRAM & Storage: 4GB+128GB /6GB+128GB/ 8GB+128GB (Supports Expandable Storage up to 1TB)\r\n\r\n\r\n\r\n*Manila Stock\r\n\r\n\r\n\r\nOperating Sytem (OS): MIUI 14 based on Android 13\r\n\r\nProcessor: Qualcomm Snapdragon 685, Octa-core Processor\r\n\r\nBattery: 5000mAh (Typ) Supports 33W Fast Charging\r\n\r\nDisplay Size: 6.67” AMOLED 120Hz DotDisplay\r\n\r\nRear Camera: 50MP Triple Rear Camera\r\n\r\nFront Camera: 13MP Front Camera\r\n\r\nSIM Card Type: Dual SIM (Nano-SIM) Dual Standby\r\n\r\nSensors: Accelerometer, Proximity, Ambien Light, E-Compass, IR Blaster, Gyroscope\r\n\r\nColor Available: Onyx Gray, Ice Blue, Mint Green\r\n\r\n\r\n\r\nWhat’s in the box\r\n\r\nRedmi Note 12 / Adapter / USB Type-C Cable / SIM Eject Tool / Protective Case / Quick Start Guide / Warranty CardRedmi Note 12\r\n\r\n\r\n\r\n✔ Legit\r\n\r\n✔ 100% Original\r\n\r\n✔ Brand New Sealed\r\n\r\n✔ Global Version\r\n\r\n\r\n\r\nRAM & Storage: 4GB+128GB /6GB+128GB/ 8GB+128GB (Supports Expandable Storage up to 1TB)\r\n\r\n\r\n\r\n*Manila Stock\r\n\r\n\r\n\r\nOperating Sytem (OS): MIUI 14 based on Android 13\r\n\r\nProcessor: Qualcomm Snapdragon 685, Octa-core Processor\r\n\r\nBattery: 5000mAh (Typ) Supports 33W Fast Charging\r\n\r\nDisplay Size: 6.67” AMOLED 120Hz DotDisplay\r\n\r\nRear Camera: 50MP Triple Rear Camera\r\n\r\nFront Camera: 13MP Front Camera\r\n\r\nSIM Card Type: Dual SIM (Nano-SIM) Dual Standby\r\n\r\nSensors: Accelerometer, Proximity, Ambien Light, E-Compass, IR Blaster, Gyroscope\r\n\r\nColor Available: Onyx Gray, Ice Blue, Mint Green\r\n\r\n\r\n\r\nWhat’s in the box\r\n\r\nRedmi Note 12 / Adapter / USB Type-C Cable / SIM Eject Tool / Protective Case / Quick Start Guide / Warranty Card', 'Category\r\nShopee\r\nMobiles & Gadgets\r\nMobiles\r\nXiaomi\r\nBrand\r\nXiaomi\r\nWarranty Type\r\nSupplier Warranty\r\nWarranty Duration\r\n12 Months\r\nNumber of SIM Card Slots\r\n2\r\nNumber of Primary Cameras\r\n>3\r\nMobile Phone Features\r\nExpandable Memory, Fingerprint Sensor, GPS, Touchscreen, Wifi\r\nPhone Type\r\nSmart Phone\r\nSupported Operating System\r\nAndroid\r\nMobile Cable Type\r\nType C\r\nProcessor Type\r\nQualcomm Snapdragon 685\r\nPhone Model\r\nRedmi Note 12\r\nCondition\r\nBrand New\r\nBattery Capacity\r\n5000mAh\r\nScreen Size\r\n6.67inches\r\nStock\r\n5\r\nShips From\r\nMalate, Metro Manila'),
(15, 4, 'Redmi 12C', 'normal_draw', 'Mobile', 100, 10.00, 0, 500, 0, 1, '../uploads/products/P15/01.jfif', '../uploads/products/P15/01.jfif', '../uploads/products/P15/02.jfif', '../uploads/products/P15/03.jfif', '../uploads/products/P15/04.jfif', '../uploads/products/P15/05.jfif', '../uploads/products/P15/06.jfif', 'Redmi 12C\r\n\r\n\r\n\r\n✔ Legit\r\n\r\n✔ 100% Original\r\n\r\n✔ Brand New Sealed\r\n\r\n✔ Global Version\r\n\r\n\r\n\r\nRAM & Storage: 4GB+128GB /6GB+128GB/ 8GB+128GB (Supports Expandable Storage up to 1TB)\r\n\r\n\r\n\r\n*Manila Stock\r\n\r\n\r\n\r\nOperating Sytem (OS): MIUI 14 based on Android 13\r\n\r\nProcessor: Qualcomm Snapdragon 685, Octa-core Processor\r\n\r\nBattery: 5000mAh (Typ) Supports 33W Fast Charging\r\n\r\nDisplay Size: 6.67” AMOLED 120Hz DotDisplay\r\n\r\nRear Camera: 50MP Triple Rear Camera\r\n\r\nFront Camera: 13MP Front Camera\r\n\r\nSIM Card Type: Dual SIM (Nano-SIM) Dual Standby\r\n\r\nSensors: Accelerometer, Proximity, Ambien Light, E-Compass, IR Blaster, Gyroscope\r\n\r\nColor Available: Onyx Gray, Ice Blue, Mint Green\r\n\r\n\r\n\r\nWhat’s in the box\r\n\r\nRedmi Note 12 / Adapter / USB Type-C Cable / SIM Eject Tool / Protective Case / Quick Start Guide / Warranty CardRedmi Note 12\r\n\r\n\r\n\r\n✔ Legit\r\n\r\n✔ 100% Original\r\n\r\n✔ Brand New Sealed\r\n\r\n✔ Global Version\r\n\r\n\r\n\r\nRAM & Storage: 4GB+128GB /6GB+128GB/ 8GB+128GB (Supports Expandable Storage up to 1TB)\r\n\r\n\r\n\r\n*Manila Stock\r\n\r\n\r\n\r\nOperating Sytem (OS): MIUI 14 based on Android 13\r\n\r\nProcessor: Qualcomm Snapdragon 685, Octa-core Processor\r\n\r\nBattery: 5000mAh (Typ) Supports 33W Fast Charging\r\n\r\nDisplay Size: 6.67” AMOLED 120Hz DotDisplay\r\n\r\nRear Camera: 50MP Triple Rear Camera\r\n\r\nFront Camera: 13MP Front Camera\r\n\r\nSIM Card Type: Dual SIM (Nano-SIM) Dual Standby\r\n\r\nSensors: Accelerometer, Proximity, Ambien Light, E-Compass, IR Blaster, Gyroscope\r\n\r\nColor Available: Onyx Gray, Ice Blue, Mint Green\r\n\r\n\r\n\r\nWhat’s in the box\r\n\r\nRedmi Note 12 / Adapter / USB Type-C Cable / SIM Eject Tool / Protective Case / Quick Start Guide / Warranty Card', 'Category\r\nShopee\r\nMobiles & Gadgets\r\nMobiles\r\nXiaomi\r\nBrand\r\nXiaomi\r\nWarranty Type\r\nSupplier Warranty\r\nWarranty Duration\r\n12 Months\r\nNumber of SIM Card Slots\r\n2\r\nNumber of Primary Cameras\r\n>3\r\nMobile Phone Features\r\nExpandable Memory, Fingerprint Sensor, GPS, Touchscreen, Wifi\r\nPhone Type\r\nSmart Phone\r\nSupported Operating System\r\nAndroid\r\nMobile Cable Type\r\nType C\r\nProcessor Type\r\nQualcomm Snapdragon 685\r\nPhone Model\r\nRedmi Note 12\r\nCondition\r\nBrand New\r\nBattery Capacity\r\n5000mAh\r\nScreen Size\r\n6.67inches\r\nStock\r\n5\r\nShips From\r\nMalate, Metro Manila'),
(16, 6, 'Women\'s Minimalist T-shirt ', 'normal_draw', 'Women', 98, 3.00, 0, 200, 0, 1, '../uploads/products/P16/01.jfif', '../uploads/products/P16/01.jfif', '../uploads/products/P16/02.jfif', '../uploads/products/P16/03.jfif', '../uploads/products/P16/04.jfif', '../uploads/products/P16/05.jfif', '../uploads/products/P16/06.jfif', 'FYI: Items are not thick because it\'s made of pure cotton material.. but comfy to wear and breathable, best for everyday use.\r\n🩲Recomended for handwash and use gentle laundry detergent. \r\n\r\nCotton Mid Waist Panty\r\n\r\n✔GOOD QUALITY\r\n✔ON HAND ALL ITEMS\r\n✔DIRECT SUPPLIER\r\n✔LOWEST PRICE WITH HIGH QUALITY PRODUCT\r\n✔EVERYDAY SHIPPING\r\n\r\n✔All item is properly checked before Ship out for a hasstle free transaction (whenever you found a damage or any problem with your purchase, kindly send us a message directly so we can resolve it to avoid sending bad comment/reviews because this doesn\'t help resolve the issue) 😊\r\n\r\n🔴 📏Size CHART (waistline)   (HIPS)\r\n             Small              23 - 24\"       31-32\"\r\n             Medium         25 - 26\"       33-34\"\r\n             Large              27 - 28\"       35-36\'\r\n             XL                   29 - 30\"        37-38\"\r\n             2XL                 31 - 32\"        39-40\"\r\n\r\n🔴 high quality cotton texture, stretchable\r\n\r\nCheck Customers reviews first before placing order, to avoid too much expectation', 'Category\r\nShopee\r\nMen\'s Apparel\r\nTops\r\nDress & Casual Shirt\r\nBrand\r\nAXGG\r\nNeckline\r\nRound Neck\r\nPattern\r\nPrint\r\nSleeve Length\r\nShort Sleeves\r\nPlus Size\r\nNo\r\nMaterial\r\nPolyester\r\nStock\r\n139988\r\nShips From\r\nBacoor, CaviteCategory\r\nShopee\r\nMen\'s Apparel\r\nTops\r\nDress & Casual Shirt\r\nBrand\r\nAXGG\r\nNeckline\r\nRound Neck\r\nPattern\r\nPrint\r\nSleeve Length\r\nShort Sleeves\r\nPlus Size\r\nNo\r\nMaterial\r\nPolyester\r\nStock\r\n139988\r\nShips From\r\nBacoor, Cavite'),
(17, 6, 'Amanda Cargo Pants', 'normal_draw', 'Women', 100, 10.00, 0, 60, 0, 1, '../uploads/products/P17/01.jfif', '../uploads/products/P17/01.jfif', '../uploads/products/P17/02.jfif', '../uploads/products/P17/03.jfif', '../uploads/products/P17/04.jfif', '../uploads/products/P17/05.jfif', '../uploads/products/P17/06.jfif', 'FYI: Items are not thick because it\'s made of pure cotton material.. but comfy to wear and breathable, best for everyday use.\r\n🩲Recomended for handwash and use gentle laundry detergent. \r\n\r\nCotton Mid Waist Panty\r\n\r\n✔GOOD QUALITY\r\n✔ON HAND ALL ITEMS\r\n✔DIRECT SUPPLIER\r\n✔LOWEST PRICE WITH HIGH QUALITY PRODUCT\r\n✔EVERYDAY SHIPPING\r\n\r\n✔All item is properly checked before Ship out for a hasstle free transaction (whenever you found a damage or any problem with your purchase, kindly send us a message directly so we can resolve it to avoid sending bad comment/reviews because this doesn\'t help resolve the issue) 😊\r\n\r\n🔴 📏Size CHART (waistline)   (HIPS)\r\n             Small              23 - 24\"       31-32\"\r\n             Medium         25 - 26\"       33-34\"\r\n             Large              27 - 28\"       35-36\'\r\n             XL                   29 - 30\"        37-38\"\r\n             2XL                 31 - 32\"        39-40\"\r\n\r\n🔴 high quality cotton texture, stretchable\r\n\r\nCheck Customers reviews first before placing order, to avoid too much expectation', 'Category\r\nShopee\r\nMobiles & Gadgets\r\nMobiles\r\nXiaomi\r\nBrand\r\nXiaomi\r\nWarranty Type\r\nSupplier Warranty\r\nWarranty Duration\r\n12 Months\r\nNumber of SIM Card Slots\r\n2\r\nNumber of Primary Cameras\r\n>3\r\nMobile Phone Features\r\nExpandable Memory, Fingerprint Sensor, GPS, Touchscreen, Wifi\r\nPhone Type\r\nSmart Phone\r\nSupported Operating System\r\nAndroid\r\nMobile Cable Type\r\nType C\r\nProcessor Type\r\nQualcomm Snapdragon 685\r\nPhone Model\r\nRedmi Note 12\r\nCondition\r\nBrand New\r\nBattery Capacity\r\n5000mAh\r\nScreen Size\r\n6.67inches\r\nStock\r\n5\r\nShips From\r\nMalate, Metro ManilaCategory\r\nShopee\r\nMobiles & Gadgets\r\nMobiles\r\nXiaomi\r\nBrand\r\nXiaomi\r\nWarranty Type\r\nSupplier Warranty\r\nWarranty Duration\r\n12 Months\r\nNumber of SIM Card Slots\r\n2\r\nNumber of Primary Cameras\r\n>3\r\nMobile Phone Features\r\nExpandable Memory, Fingerprint Sensor, GPS, Touchscreen, Wifi\r\nPhone Type\r\nSmart Phone\r\nSupported Operating System\r\nAndroid\r\nMobile Cable Type\r\nType C\r\nProcessor Type\r\nQualcomm Snapdragon 685\r\nPhone Model\r\nRedmi Note 12\r\nCondition\r\nBrand New\r\nBattery Capacity\r\n5000mAh\r\nScreen Size\r\n6.67inches\r\nStock\r\n5\r\nShips From\r\nMalate, Metro Manila'),
(18, 6, 'Crystal Square Skirt', 'normal_draw', 'Women', 500, 10.00, 0, 60, 0, 1, '../uploads/products/P18/01.jfif', '../uploads/products/P18/01.jfif', '../uploads/products/P18/02.jfif', '../uploads/products/P18/03.jfif', '../uploads/products/P18/04.jfif', '../uploads/products/P18/05.jfif', '../uploads/products/P18/06.jfif', 'FYI: Items are not thick because it\'s made of pure cotton material.. but comfy to wear and breathable, best for everyday use.\r\n🩲Recomended for handwash and use gentle laundry detergent. \r\n\r\nCotton Mid Waist Panty\r\n\r\n✔GOOD QUALITY\r\n✔ON HAND ALL ITEMS\r\n✔DIRECT SUPPLIER\r\n✔LOWEST PRICE WITH HIGH QUALITY PRODUCT\r\n✔EVERYDAY SHIPPING\r\n\r\n✔All item is properly checked before Ship out for a hasstle free transaction (whenever you found a damage or any problem with your purchase, kindly send us a message directly so we can resolve it to avoid sending bad comment/reviews because this doesn\'t help resolve the issue) 😊\r\n\r\n🔴 📏Size CHART (waistline)   (HIPS)\r\n             Small              23 - 24\"       31-32\"\r\n             Medium         25 - 26\"       33-34\"\r\n             Large              27 - 28\"       35-36\'\r\n             XL                   29 - 30\"        37-38\"\r\n             2XL                 31 - 32\"        39-40\"\r\n\r\n🔴 high quality cotton texture, stretchable\r\n\r\nCheck Customers reviews first before placing order, to avoid too much expectationFYI: Items are not thick because it\'s made of pure cotton material.. but comfy to wear and breathable, best for everyday use.\r\n🩲Recomended for handwash and use gentle laundry detergent. \r\n\r\nCotton Mid Waist Panty\r\n\r\n✔GOOD QUALITY\r\n✔ON HAND ALL ITEMS\r\n✔DIRECT SUPPLIER\r\n✔LOWEST PRICE WITH HIGH QUALITY PRODUCT\r\n✔EVERYDAY SHIPPING\r\n\r\n✔All item is properly checked before Ship out for a hasstle free transaction (whenever you found a damage or any problem with your purchase, kindly send us a message directly so we can resolve it to avoid sending bad comment/reviews because this doesn\'t help resolve the issue) 😊\r\n\r\n🔴 📏Size CHART (waistline)   (HIPS)\r\n             Small              23 - 24\"       31-32\"\r\n             Medium         25 - 26\"       33-34\"\r\n             Large              27 - 28\"       35-36\'\r\n             XL                   29 - 30\"        37-38\"\r\n             2XL                 31 - 32\"        39-40\"\r\n\r\n🔴 high quality cotton texture, stretchable\r\n\r\nCheck Customers reviews first before placing order, to avoid too much expectation', 'Category\r\nShopee\r\nMobiles & Gadgets\r\nMobiles\r\nXiaomi\r\nBrand\r\nXiaomi\r\nWarranty Type\r\nSupplier Warranty\r\nWarranty Duration\r\n12 Months\r\nNumber of SIM Card Slots\r\n2\r\nNumber of Primary Cameras\r\n>3\r\nMobile Phone Features\r\nExpandable Memory, Fingerprint Sensor, GPS, Touchscreen, Wifi\r\nPhone Type\r\nSmart Phone\r\nSupported Operating System\r\nAndroid\r\nMobile Cable Type\r\nType C\r\nProcessor Type\r\nQualcomm Snapdragon 685\r\nPhone Model\r\nRedmi Note 12\r\nCondition\r\nBrand New\r\nBattery Capacity\r\n5000mAh\r\nScreen Size\r\n6.67inches\r\nStock\r\n5\r\nShips From\r\nMalate, Metro ManilaCategory\r\nShopee\r\nMobiles & Gadgets\r\nMobiles\r\nXiaomi\r\nBrand\r\nXiaomi\r\nWarranty Type\r\nSupplier Warranty\r\nWarranty Duration\r\n12 Months\r\nNumber of SIM Card Slots\r\n2\r\nNumber of Primary Cameras\r\n>3\r\nMobile Phone Features\r\nExpandable Memory, Fingerprint Sensor, GPS, Touchscreen, Wifi\r\nPhone Type\r\nSmart Phone\r\nSupported Operating System\r\nAndroid\r\nMobile Cable Type\r\nType C\r\nProcessor Type\r\nQualcomm Snapdragon 685\r\nPhone Model\r\nRedmi Note 12\r\nCondition\r\nBrand New\r\nBattery Capacity\r\n5000mAh\r\nScreen Size\r\n6.67inches\r\nStock\r\n5\r\nShips From\r\nMalate, Metro Manila'),
(19, 6, 'KF Side Striped Jacket', 'normal_draw', 'Women', 100, 9.99, 0, 100, 0, 1, '../uploads/products/P19/01.jfif', '../uploads/products/P19/01.jfif', '../uploads/products/P19/02.jfif', '../uploads/products/P19/03.jfif', '../uploads/products/P19/04.jfif', '../uploads/products/P19/05.jfif', '../uploads/products/P19/06.jfif', 'FYI: Items are not thick because it\'s made of pure cotton material.. but comfy to wear and breathable, best for everyday use.\r\n🩲Recomended for handwash and use gentle laundry detergent. \r\n\r\nCotton Mid Waist Panty\r\n\r\n✔GOOD QUALITY\r\n✔ON HAND ALL ITEMS\r\n✔DIRECT SUPPLIER\r\n✔LOWEST PRICE WITH HIGH QUALITY PRODUCT\r\n✔EVERYDAY SHIPPING\r\n\r\n✔All item is properly checked before Ship out for a hasstle free transaction (whenever you found a damage or any problem with your purchase, kindly send us a message directly so we can resolve it to avoid sending bad comment/reviews because this doesn\'t help resolve the issue) 😊\r\n\r\n🔴 📏Size CHART (waistline)   (HIPS)\r\n             Small              23 - 24\"       31-32\"\r\n             Medium         25 - 26\"       33-34\"\r\n             Large              27 - 28\"       35-36\'\r\n             XL                   29 - 30\"        37-38\"\r\n             2XL                 31 - 32\"        39-40\"\r\n\r\n🔴 high quality cotton texture, stretchable\r\n\r\nCheck Customers reviews first before placing order, to avoid too much expectationFYI: Items are not thick because it\'s made of pure cotton material.. but comfy to wear and breathable, best for everyday use.\r\n🩲Recomended for handwash and use gentle laundry detergent. \r\n\r\nCotton Mid Waist Panty\r\n\r\n✔GOOD QUALITY\r\n✔ON HAND ALL ITEMS\r\n✔DIRECT SUPPLIER\r\n✔LOWEST PRICE WITH HIGH QUALITY PRODUCT\r\n✔EVERYDAY SHIPPING\r\n\r\n✔All item is properly checked before Ship out for a hasstle free transaction (whenever you found a damage or any problem with your purchase, kindly send us a message directly so we can resolve it to avoid sending bad comment/reviews because this doesn\'t help resolve the issue) 😊\r\n\r\n🔴 📏Size CHART (waistline)   (HIPS)\r\n             Small              23 - 24\"       31-32\"\r\n             Medium         25 - 26\"       33-34\"\r\n             Large              27 - 28\"       35-36\'\r\n             XL                   29 - 30\"        37-38\"\r\n             2XL                 31 - 32\"        39-40\"\r\n\r\n🔴 high quality cotton texture, stretchable\r\n\r\nCheck Customers reviews first before placing order, to avoid too much expectation', 'Category\r\nShopee\r\nMobiles & Gadgets\r\nMobiles\r\nXiaomi\r\nBrand\r\nXiaomi\r\nWarranty Type\r\nSupplier Warranty\r\nWarranty Duration\r\n12 Months\r\nNumber of SIM Card Slots\r\n2\r\nNumber of Primary Cameras\r\n>3\r\nMobile Phone Features\r\nExpandable Memory, Fingerprint Sensor, GPS, Touchscreen, Wifi\r\nPhone Type\r\nSmart Phone\r\nSupported Operating System\r\nAndroid\r\nMobile Cable Type\r\nType C\r\nProcessor Type\r\nQualcomm Snapdragon 685\r\nPhone Model\r\nRedmi Note 12\r\nCondition\r\nBrand New\r\nBattery Capacity\r\n5000mAh\r\nScreen Size\r\n6.67inches\r\nStock\r\n5\r\nShips From\r\nMalate, Metro Manila'),
(20, 6, 'Plus Size Stretch Panty', 'normal_draw', 'Women', 10, 2.00, 0, 100, 0, 1, '../uploads/products/P20/01.jfif', '../uploads/products/P20/01.jfif', '../uploads/products/P20/02.jfif', '../uploads/products/P20/03.jfif', '../uploads/products/P20/04.jfif', '../uploads/products/P20/05.jfif', '../uploads/products/P20/06.jfif', 'FYI: Items are not thick because it\'s made of pure cotton material.. but comfy to wear and breathable, best for everyday use.\r\n🩲Recomended for handwash and use gentle laundry detergent. \r\n\r\nCotton Mid Waist Panty\r\n\r\n✔GOOD QUALITY\r\n✔ON HAND ALL ITEMS\r\n✔DIRECT SUPPLIER\r\n✔LOWEST PRICE WITH HIGH QUALITY PRODUCT\r\n✔EVERYDAY SHIPPING\r\n\r\n✔All item is properly checked before Ship out for a hasstle free transaction (whenever you found a damage or any problem with your purchase, kindly send us a message directly so we can resolve it to avoid sending bad comment/reviews because this doesn\'t help resolve the issue) 😊\r\n\r\n🔴 📏Size CHART (waistline)   (HIPS)\r\n             Small              23 - 24\"       31-32\"\r\n             Medium         25 - 26\"       33-34\"\r\n             Large              27 - 28\"       35-36\'\r\n             XL                   29 - 30\"        37-38\"\r\n             2XL                 31 - 32\"        39-40\"\r\n\r\n🔴 high quality cotton texture, stretchable\r\n\r\nCheck Customers reviews first before placing order, to avoid too much expectationFYI: Items are not thick because it\'s made of pure cotton material.. but comfy to wear and breathable, best for everyday use.\r\n🩲Recomended for handwash and use gentle laundry detergent. \r\n\r\nCotton Mid Waist Panty\r\n\r\n✔GOOD QUALITY\r\n✔ON HAND ALL ITEMS\r\n✔DIRECT SUPPLIER\r\n✔LOWEST PRICE WITH HIGH QUALITY PRODUCT\r\n✔EVERYDAY SHIPPING\r\n\r\n✔All item is properly checked before Ship out for a hasstle free transaction (whenever you found a damage or any problem with your purchase, kindly send us a message directly so we can resolve it to avoid sending bad comment/reviews because this doesn\'t help resolve the issue) 😊\r\n\r\n🔴 📏Size CHART (waistline)   (HIPS)\r\n             Small              23 - 24\"       31-32\"\r\n             Medium         25 - 26\"       33-34\"\r\n             Large              27 - 28\"       35-36\'\r\n             XL                   29 - 30\"        37-38\"\r\n             2XL                 31 - 32\"        39-40\"\r\n\r\n🔴 high quality cotton texture, stretchable\r\n\r\nCheck Customers reviews first before placing order, to avoid too much expectation', 'Category\r\nShopee\r\nMobiles & Gadgets\r\nMobiles\r\nXiaomi\r\nBrand\r\nXiaomi\r\nWarranty Type\r\nSupplier Warranty\r\nWarranty Duration\r\n12 Months\r\nNumber of SIM Card Slots\r\n2\r\nNumber of Primary Cameras\r\n>3\r\nMobile Phone Features\r\nExpandable Memory, Fingerprint Sensor, GPS, Touchscreen, Wifi\r\nPhone Type\r\nSmart Phone\r\nSupported Operating System\r\nAndroid\r\nMobile Cable Type\r\nType C\r\nProcessor Type\r\nQualcomm Snapdragon 685\r\nPhone Model\r\nRedmi Note 12\r\nCondition\r\nBrand New\r\nBattery Capacity\r\n5000mAh\r\nScreen Size\r\n6.67inches\r\nStock\r\n5\r\nShips From\r\nMalate, Metro Manila');

-- --------------------------------------------------------

--
-- Table structure for table `raffle_winners`
--

CREATE TABLE `raffle_winners` (
  `WinnerID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `IsDelivered` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `raffle_winners`
--

INSERT INTO `raffle_winners` (`WinnerID`, `UserID`, `ProductID`, `Status`, `IsDelivered`) VALUES
(2, 2, 2, 'Preparing to ship by seller', 0),
(3, 4, 3, 'Preparing to ship by seller', 0),
(4, 1, 6, 'Preparing to ship by seller', 0),
(5, 2, 3, 'Preparing to ship by seller', 0),
(6, 1, 2, 'Preparing to ship by seller', 0),
(7, 1, 1, 'Preparing to ship by seller', 0),
(8, 1, 3, 'Preparing to ship by seller', 0),
(9, 4, 6, 'Preparing to ship by seller', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `UserID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`UserID`, `username`, `email`, `password`, `first_name`, `last_name`, `mobile`) VALUES
(1, 'admin', 'ralphfabian30@gmail.com', '$2y$10$cyVw4WIK0/A18FbFVIAPwOfGuFvqLCIunTRzo.qTS0nxGIfQoOPoS', 'Ralph Edcel', 'Fabian', '09619173404'),
(2, 'test', 'rh.catherinef@gmail.com', '$2y$10$HTRIuUOBOZdQiiM7feyl4eK2H7frZ1rrag0zjdFglB6Wz1wDC7uQO', 'Rhea', 'Fabian', '09776550251'),
(3, 'Peter', 'peterparker@gmail.com', '$2y$10$dBGxBEnGOd1CkOpLwaltjO4QRIW3.R.YESfDwvPC/5Kl/thVCN5Ym', 'Peter', 'Laporre', '09619173404'),
(4, 'Seller1', 'fabianedward17@yahoo.com', '$2y$10$fjEq7QquRq42C/xueWKU5efevEtD.Yt2RhlvXZde.17uvjYPEo87m', 'Ralph Edcel', 'Fabian', '09619173404'),
(5, 'Seller2', 'rheafabia@gmail.com', '$2y$10$NxaG7mCGWCycywo79FnqnuIrM42HpdeFuPiSFBTwWpdd85jDJid/u', 'Rhea', 'Fabian', '09776550251'),
(6, 'Seller3', 'reFabian@mcm.edu.ph', '$2y$10$aUdTX.ozc3knLmy4QI9VwubTvKevEwfQ7BcobhuQHaSjh5/ibig3m', 'Donald', 'Trump', '09619173404');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `AddressID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `shipping_specific` varchar(255) DEFAULT NULL,
  `shipping_barangay` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_region` varchar(255) DEFAULT NULL,
  `shipping_country` varchar(255) DEFAULT NULL,
  `dropoff_specific` varchar(255) DEFAULT NULL,
  `dropoff_barangay` varchar(255) DEFAULT NULL,
  `dropoff_city` varchar(255) DEFAULT NULL,
  `dropoff_region` varchar(255) DEFAULT NULL,
  `dropoff_country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`AddressID`, `UserID`, `shipping_specific`, `shipping_barangay`, `shipping_city`, `shipping_region`, `shipping_country`, `dropoff_specific`, `dropoff_barangay`, `dropoff_city`, `dropoff_region`, `dropoff_country`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `raffle_cart`
--
ALTER TABLE `raffle_cart`
  ADD PRIMARY KEY (`CartID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `raffle_products`
--
ALTER TABLE `raffle_products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `raffle_winners`
--
ALTER TABLE `raffle_winners`
  ADD PRIMARY KEY (`WinnerID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`AddressID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `raffle_cart`
--
ALTER TABLE `raffle_cart`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `raffle_products`
--
ALTER TABLE `raffle_products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `raffle_winners`
--
ALTER TABLE `raffle_winners`
  MODIFY `WinnerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `AddressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `raffle_cart`
--
ALTER TABLE `raffle_cart`
  ADD CONSTRAINT `raffle_cart_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user_accounts` (`UserID`),
  ADD CONSTRAINT `raffle_cart_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `raffle_products` (`ProductID`);

--
-- Constraints for table `raffle_products`
--
ALTER TABLE `raffle_products`
  ADD CONSTRAINT `raffle_products_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user_accounts` (`UserID`);

--
-- Constraints for table `raffle_winners`
--
ALTER TABLE `raffle_winners`
  ADD CONSTRAINT `raffle_winners_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user_accounts` (`UserID`),
  ADD CONSTRAINT `raffle_winners_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `raffle_products` (`ProductID`);

--
-- Constraints for table `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `user_address_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user_accounts` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
