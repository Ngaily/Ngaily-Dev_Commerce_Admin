@extends('admin.layouts.admin')
@section('title', 'Thêm sản phẩm')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Thêm sản phẩm</h2>
</div>

<div class="table-responsive">
    <div class="filter-options mb-4">
        <button class="btn btn-secondary">Thêm điều kiện lọc</button>
        <input class="form-control search-input d-inline-block" type="text" placeholder="Nhập từ khóa tìm kiếm" style="width: 300px;">
        <button class="btn btn-primary ml-2">Tìm kiếm</button>
    </div>
   
    {{-- <div class="container mt-5">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @if(session('success'))
                <div class="alert alert-success">
            {{ session('success') }}
                </div>
            @endif
            @csrf
            @method('POST')
            <div class="mb-3">
                <label class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="product_name" required>
            </div>
            
        
            <div class="mb-3">
                <label class="form-label">Hình ảnh</label>
                <input type="file" class="form-control"  name="image" accept="image/*" required>
            </div>
            
           
            <div class="mb-3">
                <label class="form-label">Giá</label>
                <input type="number" class="form-control" name="price" min="0" step="0.01" required>
            </div>
            
        
            <div class="mb-3">
                <label class="form-label">Mô tả</label>
                <textarea class="form-control" name="description" rows="5" required></textarea>
            </div>
            
            
            <div class="mb-3">
                <label class="form-label">Danh mục</label>
                <select class="form-select" name="category_name" required>
                    @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
    
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div> --}}
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="needs-validation" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="product_name" class="form-control" required placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Giá</label>
                        <input type="number" name="price" class="form-control" required placeholder="Nhập giá">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
            
                    <div class="col-md-6 mb-3">
                        <label for="">Danh mục</label>
                        <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="col-md-12 mb-3">
                        <label for="">Mô tả</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit"><i class="fe fe-check-circle fe-12"></i> Thêm</button>
            </form>
        </div> <!-- /.card-body -->
    </div>

@endsection

            
                