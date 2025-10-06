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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Hướng dẫn lấy API của Google Calendar trên Google Cloud Console','Để đọc các sự kiện từ Lịch Google công khai của bạn , bạn sẽ cần tạo khóa API của Google và lưu trong cài đặt plugin.','<p>Để đọc các sự kiện từ Lịch Google <strong>công khai</strong> của bạn , bạn sẽ cần tạo khóa API của Google và lưu trong cài đặt plugin.</p><p>Bạn sẽ cần <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://simplecalendar.io/downloads/google-calendar-pro/\"><strong>tiện ích bổ sung Google Calendar Pro</strong></a> để đọc các sự kiện từ cả lịch <strong>riêng tư</strong> và công khai cũng như các tính năng hiển thị bổ sung như màu sự kiện, người tham dự và tệp đính kèm.</p><p>Sau đây là hướng dẫn từng bước để tạo và lưu khóa Google API:</p><ol start=\"1\"><li><p>Điều hướng đến <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://console.developers.google.com/\">Google Developers Console</a> .</p></li><li><p>Nhấp vào menu thả xuống “Chọn dự án”</p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/selproj.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/selproj.png\"></a></p><p></p><ol start=\"3\"><li><p>Trong danh sách thả xuống, nhấp vào liên kết “Dự án mới”</p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/New-Project.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/New-Project-1024x447.png\"></a></p><ol start=\"4\"><li><p>Đặt tên cho dự án của bạn, sau đó nhấp vào nút <strong>Tạo</strong></p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/projectname.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/projectname.png\"></a></p><p></p><ol start=\"5\"><li><p>Từ phần “ <strong>Đã bật API và Dịch vụ</strong> ” trong Bảng điều khiển Google Developers Console, hãy nhấp vào liên kết “ <strong>Bật API và Dịch vụ”</strong></p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/enableapi.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/enableapi-1024x577.png\"></a></p><p></p><ol start=\"6\"><li><p>Tiếp theo, hãy tìm kiếm Google Calendar API</p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/calAPIsearch.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/calAPIsearch-1024x374.png\"></a></p><ol start=\"7\"><li><p>Kích hoạt API Lịch Google</p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/enablecalAPI.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/enablecalAPI-1024x593.png\"></a></p><p></p><ol start=\"8\"><li><p>Chọn <strong>Thông tin xác thực</strong> trong Trình quản lý API ở menu bên trái và nhấp vào <strong>Tạo thông tin xác thực</strong></p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/cred.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/cred-1024x401.png\"></a></p><ol start=\"9\"><li><p>Chọn <strong>khóa API</strong> từ danh sách thả xuống</p></li></ol><p><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/google-developers-console-create-credentials-api-key.png\"></p><ol start=\"10\"><li><p>Trên cửa sổ bật lên <strong>đã tạo khóa API ,</strong>  hãy chọn và sao chép (Cmd-C hoặc Ctrl-C) khóa API mới tạo của bạn.</p></li></ol><p><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/google-developers-console-api-key-created.png\"></p><ol start=\"11\"><li><p>Bây giờ, hãy quay lại <strong>bảng điều khiển WordPress</strong> của bạn , vào <strong>mục Lịch</strong> , sau đó <strong>chọn Cài đặt</strong> từ menu. Nhập khóa Google API vào trường Khóa Google API, đảm bảo bạn đã dán chính xác khóa đó mà không có khoảng trắng thừa. Sau đó, nhấp vào <strong>Lưu Thay đổi</strong> .</p></li></ol><p><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/Gkey-1.png\"><img src=\"https://docs.simplecalendar.io/wp-content/uploads/2015/09/Gkey-1-1024x750.png\"></a></p><p><em>Trong trường hợp gặp bất kỳ lỗi hoặc sự cố nào, bạn có thể thử lấy khóa API Google mới bằng cách lặp lại các bước trên trước khi liên hệ với bộ phận hỗ trợ . Bạn có thể tạo nhiều khóa API cho cùng một dự án trên Google Developers Console.</em></p>','huong-dan-lay-api-cua-google-calendar-tren-google-cloud-console','posts/Programmaticallyaccess.original.png',1,1,'2025-10-03 17:05:55','2025-10-03 17:05:55'),(2,'Hướng dẫn sử dụng Google PageSpeed Insights chi tiết A-Z 2025','Hãy kiểm tra ngay tốc độ tải trang bằng Google PageSpeed Insights – công cụ được chính Google cung cấp để đo hiệu suất website và cải thiện trải nghiệm người dùng (UX).','<p>Ngày nay, <strong>tốc độ tải trang</strong> không còn là “yếu tố phụ” trong SEO mà là <strong>một trong những chỉ số cốt lõi ảnh hưởng trực tiếp đến thứ hạng tìm kiếm và tỷ lệ chuyển đổi</strong>. Google ưu tiên hiển thị các website <strong>nhanh – mượt – thân thiện với di động</strong>.</p><p>Trong bài viết này, <strong>Khanh Hoa </strong>sẽ hướng dẫn bạn từ A đến Z cách:</p><ul><li><p>Sử dụng Google PageSpeed Insights hiệu quả</p></li><li><p>Hiểu các chỉ số Core Web Vitals</p></li><li><p>Tối ưu kỹ thuật và nội dung để cải thiện điểm số hiệu suất</p></li></ul><p></p><h2><strong>Google PageSpeed Insights là gì?</strong></h2><p><strong>Google PageSpeed Insights (PSI)</strong> là một công cụ miễn phí do Google phát triển, cho phép bạn kiểm tra:</p><ul><li><p><strong>Hiệu suất tải trang</strong> trên cả desktop và mobile</p></li><li><p><strong>Chỉ số Core Web Vitals</strong> theo tiêu chuẩn Google</p></li><li><p>Các <strong>đề xuất cải tiến cụ thể</strong> giúp bạn cải thiện tốc độ trang web</p></li></ul><p>Công cụ phân tích cả <strong>dữ liệu mô phỏng (lab)</strong> và <strong>dữ liệu thực tế từ người dùng thật (field data)</strong> để cung cấp cái nhìn đầy đủ về <strong>trải nghiệm tải trang thực tế</strong>.</p><hr><p><img src=\"https://letannghia.com/wp-content/uploads/2025/04/Google-PageSpeed-Insights-1024x632.jpg\" title=\"Giới thiệu c&ocirc;ng cụ Google PageSpeed Insights\"></p><hr><h3><strong>Tại sao tốc độ tải trang lại quan trọng trong SEO?</strong></h3><ul><li><p>Google xác nhận rằng <strong>tốc độ là yếu tố xếp hạng chính thức</strong> trên cả desktop và mobile</p></li><li><p>Người dùng có xu hướng <strong>thoát trang nếu thời gian tải quá 3 giây</strong></p></li><li><p>Các chỉ số Core Web Vitals (LCP, FID, CLS) ảnh hưởng trực tiếp đến <strong>UX và tỷ lệ chuyển đổi</strong></p></li></ul><blockquote><p>Tham khảo hướng dẫn chính thức từ Google:<br><a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://web.dev/vitals/\">https://web.dev/vitals/</a></p></blockquote><hr><h2><strong>Cách kiểm tra tốc độ website bằng Google PageSpeed Insights</strong></h2><h3><strong>Bước 1: Truy cập công cụ</strong></h3><ul><li><p>Truy cập vào <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://pagespeed.web.dev/\">https://pagespeed.web.dev/</a></p></li><li><p>Nhập URL của website hoặc trang cụ thể bạn muốn kiểm tra</p></li><li><p>Nhấn nút “<strong>Analyze</strong>” và đợi vài giây để công cụ trả kết quả</p></li></ul><hr><h3><strong>Bước 2: Đọc hiểu báo cáo tổng quan</strong></h3><p>Báo cáo bao gồm 2 phần chính:</p><ul><li><p><strong>Field data</strong>: Dữ liệu thực tế từ người dùng thật, dựa trên Chrome UX Report</p></li><li><p><strong>Lab data</strong>: Dữ liệu mô phỏng trên môi trường chuẩn của Google</p></li></ul><p>Các chỉ số được thể hiện bằng <strong>màu sắc</strong> (xanh – đạt chuẩn, cam – cần cải thiện, đỏ – yếu kém), giúp bạn dễ hình dung mức độ hiệu quả của trang.</p><hr><p><img src=\"https://letannghia.com/wp-content/uploads/2025/04/Bao-cao-kiem-tra-toc-do-website-bang-PageSpeed-Insights-1024x547.jpg\" title=\"B&aacute;o c&aacute;o kiểm tra tốc độ website bằng PageSpeed Insights\"></p><hr><h2><strong>Giải thích các chỉ số chính trong PageSpeed Insights</strong></h2><p>Khi nhìn vào báo cáo PageSpeed, bạn sẽ gặp các <strong>chỉ số kỹ thuật quan trọng trong bộ Core Web Vitals</strong>:</p><h3><strong>1. Largest Contentful Paint (LCP)</strong></h3><ul><li><p><strong>Đo thời gian tải phần nội dung lớn nhất</strong> hiển thị trong khung nhìn</p></li><li><p>Mục tiêu: Dưới <strong>2.5 giây</strong></p></li></ul><h3><strong>2. First Input Delay (FID)</strong></h3><ul><li><p><strong>Đo thời gian từ khi người dùng tương tác lần đầu (click, cuộn)</strong> đến khi trình duyệt phản hồi</p></li><li><p>Mục tiêu: Dưới <strong>100ms</strong></p></li></ul><h3><strong>3. Cumulative Layout Shift (CLS)</strong></h3><ul><li><p><strong>Đo mức độ dịch chuyển bố cục không mong muốn</strong> khi trang đang tải</p></li><li><p>Mục tiêu: Dưới <strong>0.1</strong></p></li></ul><hr><p><img src=\"https://letannghia.com/wp-content/uploads/2025/04/chi-so-Core-Web-Vitals-trong-PageSpeed.jpg\" title=\"Giải th&iacute;ch chỉ số Core Web Vitals trong PageSpeed\"></p><hr><blockquote><p>Các chỉ số trên không chỉ quan trọng trong SEO mà còn giúp <strong>giữ chân người dùng lâu hơn</strong> – tăng tỷ lệ đọc bài, mua hàng và quay lại website của bạn.</p></blockquote><hr><h2><strong>Một số thuật ngữ phụ trong báo cáo bạn cần biết</strong></h2><ul><li><p><strong>Time to Interactive (TTI)</strong>: Thời gian cần để trang có thể tương tác hoàn toàn</p></li><li><p><strong>Total Blocking Time (TBT)</strong>: Tổng thời gian trang bị chặn do xử lý script</p></li><li><p><strong>Speed Index (SI)</strong>: Tốc độ hiển thị nội dung trực quan</p></li></ul><p>Dưới đây là <strong>phần cuối của bài viết chuẩn SEO</strong> với chủ đề <strong>“Hướng dẫn sử dụng Google PageSpeed Insights”</strong>, tiếp tục theo phong cách chuyên gia – sáng tạo – dễ hiểu, trình bày bằng <strong>Markdown</strong>. Nội dung bao gồm phần tối ưu hiệu suất, lỗi thường gặp, dịch vụ từ <strong>Nghĩa Lê MMO</strong>, liên kết nội bộ, hình ảnh đúng vị trí và phần FAQ hữu ích cho độc giả.</p><hr><h2><strong>Hướng dẫn tối ưu theo báo cáo PageSpeed Insights</strong></h2><p>Dựa trên các chỉ số PageSpeed đã phân tích, bạn có thể thực hiện các bước <strong>tối ưu website theo gợi ý từ Google</strong>, giúp <strong>tăng điểm hiệu suất, cải thiện Core Web Vitals và nâng cao trải nghiệm người dùng</strong>.</p><h3><strong>1. Tối ưu hóa hình ảnh</strong></h3><ul><li><p>Sử dụng định dạng <strong>WebP</strong> hoặc <strong>AVIF</strong></p></li><li><p>Dùng <strong>Lazy Load</strong> để trì hoãn hình ảnh ngoài khung nhìn</p></li><li><p>Nén ảnh bằng các công cụ như <a target=\"_blank\" rel=\"noopener\" href=\"https://tinypng.com/\">TinyPNG</a> hoặc Squoosh</p></li></ul><hr><h3><strong>2. Rút gọn và trì hoãn JavaScript</strong></h3><ul><li><p>Sử dụng <code>async</code> hoặc <code>defer</code> cho script không thiết yếu</p></li><li><p>Xóa hoặc hoãn tải các đoạn script bên ngoài như: live chat, quảng cáo</p></li><li><p>Gộp các file JS và CSS để giảm số request</p></li></ul><hr><h3><strong>3. Tối ưu bộ nhớ cache (caching)</strong></h3><ul><li><p>Thiết lập <strong>caching header</strong> chuẩn (cache-control)</p></li><li><p>Kết hợp với plugin cache nếu dùng WordPress như: WP Rocket, LiteSpeed Cache</p></li></ul><hr><h3><strong>4. Tối ưu thời gian phản hồi của máy chủ</strong></h3><ul><li><p>Sử dụng <strong>CDN</strong> để phân phối nội dung nhanh hơn toàn cầu</p></li><li><p>Chuyển sang <strong>hosting tốc độ cao</strong> nếu server hiện tại phản hồi chậm</p></li></ul><hr><p><img src=\"https://letannghia.com/wp-content/uploads/2025/04/Toi-uu-anh-va-JavaScript-tu-bao-cao-PageSpeed-Insights.jpg\" title=\"Tối ưu ảnh v&agrave; JavaScript từ b&aacute;o c&aacute;o PageSpeed Insights\"></p><hr><h2><strong>Mẹo nâng cao để cải thiện hiệu suất tải trang</strong></h2><p>Ngoài những cải tiến cơ bản, bạn có thể áp dụng thêm những mẹo sau để website của bạn luôn đạt tốc độ tối ưu:</p><ul><li><p><strong>Dùng font hệ thống</strong> để giảm thời gian tải font bên ngoài</p></li><li><p>Tối giản theme và plugin không cần thiết</p></li><li><p>Tắt các animation hoặc hiệu ứng nặng</p></li><li><p>Ưu tiên tải nội dung chính trước, tải phần phụ sau</p></li></ul><blockquote><p>Gợi ý chuyên sâu: <a target=\"_blank\" rel=\"noopener noreferrer nofollow\" href=\"https://letannghia.com/toi-uu-toc-do-website\">Tối ưu tốc độ tải trang bằng GTmetrix và Lighthouse</a></p></blockquote><hr><h2><strong>Các lỗi thường gặp và cách xử lý trong Google PageSpeed Insights</strong></h2><table><tbody><tr><th rowspan=\"1\" colspan=\"1\"><p><strong>Lỗi trong báo cáo PSI</strong></p></th><th rowspan=\"1\" colspan=\"1\"><p><strong>Cách xử lý thực tế</strong></p></th></tr><tr><td rowspan=\"1\" colspan=\"1\"><p><strong>Eliminate render-blocking resources</strong></p></td><td rowspan=\"1\" colspan=\"1\"><p>Gắn <code>defer</code> cho JS, tối ưu thứ tự tải CSS</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p><strong>Serve images in next-gen formats</strong></p></td><td rowspan=\"1\" colspan=\"1\"><p>Chuyển từ JPG/PNG sang WebP/AVIF</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p><strong>Reduce unused JavaScript</strong></p></td><td rowspan=\"1\" colspan=\"1\"><p>Xóa script thừa, chỉ tải JS khi cần bằng <code>lazyload</code></p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p><strong>Preload key requests</strong></p></td><td rowspan=\"1\" colspan=\"1\"><p>Dùng thẻ <code>&lt;link rel=&quot;preload&quot;&gt;</code> để tải font/icon chính sớm hơn</p></td></tr><tr><td rowspan=\"1\" colspan=\"1\"><p><strong>Avoid chaining critical requests</strong></p></td><td rowspan=\"1\" colspan=\"1\"><p>Tối ưu lại thứ tự tải file quan trọng, tránh tải tuần tự quá nhiều file</p></td></tr></tbody></table><hr><h2><strong>Dịch vụ tối ưu Google PageSpeed từ Nghĩa Lê MMO</strong></h2><p>Nếu bạn không rành kỹ thuật hoặc không có đội ngũ Dev, <strong>Nghĩa Lê MMO</strong> cung cấp dịch vụ tối ưu tốc độ website toàn diện cho doanh nghiệp:</p><ul><li><p><strong>Phân tích hiệu suất chuyên sâu</strong> bằng PageSpeed + Lighthouse + GTmetrix</p></li><li><p><strong>Tối ưu kỹ thuật</strong>: hình ảnh, JS, CSS, hosting, Core Web Vitals</p></li><li><p><strong>Cam kết điểm PageSpeed mobile trên 90+</strong> (nếu cấu trúc web cho phép)</p></li><li><p><strong>Tăng tỷ lệ chuyển đổi</strong> nhờ cải thiện UX tổng thể</p></li></ul><hr><h2><strong>Kết luận: Tăng tốc độ tải trang để vượt đối thủ trên Google</strong></h2><p><strong>Google PageSpeed Insights</strong> không đơn thuần là công cụ kiểm tra, mà còn là <strong>bản đồ chỉ đường để tối ưu SEO bền vững</strong>.</p><p>Việc cải thiện tốc độ tải trang sẽ giúp:</p><ul><li><p>Website <strong>được index nhanh hơn</strong></p></li><li><p><strong>Trải nghiệm người dùng tốt hơn</strong>, tăng thời gian onsite và giảm tỷ lệ thoát</p></li><li><p>Tăng <strong>tỷ lệ chuyển đổi và doanh thu</strong>, đặc biệt trên thiết bị di động</p></li></ul>','huong-dan-su-dung-google-pagespeed-insights-chi-tiet-a-z-2025','posts/google-pagespeed-2025.png',1,2,'2025-10-03 19:18:16','2025-10-03 19:20:37');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `software`
--

LOCK TABLES `software` WRITE;
/*!40000 ALTER TABLE `software` DISABLE KEYS */;
INSERT INTO `software` VALUES (10,1,'Phần mềm Office 365 ','phan-mem-office-365','2024','<p>Phần mềm Office 365 Full Crack</p>','software/hero-image.webp','FILE CÀI ĐẶT PHẦN MỀM/files/Office 365.zip',3395517,11,1,'2025-10-05 07:00:21','2025-10-05 08:55:07'),(11,1,'Adobe Photoshop CC 2020','adobe-photoshop-cc-2020','2020','<p>Adobe Full bọ cài Crack Photoshop 2020</p>','software/Adobe-Photoshop-CC-2020.webp','FILE CÀI ĐẶT PHẦN MỀM/files/Photoshop 2020 KhanhHoa 0584386177.rar',NULL,1,1,'2025-10-06 14:40:19','2025-10-06 14:44:34');
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

-- Dump completed on 2025-10-06 22:09:35
