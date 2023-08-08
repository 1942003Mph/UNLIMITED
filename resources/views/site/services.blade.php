  <!-- Strat Services  -->
  <div class="services">
    <div class="container">
        <div class="main-title text-center">
            <h3>خدماتنا</h3>
            <p>هذا النصهو مثال لنصيمكن أن يستبدل في نفسالمساحة، لقد تم توليد هذا النصمن مولد النصالعربى</p>
        </div>
        <div class="row">
        @foreach ($services as $servic)
            <div class="col-lg-3 col-md-6 text-center shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <div class="card-1">
                    <a href="#"><img src="{{ asset('uploads/'.$servic->image) }}" width="80" alt=""></a>
                    <a href="#"><h4>{{ $servic->titleserv }}</h4></a>
                    <p>{{ $servic->description }}</p>
                </div>
            </div>
         
        @endforeach
        
           
    </div> 
    </div>
</div>
<!-- End Services  -->