<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Edit</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
}

.sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    padding: 20px;
    height: 100%;
    background-color: #f8f9fa;
}

.sidebar-sticky {
    position: relative;
    top: 0;
}

.nav-link {
    font-size: 18px;
    margin: 10px 0;
}

.nav-link.active {
    background-color: #e9ecef;
    color: #000;
}

h2 {
    font-weight: bold;
    color: #343a40;
}

form {
    background-color: #f1f3f5;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.form-control,
.form-control-file {
    margin-bottom: 20px;
    height: 45px;
    padding: 10px;
    font-size: 16px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    font-size: 18px;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    padding: 10px 0;
}

.container {
    max-width: 960px;
}

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar bg-light">
                <div class="sidebar-sticky">
                    <h3 class="text-center">ADMIN</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thống kê</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Danh mục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản lý đơn hàng</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h2>Sửa sản phẩm</h2>
                </div>

                <form>
                    <div class="form-group">
                        <label for="category">Danh mục</label>
                        <input type="text" class="form-control" id="category" placeholder="Danh mục">
                    </div>

                    <div class="form-group">
                        <label for="productName">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="productName" placeholder="Tên sản phẩm">
                    </div>

                    <div class="form-group">
                        <label for="price">Giá</label>
                        <input type="text" class="form-control" id="price" placeholder="Giá">
                    </div>

                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Mô tả"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Ảnh</label>
                        <input type="file" class="form-control-file" id="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </main>
        </div>
    </div>

    <footer class="footer bg-light text-center">
        <div class="container">
            <span class="text-muted">Footer</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

