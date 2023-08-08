<!-- End Works  -->
 <!-- Start Works  -->
 <div class="works">
    <div class="container">
        <div class="main-title text-center">
            <h3>اعمالنا</h3>
            <p>هذا النصهو مثال لنصيمكن أن يستبدل في نفسالمساحة، لقد تم توليد هذا النصمن مولد النصالعربى</p>
        </div>
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
        {{-- @dd($count) --}}
        
        
        {{-- @if($works[0]->id / 2 == 0) --}}
        
        <div class="row align-items-center">
            <div class="col-lg-5 ">
                <div class="image position-relative overflow-hidden">
                    <img class="img-fluid" src="{{  asset('public/'. $works[0]->image) }}" alt="">
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 mb-4 text-center text-md-end">
                <div class="text">
                    <h4>{{ $works[0]->titlework }}</h4>
                    <p class="text-black-50 fs-6"> {!! $works[0]->description !!}</p>
                        <a href="{{ $works[0]->likework }}">رابط العمل</a>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
        
     
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 text-center text-md-end">
                <div class="text">
                    <h4>تطبيق NOW  </h4>
                    <p class="text-black-50 fs-6"> هذا النصهو مثال لنصيمكن أن يستبدل في نفسالمساحة، لقد تم
                        توليد هذا النصمن مولد النصالعربى، حيث يمكنك أن تولد مثل هذا
                        النصأو العديد من النصوصالأخرى إضافة إلى زيادة عدد الحروف التى
                        يولدها التطبيق. هذا النصهو مثال لنصيمكن أن يستبدل في نفس
                        المساحة، لقد تم توليد هذا النصمن مولد النصالعربى، حيث يمكنك أن
                        تولد مثل هذا النصأو العديد من النصوصالأخرى إضافة إلى زيادة عدد
                        .الحروف التى يولدها التطبيق </p>
                        <a >رابط العمل </a>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="image position-relative overflow-hidden">
                    <img class="img-fluid" src="imgs/3.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
        
        
       
        
        
        
    </div>
</div>
<!-- End Works  -->