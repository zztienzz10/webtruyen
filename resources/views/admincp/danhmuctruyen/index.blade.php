@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">liệt kê danh mục truyện </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">tên danh mục</th>
                            <th scope="col">Slug danh mục</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">kích hoạt</th>
                            <th scope="col">quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($danhmuctruyen as $key => $danhmuc )
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <td>{{$danhmuc->tendanhmuc}}</td>
                                <td>{{$danhmuc->slug_danhmuc}}</td>
                                <td>{{$danhmuc->mota}}</td>
                                <td>
                                    @if($danhmuc->kichhoat==0)
                                        <span class="text text-success"> kích hoạt </span>
                                    @else
                                        <span class="text text-danger"> không kích hoạt </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('danhmuc.edit',[$danhmuc->id])}}" class="btn btn-primary">Edit</a>

                                    <form action="{{route('danhmuc.destroy',[$danhmuc->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('cạn có muốn xóa danh mục này không ?');" class="btn btn-danger">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
