-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2019 lúc 06:28 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mwhite`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_bills`
--

CREATE TABLE `db_bills` (
  `bill_id` bigint(20) UNSIGNED NOT NULL,
  `cus_id` bigint(20) UNSIGNED NOT NULL,
  `bill_trangthai` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_bill_details`
--

CREATE TABLE `db_bill_details` (
  `bd_id` bigint(20) UNSIGNED NOT NULL,
  `bill_id` bigint(20) UNSIGNED NOT NULL,
  `prod_id` bigint(20) UNSIGNED NOT NULL,
  `bd_tensp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bd_qty` int(11) NOT NULL,
  `bd_gia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_category`
--

CREATE TABLE `db_category` (
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_img` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cate_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_category`
--

INSERT INTO `db_category` (`cate_id`, `cate_name`, `cate_img`, `cate_slug`, `created_at`, `updated_at`) VALUES
(14, 'Dưỡng Da Mặt', 'spddm.jpg', 'duong-da-mat', '2019-05-02 06:11:37', '2019-05-09 06:16:02'),
(15, 'Dưỡng Body', 'spddm.jpg', 'duong-body', '2019-05-02 06:11:45', '2019-05-09 06:15:55'),
(16, 'Hỗ Trợ Tăng Giảm Cân', 'spddm.jpg', 'ho-tro-tang-giam-can', '2019-05-02 06:12:00', '2019-05-09 06:16:15'),
(17, 'Trang Điểm', 'spddm.jpg', 'trang-diem', '2019-05-02 06:12:08', '2019-05-09 06:16:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_comment`
--

CREATE TABLE `db_comment` (
  `com_id` bigint(20) UNSIGNED NOT NULL,
  `com_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `com_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_prod` bigint(20) UNSIGNED NOT NULL,
  `com_kiemduyet` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_comment`
--

INSERT INTO `db_comment` (`com_id`, `com_name`, `com_content`, `com_prod`, `com_kiemduyet`, `created_at`, `updated_at`) VALUES
(1, 'abe', 'sản phẩm tốt', 14, 1, '2019-05-12 13:52:19', '2019-05-12 13:52:19'),
(5, '', 'sản phẩm chất lượng', 14, 1, '2019-05-12 13:59:49', '2019-05-21 17:35:39'),
(6, '', 'sản phẩm đẹp', 14, 0, '2019-05-12 14:00:24', '2019-05-12 14:00:24'),
(7, 'hạnh lê', 'sản phẩm chất lượng cao giá cả hợp lí', 14, 1, '2019-05-16 14:11:20', '2019-05-16 16:16:10'),
(8, 'thientrang98', 'sản phẩm tốt nhé', 14, 1, '2019-05-16 15:30:54', '2019-05-16 15:31:18'),
(9, 'lê vạn hạnh', 'sản phẩm đẹp nhé', 13, 1, '2019-05-16 16:16:54', '2019-05-16 16:17:12'),
(10, 'lê vạn hạnh', 'sản phẩm tốt chất lượng', 19, 1, '2019-05-21 17:32:15', '2019-05-21 17:32:40'),
(11, 'thientrang98', 'sản phẩm tốt quá', 16, 0, '2019-05-22 03:45:51', '2019-05-22 03:45:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_customers`
--

CREATE TABLE `db_customers` (
  `cus_id` bigint(20) UNSIGNED NOT NULL,
  `cus_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_phone` int(11) NOT NULL,
  `cus_diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_customers`
--

INSERT INTO `db_customers` (`cus_id`, `cus_name`, `cus_email`, `cus_phone`, `cus_diachi`, `created_at`, `updated_at`) VALUES
(19, 'lê vạn hạnh', 'trang98@gmail.com', 965234177, 'an giang', '2019-05-21 15:46:52', '2019-05-21 15:46:52'),
(20, 'admin', 'hanhle@gmail.com', 965234177, 'an giang', '2019-05-21 16:49:10', '2019-05-21 16:49:10'),
(21, 'lê vạn hạnh', 'hanhle@gmail.com', 965234177, 'long xuyên an giang', '2019-05-22 03:28:54', '2019-05-22 03:28:54'),
(22, 'lê vạn hạnh', 'trang98@gmail.com', 965234177, 'long xuyên an giang', '2019-05-22 03:30:51', '2019-05-22 03:30:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_product`
--

CREATE TABLE `db_product` (
  `prod_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img1` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_img2` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_gia` int(11) NOT NULL,
  `product_giakhuyenmai` int(11) NOT NULL,
  `product_trangthai` tinyint(4) NOT NULL,
  `product_thanhphan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_baohanh` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_congdung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_hdsd` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prod_cate` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_product`
--

INSERT INTO `db_product` (`prod_id`, `product_name`, `product_slug`, `product_img`, `product_img1`, `product_img2`, `product_gia`, `product_giakhuyenmai`, `product_trangthai`, `product_thanhphan`, `product_baohanh`, `product_congdung`, `product_hdsd`, `prod_cate`, `created_at`, `updated_at`) VALUES
(4, 'Sản Phẩm Test 1', 'san-pham-test-1', 'giamcan.jpg', '', '', 250000, 150000, 1, '<p>Sản Phẩm Test 1</p>', '<p>Sản Phẩm Test 1</p>', '<p>Sản Phẩm Test 1</p>', '<p>Sản Phẩm Test 1</p>', 14, '2019-05-09 06:28:21', '2019-05-12 13:41:42'),
(5, 'Sản Phẩm Test 2', 'san-pham-test-2', 'giamcan.jpg', '', '', 160000, 145000, 1, '<p>Sản Phẩm Test 2</p>', '<p>Sản Phẩm Test 2</p>', '<p>Sản Phẩm Test 2</p>', '<p>Sản Phẩm Test 2</p>', 14, '2019-05-09 06:29:48', '2019-05-09 06:29:48'),
(6, 'Sản Phẩm Test 3', 'san-pham-test-3', 'giamcan.jpg', '', '', 260000, 0, 1, '<p>Sản Phẩm Test 3</p>', '<p>Sản Phẩm Test 3</p>', '<p>Sản Phẩm Test 3</p>', '<p>Sản Phẩm Test 3</p>', 14, '2019-05-09 06:30:30', '2019-05-09 06:30:30'),
(7, 'Sản Phẩm Test 4', 'san-pham-test-4', 'giamcan.jpg', '', '', 145000, 0, 1, '<p>Sản Phẩm Test 4</p>', '<p>Sản Phẩm Test 3</p>', '<p>Sản Phẩm Test 3</p>', '<p>Sản Phẩm Test 3</p>', 14, '2019-05-09 06:31:11', '2019-05-09 06:31:11'),
(8, 'Sản Phẩm Test 5', 'san-pham-test-5', 'makeup.jpg', '', '', 270000, 0, 1, '<p>Sản Phẩm Test 3</p>', '<p>Sản Phẩm Test 3</p>', '<p>Sản Phẩm Test 3</p>', '<p>Sản Phẩm Test 3</p>', 17, '2019-05-09 06:33:04', '2019-05-09 06:33:04'),
(9, 'Sản Phẩm Test 6', 'san-pham-test-6', 'makeup.jpg', '', '', 245000, 0, 1, '<p>Sản Phẩm Test 6</p>', '<p>Sản Phẩm Test 6</p>', '<p>Sản Phẩm Test 6</p>', '<p>Sản Phẩm Test 6</p>', 17, '2019-05-09 06:36:31', '2019-05-09 06:36:31'),
(10, 'Sản Phẩm Test 7', 'san-pham-test-7', 'makeup.jpg', '', '', 235000, 200000, 1, '<p>Sản Phẩm Test 7</p>', '<p>Sản Phẩm Test 7</p>', '<p>Sản Phẩm Test 7</p>', '<p>Sản Phẩm Test 7</p>', 17, '2019-05-09 06:38:22', '2019-05-09 06:38:22'),
(11, 'Sản Phẩm Test 8', 'san-pham-test-8', 'makeup.jpg', '', '', 145000, 0, 1, '<p>Sản Phẩm Test 7</p>', '<p>Sản Phẩm Test 7</p>', '<p>Sản Phẩm Test 7</p>', '<p>Sản Phẩm Test 7</p>', 17, '2019-05-09 06:39:25', '2019-05-09 06:39:25'),
(12, 'Sản Phẩm Test 9', 'san-pham-test-9', 'spbody.png', '', '', 135000, 0, 1, '<p>Sản Phẩm Test 9Sản Phẩm Test 9</p>', '<p>Sản Phẩm Test 9</p>', '<p>Sản Phẩm Test 9</p>', '<p>Sản Phẩm Test 9</p>', 15, '2019-05-09 06:40:24', '2019-05-09 06:40:24'),
(13, 'Sản Phẩm Test 10', 'san-pham-test-10', 'spbody.png', '', '', 125000, 0, 1, '<p>Sản Phẩm Test 9</p>', '<p>Sản Phẩm Test 9</p>', '<p>Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản</p>', '<p>Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản Phẩm Test 9Sản</p>', 15, '2019-05-09 06:42:33', '2019-05-09 06:42:33'),
(14, 'Sản Phẩm Test 11', 'san-pham-test-11', 'spbody.png', '', '', 155000, 0, 1, '<p>Sản Phẩm Test 11</p>', '<p>Sản Phẩm Test 11</p>', '<p>Sản Phẩm Test 11</p>', '<p>Sản Phẩm Test 11</p>', 15, '2019-05-09 06:43:44', '2019-05-09 06:43:44'),
(15, 'Sản Phẩm Test 11', 'san-pham-test-11', 'spbody.png', '', '', 459900, 0, 1, '<p>Sản Phảm Teesst Nh&eacute;</p>', '<p>Sản Phẩm Test 11</p>', '<p><strong>Sản Phẩm Test 11</strong></p>', '<p>Sản Phẩm Test 11</p>', 15, '2019-05-09 06:45:03', '2019-05-09 06:45:03'),
(16, 'Sản Phẩm Test 13', 'san-pham-test-13', 'spbody.png', '', '', 145000, 0, 1, '<p>Sản Phẩm Test 13</p>', '<p>Sản Phẩm Test 13</p>', '<p>Sản Phẩm Test 13</p>', '<p>Sản Phẩm Test 13</p>', 16, '2019-05-10 05:27:02', '2019-05-10 05:27:02'),
(17, 'sản phẩm test 15', 'san-pham-test-15', 'spbody.png', '', '', 500000, 0, 1, '<p>sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15</p>', '<p>sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15</p>', '<p>sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15</p>', '<p>sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15sản phẩm test 15</p>', 15, '2019-05-10 05:31:52', '2019-05-10 05:31:52'),
(18, 'Sản phẩm khác', 'san-pham-khac', 'spddm.jpg', '', '', 255000, 162122, 1, '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', 14, '2019-05-16 16:29:37', '2019-05-16 16:29:37'),
(19, 'sản phẩm test 100', 'san-pham-test-100', 'makeup.jpg', 'spddm.jpg', 'spbody.png', 10000000, 0, 1, '<p>sản phẩm test</p>', '<p>sản phẩm test</p>', '<p>sản phẩm test</p>', '<p>sản phẩm test</p>', 15, '2019-05-21 17:13:51', '2019-05-21 17:31:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_slide`
--

CREATE TABLE `db_slide` (
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `s_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_name2` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `s_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_slide`
--

INSERT INTO `db_slide` (`s_id`, `s_name`, `s_name2`, `s_img`, `s_link`, `created_at`, `updated_at`) VALUES
(1, 'HEALTH AND BEAUTY', 'Tinh Chất Thảo Dược 100% Từ Thiên Nhiên', 'spddm.jpg', 'http://localhost/thientrang/detail/2/kem-duong.html', '2019-03-21 14:10:59', '2019-05-09 06:22:23'),
(2, 'FaceBook: Nguyễn Hải Thiên Trang', 'Hotline:0123456789', 'spddm.jpg', 'http://localhost/thientrang/', '2019-03-21 14:18:51', '2019-05-09 06:24:15'),
(3, 'Luôn Tuyển Chi Nhánh', 'Miễn Phi Giao Hàng Toàn Quốc', 'spddm.jpg', '/', '2019-05-08 09:25:51', '2019-05-09 06:25:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_users`
--

CREATE TABLE `db_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_users`
--

INSERT INTO `db_users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'thientrang98', 'thientrang98@gmail.com', '$2y$10$3gw3ylwbYOMluFai5Mma.OZYQUsoC2E6JgllJ0RC./Mck9suIMmh.', 1, NULL, NULL, '2019-05-23 16:27:10'),
(12, 'thientrang97', 'hanhle@gmail.com', '$2y$10$WPYB7jQCvO7VeL3Op.GSOueuHILNRPMM270ocFPufOe6QUP6grUfC', 0, NULL, '2019-05-10 05:22:28', '2019-05-10 05:22:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_10_093838_db_users', 2),
(4, '2019_03_10_151200_db_category', 3),
(7, '2019_03_13_220914_db_comment', 5),
(8, '2017_06_26_000000_create_shopping_cart_table', 6),
(9, '2019_03_20_142731_db_customers', 6),
(10, '2019_03_20_142908_db_bills', 6),
(11, '2019_03_20_143030_db_bill_details', 6),
(13, '2019_03_21_103927_db_khuyenmai', 7),
(14, '2019_03_21_190553_db_slide', 8),
(16, '2019_03_11_081507_db_product', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_bills`
--
ALTER TABLE `db_bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `db_bills_cus_id_foreign` (`cus_id`);

--
-- Chỉ mục cho bảng `db_bill_details`
--
ALTER TABLE `db_bill_details`
  ADD PRIMARY KEY (`bd_id`),
  ADD KEY `db_bill_details_bill_id_foreign` (`bill_id`),
  ADD KEY `db_bill_details_prod_id_foreign` (`prod_id`);

--
-- Chỉ mục cho bảng `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `db_comment`
--
ALTER TABLE `db_comment`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `db_comment_com_prod_foreign` (`com_prod`);

--
-- Chỉ mục cho bảng `db_customers`
--
ALTER TABLE `db_customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Chỉ mục cho bảng `db_product`
--
ALTER TABLE `db_product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `db_product_prod_cate_foreign` (`prod_cate`);

--
-- Chỉ mục cho bảng `db_slide`
--
ALTER TABLE `db_slide`
  ADD PRIMARY KEY (`s_id`);

--
-- Chỉ mục cho bảng `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`,`instance`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_bills`
--
ALTER TABLE `db_bills`
  MODIFY `bill_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `db_bill_details`
--
ALTER TABLE `db_bill_details`
  MODIFY `bd_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `db_category`
--
ALTER TABLE `db_category`
  MODIFY `cate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `db_comment`
--
ALTER TABLE `db_comment`
  MODIFY `com_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `db_customers`
--
ALTER TABLE `db_customers`
  MODIFY `cus_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `db_product`
--
ALTER TABLE `db_product`
  MODIFY `prod_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `db_slide`
--
ALTER TABLE `db_slide`
  MODIFY `s_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_bills`
--
ALTER TABLE `db_bills`
  ADD CONSTRAINT `db_bills_cus_id_foreign` FOREIGN KEY (`cus_id`) REFERENCES `db_customers` (`cus_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `db_bill_details`
--
ALTER TABLE `db_bill_details`
  ADD CONSTRAINT `db_bill_details_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `db_bills` (`bill_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `db_bill_details_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `db_product` (`prod_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `db_comment`
--
ALTER TABLE `db_comment`
  ADD CONSTRAINT `db_comment_com_prod_foreign` FOREIGN KEY (`com_prod`) REFERENCES `db_product` (`prod_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `db_product`
--
ALTER TABLE `db_product`
  ADD CONSTRAINT `db_product_prod_cate_foreign` FOREIGN KEY (`prod_cate`) REFERENCES `db_category` (`cate_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
