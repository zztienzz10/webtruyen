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
    <div class="col-md-12">
        <h1> Tên truyện: {{$chapter->truyen->tentruyen}}</h1>
        <h3>Chương hiện tại: {{$chapter->tieude}}</h3>

        <style type="text/css">
            .isDisabled{
                color: currentColor;
                pointer-events: none;
                opacity: 0.5;
                text-decoration: none;
            }
        </style>
    <div class="col-md-5">
        <div class="form-group">
            <label for="exampleInputEmail1">Chọn Chương</label>
            <p><a class="btn btn-primary {{$chapter->id==$min_id->id ? 'isDisabled':''}}" href="{{url('xem-chapter/'.$previous_chapter)}}">Tập trước</a></p>
<<<<<<< HEAD
            <select name="kichhoat" class="custom-select select-chapter">
=======
            <select name="kichhoat"  class="custom-select select-chapter">
>>>>>>> 57d6f25b3aceecf8fa89a2dfef87c351c59e3e5b
                @foreach($all_chapter as $key => $chap)
                <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                @endforeach
            </select>
            <p class="mt-4"><a class="btn btn-primary {{$chapter->id==$max_id->id ? 'isDisabled':''}}" href="{{url('xem-chapter/'.$next_chapter)}}">Tập sau</a></p>
        </div>
       
    </div>
    <div charset="utf-8" class="noidungchuong">
        {!!$chapter->noidung!!}

    </div>
        <h3> lưu và chia sẻ</h3>
            <a><i class="fab fa-facebook"></i></a>
            <a><i class="fab fa-twitter"></i></a>

            <div class="form-group">
            <label for="exampleInputEmail1">Chọn Chương</label>
            <p><a class="btn btn-primary {{$chapter->id==$min_id->id ? 'isDisabled':''}}" href="{{url('xem-chapter/'.$previous_chapter)}}">Tập trước</a></p>
            <select name="kichhoat" class="custom-select select-chapter">
                @foreach($all_chapter as $key => $chap)
                <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                @endforeach
            </select>
            <p class="mt-4"><a class="btn btn-primary {{$chapter->id==$max_id->id ? 'isDisabled':''}}" href="{{url('xem-chapter/'.$next_chapter)}}">Tập sau</a></p>
        </div>
    </div>
</div>
<<<<<<< HEAD
=======
<div>
            <div class="review-wrapper">
                <h2 class="title-lg mb--20">Gửi đánh giá của bạn</h2>
                <p></p>
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
>>>>>>> 57d6f25b3aceecf8fa89a2dfef87c351c59e3e5b
@endsection