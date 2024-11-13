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
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="needs-validation" action="{{ route('product.update',['id'=>$product->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="product_name" class="form-control" required placeholder="Nhập tên sản phẩm" value="{{$product->product_name}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Giá</label>
                        <input type="number" name="price" class="form-control" required placeholder="Nhập giá" value="{{$product->price}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="{{ asset('storage/' . $product->image) }}" width="150px" height="150px" class="object-fit-cover rounded" alt="">
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
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit"><i class="fe fe-check-circle fe-12"></i> Thêm</button>
            </form>
        </div> <!-- /.card-body -->
    </div>

@endsection

            
                