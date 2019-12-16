-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 03:44 PM
-- Server version: 8.0.15
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `QLD`
--

-- --------------------------------------------------------

--
-- Table structure for table `Account`
--

CREATE TABLE `Account` (
  `accID` tinyint(1) UNSIGNED NOT NULL,
  `userID` char(11) NOT NULL,
  `firstName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` char(8) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '3',
  `created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Account`
--

INSERT INTO `Account` (`accID`, `userID`, `firstName`, `lastName`, `email`, `password`, `level`) VALUES
(1, 'Admin', 'Nguyễn Đình ', 'Thắng', 'thangnd72@wru.vn', '123456', 1),
(2, 'GV01', 'Đỗ Hồng', 'Hạnh', 'gv01@wru.vn', '123456', 2),
(5, 'SV01', 'Nguyễn Văn', 'Tôn', 'sv01@wru.vn', '123456', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
  `idPost` tinyint(1) NOT NULL,
  `category` varchar(50) NOT NULL,
  `titlePost` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `imgPost` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `accID` tinyint(1) UNSIGNED NOT NULL,
  `dateCreated` datetime DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`idPost`, `category`, `titlePost`, `content`, `imgPost`, `author`, `accID`, `description`) VALUES
(1, 'news', 'Đội tuyển Olympic Tin học sinh viên tạo dấu ấn tại kỳ thi toàn quốc lần thứ 28', '<p>(TLU) - Trong các ngày từ ngày 3 đến 7-12 tại Trường Đại học Bách Khoa - Đại học Đà Nẵng đã diễn ra các cuộc thi: cuộc thi Olympic Tin học sinh viên Việt Nam lần thứ 28 (OLP’19), cuộc thi lập trình sinh viên quốc tế ICPC khu vực châu Á (ICPC Asia DaNang 2019) và cuộc thi đối kháng Procon.Năm 2019, kỳ thi Olympic Tin học sinh viên toàn quốc có sự tham dự của hơn 700 sinh viên công nghệ thông tin xuất sắc đến từ 100 trường ĐH, CĐ từ khắp mọi miền trên cả nước và 17 đội tuyển quốc tế đến từ các nước Nhật Bản, Hàn Quốc, Singapore, Trung Quốc, Indonesia, Myanmar... Trong đó, có các đội tuyển đến từ các ng mạnh và nổi tiếng trong lĩnh vực CNTT như Pekin University, ĐH Quốc gia Kyoto,  Korea, ĐH Quốc gia Singapore, ĐH Quốc gia Indonesia.Đội tuyển Olympic Tin học Trường Đại học Thủy lợi gồm 7 sinh viên do thầy Trương Xuân am làm trưởng đoàn đã dự thi 3 nội dung: Chuyên tin học, Không chuyên tin học (dành cho  viên không chuyên ngành CNTT và sinh viên năm nhất ngành CNTT) và ICPC khu vực châu Á. Đây là lần đầu tiên Nhà trường tham dự thi kỳ thi ICPC.</p>', 'images/olympic.jpg', 'admin', 1, '(TLU) – Trong các ngày từ ngày 3 đến 7-12 tại Trường Đại học Bách Khoa - Đại học Đà Nẵng đã diễn ra các cuộc thi...'),
(2, 'news', 'ĐH Thủy lợi dự kiến mở một số ngành “hot” trong những năm tới đây', '<p>Tới đây, Trường Đại học Thủy lợi dự kiến sẽ đào tạo một số ngành học đang có nhu cầu lớn trong xã hội nhằm cung cấp nguồn nhân lực chất lượng tốt dựa trên những điều kiện đảm bảo đáp ứng yêu cầu về đào tạo.Sáng ngày 10/12 tại Trường Đại học Thủy lợi diễn ra Hội thảo chuẩn đầu ra và chương trình đào tạo bậc đại học các ngành dự kiến mở mới như: Ngành Thương mại điện tử; ngành Quản trị dịch vụ du lịch và lữ hành; ngành Logistics và Quản lý chuỗi cung ứng; Ngành Kế toán chất lượng cao.Hội thảo thu hút hàng chục nhà khoa học, nhà nghiên cứu, các trưởng ngành có những nghiên cứu chuyên sâu về các ngành dự kiến mở tại Trường Đại học Thủy lợi đến tham dự, góp ý, cho ý kiến để xây dựng bộ tiêu chí đánh giá chất lượng, chuẩn đầu ra cho các ngành đang được nhiều doanh nghiệp trong và ngoài nước đặt hàng. Trong buổi hội thảo này, đại diện các doanh nghiệp tuyển dụng, các công ty, tập đoàn cũng đã đến tham dự và đóng góp ý kiến để kết nối giữa đào tạo và khả năng thích ứng của nhân lực đối với thị trường lao động của các ngành đang thiếu nguồn nhân lực.</p>', 'uploads/nganh-hoc-moi.jpg', 'admin', 1, 'Tới đây, Trường Đại học Thủy lợi dự kiến sẽ đào tạo một số ngành học đang có nhu cầu lớn trong xã hội nhằm cung cấp nguồn nhân lực chất lượng tốt dựa trên những điều kiện đảm bảo đáp ứng yêu cầu về đào tạo...'),
(3, 'news', 'Đại học Thủy lợi giành 8 giải thưởng Đồ án xuất sắc - Giải Loa thành năm 2019', '<p>Trong tổng số 13 đồ án tham gia giải thưởng Loa Thành năm nay, Trường Đại học Thủy lợi có 8 đồ án đạt giải. Đồ án \"Nghiên cứu mô hình dự báo lũ sông Kone\" của Trần Thị Tuyết 56G do PGS.TS Ngô Lê An và TS. Nguyễn Thị Thu Hà hướng dẫn đã xuất sắc đạt giải cao nhất là giải nhì.Với 1 giải Nhì, 2 giải Ba và 5 giải Hội đồng, Trường Đại học Thủy lợi là một trong số các trường có nhiều đồ án đạt giải năm 2019 này.Sáng 14-12, tại Văn Miếu - Quốc Tử Giám (Hà Nội), Bộ Xây dựng, Hội Kiến trúc sư Việt Nam, Tổng hội Xây dựng Việt Nam, Trung ương Đoàn Thanh niên cộng sản Hồ Chí Minh đã tổ chức trao Giải thưởng Loa thành cho đồ án tốt nghiệp xuất sắc ngành Kiến trúc - Xây dựng lần thứ 31 - năm 2019.</p>', 'uploads/loa-thanh.jpg', 'admin', 1, 'Trong tổng số 13 đồ án tham gia giải thưởng Loa Thành năm nay, Trường Đại học Thủy lợi có 8 đồ án đạt giải...'),
(4, 'notify', 'Hội thảo chương trình Meister School đào tạo kỹ sư làm việc tại Nhật Bản', '<p>Theo thỏa thuận giữa Trường Đại học Thủy lợi và Công ty Minami Fuji, Nhật Bản, Chương trình Meister School bắt đầu triển khai tại Đại học Thủy lợi từ tháng 10/2017. Với mục tiêu đào tạo nhân lực trẻ Việt Nam để làm việc lâu dài tại Nhật Bản, Chương trình Meister School tuyển chọn những sinh viên đại học năm cuối hoặc mới tốt nghiệp có tiềm năng đáp ứng những yêu cầu làm việc trình độ cao tại các công ty Nhật Bản và sẽ được nhận các đãi ngộ như một người Nhật. Công ty sẽ đào tạo miễn phí 100% Tiếng Nhật và các kỹ năng nghề nghiệp cần thiết để các em có thể làm việc tại Nhật Bản.Để sinh viên hiểu rõ hơn về chương trình, văn phòng Meister School tại Đại học Thủy Lợi sẽ tổ chức “Hội thảo chương trình Meister School đào tạo kỹ sư làm việc tại Nhật Bản”. Thông tin cụ thể như sau:<br>Thời gian: 15:00-17:00, Thứ Năm ngày 19/12/2019<br>Địa điểm: Room 5 - K1, Trường Đại học Thủy lợi<br>Diễn giả: Ông Sugiyama Sadahisa – Chủ tịch, Tổng giám đốc Công ty Minami Fuji<br>Trân trọng kính mời các Thầy cô và các em sinh viên quan tâm tới dự.</p>', 'uploads/meister.jpg', 'admin', 1, 'Theo thỏa thuận giữa Trường Đại học Thủy lợi và Công ty Minami Fuji, Nhật Bản, Chương trình Meister School bắt đầu triển khai tại Đại học Thủy lợi từ tháng 10/2017...'),
(5, 'notify', 'Thông báo thời gian nộp học phí học kỳ song song và học phí học kỳ 1 năm học 2019 – 2020', '<p>Nhà trường thông báo về việc thu học phí học kỳ 1 năm học 2019 – 2020 đối với sinh viên hệ Đại học, Cao đẳng, Liên thông chính quy.<br>Lưu ý:<br>&ndash; \r\n Sinh viên nộp tiền vào tài khoản ATM tại các chi nhánh của Ngân hàng Viettin Bank.<br>&ndash; Sinh viên đã nộp học phí vào tài khoản thẻ ATM tại Ngân hàng Viettin Bank nhưng đến khi hết thời hạn nộp học phí mà không thấy quét học phí thì liên hệ tại Phòng Tài vụ (Tầng 2 &ndash; P.217 &ndash; Nhà A1) để được giải quyết.</p>', 'uploads/default-news.jpg', 'admin', 1, 'Nhà trường thông báo về việc thu học phí học kỳ 1 năm học 2019 – 2020 đối với sinh viên hệ Đại học, Cao đẳng, Liên thông chính quy...'),
(6, 'notify', 'Thông báo thi Olympic cấp trường môn Cơ học đất 2019', '<p>Bộ môn Địa kỹ thuật - Khoa Công trình sẽ tổ chức thi Olympic cấp trường môn Cơ học Đất cho các sinh viên khoá K58, K59<br>Thời gian: 8 giờ sáng chủ nhật ngày 22 tháng 12 năm 2019.<br>Địa điểm: Dự kiến hội trường 227-A2.<br>Đối tượng dự thi: Sinh viên các lớp khoá K58, K59 có học môn Cơ học Đất và Địa kỹ thuật và các bạn sinh viên các khóa khác yêu thích môn học.<br>Nội dung thi: Trong phạm vi chương trình môn học sinh viên đã học theo chương trình chính khoá.<br>Hình thức thi: Thi viết-thời gian làm bài 180 phút- Thí sinh được sử dụng tài liệu khi làm bài.<br>Sinh viên đăng ký dự thi với thầy TS Nguyễn Văn Lộc: 0912&ndash;105&ndash;826</p>', 'uploads/default-news.jpg', 'admin', 1, 'Bộ môn Địa kỹ thuật - Khoa Công trình sẽ tổ chức thi Olympic cấp trường môn Cơ học Đất cho các sinh viên khoá K58, K59...'),
(7, 'futureStudent', 'Hướng dẫn khai thông tin online dành cho Tân sinh viên K61, năm học 2019 - 2020', '<p>Tất cả các tân sinh viên K61 trước khi nhập học tại Trường Đại học Thủy lợi đều phải thực hiện việc khai thông tin online. Nhà trường hướng dẫn chi tiết các bước thực hiện như sau:<br>Bước 1:Truy cập đường link:<a href=\"http://thisinh.tlu.edu.vn/\" style=\"font-size: 1.4rem\";>http://thisinh.tlu.edu.vn/<br />\r\n<img alt=\"\" src=\"/Web_Techonogy/uploads/tt-ol.jpg\" style=\"height:450px; width:600px display: block; margin-left: auto; margin-right: auto;\" /></a></p>', 'uploads/default-news.jpg', 'admin', 1, 'Hướng dẫn khai thông tin online dành cho Tân sinh viên K61, năm học 2019 - 2020'),
(8, 'futureStudent', 'Thí sinh trúng tuyển diện xét học bạ năm 2019', '<p>Quyết định phê duyệt danh sách trúng tuyển đại học hệ chính quy theo diện xét tuyển học bạ vào Trường Đại học Thủy lợi năm 2019<br>Hội đồng tuyển sinh trường Đại học Thủy lợi quyết định phê duyệt danh sách trúng tuyển đại học hệ chính quy theo diện xét tuyển thẳng vào Trường Đại học Thủy lợi  năm 2019.<br>Chú ý: Từ ngày 19/7/2019 đến 17h00 ngày 23/7/2019 các thí sinh có tên trong danh sách trúng tuyển nộp bản chính giấy chứng nhận kết quả thi THPT Quốc gia năm 2019 trực tiếp tại Trường Đại học Thủy lợi: Phòng 134 - Nhà A4 - Trường Đại học Thủy lợi - Số 175 Tây Sơn, Đống Đa, Hà Nội hoặc gửi qua bưu điện theo hình thức chuyển phát nhanh. Quá thời hạn trên nếu thí sinh không xác định nhập học, Nhà trường sẽ xóa tên khỏi danh sách trúng tuyển.</p>', 'uploads/default-news.jpg', 'admin', 1, 'Thí sinh trúng tuyển diện xét học bạ năm 2019'),
(9, 'presentStudent', 'Một số thông báo phục vụ sinh hoạt lớp tháng 12/2019', '<h3>MỘT SỐ LƯU Ý</h3><p>- Nhà trường đã tiến hành nhập dữ liệu các môn tự chọn tính điểm và chạy kết quả học tập cho sinh viên thực hiện học phần tốt nghiệp tại học kỳ 1 năm học 2019-2020 (K57 và K56 trở về trước). Sinh viên lưu ý kiểm tra kết quả học tập. Mọi thắc mắc sinh viên nộp đơn tại Bộ phận Tư vấn sinh viên thuộc Phòng CT&CTSV (P112- tầng 1 nhà Hành chính A1) trước ngày 25/12/2019;</p><p>- Sinh viên nộp học phí học kỳ song song và học phí học kỳ 1 năm học 2019 – 2020 theo thông báo số 1174/TB-ĐHTL ngày 10/12/2019 (<a href=\"#\" style=\"font-size:1.4rem;\">xem tại đây</a>);</p><p>- Nhà trường tổ chức Ngày hội việc làm và lễ tốt nghiệp cho sinh viên hệ chính quy đợt học kỳ I năm 2019-2020 theo kế hoạch số 1139/KH-ĐHTL ngày 1/12/2019;</p><p>- Sinh viên hệ chính quy làm tốt nghiệp học kỳ 1 năm học 2019-2020 triển khai đánh giá kết quả rèn luyện  học kỳ 1 và toàn khóa học theo kế hoạch số 1184/KH-ĐHTL ngày 10/12/2019;</p><p>- Trong dịp cao điểm diễn ra lễ Noel và nghỉ Tết dương lịch 2020, đề nghị các bạn sinh viên lưu ý đảm bảo trật tự xã hội và trật tự an toàn giao thông tại trường học, địa phương và nơi cư trú;</p>', '', 'gv01', 2, 'Một số thông báo phục vụ sinh hoạt lớp tháng 12/2019'),
(10, 'oldStudent', 'Cựu sinh viên Đại học Thủy lợi thưởng 6 tỷ cho 2 đội bóng vô địch Seagames 2019', '<p>Tối ngày 11/12, tại buổi mời cơm thân mật của Thủ Tướng Nguyễn Xuân Phúc chúc mừng chiến thắng đội tuyển Bóng Đá Nam và đội bóng Đá nữ vừa trở về từ SEA Games 30, ông Lê Văn Kiểm - Chủ tịch HĐQT Công ty Golf Long Thành đã quyết định thưởng 3 tỷ đồng cho đội tuyển bóng đá nữ và 3 tỷ đồng cho đội tuyển bóng đá nam.<br><img src=\"uploads/cuu-sv.jpg\" style=\"height:400px; width:600px; display: block; margin-left: auto; margin-right: auto;\"/><br>Huy chương Vàng ở SEA Games 30 là Huy chương Vàng thứ 6 của Đội tuyển bóng đá nữ Việt Nam và là huy chương vàng đầu tiên của đội bóng đá nam tại đấu trường SEA Games, sau 60 năm khát khao chờ đợi.Với sự nỗ lực chiến đấu không biết mệt mỏi, các cô gái và chàng trai vàng của bóng đá Việt Nam đã đem tấm huy chương vàng về cho người hâm mộ. Phần thưởng 6 tỷ đồng cũng chính là sự động viên tinh thần kịp thời của ông Lê Văn Kiểm dành cho bóng đá nữ, Nam vì những cống hiến của họ.</p>', 'uploads/default-news.jpg', 'admin', 1, 'Cựu sinh viên Đại học Thủy lợi thưởng 6 tỷ cho 2 đội bóng vô địch Seagames 2019'),
(11, 'events', 'Chùm ảnh đẹp của lễ kỷ niệm 60 năm thành lập Trường Đại học Thủy lợi', '<p><img alt=\"\" src=\"/Web_Techonogy/uploads/events1.jpg\" style=\"height:450px; width:600px display: block; margin-left: auto; margin-right: auto;\" /></p><br><p><img alt=\"\" src=\"/Web_Techonogy/uploads/events2.jpg\" style=\"height:450px; width:600px display: block; margin-left: auto; margin-right: auto;\" /></p><br><p><img alt=\"\" src=\"/Web_Techonogy/uploads/events3.jpg\" style=\"height:450px; width:600px display: block; margin-left: auto; margin-right: auto;\" /></p><br><p><img alt=\"\" src=\"/Web_Techonogy/uploads/events4.jpg\" style=\"height:450px; width:600px display: block; margin-left: auto; margin-right: auto;\" /></p>', 'uploads/default-news.jpg', 'admin', 1, 'Chùm ảnh đẹp của lễ kỷ niệm 60 năm thành lập Trường Đại học Thủy lợi'),
(12, 'business', 'Tecotec group tuyển dụng nhân sự', '<p>Công ty cổ phần Tecotec thông tin tuyển dụng các vị trí: thực tập và nhân viên kỹ thuật liên quan đến các chuyên ngành: Công nghệ thông tin, điện tử viễn thông, điện - điện tử, cơ khí...<br>Các ứng viên có nhu cầu: xem tại đây</p>', 'uploads/default-news.jpg', 'gv01', 2, 'Tecotec group tuyển dụng nhân sự');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `userID` char(11) NOT NULL,
  `userName` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` char(11) NOT NULL,
  `contact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `job` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userID`, `userName`, `phone`, `contact`, `job`) VALUES
('Admin', 'Nguyễn Đình Thắng', '0975346755', 'thangnd72@wru.vn', 'admin'),
('GV01', 'Giáo viên 1', '096745375', 'gv01@wru.vn', 'teacher'),
('SV01', 'Sinh viên 1', '03357689', 'sv01@wru.vn', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`accID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`idPost`),
  ADD KEY `accID` (`accID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Account`
--
ALTER TABLE `Account`
  MODIFY `accID` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `idPost` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Account`
--
ALTER TABLE `Account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Posts`
--
ALTER TABLE `Posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`accID`) REFERENCES `account` (`accID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
