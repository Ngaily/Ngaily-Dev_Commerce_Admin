@extends('admin.layouts.admin')
@section('title', 'Thêm danh mục ')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Thêm danh mục</h2>
</div>

<div class="table-responsive">
    <div class="filter-options mb-4">
        <button class="btn btn-secondary">Thêm điều kiện lọc</button>
        <input class="form-control search-input d-inline-block" type="text" placeholder="Nhập từ khóa tìm kiếm" style="width: 300px;">
        <button class="btn btn-primary ml-2">Tìm kiếm</button>
    </div>

    <form action="{{ route('categories_blog.store') }}" method="POST" enctype="multipart/form-data">
        @if(session('success'))
                <div class="alert alert-success">
        {{ session('success') }}
                </div>
            @endif
        @csrf
        @method('POST')
        <div class="mb-3">
            <label class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" name="category_name" placeholder="Nhập tên danh mục" required>
        </div>

       <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>
@endsection

            
                