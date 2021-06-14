INSERT INTO categories (id, name, slug, status, parent_id) VALUES (1, 'áo', 'ao', 1, 0);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (2, 'quần', 'quan', 1, 0);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (3, 'váy', 'vay', 1, 0);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (4, 'áo sơ mi', 'ao-so-mi', 1, 1);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (5, 'áo thun', 'ao-thun', 1, 1);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (6, 'áo len', 'ao-len', 1, 1);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (7, 'quần kaki', 'quan-kaki', 1, 2);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (8, 'quần jean', 'quan-jean', 1, 2);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (9, 'quần thun', 'quan-thun', 1, 2);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (10, 'váy dài', 'vay-dai', 1, 3);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (11, 'váy ngắn', 'vay-ngan', 1, 3);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (12, 'chân váy', 'chan-vay', 1, 3);

INSERT INTO users(id, first_name, last_name, username, email, password, avatar_name, avatar_path)
VALUES (1, 'Hiếu', 'Nguyễn Trọng', 'tronghieu', 'hieuntctk42@gmail.com', '$2y$10$goP9dyeKfbaRZeVzqfdXhehPFasiEo0FMnvZIB1WJHgWrQQwqZys2', 'avatar1.jpg', 'images/avatars/avatar1.jpg');
INSERT INTO users(id, first_name, last_name, username, email, password, avatar_name, avatar_path)
VALUES (2, 'Hà', 'Nguyễn Thị', 'thiha', 'hantctk42@gmail.com', '$2y$10$6phFUH9t5GSlnd50i0YS8ugYKwfEik9uwgXTxmrsFP9tfwdWKcKXa', 'avatar2.jpg', 'images/avatars/avatar2.jpg');

INSERT INTO client_feedbacks(id, content, author_info, image_name, image_path)
VALUES (1, 'Sản phẩm uy tín, chất lượng, tôi rất là ưng cái bụng', 'Meow khó tính', 'review1.jpg', 'images/reviews/review1.jpg');
INSERT INTO client_feedbacks(id, content, author_info, image_name, image_path)
VALUES (2, 'Không thể tin được, cửa hàng thật tuyệt vời, thật không thể tin được', 'Meow thật không thể tin được', 'review2.jpg', 'images/reviews/review2.jpg');
INSERT INTO client_feedbacks(id, content, author_info, image_name, image_path)
VALUES (3, 'Sản phẩm tuyệt vời, tôi không thể ngừng việc mua sắm tại Shop Bạch Tuyết', 'Meow thời trang', 'review3.jpg', 'images/reviews/review3.jpg');
INSERT INTO client_feedbacks(id, content, author_info, image_name, image_path)
VALUES (4, 'Nhân viên tư vấn nhiệt tình, tận tâm. Bà chủ dễ thương số 1', 'Meow thân thiện', 'review4.jpg', 'images/reviews/review4.jpg');
INSERT INTO client_feedbacks(id, content, author_info, image_name, image_path)
VALUES (5, 'Lại bắt viết review nữa à, bực cái mình nà, mèo méo meo mèo meo', 'Meow cục súc', 'review5.jpg', 'images/reviews/review5.jpg');

