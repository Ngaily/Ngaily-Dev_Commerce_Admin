@extends('admin.layouts.admin')
@section('title', 'Bài viết')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Bài viết</h2>
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
                <th>Tiêu đề</th>
                <th>Mô tả</th>
                <th>Nội dung</th>
                <th>Danh mục</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img src="{{asset('storage/'. $post->image)}}" alt="" width="100px" height="150px"></td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->category_blog->category_name}}</td>

                <td>
                    <button class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></button>
                    <a href="{{route('posts.destroy',['id'=>$post->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xoá bài viết không?')"><button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('posts.create')}}"><button class="btn btn-primary">Thêm bài viết</button></a>
</div>
@endsection

            
                