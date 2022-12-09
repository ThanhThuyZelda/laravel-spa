-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 10:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2022_10_01_132359_create_tb_user_admin_table', 1),
(12, '2022_10_04_163142_create_tb_room_table', 1),
(13, '2022_10_13_153623_create_tb_position_table', 2),
(18, '2022_10_18_055951_create_tb_staff_table', 3),
(19, '2022_10_24_142319_create_tb_service_type_table', 4),
(27, '2022_10_24_152521_create_tb_service_table', 5),
(28, '2022_11_03_152556_tb_customer_table', 5),
(29, '2022_11_03_154049_create_tb_customer_table', 6),
(32, '2022_11_03_155140_create_tb_booking_table', 7),
(36, '2022_11_04_140022_create_tb_news_table', 8),
(39, '2022_11_05_012233_create_tb_feedback_table', 9),
(45, '2022_11_07_042213_create_tb_advise_table', 10),
(51, '2022_11_07_084255_create_tb_bill_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_advise`
--

CREATE TABLE `tb_advise` (
  `TV_id` int(10) UNSIGNED NOT NULL,
  `TV_hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TV_sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TV_ttd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TV_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa xác nhận',
  `DV_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_advise`
--

INSERT INTO `tb_advise` (`TV_id`, `TV_hoten`, `TV_sdt`, `TV_ttd`, `TV_active`, `DV_id`, `created_at`, `updated_at`) VALUES
(1, 'Hồ Nam Phương', '0329032000', 'nam', 'Chưa xác nhận', 1, '2022-11-09 23:31:15', '2022-12-02 07:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bill`
--

CREATE TABLE `tb_bill` (
  `HD_id` int(10) UNSIGNED NOT NULL,
  `HD_tratruoc` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `HD_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa thanh toán',
  `DL_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_bill`
--

INSERT INTO `tb_bill` (`HD_id`, `HD_tratruoc`, `HD_active`, `DL_id`, `created_at`, `updated_at`) VALUES
(1, 30000, 'Chưa thanh toán', 4, NULL, NULL),
(2, 5001, 'Còn nợ', 2, '2022-11-07 03:27:16', '2022-11-07 04:17:36'),
(4, 20000, 'Chưa thanh toán', 4, '2022-12-06 23:52:18', '2022-12-06 23:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `DL_id` int(10) UNSIGNED NOT NULL,
  `DL_hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DL_sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DL_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DL_diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DL_thoigian` datetime NOT NULL,
  `DL_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa xác nhận',
  `DV_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`DL_id`, `DL_hoten`, `DL_sdt`, `DL_email`, `DL_diachi`, `DL_thoigian`, `DL_active`, `DV_id`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thị Bé Hai', '0356789012', 'behai@gmail.com', 'Long An', '2022-11-04 14:04:31', 'Đã xác nhận', 5, NULL, '2022-11-06 21:13:04'),
(2, 'Dương Duy Long', '0934567124', 'duylong@gmail.com', 'Đồng Tháp', '2022-11-10 10:26:00', 'Đã xong', 1, '2022-11-04 06:23:08', '2022-11-24 08:26:36'),
(4, 'Trần Huy Thành', '0302012000', 'ththanh@gmail.com', 'Đồng Tháp', '2022-11-16 14:00:00', 'Đang phục vụ', 5, '2022-11-06 21:12:42', '2022-11-06 21:12:55'),
(6, 'Phạm Thị Ngọc Hà', '0976983415', 'ha@gmail.com', 'Đồng Tháp', '2022-11-23 20:37:00', 'Chưa xác nhận', 2, '2022-11-11 06:37:24', '2022-11-24 08:27:12'),
(8, 'Phan Thanh Tuấn', '0356789012', 'tuan@gmail.com', 'Hà Nội', '2022-12-01 22:28:00', 'Đã xác nhận', 4, '2022-11-24 08:29:06', '2022-11-24 08:29:34'),
(9, 'Phan Thanh Thư', '0934567124', 'ptt@gmail.com', 'Đồng Tháp', '2022-11-29 13:40:00', 'Chưa xác nhận', 6, '2022-11-26 22:39:05', '2022-11-26 22:39:05'),
(10, 'Phan Thị Thanh Thùy', '0934567124', 'thanhthuy@gmail.com', 'Đồng Tháp', '2022-12-28 07:30:00', 'Chưa xác nhận', 3, '2022-11-28 03:40:51', '2022-11-28 03:40:51'),
(11, 'Nguyễn Thị Bé Hai', '0976983412', 'ththanh@gmail.com', 'Đồng Tháp', '2022-12-28 16:46:00', 'Chưa xác nhận', 6, '2022-12-06 23:46:26', '2022-12-06 23:46:26'),
(12, 'Nguyễn Thị Bé Hai', '0976983412', 'ththanh@gmail.com', 'Đồng Tháp', '2022-12-28 16:46:00', 'Chưa xác nhận', 6, '2022-12-06 23:46:26', '2022-12-06 23:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `PH_id` int(10) UNSIGNED NOT NULL,
  `PH_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PH_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PH_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PH_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_feedback`
--

INSERT INTO `tb_feedback` (`PH_id`, `PH_fullname`, `PH_service`, `PH_img`, `PH_content`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thanh Nam', 'Điều trị mụn', '1667702921seo9.JPG', 'Rất ok, phục vụ tận tình, da đã đỡ hơn nhiều so với ban đầu.', '2022-11-05 19:48:41', '2022-11-05 19:48:41'),
(2, 'Võ Ngọc Linh', 'Triệt lông', '1667703038seo8.JPG', 'lông không mọc lại', '2022-11-05 19:50:38', '2022-11-05 19:50:38'),
(3, 'Phạm Huyền Thanh', 'Giảm mỡ', '1667703209mo4.JPG', 'Là một người phụ nữ yêu cái đẹp và sự hoàn hảo, tôi luôn khắt khe trong việc lựa chọn mỹ phẩm cho kết quả tốt mà vẫn luôn an toàn.', '2022-11-05 19:53:29', '2022-11-05 19:53:29'),
(4, 'Võ Ngọc Linh', 'Tắm trắng da phi thuyền', '1669303976cssau7.JPG', 'Có hiệu quả sau vài tháng, cần phải chăm sóc thật kỹ da mới đẹp lên được. Phục vụ tận tình, sẽ quay lại ủng hộ tiếp.', '2022-11-24 08:32:56', '2022-11-24 08:32:56'),
(5, 'Võ Ngọc Linh', 'Tắm trắng da phi thuyền', '1670395798bai2_2_1669308912.JPG', 'fghj', '2022-12-06 23:49:59', '2022-12-06 23:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `TT_id` int(10) UNSIGNED NOT NULL,
  `TT_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TT_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TT_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TT_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NV_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`TT_id`, `TT_img`, `TT_name`, `TT_des`, `TT_content`, `NV_id`, `created_at`, `updated_at`) VALUES
(1, '1669309554bai2_1.JPG', '7+ cách chăm sóc da bằng sữa chua hiệu quả nhất', 'Sữa chua là một món ăn khá quen thuộc với nhiều người giúp lợi khuẩn, rất tốt cho sức khỏe. Nếu biết cách sử dụng sữa chua trong chăm sóc da sẽ mang đến một làn da mịn màng bất ngờ. Bài viết đề cập đến cách chăm sóc da bằng sữa chua hiệu quả tại nhà bằng cách kết hợp với các nguyên liệu tự nhiên.', '<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:18px\"><strong>1. Lợi &iacute;ch của việc chăm s&oacute;c da bằng sữa chua</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Đắp sữa chua trực tiếp l&ecirc;n da c&oacute; t&aacute;c dụng nu&ocirc;i dưỡng l&agrave;n da trở n&ecirc;n trắng mịn, tươi trẻ rạng rỡ nhờ v&agrave;o hoạt t&iacute;nh dịu nhẹ v&agrave; th&acirc;n thiện với l&agrave;n da c&oacute; trong sữa chua. Chăm s&oacute;c da bằng sữa chua kh&ocirc;ng đường l&agrave; biện ph&aacute;p l&yacute; tưởng d&agrave;nh cho những c&ocirc; n&agrave;ng c&oacute; l&agrave;n da nhạy cảm v&agrave; dễ k&iacute;ch ứng.</p>\r\n\r\n<p style=\"text-align:justify\">H&atilde;y c&ugrave;ng điểm qua c&aacute;c lợi &iacute;ch dưỡng da bằng sữa chua:</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Giảm vết th&acirc;m mụn tr&ecirc;n da hiệu quả.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; C&aacute;c acid lactic của sữa chua c&oacute; t&aacute;c dụng l&agrave;m mịn da.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Chứa rất nhiều vitamin A, B1, B2, C, đặc biệt l&agrave; vitamin E nu&ocirc;i dưỡng da từ b&ecirc;n trong.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Th&uacute;c đẩy qu&aacute; tr&igrave;nh trao đổi chất gi&uacute;p da trắng mịn hơn.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; C&aacute;c chất chống oxy h&oacute;a gi&uacute;p cho l&agrave;n da khỏe mạnh.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai2_1_1669308879.JPG\" style=\"height:503px; width:810px\" /></p>\r\n\r\n<p style=\"text-align:center\">Chăm s&oacute;c da bằng sữa chua mang đến nhiều lợi &iacute;ch đ&aacute;ng kể</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:18px\"><strong>2. C&aacute;ch chăm s&oacute;c da bằng sữa chua</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Nếu lo sợ c&aacute;c th&agrave;nh phần h&oacute;a chất c&oacute; trong c&aacute;c loại mỹ phẩm g&acirc;y hại cho da, bạn c&oacute; thể chăm s&oacute;c da mặt bằng sữa chua kh&ocirc;ng đường vừa l&agrave;nh t&iacute;nh vừa mang đến cảm gi&aacute;c m&aacute;t lạnh, dễ chịu. Sau đ&acirc;y l&agrave; những b&iacute; quyết chăm s&oacute;c da bằng sữa chua hiệu quả tại nh&agrave;:</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#2980b9\"><strong><span style=\"font-size:16px\">2.1. Chăm s&oacute;c da bằng sữa chua nguy&ecirc;n chất</span></strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Đ&acirc;y l&agrave; c&aacute;ch chăm s&oacute;c da bằng sữa chua đơn giản nhất, ph&ugrave; hợp cho những chị em bận rộn m&agrave; vẫn muốn c&oacute; một l&agrave;n da khỏe khoắn v&agrave; mịn m&agrave;ng.</p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;ch thực hiện đơn giản như sau:</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Chuẩn bị một hũ sữa chua kh&ocirc;ng đường.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Rửa mặt thật sạch v&agrave; lau kh&ocirc;.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Thoa sữa chua đều l&ecirc;n mặt v&agrave; để y&ecirc;n trong khoảng 15 &ndash; 20 ph&uacute;t.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Rửa lại mặt bằng nước ấm.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Thực hiện 2 &ndash; 3 lần/tuần để mang lại hiệu quả cao nhất.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai2_2_1669308912.JPG\" style=\"height:536px; width:804px\" /></p>\r\n\r\n<p style=\"text-align:center\">Chăm s&oacute;c da bằng sữa chua nguy&ecirc;n chất</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#2980b9\"><span style=\"font-size:16px\"><strong>2.2. Chăm s&oacute;c da bằng sữa chua v&agrave; chanh</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Chanh với khả năng tẩy đi lớp tế b&agrave;o chết tr&ecirc;n da, gi&uacute;p loại bỏ bụi bẩn ra khỏi da mặt, gi&uacute;p da sạch khỏe, hạn chế ph&aacute;t sinh mụn.</p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;ch thực hiện như sau:</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Vắt &frac14; tr&aacute;i chanh v&agrave;o hũ sữa chua kh&ocirc;ng đường, sau đ&oacute; trộn đều hỗn hợp.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Thoa hỗn hợp l&ecirc;n mặt kết hợp massage cho dưỡng chất thấm đều v&agrave;o da.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Để y&ecirc;n trong v&ograve;ng 5 &ndash; 7 ph&uacute;t rồi rửa mặt lại với nước lạnh. Tr&aacute;nh để hỗn hợp tr&ecirc;n mặt qu&aacute; l&acirc;u v&igrave; axit c&oacute; trong chanh sẽ l&agrave;m b&agrave;o m&ograve;n da.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai2_3_1669308939.JPG\" style=\"height:488px; width:811px\" /></p>\r\n\r\n<p style=\"text-align:center\">Chăm s&oacute;c da bằng sữa chua v&agrave; chanh</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#2980b9\"><strong>2.3. Chăm s&oacute;c da bằng sữa chua v&agrave; mật ong</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Mật ong c&oacute; khả năng kh&aacute;ng vi&ecirc;m tốt, cung cấp độ ẩm gi&uacute;p c&acirc;n bằng da hiệu quả. Mặt nạ sữa chua mật ong th&iacute;ch hợp cho những chị em c&oacute; l&agrave;n da kh&ocirc;.</p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;ch l&agrave;m mặt nạ sữa chua mật ong như sau:</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Trộn đều mật ong v&agrave; sữa chua theo tỷ lệ (1:1).&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Thoa với liều lượng vừa đủ l&ecirc;n mặt kết hợp massage cho dưỡng chất thấm đều v&agrave;o da.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Để y&ecirc;n trong khoảng từ 10 đến 15 ph&uacute;t sau đ&oacute; rửa lại với nước ấm.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai2_4_1669308961.JPG\" style=\"height:513px; width:809px\" /></p>\r\n\r\n<p style=\"text-align:center\">Chăm s&oacute;c da bằng sữa chua v&agrave; mật ong</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#2980b9\"><span style=\"font-size:16px\"><strong>2.4. Chăm s&oacute;c da bằng sữa chua v&agrave; d&acirc;u t&acirc;y</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">D&acirc;u t&acirc;y kết hợp với sữa chua c&oacute; t&aacute;c dụng tuyệt vời, gi&uacute;p t&aacute;i tạo l&agrave;n da cũng như khả năng chống oxy h&oacute;a, mang đến một l&agrave;n da mịn m&agrave;ng, chắc khỏe.</p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;ch thực hiện đơn giản như sau:</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; T&aacute;n nhỏ 4 tr&aacute;i d&acirc;u t&acirc;y, đem trộn c&ugrave;ng 1 hũ sữa chua kh&ocirc;ng đường.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Thoa hỗn hợp với liều lượng vừa đủ l&ecirc;n mặt.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Massage nhẹ nh&agrave;ng cho dưỡng chất thấm s&acirc;u v&agrave;o da.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Để y&ecirc;n trong khoảng 10 đến 20 ph&uacute;t sau đ&oacute; rửa sạch mặt.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai2_5_1669308991.JPG\" style=\"height:453px; width:805px\" /></p>\r\n\r\n<p style=\"text-align:center\">Chăm s&oacute;c da bằng sữa chua v&agrave; d&acirc;u t&acirc;y</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#2980b9\"><span style=\"font-size:16px\"><strong>2.5. Chăm s&oacute;c da bằng sữa chua v&agrave; dưa leo</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Dưa leo t&iacute;nh m&aacute;t, được sử dụng nhiều trong l&agrave;m đẹp. Dưa leo c&oacute; khả năng l&agrave;m dịu, m&aacute;t những vết vi&ecirc;m, mẩn đỏ. Ch&iacute;nh v&igrave; thế đ&acirc;y l&agrave; c&ocirc;ng thức l&agrave;m mặt nạ sữa chua trị mụn cực hiệu quả.</p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;ch thực hiện đơn giản như sau:</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Xay dưa leo v&agrave; trộn với sữa chua theo tỷ lệ 1:2.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Thoa l&ecirc;n mặt với liều lượng vừa đủ.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Massage theo v&ograve;ng tr&ograve;n từ trong ra ngo&agrave;i cho dưỡng chất thấm v&agrave;o da.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Để y&ecirc;n trong khoảng từ 15 đến 30 ph&uacute;t, sau đ&oacute; rửa mặt với nước sạch.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai2_6_1669309079.JPG\" style=\"height:502px; width:803px\" /></p>\r\n\r\n<p style=\"text-align:center\">Chăm s&oacute;c da bằng sữa chua v&agrave; dưa leo</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#2980b9\"><span style=\"font-size:16px\"><strong>2.6. Chăm s&oacute;c da bằng sữa chua v&agrave; chuối</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Chuối rất gi&agrave;u vitamin C, A, B, E rất tốt cho sức khỏe v&agrave; c&oacute; t&iacute;nh dưỡng ẩm tự nhi&ecirc;n, gi&uacute;p l&agrave;n da mịn m&agrave;ng, tăng độ đ&agrave;n hồi.</p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;ch l&agrave;m mặt nạ sữa chua chuối chống l&atilde;o h&oacute;a da như sau:</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Dằm nửa tr&aacute;i chuối với 1 hũ sữa chua, trộn đều hỗn hợp.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Thoa hỗn hợp l&ecirc;n mặt.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Massage mặt để c&aacute;c dưỡng chất thấm s&acirc;u v&agrave;o da.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Để y&ecirc;n trong khoảng 20 đến 30 ph&uacute;t, sau đ&oacute; rửa mặt sạch.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai2_7_1669309109.JPG\" style=\"height:504px; width:802px\" /></p>\r\n\r\n<p style=\"text-align:center\">Chăm s&oacute;c da bằng sữa chua v&agrave; chuối</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#2980b9\"><span style=\"font-size:16px\"><strong>2.7. Chăm s&oacute;c da bằng sữa chua v&agrave; bơ</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Bơ c&oacute; khả năng l&agrave;m trắng da, giảm vi&ecirc;m, mụn cũng như cung cấp độ ẩm cho da. Đ&acirc;y l&agrave; c&aacute;ch chăm s&oacute;c da bằng sữa chua d&agrave;nh cho c&aacute;c n&agrave;ng da kh&ocirc;.</p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;ch thực hiện như sau:</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Dằm nửa tr&aacute;i bơ trộn c&ugrave;ng 1 hũ sữa chua.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Đắp đều hỗn hợp l&ecirc;n mặt.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Để y&ecirc;n trong khoảng 20 đến 30 ph&uacute;t sau đ&oacute; rửa mặt lại với nước ấm<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai2_8_1669309137.JPG\" style=\"height:511px; width:804px\" /></p>\r\n\r\n<p style=\"text-align:center\">Chăm s&oacute;c da bằng sữa chua v&agrave; bơ<br />\r\n&nbsp;</p>', 4, NULL, '2022-11-24 10:05:54'),
(2, '1669310240bai3_4.JPG', 'Ăn khoai lang có giảm cân không? Nên ăn lúc nào?', 'Khoai lang là một trong những thực phẩm mang đến nhiều lợi ích tuyệt vời cho sức khỏe và sắc đẹp của con người. Chính vì thế, không ít chị em lựa chọn loại củ này để ăn mỗi ngày nhằm có thân hình mảnh mai. Vậy ăn khoai lang có giảm cân không và những lưu ý điều gì khi lựa chọn cách loại bỏ mỡ thừa này? Hãy cùng SPA Center tìm hiểu rõ vấn đề này nhé!', '<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:18px\"><strong>1. Ăn khoai lang c&oacute; giảm c&acirc;n kh&ocirc;ng? Thực phẩm n&agrave;y c&oacute; c&ocirc;ng dụng g&igrave;?</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">C&oacute; phải tự nhi&ecirc;n m&agrave; khoai lang lại trở th&agrave;nh thực phẩm được nhiều người y&ecirc;u th&iacute;ch v&agrave; lựa chọn để chăm s&oacute;c sức khỏe v&agrave; sắc đẹp? C&acirc;u trả lời l&agrave; kh&ocirc;ng! Dưới đ&acirc;y l&agrave; một số l&yacute; do gi&uacute;p loại củ n&agrave;y nhận được đ&aacute;nh gi&aacute; cao về khả năng loại bỏ mỡ thừa trong cơ thể con người.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><strong><span style=\"font-size:16px\">1.1. H&agrave;m lượng Kcal thấp ph&ugrave; hợp để giảm c&acirc;n</span></strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Nếu bạn đang băn khoăn ăn khoai lang t&iacute;m, mật, trắng c&oacute; giảm c&acirc;n kh&ocirc;ng th&igrave; h&atilde;y y&ecirc;n t&acirc;m rằng thực phẩm thật sự sẽ gi&uacute;p bạn lấy lại v&oacute;c d&aacute;ng thon gọn. Bởi v&igrave; trong c&aacute;c loại khoai lang đều chứa h&agrave;m lượng Calo thấp so với gạo hay bột m&igrave;. Kcal ch&iacute;nh l&agrave; một trong những yếu tố quan trọng quyết định đến c&acirc;n nặng của con người. Với 100gr khoai lang sẽ chỉ c&oacute; khoảng 119 Kcal trong khi gạo đ&atilde; chứa 224 Kcal v&agrave; b&aacute;nh m&igrave; th&igrave; 150 Kcal.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:16px\"><strong>1.2. Chứa kh&aacute; &iacute;t đường</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Một trong những l&yacute; do kh&aacute;c gi&uacute;p khoai lang trở th&agrave;nh thực phẩm c&oacute; khả năng gi&uacute;p ngăn ngừa t&iacute;ch trữ mỡ thừa hiệu quả đ&oacute; ch&iacute;nh l&agrave; lượng đường kh&aacute; &iacute;t. Khi bạn ăn loại củ n&agrave;y, cơ thể sẽ kh&ocirc;ng nhận được qu&aacute; nhiều đường, từ đ&oacute; sẽ hạn chế được vấn đề chuyển h&oacute;a đường th&agrave;nh năng lượng, t&iacute;ch trữ th&agrave;nh mỡ thừa ở bụng, đ&ugrave;i v&agrave; c&aacute;nh tay. Kh&ocirc;ng thế, điều n&agrave;y c&ograve;n gi&uacute;p ổn định lượng đường trong m&aacute;u ngăn ngừa mắc bệnh tiểu đường hiệu quả.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai3_1_1669309852.JPG\" style=\"height:572px; width:810px\" /></p>\r\n\r\n<p style=\"text-align:center\">Ăn khoai lang c&oacute; giảm c&acirc;n kh&ocirc;ng?</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:16px\"><strong>1.3. Chất xơ v&agrave; vitamin dồi d&agrave;o</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">So với những thực phẩm kh&aacute;c, th&igrave; khoai lang kh&ocirc;ng chỉ chứa tinh bột m&agrave; c&ograve;n gi&agrave;u chất xơ, vitamin dồi d&agrave;o, phong ph&uacute;. Đ&acirc;y đều l&agrave; những hợp chất c&oacute; lợi cho việc giảm c&acirc;n, tăng cường sức đề kh&aacute;ng cho cơ thể. Đặc biệt, ăn những thực phẩm nhiều chất xơ như khoai lang sẽ c&ograve;n gi&uacute;p tạo cảm gi&aacute;c no l&acirc;u, giảm cơn th&egrave;m ăn hiệu quả, an to&agrave;n đối với cơ thể.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#27ae60\"><strong>1.4. Chứa nhiều nước</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">C&oacute; một điều th&uacute; vị rằng trong khoai lang chứa kh&aacute; nhiều nước. Đ&acirc;y ch&iacute;nh l&agrave; một trong những l&yacute; do tại sao nhiều người bị bệnh t&aacute;o b&oacute;n, kh&oacute; ti&ecirc;u lại lựa chọn ăn loại củ n&agrave;y. Bởi v&igrave; trong khoai lang c&oacute; một lượng nước nhất định, gi&uacute;p phần thịt b&ecirc;n trong rất mềm v&agrave; xốp ngay cả khi bạn nướng ch&iacute;n bằng than cũng kh&ocirc;ng g&acirc;y ra t&igrave;nh trạng bị kh&ocirc;. Do đ&oacute;, khi ăn loại củ n&agrave;y cơ thể sẽ duy tr&igrave; cảm gi&aacute;c no l&acirc;u, trao đổi chất nhanh ch&oacute;ng hơn đặc biệt v&ocirc; c&ugrave;ng dễ ti&ecirc;u h&oacute;a.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai3_2_1669309877.JPG\" style=\"height:582px; width:773px\" /></p>\r\n\r\n<p style=\"text-align:center\">Thực phẩm n&agrave;y c&oacute; c&ocirc;ng dụng g&igrave;?</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:18px\"><strong>2. Ăn khoai lang nướng c&oacute; giảm c&acirc;n kh&ocirc;ng?</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Một trong những c&acirc;u hỏi thường gặp đ&oacute; ch&iacute;nh l&agrave; ăn khoai lang nướng c&oacute; giảm c&acirc;n kh&ocirc;ng, bởi v&igrave; đ&acirc;y l&agrave; m&oacute;n ăn thơm ngon hấp dẫn được nhiều người y&ecirc;u th&iacute;ch. Theo SPA Center, việc chế biến bằng c&aacute;ch sấy hoặc nướng sẽ l&agrave;m mất đi lượng nước, chất xơ, vitamin nhất định trong khoai, như vậy lượng Kcal cũng sẽ giảm chứ kh&ocirc;ng tăng l&ecirc;n. Do đ&oacute; khi ăn thực phẩm n&agrave;y mọi người kh&ocirc;ng cần lo lắng sẽ bị tăng c&acirc;n.</p>\r\n\r\n<p style=\"text-align:justify\">Ch&iacute;nh v&igrave; thế, nếu bạn băn khoăn ăn khoai lang sấy c&oacute; giảm c&acirc;n kh&ocirc;ng th&igrave; b&acirc;y giờ c&oacute; thể y&ecirc;n t&acirc;m rồi nh&eacute;! Tuy nhi&ecirc;n, c&aacute;c chuy&ecirc;n gia của SPA Center vẫn khuyến kh&iacute;ch mọi người n&ecirc;n chọn khoai lang hấp hoặc luộc. Bởi v&igrave; c&aacute;ch chế biến n&agrave;y kh&ocirc;ng l&agrave;m mất đi qu&aacute; nhiều dưỡng chất c&oacute; trong loại củ n&agrave;y.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai3_3_1669309904.JPG\" style=\"height:799px; width:801px\" /></p>\r\n\r\n<p style=\"text-align:center\">Ăn khoai lang nướng c&oacute; giảm c&acirc;n kh&ocirc;ng?</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:18px\"><strong>3. N&ecirc;n ăn khoai lang như thế n&agrave;o để giảm c&acirc;n hiệu quả?</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Thay v&igrave; bạn băn khoai lang Nhật c&oacute; giảm c&acirc;n kh&ocirc;ng th&igrave; h&atilde;y quan t&acirc;m đến việc ăn khoai như thế n&agrave;o để vừa c&oacute; được sức khỏe tốt lại vừa sở hữu v&oacute;c d&aacute;ng thon gọn, mảnh mai v&agrave; xinh đẹp. Bởi v&igrave; hầu hết c&aacute;c loại khoai đều mang đến c&ocirc;ng dụng giảm c&acirc;n, tuy nhi&ecirc;n nếu ăn kh&ocirc;ng đ&uacute;ng c&aacute;ch sẽ chẳng mang lại hiệu quả cao như mong muốn.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#27ae60\"><strong>3.1. Thời điểm ăn khoai lang mang lại hiệu quả cho việc giảm c&acirc;n</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Nếu muốn giảm c&acirc;n hiệu quả bằng việc ăn khoai lang t&iacute;m, mật th&igrave; bạn cần phải biết thời điểm hợp l&yacute; để ăn. Một ng&agrave;y c&oacute; 3 bữa ch&iacute;nh th&igrave; bạn chỉ n&ecirc;n d&ugrave;ng khoai lang v&agrave;o buổi s&aacute;ng hoặc trưa, hạn chế ăn v&agrave;o bữa tối. Đặc biệt điều n&agrave;y rất quan trọng với những người bị bệnh thận hay c&oacute; nguy cơ mắc sỏi thận cao.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:16px\"><strong>3.2. Số lượng khoai lang ăn mỗi ng&agrave;y</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng phải bạn ăn c&agrave;ng nhiều khoai lang th&igrave; sẽ c&agrave;ng giảm c&acirc;n hiệu quả, m&agrave; thực tế chỉ l&agrave; bạn n&ecirc;n thay thế gạo hay bột m&igrave; hoặc khoai. Ch&iacute;nh v&igrave; vậy, mỗi một bữa ăn kh&ocirc;ng n&ecirc;n ăn qu&aacute; 2 củ khoai lang lớn. Bạn c&ograve;n cần kết hợp th&ecirc;m nhiều thực phẩm kh&aacute;c ăn k&egrave;m như rau xanh, hoa quả tươi, c&aacute; hay thịt ức g&agrave; nhằm bổ sung đầy đủ c&aacute;c chất dinh dưỡng như Protein, chất xơ, vitamin cho cơ thể.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/bai3_4_1669310225.JPG\" style=\"height:536px; width:802px\" /></p>\r\n\r\n<p style=\"text-align:center\">N&ecirc;n ăn khoai lang như thế n&agrave;o để giảm c&acirc;n hiệu quả?<br />\r\n<br />\r\n&nbsp;</p>', 2, '2022-11-04 09:39:23', '2022-11-24 10:17:20'),
(4, '1669308549bai1.JPG', 'Top 5+ thuốc trị sẹo thâm ở chân tốt nhất', 'Tình trạng thâm ở trên chân xuất phát từ những vết thương hở không chăm sóc tốt, dẫn đến phản ứng viêm, tổn thương trên da. Tuy nhiên, sẹo thâm trên chân nếu được chăm sóc kỹ càng, các sợi collagen phục hồi trở lại, sẽ giảm bớt các triệu chứng trên. Chính vì thế, SPA CENTER muốn chia sẻ đến mọi người top 5 thuốc trị sẹo thâm ở chân đang thịnh hành nhất hiện nay ở dưới bài viết, mọi người hãy tham khảo nhé!', '<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:18px\"><strong>1. Kem trị sẹo th&acirc;m ở ch&acirc;n Scar Esthetique</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Thuốc trị sẹo th&acirc;m Scar Esthetique l&agrave; một trong những sản phẩm đầu ti&ecirc;n SPA Center review cho bạn. Bắt nguồn từ thương hiệu h&agrave;ng đầu của Hoa Kỳ &ndash; Rejuvaskin, kem trị sẹo th&acirc;m ở ch&acirc;n n&agrave;y xuất hiện tr&ecirc;n 100 quốc gia kh&aacute;c nhau v&agrave; được nhiều bệnh viện, nh&agrave; thuốc,&hellip; sử dụng trong qu&aacute; tr&igrave;nh điều trị cho bệnh nh&acirc;n.</p>\r\n\r\n<p style=\"text-align:justify\">Ưu điểm:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Hỗ trợ giảm thiểu vết th&acirc;m chỉ sau v&agrave;i tuần sử dụng.</li>\r\n	<li style=\"text-align:justify\">Gia tăng collagen, g&oacute;p phần th&uacute;c đẩy việc t&aacute;i tạo, phục hồi những tổn thương tr&ecirc;n da.</li>\r\n	<li style=\"text-align:justify\">Chứa nhiều th&agrave;nh phần vitamin C, chất chống oxy h&oacute;a cải thiện t&igrave;nh trạng vết th&acirc;m, l&agrave;m s&aacute;ng da.</li>\r\n	<li style=\"text-align:justify\">G&oacute;p phần kh&aacute;ng khuẩn, l&agrave;m l&agrave;nh da non, đẩy l&ugrave;i cảm gi&aacute;c ngứa ng&aacute;y kh&oacute; chịu.</li>\r\n	<li style=\"text-align:justify\">Thời gian liền sẹo nhanh ch&oacute;ng.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Nhược điểm: Dễ xuất hiện h&agrave;ng giả, k&eacute;m chất lượng n&ecirc;n người ti&ecirc;u d&ugrave;ng n&ecirc;n cẩn thận khi mua.</p>\r\n\r\n<p style=\"text-align:justify\">Gi&aacute; th&agrave;nh: 400.000 đồng/ tu&yacute;p 10ml, 650.000 đồng/ tu&yacute;p 30ml, 1.200.000 đồng/ tu&yacute;p 60ml.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/kem1_1669307839.JPG\" style=\"height:684px; width:478px\" /></p>\r\n\r\n<p style=\"text-align:center\">Kem trị sẹo th&acirc;m ở ch&acirc;n Scar Esthetique</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:18px\"><strong>2. Kem trị sẹo th&acirc;m ở ch&acirc;n nhanh nhất</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Contractubex Contractubex l&agrave; loại thuốc trị sẹo th&acirc;m ở ch&acirc;n hiệu quả tiếp theo đang được nhiều người y&ecirc;u th&iacute;ch. Nhờ sở hữu những th&agrave;nh phần hoạt chất đa dạng n&ecirc;n sản phẩm đẩy l&ugrave;i vết sẹo nhanh ch&oacute;ng, phục hồi l&agrave;n da hiệu quả hơn.</p>\r\n\r\n<p style=\"text-align:justify\">Ưu điểm:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Giảm thiểu vết sẹo th&acirc;m sau v&agrave;i th&aacute;ng sử dụng, th&uacute;c đẩy tế b&agrave;o da mới ho&agrave;n th&agrave;nh.</li>\r\n	<li style=\"text-align:justify\">Đẩy l&ugrave;i t&igrave;nh trạng ngứa ng&aacute;y, kh&oacute; chịu khi da non.</li>\r\n	<li style=\"text-align:justify\">Bảo vệ l&agrave;n da khỏi t&aacute;c nh&acirc;n sẹo, giảm thiểu t&aacute;c nh&acirc;n của m&ocirc;i trường.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Nhược điểm: Thuốc trị sẹo th&acirc;m c&oacute; thể g&acirc;y ra một số t&aacute;c dụng phụ kh&aacute;c như r&aacute;t da, mề đay, ban đỏ,&hellip; n&ecirc;n người d&ugrave;ng cần sử dụng ch&uacute;ng trước l&ecirc;n tay.</p>\r\n\r\n<p style=\"text-align:justify\">Gi&aacute; th&agrave;nh: 200.000 &ndash; 340.000 t&ugrave;y dung t&iacute;ch.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/kem2_1669307930.JPG\" style=\"height:531px; width:801px\" /></p>\r\n\r\n<p style=\"text-align:center\">Kem trị sẹo th&acirc;m ở ch&acirc;n nhanh nhất Contractubex</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:18px\"><strong>3. Kem trị sẹo th&acirc;m ở ch&acirc;n&nbsp;</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Hiruscar Hiruscar l&agrave; thuốc trị sẹo được chế xuất bằng c&ocirc;ng nghệ đặc biệt, hỗ trợ giảm thiểu sẹo th&acirc;m đ&aacute;ng kể. Đ&acirc;y l&agrave; sản phẩm được nhiều người ưa chuộng nhất thời gian gần đ&acirc;y m&agrave; SPA Center muốn gửi đến bạn.</p>\r\n\r\n<p style=\"text-align:justify\">Ưu điểm:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Sở hữu nhiều th&agrave;nh phần thi&ecirc;n nhi&ecirc;n l&agrave;nh t&iacute;nh như nha đam, allantoin, allium cepa,&hellip; g&oacute;p phần giảm thiểu sẹo th&acirc;m hiệu quả.</li>\r\n	<li style=\"text-align:justify\">Những hoạt chất kh&aacute;c hỗ trợ cải thiện độ đ&agrave;n hồi, gi&uacute;p l&agrave;n da căng mịn như vitamin B3, E,&hellip;</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Nhược điểm: T&aacute;c dụng của sản phẩm xuất hiện sau một thời gian d&agrave;i sử dụng, đ&ograve;i hỏi người d&ugrave;ng ki&ecirc;n tr&igrave;.</p>\r\n\r\n<p style=\"text-align:justify\">Gi&aacute; th&agrave;nh: 60.000 đồng/ tu&yacute;p 25g.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/kem3_1669307994.JPG\" style=\"height:451px; width:798px\" /></p>\r\n\r\n<p style=\"text-align:center\">Kem trị sẹo th&acirc;m ở ch&acirc;n&nbsp;Hiruscar</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:18px\"><strong>4. Kem trị sẹo th&acirc;m ở ch&acirc;n Dermatix</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Nhắc đến kem trị sẹo th&acirc;m ở ch&acirc;n, kh&ocirc;ng thể bỏ qua Dermatix. Được điều chế bằng c&ocirc;ng nghệ CPX hiện đại, sản phẩm nhanh ch&oacute;ng đẩy l&ugrave;i t&igrave;nh trạng th&acirc;m, giảm thiểu k&iacute;ch ứng cho da.</p>\r\n\r\n<p style=\"text-align:justify\">Ưu điểm:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Giảm thiểu vết th&acirc;m tr&ecirc;n ch&acirc;n một c&aacute;ch nhanh ch&oacute;ng, đẩy l&ugrave;i sự ngứa ng&aacute;y kh&oacute; chịu khi l&ecirc;n da non.</li>\r\n	<li style=\"text-align:justify\">Th&uacute;c đẩy sản sinh tế b&agrave;o da mới, bảo vệ da khỏi t&aacute;c động của &aacute;nh nắng mặt trời.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Nhược điểm: Những sẹo nhỏ h&igrave;nh th&agrave;nh tr&ecirc;n da t&aacute;c dụng giảm thiểu nhanh ch&oacute;ng, c&ograve;n những vết l&acirc;u năm phải sử dụng trong thời gian d&agrave;i mới điều trị hết.</p>\r\n\r\n<p style=\"text-align:justify\">Gi&aacute; th&agrave;nh: 189.000 đồng/ tu&yacute;p 7g v&agrave; 295.000 đồng/ tu&yacute;p 15g.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/kem4_1669308052.JPG\" style=\"height:812px; width:805px\" /></p>\r\n\r\n<p style=\"text-align:center\">Kem trị sẹo th&acirc;m ở ch&acirc;n Dermatix</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#27ae60\"><span style=\"font-size:18px\"><strong>5. Dermalotus &ndash; Kem trị sẹo l&acirc;u năm</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Review kem trị sẹo l&acirc;u năm, SPA Center xin giới thiệu đến Dermalotus trong danh s&aacute;ch sản phẩm n&ecirc;n d&ugrave;ng. Nhờ sở hữu c&aacute;c th&agrave;nh phần ch&iacute;nh Cyclic, vitamin C n&ecirc;n ch&uacute;ng được nhiều người sử dụng để điều trị vết th&acirc;m, sạm tr&ecirc;n ch&acirc;n hiệu quả.</p>\r\n\r\n<p style=\"text-align:justify\">Ưu điểm:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Gi&aacute; th&agrave;nh thấp, ph&ugrave; hợp với đối tượng b&igrave;nh d&acirc;n.</li>\r\n	<li style=\"text-align:justify\">Hỗ trợ giảm thiểu sẹo th&acirc;m tr&ecirc;n da một c&aacute;ch hiệu quả.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Nhược điểm: Cần thời gian sử dụng d&agrave;i mới c&oacute; kết quả đ&aacute;ng kể.</p>\r\n\r\n<p style=\"text-align:justify\">Gi&aacute; th&agrave;nh 245.000 đồng.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/kem5_1669308107.JPG\" style=\"height:290px; width:777px\" /></p>\r\n\r\n<p style=\"text-align:center\">Dermalotus &ndash; Kem trị sẹo l&acirc;u năm<br />\r\n<br />\r\n&nbsp;</p>', 11, '2022-11-24 09:32:39', '2022-11-24 09:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_position`
--

CREATE TABLE `tb_position` (
  `CV_id` int(10) UNSIGNED NOT NULL,
  `CV_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_position`
--

INSERT INTO `tb_position` (`CV_id`, `CV_name`, `created_at`, `updated_at`) VALUES
(1, 'Giám đốc', '2022-10-13 09:41:29', '2022-10-13 09:41:55'),
(2, 'Thu Ngân', '2022-10-13 09:42:04', '2022-10-13 09:42:04'),
(3, 'Kỷ thuật viên', '2022-10-13 09:42:09', '2022-10-13 09:42:18'),
(6, 'Tiếp tân', '2022-10-13 09:44:49', '2022-10-13 09:44:49'),
(8, 'Bác sĩ', '2022-11-24 08:14:45', '2022-11-24 08:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `room_id` int(10) UNSIGNED NOT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_room`
--

INSERT INTO `tb_room` (`room_id`, `room_name`, `created_at`, `updated_at`) VALUES
(1, 'Phòng họp', NULL, '2022-11-24 08:11:18'),
(3, 'Phòng hành chính', '2022-10-10 02:25:55', '2022-11-24 08:11:40'),
(5, 'Phòng chăm sóc 1', '2022-10-10 02:28:17', '2022-11-24 08:11:53'),
(6, 'Phòng chăm sóc 2', '2022-10-10 02:28:36', '2022-11-24 08:12:04'),
(7, 'Phòng chăm sóc 3', '2022-10-10 07:16:20', '2022-11-24 08:12:14'),
(8, 'Phòng VIP 1', '2022-10-10 07:16:50', '2022-11-24 08:12:32'),
(9, 'Phòng VIP2', '2022-10-10 07:17:17', '2022-11-24 08:12:49'),
(10, 'Phòng tiếp khách', '2022-10-10 07:17:52', '2022-11-24 08:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `DV_id` int(10) UNSIGNED NOT NULL,
  `DV_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dv_gia` bigint(20) UNSIGNED NOT NULL,
  `DV_mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DV_nd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`DV_id`, `DV_name`, `Dv_gia`, `DV_mota`, `DV_nd`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'Điều trị mụn', 599000, 'Điều trị mụn là vấn đề rất nhiều người quan tâm, mong muốn loại bỏ những nốt mụn xấu xí, gây mất thẩm mỹ trên gương mặt, cải thiện sức khỏe làn da tốt hơn. Vậy bạn đã biết đến phương pháp điều trị mụn chuyên sâu tại SPA Center chưa? Tham khảo bài viết bên dưới ngay nhé!', '<p><span style=\"font-size:18px\"><strong><span style=\"color:#e67e22\">1. Nguy&ecirc;n nh&acirc;n g&acirc;y ra mụn l&agrave; g&igrave;</span></strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Tr&ecirc;n thực tế, c&oacute; v&ocirc; số kể l&yacute; do g&acirc;y ra mụn tr&ecirc;n da tuy nhi&ecirc;n theo c&aacute;c chuy&ecirc;n gia da liễu th&igrave; c&oacute; 5 nguy&ecirc;n nh&acirc;n g&acirc;y ra mụn phổ biển như sau: Do yếu tố di truyền. Do tuổi dậy th&igrave;, hoặc rối loạn nội tiết tố ở phụ nữ mang thai. Do lạm dụng sử dụng qu&aacute; nhiều mỹ phẩm. Do kh&ocirc;ng chăm s&oacute;c da đ&uacute;ng c&aacute;ch, sử dụng mỹ phẩm ph&ugrave; hợp. Mặt kh&aacute;c, c&ograve;n do stress, thức khuya, ăn nhiều thực phẩm chi&ecirc;n/n&oacute;ng, sử dụng chất k&iacute;ch th&iacute;ch, sống trong m&ocirc;i trường &ocirc; nhiễm,&hellip;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun1_1669304658.JPG\" style=\"height:674px; width:1009px\" /><br />\r\nMụn l&agrave; nổi &aacute;m ảnh, tự ti của hầu hết ph&aacute;i đẹp.</p>\r\n\r\n<p><br />\r\n<span style=\"font-size:18px\"><strong><span style=\"color:#e67e22\">2. Quy tr&igrave;nh điều trị mụn chuy&ecirc;n s&acirc;u tại SPA Center</span></strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Chuy&ecirc;n gia da liễu sẽ trực tiếp thăm kh&aacute;m v&agrave; tư vấn, tuỳ theo t&igrave;nh trạng mụn của kh&aacute;ch h&agrave;ng nặng hay nhẹ để đưa ra liệu tr&igrave;nh ph&ugrave; hợp. Ch&uacute;ng t&ocirc;i &aacute;p dụng quy tr&igrave;nh điều trị mụn chuẩn Y khoa &ndash; an to&agrave;n &ndash; nhanh ch&oacute;ng &ndash; hiệu quả gồm c&aacute;c bước như sau:&nbsp;</p>\r\n\r\n<p><span style=\"color:#e74c3c\"><em>Bước 1: Thăm kh&aacute;m </em></span></p>\r\n\r\n<p><em>B&aacute;c sĩ tiến h&agrave;nh soi da, thăm kh&aacute;m để đưa ra ph&aacute;c đồ điều trị ph&ugrave; hợp với từng kh&aacute;ch h&agrave;ng.</em><br />\r\n<br />\r\n<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun1_1_1669304961.JPG\" style=\"height:568px; width:909px\" /></p>\r\n\r\n<p><span style=\"color:#e74c3c\"><em>Bước 2: Vệ sinh da </em></span></p>\r\n\r\n<p><em>Tẩy trang bằng tinh dầu thi&ecirc;n nhi&ecirc;n v&agrave; rửa mặt bằng sữa rửa mặt thi&ecirc;n nhi&ecirc;n kh&ocirc;ng bọt, c&oacute; hạt, ph&ugrave; hợp với mỗi loại da.</em><br />\r\n<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun1_2_1669304987.JPG\" style=\"height:571px; width:908px\" /></p>\r\n\r\n<p><span style=\"color:#e74c3c\"><em>Bước 3: Tẩy tế b&agrave;o chết</em></span></p>\r\n\r\n<p>Tẩy loại bỏ da chết, bụi bẩn đọng s&acirc;u trong lỗ ch&acirc;n l&ocirc;ng.<br />\r\n<br />\r\n<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun1_3_1669305018.JPG\" style=\"height:566px; width:906px\" /></p>\r\n\r\n<p><span style=\"color:#e74c3c\"><em>Bước 4: X&ocirc;ng hơi, h&uacute;t dầu&nbsp;</em></span></p>\r\n\r\n<p style=\"text-align:justify\">Thoa tinh dầu thi&ecirc;n nhi&ecirc;n v&agrave; massage mặt gi&uacute;p d&atilde;n nở cơ mặt, lỗ ch&acirc;n l&ocirc;ng. X&ocirc;ng mặt đẩy b&atilde; nhờn l&ecirc;n gi&uacute;p việc h&uacute;t mụn + gắp nh&acirc;n mụn được dễ d&agrave;ng hơn.<br />\r\n<br />\r\n<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun1_4_1669305044.JPG\" style=\"height:569px; width:901px\" /></p>\r\n\r\n<p><span style=\"color:#e74c3c\"><em>Bước 5: Lấy nh&acirc;n mụn</em></span></p>\r\n\r\n<p style=\"text-align:justify\">Gắp nh&acirc;n mụn dưới da, mụn gi&agrave;, mụn bọc vi&ecirc;m, mụn c&aacute;m, mụn đầu đen,&hellip; Bằng dụng cụ chuy&ecirc;n dụng. Lột mụn gi&uacute;p l&agrave;m sạch mụn c&aacute;m c&ograve;n s&oacute;t lại trong ch&acirc;n l&ocirc;ng.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun1_5_1669305075.JPG\" style=\"height:566px; width:905px\" /></p>\r\n\r\n<p><span style=\"color:#e74c3c\"><em>Bước 6: Phun Oxy s&aacute;t khuẩn v&ugrave;ng da</em></span></p>\r\n\r\n<p>Chuy&ecirc;n vi&ecirc;n sẽ phun oxy tươi gi&uacute;p s&aacute;t khuẩn, diệt vi khuẩn g&acirc;y mụn đồng thời cung cấp dưỡng da từ s&acirc;u b&ecirc;n trong.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun1_6_1669305117.JPG\" style=\"height:561px; width:904px\" /></p>\r\n\r\n<p><span style=\"color:#e74c3c\"><em>Bước 7: Tiến h&agrave;ng peel mụn</em></span></p>\r\n\r\n<p>Chuy&ecirc;n vi&ecirc;n tiến h&agrave;nh peel mụn bằng sản phẩm medic của Mỹ. B&ecirc;n cạnh đ&oacute;, t&ugrave;y theo tr&igrave;nh trạng mụn b&aacute;c sĩ sẽ kết hợp phương ph&aacute;p để điều trị mụn đạt được hiệu quả tốt nhất.&nbsp;<br />\r\n<br />\r\n&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun1_7_1669305142.JPG\" style=\"height:567px; width:904px\" /></p>\r\n\r\n<p><span style=\"color:#e74c3c\"><em>Bước 8: Thoa serum mụn&nbsp;</em></span></p>\r\n\r\n<p>Sau bước peel mụn, chuy&ecirc;n vi&ecirc;n sẽ thoa serum để dưỡng da.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; <img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun1_8_1669305168.JPG\" style=\"height:567px; width:903px\" /></p>\r\n\r\n<p><span style=\"color:#e74c3c\"><em>Bước 9: Dặn d&ograve; kh&aacute;ch h&agrave;ng chăm s&oacute;c tại nh&agrave;</em></span></p>\r\n\r\n<p style=\"text-align:justify\">Điều trị mụn l&agrave; việc kh&aacute; phức tạp v&agrave; tốn nhiều thời gian, giai đoạn điều trị y&ecirc;u cầu kh&aacute;ch h&agrave;ng cần phải tu&acirc;n thủ nghi&ecirc;m ngặt chế độ ăn uống v&agrave; sinh hoạt theo hướng dẫn của chuy&ecirc;n gia da liễu.&nbsp;<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun1_9_1669305201.JPG\" style=\"height:569px; width:907px\" /></p>\r\n\r\n<p><span style=\"color:#e67e22\"><span style=\"font-size:18px\"><strong>H&igrave;nh ảnh kh&aacute;ch h&agrave;ng sau khi điều trị mụn tại Viện thẩm mỹ DIVA</strong></span></span><br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun7_1669305251.JPG\" style=\"height:480px; width:761px\" /></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun8_1669305266.JPG\" style=\"height:479px; width:769px\" /></p>\r\n\r\n<p>&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/mun9_1669305280.JPG\" style=\"height:481px; width:765px\" /></p>\r\n\r\n<p>&nbsp;</p>', 1, '2022-11-03 08:38:03', '2022-11-24 09:11:39'),
(2, 'Điều trị nám', 499000, 'Điều trị nám, tàn nhang tận gốc với công nghệ Laser Nd Yag là quyết định thông minh dành cho bạn. Nếu có nhu cầu tân trang nhan sắc, hãy liên hệ ngay SPA CENTER để nhận được hỗ trợ tốt nhất.', '<p style=\"text-align:justify\"><span style=\"color:#c0392b\"><strong><span style=\"font-size:18px\">I. N&aacute;m da mặt v&agrave; những điều cần biết</span></strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Để nắm bắt chi tiết t&igrave;nh trạng n&aacute;m da mặt, h&atilde;y c&ugrave;ng SPA CENTER điểm qua một số th&ocirc;ng tin về n&aacute;m ngay dưới đ&acirc;y.</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"color:#c0392b\"><span style=\"font-size:16px\">1. N&aacute;m da l&agrave; g&igrave;?</span></span></strong></p>\r\n\r\n<p style=\"text-align:justify\">N&aacute;m da l&agrave; t&igrave;nh trạng da bị rối loạn sắc tố, tế b&agrave;o melanin tăng sinh qu&aacute; mức dẫn đến xuất hiện những đốm, mảng m&agrave;u n&acirc;u hoặc x&aacute;m n&acirc;u, th&acirc;m v&agrave;ng tr&ecirc;n da, c&oacute; k&iacute;ch thước lớn hơn so với t&agrave;n nhang.</p>\r\n\r\n<p style=\"text-align:justify\">N&aacute;m da thường tập trung th&agrave;nh c&aacute;c mảng lớn, xuất hiện phổ biến nhất ở v&ugrave;ng mặt, tại c&aacute;c vị tr&iacute; như hai b&ecirc;n m&aacute;, dưới mắt, sống mũi,&hellip;hoặc một số vị tr&iacute; tr&ecirc;n cơ thể thường xuy&ecirc;n tiếp x&uacute;c với &aacute;nh s&aacute;ng mặt trời như: c&aacute;nh tay, cổ, mu b&agrave;n tay.</p>\r\n\r\n<p style=\"text-align:justify\">T&igrave;nh trạng n&aacute;m da thường gặp nhất l&agrave; ở phụ nữ trong độ tuổi từ 20 &ndash; 50 tuổi, đặc biệt l&agrave; giai đoạn mang thai v&agrave; sau khi sinh.Theo chuy&ecirc;n gia SPA CENTER, n&aacute;m da được chia th&agrave;nh 3 loại:</p>\r\n\r\n<p style=\"text-align:justify\"><strong>✓ N&aacute;m mảng:</strong>&nbsp;đ&acirc;y l&agrave; t&igrave;nh trạng n&aacute;m nằm ở lớp biểu b&igrave; của da, xuất hiện th&agrave;nh từng mảng, m&agrave;u nhạt, dễ điều trị tận gốc.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>✓ N&aacute;m s&acirc;u:&nbsp;</strong>c&oacute; m&agrave;u sắc đậm hơn v&agrave; xuất hiện từng đốm nhỏ, nằm s&acirc;u dưới lớp hạ b&igrave; của da. Đ&acirc;y l&agrave; t&igrave;nh trạng n&aacute;m rất kh&oacute; điều trị v&agrave; mất nhiều thời gian.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>✓ N&aacute;m hỗn hợp: </strong>da xuất hiện cả hai loại n&aacute;m tr&ecirc;n.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"http://localhost/laravel-spa/public/images/nam1_1669992393.JPG\" style=\"height:554px; width:734px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"color:#c0392b\"><span style=\"font-size:18px\">2. N&aacute;m da h&igrave;nh th&agrave;nh như thế n&agrave;o?</span></span></strong></p>\r\n\r\n<p style=\"text-align:justify\">T&igrave;nh trạng n&aacute;m da xuất hiện do nhiều nguy&ecirc;n nh&acirc;n kh&aacute;c nhau, từ nguy&ecirc;n nh&acirc;n trực tiếp b&ecirc;n trong cơ thể (nguy&ecirc;n nh&acirc;n nội sinh) đến c&aacute;c nguy&ecirc;n nh&acirc;n kh&aacute;ch quan b&ecirc;n ngo&agrave;i t&aacute;c động (nguy&ecirc;n nh&acirc;n ngoại sinh).</p>\r\n\r\n<p style=\"text-align:justify\">Để điều trị n&aacute;m da mặt đạt hiệu quả nhất, việc đầu ti&ecirc;n l&agrave; phải t&igrave;m hiểu nguy&ecirc;n nh&acirc;n g&acirc;y ra t&igrave;nh trạng n&aacute;m tr&ecirc;n da. Cụ thể:</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Nguy&ecirc;n nh&acirc;n nội sinh</strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong>✓ Di truyền:</strong>&nbsp;yếu tố di truyền cũng l&agrave; một trong những nguy&ecirc;n nh&acirc;n khiến da bị xuất hiện n&aacute;m. Nếu cha mẹ hoặc người th&acirc;n trong gia đ&igrave;nh gặp t&igrave;nh trạng n&agrave;y th&igrave; bạn cũng sẽ chịu ảnh hưởng &iacute;t nhiều.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>✓ Rối loạn nội tiết tố:</strong>&nbsp;khi nồng độ estrogen trong cơ thể tăng cao sẽ g&acirc;y ra t&igrave;nh trạng rối loạn nội tiết tố, tế b&agrave;o melanin tăng cao hơn, sản sinh nhanh ch&oacute;ng hơn, dẫn đến việc h&igrave;nh th&agrave;nh c&aacute;c đốm n&acirc;u tr&ecirc;n khu&ocirc;n mặt. T&igrave;nh trạng n&aacute;m da do rối loạn nội tiết tố thường gặp ở c&aacute;c giai đoạn như: tuổi dậy th&igrave;, phụ nữ đang mang thai, sau sinh, giai đoạn tiền m&atilde;n kinh,&hellip;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>✓ Rối loạn sắc tố:</strong> khi qu&aacute; tr&igrave;nh sinh h&oacute;a của hoạt chất amin-tyro-sine trong m&aacute;u tăng hoặc giảm một c&aacute;ch đột ngột sẽ g&acirc;y ra t&igrave;nh trạng xuất hiện c&aacute;c đốm n&acirc;u sẫm m&agrave;u tr&ecirc;n gương mặt.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>✓ L&atilde;o h&oacute;a da</strong>:&nbsp;đối với người đang trong giai đoạn l&atilde;o h&oacute;a da, lượng melanin sẽ sản sinh cao hơn, từ đ&oacute; h&igrave;nh th&agrave;nh c&aacute;c mảng n&aacute;m tr&ecirc;n da.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>✓ Stress, căng thẳng k&eacute;o d&agrave;i</strong>:&nbsp;khi cơ thể trong trạng th&aacute;i căng thẳng sẽ sản sinh nhiều hormone cortisone, dẫn đến mất c&acirc;n bằng nội tiết tố, từ đ&oacute; da sẽ gặp nguy cơ xuất hiện c&aacute;c đốm n&acirc;u, mảng n&aacute;m. Nội tiết tố l&agrave; nguy&ecirc;n nh&acirc;n h&agrave;ng đầu g&acirc;y ra t&igrave;nh trạng n&aacute;m da</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Nguy&ecirc;n nh&acirc;n ngoại sinh</strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong>✓ &Aacute;nh s&aacute;ng mặt trời:</strong>&nbsp;khi da tiếp x&uacute;c với &aacute;nh s&aacute;ng mặt trời m&agrave; kh&ocirc;ng được bảo vệ trong một thời gian d&agrave;i, tia UVA &ndash; UVB c&oacute; trong &aacute;nh nắng sẽ k&iacute;ch th&iacute;ch da tăng sắc tố melanin, dần h&igrave;nh th&agrave;nh những đốm n&acirc;u tr&ecirc;n khu&ocirc;n mặt v&agrave; ng&agrave;y c&agrave;ng lan rộng hơn, đậm m&agrave;u hơn. Ngo&agrave;i ra, &aacute;nh s&aacute;ng mặt trời c&ograve;n ph&aacute; hủy c&aacute;c tế b&agrave;o, cấu tr&uacute;c da b&ecirc;n dưới, khiến cho da bị kh&ocirc;, nhanh l&atilde;o h&oacute;a, thậm ch&iacute; tang cao nguy cơ ung thư da.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>✓ Sử dụng mỹ phẩm k&eacute;m chất lượng:</strong>&nbsp;việc sử dụng c&aacute;c loại mỹ phẩm trang điểm, dưỡng da kh&ocirc;ng ph&ugrave; hợp, sản phẩm k&eacute;m chất lượng, chứa th&agrave;nh phần độc hại sẽ khiến da bị k&iacute;ch ứng, nhiễm tr&ugrave;ng. Từ đ&oacute; da dễ gặp c&aacute;c vấn đề như mụn, n&aacute;m,&hellip;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>✓ Chế độ sinh hoạt, nghỉ ngơi kh&ocirc;ng hợp l&yacute;:</strong>&nbsp;ngủ kh&ocirc;ng đủ giấc, thức khuya, ăn nhiều đồ ăn cay n&oacute;ng, dầu mỡ c&oacute; hại cho sức khỏe, cơ thể gặp t&igrave;nh trạng rối loạn, từ đ&oacute; dẫn đến t&igrave;nh trạng n&aacute;m da.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/nam3_1669992521.JPG\" style=\"height:512px; width:725px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"color:#c0392b\"><span style=\"font-size:18px\">IV. Quy tr&igrave;nh điều trị n&aacute;m chuẩn Y khoa tại SPA CENTER</span></span></strong></p>\r\n\r\n<p style=\"text-align:justify\">Đến với SPA CENTER, kh&aacute;ch h&agrave;ng sẽ được trải nghiệm dịch vụ điều trị n&aacute;m Laser Nd Yag theo quy tr&igrave;nh chuẩn Y khoa, đảm bảo mọi yếu tố an to&agrave;n, v&ocirc; tr&ugrave;ng, v&ocirc; khuẩn trong qu&aacute; tr&igrave;nh điều trị, hạn chế vi&ecirc;m nhiễm, nhiễm tr&ugrave;ng da.</p>\r\n\r\n<p style=\"text-align:justify\">Trước khi điều trị n&aacute;m, b&aacute;c sĩ, chuy&ecirc;n gia h&agrave;ng đầu trong lĩnh vực da liễu tại SPA CENTER sẽ trực tiếp thăm kh&aacute;m, kiểm tra t&igrave;nh trạng n&aacute;m hiện tại, sau đ&oacute; mới l&ecirc;n kế hoạch, ph&aacute;c đồ v&agrave; liệu tr&igrave;nh trị n&aacute;m chuy&ecirc;n biệt, ph&ugrave; hợp với mỗi người.</p>\r\n\r\n<p style=\"text-align:justify\">Liệu tr&igrave;nh trị n&aacute;m tại SPA CENTER sẽ phụ thuộc v&agrave;o t&igrave;nh trạng n&aacute;m v&agrave; cơ địa của mỗi người, cơ bản sẽ bao gồm c&aacute;c bước thực hiện sau:</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>Bước 1: Tư vấn v&agrave; thăm kh&aacute;m</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">B&aacute;c sĩ kiểm tra x&aacute;c định t&igrave;nh trạng, loại n&aacute;m v&agrave; vị tr&iacute; xuất hiện, x&acirc;y dựng ph&aacute;c đồ, kế hoạch điều trị n&aacute;m ph&ugrave; hợp.</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>Bước 2: Vệ sinh v&agrave; c&acirc;n bằng độ ẩm cho da</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">Thực hiện tẩy trang, rửa mặt để loại bỏ bụi bẩn tr&ecirc;n da. Kết hợp tẩy da chết gi&uacute;p lỗ ch&acirc;n l&ocirc;ng được l&agrave;m sạch v&agrave; th&ocirc;ng tho&aacute;ng hơn.</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>Bước 3: Lấy nh&acirc;n mụn (nếu c&oacute;)</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">Thực hiện loại bỏ mụn tr&ecirc;n bề mặt da bằng dụng cụ chuy&ecirc;n dụng trước khi điều trị n&aacute;m.</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>Bước 4: Phun oxy tươi</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">Cung cấp oxy tươi cho da, phục hồi sức khỏe l&agrave;n da, l&agrave;m sạch s&acirc;u c&aacute;c lỗ ch&acirc;n l&ocirc;ng, k&iacute;ch th&iacute;ch tăng sinh collagen.</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>Bước 5: Ủ t&ecirc;</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">Thoa một lượng kem ủ t&ecirc; mỏng gi&uacute;p l&agrave;m giảm cảm gi&aacute;c đau r&aacute;t, kh&oacute; chịu trong suốt qu&aacute; tr&igrave;nh điều trị n&aacute;m.</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>Bước 6: S&aacute;t khuẩn</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">Loại bỏ vi khuẩn tr&ecirc;n da, hạn chế vi khuẩn x&acirc;m nhập, vi&ecirc;m nhiễm da trong qu&aacute; tr&igrave;nh điều trị.</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>Bước 7: Điều trị n&aacute;m bằng Laser Nd Yag</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">Điều chỉnh tần số ph&ugrave; hợp với vị tr&iacute; xuất hiện n&aacute;m, thực hiện bắn tia laser để loại bỏ đốm nấu, mảng n&aacute;m tr&ecirc;n da.</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>Bước 8: Chiếu tia plasma lạnh</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">Chiếu tia plasma lạnh sau khi điều trị n&aacute;m gi&uacute;p kh&aacute;ng khuẩn v&agrave; th&uacute;c đẩy qu&aacute; tr&igrave;nh phục hồi vết thương, t&aacute;i tạo da nhanh ch&oacute;ng.</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>Bước 9: Đắp mặt nạ</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">Đắp mặt nạ thư gi&atilde;n, l&agrave;m dịu da, giảm sưng đỏ trước khi kết th&uacute;c quy tr&igrave;nh.</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>Bước 10: Hướng dẫn chăm s&oacute;c</strong></em></p>\r\n\r\n<p style=\"text-align:justify\">B&aacute;c sĩ kiểm tra lại da v&agrave; hướng dẫn kh&aacute;ch h&agrave;ng chăm s&oacute;c tại nh&agrave;.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/nam6_1669992730.JPG\" style=\"height:482px; width:733px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#c0392b\"><span style=\"font-size:18px\"><strong>VI. Những lưu &yacute; v&agrave; c&aacute;ch chăm s&oacute;c da sau khi điều trị n&aacute;m</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Dưới đ&acirc;y l&agrave; một số lưu &yacute; trong qu&aacute; tr&igrave;nh chăm s&oacute;c da sau khi điều trị n&aacute;m. Bạn h&atilde;y &aacute;p dụng ngay nh&eacute;!</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong>1. Kh&ocirc;ng rửa mặt bằng nước ấm trong 24h sau điều trị</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Bạn cần ch&uacute; &yacute; tr&aacute;nh rửa mặt bằng nước trong v&ograve;ng 24h đầu. Nước xuất hiện tr&ecirc;n da sẽ l&agrave;m ảnh hưởng đến hiệu quả điều trị n&aacute;m.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#c0392b\"><span style=\"font-size:18px\"><strong>2. B&ocirc;i sản phẩm điều trị n&aacute;m tại nh&agrave;</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Sau khi điều trị n&aacute;m bằng c&ocirc;ng nghệ cao, bạn cần thoa đều kem dưỡng tại nh&agrave;. Ch&uacute;ng c&oacute; t&aacute;c dụng gi&uacute;p da mềm mịn, c&aacute;c tế b&agrave;o nhanh ch&oacute;ng được t&aacute;i tạo lại. Ngo&agrave;i ra, thoa đều c&aacute;c sản phẩm điều trị n&aacute;m mỗi ng&agrave;y c&ograve;n c&oacute; t&aacute;c dụng gi&uacute;p da tr&aacute;nh được những t&aacute;c nh&acirc;n g&acirc;y hại từ m&ocirc;i trường x&acirc;m nhập.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#c0392b\"><strong>3. Tr&aacute;nh để da tiếp x&uacute;c với &aacute;nh mặt trời</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Sau khi điều trị n&aacute;m bằng c&ocirc;ng nghệ cao, bạn cần tr&aacute;nh để da tiếp x&uacute;c trực tiếp với &aacute;nh nắng của mặt trời. Tia UV sẽ t&aacute;c động trực tiếp g&acirc;y hại cho da.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#c0392b\"><span style=\"font-size:16px\"><strong>4. Ăn uống v&agrave; sinh hoạt điều độ</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Bạn cần ăn uống, sinh hoạt điều độ để gi&uacute;p da nhanh hồi phục, điều trị n&aacute;m được dứt điểm. Bạn cần tr&aacute;nh những m&oacute;n ăn dễ để lại sẹo như rau muống, gạo nếp, thịt b&ograve;, thịt g&agrave;,&hellip; n&ecirc;n bổ sung nhiều vitamin v&agrave; kho&aacute;ng chất.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:#c0392b\"><strong>5. Thoa kem dưỡng ẩm da h&agrave;ng ng&agrave;y</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">Kem dưỡng ẩm rất cần thiết cho da. Do đ&oacute;, bạn cần dưỡng ẩm mỗi ng&agrave;y để mang đến hiệu quả tốt nhất. N&ecirc;n chọn những d&ograve;ng kem dưỡng ẩm từ tự nhi&ecirc;n, kh&ocirc;ng chọn c&aacute;c sản phẩm chứa nhiều h&oacute;a chất.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/nam8_1669992833.JPG\" style=\"height:463px; width:730px\" /><br />\r\n<br />\r\n&nbsp;</p>', 1, '2022-11-03 08:39:50', '2022-12-02 07:59:11'),
(3, 'Tái tạo da', 299000, 'Nhu cầu tái tạo da là nhu cầu hàng đầu hiện nay, giúp cải thiện các khuyết điểm không mong muốn, giúp làm mới và thay đổi làn da rõ rệt.', '<p style=\"text-align:justify\"><span style=\"color:#e74c3c\"><span style=\"font-size:18px\"><strong>I. T&aacute;i tạo da l&agrave; g&igrave;?</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\">T&aacute;i tạo da l&agrave; một phương ph&aacute;p gi&uacute;p thay đổi l&agrave;n da bằng c&aacute;ch loại bỏ đi c&aacute;c lớp da chết, tế b&agrave;o hư hỏng tr&ecirc;n bề mặt, th&uacute;c đẩy tăng sinh c&aacute;c tế b&agrave;o khỏe hơn, gi&uacute;p cấu tr&uacute;c da được phục hồi, mang lại một l&agrave;n da căng b&oacute;ng, mịn m&agrave;ng hơn. Điều cũng gi&uacute;p qu&aacute; tr&igrave;nh hấp thụ dưỡng chất từ mỹ phẩm diễn ra tốt hơn gấp 3 lần.</p>\r\n\r\n<p style=\"text-align:justify\">Quy tr&igrave;nh để thực hiện t&aacute;i tạo da sẽ cần mất khoảng từ 25 &ndash; 28 ng&agrave;y, đ&acirc;y cũng ch&iacute;nh l&agrave; chu kỳ thay da của con người. Trong qu&aacute; tr&igrave;nh n&agrave;y, tế b&agrave;o chết vừa được loại bỏ, kết hợp th&uacute;c đẩy tăng sinh Collagen, lớp trung v&agrave; biểu b&igrave; mới h&igrave;nh th&agrave;nh để thay thế da cũ trước đ&oacute;. Hiện tượng da bị kh&ocirc;, sậm m&agrave;u v&agrave; bong để lộ một lớp da hồng h&agrave;o, mịn m&agrave;ng b&ecirc;n dưới ch&iacute;nh l&agrave; kết quả của phương ph&aacute;p thẩm mỹ.</p>\r\n\r\n<p style=\"text-align:justify\">Phương ph&aacute;p t&aacute;i tạo da đặc biệt ph&ugrave; hợp đối với những l&agrave;n da gặp tổn thương nghi&ecirc;m trọng, xử l&yacute; v&agrave; h&igrave;nh th&agrave;nh c&aacute;c m&ocirc; sẹo mới, tốt cho bề mặt da. Tuy nhi&ecirc;n, đ&acirc;y l&agrave; phương ph&aacute;p cần kỹ thuật tốt, lựa chọn cơ sở thẩm mỹ uy t&iacute;n chất lượng để đảm bảo hiệu quả cao nhất v&agrave; hạn chế những rủi ro kh&ocirc;ng mong muốn trong qu&aacute; tr&igrave;nh thực hiện.<br />\r\n<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/csda_1669993489.jpg\" style=\"height:666px; width:1009px\" /></p>\r\n\r\n<p style=\"text-align:center\">T&aacute;i tạo da gi&uacute;p thay thế c&aacute;c tế b&agrave;o da cũ bằng lớp da mới khỏe mạnh hơn</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<span style=\"color:#e74c3c\"><span style=\"font-size:18px\"><strong>VI. Quy tr&igrave;nh t&aacute;i tạo da mặt</strong></span></span><br />\r\n<br />\r\n<strong>Bước 1: Tư vấn v&agrave; thăm kh&aacute;m</strong></p>\r\n\r\n<p style=\"text-align:justify\">B&aacute;c sĩ tiến h&agrave;nh soi da cho kh&aacute;ch h&agrave;ng, x&aacute;c định t&igrave;nh trạng da v&agrave; tư vấn phương ph&aacute;p, l&ecirc;n kế hoạch điều trị chuy&ecirc;n biệt, ph&ugrave; hợp.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 2: L&agrave;m sạch da</strong></p>\r\n\r\n<p style=\"text-align:justify\">D&ugrave;ng tẩy trang &ndash; sữa rửa mặt chuy&ecirc;n dụng, ph&ugrave; hợp với từng loại da nhằm loại bỏ bụi bẩn, cặn trang điểm b&aacute;m tr&ecirc;n bề mặt gi&uacute;p da sạch v&agrave; th&ocirc;ng tho&aacute;ng hơn.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 3: Tẩy da chết&nbsp;</strong></p>\r\n\r\n<p style=\"text-align:justify\">Thoa sản phẩm tẩy tế b&agrave;o chết l&ecirc;n da, kết hợp massage nhẹ nh&agrave;ng để loại bỏ da chết, sừng d&agrave;y, gi&uacute;p lỗ ch&acirc;n l&ocirc;ng th&ocirc;ng tho&aacute;ng, k&iacute;ch th&iacute;ch da hấp thụ dưỡng chất tốt hơn.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 4: H&uacute;t ch&igrave; thải độc tố&nbsp;</strong></p>\r\n\r\n<p style=\"text-align:justify\">Thoa sản phẩm thải độc ch&igrave; l&ecirc;n da, loại bỏ c&aacute;c độc tố v&agrave; ch&igrave; tr&ecirc;n da, hỗ trợ l&agrave;m s&aacute;ng v&ugrave;ng da hiệu quả.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 5: C&acirc;n bằng da</strong></p>\r\n\r\n<p style=\"text-align:justify\">C&acirc;n bằng độ ph, duy tr&igrave; độ ẩm cho l&agrave;n da, hỗ trợ loại bỏ bụi bẩn, b&atilde; nhờn c&ograve;n tồn đọng, đồng thời thu nhỏ lỗ ch&acirc;n l&ocirc;ng.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 6: Massage mặt</strong></p>\r\n\r\n<p style=\"text-align:justify\">Massage da mặt bằng tinh chất, th&uacute;c đẩy qu&aacute; tr&igrave;nh lưu th&ocirc;ng m&aacute;u, gi&uacute;p collagen tăng sinh nhiều hơn, l&agrave;m mờ c&aacute;c nếp nhăn v&agrave; ngăn ngừa t&igrave;nh trạng chảy xệ da.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 7: X&ocirc;ng hơi</strong></p>\r\n\r\n<p style=\"text-align:justify\">X&ocirc;ng da mặt bằng hơi n&oacute;ng từ 10 &ndash; 15 ph&uacute;t, k&iacute;ch th&iacute;ch lỗ ch&acirc;n l&ocirc;ng gi&atilde;n nở, loại bỏ b&atilde; nhờn v&agrave; đẩy nh&acirc;n mụn l&ecirc;n bề mặt da.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 8: H&uacute;t nhờn</strong></p>\r\n\r\n<p style=\"text-align:justify\">H&uacute;t sạch dầu nhờn, bụi bẩn khỏi c&aacute;c lỗ ch&acirc;n l&ocirc;ng, gi&uacute;p bề mặt da th&ocirc;ng tho&aacute;ng, hỗ trợ loại bỏ nh&acirc;n mụn dễ d&agrave;ng hơn.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 9: Lấy nh&acirc;n mụn (nếu c&oacute;)</strong></p>\r\n\r\n<p style=\"text-align:justify\">Lấy nh&acirc;n mụn bằng dụng cụ nặn mụn chuy&ecirc;n dụng, đ&atilde; được s&aacute;t khuẩn, đảm bảo an to&agrave;n v&agrave; hạn chế vi&ecirc;m nhiễm da.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 10: Phun oxy tươi</strong></p>\r\n\r\n<p style=\"text-align:justify\">Cung cấp lượng oxy tươi cho l&agrave;n da, hỗ trợ s&aacute;t khuẩn v&agrave; sạch s&acirc;u lỗ ch&acirc;n l&ocirc;ng, gi&uacute;p l&agrave;n da phục hồi sức khỏe, ngăn ngừa t&igrave;nh trạng mụn quay trở lại.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 11: Thực hiện t&aacute;i tạo da c&ocirc;ng nghệ 4F</strong></p>\r\n\r\n<p style=\"text-align:justify\">Tiến h&agrave;nh t&aacute;i tạo da bằng c&ocirc;ng nghệ 4F cho kh&aacute;ch h&agrave;ng, thời gian t&ugrave;y thuộc v&agrave;o từng t&igrave;nh trạng da.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 12: Đắp mặt nạ&nbsp;</strong></p>\r\n\r\n<p style=\"text-align:justify\">Đắp mặt nạ l&agrave;m dịu da, thư gi&atilde;n, cung cấp độ ẩm v&agrave; dưỡng chất cho da, kết hợp chiếu &aacute;nh s&aacute;ng sinh học gi&uacute;p dưỡng chất thấm s&acirc;u hơn.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 13: Điện di tinh chất</strong></p>\r\n\r\n<p style=\"text-align:justify\">Đưa dưỡng chất thấm s&acirc;u hơn v&agrave;o l&agrave;n da, nu&ocirc;i dưỡng l&agrave;n da từ s&acirc;u b&ecirc;n trong, kh&oacute;a ẩm bảo vệ l&agrave;n da.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 14: Thoa kem chống nắng</strong></p>\r\n\r\n<p style=\"text-align:justify\">Thoa kem chống nắng l&ecirc;n da gi&uacute;p bảo vệ da khỏi c&aacute;c t&aacute;c nh&acirc;n g&acirc;y hại từ b&ecirc;n ngo&agrave;i m&ocirc;i trường, r&uacute;t ngắn qu&aacute; tr&igrave;nh phục hồi l&agrave;n da.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Bước 15: Hướng dẫn chăm s&oacute;c</strong></p>\r\n\r\n<p style=\"text-align:justify\">Kiểm tra lại kết quả l&agrave;n da v&agrave; hướng dẫn chăm s&oacute;c tại nh&agrave; sau khi thực hiện dịch vụ.<br />\r\n<br />\r\n<img alt=\"\" src=\"http://localhost/laravel-spa/public/images/cssau3_1669993593.JPG\" style=\"height:510px; width:766px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', 2, '2022-11-03 08:42:10', '2022-12-02 08:09:46'),
(4, 'Tắm trắng phi thuyền', 1990000, 'Tắm trắng phi thuyền là phương pháp làm trắng da từ sâu bên trong cho hiệu quả gấp nhiều lần so với các phương pháp làm trắng da truyền thống. Phương pháp này sử dụng sóng nhiệt của máy phi thuyền, không gây bào mòn, xâm lấn, tổn thương hay kích ứng da, giúp phái đẹp sở hữu làn da trắng nuột nà nhanh chóng. Hãy cùng SPA CENTER tìm hiểu kĩ hơn về dịch vụ siêu hot, giúp “Sáng bừng làn da – Nâng tầm nhan sắc” của bạn ngay sau đây nhé!', '<p>I. Tắm trắng phi thuyền l&agrave; g&igrave;? Tắm trắng phi thuyền c&oacute; những lợi &iacute;ch n&agrave;o?&nbsp; Tắm trắng phi thuyền l&agrave; c&ocirc;ng nghệ sử dụng tia hồng ngoại c&oacute; tần số từ 3 &ndash; 3,8J tiếp x&uacute;c trực tiếp với da để gi&uacute;p hỗ trợ ph&aacute; hủy c&aacute;c li&ecirc;n kết ph&acirc;n tử Melanin b&ecirc;n trong trung v&agrave; hạ b&igrave;. B&ecirc;n cạnh đ&oacute;, phương ph&aacute;p n&agrave;y c&ograve;n c&oacute; khả năng l&agrave;m cho da tăng hiệu quả hấp thụ c&aacute;c dưỡng chất từ mỹ phẩm cao gấp 3 lần so với b&igrave;nh thường.&nbsp; Tắm trắng phi thuyền c&oacute; rất nhiều lợi &iacute;ch đặc biệt như:&nbsp; Tăng sinh Collagen tự nhi&ecirc;n ở s&acirc;u b&ecirc;n trong lớp hạ b&igrave; của da. Từ đ&oacute; l&agrave;m da s&aacute;ng hồng, mịn m&agrave;ng, căng mịn v&agrave; trẻ trung hơn.&nbsp; Ức chế sự h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển của Melanin, nhờ đ&oacute; m&agrave; da dần trắng s&aacute;ng đều m&agrave;u, kh&ocirc;ng c&ograve;n bị th&acirc;m xỉn, đen sạm, thiếu sức sống nữa.&nbsp; Hỗ trợ loại bỏ tế b&agrave;o chết, k&iacute;ch th&iacute;ch da mới h&igrave;nh th&agrave;nh, l&agrave;m giảm c&aacute;c vấn đề như da tr&ugrave;ng nh&atilde;o, nhăn nheo.&nbsp; L&agrave;m trắng da an to&agrave;n, kh&ocirc;ng g&acirc;y k&iacute;ch ứng, bỏng r&aacute;t, b&agrave;o m&ograve;n da.&nbsp; C&oacute; khả năng l&agrave;m trắng da từ 1 &ndash; 3 tone, t&ugrave;y cơ địa mỗi người.&nbsp; Da trắng nhưng kh&ocirc;ng lo bị bắt nắng, th&acirc;m xỉn, đen sạm trở lại.&nbsp; Ph&ugrave; hợp với mọi loại da,<br />\r\n&nbsp;</p>', 2, '2022-11-03 08:43:22', '2022-11-03 08:43:22'),
(5, 'Triệt lông vĩnh viễn', 99000, 'Triệt lông vĩnh viễn bằng công nghệ OPT được nhiều tín đồ đam mê làm đẹp ưa chuộng nhất hiện nay. Chúng giúp bạn tiết kiệm chi phí, đảm bảo an toàn. Vậy, công nghệ này có mang đến hiệu quả cao hay không? Bài viết dưới đây, SPA CENTER sẽ giải đáp cho bạn ngay dưới đây.', '<p>I. Sơ lược về phương ph&aacute;p triệt l&ocirc;ng đang được sử dụng Phương ph&aacute;p triệt l&ocirc;ng c&oacute; rất nhiều như d&ugrave;ng nh&iacute;p, dao cạo, sử dụng c&aacute;c phương ph&aacute;p thi&ecirc;n nhi&ecirc;n hay cả thuốc triệt l&ocirc;ng. Mỗi phương ph&aacute;p sẽ hội tụ những ưu điểm v&agrave; nhược điểm ri&ecirc;ng biệt nhau. Bạn h&atilde;y dựa v&agrave;o ph&acirc;n t&iacute;ch của Viện thẩm mỹ DIVA đối với từng phương ph&aacute;p ngay dưới đ&acirc;y để c&oacute; th&ecirc;m cho m&igrave;nh lựa chọn ch&iacute;nh x&aacute;c. 1. Nhổ bằng nh&iacute;p Sử dụng nh&iacute;p để nhổ l&ocirc;ng l&agrave; phương ph&aacute;p truyền thống. Ch&uacute;ng thường d&ugrave;ng để loại bỏ phần l&ocirc;ng mọc kh&ocirc;ng đ&uacute;ng khu&ocirc;n hay tại c&aacute;c vị tr&iacute; kh&ocirc;ng mong muốn. Với phương ph&aacute;p n&agrave;y, l&ocirc;ng sẽ mọc lại l&acirc;u hơn. Nhược điểm của c&aacute;ch triệt l&ocirc;ng n&agrave;y phải kể đến kh&ocirc;ng cho hiệu quả d&agrave;i l&acirc;u. Qu&aacute; tr&igrave;nh nhổ l&ocirc;ng c&oacute; thể g&acirc;y ra t&igrave;nh trạng đau đớn cho bạn.<br />\r\n<br />\r\n&nbsp;</p>', 4, '2022-11-03 08:44:31', '2022-11-03 08:44:31'),
(6, 'Giảm mỡ', 999000, 'Thân hình mũm mĩm, nhiều mỡ thừa khiến bạn cảm thấy không tự tin, ngại giao tiếp với mọi người xung quanh. Với dịch vụ giảm mỡ công nghệ cao tại SPA CENTER sẽ giúp bạn lấy lại vóc dáng thon gọn, săn chắc một cách nhanh chóng, hiệu quả.', '<p>1. Giảm mỡ tại cơ sở thẩm mỹ c&oacute; hiệu quả? Một th&acirc;n h&igrave;nh thon gọn, săn chắc sẽ mang lại sự cuốn h&uacute;t nhất định, thu h&uacute;t người xung quanh, tuy nhi&ecirc;n, kh&ocirc;ng phải ai cũng may mắn sở hữu v&oacute;c d&aacute;ng quyến rũ như mong muốn. Ngo&agrave;i ra, một số trường hợp c&ograve;n gặp t&igrave;nh trạng thừa c&acirc;n, b&eacute;o ph&igrave; g&acirc;y ảnh hưởng thẩm mỹ cũng như l&agrave;m giảm sự tự tin trong giao tiếp. Trong đ&oacute;, nguy&ecirc;n nh&acirc;n ch&iacute;nh xuất ph&aacute;t từ lối sống sinh hoạt, chế độ ăn uống kh&ocirc;ng hợp l&yacute;: thường xuy&ecirc;n d&ugrave;ng đồ ăn nhiều dầu mỡ, thức ăn nhanh, đồ ngọt, thức uống c&oacute; ga, chứa chất k&iacute;ch th&iacute;ch. Ngo&agrave;i ra, việc thường xuy&ecirc;n thức khuya, lười vận động, luyện tập thể dục sẽ khiến lượng calo kh&ocirc;ng thể ti&ecirc;u hao được, mỡ thừa t&iacute;ch tụ ng&agrave;y c&agrave;ng nhiều khiến cơ thể tăng c&acirc;n kh&oacute; kiểm so&aacute;t. Việc &aacute;p dụng c&aacute;c phương ph&aacute;p ăn ki&ecirc;ng, tập luyện để giảm mỡ thừa, lấy lại v&oacute;c d&aacute;ng thon gọn sẽ cần rất nhiều thời gian v&agrave; bắt buộc tu&acirc;n theo kế hoạch giảm c&acirc;n cụ thể, khắt khe. Tuy nhi&ecirc;n hiệu quả mang lại kh&ocirc;ng r&otilde; rệt như mong muốn, đặc biệt với những trường hợp b&eacute;o ph&igrave;, mỡ thừa t&iacute;ch tụ l&acirc;u năm. Ch&iacute;nh v&igrave; vậy, giải ph&aacute;p tốt nhất hiện nay l&agrave; t&igrave;m đến c&aacute;c cơ sở thẩm mỹ uy t&iacute;n, ứng dụng c&ocirc;ng nghệ cao gi&uacute;p loại bỏ mỡ thừa ra khỏi cơ thể một c&aacute;ch nhanh ch&oacute;ng, hiệu quả hơn so với c&aacute;c phương ph&aacute;p th&ocirc;ng thường kh&aacute;c. Điều n&agrave;y sẽ ph&ugrave; hợp với những người bận rộn, kh&ocirc;ng c&oacute; nhiều thời gian tập luyện, hoặc mắc bệnh về đường ti&ecirc;u h&oacute;a, kh&ocirc;ng ph&ugrave; hợp với c&aacute;c chế độ ăn ki&ecirc;ng khắt khe. Với phương ph&aacute;p giảm mỡ c&ocirc;ng nghệ cao tại Viện thẩm mỹ DIVA, kh&aacute;ch h&agrave;ng sẽ c&oacute; thể loại bỏ mọi v&ugrave;ng mỡ thừa v&agrave; cảm nhận sự thay đổi r&otilde; rệt của cơ thể sau mỗi liệu tr&igrave;nh thực hiện.<br />\r\n<br />\r\n&nbsp;</p>', 4, '2022-11-03 08:45:28', '2022-11-03 08:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service_type`
--

CREATE TABLE `tb_service_type` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_service_type`
--

INSERT INTO `tb_service_type` (`type_id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Điều trị da', '2022-10-24 07:55:29', '2022-10-24 07:55:40'),
(2, 'Chăm sóc da', '2022-10-24 07:55:50', '2022-10-24 07:55:50'),
(4, 'Dịch vụ khác', '2022-10-24 08:18:29', '2022-10-24 08:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `NV_id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `CV_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`NV_id`, `avatar`, `fullname`, `email`, `password`, `gender`, `phone`, `room_id`, `CV_id`, `created_at`, `updated_at`) VALUES
(2, '1669302975nv2.jpg', 'Võ Thị Thúy An', 'thuyan@gmail.com', 'thuyan', 0, '0945674456', 9, 3, '2022-10-21 04:26:48', '2022-11-24 08:16:15'),
(4, '1669303076nv3.jpg', 'Giáp Diệu Anh', 'dieuanh@gmail.com', '123456', 0, '0333667798', 5, 3, '2022-10-21 08:52:37', '2022-11-24 08:17:56'),
(5, '1669303168nv4.jpg', 'Nguyễn Thái Minh Châu', 'chau@gmail.com', '123456', 1, '0965121263', 9, 8, '2022-10-21 08:56:34', '2022-11-24 08:19:28'),
(8, '1669303329nv5.jpg', 'Lê Ngọc Khánh Huyền', 'khanhhuyen@gmail.com', '123456', 0, '0912345678', 6, 3, '2022-10-21 10:29:28', '2022-11-24 08:22:09'),
(11, '1669303477nv6.jpg', 'Đào Thị Phương Lâm', 'phuonglam@gmail.com', '123456', 0, '0298557764', 10, 2, '2022-10-22 00:01:42', '2022-11-24 08:24:37'),
(12, '1669303534nv7.jpg', 'Khang Kiều', 'kk@gmail.com', '111111', 1, '0387874566', 10, 6, NULL, '2022-11-24 08:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_admin`
--

CREATE TABLE `tb_user_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user_admin`
--

INSERT INTO `tb_user_admin` (`id`, `fullname`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Thanh Thùy', 'thanhthuy21092001@gmail.com', '0965121263', '$2y$10$oZSsENqQyLiQo98qQEsGSeakHo2FaBicFlm4N4sL3MU0fkGwijmDu', '2022-10-06 07:05:09', '2022-10-06 07:05:09'),
(5, 'Thanh Thu', 'thanhthu@gmail.com', '0912345678', '$2y$10$Mav5wsZaoINVoOnqyG3Zhuu4DuXgNVceNzrbl5cnyn08/qNOT/grG', '2022-11-06 04:07:09', '2022-11-06 04:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_advise`
--
ALTER TABLE `tb_advise`
  ADD PRIMARY KEY (`TV_id`),
  ADD KEY `tb_advise_dv_id_foreign` (`DV_id`);

--
-- Indexes for table `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD PRIMARY KEY (`HD_id`),
  ADD KEY `tb_bill_dl_id_foreign` (`DL_id`);

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`DL_id`),
  ADD KEY `tb_booking_dv_id_foreign` (`DV_id`);

--
-- Indexes for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`PH_id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`TT_id`),
  ADD KEY `tb_news_nv_id_foreign` (`NV_id`);

--
-- Indexes for table `tb_position`
--
ALTER TABLE `tb_position`
  ADD PRIMARY KEY (`CV_id`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`DV_id`),
  ADD KEY `tb_service_type_id_foreign` (`type_id`);

--
-- Indexes for table `tb_service_type`
--
ALTER TABLE `tb_service_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`NV_id`),
  ADD KEY `tb_staff_room_id_foreign` (`room_id`),
  ADD KEY `tb_staff_cv_id_foreign` (`CV_id`);

--
-- Indexes for table `tb_user_admin`
--
ALTER TABLE `tb_user_admin`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_advise`
--
ALTER TABLE `tb_advise`
  MODIFY `TV_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bill`
--
ALTER TABLE `tb_bill`
  MODIFY `HD_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `DL_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `PH_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `TT_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_position`
--
ALTER TABLE `tb_position`
  MODIFY `CV_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `room_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `DV_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_service_type`
--
ALTER TABLE `tb_service_type`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_staff`
--
ALTER TABLE `tb_staff`
  MODIFY `NV_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user_admin`
--
ALTER TABLE `tb_user_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_advise`
--
ALTER TABLE `tb_advise`
  ADD CONSTRAINT `tb_advise_dv_id_foreign` FOREIGN KEY (`DV_id`) REFERENCES `tb_service` (`DV_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_bill`
--
ALTER TABLE `tb_bill`
  ADD CONSTRAINT `tb_bill_dl_id_foreign` FOREIGN KEY (`DL_id`) REFERENCES `tb_booking` (`DL_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD CONSTRAINT `tb_booking_dv_id_foreign` FOREIGN KEY (`DV_id`) REFERENCES `tb_service` (`DV_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD CONSTRAINT `tb_news_nv_id_foreign` FOREIGN KEY (`NV_id`) REFERENCES `tb_staff` (`NV_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD CONSTRAINT `tb_service_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `tb_service_type` (`type_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD CONSTRAINT `tb_staff_cv_id_foreign` FOREIGN KEY (`CV_id`) REFERENCES `tb_position` (`CV_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_staff_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `tb_room` (`room_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
