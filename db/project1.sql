-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 04:07 AM
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
(112, 18, 'Fashe', 'Hà Nội', '0372953295', 'fashe@gmail.com', 1, '04/12/2022 22:07:03', 399000, 2),
(113, 16, 'Admin', 'Hà Nội', '0372953295', 'christine@gmail.com', 1, '05/12/2022 10:07:11', 569000, 0),
(114, 18, 'Fashe', 'Hà Nội', '0372953295', 'fashe@gmail.com', 1, '05/12/2022 13:34:03', 899000, 1),
(115, 16, 'Admin', 'Hà Nội', '0372953295', 'christine@gmail.com', 1, '06/12/2022 21:03:50', 1350000, 0),
(116, 18, 'Fashe', 'Hà Nội', '0372953295', 'fashe@gmail.com', 1, '07/12/2022 16:52:57', 1297000, 1);

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
(112, 18, 20, 'sp3.jpg', 'BUOC PANTS', 299000, 2, 598000, 116);

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
(19, 'Dù là cơm mưa băng giá, dù đợi chờ là nỗi xót xa dù tình chỉ là mong manh bờ môi còn khao khát chờ', 16, 16, '05/12/2022 18:58:48'),
(21, 'Ngày hôm nay sẽ bảo vệ về sản phẩm bán quần áo mong được điểm như ý', 16, 14, '06/12/2022 07:21:46'),
(22, 'Văn học là một trong những loại hình giữ vị trí quan yếu nằm trong 7 loại hình nghệ thuật cơ bản.', 16, 28, '06/12/2022 21:02:41'),
(23, 'Dịch vụ của Google, được cung cấp miễn phí, dịch nhanh các từ, cụm từ và trang web giữa tiếng Anh và hơn 100 ngôn ngữ khác.', 16, 27, '07/12/2022 14:32:16'),
(24, 'Mới đây, video phỏng vấn thí sinh dự thi tuyển sinh ở một trường đại học tại Trung Quốc đã gây tranh cãi khi phóng viên đặt những câu hỏi vô cùng “duyên dáng” cho thí sinh.', 16, 22, '07/12/2022 15:39:49'),
(25, 'Theo đó, cô gái vừa ra khỏi phòng thi đã bị phóng viên gọi lại hỏi liên tiếp “tại sao đi thi còn trang điểm, thời gian trang điểm để ôn tập có phải tốt hơn không?”.', 16, 22, '07/12/2022 15:40:18'),
(26, 'Đáp trả lại, cô gái hỏi ngược lại phóng viên “tại sao đi thi lại không được trang điểm?”, và còn cho biết mình đã được tuyển thẳng rồi, nên chỉ đến dự thi để xem thi như thế nào thôi. ', 16, 22, '07/12/2022 15:40:30');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
