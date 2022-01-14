<!-- <h3>HAY NÊN ĐỌC</h3>
<div class="owl-carousel owl-theme">
    <div class="item">
        <img src="{{asset('public/uploads/truyen/phi-loi-dao10.jpg')}}">
        <h4>phi lôi đạo</h4>
        <p><i class="fas fa-eye"></i>24342</p>
    </div>
    <div class="item">
        <img src="{{asset('public/uploads/truyen/phi-loi-dao10.jpg')}}">
        <h4>phi lôi đạo</h4>
        <p><i class="fas fa-eye"></i>24342</p>
    </div>
    <div class="item">
        <img src="{{asset('public/uploads/truyen/phi-loi-dao10.jpg')}}">
        <h4>phi lôi đạo</h4>
        <p><i class="fas fa-eye"></i>24342</p>
    </div>
    <div class="item">
        <img src="{{asset('public/uploads/truyen/phi-loi-dao10.jpg')}}">
        <h4>phi lôi đạo</h4>
        <p><i class="fas fa-eye"></i>24342</p>
    </div>
    <div class="item">
        <img src="{{asset('public/uploads/truyen/phi-loi-dao10.jpg')}}">
        <h4>phi lôi đạo</h4>
        <p><i class="fas fa-eye"></i>24342</p>
    </div>
</div> -->
<h3>HAY NÊN ĐỌC</h3>
            <style type="text/css">
                .item img {
                      
                        height: 230px;
                        border: 3px solid #000;
                        padding: 3px;
                    }
                    .card.mb-3.box-shadow img {
                         height: 230px;
                        border: 3px solid #000;
                        padding: 3px;
                }
            </style>
            <div class="owl-carousel owl-theme mb-5">

                @foreach($slide as $key => $value)

                    <div class="item">
                        
                        <img src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">

                        <h5>{{$value->tentruyen}}<br></h5>
                        <p><i class="fas fa-eye"></i>12432</p>
                             
                        <a class="btn btn-danger btn-sm"  href="{{url('xem-truyen/'.$value->slug_truyen)}}">Xem truyện</a>

                    </div>
                @endforeach
            </div>
            