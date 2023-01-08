-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 08, 2023 lúc 12:17 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `name_account` varchar(222) NOT NULL,
  `tk_account` varchar(111) NOT NULL,
  `mk_account` varchar(111) NOT NULL,
  `img_account` varchar(333) NOT NULL,
  `email_account` varchar(255) NOT NULL,
  `certified_buy_account` int(10) NOT NULL DEFAULT 0,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id_account`, `name_account`, `tk_account`, `mk_account`, `img_account`, `email_account`, `certified_buy_account`, `role`) VALUES
(1, 'LÊ VĂN VÕ', 'vo', '111', '20221214_133424.jpg', 'vole@gmail.com', 0, 1),
(2, 'Huyền', 'huyen', '222', 'avt.jpg', 'huyen@gmail.com', 1, 0),
(3, 'Lê Văn Hùng', 'hung', '333', 'Screenshot_20220821-095252_Gallery.jpg', 'hung@gmail.com', 4, 0),
(4, 'võ lê', 'volevan', '1347', '20221010_121925.jpg', 'vole543215@gmail.com', 0, 1),
(7, 'Thế Huỳnh', 'huynh', '1331', 'a18.png', 'huynh@gmail.com', 0, 0),
(8, 'Tùng Đặng', 'tung', 'tung1992', 'img_cua.jpg', 'tung@gmail.com', 0, 1),
(9, 'Trịnh Khánh Ly', 'lyly', 'ly2002', 'a9.jpg', 'ly543215@gmail.com', 1, 0),
(10, 'Hoàng Anh', 'hoanganh', 'hoang@anh', 'a36.png', 'hoanganh@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id_bill` int(11) NOT NULL,
  `name_account_bill` varchar(255) NOT NULL,
  `phone_account_bill` int(11) NOT NULL,
  `address_account_bill` text NOT NULL,
  `img_account_bill` varchar(255) NOT NULL,
  `time_account_bill` varchar(255) NOT NULL,
  `name_pd_bill` varchar(255) NOT NULL,
  `img_pd_bill` varchar(255) NOT NULL,
  `price_pd_bill` double(10,2) NOT NULL,
  `price_pd_all_bill` double(10,2) NOT NULL,
  `quantity_pd_bill` int(11) NOT NULL,
  `connect_to_pd_bill` int(11) NOT NULL DEFAULT 0,
  `connect_to_account_bill` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id_bill`, `name_account_bill`, `phone_account_bill`, `address_account_bill`, `img_account_bill`, `time_account_bill`, `name_pd_bill`, `img_pd_bill`, `price_pd_bill`, `price_pd_all_bill`, `quantity_pd_bill`, `connect_to_pd_bill`, `connect_to_account_bill`) VALUES
(3, 'Lê Văn Hùng', 961556217, 'Thôn công thành - cẩm xuyên - tỉnh Thanh Hóa', 'Screenshot_20220821-095252_Gallery.jpg', '29/12/2022 07:12:35 PM', 'Kobe beef', 'm3.gif', 108.00, 216.00, 2, 20, 3),
(4, 'Lê Văn Hùng', 961556217, 'cổng trường tiểu học Thọ Hải - Thọ Xuân - Thanh Hóa', 'Screenshot_20220821-095252_Gallery.jpg', '29/12/2022 07:13:13 PM', 'Coca', 'd3.gif', 10.00, 70.00, 7, 27, 3),
(5, 'Huyền', 961556217, 'ngã tư Trôi - Hoài Đức - Hà Nội', 'avt.jpg', '30/12/2022 09:53:14 AM', 'Vietnamese avocado', 'a5.gif', 17.00, 102.00, 6, 19, 2),
(6, 'Trịnh Khánh Ly', 966544619, 'Cổng trường trung học Triệu Sơn - Thanh Hóa\r\n', 'a9.jpg', '30/12/2022 08:33:27 PM', 'Rambutan fruit', 'a4.gif', 29.77, 803.79, 27, 24, 9),
(7, 'Hoàng Anh', 933356211, 'Chương Mỹ - Hà Nội', 'a36.png', '30/12/2022 08:53:48 PM', 'Star fruit', 'a1.gif', 5.00, 390.00, 78, 23, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_c` int(11) NOT NULL,
  `name_account_c` varchar(255) NOT NULL,
  `email_account_c` varchar(300) NOT NULL,
  `img_account_c` varchar(255) NOT NULL,
  `name_pd_c` varchar(255) NOT NULL,
  `img_pd_c` varchar(255) NOT NULL,
  `price_pd_c` double(10,2) NOT NULL,
  `discount_pd_c` int(11) NOT NULL,
  `connect_to_account` int(11) NOT NULL DEFAULT 0,
  `connect_to_pd` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_c`, `name_account_c`, `email_account_c`, `img_account_c`, `name_pd_c`, `img_pd_c`, `price_pd_c`, `discount_pd_c`, `connect_to_account`, `connect_to_pd`) VALUES
(9, 'Lê Văn Hùng', 'hung@gmail.com', 'Screenshot_20220821-095252_Gallery.jpg', 'Apple Asian', 'a3.gif', 12.60, 5, 3, 16),
(10, 'Huyền', 'huyen@gmail.com', 'avt.jpg', 'Vietnamese avocado', 'a5.gif', 17.00, 0, 2, 19),
(12, 'Lê Văn Hùng', 'hung@gmail.com', 'Screenshot_20220821-095252_Gallery.jpg', 'Kobe beef', 'm3.gif', 108.00, 0, 3, 20),
(38, 'Lê Văn Hùng', 'hung@gmail.com', 'Screenshot_20220821-095252_Gallery.jpg', 'Italian bacon', 'm1.gif', 77.14, 0, 3, 18),
(45, 'Huyền', 'huyen@gmail.com', 'avt.jpg', 'Italian bacon', 'm1.gif', 77.14, 0, 2, 18),
(49, 'Huyền', 'huyen@gmail.com', 'avt.jpg', 'Star fruit', 'a1.gif', 5.00, 0, 2, 23),
(50, 'Huyền', 'huyen@gmail.com', 'avt.jpg', 'Orange F1-Belgium', 'a2.gif', 16.89, 33, 2, 17),
(51, 'Trịnh Khánh Ly', 'ly543215@gmail.com', 'a9.jpg', 'Rambutan fruit', 'a4.gif', 29.77, 0, 9, 24),
(52, 'Trịnh Khánh Ly', 'ly543215@gmail.com', 'a9.jpg', 'Pepsi', 'd2.gif', 10.00, 0, 9, 29),
(53, 'Trịnh Khánh Ly', 'ly543215@gmail.com', 'a9.jpg', 'Cake colorfull', 'c1.gif', 26.81, 11, 9, 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments_pd`
--

