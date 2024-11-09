@extends('admin.layouts.admin')
@section('title', 'Danh sách danh mục')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Danh mục bài viết</h2>
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
                <th>Tên danh mục</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->category_name}}</td> 
                <td>
                    <a href="{{route('categories_blog.edit', ['id' => $blog->id])}}"><button class="btn btn-danger btn-sm"><i class="bi bi-pencil"></i></button></a>
                    <a href="{{route('categories_blog.destroy',['id'=>$blog->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xoá danh mục này không?')"><button class="btn btn-success btn-sm"><i class="bi bi-trash"></i></button></a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('categories_blog.create')}}"><button class="btn btn-primary">Thêm danh mục</button></a>
    <!-- Phân trang -->
    {{-- <div class="d-flex justify-content-center">
        {{ $category->links() }}
    </div> --}}
    
</div>
@endsection

            
                