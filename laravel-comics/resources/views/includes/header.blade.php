<header>
        <div class="p-2 ms_color_b text-end"><a class="ms_link" href="#"><div class="container"><span class="mx-2">DC POWER VISA®</span> <span class="mx-2">ADDITIONAL DC SITES▼</span></div></a></div>
        <div class="container">
            <div class="d-flex justify-content-between ">
                <div class=""><img src="{{asset('assets/dc-logo.png')}}" alt=""></div>
                <div>
                    <ul>
                        <li><a href="#">CHARACTERS</a></li>
                        <li class="active"><a class="ms_activ-link" href="#">COMICS</a></li>
                        <li><a href="#">MOVIES</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">GAMES</a></li>
                        <li><a href="#">COLLECTIBLES</a></li>
                        <li><a href="#">VIDEOS</a></li>
                        <li><a href="#">FANS</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">SHOP</a></li>
                    </ul>
                </div>
            </div>
        </div>    
        <section>
            <div class="ms_background-img">
                <img class="ms_background-img" src="{{asset('assets/jumbotron.jpg')}}" alt="">
            </div>  
            <div class="ms_background-color p-4">
                <div class="container">
                    <h3 class="ms_boxt-text">CURRENT SERIES</h3>
                    <div class="ms_box">
                        @foreach ($comics as $comic)
                        <div class="ms_margin">
                            <a href="">
                                <div><img class="ms_img" src="{{ $comic->image }}" alt=""></div>
                                <h5 class="ms_titolo">{{ $comic->title }}</h5>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="text-center"><a class="ms_boxt-text" href="#"><strong>LOAD MORE</strong> </a></div>
                </div>  
            </div>
        </section>
  </header>