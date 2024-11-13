@extends('admin.layouts.admin')
@section('title', 'Thêm hình ảnh')
@section('content')
    <h2 class="mb-2 page-title">Hình ảnh thêm</h2>
    <a href="{{ route('product.index') }}" class="btn btn-secondary mb-3">Quay lại</a>
    <div class="col-lg-12 p-0">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="needs-validation" action="{{ route('product.image.store', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="" class="font-weight-bold">Thêm hình ảnh</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Thêm</button>
                </form>
            </div> <!-- /.card-body -->
        </div> <!-- /.card -->
    </div> <!-- /.col -->
    <div class="row my-4">
        <!-- Small table -->
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <!-- table -->
                    <table class="table datatables" id="dataTable-1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Hình ảnh</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $stt = 1;
                            @endphp
                            @foreach ($images as $image)
                            <tr>
                                <td>{{ $stt }}</td>
                                <td><img src="{{ asset('storage/' . $image->image) }}" alt="" width="100px" height="100px" style="object-fit: cover"></td>
                                <td>
                                    <a href="{{route('product.image.destroy',['id'=>$image->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm không?')"><button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button></a>
                                </td>
                            </tr>
                            @php
                                $stt++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- simple table -->
    </div> <!-- end section -->
@endsection
