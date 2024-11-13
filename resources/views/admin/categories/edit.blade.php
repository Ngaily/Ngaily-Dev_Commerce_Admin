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

    <form action="{{ route('categories.update', ['id' =>$categories->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" name="category_name" placeholder="Nhập tên danh mục" required value="{{$categories->category_name}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="col-md-6 mb-3">
            <img src="{{ asset('storage/' . $categories->image) }}" width="150px" height="150px" class="object-fit-cover rounded" alt="">
        </div>
       <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>
@endsection

            
                