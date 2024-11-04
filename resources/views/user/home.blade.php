<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Cửa Hàng Thiết Bị Điện Tử</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        .banner {
            background-image: url('https://example.com/banner-image.jpg'); /* Thay đường dẫn hình ảnh */
            background-size: cover;
            background-position: center;
            height: 400px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 15px 0;
            border-radius: 8px;
            text-align: center;
        }

        .product-card img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Thiết Bị Điện Tử</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Trang Chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sản Phẩm</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Khuyến Mãi</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Liên Hệ</a></li>
            </ul>
        </div>
    </nav>

    <!-- Banner -->
    <div class="banner">
        <div class="container">
            <h1 class="text-success">Chào Mừng Đến Với Cửa Hàng Thiết Bị Điện Tử</h1>
            <p class="text-success">Khám phá các sản phẩm công nghệ cao với giá ưu đãi</p>
            <a href="#" class="btn btn-primary">Xem Sản Phẩm</a>
        </div>
    </div>

    <h1>Danh Mục Sản Phẩm</h1>
    <div class="category-list">
        @foreach($categories as $category)
            <div class="category-item">
                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" width="100">
                <h3>{{ $category->category_name }}</h3>
            </div>
        @endforeach
    </div>

    <!-- Featured Products Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Sản Phẩm Nổi Bật</h2>
        <div class="row">
            <!-- Product Card 1 -->
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://example.com/laptop.jpg" alt="Laptop">
                    <h5 class="mt-2">Laptop Cao Cấp</h5>
                    <p class="text-muted">Giá: 20.000.000₫</p>
                    <a href="#" class="btn btn-primary btn-sm">Xem Chi Tiết</a>
                </div>
            </div>
            <!-- Product Card 2 -->
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://example.com/phone.jpg" alt="Điện Thoại">
                    <h5 class="mt-2">Điện Thoại Thông Minh</h5>
                    <p class="text-muted">Giá: 15.000.000₫</p>
                    <a href="#" class="btn btn-primary btn-sm">Xem Chi Tiết</a>
                </div>
            </div>
            <!-- Product Card 3 -->
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://example.com/headphone.jpg" alt="Tai Nghe">
                    <h5 class="mt-2">Tai Nghe Bluetooth</h5>
                    <p class="text-muted">Giá: 2.000.000₫</p>
                    <a href="#" class="btn btn-primary btn-sm">Xem Chi Tiết</a>
                </div>
            </div>
            <!-- Product Card 4 -->
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://example.com/watch.jpg" alt="Đồng Hồ">
                    <h5 class="mt-2">Đồng Hồ Thông Minh</h5>
                    <p class="text-muted">Giá: 3.500.000₫</p>
                    <a href="#" class="btn btn-primary btn-sm">Xem Chi Tiết</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>© 2024 Cửa Hàng Thiết Bị Điện Tử. Tất cả các quyền được bảo lưu.</p>
            <p>Địa chỉ: 123 Đường ABC, Thành phố XYZ | SĐT: (012) 345-6789</p>
        </div>
    </footer>

    <!-- Bootstrap JS, jQuery, and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
