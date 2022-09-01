@extends('../layout')
{{--@section('slide')
    @include('pages.slide')
@endsection--}}
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            @php 

            $mucluc = count($chapter);

            @endphp 
            <div class="col-md-3">
                <img class="card-img-top"  src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" >
            </div>
            <div class="col-md-9">
                <style class="text/css">
                    .infortruyen{
                        list-style: none;
                    }
                </style>
                <ul class="infortruyen">
                    <li>Tên truyện: {{$truyen->tentruyen}}</li>
                    <li>Tác giả:{{$truyen->tacgia}} </li>
                    <li>Danh mục truyện:<a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}" >{{$truyen->danhmuctruyen
                        ->tendanhmuc}}</a> </li>
                    <li>số chapter: {{$mucluc}}</li>
                    <li>số lượt xem: 1259</li>
                    <li><a href="#">Xem mục lục </a></li>
                    @if($chapter_dau)
                    <li><a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-primary">Đọc online</a></li>
                    @else
                    <li><a  class="btn btn-danger">chưa có Chương</a></li>
                    @endif
                </ul>
            </div>
        </div>
        
        <hr><a>Tóm tắt:</a>
        <div class="col-md-12">
            <p> {!!$truyen->tomtat!!} </p>
        </div>
        <hr>
        <h4> Mục lục</h4>
        <ul class="mucluctruyen">
            @php
                $mucluc = count($chapter);
                
            @endphp
            @if($mucluc > 0)
                @foreach($chapter as $key => $chap)
                <li><a href="{{url('xem-chapter/'.$chap->slug_chapter)}}" >{{$chap->tieude}}</a> </li>
                @endforeach
            @else
                <li>Hiện tại chưa có mục lục...</li>
            @endif
            
        </ul>
        <h4> Sách cùng danh mục</h4>
        <div class="row">
        @foreach($cungdanhmuc as $key => $value)
            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                    
                    <img class="card-img-top"  src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" >
                    <div class="card-body">
                        <h5>{{$value->tentruyen}}</h5>
                    <p class="card-text">{{$value->tomtat}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                            <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>123456</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                    </div>
                    
                </div>
            </div>
        @endforeach

        </div>
    </div>
    <div class="col-md-3">
        <h3>Sách hay xem nhiều</h3>
    </div>
</div>
@endsection