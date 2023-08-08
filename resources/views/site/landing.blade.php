    <!-- Start Landing  -->
    <div class="landing">
        <div class="container">
            <div class="bubbles">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
            </div>
            <img src="{{asset('homeassets/imgs/Group 23.svg')}}" class="img-1" alt="">
            <img src="{{asset('homeassets/imgs/Path 13.svg')}}" class="img-2" alt="">
            <img src="{{asset('homeassets/imgs/Path 14.svg')}}" class="img-3" alt="">
            <div class="row align-items-center">
               
                <div class="col-lg-6 mb-4 text-center text-md-end">
                    <div id="featurs" class="text">
                        <h3>{{ $sliders->title }}</h3> 
                        <p class="text-black-50 fs-6">{!! $sliders->content !!}</p>
                            <a id="openBtnslider" class="btn btn-primary  main-btn" href="#overlay">اطلب مشروعك </a>
                            <a class="btn btn-primary  main-btn white" href="#">معرض اعمالنا </a>
                    </div>
                </div>
    
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="image position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('uploads/'.$sliders->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Landing  -->