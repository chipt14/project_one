-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 04:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role_id` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `address`, `tel`, `role_id`) VALUES
(16, 'Admin', '1', 'christine@gmail.com', 'Quảng Ninh', '0372953295', 1),
(18, 'Fashe', '1', 'fashe@gmail.com', 'Hà Nội', '0372953295', 0),
(19, 'Baby', '1', 'baby@gmail.com', 'Hà Nội', '0372953295', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_paymethod` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp 2. Chuyển khoản 3.Thanh toán online   ',
  `order_date` varchar(50) DEFAULT NULL,
  `total` int(1) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đang xử lí 1. Đang giao hàng 2. Giao hàng thành công'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `user_id`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_paymethod`, `order_date`, `total`, `bill_status`) VALUES
(111, 16, 'Admin', 'Hà Nội', '0372953295', 'christine@gmail.com', 1, '05/12/2022 21:11:51', 689000, 2),
(112, 18, 'Fashe', 'Hà Nội', '0372953295', 'fashe@gmail.com', 1, '04/12/2022 22:07:03', 399000, 3),
(113, 16, 'Admin', 'Hà Nội', '0372953295', 'christine@gmail.com', 1, '05/12/2022 10:07:11', 569000, 3),
(114, 18, 'Fashe', 'Hà Nội', '0372953295', 'fashe@gmail.com', 1, '05/12/2022 13:34:03', 899000, 1),
(115, 16, 'Admin', 'Hà Nội', '0372953295', 'christine@gmail.com', 1, '06/12/2022 21:03:50', 1350000, 0),
(116, 18, 'Fashe', 'Hà Nội', '0372953295', 'fashe@gmail.com', 1, '07/12/2022 16:52:57', 1297000, 1),
(117, 16, 'Admin', 'Quảng Ninh', '0372953295', 'christine@gmail.com', 1, '10/12/2022 08:03:03', 798000, 2),
(118, 16, 'Admin', 'Quảng Ninh', '0372953295', 'christine@gmail.com', 1, '10/12/2022 08:06:06', 299000, 0),
(119, 16, 'Admin', 'Quảng Ninh', '0372953295', 'christine@gmail.com', 1, '10/12/2022 08:07:53', 675000, 1),
(121, 0, 'chi pham', 'hanoi', '0372953295', 'christine@gmail.com', 1, '10/12/2022 08:53:26', 399000, 0),
(122, 0, 'chi pham', 'hanoi', '0372953295', 'admin', 1, '11/12/2022 12:57:15', 598000, 2),
(123, 16, 'Admin', 'Quảng Ninh', '0372953295', 'christine@gmail.com', 1, '11/12/2022 14:48:41', 300000, 0),
(124, 0, 'thi', 'hanoi', '12345678', 'thi@gmail.com', 1, '11/12/2022 15:57:31', 1269000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `into_money` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `user_id`, `pro_id`, `img`, `name`, `price`, `quantity`, `into_money`, `bill_id`) VALUES
(102, 16, 22, 'sp1.jpg', 'COLE PANTS', 290000, 1, 290000, 111),
(103, 16, 16, '5bfcc6f26b93b.jpg', 'LOE TEE', 399000, 1, 399000, 111),
(104, 18, 16, '5bfcc6f26b93b.jpg', 'LOE TEE', 399000, 1, 399000, 112),
(105, 16, 17, 'sp6.jpg', 'S TEE', 299000, 1, 299000, 113),
(106, 16, 18, 'sp5.jpg', 'TOKYO JEANS', 270000, 1, 270000, 113),
(107, 18, 17, 'sp6.jpg', 'S TEE', 299000, 1, 299000, 114),
(108, 18, 21, 'sp2.jpg', 'MORGAN PANTS', 300000, 2, 600000, 114),
(109, 16, 28, 'sp11.jpg', 'CLASSIC - ALL BLACK', 675000, 2, 1350000, 115),
(110, 18, 21, 'sp2.jpg', 'MORGAN PANTS', 300000, 1, 300000, 116),
(111, 18, 16, '5bfcc6f26b93b.jpg', 'LOE TEE', 399000, 1, 399000, 116),
(112, 18, 20, 'sp3.jpg', 'BUOC PANTS', 299000, 2, 598000, 116),
(113, 16, 16, '5bfcc6f26b93b.jpg', 'LOE TEE', 399000, 2, 798000, 117),
(114, 16, 17, 'sp6.jpg', 'S TEE', 299000, 1, 299000, 118),
(115, 16, 28, 'sp11.jpg', 'CLASSIC - ALL BLACK', 675000, 1, 675000, 119),
(116, 0, 16, '5bfcc6f26b93b.jpg', 'LOE TEE', 399000, 1, 399000, 121),
(117, 0, 17, 'sp6.jpg', 'S TEE', 299000, 2, 598000, 122),
(118, 16, 21, 'sp2.jpg', 'MORGAN PANTS', 300000, 1, 300000, 123),
(119, 0, 22, 'sp1.jpg', 'COLE PANTS', 290000, 3, 870000, 124),
(120, 0, 16, '5bfcc6f26b93b.jpg', 'LOE TEE', 399000, 1, 399000, 124);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_name`) VALUES
(1, 'KIẾN THỨC'),
(2, 'XU HƯỚNG'),
(3, 'PHONG CÁCH');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`) VALUES
(74, 'PHỤ KIỆN', 'SETTLEMENT - NAVY 1.jpg'),
(75, 'QUẦN', 'TOKYO JEANS 1.jpg'),
(76, 'ÁO', 'loe tee 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `date_cmt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `prod_id`, `date_cmt`) VALUES
(17, 'Nếu biết cách nắm bắt thời cơ, bạn hoàn toàn có thể tranh thủ tìm kiếm những mẫu quần áo sale chất lượng tốt, dễ phối hợp với các mùa tiếp theo, với giá thành vô cùng dễ chịu.', 18, 16, '05/12/2022 16:21:16'),
(21, 'Ngày hôm nay sẽ bảo vệ về sản phẩm bán quần áo mong được điểm như ý', 16, 14, '06/12/2022 07:21:46'),
(22, 'Văn học là một trong những loại hình giữ vị trí quan yếu nằm trong 7 loại hình nghệ thuật cơ bản.', 16, 28, '06/12/2022 21:02:41'),
(23, 'Dịch vụ của Google, được cung cấp miễn phí, dịch nhanh các từ, cụm từ và trang web giữa tiếng Anh và hơn 100 ngôn ngữ khác.', 16, 27, '07/12/2022 14:32:16'),
(24, 'Mới đây, video phỏng vấn thí sinh dự thi tuyển sinh ở một trường đại học tại Trung Quốc đã gây tranh cãi khi phóng viên đặt những câu hỏi vô cùng “duyên dáng” cho thí sinh.', 16, 22, '07/12/2022 15:39:49'),
(25, 'Theo đó, cô gái vừa ra khỏi phòng thi đã bị phóng viên gọi lại hỏi liên tiếp “tại sao đi thi còn trang điểm, thời gian trang điểm để ôn tập có phải tốt hơn không?”.', 16, 22, '07/12/2022 15:40:18'),
(26, 'Đáp trả lại, cô gái hỏi ngược lại phóng viên “tại sao đi thi lại không được trang điểm?”, và còn cho biết mình đã được tuyển thẳng rồi, nên chỉ đến dự thi để xem thi như thế nào thôi. ', 16, 22, '07/12/2022 15:40:30'),
(27, 'Chất lượng quần đúng với giá. Mua đúng đợt sale khá hời nha mọi người!', 16, 21, '09/12/2022 13:20:31'),
(28, '\r\nXin chào mọi người mình là Hà Nhi, đây là Youtube chính thức của mình. Youtube channel này để chia sẻ tất cả những bài hát mới của Nhi, những khoảnh khắc trong cuộc sống và công việc của Nhi với tất cả mọi người. Cảm ơn sự yêu quý và quan tâm của tất cả mọi người dành cho Nhi.', 18, 18, '11/12/2022 21:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `full_name`, `tel`, `email`, `message`) VALUES
(1, 'Phạm Thanh Chi', '0372953295', 'thanhchi.pham.14@gmail.com', 'Tôi muốn mua sản phẩm a');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_desc` text NOT NULL,
  `post_content` text NOT NULL,
  `post_img` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_desc`, `post_content`, `post_img`, `post_date`, `blog_id`) VALUES
(2, 'Sắc tố da của bạn là gì? Bí kíp phối màu trang phục cho từng sắc tố da', 'Bàn về việc chọn màu sắc quần áo sao cho phù hợp với làn da, đa số mọi người đều cho rằng da ngăm hợp màu tối, da trắng dễ phối màu. Quan niệm như vậy đã thực sự đúng? Trên thực tế, để quyết định màu sắc trang phục phù hợp, chúng ta cần xác định rõ sắc tố da (undertone) của mình.', 'Bàn về việc chọn màu sắc quần áo sao cho phù hợp với làn da, đa số mọi người đều cho rằng da ngăm hợp màu tối, da trắng dễ phối màu. Quan niệm như vậy đã thực sự đúng? Trên thực tế, để quyết định màu sắc trang phục phù hợp, chúng ta cần xác định rõ sắc tố da (undertone) của mình.\r\n1. Cách xác định sắc tố da\r\nSắc tố da hay còn gọi là undertone. Mỗi người sẽ có một loại undertone khác nhau, không thay đổi theo thời gian. Sắc tố da khác hẳn với màu da (màu da sẽ thay đổi khi có tác động từ môi trường, thực phẩm, sinh lý…). Sắc tố da chỉ sắc độ, tông màu da của bạn (tông ấm, lạnh, trung tính)\r\n2. Sắc tố da ấm (Warm Undertone)\r\nĐối với cô nàng có sắc tố da ấm, cách phối màu quần áo mà bạn nên chọn là những tông màu ấm, nóng như đỏ, san hô, vàng, cam, hồng đào.\r\n3. Sắc tố da lạnh (Cool Undertone)\r\nNgược lại, những sắc xanh và tím như xanh ngọc, xanh nước biển, thạch anh tím, màu lavender sẽ là sự lựa chọn hoàn hảo cho cô nàng có Cool Undertone.\r\n4. Sắc tố da trung tính (Neutral Undertone)\r\nDường như những cô gái Neutral Undertone luôn rạng rỡ khi chọn bất kì cách phối màu quần áo nào. Nhưng những sắc màu nhẹ nhàng sẽ luôn phù hợp với nàng hơn.\r\nĐối với trang phục màu trung tính, cách phối màu quần áo tốt nhất sẽ là những tông màu trắng, xám và đen. Các nàng cũng đừng quên tránh xa những gam màu rực rỡ vì chúng sẽ áp đảo làn da của bạn. \r\nVới những bí quyết trên đây, Fahse. hi vọng bạn sẽ hiểu về làn da của mình hơn để có những sự lựa chọn màu sắc phù hợp. Hãy ghé thăm website Fashe. ngay để lựa chọn cho tủ đồ của mình thêm nhiều màu sắc quần áo hơn bạn nhé!', 'post 1.jpg', 'December 9, 2022', 1),
(3, 'Đi đám cưới mặc gì? Cách lựa chọn trang phục phù hợp dành cho nàng', 'Mùa cưới đến, không ít nàng băn khoăn vì không biết lựa chọn mẫu đầm dự tiệc sao cho nổi bật mà không “át vía cô dâu”. Fashe sẽ chỉ bạn cách chọn trang phục phù hợp mà vẫn thật xinh đẹp nhé!', 'Mùa cưới đến, không ít nàng băn khoăn vì không biết lựa chọn mẫu đầm dự tiệc sao cho nổi bật mà không “át vía cô dâu”. Fashe sẽ chỉ bạn cách chọn trang phục phù hợp mà vẫn thật xinh đẹp nhé!\r\n\r\n1. Chọn trang phục theo Dresscode\r\nTrong nhiều sự kiện trang trọng, đặc biệt là lễ cưới, phía tổ chức lễ sẽ yêu cầu những quan khách tham gia buổi lễ phải tuân thủ theo một nguyên tắc ăn mặc nào đó do phía tổ chức lễ quy định. Quan khách khi tham gia lễ phải tuân thủ theo những nguyên tắc trang phục này để tạo sự đồng bộ với tất cả mọi người. Đó được gọi chung là dresscode. \r\n\r\nHiện nay, nhiều người tổ chức tiệc cưới sẽ thường ghi rõ dresscode trong thiệp mời, vì vậy nàng cần đọc rõ để tránh những tình huống bối rối trong tiệc cưới nhé.\r\n\r\n2. Chọn trang phục phù hợp với địa điểm tổ chức đám cưới\r\nTiệc cưới tại nhà hàng/ khách sạn\r\nMột buổi tiệc cưới được tổ chức trong khách sạn sang trọng, quy mô thì nàng nên đầu tư kỹ cho phần trang phục của mình.\r\n\r\nLựa chọn tông màu đen nhưng vẫn cực thu hút bởi chất liệu và thiết kế độc đáo.\r\n\r\nCác chất liệu đầm từ lụa, vải tapta giúp nàng trông thật sang trọng.\r\n\r\nHoặc lựa chọn set đồ áo yếm, quần dài cũng rất phù hợp với các bữa tiệc bên bờ biển.\r\n\r\nTiệc cưới trong vườn\r\n \r\n\r\nTiệc cưới được tổ chức ở sân vườn với những bãi cỏ xanh mát sẽ đem đến cảm giác dễ chịu. Vì thế, hãy chọn những trang phục có thiết kế tối giản, nhẹ nhàng và trẻ trung nhé.\r\n\r\n3. Chọn trang phục phù hợp với vóc dáng cơ thể\r\nTrang phục đẹp nhất là khi bạn cảm thấy tự tin nhất và thoải mái khi mặc. Bởi vậy việc lựa chọn trang phục sao cho phù hợp với vóc dáng nàng là điều rất quan trọng.\r\n\r\n \r\n\r\nNàng “nấm lùn” hãy chọn các thiết kế đầm ngắn, tối giản chi tiết, diện cùng đôi giày cao gót sẽ khiến nàng thật nổi bật.\r\n\r\nMẫu đầm trễ vai là sự lựa chọn hoàn hảo dành cho nàng muốn che khuyết điểm ở bắp tay.\r\n\r\nNàng muốn giấu vòng 2 hãy chọn các mẫu đầm suông hoặc đầm có tùng xòe rộng nhé!\r\n\r\n4. Chọn trang phục theo cá tính của bạn\r\nTrang phục đi tiệc cưới không chỉ là những mẫu đầm formal mà dù nàng theo phong cách nào cũng sẽ có nhiều lựa chọn phù hợp dành cho mình.\r\n\r\nPhóng khoáng nam tính\r\nLựa chọn một bộ suit thoải mái, thời thượng cùng tông màu tươi sáng, kết hợp cùng phụ kiện kính mắt, giày cao gót, túi xách là diện mạo hoàn hảo dành cho nàng cá tính, hiện đại.\r\n\r\nYêu kiều quyến rũ\r\nNàng nữ tính và muốn một diện mạo quyến rũ thì hãy chọn những mẫu đầm ôm sát, tôn dáng hoặc những thiết kế cut-out khéo léo khoe vóc dáng nàng.\r\n\r\nTối giản nhưng không đơn giản\r\nĐiểm cộng cho trang phục tối giản là cách nàng kết hợp cùng phụ kiện độc đáo hay những món đồ “hàng hiệu” sẽ giúp nàng thật ấn tượng.\r\n\r\nHi vọng bài viết đã giúp nàng “gỡ rối” và lựa chọn được những bộ cánh xinh đẹp dành cho tiệc cưới. Nàng đừng quên ghé thăm website/app IVY moda để mặc đẹp hơn mỗi ngày nhé!', 'post 2.jpg', 'December 9, 2022', 2),
(4, 'Dark Academia - Phong cách thời trang mang màu sắc quý tộc châu Âu', 'Dark Academia - Phong cách rất thời trang quen thuộc trong những bộ phim Hollywood hoài cổ. Bạn có từng suýt xoa trước gu ăn mặc sang trọng, quyền quý của các nhân vật trong Harry Potter hay Wild Child? Đó chính xác là phong cách thời trang Dark Academia đặc trưng mà chúng ta đang nói tới.. Hãy cùng Fahse tìm hiểu về Dark Academia trong bài viết dưới đây.', 'Dark Academia - Phong cách rất thời trang quen thuộc trong những bộ phim Hollywood hoài cổ. Bạn có từng suýt xoa trước gu ăn mặc sang trọng, quyền quý của các nhân vật trong Harry Potter hay Wild Child? Đó chính xác là phong cách thời trang Dark Academia đặc trưng mà chúng ta đang nói tới.. Hãy cùng Fashe tìm hiểu về Dark Academia trong bài viết dưới đây.\r\n\r\nSơ lược về phong cách thời trang Dark Academia\r\nThời trang Dark Academia phổ biến từ những năm 30, 40 của thế kỷ trước. Bản thân nó có lịch sử hình thành lâu đời với nguồn cảm hứng xa xưa. Khoảng thời gian gần đây phong cách này đang tạo nên cơn sốt khiến không ít thế hệ Gen Z mê mẩn.\r\n\r\nPhong cách thời trang Dark Academia là gì?\r\nDark Academia là phong cách thời trang bắt nguồn từ nghệ thuật phương Tây. Phong cách này xuất phát từ quan niệm cổ điển của giới quý tộc Châu Âu về cái đẹp. Do đó, phong cách này đặc biệt gắn với văn học cổ điển, tri thức và sự tôn trọng chủ nghĩa cá nhân. Thoạt nhìn, phong cách thời trang Dark Academia có phần khá trầm tối và bí ẩn. Song, phong cách này cũng là điều khiến phong cách này trở nên hấp dẫn. Những người theo đuổi thời trang Dark Academia thường có niềm đam mê khám phá lịch sử, văn học và đặc biệt là cái đẹp.\r\n\r\nLịch sử hình thành phong cách Dark Academia\r\nĐể hiểu rõ phong cách Dark Academia là gì? Hãy cùng đào sâu vào lịch sử và nguồn gốc hình thành của phong cách nào. Như đã đề cập ở trên, phong cách này tồn tại từ thời kì hoàng kim của quý tộc Châu Âu. Cụ thể hơn, phong cách Dark Academia khởi nguồn từ đồng phục của học sinh tư thục vào những năm 1930 - 1940. Vào thời điểm này, đây là phong cách phổ biến trong giới thượng lưu. Quần áo, phong cách Dark Academia sẽ giúp diện thể hiện sự ngưỡng mộ đối với văn học cổ điển. Đó là lý do vì sao phong cách này có phần trầm tối và bí ẩn. \r\n\r\nVì sao phong cách Dark Academia được tín đồ thời trang yêu thích?\r\nDù đã xuất hiện khá lâu, song gần đây Dark Academia vẫn gây bão trong cộng đồng Gen Z. \r\n\r\nPhong cách phổ biến trên mạng xã hội\r\nPhong cách Dark Academia không chỉ xuất hiện trong phim ảnh mà xu hướng này còn tiếp cận với thế hệ trẻ trên mạng. Với hashtag #DarkAcademia, bạn có thể tìm thấy vô vàn những hình ảnh đặc trưng với phong cách này. Tiktok và các MXH phổ biến hiện nay cũng ghi nhận gần 11 triệu lượt xem các video với chủ đề Dark Academia. \r\n\r\nCó thể thấy, xu hướng này có ảnh hưởng lớn đối với thế hệ Gen Z trên không gian mạng. \r\n\r\nKhông dừng lại trong giới thời trang, phong cách Dark Academia còn đi vào lối sống hàng ngày của người trẻ.\r\n\r\nPhong cách hoài niệm cổ điển\r\nGiữa rất nhiều phong cách thời trang hiện đại đang hình thành có rất nhiều người vẫn yêu thích sự hoài cổ và xưa cũ. Những người này thể hiện niềm say mê đó trong âm nhạc của họ, cách họ sống và trang phục họ mặc. Phong cách Academia tương tự với phong cách thời trang vintage. Vốn mang vẻ đẹp cổ kính, lãng mạn, phối đồ Dark Academia giúp người mặc thể hiện rõ cá tính của mình. \r\n\r\nMàu sắc trang phục nhã nhặn, trầm ấm\r\nPhối màu Dark Academia được lấy màu chủ đạo là tông màu trầm ấm, thể hiện nét đẹp nhã nhặn, tinh tế. Với nhiều người, phong cách này khá đen tối và đượm buồn. Song, trên thực tế phong cách Dark Academia có rất nhiều nhánh nhỏ. \r\n\r\nCùng với sự phát triển của thời trang, ba xu hướng chính của thời trang đã được hình thành. Đó là phong cách Light Academia, Dark Academia, và Darkest Academia. Light Academia đặc trưng với các tông màu be, màu nâu nhạt, có phần tươi sáng và nhã nhặn. Trong khi đó, Dark Academia lại mang đến cảm giác trưởng thành và quyền lực với palette tông màu đậm. Darkest Academia sẽ thiên về phong cách Gothic cùng tông đen làm chủ đạo.\r\n\r\nNhững điểm đặc trưng của phong cách Dark Academia\r\nNếu bạn đang mong muốn theo đuổi phong cách Dark Academia hãy lưu ý những nét đặc trưng sau để có một set đồ hoàn hảo nhất. \r\n\r\nChất liệu trang phục đa dạng\r\nXuất phát từ nơi có thời tiết ôn đới, phối đồ theo phong cách Dark Academia mang đặc trưng với nhiều lớp kết hợp khác nhau. Điều này đòi hỏi sự đa dạng trong chất liệu bạn sử dụng. Bạn có thể diện một chiếc áo sơ mi lanh bên trong, áo len cardigan và khoác ngoài là một chiếc blazer chất dạ. \r\n\r\nGam màu hoài cổ\r\nPalette là đặc điểm nhận dạng chính của phong cách Dark Academia. Khi phối đồ phong theo cách Dark Academia, bạn cần chú ý sử dụng gam màu hơi hướng thu - đông hoài cổ. Những tông màu như nâu đất, vàng kem, đỏ rượu sẽ giúp tôn lên làn da trắng. Kết hợp cùng với hoạ tiết kẻ ô truyền thông, tạo nên tinh thần của phong cách thời trang Dark Academia.\r\n\r\nPhụ kiện hơi hướng vintage\r\nDark Academia luôn gắn liền với sự xa hoa, đắt đỏ. Song, ngày nay, việc phối đồ theo phong cách này khá dễ để tìm kiếm các món phụ vintage để “mix & match” tạo nên set đồ. Bạn có thể lựa chọn cho mình phụ kiện chất liệu đồng với hoạ tiết cổ. Bên cạnh đó, thiết kế đính đá cũng là một gợi ý không tồi. Nếu bạn đang muốn thăng cấp cho tổng thể bộ trang phục của mình thì bạn nên chọn các phụ kiện ngọc trai.\r\n\r\nNhững item tạo nên phong cách thời trang Dark Academia\r\nNếu bạn chưa biết Dark Academia style là gì? Mới tập tành phối đồ theo phong cách Dark Academia và không biết nên bắt đầu phối đồ từ đâu? Đừng lo, những gợi ý phối đồ sau đây sẽ dành cho bạn.\r\n\r\nDark Academia với áo sơ mi\r\nÁo sơ mi là item cơ bản nhất với những ai theo đuổi phong cách phối đồ Dark Academia. Với phong cách Dark Academia nam các bạn có thể lựa chọn áo sơ mi như lớp áo trong cùng, bên ngoài khoác thêm áo cardigan hay blazer, phù hợp với không khí mùa thu đông. Tới mùa hè, bạn có thể phối sơ mi cùng với quần kaki hoạ tiết kẻ sọc. Kết hợp cùng một số phụ kiện như mũ, vòng cổ và thắt lưng. Vẫn đảm bảo đúng phong cách Dark Academia mùa hè và không rơi vào trường hợp “thời trang phang thời tiết”.\r\n\r\nKnitwear\r\nKnitwear hay áo len đã trở nên quá phổ biến đối đối với tín đồ Dark Academia. Item này khá đơn giản, nhã nhặn đặc biệt phù hợp diện vào mùa đông lạnh. Khi phối đồ, bạn có thể mặc bên ngoài một chiếc áo sơ mi cùng với phụ kiện là một chiếc caravat. Tổng thể set đồ đúng chuẩn phong cách Harry Potter.\r\n\r\nÁo khoác dáng dài\r\nÁo dài là một trong những trang phục “must-have” để thăng cấp cho phong cách của bạn. Trang phục này rất phổ biến với phong cách Dark Academia cho nam, thể hiện nét đẹp quyền lực, cuốn hút. Các bạn nữ khi diện áo khoác dài tạo cảm giác thanh lịch, tinh tế.  Có thể nói, với trang phục này, tổng thể set đồ của bạn sẽ được thăng hạng kha khá. Song, với các bạn trẻ miền Nam nên chú ý đến chất liệu khi lựa chọn áo khoác. Chất liệu dày sẽ không phù hợp với thời tiết nắng nóng quanh năm.\r\n\r\nÁo len cardigan\r\nNếu áo khoác dài tạo cảm giác cuốn hút, sang chảnh thì áo cardigan sẽ làm mềm tổng thể set đồ của bạn. Loại áo này rất phù hợp để diện vào mùa thu Hà Nội. Khi phối đồ, bạn hãy lựa chọn những tông màu ấm, kết hợp cùng áo thun cổ lọ. Tô điểm cho set đồ bằng một vài phụ kiện nữa là bạn đã có cho mình một tổng thể Light Academia tinh tế.\r\n\r\nTrang phục Sweater Vest\r\nSweater Vest hay áo gile len là item”must-have” với những người theo đuổi phong cách học đường, trí thức. Loại áo này có thể kết hợp cùng áo sơ mi và quần cạp cao, set đồ này rất phù hợp với phong cách Dark Academia nữ.\r\n\r\nDark Academia với quần\r\nThông thường, mọi thường chú trọng vào phần trên mà quên mất quần cũng đóng vai trò quan trọng. Bạn có thể lựa chọn quần Tây dáng suông với tone màu trầm để phù hợp với phong cách Dark Academia. Trong trường hợp không biết phối đồ với quần tây bạn có thể thay thế bằng quần kaki xắn gấu sẽ giúp tối ưu set đồ của bạn.\r\n\r\nDark Academia với giày da\r\nNhững đôi Chelsea boot da hay Dr.Martens là gợi ý đáng quan tâm dành cho các tín đồ Dark Academia. Bên cạnh đó, những đôi giày da cao cổ sẽ làm tổng thể trang phụ của bạn sang trọng hơn.\r\n\r\nCách phối đồ chuẩn phong cách thời trang Dark Academia vừa cổ điển vừa quý tộc\r\nSau đây là những gợi ý phối đồ theo chuẩn phong cách Dark Academia mà bạn có thể tham khảo.\r\n\r\nÁo sweater kết hợp cùng áo choàng và quần tây và giày chelsea\r\nĐây là sự kết hợp hoàn hảo trong cách phối đồ Dark Academia cho nam và nữ. Set đồ tuy đơn giản, nhưng vẫn mang lại cảm giác vô cùng tinh tế và thanh lịch. Bên cạnh đó, để thêm phần “quý tộc” bạn có thể kết hợp cùng các phụ kiện hơi hướng vintage như mũ và kính mắt sẽ gợi ý không tồi.\r\n\r\nPhong cách Dark Academia cho phái nữ\r\nPhong cách Dark Academia dành cho nữ thường rất đa dạng. Nếu theo đuổi phong cách trường học, bạn có thể diện áo sơ mi cùng knitwear và kaki kẻ ô. Hoàn chỉnh set đồ với một đôi Oxford cổ ngắn đi cùng tất cổ cao cùng tông màu. Ngoài ra, nếu bạn là những cô nàng thời thượng, yêu thích phối đồ hãy thử kết hợp layer, “mix & match” để thể hiện cá tính của riêng mình.\r\n\r\nNgười ta thường ví von Dark Academia là đen tối, không phù hợp với những cô gái nhẹ nhàng, điều đó không hề đúng. Các bạn có thể diện áo sơ mi trắng tay bồng, diện ngoài là váy hai dây dài. Tổng thể set đồ lấy tông đen chủ đạo sẽ khiến các bạn vừa chất lại vẫn nhẹ nhàng, thu hút.\r\n\r\nPhong cách Dark Academia cho nam\r\nSo với nữ giới, phái mạnh thường không có nhiều lựa chọn phối đồ theo phong cách Dark Academia. Tuy nhiên các bạn vẫn có thể chú trọng thay đổi chất liệu, màu sắc và những hoạ tiết trên trang phục thay vì kiểu dáng. Bạn có thể sử dụng quần kaki thay thế cho quần tây, tạo cảm giác trẻ trung, thoải mái hơn. Các phụ kiện như caravat, khăn cashmere sẽ tạo cảm giác lịch lãm, đúng chuẩn quý ông.', 'post 3.png', 'December 9, 2022', 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `sale` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `descrip` text NOT NULL,
  `views` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale`, `img`, `descrip`, `views`, `cate_id`) VALUES
(12, 'NEW YORK TEE', 299000.00, 0.00, 'ao2.jpg', '“Chẳng có cách nào thể hiện Cá Tính bản thân tuyệt hơn một chiếc Áo Phông!”\r\nNếu là một người bạn lâu năm của Fashe, chắc chắn ai cũng thấy văn hóa Mỹ ảnh hưởng sâu sắc đến thương hiệu của chúng mình, từ cách trang trí cửa hàng, logo nhỏ ở mỗi góc sản phẩm,.... Đơn giản vì ở SSS., chúng mình luôn cố gắng học hỏi từ những điều tốt nhất, mà một trong số đó phải kể đến ý chí và nghị lực xuất sắc của người Mỹ trong công việc. Với họ, thành công sẽ đến với những người chăm chỉ, những người luôn sống và làm việc với 200% công suất.\r\nĐó là lí do vì sao những sản phẩm của Fashe luôn mang hơi thở của nước Mỹ, đặc biệt là dòng áo phông “New York”. Trẻ trung, nhiệt huyết nhưng vẫn vô cùng bảnh bao, chỉ một chiếc áo phông đã đủ để thể hiện hết những cá tính, tham vọng của bất cứ chàng trai nào!', 100, 76),
(14, 'GREAT LIFE TEE', 129000.00, 0.00, 'sp9.jpg', '“Để mỗi ngày bạn thức dậy lại là một ngày Tuyệt Vời”\r\nVới sứ mệnh mang đến vẻ đẹp “Bảnh bao từ bên trong”, Fashe chúng mình luôn tâm niệm phải mang đến những sản phẩm không chỉ Đẹp, mà còn luôn phải khiến bạn bè gần xa cảm thấy Tuyệt Vời mỗi ngày.\r\nHiểu được mong muốn của các bạn, chúng mình đã ấp ủ từ lâu một mẫu áo phông “Tuyệt vời” chỉ chờ hôm nay để trình làng - GREAT LIFE TEE Là phiên bản nâng cấp từ “người anh em” Great Day Tee, Great Life Tee đã được hoàn thiện thiết kế - Chất Lượng hơn từ phần cổ áo bo đến từng đường kim mũi chỉ & Form áo. Great Life Tee xứng đáng là Mẫu Áo Phông Xuất Sắc Nhất từng được SSStutter thiết kế.', 200, 76),
(15, 'LAMOUR TEE', 299000.00, 190000.00, 'sp8.jpg', '“Hạ Gục” Vài Trái Tim Chỉ Bằng Một Ánh Nhìn Với OH L’AMOUR TEE\r\n\r\nBạn có tin vào Tình yêu chỉ từ một câu nói?\r\n\r\nOh L’amour trong Tiếng Pháp nghĩa là “Ôi! Tình yêu”. Đó là cách gọi ngọt ngào mà những chàng trai lãng mạn xứ Pháp gọi người tình của mình. Truyền thuyết kể rằng, tiếng gọi đầy sức mê hoặc này đã thu hút không biết bao nhiêu con tim si mê, làm xao xuyến không biết bao cô gái trẻ đẹp.\r\n\r\nẤn tượng từ lâu với câu nói đầy lãng mạn “Ôi! Tình yêu” này, SSStutter đã phải gửi ngay vào sản phẩm áo phông mới nhất của chúng mình - OH L’AMOUR TEE\r\nChưa kể đến ý nghĩa cực tình trên áo, bản thân Oh L’amour Tee đã là một trong những chiếc áo phông tốt nhất từng được Fashe sản xuất, với thiết kế Chất lượng đến từng đường kim mũi chỉ. Thêm điểm nhấn với màu sắc mới lạ, chiếc áo này chắc chắn sẽ khiến vài trái tim đang thổn thức ngay từ cái nhìn đầu tiên đấy!', 300, 76),
(16, 'LOE TEE', 399000.00, 0.00, '5bfcc6f26b93b.jpg', 'Suốt 5 năm làm nghề, cuối cùng vẫn là mẫu áo này đẹp xuất sắc nhất!\r\nTrẻ trung thoải mái với thiết kế như áo phông, nhưng vẻ thanh lịch, nhã nhặn từ chất vải đến form dáng của những chiếc sơ mi vẫn chẳng lẫn đi được, chỉ có thể là siêu phẩm “không lo đụng hàng” mới trình làng của Fashe- Loe Tee.', 400, 76),
(17, 'S TEE', 299000.00, 0.00, 'sp6.jpg', 'Áo phông cổ tròn kiểu dáng cơ bản. Chất liệu cotton poly pha 5% PU đảm bảo các yếu tố - thoáng mát, mềm mại, co dãn tốt, bền bỉ. Màu sắc be, xanh lá tươi trẻ, đầy sức sống nhưng không quá nổi, ngược lại tạo thiện cảm dễ chịu. Điểm nhấn là hình thêu nhỏ xuất hiện trên túi áo tạo hiệu ứng thị giác thú vị. Sản phẩm nằm trong Youth Summer Collection 2020 của S TEE.', 10, 76),
(18, 'TOKYO JEANS', 430000.00, 270000.00, 'sp5.jpg', 'Biến hóa trẻ trung đầy năng lượng với Tokyo Jeans\r\n\r\nCả tuần đi học đi làm ăn mặc chỉn chu lịch sự rồi, đã đến lúc để “đổi gió” với chút streetstyle từ những items năng động và đầy phong cách, điển hình như mẫu quần Tokyo Jeans mới ra mắt của SSS.\r\nQuần Jeans thì không phải bàn về độ linh hoạt trẻ trung rồi, nhưng với phiên bản quần Tokyo còn được cộng thêm vài điểm năng động, cá tính với màu quần xanh sáng, form quần rộng rãi. Chất quần được cải tiến gấp 3 lần, mềm mại, mỏng nhẹ và co giãn vừa phải, để bạn luôn thoải mái và tự tin suốt cả ngày đi chơi.', 150, 75),
(19, 'WIDE PANTS', 199000.00, 0.00, 'sp4.jpg', 'Thế giới chỉ có 2 loại đàn ông. Một là những bạn luôn tốn ít nhất 20’ mỗi sáng chỉ để chọn lựa, là lượt một bộ outfit phù hợp, thế rồi… muộn việc. Hai là loại mở tủ đồ ra và chọn ngay bộ outfit ngoài cùng, để rồi cả tháng cũng chỉ quanh quẩn 2, 3 kiểu nhàm chán.\r\n\r\nTừ nay bớt hẳn lo lắng mỗi sáng vì chuyện Outfit đi nhé, vì Fashe đã có cho bạn “giải pháp” hoàn hảo - Wide Pants rồi đây.\r\nVừa mới được Fashe trình làng nhưng Wide Pants đã ghi điểm tuyệt đối nhờ form dáng Rộng rãi, Thoải mái, đảm bảo đi cả ngày cũng không khó chịu. Lại được thêm chất liệu khaki trẻ trung, màu sắc bắt mắt, phối với sơ mi thì vừa thanh lịch lại có gout, phối với áo phông thì thừa sức trẻ trung cá tính với chút phong cách streetstyle. Đúng là một chiếc quần “đa năng”, xứng đáng được nằm ngoài cùng tủ quần áo hàng ngày đó!', 90, 75),
(20, 'BUOC PANTS', 299000.00, 0.00, 'sp3.jpg', 'Tuyệt Chiêu “Mặc Mà Như Không”, Thoải Mái Năng Động Với Chiếc Quần BUOC PANTS\r\nNếu bạn đang tìm một chiếc quần mặc dễ chịu, khỏi tốn thời gian mặc gì mà vẫn thoải mái vô cùng; hay chỉ đơn giản là đã quá chán với những chiếc quần âu thông thường, câu trả lời chính là BUOC PANTS!\r\nBuoc Pants - sản phẩm chưa kịp ra mắt đã bị bạn bè giục “làm nhanh lên để mua” vì độ thoải mái, thuận tiện vận động mà trông vẫn rất thanh lịch. . Điểm nhấn hoàn hảo cho chiếc quần này là ở phần chun buộc bụng, cộng thêm chất vải mềm nhẹ, khiến người mặc cứ có cảm giác… như không mặc gì. Thoải mái là thế nhưng Buoc Pants vẫn rất Tinh tế nhờ họa tiết kẻ sọc với form quần cắt may gọn gàng, xứng đáng điểm Bảnh bao luôn.', 99, 75),
(21, 'MORGAN PANTS', 400000.00, 300000.00, 'sp2.jpg', 'Vì Fashe hiểu ai cũng cần một chút biến tấu mới lạ giữa cả trăm mẫu quần âu, khaki quen thuộc mà.\r\nNếu có đang tìm một điểm nhấn độc đáo chẳng lo “đụng hàng” cho tủ đồ, Morgan Pants chính là gợi ý hoàn hảo dành cho bạn.\r\nMorgan Pants - sản phẩm quần chủ đạo được SSStutter nghiên cứu suốt 03 tháng, với cảm hứng từ sự thoải mái của quần thể thao. Chất liệu quần cao cấp, mềm mại co giãn, cùng điểm nhấn phần kẻ trắng trắng dậm chất thể thao, nhưng kiểu dáng ôm gọn tinh tế, Morgan Pants vẫn giữ nguyên vẻ thanh lịch phù hợp đi làm, đi học.\r\nGợi ý: Thu này diện Morgan Pants với một chiếc áo phông trơn cùng giày thể thao, bạn đã có một outfit thừa sức trẻ trung, có gout ai nhìn cũng phải ngưỡng mộ đấy!', 199, 75),
(22, 'COLE PANTS', 390000.00, 290000.00, 'sp1.jpg', 'Cole Pants - Chiếc quần hoàn hảo nhất mùa thu này\r\n\r\nNếu đã quá chán với những mẫu quần âu, khaki thông thường, hay chỉ đơn giản là đang tìm kiếm một mẫu quần độc đáo khó ai “đụng hàng” được, đây chính là lựa chọn hoàn hảo cho bạn.\r\nCole Pants - sản phẩm được Fashe. ấp ủ suốt nhiều tháng trời chính thức ra mắt. Chất vải quần cao cấp nhập khẩu cực đẹp và cực hiếm, với độ dày vừa phải để quần vừa đứng dáng vừa giữ ấm những ngày se lạnh, nhưng vẫn mềm mại và co giãn cho bạn thoải mái vận động cả ngày. Chút biến tấu đường chỉ trắng nơi viền quần, vừa đủ để tạo nét phá cách ai nhìn cũng phải hỏi thăm địa chỉ mua đấy!', 290, 75),
(24, 'BP-VANS-FLAME', 420000.00, 0.00, 'sp15.jpeg', 'Chất liệu: 100% Polyester<br>Màu sắc: Đen <br>Ngăn laptop: 13 inch<br>Kích thước: Cao 43cm / Ngang 31cm / Sâu 12cm', 350, 74),
(25, 'CLASSIC - ECLIPSE X', 675000.00, 0.00, 'sp14.jpg', 'Chất liệu: Vải thô canvas<br>Màu sắc: Xanh dương<br>Ngăn laptop: 15.6 inch<br>Kích thước: Cao 42cm / Ngang 31cm / Sâu 17cm', 230, 74),
(26, 'BALO HZ-0475A', 580000.00, 0.00, 'sp13.jpg', 'Chất liệu: Vải thô canvas<br>Màu sắc: Xám đậm<br>Ngăn laptop: 14 inch<br>Kích thước: Cao 42cm / Ngang 31cm / Sâu 17cm', 66, 74),
(27, 'SETTLEMENT - NAVY', 950000.00, 855000.00, 'sp12.jpg', 'Chất liệu: 100% Polyester<br>Màu sắc: Xanh navy<br>Ngăn laptop: 15 inch<br>Kích thước: Cao 45cm / Ngang 31cm / Sâu 14.6cm', 33, 74),
(28, 'CLASSIC - ALL BLACK', 750000.00, 675000.00, 'sp11.jpg', 'Chất liệu: Polyethylene Foam (Chống nước, chống khuẩn và làm sạch dễ dàng)<br>Màu sắc: Đen<br>Ngăn laptop: 15.6 inch<br>Kích thước: Cao 46cm / Ngang 30cm / Sâu 13cm<br>Xuất xứ: Việt Nam', 220, 74);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(0, 'Khách hàng'),
(1, 'Quản trị viên');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relation_prod_cate` (`cate_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `relation_prod_cate` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
