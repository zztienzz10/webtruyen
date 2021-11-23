@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm truyện </div>
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

                    <form method="POST" action="{{route('truyen.store')}}" >
                        @csrf 
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Tên truyện</label>
                            <input type="text" class="form-control" value="{{old('tentruyen')}}" name="tentruyen" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên truyện...">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Slug truyện</label>
                            <input type="text" class="form-control" value="{{old('slug_truyen')}}" name="slug_truyen" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="slug truyện...">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> tóm tắt truyện</label>
                            <textarea class="form-control"> </textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Danh mục truyện</label>
                            <select name="kichhoat" class="custom-select">
                                



                            
                                <option value="0">Kích hoạt</option>
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Kích hoạt</label>
                            <select name="kichhoat" class="custom-select">
                                <option value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            </select>
                        </div>
                        <button type="submit" name="themtruyen" class="btn btn-primary">Thêm</button>
                        </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
