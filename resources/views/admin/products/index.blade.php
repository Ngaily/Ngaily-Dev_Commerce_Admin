@extends('admin.layouts.admin')
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
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td><img src="{{asset('storage/'. $product->image)}}" alt="" width="100px" height="150px"></td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->category->category_name}}</td>
                <td>
                    <form action="{{ route('product.update-status', ['id' => $product->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="{{ $product->status }}" name="status">
                        <button class="btn">
                            <i class="{{ translateClassStatusCustom($product->status) }}" style="font-size: 20px"></i>
                        </button>
                    </form>
                </td>

                <td>
                    <button class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></button>
                    <a href="{{route('product.destroy',['id'=>$product->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm không?')"><button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('product.create')}}"><button class="btn btn-primary">Thêm sản phẩm</button></a>
</div>
@endsection

            
                