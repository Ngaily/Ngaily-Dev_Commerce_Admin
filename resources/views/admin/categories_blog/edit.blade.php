@extends('admin.layouts.admin')
@section('title', 'Cập nhật danh mục ')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Cập nhật danh mục</h2>
</div>

<div class="table-responsive">
    <div class="filter-options mb-4">
        <button class="btn btn-secondary">Thêm điều kiện lọc</button>
        <input class="form-control search-input d-inline-block" type="text" placeholder="Nhập từ khóa tìm kiếm" style="width: 300px;">
        <button class="btn btn-primary ml-2">Tìm kiếm</button>
    </div>

    <form action="{{ route('categories_blog.update', ['id' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Tên danh mục</label>
            <input value="{{$blog->category_name}}" type="text" class="form-control" name="category_name" placeholder="Nhập tên danh mục" required>
        </div>

       <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection

            
                