@extends('admin.layouts.admin')
@section('title', 'Category List')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Thống kê</h2>
</div>

<!-- Dashboard Content -->
<div class="content bg-light p-4 rounded">
    <h5 class="mb-4">Thống kê</h5>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <p class="text-center">Người dùng</p>
                <p><i class="bi bi-people-fill ml-5 mr-5"></i>500</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <p class="text-center">Sản phẩm</p>
                <p><i class="bi bi-database-fill ml-5 mr-5"></i>{{$productCount}}</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <p class="text-center">Danh mục sản phẩm</p>
                <p><i class="bi bi-calendar-event-fill ml-5 mr-5"></i>{{$categoryCount}}</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <p class="text-center">Bài viết</p>
                <p><i class="bi bi-file-earmark-post ml-5 mr-5"></i>{{$postCount}}</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <p class="text-center">Danh mục bài viết</p>
                <p><i class="bi bi-postcard-fill ml-5 mr-5"></i>{{$categoryBlogCount}}</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <p class="text-center">Bình luận</p>
                <p><i class="bi bi-chat-dots-fill ml-5 mr-5"></i></p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <p class="text-center">Kho hàng</p>
                <p><i class="bi bi-archive-fill ml-5 mr-5"></i></p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <p class="text-center">Đơn hàng</p>
                <p><i class="bi bi-basket3-fill ml-5 mr-5"></i></p>
            </div>
        </div>
    </div>
</div>
@endsection

            
                