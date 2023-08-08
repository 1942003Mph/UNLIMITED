<!-- Start Features  -->
<div class="features" id="features">
    <div class="container">
        <div class="main-title text-center">
            <h3>ما الذي يميزنا</h3>
            <p>هذا النصهو مثال لنصيمكن أن يستبدل في نفسالمساحة، لقد تم توليد هذا النصمن مولد النصالعربى</p>
        </div>
        <div class="row">
            @foreach ($featurs as $featur)
            <div class="col-lg-4 text-center shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <a href="#"><img src= "{{ asset('uploads/'.$featur->image) }}" alt=""></a>
                <h4> {{ $featur->title }}</h4>
                <p>{!!  $featur->description !!}</p>
            </div>  
            @endforeach
           
        </div>
    </div>
</div>
<!-- End Features  -->