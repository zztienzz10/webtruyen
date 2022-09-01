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
<<<<<<< HEAD
                </ul>
            </div>
=======

                    <div class="rating-widget">
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="review-widget">
                                    <a href="#">(1 Reviews)</a> <span>|</span>
                                    <a href="#">Write a review</a>
                                </div>
                            </div>
                </ul>
            </div>

>>>>>>> 57d6f25b3aceecf8fa89a2dfef87c351c59e3e5b
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
            
<<<<<<< HEAD
        </ul>
        <h4> Sách cùng danh mục</h4>
=======
            
        </ul>
        <hr>
        <div>
            <div class="review-wrapper">
                <h2 class="title-lg mb--20">Gửi đánh giá của bạn</h2>
                <div class="review-comment mb--20">
                    <div class="avatar">
                        <img src="" alt="">
                    </div>
                    <div class="text">
                        <div class="rating-block mb--15">
                            <span class="ion-android-star-outline star_on"></span>
                            <span class="ion-android-star-outline star_on"></span>
                            <span class="ion-android-star-outline star_on"></span>
                            <span class="ion-android-star-outline"></span>
                            <span class="ion-android-star-outline"></span>
                        </div>
                        <h6 class="author">Tiến<span class="font-weight-400"></span></h6>
                            <p>truyện hay </p>
                    </div>
                </div>
                <h2 class="title-lg mb--20 pt--15">Thêm bình luận</h2>
                <p> truyện hay </p>
                <div class="rating-row pt-2">
                    <p class="d-block">Đánh giá</p>
                    <span class="rating-widget-block">
                        <input type="radio" name="star" id="star1">
                        <label for="star1"></label>
                        <input type="radio" name="star" id="star2">
                        <label for="star2"></label>
                        <input type="radio" name="star" id="star3">
                        <label for="star3"></label>
                        <input type="radio" name="star" id="star4">
                        <label for="star4"></label>
                        <input type="radio" name="star" id="star5">
                        <label for="star5"></label>
                    </span>
                    <form action="" class="mt--15 site-form ">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message">Comment</label>
                                    <textarea name="message" id="message" cols="30" rows="10"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="submit-btn">
                                    <a href="#" class="btn btn-black">Post Comment</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <h4> Sách cùng thể loại</h4>
>>>>>>> 57d6f25b3aceecf8fa89a2dfef87c351c59e3e5b
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
<<<<<<< HEAD
        <h3>Sách hay xem nhiều</h3>
=======
        <h3></h3>
>>>>>>> 57d6f25b3aceecf8fa89a2dfef87c351c59e3e5b
    </div>
</div>
@endsection