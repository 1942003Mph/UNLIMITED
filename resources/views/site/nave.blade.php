       <!-- Sart Navbar -->
       <nav class="navbar navbar-expand-lg sticky-top shadow-sm ">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('homeassets/imgs/Unlimited Logo.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main"
                aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="main">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mr-3 ">
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3 active"  aria-current="page" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3"  href="#features">ما الذي يميزنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3" href="#">العروض</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3" href="#connect">اتصل بنا</a>
                    </li>
                </ul>
                <div class="butt-nav">
                    <!-- Overlay -->
                    <div class="overlay" id="overlay"></div>
    
                    <button id="openBtn" class="btn btn-primary   main-btn">Open Popup</button>
                    <div id="overlay"></div>
                    <div id="popup">
                        <span id="closeBtn">&times;</span>
                        <!-- Your popup content goes here -->
                        <form id="openBtn" action="{{ route('contactus') }}" method="post">
                            @csrf
                            <h3  >اطلب مشروعك الآن</h3>
                            <div class="mb-2">
                                <label for="exampleFormControlInput1" class="form-label">الاسم بالكامل </label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                            </div>
                            <div class="mb-2">
                                <label for="exampleFormControlInput1" class="form-label">البريد الإلكتروني </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                            </div>
                            <div class="mb-2">
                                <label for="exampleFormControlInput1" class="form-label">رقم الهاتف </label>
                                <input type="tel" class="form-control" id="exampleFormControlInput1" name="phone">
                            </div>
                            <div class="mb-2">
                                <label for="exampleFormControlInput1" class="form-label">نوع الخدمة </label>
                                <select class="form-select" aria-label="Default select example" name="teypservices">
                                    <option selected>حدد نوع الخدمة</option>
                                    <option value="التصميم الجرافيكي">التصميم الجرافيكي</option>
                                    <option value="UXUI تصميم">تصميم UXUI</option>
                                    <option value="Front End">برمجة Front End</option>
                                    <option value="Back End">برمجة Back End</option>
                                    <option value="برمجة التطبيقات">برمجة التطبيقات</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="exampleFormControlTextarea1" class="form-label">ملاحظات </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comments"></textarea>
                            </div>
                            <div class="submit">
                                <button type="submit" class="btn btn-primary mb-3">ارسال </button>
                            </div> 
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>
        <!-- End Navbar -->