INSERT INTO sliders(title, content, image_name, image_path)
VALUES ('Ở nhà an toàn 🏘', '<div class="slider-content slider-content--animation"> <span class="content-span-1 u-c-white" id="template-content-1"> Ở nhà an toàn 🐹 </span> <span class="content-span-2 u-c-white" id="template-content-2"> Giảm ngay 20K 😍 </span> <span class="content-span-3 u-c-white" id="template-content-3"> Chung tay cùng cộng đồng đẩy lùi dịch Covid19. Việt Nam quyết thắng đại dịch Covid19 </span> <span class="content-span-4 u-c-white"> <i id="template-content-4">Áp dụng cho mọi đơn hàng</i> <span class="u-c-brand" id="template-content-5"> </span> </span> <a id="template-content-6" class="shop-now-link btn--e-brand" href="http://localhost:8000/categories/ao-thun"> MUA NGAY </a> </div>', 'slider1.jpg', 'images/sliders/slider1.jpg');
INSERT INTO sliders(title, content, image_name, image_path)
VALUES ('Đơn hàng đầu tiên ✨', '<div class="slider-content slider-content--animation"> <span class="content-span-1 u-c-white" id="template-content-1"> Đơn hàng đầu tiên ✨ </span> <span class="content-span-2 u-c-white" id="template-content-2"> Mỗi ngày 10K cho đơn hàng đầu tiên 😘 </span> <span class="content-span-3 u-c-white" id="template-content-3"> Trở thành chủ nhân của đơn hàng đầu tiên trong ngày để nhận ưu đãi hấp dẫn </span> <span class="content-span-4 u-c-white"> <i id="template-content-4">Áp dụng cho mọi đơn hàng</i> <span class="u-c-brand" id="template-content-5"> </span> </span> <a id="template-content-6" class="shop-now-link btn--e-brand" href="http://localhost:8000/categories/ao-thun"> MUA NGAY </a> </div>', 'slider2.jpg', 'images/sliders/slider2.jpg');
INSERT INTO sliders(title, content, image_name, image_path)
VALUES ('Miễn phí vận chuyển 🚀', '<div class="slider-content slider-content--animation"> <span class="content-span-1 u-c-white" id="template-content-1"> Miễn phí vận chuyển 🚀 </span> <span class="content-span-2 u-c-white" id="template-content-2"> Mua sắm thả ga, không lo vận chuyển 😆 </span> <span class="content-span-3 u-c-white" id="template-content-3"> Không còn phải bận tâm về chi phí vận chuyển </span> <span class="content-span-4 u-c-white"> <i id="template-content-4">Áp dụng cho đơn hàng từ</i> <span class="u-c-brand" id="template-content-5"> 300K </span> </span> <a id="template-content-6" class="shop-now-link btn--e-brand" href="http://localhost:8000/categories/ao-thun"> MUA NGAY </a> </div>', 'slider3.jpg', 'images/sliders/slider3.jpg');

