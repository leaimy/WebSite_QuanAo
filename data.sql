INSERT INTO categories (id, name, slug, status, parent_id) VALUES (1, 'áo', 'ao', 0, 0);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (2, 'quần', 'quan', 0, 0);
INSERT INTO categories (id, name, slug, status, parent_id) VALUES (3, 'váy', 'vay', 0, 0);
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
