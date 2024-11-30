<?php
echo '<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Người Dùng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }
        .message {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .message h1 {
            font-size: 36px;
            color: #343a40;
        }
        .message p {
            font-size: 18px;
            color: #6c757d;
        }
        .product-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 50px;
        }
        .product-item {
            background-color: #fff;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            margin-bottom: 30px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .product-item:hover {
            transform: translateY(-10px);
        }
        .product-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-item h3 {
            font-size: 20px;
            color: #343a40;
            margin-top: 15px;
        }
        .product-item p {
            font-size: 16px;
            color: #6c757d;
            margin-top: 10px;
        }
        .product-item .price {
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
            margin-top: 15px;
        }
        .btn {
            display: inline-block;
            padding: 15px 40px;
            margin: 20px 10px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        .btn-logout {
            background-color: #d9534f;
        }
        .btn-logout:hover {
            background-color: #c9302c;
        }
        .btn-shop {
            background-color: #28a745;
        }
        .btn-shop:hover {
            background-color: #218838;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        Chào Mừng Đến Với Trang Người Dùng
    </div>
    
    <div class="container">
        <div class="message">
            <h1>Đăng Nhập Thành Công</h1>
            <p>Chào mừng bạn đã trở thành người dùng của chúng tôi!</p>
            <div>
                <a href="logout.php" class="btn btn-logout">Đăng Xuất</a>
                <a href="products.php" class="btn btn-shop">Xem Sản Phẩm</a>
            </div>
        </div>

        <!-- Product Gallery -->
        <div class="product-gallery">
            <div class="product-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjWTLKW_SHCHwkvqwfbrCu1TUZnb_4LLbvMQ&s" alt="Sản phẩm 1">
                <h3>Sản Phẩm 1</h3>
                <p>Mô tả ngắn về sản phẩm 1</p>
                <p class="price">500,000 VNĐ</p>
                <a href="product-detail.php?id=1" class="btn btn-shop">Mua Ngay</a>
            </div>
            <div class="product-item">
                <img src="https://pos.nvncdn.com/3d26e0-79464/ps/20221128_9tEvWYjBXsf01S6hP8s7E72x.jpg" alt="Sản phẩm 2">
                <h3>Sản Phẩm 2</h3>
                <p>Mô tả ngắn về sản phẩm 2</p>
                <p class="price">1,200,000 VNĐ</p>
                <a href="product-detail.php?id=2" class="btn btn-shop">Mua Ngay</a>
            </div>
            <div class="product-item">
                <img src="https://vn-live-01.slatic.net/p/fa067f9c701d940ba98ccb05d2d2f438.jpg" alt="Sản phẩm 3">
                <h3>Sản Phẩm 3</h3>
                <p>Mô tả ngắn về sản phẩm 3</p>
                <p class="price">850,000 VNĐ</p>
                <a href="product-detail.php?id=3" class="btn btn-shop">Mua Ngay</a>
            </div>
        </div>
    </div>

    <div class="footer">
        © 2024 Công Ty XYZ - Tất cả các quyền được bảo vệ.
    </div>
</body>
</html>';
?>