INSERT INTO websiteconfigs(config_key, config_value)
VALUES ('SHOP_NAME', 'Shop Bạch Tuyết');
INSERT INTO websiteconfigs(config_key, config_value)
VALUES ('LOGO_IMAGE', 'images/logos/logo1.jpg');
INSERT INTO websiteconfigs(config_key, config_value)
VALUES ('ADDRESS', '1 Phù Đổng Thiên Vương, Phường 8, Thành phố Đà Lạt, tỉnh Lâm Đồng');
INSERT INTO websiteconfigs(config_key, config_value)
VALUES ('PHONE_NUMBER', '0702383675');
INSERT INTO websiteconfigs(config_key, config_value)
VALUES ('EMAIL', 'shopbachtuyet@gmail.com');
INSERT INTO websiteconfigs(config_key, config_value)
VALUES ('FACEBOOK', 'https://www.facebook.com/groups/2174657075895703');
INSERT INTO websiteconfigs(config_key, config_value)
VALUES ('YOUTUBE', 'https://www.youtube.com/channel/UCOmHUn--16B90oW2L6FRR3A');
INSERT INTO websiteconfigs(config_key, config_value)
VALUES ('INSTAGRAM', 'https://www.instagram.com/nancyjewel_mcdonie_');

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `phone_number`, `street`, `village`, `district`, `province`, `created_at`, `updated_at`, `remember_token`, `deleted_at`) VALUES
(1, 'Hiếu', 'Nguyễn Trọng', 'hieunguyen', 'hieuntctk42@gmail.com', '$2y$10$3CIEQ8zNpdNi6DA.hLleQe2weNg8MdCGOlzBC5JNtnE7vr8slhUKq', '0374408253', '1 Phù Đổng Thiên Vương', 'Phường 8', 'Thành phố Đà Lạt', 'Tỉnh Lâm Đồng', '2021-06-05 17:07:02', '2021-06-07 05:58:37', NULL, NULL),
(2, 'Hà', 'Nguyễn Thị', 'hanguyen', 'hantctk42@gmail.com', '$2y$10$3CIEQ8zNpdNi6DA.hLleQe2weNg8MdCGOlzBC5JNtnE7vr8slhUKq', '0701383675', '1 Phù Đổng Thiên Vương', 'Phường 8', 'Thành phố Đà Lạt', 'Tỉnh Lâm Đồng', '2021-06-07 05:54:09', '2021-06-07 05:54:09', NULL, NULL),
(3, 'Danh', 'Nguyễn', 'danhnguyen', 'danhnguyen@gmail.com', '$2y$10$3CIEQ8zNpdNi6DA.hLleQe2weNg8MdCGOlzBC5JNtnE7vr8slhUKq', '0121456789', '1 Phù Đổng Thiên Vương', 'Phường 8', 'Thành phố Đà Lạt', 'Tỉnh Lâm Đồng', '2021-06-07 05:54:09', '2021-06-07 05:54:09', NULL, NULL),
(4, 'Long', 'Nguyễn Bảo', 'longnguyen', 'longnguyen@gmail.com', '$2y$10$3CIEQ8zNpdNi6DA.hLleQe2weNg8MdCGOlzBC5JNtnE7vr8slhUKq', '0131456789', '1 Phù Đổng Thiên Vương', 'Phường 8', 'Thành phố Đà Lạt', 'Tỉnh Lâm Đồng', '2021-06-07 05:55:42', '2021-06-07 05:55:42', NULL, NULL),
(5, 'Nhật', 'Lê Hoàng', 'nhatle', 'nhatle@gmail.com', '$2y$10$3CIEQ8zNpdNi6DA.hLleQe2weNg8MdCGOlzBC5JNtnE7vr8slhUKq', '0141456789', '1 Phù Đổng Thiên Vương', 'Phường 8', 'Thành phố Đà Lạt', 'Tỉnh Lâm Đồng', '2021-06-07 05:55:42', '2021-06-07 05:55:42', NULL, NULL),
(6, 'Quang', 'Nguyễn Ngọc', 'quangnguyen', 'quangnguyen@gmail.com', '$2y$10$3CIEQ8zNpdNi6DA.hLleQe2weNg8MdCGOlzBC5JNtnE7vr8slhUKq', '0151456789', '1 Phù Đổng Thiên Vương', 'Phường 8', 'Thành phố Đà Lạt', 'Tỉnh Lâm Đồng', '2021-06-07 05:57:11', '2021-06-07 05:57:11', NULL, NULL),
(7, 'Trung', 'Phan Quốc', 'trungphan', 'trungphan@gmail.com', '$2y$10$3CIEQ8zNpdNi6DA.hLleQe2weNg8MdCGOlzBC5JNtnE7vr8slhUKq', '0171456789', '1 Phù Đổng Thiên Vương', 'Phường 8', 'Thành phố Đà Lạt', 'Tỉnh Lâm Đồng', '2021-06-07 05:57:11', '2021-06-07 05:57:11', NULL, NULL),
(8, 'Hiếu', 'Nguyễn Trọng', 'tronghieuvjp', 'hieuntctak42@gmail.com', '$2y$10$I//EzZz5MUB5tuTix.abJOip7Re2NxNS.yXA0WQDUNoAZKwBs8DlC', '0374409254', '1 Phù Đổng Thiên Vương', 'Phường 8', 'Thành phố Đà Lạt', 'Tỉnh Lâm Đồng', '2021-06-10 19:25:13', '2021-06-10 19:25:13', NULL, NULL);

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `discount_percent`, `current_status`, `order_option`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 710000, 0, 'shipped', 'shipping', '2021-06-07 06:11:45', '2021-06-07 06:35:38', NULL),
(2, 2, 1021000, 0, 'approved', 'shipping', '2021-06-07 06:12:29', '2021-06-07 06:26:38', NULL),
(3, 2, 390000, 0, 'approved', 'buy at store', '2021-06-07 06:13:32', '2021-06-07 06:35:14', NULL),
(4, 3, 508000, 0, 'approved', 'buy at store', '2021-06-07 06:14:04', '2021-06-13 22:25:07', NULL),
(5, 4, 810000, 0, 'new web order', 'buy at store', '2021-06-07 06:14:43', '2021-06-07 13:17:41', NULL),
(6, 5, 1669088, 0, 'new web order', 'shipping', '2021-06-07 06:15:35', '2021-06-07 13:17:43', NULL),
(7, 6, 565000, 0, 'new web order', 'shipping', '2021-06-07 06:15:47', '2021-06-07 13:17:45', NULL),
(8, 7, 575000, 0, 'new web order', 'shipping', '2021-06-07 06:16:27', '2021-06-07 13:17:48', NULL),
(9, 8, 170000, 0, 'new web order', 'shipping', '2021-06-10 20:35:13', '2021-06-10 20:35:13', NULL);


