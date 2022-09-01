@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">cập nhật truyện </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{route('truyen.update',[$truyen->id])}}" enctype='multipart/form-data' >
                        @method('PUT')
                        @csrf 
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Tên truyện</label>
                            <input type="text" class="form-control" value="{{$truyen->tentruyen}}" onkeyup="ChangeToSlug();" name="tentruyen" id="slug" aria-describedby="emailHelp" placeholder="Tên truyện...">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Tác giả</label>
                            <input type="text" class="form-control" value="{{$truyen->tacgia}}" name="tacgia" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tác giả...">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Slug truyện</label>
                            <input type="text" class="form-control" value="{{$truyen->slug_truyen}}" name="slug_truyen" id="convert_slug" aria-describedby="emailHelp" placeholder="slug truyện...">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> tóm tắt truyện</label>
                            <textarea name="tomtat" class="form-control" rows="5" style="resize: none;">{{$truyen->tomtat}} </textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Danh mục truyện</label>
                            <select name="danhmuc" class="custom-select">
                                @foreach($danhmuc as $key => $muc )
                                <option {{$muc->id==$truyen->danhmuc_id ? 'selected' : '' }} value="{{$muc->id}}"> {{$muc->tendanhmuc}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Hình ảnh truyện </label>
                            <input type="file" class="form-control-file" name="hinhanh" >
                            <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="200" width="100">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Kích hoạt</label>
                            <select name="kichhoat" class="custom-select">
                            @if($truyen->kichhoat == 0 )
                            <option selected value="0">Kích hoạt</option>
                            <option value="1">Không kích hoạt</option>
                            @else
                            <option value="0">Kích hoạt</option>
                            <option selected value="1">Kích hoạt</option>
                            @endif
                            </select>
                        </div>
                        <button type="submit" name="themtruyen" class="btn btn-primary">cập nhật</button>
                        </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection