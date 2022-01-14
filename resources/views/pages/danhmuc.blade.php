@extends('../layout')
{{-- @section('slide')
    @include('pages.slide')
@endsection --}}
@section('content')
<h3>Truyện mới cập nhật</h3>
<div class="album py-5 bg-light">
    <div class="container">
        
        <div class="row">
            @php
                $count = count($truyen);
            @endphp

            @if($count==0)
                <div class="col-md-12">
                    <div class="card mb-12 box-shadow">
                        <div class="card-body">
                            <p>Truyện đang cập nhật...</p>
                        </div>
                    </div>
                </div>
            @else

            @foreach($truyen as $key => $value)
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
        @endif
        </div>
            <a class="btn btn-success" href="">Xem tất cả</a>
    </div>
</div>


<!-----------------------truyện xem nhiều-------------->


   
@endsection