INSERT INTO `order_details` (`id`, `order_id`, `product_detail_id`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 44968548442, 2, '2021-06-07 06:11:45', '2021-06-07 06:11:45', NULL),
(2, 1, 3255190245, 1, '2021-06-07 06:11:45', '2021-06-07 06:11:45', NULL),
(3, 2, 81091067185, 1, '2021-06-07 06:12:29', '2021-06-07 06:12:29', NULL),
(4, 2, 63949411125, 2, '2021-06-07 06:12:29', '2021-06-07 06:12:29', NULL),
(5, 3, 52922177345, 1, '2021-06-07 06:13:32', '2021-06-07 06:13:32', NULL),
(6, 3, 54065512585, 1, '2021-06-07 06:13:32', '2021-06-07 06:13:32', NULL),
(7, 3, 14613645690, 1, '2021-06-07 06:13:32', '2021-06-07 06:13:32', NULL),
(8, 4, 15547700619, 2, '2021-06-07 06:14:04', '2021-06-07 06:14:04', NULL),
(9, 4, 34715119014, 1, '2021-06-07 06:14:04', '2021-06-07 06:14:04', NULL),
(10, 5, 21920705725, 3, '2021-06-07 06:14:43', '2021-06-07 06:14:43', NULL),
(11, 6, 43095965970, 3, '2021-06-07 06:15:35', '2021-06-07 06:15:35', NULL),
(12, 6, 71418136881, 3, '2021-06-07 06:15:35', '2021-06-07 06:15:35', NULL),
(13, 7, 81615442602, 2, '2021-06-07 06:15:47', '2021-06-07 06:15:47', NULL),
(14, 8, 16804586938, 3, '2021-06-07 06:16:27', '2021-06-07 06:16:27', NULL),
(15, 9, 18371621986, 1, '2021-06-10 20:35:13', '2021-06-10 20:35:13', NULL);


INSERT INTO `order_notes` (`id`, `order_id`, `user_id`, `order_status`, `note`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 0, 'new web order', 'Đơn hàng mới được tạo bởi khách hàng: hieunguyen', '2021-06-01 06:11:45', '2021-06-07 13:37:12', NULL),
(2, 2, 0, 'new web order', 'Đơn hàng mới được tạo bởi khách hàng: hieunguyen', '2021-06-07 06:12:29', '2021-06-07 06:12:29', NULL),
(3, 3, 0, 'new web order', 'Đơn hàng mới được tạo bởi khách hàng: hieunguyen', '2021-06-07 06:13:32', '2021-06-07 06:13:32', NULL),
(4, 4, 0, 'new web order', 'Đơn hàng mới được tạo bởi khách hàng: hieunguyen', '2021-06-07 06:14:04', '2021-06-07 06:14:04', NULL),
(5, 5, 0, 'new web order', 'Đơn hàng mới được tạo bởi khách hàng: hieunguyen', '2021-06-07 06:14:43', '2021-06-07 06:14:43', NULL),
(6, 6, 0, 'new web order', 'Đơn hàng mới được tạo bởi khách hàng: hieunguyen', '2021-06-07 06:15:35', '2021-06-07 06:15:35', NULL),
(7, 7, 0, 'new web order', 'Đơn hàng mới được tạo bởi khách hàng: hieunguyen', '2021-06-07 06:15:47', '2021-06-07 06:15:47', NULL),
(8, 8, 0, 'new web order', 'Đơn hàng mới được tạo bởi khách hàng: hieunguyen', '2021-06-07 06:16:27', '2021-06-07 06:16:27', NULL),
(9, 1, 1, 'approved', NULL, '2021-06-01 06:26:11', '2021-06-07 13:37:34', NULL),
(10, 1, 1, 'packed', NULL, '2021-06-02 06:26:20', '2021-06-07 13:37:37', NULL),
(11, 1, 1, 'ready for delivery', NULL, '2021-06-02 06:26:28', '2021-06-07 13:37:52', NULL),
(12, 2, 1, 'approved', NULL, '2021-06-03 06:26:38', '2021-06-07 13:38:04', NULL),
(13, 3, 1, 'approved', 'Đơn hàng này đã được xác nhận', '2021-06-07 06:35:14', '2021-06-07 06:35:14', NULL),
(14, 1, 1, 'processing', NULL, '2021-06-03 06:35:29', '2021-06-07 13:38:12', NULL),
(15, 1, 1, 'shipped', NULL, '2021-06-07 06:35:38', '2021-06-07 06:35:38', NULL),
(16, 9, 0, 'new web order', 'Đơn hàng mới được tạo bởi khách hàng: tronghieuvjp', '2021-06-10 20:35:13', '2021-06-10 20:35:13', NULL),
(17, 4, 1, 'approved', NULL, '2021-06-13 22:25:07', '2021-06-13 22:25:07', NULL);


