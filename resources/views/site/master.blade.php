<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unlimited</title>
    <link rel="stylesheet" href="{{asset('homeassets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('homeassets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('homeassets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('homeassets/css/whatsapp.css')}}">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>
    
<!-- Back to top button -->
@include('site.nave')
@include('site.landing',['sliders'=>$sliders])
@include('site.services',['services'=>$services])
<x-works />
@include('site.features',['featurs'=>$featurs])
@include('site.teams',['teams'=>$teams])
@include('site.contacte')
  
    
 
    <!-- Start Submit  -->
    <div class="submit">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <img src= "{{asset('homeassets/imgs/Unlimited Logo.png')}}" alt="">
                    <ul class="icon d-flex">
                        <li><a href="#">خدماتنا</a></li>
                        <li><a href="#">ما الذي يميزنا</a></li>
                        <li><a href="#">اعمالنا</a></li>
                        <li><a href="#">فريقنا</a></li>
                        <li><a href="#">تواصل معنا</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Submit  -->
    <!-- Whatsapp-popup -->
    <div class="icon-whats d-flex justify-content-between align-items-center" id="openPopupBtn">
        <i class="fa-brands fa-whatsapp"></i>
        <p>تحدث معي بالواتساب الان</p>
    </div>


<div id="contactPopup" style="width: 180px; display: none;">
  <div id="popupContent">
    <div class="card">
        <div class="card-title d-flex justify-content-between ">
            <div class="card-person d-flex align-items-center justify-content-between">
                <img src= "{{asset('homeassets/imgs/Personal.png')}}" alt="">
                <p>عز الدين</p>
            </div>
            <span id="closePopupBtn"><i class="fa-solid fa-xmark"></i></span>
        </div>
        <div class="card-message">
            <div class="message">
                <span>خلود</span>
                <p>اهلا بك في Unlimited <br>
                    معك عز الدين , بماذا يمكنني المساعدة؟</p>
                    <span>  12 : 12 pm</span>
            </div>
        </div>
        <div class="card-footer">
            <div class="foot d-flex align-items-center justify-content-around" id="openPopupBtn">
                <i class="fa-brands fa-whatsapp"></i>
                <p>تحدث معي بالواتساب الان</p>
            </div>
        </div>
    </div>
  </div>
</div>
    <!-- Whatsapp-popup -->
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">جميع الحقوق محفوظة</div>
                <div class="col-lg-6"></div>
                <div class="col-lg-3 d-flex justify-content-between align-items-center">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
        <!-- End Footer -->
        <!-- scroll to top  -->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
        <!-- scroll to top -->
        <!-- Whatsapp Contact  -->
        <!-- <div class="pop-whatsapp">
            <div class="show-whats">
                <i class="fa-brands fa-whatsapp" style="color: #000000;"></i>
                <span>هل لديك استفسار؟</span>
            </div>
            <div class="pop-whats"></div>
        </div> -->
        <!-- Whatsapp Contact  -->
    <script src="{{asset('homeassets/js/main.js')}}"></script>
    <script src="{{asset('homeassets/js/whats.js')}}"></script>
    <script src="{{asset('homeassets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('homeassets/js/all.min.js')}}"></script>
</body>
</html>