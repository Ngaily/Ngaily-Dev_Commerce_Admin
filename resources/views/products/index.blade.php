@extends('layouts.admin')
@section('title', 'Product List')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Danh sách sản phẩm</h2>
</div>

<div class="table-responsive">
    <div class="filter-options mb-4">
        <button class="btn btn-secondary">Thêm điều kiện lọc</button>
        <input class="form-control search-input d-inline-block" type="text" placeholder="Nhập từ khóa tìm kiếm" style="width: 300px;">
        <button class="btn btn-primary ml-2">Tìm kiếm</button>
    </div>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th>Danh mục</th>
                <th>Status</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><div class="product-image-placeholder"></div></td>
                <td>IPhone 16 PRM</td>
                <td>30,000,000</td>
                <td>Đẹp</td>
                <td>Iphone</td>
                <td>Ẩn</td>
                <td>
                    <button class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-primary">Thêm sản phẩm</button>
</div>
@endsection

            
                