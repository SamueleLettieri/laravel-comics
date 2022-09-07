@extends('layouts.main')

@section('main-content')
<section class="ms_background-blue p-5">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="mx-4 ms_font"><a class="ms_link" href="#"><img class="me-1 ms_img" src="{{asset('assets/buy-comics-digital-comics.png')}}" alt="">DIGITAL COMICS</a></div>
            <div class="mx-4 ms_font"><a class="ms_link" href="#"><img class="me-1 ms_img" src="{{asset('assets/buy-comics-merchandise.png')}}" alt="">DC MERCHANDISE</a></div>
            <div class="mx-4 ms_font"><a class="ms_link" href="#"><img class="me-1 ms_img" src="{{asset('assets/buy-comics-subscriptions.png')}}" alt="">SUBSCRIPTION</a></div>
            <div class="mx-4 ms_font"><a class="ms_link" href="#"><img class="me-1 ms_img-locator" src="{{asset('assets/buy-comics-shop-locator.png')}}" alt="">COMIC SHOP LOCATOR</a></div>
            <div class="ms-4 ms_font"><a class="ms_link" href="#"><img class="me-1 ms_img-locator" src="{{asset('assets/buy-dc-power-visa.svg')}}" alt="">DC POWER VISA</a></div>
        </div>
    </div>
</section>
<section class="ms_main">
    <div class="container">
            <div class="d-flex justify-content-between">
                <div class="w-50 p-5">
                    <div class="ms_d-flex-collum">
                        <h3 class="me-5">DC COMICS</h3>
                        <ul>
                            <li class="me-4"><a href="#">Characters</a></li>
                            <li class="me-4"><a href="#">Comics</a></li>
                            <li class="me-4"><a href="#">Movies</a></li>
                            <li class="me-4"><a href="#">TV</a></li>
                            <li class="me-4"><a href="#">Games</a></li>
                            <li class="me-4"><a href="#">Videos</a></li>
                            <li class="me-4"><a href="#">News</a></li>
                        </ul>
                        <h3 class="me-5">SHOP</h3>
                        <ul>
                            <li class="me-4"><a href="#">Shop DC</a></li>
                            <li class="me-4"><a href="#">Shop DC Collection</a></li>
                        </ul>
                        <h3 class="me-5">DC</h3>
                        <ul>
                            <li class="me-4"><a href="#">Terms Of Use</a></li>
                            <li class="me-4"><a href="#">Privacy Policy (New)</a></li>
                            <li class="me-4"><a href="#">Ad Choices</a></li>
                            <li class="me-4"><a href="#">Advertising</a></li>
                            <li class="me-4"><a href="#">Jobs</a></li>
                            <li class="me-4"><a href="#">Subscriptions</a></li>
                            <li class="me-4"><a href="#">Talent Workshops</a></li>
                            <li class="me-4"><a href="#">CPSC Certificates</a></li>
                            <li class="me-4"><a href="#">Raitings</a></li>
                            <li class="me-4"><a href="#">Shop Help</a></li>
                            <li class="me-4"><a href="#">Contact Us</a></li>
                        </ul>
                        <h3 class="me-5">SITES</h3>
                        <ul>
                            <li class="me-4"><a href="#">DC</a></li>
                            <li class="me-4"><a href="#">MAD Magazine</a></li>
                            <li class="me-4"><a href="#">DC Kids</a></li>
                            <li class="me-4"><a href="#">DC Universe</a></li>
                            <li class="me-4"><a href="#">DC Power Visa</a></li>
                        </ul>   
                    </div>
                </div>
                <div class="ms_img-Dc-box"><img class="ms_img-Dc" src="{{asset('assets/dc-logo-bg.png')}}" alt=""></div>
            </div>
        </div>
</section>
@endsection