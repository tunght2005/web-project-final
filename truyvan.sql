-- liên két giữa product và categories
SELECT products.name as pname, images, price,categories.name as cname ,categories.slug as cslug FROM products, categories WHERE products.category_id=categories.id
-- Bài 14 làm ở trang chủ: giảm giá, mới nhất,.... 