      
                    </li><!-- Start Team  -->
                    <div class="team">
                        <div class="container">
                            <div class="main-title text-center">
                                <h3>فريقنا المحترف</h3>
                                <p>هذا النصهو مثال لنصيمكن أن يستبدل في نفسالمساحة، لقد تم توليد هذا النصمن مولد النصالعربى</p>
                            </div>
                            <div class="row">
                                @foreach ($teams as $team)
                                <div class="col-lg-6 d-flex shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                                    <span>in</span>
                                    <div class="img">
                                        <img src= "{{ asset('uploads/'.$team->image) }}" alt="">
                                    </div>
                                    <div class="definition">
                                        <h4>{{ $team->name }}</h4>
                                        <h5>{{ $team->job }}</h4>
                                        <p>{!! $team->description !!}</p>
                                    </div>
                                </div>  
                                @endforeach
                                
                                {{-- <div class="col-lg-6 d-flex shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                                    <span>in</span>
                                    <div class="img">
                                        <img src= "{{asset('homeassets/imgs/Personal.png')}}" alt="">
                                    </div>
                                    <div class="definition">
                                        <h4>اسم الشخص</h4>
                                        <h5>الوظيفة</h4>
                                        <p>هذا النصهو مثال لنصيمكن أن يستبدل في نفسالمساحة، لقد تم توليد
                                            هذا النصمن مولد النصالعربى، حيث يمكنك أن تولد مثل هذا النص أو
                                            العديد من النصوصالأخرى إضافة إلى زيادة عدد الحروف التى يولدها</p>
                                    </div>
                                </div>                                --}}
                            </div>
                        </div>
                    </div>
                    <!-- End Team  -->
                   