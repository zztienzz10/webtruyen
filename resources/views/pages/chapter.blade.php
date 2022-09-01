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
            <select name="kichhoat" class="custom-select select-chapter">
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
@endsection