CREATE TABLE `comments_pd` (
  `id_cm` int(11) NOT NULL,
  `name_account_cm` text NOT NULL,
  `img_account_cm` varchar(255) NOT NULL,
  `content_cm` text NOT NULL,
  `time_cm` varchar(255) NOT NULL DEFAULT 'waiting...',
  `key_to_pd` int(11) NOT NULL,
  `key_to_account` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments_pd`
--

INSERT INTO `comments_pd` (`id_cm`, `name_account_cm`, `img_account_cm`, `content_cm`, `time_cm`, `key_to_pd`, `key_to_account`) VALUES
(16, 'võ lê', '20221010_121925.jpg', 'Chào quý khách hàng', '30/12/2022 09:50:00 AM', 14, 4),
(17, 'võ lê', '20221010_121925.jpg', 'Táo rất ngon mua nhanh kẻo hết', '30/12/2022 09:50:44 AM', 16, 4),
(18, 'Huyền', 'avt.jpg', 'Chào chủ shop nha', '30/12/2022 07:23:23 PM', 14, 2),
(19, 'Trịnh Khánh Ly', 'a9.jpg', 'Bánh rất ngon nhé', '30/12/2022 08:35:17 PM', 22, 9),
(20, 'Trịnh Khánh Ly', 'a9.jpg', 'Pepsi ko ngon bằng Coca được', '30/12/2022 08:35:44 PM', 29, 9),
(22, 'Tùng Đặng', 'img_cua.jpg', 'hi', '30/12/2022 08:37:30 PM', 19, 8),
(23, 'Huyền', 'avt.jpg', 'hi', '30/12/2022 08:37:40 PM', 14, 2),
(25, 'Tùng Đặng', 'img_cua.jpg', 'Lại lỗi rồi - fix mệt quá', '30/12/2022 08:39:31 PM', 25, 8),
(26, 'Tùng Đặng', 'img_cua.jpg', 'haizzz...', '30/12/2022 08:40:05 PM', 25, 8),
(27, 'võ lê', '20221010_121925.jpg', '.', '30/12/2022 08:41:25 PM', 25, 4),
(28, 'võ lê', '20221010_121925.jpg', 'Đã fix xong yeah', '30/12/2022 08:41:28 PM', 25, 4),
(29, 'võ lê', '20221010_121925.jpg', 'ok', '30/12/2022 08:41:58 PM', 19, 4),
(30, 'võ lê', '20221010_121925.jpg', '.', '30/12/2022 08:44:46 PM', 19, 4),
(31, 'võ lê', '20221010_121925.jpg', 'lại lỗi', '30/12/2022 08:44:50 PM', 19, 4),
(32, 'Huyền', 'avt.jpg', '.', '30/12/2022 08:45:07 PM', 14, 2),
(33, 'Huyền', 'avt.jpg', 'lỗi nặng', '30/12/2022 08:45:12 PM', 14, 2),
(34, 'Trịnh Khánh Ly', 'a9.jpg', '.', '30/12/2022 08:46:11 PM', 14, 9),
(35, 'Trịnh Khánh Ly', 'a9.jpg', 'lại ổn', '30/12/2022 08:46:15 PM', 14, 9),
(36, 'Tùng Đặng', 'img_cua.jpg', '.', '30/12/2022 08:46:59 PM', 14, 8),
(37, 'Tùng Đặng', 'img_cua.jpg', 'ko ổn', '30/12/2022 08:47:03 PM', 14, 8),
(38, 'Tùng Đặng', 'img_cua.jpg', 'đã bỏ danh hiệu và mất nét đẹp dù đã ổn', '30/12/2022 08:47:45 PM', 14, 8),
(39, 'Tùng Đặng', 'img_cua.jpg', 'đã chỉnh đẹp nhưng lại ko ổn', '30/12/2022 08:50:26 PM', 14, 8),
(40, 'Tùng Đặng', 'img_cua.jpg', 'càng muốn ổn thì lại ko ổn', '30/12/2022 08:51:55 PM', 14, 8),
(41, 'Hoàng Anh', 'a36.png', 'Quyết định ko ổn để dc ổn ))', '30/12/2022 08:54:42 PM', 14, 10),
(42, 'Hoàng Anh', 'a36.png', 'Này Ngon đasy', '30/12/2022 08:55:52 PM', 26, 10),
(43, 'Hoàng Anh', 'a36.png', 'Vừa ăn vừa xem phim rất phù hợp - mọi người nên sử dụng - vừa rẻ vừa ngon ..................', '30/12/2022 08:56:03 PM', 26, 10),
(44, 'Hoàng Anh', 'a36.png', 'Ngọt', '30/12/2022 08:57:44 PM', 17, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinds_pd`
--

CREATE TABLE `kinds_pd` (
  `id_k` int(11) NOT NULL,
  `name_k` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `kinds_pd`
--

INSERT INTO `kinds_pd` (`id_k`, `name_k`) VALUES
(1, 'Fast food'),
(2, 'Drinks'),
(5, 'Meats'),
(6, 'Fruits'),
(8, 'Cake');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_pd` int(11) NOT NULL,
  `name_pd` varchar(222) NOT NULL,
  `img_pd` varchar(333) NOT NULL,
  `price_pd` double(10,2) NOT NULL,
  `detail_pd` text NOT NULL,
  `view_pd` int(11) NOT NULL DEFAULT 0,
  `discount_pd` int(11) NOT NULL DEFAULT 0,
  `connect_to_kinds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_pd`, `name_pd`, `img_pd`, `price_pd`, `detail_pd`, `view_pd`, `discount_pd`, `connect_to_kinds`) VALUES
(14, 'Pig meat USA', 'm4.gif', 39.02, 'So delicious and for u a body healthy.', 144, -23, 5),
(15, 'Cake Chocolate', 'c3.gif', 8.26, 'Sweet sides your family', 64, -24, 8),
(16, 'Apple Asian', 'a3.gif', 12.60, 'Jum jum - 100%', 11, 5, 6),
(17, 'Orange F1-Belgium', 'a2.gif', 16.89, 'Very sweet', 10, 33, 6),
(18, 'Italian bacon', 'm1.gif', 77.14, 'delicious nutritious good for health', 12, 0, 5),
(19, 'Vietnamese avocado', 'a5.gif', 17.00, 'The taste is greasy but not fat', 45, 0, 6),
(20, 'Kobe beef', 'm3.gif', 108.00, 'Raised with American cows for quality meat products', 13, 0, 5),
(21, 'Dragon fruit', 'a6.gif', 11.00, 'Jum', 15, 0, 6),
(22, 'Cake colorfull', 'c1.gif', 26.81, 'Delicious', 21, 11, 8),
(23, 'Star fruit', 'a1.gif', 5.00, 'Sweet taste Slightly sour, suitable for dipping with salt', 8, 0, 6),
(24, 'Rambutan fruit', 'a4.gif', 29.77, 'When eaten, it has a very sweet taste of nature', 13, 0, 6),
(25, 'Carbonated drinks', 'd1.gif', 21.60, 'Taste better when drinking with friends', 8, 0, 2),
(26, 'French fries', 'f2.gif', 31.00, 'Delicious, crunchy, very suitable while watching movies and eating', 3, 0, 1),
(27, 'Coca', 'd3.gif', 10.00, 'Have fun with Coca', 2, 0, 2),
(28, 'Combo x4', 'f1.gif', 44.00, 'Enjoy delicious food', 2, 0, 1),
(29, 'Pepsi', 'd2.gif', 10.00, 'happy with Pepsi', 2, 0, 2),
(30, 'Fried chicken bag', 'f3.gif', 103.50, 'Ôi tuyệt vời làm sao lượm ơi !', 0, 0, 1),
(31, 'Combo x4_part2', 'f1.gif', 99.00, 'Ok', 0, 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id_bill`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_c`),
  ADD KEY `connect_account` (`connect_to_account`),
  ADD KEY `connect_product` (`connect_to_pd`);

--
-- Chỉ mục cho bảng `comments_pd`
--
ALTER TABLE `comments_pd`
  ADD PRIMARY KEY (`id_cm`),
  ADD KEY `id_ketnoi_pd` (`key_to_pd`),
  ADD KEY `id_ketnoi_account` (`key_to_account`);

--
-- Chỉ mục cho bảng `kinds_pd`
--
ALTER TABLE `kinds_pd`
  ADD PRIMARY KEY (`id_k`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_pd`),
  ADD KEY `products_to_kinds` (`connect_to_kinds`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `comments_pd`
--
ALTER TABLE `comments_pd`
  MODIFY `id_cm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `kinds_pd`
--
ALTER TABLE `kinds_pd`
  MODIFY `id_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_pd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `connect_account` FOREIGN KEY (`connect_to_account`) REFERENCES `account` (`id_account`),
  ADD CONSTRAINT `connect_product` FOREIGN KEY (`connect_to_pd`) REFERENCES `products` (`id_pd`);

--
-- Các ràng buộc cho bảng `comments_pd`
--
ALTER TABLE `comments_pd`
  ADD CONSTRAINT `id_ketnoi_account` FOREIGN KEY (`key_to_account`) REFERENCES `account` (`id_account`),
  ADD CONSTRAINT `id_ketnoi_pd` FOREIGN KEY (`key_to_pd`) REFERENCES `products` (`id_pd`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_to_kinds` FOREIGN KEY (`connect_to_kinds`) REFERENCES `kinds_pd` (`id_k`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
