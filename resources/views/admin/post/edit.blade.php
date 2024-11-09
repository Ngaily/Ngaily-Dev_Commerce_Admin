@extends('admin.layouts.admin')
@section('title', 'Cập nhật bài viết')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Cập nhật Bài viết</h2>
</div>

<div class="table-responsive">
    <div class="filter-options mb-4">
        <button class="btn btn-secondary">Thêm điều kiện lọc</button>
        <input class="form-control search-input d-inline-block" type="text" placeholder="Nhập từ khóa tìm kiếm" style="width: 300px;">
        <button class="btn btn-primary ml-2">Tìm kiếm</button>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="needs-validation" action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="">Tiêu đề</label>
                        <input type="text" name="title" class="form-control" required placeholder="Nhập tiêu đề" value="{{ $post->title }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Danh mục</label>
                        <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="{{ asset('storage/' . $post->image) }}" width="150px" height="150px" class="object-fit-cover rounded" alt="">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Mô tả</label>
                        <textarea name="description" class="form-control" cols="30" rows="2">{{ $post->description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Nội dung</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $post->content }}</textarea>
                    </div>
                </div>
                <button class="btn btn-success text-white" type="submit"><i class="fe fe-check-circle fe-12"></i> Cập nhật</button>
            </form>
        </div> <!-- /.card-body -->
    </div>
</div>
@endsection

            
                