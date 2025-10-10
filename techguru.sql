-- MySQL dump 10.13  Distrib 8.0.43, for Linux (x86_64)
--
-- Host: localhost    Database: techguru
-- ------------------------------------------------------
-- Server version	8.0.43-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('techguru_cache_356a192b7913b04c54574d18c28d46e6395428ab','i:2;',1759946055),('techguru_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer','i:1759946055;',1759946055),('techguru_cache_livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6','i:1;',1759941383),('techguru_cache_livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6:timer','i:1759941383;',1759941383);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_post`
--

DROP TABLE IF EXISTS `categories_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories_post` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_post`
--

LOCK TABLES `categories_post` WRITE;
/*!40000 ALTER TABLE `categories_post` DISABLE KEYS */;
INSERT INTO `categories_post` VALUES (1,'Google  API','google-api','2025-10-03 15:59:36','2025-10-03 15:59:36'),(2,'Wordpress','wordpress','2025-10-03 16:03:46','2025-10-03 16:03:46'),(3,'Server','server','2025-10-03 16:04:52','2025-10-03 16:04:52'),(4,'Hosting','hosting','2025-10-03 16:05:38','2025-10-03 16:05:38');
/*!40000 ALTER TABLE `categories_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories_post` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Hướng dẫn lấy API của Google Calendar trên Google Cloud Console','Để đọc các sự kiện từ Lịch Google công khai của bạn , bạn sẽ cần tạo khóa API của Google và lưu trong cài đặt plugin.','<p>Để đọc các sự kiện từ Lịch Google <strong>công khai</strong> của bạn , bạn sẽ cần tạo khóa API của Google và lưu trong cài đặt plugin.</p><p>Bạn sẽ cần <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://simplecalendar.io/downloads/google-calendar-pro/\"><strong>tiện ích bổ sung Google Calendar Pro</strong></a> để đọc các sự kiện từ cả lịch <strong>riêng tư</strong> và công khai cũng như các tính năng hiển thị bổ sung như màu sự kiện, người tham dự và tệp đính kèm.</p><p>Sau đây là hướng dẫn từng bước để tạo và lưu khóa Google API:</p><ol start=\"1\"><li><p>Điều hướng đến <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://console.developers.google.com/\">Google Developers Console</a> .</p></li><li><p>Nhấp vào menu thả xuống “Chọn dự án”</p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/selproj.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/selproj.png\"></a></p><p></p><ol start=\"3\"><li><p>Trong danh sách thả xuống, nhấp vào liên kết “Dự án mới”</p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/New-Project.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/New-Project-1024x447.png\"></a></p><ol start=\"4\"><li><p>Đặt tên cho dự án của bạn, sau đó nhấp vào nút <strong>Tạo</strong></p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/projectname.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/projectname.png\"></a></p><p></p><ol start=\"5\"><li><p>Từ phần “ <strong>Đã bật API và Dịch vụ</strong> ” trong Bảng điều khiển Google Developers Console, hãy nhấp vào liên kết “ <strong>Bật API và Dịch vụ”</strong></p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/enableapi.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/enableapi-1024x577.png\"></a></p><p></p><ol start=\"6\"><li><p>Tiếp theo, hãy tìm kiếm Google Calendar API</p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/calAPIsearch.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/calAPIsearch-1024x374.png\"></a></p><ol start=\"7\"><li><p>Kích hoạt API Lịch Google</p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/enablecalAPI.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/enablecalAPI-1024x593.png\"></a></p><p></p><ol start=\"8\"><li><p>Chọn <strong>Thông tin xác thực</strong> trong Trình quản lý API ở menu bên trái và nhấp vào <strong>Tạo thông tin xác thực</strong></p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/cred.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/cred-1024x401.png\"></a></p><ol start=\"9\"><li><p>Chọn <strong>khóa API</strong> từ danh sách thả xuống</p></li></ol><p><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/google-developers-console-create-credentials-api-key.png\"></p><ol start=\"10\"><li><p>Trên cửa sổ bật lên <strong>đã tạo khóa API ,</strong>  hãy chọn và sao chép (Cmd-C hoặc Ctrl-C) khóa API mới tạo của bạn.</p></li></ol><p><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/google-developers-console-api-key-created.png\"></p><ol start=\"11\"><li><p>Bây giờ, hãy quay lại <strong>bảng điều khiển WordPress</strong> của bạn , vào <strong>mục Lịch</strong> , sau đó <strong>chọn Cài đặt</strong> từ menu. Nhập khóa Google API vào trường Khóa Google API, đảm bảo bạn đã dán chính xác khóa đó mà không có khoảng trắng thừa. Sau đó, nhấp vào <strong>Lưu Thay đổi</strong> .</p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/Gkey-1.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/Gkey-1-1024x750.png\"></a></p><p><em>Trong trường hợp gặp bất kỳ lỗi hoặc sự cố nào, bạn có thể thử lấy khóa API Google mới bằng cách lặp lại các bước trên trước khi liên hệ với bộ phận hỗ trợ . Bạn có thể tạo nhiều khóa API cho cùng một dự án trên Google Developers Console.</em></p>','huong-dan-lay-api-cua-google-calendar-tren-google-cloud-console','posts/Programmaticallyaccess.original.png',1,1,'2025-10-03 17:05:55','2025-10-03 17:05:55'),(2,'Hướng dẫn sử dụng Google PageSpeed Insights chi tiết A-Z 2025','Hãy kiểm tra ngay tốc độ tải trang bằng Google PageSpeed Insights – công cụ được chính Google cung cấp để đo hiệu suất website và cải thiện trải nghiệm người dùng (UX).','<p>Ngày nay, <strong>tốc độ tải trang</strong> không còn là “yếu tố phụ” trong SEO mà là <strong>một trong những chỉ số cốt lõi ảnh hưởng trực tiếp đến thứ hạng tìm kiếm và tỷ lệ chuyển đổi</strong>. Google ưu tiên hiển thị các website <strong>nhanh – mượt – thân thiện với di động</strong>.</p><p>Trong bài viết này, <strong>Khanh Hoa </strong>sẽ hướng dẫn bạn từ A đến Z cách:</p><ul><li><p>Sử dụng Google PageSpeed Insights hiệu quả</p></li><li><p>Hiểu các chỉ số Core Web Vitals</p></li><li><p>Tối ưu kỹ thuật và nội dung để cải thiện điểm số hiệu suất</p></li></ul><p></p><h2><strong>Google PageSpeed Insights là gì?</strong></h2><p><strong>Google PageSpeed Insights (PSI)</strong> là một công cụ miễn phí do Google phát triển, cho phép bạn kiểm tra:</p><ul><li><p><strong>Hiệu suất tải trang</strong> trên cả desktop và mobile</p></li><li><p><strong>Chỉ số Core Web Vitals</strong> theo tiêu chuẩn Google</p></li><li><p>Các <strong>đề xuất cải tiến cụ thể</strong> giúp bạn cải thiện tốc độ trang web</p></li></ul><p>Công cụ phân tích cả <strong>dữ liệu mô phỏng (lab)</strong> và <strong>dữ liệu thực tế từ người dùng thật (field data)</strong> để cung cấp cái nhìn đầy đủ về <strong>trải nghiệm tải trang thực tế</strong>.</p><hr><p><img src=\"https://letannghia.com/wp-content/uploads/2025/04/Google-PageSpeed-Insights-1024x632.jpg\" title=\"Giới thiệu c&ocirc;ng cụ Google PageSpeed Insights\"></p><hr><h3><strong>Tại sao tốc độ tải trang lại quan trọng trong SEO?</strong></h3><ul><li><p>Google xác nhận rằng <strong>tốc độ là yếu tố xếp hạng chính thức</strong> trên cả desktop và mobile</p></li><li><p>Người dùng có xu hướng <strong>thoát trang nếu thời gian tải quá 3 giây</strong></p></li><li><p>Các chỉ số Core Web Vitals (LCP, FID, CLS) ảnh hưởng trực tiếp đến <strong>UX và tỷ lệ chuyển đổi</strong></p></li></ul><blockquote><p>Tham khảo hướng dẫn chính thức từ Google:<br><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://web.dev/vitals/\">https://web.dev/vitals/</a></p></blockquote><hr><h2><strong>Cách kiểm tra tốc độ website bằng Google PageSpeed Insights</strong></h2><h3><strong>Bước 1: Truy cập công cụ</strong></h3><ul><li><p>Truy cập vào <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://pagespeed.web.dev/\">https://pagespeed.web.dev/</a></p></li><li><p>Nhập URL của website hoặc trang cụ thể bạn muốn kiểm tra</p></li><li><p>Nhấn nút “<strong>Analyze</strong>” và đợi vài giây để công cụ trả kết quả</p></li></ul><hr><h3><strong>Bước 2: Đọc hiểu báo cáo tổng quan</strong></h3><p>Báo cáo bao gồm 2 phần chính:</p><ul><li><p><strong>Field data</strong>: Dữ liệu thực tế từ người dùng thật, dựa trên Chrome UX Report</p></li><li><p><strong>Lab data</strong>: Dữ liệu mô phỏng trên môi trường chuẩn của Google</p></li></ul><p>Các chỉ số được thể hiện bằng <strong>màu sắc</strong> (xanh – đạt chuẩn, cam – cần cải thiện, đỏ – yếu kém), giúp bạn dễ hình dung mức độ hiệu quả của trang.</p><hr><p><img src=\"https://letannghia.com/wp-content/uploads/2025/04/Bao-cao-kiem-tra-toc-do-website-bang-PageSpeed-Insights-1024x547.jpg\" title=\"B&aacute;o c&aacute;o kiểm tra tốc độ website bằng PageSpeed Insights\"></p><hr><h2><strong>Giải thích các chỉ số chính trong PageSpeed Insights</strong></h2><p>Khi nhìn vào báo cáo PageSpeed, bạn sẽ gặp các <strong>chỉ số kỹ thuật quan trọng trong bộ Core Web Vitals</strong>:</p><h3><strong>1. Largest Contentful Paint (LCP)</strong></h3><ul><li><p><strong>Đo thời gian tải phần nội dung lớn nhất</strong> hiển thị trong khung nhìn</p></li><li><p>Mục tiêu: Dưới <strong>2.5 giây</strong></p></li></ul><h3><strong>2. First Input Delay (FID)</strong></h3><ul><li><p><strong>Đo thời gian từ khi người dùng tương tác lần đầu (click, cuộn)</strong> đến khi trình duyệt phản hồi</p></li><li><p>Mục tiêu: Dưới <strong>100ms</strong></p></li></ul><h3><strong>3. Cumulative Layout Shift (CLS)</strong></h3><ul><li><p><strong>Đo mức độ dịch chuyển bố cục không mong muốn</strong> khi trang đang tải</p></li><li><p>Mục tiêu: Dưới <strong>0.1</strong></p></li></ul><hr><p><img src=\"https://letannghia.com/wp-content/uploads/2025/04/chi-so-Core-Web-Vitals-trong-PageSpeed.jpg\" title=\"Giải th&iacute;ch chỉ số Core Web Vitals trong PageSpeed\"></p><hr><blockquote><p>Các chỉ số trên không chỉ quan trọng trong SEO mà còn giúp <strong>giữ chân người dùng lâu hơn</strong> – tăng tỷ lệ đọc bài, mua hàng và quay lại website của bạn.</p></blockquote><hr><h2><strong>Một số thuật ngữ phụ trong báo cáo bạn cần biết</strong></h2><ul><li><p><strong>Time to Interactive (TTI)</strong>: Thời gian cần để trang có thể tương tác hoàn toàn</p></li><li><p><strong>Total Blocking Time (TBT)</strong>: Tổng thời gian trang bị chặn do xử lý script</p></li><li><p><strong>Speed Index (SI)</strong>: Tốc độ hiển thị nội dung trực quan</p></li></ul><p>Dưới đây là <strong>phần cuối của bài viết chuẩn SEO</strong> với chủ đề <strong>“Hướng dẫn sử dụng Google PageSpeed Insights”</strong>, tiếp tục theo phong cách chuyên gia – sáng tạo – dễ hiểu, trình bày bằng <strong>Markdown</strong>. Nội dung bao gồm phần tối ưu hiệu suất, lỗi thường gặp, dịch vụ từ <strong>Nghĩa Lê MMO</strong>, liên kết nội bộ, hình ảnh đúng vị trí và phần FAQ hữu ích cho độc giả.</p><hr><h2><strong>Hướng dẫn tối ưu theo báo cáo PageSpeed Insights</strong></h2><p>Dựa trên các chỉ số PageSpeed đã phân tích, bạn có thể thực hiện các bước <strong>tối ưu website theo gợi ý từ Google</strong>, giúp <strong>tăng điểm hiệu suất, cải thiện Core Web Vitals và nâng cao trải nghiệm người dùng</strong>.</p><h3><strong>1. Tối ưu hóa hình ảnh</strong></h3><ul><li><p>Sử dụng định dạng <strong>WebP</strong> hoặc <strong>AVIF</strong></p></li><li><p>Dùng <strong>Lazy Load</strong> để trì hoãn hình ảnh ngoài khung nhìn</p></li><li><p>Nén ảnh bằng các công cụ như <a target=\"_blank\" rel=\"noopener\" href=\"https://tinypng.com/\">TinyPNG</a> hoặc Squoosh</p></li></ul><hr><h3><strong>2. Rút gọn và trì hoãn JavaScript</strong></h3><ul><li><p>Sử dụng <code>async</code> hoặc <code>defer</code> cho script không thiết yếu</p></li><li><p>Xóa hoặc hoãn tải các đoạn script bên ngoài như: live chat, quảng cáo</p></li><li><p>Gộp các file JS và CSS để giảm số request</p></li></ul><hr><h3><strong>3. Tối ưu bộ nhớ cache (caching)</strong></h3><ul><li><p>Thiết lập <strong>caching header</strong> chuẩn (cache-control)</p></li><li><p>Kết hợp với plugin cache nếu dùng WordPress như: WP Rocket, LiteSpeed Cache</p></li></ul><hr><h3><strong>4. Tối ưu thời gian phản hồi của máy chủ</strong></h3><ul><li><p>Sử dụng <strong>CDN</strong> để phân phối nội dung nhanh hơn toàn cầu</p></li><li><p>Chuyển sang <strong>hosting tốc độ cao</strong> nếu server hiện tại phản hồi chậm</p></li></ul><hr><p><img src=\"https://letannghia.com/wp-content/uploads/2025/04/Toi-uu-anh-va-JavaScript-tu-bao-cao-PageSpeed-Insights.jpg\" title=\"Tối ưu ảnh v&agrave; JavaScript từ b&aacute;o c&aacute;o PageSpeed Insights\"></p><hr><h2><strong>Mẹo nâng cao để cải thiện hiệu suất tải trang</strong></h2><p>Ngoài những cải tiến cơ bản, bạn có thể áp dụng thêm những mẹo sau để website của bạn luôn đạt tốc độ tối ưu:</p><ul><li><p><strong>Dùng font hệ thống</strong> để giảm thời gian tải font bên ngoài</p></li><li><p>Tối giản theme và plugin không cần thiết</p></li><li><p>Tắt các animation hoặc hiệu ứng nặng</p></li><li><p>Ưu tiên tải nội dung chính trước, tải phần phụ sau</p></li></ul><blockquote><p>Gợi ý chuyên sâu: <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://letannghia.com/toi-uu-toc-do-website\">Tối ưu tốc độ tải trang bằng GTmetrix và Lighthouse</a></p></blockquote><hr><h2><strong>Các lỗi thường gặp và cách xử lý trong Google PageSpeed Insights</strong></h2><table><tbody><tr><th rowspan=\"1\" colspan=\"1\"><p><strong>Lỗi trong báo cáo PSI</strong></p></th><th rowspan=\"1\" colspan=\"1\"><p><strong>Cách xử lý thực tế</strong></p></th></tr><tr><td rowspan=\"1\" colspan=\"1\"><p><strong>Eliminate render-blocking resources</strong></p></td><td rowspan=\"1\" colspan=\"1\"><p>Gắn <code>defer</code> cho JS, tối ưu thứ tự tải CSS</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p><strong>Serve images in next-gen formats</strong></p></td><td rowspan=\"1\" colspan=\"1\"><p>Chuyển từ JPG/PNG sang WebP/AVIF</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p><strong>Reduce unused JavaScript</strong></p></td><td rowspan=\"1\" colspan=\"1\"><p>Xóa script thừa, chỉ tải JS khi cần bằng <code>lazyload</code></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p><strong>Preload key requests</strong></p></td><td rowspan=\"1\" colspan=\"1\"><p>Dùng thẻ <code>&lt;link rel=&quot;preload&quot;&gt;</code> để tải font/icon chính sớm hơn</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p><strong>Avoid chaining critical requests</strong></p></td><td rowspan=\"1\" colspan=\"1\"><p>Tối ưu lại thứ tự tải file quan trọng, tránh tải tuần tự quá nhiều file</p></td></tr></tbody></table><hr><h2><strong>Dịch vụ tối ưu Google PageSpeed từ Nghĩa Lê MMO</strong></h2><p>Nếu bạn không rành kỹ thuật hoặc không có đội ngũ Dev, <strong>Nghĩa Lê MMO</strong> cung cấp dịch vụ tối ưu tốc độ website toàn diện cho doanh nghiệp:</p><ul><li><p><strong>Phân tích hiệu suất chuyên sâu</strong> bằng PageSpeed + Lighthouse + GTmetrix</p></li><li><p><strong>Tối ưu kỹ thuật</strong>: hình ảnh, JS, CSS, hosting, Core Web Vitals</p></li><li><p><strong>Cam kết điểm PageSpeed mobile trên 90+</strong> (nếu cấu trúc web cho phép)</p></li><li><p><strong>Tăng tỷ lệ chuyển đổi</strong> nhờ cải thiện UX tổng thể</p></li></ul><hr><h2><strong>Kết luận: Tăng tốc độ tải trang để vượt đối thủ trên Google</strong></h2><p><strong>Google PageSpeed Insights</strong> không đơn thuần là công cụ kiểm tra, mà còn là <strong>bản đồ chỉ đường để tối ưu SEO bền vững</strong>.</p><p>Việc cải thiện tốc độ tải trang sẽ giúp:</p><ul><li><p>Website <strong>được index nhanh hơn</strong></p></li><li><p><strong>Trải nghiệm người dùng tốt hơn</strong>, tăng thời gian onsite và giảm tỷ lệ thoát</p></li><li><p>Tăng <strong>tỷ lệ chuyển đổi và doanh thu</strong>, đặc biệt trên thiết bị di động</p></li></ul>','huong-dan-su-dung-google-pagespeed-insights-chi-tiet-a-z-2025','posts/google-pagespeed-2025.png',1,2,'2025-10-03 19:18:16','2025-10-03 19:20:37'),(3,'Hướng dẫn cài đặt FastPanel lên máy chủ Linux','Máy chủ Linux là môi trường mạnh mẽ và phổ biến được sử dụng để chạy các ứng dụng web và dịch vụ trực tuyến. ','<h2><strong>Giới thiệu về FastPanel</strong></h2><p><strong>FastPanel</strong> là một bảng điều khiển quản lý máy chủ web <strong>miễn phí</strong>, mang đến giải pháp quản trị hosting hiệu quả và đơn giản. Tương tự như cPanel hay DirectAdmin, nhưng FastPanel nổi bật với giao diện trực quan và cấu trúc được đơn giản hóa, giúp người dùng dễ dàng thao tác.</p><p>Điểm hấp dẫn của FastPanel không chỉ dừng lại ở việc <strong>miễn phí</strong> mà còn ở sự kết hợp giữa tính năng mạnh mẽ và hiệu suất vượt trội. Điều này làm cho nó trở thành một lựa chọn lý tưởng cho các quản trị viên máy chủ và chủ sở hữu website muốn tối ưu chi phí mà vẫn đảm bảo chất lượng.</p><p>Giao diện quản lý thân thiện của trang quản trị cho phép người dùng dễ dàng theo dõi và điều chỉnh cài đặt máy chủ, website. Đặc biệt, <strong>tốc độ xử lý nhanh chóng</strong> là một trong những ưu điểm nổi bật, giúp tối ưu hiệu suất máy chủ đáng kể. Nhờ đó, FastPanel là lựa chọn hấp dẫn cho những ai ưu tiên sự đơn giản và hiệu quả trong quản lý hosting của mình.</p><h2><strong>Hướng dẫn cài đặt FastPanel trên máy chủ Linux</strong></h2><h3><strong>Yêu cầu hệ thống tối thiểu:</strong></h3><p>Để đảm bảo hệ thống hoạt động ổn định và hiệu quả trên máy chủ Linux của bạn, dưới đây là cấu hình hệ thống được khuyến nghị:</p><h4><strong>Cấu hình phần cứng tối thiểu:</strong></h4><ul><li><p>CPU: 2 core trở lên.</p></li><li><p>RAM: Tối thiểu 2GB.</p></li><li><p>Dung lượng ổ cứng: Tối thiểu 5GB.</p></li></ul><h4><strong>Hệ điều hành được hỗ trợ (64-bit):</strong></h4><ul><li><p>Debian: 8, 9, 10.</p></li><li><p>Ubuntu: 18.04, 20.04, 22.04</p></li><li><p>AlmaLinux 8.</p></li><li><p>Rocky Linux 8.</p></li></ul><p><em>Lưu ý:</em> FastPanel chỉ hỗ trợ các bản phân phối 64-bit. Đảm bảo hệ thống của bạn là phiên bản mới cài đặt (clean install) và chưa có cài đặt web server hoặc panel khác.</p><p>Trong hướng dẫn này, tôi sẽ sử dụng Amalinux 8 x64 làm hệ điều hành mẫu để minh họa các bước cài đặt.</p><h3><strong>Hướng dẫn đăng ký giấy phép miễn phí:</strong></h3><p>Để sử dụng FastPanel, bạn cần đăng ký giấy phép (license) miễn phí trên trang chính thức. Quá trình này nhanh chóng, miễn phí và chỉ mất vài phút.</p><p>Dưới đây là các bước đăng ký giấy phép miễn phí:</p><h4><strong>Truy cập trang chủ</strong></h4><p>Mở trình duyệt và truy cập vào trang chủ FastPanel: <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://fastpanel.direct/\">https://fastpanel.direct/</a>.</p><h4><strong>Đăng ký tài khoản</strong></h4><p>Trên giao diện trang chủ, nhấn vào nút <strong>Start for Free.</strong></p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-computer-ai-generated-content-m.png\" alt=\"Nhấn v&agrave;o n&uacute;t Start for Free\"></p><p>Chọn <strong>Sign Up</strong> để bắt đầu tạo tài khoản.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-login-screen-ai-generated-conte.png\" alt=\"Chọn Sign Up để bắt đầu tạo t&agrave;i khoản.\"></p><p>Nhập địa chỉ email hợp lệ của bạn, sau đó nhấn nút <strong>Sign Up</strong> để gửi yêu cầu đăng ký.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-login-form-ai-generated-content.png\" alt=\"Nhập địa chỉ email, sau đ&oacute; nhấn n&uacute;t Sign Up.\"></p><p>Nếu đăng ký thành công, hộp thoại Registration xuất hiện, bạn sẽ nhận được thông báo “<em>Registration success. Check your email for credentials”</em>. Kiểm tra hộp thư email của bạn để lấy tài khoản đăng nhập.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-login-page-ai-generated-content.png\" alt=\"Kiểm tra hộp thư email của bạn để lấy t&agrave;i khoản đăng nhập\"></p><h4><strong>Đăng nhập vào FastPanel</strong></h4><p>Truy cập trang đăng nhập tại: <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://cp.fastpanel.direct/login\">https://cp.fastpanel.direct/login</a>. Sử dụng thông tin nhận được từ email để đăng nhập vào hệ thống FastPanel.</p><h4><strong>Kích hoạt giấy phép miễn phí</strong></h4><p>Sau khi đăng nhập, vào menu <strong>Order</strong> (Đặt hàng). Chọn nút <strong>FREE</strong> trong mục <strong>FASTPANEL Standard License</strong>.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/word-image-295-5.png\" alt=\"Chọn n&uacute;t FREE trong mục FASTPANEL Standard License.\"></p><p>Tiếp theo nhấn nút <strong>Add to cart</strong> để thêm giấy phép.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-computer-ai-generated-content-m-1.png\" alt=\"Nhấn n&uacute;t Add to cart để th&ecirc;m giấy ph&eacute;p.\"></p><p>Trong cửa sổ “IP Address”, nhập địa chỉ IPv4 của máy chủ mà bạn muốn cài đặt FastPanel. Nhấn <strong>CheckOut</strong> (Xác nhận) để tiếp tục.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-computer-screen-ai-generated-co.png\" alt=\"Nhập địa chỉ IPv4 của m&aacute;y chủ sau đ&oacute; nhấn CheckOut\"></p><p>Chọn <strong>Submit Order</strong> (Gửi đơn hàng) để hoàn tất quá trình đăng ký giấy phép.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-computer-ai-generated-content-m-2.png\" alt=\"Chọn Submit Order.\"></p><h4><strong>Kiểm tra giấy phép</strong></h4><p>Truy cập menu <strong>My Services</strong> (Dịch vụ của tôi), chọn tab <strong>Licenses</strong> (Giấy phép) để kiểm tra trạng thái giấy phép vừa kích hoạt.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-computer-ai-generated-content-m-3.png\" alt=\"Kiểm tra giấy ph&eacute;p.\"></p><p>Lưu ý:</p><ul><li><p>Đảm bảo địa chỉ IPv4 của máy chủ là chính xác và máy chủ đang hoạt động.</p></li><li><p>Nếu không nhận được email xác nhận, hãy kiểm tra thư mục spam hoặc liên hệ hỗ trợ qua trang chủ: <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://fastpanel.direct/\">https://fastpanel.direct/</a>.</p></li></ul><h3><strong>Cài đặt FastPanel trên máy chủ Linux</strong></h3><p>Cài đặt FastPanel là một quy trình đơn giản và nhanh chóng, giúp bạn triển khai bảng điều khiển quản lý hosting mạnh mẽ chỉ trong vài bước. Với hướng dẫn chi tiết dưới đây, bạn sẽ dễ dàng thiết lập trên máy chủ của mình, đảm bảo hiệu suất tối ưu và giao diện quản trị trực quan.</p><h4><strong>SSH vào máy chủ</strong></h4><p>Để bắt đầu, bạn cần truy cập vào máy chủ Linux thông qua giao diện dòng lệnh bằng SSH.</p><p>Lưu ý: Đảm bảo bạn đã đăng nhập với <em>quyền root</em> hoặc <em>tài khoản có quyền sudo</em> để thực hiện các lệnh cài đặt.</p><p>Nếu bạn chưa biết cách kết nối SSH, có thể tham khảo hướng dẫn tại bài viết: <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://bctechvibe.io.vn/cach-dang-nhap-vps-linux-bang-ssh/\">Hướng dẫn SSH vào máy chủ Linux.</a></p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-black-and-green-background-ai-generated-content.png\" alt=\"SSH v&agrave;o m&aacute;y chủ.\"></p><h4><strong>Cập nhật hệ điều hành</strong></h4><p>Trước khi cài đặt, bạn nên cập nhật hệ điều hành để tránh lỗi phát sinh do phần mềm lỗi thời. Tùy thuộc vào hệ điều hành bạn sử dụng, hãy thực hiện các lệnh sau:</p><ul><li><p>Đối với Debian/Ubuntu:</p></li></ul><pre><code>apt update\n\napt upgrade -yCopy</code></pre><ul><li><p>Đối với AlmaLinux/Rocky Linux:</p></li></ul><pre><code>dnf update -yCopy</code></pre><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/word-image-295-11.png\" alt=\"Cập nhật hệ điều h&agrave;nh.\"></p><h4><strong>Cài đặt công cụ wget</strong></h4><p>FastPanel sử dụng wget để tải các tập tin cài đặt. Nếu hệ thống của bạn chưa có wget, hãy cài đặt theo hệ điều hành tương ứng:</p><ul><li><p>Đối với Debian/Ubuntu:</p></li></ul><pre><code>apt update\n\napt install -y wgetCopy</code></pre><ul><li><p>Đối với AlmaLinux/Rocky Linux:</p></li></ul><pre><code>dnf install -y wgetCopy</code></pre><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-computer-ai-generated-content-m-4.png\" alt=\"C&agrave;i đặt c&ocirc;ng cụ wget.\"></p><h4><strong>Tải và cài đặt FastPanel</strong></h4><p>Bây giờ, bạn đã sẵn sàng để tải và cài đặt FastPanel. Thực hiện các lệnh sau để bắt đầu:</p><p>Bước 1: Tải script cài đặt từ kho lưu trữ chính thức:</p><pre><code>wget http://repo.fastpanel.direct/install_fastpanel.sh -O install_fastpanel.shCopy</code></pre><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screen-shot-of-a-computer-ai-generated-content.png\" alt=\"Tải script c&agrave;i đặt FastPanel từ kho lưu trữ ch&iacute;nh thức\"></p><p>Bước 2: Chạy script để bắt đầu quá trình cài đặt</p><pre><code>bash install_fastpanel.shCopy</code></pre><p>Sau khi thực hiện lệnh trên, hệ thống sẽ tự động tải và cài đặt FastPanel. Quá trình này có thể mất vài phút tùy thuộc vào cấu hình máy chủ và tốc độ mạng. Hãy kiên nhẫn chờ đợi!</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/image.png\" alt=\"Chạy script để bắt đầu qu&aacute; tr&igrave;nh c&agrave;i đặt/\"></p><h4><strong>Nhận thông tin đăng nhập</strong></h4><p>Sau khi hoàn tất, hệ thống sẽ hiển thị thông tin truy cập bao gồm:</p><ul><li><p><strong>URL Panel</strong>: Địa chỉ truy cập panel (thường là https://{IP_máy_chủ}:8888).</p></li><li><p><strong>Login</strong> (Username): Tên đăng nhập.</p></li><li><p><strong>Password</strong>: Mật khẩu để đăng nhập.</p></li></ul><p>Hãy lưu lại thông tin này cẩn thận để sử dụng ở bước tiếp theo.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/word-image-295-15.png\" alt=\"Nhận th&ocirc;ng tin đăng nhập.\"></p><h4><strong>Kích hoạt bản quyền</strong></h4><p>Để sử dụng đầy đủ các tính năng của FastPanel, bạn cần kích hoạt giấy phép miễn phí đã đăng ký ở bước trước:</p><p>Truy cập vào giao diện quản trị FastPanel qua URL được cung cấp (thường là https://{IP_máy_chủ}:8888/authentication). Đăng nhập bằng <strong>Username</strong> và <strong>Password</strong> từ bước trước.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-computer-ai-generated-content-m-6-1024x550.png\" alt=\"Đăng nhập bằng Username v&agrave; Password từ bước trước.\"></p><p>Trong cửa sổ Email Address, nhập địa chỉ email mà bạn đã sử dụng để đăng ký giấy phép miễn phí tại bước 3.2. Nhấn <strong>Save</strong> để lưu.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-computer-ai-generated-content-m-7-1024x894.png\" alt=\"nhập địa chỉ email m&agrave; bạn đ&atilde; sử dụng để đăng k&yacute; giấy ph&eacute;p miễn ph&iacute;\"></p><p>Chấp nhận các điều khoản sử dụng của bằng cách chọn <strong>Accept</strong>.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-computer-ai-generated-content-m-8-1024x700.png\" alt=\"Chấp nhận c&aacute;c điều khoản sử dụng của bằng c&aacute;ch chọn Accept.\"></p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/a-screenshot-of-a-computer-ai-generated-content-m-9-1024x848.png\" alt=\"Chấp nhận c&aacute;c điều khoản sử dụng của bằng c&aacute;ch chọn Accept.\"></p><h4><strong>Hoàn tất và khám phá giao diện FastPanel</strong></h4><p>Sau khi hoàn thành các bước trên, bạn sẽ được chuyển đến giao diện quản trị trực quan của FastPanel. Giao diện hiện đại và thân thiện giúp bạn dễ dàng thao tác mà không cần kiến thức chuyên sâu về dòng lệnh.</p><p><img src=\"https://bctechvibe.io.vn/wp-content/uploads/2025/05/word-image-295-20.png\"></p><p>Lưu ý:</p><ul><li><p>Hãy đảm bảo máy chủ có <strong>IPv4 tĩnh</strong> và <strong>kết nối Internet ổn định</strong> trong quá trình đăng ký và cài đặt.</p></li><li><p>Nếu gặp sự cố hoặc cần hỗ trợ, hãy liên hệ qua trang chủ FastPanel: <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://fastpanel.direct/\">https://fastpanel.direct/</a>.</p></li></ul><h2><strong>Tổng kết</strong></h2><p>Với các bước trên, bạn đã sẵn sàng để tận hưởng sức mạnh của FastPanel – một giải pháp quản trị hosting miễn phí, hiệu quả và dễ sử dụng! Hãy bắt đầu khám phá và tối ưu hóa máy chủ của bạn ngay hôm nay. Chúc các bạn thành công!</p>','huong-dan-cai-dat-fastpanel-len-may-chu-linux','posts/huong-dan-cai-dat-fastpanel-585x395.png',1,3,'2025-10-08 17:56:05','2025-10-08 17:57:33');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `software`
--

DROP TABLE IF EXISTS `software`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `software` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `thumbnail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` bigint unsigned DEFAULT NULL,
  `download_count` bigint unsigned NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `software_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `software`
--

LOCK TABLES `software` WRITE;
/*!40000 ALTER TABLE `software` DISABLE KEYS */;
INSERT INTO `software` VALUES (10,1,'Phần mềm Office 365 ','phan-mem-office-365','2024','<p>Phần mềm Office 365 Full Crack</p>','software/hero-image.webp','FILE CÀI ĐẶT PHẦN MỀM/files/Office 365.zip',3395517,13,1,'2025-10-05 07:00:21','2025-10-06 16:32:39'),(11,1,'Adobe Photoshop CC 2020','adobe-photoshop-cc-2020','2020','<p>Adobe Full bọ cài Crack Photoshop 2020</p>','software/Adobe-Photoshop-CC-2020.webp','FILE CÀI ĐẶT PHẦN MỀM/files/Photoshop 2020 KhanhHoa 0584386177.rar',1288490188,4,1,'2025-10-06 14:40:19','2025-10-06 16:30:51'),(12,1,'Physics Draw Word 2025','physics-draw-word-2025','1.0','<p>Phần mềm vẽ vật lý cho giáo viên</p>','software/noimage.png','FILE CÀI ĐẶT PHẦN MỀM/files/Phan_mem_ve_hinh_Vat_li_tren_Word_PHYSICS_DRAW.zip',761856,0,1,'2025-10-08 16:37:00','2025-10-08 16:48:06'),(13,1,'EaseUS Data Recovery','easeus-data-recovery','16.5.0.0','<p>Phần mềm lấy lại dữ liệu khi recovery ổ cưng trên máy tính (EaseUS Data Recovery Wizard Technician )</p>','software/1701693783_easeus-data-recovery-wizard_story.jpg','FILE CÀI ĐẶT PHẦN MỀM/files/EaseUS Data Recovery Wizard Technician 16.5.0.0.rar',73714893,0,1,'2025-10-08 16:52:27','2025-10-08 17:14:57'),(14,1,'ABBYY FineReader Full ','abbyy-finereader-full','14.0.105.234','<p></p>','software/aabbyy-14.jfif','FILE CÀI ĐẶT PHẦN MỀM/files/ABBYY_FineReader_Full_14.rar',425721856,0,1,'2025-10-08 17:14:02','2025-10-08 17:14:02'),(15,1,'Foxit PDF Editor Pro 2024','foxit-pdf-editor-pro-2024','1.0.23997','<p>Phần mềm đọc ghi convert PDF FOXIT</p>','software/Foxit PDF Editor Pro 2024.png','',NULL,0,1,'2025-10-08 17:23:28','2025-10-08 17:23:28'),(16,1,'AutoDesk AutoCad 2019','autodesk-autocad-2019','2019','<p>Phần mềm xây dựng bản vẽ chuyên cho xây dựng</p>','software/autodesk-auto-cad-2019.webp','FILE CÀI ĐẶT PHẦN MỀM/files/Auto CAD_2019.rar',2405181686,0,1,'2025-10-08 17:28:31','2025-10-08 17:32:23'),(17,1,'Office 365 for MacOs','office-365-for-macos','2021 MacOs','<p>Trọn bộ office 365 dành cho MacOs</p>','software/office-365-for-macos.jfif','FILE CÀI ĐẶT PHẦN MỀM/files/Office_2021_MacOS.zip',1889785610,0,1,'2025-10-08 17:36:04','2025-10-08 17:36:04');
/*!40000 ALTER TABLE `software` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Huynh Khanh Hoa','huynhkhanhhoa2010@gmail.com',NULL,'$2y$12$7m7hncbs4crDUsZ9wfS71.G7oAtK30r/1ATDTUVvHZisHCgL.Qqgy',NULL,'2025-10-02 21:47:15','2025-10-02 21:47:15'),(2,'Luong Thi Hong Vy','thihongvyluong@gmail.com',NULL,'$2y$12$nR3n0.JlBQdmINTAwGP0UOUz8YP9nmV8E2K9FtVzL/EmzpN.KyCFW',NULL,'2025-10-03 14:39:44','2025-10-03 14:39:44');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-10-09  1:07:58
